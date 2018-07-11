<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Produk_model extends CI_Model {

	public function get_produk()
	{
		$query = $this->db->get('tb_sekolah');
		return $query->result_array();
	}

	public function get_excel()
	{
		return $this->db->get('tb_sekolah');
	}
}
?>