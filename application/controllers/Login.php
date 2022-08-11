<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('m_login'));
		$this->load->helper('helperku');
		$this->load->library('libraryku');
	}

	public function index()
	{
		cek_sudah_login();
		$this->load->view('v_login');
	}

	public function proses(){
		$username = $this->input->post('username');
		$pwd = $this->input->post('password');
		$password = sha1($pwd);

		$query = $this->m_login->proses('tbl_user',array('username'=>$username, 'password'=>$password));

		if($query->num_rows()>0){

			$row = $query->row();
			$params = array(
				'id' => $row->id,
				'level' => $row->level,
				'nama' => $row->nama
			);

			$this->session->set_userdata('login_procashflow', $params);
			$this->session->set_flashdata('pesan_sukses','
				<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Login Sukses!</strong> Selamat Datang di Pro-CashFlow
				</div>
			');

			redirect('home');

		}else{
			$this->session->set_flashdata('pesan_gagal','
				<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Login Gagal!</strong> Kombinasi Username dan Password Tidak Sesuai, Coba lagi
				</div>
			');
			
			redirect('login');
		}
	}

	public function logout(){
		$params = array('id','level');
		$this->session->unset_userdata('login_procashflow', $params);
		redirect('login/index');
	}
}
