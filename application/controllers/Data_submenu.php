<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_submenu extends CI_Controller {

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

		$data_submenu = $this->M_pengaturan_akses->tampil_submenu()->result_array();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_submenu',array('data_submenu'=>$data_submenu));
		$this->load->view('footer');
	}

	public function tambah(){
		// Ambil Data Menu Untuk Di Tampilkan di Combobox
		$data_menu = $this->M_pengaturan_akses->tampil_data('tbl_menu')->result_array();

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_tambah_submenu', array('data_menu' => $data_menu));
		$this->load->view('footer');
	}

	public function simpan(){
		$result = $this->M_pengaturan_akses->simpan_data('tbl_submenu', array(
			'id_menu' => $this->input->post('id_menu'),
			'submenu' => $this->input->post('submenu'),
			'url' => $this->input->post('url'),
			'icon' => $this->input->post('icon')
		));

		if($result > 0){
			echo '<script>alert("Data Sub Menu Tersimpan"); window.location="Index"</script>';
		}
	}

	public function edit($id){
		$data_menu = $this->M_pengaturan_akses->tampil_data('tbl_menu')->result_array();
		$data_submenu = $this->M_pengaturan_akses->tampil_data_where('tbl_submenu', array('id_submenu' => $id))->row_array();

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_edit_submenu', array('data_submenu' => $data_submenu, 'data_menu' => $data_menu));
		$this->load->view('footer');
	}

	public function update(){
		$result = $this->M_pengaturan_akses->update_data('tbl_submenu', array(
			'id_menu' => $this->input->post('id_menu'),
			'submenu' => $this->input->post('submenu'),
			'url' => $this->input->post('url'),
			'icon' => $this->input->post('icon')
		), array('id_submenu' => $this->input->post('id_submenu')));

		if($result > 0){
			echo '<script>alert("Data Sub-Menu Berhasil Diupdate"); window.location="Index"</script>';
		}
	}

	public function hapus($id){
		$result = $this->M_pengaturan_akses->hapus_data('tbl_submenu', array('id_submenu' => $id));
		if($result > 0){
			$this->session->set_flashdata('pesan_sukses','
				<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Data Sub-Menu Berhasil Dihapus</strong>
				</div>
			');

			redirect('data_submenu');
		}
	}

}
