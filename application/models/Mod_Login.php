<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
  
  class Mod_Login extends CI_Model {
 
     public  function ceklogin($user, $pass) {
        $this->db->where("username", $user);
        $this->db->where("password", $pass);
        return $this->db->get("tb_anggota")->row();
      }
/*  	function login($user,$pass){
  	
  	$this->db->select('username,password,level');
  	$this->db->from('tb_anggota');
  	$this->db->where("username",$user)
  	$this->db->where("password",$pass)
  	$this->db->limit(1);

  	$query = $thi->db->get();

  	if ($query->num_rows()==1) {
  		return $query->result();
  	}else{
  		return false;
  	}
  	}
*/
  }
