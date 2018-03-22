<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller
{
  public $title = ' | Perlengkapan';
	
  public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
	}

	public function auth($role){
		$this->data['username'] 	= $this->session->userdata('username');
		$this->data['role']	= $this->session->userdata('role');
		if (!isset($this->data['username'], $this->data['role']) || $this->data['role'] != $role )
		{
			$this->logout();
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
		exit;
	}

	public function template($data,$role='admin_perlengkapan')
	{
		return $this->load->view($role.'/template/layout', $data);
	}

	public function POST($name)
	{
		return $this->input->post($name);
	}

	public function flashmsg($msg, $type = 'success',$name='msg')
	{
		return $this->session->set_flashdata($name, '<div class="alert alert-'.$type.' alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$msg.'</div>');
	}

	public function JSON($value)
	{
		# code...
		echo "<pre>" . json_encode($value,JSON_PRETTY_PRINT) . "</pre>"; 
	}
	public function fakultas()
	{
		$this->load->model('Fakultas_m');
		$data = $this->Fakultas_m->get();
		echo json_encode($data);
		exit;
	}

	public function prodi()
	{	
		$id = $this->POST('id');
		$this->load->model('Program_studi_m');
		$data = $this->Program_studi_m->get(['id_fakultas' => $id]);
		echo json_encode($data);
		exit;
	}


	public function upload($id, $directory, $tag_name = 'userfile')
	{
		if ($_FILES[$tag_name])
		{
			$upload_path = realpath(APPPATH . '../assets/' . $directory . '/');
			@unlink($upload_path . '/' . $id . '.pdf');
			$config = [
				'file_name' 		=> $id . '.pdf',
				'allowed_types'		=> 'pdf',
				'upload_path'		=> $upload_path
			];
			$this->load->library('upload');
			$this->upload->initialize($config);
			return $this->upload->do_upload($tag_name);
		}
		return FALSE;
	}

	public function dump($var)
	{
		echo '<pre>';
		var_dump($var);
		echo '</pre>';
	}
}
