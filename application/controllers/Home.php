<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('helperku');
		$this->load->library('libraryku');
		$this->load->model('m_home');
	}

	public function index()
	{
		date_default_timezone_set("Asia/Jakarta");
		cek_belum_login();

		// Jika tombol cari di klik
		if(isset($_POST['cari'])){

			// Settingan Hari Dan Tanggal

			$tanggal = $this->input->post('tanggal');
			$hari = date('D',strtotime($tanggal));

			switch($hari){
				case 'Mon' :
				  $hari1='Sen'; $hari2='Sel'; $hari3='Rab'; $hari4='Kam'; $hari5='Jum'; $hariKemarin='Jum';

				  // Jumat
				  $tanggalKemarin = date('d-m-Y',strtotime($tanggal)-60*60*24-3);

				  // Senin / Hari Ini
				  $tanggal1 = date('d-m-Y', strtotime($tanggal));

				  // Selasa
				  $tanggal2 = date('d-m-Y', strtotime($tanggal)+60*60*24*1);

				  // Rabu
				  $tanggal3 = date('d-m-Y', strtotime($tanggal)+60*60*24*2);

				  // Kamis
				  $tanggal4 = date('d-m-Y', strtotime($tanggal)+60*60*24*3);

				  // Jumat
				  $tanggal5 = date('d-m-Y', strtotime($tanggal)+60*60*24*4);

				  break;

				case 'Tue' :
				  $hari1='Sel'; $hari2='Rab'; $hari3='Kam'; $hari4='Jum'; $hari5='Sen'; $hariKemarin='Sen';

				  // Senin
				  $tanggalKemarin = date('d-m-Y',strtotime($tanggal)-60*60*24-1);

				  // Selasa / Hari Ini
				  $tanggal1 = date('d-m-Y', strtotime($tanggal));

				  // Rabu
				  $tanggal2 = date('d-m-Y', strtotime($tanggal)+60*60*24*1);

				  // Kamis
				  $tanggal3 = date('d-m-Y', strtotime($tanggal)+60*60*24*2);

				  // Jumat
				  $tanggal4 = date('d-m-Y', strtotime($tanggal)+60*60*24*3);

				  // Senin
				  $tanggal5 = date('d-m-Y', strtotime($tanggal)+60*60*24*6);

				  break;

				case 'Wed' :
				  $hari1='Rab'; $hari2='Kam'; $hari3='Jum'; $hari4='Sen'; $hari5='Sel'; $hariKemarin='Sel';

				  // Selasa
				  $tanggalKemarin = date('d-m-Y',strtotime($tanggal)-60*60*24-1);

				  // Rabu / Hari Ini
				  $tanggal1 = date('d-m-Y', strtotime($tanggal));

				  // Kamis
				  $tanggal2 = date('d-m-Y', strtotime($tanggal)+60*60*24*1);

				  // Jumat
				  $tanggal3 = date('d-m-Y', strtotime($tanggal)+60*60*24*2);

				  // Senin
				  $tanggal4 = date('d-m-Y', strtotime($tanggal)+60*60*24*5);

				  // Selasa
				  $tanggal5 = date('d-m-Y', strtotime($tanggal)+60*60*24*6);

				  break;

				case 'Thu' :
				  $hari1='Kam'; $hari2='Jum'; $hari3='Sen'; $hari4='Sel'; $hari5='Rab'; $hariKemarin='Rab';

				  // Rabu
				  $tanggalKemarin = date('d-m-Y',strtotime($tanggal)-60*60*24-1);

				  // Kamis / Hari Ini
				  $tanggal1 = date('d-m-Y', strtotime($tanggal));

				  // Jumat
				  $tanggal2 = date('d-m-Y', strtotime($tanggal)+60*60*24*1);

				  // Senin
				  $tanggal3 = date('d-m-Y', strtotime($tanggal)+60*60*24*4);

				  // Selasa
				  $tanggal4 = date('d-m-Y', strtotime($tanggal)+60*60*24*5);

				  // Rabu
				  $tanggal5 = date('d-m-Y', strtotime($tanggal)+60*60*24*6);

				  break;

				case 'Fri' :
				  $hari1='Jum'; $hari2='Sen'; $hari3='Sel'; $hari4='Rab'; $hari5='Kam'; $hariKemarin='Kam';

				  // Kamis
				  $tanggalKemarin = date('d-m-Y',strtotime($tanggal)-60*60*24-1);

				  // Jumat / Hari Ini
				  $tanggal1 = date('d-m-Y', strtotime($tanggal));

				  // Senin
				  $tanggal2 = date('d-m-Y', strtotime($tanggal)+60*60*24*3);

				  // Selasa
				  $tanggal3 = date('d-m-Y', strtotime($tanggal)+60*60*24*4);

				  // Rabu
				  $tanggal4 = date('d-m-Y', strtotime($tanggal)+60*60*24*5);

				  // Kamis
				  $tanggal5 = date('d-m-Y', strtotime($tanggal)+60*60*24*6);

				  break;

				case 'Sat' :
				  $hari1='Jum'; $hari2='Sen'; $hari3='Sel'; $hari4='Rab'; $hari5='Kam'; $hariKemarin='Kam';

				  // Kamis
				  $tanggalKemarin = date('d-m-Y',strtotime($tanggal)-60*60*24-2);

				  // Jumat / Hari Ini
				  $tanggal1 = date('d-m-Y', strtotime($tanggal)-60*60*24-1);

				  // Senin
				  $tanggal2 = date('d-m-Y', strtotime($tanggal)+60*60*24*2);

				  // Selasa
				  $tanggal3 = date('d-m-Y', strtotime($tanggal)+60*60*24*3);

				  // Rabu
				  $tanggal4 = date('d-m-Y', strtotime($tanggal)+60*60*24*4);

				  // Kamis
				  $tanggal5 = date('d-m-Y', strtotime($tanggal)+60*60*24*5);

				  break;

				case 'Sun' :
				  $hari1='Jum'; $hari2='Sen'; $hari3='Sel'; $hari4='Rab'; $hari5='Kam'; $hariKemarin='Kam';

				  // Kamis
				  $tanggalKemarin = date('d-m-Y',strtotime($tanggal)-60*60*24-3);

				  // Jumat / Hari Ini
				  $tanggal1 = date('d-m-Y', strtotime($tanggal)-60*60*24-2);

				  // Senin
				  $tanggal2 = date('d-m-Y', strtotime($tanggal)+60*60*24*1);

				  // Selasa
				  $tanggal3 = date('d-m-Y', strtotime($tanggal)+60*60*24*2);

				  // Rabu
				  $tanggal4 = date('d-m-Y', strtotime($tanggal)+60*60*24*3);

				  // Kamis
				  $tanggal5 = date('d-m-Y', strtotime($tanggal)+60*60*24*4);

				  break;

			}

			// Saldo Awal Kemarin
				$salaw_kem = $this->m_home->saldo_awal($tanggalKemarin);

				// Allocated Cash Kemarin
				$allo_kem = $this->m_home->allocated_cash($tanggalKemarin);

				// Ready Cash Kemarin
				$read_kem = $this->m_home->ready_cash($tanggalKemarin);

				// Kas Besar Cabang Kemarin
				$kbc_kem = $this->m_home->kbc($tanggalKemarin);

				// Note Kemarin
				$note_kem = $this->m_home->note($tanggalKemarin);

				// Status Closing Kemarin
				$closing_kem = $this->m_home->status_closing($tanggalKemarin);

				

				// CASH-IN Hari Kemarin
				$cashin_aKem = $this->m_home->tampil_cashin_aKem($tanggalKemarin);
				$cashin_bKem = $this->m_home->tampil_cashin_bKem($tanggalKemarin);
				$cashin_cKem = $this->m_home->tampil_cashin_cKem($tanggalKemarin);
				$cashin_dKem = $this->m_home->tampil_cashin_dKem($tanggalKemarin);
				$cashin_eKem = $this->m_home->tampil_cashin_eKem($tanggalKemarin);
				$cashin_fKem = $this->m_home->tampil_cashin_fKem($tanggalKemarin);
				$cashin_gKem = $this->m_home->tampil_cashin_gKem($tanggalKemarin);
				$cashin_hKem = $this->m_home->tampil_cashin_hKem($tanggalKemarin);
				$cashin_iKem = $this->m_home->tampil_cashin_iKem($tanggalKemarin);
				$cashin_jKem = $this->m_home->tampil_cashin_jKem($tanggalKemarin);
				$cashin_kKem = $this->m_home->tampil_cashin_kKem($tanggalKemarin);
				$cashin_lKem = $this->m_home->tampil_cashin_lKem($tanggalKemarin);
				$cashin_mKem = $this->m_home->tampil_cashin_mKem($tanggalKemarin);
				$cashin_nKem = $this->m_home->tampil_cashin_nKem($tanggalKemarin);
				$cashin_oKem = $this->m_home->tampil_cashin_oKem($tanggalKemarin);
				$cashin_pKem = $this->m_home->tampil_cashin_pKem($tanggalKemarin);
				$cashin_qKem = $this->m_home->tampil_cashin_qKem($tanggalKemarin);
				$cashin_rKem = $this->m_home->tampil_cashin_rKem($tanggalKemarin);
				$cashin_sKem = $this->m_home->tampil_cashin_sKem($tanggalKemarin);
				$tCashinProj_Kem = $this->m_home->totalCashinProj_Kem($tanggalKemarin);
				// $tCashinReal_Kem = $this->m_home->totalCashinReal_Kem($tanggalKemarin);

				// ....................................................................................

				// Saldo Awal Hari-1
				$salaw_1 = $this->m_home->saldo_awal($tanggal1);

				// Allocated Cash Hari-1
				$allo_1 = $this->m_home->allocated_cash($tanggal1);

				// Ready Cash Hari-1
				$read_1 = $this->m_home->ready_cash($tanggal1);

				// Kas Besar Cabang Hari-1
				$kbc_1 = $this->m_home->kbc($tanggal1);

				// Note Hari-1
				$note_1 = $this->m_home->note($tanggal1);

				// Status Closing Hari-1
				$closing_1 = $this->m_home->status_closing($tanggal1);

				// Deposito (Hari-1)
				$deposito_1 = $this->m_home->deposito(date('Y-m-d', strtotime($tanggal1)));

				// B2B (Hari-1)
				$b2b_1 = $this->m_home->b2b(date('Y-m-d', strtotime($tanggal1)));

				// CASH-IN Hari Ke-1
				$cashin_a1 = $this->m_home->tampil_cashin_a1($tanggal1);
				$cashin_b1 = $this->m_home->tampil_cashin_b1($tanggal1);
				$cashin_c1 = $this->m_home->tampil_cashin_c1($tanggal1);
				$cashin_d1 = $this->m_home->tampil_cashin_d1($tanggal1);
				$cashin_e1 = $this->m_home->tampil_cashin_e1($tanggal1);
				$cashin_f1 = $this->m_home->tampil_cashin_f1($tanggal1);
				$cashin_g1 = $this->m_home->tampil_cashin_g1($tanggal1);
				$cashin_h1 = $this->m_home->tampil_cashin_h1($tanggal1);
				$cashin_i1 = $this->m_home->tampil_cashin_i1($tanggal1);
				$cashin_j1 = $this->m_home->tampil_cashin_j1($tanggal1);
				$cashin_k1 = $this->m_home->tampil_cashin_k1($tanggal1);
				$cashin_l1 = $this->m_home->tampil_cashin_l1($tanggal1);
				$cashin_m1 = $this->m_home->tampil_cashin_m1($tanggal1);
				$cashin_n1 = $this->m_home->tampil_cashin_n1($tanggal1);
				$cashin_o1 = $this->m_home->tampil_cashin_o1($tanggal1);
				$cashin_p1 = $this->m_home->tampil_cashin_p1($tanggal1);
				$cashin_q1 = $this->m_home->tampil_cashin_q1($tanggal1);
				$cashin_r1 = $this->m_home->tampil_cashin_r1($tanggal1);
				$cashin_s1 = $this->m_home->tampil_cashin_s1($tanggal1);
				$tCashinProj_1 = $this->m_home->totalCashinProj_1($tanggal1);
				$tCashinReal_1 = $this->m_home->totalCashinReal_1($tanggal1);

				// ....................................................................................

				// Saldo Awal Hari-2
				$salaw_2 = $this->m_home->saldo_awal($tanggal2);

				// Allocated Cash Hari-2
				$allo_2 = $this->m_home->allocated_cash($tanggal2);

				// Ready Cash Hari-2
				$read_2 = $this->m_home->ready_cash($tanggal2);

				// Kas Besar Cabang Hari-2
				$kbc_2 = $this->m_home->kbc($tanggal2);

				// Note Hari-2
				$note_2 = $this->m_home->note($tanggal2);

				// Status Closing Hari-2
				$closing_2 = $this->m_home->status_closing($tanggal2);

				// Deposito (Hari-2)
				$deposito_2 = $this->m_home->deposito(date('Y-m-d', strtotime($tanggal2)));

				// B2B (Hari-2)
				$b2b_2 = $this->m_home->b2b(date('Y-m-d', strtotime($tanggal2)));

				// CASH-IN Hari Ke-2
				$cashin_a2 = $this->m_home->tampil_cashin_a2($tanggal2);
				$cashin_b2 = $this->m_home->tampil_cashin_b2($tanggal2);
				$cashin_c2 = $this->m_home->tampil_cashin_c2($tanggal2);
				$cashin_d2 = $this->m_home->tampil_cashin_d2($tanggal2);
				$cashin_e2 = $this->m_home->tampil_cashin_e2($tanggal2);
				$cashin_f2 = $this->m_home->tampil_cashin_f2($tanggal2);
				$cashin_g2 = $this->m_home->tampil_cashin_g2($tanggal2);
				$cashin_h2 = $this->m_home->tampil_cashin_h2($tanggal2);
				$cashin_i2 = $this->m_home->tampil_cashin_i2($tanggal2);
				$cashin_j2 = $this->m_home->tampil_cashin_j2($tanggal2);
				$cashin_k2 = $this->m_home->tampil_cashin_k2($tanggal2);
				$cashin_l2 = $this->m_home->tampil_cashin_l2($tanggal2);
				$cashin_m2 = $this->m_home->tampil_cashin_m2($tanggal2);
				$cashin_n2 = $this->m_home->tampil_cashin_n2($tanggal2);
				$cashin_o2 = $this->m_home->tampil_cashin_o2($tanggal2);
				$cashin_p2 = $this->m_home->tampil_cashin_p2($tanggal2);
				$cashin_q2 = $this->m_home->tampil_cashin_q2($tanggal2);
				$cashin_r2 = $this->m_home->tampil_cashin_r2($tanggal2);
				$cashin_s2 = $this->m_home->tampil_cashin_s2($tanggal2);
				$tCashinProj_2 = $this->m_home->totalCashinProj_2($tanggal2);
				$tCashinReal_2 = $this->m_home->totalCashinReal_2($tanggal2);

				// ....................................................................................

				// Saldo Awal Hari-3
				$salaw_3 = $this->m_home->saldo_awal($tanggal3);

				// Allocated Cash Hari-3
				$allo_3 = $this->m_home->allocated_cash($tanggal3);

				// Ready Cash Hari-3
				$read_3 = $this->m_home->ready_cash($tanggal3);

				// Kas Besar Cabang Hari-3
				$kbc_3 = $this->m_home->kbc($tanggal3);

				// Note Hari-3
				$note_3 = $this->m_home->note($tanggal3);

				// Status Closing Hari-3
				$closing_3 = $this->m_home->status_closing($tanggal3);

				// Deposito (Hari-3)
				$deposito_3 = $this->m_home->deposito(date('Y-m-d', strtotime($tanggal3)));

				// B2B (Hari-3)
				$b2b_3 = $this->m_home->b2b(date('Y-m-d', strtotime($tanggal3)));


				// CASH-IN Hari Ke-3
				$cashin_a3 = $this->m_home->tampil_cashin_a3($tanggal3);
				$cashin_b3 = $this->m_home->tampil_cashin_b3($tanggal3);
				$cashin_c3 = $this->m_home->tampil_cashin_c3($tanggal3);
				$cashin_d3 = $this->m_home->tampil_cashin_d3($tanggal3);
				$cashin_e3 = $this->m_home->tampil_cashin_e3($tanggal3);
				$cashin_f3 = $this->m_home->tampil_cashin_f3($tanggal3);
				$cashin_g3 = $this->m_home->tampil_cashin_g3($tanggal3);
				$cashin_h3 = $this->m_home->tampil_cashin_h3($tanggal3);
				$cashin_i3 = $this->m_home->tampil_cashin_i3($tanggal3);
				$cashin_j3 = $this->m_home->tampil_cashin_j3($tanggal3);
				$cashin_k3 = $this->m_home->tampil_cashin_k3($tanggal3);
				$cashin_l3 = $this->m_home->tampil_cashin_l3($tanggal3);
				$cashin_m3 = $this->m_home->tampil_cashin_m3($tanggal3);
				$cashin_n3 = $this->m_home->tampil_cashin_n3($tanggal3);
				$cashin_o3 = $this->m_home->tampil_cashin_o3($tanggal3);
				$cashin_p3 = $this->m_home->tampil_cashin_p3($tanggal3);
				$cashin_q3 = $this->m_home->tampil_cashin_q3($tanggal3);
				$cashin_r3 = $this->m_home->tampil_cashin_r3($tanggal3);
				$cashin_s3 = $this->m_home->tampil_cashin_s3($tanggal3);
				$tCashinProj_3 = $this->m_home->totalCashinProj_3($tanggal3);
				$tCashinReal_3 = $this->m_home->totalCashinReal_3($tanggal3);

				// ....................................................................................

				// Saldo Awal Hari-4
				$salaw_4 = $this->m_home->saldo_awal($tanggal4);

				// Allocated Cash Hari-4
				$allo_4 = $this->m_home->allocated_cash($tanggal4);

				// Ready Cash Hari-4
				$read_4 = $this->m_home->ready_cash($tanggal4);

				// Kas Besar Cabang Hari-4
				$kbc_4 = $this->m_home->kbc($tanggal4);

				// Note Hari-4
				$note_4 = $this->m_home->note($tanggal4);

				// Status Closing Hari-4
				$closing_4 = $this->m_home->status_closing($tanggal4);

				// Deposito (Hari-4)
				$deposito_4 = $this->m_home->deposito(date('Y-m-d', strtotime($tanggal4)));

				// B2B (Hari-4)
				$b2b_4 = $this->m_home->b2b(date('Y-m-d', strtotime($tanggal4)));

				// CASH-IN Hari Ke-4
				$cashin_a4 = $this->m_home->tampil_cashin_a4($tanggal4);
				$cashin_b4 = $this->m_home->tampil_cashin_b4($tanggal4);
				$cashin_c4 = $this->m_home->tampil_cashin_c4($tanggal4);
				$cashin_d4 = $this->m_home->tampil_cashin_d4($tanggal4);
				$cashin_e4 = $this->m_home->tampil_cashin_e4($tanggal4);
				$cashin_f4 = $this->m_home->tampil_cashin_f4($tanggal4);
				$cashin_g4 = $this->m_home->tampil_cashin_g4($tanggal4);
				$cashin_h4 = $this->m_home->tampil_cashin_h4($tanggal4);
				$cashin_i4 = $this->m_home->tampil_cashin_i4($tanggal4);
				$cashin_j4 = $this->m_home->tampil_cashin_j4($tanggal4);
				$cashin_k4 = $this->m_home->tampil_cashin_k4($tanggal4);
				$cashin_l4 = $this->m_home->tampil_cashin_l4($tanggal4);
				$cashin_m4 = $this->m_home->tampil_cashin_m4($tanggal4);
				$cashin_n4 = $this->m_home->tampil_cashin_n4($tanggal4);
				$cashin_o4 = $this->m_home->tampil_cashin_o4($tanggal4);
				$cashin_p4 = $this->m_home->tampil_cashin_p4($tanggal4);
				$cashin_q4 = $this->m_home->tampil_cashin_q4($tanggal4);
				$cashin_r4 = $this->m_home->tampil_cashin_r4($tanggal4);
				$cashin_s4 = $this->m_home->tampil_cashin_s4($tanggal4);
				$tCashinProj_4 = $this->m_home->totalCashinProj_4($tanggal4);
				$tCashinReal_4 = $this->m_home->totalCashinReal_4($tanggal4);

				// ....................................................................................

				// Saldo Awal Hari-5
				$salaw_5 = $this->m_home->saldo_awal($tanggal5);

				// Allocated Cash Hari-5
				$allo_5 = $this->m_home->allocated_cash($tanggal5);

				// Ready Cash Hari-5
				$read_5 = $this->m_home->ready_cash($tanggal5);

				// Kas Besar Cabang Hari-5
				$kbc_5 = $this->m_home->kbc($tanggal5);

				// Note Hari-5
				$note_5 = $this->m_home->note($tanggal5);

				// Status Closing Hari-5
				$closing_5 = $this->m_home->status_closing($tanggal5);

				// Deposito (Hari-5)
				$deposito_5 = $this->m_home->deposito(date('Y-m-d', strtotime($tanggal5)));

				// B2B (Hari-5)
				$b2b_5 = $this->m_home->b2b(date('Y-m-d', strtotime($tanggal5)));

				// CASH-IN Hari Ke-5
				$cashin_a5 = $this->m_home->tampil_cashin_a5($tanggal5);
				$cashin_b5 = $this->m_home->tampil_cashin_b5($tanggal5);
				$cashin_c5 = $this->m_home->tampil_cashin_c5($tanggal5);
				$cashin_d5 = $this->m_home->tampil_cashin_d5($tanggal5);
				$cashin_e5 = $this->m_home->tampil_cashin_e5($tanggal5);
				$cashin_f5 = $this->m_home->tampil_cashin_f5($tanggal5);
				$cashin_g5 = $this->m_home->tampil_cashin_g5($tanggal5);
				$cashin_h5 = $this->m_home->tampil_cashin_h5($tanggal5);
				$cashin_i5 = $this->m_home->tampil_cashin_i5($tanggal5);
				$cashin_j5 = $this->m_home->tampil_cashin_j5($tanggal5);
				$cashin_k5 = $this->m_home->tampil_cashin_k5($tanggal5);
				$cashin_l5 = $this->m_home->tampil_cashin_l5($tanggal5);
				$cashin_m5 = $this->m_home->tampil_cashin_m5($tanggal5);
				$cashin_n5 = $this->m_home->tampil_cashin_n5($tanggal5);
				$cashin_o5 = $this->m_home->tampil_cashin_o5($tanggal5);
				$cashin_p5 = $this->m_home->tampil_cashin_p5($tanggal5);
				$cashin_q5 = $this->m_home->tampil_cashin_q5($tanggal5);
				$cashin_r5 = $this->m_home->tampil_cashin_r5($tanggal5);
				$cashin_s5 = $this->m_home->tampil_cashin_s5($tanggal5);
				$tCashinProj_5 = $this->m_home->totalCashinProj_5($tanggal5);
				$tCashinReal_5 = $this->m_home->totalCashinReal_5($tanggal5);

				// ...................................................................................

				// CASH-OUT Hari Kemarin
				$cashout_aKem = $this->m_home->tampil_cashout_aKem($tanggalKemarin);
				$cashout_bKem = $this->m_home->tampil_cashout_bKem($tanggalKemarin);
				$cashout_cKem = $this->m_home->tampil_cashout_cKem($tanggalKemarin);
				$cashout_dKem = $this->m_home->tampil_cashout_dKem($tanggalKemarin);
				$cashout_eKem = $this->m_home->tampil_cashout_eKem($tanggalKemarin);
				$cashout_fKem = $this->m_home->tampil_cashout_fKem($tanggalKemarin);
				$cashout_gKem = $this->m_home->tampil_cashout_gKem($tanggalKemarin);
				$cashout_hKem = $this->m_home->tampil_cashout_hKem($tanggalKemarin);
				$cashout_iKem = $this->m_home->tampil_cashout_iKem($tanggalKemarin);
				$cashout_jKem = $this->m_home->tampil_cashout_jKem($tanggalKemarin);
				$cashout_kKem = $this->m_home->tampil_cashout_kKem($tanggalKemarin);
				$cashout_lKem = $this->m_home->tampil_cashout_lKem($tanggalKemarin);
				$cashout_mKem = $this->m_home->tampil_cashout_mKem($tanggalKemarin);
				$cashout_nKem = $this->m_home->tampil_cashout_nKem($tanggalKemarin);
				$cashout_oKem = $this->m_home->tampil_cashout_oKem($tanggalKemarin);
				$cashout_pKem = $this->m_home->tampil_cashout_pKem($tanggalKemarin);
				$cashout_qKem = $this->m_home->tampil_cashout_qKem($tanggalKemarin);
				$cashout_rKem = $this->m_home->tampil_cashout_rKem($tanggalKemarin);
				$cashout_sKem = $this->m_home->tampil_cashout_sKem($tanggalKemarin);
				$cashout_tKem = $this->m_home->tampil_cashout_tKem($tanggalKemarin);
				$cashout_uKem = $this->m_home->tampil_cashout_uKem($tanggalKemarin);
				$cashout_vKem = $this->m_home->tampil_cashout_vKem($tanggalKemarin);
				$cashout_wKem = $this->m_home->tampil_cashout_wKem($tanggalKemarin);
				$cashout_xKem = $this->m_home->tampil_cashout_xKem($tanggalKemarin);
				$cashout_yKem = $this->m_home->tampil_cashout_yKem($tanggalKemarin);
				$cashout_zKem = $this->m_home->tampil_cashout_zKem($tanggalKemarin);
				$cashout_a2Kem = $this->m_home->tampil_cashout_a2Kem($tanggalKemarin);
				$cashout_b2Kem = $this->m_home->tampil_cashout_b2Kem($tanggalKemarin);
				$cashout_c2Kem = $this->m_home->tampil_cashout_c2Kem($tanggalKemarin);
				$cashout_d2Kem = $this->m_home->tampil_cashout_d2Kem($tanggalKemarin);
				$cashout_e2Kem = $this->m_home->tampil_cashout_e2Kem($tanggalKemarin);
				$cashout_f2Kem = $this->m_home->tampil_cashout_f2Kem($tanggalKemarin);
				$cashout_g2Kem = $this->m_home->tampil_cashout_g2Kem($tanggalKemarin);
				$cashout_h2Kem = $this->m_home->tampil_cashout_h2Kem($tanggalKemarin);
				$cashout_i2Kem = $this->m_home->tampil_cashout_i2Kem($tanggalKemarin);
				$cashout_j2Kem = $this->m_home->tampil_cashout_j2Kem($tanggalKemarin);
				$cashout_k2Kem = $this->m_home->tampil_cashout_k2Kem($tanggalKemarin);
				$cashout_l2Kem = $this->m_home->tampil_cashout_l2Kem($tanggalKemarin);
				$cashout_m2Kem = $this->m_home->tampil_cashout_m2Kem($tanggalKemarin);
				$cashout_n2Kem = $this->m_home->tampil_cashout_n2Kem($tanggalKemarin);
				$cashout_o2Kem = $this->m_home->tampil_cashout_o2Kem($tanggalKemarin);
				$cashout_p2Kem = $this->m_home->tampil_cashout_p2Kem($tanggalKemarin);
				$cashout_q2Kem = $this->m_home->tampil_cashout_q2Kem($tanggalKemarin);
				$cashout_r2Kem = $this->m_home->tampil_cashout_r2Kem($tanggalKemarin);
				$cashout_s2Kem = $this->m_home->tampil_cashout_s2Kem($tanggalKemarin);
				$cashout_t2Kem = $this->m_home->tampil_cashout_t2Kem($tanggalKemarin);
				$cashout_u2Kem = $this->m_home->tampil_cashout_u2Kem($tanggalKemarin);
				$tCashoutProj_Kem = $this->m_home->totalCashoutProj_Kem($tanggalKemarin);
				// $tCashoutReal_Kem = $this->m_home->totalCashoutReal_Kem($tanggalKemarin);

				// CASH-OUT Hari Ke-1
				$cashout_a1 = $this->m_home->tampil_cashout_a1($tanggal1);
				$cashout_b1 = $this->m_home->tampil_cashout_b1($tanggal1);
				$cashout_c1 = $this->m_home->tampil_cashout_c1($tanggal1);
				$cashout_d1 = $this->m_home->tampil_cashout_d1($tanggal1);
				$cashout_e1 = $this->m_home->tampil_cashout_e1($tanggal1);
				$cashout_f1 = $this->m_home->tampil_cashout_f1($tanggal1);
				$cashout_g1 = $this->m_home->tampil_cashout_g1($tanggal1);
				$cashout_h1 = $this->m_home->tampil_cashout_h1($tanggal1);
				$cashout_i1 = $this->m_home->tampil_cashout_i1($tanggal1);
				$cashout_j1 = $this->m_home->tampil_cashout_j1($tanggal1);
				$cashout_k1 = $this->m_home->tampil_cashout_k1($tanggal1);
				$cashout_l1 = $this->m_home->tampil_cashout_l1($tanggal1);
				$cashout_m1 = $this->m_home->tampil_cashout_m1($tanggal1);
				$cashout_n1 = $this->m_home->tampil_cashout_n1($tanggal1);
				$cashout_o1 = $this->m_home->tampil_cashout_o1($tanggal1);
				$cashout_p1 = $this->m_home->tampil_cashout_p1($tanggal1);
				$cashout_q1 = $this->m_home->tampil_cashout_q1($tanggal1);
				$cashout_r1 = $this->m_home->tampil_cashout_r1($tanggal1);
				$cashout_s1 = $this->m_home->tampil_cashout_s1($tanggal1);
				$cashout_t1 = $this->m_home->tampil_cashout_t1($tanggal1);
				$cashout_u1 = $this->m_home->tampil_cashout_u1($tanggal1);
				$cashout_v1 = $this->m_home->tampil_cashout_v1($tanggal1);
				$cashout_w1 = $this->m_home->tampil_cashout_w1($tanggal1);
				$cashout_x1 = $this->m_home->tampil_cashout_x1($tanggal1);
				$cashout_y1 = $this->m_home->tampil_cashout_y1($tanggal1);
				$cashout_z1 = $this->m_home->tampil_cashout_z1($tanggal1);
				$cashout_a21 = $this->m_home->tampil_cashout_a21($tanggal1);
				$cashout_b21 = $this->m_home->tampil_cashout_b21($tanggal1);
				$cashout_c21 = $this->m_home->tampil_cashout_c21($tanggal1);
				$cashout_d21 = $this->m_home->tampil_cashout_d21($tanggal1);
				$cashout_e21 = $this->m_home->tampil_cashout_e21($tanggal1);
				$cashout_f21 = $this->m_home->tampil_cashout_f21($tanggal1);
				$cashout_g21 = $this->m_home->tampil_cashout_g21($tanggal1);
				$cashout_h21 = $this->m_home->tampil_cashout_h21($tanggal1);
				$cashout_i21 = $this->m_home->tampil_cashout_i21($tanggal1);
				$cashout_j21 = $this->m_home->tampil_cashout_j21($tanggal1);
				$cashout_k21 = $this->m_home->tampil_cashout_k21($tanggal1);
				$cashout_l21 = $this->m_home->tampil_cashout_l21($tanggal1);
				$cashout_m21 = $this->m_home->tampil_cashout_m21($tanggal1);
				$cashout_n21 = $this->m_home->tampil_cashout_n21($tanggal1);
				$cashout_o21 = $this->m_home->tampil_cashout_o21($tanggal1);
				$cashout_p21 = $this->m_home->tampil_cashout_p21($tanggal1);
				$cashout_q21 = $this->m_home->tampil_cashout_q21($tanggal1);
				$cashout_r21 = $this->m_home->tampil_cashout_r21($tanggal1);
				$cashout_s21 = $this->m_home->tampil_cashout_s21($tanggal1);
				$cashout_t21 = $this->m_home->tampil_cashout_t21($tanggal1);
				$cashout_u21 = $this->m_home->tampil_cashout_u21($tanggal1);
				$cashout_v21 = $this->m_home->tampil_cashout_v21($tanggal1);
				$cashout_w21 = $this->m_home->tampil_cashout_w21($tanggal1);
				$cashout_x21 = $this->m_home->tampil_cashout_x21($tanggal1);
				$cashout_y21 = $this->m_home->tampil_cashout_y21($tanggal1);
				$cashout_z21 = $this->m_home->tampil_cashout_z21($tanggal1);
				$cashout_a31 = $this->m_home->tampil_cashout_a31($tanggal1);
				$cashout_b31 = $this->m_home->tampil_cashout_b31($tanggal1);
				$cashout_c31 = $this->m_home->tampil_cashout_c31($tanggal1);
				$cashout_d31 = $this->m_home->tampil_cashout_d31($tanggal1);
				$cashout_e31 = $this->m_home->tampil_cashout_e31($tanggal1);
				$cashout_f31 = $this->m_home->tampil_cashout_f31($tanggal1);
				$cashout_g31 = $this->m_home->tampil_cashout_g31($tanggal1);
				$cashout_h31 = $this->m_home->tampil_cashout_h31($tanggal1);
				$cashout_i31 = $this->m_home->tampil_cashout_i31($tanggal1);
				$cashout_j31 = $this->m_home->tampil_cashout_j31($tanggal1);
				$cashout_k31 = $this->m_home->tampil_cashout_k31($tanggal1);
				$cashout_l31 = $this->m_home->tampil_cashout_l31($tanggal1);
				$cashout_m31 = $this->m_home->tampil_cashout_m31($tanggal1);
				$cashout_n31 = $this->m_home->tampil_cashout_n31($tanggal1);
				$cashout_o31 = $this->m_home->tampil_cashout_o31($tanggal1);
				$cashout_p31 = $this->m_home->tampil_cashout_p31($tanggal1);
				$cashout_q31 = $this->m_home->tampil_cashout_q31($tanggal1);
				$cashout_r31 = $this->m_home->tampil_cashout_r31($tanggal1);
				$cashout_s31 = $this->m_home->tampil_cashout_s31($tanggal1);
				$cashout_t31 = $this->m_home->tampil_cashout_t31($tanggal1);
				$cashout_u31 = $this->m_home->tampil_cashout_u31($tanggal1);
				$cashout_v31 = $this->m_home->tampil_cashout_v31($tanggal1);
				$cashout_w31 = $this->m_home->tampil_cashout_w31($tanggal1);
				$cashout_x31 = $this->m_home->tampil_cashout_x31($tanggal1);
				$cashout_y31 = $this->m_home->tampil_cashout_y31($tanggal1);
				$cashout_z31 = $this->m_home->tampil_cashout_z31($tanggal1);
				$cashout_a41 = $this->m_home->tampil_cashout_a41($tanggal1);
				$cashout_b41 = $this->m_home->tampil_cashout_b41($tanggal1);
				$tCashoutProj_1 = $this->m_home->totalCashoutProj_1($tanggal1);
				$tCashoutReal_1 = $this->m_home->totalCashoutReal_1($tanggal1);


				// CASH-OUT Hari Ke-2
				$cashout_a2 = $this->m_home->tampil_cashout_a2($tanggal2);
				$cashout_b2 = $this->m_home->tampil_cashout_b2($tanggal2);
				$cashout_c2 = $this->m_home->tampil_cashout_c2($tanggal2);
				$cashout_d2 = $this->m_home->tampil_cashout_d2($tanggal2);
				$cashout_e2 = $this->m_home->tampil_cashout_e2($tanggal2);
				$cashout_f2 = $this->m_home->tampil_cashout_f2($tanggal2);
				$cashout_g2 = $this->m_home->tampil_cashout_g2($tanggal2);
				$cashout_h2 = $this->m_home->tampil_cashout_h2($tanggal2);
				$cashout_i2 = $this->m_home->tampil_cashout_i2($tanggal2);
				$cashout_j2 = $this->m_home->tampil_cashout_j2($tanggal2);
				$cashout_k2 = $this->m_home->tampil_cashout_k2($tanggal2);
				$cashout_l2 = $this->m_home->tampil_cashout_l2($tanggal2);
				$cashout_m2 = $this->m_home->tampil_cashout_m2($tanggal2);
				$cashout_n2 = $this->m_home->tampil_cashout_n2($tanggal2);
				$cashout_o2 = $this->m_home->tampil_cashout_o2($tanggal2);
				$cashout_p2 = $this->m_home->tampil_cashout_p2($tanggal2);
				$cashout_q2 = $this->m_home->tampil_cashout_q2($tanggal2);
				$cashout_r2 = $this->m_home->tampil_cashout_r2($tanggal2);
				$cashout_s2 = $this->m_home->tampil_cashout_s2($tanggal2);
				$cashout_t2 = $this->m_home->tampil_cashout_t2($tanggal2);
				$cashout_u2 = $this->m_home->tampil_cashout_u2($tanggal2);
				$cashout_v2 = $this->m_home->tampil_cashout_v2($tanggal2);
				$cashout_w2 = $this->m_home->tampil_cashout_w2($tanggal2);
				$cashout_x2 = $this->m_home->tampil_cashout_x2($tanggal2);
				$cashout_y2 = $this->m_home->tampil_cashout_y2($tanggal2);
				$cashout_z2 = $this->m_home->tampil_cashout_z2($tanggal2);
				$cashout_a22 = $this->m_home->tampil_cashout_a22($tanggal2);
				$cashout_b22 = $this->m_home->tampil_cashout_b22($tanggal2);
				$cashout_c22 = $this->m_home->tampil_cashout_c22($tanggal2);
				$cashout_d22 = $this->m_home->tampil_cashout_d22($tanggal2);
				$cashout_e22 = $this->m_home->tampil_cashout_e22($tanggal2);
				$cashout_f22 = $this->m_home->tampil_cashout_f22($tanggal2);
				$cashout_g22 = $this->m_home->tampil_cashout_g22($tanggal2);
				$cashout_h22 = $this->m_home->tampil_cashout_h22($tanggal2);
				$cashout_i22 = $this->m_home->tampil_cashout_i22($tanggal2);
				$cashout_j22 = $this->m_home->tampil_cashout_j22($tanggal2);
				$cashout_k22 = $this->m_home->tampil_cashout_k22($tanggal2);
				$cashout_l22 = $this->m_home->tampil_cashout_l22($tanggal2);
				$cashout_m22 = $this->m_home->tampil_cashout_m22($tanggal2);
				$cashout_n22 = $this->m_home->tampil_cashout_n22($tanggal2);
				$cashout_o22 = $this->m_home->tampil_cashout_o22($tanggal2);
				$cashout_p22 = $this->m_home->tampil_cashout_p22($tanggal2);
				$cashout_q22 = $this->m_home->tampil_cashout_q22($tanggal2);
				$cashout_r22 = $this->m_home->tampil_cashout_r22($tanggal2);
				$cashout_s22 = $this->m_home->tampil_cashout_s22($tanggal2);
				$cashout_t22 = $this->m_home->tampil_cashout_t22($tanggal2);
				$cashout_u22 = $this->m_home->tampil_cashout_u22($tanggal2);
				$cashout_v22 = $this->m_home->tampil_cashout_v22($tanggal2);
				$cashout_w22 = $this->m_home->tampil_cashout_w22($tanggal2);
				$cashout_x22 = $this->m_home->tampil_cashout_x22($tanggal2);
				$cashout_y22 = $this->m_home->tampil_cashout_y22($tanggal2);
				$cashout_z22 = $this->m_home->tampil_cashout_z22($tanggal2);
				$cashout_a32 = $this->m_home->tampil_cashout_a32($tanggal2);
				$cashout_b32 = $this->m_home->tampil_cashout_b32($tanggal2);
				$cashout_c32 = $this->m_home->tampil_cashout_c32($tanggal2);
				$cashout_d32 = $this->m_home->tampil_cashout_d32($tanggal2);
				$cashout_e32 = $this->m_home->tampil_cashout_e32($tanggal2);
				$cashout_f32 = $this->m_home->tampil_cashout_f32($tanggal2);
				$cashout_g32 = $this->m_home->tampil_cashout_g32($tanggal2);
				$cashout_h32 = $this->m_home->tampil_cashout_h32($tanggal2);
				$cashout_i32 = $this->m_home->tampil_cashout_i32($tanggal2);
				$cashout_j32 = $this->m_home->tampil_cashout_j32($tanggal2);
				$cashout_k32 = $this->m_home->tampil_cashout_k32($tanggal2);
				$cashout_l32 = $this->m_home->tampil_cashout_l32($tanggal2);
				$cashout_m32 = $this->m_home->tampil_cashout_m32($tanggal2);
				$cashout_n32 = $this->m_home->tampil_cashout_n32($tanggal2);
				$cashout_o32 = $this->m_home->tampil_cashout_o32($tanggal2);
				$cashout_p32 = $this->m_home->tampil_cashout_p32($tanggal2);
				$cashout_q32 = $this->m_home->tampil_cashout_q32($tanggal2);
				$cashout_r32 = $this->m_home->tampil_cashout_r32($tanggal2);
				$cashout_s32 = $this->m_home->tampil_cashout_s32($tanggal2);
				$cashout_t32 = $this->m_home->tampil_cashout_t32($tanggal2);
				$cashout_u32 = $this->m_home->tampil_cashout_u32($tanggal2);
				$cashout_v32 = $this->m_home->tampil_cashout_v32($tanggal2);
				$cashout_w32 = $this->m_home->tampil_cashout_w32($tanggal2);
				$cashout_x32 = $this->m_home->tampil_cashout_x32($tanggal2);
				$cashout_y32 = $this->m_home->tampil_cashout_y32($tanggal2);
				$cashout_z32 = $this->m_home->tampil_cashout_z32($tanggal2);
				$cashout_a42 = $this->m_home->tampil_cashout_a42($tanggal2);
				$cashout_b42 = $this->m_home->tampil_cashout_b42($tanggal2);
				$tCashoutProj_2 = $this->m_home->totalCashoutProj_2($tanggal2);
				$tCashoutReal_2 = $this->m_home->totalCashoutReal_2($tanggal2);


				// CASH-OUT Hari Ke-3
				$cashout_a3 = $this->m_home->tampil_cashout_a3($tanggal3);
				$cashout_b3 = $this->m_home->tampil_cashout_b3($tanggal3);
				$cashout_c3 = $this->m_home->tampil_cashout_c3($tanggal3);
				$cashout_d3 = $this->m_home->tampil_cashout_d3($tanggal3);
				$cashout_e3 = $this->m_home->tampil_cashout_e3($tanggal3);
				$cashout_f3 = $this->m_home->tampil_cashout_f3($tanggal3);
				$cashout_g3 = $this->m_home->tampil_cashout_g3($tanggal3);
				$cashout_h3 = $this->m_home->tampil_cashout_h3($tanggal3);
				$cashout_i3 = $this->m_home->tampil_cashout_i3($tanggal3);
				$cashout_j3 = $this->m_home->tampil_cashout_j3($tanggal3);
				$cashout_k3 = $this->m_home->tampil_cashout_k3($tanggal3);
				$cashout_l3 = $this->m_home->tampil_cashout_l3($tanggal3);
				$cashout_m3 = $this->m_home->tampil_cashout_m3($tanggal3);
				$cashout_n3 = $this->m_home->tampil_cashout_n3($tanggal3);
				$cashout_o3 = $this->m_home->tampil_cashout_o3($tanggal3);
				$cashout_p3 = $this->m_home->tampil_cashout_p3($tanggal3);
				$cashout_q3 = $this->m_home->tampil_cashout_q3($tanggal3);
				$cashout_r3 = $this->m_home->tampil_cashout_r3($tanggal3);
				$cashout_s3 = $this->m_home->tampil_cashout_s3($tanggal3);
				$cashout_t3 = $this->m_home->tampil_cashout_t3($tanggal3);
				$cashout_u3 = $this->m_home->tampil_cashout_u3($tanggal3);
				$cashout_v3 = $this->m_home->tampil_cashout_v3($tanggal3);
				$cashout_w3 = $this->m_home->tampil_cashout_w3($tanggal3);
				$cashout_x3 = $this->m_home->tampil_cashout_x3($tanggal3);
				$cashout_y3 = $this->m_home->tampil_cashout_y3($tanggal3);
				$cashout_z3 = $this->m_home->tampil_cashout_z3($tanggal3);
				$cashout_a23 = $this->m_home->tampil_cashout_a23($tanggal3);
				$cashout_b23 = $this->m_home->tampil_cashout_b23($tanggal3);
				$cashout_c23 = $this->m_home->tampil_cashout_c23($tanggal3);
				$cashout_d23 = $this->m_home->tampil_cashout_d23($tanggal3);
				$cashout_e23 = $this->m_home->tampil_cashout_e23($tanggal3);
				$cashout_f23 = $this->m_home->tampil_cashout_f23($tanggal3);
				$cashout_g23 = $this->m_home->tampil_cashout_g23($tanggal3);
				$cashout_h23 = $this->m_home->tampil_cashout_h23($tanggal3);
				$cashout_i23 = $this->m_home->tampil_cashout_i23($tanggal3);
				$cashout_j23 = $this->m_home->tampil_cashout_j23($tanggal3);
				$cashout_k23 = $this->m_home->tampil_cashout_k23($tanggal3);
				$cashout_l23 = $this->m_home->tampil_cashout_l23($tanggal3);
				$cashout_m23 = $this->m_home->tampil_cashout_m23($tanggal3);
				$cashout_n23 = $this->m_home->tampil_cashout_n23($tanggal3);
				$cashout_o23 = $this->m_home->tampil_cashout_o23($tanggal3);
				$cashout_p23 = $this->m_home->tampil_cashout_p23($tanggal3);
				$cashout_q23 = $this->m_home->tampil_cashout_q23($tanggal3);
				$cashout_r23 = $this->m_home->tampil_cashout_r23($tanggal3);
				$cashout_s23 = $this->m_home->tampil_cashout_s23($tanggal3);
				$cashout_t23 = $this->m_home->tampil_cashout_t23($tanggal3);
				$cashout_u23 = $this->m_home->tampil_cashout_u23($tanggal3);
				$cashout_v23 = $this->m_home->tampil_cashout_v23($tanggal3);
				$cashout_w23 = $this->m_home->tampil_cashout_w23($tanggal3);
				$cashout_x23 = $this->m_home->tampil_cashout_x23($tanggal3);
				$cashout_y23 = $this->m_home->tampil_cashout_y23($tanggal3);
				$cashout_z23 = $this->m_home->tampil_cashout_z23($tanggal3);
				$cashout_a33 = $this->m_home->tampil_cashout_a33($tanggal3);
				$cashout_b33 = $this->m_home->tampil_cashout_b33($tanggal3);
				$cashout_c33 = $this->m_home->tampil_cashout_c33($tanggal3);
				$cashout_d33 = $this->m_home->tampil_cashout_d33($tanggal3);
				$cashout_e33 = $this->m_home->tampil_cashout_e33($tanggal3);
				$cashout_f33 = $this->m_home->tampil_cashout_f33($tanggal3);
				$cashout_g33 = $this->m_home->tampil_cashout_g33($tanggal3);
				$cashout_h33 = $this->m_home->tampil_cashout_h33($tanggal3);
				$cashout_i33 = $this->m_home->tampil_cashout_i33($tanggal3);
				$cashout_j33 = $this->m_home->tampil_cashout_j33($tanggal3);
				$cashout_k33 = $this->m_home->tampil_cashout_k33($tanggal3);
				$cashout_l33 = $this->m_home->tampil_cashout_l33($tanggal3);
				$cashout_m33 = $this->m_home->tampil_cashout_m33($tanggal3);
				$cashout_n33 = $this->m_home->tampil_cashout_n33($tanggal3);
				$cashout_o33 = $this->m_home->tampil_cashout_o33($tanggal3);
				$cashout_p33 = $this->m_home->tampil_cashout_p33($tanggal3);
				$cashout_q33 = $this->m_home->tampil_cashout_q33($tanggal3);
				$cashout_r33 = $this->m_home->tampil_cashout_r33($tanggal3);
				$cashout_s33 = $this->m_home->tampil_cashout_s33($tanggal3);
				$cashout_t33 = $this->m_home->tampil_cashout_t33($tanggal3);
				$cashout_u33 = $this->m_home->tampil_cashout_u33($tanggal3);
				$cashout_v33 = $this->m_home->tampil_cashout_v33($tanggal3);
				$cashout_w33 = $this->m_home->tampil_cashout_w33($tanggal3);
				$cashout_x33 = $this->m_home->tampil_cashout_x33($tanggal3);
				$cashout_y33 = $this->m_home->tampil_cashout_y33($tanggal3);
				$cashout_z33 = $this->m_home->tampil_cashout_z33($tanggal3);
				$cashout_a43 = $this->m_home->tampil_cashout_a43($tanggal3);
				$cashout_b43 = $this->m_home->tampil_cashout_b43($tanggal3);
				$tCashoutProj_3 = $this->m_home->totalCashoutProj_3($tanggal3);
				$tCashoutReal_3 = $this->m_home->totalCashoutReal_3($tanggal3);


				// CASH-OUT Hari Ke-4
				$cashout_a4 = $this->m_home->tampil_cashout_a4($tanggal4);
				$cashout_b4 = $this->m_home->tampil_cashout_b4($tanggal4);
				$cashout_c4 = $this->m_home->tampil_cashout_c4($tanggal4);
				$cashout_d4 = $this->m_home->tampil_cashout_d4($tanggal4);
				$cashout_e4 = $this->m_home->tampil_cashout_e4($tanggal4);
				$cashout_f4 = $this->m_home->tampil_cashout_f4($tanggal4);
				$cashout_g4 = $this->m_home->tampil_cashout_g4($tanggal4);
				$cashout_h4 = $this->m_home->tampil_cashout_h4($tanggal4);
				$cashout_i4 = $this->m_home->tampil_cashout_i4($tanggal4);
				$cashout_j4 = $this->m_home->tampil_cashout_j4($tanggal4);
				$cashout_k4 = $this->m_home->tampil_cashout_k4($tanggal4);
				$cashout_l4 = $this->m_home->tampil_cashout_l4($tanggal4);
				$cashout_m4 = $this->m_home->tampil_cashout_m4($tanggal4);
				$cashout_n4 = $this->m_home->tampil_cashout_n4($tanggal4);
				$cashout_o4 = $this->m_home->tampil_cashout_o4($tanggal4);
				$cashout_p4 = $this->m_home->tampil_cashout_p4($tanggal4);
				$cashout_q4 = $this->m_home->tampil_cashout_q4($tanggal4);
				$cashout_r4 = $this->m_home->tampil_cashout_r4($tanggal4);
				$cashout_s4 = $this->m_home->tampil_cashout_s4($tanggal4);
				$cashout_t4 = $this->m_home->tampil_cashout_t4($tanggal4);
				$cashout_u4 = $this->m_home->tampil_cashout_u4($tanggal4);
				$cashout_v4 = $this->m_home->tampil_cashout_v4($tanggal4);
				$cashout_w4 = $this->m_home->tampil_cashout_w4($tanggal4);
				$cashout_x4 = $this->m_home->tampil_cashout_x4($tanggal4);
				$cashout_y4 = $this->m_home->tampil_cashout_y4($tanggal4);
				$cashout_z4 = $this->m_home->tampil_cashout_z4($tanggal4);
				$cashout_a24 = $this->m_home->tampil_cashout_a24($tanggal4);
				$cashout_b24 = $this->m_home->tampil_cashout_b24($tanggal4);
				$cashout_c24 = $this->m_home->tampil_cashout_c24($tanggal4);
				$cashout_d24 = $this->m_home->tampil_cashout_d24($tanggal4);
				$cashout_e24 = $this->m_home->tampil_cashout_e24($tanggal4);
				$cashout_f24 = $this->m_home->tampil_cashout_f24($tanggal4);
				$cashout_g24 = $this->m_home->tampil_cashout_g24($tanggal4);
				$cashout_h24 = $this->m_home->tampil_cashout_h24($tanggal4);
				$cashout_i24 = $this->m_home->tampil_cashout_i24($tanggal4);
				$cashout_j24 = $this->m_home->tampil_cashout_j24($tanggal4);
				$cashout_k24 = $this->m_home->tampil_cashout_k24($tanggal4);
				$cashout_l24 = $this->m_home->tampil_cashout_l24($tanggal4);
				$cashout_m24 = $this->m_home->tampil_cashout_m24($tanggal4);
				$cashout_n24 = $this->m_home->tampil_cashout_n24($tanggal4);
				$cashout_o24 = $this->m_home->tampil_cashout_o24($tanggal4);
				$cashout_p24 = $this->m_home->tampil_cashout_p24($tanggal4);
				$cashout_q24 = $this->m_home->tampil_cashout_q24($tanggal4);
				$cashout_r24 = $this->m_home->tampil_cashout_r24($tanggal4);
				$cashout_s24 = $this->m_home->tampil_cashout_s24($tanggal4);
				$cashout_t24 = $this->m_home->tampil_cashout_t24($tanggal4);
				$cashout_u24 = $this->m_home->tampil_cashout_u24($tanggal4);
				$cashout_v24 = $this->m_home->tampil_cashout_v24($tanggal4);
				$cashout_w24 = $this->m_home->tampil_cashout_w24($tanggal4);
				$cashout_x24 = $this->m_home->tampil_cashout_x24($tanggal4);
				$cashout_y24 = $this->m_home->tampil_cashout_y24($tanggal4);
				$cashout_z24 = $this->m_home->tampil_cashout_z24($tanggal4);
				$cashout_a34 = $this->m_home->tampil_cashout_a34($tanggal4);
				$cashout_b34 = $this->m_home->tampil_cashout_b34($tanggal4);
				$cashout_c34 = $this->m_home->tampil_cashout_c34($tanggal4);
				$cashout_d34 = $this->m_home->tampil_cashout_d34($tanggal4);
				$cashout_e34 = $this->m_home->tampil_cashout_e34($tanggal4);
				$cashout_f34 = $this->m_home->tampil_cashout_f34($tanggal4);
				$cashout_g34 = $this->m_home->tampil_cashout_g34($tanggal4);
				$cashout_h34 = $this->m_home->tampil_cashout_h34($tanggal4);
				$cashout_i34 = $this->m_home->tampil_cashout_i34($tanggal4);
				$cashout_j34 = $this->m_home->tampil_cashout_j34($tanggal4);
				$cashout_k34 = $this->m_home->tampil_cashout_k34($tanggal4);
				$cashout_l34 = $this->m_home->tampil_cashout_l34($tanggal4);
				$cashout_m34 = $this->m_home->tampil_cashout_m34($tanggal4);
				$cashout_n34 = $this->m_home->tampil_cashout_n34($tanggal4);
				$cashout_o34 = $this->m_home->tampil_cashout_o34($tanggal4);
				$cashout_p34 = $this->m_home->tampil_cashout_p34($tanggal4);
				$cashout_q34 = $this->m_home->tampil_cashout_q34($tanggal4);
				$cashout_r34 = $this->m_home->tampil_cashout_r34($tanggal4);
				$cashout_s34 = $this->m_home->tampil_cashout_s34($tanggal4);
				$cashout_t34 = $this->m_home->tampil_cashout_t34($tanggal4);
				$cashout_u34 = $this->m_home->tampil_cashout_u34($tanggal4);
				$cashout_v34 = $this->m_home->tampil_cashout_v34($tanggal4);
				$cashout_w34 = $this->m_home->tampil_cashout_w34($tanggal4);
				$cashout_x34 = $this->m_home->tampil_cashout_x34($tanggal4);
				$cashout_y34 = $this->m_home->tampil_cashout_y34($tanggal4);
				$cashout_z34 = $this->m_home->tampil_cashout_z34($tanggal4);
				$cashout_a44 = $this->m_home->tampil_cashout_a44($tanggal4);
				$cashout_b44 = $this->m_home->tampil_cashout_b44($tanggal4);
				$tCashoutProj_4 = $this->m_home->totalCashoutProj_4($tanggal4);
				$tCashoutReal_4 = $this->m_home->totalCashoutReal_4($tanggal4);


				// CASH-OUT Hari Ke-5
				$cashout_a5 = $this->m_home->tampil_cashout_a5($tanggal5);
				$cashout_b5 = $this->m_home->tampil_cashout_b5($tanggal5);
				$cashout_c5 = $this->m_home->tampil_cashout_c5($tanggal5);
				$cashout_d5 = $this->m_home->tampil_cashout_d5($tanggal5);
				$cashout_e5 = $this->m_home->tampil_cashout_e5($tanggal5);
				$cashout_f5 = $this->m_home->tampil_cashout_f5($tanggal5);
				$cashout_g5 = $this->m_home->tampil_cashout_g5($tanggal5);
				$cashout_h5 = $this->m_home->tampil_cashout_h5($tanggal5);
				$cashout_i5 = $this->m_home->tampil_cashout_i5($tanggal5);
				$cashout_j5 = $this->m_home->tampil_cashout_j5($tanggal5);
				$cashout_k5 = $this->m_home->tampil_cashout_k5($tanggal5);
				$cashout_l5 = $this->m_home->tampil_cashout_l5($tanggal5);
				$cashout_m5 = $this->m_home->tampil_cashout_m5($tanggal5);
				$cashout_n5 = $this->m_home->tampil_cashout_n5($tanggal5);
				$cashout_o5 = $this->m_home->tampil_cashout_o5($tanggal5);
				$cashout_p5 = $this->m_home->tampil_cashout_p5($tanggal5);
				$cashout_q5 = $this->m_home->tampil_cashout_q5($tanggal5);
				$cashout_r5 = $this->m_home->tampil_cashout_r5($tanggal5);
				$cashout_s5 = $this->m_home->tampil_cashout_s5($tanggal5);
				$cashout_t5 = $this->m_home->tampil_cashout_t5($tanggal5);
				$cashout_u5 = $this->m_home->tampil_cashout_u5($tanggal5);
				$cashout_v5 = $this->m_home->tampil_cashout_v5($tanggal5);
				$cashout_w5 = $this->m_home->tampil_cashout_w5($tanggal5);
				$cashout_x5 = $this->m_home->tampil_cashout_x5($tanggal5);
				$cashout_y5 = $this->m_home->tampil_cashout_y5($tanggal5);
				$cashout_z5 = $this->m_home->tampil_cashout_z5($tanggal5);
				$cashout_a25 = $this->m_home->tampil_cashout_a25($tanggal5);
				$cashout_b25 = $this->m_home->tampil_cashout_b25($tanggal5);
				$cashout_c25 = $this->m_home->tampil_cashout_c25($tanggal5);
				$cashout_d25 = $this->m_home->tampil_cashout_d25($tanggal5);
				$cashout_e25 = $this->m_home->tampil_cashout_e25($tanggal5);
				$cashout_f25 = $this->m_home->tampil_cashout_f25($tanggal5);
				$cashout_g25 = $this->m_home->tampil_cashout_g25($tanggal5);
				$cashout_h25 = $this->m_home->tampil_cashout_h25($tanggal5);
				$cashout_i25 = $this->m_home->tampil_cashout_i25($tanggal5);
				$cashout_j25 = $this->m_home->tampil_cashout_j25($tanggal5);
				$cashout_k25 = $this->m_home->tampil_cashout_k25($tanggal5);
				$cashout_l25 = $this->m_home->tampil_cashout_l25($tanggal5);
				$cashout_m25 = $this->m_home->tampil_cashout_m25($tanggal5);
				$cashout_n25 = $this->m_home->tampil_cashout_n25($tanggal5);
				$cashout_o25 = $this->m_home->tampil_cashout_o25($tanggal5);
				$cashout_p25 = $this->m_home->tampil_cashout_p25($tanggal5);
				$cashout_q25 = $this->m_home->tampil_cashout_q25($tanggal5);
				$cashout_r25 = $this->m_home->tampil_cashout_r25($tanggal5);
				$cashout_s25 = $this->m_home->tampil_cashout_s25($tanggal5);
				$cashout_t25 = $this->m_home->tampil_cashout_t25($tanggal5);
				$cashout_u25 = $this->m_home->tampil_cashout_u25($tanggal5);
				$cashout_v25 = $this->m_home->tampil_cashout_v25($tanggal5);
				$cashout_w25 = $this->m_home->tampil_cashout_w25($tanggal5);
				$cashout_x25 = $this->m_home->tampil_cashout_x25($tanggal5);
				$cashout_y25 = $this->m_home->tampil_cashout_y25($tanggal5);
				$cashout_z25 = $this->m_home->tampil_cashout_z25($tanggal5);
				$cashout_a35 = $this->m_home->tampil_cashout_a35($tanggal5);
				$cashout_b35 = $this->m_home->tampil_cashout_b35($tanggal5);
				$cashout_c35 = $this->m_home->tampil_cashout_c35($tanggal5);
				$cashout_d35 = $this->m_home->tampil_cashout_d35($tanggal5);
				$cashout_e35 = $this->m_home->tampil_cashout_e35($tanggal5);
				$cashout_f35 = $this->m_home->tampil_cashout_f35($tanggal5);
				$cashout_g35 = $this->m_home->tampil_cashout_g35($tanggal5);
				$cashout_h35 = $this->m_home->tampil_cashout_h35($tanggal5);
				$cashout_i35 = $this->m_home->tampil_cashout_i35($tanggal5);
				$cashout_j35 = $this->m_home->tampil_cashout_j35($tanggal5);
				$cashout_k35 = $this->m_home->tampil_cashout_k35($tanggal5);
				$cashout_l35 = $this->m_home->tampil_cashout_l35($tanggal5);
				$cashout_m35 = $this->m_home->tampil_cashout_m35($tanggal5);
				$cashout_n35 = $this->m_home->tampil_cashout_n35($tanggal5);
				$cashout_o35 = $this->m_home->tampil_cashout_o35($tanggal5);
				$cashout_p35 = $this->m_home->tampil_cashout_p35($tanggal5);
				$cashout_q35 = $this->m_home->tampil_cashout_q35($tanggal5);
				$cashout_r35 = $this->m_home->tampil_cashout_r35($tanggal5);
				$cashout_s35 = $this->m_home->tampil_cashout_s35($tanggal5);
				$cashout_t35 = $this->m_home->tampil_cashout_t35($tanggal5);
				$cashout_u35 = $this->m_home->tampil_cashout_u35($tanggal5);
				$cashout_v35 = $this->m_home->tampil_cashout_v35($tanggal5);
				$cashout_w35 = $this->m_home->tampil_cashout_w35($tanggal5);
				$cashout_x35 = $this->m_home->tampil_cashout_x35($tanggal5);
				$cashout_y35 = $this->m_home->tampil_cashout_y35($tanggal5);
				$cashout_z35 = $this->m_home->tampil_cashout_z35($tanggal5);
				$cashout_a45 = $this->m_home->tampil_cashout_a45($tanggal5);
				$cashout_b45 = $this->m_home->tampil_cashout_b45($tanggal5);
				$tCashoutProj_5 = $this->m_home->totalCashoutProj_5($tanggal5);
				$tCashoutReal_5 = $this->m_home->totalCashoutReal_5($tanggal5);


				$this->load->view('header');
				$this->load->view('sidebar');
				$this->load->view('v_home_cari',array(

					// Hari & Tanggal
					'hariKemarin' => $hariKemarin,
					'hari1' => $hari1,
					'hari2' => $hari2,
					'hari3' => $hari3,
					'hari4' => $hari4,
					'hari5' => $hari5,
					'tanggalKemarin' => $tanggalKemarin,
					'tanggal1' => $tanggal1,
					'tanggal2' => $tanggal2,
					'tanggal3' => $tanggal3,
					'tanggal4' => $tanggal4,
					'tanggal5' => $tanggal5,

					// Saldo Awal
					'row_salaw_kem' => $salaw_kem,
					'row_salaw1' => $salaw_1,
					'row_salaw2' => $salaw_2,
					'row_salaw3' => $salaw_3,
					'row_salaw4' => $salaw_4,
					'row_salaw5' => $salaw_5,

					// Allocated Cash
					'row_allo1' => $allo_1,
					'row_allo2' => $allo_2,
					'row_allo3' => $allo_3,
					'row_allo4' => $allo_4,
					'row_allo5' => $allo_5,

					// Ready Cash
					'row_read1' => $read_1,
					'row_read2' => $read_2,
					'row_read3' => $read_3,
					'row_read4' => $read_4,
					'row_read5' => $read_5,

					// Kas Besar Cabang
					'row_kbc1' => $kbc_1,
					'row_kbc2' => $kbc_2,
					'row_kbc3' => $kbc_3,
					'row_kbc4' => $kbc_4,
					'row_kbc5' => $kbc_5,

					// Kas Besar Cabang
					'row_note1' => $note_1,
					'row_note2' => $note_2,
					'row_note3' => $note_3,
					'row_note4' => $note_4,
					'row_note5' => $note_5,

					// Status Closing
					'row_closing1' => $closing_1,
					'row_closing2' => $closing_2,
					'row_closing3' => $closing_3,
					'row_closing4' => $closing_4,
					'row_closing5' => $closing_5,

					// Deposito
					'row_deposito1' => $deposito_1,
					'row_deposito2' => $deposito_2,
					'row_deposito3' => $deposito_3,
					'row_deposito4' => $deposito_4,
					'row_deposito5' => $deposito_5,

					// B2b
					'row_b2b1' => $b2b_1,
					'row_b2b2' => $b2b_2,
					'row_b2b3' => $b2b_3,
					'row_b2b4' => $b2b_4,
					'row_b2b5' => $b2b_5,

					// Cash-In Hari Kemarin
					'row_cashin_aKem' => $cashin_aKem,
					'row_cashin_bKem' => $cashin_bKem,
					'row_cashin_cKem' => $cashin_cKem,
					'row_cashin_dKem' => $cashin_dKem,
					'row_cashin_eKem' => $cashin_eKem,
					'row_cashin_fKem' => $cashin_fKem,
					'row_cashin_gKem' => $cashin_gKem,
					'row_cashin_hKem' => $cashin_hKem,
					'row_cashin_iKem' => $cashin_iKem,
					'row_cashin_jKem' => $cashin_jKem,
					'row_cashin_kKem' => $cashin_kKem,
					'row_cashin_lKem' => $cashin_lKem,
					'row_cashin_mKem' => $cashin_mKem,
					'row_cashin_nKem' => $cashin_nKem,
					'row_cashin_oKem' => $cashin_oKem,
					'row_cashin_pKem' => $cashin_pKem,
					'row_cashin_qKem' => $cashin_qKem,
					'row_cashin_rKem' => $cashin_rKem,
					'row_cashin_sKem' => $cashin_sKem,
					'row_tCashinProjKem' => $tCashinProj_Kem,
					// 'row_tCashinRealKem' => $tCashinReal_Kem,

					// Cash-In Hari Ke-1
					'row_cashin_a1' => $cashin_a1,
					'row_cashin_b1' => $cashin_b1,
					'row_cashin_c1' => $cashin_c1,
					'row_cashin_d1' => $cashin_d1,
					'row_cashin_e1' => $cashin_e1,
					'row_cashin_f1' => $cashin_f1,
					'row_cashin_g1' => $cashin_g1,
					'row_cashin_h1' => $cashin_h1,
					'row_cashin_i1' => $cashin_i1,
					'row_cashin_j1' => $cashin_j1,
					'row_cashin_k1' => $cashin_k1,
					'row_cashin_l1' => $cashin_l1,
					'row_cashin_m1' => $cashin_m1,
					'row_cashin_n1' => $cashin_n1,
					'row_cashin_o1' => $cashin_o1,
					'row_cashin_p1' => $cashin_p1,
					'row_cashin_q1' => $cashin_q1,
					'row_cashin_r1' => $cashin_r1,
					'row_cashin_s1' => $cashin_s1,
					'row_tCashinProj1' => $tCashinProj_1,
					'row_tCashinReal1' => $tCashinReal_1,

					// Cash-In Hari Ke-2
					'row_cashin_a2' => $cashin_a2,
					'row_cashin_b2' => $cashin_b2,
					'row_cashin_c2' => $cashin_c2,
					'row_cashin_d2' => $cashin_d2,
					'row_cashin_e2' => $cashin_e2,
					'row_cashin_f2' => $cashin_f2,
					'row_cashin_g2' => $cashin_g2,
					'row_cashin_h2' => $cashin_h2,
					'row_cashin_i2' => $cashin_i2,
					'row_cashin_j2' => $cashin_j2,
					'row_cashin_k2' => $cashin_k2,
					'row_cashin_l2' => $cashin_l2,
					'row_cashin_m2' => $cashin_m2,
					'row_cashin_n2' => $cashin_n2,
					'row_cashin_o2' => $cashin_o2,
					'row_cashin_p2' => $cashin_p2,
					'row_cashin_q2' => $cashin_q2,
					'row_cashin_r2' => $cashin_r2,
					'row_cashin_s2' => $cashin_s2,
					'row_tCashinProj2' => $tCashinProj_2,
					'row_tCashinReal2' => $tCashinReal_2,

					// Cash-In Hari Ke-3
					'row_cashin_a3' => $cashin_a3,
					'row_cashin_b3' => $cashin_b3,
					'row_cashin_c3' => $cashin_c3,
					'row_cashin_d3' => $cashin_d3,
					'row_cashin_e3' => $cashin_e3,
					'row_cashin_f3' => $cashin_f3,
					'row_cashin_g3' => $cashin_g3,
					'row_cashin_h3' => $cashin_h3,
					'row_cashin_i3' => $cashin_i3,
					'row_cashin_j3' => $cashin_j3,
					'row_cashin_k3' => $cashin_k3,
					'row_cashin_l3' => $cashin_l3,
					'row_cashin_m3' => $cashin_m3,
					'row_cashin_n3' => $cashin_n3,
					'row_cashin_o3' => $cashin_o3,
					'row_cashin_p3' => $cashin_p3,
					'row_cashin_q3' => $cashin_q3,
					'row_cashin_r3' => $cashin_r3,
					'row_cashin_s3' => $cashin_s3,
					'row_tCashinProj3' => $tCashinProj_3,
					'row_tCashinReal3' => $tCashinReal_3,

					// Cash-In Hari Ke-4
					'row_cashin_a4' => $cashin_a4,
					'row_cashin_b4' => $cashin_b4,
					'row_cashin_c4' => $cashin_c4,
					'row_cashin_d4' => $cashin_d4,
					'row_cashin_e4' => $cashin_e4,
					'row_cashin_f4' => $cashin_f4,
					'row_cashin_g4' => $cashin_g4,
					'row_cashin_h4' => $cashin_h4,
					'row_cashin_i4' => $cashin_i4,
					'row_cashin_j4' => $cashin_j4,
					'row_cashin_k4' => $cashin_k4,
					'row_cashin_l4' => $cashin_l4,
					'row_cashin_m4' => $cashin_m4,
					'row_cashin_n4' => $cashin_n4,
					'row_cashin_o4' => $cashin_o4,
					'row_cashin_p4' => $cashin_p4,
					'row_cashin_q4' => $cashin_q4,
					'row_cashin_r4' => $cashin_r4,
					'row_cashin_s4' => $cashin_s4,
					'row_tCashinProj4' => $tCashinProj_4,
					'row_tCashinReal4' => $tCashinReal_4,

					// Cash-In Hari Ke-5
					'row_cashin_a5' => $cashin_a5,
					'row_cashin_b5' => $cashin_b5,
					'row_cashin_c5' => $cashin_c5,
					'row_cashin_d5' => $cashin_d5,
					'row_cashin_e5' => $cashin_e5,
					'row_cashin_f5' => $cashin_f5,
					'row_cashin_g5' => $cashin_g5,
					'row_cashin_h5' => $cashin_h5,
					'row_cashin_i5' => $cashin_i5,
					'row_cashin_j5' => $cashin_j5,
					'row_cashin_k5' => $cashin_k5,
					'row_cashin_l5' => $cashin_l5,
					'row_cashin_m5' => $cashin_m5,
					'row_cashin_n5' => $cashin_n5,
					'row_cashin_o5' => $cashin_o5,
					'row_cashin_p5' => $cashin_p5,
					'row_cashin_q5' => $cashin_q5,
					'row_cashin_r5' => $cashin_r5,
					'row_cashin_s5' => $cashin_s5,
					'row_tCashinProj5' => $tCashinProj_5,
					'row_tCashinReal5' => $tCashinReal_5,

					// Cash-Out Hari Kemarin
					'row_cashout_aKem' => $cashout_aKem,
					'row_cashout_bKem' => $cashout_bKem,
					'row_cashout_cKem' => $cashout_cKem,
					'row_cashout_dKem' => $cashout_dKem,
					'row_cashout_eKem' => $cashout_eKem,
					'row_cashout_fKem' => $cashout_fKem,
					'row_cashout_gKem' => $cashout_gKem,
					'row_cashout_hKem' => $cashout_hKem,
					'row_cashout_iKem' => $cashout_iKem,
					'row_cashout_jKem' => $cashout_jKem,
					'row_cashout_kKem' => $cashout_kKem,
					'row_cashout_lKem' => $cashout_lKem,
					'row_cashout_mKem' => $cashout_mKem,
					'row_cashout_nKem' => $cashout_nKem,
					'row_cashout_oKem' => $cashout_oKem,
					'row_cashout_pKem' => $cashout_pKem,
					'row_cashout_qKem' => $cashout_qKem,
					'row_cashout_rKem' => $cashout_rKem,
					'row_cashout_sKem' => $cashout_sKem,
					'row_cashout_tKem' => $cashout_tKem,
					'row_cashout_uKem' => $cashout_uKem,
					'row_cashout_vKem' => $cashout_vKem,
					'row_cashout_wKem' => $cashout_wKem,
					'row_cashout_xKem' => $cashout_xKem,
					'row_cashout_yKem' => $cashout_yKem,
					'row_cashout_zKem' => $cashout_zKem,
					'row_cashout_a2Kem' => $cashout_a2Kem,
					'row_cashout_b2Kem' => $cashout_b2Kem,
					'row_cashout_c2Kem' => $cashout_c2Kem,
					'row_cashout_d2Kem' => $cashout_d2Kem,
					'row_cashout_e2Kem' => $cashout_e2Kem,
					'row_cashout_f2Kem' => $cashout_f2Kem,
					'row_cashout_g2Kem' => $cashout_g2Kem,
					'row_cashout_h2Kem' => $cashout_h2Kem,
					'row_cashout_i2Kem' => $cashout_i2Kem,
					'row_cashout_j2Kem' => $cashout_j2Kem,
					'row_cashout_k2Kem' => $cashout_k2Kem,
					'row_cashout_l2Kem' => $cashout_l2Kem,
					'row_cashout_m2Kem' => $cashout_m2Kem,
					'row_cashout_n2Kem' => $cashout_n2Kem,
					'row_cashout_o2Kem' => $cashout_o2Kem,
					'row_cashout_p2Kem' => $cashout_p2Kem,
					'row_cashout_q2Kem' => $cashout_q2Kem,
					'row_cashout_r2Kem' => $cashout_r2Kem,
					'row_cashout_s2Kem' => $cashout_s2Kem,
					'row_cashout_t2Kem' => $cashout_t2Kem,
					'row_cashout_u2Kem' => $cashout_u2Kem,
					'row_tCashoutProjKem' => $tCashoutProj_Kem,
					// 'row_tCashoutRealKem' => $tCashoutReal_Kem,

					// Cash-Out Hari Ke-1
					'row_cashout_a1' => $cashout_a1,
					'row_cashout_b1' => $cashout_b1,
					'row_cashout_c1' => $cashout_c1,
					'row_cashout_d1' => $cashout_d1,
					'row_cashout_e1' => $cashout_e1,
					'row_cashout_f1' => $cashout_f1,
					'row_cashout_g1' => $cashout_g1,
					'row_cashout_h1' => $cashout_h1,
					'row_cashout_i1' => $cashout_i1,
					'row_cashout_j1' => $cashout_j1,
					'row_cashout_k1' => $cashout_k1,
					'row_cashout_l1' => $cashout_l1,
					'row_cashout_m1' => $cashout_m1,
					'row_cashout_n1' => $cashout_n1,
					'row_cashout_o1' => $cashout_o1,
					'row_cashout_p1' => $cashout_p1,
					'row_cashout_q1' => $cashout_q1,
					'row_cashout_r1' => $cashout_r1,
					'row_cashout_s1' => $cashout_s1,
					'row_cashout_t1' => $cashout_t1,
					'row_cashout_u1' => $cashout_u1,
					'row_cashout_v1' => $cashout_v1,
					'row_cashout_w1' => $cashout_w1,
					'row_cashout_x1' => $cashout_x1,
					'row_cashout_y1' => $cashout_y1,
					'row_cashout_z1' => $cashout_z1,
					'row_cashout_a21' => $cashout_a21,
					'row_cashout_b21' => $cashout_b21,
					'row_cashout_c21' => $cashout_c21,
					'row_cashout_d21' => $cashout_d21,
					'row_cashout_e21' => $cashout_e21,
					'row_cashout_f21' => $cashout_f21,
					'row_cashout_g21' => $cashout_g21,
					'row_cashout_h21' => $cashout_h21,
					'row_cashout_i21' => $cashout_i21,
					'row_cashout_j21' => $cashout_j21,
					'row_cashout_k21' => $cashout_k21,
					'row_cashout_l21' => $cashout_l21,
					'row_cashout_m21' => $cashout_m21,
					'row_cashout_n21' => $cashout_n21,
					'row_cashout_o21' => $cashout_o21,
					'row_cashout_p21' => $cashout_p21,
					'row_cashout_q21' => $cashout_q21,
					'row_cashout_r21' => $cashout_r21,
					'row_cashout_s21' => $cashout_s21,
					'row_cashout_t21' => $cashout_t21,
					'row_cashout_u21' => $cashout_u21,
					'row_cashout_v21' => $cashout_v21,
					'row_cashout_w21' => $cashout_w21,
					'row_cashout_x21' => $cashout_x21,
					'row_cashout_y21' => $cashout_y21,
					'row_cashout_z21' => $cashout_z21,
					'row_cashout_a31' => $cashout_a31,
					'row_cashout_b31' => $cashout_b31,
					'row_cashout_c31' => $cashout_c31,
					'row_cashout_d31' => $cashout_d31,
					'row_cashout_e31' => $cashout_e31,
					'row_cashout_f31' => $cashout_f31,
					'row_cashout_g31' => $cashout_g31,
					'row_cashout_h31' => $cashout_h31,
					'row_cashout_i31' => $cashout_i31,
					'row_cashout_j31' => $cashout_j31,
					'row_cashout_k31' => $cashout_k31,
					'row_cashout_l31' => $cashout_l31,
					'row_cashout_m31' => $cashout_m31,
					'row_cashout_n31' => $cashout_n31,
					'row_cashout_o31' => $cashout_o31,
					'row_cashout_p31' => $cashout_p31,
					'row_cashout_q31' => $cashout_q31,
					'row_cashout_r31' => $cashout_r31,
					'row_cashout_s31' => $cashout_s31,
					'row_cashout_t31' => $cashout_t31,
					'row_cashout_u31' => $cashout_u31,
					'row_cashout_v31' => $cashout_v31,
					'row_cashout_w31' => $cashout_w31,
					'row_cashout_x31' => $cashout_x31,
					'row_cashout_y31' => $cashout_y31,
					'row_cashout_z31' => $cashout_z31,
					'row_cashout_a41' => $cashout_a41,
					'row_cashout_b41' => $cashout_b41,
					'row_tCashoutProj1' => $tCashoutProj_1,
					'row_tCashoutReal1' => $tCashoutReal_1,

					// Cash-Out Hari Ke-2
					'row_cashout_a2' => $cashout_a2,
					'row_cashout_b2' => $cashout_b2,
					'row_cashout_c2' => $cashout_c2,
					'row_cashout_d2' => $cashout_d2,
					'row_cashout_e2' => $cashout_e2,
					'row_cashout_f2' => $cashout_f2,
					'row_cashout_g2' => $cashout_g2,
					'row_cashout_h2' => $cashout_h2,
					'row_cashout_i2' => $cashout_i2,
					'row_cashout_j2' => $cashout_j2,
					'row_cashout_k2' => $cashout_k2,
					'row_cashout_l2' => $cashout_l2,
					'row_cashout_m2' => $cashout_m2,
					'row_cashout_n2' => $cashout_n2,
					'row_cashout_o2' => $cashout_o2,
					'row_cashout_p2' => $cashout_p2,
					'row_cashout_q2' => $cashout_q2,
					'row_cashout_r2' => $cashout_r2,
					'row_cashout_s2' => $cashout_s2,
					'row_cashout_t2' => $cashout_t2,
					'row_cashout_u2' => $cashout_u2,
					'row_cashout_v2' => $cashout_v2,
					'row_cashout_w2' => $cashout_w2,
					'row_cashout_x2' => $cashout_x2,
					'row_cashout_y2' => $cashout_y2,
					'row_cashout_z2' => $cashout_z2,
					'row_cashout_a22' => $cashout_a22,
					'row_cashout_b22' => $cashout_b22,
					'row_cashout_c22' => $cashout_c22,
					'row_cashout_d22' => $cashout_d22,
					'row_cashout_e22' => $cashout_e22,
					'row_cashout_f22' => $cashout_f22,
					'row_cashout_g22' => $cashout_g22,
					'row_cashout_h22' => $cashout_h22,
					'row_cashout_i22' => $cashout_i22,
					'row_cashout_j22' => $cashout_j22,
					'row_cashout_k22' => $cashout_k22,
					'row_cashout_l22' => $cashout_l22,
					'row_cashout_m22' => $cashout_m22,
					'row_cashout_n22' => $cashout_n22,
					'row_cashout_o22' => $cashout_o22,
					'row_cashout_p22' => $cashout_p22,
					'row_cashout_q22' => $cashout_q22,
					'row_cashout_r22' => $cashout_r22,
					'row_cashout_s22' => $cashout_s22,
					'row_cashout_t22' => $cashout_t22,
					'row_cashout_u22' => $cashout_u22,
					'row_cashout_v22' => $cashout_v22,
					'row_cashout_w22' => $cashout_w22,
					'row_cashout_x22' => $cashout_x22,
					'row_cashout_y22' => $cashout_y22,
					'row_cashout_z22' => $cashout_z22,
					'row_cashout_a32' => $cashout_a32,
					'row_cashout_b32' => $cashout_b32,
					'row_cashout_c32' => $cashout_c32,
					'row_cashout_d32' => $cashout_d32,
					'row_cashout_e32' => $cashout_e32,
					'row_cashout_f32' => $cashout_f32,
					'row_cashout_g32' => $cashout_g32,
					'row_cashout_h32' => $cashout_h32,
					'row_cashout_i32' => $cashout_i32,
					'row_cashout_j32' => $cashout_j32,
					'row_cashout_k32' => $cashout_k32,
					'row_cashout_l32' => $cashout_l32,
					'row_cashout_m32' => $cashout_m32,
					'row_cashout_n32' => $cashout_n32,
					'row_cashout_o32' => $cashout_o32,
					'row_cashout_p32' => $cashout_p32,
					'row_cashout_q32' => $cashout_q32,
					'row_cashout_r32' => $cashout_r32,
					'row_cashout_s32' => $cashout_s32,
					'row_cashout_t32' => $cashout_t32,
					'row_cashout_u32' => $cashout_u32,
					'row_cashout_v32' => $cashout_v32,
					'row_cashout_w32' => $cashout_w32,
					'row_cashout_x32' => $cashout_x32,
					'row_cashout_y32' => $cashout_y32,
					'row_cashout_z32' => $cashout_z32,
					'row_cashout_a42' => $cashout_a42,
					'row_cashout_b42' => $cashout_b42,
					'row_tCashoutProj2' => $tCashoutProj_2,
					'row_tCashoutReal2' => $tCashoutReal_2,


					// Cash-Out Hari Ke-3
					'row_cashout_a3' => $cashout_a3,
					'row_cashout_b3' => $cashout_b3,
					'row_cashout_c3' => $cashout_c3,
					'row_cashout_d3' => $cashout_d3,
					'row_cashout_e3' => $cashout_e3,
					'row_cashout_f3' => $cashout_f3,
					'row_cashout_g3' => $cashout_g3,
					'row_cashout_h3' => $cashout_h3,
					'row_cashout_i3' => $cashout_i3,
					'row_cashout_j3' => $cashout_j3,
					'row_cashout_k3' => $cashout_k3,
					'row_cashout_l3' => $cashout_l3,
					'row_cashout_m3' => $cashout_m3,
					'row_cashout_n3' => $cashout_n3,
					'row_cashout_o3' => $cashout_o3,
					'row_cashout_p3' => $cashout_p3,
					'row_cashout_q3' => $cashout_q3,
					'row_cashout_r3' => $cashout_r3,
					'row_cashout_s3' => $cashout_s3,
					'row_cashout_t3' => $cashout_t3,
					'row_cashout_u3' => $cashout_u3,
					'row_cashout_v3' => $cashout_v3,
					'row_cashout_w3' => $cashout_w3,
					'row_cashout_x3' => $cashout_x3,
					'row_cashout_y3' => $cashout_y3,
					'row_cashout_z3' => $cashout_z3,
					'row_cashout_a23' => $cashout_a23,
					'row_cashout_b23' => $cashout_b23,
					'row_cashout_c23' => $cashout_c23,
					'row_cashout_d23' => $cashout_d23,
					'row_cashout_e23' => $cashout_e23,
					'row_cashout_f23' => $cashout_f23,
					'row_cashout_g23' => $cashout_g23,
					'row_cashout_h23' => $cashout_h23,
					'row_cashout_i23' => $cashout_i23,
					'row_cashout_j23' => $cashout_j23,
					'row_cashout_k23' => $cashout_k23,
					'row_cashout_l23' => $cashout_l23,
					'row_cashout_m23' => $cashout_m23,
					'row_cashout_n23' => $cashout_n23,
					'row_cashout_o23' => $cashout_o23,
					'row_cashout_p23' => $cashout_p23,
					'row_cashout_q23' => $cashout_q23,
					'row_cashout_r23' => $cashout_r23,
					'row_cashout_s23' => $cashout_s23,
					'row_cashout_t23' => $cashout_t23,
					'row_cashout_u23' => $cashout_u23,
					'row_cashout_v23' => $cashout_v23,
					'row_cashout_w23' => $cashout_w23,
					'row_cashout_x23' => $cashout_x23,
					'row_cashout_y23' => $cashout_y23,
					'row_cashout_z23' => $cashout_z23,
					'row_cashout_a33' => $cashout_a33,
					'row_cashout_b33' => $cashout_b33,
					'row_cashout_c33' => $cashout_c33,
					'row_cashout_d33' => $cashout_d33,
					'row_cashout_e33' => $cashout_e33,
					'row_cashout_f33' => $cashout_f33,
					'row_cashout_g33' => $cashout_g33,
					'row_cashout_h33' => $cashout_h33,
					'row_cashout_i33' => $cashout_i33,
					'row_cashout_j33' => $cashout_j33,
					'row_cashout_k33' => $cashout_k33,
					'row_cashout_l33' => $cashout_l33,
					'row_cashout_m33' => $cashout_m33,
					'row_cashout_n33' => $cashout_n33,
					'row_cashout_o33' => $cashout_o33,
					'row_cashout_p33' => $cashout_p33,
					'row_cashout_q33' => $cashout_q33,
					'row_cashout_r33' => $cashout_r33,
					'row_cashout_s33' => $cashout_s33,
					'row_cashout_t33' => $cashout_t33,
					'row_cashout_u33' => $cashout_u33,
					'row_cashout_v33' => $cashout_v33,
					'row_cashout_w33' => $cashout_w33,
					'row_cashout_x33' => $cashout_x33,
					'row_cashout_y33' => $cashout_y33,
					'row_cashout_z33' => $cashout_z33,
					'row_cashout_a43' => $cashout_a43,
					'row_cashout_b43' => $cashout_b43,

					'row_tCashoutProj3' => $tCashoutProj_3,
					'row_tCashoutReal3' => $tCashoutReal_3,


					// Cash-Out Hari Ke-4
					'row_cashout_a4' => $cashout_a4,
					'row_cashout_b4' => $cashout_b4,
					'row_cashout_c4' => $cashout_c4,
					'row_cashout_d4' => $cashout_d4,
					'row_cashout_e4' => $cashout_e4,
					'row_cashout_f4' => $cashout_f4,
					'row_cashout_g4' => $cashout_g4,
					'row_cashout_h4' => $cashout_h4,
					'row_cashout_i4' => $cashout_i4,
					'row_cashout_j4' => $cashout_j4,
					'row_cashout_k4' => $cashout_k4,
					'row_cashout_l4' => $cashout_l4,
					'row_cashout_m4' => $cashout_m4,
					'row_cashout_n4' => $cashout_n4,
					'row_cashout_o4' => $cashout_o4,
					'row_cashout_p4' => $cashout_p4,
					'row_cashout_q4' => $cashout_q4,
					'row_cashout_r4' => $cashout_r4,
					'row_cashout_s4' => $cashout_s4,
					'row_cashout_t4' => $cashout_t4,
					'row_cashout_u4' => $cashout_u4,
					'row_cashout_v4' => $cashout_v4,
					'row_cashout_w4' => $cashout_w4,
					'row_cashout_x4' => $cashout_x4,
					'row_cashout_y4' => $cashout_y4,
					'row_cashout_z4' => $cashout_z4,
					'row_cashout_a24' => $cashout_a24,
					'row_cashout_b24' => $cashout_b24,
					'row_cashout_c24' => $cashout_c24,
					'row_cashout_d24' => $cashout_d24,
					'row_cashout_e24' => $cashout_e24,
					'row_cashout_f24' => $cashout_f24,
					'row_cashout_g24' => $cashout_g24,
					'row_cashout_h24' => $cashout_h24,
					'row_cashout_i24' => $cashout_i24,
					'row_cashout_j24' => $cashout_j24,
					'row_cashout_k24' => $cashout_k24,
					'row_cashout_l24' => $cashout_l24,
					'row_cashout_m24' => $cashout_m24,
					'row_cashout_n24' => $cashout_n24,
					'row_cashout_o24' => $cashout_o24,
					'row_cashout_p24' => $cashout_p24,
					'row_cashout_q24' => $cashout_q24,
					'row_cashout_r24' => $cashout_r24,
					'row_cashout_s24' => $cashout_s24,
					'row_cashout_t24' => $cashout_t24,
					'row_cashout_u24' => $cashout_u24,
					'row_cashout_v24' => $cashout_v24,
					'row_cashout_w24' => $cashout_w24,
					'row_cashout_x24' => $cashout_x24,
					'row_cashout_y24' => $cashout_y24,
					'row_cashout_z24' => $cashout_z24,
					'row_cashout_a34' => $cashout_a34,
					'row_cashout_b34' => $cashout_b34,
					'row_cashout_c34' => $cashout_c34,
					'row_cashout_d34' => $cashout_d34,
					'row_cashout_e34' => $cashout_e34,
					'row_cashout_f34' => $cashout_f34,
					'row_cashout_g34' => $cashout_g34,
					'row_cashout_h34' => $cashout_h34,
					'row_cashout_i34' => $cashout_i34,
					'row_cashout_j34' => $cashout_j34,
					'row_cashout_k34' => $cashout_k34,
					'row_cashout_l34' => $cashout_l34,
					'row_cashout_m34' => $cashout_m34,
					'row_cashout_n34' => $cashout_n34,
					'row_cashout_o34' => $cashout_o34,
					'row_cashout_p34' => $cashout_p34,
					'row_cashout_q34' => $cashout_q34,
					'row_cashout_r34' => $cashout_r34,
					'row_cashout_s34' => $cashout_s34,
					'row_cashout_t34' => $cashout_t34,
					'row_cashout_u34' => $cashout_u34,
					'row_cashout_v34' => $cashout_v34,
					'row_cashout_w34' => $cashout_w34,
					'row_cashout_x34' => $cashout_x34,
					'row_cashout_y34' => $cashout_y34,
					'row_cashout_z34' => $cashout_z34,
					'row_cashout_a44' => $cashout_a44,
					'row_cashout_b44' => $cashout_b44,
					'row_tCashoutProj4' => $tCashoutProj_4,
					'row_tCashoutReal4' => $tCashoutReal_4,


					// Cash-Out Hari Ke-5
					'row_cashout_a5' => $cashout_a5,
					'row_cashout_b5' => $cashout_b5,
					'row_cashout_c5' => $cashout_c5,
					'row_cashout_d5' => $cashout_d5,
					'row_cashout_e5' => $cashout_e5,
					'row_cashout_f5' => $cashout_f5,
					'row_cashout_g5' => $cashout_g5,
					'row_cashout_h5' => $cashout_h5,
					'row_cashout_i5' => $cashout_i5,
					'row_cashout_j5' => $cashout_j5,
					'row_cashout_k5' => $cashout_k5,
					'row_cashout_l5' => $cashout_l5,
					'row_cashout_m5' => $cashout_m5,
					'row_cashout_n5' => $cashout_n5,
					'row_cashout_o5' => $cashout_o5,
					'row_cashout_p5' => $cashout_p5,
					'row_cashout_q5' => $cashout_q5,
					'row_cashout_r5' => $cashout_r5,
					'row_cashout_s5' => $cashout_s5,
					'row_cashout_t5' => $cashout_t5,
					'row_cashout_u5' => $cashout_u5,
					'row_cashout_v5' => $cashout_v5,
					'row_cashout_w5' => $cashout_w5,
					'row_cashout_x5' => $cashout_x5,
					'row_cashout_y5' => $cashout_y5,
					'row_cashout_z5' => $cashout_z5,
					'row_cashout_a25' => $cashout_a25,
					'row_cashout_b25' => $cashout_b25,
					'row_cashout_c25' => $cashout_c25,
					'row_cashout_d25' => $cashout_d25,
					'row_cashout_e25' => $cashout_e25,
					'row_cashout_f25' => $cashout_f25,
					'row_cashout_g25' => $cashout_g25,
					'row_cashout_h25' => $cashout_h25,
					'row_cashout_i25' => $cashout_i25,
					'row_cashout_j25' => $cashout_j25,
					'row_cashout_k25' => $cashout_k25,
					'row_cashout_l25' => $cashout_l25,
					'row_cashout_m25' => $cashout_m25,
					'row_cashout_n25' => $cashout_n25,
					'row_cashout_o25' => $cashout_o25,
					'row_cashout_p25' => $cashout_p25,
					'row_cashout_q25' => $cashout_q25,
					'row_cashout_r25' => $cashout_r25,
					'row_cashout_s25' => $cashout_s25,
					'row_cashout_t25' => $cashout_t25,
					'row_cashout_u25' => $cashout_u25,
					'row_cashout_v25' => $cashout_v25,
					'row_cashout_w25' => $cashout_w25,
					'row_cashout_x25' => $cashout_x25,
					'row_cashout_y25' => $cashout_y25,
					'row_cashout_z25' => $cashout_z25,
					'row_cashout_a35' => $cashout_a35,
					'row_cashout_b35' => $cashout_b35,
					'row_cashout_c35' => $cashout_c35,
					'row_cashout_d35' => $cashout_d35,
					'row_cashout_e35' => $cashout_e35,
					'row_cashout_f35' => $cashout_f35,
					'row_cashout_g35' => $cashout_g35,
					'row_cashout_h35' => $cashout_h35,
					'row_cashout_i35' => $cashout_i35,
					'row_cashout_j35' => $cashout_j35,
					'row_cashout_k35' => $cashout_k35,
					'row_cashout_l35' => $cashout_l35,
					'row_cashout_m35' => $cashout_m35,
					'row_cashout_n35' => $cashout_n35,
					'row_cashout_o35' => $cashout_o35,
					'row_cashout_p35' => $cashout_p35,
					'row_cashout_q35' => $cashout_q35,
					'row_cashout_r35' => $cashout_r35,
					'row_cashout_s35' => $cashout_s35,
					'row_cashout_t35' => $cashout_t35,
					'row_cashout_u35' => $cashout_u35,
					'row_cashout_v35' => $cashout_v35,
					'row_cashout_w35' => $cashout_w35,
					'row_cashout_x35' => $cashout_x35,
					'row_cashout_y35' => $cashout_y35,
					'row_cashout_z35' => $cashout_z35,
					'row_cashout_a45' => $cashout_a45,
					'row_cashout_b45' => $cashout_b45,
					'row_tCashoutProj5' => $tCashoutProj_5,
					'row_tCashoutReal5' => $tCashoutReal_5

				));
				$this->load->view('footer');

		}else{ // Jika tombol cari tidak di klik / posisi default

			// Settingan Hari Dan Tanggal
  
			  $hari = date('D'); // Hari Ini Dalam Format Standar (Sun, Mon, Tue, Wed, Thu, Fri, Sat)

			  switch($hari){
			    case 'Mon' :
			      $hari1='Sen'; $hari2='Sel'; $hari3='Rab'; $hari4='Kam'; $hari5='Jum'; $hariKemarin='Jum';

			      // Jumat
			      $kurang_3 = mktime(0,0,0,date("n"),date("j")-3, date("Y"));
			      $tanggalKemarin = date("d-m-Y", $kurang_3);

			      // Senin
			      $tanggal1 = date('d-m-Y');

			      // Selasa
			      $tambah_1 = mktime(0,0,0,date("n"),date("j")+1, date("Y"));
			      $tanggal2 = date("d-m-Y", $tambah_1);

			      // Rabu
			      $tambah_2 = mktime(0,0,0,date("n"),date("j")+2, date("Y"));
			      $tanggal3 = date("d-m-Y", $tambah_2);

			      // Kamis
			      $tambah_3 = mktime(0,0,0,date("n"),date("j")+3, date("Y"));
			      $tanggal4 = date("d-m-Y", $tambah_3);

			      // Jumat
			      $tambah_4 = mktime(0,0,0,date("n"),date("j")+4, date("Y"));
			      $tanggal5 = date("d-m-Y", $tambah_4);

			      break;

			    case 'Tue' :
			      $hari1='Sel'; $hari2='Rab'; $hari3='Kam'; $hari4='Jum'; $hari5='Sen'; $hariKemarin='Sen';

			      // Senin
			      $kurang_1 = mktime(0,0,0,date("n"),date("j")-1, date("Y"));
			      $tanggalKemarin = date("d-m-Y", $kurang_1);

			      // Selasa
			      $tanggal1 = date('d-m-Y');

			      // Rabu
			      $tambah_1 = mktime(0,0,0,date("n"),date("j")+1, date("Y"));
			      $tanggal2 = date("d-m-Y", $tambah_1);

			      // Kamis
			      $tambah_2 = mktime(0,0,0,date("n"),date("j")+2, date("Y"));
			      $tanggal3 = date("d-m-Y", $tambah_2);

			      // Jumat
			      $tambah_3 = mktime(0,0,0,date("n"),date("j")+3, date("Y"));
			      $tanggal4 = date("d-m-Y", $tambah_3);

			      // Senin
			      $tambah_6 = mktime(0,0,0,date("n"),date("j")+6, date("Y"));
			      $tanggal5 = date("d-m-Y", $tambah_6);

			      break;

			    case 'Wed' :
			      $hari1='Rab'; $hari2='Kam'; $hari3='Jum'; $hari4='Sen'; $hari5='Sel'; $hariKemarin='Sel';

			      // Selasa
			      $kurang_1 = mktime(0,0,0,date("n"),date("j")-1, date("Y"));
			      $tanggalKemarin = date("d-m-Y", $kurang_1);

			      // Rabu
			      $tanggal1 = date('d-m-Y');

			      // Kamis
			      $tambah_1 = mktime(0,0,0,date("n"),date("j")+1, date("Y"));
			      $tanggal2 = date("d-m-Y", $tambah_1);

			      // Jumat
			      $tambah_2 = mktime(0,0,0,date("n"),date("j")+2, date("Y"));
			      $tanggal3 = date("d-m-Y", $tambah_2);

			      // Senin
			      $tambah_5 = mktime(0,0,0,date("n"),date("j")+5, date("Y"));
			      $tanggal4 = date("d-m-Y", $tambah_5);

			      // Selasa
			      $tambah_6 = mktime(0,0,0,date("n"),date("j")+6, date("Y"));
			      $tanggal5 = date("d-m-Y", $tambah_6);

			      break;

			    case 'Thu' :
			      $hari1='Kam'; $hari2='Jum'; $hari3='Sen'; $hari4='Sel'; $hari5='Rab'; $hariKemarin='Rab';

			      // Rabu
			      $kurang_1 = mktime(0,0,0,date("n"),date("j")-1, date("Y"));
			      $tanggalKemarin = date("d-m-Y", $kurang_1);

			      // Kamis
			      $tanggal1 = date('d-m-Y');

			      // Jumat
			      $tambah_1 = mktime(0,0,0,date("n"),date("j")+1, date("Y"));
			      $tanggal2 = date("d-m-Y", $tambah_1);

			      // Senin
			      $tambah_4 = mktime(0,0,0,date("n"),date("j")+4, date("Y"));
			      $tanggal3 = date("d-m-Y", $tambah_4);

			      // Selasa
			      $tambah_5 = mktime(0,0,0,date("n"),date("j")+5, date("Y"));
			      $tanggal4 = date("d-m-Y", $tambah_5);

			      // Rabu
			      $tambah_6 = mktime(0,0,0,date("n"),date("j")+6, date("Y"));
			      $tanggal5 = date("d-m-Y", $tambah_6);

			      break;

			    case 'Fri' :
			      $hari1='Jum'; $hari2='Sen'; $hari3='Sel'; $hari4='Rab'; $hari5='Kam'; $hariKemarin='Kam';

			      // Kamis
			      $kurang_1 = mktime(0,0,0,date("n"),date("j")-1, date("Y"));
			      $tanggalKemarin = date("d-m-Y", $kurang_1);

			      // Jumat
			      $tanggal1 = date('d-m-Y');

			      // Senin
			      $tambah_3 = mktime(0,0,0,date("n"),date("j")+3, date("Y"));
			      $tanggal2 = date("d-m-Y", $tambah_3);

			      // Selasa
			      $tambah_4 = mktime(0,0,0,date("n"),date("j")+4, date("Y"));
			      $tanggal3 = date("d-m-Y", $tambah_4);

			      // Rabu
			      $tambah_5 = mktime(0,0,0,date("n"),date("j")+5, date("Y"));
			      $tanggal4 = date("d-m-Y", $tambah_5);

			      // Kamis
			      $tambah_6 = mktime(0,0,0,date("n"),date("j")+6, date("Y"));
			      $tanggal5 = date("d-m-Y", $tambah_6);

			      break;

			    case 'Sat' :
			      $hari1='Jum'; $hari2='Sen'; $hari3='Sel'; $hari4='Rab'; $hari5='Kam'; $hariKemarin='Kam';

			      // Kamis
			      $kurang_2 = mktime(0,0,0,date("n"),date("j")-2, date("Y"));
			      $tanggalKemarin = date("d-m-Y", $kurang_2);

			      // Jumat
			      $kurang_1 = mktime(0,0,0,date("n"),date("j")-1, date("Y"));
			      $tanggal1 = date('d-m-Y', $kurang_1);

			      // Senin
			      $tambah_2 = mktime(0,0,0,date("n"),date("j")+2, date("Y"));
			      $tanggal2 = date("d-m-Y", $tambah_2);

			      // Selasa
			      $tambah_3 = mktime(0,0,0,date("n"),date("j")+3, date("Y"));
			      $tanggal3 = date("d-m-Y", $tambah_3);

			      // Rabu
			      $tambah_4 = mktime(0,0,0,date("n"),date("j")+4, date("Y"));
			      $tanggal4 = date("d-m-Y", $tambah_4);

			      // Kamis
			      $tambah_5 = mktime(0,0,0,date("n"),date("j")+5, date("Y"));
			      $tanggal5 = date("d-m-Y", $tambah_5);

			      break;

			    case 'Sun' :
			      $hari1='Jum'; $hari2='Sen'; $hari3='Sel'; $hari4='Rab'; $hari5='Kam'; $hariKemarin='Kam';

			      // Kamis
			      $kurang_3 = mktime(0,0,0,date("n"),date("j")-3, date("Y"));
			      $tanggalKemarin = date("d-m-Y", $kurang_3);

			      // Jumat
			      $kurang_2 = mktime(0,0,0,date("n"),date("j")-2, date("Y"));
			      $tanggal1 = date('d-m-Y', $kurang_2);

			      // Senin
			      $tambah_1 = mktime(0,0,0,date("n"),date("j")+1, date("Y"));
			      $tanggal2 = date("d-m-Y", $tambah_1);

			      // Selasa
			      $tambah_2 = mktime(0,0,0,date("n"),date("j")+2, date("Y"));
			      $tanggal3 = date("d-m-Y", $tambah_2);

			      // Rabu
			      $tambah_3 = mktime(0,0,0,date("n"),date("j")+3, date("Y"));
			      $tanggal4 = date("d-m-Y", $tambah_3);

			      // Kamis
			      $tambah_4 = mktime(0,0,0,date("n"),date("j")+4, date("Y"));
			      $tanggal5 = date("d-m-Y", $tambah_4);

			      break;

			  } // Penutup Settingan Hari Dan Tanggal

			  // Saldo Awal Kemarin
				$salaw_kem = $this->m_home->saldo_awal($tanggalKemarin);

				// Allocated Cash Kemarin
				$allo_kem = $this->m_home->allocated_cash($tanggalKemarin);

				// Ready Cash Kemarin
				$read_kem = $this->m_home->ready_cash($tanggalKemarin);

				// Kas Besar Cabang Kemarin
				$kbc_kem = $this->m_home->kbc($tanggalKemarin);

				// Note Kemarin
				$note_kem = $this->m_home->note($tanggalKemarin);

				// Status Closing Kemarin Kemarin
				$closing_kem = $this->m_home->status_closing($tanggalKemarin);

				// Deposito (Semua Tanggal / Hari)
				$deposito = $this->m_home->deposito(date('Y-m-d', strtotime($tanggal1)));

				// B2B (Semua Tanggal / Hari)
				$b2b = $this->m_home->b2b(date('Y-m-d',strtotime($tanggal1)));

				// CASH-IN Hari Kemarin
				$cashin_aKem = $this->m_home->tampil_cashin_aKem($tanggalKemarin);
				$cashin_bKem = $this->m_home->tampil_cashin_bKem($tanggalKemarin);
				$cashin_cKem = $this->m_home->tampil_cashin_cKem($tanggalKemarin);
				$cashin_dKem = $this->m_home->tampil_cashin_dKem($tanggalKemarin);
				$cashin_eKem = $this->m_home->tampil_cashin_eKem($tanggalKemarin);
				$cashin_fKem = $this->m_home->tampil_cashin_fKem($tanggalKemarin);
				$cashin_gKem = $this->m_home->tampil_cashin_gKem($tanggalKemarin);
				$cashin_hKem = $this->m_home->tampil_cashin_hKem($tanggalKemarin);
				$cashin_iKem = $this->m_home->tampil_cashin_iKem($tanggalKemarin);
				$cashin_jKem = $this->m_home->tampil_cashin_jKem($tanggalKemarin);
				$cashin_kKem = $this->m_home->tampil_cashin_kKem($tanggalKemarin);
				$cashin_lKem = $this->m_home->tampil_cashin_lKem($tanggalKemarin);
				$cashin_mKem = $this->m_home->tampil_cashin_mKem($tanggalKemarin);
				$cashin_nKem = $this->m_home->tampil_cashin_nKem($tanggalKemarin);
				$cashin_oKem = $this->m_home->tampil_cashin_oKem($tanggalKemarin);
				$cashin_pKem = $this->m_home->tampil_cashin_pKem($tanggalKemarin);
				$cashin_qKem = $this->m_home->tampil_cashin_qKem($tanggalKemarin);
				$cashin_rKem = $this->m_home->tampil_cashin_rKem($tanggalKemarin);
				$cashin_sKem = $this->m_home->tampil_cashin_sKem($tanggalKemarin);
				$tCashinProj_Kem = $this->m_home->totalCashinProj_Kem($tanggalKemarin);
				// $tCashinReal_Kem = $this->m_home->totalCashinReal_Kem($tanggalKemarin);

				// ....................................................................................

				// Saldo Awal Hari-1
				$salaw_1 = $this->m_home->saldo_awal($tanggal1);

				// Allocated Cash Hari-1
				$allo_1 = $this->m_home->allocated_cash($tanggal1);

				// Ready Cash Hari-1
				$read_1 = $this->m_home->ready_cash($tanggal1);

				// Kas Besar Cabang Hari-1
				$kbc_1 = $this->m_home->kbc($tanggal1);

				// Note Hari-1
				$note_1 = $this->m_home->note($tanggal1);

				// Status Closing Hari-1
				$closing_1 = $this->m_home->status_closing($tanggal1);

				// CASH-IN Hari Ke-1
				$cashin_a1 = $this->m_home->tampil_cashin_a1($tanggal1);
				$cashin_b1 = $this->m_home->tampil_cashin_b1($tanggal1);
				$cashin_c1 = $this->m_home->tampil_cashin_c1($tanggal1);
				$cashin_d1 = $this->m_home->tampil_cashin_d1($tanggal1);
				$cashin_e1 = $this->m_home->tampil_cashin_e1($tanggal1);
				$cashin_f1 = $this->m_home->tampil_cashin_f1($tanggal1);
				$cashin_g1 = $this->m_home->tampil_cashin_g1($tanggal1);
				$cashin_h1 = $this->m_home->tampil_cashin_h1($tanggal1);
				$cashin_i1 = $this->m_home->tampil_cashin_i1($tanggal1);
				$cashin_j1 = $this->m_home->tampil_cashin_j1($tanggal1);
				$cashin_k1 = $this->m_home->tampil_cashin_k1($tanggal1);
				$cashin_l1 = $this->m_home->tampil_cashin_l1($tanggal1);
				$cashin_m1 = $this->m_home->tampil_cashin_m1($tanggal1);
				$cashin_n1 = $this->m_home->tampil_cashin_n1($tanggal1);
				$cashin_o1 = $this->m_home->tampil_cashin_o1($tanggal1);
				$cashin_p1 = $this->m_home->tampil_cashin_p1($tanggal1);
				$cashin_q1 = $this->m_home->tampil_cashin_q1($tanggal1);
				$cashin_r1 = $this->m_home->tampil_cashin_r1($tanggal1);
				$cashin_s1 = $this->m_home->tampil_cashin_s1($tanggal1);
				$tCashinProj_1 = $this->m_home->totalCashinProj_1($tanggal1);
				$tCashinReal_1 = $this->m_home->totalCashinReal_1($tanggal1);

				// ....................................................................................

				// Saldo Awal Hari-2
				$salaw_2 = $this->m_home->saldo_awal($tanggal2);

				// Allocated Cash Hari-2
				$allo_2 = $this->m_home->allocated_cash($tanggal2);

				// Ready Cash Hari-2
				$read_2 = $this->m_home->ready_cash($tanggal2);

				// Kas Besar Cabang Hari-2
				$kbc_2 = $this->m_home->kbc($tanggal2);

				// Note Hari-2
				$note_2 = $this->m_home->note($tanggal2);

				// Status Closing Hari-2
				$closing_2 = $this->m_home->status_closing($tanggal2);


				// CASH-IN Hari Ke-2
				$cashin_a2 = $this->m_home->tampil_cashin_a2($tanggal2);
				$cashin_b2 = $this->m_home->tampil_cashin_b2($tanggal2);
				$cashin_c2 = $this->m_home->tampil_cashin_c2($tanggal2);
				$cashin_d2 = $this->m_home->tampil_cashin_d2($tanggal2);
				$cashin_e2 = $this->m_home->tampil_cashin_e2($tanggal2);
				$cashin_f2 = $this->m_home->tampil_cashin_f2($tanggal2);
				$cashin_g2 = $this->m_home->tampil_cashin_g2($tanggal2);
				$cashin_h2 = $this->m_home->tampil_cashin_h2($tanggal2);
				$cashin_i2 = $this->m_home->tampil_cashin_i2($tanggal2);
				$cashin_j2 = $this->m_home->tampil_cashin_j2($tanggal2);
				$cashin_k2 = $this->m_home->tampil_cashin_k2($tanggal2);
				$cashin_l2 = $this->m_home->tampil_cashin_l2($tanggal2);
				$cashin_m2 = $this->m_home->tampil_cashin_m2($tanggal2);
				$cashin_n2 = $this->m_home->tampil_cashin_n2($tanggal2);
				$cashin_o2 = $this->m_home->tampil_cashin_o2($tanggal2);
				$cashin_p2 = $this->m_home->tampil_cashin_p2($tanggal2);
				$cashin_q2 = $this->m_home->tampil_cashin_q2($tanggal2);
				$cashin_r2 = $this->m_home->tampil_cashin_r2($tanggal2);
				$cashin_s2 = $this->m_home->tampil_cashin_s2($tanggal2);
				$tCashinProj_2 = $this->m_home->totalCashinProj_2($tanggal2);
				$tCashinReal_2 = $this->m_home->totalCashinReal_2($tanggal2);

				// ....................................................................................

				// Saldo Awal Hari-3
				$salaw_3 = $this->m_home->saldo_awal($tanggal3);

				// Allocated Cash Hari-3
				$allo_3 = $this->m_home->allocated_cash($tanggal3);

				// Ready Cash Hari-3
				$read_3 = $this->m_home->ready_cash($tanggal3);

				// Kas Besar Cabang Hari-3
				$kbc_3 = $this->m_home->kbc($tanggal3);

				// Note Hari-3
				$note_3 = $this->m_home->note($tanggal3);

				// Status Closing Hari-3
				$closing_3 = $this->m_home->status_closing($tanggal3);

				// CASH-IN Hari Ke-3
				$cashin_a3 = $this->m_home->tampil_cashin_a3($tanggal3);
				$cashin_b3 = $this->m_home->tampil_cashin_b3($tanggal3);
				$cashin_c3 = $this->m_home->tampil_cashin_c3($tanggal3);
				$cashin_d3 = $this->m_home->tampil_cashin_d3($tanggal3);
				$cashin_e3 = $this->m_home->tampil_cashin_e3($tanggal3);
				$cashin_f3 = $this->m_home->tampil_cashin_f3($tanggal3);
				$cashin_g3 = $this->m_home->tampil_cashin_g3($tanggal3);
				$cashin_h3 = $this->m_home->tampil_cashin_h3($tanggal3);
				$cashin_i3 = $this->m_home->tampil_cashin_i3($tanggal3);
				$cashin_j3 = $this->m_home->tampil_cashin_j3($tanggal3);
				$cashin_k3 = $this->m_home->tampil_cashin_k3($tanggal3);
				$cashin_l3 = $this->m_home->tampil_cashin_l3($tanggal3);
				$cashin_m3 = $this->m_home->tampil_cashin_m3($tanggal3);
				$cashin_n3 = $this->m_home->tampil_cashin_n3($tanggal3);
				$cashin_o3 = $this->m_home->tampil_cashin_o3($tanggal3);
				$cashin_p3 = $this->m_home->tampil_cashin_p3($tanggal3);
				$cashin_q3 = $this->m_home->tampil_cashin_q3($tanggal3);
				$cashin_r3 = $this->m_home->tampil_cashin_r3($tanggal3);
				$cashin_s3 = $this->m_home->tampil_cashin_s3($tanggal3);
				$tCashinProj_3 = $this->m_home->totalCashinProj_3($tanggal3);
				$tCashinReal_3 = $this->m_home->totalCashinReal_3($tanggal3);

				// ....................................................................................

				// Saldo Awal Hari-4
				$salaw_4 = $this->m_home->saldo_awal($tanggal4);

				// Allocated Cash Hari-4
				$allo_4 = $this->m_home->allocated_cash($tanggal4);

				// Ready Cash Hari-4
				$read_4 = $this->m_home->ready_cash($tanggal4);

				// Kas Besar Cabang Hari-4
				$kbc_4 = $this->m_home->kbc($tanggal4);

				// Note Hari-4
				$note_4 = $this->m_home->note($tanggal4);

				// Status Closing Hari-4
				$closing_4 = $this->m_home->status_closing($tanggal4);

				// CASH-IN Hari Ke-4
				$cashin_a4 = $this->m_home->tampil_cashin_a4($tanggal4);
				$cashin_b4 = $this->m_home->tampil_cashin_b4($tanggal4);
				$cashin_c4 = $this->m_home->tampil_cashin_c4($tanggal4);
				$cashin_d4 = $this->m_home->tampil_cashin_d4($tanggal4);
				$cashin_e4 = $this->m_home->tampil_cashin_e4($tanggal4);
				$cashin_f4 = $this->m_home->tampil_cashin_f4($tanggal4);
				$cashin_g4 = $this->m_home->tampil_cashin_g4($tanggal4);
				$cashin_h4 = $this->m_home->tampil_cashin_h4($tanggal4);
				$cashin_i4 = $this->m_home->tampil_cashin_i4($tanggal4);
				$cashin_j4 = $this->m_home->tampil_cashin_j4($tanggal4);
				$cashin_k4 = $this->m_home->tampil_cashin_k4($tanggal4);
				$cashin_l4 = $this->m_home->tampil_cashin_l4($tanggal4);
				$cashin_m4 = $this->m_home->tampil_cashin_m4($tanggal4);
				$cashin_n4 = $this->m_home->tampil_cashin_n4($tanggal4);
				$cashin_o4 = $this->m_home->tampil_cashin_o4($tanggal4);
				$cashin_p4 = $this->m_home->tampil_cashin_p4($tanggal4);
				$cashin_q4 = $this->m_home->tampil_cashin_q4($tanggal4);
				$cashin_r4 = $this->m_home->tampil_cashin_r4($tanggal4);
				$cashin_s4 = $this->m_home->tampil_cashin_s4($tanggal4);
				$tCashinProj_4 = $this->m_home->totalCashinProj_4($tanggal4);
				$tCashinReal_4 = $this->m_home->totalCashinReal_4($tanggal4);

				// ....................................................................................

				// Saldo Awal Hari-5
				$salaw_5 = $this->m_home->saldo_awal($tanggal5);

				// Allocated Cash Hari-5
				$allo_5 = $this->m_home->allocated_cash($tanggal5);

				// Ready Cash Hari-5
				$read_5 = $this->m_home->ready_cash($tanggal5);

				// Kas Besar Cabang Hari-5
				$kbc_5 = $this->m_home->kbc($tanggal5);

				// Note Hari-5
				$note_5 = $this->m_home->note($tanggal5);

				// Status Closing Hari-5
				$closing_5 = $this->m_home->status_closing($tanggal5);

				// CASH-IN Hari Ke-5
				$cashin_a5 = $this->m_home->tampil_cashin_a5($tanggal5);
				$cashin_b5 = $this->m_home->tampil_cashin_b5($tanggal5);
				$cashin_c5 = $this->m_home->tampil_cashin_c5($tanggal5);
				$cashin_d5 = $this->m_home->tampil_cashin_d5($tanggal5);
				$cashin_e5 = $this->m_home->tampil_cashin_e5($tanggal5);
				$cashin_f5 = $this->m_home->tampil_cashin_f5($tanggal5);
				$cashin_g5 = $this->m_home->tampil_cashin_g5($tanggal5);
				$cashin_h5 = $this->m_home->tampil_cashin_h5($tanggal5);
				$cashin_i5 = $this->m_home->tampil_cashin_i5($tanggal5);
				$cashin_j5 = $this->m_home->tampil_cashin_j5($tanggal5);
				$cashin_k5 = $this->m_home->tampil_cashin_k5($tanggal5);
				$cashin_l5 = $this->m_home->tampil_cashin_l5($tanggal5);
				$cashin_m5 = $this->m_home->tampil_cashin_m5($tanggal5);
				$cashin_n5 = $this->m_home->tampil_cashin_n5($tanggal5);
				$cashin_o5 = $this->m_home->tampil_cashin_o5($tanggal5);
				$cashin_p5 = $this->m_home->tampil_cashin_p5($tanggal5);
				$cashin_q5 = $this->m_home->tampil_cashin_q5($tanggal5);
				$cashin_r5 = $this->m_home->tampil_cashin_r5($tanggal5);
				$cashin_s5 = $this->m_home->tampil_cashin_s5($tanggal5);
				$tCashinProj_5 = $this->m_home->totalCashinProj_5($tanggal5);
				$tCashinReal_5 = $this->m_home->totalCashinReal_5($tanggal5);

				// ...................................................................................

				// CASH-OUT Hari Kemarin
				$cashout_aKem = $this->m_home->tampil_cashout_aKem($tanggalKemarin);
				$cashout_bKem = $this->m_home->tampil_cashout_bKem($tanggalKemarin);
				$cashout_cKem = $this->m_home->tampil_cashout_cKem($tanggalKemarin);
				$cashout_dKem = $this->m_home->tampil_cashout_dKem($tanggalKemarin);
				$cashout_eKem = $this->m_home->tampil_cashout_eKem($tanggalKemarin);
				$cashout_fKem = $this->m_home->tampil_cashout_fKem($tanggalKemarin);
				$cashout_gKem = $this->m_home->tampil_cashout_gKem($tanggalKemarin);
				$cashout_hKem = $this->m_home->tampil_cashout_hKem($tanggalKemarin);
				$cashout_iKem = $this->m_home->tampil_cashout_iKem($tanggalKemarin);
				$cashout_jKem = $this->m_home->tampil_cashout_jKem($tanggalKemarin);
				$cashout_kKem = $this->m_home->tampil_cashout_kKem($tanggalKemarin);
				$cashout_lKem = $this->m_home->tampil_cashout_lKem($tanggalKemarin);
				$cashout_mKem = $this->m_home->tampil_cashout_mKem($tanggalKemarin);
				$cashout_nKem = $this->m_home->tampil_cashout_nKem($tanggalKemarin);
				$cashout_oKem = $this->m_home->tampil_cashout_oKem($tanggalKemarin);
				$cashout_pKem = $this->m_home->tampil_cashout_pKem($tanggalKemarin);
				$cashout_qKem = $this->m_home->tampil_cashout_qKem($tanggalKemarin);
				$cashout_rKem = $this->m_home->tampil_cashout_rKem($tanggalKemarin);
				$cashout_sKem = $this->m_home->tampil_cashout_sKem($tanggalKemarin);
				$cashout_tKem = $this->m_home->tampil_cashout_tKem($tanggalKemarin);
				$cashout_uKem = $this->m_home->tampil_cashout_uKem($tanggalKemarin);
				$cashout_vKem = $this->m_home->tampil_cashout_vKem($tanggalKemarin);
				$cashout_wKem = $this->m_home->tampil_cashout_wKem($tanggalKemarin);
				$cashout_xKem = $this->m_home->tampil_cashout_xKem($tanggalKemarin);
				$cashout_yKem = $this->m_home->tampil_cashout_yKem($tanggalKemarin);
				$cashout_zKem = $this->m_home->tampil_cashout_zKem($tanggalKemarin);
				$cashout_a2Kem = $this->m_home->tampil_cashout_a2Kem($tanggalKemarin);
				$cashout_b2Kem = $this->m_home->tampil_cashout_b2Kem($tanggalKemarin);
				$cashout_c2Kem = $this->m_home->tampil_cashout_c2Kem($tanggalKemarin);
				$cashout_d2Kem = $this->m_home->tampil_cashout_d2Kem($tanggalKemarin);
				$cashout_e2Kem = $this->m_home->tampil_cashout_e2Kem($tanggalKemarin);
				$cashout_f2Kem = $this->m_home->tampil_cashout_f2Kem($tanggalKemarin);
				$cashout_g2Kem = $this->m_home->tampil_cashout_g2Kem($tanggalKemarin);
				$cashout_h2Kem = $this->m_home->tampil_cashout_h2Kem($tanggalKemarin);
				$cashout_i2Kem = $this->m_home->tampil_cashout_i2Kem($tanggalKemarin);
				$cashout_j2Kem = $this->m_home->tampil_cashout_j2Kem($tanggalKemarin);
				$cashout_k2Kem = $this->m_home->tampil_cashout_k2Kem($tanggalKemarin);
				$cashout_l2Kem = $this->m_home->tampil_cashout_l2Kem($tanggalKemarin);
				$cashout_m2Kem = $this->m_home->tampil_cashout_m2Kem($tanggalKemarin);
				$cashout_n2Kem = $this->m_home->tampil_cashout_n2Kem($tanggalKemarin);
				$cashout_o2Kem = $this->m_home->tampil_cashout_o2Kem($tanggalKemarin);
				$cashout_p2Kem = $this->m_home->tampil_cashout_p2Kem($tanggalKemarin);
				$cashout_q2Kem = $this->m_home->tampil_cashout_q2Kem($tanggalKemarin);
				$cashout_r2Kem = $this->m_home->tampil_cashout_r2Kem($tanggalKemarin);
				$cashout_s2Kem = $this->m_home->tampil_cashout_s2Kem($tanggalKemarin);
				$cashout_t2Kem = $this->m_home->tampil_cashout_t2Kem($tanggalKemarin);
				$cashout_u2Kem = $this->m_home->tampil_cashout_u2Kem($tanggalKemarin);
				$tCashoutProj_Kem = $this->m_home->totalCashoutProj_Kem($tanggalKemarin);
				// $tCashoutReal_Kem = $this->m_home->totalCashoutReal_Kem($tanggalKemarin);

				// CASH-OUT Hari Ke-1
				$cashout_a1 = $this->m_home->tampil_cashout_a1($tanggal1);
				$cashout_b1 = $this->m_home->tampil_cashout_b1($tanggal1);
				$cashout_c1 = $this->m_home->tampil_cashout_c1($tanggal1);
				$cashout_d1 = $this->m_home->tampil_cashout_d1($tanggal1);
				$cashout_e1 = $this->m_home->tampil_cashout_e1($tanggal1);
				$cashout_f1 = $this->m_home->tampil_cashout_f1($tanggal1);
				$cashout_g1 = $this->m_home->tampil_cashout_g1($tanggal1);
				$cashout_h1 = $this->m_home->tampil_cashout_h1($tanggal1);
				$cashout_i1 = $this->m_home->tampil_cashout_i1($tanggal1);
				$cashout_j1 = $this->m_home->tampil_cashout_j1($tanggal1);
				$cashout_k1 = $this->m_home->tampil_cashout_k1($tanggal1);
				$cashout_l1 = $this->m_home->tampil_cashout_l1($tanggal1);
				$cashout_m1 = $this->m_home->tampil_cashout_m1($tanggal1);
				$cashout_n1 = $this->m_home->tampil_cashout_n1($tanggal1);
				$cashout_o1 = $this->m_home->tampil_cashout_o1($tanggal1);
				$cashout_p1 = $this->m_home->tampil_cashout_p1($tanggal1);
				$cashout_q1 = $this->m_home->tampil_cashout_q1($tanggal1);
				$cashout_r1 = $this->m_home->tampil_cashout_r1($tanggal1);
				$cashout_s1 = $this->m_home->tampil_cashout_s1($tanggal1);
				$cashout_t1 = $this->m_home->tampil_cashout_t1($tanggal1);
				$cashout_u1 = $this->m_home->tampil_cashout_u1($tanggal1);
				$cashout_v1 = $this->m_home->tampil_cashout_v1($tanggal1);
				$cashout_w1 = $this->m_home->tampil_cashout_w1($tanggal1);
				$cashout_x1 = $this->m_home->tampil_cashout_x1($tanggal1);
				$cashout_y1 = $this->m_home->tampil_cashout_y1($tanggal1);
				$cashout_z1 = $this->m_home->tampil_cashout_z1($tanggal1);
				$cashout_a21 = $this->m_home->tampil_cashout_a21($tanggal1);
				$cashout_b21 = $this->m_home->tampil_cashout_b21($tanggal1);
				$cashout_c21 = $this->m_home->tampil_cashout_c21($tanggal1);
				$cashout_d21 = $this->m_home->tampil_cashout_d21($tanggal1);
				$cashout_e21 = $this->m_home->tampil_cashout_e21($tanggal1);
				$cashout_f21 = $this->m_home->tampil_cashout_f21($tanggal1);
				$cashout_g21 = $this->m_home->tampil_cashout_g21($tanggal1);
				$cashout_h21 = $this->m_home->tampil_cashout_h21($tanggal1);
				$cashout_i21 = $this->m_home->tampil_cashout_i21($tanggal1);
				$cashout_j21 = $this->m_home->tampil_cashout_j21($tanggal1);
				$cashout_k21 = $this->m_home->tampil_cashout_k21($tanggal1);
				$cashout_l21 = $this->m_home->tampil_cashout_l21($tanggal1);
				$cashout_m21 = $this->m_home->tampil_cashout_m21($tanggal1);
				$cashout_n21 = $this->m_home->tampil_cashout_n21($tanggal1);
				$cashout_o21 = $this->m_home->tampil_cashout_o21($tanggal1);
				$cashout_p21 = $this->m_home->tampil_cashout_p21($tanggal1);
				$cashout_q21 = $this->m_home->tampil_cashout_q21($tanggal1);
				$cashout_r21 = $this->m_home->tampil_cashout_r21($tanggal1);
				$cashout_s21 = $this->m_home->tampil_cashout_s21($tanggal1);
				$cashout_t21 = $this->m_home->tampil_cashout_t21($tanggal1);
				$cashout_u21 = $this->m_home->tampil_cashout_u21($tanggal1);
				$cashout_v21 = $this->m_home->tampil_cashout_v21($tanggal1);
				$cashout_w21 = $this->m_home->tampil_cashout_w21($tanggal1);
				$cashout_x21 = $this->m_home->tampil_cashout_x21($tanggal1);
				$cashout_y21 = $this->m_home->tampil_cashout_y21($tanggal1);
				$cashout_z21 = $this->m_home->tampil_cashout_z21($tanggal1);
				$cashout_a31 = $this->m_home->tampil_cashout_a31($tanggal1);
				$cashout_b31 = $this->m_home->tampil_cashout_b31($tanggal1);
				$cashout_c31 = $this->m_home->tampil_cashout_c31($tanggal1);
				$cashout_d31 = $this->m_home->tampil_cashout_d31($tanggal1);
				$cashout_e31 = $this->m_home->tampil_cashout_e31($tanggal1);
				$cashout_f31 = $this->m_home->tampil_cashout_f31($tanggal1);
				$cashout_g31 = $this->m_home->tampil_cashout_g31($tanggal1);
				$cashout_h31 = $this->m_home->tampil_cashout_h31($tanggal1);
				$cashout_i31 = $this->m_home->tampil_cashout_i31($tanggal1);
				$cashout_j31 = $this->m_home->tampil_cashout_j31($tanggal1);
				$cashout_k31 = $this->m_home->tampil_cashout_k31($tanggal1);
				$cashout_l31 = $this->m_home->tampil_cashout_l31($tanggal1);
				$cashout_m31 = $this->m_home->tampil_cashout_m31($tanggal1);
				$cashout_n31 = $this->m_home->tampil_cashout_n31($tanggal1);
				$cashout_o31 = $this->m_home->tampil_cashout_o31($tanggal1);
				$cashout_p31 = $this->m_home->tampil_cashout_p31($tanggal1);
				$cashout_q31 = $this->m_home->tampil_cashout_q31($tanggal1);
				$cashout_r31 = $this->m_home->tampil_cashout_r31($tanggal1);
				$cashout_s31 = $this->m_home->tampil_cashout_s31($tanggal1);
				$cashout_t31 = $this->m_home->tampil_cashout_t31($tanggal1);
				$cashout_u31 = $this->m_home->tampil_cashout_u31($tanggal1);
				$cashout_v31 = $this->m_home->tampil_cashout_v31($tanggal1);
				$cashout_w31 = $this->m_home->tampil_cashout_w31($tanggal1);
				$cashout_x31 = $this->m_home->tampil_cashout_x31($tanggal1);
				$cashout_y31 = $this->m_home->tampil_cashout_y31($tanggal1);
				$cashout_z31 = $this->m_home->tampil_cashout_z31($tanggal1);
				$cashout_a41 = $this->m_home->tampil_cashout_a41($tanggal1);
				$cashout_b41 = $this->m_home->tampil_cashout_b41($tanggal1);
				$tCashoutProj_1 = $this->m_home->totalCashoutProj_1($tanggal1);
				$tCashoutReal_1 = $this->m_home->totalCashoutReal_1($tanggal1);


				// CASH-OUT Hari Ke-2
				$cashout_a2 = $this->m_home->tampil_cashout_a2($tanggal2);
				$cashout_b2 = $this->m_home->tampil_cashout_b2($tanggal2);
				$cashout_c2 = $this->m_home->tampil_cashout_c2($tanggal2);
				$cashout_d2 = $this->m_home->tampil_cashout_d2($tanggal2);
				$cashout_e2 = $this->m_home->tampil_cashout_e2($tanggal2);
				$cashout_f2 = $this->m_home->tampil_cashout_f2($tanggal2);
				$cashout_g2 = $this->m_home->tampil_cashout_g2($tanggal2);
				$cashout_h2 = $this->m_home->tampil_cashout_h2($tanggal2);
				$cashout_i2 = $this->m_home->tampil_cashout_i2($tanggal2);
				$cashout_j2 = $this->m_home->tampil_cashout_j2($tanggal2);
				$cashout_k2 = $this->m_home->tampil_cashout_k2($tanggal2);
				$cashout_l2 = $this->m_home->tampil_cashout_l2($tanggal2);
				$cashout_m2 = $this->m_home->tampil_cashout_m2($tanggal2);
				$cashout_n2 = $this->m_home->tampil_cashout_n2($tanggal2);
				$cashout_o2 = $this->m_home->tampil_cashout_o2($tanggal2);
				$cashout_p2 = $this->m_home->tampil_cashout_p2($tanggal2);
				$cashout_q2 = $this->m_home->tampil_cashout_q2($tanggal2);
				$cashout_r2 = $this->m_home->tampil_cashout_r2($tanggal2);
				$cashout_s2 = $this->m_home->tampil_cashout_s2($tanggal2);
				$cashout_t2 = $this->m_home->tampil_cashout_t2($tanggal2);
				$cashout_u2 = $this->m_home->tampil_cashout_u2($tanggal2);
				$cashout_v2 = $this->m_home->tampil_cashout_v2($tanggal2);
				$cashout_w2 = $this->m_home->tampil_cashout_w2($tanggal2);
				$cashout_x2 = $this->m_home->tampil_cashout_x2($tanggal2);
				$cashout_y2 = $this->m_home->tampil_cashout_y2($tanggal2);
				$cashout_z2 = $this->m_home->tampil_cashout_z2($tanggal2);
				$cashout_a22 = $this->m_home->tampil_cashout_a22($tanggal2);
				$cashout_b22 = $this->m_home->tampil_cashout_b22($tanggal2);
				$cashout_c22 = $this->m_home->tampil_cashout_c22($tanggal2);
				$cashout_d22 = $this->m_home->tampil_cashout_d22($tanggal2);
				$cashout_e22 = $this->m_home->tampil_cashout_e22($tanggal2);
				$cashout_f22 = $this->m_home->tampil_cashout_f22($tanggal2);
				$cashout_g22 = $this->m_home->tampil_cashout_g22($tanggal2);
				$cashout_h22 = $this->m_home->tampil_cashout_h22($tanggal2);
				$cashout_i22 = $this->m_home->tampil_cashout_i22($tanggal2);
				$cashout_j22 = $this->m_home->tampil_cashout_j22($tanggal2);
				$cashout_k22 = $this->m_home->tampil_cashout_k22($tanggal2);
				$cashout_l22 = $this->m_home->tampil_cashout_l22($tanggal2);
				$cashout_m22 = $this->m_home->tampil_cashout_m22($tanggal2);
				$cashout_n22 = $this->m_home->tampil_cashout_n22($tanggal2);
				$cashout_o22 = $this->m_home->tampil_cashout_o22($tanggal2);
				$cashout_p22 = $this->m_home->tampil_cashout_p22($tanggal2);
				$cashout_q22 = $this->m_home->tampil_cashout_q22($tanggal2);
				$cashout_r22 = $this->m_home->tampil_cashout_r22($tanggal2);
				$cashout_s22 = $this->m_home->tampil_cashout_s22($tanggal2);
				$cashout_t22 = $this->m_home->tampil_cashout_t22($tanggal2);
				$cashout_u22 = $this->m_home->tampil_cashout_u22($tanggal2);
				$cashout_v22 = $this->m_home->tampil_cashout_v22($tanggal2);
				$cashout_w22 = $this->m_home->tampil_cashout_w22($tanggal2);
				$cashout_x22 = $this->m_home->tampil_cashout_x22($tanggal2);
				$cashout_y22 = $this->m_home->tampil_cashout_y22($tanggal2);
				$cashout_z22 = $this->m_home->tampil_cashout_z22($tanggal2);
				$cashout_a32 = $this->m_home->tampil_cashout_a32($tanggal2);
				$cashout_b32 = $this->m_home->tampil_cashout_b32($tanggal2);
				$cashout_c32 = $this->m_home->tampil_cashout_c32($tanggal2);
				$cashout_d32 = $this->m_home->tampil_cashout_d32($tanggal2);
				$cashout_e32 = $this->m_home->tampil_cashout_e32($tanggal2);
				$cashout_f32 = $this->m_home->tampil_cashout_f32($tanggal2);
				$cashout_g32 = $this->m_home->tampil_cashout_g32($tanggal2);
				$cashout_h32 = $this->m_home->tampil_cashout_h32($tanggal2);
				$cashout_i32 = $this->m_home->tampil_cashout_i32($tanggal2);
				$cashout_j32 = $this->m_home->tampil_cashout_j32($tanggal2);
				$cashout_k32 = $this->m_home->tampil_cashout_k32($tanggal2);
				$cashout_l32 = $this->m_home->tampil_cashout_l32($tanggal2);
				$cashout_m32 = $this->m_home->tampil_cashout_m32($tanggal2);
				$cashout_n32 = $this->m_home->tampil_cashout_n32($tanggal2);
				$cashout_o32 = $this->m_home->tampil_cashout_o32($tanggal2);
				$cashout_p32 = $this->m_home->tampil_cashout_p32($tanggal2);
				$cashout_q32 = $this->m_home->tampil_cashout_q32($tanggal2);
				$cashout_r32 = $this->m_home->tampil_cashout_r32($tanggal2);
				$cashout_s32 = $this->m_home->tampil_cashout_s32($tanggal2);
				$cashout_t32 = $this->m_home->tampil_cashout_t32($tanggal2);
				$cashout_u32 = $this->m_home->tampil_cashout_u32($tanggal2);
				$cashout_v32 = $this->m_home->tampil_cashout_v32($tanggal2);
				$cashout_w32 = $this->m_home->tampil_cashout_w32($tanggal2);
				$cashout_x32 = $this->m_home->tampil_cashout_x32($tanggal2);
				$cashout_y32 = $this->m_home->tampil_cashout_y32($tanggal2);
				$cashout_z32 = $this->m_home->tampil_cashout_z32($tanggal2);
				$cashout_a42 = $this->m_home->tampil_cashout_a42($tanggal2);
				$cashout_b42 = $this->m_home->tampil_cashout_b42($tanggal2);
				$tCashoutProj_2 = $this->m_home->totalCashoutProj_2($tanggal2);
				$tCashoutReal_2 = $this->m_home->totalCashoutReal_2($tanggal2);


				// CASH-OUT Hari Ke-3
				$cashout_a3 = $this->m_home->tampil_cashout_a3($tanggal3);
				$cashout_b3 = $this->m_home->tampil_cashout_b3($tanggal3);
				$cashout_c3 = $this->m_home->tampil_cashout_c3($tanggal3);
				$cashout_d3 = $this->m_home->tampil_cashout_d3($tanggal3);
				$cashout_e3 = $this->m_home->tampil_cashout_e3($tanggal3);
				$cashout_f3 = $this->m_home->tampil_cashout_f3($tanggal3);
				$cashout_g3 = $this->m_home->tampil_cashout_g3($tanggal3);
				$cashout_h3 = $this->m_home->tampil_cashout_h3($tanggal3);
				$cashout_i3 = $this->m_home->tampil_cashout_i3($tanggal3);
				$cashout_j3 = $this->m_home->tampil_cashout_j3($tanggal3);
				$cashout_k3 = $this->m_home->tampil_cashout_k3($tanggal3);
				$cashout_l3 = $this->m_home->tampil_cashout_l3($tanggal3);
				$cashout_m3 = $this->m_home->tampil_cashout_m3($tanggal3);
				$cashout_n3 = $this->m_home->tampil_cashout_n3($tanggal3);
				$cashout_o3 = $this->m_home->tampil_cashout_o3($tanggal3);
				$cashout_p3 = $this->m_home->tampil_cashout_p3($tanggal3);
				$cashout_q3 = $this->m_home->tampil_cashout_q3($tanggal3);
				$cashout_r3 = $this->m_home->tampil_cashout_r3($tanggal3);
				$cashout_s3 = $this->m_home->tampil_cashout_s3($tanggal3);
				$cashout_t3 = $this->m_home->tampil_cashout_t3($tanggal3);
				$cashout_u3 = $this->m_home->tampil_cashout_u3($tanggal3);
				$cashout_v3 = $this->m_home->tampil_cashout_v3($tanggal3);
				$cashout_w3 = $this->m_home->tampil_cashout_w3($tanggal3);
				$cashout_x3 = $this->m_home->tampil_cashout_x3($tanggal3);
				$cashout_y3 = $this->m_home->tampil_cashout_y3($tanggal3);
				$cashout_z3 = $this->m_home->tampil_cashout_z3($tanggal3);
				$cashout_a23 = $this->m_home->tampil_cashout_a23($tanggal3);
				$cashout_b23 = $this->m_home->tampil_cashout_b23($tanggal3);
				$cashout_c23 = $this->m_home->tampil_cashout_c23($tanggal3);
				$cashout_d23 = $this->m_home->tampil_cashout_d23($tanggal3);
				$cashout_e23 = $this->m_home->tampil_cashout_e23($tanggal3);
				$cashout_f23 = $this->m_home->tampil_cashout_f23($tanggal3);
				$cashout_g23 = $this->m_home->tampil_cashout_g23($tanggal3);
				$cashout_h23 = $this->m_home->tampil_cashout_h23($tanggal3);
				$cashout_i23 = $this->m_home->tampil_cashout_i23($tanggal3);
				$cashout_j23 = $this->m_home->tampil_cashout_j23($tanggal3);
				$cashout_k23 = $this->m_home->tampil_cashout_k23($tanggal3);
				$cashout_l23 = $this->m_home->tampil_cashout_l23($tanggal3);
				$cashout_m23 = $this->m_home->tampil_cashout_m23($tanggal3);
				$cashout_n23 = $this->m_home->tampil_cashout_n23($tanggal3);
				$cashout_o23 = $this->m_home->tampil_cashout_o23($tanggal3);
				$cashout_p23 = $this->m_home->tampil_cashout_p23($tanggal3);
				$cashout_q23 = $this->m_home->tampil_cashout_q23($tanggal3);
				$cashout_r23 = $this->m_home->tampil_cashout_r23($tanggal3);
				$cashout_s23 = $this->m_home->tampil_cashout_s23($tanggal3);
				$cashout_t23 = $this->m_home->tampil_cashout_t23($tanggal3);
				$cashout_u23 = $this->m_home->tampil_cashout_u23($tanggal3);
				$cashout_v23 = $this->m_home->tampil_cashout_v23($tanggal3);
				$cashout_w23 = $this->m_home->tampil_cashout_w23($tanggal3);
				$cashout_x23 = $this->m_home->tampil_cashout_x23($tanggal3);
				$cashout_y23 = $this->m_home->tampil_cashout_y23($tanggal3);
				$cashout_z23 = $this->m_home->tampil_cashout_z23($tanggal3);
				$cashout_a33 = $this->m_home->tampil_cashout_a33($tanggal3);
				$cashout_b33 = $this->m_home->tampil_cashout_b33($tanggal3);
				$cashout_c33 = $this->m_home->tampil_cashout_c33($tanggal3);
				$cashout_d33 = $this->m_home->tampil_cashout_d33($tanggal3);
				$cashout_e33 = $this->m_home->tampil_cashout_e33($tanggal3);
				$cashout_f33 = $this->m_home->tampil_cashout_f33($tanggal3);
				$cashout_g33 = $this->m_home->tampil_cashout_g33($tanggal3);
				$cashout_h33 = $this->m_home->tampil_cashout_h33($tanggal3);
				$cashout_i33 = $this->m_home->tampil_cashout_i33($tanggal3);
				$cashout_j33 = $this->m_home->tampil_cashout_j33($tanggal3);
				$cashout_k33 = $this->m_home->tampil_cashout_k33($tanggal3);
				$cashout_l33 = $this->m_home->tampil_cashout_l33($tanggal3);
				$cashout_m33 = $this->m_home->tampil_cashout_m33($tanggal3);
				$cashout_n33 = $this->m_home->tampil_cashout_n33($tanggal3);
				$cashout_o33 = $this->m_home->tampil_cashout_o33($tanggal3);
				$cashout_p33 = $this->m_home->tampil_cashout_p33($tanggal3);
				$cashout_q33 = $this->m_home->tampil_cashout_q33($tanggal3);
				$cashout_r33 = $this->m_home->tampil_cashout_r33($tanggal3);
				$cashout_s33 = $this->m_home->tampil_cashout_s33($tanggal3);
				$cashout_t33 = $this->m_home->tampil_cashout_t33($tanggal3);
				$cashout_u33 = $this->m_home->tampil_cashout_u33($tanggal3);
				$cashout_v33 = $this->m_home->tampil_cashout_v33($tanggal3);
				$cashout_w33 = $this->m_home->tampil_cashout_w33($tanggal3);
				$cashout_x33 = $this->m_home->tampil_cashout_x33($tanggal3);
				$cashout_y33 = $this->m_home->tampil_cashout_y33($tanggal3);
				$cashout_z33 = $this->m_home->tampil_cashout_z33($tanggal3);
				$cashout_a43 = $this->m_home->tampil_cashout_a43($tanggal3);
				$cashout_b43 = $this->m_home->tampil_cashout_b43($tanggal3);
				$tCashoutProj_3 = $this->m_home->totalCashoutProj_3($tanggal3);
				$tCashoutReal_3 = $this->m_home->totalCashoutReal_3($tanggal3);


				// CASH-OUT Hari Ke-4
				$cashout_a4 = $this->m_home->tampil_cashout_a4($tanggal4);
				$cashout_b4 = $this->m_home->tampil_cashout_b4($tanggal4);
				$cashout_c4 = $this->m_home->tampil_cashout_c4($tanggal4);
				$cashout_d4 = $this->m_home->tampil_cashout_d4($tanggal4);
				$cashout_e4 = $this->m_home->tampil_cashout_e4($tanggal4);
				$cashout_f4 = $this->m_home->tampil_cashout_f4($tanggal4);
				$cashout_g4 = $this->m_home->tampil_cashout_g4($tanggal4);
				$cashout_h4 = $this->m_home->tampil_cashout_h4($tanggal4);
				$cashout_i4 = $this->m_home->tampil_cashout_i4($tanggal4);
				$cashout_j4 = $this->m_home->tampil_cashout_j4($tanggal4);
				$cashout_k4 = $this->m_home->tampil_cashout_k4($tanggal4);
				$cashout_l4 = $this->m_home->tampil_cashout_l4($tanggal4);
				$cashout_m4 = $this->m_home->tampil_cashout_m4($tanggal4);
				$cashout_n4 = $this->m_home->tampil_cashout_n4($tanggal4);
				$cashout_o4 = $this->m_home->tampil_cashout_o4($tanggal4);
				$cashout_p4 = $this->m_home->tampil_cashout_p4($tanggal4);
				$cashout_q4 = $this->m_home->tampil_cashout_q4($tanggal4);
				$cashout_r4 = $this->m_home->tampil_cashout_r4($tanggal4);
				$cashout_s4 = $this->m_home->tampil_cashout_s4($tanggal4);
				$cashout_t4 = $this->m_home->tampil_cashout_t4($tanggal4);
				$cashout_u4 = $this->m_home->tampil_cashout_u4($tanggal4);
				$cashout_v4 = $this->m_home->tampil_cashout_v4($tanggal4);
				$cashout_w4 = $this->m_home->tampil_cashout_w4($tanggal4);
				$cashout_x4 = $this->m_home->tampil_cashout_x4($tanggal4);
				$cashout_y4 = $this->m_home->tampil_cashout_y4($tanggal4);
				$cashout_z4 = $this->m_home->tampil_cashout_z4($tanggal4);
				$cashout_a24 = $this->m_home->tampil_cashout_a24($tanggal4);
				$cashout_b24 = $this->m_home->tampil_cashout_b24($tanggal4);
				$cashout_c24 = $this->m_home->tampil_cashout_c24($tanggal4);
				$cashout_d24 = $this->m_home->tampil_cashout_d24($tanggal4);
				$cashout_e24 = $this->m_home->tampil_cashout_e24($tanggal4);
				$cashout_f24 = $this->m_home->tampil_cashout_f24($tanggal4);
				$cashout_g24 = $this->m_home->tampil_cashout_g24($tanggal4);
				$cashout_h24 = $this->m_home->tampil_cashout_h24($tanggal4);
				$cashout_i24 = $this->m_home->tampil_cashout_i24($tanggal4);
				$cashout_j24 = $this->m_home->tampil_cashout_j24($tanggal4);
				$cashout_k24 = $this->m_home->tampil_cashout_k24($tanggal4);
				$cashout_l24 = $this->m_home->tampil_cashout_l24($tanggal4);
				$cashout_m24 = $this->m_home->tampil_cashout_m24($tanggal4);
				$cashout_n24 = $this->m_home->tampil_cashout_n24($tanggal4);
				$cashout_o24 = $this->m_home->tampil_cashout_o24($tanggal4);
				$cashout_p24 = $this->m_home->tampil_cashout_p24($tanggal4);
				$cashout_q24 = $this->m_home->tampil_cashout_q24($tanggal4);
				$cashout_r24 = $this->m_home->tampil_cashout_r24($tanggal4);
				$cashout_s24 = $this->m_home->tampil_cashout_s24($tanggal4);
				$cashout_t24 = $this->m_home->tampil_cashout_t24($tanggal4);
				$cashout_u24 = $this->m_home->tampil_cashout_u24($tanggal4);
				$cashout_v24 = $this->m_home->tampil_cashout_v24($tanggal4);
				$cashout_w24 = $this->m_home->tampil_cashout_w24($tanggal4);
				$cashout_x24 = $this->m_home->tampil_cashout_x24($tanggal4);
				$cashout_y24 = $this->m_home->tampil_cashout_y24($tanggal4);
				$cashout_z24 = $this->m_home->tampil_cashout_z24($tanggal4);
				$cashout_a34 = $this->m_home->tampil_cashout_a34($tanggal4);
				$cashout_b34 = $this->m_home->tampil_cashout_b34($tanggal4);
				$cashout_c34 = $this->m_home->tampil_cashout_c34($tanggal4);
				$cashout_d34 = $this->m_home->tampil_cashout_d34($tanggal4);
				$cashout_e34 = $this->m_home->tampil_cashout_e34($tanggal4);
				$cashout_f34 = $this->m_home->tampil_cashout_f34($tanggal4);
				$cashout_g34 = $this->m_home->tampil_cashout_g34($tanggal4);
				$cashout_h34 = $this->m_home->tampil_cashout_h34($tanggal4);
				$cashout_i34 = $this->m_home->tampil_cashout_i34($tanggal4);
				$cashout_j34 = $this->m_home->tampil_cashout_j34($tanggal4);
				$cashout_k34 = $this->m_home->tampil_cashout_k34($tanggal4);
				$cashout_l34 = $this->m_home->tampil_cashout_l34($tanggal4);
				$cashout_m34 = $this->m_home->tampil_cashout_m34($tanggal4);
				$cashout_n34 = $this->m_home->tampil_cashout_n34($tanggal4);
				$cashout_o34 = $this->m_home->tampil_cashout_o34($tanggal4);
				$cashout_p34 = $this->m_home->tampil_cashout_p34($tanggal4);
				$cashout_q34 = $this->m_home->tampil_cashout_q34($tanggal4);
				$cashout_r34 = $this->m_home->tampil_cashout_r34($tanggal4);
				$cashout_s34 = $this->m_home->tampil_cashout_s34($tanggal4);
				$cashout_t34 = $this->m_home->tampil_cashout_t34($tanggal4);
				$cashout_u34 = $this->m_home->tampil_cashout_u34($tanggal4);
				$cashout_v34 = $this->m_home->tampil_cashout_v34($tanggal4);
				$cashout_w34 = $this->m_home->tampil_cashout_w34($tanggal4);
				$cashout_x34 = $this->m_home->tampil_cashout_x34($tanggal4);
				$cashout_y34 = $this->m_home->tampil_cashout_y34($tanggal4);
				$cashout_z34 = $this->m_home->tampil_cashout_z34($tanggal4);
				$cashout_a44 = $this->m_home->tampil_cashout_a44($tanggal4);
				$cashout_b44 = $this->m_home->tampil_cashout_b44($tanggal4);
				$tCashoutProj_4 = $this->m_home->totalCashoutProj_4($tanggal4);
				$tCashoutReal_4 = $this->m_home->totalCashoutReal_4($tanggal4);


				// CASH-OUT Hari Ke-5
				$cashout_a5 = $this->m_home->tampil_cashout_a5($tanggal5);
				$cashout_b5 = $this->m_home->tampil_cashout_b5($tanggal5);
				$cashout_c5 = $this->m_home->tampil_cashout_c5($tanggal5);
				$cashout_d5 = $this->m_home->tampil_cashout_d5($tanggal5);
				$cashout_e5 = $this->m_home->tampil_cashout_e5($tanggal5);
				$cashout_f5 = $this->m_home->tampil_cashout_f5($tanggal5);
				$cashout_g5 = $this->m_home->tampil_cashout_g5($tanggal5);
				$cashout_h5 = $this->m_home->tampil_cashout_h5($tanggal5);
				$cashout_i5 = $this->m_home->tampil_cashout_i5($tanggal5);
				$cashout_j5 = $this->m_home->tampil_cashout_j5($tanggal5);
				$cashout_k5 = $this->m_home->tampil_cashout_k5($tanggal5);
				$cashout_l5 = $this->m_home->tampil_cashout_l5($tanggal5);
				$cashout_m5 = $this->m_home->tampil_cashout_m5($tanggal5);
				$cashout_n5 = $this->m_home->tampil_cashout_n5($tanggal5);
				$cashout_o5 = $this->m_home->tampil_cashout_o5($tanggal5);
				$cashout_p5 = $this->m_home->tampil_cashout_p5($tanggal5);
				$cashout_q5 = $this->m_home->tampil_cashout_q5($tanggal5);
				$cashout_r5 = $this->m_home->tampil_cashout_r5($tanggal5);
				$cashout_s5 = $this->m_home->tampil_cashout_s5($tanggal5);
				$cashout_t5 = $this->m_home->tampil_cashout_t5($tanggal5);
				$cashout_u5 = $this->m_home->tampil_cashout_u5($tanggal5);
				$cashout_v5 = $this->m_home->tampil_cashout_v5($tanggal5);
				$cashout_w5 = $this->m_home->tampil_cashout_w5($tanggal5);
				$cashout_x5 = $this->m_home->tampil_cashout_x5($tanggal5);
				$cashout_y5 = $this->m_home->tampil_cashout_y5($tanggal5);
				$cashout_z5 = $this->m_home->tampil_cashout_z5($tanggal5);
				$cashout_a25 = $this->m_home->tampil_cashout_a25($tanggal5);
				$cashout_b25 = $this->m_home->tampil_cashout_b25($tanggal5);
				$cashout_c25 = $this->m_home->tampil_cashout_c25($tanggal5);
				$cashout_d25 = $this->m_home->tampil_cashout_d25($tanggal5);
				$cashout_e25 = $this->m_home->tampil_cashout_e25($tanggal5);
				$cashout_f25 = $this->m_home->tampil_cashout_f25($tanggal5);
				$cashout_g25 = $this->m_home->tampil_cashout_g25($tanggal5);
				$cashout_h25 = $this->m_home->tampil_cashout_h25($tanggal5);
				$cashout_i25 = $this->m_home->tampil_cashout_i25($tanggal5);
				$cashout_j25 = $this->m_home->tampil_cashout_j25($tanggal5);
				$cashout_k25 = $this->m_home->tampil_cashout_k25($tanggal5);
				$cashout_l25 = $this->m_home->tampil_cashout_l25($tanggal5);
				$cashout_m25 = $this->m_home->tampil_cashout_m25($tanggal5);
				$cashout_n25 = $this->m_home->tampil_cashout_n25($tanggal5);
				$cashout_o25 = $this->m_home->tampil_cashout_o25($tanggal5);
				$cashout_p25 = $this->m_home->tampil_cashout_p25($tanggal5);
				$cashout_q25 = $this->m_home->tampil_cashout_q25($tanggal5);
				$cashout_r25 = $this->m_home->tampil_cashout_r25($tanggal5);
				$cashout_s25 = $this->m_home->tampil_cashout_s25($tanggal5);
				$cashout_t25 = $this->m_home->tampil_cashout_t25($tanggal5);
				$cashout_u25 = $this->m_home->tampil_cashout_u25($tanggal5);
				$cashout_v25 = $this->m_home->tampil_cashout_v25($tanggal5);
				$cashout_w25 = $this->m_home->tampil_cashout_w25($tanggal5);
				$cashout_x25 = $this->m_home->tampil_cashout_x25($tanggal5);
				$cashout_y25 = $this->m_home->tampil_cashout_y25($tanggal5);
				$cashout_z25 = $this->m_home->tampil_cashout_z25($tanggal5);
				$cashout_a35 = $this->m_home->tampil_cashout_a35($tanggal5);
				$cashout_b35 = $this->m_home->tampil_cashout_b35($tanggal5);
				$cashout_c35 = $this->m_home->tampil_cashout_c35($tanggal5);
				$cashout_d35 = $this->m_home->tampil_cashout_d35($tanggal5);
				$cashout_e35 = $this->m_home->tampil_cashout_e35($tanggal5);
				$cashout_f35 = $this->m_home->tampil_cashout_f35($tanggal5);
				$cashout_g35 = $this->m_home->tampil_cashout_g35($tanggal5);
				$cashout_h35 = $this->m_home->tampil_cashout_h35($tanggal5);
				$cashout_i35 = $this->m_home->tampil_cashout_i35($tanggal5);
				$cashout_j35 = $this->m_home->tampil_cashout_j35($tanggal5);
				$cashout_k35 = $this->m_home->tampil_cashout_k35($tanggal5);
				$cashout_l35 = $this->m_home->tampil_cashout_l35($tanggal5);
				$cashout_m35 = $this->m_home->tampil_cashout_m35($tanggal5);
				$cashout_n35 = $this->m_home->tampil_cashout_n35($tanggal5);
				$cashout_o35 = $this->m_home->tampil_cashout_o35($tanggal5);
				$cashout_p35 = $this->m_home->tampil_cashout_p35($tanggal5);
				$cashout_q35 = $this->m_home->tampil_cashout_q35($tanggal5);
				$cashout_r35 = $this->m_home->tampil_cashout_r35($tanggal5);
				$cashout_s35 = $this->m_home->tampil_cashout_s35($tanggal5);
				$cashout_t35 = $this->m_home->tampil_cashout_t35($tanggal5);
				$cashout_u35 = $this->m_home->tampil_cashout_u35($tanggal5);
				$cashout_v35 = $this->m_home->tampil_cashout_v35($tanggal5);
				$cashout_w35 = $this->m_home->tampil_cashout_w35($tanggal5);
				$cashout_x35 = $this->m_home->tampil_cashout_x35($tanggal5);
				$cashout_y35 = $this->m_home->tampil_cashout_y35($tanggal5);
				$cashout_z35 = $this->m_home->tampil_cashout_z35($tanggal5);
				$cashout_a45 = $this->m_home->tampil_cashout_a45($tanggal5);
				$cashout_b45 = $this->m_home->tampil_cashout_b45($tanggal5);
				$tCashoutProj_5 = $this->m_home->totalCashoutProj_5($tanggal5);
				$tCashoutReal_5 = $this->m_home->totalCashoutReal_5($tanggal5);


				$this->load->view('header');
				$this->load->view('sidebar');
				$this->load->view('v_home',array(

					// Hari & Tanggal
					'hariKemarin' => $hariKemarin,
					'hari1' => $hari1,
					'hari2' => $hari2,
					'hari3' => $hari3,
					'hari4' => $hari4,
					'hari5' => $hari5,
					'tanggalKemarin' => $tanggalKemarin,
					'tanggal1' => $tanggal1,
					'tanggal2' => $tanggal2,
					'tanggal3' => $tanggal3,
					'tanggal4' => $tanggal4,
					'tanggal5' => $tanggal5,

					// Saldo Awal
					'row_salaw_kem' => $salaw_kem,
					'row_salaw1' => $salaw_1,
					'row_salaw2' => $salaw_2,
					'row_salaw3' => $salaw_3,
					'row_salaw4' => $salaw_4,
					'row_salaw5' => $salaw_5,

					// Allocated Cash
					'row_allo1' => $allo_1,
					'row_allo2' => $allo_2,
					'row_allo3' => $allo_3,
					'row_allo4' => $allo_4,
					'row_allo5' => $allo_5,

					// Ready Cash
					'row_read1' => $read_1,
					'row_read2' => $read_2,
					'row_read3' => $read_3,
					'row_read4' => $read_4,
					'row_read5' => $read_5,

					// Kas Besar Cabang
					'row_kbc1' => $kbc_1,
					'row_kbc2' => $kbc_2,
					'row_kbc3' => $kbc_3,
					'row_kbc4' => $kbc_4,
					'row_kbc5' => $kbc_5,

					// Note
					'row_note1' => $note_1,
					'row_note2' => $note_2,
					'row_note3' => $note_3,
					'row_note4' => $note_4,
					'row_note5' => $note_5,

					// Status Closing
					'row_closing1' => $closing_1,
					'row_closing2' => $closing_2,
					'row_closing3' => $closing_3,
					'row_closing4' => $closing_4,
					'row_closing5' => $closing_5,

					// Deposito
					'row_deposito' => $deposito,

					// B2b
					'row_b2b' => $b2b,

					// Cash-In Hari Kemarin
					'row_cashin_aKem' => $cashin_aKem,
					'row_cashin_bKem' => $cashin_bKem,
					'row_cashin_cKem' => $cashin_cKem,
					'row_cashin_dKem' => $cashin_dKem,
					'row_cashin_eKem' => $cashin_eKem,
					'row_cashin_fKem' => $cashin_fKem,
					'row_cashin_gKem' => $cashin_gKem,
					'row_cashin_hKem' => $cashin_hKem,
					'row_cashin_iKem' => $cashin_iKem,
					'row_cashin_jKem' => $cashin_jKem,
					'row_cashin_kKem' => $cashin_kKem,
					'row_cashin_lKem' => $cashin_lKem,
					'row_cashin_mKem' => $cashin_mKem,
					'row_cashin_nKem' => $cashin_nKem,
					'row_cashin_oKem' => $cashin_oKem,
					'row_cashin_pKem' => $cashin_pKem,
					'row_cashin_qKem' => $cashin_qKem,
					'row_cashin_rKem' => $cashin_rKem,
					'row_cashin_sKem' => $cashin_sKem,
					'row_tCashinProjKem' => $tCashinProj_Kem,
					// 'row_tCashinRealKem' => $tCashinReal_Kem,

					// Cash-In Hari Ke-1
					'row_cashin_a1' => $cashin_a1,
					'row_cashin_b1' => $cashin_b1,
					'row_cashin_c1' => $cashin_c1,
					'row_cashin_d1' => $cashin_d1,
					'row_cashin_e1' => $cashin_e1,
					'row_cashin_f1' => $cashin_f1,
					'row_cashin_g1' => $cashin_g1,
					'row_cashin_h1' => $cashin_h1,
					'row_cashin_i1' => $cashin_i1,
					'row_cashin_j1' => $cashin_j1,
					'row_cashin_k1' => $cashin_k1,
					'row_cashin_l1' => $cashin_l1,
					'row_cashin_m1' => $cashin_m1,
					'row_cashin_n1' => $cashin_n1,
					'row_cashin_o1' => $cashin_o1,
					'row_cashin_p1' => $cashin_p1,
					'row_cashin_q1' => $cashin_q1,
					'row_cashin_r1' => $cashin_r1,
					'row_cashin_s1' => $cashin_s1,
					'row_tCashinProj1' => $tCashinProj_1,
					'row_tCashinReal1' => $tCashinReal_1,

					// Cash-In Hari Ke-2
					'row_cashin_a2' => $cashin_a2,
					'row_cashin_b2' => $cashin_b2,
					'row_cashin_c2' => $cashin_c2,
					'row_cashin_d2' => $cashin_d2,
					'row_cashin_e2' => $cashin_e2,
					'row_cashin_f2' => $cashin_f2,
					'row_cashin_g2' => $cashin_g2,
					'row_cashin_h2' => $cashin_h2,
					'row_cashin_i2' => $cashin_i2,
					'row_cashin_j2' => $cashin_j2,
					'row_cashin_k2' => $cashin_k2,
					'row_cashin_l2' => $cashin_l2,
					'row_cashin_m2' => $cashin_m2,
					'row_cashin_n2' => $cashin_n2,
					'row_cashin_o2' => $cashin_o2,
					'row_cashin_p2' => $cashin_p2,
					'row_cashin_q2' => $cashin_q2,
					'row_cashin_r2' => $cashin_r2,
					'row_cashin_s2' => $cashin_s2,
					'row_tCashinProj2' => $tCashinProj_2,
					'row_tCashinReal2' => $tCashinReal_2,

					// Cash-In Hari Ke-3
					'row_cashin_a3' => $cashin_a3,
					'row_cashin_b3' => $cashin_b3,
					'row_cashin_c3' => $cashin_c3,
					'row_cashin_d3' => $cashin_d3,
					'row_cashin_e3' => $cashin_e3,
					'row_cashin_f3' => $cashin_f3,
					'row_cashin_g3' => $cashin_g3,
					'row_cashin_h3' => $cashin_h3,
					'row_cashin_i3' => $cashin_i3,
					'row_cashin_j3' => $cashin_j3,
					'row_cashin_k3' => $cashin_k3,
					'row_cashin_l3' => $cashin_l3,
					'row_cashin_m3' => $cashin_m3,
					'row_cashin_n3' => $cashin_n3,
					'row_cashin_o3' => $cashin_o3,
					'row_cashin_p3' => $cashin_p3,
					'row_cashin_q3' => $cashin_q3,
					'row_cashin_r3' => $cashin_r3,
					'row_cashin_s3' => $cashin_s3,
					'row_tCashinProj3' => $tCashinProj_3,
					'row_tCashinReal3' => $tCashinReal_3,

					// Cash-In Hari Ke-4
					'row_cashin_a4' => $cashin_a4,
					'row_cashin_b4' => $cashin_b4,
					'row_cashin_c4' => $cashin_c4,
					'row_cashin_d4' => $cashin_d4,
					'row_cashin_e4' => $cashin_e4,
					'row_cashin_f4' => $cashin_f4,
					'row_cashin_g4' => $cashin_g4,
					'row_cashin_h4' => $cashin_h4,
					'row_cashin_i4' => $cashin_i4,
					'row_cashin_j4' => $cashin_j4,
					'row_cashin_k4' => $cashin_k4,
					'row_cashin_l4' => $cashin_l4,
					'row_cashin_m4' => $cashin_m4,
					'row_cashin_n4' => $cashin_n4,
					'row_cashin_o4' => $cashin_o4,
					'row_cashin_p4' => $cashin_p4,
					'row_cashin_q4' => $cashin_q4,
					'row_cashin_r4' => $cashin_r4,
					'row_cashin_s4' => $cashin_s4,
					'row_tCashinProj4' => $tCashinProj_4,
					'row_tCashinReal4' => $tCashinReal_4,

					// Cash-In Hari Ke-5
					'row_cashin_a5' => $cashin_a5,
					'row_cashin_b5' => $cashin_b5,
					'row_cashin_c5' => $cashin_c5,
					'row_cashin_d5' => $cashin_d5,
					'row_cashin_e5' => $cashin_e5,
					'row_cashin_f5' => $cashin_f5,
					'row_cashin_g5' => $cashin_g5,
					'row_cashin_h5' => $cashin_h5,
					'row_cashin_i5' => $cashin_i5,
					'row_cashin_j5' => $cashin_j5,
					'row_cashin_k5' => $cashin_k5,
					'row_cashin_l5' => $cashin_l5,
					'row_cashin_m5' => $cashin_m5,
					'row_cashin_n5' => $cashin_n5,
					'row_cashin_o5' => $cashin_o5,
					'row_cashin_p5' => $cashin_p5,
					'row_cashin_q5' => $cashin_q5,
					'row_cashin_r5' => $cashin_r5,
					'row_cashin_s5' => $cashin_s5,
					'row_tCashinProj5' => $tCashinProj_5,
					'row_tCashinReal5' => $tCashinReal_5,

					// Cash-Out Hari Kemarin
					'row_cashout_aKem' => $cashout_aKem,
					'row_cashout_bKem' => $cashout_bKem,
					'row_cashout_cKem' => $cashout_cKem,
					'row_cashout_dKem' => $cashout_dKem,
					'row_cashout_eKem' => $cashout_eKem,
					'row_cashout_fKem' => $cashout_fKem,
					'row_cashout_gKem' => $cashout_gKem,
					'row_cashout_hKem' => $cashout_hKem,
					'row_cashout_iKem' => $cashout_iKem,
					'row_cashout_jKem' => $cashout_jKem,
					'row_cashout_kKem' => $cashout_kKem,
					'row_cashout_lKem' => $cashout_lKem,
					'row_cashout_mKem' => $cashout_mKem,
					'row_cashout_nKem' => $cashout_nKem,
					'row_cashout_oKem' => $cashout_oKem,
					'row_cashout_pKem' => $cashout_pKem,
					'row_cashout_qKem' => $cashout_qKem,
					'row_cashout_rKem' => $cashout_rKem,
					'row_cashout_sKem' => $cashout_sKem,
					'row_cashout_tKem' => $cashout_tKem,
					'row_cashout_uKem' => $cashout_uKem,
					'row_cashout_vKem' => $cashout_vKem,
					'row_cashout_wKem' => $cashout_wKem,
					'row_cashout_xKem' => $cashout_xKem,
					'row_cashout_yKem' => $cashout_yKem,
					'row_cashout_zKem' => $cashout_zKem,
					'row_cashout_a2Kem' => $cashout_a2Kem,
					'row_cashout_b2Kem' => $cashout_b2Kem,
					'row_cashout_c2Kem' => $cashout_c2Kem,
					'row_cashout_d2Kem' => $cashout_d2Kem,
					'row_cashout_e2Kem' => $cashout_e2Kem,
					'row_cashout_f2Kem' => $cashout_f2Kem,
					'row_cashout_g2Kem' => $cashout_g2Kem,
					'row_cashout_h2Kem' => $cashout_h2Kem,
					'row_cashout_i2Kem' => $cashout_i2Kem,
					'row_cashout_j2Kem' => $cashout_j2Kem,
					'row_cashout_k2Kem' => $cashout_k2Kem,
					'row_cashout_l2Kem' => $cashout_l2Kem,
					'row_cashout_m2Kem' => $cashout_m2Kem,
					'row_cashout_n2Kem' => $cashout_n2Kem,
					'row_cashout_o2Kem' => $cashout_o2Kem,
					'row_cashout_p2Kem' => $cashout_p2Kem,
					'row_cashout_q2Kem' => $cashout_q2Kem,
					'row_cashout_r2Kem' => $cashout_r2Kem,
					'row_cashout_s2Kem' => $cashout_s2Kem,
					'row_cashout_t2Kem' => $cashout_t2Kem,
					'row_cashout_u2Kem' => $cashout_u2Kem,
					'row_tCashoutProjKem' => $tCashoutProj_Kem,
					// 'row_tCashoutRealKem' => $tCashoutReal_Kem,

					// Cash-Out Hari Ke-1
					'row_cashout_a1' => $cashout_a1,
					'row_cashout_b1' => $cashout_b1,
					'row_cashout_c1' => $cashout_c1,
					'row_cashout_d1' => $cashout_d1,
					'row_cashout_e1' => $cashout_e1,
					'row_cashout_f1' => $cashout_f1,
					'row_cashout_g1' => $cashout_g1,
					'row_cashout_h1' => $cashout_h1,
					'row_cashout_i1' => $cashout_i1,
					'row_cashout_j1' => $cashout_j1,
					'row_cashout_k1' => $cashout_k1,
					'row_cashout_l1' => $cashout_l1,
					'row_cashout_m1' => $cashout_m1,
					'row_cashout_n1' => $cashout_n1,
					'row_cashout_o1' => $cashout_o1,
					'row_cashout_p1' => $cashout_p1,
					'row_cashout_q1' => $cashout_q1,
					'row_cashout_r1' => $cashout_r1,
					'row_cashout_s1' => $cashout_s1,
					'row_cashout_t1' => $cashout_t1,
					'row_cashout_u1' => $cashout_u1,
					'row_cashout_v1' => $cashout_v1,
					'row_cashout_w1' => $cashout_w1,
					'row_cashout_x1' => $cashout_x1,
					'row_cashout_y1' => $cashout_y1,
					'row_cashout_z1' => $cashout_z1,
					'row_cashout_a21' => $cashout_a21,
					'row_cashout_b21' => $cashout_b21,
					'row_cashout_c21' => $cashout_c21,
					'row_cashout_d21' => $cashout_d21,
					'row_cashout_e21' => $cashout_e21,
					'row_cashout_f21' => $cashout_f21,
					'row_cashout_g21' => $cashout_g21,
					'row_cashout_h21' => $cashout_h21,
					'row_cashout_i21' => $cashout_i21,
					'row_cashout_j21' => $cashout_j21,
					'row_cashout_k21' => $cashout_k21,
					'row_cashout_l21' => $cashout_l21,
					'row_cashout_m21' => $cashout_m21,
					'row_cashout_n21' => $cashout_n21,
					'row_cashout_o21' => $cashout_o21,
					'row_cashout_p21' => $cashout_p21,
					'row_cashout_q21' => $cashout_q21,
					'row_cashout_r21' => $cashout_r21,
					'row_cashout_s21' => $cashout_s21,
					'row_cashout_t21' => $cashout_t21,
					'row_cashout_u21' => $cashout_u21,
					'row_cashout_v21' => $cashout_v21,
					'row_cashout_w21' => $cashout_w21,
					'row_cashout_x21' => $cashout_x21,
					'row_cashout_y21' => $cashout_y21,
					'row_cashout_z21' => $cashout_z21,
					'row_cashout_a31' => $cashout_a31,
					'row_cashout_b31' => $cashout_b31,
					'row_cashout_c31' => $cashout_c31,
					'row_cashout_d31' => $cashout_d31,
					'row_cashout_e31' => $cashout_e31,
					'row_cashout_f31' => $cashout_f31,
					'row_cashout_g31' => $cashout_g31,
					'row_cashout_h31' => $cashout_h31,
					'row_cashout_i31' => $cashout_i31,
					'row_cashout_j31' => $cashout_j31,
					'row_cashout_k31' => $cashout_k31,
					'row_cashout_l31' => $cashout_l31,
					'row_cashout_m31' => $cashout_m31,
					'row_cashout_n31' => $cashout_n31,
					'row_cashout_o31' => $cashout_o31,
					'row_cashout_p31' => $cashout_p31,
					'row_cashout_q31' => $cashout_q31,
					'row_cashout_r31' => $cashout_r31,
					'row_cashout_s31' => $cashout_s31,
					'row_cashout_t31' => $cashout_t31,
					'row_cashout_u31' => $cashout_u31,
					'row_cashout_v31' => $cashout_v31,
					'row_cashout_w31' => $cashout_w31,
					'row_cashout_x31' => $cashout_x31,
					'row_cashout_y31' => $cashout_y31,
					'row_cashout_z31' => $cashout_z31,
					'row_cashout_a41' => $cashout_a41,
					'row_cashout_b41' => $cashout_b41,
					'row_tCashoutProj1' => $tCashoutProj_1,
					'row_tCashoutReal1' => $tCashoutReal_1,

					// Cash-Out Hari Ke-2
					'row_cashout_a2' => $cashout_a2,
					'row_cashout_b2' => $cashout_b2,
					'row_cashout_c2' => $cashout_c2,
					'row_cashout_d2' => $cashout_d2,
					'row_cashout_e2' => $cashout_e2,
					'row_cashout_f2' => $cashout_f2,
					'row_cashout_g2' => $cashout_g2,
					'row_cashout_h2' => $cashout_h2,
					'row_cashout_i2' => $cashout_i2,
					'row_cashout_j2' => $cashout_j2,
					'row_cashout_k2' => $cashout_k2,
					'row_cashout_l2' => $cashout_l2,
					'row_cashout_m2' => $cashout_m2,
					'row_cashout_n2' => $cashout_n2,
					'row_cashout_o2' => $cashout_o2,
					'row_cashout_p2' => $cashout_p2,
					'row_cashout_q2' => $cashout_q2,
					'row_cashout_r2' => $cashout_r2,
					'row_cashout_s2' => $cashout_s2,
					'row_cashout_t2' => $cashout_t2,
					'row_cashout_u2' => $cashout_u2,
					'row_cashout_v2' => $cashout_v2,
					'row_cashout_w2' => $cashout_w2,
					'row_cashout_x2' => $cashout_x2,
					'row_cashout_y2' => $cashout_y2,
					'row_cashout_z2' => $cashout_z2,
					'row_cashout_a22' => $cashout_a22,
					'row_cashout_b22' => $cashout_b22,
					'row_cashout_c22' => $cashout_c22,
					'row_cashout_d22' => $cashout_d22,
					'row_cashout_e22' => $cashout_e22,
					'row_cashout_f22' => $cashout_f22,
					'row_cashout_g22' => $cashout_g22,
					'row_cashout_h22' => $cashout_h22,
					'row_cashout_i22' => $cashout_i22,
					'row_cashout_j22' => $cashout_j22,
					'row_cashout_k22' => $cashout_k22,
					'row_cashout_l22' => $cashout_l22,
					'row_cashout_m22' => $cashout_m22,
					'row_cashout_n22' => $cashout_n22,
					'row_cashout_o22' => $cashout_o22,
					'row_cashout_p22' => $cashout_p22,
					'row_cashout_q22' => $cashout_q22,
					'row_cashout_r22' => $cashout_r22,
					'row_cashout_s22' => $cashout_s22,
					'row_cashout_t22' => $cashout_t22,
					'row_cashout_u22' => $cashout_u22,
					'row_cashout_v22' => $cashout_v22,
					'row_cashout_w22' => $cashout_w22,
					'row_cashout_x22' => $cashout_x22,
					'row_cashout_y22' => $cashout_y22,
					'row_cashout_z22' => $cashout_z22,
					'row_cashout_a32' => $cashout_a32,
					'row_cashout_b32' => $cashout_b32,
					'row_cashout_c32' => $cashout_c32,
					'row_cashout_d32' => $cashout_d32,
					'row_cashout_e32' => $cashout_e32,
					'row_cashout_f32' => $cashout_f32,
					'row_cashout_g32' => $cashout_g32,
					'row_cashout_h32' => $cashout_h32,
					'row_cashout_i32' => $cashout_i32,
					'row_cashout_j32' => $cashout_j32,
					'row_cashout_k32' => $cashout_k32,
					'row_cashout_l32' => $cashout_l32,
					'row_cashout_m32' => $cashout_m32,
					'row_cashout_n32' => $cashout_n32,
					'row_cashout_o32' => $cashout_o32,
					'row_cashout_p32' => $cashout_p32,
					'row_cashout_q32' => $cashout_q32,
					'row_cashout_r32' => $cashout_r32,
					'row_cashout_s32' => $cashout_s32,
					'row_cashout_t32' => $cashout_t32,
					'row_cashout_u32' => $cashout_u32,
					'row_cashout_v32' => $cashout_v32,
					'row_cashout_w32' => $cashout_w32,
					'row_cashout_x32' => $cashout_x32,
					'row_cashout_y32' => $cashout_y32,
					'row_cashout_z32' => $cashout_z32,
					'row_cashout_a42' => $cashout_a42,
					'row_cashout_b42' => $cashout_b42,
					'row_tCashoutProj2' => $tCashoutProj_2,
					'row_tCashoutReal2' => $tCashoutReal_2,


					// Cash-Out Hari Ke-3
					'row_cashout_a3' => $cashout_a3,
					'row_cashout_b3' => $cashout_b3,
					'row_cashout_c3' => $cashout_c3,
					'row_cashout_d3' => $cashout_d3,
					'row_cashout_e3' => $cashout_e3,
					'row_cashout_f3' => $cashout_f3,
					'row_cashout_g3' => $cashout_g3,
					'row_cashout_h3' => $cashout_h3,
					'row_cashout_i3' => $cashout_i3,
					'row_cashout_j3' => $cashout_j3,
					'row_cashout_k3' => $cashout_k3,
					'row_cashout_l3' => $cashout_l3,
					'row_cashout_m3' => $cashout_m3,
					'row_cashout_n3' => $cashout_n3,
					'row_cashout_o3' => $cashout_o3,
					'row_cashout_p3' => $cashout_p3,
					'row_cashout_q3' => $cashout_q3,
					'row_cashout_r3' => $cashout_r3,
					'row_cashout_s3' => $cashout_s3,
					'row_cashout_t3' => $cashout_t3,
					'row_cashout_u3' => $cashout_u3,
					'row_cashout_v3' => $cashout_v3,
					'row_cashout_w3' => $cashout_w3,
					'row_cashout_x3' => $cashout_x3,
					'row_cashout_y3' => $cashout_y3,
					'row_cashout_z3' => $cashout_z3,
					'row_cashout_a23' => $cashout_a23,
					'row_cashout_b23' => $cashout_b23,
					'row_cashout_c23' => $cashout_c23,
					'row_cashout_d23' => $cashout_d23,
					'row_cashout_e23' => $cashout_e23,
					'row_cashout_f23' => $cashout_f23,
					'row_cashout_g23' => $cashout_g23,
					'row_cashout_h23' => $cashout_h23,
					'row_cashout_i23' => $cashout_i23,
					'row_cashout_j23' => $cashout_j23,
					'row_cashout_k23' => $cashout_k23,
					'row_cashout_l23' => $cashout_l23,
					'row_cashout_m23' => $cashout_m23,
					'row_cashout_n23' => $cashout_n23,
					'row_cashout_o23' => $cashout_o23,
					'row_cashout_p23' => $cashout_p23,
					'row_cashout_q23' => $cashout_q23,
					'row_cashout_r23' => $cashout_r23,
					'row_cashout_s23' => $cashout_s23,
					'row_cashout_t23' => $cashout_t23,
					'row_cashout_u23' => $cashout_u23,
					'row_cashout_v23' => $cashout_v23,
					'row_cashout_w23' => $cashout_w23,
					'row_cashout_x23' => $cashout_x23,
					'row_cashout_y23' => $cashout_y23,
					'row_cashout_z23' => $cashout_z23,
					'row_cashout_a33' => $cashout_a33,
					'row_cashout_b33' => $cashout_b33,
					'row_cashout_c33' => $cashout_c33,
					'row_cashout_d33' => $cashout_d33,
					'row_cashout_e33' => $cashout_e33,
					'row_cashout_f33' => $cashout_f33,
					'row_cashout_g33' => $cashout_g33,
					'row_cashout_h33' => $cashout_h33,
					'row_cashout_i33' => $cashout_i33,
					'row_cashout_j33' => $cashout_j33,
					'row_cashout_k33' => $cashout_k33,
					'row_cashout_l33' => $cashout_l33,
					'row_cashout_m33' => $cashout_m33,
					'row_cashout_n33' => $cashout_n33,
					'row_cashout_o33' => $cashout_o33,
					'row_cashout_p33' => $cashout_p33,
					'row_cashout_q33' => $cashout_q33,
					'row_cashout_r33' => $cashout_r33,
					'row_cashout_s33' => $cashout_s33,
					'row_cashout_t33' => $cashout_t33,
					'row_cashout_u33' => $cashout_u33,
					'row_cashout_v33' => $cashout_v33,
					'row_cashout_w33' => $cashout_w33,
					'row_cashout_x33' => $cashout_x33,
					'row_cashout_y33' => $cashout_y33,
					'row_cashout_z33' => $cashout_z33,
					'row_cashout_a43' => $cashout_a43,
					'row_cashout_b43' => $cashout_b43,
					'row_tCashoutProj3' => $tCashoutProj_3,
					'row_tCashoutReal3' => $tCashoutReal_3,


					// Cash-Out Hari Ke-4
					'row_cashout_a4' => $cashout_a4,
					'row_cashout_b4' => $cashout_b4,
					'row_cashout_c4' => $cashout_c4,
					'row_cashout_d4' => $cashout_d4,
					'row_cashout_e4' => $cashout_e4,
					'row_cashout_f4' => $cashout_f4,
					'row_cashout_g4' => $cashout_g4,
					'row_cashout_h4' => $cashout_h4,
					'row_cashout_i4' => $cashout_i4,
					'row_cashout_j4' => $cashout_j4,
					'row_cashout_k4' => $cashout_k4,
					'row_cashout_l4' => $cashout_l4,
					'row_cashout_m4' => $cashout_m4,
					'row_cashout_n4' => $cashout_n4,
					'row_cashout_o4' => $cashout_o4,
					'row_cashout_p4' => $cashout_p4,
					'row_cashout_q4' => $cashout_q4,
					'row_cashout_r4' => $cashout_r4,
					'row_cashout_s4' => $cashout_s4,
					'row_cashout_t4' => $cashout_t4,
					'row_cashout_u4' => $cashout_u4,
					'row_cashout_v4' => $cashout_v4,
					'row_cashout_w4' => $cashout_w4,
					'row_cashout_x4' => $cashout_x4,
					'row_cashout_y4' => $cashout_y4,
					'row_cashout_z4' => $cashout_z4,
					'row_cashout_a24' => $cashout_a24,
					'row_cashout_b24' => $cashout_b24,
					'row_cashout_c24' => $cashout_c24,
					'row_cashout_d24' => $cashout_d24,
					'row_cashout_e24' => $cashout_e24,
					'row_cashout_f24' => $cashout_f24,
					'row_cashout_g24' => $cashout_g24,
					'row_cashout_h24' => $cashout_h24,
					'row_cashout_i24' => $cashout_i24,
					'row_cashout_j24' => $cashout_j24,
					'row_cashout_k24' => $cashout_k24,
					'row_cashout_l24' => $cashout_l24,
					'row_cashout_m24' => $cashout_m24,
					'row_cashout_n24' => $cashout_n24,
					'row_cashout_o24' => $cashout_o24,
					'row_cashout_p24' => $cashout_p24,
					'row_cashout_q24' => $cashout_q24,
					'row_cashout_r24' => $cashout_r24,
					'row_cashout_s24' => $cashout_s24,
					'row_cashout_t24' => $cashout_t24,
					'row_cashout_u24' => $cashout_u24,
					'row_cashout_v24' => $cashout_v24,
					'row_cashout_w24' => $cashout_w24,
					'row_cashout_x24' => $cashout_x24,
					'row_cashout_y24' => $cashout_y24,
					'row_cashout_z24' => $cashout_z24,
					'row_cashout_a34' => $cashout_a34,
					'row_cashout_b34' => $cashout_b34,
					'row_cashout_c34' => $cashout_c34,
					'row_cashout_d34' => $cashout_d34,
					'row_cashout_e34' => $cashout_e34,
					'row_cashout_f34' => $cashout_f34,
					'row_cashout_g34' => $cashout_g34,
					'row_cashout_h34' => $cashout_h34,
					'row_cashout_i34' => $cashout_i34,
					'row_cashout_j34' => $cashout_j34,
					'row_cashout_k34' => $cashout_k34,
					'row_cashout_l34' => $cashout_l34,
					'row_cashout_m34' => $cashout_m34,
					'row_cashout_n34' => $cashout_n34,
					'row_cashout_o34' => $cashout_o34,
					'row_cashout_p34' => $cashout_p34,
					'row_cashout_q34' => $cashout_q34,
					'row_cashout_r34' => $cashout_r34,
					'row_cashout_s34' => $cashout_s34,
					'row_cashout_t34' => $cashout_t34,
					'row_cashout_u34' => $cashout_u34,
					'row_cashout_v34' => $cashout_v34,
					'row_cashout_w34' => $cashout_w34,
					'row_cashout_x34' => $cashout_x34,
					'row_cashout_y34' => $cashout_y34,
					'row_cashout_z34' => $cashout_z34,
					'row_cashout_a44' => $cashout_a44,
					'row_cashout_b44' => $cashout_b44,
					'row_tCashoutProj4' => $tCashoutProj_4,
					'row_tCashoutReal4' => $tCashoutReal_4,


					// Cash-Out Hari Ke-5
					'row_cashout_a5' => $cashout_a5,
					'row_cashout_b5' => $cashout_b5,
					'row_cashout_c5' => $cashout_c5,
					'row_cashout_d5' => $cashout_d5,
					'row_cashout_e5' => $cashout_e5,
					'row_cashout_f5' => $cashout_f5,
					'row_cashout_g5' => $cashout_g5,
					'row_cashout_h5' => $cashout_h5,
					'row_cashout_i5' => $cashout_i5,
					'row_cashout_j5' => $cashout_j5,
					'row_cashout_k5' => $cashout_k5,
					'row_cashout_l5' => $cashout_l5,
					'row_cashout_m5' => $cashout_m5,
					'row_cashout_n5' => $cashout_n5,
					'row_cashout_o5' => $cashout_o5,
					'row_cashout_p5' => $cashout_p5,
					'row_cashout_q5' => $cashout_q5,
					'row_cashout_r5' => $cashout_r5,
					'row_cashout_s5' => $cashout_s5,
					'row_cashout_t5' => $cashout_t5,
					'row_cashout_u5' => $cashout_u5,
					'row_cashout_v5' => $cashout_v5,
					'row_cashout_w5' => $cashout_w5,
					'row_cashout_x5' => $cashout_x5,
					'row_cashout_y5' => $cashout_y5,
					'row_cashout_z5' => $cashout_z5,
					'row_cashout_a25' => $cashout_a25,
					'row_cashout_b25' => $cashout_b25,
					'row_cashout_c25' => $cashout_c25,
					'row_cashout_d25' => $cashout_d25,
					'row_cashout_e25' => $cashout_e25,
					'row_cashout_f25' => $cashout_f25,
					'row_cashout_g25' => $cashout_g25,
					'row_cashout_h25' => $cashout_h25,
					'row_cashout_i25' => $cashout_i25,
					'row_cashout_j25' => $cashout_j25,
					'row_cashout_k25' => $cashout_k25,
					'row_cashout_l25' => $cashout_l25,
					'row_cashout_m25' => $cashout_m25,
					'row_cashout_n25' => $cashout_n25,
					'row_cashout_o25' => $cashout_o25,
					'row_cashout_p25' => $cashout_p25,
					'row_cashout_q25' => $cashout_q25,
					'row_cashout_r25' => $cashout_r25,
					'row_cashout_s25' => $cashout_s25,
					'row_cashout_t25' => $cashout_t25,
					'row_cashout_u25' => $cashout_u25,
					'row_cashout_v25' => $cashout_v25,
					'row_cashout_w25' => $cashout_w25,
					'row_cashout_x25' => $cashout_x25,
					'row_cashout_y25' => $cashout_y25,
					'row_cashout_z25' => $cashout_z25,
					'row_cashout_a35' => $cashout_a35,
					'row_cashout_b35' => $cashout_b35,
					'row_cashout_c35' => $cashout_c35,
					'row_cashout_d35' => $cashout_d35,
					'row_cashout_e35' => $cashout_e35,
					'row_cashout_f35' => $cashout_f35,
					'row_cashout_g35' => $cashout_g35,
					'row_cashout_h35' => $cashout_h35,
					'row_cashout_i35' => $cashout_i35,
					'row_cashout_j35' => $cashout_j35,
					'row_cashout_k35' => $cashout_k35,
					'row_cashout_l35' => $cashout_l35,
					'row_cashout_m35' => $cashout_m35,
					'row_cashout_n35' => $cashout_n35,
					'row_cashout_o35' => $cashout_o35,
					'row_cashout_p35' => $cashout_p35,
					'row_cashout_q35' => $cashout_q35,
					'row_cashout_r35' => $cashout_r35,
					'row_cashout_s35' => $cashout_s35,
					'row_cashout_t35' => $cashout_t35,
					'row_cashout_u35' => $cashout_u35,
					'row_cashout_v35' => $cashout_v35,
					'row_cashout_w35' => $cashout_w35,
					'row_cashout_x35' => $cashout_x35,
					'row_cashout_y35' => $cashout_y35,
					'row_cashout_z35' => $cashout_z35,
					'row_cashout_a45' => $cashout_a45,
					'row_cashout_b45' => $cashout_b45,
					'row_tCashoutProj5' => $tCashoutProj_5,
					'row_tCashoutReal5' => $tCashoutReal_5

				));
				$this->load->view('footer');
		
		} // Penutup else S_POST

		// ...................................................................................

		
	}
}
