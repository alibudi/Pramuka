<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller{
  function __construct() {

    parent::__construct();
    $this->load->model('modelLogin');

 }
  public function index(){
    $this->load->view('login');
  }
    function ceklogin(){
    if(isset($_POST['login'])){
      $user = $this->input->post('user',true);
      $pass = $this->input->post('pass',true);
      $cek = $this->modelLogin->proseslogin($user, $pass);
      $hasil = count($cek);
      if($hasil > 0){
        $yglogin = $this->db->get_where('tb_anggota',array('username'=>$user, 'password' => $pass))->row();
        $data = array('udhmasuk' => true,
            'nama' => $yglogin->nama, 'email' => $yglogin->email, 'username' => $yglogin->username);
        $this->session->set_userdata($data);
        if($yglogin->level == 'admin'){
          redirect('admin/dashboard');
        }elseif($yglogin->level == 'user'){
          redirect('user');
        }
      }else{
        redirect('index');
      }
    }
  }
  function keluar(){
    $this->session->sess_destroy();
    redirect('index');
  }
}