<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_menu extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('helperku');
		$this->load->library('libraryku');
		$this->load->model('M_pengaturan_akses');
	}

	public function index()
	{
		date_default_timezone_set("Asia/Jakarta");
		cek_belum_login();

		$data_menu = $this->M_pengaturan_akses->tampil_data('tbl_menu')->result_array();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_menu',array('data_menu'=>$data_menu));
		$this->load->view('footer');
	}

	public function tambah(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_tambah_menu');
		$this->load->view('footer');
	}

	public function simpan(){
		$result = $this->M_pengaturan_akses->simpan_data('tbl_menu', array(
			'menu' => $this->input->post('menu'),
			'url' => $this->input->post('url'),
			'icon' => $this->input->post('icon')
		));

		if($result > 0){
			echo '<script>alert("Data Menu Tersimpan"); window.location="Index"</script>';
		}
	}

	public function edit($id){
		$data_menu = $this->M_pengaturan_akses->tampil_data_where('tbl_menu', array('id_menu' => $id))->row_array();

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_edit_menu', array('data_menu' => $data_menu));
		$this->load->view('footer');
	}

	public function update(){
		$result = $this->M_pengaturan_akses->update_data('tbl_menu', array(
			'menu' => $this->input->post('menu'),
			'url' => $this->input->post('url'),
			'icon' => $this->input->post('icon')
		), array('id_menu' => $this->input->post('id_menu')));

		if($result > 0){
			echo '<script>alert("Data Menu Berhasil Diupdate"); window.location="Index"</script>';
		}
	}

	public function hapus($id){
		$result = $this->M_pengaturan_akses->hapus_data('tbl_menu', array('id_menu' => $id));
		if($result > 0){
			$this->session->set_flashdata('pesan_sukses','
				<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Data Menu Berhasil Dihapus</strong>
				</div>
			');

			redirect('data_menu');
		}
	}

}
