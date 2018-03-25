<?php

class Admin_Unit extends My_Controller
{
	public function index()
	{
		$this->data['title'] 	= 'Dashboard';
		$this->data['content']	= 'admin_unit/dashboard';
		$this->template($this->data);
	}

	public function barang_distribusi()
	{
		$this->data['title'] 	= 'Dashboard';
		$this->data['content']	= 'admin_unit/barang_distribusi';
		$this->template($this->data);
	}

	public function permintaan_barang()
	{
		$this->data['title'] 	= 'Dashboard';
		$this->data['content']	= 'admin_unit/permintaan_barang';
		$this->template($this->data);
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
}