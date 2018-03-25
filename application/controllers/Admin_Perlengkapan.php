<?php

class Admin_Perlengkapan extends My_Controller
{
	public function index()
	{
		$this->data['title'] 	= 'Dashboard';
		$this->data['content']	= 'admin_perlengkapan/dashboard';
		$this->template($this->data);
	}

	public function barang_tersedia()
	{
		$this->data['title'] 	= 'Dashboard';
		$this->data['content']	= 'admin_perlengkapan/barang_tersedia';
		$this->template($this->data);
	}

	public function detail_barang()
	{
		$this->data['title'] 	= 'Dashboard';
		$this->data['content']	= 'admin_perlengkapan/detail_barang';
		$this->template($this->data);
	}

	public function barang_distribusi()
	{
		$this->data['title'] 	= 'Dashboard';
		$this->data['content']	= 'admin_perlengkapan/barang_distribusi';
		$this->template($this->data);
	}

	public function permintaan_barang()
	{
		$this->data['title'] 	= 'Dashboard';
		$this->data['content']	= 'admin_perlengkapan/permintaan_barang';
		$this->template($this->data);
	}
	
	public function pengembalian_barang()
	{
		$this->data['title'] 	= 'Dashboard';
		$this->data['content']	= 'admin_perlengkapan/pengembalian_barang';
		$this->template($this->data);
	}

	public function user()
	{
		$this->data['title'] 	= 'Dashboard';
		$this->data['content']	= 'admin_perlengkapan/user';
		$this->template($this->data);
	}

}