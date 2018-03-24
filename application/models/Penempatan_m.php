<?php defined('BASEPATH') || exit('No direct script allowed');

class Penempatan_m extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->data['table_name']  = 'penempatan';
		$this->data['primary_key'] = 'id_penempatan';
	}
}
