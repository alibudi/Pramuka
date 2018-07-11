<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller{
 function __construct() {

    parent::__construct();
    $this->load->library('Pdf');
    $this->load->model('modelAnggota');
    $this->load->model('modelSekolah');
    $this->load->model('modelUser');
    $this->load->model('modelGrafik');
 /*   if (empty($this->session->userdata('id_pengguna'))) {
    redirect(base_url("login"));
    }*/
 }

    public function index()
    {
        $data['main'] = 'admin/dashboard';
        $this->load->view('partial/partial', $data);
    }
    public function dashboard()
    {  /* $data['grafik'] = $this->modelGrafik->getGrafik();*/
        $data['main'] = 'admin/dashboard';
        $this->load->view('partial/partial', $data);
    }
   
    public function add_anggota()
    {
       $data['kecamatan'] = $this->modelAnggota->get_kecamatan(); 
        $data['kabupaten'] = $this->modelAnggota->get_kabupaten();     
        $data['provinsi'] = $this->modelAnggota->get_provinsi();
        $data['main'] = 'admin/add_anggota';
        $this->load->view('partial/partial', $data);
    }
     public function addAnggota(){

     $this->form_validation->set_rules('nama_lengkap', 'Nama ','trim|required');
     $this->form_validation->set_rules('username', 'Username','trim|required');
     $this->form_validation->set_rules('alamat', 'Alamat','trim|required');
     $this->form_validation->set_rules('password', 'Password','trim|required');

    if ($this->form_validation->run() == TRUE) {
      $data = array(
        'nama_lengkap' => $this->input->post('nama_lengkap'),
        'username' => $this->input->post('username'),
        'tgl_lahir' => $this->input->post('tgl_lahir'),
        'jk' => $this->input->post('jk'),
        'agama' => $this->input->post('agama'),
        'gol_darah' => $this->input->post('gol_darah'),
        'alamat' => $this->input->post('alamat'),
        'id_provinsi' =>$this->input->post('nama_provinsi'),
        'id_kabupaten' => $this->input->post('nama_kabupaten'),
        'id_kecamatan' => $this->input->post('nama_kecamatan'),
        'password' => $this->input->post('password'),
        'level' => $this->input->post('level'),
        'sekolah_id' => $this->input->post('sekolah_id'),
        'tkt_pendidikan' => $this->input->post('tkt_pendidikan')
        );
      /* $unique = $this->db->where('nama_lengkap',$data['nama_lengkap'])->get('tb_anggota');
         if ($unique) {
         $this->session->set_flashdata('info', 'Nama  Sudah ada');
           redirect('admin/data_anggota','refresh');
         }*/
    $cek = $this->modelSekolah->addAnggota($data);
    if ($cek) {
      $this->session->set_flashdata('info', 'Tambah Data sukses');
      redirect('admin/data_anggota','refresh');
    }else{
      $this->session->set_flashdata('info', 'Tambah Data Gagal');
      redirect('admin/add_anggota','refresh');
    } 
    }else{
      $this->session->set_flashdata('info', 'Tambah Data Gagal');
      redirect('admin/add_anggota','refresh');
      }
}

   public function editAnggota($id=null){
   $data['anggota'] = $this->modelSekolah->getDataByAnggota($id);
      $data['main'] = 'admin/edit_anggota';
      $this->load->view('partial/partial',$data);
      if ($id==null) {
        $this->session->set_flashdata('info','Id makanan tidak boleh kosong!');
        redirect('admin/data_anggota','refresh');
      }

      if($this->input->post('submit')==true){
      $this->form_validation->set_rules('nama_lengkap', 'Nama ','trim|required');
     $this->form_validation->set_rules('username', 'Username','trim|required');
     $this->form_validation->set_rules('alamat', 'Alamat','trim|required');
     $this->form_validation->set_rules('password', 'Password','trim|required');
    if ($this->form_validation->run() == TRUE) {
      $data = array(
         'nama_lengkap' => $this->input->post('nama_lengkap'),
        'username' => $this->input->post('username'),
        'tgl_lahir' => $this->input->post('tgl_lahir'),
        'jk' => $this->input->post('jk'),
        'agama' => $this->input->post('agama'),
        'gol_darah' => $this->input->post('gol_darah'),
        'alamat' => $this->input->post('alamat'),
        'password' => $this->input->post('password'),
        'level' => $this->input->post('level'),
        'sekolah_id' => $this->input->post('sekolah_id'),
        'tkt_pendidikan' => $this->input->post('tkt_pendidikan')
        );

    $sql = $this->modelSekolah->updateAnggota($id,$data);
    if ($sql) {
      $this->session->set_flashdata('info', 'Edit Data sukses');
      redirect('admin/data_anggota','refresh');
    }else{
      $this->session->set_flashdata('info', 'Edit Data gagal');
      redirect('admin/editAnggota'.$id,'refresh');
    } 
    
    }

  }
}
public function deleteAnggota($id=null){
    if($id==null){
      $this->session->set_flashdata('info', 'Gagal Hapus Data!');
      redirect('admin/data_anggota','refresh');
    }
    $cek = $this->modelSekolah->deleteAnggota($id);
    if($cek){
      $this->session->set_flashdata('info', 'Sukses Hapus Data ');
      redirect('admin/data_anggota','refresh');
    } else{
      $this->session->set_flashdata('info', 'Gagal Hapus Data ');
      redirect('admin/data_anggota','refresh');
    }
}
 

    public function data_anggota()
    {
         $data['anggota'] = $this->modelSekolah->getAnggota();
        $data['main'] = 'admin/data_anggota';
        $this->load->view('partial/partial', $data);
    }

     public function data_sekolah()
    {
       $data['sekolah'] = $this->modelSekolah->getData();
        $data['main'] = 'admin/data_sekolah';
        $this->load->view('partial/partial', $data);
    }

  public function add_sekolah(){
    $data['sekolah'] = $this->modelSekolah->getData();
    $data['main'] = 'admin/add_sekolah';
    $this->load->view('partial/partial',$data);
}
 public function addSekolah(){
     $this->form_validation->set_rules('nama_sekolah', 'Nama sub','trim|required');

    if ($this->form_validation->run() == TRUE) {
      $data = array(
        'nama_sekolah' => $this->input->post('nama_sekolah'),
        'no_gudep' => $this->input->post('no_gudep'),
        'alamat' => $this->input->post('alamat')
        );
    $cek = $this->modelSekolah->addData($data);
    if ($cek) {
      $this->session->set_flashdata('info', 'Tambah Data sukses');
      redirect('admin/data_sekolah','refresh');
    }else{
      $this->session->set_flashdata('info', 'Tambah Data Gagal');
      redirect('admin/add_sekolah','refresh');
    } 
    }else{
      $this->session->set_flashdata('info', 'Tambah Data Gagal');
      redirect('admin/add_sekolah','refresh');
      }
}

  

     public function editSekolah($id=null){
        $data['sekolah'] = $this->modelSekolah->getDataById($id);
      $data['main'] = 'admin/edit_sekolah';
      $this->load->view('partial/partial',$data);
      if ($id==null) {
        $this->session->set_flashdata('info','Id makanan tidak boleh kosong!');
        redirect('admin/data_sekolah','refresh');
      }

      if($this->input->post('submit')==true){
        $this->form_validation->set_rules('nama_sekolah', 'Nama Kategori','trim|required');

    if ($this->form_validation->run() == TRUE) {
      $data = array(
        'nama_sekolah' => $this->input->post('nama_sekolah'),
        'no_gudep' => $this->input->post('no_gudep'),
        'alamat' => $this->input->post('alamat')
        );

    $sql = $this->modelSekolah->updateData($id,$data);
    if ($sql) {
      $this->session->set_flashdata('info', 'Edit Data sukses');
      redirect('admin/data_sekolah','refresh');
    }else{
      $this->session->set_flashdata('info', 'Edit Data gagal');
      redirect('admin/editSekolah'.$id,'refresh');
    } 
    
    }

  }
}
public function deleteSekolah($id=null){
    if($id==null){
      $this->session->set_flashdata('info', 'Gagal Hapus Data!');
      redirect('admin/data_sekolah','refresh');
    }
    $cek = $this->modelSekolah->deleteData($id);
    if($cek){
      $this->session->set_flashdata('info', 'Sukses Hapus Data ');
      redirect('admin/data_sekolah','refresh');
    } else{
      $this->session->set_flashdata('info', 'Gagal Hapus Data ');
      redirect('admin/data_sekolah','refresh');
    }
}
    public function kegiatan(){
           $data['kegiatan'] = $this->modelSekolah->getKegiatan();
        $data['main'] ='admin/kegiatan';
        $this->load->view('partial/partial',$data);
    }

 public function add_kegiatan(){
           $data['kegiatan'] = $this->modelSekolah->getKegiatan();
        $data['main'] ='admin/add_kegiatan';
        $this->load->view('partial/partial',$data);
    }

 public function addKegiatann(){
     $config = [
        'upload_path' => './uploads/',
        'allowed_types' => 'gif|jpg|png',
        'max_size' => 1000, /*'max_width' => 1000,
        'max_height' => 768*/
      ];
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('dokumen')) //jika gagal upload
      {
          $data['error'] = $this->upload->display_errors(); //tampilkan error
          $data['main'] = 'admin/add_kegiatan';
          $this->load->view('partial/partial', $data);
      } else
      //jika berhasil upload
      {
          $file = $this->upload->data();
      $data = array(
        'nama_kegiatan' => $this->input->post('nama_kegiatan'),
        'tgl_kegiatan' => $this->input->post('tgl_kegiatan'),
        'rincian' => $this->input->post('rincian'),
        'dokumen' =>$file['file_name']
        );

          $this->modelSekolah->addKegiatann($data); //memasukan data ke database
          redirect('admin/kegiatan'); //mengalihkan halaman
      }
  }

