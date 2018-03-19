<?php

class Admin_Perlengkapan extends My_Controller
{
	public function index()
	{
		$this->data['title'] 	= 'Dashboard';
		$this->data['content']	= 'admin_perlengkapan/dashboard';
		$this->template($this->data);
	}

	public function list_barang()
	{
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