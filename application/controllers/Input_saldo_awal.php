<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_saldo_awal extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('helperku');
		$this->load->library('libraryku');
		$this->load->model('M_input_saldo_awal');
	}

	public function index()
	{
		cek_belum_login();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_input_saldo_awal');
		$this->load->view('footer');
	}

	public function tambah(){
		date_default_timezone_set("Asia/Jakarta");
		$tgl = $this->input->post('tanggal');
		$tanggal = date('d-m-Y',strtotime($tgl));
		$salawproj = $this->input->post('salaw_proj');
		$salawreal = $this->input->post('salaw_real');

		// Cek apakah data inputan kosong
		if($tgl=="" or $salawproj=="" or $salawreal==""){ //jika data kosong

			$this->session->set_flashdata('pesan_sukses','
				<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Kesalahan!</strong> Harap Isi Semua Inputan
				</div>
			');

			redirect('input_saldo_awal');

		}else{ // jika data sudah diisi

			// Cek Apakah Data Sudah Ada Sebelumnya
			$koneksi = mysqli_connect('localhost','root','','db_cashflow');
			$q_cek = "SELECT * FROM tbl_saldo_awal WHERE tanggal='$tanggal'";
			$r_cek = mysqli_query($koneksi,$q_cek) or die ('error fungsi');
			$cek = mysqli_num_rows($r_cek);

			if($cek>0){ //Jika Data Sudah Ada

				$this->session->set_flashdata('pesan_sukses','
					<div class="alert alert-warning alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  <strong>Warning!</strong> Data Saldo Awal Tanggal '.$tanggal.' Sudah Ada Di Database
					</div>
				');

				redirect('input_saldo_awal');

			}else{ //Jika Data Belum Ada
				$result = $this->M_input_saldo_awal->tambah('tbl_saldo_awal', array(
					'tanggal' => $tanggal,
					'saldo_awal_proj' => $this->input->post('salaw_proj'),
					'saldo_awal_real' => $this->input->post('salaw_real')
				));

				if($result>0){
					$this->session->set_flashdata('pesan_sukses','
						<div class="alert alert-success alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  <strong>Sukses!</strong> Data Saldo Awal Berhasil Disimpan
						</div>
					');

					redirect('input_saldo_awal');
				}
			}

		}

	}

	public function tambah_realtime(){
		$result = $this->M_input_saldo_awal->tambah_realtime('tbl_saldo_awal', array(
			'tanggal' => $this->input->post('tanggal2'),
			'saldo_awal_proj' => $this->input->post('salaw_proj2'),
			'saldo_awal_real' => $this->input->post('salaw_real2')
		));

		if($result>0){
			redirect('cashflow_data');
		}
	}

	public function hitung_otomatis(){
		date_default_timezone_set("Asia/Jakarta");
		// ambil tanggal untuk saldo awal dan saldo akhir
		$tanggal = $this->input->post('tanggal');
		$hari = date('D', strtotime($tanggal));

		// Cek Jika Input Tanggal Kosong

		if($tanggal==""){ // Jika Tanggal Kosong

			$this->session->set_flashdata('pesan_sukses','
				<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Kesalahan!</strong> Tanggal Tidak Boleh Kosong
				</div>
			');
			redirect('input_saldo_awal');

		}else{ // Jika Tanggal Diisi

			$tanggal_sekarang = date('d-m-Y',strtotime($tanggal));

			if($hari == 'Mon'){
				$tanggal_kemarin = date('d-m-Y',strtotime($tanggal)-60*60*24*3);
			}else{
				$tanggal_kemarin = date('d-m-Y',strtotime($tanggal)-60*60*24*1);
			}
			

			// ambil saldo awal kemarin
			$salaw_kemarin = $this->M_input_saldo_awal->salaw_kemarin($tanggal_kemarin);

			// ambil total cashin kemarin
			$tot_cashinproj_kemarin = $this->M_input_saldo_awal->cashinproj_kemarin($tanggal_kemarin);
			$tot_cashinreal_kemarin = $this->M_input_saldo_awal->cashinreal_kemarin($tanggal_kemarin);

			// ambil total cashout kemarin
			$tot_cashoutproj_kemarin = $this->M_input_saldo_awal->cashoutproj_kemarin($tanggal_kemarin);
			$tot_cashoutreal_kemarin = $this->M_input_saldo_awal->cashoutreal_kemarin($tanggal_kemarin);

			// Hitung Saldo Akhir Kemarin
			$salakproj_kemarin = $salaw_kemarin['saldo_awal_proj'] + $tot_cashinproj_kemarin['cashin_proj'] - $tot_cashoutproj_kemarin['cashout_proj'];
			$salakreal_kemarin = $salaw_kemarin['saldo_awal_real'] + $tot_cashinreal_kemarin['cashin_real'] - $tot_cashoutreal_kemarin['cashout_real'];

			// Simpan ke tbl_saldo_awal
			$result = $this->M_input_saldo_awal->hitung_otomatis('tbl_saldo_awal',array(
				'tanggal' => $tanggal_sekarang,
				'saldo_awal_proj' => $salakreal_kemarin,
				'saldo_awal_real' => $salakreal_kemarin
			));

			if($result>0){
				$this->session->set_flashdata('pesan_sukses','
					<div class="alert alert-success alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  <strong>Success!</strong> Saldo Awal Berhasil Di Set
					</div>
				');
				redirect('input_saldo_awal');
			}

		}
		
	}

	public function tampil_edit(){
		date_default_timezone_set("Asia/Jakarta");
		$tgl = $this->input->post('tanggal');
		$tanggal = date('d-m-Y', strtotime($tgl));

		$result = $this->M_input_saldo_awal->tampil_edit('tbl_saldo_awal',array('tanggal'=>$tanggal));
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_tedit_salaw',array('row'=>$result));
		$this->load->view('footer');
	}

	public function edit($id){
		$result = $this->M_input_saldo_awal->edit('tbl_saldo_awal',array('id'=>$id));

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_edit_salaw',array('row'=>$result));
		$this->load->view('footer');
	}

	public function update(){
		date_default_timezone_set("Asia/Jakarta");
		$tgl = $this->input->post('tanggal');
		$tanggal = date('d-m-Y', strtotime($tgl));

		$result = $this->M_input_saldo_awal->update('tbl_saldo_awal',array(
			'tanggal' => $tanggal,
			'saldo_awal_proj' => $this->input->post('saldo_awal_proj'),
			'saldo_awal_real' => $this->input->post('saldo_awal_real')
		),array('id'=>$this->input->post('id')));

		if($result>0){
			$this->session->set_flashdata('pesan_sukses','
				<div class="alert alert-info alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Success!</strong> Saldo Awal Berhasil Di Edit
				</div>
			');
			redirect('input_saldo_awal/tampil_edit');
		}
	}

}
