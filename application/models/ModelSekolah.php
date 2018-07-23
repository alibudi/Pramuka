<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelSekolah extends CI_Model {

 public function getData(){
	$data = $this->db->get('tb_sekolah')->result();
	return $data;
 }
 public function getAnggota(){
/*	$this->db->select('*');
 	$this->db->from('tb_provinsi');
 	$this->db->join('tb_anggota','tb_anggota.id_anggota=tb_provinsi.id_provinsi');
 	$data = $this->db->get();
	return $data->result();*/
	$data = $this->db->get('tb_anggota')->result();
	return $data;
	/*$this->db->select('*');
 	$this->db->from('tb_sekolah');
 	$this->db->join('tb_anggota','tb_anggota.sekolah_id=tb_sekolah.id');

	$data = $this->db->get();
	return $data->result();*/
 }

 public function getPenghargaan(){
 	$this->db->select('*');
 	$this->db->from('tb_anggota');
 	$this->db->join('tb_penghargaan','tb_penghargaan.id_anggota=tb_anggota.id_anggota');

	$data = $this->db->get();
	return $data->result();
 	/*$data = $this->db->get('tb_penghargaan')->result();
 	return $data;*/
 }

 public function getKegiatan(){
 	$this->db->select('*');
 	$this->db->from('tb_anggota');
 	$this->db->join('tb_kegiatan','tb_kegiatan.id_anggota=tb_anggota.id_anggota');

	$data = $this->db->get();
	return $data->result();
	/*$data = $this->db->get('tb_kegiatan')->result();
	return $data;*/
 }	
 public function tampilAnggota(){
 	$this->db->select('nama_lengkap','id_anggota');
 	$this->db->from('tb_anggota');
 	$anggota = $this->db->get();
 	return $anggota->result();
 }
  public function addData($data){
 	$this->db->insert('tb_sekolah',$data);
 	$cek = $this->db->affected_rows();
 	return $cek > 0 ? true : false;
 }
  
  public function addAnggota($data){
 	$this->db->insert('tb_anggota',$data);
 	$cek = $this->db->affected_rows();
 	return $cek > 0 ? true : false;
 }
 public function addKegiatann($data){
 	$this->db->insert('tb_kegiatan',$data);
 	$cek = $this->db->affected_rows();
 	return $cek > 0 ? true : false;
 }

 public function addPenghargaan($data){
 $this->db->insert('tb_penghargaan',$data);
 $cek = $this->db->affected_rows();
 return $cek > 0 ? true : false;
 }

 public function check_data($id){
 	$this->db->where('id',$id);
 	$this->db->from('tb_sekolah');
 	$query = $this->db->get();
 	if ($query->num_rows() >0) {
 		return $query->result();
 	}else{
 		return $query->result();
 	}
 }

 public function check_anggota($id){
 	$this->db->where('id',$id);
 	$this->db->from('tb_anggota');
 	$query = $this->db->get();
 	if ($query->num_rows() >0) {
 		return $query->result();
 	}else{
 		return $query->result();
 	}
 }

  public function getDataById($id){
 	$this->db->where('id',$id);
 	$data = $this->db->get('tb_sekolah')->row();
 	return $data;
 }

  public function getDataByAnggota($id){
 	$this->db->where('id_anggota',$id);
 	$data = $this->db->get('tb_anggota')->row();
 	return $data;
 }
 public function getDataByKegiatan($id){
 	$this->db->where('id_kegiatan',$id);
 	$data = $this->db->get('tb_kegiatan')->row();
 	return $data;
 }

 public function getDataByPenghargaan($id){
 	$this->db->where('id_penghargaan',$id);
 	$data = $this->db->get('tb_penghargaan')->row();
 	return $data;
 }

 public function updateData($id,$data){
 	$this->db->where('id',$id);
 	$this->db->update('tb_sekolah',$data);
 	$cek = $this->db->affected_rows();
 	return $cek >0 ? true : false;
 }


 public function updateAnggota($id,$data){
 	$this->db->where('id_anggota',$id);
 	$this->db->update('tb_anggota',$data);
 	$cek = $this->db->affected_rows();
 	return $cek >0 ? true : false;
 }

 public function updateKegiatan($id,$data){
 	$this->db->where('id_kegiatan',$id);
 	$this->db->update('tb_kegiatan',$data);
 	$cek = $this->db->affected_rows();
 	return $cek >0 ? true : false;
 }

 public function updatePenghargaan($id,$data){
 	$this->db->where('id_penghargaan',$id);
 	$this->db->update('tb_penghargaan',$data);
 	$cek = $this->db->affected_rows();
 	return $cek >0 ? true : false;
 }

 public function deleteData($id){
	$this->db->where('id',$id);
	$cek = $this->db->delete('tb_sekolah');
		if($cek){
			return true;
		} else{
			return false;
		}
	}
	 public function deleteAnggota($id){
	$this->db->where('id_anggota',$id);
	$cek = $this->db->delete('tb_anggota');
		if($cek){
			return true;
		} else{
			return false;
		}
	}
	 public function deleteKegiatan($id){
	$this->db->where('id_kegiatan',$id);
	$cek = $this->db->delete('tb_kegiatan');
		if($cek){
			return true;
		} else{
			return false;
		}
	}

	 public function deletePenghargaan($id){
	$this->db->where('id_penghargaan',$id);
	$cek = $this->db->delete('tb_penghargaan');
		if($cek){
			return true;
		} else{
			return false;
		}
	}
}

/* End of file ModelTulis.php */
/* Location: ./application/models/ModelTulis.php */