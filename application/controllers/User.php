<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller{
 function __construct() {

    parent::__construct();
    $this->load->library('Pdf');
    $this->load->model('modelAnggota');
    $this->load->model('modelSekolah');
     $this->load->model('modelProfil');
    $this->load->model('modelUser');
 /*   if (empty($this->session->userdata('id_pengguna'))) {
    redirect(base_url("login"));
    }*/
 }
	public function index(){
		$data['main'] = 'user/user_dashboard';
		$this->load->view('template/template',$data);
	}

	 public function profil()
    {    $data['anggota'] = $this->modelSekolah->getAnggota();
        /*$data['anggota'] = $this->modelProfil->getProfil();*/
        $data['main'] = 'user/edit_profil';
       $this->load->view('template/template',$data);
    }

    public function editProfil($id=null){
       $data['anggota'] = $this->modelSekolah->getDataByAnggota($id);
   /*$data['anggota'] = $this->modelProfil->getDataByProfil($id);*/
      $data['main'] = 'user/edit_profil';
      $this->load->view('template/template',$data);
      if ($id==null) {
        $this->session->set_flashdata('info','Id makanan tidak boleh kosong!');
        redirect('user/profil','refresh');
      }

      if($this->input->post('submit')==true){
      $this->form_validation->set_rules('nama_lengkap', 'Nama ','trim|required');
     $this->form_validation->set_rules('username', 'Username','trim|required');
     $this->form_validation->set_rules('password', 'Password','trim|required');
    if ($this->form_validation->run() == TRUE) {
      $data = array(
         'nama_lengkap' => $this->input->post('nama_lengkap'),
        'username' => $this->input->post('username'),
        'password' => $this->input->post('password')
        );

    $sql = $this->modelProfil->updateProfil($id,$data);
    if ($sql) {
      $this->session->set_flashdata('info', 'Edit Data sukses');
      redirect('user/profil','refresh');
    }else{
      $this->session->set_flashdata('info', 'Edit Data gagal');
      redirect('admin/editProfil'.$id,'refresh');
    } 
    
    }

  }
}

    public function print()
    {
        $data['main'] = 'user/print_data_diri';
     $this->load->view('template/template',$data);
    }

    public function keahlian()
    {
        $data['main'] = 'user/riwayat_keahlian';
    $this->load->view('template/template',$data);
    }

    public function upload_keahlian()
    {
        $data['main'] = 'user/upload_keahlian';
        $this->load->view('template/template',$data);
    }

    public function kegiatan()
    {
        $data['main'] = 'user/riwayat_kegiatan';
       $this->load->view('template/template',$data);
    }

    public function upload_kegiatan()
    {
        $data['main'] = 'user/upload_kegiatan';
       $this->load->view('template/template',$data);
    }

    public function penghargaan()
    {
        $data['main'] = 'user/riwayat_penghargaan';
        $this->load->view('template/template',$data);
    }

    public function upload_penghargaan()
    {
        $data['main'] = 'user/upload_penghargaan';
        $this->load->view('template/template',$data);
    }

    public function tugas()
    {
        $data['main'] = 'user/riwayat_tugas';
      $this->load->view('template/template',$data);
}
    public function upload_tugas()
    {
        $data['main'] = 'user/upload_tugas';
     $this->load->view('template/template',$data);
    }

}