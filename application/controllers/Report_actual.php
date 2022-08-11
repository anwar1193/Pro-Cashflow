<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class report_actual extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('helperku');
		$this->load->library('libraryku');
	}

	public function index()
	{
		cek_belum_login();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_report_actual');
		$this->load->view('footer');
	}

    public function tampil_report(){
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');

		$data_saldo_awal = $this->db->query("SELECT * FROM tbl_saldo_awal WHERE substring(tanggal, 4, 2) = '$bulan' AND substring(tanggal, 7, 4) = '$tahun' ORDER BY substring(tanggal, 1, 2) LIMIT 0,1")->row_array();

		// Data CASH-IN
		$data_collection = $this->db->query("SELECT SUM(realisasi) AS total_cashin FROM tbl_cashinreal WHERE substring(tanggal, 4, 2) = '$bulan' AND substring(tanggal, 7, 4) = '$tahun' AND (kode_status='C' OR kode_status='D')")->row_array();

		$data_penerimaan_csul = $this->db->query("SELECT SUM(realisasi) AS total_cashin FROM tbl_cashinreal WHERE substring(tanggal, 4, 2) = '$bulan' AND substring(tanggal, 7, 4) = '$tahun' AND (kode_status='A')")->row_array();

		$data_jual_mobil = $this->db->query("SELECT SUM(realisasi) AS total_cashin FROM tbl_cashinreal WHERE substring(tanggal, 4, 2) = '$bulan' AND substring(tanggal, 7, 4) = '$tahun' AND (kode_status='L' OR kode_status='J' OR kode_status='H')")->row_array();

		$data_et_inflow = $this->db->query("SELECT SUM(realisasi) AS total_cashin FROM tbl_cashinreal WHERE substring(tanggal, 4, 2) = '$bulan' AND substring(tanggal, 7, 4) = '$tahun' AND (kode_status='E')")->row_array();

		$data_ayda = $this->db->query("SELECT SUM(realisasi) AS total_cashin FROM tbl_cashinreal WHERE substring(tanggal, 4, 2) = '$bulan' AND substring(tanggal, 7, 4) = '$tahun' AND (kode_status='F')")->row_array();

		$data_recovery = $this->db->query("SELECT SUM(realisasi) AS total_cashin FROM tbl_cashinreal WHERE substring(tanggal, 4, 2) = '$bulan' AND substring(tanggal, 7, 4) = '$tahun' AND (kode_status='G')")->row_array();

		$data_pindah_btb = $this->db->query("SELECT SUM(realisasi) AS total_cashin FROM tbl_cashinreal WHERE substring(tanggal, 4, 2) = '$bulan' AND substring(tanggal, 7, 4) = '$tahun' AND (kode_status='S')")->row_array();

		
		// Data CASH-OUT
		$data_cicilan_bank = $this->db->query("SELECT SUM(realisasi) AS total_cashout FROM tbl_cashoutreal WHERE substring(tanggal, 4, 2) = '$bulan' AND substring(tanggal, 7, 4) = '$tahun' AND (kode_status='C')")->row_array();

		$data_cicilan_bank_lain = $this->db->query("SELECT SUM(realisasi) AS total_cashout FROM tbl_cashoutreal WHERE substring(tanggal, 4, 2) = '$bulan' AND substring(tanggal, 7, 4) = '$tahun' AND (kode_status='I' OR kode_status='N')")->row_array();

		$data_bunga_prk = $this->db->query("SELECT SUM(realisasi) AS total_cashout FROM tbl_cashoutreal WHERE substring(tanggal, 4, 2) = '$bulan' AND substring(tanggal, 7, 4) = '$tahun' AND (kode_status='L')")->row_array();

		$data_asuransi_simas = $this->db->query("SELECT SUM(realisasi) AS total_cashout FROM tbl_cashoutreal WHERE substring(tanggal, 4, 2) = '$bulan' AND substring(tanggal, 7, 4) = '$tahun' AND (kode_status='B3')")->row_array();

		$data_pelunasan_et = $this->db->query("SELECT SUM(realisasi) AS total_cashout FROM tbl_cashoutreal WHERE substring(tanggal, 4, 2) = '$bulan' AND substring(tanggal, 7, 4) = '$tahun' AND (kode_status='E' OR kode_status='F' OR kode_status='G' OR kode_status='H' OR kode_status='M')")->row_array();

		$data_biaya_rutin = $this->db->query("SELECT SUM(realisasi) AS total_cashout FROM tbl_cashoutreal WHERE substring(tanggal, 4, 2) = '$bulan' AND substring(tanggal, 7, 4) = '$tahun' AND (kode_status='J' OR kode_status='O' OR kode_status='P' OR kode_status='Q' OR kode_status='R' OR kode_status='S' OR kode_status='T' OR kode_status='U' OR kode_status='V' OR kode_status='W' OR kode_status='Z' OR kode_status='B2' OR kode_status='C2' OR kode_status='D2' OR kode_status='E2' OR kode_status='F2' OR kode_status='G2' OR kode_status='H2' OR kode_status='I2' OR kode_status='J2' OR kode_status='K2' OR kode_status='L2' OR kode_status='M2' OR kode_status='P2' OR kode_status='R2' OR kode_status='S2' OR kode_status='U2' OR kode_status='X2' OR kode_status='Y2' OR kode_status='A3' OR kode_status='C3' OR kode_status='D3' OR kode_status='E3' OR kode_status='F3' OR kode_status='G3' OR kode_status='H3' OR kode_status='J3' OR kode_status='K3' OR kode_status='M3' OR kode_status='N3' OR kode_status='O3' OR kode_status='P3' OR kode_status='Q3' OR kode_status='R3' OR kode_status='S3' OR kode_status='T3' OR kode_status='U3' OR kode_status='V3' OR kode_status='W3' OR kode_status='X3' OR kode_status='Y3' OR kode_status='Z3' OR kode_status='A4' OR kode_status='B4')")->row_array();

		$data_pindah_ke_btb = $this->db->query("SELECT SUM(realisasi) AS total_cashout FROM tbl_cashoutreal WHERE substring(tanggal, 4, 2) = '$bulan' AND substring(tanggal, 7, 4) = '$tahun' AND (kode_status='I3')")->row_array();

		$data_new_booking = $this->db->query("SELECT SUM(realisasi) AS total_cashout FROM tbl_cashoutreal WHERE substring(tanggal, 4, 2) = '$bulan' AND substring(tanggal, 7, 4) = '$tahun' AND (kode_status='A' OR kode_status='B')")->row_array();

		$data_pesangon = $this->db->query("SELECT SUM(realisasi) AS total_cashout FROM tbl_cashoutreal WHERE substring(tanggal, 4, 2) = '$bulan' AND substring(tanggal, 7, 4) = '$tahun' AND (kode_status='C4')")->row_array();


		// DATA KAS BESAR CABANG (Data Terbaru di bulan tersebut)
		$data_kbc = $this->db->query("SELECT * FROM tbl_kbc WHERE substring(tanggal, 4, 2)='$bulan' AND substring(tanggal, 7, 4) = '$tahun' AND id IN(SELECT MAX(id) FROM tbl_kbc)")->row_array();


        $this->load->view('v_report_actual_excel', array(
            'bulan' => $bulan,
            'tahun' => $tahun,
            'data_saldo_awal' => $data_saldo_awal,

			// Cashin
            'data_collection' => $data_collection,
            'data_penerimaan_csul' => $data_penerimaan_csul,
            'data_jual_mobil' => $data_jual_mobil,
            'data_et_inflow' => $data_et_inflow,
            'data_ayda' => $data_ayda,
            'data_recovery' => $data_recovery,
            'data_pindah_btb' => $data_pindah_btb,

			// Cashout
			'data_cicilan_bank' => $data_cicilan_bank,
			'data_cicilan_bank_lain' => $data_cicilan_bank_lain,
			'data_bunga_prk' => $data_bunga_prk,
			'data_asuransi_simas' => $data_asuransi_simas,
			'data_pelunasan_et' => $data_pelunasan_et,
			'data_biaya_rutin' => $data_biaya_rutin,
			'data_pindah_ke_btb' => $data_pindah_ke_btb,
			'data_new_booking' => $data_new_booking,
			'data_pesangon' => $data_pesangon,

			'data_kbc' => $data_kbc
        ));

    }
	

}
