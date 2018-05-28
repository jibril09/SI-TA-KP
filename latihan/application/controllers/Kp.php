<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kp extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_database');
		$this->load->model('M_login');

	}

	function index()
	{
		$data['mhs'] = $this->M_database->select();
		$this->load->view('header');
		$this->load->view('head');
		$this->load->view('form-kp',$data);
		$this->load->view('footer');
	}

}