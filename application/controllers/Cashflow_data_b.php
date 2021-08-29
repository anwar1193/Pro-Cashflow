<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cashflow_data_b extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('helperku');
		$this->load->library('libraryku');
		$this->load->model('m_cashflow_data');
	}

	public function index()
	{
		cek_belum_login();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_cashflow_data_b');
		$this->load->view('footer');
	}
}
