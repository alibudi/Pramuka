<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
  class ModelProfil extends CI_Model {

  	public function getProfil(){
	$data = $this->db->get('tb_anggota')->result();
	return $data;
 }
  public function getDataByProfil($id){
 	$this->db->where('id_anggota',$id);
 	$data = $this->db->get('tb_anggota')->row();
 	return $data;
 }

 public function updateProfil($id,$data){
 	$this->db->where('id_anggota',$id);
 	$this->db->update('tb_anggota',$data);
 	$cek = $this->db->affected_rows();
 	return $cek >0 ? true : false;
 }
}

