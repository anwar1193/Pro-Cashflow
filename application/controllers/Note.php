<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Note extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('helperku');
		$this->load->library('libraryku');
		$this->load->model('M_note');
	}

	public function index()
	{
		date_default_timezone_set("Asia/Jakarta");
		cek_belum_login();
		$tgl = $this->input->post('tanggal');
		$tanggal = date('d-m-Y', strtotime($tgl));
		$result = $this->M_note->tampil_note('tbl_note',array('tanggal'=>$tanggal));

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_note', array('row' => $result));
		$this->load->view('footer');
	}

	public function tambah(){
		date_default_timezone_set("Asia/Jakarta");
		$tgl = $this->input->post('tanggal');
		$tanggal = date('d-m-Y',strtotime($tgl));
		$note = $this->input->post('note');

		// Cek Apakah Inputan Sudah Diisi Semua
		if($tgl=="" or $note==""){ // Jika Ada Inputan Kosong

			$this->session->set_flashdata('pesan_sukses','
				<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Kesalahan! </strong> Inputan Tanggal dan Note Tidak Boleh Kosong
				</div>
			');

			redirect('note');

		}else{ // Jika Inputan Sudah Diisi Semua

			// Cek Apakah Data Sudah Ada di Database Sebelumnya
			$koneksi = mysqli_connect('localhost','root','','db_cashflow');
			$q_cek = "SELECT * FROM tbl_note WHERE tanggal='$tanggal'";
			$r_cek = mysqli_query($koneksi,$q_cek) or die ('error fungsi');
			$cek = mysqli_num_rows($r_cek);

			if($cek>0){ // Jika sudah ada di database

				$this->session->set_flashdata('pesan_sukses','
					<div class="alert alert-warning alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  <strong>Warning! </strong> Note Tanggal '.$tanggal.' Sudah Ada di Database
					</div>
				');

				redirect('note');

			}else{ // jika belum ada di database

				$result = $this->M_note->tambah('tbl_note', array(
					'tanggal' => $tanggal,
					'note' => $this->input->post('note')
				));

				if($result>0){
					$this->session->set_flashdata('pesan_sukses','
						<div class="alert alert-success alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  <strong>Sukses! </strong> Note Untuk Tanggal '.$tanggal.' Berhasil Ditambahkan
						</div>
					');

					redirect('note');
				}
			}
		}
	}


	public function edit($id){
		$result = $this->M_note->edit('tbl_note',array('id'=>$id));

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_edit_note', array('row' => $result));
		$this->load->view('footer');
	}

	public function update(){
		date_default_timezone_set("Asia/Jakarta");
		$tgl = $this->input->post('tanggal');
		$tanggal = date('d-m-Y',strtotime($tgl));
		$result = $this->M_note->update('tbl_note',array(
			'tanggal' => $tanggal,
			'note' => $this->input->post('note')
		),array('id'=>$this->input->post('id')));

		if($result>0){
			$this->session->set_flashdata('pesan_sukses','
				<div class="alert alert-info alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Sukses!</strong> Note Pada Tanggal '.$tanggal.' Berhasil Diubah
				</div>
			');

			redirect('note');
		}
	}

}
