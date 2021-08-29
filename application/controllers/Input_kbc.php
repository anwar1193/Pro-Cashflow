<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class input_kbc extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('helperku');
		$this->load->library('libraryku');
		$this->load->model('M_input_kbc');
	}

	public function index()
	{
		cek_belum_login();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_input_kbc');
		$this->load->view('footer');
	}

	public function tambah(){
		$tgl = $this->input->post('tanggal');
		$tanggal = date('d-m-Y',strtotime($tgl));
		$kbc = $this->input->post('kbc');

		// Cek Apakah Inputan Diisi Semua
		if($tgl=="" or $kbc==""){ // Jika Ada Data yang Kosong

			$this->session->set_flashdata('pesan_sukses','
				<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Kesalahan!</strong> Data Tanggal dan Kas Besar Cabang Tidak Boleh Kosong
				</div>
			');

			redirect('input_kbc');

		}else{ // Jika Data Diisi Semua

			// Cek Apakah Data Sudah Ada di Database
			$koneksi = mysqli_connect('localhost','root','','db_cashflow');
			$q_cek = "SELECT * FROM tbl_kbc WHERE tanggal='$tanggal'";
			$r_cek = mysqli_query($koneksi,$q_cek) or die ('error fungsi');
			$cek = mysqli_num_rows($r_cek);

			if($cek>0){ // Jika Data Sudah Ada di Database

				$this->session->set_flashdata('pesan_sukses','
					<div class="alert alert-warning alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  <strong>Warning!</strong> Data Kas Besar Cabang Tanggal '.$tanggal.' Sudah Ada di Database
					</div>
				');

				redirect('input_kbc');

			}else{ // JIka Data Belum Ada di Database

				$result = $this->M_input_kbc->tambah('tbl_kbc', array(
					'tanggal' => $tanggal,
					'kbc' => $this->input->post('kbc')
				));

				if($result>0){
					$this->session->set_flashdata('pesan_sukses','
						<div class="alert alert-success alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  <strong>Sukses!</strong> Data Kas Besar Cabang Berhasil Disimpan
						</div>
					');

					redirect('input_kbc');
				}

			}

		}

		
	}

	public function tampil_edit(){
		date_default_timezone_set("Asia/Jakarta");
		$tgl = $this->input->post('tanggal');
		$tanggal = date('d-m-Y', strtotime($tgl));

		$result = $this->M_input_kbc->tampil_edit('tbl_kbc',array('tanggal'=>$tanggal));
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_tedit_kbc',array('row'=>$result));
		$this->load->view('footer');
	}

	public function edit($id){
		$result = $this->M_input_kbc->edit('tbl_kbc',array('id'=>$id));

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_edit_kbc',array('row'=>$result));
		$this->load->view('footer');
	}

	public function update(){
		$tgl = $this->input->post('tanggal');
		$tanggal = date('d-m-Y', strtotime($tgl));

		$result = $this->M_input_kbc->update('tbl_kbc',array(
			'tanggal' => $tanggal,
			'kbc' => $this->input->post('kbc')
		),array('id'=>$this->input->post('id')));

		if($result>0){
			$this->session->set_flashdata('pesan_sukses','
				<div class="alert alert-info alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Success!</strong> Data Kas Besar Cabang Berhasil Di Edit
				</div>
			');
			redirect('input_kbc/tampil_edit');
		}
	}

}
