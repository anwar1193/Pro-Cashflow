<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class input_allocated_cash extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('helperku');
		$this->load->library('libraryku');
		$this->load->model('M_input_allocated_cash');
	}

	public function index()
	{
		cek_belum_login();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_input_allocated_cash');
		$this->load->view('footer');
	}

	public function tambah(){
		$tgl = $this->input->post('tanggal');
		$tanggal = date('d-m-Y',strtotime($tgl));
		$allcash = $this->input->post('allocated_cash');

		// Cek Apakah Inputan Diisi Atau Tidak

		if($tgl=="" or $allcash==""){ // Jika Data Kosong

			$this->session->set_flashdata('pesan_sukses','
				<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Kesalahan!</strong> Data Tanggal & Allocated Cash Tidak Boleh Kosong
				</div>
			');

			redirect('input_allocated_cash');

		}else{ // Jika Data Diisi

			// Cek Apakah Data Sudah Ada Sebelumnya
			$koneksi = mysqli_connect('localhost','root','Profi@123','db_cashflow');
			$q_cek = "SELECT * FROM tbl_allocated_cash WHERE tanggal='$tanggal'";
			$r_cek = mysqli_query($koneksi,$q_cek) or die ('error fungsi');
			$cek = mysqli_num_rows($r_cek);

			if($cek>0){ // Jika Data Sudah Ada
				$this->session->set_flashdata('pesan_sukses','
					<div class="alert alert-warning alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  <strong>Warning!</strong> Data Allocated Tanggal '.$tanggal.' Sudah Ada di Database
					</div>
				');

				redirect('input_allocated_cash');

			}else{ // Jika Data Belum Ada
				$result = $this->M_input_allocated_cash->tambah('tbl_allocated_cash', array(
					'tanggal' => $tanggal,
					'allocated_cash' => $this->input->post('allocated_cash')
				));

				if($result>0){
					$this->session->set_flashdata('pesan_sukses','
						<div class="alert alert-success alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  <strong>Sukses!</strong> Data Allocated Cash Berhasil Disimpan
						</div>
					');

					redirect('input_allocated_cash');
				}
			}

			

		}

	}

	public function tampil_edit(){
		date_default_timezone_set("Asia/Jakarta");
		$tgl = $this->input->post('tanggal');
		$tanggal = date('d-m-Y', strtotime($tgl));

		$result = $this->M_input_allocated_cash->tampil_edit('tbl_allocated_cash',array('tanggal'=>$tanggal));
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_tedit_allocash',array('row'=>$result));
		$this->load->view('footer');
	}

	public function edit($id){
		$result = $this->M_input_allocated_cash->edit('tbl_allocated_cash',array('id'=>$id));

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_edit_allocash',array('row'=>$result));
		$this->load->view('footer');
	}

	public function update(){
		$tgl = $this->input->post('tanggal');
		$tanggal = date('d-m-Y', strtotime($tgl));

		$result = $this->M_input_allocated_cash->update('tbl_allocated_cash',array(
			'tanggal' => $tanggal,
			'allocated_cash' => $this->input->post('allocated_cash')
		),array('id'=>$this->input->post('id')));

		if($result>0){
			$this->session->set_flashdata('pesan_sukses','
				<div class="alert alert-info alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Success!</strong> Data Allocated Cash Berhasil Di Edit
				</div>
			');
			redirect('input_allocated_cash/tampil_edit');
		}
	}

}
