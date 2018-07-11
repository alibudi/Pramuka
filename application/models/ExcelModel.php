<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExcelModel extends CI_Model {
  public function view(){
    return $this->db->get('tb_kegiatan')->result(); // Tampilkan semua data yang ada di tabel siswa
  }
}
