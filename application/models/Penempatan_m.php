<?php defined('BASEPATH') || exit('No direct script allowed');

class Penempatan_m extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->data['table_name']  = 'penempatan';
		$this->data['primary_key'] = 'id_penempatan';
	}

	public function cek_stok($idbarang,$alokasi=0){
		$this->load->model('Barang_m');
		$permintaan = $this->SUM(['id_barang' => $idbarang,'disetujui' => 1],'alokasi');
		if(isset($permintaan)){
			$stok = $this->Barang_m->get_row(['id_barang' => $idbarang ])->jumlah_barang;
			if ($permintaan[0]->alokasi >= $stok) {
				return false;
			}
			if ($stok < $alokasi) {
				return false;
			}
		}
		return true;
	}
}
