<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Closing extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('helperku');
		$this->load->library('libraryku');
		$this->load->model('M_closing');
	}

	public function index()
	{
		cek_belum_login();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_closing');
		$this->load->view('footer');
	}

	public function hitung_otomatis(){
		date_default_timezone_set("Asia/Jakarta");
		// ambil tanggal untuk saldo awal dan saldo akhir
		$tanggal = $this->input->post('tanggal');
		$tgl = date('d-m-Y',strtotime($tanggal));
		$hari = date('D', strtotime($tanggal));

		$tanggal_sekarang = date('d-m-Y',strtotime($tanggal));

			if($hari == 'Fri'){
				$tanggal_besok = date('d-m-Y',strtotime($tanggal)+60*60*24*3);
			}else{
				$tanggal_besok = date('d-m-Y',strtotime($tanggal)+60*60*24*1);
			}
			

			// ambil saldo awal hari ini
			$salaw = $this->M_closing->salaw($tanggal_sekarang);

			// ambil total cashin hari ini
			$tot_cashinproj = $this->M_closing->cashinproj($tanggal_sekarang);
			$tot_cashinreal = $this->M_closing->cashinreal($tanggal_sekarang);

			// ambil total cashout hari ini
			$tot_cashoutproj = $this->M_closing->cashoutproj($tanggal_sekarang);
			$tot_cashoutreal = $this->M_closing->cashoutreal($tanggal_sekarang);

			// Hitung Saldo Akhir hari ini
			$salakproj = $salaw['saldo_awal_proj'] + $tot_cashinproj['cashin_proj'] - $tot_cashoutproj['cashout_proj'];
			$salakreal = $salaw['saldo_awal_real'] + $tot_cashinreal['cashin_real'] - $tot_cashoutreal['cashout_real'];


			// Cek Apakah Hari Ini / Hari Yang dipilih sudah closing
			$cek = $this->M_closing->cek_closing('tbl_saldo_awal',array('tanggal' => $tanggal_besok));

			if($cek->num_rows()>0){ //Jika Tanggal Ini Sudah Di Closing

				$result = $this->M_closing->hitung_otomatis_update('tbl_saldo_awal', array(
					'saldo_awal_proj' => $salakreal,
					'saldo_awal_real' => $salakreal
				),array('tanggal' => $tanggal_besok));

				if($result>0){
					$this->session->set_flashdata('pesan_sukses','
						<div class="alert alert-info alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  <strong>Closing Berhasil! </strong> Saldo Akhir Hari Ini Menjadi Saldo Awal Tanggal '.$tanggal_besok.'
						</div>
					');
					redirect('home');
				}

			}else{ //Jika Tanggal Ini Belum Di Closing

				// Simpan ke tbl_saldo_awal (esok hari)
				$result = $this->M_closing->hitung_otomatis('tbl_saldo_awal',array(
					'tanggal' => $tanggal_besok,
					'saldo_awal_proj' => $salakreal,
					'saldo_awal_real' => $salakreal
				));

				// Simpan Note
				$result_note = $this->M_closing->simpan_note('tbl_note',array(
					'tanggal' => $tgl,
					'note' => $this->input->post('note')
				));

				// Simpan Status Closing
				$result_closing = $this->M_closing->status_closing('tbl_closing',array(
					'tanggal' => $tgl,
					'status_closing' => 'Closing'
				));

				if($result>0){
					$this->session->set_flashdata('pesan_sukses','
						<div class="alert alert-info alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  <strong>Closing Berhasil! </strong> Saldo Akhir Hari Ini Menjadi Saldo Awal Tanggal '.$tanggal_besok.'
						</div>
					');
					redirect('home');
				}

			}
		
		
	}

}
