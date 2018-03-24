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

	public function permintaan_barang()
	{
		if ($this->POST('tambah')) {
			$data_permintaan = [
				'id_barang' => $this->POST('id_barang'),
				'id_ruangan' => $this->POST('id_ruangan'),
				'alokasi' => $this->POST('alokasi')
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

	public function detail_barang()
	{
		$this->data['title'] 	= 'Dashboard';
		$this->data['content']	= 'admin_unit/detail_barang';
		$this->template($this->data);
	}
}
