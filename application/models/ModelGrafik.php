<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelGrafik extends CI_Model{
 
    function getGrafik(){
        $query = $this->db->query("SELECT nama_lengkap,SUM(jk) AS jk FROM tb_anggota GROUP BY nama_lengkap");
          
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
/*  public function getGrafik(){
	$data = $this->db->get('tb_anggota')->result();
	return $data;
 }*/
}