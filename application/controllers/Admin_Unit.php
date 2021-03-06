<?php

class Admin_Unit extends My_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->auth(2);
		$this->load->model(
		[
			'Admin_unit_m',
			'Penempatan_m',
			'Ruangan_m',
			'Barang_m'
		]
		);
		$this->data['admin_data'] = $this->Admin_unit_m->get_row(['username' => $this->data['username']]);
	}

	public function index()
	{
		$this->data['title'] 	= 'Dashboard'.$this->title;
		$this->data['content']	= 'admin_unit/dashboard';
		$this->template($this->data,'admin_unit');
	}

	public function barang_distribusi()
	{
		$this->data['title'] 	= 'Dashboard';
		$this->data['content']	= 'admin_unit/barang_distribusi';
		$this->template($this->data);
	}

	public function permintaan_barang()
	{
		if ($this->POST('diterima')) {
			return $this->Penempatan_m->update($this->POST('id'),['barang_sampai' => 1,'keterangan_status' => 'Barang diterima']);
			//exit;
		}
		if ($this->POST('tambah')) {
			if (!$this->Penempatan_m->cek_stok($this->POST('id_barang'),$this->POST('alokasi'))) {
				$this->flashmsg('Permintaan melebihi jumlah barang yang tersedia','danger');
				redirect('admin-unit/permintaan-barang');
				exit;
			}
			$data_permintaan = [
				'id_barang' => $this->POST('id_barang'),
				'id_ruangan' => $this->POST('id_ruangan'),
				'alokasi' => $this->POST('alokasi'),
				'adm_unit' => $this->data['admin_data']->username
			];
			$this->Penempatan_m->insert($data_permintaan);
			$this->flashmsg('Permintaan tersimpan, menunggu konfirmasi');
			redirect('admin-unit/permintaan-barang');
			//$this->dump($data_permintaan);
			exit;
		}
		$tables = ['ruangan','barang']; $jcond = ['id_ruangan','id_barang'];
		$this->data['data'] = $this->Penempatan_m->getDataJoin($tables,$jcond);
		//$this->dump($this->data['data']);
		$this->data['barang'] = $this->Barang_m->get();
		$this->data['ruangan'] = $this->Ruangan_m->get();
		$this->data['title'] 	= 'Dashboard';
		$this->data['content']	= 'admin_unit/permintaan_barang';
		$this->template($this->data,'admin_unit');
	}

	public function pengembalian_barang()
	{
		$this->data['title'] 	= 'Dashboard';
		$this->data['content']	= 'admin_unit/pengembalian_barang';
		$this->template($this->data);
	}

	public function penempatan_barang()
	{
		$this->data['title'] 	= 'Dashboard';
		$this->data['content']	= 'admin_unit/penempatan_barang';
		$this->template($this->data);
	}

	public function tempat()
	{
		$this->data['title'] 	= 'Dashboard';
		$this->data['content']	= 'admin_unit/tempat';
		$this->template($this->data);
	}

	public function functiontest()
	{
		$data = $this->Penempatan_m->cek_stok(2,1);
		$this->dump($data);
	}
}