public function editKegiatan($id=null){
        $data['kegiatan'] = $this->modelSekolah->getDataByKegiatan($id);
      $data['main'] = 'admin/edit_kegiatan';
      $this->load->view('partial/partial',$data);
      if ($id==null) {
        $this->session->set_flashdata('info','Id kegiatan tidak boleh kosong!');
        redirect('admin/data_kegiatan','refresh');
      }

      if($this->input->post('submit')==true){
        $this->form_validation->set_rules('nama_kegiatan', 'Nama Kategori','trim|required');

    if ($this->form_validation->run() == TRUE) {
      $data = array(
        'nama_kegiatan' => $this->input->post('nama_kegiatan'),
        'tgl_kegiatan' => $this->input->post('tgl_kegiatan'),
        'rincian' => $this->input->post('rincian')
        );

    $sql = $this->modelSekolah->updateKegiatan($id,$data);
    if ($sql) {
      $this->session->set_flashdata('info', 'Edit Data sukses');
      redirect('admin/kegiatan','refresh');
    }else{
      $this->session->set_flashdata('info', 'Edit Data gagal');
      redirect('admin/editKegiatan'.$id,'refresh');
    } 
    
    }

  }
}
public function deleteKegiatan($id=null){
    if($id==null){
      $this->session->set_flashdata('info', 'Gagal Hapus Data!');
      redirect('admin/kegiatan','refresh');
    }
    $cek = $this->modelSekolah->deleteKegiatan($id);
    if($cek){
      $this->session->set_flashdata('info', 'Sukses Hapus Data ');
      redirect('admin/kegiatan','refresh');
    } else{
      $this->session->set_flashdata('info', 'Gagal Hapus Data ');
      redirect('admin/kegiatan','refresh');
    }
}
    public function penghargaan(){
        $data['main'] ='admin/penghargaan';
        $this->load->view('partial/partial',$data);
    }
    public function laporan_anggota(){
    $data['anggota'] = $this->modelSekolah->getAnggota();
    $this->load->view('admin/laporan_anggota',$data);
  }
      public function laporan_pdf(){
        $data['main'] ='admin/laporan_pdf';
        $this->load->view('partial/partial',$data);
    }

    public function laporan_excel(){
        $data['main'] ='admin/laporan_excel';
        $this->load->view('partial/partial',$data);
    }

    public function report_upload(){
 /*    $data['anggota'] = $this->modelSekolah->tampilAnggota();*/
     $data['kegiatan'] = $this->modelSekolah->getKegiatan();
      $data['main'] ='admin/report_upload';
      $this->load->view('partial/partial',$data);
    }
   function logout(){
  $this->session->sess_destroy();
  redirect(base_url('login'));
 }
}