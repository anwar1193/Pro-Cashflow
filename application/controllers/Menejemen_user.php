<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menejemen_user extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('helperku');
		$this->load->library('libraryku');
		$this->load->model('M_user');
	}

	public function index()
	{
		date_default_timezone_set("Asia/Jakarta");
		cek_belum_login();

		$data_user = $this->M_user->tampil_user()->result_array();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_user',array('data_user'=>$data_user));
		$this->load->view('footer');
	}

	public function tambah(){
		$data_level = $this->db->query("SELECT * FROM tbl_level")->result_array();

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_tambah_user', array('data_level'=>$data_level));
		$this->load->view('footer');
	}

	public function simpan(){
		$result = $this->M_user->simpan_user('tbl_user', array(
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => sha1($this->input->post('password')),
			'level' => $this->input->post('level')
		));

		if($result > 0){
			echo '<script>alert("Data User Tersimpan"); window.location="Index"</script>';
		}
	}

	public function edit($id){
		$data_user = $this->M_user->tampil_user_where('tbl_user', array('id' => $id))->row_array();

		// Ambil Data Level
		$id_level = $data_user['level'];
		$data_level = $this->db->query("SELECT * FROM tbl_level WHERE id_level=$id_level")->row_array();

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_edit_user', array('data_user' => $data_user, 'data_level' => $data_level));
		$this->load->view('footer');
	}

	public function update(){
		$result = $this->M_user->update_user('tbl_user', array(
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'level' => $this->input->post('level')
		), array('id' => $this->input->post('id')));

		if($result > 0){
			echo '<script>alert("Data User Berhasil Diupdate"); window.location="Index"</script>';
		}
	}

	public function reset_password($id){
		$result = $this->M_user->update_user('tbl_user', array(
			'password' => sha1('Profi@123')
		), array('id' => $id));

		if($result > 0){

			$this->session->set_flashdata('pesan_sukses','
				<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Password Berhasil Di Reset</strong>
				</div>
			');

			redirect('menejemen_user');
		}
	}

	public function hapus($id){
		$result = $this->M_user->hapus_user('tbl_user', array('id' => $id));
		if($result > 0){
			$this->session->set_flashdata('pesan_sukses','
				<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Data User Berhasil Dihapus</strong>
				</div>
			');

			redirect('menejemen_user');
		}
	}

}
