<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller
{

	private $data = [];

	public function __construct()
	{
		parent::__construct();
		// $this->data['id_user'] = $this->session->userdata('id_user');
		// if (isset($this->data['id_user']))
		// {
		// 	$this->data['id_role'] = $this->session->userdata('id_role');
		// 	switch ($this->data['id_role'])
		// 	{
		// 		case 9:
		// 			redirect('admin');
		// 			exit;
		// 		case 1:
		// 			redirect('rektorat');
		// 			exit;
		// 		case 2:
		// 			redirect('fakultas');
		// 			exit;
		// 		case 3:
		// 			redirect('prodi');
		// 			exit;
		// 		// case 4:
		// 		// 	redirect('universitas');
		// 		// 	exit;
		// 	}
		// }
	}

	public function index()
	{
		if ($this->POST('login'))
		{
			$this->load->model('login_m');
			// if (!$this->login_m->required_input(['username','password'])) 
			// {
			// 	$this->flashmsg('Data harus lengkap','warning');
			// 	redirect('login');
			// 	exit;
			// }
			
			$this->data = [
				'username'	=> $this->POST('username'),
				'password'	=> md5($this->POST('password'))
			];
			// print_r($this->data);exit;
			$result = $this->login_m->login($this->data['username'], $this->data['password']);
			if (!isset($result)) 
			{
				$this->flashmsg('username atau password salah','danger');
			}
			
			redirect('login');
			exit;
		}
		
		$this->data['title'] = 'LOGIN' . $this->title;
		$this->load->view('login', $this->data);
	}
}
