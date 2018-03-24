<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller
{

	private $data = [];

	public function __construct()
	{
		parent::__construct();
		$this->data['username'] = $this->session->userdata('username');
		if (isset($this->data['username']))
		{
			$this->data['id_role'] = $this->session->userdata('id_role');
			switch ($this->data['id_role'])
			{
				case 1:
					redirect('admin-perlengkapan');
					exit;
				case 2:
					redirect('admin-unit');
					exit;
				case 3:
					redirect('admin-gudang');
					exit;
			}
		}
	}

	public function index()
	{
		if ($this->POST('login'))
		{
			$this->load->model('User_m');
			if (!$this->User_m->required_input(['username','password']))
			{
				$this->flashmsg('Data harus lengkap','warning');
				redirect('login');
				exit;
			}

			$this->data = [
				'username'	=> $this->POST('username'),
				'password'	=> md5($this->POST('password'))
			];

			$result = $this->User_m->login($this->data['username'], $this->data['password']);
			if (!isset($result))
			{
				$this->flashmsg('username atau password salah','danger');
			}

			//$this->dump($result);
			redirect('login');
			exit;
		}

		$this->data['title'] = 'LOGIN' . $this->title;
		$this->load->view('login', $this->data);
	}
}
