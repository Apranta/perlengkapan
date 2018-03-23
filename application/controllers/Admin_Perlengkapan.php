<?php

class Admin_Perlengkapan extends My_Controller
{
	public function __construct(){
		parent::__construct();
		$this->auth(1);
		$this->load->model(
			'Barang_m'
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
			// if(!$this->Barang_m->validate($check)){
			// 	$this->flashmsg('Data harus lengkap','warning');
			// 	redirect('admin-perlengkapan/list-barang');
			// 	exit;
			// }
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
