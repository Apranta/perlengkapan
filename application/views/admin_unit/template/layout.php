<?php

	$this->load->view('admin_unit/template/header', array('title' => $title));
	$this->load->view('admin_unit/template/sidebar');
	$this->load->view('admin_unit/template/navbar');
	$this->load->view($content);
	$this->load->view('admin_unit/template/footer');
?>
