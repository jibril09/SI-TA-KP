<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
        }
    $this->load->model('M_database');
  }
 
  function index(){
    $this->load->view('head');
    $this->load->view('header');
    $this->load->view('Session-login');
    $this->load->view('footer');
    
  }
 
  function data_mahasiswa(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      $this->load->view('v_mahasiswa');
    }else{
      $this->load->view('head');
      $this->load->view('header');
      $this->load->view('Tolak');
      $this->load->view('footer');
    }
 
  }
 
  function f_ta(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      $this->load->view('form-ta');
    }else{
      $this->load->view('head');
      $this->load->view('header');
      $this->load->view('Tolak');
      $this->load->view('footer');
    }
  }
 
  function f_kp(){
    // function ini hanya boleh diakses oleh admin dan mahasiswa
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){
      $data['mhs'] = $this->M_database->select();
    $this->load->view('header');
    $this->load->view('head');
    $this->load->view('form-kp',$data);
    $this->load->view('footer');
    }else{
      $this->load->view('head');
      $this->load->view('header');
      $this->load->view('Tolak');
      $this->load->view('footer'); 
    }
  }
  function lhs(){
    // function ini hanya boleh diakses oleh admin dan mahasiswa
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){
      $this->load->view('v_lhs');
    }else{
      $this->load->view('head');
      $this->load->view('header');
      $this->load->view('Tolak');
      $this->load->view('footer');
    }
  }
}