<?php

	$this->load->view('admin_perlengkapan/template/header', array('title' => $title));
	$this->load->view('admin_perlengkapan/template/sidebar');
	$this->load->view('admin_perlengkapan/template/navbar');
	$this->load->view($content);
	$this->load->view('admin_perlengkapan/template/footer');
?>
