<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
  class ModelProfil extends CI_Model {

  	public function getProfil($id_anggota){
  	$this->db->select('*');
  	$this->db->from('tb_anggota');
  	$this->db->where('id_anggota', $id_anggota);
  $data =	$this->db->get();
  	return $data->result();
  	/*$this->db->where('id_anggota');*/
	
	/*$data = $this->db->get('tb_anggota')->result();
	return $data;*/
 }

 public function getNama($id_anggota){
  $this->db->select('nama_lengkap');
  $this->db->from('tb_anggota');
  $this->db->where('id_anggota',$id_anggota);
  $data = $this->db->get();
  return $data->result();
 }

  public function getPrint($id_anggota){
  $this->db->select('*');
  $this->db->from('tb_provinsi','tb_kabupaten','tb_kecamatan');
  $this->db->join('tb_anggota','tb_anggota.id_provinsi=tb_provinsi.id_provinsi','tb_anggota.id_kabupaten=tb_kabupaten.id_kabupaten','tb_anggota.id_kecamatan=tb_kecamatan.id_kecamatan');
  $this->db->where('id_anggota',$id_anggota);
  $data = $this->db->get();
  return $data->result();
  }
  public function getDataByProfil($id_anggota){
 	$this->db->where('id_anggota',$id_anggota);
 	$data = $this->db->get('tb_anggota')->row();
 	return $data;
 }

 public function updateProfil($id,$data){
 	$this->db->where('id_anggota',$id);
 	$this->db->update('tb_anggota',$data);
 	$cek = $this->db->affected_rows();
 	return $cek >0 ? true : false;
 }

	public function getK($id_anggota){
  	$this->db->select('*');
  	$this->db->from('tb_kegiatan');
  	$this->db->where('id_anggota', $id_anggota);
  $data =	$this->db->get();
  	return $data->result();
  }
public function getP($id_anggota){
  	$this->db->select('*');
  	$this->db->from('tb_penghargaan');
  	$this->db->where('id_anggota', $id_anggota);
  $data =	$this->db->get();
  	return $data->result();
  }
  public function getRiwayatK(){
 	$this->db->select('tb_anggota.id_anggota,tb_kegiatan.id_kegiatan,tb_kegiatan.nama_kegiatan,tb_kegiatan.tgl_kegiatan,tb_kegiatan.rincian');
 	$this->db->from('tb_anggota');
 	$this->db->join('tb_kegiatan','id_anggota','tb_anggota','id_anggota');
	$data = $this->db->get();
	return $data->result();
 }	
}

