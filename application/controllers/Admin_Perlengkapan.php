<?php

class Admin_Perlengkapan extends My_Controller
{
	public function __construct(){
		parent::__construct();
		$this->auth(1);
		$this->load->model(
		[
			'Admin_unit_m',
			'Penempatan_m',
			'Ruangan_m',
			'Barang_m',
			'Admin_unit_m'
		]
		);
	}
	public function index()
	{
		$this->data['title'] 	= 'Dashboard';
		$this->data['content']	= 'admin_perlengkapan/dashboard';
		$this->template($this->data);
	}

	public function list_barang()
	{
		if ($this->POST('simpan')) {
			$check = ['nama_barang','jumlah_barang'];
			$data = [
				'nama_barang' => $this->POST('nama_barang'),
				'keterangan' => $this->POST('keterangan'),
				'jumlah_barang' => $this->POST('jumlah_barang')
			];
			$this->Barang_m->insert($data);
			$this->flashmsg('Input barang berhasil','success');
			redirect('admin-perlengkapan/list-barang','refresh');
			exit;
		}
		$this->data['data'] = $this->Barang_m->get();
		$this->data['title'] 	= 'Dashboard';
		$this->data['content']	= 'admin_perlengkapan/list_barang';
		$this->template($this->data);
	}

	public function penempatan_barang()
	{
		if ($this->POST('setuju')) {
			$permintaan = $this->Penempatan_m->get_row(['id_penempatan' => $this->POST('id')]);
			if (!$this->Penempatan_m->cek_stok($permintaan->id_barang,$permintaan->alokasi)) {
				$this->flashmsg('Jumlah barang tersedia tidak mencukupi','danger');
				exit;
			}
			$this->flashmsg('Permintaan disetujui');
			return $this->Penempatan_m->update($this->POST('id'),['disetujui' => 1,'keterangan_status' => 'Proses pengiriman']);
		}
		if ($this->POST('batal')) {
			$this->flashmsg('Permintaan dibatalkan','warning');
			return $this->Penempatan_m->update($this->POST('id'),['disetujui' => 2,'keterangan_status' => 'Dibatalkan']);
		}

		$tables = ['ruangan','barang']; $jcond = ['id_ruangan','id_barang'];
		$this->data['data'] = $this->Penempatan_m->getDataJoin($tables,$jcond,NULL,$order_by='disetujui',$order='asc');
		//$this->dump($this->data['data']);
		$this->data['barang'] = $this->Barang_m->get();
		$this->data['ruangan'] = $this->Ruangan_m->get();

		$this->data['title'] 	= 'Dashboard';
		$this->data['content']	= 'admin_perlengkapan/penempatan_barang';
		$this->template($this->data);
	}

	public function perbaikan_barang()
	{
		$this->data['title'] 	= 'Dashboard';
		$this->data['content']	= 'admin_perlengkapan/perbaikan_barang';
		$this->template($this->data);
	}

	public function status_barang()
	{
		$this->data['title'] 	= 'Dashboard';
		$this->data['content']	= 'admin_perlengkapan/status_barang';
		$this->template($this->data);
	}

	public function detail_barang()
	{
		$this->data['title'] 	= 'Dashboard';
		$this->data['content']	= 'admin_perlengkapan/detail_barang';
		$this->template($this->data);
	}
}
