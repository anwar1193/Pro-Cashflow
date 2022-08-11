<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class input_ready_cash extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('helperku');
		$this->load->library('libraryku');
		$this->load->model('M_input_ready_cash');
	}

	public function index()
	{
		cek_belum_login();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_input_ready_cash');
		$this->load->view('footer');
	}

	public function tambah(){
		$tgl = $this->input->post('tanggal');
		$tanggal = date('d-m-Y',strtotime($tgl));
		$readycash = $this->input->post('ready_cash');

		// Cek Apakah Inputan SUdah Diisi
		if($tgl=="" or $readycash==""){ // Jika Ada Inputan Kosong
			$this->session->set_flashdata('pesan_sukses','
				<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Kesalahan!</strong> Data Tanggal dan Ready Cash Tidak Boleh Kosong
				</div>
			');
			redirect('input_ready_cash');

		}else{ // Jika Sudah Diisi Semua

			// Cek Apakah Data Sudah Ada di Database
			$koneksi = mysqli_connect('localhost','root','Profi@123','db_cashflow');
			$q_cek = "SELECT * FROM tbl_ready_cash WHERE tanggal='$tanggal'";
			$r_cek = mysqli_query($koneksi,$q_cek) or die ('error fungsi');
			$cek = mysqli_num_rows($r_cek);

			if($cek>0){ // Jika Data Sudah Ada Di Database

				$this->session->set_flashdata('pesan_sukses','
					<div class="alert alert-warning alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  <strong>Warning!</strong> Data Ready Cash Tanggal '.$tanggal.' Sudah Ada Di Database
					</div>
				');

				redirect('input_ready_cash');

			}else{ // Jika Data Belum Ada Di Database

				$result = $this->M_input_ready_cash->tambah('tbl_ready_cash', array(
					'tanggal' => $tanggal,
					'ready_cash' => $this->input->post('ready_cash')
				));

				if($result>0){
					$this->session->set_flashdata('pesan_sukses','
						<div class="alert alert-success alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  <strong>Sukses!</strong> Data Ready Cash Berhasil Disimpan
						</div>
					');

					redirect('input_ready_cash');
				}

			}

		}
	}

	public function tampil_edit(){
		date_default_timezone_set("Asia/Jakarta");
		$tgl = $this->input->post('tanggal');
		$tanggal = date('d-m-Y', strtotime($tgl));

		$result = $this->M_input_ready_cash->tampil_edit('tbl_ready_cash',array('tanggal'=>$tanggal));
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_tedit_readycash',array('row'=>$result));
		$this->load->view('footer');
	}

	public function edit($id){
		$result = $this->M_input_ready_cash->edit('tbl_ready_cash',array('id'=>$id));

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_edit_readycash',array('row'=>$result));
		$this->load->view('footer');
	}

	public function update(){
		$tgl = $this->input->post('tanggal');
		$tanggal = date('d-m-Y', strtotime($tgl));

		$result = $this->M_input_ready_cash->update('tbl_ready_cash',array(
			'tanggal' => $tanggal,
			'ready_cash' => $this->input->post('ready_cash')
		),array('id'=>$this->input->post('id')));

		if($result>0){
			$this->session->set_flashdata('pesan_sukses','
				<div class="alert alert-info alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Success!</strong> Data Ready Cash Berhasil Di Edit
				</div>
			');
			redirect('input_ready_cash/tampil_edit');
		}
	}

}
