<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cashflow_bulan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('helperku');
		$this->load->library('libraryku');
		$this->load->model('m_bulan');
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
				  $hari1='Sen'; $hari2='Sel'; $hari3='Rab'; $hari4='Kam'; $hari5='Jum';
				  $hari6='Sen'; $hari7='Sel'; $hari8='Rab'; $hari9='Kam'; $hari10='Jum';
				  $hari11='Sen'; $hari12='Sel'; $hari13='Rab'; $hari14='Kam'; $hari15='Jum';
				  $hari16='Sen'; $hari17='Sel'; $hari18='Rab'; $hari19='Kam'; $hari20='Jum';
				  $hari21='Sen'; $hari22='Sel'; $hari23='Rab'; $hari24='Kam'; $hari25='Jum';

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

				  // Senin / Minggu ke-2
				  $tanggal6 = date('d-m-Y', strtotime($tanggal)+60*60*24*7);
				  // Selasa-2
				  $tanggal7 = date('d-m-Y', strtotime($tanggal)+60*60*24*8);
				  // Rabu-2
				  $tanggal8 = date('d-m-Y', strtotime($tanggal)+60*60*24*9);
				  // Kamis-2
				  $tanggal9 = date('d-m-Y', strtotime($tanggal)+60*60*24*10);
				  // Jumat-2
				  $tanggal10 = date('d-m-Y', strtotime($tanggal)+60*60*24*11);

				  // Senin / Minggu ke-3
				  $tanggal11 = date('d-m-Y', strtotime($tanggal)+60*60*24*14);
				  // Selasa-3
				  $tanggal12 = date('d-m-Y', strtotime($tanggal)+60*60*24*15);
				  // Rabu-3
				  $tanggal13 = date('d-m-Y', strtotime($tanggal)+60*60*24*16);
				  // Kamis-3
				  $tanggal14 = date('d-m-Y', strtotime($tanggal)+60*60*24*17);
				  // Jumat-3
				  $tanggal15 = date('d-m-Y', strtotime($tanggal)+60*60*24*18);

				  // Senin / Minggu ke-4
				  $tanggal16 = date('d-m-Y', strtotime($tanggal)+60*60*24*21);
				  // Selasa-4
				  $tanggal17 = date('d-m-Y', strtotime($tanggal)+60*60*24*12);
				  // Rabu-4
				  $tanggal18 = date('d-m-Y', strtotime($tanggal)+60*60*24*23);
				  // Kamis-4
				  $tanggal19 = date('d-m-Y', strtotime($tanggal)+60*60*24*24);
				  // Jumat-4
				  $tanggal20 = date('d-m-Y', strtotime($tanggal)+60*60*24*25);

				  // Senin / Minggu ke-5
				  $tanggal21 = date('d-m-Y', strtotime($tanggal)+60*60*24*28);
				  // Selasa-5
				  $tanggal22 = date('d-m-Y', strtotime($tanggal)+60*60*24*29);
				  // Rabu-5
				  $tanggal23 = date('d-m-Y', strtotime($tanggal)+60*60*24*30);
				  // Kamis-5
				  $tanggal24 = date('d-m-Y', strtotime($tanggal)+60*60*24*31);
				  // Jumat-5
				  $tanggal25 = date('d-m-Y', strtotime($tanggal)+60*60*24*32);

				  break;

				case 'Tue' :
				  $hari1='Sel'; $hari2='Rab'; $hari3='Kam'; $hari4='Jum'; $hari5='Sen';
				  $hari6='Sel'; $hari7='Rab'; $hari8='Kam'; $hari9='Jum'; $hari10='Sen';
				  $hari11='Sel'; $hari12='Rab'; $hari13='Kam'; $hari14='Jum'; $hari15='Sen';
				  $hari16='Sel'; $hari17='Rab'; $hari18='Kam'; $hari19='Jum'; $hari20='Sen';
				  $hari21='Sel'; $hari22='Rab'; $hari23='Kam'; $hari24='Jum'; $hari25='Sen';

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

				  // Selasa / Minggu Ke-2
				  $tanggal6 = date('d-m-Y', strtotime($tanggal)+60*60*24*7);
				  // Rabu-2
				  $tanggal7 = date('d-m-Y', strtotime($tanggal)+60*60*24*8);
				  // Kamis-2
				  $tanggal8 = date('d-m-Y', strtotime($tanggal)+60*60*24*9);
				  // Jumat-2
				  $tanggal9 = date('d-m-Y', strtotime($tanggal)+60*60*24*10);
				  // Senin-2
				  $tanggal10 = date('d-m-Y', strtotime($tanggal)+60*60*24*13);

				  // Selasa / Minggu Ke-3
				  $tanggal11 = date('d-m-Y', strtotime($tanggal)+60*60*24*14);
				  // Rabu-3
				  $tanggal12 = date('d-m-Y', strtotime($tanggal)+60*60*24*15);
				  // Kamis-3
				  $tanggal13 = date('d-m-Y', strtotime($tanggal)+60*60*24*16);
				  // Jumat-3
				  $tanggal14 = date('d-m-Y', strtotime($tanggal)+60*60*24*17);
				  // Senin-3
				  $tanggal15 = date('d-m-Y', strtotime($tanggal)+60*60*24*20);

				  // Selasa / Minggu Ke-4
				  $tanggal16 = date('d-m-Y', strtotime($tanggal)+60*60*24*21);
				  // Rabu-4
				  $tanggal17 = date('d-m-Y', strtotime($tanggal)+60*60*24*22);
				  // Kamis-4
				  $tanggal18 = date('d-m-Y', strtotime($tanggal)+60*60*24*23);
				  // Jumat-4
				  $tanggal19 = date('d-m-Y', strtotime($tanggal)+60*60*24*24);
				  // Senin-4
				  $tanggal20 = date('d-m-Y', strtotime($tanggal)+60*60*24*27);

				  // Selasa / Minggu Ke-5
				  $tanggal21 = date('d-m-Y', strtotime($tanggal)+60*60*24*28);
				  // Rabu-5
				  $tanggal22 = date('d-m-Y', strtotime($tanggal)+60*60*24*29);
				  // Kamis-5
				  $tanggal23 = date('d-m-Y', strtotime($tanggal)+60*60*24*30);
				  // Jumat-5
				  $tanggal24 = date('d-m-Y', strtotime($tanggal)+60*60*24*31);
				  // Senin-5
				  $tanggal25 = date('d-m-Y', strtotime($tanggal)+60*60*24*34);

				  break;

				case 'Wed' :
				  $hari1='Rab'; $hari2='Kam'; $hari3='Jum'; $hari4='Sen'; $hari5='Sel';
				  $hari6='Rab'; $hari7='Kam'; $hari8='Jum'; $hari9='Sen'; $hari10='Sel';
				  $hari11='Rab'; $hari12='Kam'; $hari13='Jum'; $hari14='Sen'; $hari15='Sel';
				  $hari16='Rab'; $hari17='Kam'; $hari18='Jum'; $hari19='Sen'; $hari20='Sel';
				  $hari21='Rab'; $hari22='Kam'; $hari23='Jum'; $hari24='Sen'; $hari25='Sel';

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

				  // Rabu / Minggu Ke-2
				  $tanggal6 = date('d-m-Y', strtotime($tanggal)+60*60*24*7);
				  // Kamis-2
				  $tanggal7 = date('d-m-Y', strtotime($tanggal)+60*60*24*8);
				  // Jumat-2
				  $tanggal8 = date('d-m-Y', strtotime($tanggal)+60*60*24*9);
				  // Senin-2
				  $tanggal9 = date('d-m-Y', strtotime($tanggal)+60*60*24*12);
				  // Selasa-2
				  $tanggal10 = date('d-m-Y', strtotime($tanggal)+60*60*24*13);

				  // Rabu / Minggu Ke-3
				  $tanggal11 = date('d-m-Y', strtotime($tanggal)+60*60*24*14);
				  // Kamis-3
				  $tanggal12 = date('d-m-Y', strtotime($tanggal)+60*60*24*15);
				  // Jumat-3
				  $tanggal13 = date('d-m-Y', strtotime($tanggal)+60*60*24*16);
				  // Senin-3
				  $tanggal14 = date('d-m-Y', strtotime($tanggal)+60*60*24*19);
				  // Selasa-3
				  $tanggal15 = date('d-m-Y', strtotime($tanggal)+60*60*24*20);

				  // Rabu / Minggu Ke-4
				  $tanggal16 = date('d-m-Y', strtotime($tanggal)+60*60*24*21);
				  // Kamis-4
				  $tanggal17 = date('d-m-Y', strtotime($tanggal)+60*60*24*22);
				  // Jumat-4
				  $tanggal18 = date('d-m-Y', strtotime($tanggal)+60*60*24*23);
				  // Senin-4
				  $tanggal19 = date('d-m-Y', strtotime($tanggal)+60*60*24*26);
				  // Selasa-4
				  $tanggal20 = date('d-m-Y', strtotime($tanggal)+60*60*24*27);

				  // Rabu / Minggu Ke-5
				  $tanggal21 = date('d-m-Y', strtotime($tanggal)+60*60*24*28);
				  // Kamis-5
				  $tanggal22 = date('d-m-Y', strtotime($tanggal)+60*60*24*29);
				  // Jumat-5
				  $tanggal23 = date('d-m-Y', strtotime($tanggal)+60*60*24*30);
				  // Senin-5
				  $tanggal24 = date('d-m-Y', strtotime($tanggal)+60*60*24*33);
				  // Selasa-5
				  $tanggal25 = date('d-m-Y', strtotime($tanggal)+60*60*24*34);

				  break;

				case 'Thu' :
				  $hari1='Kam'; $hari2='Jum'; $hari3='Sen'; $hari4='Sel'; $hari5='Rab';
				  $hari6='Kam'; $hari7='Jum'; $hari8='Sen'; $hari9='Sel'; $hari10='Rab';
				  $hari11='Kam'; $hari12='Jum'; $hari13='Sen'; $hari14='Sel'; $hari15='Rab';
				  $hari16='Kam'; $hari17='Jum'; $hari18='Sen'; $hari19='Sel'; $hari20='Rab';
				  $hari21='Kam'; $hari22='Jum'; $hari23='Sen'; $hari24='Sel'; $hari25='Rab';

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

				  // Kamis Minggu Ke-2
				  $tanggal6 = date('d-m-Y', strtotime($tanggal)+60*60*24*7);
				  // Jumat-2
				  $tanggal7 = date('d-m-Y', strtotime($tanggal)+60*60*24*8);
				  // Senin-2
				  $tanggal8 = date('d-m-Y', strtotime($tanggal)+60*60*24*11);
				  // Selasa-2
				  $tanggal9 = date('d-m-Y', strtotime($tanggal)+60*60*24*12);
				  // Rabu-2
				  $tanggal10 = date('d-m-Y', strtotime($tanggal)+60*60*24*13);

				  // Kamis Minggu Ke-3
				  $tanggal11 = date('d-m-Y', strtotime($tanggal)+60*60*24*14);
				  // Jumat-3
				  $tanggal12 = date('d-m-Y', strtotime($tanggal)+60*60*24*15);
				  // Senin-3
				  $tanggal13 = date('d-m-Y', strtotime($tanggal)+60*60*24*18);
				  // Selasa-3
				  $tanggal14 = date('d-m-Y', strtotime($tanggal)+60*60*24*19);
				  // Rabu-3
				  $tanggal15 = date('d-m-Y', strtotime($tanggal)+60*60*24*20);

				  // Kamis Minggu Ke-4
				  $tanggal16 = date('d-m-Y', strtotime($tanggal)+60*60*24*21);
				  // Jumat-4
				  $tanggal17 = date('d-m-Y', strtotime($tanggal)+60*60*24*22);
				  // Senin-4
				  $tanggal18 = date('d-m-Y', strtotime($tanggal)+60*60*24*25);
				  // Selasa-4
				  $tanggal19 = date('d-m-Y', strtotime($tanggal)+60*60*24*26);
				  // Rabu-4
				  $tanggal20 = date('d-m-Y', strtotime($tanggal)+60*60*24*27);

				  // Kamis Minggu Ke-5
				  $tanggal21 = date('d-m-Y', strtotime($tanggal)+60*60*24*28);
				  // Jumat-5
				  $tanggal22 = date('d-m-Y', strtotime($tanggal)+60*60*24*29);
				  // Senin-5
				  $tanggal23 = date('d-m-Y', strtotime($tanggal)+60*60*24*32);
				  // Selasa-5
				  $tanggal24 = date('d-m-Y', strtotime($tanggal)+60*60*24*33);
				  // Rabu-5
				  $tanggal25 = date('d-m-Y', strtotime($tanggal)+60*60*24*34);

				  break;

				case 'Fri' :
				  $hari1='Jum'; $hari2='Sen'; $hari3='Sel'; $hari4='Rab'; $hari5='Kam';
				  $hari6='Jum'; $hari7='Sen'; $hari8='Sel'; $hari9='Rab'; $hari10='Kam';
				  $hari11='Jum'; $hari12='Sen'; $hari13='Sel'; $hari14='Rab'; $hari15='Kam';
				  $hari16='Jum'; $hari17='Sen'; $hari18='Sel'; $hari19='Rab'; $hari20='Kam';
				  $hari21='Jum'; $hari22='Sen'; $hari23='Sel'; $hari24='Rab'; $hari25='Kam';

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

				  // Jumat / Minggu Ke-2
				  $tanggal6 = date('d-m-Y', strtotime($tanggal)+60*60*24*7);
				  // Senin-2
				  $tanggal7 = date('d-m-Y', strtotime($tanggal)+60*60*24*10);
				  // Selasa-2
				  $tanggal8 = date('d-m-Y', strtotime($tanggal)+60*60*24*11);
				  // Rabu-2
				  $tanggal9 = date('d-m-Y', strtotime($tanggal)+60*60*24*12);
				  // Kamis-2
				  $tanggal10 = date('d-m-Y', strtotime($tanggal)+60*60*24*13);

				  // Jumat / Minggu Ke-3
				  $tanggal11 = date('d-m-Y', strtotime($tanggal)+60*60*24*14);
				  // Senin-3
				  $tanggal12 = date('d-m-Y', strtotime($tanggal)+60*60*24*17);
				  // Selasa-3
				  $tanggal13 = date('d-m-Y', strtotime($tanggal)+60*60*24*18);
				  // Rabu-3
				  $tanggal14 = date('d-m-Y', strtotime($tanggal)+60*60*24*19);
				  // Kamis-3
				  $tanggal15 = date('d-m-Y', strtotime($tanggal)+60*60*24*20);

				  // Jumat / Minggu Ke-4
				  $tanggal16 = date('d-m-Y', strtotime($tanggal)+60*60*24*21);
				  // Senin-4
				  $tanggal17 = date('d-m-Y', strtotime($tanggal)+60*60*24*24);
				  // Selasa-4
				  $tanggal18 = date('d-m-Y', strtotime($tanggal)+60*60*24*25);
				  // Rabu-4
				  $tanggal19 = date('d-m-Y', strtotime($tanggal)+60*60*24*26);
				  // Kamis-4
				  $tanggal20 = date('d-m-Y', strtotime($tanggal)+60*60*24*27);

				  // Jumat / Minggu Ke-5
				  $tanggal21 = date('d-m-Y', strtotime($tanggal)+60*60*24*28);
				  // Senin-5
				  $tanggal22 = date('d-m-Y', strtotime($tanggal)+60*60*24*31);
				  // Selasa-5
				  $tanggal23 = date('d-m-Y', strtotime($tanggal)+60*60*24*32);
				  // Rabu-5
				  $tanggal24 = date('d-m-Y', strtotime($tanggal)+60*60*24*33);
				  // Kamis-5
				  $tanggal25 = date('d-m-Y', strtotime($tanggal)+60*60*24*34);

				  break;

				case 'Sat' :
				  $hari1='Jum'; $hari2='Sen'; $hari3='Sel'; $hari4='Rab'; $hari5='Kam';
				  $hari6='Jum'; $hari7='Sen'; $hari8='Sel'; $hari9='Rab'; $hari10='Kam';
				  $hari11='Jum'; $hari12='Sen'; $hari13='Sel'; $hari14='Rab'; $hari15='Kam';
				  $hari16='Jum'; $hari17='Sen'; $hari18='Sel'; $hari19='Rab'; $hari20='Kam';
				  $hari21='Jum'; $hari22='Sen'; $hari23='Sel'; $hari24='Rab'; $hari25='Kam';

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

				  // Jumat / Minggu Ke-2
				  $tanggal6 = date('d-m-Y', strtotime($tanggal)+60*60*24*6);
				  // Senin-2
				  $tanggal7 = date('d-m-Y', strtotime($tanggal)+60*60*24*9);
				  // Selasa-2
				  $tanggal8 = date('d-m-Y', strtotime($tanggal)+60*60*24*10);
				  // Rabu-2
				  $tanggal9 = date('d-m-Y', strtotime($tanggal)+60*60*24*11);
				  // Kamis-2
				  $tanggal10 = date('d-m-Y', strtotime($tanggal)+60*60*24*12);

				  // Jumat / Minggu Ke-3
				  $tanggal11 = date('d-m-Y', strtotime($tanggal)+60*60*24*13);
				  // Senin-3
				  $tanggal12 = date('d-m-Y', strtotime($tanggal)+60*60*24*16);
				  // Selasa-3
				  $tanggal13 = date('d-m-Y', strtotime($tanggal)+60*60*24*17);
				  // Rabu-3
				  $tanggal14 = date('d-m-Y', strtotime($tanggal)+60*60*24*18);
				  // Kamis-3
				  $tanggal15 = date('d-m-Y', strtotime($tanggal)+60*60*24*19);

				  // Jumat / Minggu Ke-4
				  $tanggal16 = date('d-m-Y', strtotime($tanggal)+60*60*24*20);
				  // Senin-4
				  $tanggal17 = date('d-m-Y', strtotime($tanggal)+60*60*24*23);
				  // Selasa-4
				  $tanggal18 = date('d-m-Y', strtotime($tanggal)+60*60*24*24);
				  // Rabu-4
				  $tanggal19 = date('d-m-Y', strtotime($tanggal)+60*60*24*25);
				  // Kamis-4
				  $tanggal20 = date('d-m-Y', strtotime($tanggal)+60*60*24*26);

				  // Jumat / Minggu Ke-5
				  $tanggal21 = date('d-m-Y', strtotime($tanggal)+60*60*24*27);
				  // Senin-5
				  $tanggal22 = date('d-m-Y', strtotime($tanggal)+60*60*24*30);
				  // Selasa-5
				  $tanggal23 = date('d-m-Y', strtotime($tanggal)+60*60*24*31);
				  // Rabu-5
				  $tanggal24 = date('d-m-Y', strtotime($tanggal)+60*60*24*32);
				  // Kamis-5
				  $tanggal25 = date('d-m-Y', strtotime($tanggal)+60*60*24*33);

				  break;

				case 'Sun' :
				  $hari1='Jum'; $hari2='Sen'; $hari3='Sel'; $hari4='Rab'; $hari5='Kam';
				  $hari6='Jum'; $hari7='Sen'; $hari8='Sel'; $hari9='Rab'; $hari10='Kam';
				  $hari11='Jum'; $hari12='Sen'; $hari13='Sel'; $hari14='Rab'; $hari15='Kam';
				  $hari16='Jum'; $hari17='Sen'; $hari18='Sel'; $hari19='Rab'; $hari20='Kam';
				  $hari21='Jum'; $hari22='Sen'; $hari23='Sel'; $hari24='Rab'; $hari25='Kam';

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

				  // Jumat / Minggu Ke-2
				  $tanggal6 = date('d-m-Y', strtotime($tanggal)-60*60*24*5);
				  // Senin-2
				  $tanggal7 = date('d-m-Y', strtotime($tanggal)+60*60*24*8);
				  // Selasa-2
				  $tanggal8 = date('d-m-Y', strtotime($tanggal)+60*60*24*9);
				  // Rabu-2
				  $tanggal9 = date('d-m-Y', strtotime($tanggal)+60*60*24*10);
				  // Kamis-2
				  $tanggal10 = date('d-m-Y', strtotime($tanggal)+60*60*24*11);

				  // Jumat / Minggu Ke-3
				  $tanggal11 = date('d-m-Y', strtotime($tanggal)-60*60*24*12);
				  // Senin-3
				  $tanggal12 = date('d-m-Y', strtotime($tanggal)+60*60*24*15);
				  // Selasa-3
				  $tanggal13 = date('d-m-Y', strtotime($tanggal)+60*60*24*16);
				  // Rabu-3
				  $tanggal14 = date('d-m-Y', strtotime($tanggal)+60*60*24*17);
				  // Kamis-3
				  $tanggal15 = date('d-m-Y', strtotime($tanggal)+60*60*24*18);

				  // Jumat / Minggu Ke-4
				  $tanggal16 = date('d-m-Y', strtotime($tanggal)-60*60*24*19);
				  // Senin-4
				  $tanggal17 = date('d-m-Y', strtotime($tanggal)+60*60*24*22);
				  // Selasa-4
				  $tanggal18 = date('d-m-Y', strtotime($tanggal)+60*60*24*23);
				  // Rabu-4
				  $tanggal19 = date('d-m-Y', strtotime($tanggal)+60*60*24*24);
				  // Kamis-4
				  $tanggal20 = date('d-m-Y', strtotime($tanggal)+60*60*24*25);

				  // Jumat / Minggu Ke-5
				  $tanggal21 = date('d-m-Y', strtotime($tanggal)-60*60*24*26);
				  // Senin-5
				  $tanggal22 = date('d-m-Y', strtotime($tanggal)+60*60*24*29);
				  // Selasa-5
				  $tanggal23 = date('d-m-Y', strtotime($tanggal)+60*60*24*30);
				  // Rabu-5
				  $tanggal24 = date('d-m-Y', strtotime($tanggal)+60*60*24*31);
				  // Kamis-5
				  $tanggal25 = date('d-m-Y', strtotime($tanggal)+60*60*24*32);

				  break;

			}
			

				// ....................................................................................

				// Saldo Awal Hari-1
				$salaw_1 = $this->m_bulan->saldo_awal($tanggal1);

				// Allocated Cash Hari-1
				$allo_1 = $this->m_bulan->allocated_cash($tanggal1);

				// Ready Cash Hari-1
				$read_1 = $this->m_bulan->ready_cash($tanggal1);

				// Kas Besar Cabang Hari-1
				$kbc_1 = $this->m_bulan->kbc($tanggal1);

				// Note Hari-1
				$note_1 = $this->m_bulan->note($tanggal1);

				// Status Closing Hari-1
				$closing_1 = $this->m_bulan->status_closing($tanggal1);

				// Deposito (Hari-1)
				$deposito_1 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal1)));

				// B2B (Hari-1)
				$b2b_1 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal1)));

				// CASH-IN Hari Ke-1
				$cashin_a1 = $this->m_bulan->tampil_cashin_a($tanggal1);
				$cashin_b1 = $this->m_bulan->tampil_cashin_b($tanggal1);
				$cashin_c1 = $this->m_bulan->tampil_cashin_c($tanggal1);
				$cashin_d1 = $this->m_bulan->tampil_cashin_d($tanggal1);
				$cashin_e1 = $this->m_bulan->tampil_cashin_e($tanggal1);
				$cashin_f1 = $this->m_bulan->tampil_cashin_f($tanggal1);
				$cashin_g1 = $this->m_bulan->tampil_cashin_g($tanggal1);
				$cashin_h1 = $this->m_bulan->tampil_cashin_h($tanggal1);
				$cashin_i1 = $this->m_bulan->tampil_cashin_i($tanggal1);
				$cashin_j1 = $this->m_bulan->tampil_cashin_j($tanggal1);
				$cashin_k1 = $this->m_bulan->tampil_cashin_k($tanggal1);
				$cashin_l1 = $this->m_bulan->tampil_cashin_l($tanggal1);
				$cashin_m1 = $this->m_bulan->tampil_cashin_m($tanggal1);
				$cashin_n1 = $this->m_bulan->tampil_cashin_n($tanggal1);
				$cashin_o1 = $this->m_bulan->tampil_cashin_o($tanggal1);
				$cashin_p1 = $this->m_bulan->tampil_cashin_p($tanggal1);
				$cashin_q1 = $this->m_bulan->tampil_cashin_q($tanggal1);
				$cashin_r1 = $this->m_bulan->tampil_cashin_r($tanggal1);
				$cashin_s1 = $this->m_bulan->tampil_cashin_s($tanggal1);
				$tCashinProj_1 = $this->m_bulan->totalCashinProj($tanggal1);
				$tCashinReal_1 = $this->m_bulan->totalCashinReal($tanggal1);

				// ....................................................................................

				// Saldo Awal Hari-2
				$salaw_2 = $this->m_bulan->saldo_awal($tanggal2);

				// Allocated Cash Hari-2
				$allo_2 = $this->m_bulan->allocated_cash($tanggal2);

				// Ready Cash Hari-2
				$read_2 = $this->m_bulan->ready_cash($tanggal2);

				// Kas Besar Cabang Hari-2
				$kbc_2 = $this->m_bulan->kbc($tanggal2);

				// Note Hari-2
				$note_2 = $this->m_bulan->note($tanggal2);

				// Status Closing Hari-2
				$closing_2 = $this->m_bulan->status_closing($tanggal2);

				// Deposito (Hari-2)
				$deposito_2 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal2)));

				// B2B (Hari-2)
				$b2b_2 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal2)));

				// CASH-IN Hari Ke-2
				$cashin_a2 = $this->m_bulan->tampil_cashin_a($tanggal2);
				$cashin_b2 = $this->m_bulan->tampil_cashin_b($tanggal2);
				$cashin_c2 = $this->m_bulan->tampil_cashin_c($tanggal2);
				$cashin_d2 = $this->m_bulan->tampil_cashin_d($tanggal2);
				$cashin_e2 = $this->m_bulan->tampil_cashin_e($tanggal2);
				$cashin_f2 = $this->m_bulan->tampil_cashin_f($tanggal2);
				$cashin_g2 = $this->m_bulan->tampil_cashin_g($tanggal2);
				$cashin_h2 = $this->m_bulan->tampil_cashin_h($tanggal2);
				$cashin_i2 = $this->m_bulan->tampil_cashin_i($tanggal2);
				$cashin_j2 = $this->m_bulan->tampil_cashin_j($tanggal2);
				$cashin_k2 = $this->m_bulan->tampil_cashin_k($tanggal2);
				$cashin_l2 = $this->m_bulan->tampil_cashin_l($tanggal2);
				$cashin_m2 = $this->m_bulan->tampil_cashin_m($tanggal2);
				$cashin_n2 = $this->m_bulan->tampil_cashin_n($tanggal2);
				$cashin_o2 = $this->m_bulan->tampil_cashin_o($tanggal2);
				$cashin_p2 = $this->m_bulan->tampil_cashin_p($tanggal2);
				$cashin_q2 = $this->m_bulan->tampil_cashin_q($tanggal2);
				$cashin_r2 = $this->m_bulan->tampil_cashin_r($tanggal2);
				$cashin_s2 = $this->m_bulan->tampil_cashin_s($tanggal2);
				$tCashinProj_2 = $this->m_bulan->totalCashinProj($tanggal2);
				$tCashinReal_2 = $this->m_bulan->totalCashinReal($tanggal2);

				// ....................................................................................

				// Saldo Awal Hari-3
				$salaw_3 = $this->m_bulan->saldo_awal($tanggal3);

				// Allocated Cash Hari-3
				$allo_3 = $this->m_bulan->allocated_cash($tanggal3);

				// Ready Cash Hari-3
				$read_3 = $this->m_bulan->ready_cash($tanggal3);

				// Kas Besar Cabang Hari-3
				$kbc_3 = $this->m_bulan->kbc($tanggal3);

				// Note Hari-3
				$note_3 = $this->m_bulan->note($tanggal3);

				// Status Closing Hari-3
				$closing_3 = $this->m_bulan->status_closing($tanggal3);

				// Deposito (Hari-3)
				$deposito_3 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal3)));

				// B2B (Hari-3)
				$b2b_3 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal3)));


				// CASH-IN Hari Ke-3
				$cashin_a3 = $this->m_bulan->tampil_cashin_a($tanggal3);
				$cashin_b3 = $this->m_bulan->tampil_cashin_b($tanggal3);
				$cashin_c3 = $this->m_bulan->tampil_cashin_c($tanggal3);
				$cashin_d3 = $this->m_bulan->tampil_cashin_d($tanggal3);
				$cashin_e3 = $this->m_bulan->tampil_cashin_e($tanggal3);
				$cashin_f3 = $this->m_bulan->tampil_cashin_f($tanggal3);
				$cashin_g3 = $this->m_bulan->tampil_cashin_g($tanggal3);
				$cashin_h3 = $this->m_bulan->tampil_cashin_h($tanggal3);
				$cashin_i3 = $this->m_bulan->tampil_cashin_i($tanggal3);
				$cashin_j3 = $this->m_bulan->tampil_cashin_j($tanggal3);
				$cashin_k3 = $this->m_bulan->tampil_cashin_k($tanggal3);
				$cashin_l3 = $this->m_bulan->tampil_cashin_l($tanggal3);
				$cashin_m3 = $this->m_bulan->tampil_cashin_m($tanggal3);
				$cashin_n3 = $this->m_bulan->tampil_cashin_n($tanggal3);
				$cashin_o3 = $this->m_bulan->tampil_cashin_o($tanggal3);
				$cashin_p3 = $this->m_bulan->tampil_cashin_p($tanggal3);
				$cashin_q3 = $this->m_bulan->tampil_cashin_q($tanggal3);
				$cashin_r3 = $this->m_bulan->tampil_cashin_r($tanggal3);
				$cashin_s3 = $this->m_bulan->tampil_cashin_s($tanggal3);
				$tCashinProj_3 = $this->m_bulan->totalCashinProj($tanggal3);
				$tCashinReal_3 = $this->m_bulan->totalCashinReal($tanggal3);

				// ....................................................................................

				// Saldo Awal Hari-4
				$salaw_4 = $this->m_bulan->saldo_awal($tanggal4);

				// Allocated Cash Hari-4
				$allo_4 = $this->m_bulan->allocated_cash($tanggal4);

				// Ready Cash Hari-4
				$read_4 = $this->m_bulan->ready_cash($tanggal4);

				// Kas Besar Cabang Hari-4
				$kbc_4 = $this->m_bulan->kbc($tanggal4);

				// Note Hari-4
				$note_4 = $this->m_bulan->note($tanggal4);

				// Status Closing Hari-4
				$closing_4 = $this->m_bulan->status_closing($tanggal4);

				// Deposito (Hari-4)
				$deposito_4 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal4)));

				// B2B (Hari-4)
				$b2b_4 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal4)));

				// CASH-IN Hari Ke-4
				$cashin_a4 = $this->m_bulan->tampil_cashin_a($tanggal4);
				$cashin_b4 = $this->m_bulan->tampil_cashin_b($tanggal4);
				$cashin_c4 = $this->m_bulan->tampil_cashin_c($tanggal4);
				$cashin_d4 = $this->m_bulan->tampil_cashin_d($tanggal4);
				$cashin_e4 = $this->m_bulan->tampil_cashin_e($tanggal4);
				$cashin_f4 = $this->m_bulan->tampil_cashin_f($tanggal4);
				$cashin_g4 = $this->m_bulan->tampil_cashin_g($tanggal4);
				$cashin_h4 = $this->m_bulan->tampil_cashin_h($tanggal4);
				$cashin_i4 = $this->m_bulan->tampil_cashin_i($tanggal4);
				$cashin_j4 = $this->m_bulan->tampil_cashin_j($tanggal4);
				$cashin_k4 = $this->m_bulan->tampil_cashin_k($tanggal4);
				$cashin_l4 = $this->m_bulan->tampil_cashin_l($tanggal4);
				$cashin_m4 = $this->m_bulan->tampil_cashin_m($tanggal4);
				$cashin_n4 = $this->m_bulan->tampil_cashin_n($tanggal4);
				$cashin_o4 = $this->m_bulan->tampil_cashin_o($tanggal4);
				$cashin_p4 = $this->m_bulan->tampil_cashin_p($tanggal4);
				$cashin_q4 = $this->m_bulan->tampil_cashin_q($tanggal4);
				$cashin_r4 = $this->m_bulan->tampil_cashin_r($tanggal4);
				$cashin_s4 = $this->m_bulan->tampil_cashin_s($tanggal4);
				$tCashinProj_4 = $this->m_bulan->totalCashinProj($tanggal4);
				$tCashinReal_4 = $this->m_bulan->totalCashinReal($tanggal4);

				// ....................................................................................

				// Saldo Awal Hari-5
				$salaw_5 = $this->m_bulan->saldo_awal($tanggal5);

				// Allocated Cash Hari-5
				$allo_5 = $this->m_bulan->allocated_cash($tanggal5);

				// Ready Cash Hari-5
				$read_5 = $this->m_bulan->ready_cash($tanggal5);

				// Kas Besar Cabang Hari-5
				$kbc_5 = $this->m_bulan->kbc($tanggal5);

				// Note Hari-5
				$note_5 = $this->m_bulan->note($tanggal5);

				// Status Closing Hari-5
				$closing_5 = $this->m_bulan->status_closing($tanggal5);

				// Deposito (Hari-5)
				$deposito_5 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal5)));

				// B2B (Hari-5)
				$b2b_5 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal5)));

				// CASH-IN Hari Ke-5
				$cashin_a5 = $this->m_bulan->tampil_cashin_a($tanggal5);
				$cashin_b5 = $this->m_bulan->tampil_cashin_b($tanggal5);
				$cashin_c5 = $this->m_bulan->tampil_cashin_c($tanggal5);
				$cashin_d5 = $this->m_bulan->tampil_cashin_d($tanggal5);
				$cashin_e5 = $this->m_bulan->tampil_cashin_e($tanggal5);
				$cashin_f5 = $this->m_bulan->tampil_cashin_f($tanggal5);
				$cashin_g5 = $this->m_bulan->tampil_cashin_g($tanggal5);
				$cashin_h5 = $this->m_bulan->tampil_cashin_h($tanggal5);
				$cashin_i5 = $this->m_bulan->tampil_cashin_i($tanggal5);
				$cashin_j5 = $this->m_bulan->tampil_cashin_j($tanggal5);
				$cashin_k5 = $this->m_bulan->tampil_cashin_k($tanggal5);
				$cashin_l5 = $this->m_bulan->tampil_cashin_l($tanggal5);
				$cashin_m5 = $this->m_bulan->tampil_cashin_m($tanggal5);
				$cashin_n5 = $this->m_bulan->tampil_cashin_n($tanggal5);
				$cashin_o5 = $this->m_bulan->tampil_cashin_o($tanggal5);
				$cashin_p5 = $this->m_bulan->tampil_cashin_p($tanggal5);
				$cashin_q5 = $this->m_bulan->tampil_cashin_q($tanggal5);
				$cashin_r5 = $this->m_bulan->tampil_cashin_r($tanggal5);
				$cashin_s5 = $this->m_bulan->tampil_cashin_s($tanggal5);
				$tCashinProj_5 = $this->m_bulan->totalCashinProj($tanggal5);
				$tCashinReal_5 = $this->m_bulan->totalCashinReal($tanggal5);

				// ....................................................................................

				// Saldo Awal Hari-6
				$salaw_6 = $this->m_bulan->saldo_awal($tanggal6);

				// Allocated Cash Hari-6
				$allo_6 = $this->m_bulan->allocated_cash($tanggal6);

				// Ready Cash Hari-6
				$read_6 = $this->m_bulan->ready_cash($tanggal6);

				// Kas Besar Cabang Hari-6
				$kbc_6 = $this->m_bulan->kbc($tanggal6);

				// Note Hari-6
				$note_6 = $this->m_bulan->note($tanggal6);

				// Status Closing Hari-6
				$closing_6 = $this->m_bulan->status_closing($tanggal6);

				// Deposito (Hari-6)
				$deposito_6 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal6)));

				// B2B (Hari-6)
				$b2b_6 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal6)));

				// CASH-IN Hari Ke-6
				$cashin_a6 = $this->m_bulan->tampil_cashin_a($tanggal6);
				$cashin_b6 = $this->m_bulan->tampil_cashin_b($tanggal6);
				$cashin_c6 = $this->m_bulan->tampil_cashin_c($tanggal6);
				$cashin_d6 = $this->m_bulan->tampil_cashin_d($tanggal6);
				$cashin_e6 = $this->m_bulan->tampil_cashin_e($tanggal6);
				$cashin_f6 = $this->m_bulan->tampil_cashin_f($tanggal6);
				$cashin_g6 = $this->m_bulan->tampil_cashin_g($tanggal6);
				$cashin_h6 = $this->m_bulan->tampil_cashin_h($tanggal6);
				$cashin_i6 = $this->m_bulan->tampil_cashin_i($tanggal6);
				$cashin_j6 = $this->m_bulan->tampil_cashin_j($tanggal6);
				$cashin_k6 = $this->m_bulan->tampil_cashin_k($tanggal6);
				$cashin_l6 = $this->m_bulan->tampil_cashin_l($tanggal6);
				$cashin_m6 = $this->m_bulan->tampil_cashin_m($tanggal6);
				$cashin_n6 = $this->m_bulan->tampil_cashin_n($tanggal6);
				$cashin_o6 = $this->m_bulan->tampil_cashin_o($tanggal6);
				$cashin_p6 = $this->m_bulan->tampil_cashin_p($tanggal6);
				$cashin_q6 = $this->m_bulan->tampil_cashin_q($tanggal6);
				$cashin_r6 = $this->m_bulan->tampil_cashin_r($tanggal6);
				$cashin_s6 = $this->m_bulan->tampil_cashin_s($tanggal6);
				$tCashinProj_6 = $this->m_bulan->totalCashinProj($tanggal6);
				$tCashinReal_6 = $this->m_bulan->totalCashinReal($tanggal6);

				// ....................................................................................

				// Saldo Awal Hari-7
				$salaw_7 = $this->m_bulan->saldo_awal($tanggal7);

				// Allocated Cash Hari-7
				$allo_7 = $this->m_bulan->allocated_cash($tanggal7);

				// Ready Cash Hari-7
				$read_7 = $this->m_bulan->ready_cash($tanggal7);

				// Kas Besar Cabang Hari-7
				$kbc_7 = $this->m_bulan->kbc($tanggal7);

				// Note Hari-7
				$note_7 = $this->m_bulan->note($tanggal7);

				// Status Closing Hari-7
				$closing_7 = $this->m_bulan->status_closing($tanggal7);

				// Deposito (Hari-7)
				$deposito_7 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal7)));

				// B2B (Hari-7)
				$b2b_7 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal7)));

				// CASH-IN Hari Ke-7
				$cashin_a7 = $this->m_bulan->tampil_cashin_a($tanggal7);
				$cashin_b7 = $this->m_bulan->tampil_cashin_b($tanggal7);
				$cashin_c7 = $this->m_bulan->tampil_cashin_c($tanggal7);
				$cashin_d7 = $this->m_bulan->tampil_cashin_d($tanggal7);
				$cashin_e7 = $this->m_bulan->tampil_cashin_e($tanggal7);
				$cashin_f7 = $this->m_bulan->tampil_cashin_f($tanggal7);
				$cashin_g7 = $this->m_bulan->tampil_cashin_g($tanggal7);
				$cashin_h7 = $this->m_bulan->tampil_cashin_h($tanggal7);
				$cashin_i7 = $this->m_bulan->tampil_cashin_i($tanggal7);
				$cashin_j7 = $this->m_bulan->tampil_cashin_j($tanggal7);
				$cashin_k7 = $this->m_bulan->tampil_cashin_k($tanggal7);
				$cashin_l7 = $this->m_bulan->tampil_cashin_l($tanggal7);
				$cashin_m7 = $this->m_bulan->tampil_cashin_m($tanggal7);
				$cashin_n7 = $this->m_bulan->tampil_cashin_n($tanggal7);
				$cashin_o7 = $this->m_bulan->tampil_cashin_o($tanggal7);
				$cashin_p7 = $this->m_bulan->tampil_cashin_p($tanggal7);
				$cashin_q7 = $this->m_bulan->tampil_cashin_q($tanggal7);
				$cashin_r7 = $this->m_bulan->tampil_cashin_r($tanggal7);
				$cashin_s7 = $this->m_bulan->tampil_cashin_s($tanggal7);
				$tCashinProj_7 = $this->m_bulan->totalCashinProj($tanggal7);
				$tCashinReal_7 = $this->m_bulan->totalCashinReal($tanggal7);

				// ....................................................................................

				// Saldo Awal Hari-8
				$salaw_8 = $this->m_bulan->saldo_awal($tanggal8);

				// Allocated Cash Hari-8
				$allo_8 = $this->m_bulan->allocated_cash($tanggal8);

				// Ready Cash Hari-8
				$read_8 = $this->m_bulan->ready_cash($tanggal8);

				// Kas Besar Cabang Hari-8
				$kbc_8 = $this->m_bulan->kbc($tanggal8);

				// Note Hari-8
				$note_8 = $this->m_bulan->note($tanggal8);

				// Status Closing Hari-8
				$closing_8 = $this->m_bulan->status_closing($tanggal8);

				// Deposito (Hari-8)
				$deposito_8 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal8)));

				// B2B (Hari-8)
				$b2b_8 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal8)));

				// CASH-IN Hari Ke-8
				$cashin_a8 = $this->m_bulan->tampil_cashin_a($tanggal8);
				$cashin_b8 = $this->m_bulan->tampil_cashin_b($tanggal8);
				$cashin_c8 = $this->m_bulan->tampil_cashin_c($tanggal8);
				$cashin_d8 = $this->m_bulan->tampil_cashin_d($tanggal8);
				$cashin_e8 = $this->m_bulan->tampil_cashin_e($tanggal8);
				$cashin_f8 = $this->m_bulan->tampil_cashin_f($tanggal8);
				$cashin_g8 = $this->m_bulan->tampil_cashin_g($tanggal8);
				$cashin_h8 = $this->m_bulan->tampil_cashin_h($tanggal8);
				$cashin_i8 = $this->m_bulan->tampil_cashin_i($tanggal8);
				$cashin_j8 = $this->m_bulan->tampil_cashin_j($tanggal8);
				$cashin_k8 = $this->m_bulan->tampil_cashin_k($tanggal8);
				$cashin_l8 = $this->m_bulan->tampil_cashin_l($tanggal8);
				$cashin_m8 = $this->m_bulan->tampil_cashin_m($tanggal8);
				$cashin_n8 = $this->m_bulan->tampil_cashin_n($tanggal8);
				$cashin_o8 = $this->m_bulan->tampil_cashin_o($tanggal8);
				$cashin_p8 = $this->m_bulan->tampil_cashin_p($tanggal8);
				$cashin_q8 = $this->m_bulan->tampil_cashin_q($tanggal8);
				$cashin_r8 = $this->m_bulan->tampil_cashin_r($tanggal8);
				$cashin_s8 = $this->m_bulan->tampil_cashin_s($tanggal8);
				$tCashinProj_8 = $this->m_bulan->totalCashinProj($tanggal8);
				$tCashinReal_8 = $this->m_bulan->totalCashinReal($tanggal8);

				// ....................................................................................

				// Saldo Awal Hari-9
				$salaw_9 = $this->m_bulan->saldo_awal($tanggal9);

				// Allocated Cash Hari-9
				$allo_9 = $this->m_bulan->allocated_cash($tanggal9);

				// Ready Cash Hari-9
				$read_9 = $this->m_bulan->ready_cash($tanggal9);

				// Kas Besar Cabang Hari-9
				$kbc_9 = $this->m_bulan->kbc($tanggal9);

				// Note Hari-9
				$note_9 = $this->m_bulan->note($tanggal9);

				// Status Closing Hari-9
				$closing_9 = $this->m_bulan->status_closing($tanggal9);

				// Deposito (Hari-9)
				$deposito_9 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal9)));

				// B2B (Hari-9)
				$b2b_9 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal9)));

				// CASH-IN Hari Ke-9
				$cashin_a9 = $this->m_bulan->tampil_cashin_a($tanggal9);
				$cashin_b9 = $this->m_bulan->tampil_cashin_b($tanggal9);
				$cashin_c9 = $this->m_bulan->tampil_cashin_c($tanggal9);
				$cashin_d9 = $this->m_bulan->tampil_cashin_d($tanggal9);
				$cashin_e9 = $this->m_bulan->tampil_cashin_e($tanggal9);
				$cashin_f9 = $this->m_bulan->tampil_cashin_f($tanggal9);
				$cashin_g9 = $this->m_bulan->tampil_cashin_g($tanggal9);
				$cashin_h9 = $this->m_bulan->tampil_cashin_h($tanggal9);
				$cashin_i9 = $this->m_bulan->tampil_cashin_i($tanggal9);
				$cashin_j9 = $this->m_bulan->tampil_cashin_j($tanggal9);
				$cashin_k9 = $this->m_bulan->tampil_cashin_k($tanggal9);
				$cashin_l9 = $this->m_bulan->tampil_cashin_l($tanggal9);
				$cashin_m9 = $this->m_bulan->tampil_cashin_m($tanggal9);
				$cashin_n9 = $this->m_bulan->tampil_cashin_n($tanggal9);
				$cashin_o9 = $this->m_bulan->tampil_cashin_o($tanggal9);
				$cashin_p9 = $this->m_bulan->tampil_cashin_p($tanggal9);
				$cashin_q9 = $this->m_bulan->tampil_cashin_q($tanggal9);
				$cashin_r9 = $this->m_bulan->tampil_cashin_r($tanggal9);
				$cashin_s9 = $this->m_bulan->tampil_cashin_s($tanggal9);
				$tCashinProj_9 = $this->m_bulan->totalCashinProj($tanggal9);
				$tCashinReal_9 = $this->m_bulan->totalCashinReal($tanggal9);

				// ....................................................................................

				// Saldo Awal Hari-10
				$salaw_10 = $this->m_bulan->saldo_awal($tanggal10);

				// Allocated Cash Hari-10
				$allo_10 = $this->m_bulan->allocated_cash($tanggal10);

				// Ready Cash Hari-10
				$read_10 = $this->m_bulan->ready_cash($tanggal10);

				// Kas Besar Cabang Hari-10
				$kbc_10 = $this->m_bulan->kbc($tanggal10);

				// Note Hari-10
				$note_10 = $this->m_bulan->note($tanggal10);

				// Status Closing Hari-10
				$closing_10 = $this->m_bulan->status_closing($tanggal10);

				// Deposito (Hari-10)
				$deposito_10 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal10)));

				// B2B (Hari-10)
				$b2b_10 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal10)));

				// CASH-IN Hari Ke-10
				$cashin_a10 = $this->m_bulan->tampil_cashin_a($tanggal10);
				$cashin_b10 = $this->m_bulan->tampil_cashin_b($tanggal10);
				$cashin_c10 = $this->m_bulan->tampil_cashin_c($tanggal10);
				$cashin_d10 = $this->m_bulan->tampil_cashin_d($tanggal10);
				$cashin_e10 = $this->m_bulan->tampil_cashin_e($tanggal10);
				$cashin_f10 = $this->m_bulan->tampil_cashin_f($tanggal10);
				$cashin_g10 = $this->m_bulan->tampil_cashin_g($tanggal10);
				$cashin_h10 = $this->m_bulan->tampil_cashin_h($tanggal10);
				$cashin_i10 = $this->m_bulan->tampil_cashin_i($tanggal10);
				$cashin_j10 = $this->m_bulan->tampil_cashin_j($tanggal10);
				$cashin_k10 = $this->m_bulan->tampil_cashin_k($tanggal10);
				$cashin_l10 = $this->m_bulan->tampil_cashin_l($tanggal10);
				$cashin_m10 = $this->m_bulan->tampil_cashin_m($tanggal10);
				$cashin_n10 = $this->m_bulan->tampil_cashin_n($tanggal10);
				$cashin_o10 = $this->m_bulan->tampil_cashin_o($tanggal10);
				$cashin_p10 = $this->m_bulan->tampil_cashin_p($tanggal10);
				$cashin_q10 = $this->m_bulan->tampil_cashin_q($tanggal10);
				$cashin_r10 = $this->m_bulan->tampil_cashin_r($tanggal10);
				$cashin_s10 = $this->m_bulan->tampil_cashin_s($tanggal10);
				$tCashinProj_10 = $this->m_bulan->totalCashinProj($tanggal10);
				$tCashinReal_10 = $this->m_bulan->totalCashinReal($tanggal10);

				// ....................................................................................

				// Saldo Awal Hari-11
				$salaw_11 = $this->m_bulan->saldo_awal($tanggal11);

				// Allocated Cash Hari-11
				$allo_11 = $this->m_bulan->allocated_cash($tanggal11);

				// Ready Cash Hari-11
				$read_11 = $this->m_bulan->ready_cash($tanggal11);

				// Kas Besar Cabang Hari-11
				$kbc_11 = $this->m_bulan->kbc($tanggal11);

				// Note Hari-11
				$note_11 = $this->m_bulan->note($tanggal11);

				// Status Closing Hari-11
				$closing_11 = $this->m_bulan->status_closing($tanggal11);

				// Deposito (Hari-11)
				$deposito_11 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal11)));

				// B2B (Hari-11)
				$b2b_11 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal11)));

				// CASH-IN Hari Ke-11
				$cashin_a11 = $this->m_bulan->tampil_cashin_a($tanggal11);
				$cashin_b11 = $this->m_bulan->tampil_cashin_b($tanggal11);
				$cashin_c11 = $this->m_bulan->tampil_cashin_c($tanggal11);
				$cashin_d11 = $this->m_bulan->tampil_cashin_d($tanggal11);
				$cashin_e11 = $this->m_bulan->tampil_cashin_e($tanggal11);
				$cashin_f11 = $this->m_bulan->tampil_cashin_f($tanggal11);
				$cashin_g11 = $this->m_bulan->tampil_cashin_g($tanggal11);
				$cashin_h11 = $this->m_bulan->tampil_cashin_h($tanggal11);
				$cashin_i11 = $this->m_bulan->tampil_cashin_i($tanggal11);
				$cashin_j11 = $this->m_bulan->tampil_cashin_j($tanggal11);
				$cashin_k11 = $this->m_bulan->tampil_cashin_k($tanggal11);
				$cashin_l11 = $this->m_bulan->tampil_cashin_l($tanggal11);
				$cashin_m11 = $this->m_bulan->tampil_cashin_m($tanggal11);
				$cashin_n11 = $this->m_bulan->tampil_cashin_n($tanggal11);
				$cashin_o11 = $this->m_bulan->tampil_cashin_o($tanggal11);
				$cashin_p11 = $this->m_bulan->tampil_cashin_p($tanggal11);
				$cashin_q11 = $this->m_bulan->tampil_cashin_q($tanggal11);
				$cashin_r11 = $this->m_bulan->tampil_cashin_r($tanggal11);
				$cashin_s11 = $this->m_bulan->tampil_cashin_s($tanggal11);
				$tCashinProj_11 = $this->m_bulan->totalCashinProj($tanggal11);
				$tCashinReal_11 = $this->m_bulan->totalCashinReal($tanggal11);

				// ....................................................................................

				// Saldo Awal Hari-12
				$salaw_12 = $this->m_bulan->saldo_awal($tanggal12);

				// Allocated Cash Hari-12
				$allo_12 = $this->m_bulan->allocated_cash($tanggal12);

				// Ready Cash Hari-12
				$read_12 = $this->m_bulan->ready_cash($tanggal12);

				// Kas Besar Cabang Hari-12
				$kbc_12 = $this->m_bulan->kbc($tanggal12);

				// Note Hari-12
				$note_12 = $this->m_bulan->note($tanggal12);

				// Status Closing Hari-12
				$closing_12 = $this->m_bulan->status_closing($tanggal12);

				// Deposito (Hari-12)
				$deposito_12 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal12)));

				// B2B (Hari-12)
				$b2b_12 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal12)));

				// CASH-IN Hari Ke-12
				$cashin_a12 = $this->m_bulan->tampil_cashin_a($tanggal12);
				$cashin_b12 = $this->m_bulan->tampil_cashin_b($tanggal12);
				$cashin_c12 = $this->m_bulan->tampil_cashin_c($tanggal12);
				$cashin_d12 = $this->m_bulan->tampil_cashin_d($tanggal12);
				$cashin_e12 = $this->m_bulan->tampil_cashin_e($tanggal12);
				$cashin_f12 = $this->m_bulan->tampil_cashin_f($tanggal12);
				$cashin_g12 = $this->m_bulan->tampil_cashin_g($tanggal12);
				$cashin_h12 = $this->m_bulan->tampil_cashin_h($tanggal12);
				$cashin_i12 = $this->m_bulan->tampil_cashin_i($tanggal12);
				$cashin_j12 = $this->m_bulan->tampil_cashin_j($tanggal12);
				$cashin_k12 = $this->m_bulan->tampil_cashin_k($tanggal12);
				$cashin_l12 = $this->m_bulan->tampil_cashin_l($tanggal12);
				$cashin_m12 = $this->m_bulan->tampil_cashin_m($tanggal12);
				$cashin_n12 = $this->m_bulan->tampil_cashin_n($tanggal12);
				$cashin_o12 = $this->m_bulan->tampil_cashin_o($tanggal12);
				$cashin_p12 = $this->m_bulan->tampil_cashin_p($tanggal12);
				$cashin_q12 = $this->m_bulan->tampil_cashin_q($tanggal12);
				$cashin_r12 = $this->m_bulan->tampil_cashin_r($tanggal12);
				$cashin_s12 = $this->m_bulan->tampil_cashin_s($tanggal12);
				$tCashinProj_12 = $this->m_bulan->totalCashinProj($tanggal12);
				$tCashinReal_12 = $this->m_bulan->totalCashinReal($tanggal12);

				// ....................................................................................

				// Saldo Awal Hari-13
				$salaw_13 = $this->m_bulan->saldo_awal($tanggal13);

				// Allocated Cash Hari-13
				$allo_13 = $this->m_bulan->allocated_cash($tanggal13);

				// Ready Cash Hari-13
				$read_13 = $this->m_bulan->ready_cash($tanggal13);

				// Kas Besar Cabang Hari-13
				$kbc_13 = $this->m_bulan->kbc($tanggal13);

				// Note Hari-13
				$note_13 = $this->m_bulan->note($tanggal13);

				// Status Closing Hari-13
				$closing_13 = $this->m_bulan->status_closing($tanggal13);

				// Deposito (Hari-13)
				$deposito_13 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal13)));

				// B2B (Hari-13)
				$b2b_13 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal13)));

				// CASH-IN Hari Ke-13
				$cashin_a13 = $this->m_bulan->tampil_cashin_a($tanggal13);
				$cashin_b13 = $this->m_bulan->tampil_cashin_b($tanggal13);
				$cashin_c13 = $this->m_bulan->tampil_cashin_c($tanggal13);
				$cashin_d13 = $this->m_bulan->tampil_cashin_d($tanggal13);
				$cashin_e13 = $this->m_bulan->tampil_cashin_e($tanggal13);
				$cashin_f13 = $this->m_bulan->tampil_cashin_f($tanggal13);
				$cashin_g13 = $this->m_bulan->tampil_cashin_g($tanggal13);
				$cashin_h13 = $this->m_bulan->tampil_cashin_h($tanggal13);
				$cashin_i13 = $this->m_bulan->tampil_cashin_i($tanggal13);
				$cashin_j13 = $this->m_bulan->tampil_cashin_j($tanggal13);
				$cashin_k13 = $this->m_bulan->tampil_cashin_k($tanggal13);
				$cashin_l13 = $this->m_bulan->tampil_cashin_l($tanggal13);
				$cashin_m13 = $this->m_bulan->tampil_cashin_m($tanggal13);
				$cashin_n13 = $this->m_bulan->tampil_cashin_n($tanggal13);
				$cashin_o13 = $this->m_bulan->tampil_cashin_o($tanggal13);
				$cashin_p13 = $this->m_bulan->tampil_cashin_p($tanggal13);
				$cashin_q13 = $this->m_bulan->tampil_cashin_q($tanggal13);
				$cashin_r13 = $this->m_bulan->tampil_cashin_r($tanggal13);
				$cashin_s13 = $this->m_bulan->tampil_cashin_s($tanggal13);
				$tCashinProj_13 = $this->m_bulan->totalCashinProj($tanggal13);
				$tCashinReal_13 = $this->m_bulan->totalCashinReal($tanggal13);

				// ....................................................................................

				// Saldo Awal Hari-14
				$salaw_14 = $this->m_bulan->saldo_awal($tanggal14);

				// Allocated Cash Hari-14
				$allo_14 = $this->m_bulan->allocated_cash($tanggal14);

				// Ready Cash Hari-14
				$read_14 = $this->m_bulan->ready_cash($tanggal14);

				// Kas Besar Cabang Hari-14
				$kbc_14 = $this->m_bulan->kbc($tanggal14);

				// Note Hari-14
				$note_14 = $this->m_bulan->note($tanggal14);

				// Status Closing Hari-14
				$closing_14 = $this->m_bulan->status_closing($tanggal14);

				// Deposito (Hari-14)
				$deposito_14 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal14)));

				// B2B (Hari-14)
				$b2b_14 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal14)));

				// CASH-IN Hari Ke-14
				$cashin_a14 = $this->m_bulan->tampil_cashin_a($tanggal14);
				$cashin_b14 = $this->m_bulan->tampil_cashin_b($tanggal14);
				$cashin_c14 = $this->m_bulan->tampil_cashin_c($tanggal14);
				$cashin_d14 = $this->m_bulan->tampil_cashin_d($tanggal14);
				$cashin_e14 = $this->m_bulan->tampil_cashin_e($tanggal14);
				$cashin_f14 = $this->m_bulan->tampil_cashin_f($tanggal14);
				$cashin_g14 = $this->m_bulan->tampil_cashin_g($tanggal14);
				$cashin_h14 = $this->m_bulan->tampil_cashin_h($tanggal14);
				$cashin_i14 = $this->m_bulan->tampil_cashin_i($tanggal14);
				$cashin_j14 = $this->m_bulan->tampil_cashin_j($tanggal14);
				$cashin_k14 = $this->m_bulan->tampil_cashin_k($tanggal14);
				$cashin_l14 = $this->m_bulan->tampil_cashin_l($tanggal14);
				$cashin_m14 = $this->m_bulan->tampil_cashin_m($tanggal14);
				$cashin_n14 = $this->m_bulan->tampil_cashin_n($tanggal14);
				$cashin_o14 = $this->m_bulan->tampil_cashin_o($tanggal14);
				$cashin_p14 = $this->m_bulan->tampil_cashin_p($tanggal14);
				$cashin_q14 = $this->m_bulan->tampil_cashin_q($tanggal14);
				$cashin_r14 = $this->m_bulan->tampil_cashin_r($tanggal14);
				$cashin_s14 = $this->m_bulan->tampil_cashin_s($tanggal14);
				$tCashinProj_14 = $this->m_bulan->totalCashinProj($tanggal14);
				$tCashinReal_14 = $this->m_bulan->totalCashinReal($tanggal14);

				// ....................................................................................

				// Saldo Awal Hari-15
				$salaw_15 = $this->m_bulan->saldo_awal($tanggal15);

				// Allocated Cash Hari-15
				$allo_15 = $this->m_bulan->allocated_cash($tanggal15);

				// Ready Cash Hari-15
				$read_15 = $this->m_bulan->ready_cash($tanggal15);

				// Kas Besar Cabang Hari-15
				$kbc_15 = $this->m_bulan->kbc($tanggal15);

				// Note Hari-15
				$note_15 = $this->m_bulan->note($tanggal15);

				// Status Closing Hari-15
				$closing_15 = $this->m_bulan->status_closing($tanggal15);

				// Deposito (Hari-15)
				$deposito_15 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal15)));

				// B2B (Hari-15)
				$b2b_15 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal15)));

				// CASH-IN Hari Ke-15
				$cashin_a15 = $this->m_bulan->tampil_cashin_a($tanggal15);
				$cashin_b15 = $this->m_bulan->tampil_cashin_b($tanggal15);
				$cashin_c15 = $this->m_bulan->tampil_cashin_c($tanggal15);
				$cashin_d15 = $this->m_bulan->tampil_cashin_d($tanggal15);
				$cashin_e15 = $this->m_bulan->tampil_cashin_e($tanggal15);
				$cashin_f15 = $this->m_bulan->tampil_cashin_f($tanggal15);
				$cashin_g15 = $this->m_bulan->tampil_cashin_g($tanggal15);
				$cashin_h15 = $this->m_bulan->tampil_cashin_h($tanggal15);
				$cashin_i15 = $this->m_bulan->tampil_cashin_i($tanggal15);
				$cashin_j15 = $this->m_bulan->tampil_cashin_j($tanggal15);
				$cashin_k15 = $this->m_bulan->tampil_cashin_k($tanggal15);
				$cashin_l15 = $this->m_bulan->tampil_cashin_l($tanggal15);
				$cashin_m15 = $this->m_bulan->tampil_cashin_m($tanggal15);
				$cashin_n15 = $this->m_bulan->tampil_cashin_n($tanggal15);
				$cashin_o15 = $this->m_bulan->tampil_cashin_o($tanggal15);
				$cashin_p15 = $this->m_bulan->tampil_cashin_p($tanggal15);
				$cashin_q15 = $this->m_bulan->tampil_cashin_q($tanggal15);
				$cashin_r15 = $this->m_bulan->tampil_cashin_r($tanggal15);
				$cashin_s15 = $this->m_bulan->tampil_cashin_s($tanggal15);
				$tCashinProj_15 = $this->m_bulan->totalCashinProj($tanggal15);
				$tCashinReal_15 = $this->m_bulan->totalCashinReal($tanggal15);

				// ....................................................................................

				// Saldo Awal Hari-16
				$salaw_16 = $this->m_bulan->saldo_awal($tanggal16);

				// Allocated Cash Hari-16
				$allo_16 = $this->m_bulan->allocated_cash($tanggal16);

				// Ready Cash Hari-16
				$read_16 = $this->m_bulan->ready_cash($tanggal16);

				// Kas Besar Cabang Hari-16
				$kbc_16 = $this->m_bulan->kbc($tanggal16);

				// Note Hari-16
				$note_16 = $this->m_bulan->note($tanggal16);

				// Status Closing Hari-16
				$closing_16 = $this->m_bulan->status_closing($tanggal16);

				// Deposito (Hari-16)
				$deposito_16 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal16)));

				// B2B (Hari-16)
				$b2b_16 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal16)));

				// CASH-IN Hari Ke-16
				$cashin_a16 = $this->m_bulan->tampil_cashin_a($tanggal16);
				$cashin_b16 = $this->m_bulan->tampil_cashin_b($tanggal16);
				$cashin_c16 = $this->m_bulan->tampil_cashin_c($tanggal16);
				$cashin_d16 = $this->m_bulan->tampil_cashin_d($tanggal16);
				$cashin_e16 = $this->m_bulan->tampil_cashin_e($tanggal16);
				$cashin_f16 = $this->m_bulan->tampil_cashin_f($tanggal16);
				$cashin_g16 = $this->m_bulan->tampil_cashin_g($tanggal16);
				$cashin_h16 = $this->m_bulan->tampil_cashin_h($tanggal16);
				$cashin_i16 = $this->m_bulan->tampil_cashin_i($tanggal16);
				$cashin_j16 = $this->m_bulan->tampil_cashin_j($tanggal16);
				$cashin_k16 = $this->m_bulan->tampil_cashin_k($tanggal16);
				$cashin_l16 = $this->m_bulan->tampil_cashin_l($tanggal16);
				$cashin_m16 = $this->m_bulan->tampil_cashin_m($tanggal16);
				$cashin_n16 = $this->m_bulan->tampil_cashin_n($tanggal16);
				$cashin_o16 = $this->m_bulan->tampil_cashin_o($tanggal16);
				$cashin_p16 = $this->m_bulan->tampil_cashin_p($tanggal16);
				$cashin_q16 = $this->m_bulan->tampil_cashin_q($tanggal16);
				$cashin_r16 = $this->m_bulan->tampil_cashin_r($tanggal16);
				$cashin_s16 = $this->m_bulan->tampil_cashin_s($tanggal16);
				$tCashinProj_16 = $this->m_bulan->totalCashinProj($tanggal16);
				$tCashinReal_16 = $this->m_bulan->totalCashinReal($tanggal16);

				// ....................................................................................

				// Saldo Awal Hari-17
				$salaw_17 = $this->m_bulan->saldo_awal($tanggal17);

				// Allocated Cash Hari-17
				$allo_17 = $this->m_bulan->allocated_cash($tanggal17);

				// Ready Cash Hari-17
				$read_17 = $this->m_bulan->ready_cash($tanggal17);

				// Kas Besar Cabang Hari-17
				$kbc_17 = $this->m_bulan->kbc($tanggal17);

				// Note Hari-17
				$note_17 = $this->m_bulan->note($tanggal17);

				// Status Closing Hari-17
				$closing_17 = $this->m_bulan->status_closing($tanggal17);

				// Deposito (Hari-17)
				$deposito_17 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal17)));

				// B2B (Hari-17)
				$b2b_17 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal17)));

				// CASH-IN Hari Ke-17
				$cashin_a17 = $this->m_bulan->tampil_cashin_a($tanggal17);
				$cashin_b17 = $this->m_bulan->tampil_cashin_b($tanggal17);
				$cashin_c17 = $this->m_bulan->tampil_cashin_c($tanggal17);
				$cashin_d17 = $this->m_bulan->tampil_cashin_d($tanggal17);
				$cashin_e17 = $this->m_bulan->tampil_cashin_e($tanggal17);
				$cashin_f17 = $this->m_bulan->tampil_cashin_f($tanggal17);
				$cashin_g17 = $this->m_bulan->tampil_cashin_g($tanggal17);
				$cashin_h17 = $this->m_bulan->tampil_cashin_h($tanggal17);
				$cashin_i17 = $this->m_bulan->tampil_cashin_i($tanggal17);
				$cashin_j17 = $this->m_bulan->tampil_cashin_j($tanggal17);
				$cashin_k17 = $this->m_bulan->tampil_cashin_k($tanggal17);
				$cashin_l17 = $this->m_bulan->tampil_cashin_l($tanggal17);
				$cashin_m17 = $this->m_bulan->tampil_cashin_m($tanggal17);
				$cashin_n17 = $this->m_bulan->tampil_cashin_n($tanggal17);
				$cashin_o17 = $this->m_bulan->tampil_cashin_o($tanggal17);
				$cashin_p17 = $this->m_bulan->tampil_cashin_p($tanggal17);
				$cashin_q17 = $this->m_bulan->tampil_cashin_q($tanggal17);
				$cashin_r17 = $this->m_bulan->tampil_cashin_r($tanggal17);
				$cashin_s17 = $this->m_bulan->tampil_cashin_s($tanggal17);
				$tCashinProj_17 = $this->m_bulan->totalCashinProj($tanggal17);
				$tCashinReal_17 = $this->m_bulan->totalCashinReal($tanggal17);

				// ....................................................................................

				// Saldo Awal Hari-18
				$salaw_18 = $this->m_bulan->saldo_awal($tanggal18);

				// Allocated Cash Hari-18
				$allo_18 = $this->m_bulan->allocated_cash($tanggal18);

				// Ready Cash Hari-18
				$read_18 = $this->m_bulan->ready_cash($tanggal18);

				// Kas Besar Cabang Hari-18
				$kbc_18 = $this->m_bulan->kbc($tanggal18);

				// Note Hari-18
				$note_18 = $this->m_bulan->note($tanggal18);

				// Status Closing Hari-18
				$closing_18 = $this->m_bulan->status_closing($tanggal18);

				// Deposito (Hari-18)
				$deposito_18 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal18)));

				// B2B (Hari-18)
				$b2b_18 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal18)));

				// CASH-IN Hari Ke-18
				$cashin_a18 = $this->m_bulan->tampil_cashin_a($tanggal18);
				$cashin_b18 = $this->m_bulan->tampil_cashin_b($tanggal18);
				$cashin_c18 = $this->m_bulan->tampil_cashin_c($tanggal18);
				$cashin_d18 = $this->m_bulan->tampil_cashin_d($tanggal18);
				$cashin_e18 = $this->m_bulan->tampil_cashin_e($tanggal18);
				$cashin_f18 = $this->m_bulan->tampil_cashin_f($tanggal18);
				$cashin_g18 = $this->m_bulan->tampil_cashin_g($tanggal18);
				$cashin_h18 = $this->m_bulan->tampil_cashin_h($tanggal18);
				$cashin_i18 = $this->m_bulan->tampil_cashin_i($tanggal18);
				$cashin_j18 = $this->m_bulan->tampil_cashin_j($tanggal18);
				$cashin_k18 = $this->m_bulan->tampil_cashin_k($tanggal18);
				$cashin_l18 = $this->m_bulan->tampil_cashin_l($tanggal18);
				$cashin_m18 = $this->m_bulan->tampil_cashin_m($tanggal18);
				$cashin_n18 = $this->m_bulan->tampil_cashin_n($tanggal18);
				$cashin_o18 = $this->m_bulan->tampil_cashin_o($tanggal18);
				$cashin_p18 = $this->m_bulan->tampil_cashin_p($tanggal18);
				$cashin_q18 = $this->m_bulan->tampil_cashin_q($tanggal18);
				$cashin_r18 = $this->m_bulan->tampil_cashin_r($tanggal18);
				$cashin_s18 = $this->m_bulan->tampil_cashin_s($tanggal18);
				$tCashinProj_18 = $this->m_bulan->totalCashinProj($tanggal18);
				$tCashinReal_18 = $this->m_bulan->totalCashinReal($tanggal18);

				// ....................................................................................

				// Saldo Awal Hari-19
				$salaw_19 = $this->m_bulan->saldo_awal($tanggal19);

				// Allocated Cash Hari-19
				$allo_19 = $this->m_bulan->allocated_cash($tanggal19);

				// Ready Cash Hari-19
				$read_19 = $this->m_bulan->ready_cash($tanggal19);

				// Kas Besar Cabang Hari-19
				$kbc_19 = $this->m_bulan->kbc($tanggal19);

				// Note Hari-19
				$note_19 = $this->m_bulan->note($tanggal19);

				// Status Closing Hari-19
				$closing_19 = $this->m_bulan->status_closing($tanggal19);

				// Deposito (Hari-19)
				$deposito_19 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal19)));

				// B2B (Hari-19)
				$b2b_19 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal19)));

				// CASH-IN Hari Ke-19
				$cashin_a19 = $this->m_bulan->tampil_cashin_a($tanggal19);
				$cashin_b19 = $this->m_bulan->tampil_cashin_b($tanggal19);
				$cashin_c19 = $this->m_bulan->tampil_cashin_c($tanggal19);
				$cashin_d19 = $this->m_bulan->tampil_cashin_d($tanggal19);
				$cashin_e19 = $this->m_bulan->tampil_cashin_e($tanggal19);
				$cashin_f19 = $this->m_bulan->tampil_cashin_f($tanggal19);
				$cashin_g19 = $this->m_bulan->tampil_cashin_g($tanggal19);
				$cashin_h19 = $this->m_bulan->tampil_cashin_h($tanggal19);
				$cashin_i19 = $this->m_bulan->tampil_cashin_i($tanggal19);
				$cashin_j19 = $this->m_bulan->tampil_cashin_j($tanggal19);
				$cashin_k19 = $this->m_bulan->tampil_cashin_k($tanggal19);
				$cashin_l19 = $this->m_bulan->tampil_cashin_l($tanggal19);
				$cashin_m19 = $this->m_bulan->tampil_cashin_m($tanggal19);
				$cashin_n19 = $this->m_bulan->tampil_cashin_n($tanggal19);
				$cashin_o19 = $this->m_bulan->tampil_cashin_o($tanggal19);
				$cashin_p19 = $this->m_bulan->tampil_cashin_p($tanggal19);
				$cashin_q19 = $this->m_bulan->tampil_cashin_q($tanggal19);
				$cashin_r19 = $this->m_bulan->tampil_cashin_r($tanggal19);
				$cashin_s19 = $this->m_bulan->tampil_cashin_s($tanggal19);
				$tCashinProj_19 = $this->m_bulan->totalCashinProj($tanggal19);
				$tCashinReal_19 = $this->m_bulan->totalCashinReal($tanggal19);

				// ....................................................................................

				// Saldo Awal Hari-20
				$salaw_20 = $this->m_bulan->saldo_awal($tanggal20);

				// Allocated Cash Hari-20
				$allo_20 = $this->m_bulan->allocated_cash($tanggal20);

				// Ready Cash Hari-20
				$read_20 = $this->m_bulan->ready_cash($tanggal20);

				// Kas Besar Cabang Hari-20
				$kbc_20 = $this->m_bulan->kbc($tanggal20);

				// Note Hari-20
				$note_20 = $this->m_bulan->note($tanggal20);

				// Status Closing Hari-20
				$closing_20 = $this->m_bulan->status_closing($tanggal20);

				// Deposito (Hari-20)
				$deposito_20 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal20)));

				// B2B (Hari-20)
				$b2b_20 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal20)));

				// CASH-IN Hari Ke-20
				$cashin_a20 = $this->m_bulan->tampil_cashin_a($tanggal20);
				$cashin_b20 = $this->m_bulan->tampil_cashin_b($tanggal20);
				$cashin_c20 = $this->m_bulan->tampil_cashin_c($tanggal20);
				$cashin_d20 = $this->m_bulan->tampil_cashin_d($tanggal20);
				$cashin_e20 = $this->m_bulan->tampil_cashin_e($tanggal20);
				$cashin_f20 = $this->m_bulan->tampil_cashin_f($tanggal20);
				$cashin_g20 = $this->m_bulan->tampil_cashin_g($tanggal20);
				$cashin_h20 = $this->m_bulan->tampil_cashin_h($tanggal20);
				$cashin_i20 = $this->m_bulan->tampil_cashin_i($tanggal20);
				$cashin_j20 = $this->m_bulan->tampil_cashin_j($tanggal20);
				$cashin_k20 = $this->m_bulan->tampil_cashin_k($tanggal20);
				$cashin_l20 = $this->m_bulan->tampil_cashin_l($tanggal20);
				$cashin_m20 = $this->m_bulan->tampil_cashin_m($tanggal20);
				$cashin_n20 = $this->m_bulan->tampil_cashin_n($tanggal20);
				$cashin_o20 = $this->m_bulan->tampil_cashin_o($tanggal20);
				$cashin_p20 = $this->m_bulan->tampil_cashin_p($tanggal20);
				$cashin_q20 = $this->m_bulan->tampil_cashin_q($tanggal20);
				$cashin_r20 = $this->m_bulan->tampil_cashin_r($tanggal20);
				$cashin_s20 = $this->m_bulan->tampil_cashin_s($tanggal20);
				$tCashinProj_20 = $this->m_bulan->totalCashinProj($tanggal20);
				$tCashinReal_20 = $this->m_bulan->totalCashinReal($tanggal20);

				// ....................................................................................

				// Saldo Awal Hari-21
				$salaw_21 = $this->m_bulan->saldo_awal($tanggal21);

				// Allocated Cash Hari-21
				$allo_21 = $this->m_bulan->allocated_cash($tanggal21);

				// Ready Cash Hari-21
				$read_21 = $this->m_bulan->ready_cash($tanggal21);

				// Kas Besar Cabang Hari-21
				$kbc_21 = $this->m_bulan->kbc($tanggal21);

				// Note Hari-21
				$note_21 = $this->m_bulan->note($tanggal21);

				// Status Closing Hari-21
				$closing_21 = $this->m_bulan->status_closing($tanggal21);

				// Deposito (Hari-21)
				$deposito_21 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal21)));

				// B2B (Hari-21)
				$b2b_21 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal21)));

				// CASH-IN Hari Ke-21
				$cashin_a21 = $this->m_bulan->tampil_cashin_a($tanggal21);
				$cashin_b21 = $this->m_bulan->tampil_cashin_b($tanggal21);
				$cashin_c21 = $this->m_bulan->tampil_cashin_c($tanggal21);
				$cashin_d21 = $this->m_bulan->tampil_cashin_d($tanggal21);
				$cashin_e21 = $this->m_bulan->tampil_cashin_e($tanggal21);
				$cashin_f21 = $this->m_bulan->tampil_cashin_f($tanggal21);
				$cashin_g21 = $this->m_bulan->tampil_cashin_g($tanggal21);
				$cashin_h21 = $this->m_bulan->tampil_cashin_h($tanggal21);
				$cashin_i21 = $this->m_bulan->tampil_cashin_i($tanggal21);
				$cashin_j21 = $this->m_bulan->tampil_cashin_j($tanggal21);
				$cashin_k21 = $this->m_bulan->tampil_cashin_k($tanggal21);
				$cashin_l21 = $this->m_bulan->tampil_cashin_l($tanggal21);
				$cashin_m21 = $this->m_bulan->tampil_cashin_m($tanggal21);
				$cashin_n21 = $this->m_bulan->tampil_cashin_n($tanggal21);
				$cashin_o21 = $this->m_bulan->tampil_cashin_o($tanggal21);
				$cashin_p21 = $this->m_bulan->tampil_cashin_p($tanggal21);
				$cashin_q21 = $this->m_bulan->tampil_cashin_q($tanggal21);
				$cashin_r21 = $this->m_bulan->tampil_cashin_r($tanggal21);
				$cashin_s21 = $this->m_bulan->tampil_cashin_s($tanggal21);
				$tCashinProj_21 = $this->m_bulan->totalCashinProj($tanggal21);
				$tCashinReal_21 = $this->m_bulan->totalCashinReal($tanggal21);

				// ....................................................................................

				// Saldo Awal Hari-22
				$salaw_22 = $this->m_bulan->saldo_awal($tanggal22);

				// Allocated Cash Hari-22
				$allo_22 = $this->m_bulan->allocated_cash($tanggal22);

				// Ready Cash Hari-22
				$read_22 = $this->m_bulan->ready_cash($tanggal22);

				// Kas Besar Cabang Hari-22
				$kbc_22 = $this->m_bulan->kbc($tanggal22);

				// Note Hari-22
				$note_22 = $this->m_bulan->note($tanggal22);

				// Status Closing Hari-22
				$closing_22 = $this->m_bulan->status_closing($tanggal22);

				// Deposito (Hari-22)
				$deposito_22 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal22)));

				// B2B (Hari-22)
				$b2b_22 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal22)));

				// CASH-IN Hari Ke-22
				$cashin_a22 = $this->m_bulan->tampil_cashin_a($tanggal22);
				$cashin_b22 = $this->m_bulan->tampil_cashin_b($tanggal22);
				$cashin_c22 = $this->m_bulan->tampil_cashin_c($tanggal22);
				$cashin_d22 = $this->m_bulan->tampil_cashin_d($tanggal22);
				$cashin_e22 = $this->m_bulan->tampil_cashin_e($tanggal22);
				$cashin_f22 = $this->m_bulan->tampil_cashin_f($tanggal22);
				$cashin_g22 = $this->m_bulan->tampil_cashin_g($tanggal22);
				$cashin_h22 = $this->m_bulan->tampil_cashin_h($tanggal22);
				$cashin_i22 = $this->m_bulan->tampil_cashin_i($tanggal22);
				$cashin_j22 = $this->m_bulan->tampil_cashin_j($tanggal22);
				$cashin_k22 = $this->m_bulan->tampil_cashin_k($tanggal22);
				$cashin_l22 = $this->m_bulan->tampil_cashin_l($tanggal22);
				$cashin_m22 = $this->m_bulan->tampil_cashin_m($tanggal22);
				$cashin_n22 = $this->m_bulan->tampil_cashin_n($tanggal22);
				$cashin_o22 = $this->m_bulan->tampil_cashin_o($tanggal22);
				$cashin_p22 = $this->m_bulan->tampil_cashin_p($tanggal22);
				$cashin_q22 = $this->m_bulan->tampil_cashin_q($tanggal22);
				$cashin_r22 = $this->m_bulan->tampil_cashin_r($tanggal22);
				$cashin_s22 = $this->m_bulan->tampil_cashin_s($tanggal22);
				$tCashinProj_22 = $this->m_bulan->totalCashinProj($tanggal22);
				$tCashinReal_22 = $this->m_bulan->totalCashinReal($tanggal22);

				// ....................................................................................

				// Saldo Awal Hari-23
				$salaw_23 = $this->m_bulan->saldo_awal($tanggal23);

				// Allocated Cash Hari-23
				$allo_23 = $this->m_bulan->allocated_cash($tanggal23);

				// Ready Cash Hari-23
				$read_23 = $this->m_bulan->ready_cash($tanggal23);

				// Kas Besar Cabang Hari-23
				$kbc_23 = $this->m_bulan->kbc($tanggal23);

				// Note Hari-23
				$note_23 = $this->m_bulan->note($tanggal23);

				// Status Closing Hari-23
				$closing_23 = $this->m_bulan->status_closing($tanggal23);

				// Deposito (Hari-23)
				$deposito_23 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal23)));

				// B2B (Hari-23)
				$b2b_23 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal23)));

				// CASH-IN Hari Ke-23
				$cashin_a23 = $this->m_bulan->tampil_cashin_a($tanggal23);
				$cashin_b23 = $this->m_bulan->tampil_cashin_b($tanggal23);
				$cashin_c23 = $this->m_bulan->tampil_cashin_c($tanggal23);
				$cashin_d23 = $this->m_bulan->tampil_cashin_d($tanggal23);
				$cashin_e23 = $this->m_bulan->tampil_cashin_e($tanggal23);
				$cashin_f23 = $this->m_bulan->tampil_cashin_f($tanggal23);
				$cashin_g23 = $this->m_bulan->tampil_cashin_g($tanggal23);
				$cashin_h23 = $this->m_bulan->tampil_cashin_h($tanggal23);
				$cashin_i23 = $this->m_bulan->tampil_cashin_i($tanggal23);
				$cashin_j23 = $this->m_bulan->tampil_cashin_j($tanggal23);
				$cashin_k23 = $this->m_bulan->tampil_cashin_k($tanggal23);
				$cashin_l23 = $this->m_bulan->tampil_cashin_l($tanggal23);
				$cashin_m23 = $this->m_bulan->tampil_cashin_m($tanggal23);
				$cashin_n23 = $this->m_bulan->tampil_cashin_n($tanggal23);
				$cashin_o23 = $this->m_bulan->tampil_cashin_o($tanggal23);
				$cashin_p23 = $this->m_bulan->tampil_cashin_p($tanggal23);
				$cashin_q23 = $this->m_bulan->tampil_cashin_q($tanggal23);
				$cashin_r23 = $this->m_bulan->tampil_cashin_r($tanggal23);
				$cashin_s23 = $this->m_bulan->tampil_cashin_s($tanggal23);
				$tCashinProj_23 = $this->m_bulan->totalCashinProj($tanggal23);
				$tCashinReal_23 = $this->m_bulan->totalCashinReal($tanggal23);

				// ....................................................................................

				// Saldo Awal Hari-24
				$salaw_24 = $this->m_bulan->saldo_awal($tanggal24);

				// Allocated Cash Hari-24
				$allo_24 = $this->m_bulan->allocated_cash($tanggal24);

				// Ready Cash Hari-24
				$read_24 = $this->m_bulan->ready_cash($tanggal24);

				// Kas Besar Cabang Hari-24
				$kbc_24 = $this->m_bulan->kbc($tanggal24);

				// Note Hari-24
				$note_24 = $this->m_bulan->note($tanggal24);

				// Status Closing Hari-24
				$closing_24 = $this->m_bulan->status_closing($tanggal24);

				// Deposito (Hari-24)
				$deposito_24 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal24)));

				// B2B (Hari-24)
				$b2b_24 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal24)));

				// CASH-IN Hari Ke-24
				$cashin_a24 = $this->m_bulan->tampil_cashin_a($tanggal24);
				$cashin_b24 = $this->m_bulan->tampil_cashin_b($tanggal24);
				$cashin_c24 = $this->m_bulan->tampil_cashin_c($tanggal24);
				$cashin_d24 = $this->m_bulan->tampil_cashin_d($tanggal24);
				$cashin_e24 = $this->m_bulan->tampil_cashin_e($tanggal24);
				$cashin_f24 = $this->m_bulan->tampil_cashin_f($tanggal24);
				$cashin_g24 = $this->m_bulan->tampil_cashin_g($tanggal24);
				$cashin_h24 = $this->m_bulan->tampil_cashin_h($tanggal24);
				$cashin_i24 = $this->m_bulan->tampil_cashin_i($tanggal24);
				$cashin_j24 = $this->m_bulan->tampil_cashin_j($tanggal24);
				$cashin_k24 = $this->m_bulan->tampil_cashin_k($tanggal24);
				$cashin_l24 = $this->m_bulan->tampil_cashin_l($tanggal24);
				$cashin_m24 = $this->m_bulan->tampil_cashin_m($tanggal24);
				$cashin_n24 = $this->m_bulan->tampil_cashin_n($tanggal24);
				$cashin_o24 = $this->m_bulan->tampil_cashin_o($tanggal24);
				$cashin_p24 = $this->m_bulan->tampil_cashin_p($tanggal24);
				$cashin_q24 = $this->m_bulan->tampil_cashin_q($tanggal24);
				$cashin_r24 = $this->m_bulan->tampil_cashin_r($tanggal24);
				$cashin_s24 = $this->m_bulan->tampil_cashin_s($tanggal24);
				$tCashinProj_24 = $this->m_bulan->totalCashinProj($tanggal24);
				$tCashinReal_24 = $this->m_bulan->totalCashinReal($tanggal24);

				// ....................................................................................

				// Saldo Awal Hari-25
				$salaw_25 = $this->m_bulan->saldo_awal($tanggal25);

				// Allocated Cash Hari-25
				$allo_25 = $this->m_bulan->allocated_cash($tanggal25);

				// Ready Cash Hari-25
				$read_25 = $this->m_bulan->ready_cash($tanggal25);

				// Kas Besar Cabang Hari-25
				$kbc_25 = $this->m_bulan->kbc($tanggal25);

				// Note Hari-25
				$note_25 = $this->m_bulan->note($tanggal25);

				// Status Closing Hari-25
				$closing_25 = $this->m_bulan->status_closing($tanggal25);

				// Deposito (Hari-25)
				$deposito_25 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal25)));

				// B2B (Hari-25)
				$b2b_25 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal25)));

				// CASH-IN Hari Ke-25
				$cashin_a25 = $this->m_bulan->tampil_cashin_a($tanggal25);
				$cashin_b25 = $this->m_bulan->tampil_cashin_b($tanggal25);
				$cashin_c25 = $this->m_bulan->tampil_cashin_c($tanggal25);
				$cashin_d25 = $this->m_bulan->tampil_cashin_d($tanggal25);
				$cashin_e25 = $this->m_bulan->tampil_cashin_e($tanggal25);
				$cashin_f25 = $this->m_bulan->tampil_cashin_f($tanggal25);
				$cashin_g25 = $this->m_bulan->tampil_cashin_g($tanggal25);
				$cashin_h25 = $this->m_bulan->tampil_cashin_h($tanggal25);
				$cashin_i25 = $this->m_bulan->tampil_cashin_i($tanggal25);
				$cashin_j25 = $this->m_bulan->tampil_cashin_j($tanggal25);
				$cashin_k25 = $this->m_bulan->tampil_cashin_k($tanggal25);
				$cashin_l25 = $this->m_bulan->tampil_cashin_l($tanggal25);
				$cashin_m25 = $this->m_bulan->tampil_cashin_m($tanggal25);
				$cashin_n25 = $this->m_bulan->tampil_cashin_n($tanggal25);
				$cashin_o25 = $this->m_bulan->tampil_cashin_o($tanggal25);
				$cashin_p25 = $this->m_bulan->tampil_cashin_p($tanggal25);
				$cashin_q25 = $this->m_bulan->tampil_cashin_q($tanggal25);
				$cashin_r25 = $this->m_bulan->tampil_cashin_r($tanggal25);
				$cashin_s25 = $this->m_bulan->tampil_cashin_s($tanggal25);
				$tCashinProj_25 = $this->m_bulan->totalCashinProj($tanggal25);
				$tCashinReal_25 = $this->m_bulan->totalCashinReal($tanggal25);

				// ...................................................................................

				// CASH-OUT Hari Ke-1
				$cashout_a1 = $this->m_bulan->tampil_cashout_a($tanggal1);
				$cashout_b1 = $this->m_bulan->tampil_cashout_b($tanggal1);
				$cashout_c1 = $this->m_bulan->tampil_cashout_c($tanggal1);
				$cashout_d1 = $this->m_bulan->tampil_cashout_d($tanggal1);
				$cashout_e1 = $this->m_bulan->tampil_cashout_e($tanggal1);
				$cashout_f1 = $this->m_bulan->tampil_cashout_f($tanggal1);
				$cashout_g1 = $this->m_bulan->tampil_cashout_g($tanggal1);
				$cashout_h1 = $this->m_bulan->tampil_cashout_h($tanggal1);
				$cashout_i1 = $this->m_bulan->tampil_cashout_i($tanggal1);
				$cashout_j1 = $this->m_bulan->tampil_cashout_j($tanggal1);
				$cashout_k1 = $this->m_bulan->tampil_cashout_k($tanggal1);
				$cashout_l1 = $this->m_bulan->tampil_cashout_l($tanggal1);
				$cashout_m1 = $this->m_bulan->tampil_cashout_m($tanggal1);
				$cashout_n1 = $this->m_bulan->tampil_cashout_n($tanggal1);
				$cashout_o1 = $this->m_bulan->tampil_cashout_o($tanggal1);
				$cashout_p1 = $this->m_bulan->tampil_cashout_p($tanggal1);
				$cashout_q1 = $this->m_bulan->tampil_cashout_q($tanggal1);
				$cashout_r1 = $this->m_bulan->tampil_cashout_r($tanggal1);
				$cashout_s1 = $this->m_bulan->tampil_cashout_s($tanggal1);
				$cashout_t1 = $this->m_bulan->tampil_cashout_t($tanggal1);
				$cashout_u1 = $this->m_bulan->tampil_cashout_u($tanggal1);
				$cashout_v1 = $this->m_bulan->tampil_cashout_v($tanggal1);
				$cashout_w1 = $this->m_bulan->tampil_cashout_w($tanggal1);
				$cashout_x1 = $this->m_bulan->tampil_cashout_x($tanggal1);
				$cashout_y1 = $this->m_bulan->tampil_cashout_y($tanggal1);
				$cashout_z1 = $this->m_bulan->tampil_cashout_z($tanggal1);
				$cashout_a21 = $this->m_bulan->tampil_cashout_a2($tanggal1);
				$cashout_b21 = $this->m_bulan->tampil_cashout_b2($tanggal1);
				$cashout_c21 = $this->m_bulan->tampil_cashout_c2($tanggal1);
				$cashout_d21 = $this->m_bulan->tampil_cashout_d2($tanggal1);
				$cashout_e21 = $this->m_bulan->tampil_cashout_e2($tanggal1);
				$cashout_f21 = $this->m_bulan->tampil_cashout_f2($tanggal1);
				$cashout_g21 = $this->m_bulan->tampil_cashout_g2($tanggal1);
				$cashout_h21 = $this->m_bulan->tampil_cashout_h2($tanggal1);
				$cashout_i21 = $this->m_bulan->tampil_cashout_i2($tanggal1);
				$cashout_j21 = $this->m_bulan->tampil_cashout_j2($tanggal1);
				$cashout_k21 = $this->m_bulan->tampil_cashout_k2($tanggal1);
				$cashout_l21 = $this->m_bulan->tampil_cashout_l2($tanggal1);
				$cashout_m21 = $this->m_bulan->tampil_cashout_m2($tanggal1);
				$cashout_n21 = $this->m_bulan->tampil_cashout_n2($tanggal1);
				$cashout_o21 = $this->m_bulan->tampil_cashout_o2($tanggal1);
				$cashout_p21 = $this->m_bulan->tampil_cashout_p2($tanggal1);
				$cashout_q21 = $this->m_bulan->tampil_cashout_q2($tanggal1);
				$cashout_r21 = $this->m_bulan->tampil_cashout_r2($tanggal1);
				$cashout_s21 = $this->m_bulan->tampil_cashout_s2($tanggal1);
				$cashout_t21 = $this->m_bulan->tampil_cashout_t2($tanggal1);
				$cashout_u21 = $this->m_bulan->tampil_cashout_u2($tanggal1);
				$cashout_v21 = $this->m_bulan->tampil_cashout_v2($tanggal1);
				$cashout_w21 = $this->m_bulan->tampil_cashout_w2($tanggal1);
				$cashout_x21 = $this->m_bulan->tampil_cashout_x2($tanggal1);
				$cashout_y21 = $this->m_bulan->tampil_cashout_y2($tanggal1);
				$cashout_z21 = $this->m_bulan->tampil_cashout_z2($tanggal1);
				$cashout_a31 = $this->m_bulan->tampil_cashout_a3($tanggal1);
				$cashout_b31 = $this->m_bulan->tampil_cashout_b3($tanggal1);
				$cashout_c31 = $this->m_bulan->tampil_cashout_c3($tanggal1);
				$cashout_d31 = $this->m_bulan->tampil_cashout_d3($tanggal1);
				$cashout_e31 = $this->m_bulan->tampil_cashout_e3($tanggal1);
				$cashout_f31 = $this->m_bulan->tampil_cashout_f3($tanggal1);
				$cashout_g31 = $this->m_bulan->tampil_cashout_g3($tanggal1);
				$cashout_h31 = $this->m_bulan->tampil_cashout_h3($tanggal1);
				$cashout_i31 = $this->m_bulan->tampil_cashout_i3($tanggal1);
				$cashout_j31 = $this->m_bulan->tampil_cashout_j3($tanggal1);
				$cashout_k31 = $this->m_bulan->tampil_cashout_k3($tanggal1);
				$cashout_l31 = $this->m_bulan->tampil_cashout_l3($tanggal1);
				$tCashoutProj_1 = $this->m_bulan->totalCashoutProj($tanggal1);
				$tCashoutReal_1 = $this->m_bulan->totalCashoutReal($tanggal1);


				// CASH-OUT Hari Ke-2
				$cashout_a2 = $this->m_bulan->tampil_cashout_a($tanggal2);
				$cashout_b2 = $this->m_bulan->tampil_cashout_b($tanggal2);
				$cashout_c2 = $this->m_bulan->tampil_cashout_c($tanggal2);
				$cashout_d2 = $this->m_bulan->tampil_cashout_d($tanggal2);
				$cashout_e2 = $this->m_bulan->tampil_cashout_e($tanggal2);
				$cashout_f2 = $this->m_bulan->tampil_cashout_f($tanggal2);
				$cashout_g2 = $this->m_bulan->tampil_cashout_g($tanggal2);
				$cashout_h2 = $this->m_bulan->tampil_cashout_h($tanggal2);
				$cashout_i2 = $this->m_bulan->tampil_cashout_i($tanggal2);
				$cashout_j2 = $this->m_bulan->tampil_cashout_j($tanggal2);
				$cashout_k2 = $this->m_bulan->tampil_cashout_k($tanggal2);
				$cashout_l2 = $this->m_bulan->tampil_cashout_l($tanggal2);
				$cashout_m2 = $this->m_bulan->tampil_cashout_m($tanggal2);
				$cashout_n2 = $this->m_bulan->tampil_cashout_n($tanggal2);
				$cashout_o2 = $this->m_bulan->tampil_cashout_o($tanggal2);
				$cashout_p2 = $this->m_bulan->tampil_cashout_p($tanggal2);
				$cashout_q2 = $this->m_bulan->tampil_cashout_q($tanggal2);
				$cashout_r2 = $this->m_bulan->tampil_cashout_r($tanggal2);
				$cashout_s2 = $this->m_bulan->tampil_cashout_s($tanggal2);
				$cashout_t2 = $this->m_bulan->tampil_cashout_t($tanggal2);
				$cashout_u2 = $this->m_bulan->tampil_cashout_u($tanggal2);
				$cashout_v2 = $this->m_bulan->tampil_cashout_v($tanggal2);
				$cashout_w2 = $this->m_bulan->tampil_cashout_w($tanggal2);
				$cashout_x2 = $this->m_bulan->tampil_cashout_x($tanggal2);
				$cashout_y2 = $this->m_bulan->tampil_cashout_y($tanggal2);
				$cashout_z2 = $this->m_bulan->tampil_cashout_z($tanggal2);
				$cashout_a22 = $this->m_bulan->tampil_cashout_a2($tanggal2);
				$cashout_b22 = $this->m_bulan->tampil_cashout_b2($tanggal2);
				$cashout_c22 = $this->m_bulan->tampil_cashout_c2($tanggal2);
				$cashout_d22 = $this->m_bulan->tampil_cashout_d2($tanggal2);
				$cashout_e22 = $this->m_bulan->tampil_cashout_e2($tanggal2);
				$cashout_f22 = $this->m_bulan->tampil_cashout_f2($tanggal2);
				$cashout_g22 = $this->m_bulan->tampil_cashout_g2($tanggal2);
				$cashout_h22 = $this->m_bulan->tampil_cashout_h2($tanggal2);
				$cashout_i22 = $this->m_bulan->tampil_cashout_i2($tanggal2);
				$cashout_j22 = $this->m_bulan->tampil_cashout_j2($tanggal2);
				$cashout_k22 = $this->m_bulan->tampil_cashout_k2($tanggal2);
				$cashout_l22 = $this->m_bulan->tampil_cashout_l2($tanggal2);
				$cashout_m22 = $this->m_bulan->tampil_cashout_m2($tanggal2);
				$cashout_n22 = $this->m_bulan->tampil_cashout_n2($tanggal2);
				$cashout_o22 = $this->m_bulan->tampil_cashout_o2($tanggal2);
				$cashout_p22 = $this->m_bulan->tampil_cashout_p2($tanggal2);
				$cashout_q22 = $this->m_bulan->tampil_cashout_q2($tanggal2);
				$cashout_r22 = $this->m_bulan->tampil_cashout_r2($tanggal2);
				$cashout_s22 = $this->m_bulan->tampil_cashout_s2($tanggal2);
				$cashout_t22 = $this->m_bulan->tampil_cashout_t2($tanggal2);
				$cashout_u22 = $this->m_bulan->tampil_cashout_u2($tanggal2);
				$cashout_v22 = $this->m_bulan->tampil_cashout_v2($tanggal2);
				$cashout_w22 = $this->m_bulan->tampil_cashout_w2($tanggal2);
				$cashout_x22 = $this->m_bulan->tampil_cashout_x2($tanggal2);
				$cashout_y22 = $this->m_bulan->tampil_cashout_y2($tanggal2);
				$cashout_z22 = $this->m_bulan->tampil_cashout_z2($tanggal2);
				$cashout_a32 = $this->m_bulan->tampil_cashout_a3($tanggal2);
				$cashout_b32 = $this->m_bulan->tampil_cashout_b3($tanggal2);
				$cashout_c32 = $this->m_bulan->tampil_cashout_c3($tanggal2);
				$cashout_d32 = $this->m_bulan->tampil_cashout_d3($tanggal2);
				$cashout_e32 = $this->m_bulan->tampil_cashout_e3($tanggal2);
				$cashout_f32 = $this->m_bulan->tampil_cashout_f3($tanggal2);
				$cashout_g32 = $this->m_bulan->tampil_cashout_g3($tanggal2);
				$cashout_h32 = $this->m_bulan->tampil_cashout_h3($tanggal2);
				$cashout_i32 = $this->m_bulan->tampil_cashout_i3($tanggal2);
				$cashout_j32 = $this->m_bulan->tampil_cashout_j3($tanggal2);
				$cashout_k32 = $this->m_bulan->tampil_cashout_k3($tanggal2);
				$cashout_l32 = $this->m_bulan->tampil_cashout_l3($tanggal2);
				$tCashoutProj_2 = $this->m_bulan->totalCashoutProj($tanggal2);
				$tCashoutReal_2 = $this->m_bulan->totalCashoutReal($tanggal2);


				// CASH-OUT Hari Ke-3
				$cashout_a3 = $this->m_bulan->tampil_cashout_a($tanggal3);
				$cashout_b3 = $this->m_bulan->tampil_cashout_b($tanggal3);
				$cashout_c3 = $this->m_bulan->tampil_cashout_c($tanggal3);
				$cashout_d3 = $this->m_bulan->tampil_cashout_d($tanggal3);
				$cashout_e3 = $this->m_bulan->tampil_cashout_e($tanggal3);
				$cashout_f3 = $this->m_bulan->tampil_cashout_f($tanggal3);
				$cashout_g3 = $this->m_bulan->tampil_cashout_g($tanggal3);
				$cashout_h3 = $this->m_bulan->tampil_cashout_h($tanggal3);
				$cashout_i3 = $this->m_bulan->tampil_cashout_i($tanggal3);
				$cashout_j3 = $this->m_bulan->tampil_cashout_j($tanggal3);
				$cashout_k3 = $this->m_bulan->tampil_cashout_k($tanggal3);
				$cashout_l3 = $this->m_bulan->tampil_cashout_l($tanggal3);
				$cashout_m3 = $this->m_bulan->tampil_cashout_m($tanggal3);
				$cashout_n3 = $this->m_bulan->tampil_cashout_n($tanggal3);
				$cashout_o3 = $this->m_bulan->tampil_cashout_o($tanggal3);
				$cashout_p3 = $this->m_bulan->tampil_cashout_p($tanggal3);
				$cashout_q3 = $this->m_bulan->tampil_cashout_q($tanggal3);
				$cashout_r3 = $this->m_bulan->tampil_cashout_r($tanggal3);
				$cashout_s3 = $this->m_bulan->tampil_cashout_s($tanggal3);
				$cashout_t3 = $this->m_bulan->tampil_cashout_t($tanggal3);
				$cashout_u3 = $this->m_bulan->tampil_cashout_u($tanggal3);
				$cashout_v3 = $this->m_bulan->tampil_cashout_v($tanggal3);
				$cashout_w3 = $this->m_bulan->tampil_cashout_w($tanggal3);
				$cashout_x3 = $this->m_bulan->tampil_cashout_x($tanggal3);
				$cashout_y3 = $this->m_bulan->tampil_cashout_y($tanggal3);
				$cashout_z3 = $this->m_bulan->tampil_cashout_z($tanggal3);
				$cashout_a23 = $this->m_bulan->tampil_cashout_a2($tanggal3);
				$cashout_b23 = $this->m_bulan->tampil_cashout_b2($tanggal3);
				$cashout_c23 = $this->m_bulan->tampil_cashout_c2($tanggal3);
				$cashout_d23 = $this->m_bulan->tampil_cashout_d2($tanggal3);
				$cashout_e23 = $this->m_bulan->tampil_cashout_e2($tanggal3);
				$cashout_f23 = $this->m_bulan->tampil_cashout_f2($tanggal3);
				$cashout_g23 = $this->m_bulan->tampil_cashout_g2($tanggal3);
				$cashout_h23 = $this->m_bulan->tampil_cashout_h2($tanggal3);
				$cashout_i23 = $this->m_bulan->tampil_cashout_i2($tanggal3);
				$cashout_j23 = $this->m_bulan->tampil_cashout_j2($tanggal3);
				$cashout_k23 = $this->m_bulan->tampil_cashout_k2($tanggal3);
				$cashout_l23 = $this->m_bulan->tampil_cashout_l2($tanggal3);
				$cashout_m23 = $this->m_bulan->tampil_cashout_m2($tanggal3);
				$cashout_n23 = $this->m_bulan->tampil_cashout_n2($tanggal3);
				$cashout_o23 = $this->m_bulan->tampil_cashout_o2($tanggal3);
				$cashout_p23 = $this->m_bulan->tampil_cashout_p2($tanggal3);
				$cashout_q23 = $this->m_bulan->tampil_cashout_q2($tanggal3);
				$cashout_r23 = $this->m_bulan->tampil_cashout_r2($tanggal3);
				$cashout_s23 = $this->m_bulan->tampil_cashout_s2($tanggal3);
				$cashout_t23 = $this->m_bulan->tampil_cashout_t2($tanggal3);
				$cashout_u23 = $this->m_bulan->tampil_cashout_u2($tanggal3);
				$cashout_v23 = $this->m_bulan->tampil_cashout_v2($tanggal3);
				$cashout_w23 = $this->m_bulan->tampil_cashout_w2($tanggal3);
				$cashout_x23 = $this->m_bulan->tampil_cashout_x2($tanggal3);
				$cashout_y23 = $this->m_bulan->tampil_cashout_y2($tanggal3);
				$cashout_z23 = $this->m_bulan->tampil_cashout_z2($tanggal3);
				$cashout_a33 = $this->m_bulan->tampil_cashout_a3($tanggal3);
				$cashout_b33 = $this->m_bulan->tampil_cashout_b3($tanggal3);
				$cashout_c33 = $this->m_bulan->tampil_cashout_c3($tanggal3);
				$cashout_d33 = $this->m_bulan->tampil_cashout_d3($tanggal3);
				$cashout_e33 = $this->m_bulan->tampil_cashout_e3($tanggal3);
				$cashout_f33 = $this->m_bulan->tampil_cashout_f3($tanggal3);
				$cashout_g33 = $this->m_bulan->tampil_cashout_g3($tanggal3);
				$cashout_h33 = $this->m_bulan->tampil_cashout_h3($tanggal3);
				$cashout_i33 = $this->m_bulan->tampil_cashout_i3($tanggal3);
				$cashout_j33 = $this->m_bulan->tampil_cashout_j3($tanggal3);
				$cashout_k33 = $this->m_bulan->tampil_cashout_k3($tanggal3);
				$cashout_l33 = $this->m_bulan->tampil_cashout_l3($tanggal3);
				$tCashoutProj_3 = $this->m_bulan->totalCashoutProj($tanggal3);
				$tCashoutReal_3 = $this->m_bulan->totalCashoutReal($tanggal3);


				// CASH-OUT Hari Ke-4
				$cashout_a4 = $this->m_bulan->tampil_cashout_a($tanggal4);
				$cashout_b4 = $this->m_bulan->tampil_cashout_b($tanggal4);
				$cashout_c4 = $this->m_bulan->tampil_cashout_c($tanggal4);
				$cashout_d4 = $this->m_bulan->tampil_cashout_d($tanggal4);
				$cashout_e4 = $this->m_bulan->tampil_cashout_e($tanggal4);
				$cashout_f4 = $this->m_bulan->tampil_cashout_f($tanggal4);
				$cashout_g4 = $this->m_bulan->tampil_cashout_g($tanggal4);
				$cashout_h4 = $this->m_bulan->tampil_cashout_h($tanggal4);
				$cashout_i4 = $this->m_bulan->tampil_cashout_i($tanggal4);
				$cashout_j4 = $this->m_bulan->tampil_cashout_j($tanggal4);
				$cashout_k4 = $this->m_bulan->tampil_cashout_k($tanggal4);
				$cashout_l4 = $this->m_bulan->tampil_cashout_l($tanggal4);
				$cashout_m4 = $this->m_bulan->tampil_cashout_m($tanggal4);
				$cashout_n4 = $this->m_bulan->tampil_cashout_n($tanggal4);
				$cashout_o4 = $this->m_bulan->tampil_cashout_o($tanggal4);
				$cashout_p4 = $this->m_bulan->tampil_cashout_p($tanggal4);
				$cashout_q4 = $this->m_bulan->tampil_cashout_q($tanggal4);
				$cashout_r4 = $this->m_bulan->tampil_cashout_r($tanggal4);
				$cashout_s4 = $this->m_bulan->tampil_cashout_s($tanggal4);
				$cashout_t4 = $this->m_bulan->tampil_cashout_t($tanggal4);
				$cashout_u4 = $this->m_bulan->tampil_cashout_u($tanggal4);
				$cashout_v4 = $this->m_bulan->tampil_cashout_v($tanggal4);
				$cashout_w4 = $this->m_bulan->tampil_cashout_w($tanggal4);
				$cashout_x4 = $this->m_bulan->tampil_cashout_x($tanggal4);
				$cashout_y4 = $this->m_bulan->tampil_cashout_y($tanggal4);
				$cashout_z4 = $this->m_bulan->tampil_cashout_z($tanggal4);
				$cashout_a24 = $this->m_bulan->tampil_cashout_a2($tanggal4);
				$cashout_b24 = $this->m_bulan->tampil_cashout_b2($tanggal4);
				$cashout_c24 = $this->m_bulan->tampil_cashout_c2($tanggal4);
				$cashout_d24 = $this->m_bulan->tampil_cashout_d2($tanggal4);
				$cashout_e24 = $this->m_bulan->tampil_cashout_e2($tanggal4);
				$cashout_f24 = $this->m_bulan->tampil_cashout_f2($tanggal4);
				$cashout_g24 = $this->m_bulan->tampil_cashout_g2($tanggal4);
				$cashout_h24 = $this->m_bulan->tampil_cashout_h2($tanggal4);
				$cashout_i24 = $this->m_bulan->tampil_cashout_i2($tanggal4);
				$cashout_j24 = $this->m_bulan->tampil_cashout_j2($tanggal4);
				$cashout_k24 = $this->m_bulan->tampil_cashout_k2($tanggal4);
				$cashout_l24 = $this->m_bulan->tampil_cashout_l2($tanggal4);
				$cashout_m24 = $this->m_bulan->tampil_cashout_m2($tanggal4);
				$cashout_n24 = $this->m_bulan->tampil_cashout_n2($tanggal4);
				$cashout_o24 = $this->m_bulan->tampil_cashout_o2($tanggal4);
				$cashout_p24 = $this->m_bulan->tampil_cashout_p2($tanggal4);
				$cashout_q24 = $this->m_bulan->tampil_cashout_q2($tanggal4);
				$cashout_r24 = $this->m_bulan->tampil_cashout_r2($tanggal4);
				$cashout_s24 = $this->m_bulan->tampil_cashout_s2($tanggal4);
				$cashout_t24 = $this->m_bulan->tampil_cashout_t2($tanggal4);
				$cashout_u24 = $this->m_bulan->tampil_cashout_u2($tanggal4);
				$cashout_v24 = $this->m_bulan->tampil_cashout_v2($tanggal4);
				$cashout_w24 = $this->m_bulan->tampil_cashout_w2($tanggal4);
				$cashout_x24 = $this->m_bulan->tampil_cashout_x2($tanggal4);
				$cashout_y24 = $this->m_bulan->tampil_cashout_y2($tanggal4);
				$cashout_z24 = $this->m_bulan->tampil_cashout_z2($tanggal4);
				$cashout_a34 = $this->m_bulan->tampil_cashout_a3($tanggal4);
				$cashout_b34 = $this->m_bulan->tampil_cashout_b3($tanggal4);
				$cashout_c34 = $this->m_bulan->tampil_cashout_c3($tanggal4);
				$cashout_d34 = $this->m_bulan->tampil_cashout_d3($tanggal4);
				$cashout_e34 = $this->m_bulan->tampil_cashout_e3($tanggal4);
				$cashout_f34 = $this->m_bulan->tampil_cashout_f3($tanggal4);
				$cashout_g34 = $this->m_bulan->tampil_cashout_g3($tanggal4);
				$cashout_h34 = $this->m_bulan->tampil_cashout_h3($tanggal4);
				$cashout_i34 = $this->m_bulan->tampil_cashout_i3($tanggal4);
				$cashout_j34 = $this->m_bulan->tampil_cashout_j3($tanggal4);
				$cashout_k34 = $this->m_bulan->tampil_cashout_k3($tanggal4);
				$cashout_l34 = $this->m_bulan->tampil_cashout_l3($tanggal4);
				$tCashoutProj_4 = $this->m_bulan->totalCashoutProj($tanggal4);
				$tCashoutReal_4 = $this->m_bulan->totalCashoutReal($tanggal4);


				// CASH-OUT Hari Ke-5
				$cashout_a5 = $this->m_bulan->tampil_cashout_a($tanggal5);
				$cashout_b5 = $this->m_bulan->tampil_cashout_b($tanggal5);
				$cashout_c5 = $this->m_bulan->tampil_cashout_c($tanggal5);
				$cashout_d5 = $this->m_bulan->tampil_cashout_d($tanggal5);
				$cashout_e5 = $this->m_bulan->tampil_cashout_e($tanggal5);
				$cashout_f5 = $this->m_bulan->tampil_cashout_f($tanggal5);
				$cashout_g5 = $this->m_bulan->tampil_cashout_g($tanggal5);
				$cashout_h5 = $this->m_bulan->tampil_cashout_h($tanggal5);
				$cashout_i5 = $this->m_bulan->tampil_cashout_i($tanggal5);
				$cashout_j5 = $this->m_bulan->tampil_cashout_j($tanggal5);
				$cashout_k5 = $this->m_bulan->tampil_cashout_k($tanggal5);
				$cashout_l5 = $this->m_bulan->tampil_cashout_l($tanggal5);
				$cashout_m5 = $this->m_bulan->tampil_cashout_m($tanggal5);
				$cashout_n5 = $this->m_bulan->tampil_cashout_n($tanggal5);
				$cashout_o5 = $this->m_bulan->tampil_cashout_o($tanggal5);
				$cashout_p5 = $this->m_bulan->tampil_cashout_p($tanggal5);
				$cashout_q5 = $this->m_bulan->tampil_cashout_q($tanggal5);
				$cashout_r5 = $this->m_bulan->tampil_cashout_r($tanggal5);
				$cashout_s5 = $this->m_bulan->tampil_cashout_s($tanggal5);
				$cashout_t5 = $this->m_bulan->tampil_cashout_t($tanggal5);
				$cashout_u5 = $this->m_bulan->tampil_cashout_u($tanggal5);
				$cashout_v5 = $this->m_bulan->tampil_cashout_v($tanggal5);
				$cashout_w5 = $this->m_bulan->tampil_cashout_w($tanggal5);
				$cashout_x5 = $this->m_bulan->tampil_cashout_x($tanggal5);
				$cashout_y5 = $this->m_bulan->tampil_cashout_y($tanggal5);
				$cashout_z5 = $this->m_bulan->tampil_cashout_z($tanggal5);
				$cashout_a25 = $this->m_bulan->tampil_cashout_a2($tanggal5);
				$cashout_b25 = $this->m_bulan->tampil_cashout_b2($tanggal5);
				$cashout_c25 = $this->m_bulan->tampil_cashout_c2($tanggal5);
				$cashout_d25 = $this->m_bulan->tampil_cashout_d2($tanggal5);
				$cashout_e25 = $this->m_bulan->tampil_cashout_e2($tanggal5);
				$cashout_f25 = $this->m_bulan->tampil_cashout_f2($tanggal5);
				$cashout_g25 = $this->m_bulan->tampil_cashout_g2($tanggal5);
				$cashout_h25 = $this->m_bulan->tampil_cashout_h2($tanggal5);
				$cashout_i25 = $this->m_bulan->tampil_cashout_i2($tanggal5);
				$cashout_j25 = $this->m_bulan->tampil_cashout_j2($tanggal5);
				$cashout_k25 = $this->m_bulan->tampil_cashout_k2($tanggal5);
				$cashout_l25 = $this->m_bulan->tampil_cashout_l2($tanggal5);
				$cashout_m25 = $this->m_bulan->tampil_cashout_m2($tanggal5);
				$cashout_n25 = $this->m_bulan->tampil_cashout_n2($tanggal5);
				$cashout_o25 = $this->m_bulan->tampil_cashout_o2($tanggal5);
				$cashout_p25 = $this->m_bulan->tampil_cashout_p2($tanggal5);
				$cashout_q25 = $this->m_bulan->tampil_cashout_q2($tanggal5);
				$cashout_r25 = $this->m_bulan->tampil_cashout_r2($tanggal5);
				$cashout_s25 = $this->m_bulan->tampil_cashout_s2($tanggal5);
				$cashout_t25 = $this->m_bulan->tampil_cashout_t2($tanggal5);
				$cashout_u25 = $this->m_bulan->tampil_cashout_u2($tanggal5);
				$cashout_v25 = $this->m_bulan->tampil_cashout_v2($tanggal5);
				$cashout_w25 = $this->m_bulan->tampil_cashout_w2($tanggal5);
				$cashout_x25 = $this->m_bulan->tampil_cashout_x2($tanggal5);
				$cashout_y25 = $this->m_bulan->tampil_cashout_y2($tanggal5);
				$cashout_z25 = $this->m_bulan->tampil_cashout_z2($tanggal5);
				$cashout_a35 = $this->m_bulan->tampil_cashout_a3($tanggal5);
				$cashout_b35 = $this->m_bulan->tampil_cashout_b3($tanggal5);
				$cashout_c35 = $this->m_bulan->tampil_cashout_c3($tanggal5);
				$cashout_d35 = $this->m_bulan->tampil_cashout_d3($tanggal5);
				$cashout_e35 = $this->m_bulan->tampil_cashout_e3($tanggal5);
				$cashout_f35 = $this->m_bulan->tampil_cashout_f3($tanggal5);
				$cashout_g35 = $this->m_bulan->tampil_cashout_g3($tanggal5);
				$cashout_h35 = $this->m_bulan->tampil_cashout_h3($tanggal5);
				$cashout_i35 = $this->m_bulan->tampil_cashout_i3($tanggal5);
				$cashout_j35 = $this->m_bulan->tampil_cashout_j3($tanggal5);
				$cashout_k35 = $this->m_bulan->tampil_cashout_k3($tanggal5);
				$cashout_l35 = $this->m_bulan->tampil_cashout_l3($tanggal5);
				$tCashoutProj_5 = $this->m_bulan->totalCashoutProj($tanggal5);
				$tCashoutReal_5 = $this->m_bulan->totalCashoutReal($tanggal5);

				// CASH-OUT Hari Ke-6
				$cashout_a6 = $this->m_bulan->tampil_cashout_a($tanggal6);
				$cashout_b6 = $this->m_bulan->tampil_cashout_b($tanggal6);
				$cashout_c6 = $this->m_bulan->tampil_cashout_c($tanggal6);
				$cashout_d6 = $this->m_bulan->tampil_cashout_d($tanggal6);
				$cashout_e6 = $this->m_bulan->tampil_cashout_e($tanggal6);
				$cashout_f6 = $this->m_bulan->tampil_cashout_f($tanggal6);
				$cashout_g6 = $this->m_bulan->tampil_cashout_g($tanggal6);
				$cashout_h6 = $this->m_bulan->tampil_cashout_h($tanggal6);
				$cashout_i6 = $this->m_bulan->tampil_cashout_i($tanggal6);
				$cashout_j6 = $this->m_bulan->tampil_cashout_j($tanggal6);
				$cashout_k6 = $this->m_bulan->tampil_cashout_k($tanggal6);
				$cashout_l6 = $this->m_bulan->tampil_cashout_l($tanggal6);
				$cashout_m6 = $this->m_bulan->tampil_cashout_m($tanggal6);
				$cashout_n6 = $this->m_bulan->tampil_cashout_n($tanggal6);
				$cashout_o6 = $this->m_bulan->tampil_cashout_o($tanggal6);
				$cashout_p6 = $this->m_bulan->tampil_cashout_p($tanggal6);
				$cashout_q6 = $this->m_bulan->tampil_cashout_q($tanggal6);
				$cashout_r6 = $this->m_bulan->tampil_cashout_r($tanggal6);
				$cashout_s6 = $this->m_bulan->tampil_cashout_s($tanggal6);
				$cashout_t6 = $this->m_bulan->tampil_cashout_t($tanggal6);
				$cashout_u6 = $this->m_bulan->tampil_cashout_u($tanggal6);
				$cashout_v6 = $this->m_bulan->tampil_cashout_v($tanggal6);
				$cashout_w6 = $this->m_bulan->tampil_cashout_w($tanggal6);
				$cashout_x6 = $this->m_bulan->tampil_cashout_x($tanggal6);
				$cashout_y6 = $this->m_bulan->tampil_cashout_y($tanggal6);
				$cashout_z6 = $this->m_bulan->tampil_cashout_z($tanggal6);
				$cashout_a26 = $this->m_bulan->tampil_cashout_a2($tanggal6);
				$cashout_b26 = $this->m_bulan->tampil_cashout_b2($tanggal6);
				$cashout_c26 = $this->m_bulan->tampil_cashout_c2($tanggal6);
				$cashout_d26 = $this->m_bulan->tampil_cashout_d2($tanggal6);
				$cashout_e26 = $this->m_bulan->tampil_cashout_e2($tanggal6);
				$cashout_f26 = $this->m_bulan->tampil_cashout_f2($tanggal6);
				$cashout_g26 = $this->m_bulan->tampil_cashout_g2($tanggal6);
				$cashout_h26 = $this->m_bulan->tampil_cashout_h2($tanggal6);
				$cashout_i26 = $this->m_bulan->tampil_cashout_i2($tanggal6);
				$cashout_j26 = $this->m_bulan->tampil_cashout_j2($tanggal6);
				$cashout_k26 = $this->m_bulan->tampil_cashout_k2($tanggal6);
				$cashout_l26 = $this->m_bulan->tampil_cashout_l2($tanggal6);
				$cashout_m26 = $this->m_bulan->tampil_cashout_m2($tanggal6);
				$cashout_n26 = $this->m_bulan->tampil_cashout_n2($tanggal6);
				$cashout_o26 = $this->m_bulan->tampil_cashout_o2($tanggal6);
				$cashout_p26 = $this->m_bulan->tampil_cashout_p2($tanggal6);
				$cashout_q26 = $this->m_bulan->tampil_cashout_q2($tanggal6);
				$cashout_r26 = $this->m_bulan->tampil_cashout_r2($tanggal6);
				$cashout_s26 = $this->m_bulan->tampil_cashout_s2($tanggal6);
				$cashout_t26 = $this->m_bulan->tampil_cashout_t2($tanggal6);
				$cashout_u26 = $this->m_bulan->tampil_cashout_u2($tanggal6);
				$cashout_v26 = $this->m_bulan->tampil_cashout_v2($tanggal6);
				$cashout_w26 = $this->m_bulan->tampil_cashout_w2($tanggal6);
				$cashout_x26 = $this->m_bulan->tampil_cashout_x2($tanggal6);
				$cashout_y26 = $this->m_bulan->tampil_cashout_y2($tanggal6);
				$cashout_z26 = $this->m_bulan->tampil_cashout_z2($tanggal6);
				$cashout_a36 = $this->m_bulan->tampil_cashout_a3($tanggal6);
				$cashout_b36 = $this->m_bulan->tampil_cashout_b3($tanggal6);
				$cashout_c36 = $this->m_bulan->tampil_cashout_c3($tanggal6);
				$cashout_d36 = $this->m_bulan->tampil_cashout_d3($tanggal6);
				$cashout_e36 = $this->m_bulan->tampil_cashout_e3($tanggal6);
				$cashout_f36 = $this->m_bulan->tampil_cashout_f3($tanggal6);
				$cashout_g36 = $this->m_bulan->tampil_cashout_g3($tanggal6);
				$cashout_h36 = $this->m_bulan->tampil_cashout_h3($tanggal6);
				$cashout_i36 = $this->m_bulan->tampil_cashout_i3($tanggal6);
				$cashout_j36 = $this->m_bulan->tampil_cashout_j3($tanggal6);
				$cashout_k36 = $this->m_bulan->tampil_cashout_k3($tanggal6);
				$cashout_l36 = $this->m_bulan->tampil_cashout_l3($tanggal6);
				$tCashoutProj_6 = $this->m_bulan->totalCashoutProj($tanggal6);
				$tCashoutReal_6 = $this->m_bulan->totalCashoutReal($tanggal6);

				// CASH-OUT Hari Ke-7
				$cashout_a7 = $this->m_bulan->tampil_cashout_a($tanggal7);
				$cashout_b7 = $this->m_bulan->tampil_cashout_b($tanggal7);
				$cashout_c7 = $this->m_bulan->tampil_cashout_c($tanggal7);
				$cashout_d7 = $this->m_bulan->tampil_cashout_d($tanggal7);
				$cashout_e7 = $this->m_bulan->tampil_cashout_e($tanggal7);
				$cashout_f7 = $this->m_bulan->tampil_cashout_f($tanggal7);
				$cashout_g7 = $this->m_bulan->tampil_cashout_g($tanggal7);
				$cashout_h7 = $this->m_bulan->tampil_cashout_h($tanggal7);
				$cashout_i7 = $this->m_bulan->tampil_cashout_i($tanggal7);
				$cashout_j7 = $this->m_bulan->tampil_cashout_j($tanggal7);
				$cashout_k7 = $this->m_bulan->tampil_cashout_k($tanggal7);
				$cashout_l7 = $this->m_bulan->tampil_cashout_l($tanggal7);
				$cashout_m7 = $this->m_bulan->tampil_cashout_m($tanggal7);
				$cashout_n7 = $this->m_bulan->tampil_cashout_n($tanggal7);
				$cashout_o7 = $this->m_bulan->tampil_cashout_o($tanggal7);
				$cashout_p7 = $this->m_bulan->tampil_cashout_p($tanggal7);
				$cashout_q7 = $this->m_bulan->tampil_cashout_q($tanggal7);
				$cashout_r7 = $this->m_bulan->tampil_cashout_r($tanggal7);
				$cashout_s7 = $this->m_bulan->tampil_cashout_s($tanggal7);
				$cashout_t7 = $this->m_bulan->tampil_cashout_t($tanggal7);
				$cashout_u7 = $this->m_bulan->tampil_cashout_u($tanggal7);
				$cashout_v7 = $this->m_bulan->tampil_cashout_v($tanggal7);
				$cashout_w7 = $this->m_bulan->tampil_cashout_w($tanggal7);
				$cashout_x7 = $this->m_bulan->tampil_cashout_x($tanggal7);
				$cashout_y7 = $this->m_bulan->tampil_cashout_y($tanggal7);
				$cashout_z7 = $this->m_bulan->tampil_cashout_z($tanggal7);
				$cashout_a27 = $this->m_bulan->tampil_cashout_a2($tanggal7);
				$cashout_b27 = $this->m_bulan->tampil_cashout_b2($tanggal7);
				$cashout_c27 = $this->m_bulan->tampil_cashout_c2($tanggal7);
				$cashout_d27 = $this->m_bulan->tampil_cashout_d2($tanggal7);
				$cashout_e27 = $this->m_bulan->tampil_cashout_e2($tanggal7);
				$cashout_f27 = $this->m_bulan->tampil_cashout_f2($tanggal7);
				$cashout_g27 = $this->m_bulan->tampil_cashout_g2($tanggal7);
				$cashout_h27 = $this->m_bulan->tampil_cashout_h2($tanggal7);
				$cashout_i27 = $this->m_bulan->tampil_cashout_i2($tanggal7);
				$cashout_j27 = $this->m_bulan->tampil_cashout_j2($tanggal7);
				$cashout_k27 = $this->m_bulan->tampil_cashout_k2($tanggal7);
				$cashout_l27 = $this->m_bulan->tampil_cashout_l2($tanggal7);
				$cashout_m27 = $this->m_bulan->tampil_cashout_m2($tanggal7);
				$cashout_n27 = $this->m_bulan->tampil_cashout_n2($tanggal7);
				$cashout_o27 = $this->m_bulan->tampil_cashout_o2($tanggal7);
				$cashout_p27 = $this->m_bulan->tampil_cashout_p2($tanggal7);
				$cashout_q27 = $this->m_bulan->tampil_cashout_q2($tanggal7);
				$cashout_r27 = $this->m_bulan->tampil_cashout_r2($tanggal7);
				$cashout_s27 = $this->m_bulan->tampil_cashout_s2($tanggal7);
				$cashout_t27 = $this->m_bulan->tampil_cashout_t2($tanggal7);
				$cashout_u27 = $this->m_bulan->tampil_cashout_u2($tanggal7);
				$cashout_v27 = $this->m_bulan->tampil_cashout_v2($tanggal7);
				$cashout_w27 = $this->m_bulan->tampil_cashout_w2($tanggal7);
				$cashout_x27 = $this->m_bulan->tampil_cashout_x2($tanggal7);
				$cashout_y27 = $this->m_bulan->tampil_cashout_y2($tanggal7);
				$cashout_z27 = $this->m_bulan->tampil_cashout_z2($tanggal7);
				$cashout_a37 = $this->m_bulan->tampil_cashout_a3($tanggal7);
				$cashout_b37 = $this->m_bulan->tampil_cashout_b3($tanggal7);
				$cashout_c37 = $this->m_bulan->tampil_cashout_c3($tanggal7);
				$cashout_d37 = $this->m_bulan->tampil_cashout_d3($tanggal7);
				$cashout_e37 = $this->m_bulan->tampil_cashout_e3($tanggal7);
				$cashout_f37 = $this->m_bulan->tampil_cashout_f3($tanggal7);
				$cashout_g37 = $this->m_bulan->tampil_cashout_g3($tanggal7);
				$cashout_h37 = $this->m_bulan->tampil_cashout_h3($tanggal7);
				$cashout_i37 = $this->m_bulan->tampil_cashout_i3($tanggal7);
				$cashout_j37 = $this->m_bulan->tampil_cashout_j3($tanggal7);
				$cashout_k37 = $this->m_bulan->tampil_cashout_k3($tanggal7);
				$cashout_l37 = $this->m_bulan->tampil_cashout_l3($tanggal7);
				$tCashoutProj_7 = $this->m_bulan->totalCashoutProj($tanggal7);
				$tCashoutReal_7 = $this->m_bulan->totalCashoutReal($tanggal7);

				// CASH-OUT Hari Ke-8
				$cashout_a8 = $this->m_bulan->tampil_cashout_a($tanggal8);
				$cashout_b8 = $this->m_bulan->tampil_cashout_b($tanggal8);
				$cashout_c8 = $this->m_bulan->tampil_cashout_c($tanggal8);
				$cashout_d8 = $this->m_bulan->tampil_cashout_d($tanggal8);
				$cashout_e8 = $this->m_bulan->tampil_cashout_e($tanggal8);
				$cashout_f8 = $this->m_bulan->tampil_cashout_f($tanggal8);
				$cashout_g8 = $this->m_bulan->tampil_cashout_g($tanggal8);
				$cashout_h8 = $this->m_bulan->tampil_cashout_h($tanggal8);
				$cashout_i8 = $this->m_bulan->tampil_cashout_i($tanggal8);
				$cashout_j8 = $this->m_bulan->tampil_cashout_j($tanggal8);
				$cashout_k8 = $this->m_bulan->tampil_cashout_k($tanggal8);
				$cashout_l8 = $this->m_bulan->tampil_cashout_l($tanggal8);
				$cashout_m8 = $this->m_bulan->tampil_cashout_m($tanggal8);
				$cashout_n8 = $this->m_bulan->tampil_cashout_n($tanggal8);
				$cashout_o8 = $this->m_bulan->tampil_cashout_o($tanggal8);
				$cashout_p8 = $this->m_bulan->tampil_cashout_p($tanggal8);
				$cashout_q8 = $this->m_bulan->tampil_cashout_q($tanggal8);
				$cashout_r8 = $this->m_bulan->tampil_cashout_r($tanggal8);
				$cashout_s8 = $this->m_bulan->tampil_cashout_s($tanggal8);
				$cashout_t8 = $this->m_bulan->tampil_cashout_t($tanggal8);
				$cashout_u8 = $this->m_bulan->tampil_cashout_u($tanggal8);
				$cashout_v8 = $this->m_bulan->tampil_cashout_v($tanggal8);
				$cashout_w8 = $this->m_bulan->tampil_cashout_w($tanggal8);
				$cashout_x8 = $this->m_bulan->tampil_cashout_x($tanggal8);
				$cashout_y8 = $this->m_bulan->tampil_cashout_y($tanggal8);
				$cashout_z8 = $this->m_bulan->tampil_cashout_z($tanggal8);
				$cashout_a28 = $this->m_bulan->tampil_cashout_a2($tanggal8);
				$cashout_b28 = $this->m_bulan->tampil_cashout_b2($tanggal8);
				$cashout_c28 = $this->m_bulan->tampil_cashout_c2($tanggal8);
				$cashout_d28 = $this->m_bulan->tampil_cashout_d2($tanggal8);
				$cashout_e28 = $this->m_bulan->tampil_cashout_e2($tanggal8);
				$cashout_f28 = $this->m_bulan->tampil_cashout_f2($tanggal8);
				$cashout_g28 = $this->m_bulan->tampil_cashout_g2($tanggal8);
				$cashout_h28 = $this->m_bulan->tampil_cashout_h2($tanggal8);
				$cashout_i28 = $this->m_bulan->tampil_cashout_i2($tanggal8);
				$cashout_j28 = $this->m_bulan->tampil_cashout_j2($tanggal8);
				$cashout_k28 = $this->m_bulan->tampil_cashout_k2($tanggal8);
				$cashout_l28 = $this->m_bulan->tampil_cashout_l2($tanggal8);
				$cashout_m28 = $this->m_bulan->tampil_cashout_m2($tanggal8);
				$cashout_n28 = $this->m_bulan->tampil_cashout_n2($tanggal8);
				$cashout_o28 = $this->m_bulan->tampil_cashout_o2($tanggal8);
				$cashout_p28 = $this->m_bulan->tampil_cashout_p2($tanggal8);
				$cashout_q28 = $this->m_bulan->tampil_cashout_q2($tanggal8);
				$cashout_r28 = $this->m_bulan->tampil_cashout_r2($tanggal8);
				$cashout_s28 = $this->m_bulan->tampil_cashout_s2($tanggal8);
				$cashout_t28 = $this->m_bulan->tampil_cashout_t2($tanggal8);
				$cashout_u28 = $this->m_bulan->tampil_cashout_u2($tanggal8);
				$cashout_v28 = $this->m_bulan->tampil_cashout_v2($tanggal8);
				$cashout_w28 = $this->m_bulan->tampil_cashout_w2($tanggal8);
				$cashout_x28 = $this->m_bulan->tampil_cashout_x2($tanggal8);
				$cashout_y28 = $this->m_bulan->tampil_cashout_y2($tanggal8);
				$cashout_z28 = $this->m_bulan->tampil_cashout_z2($tanggal8);
				$cashout_a38 = $this->m_bulan->tampil_cashout_a3($tanggal8);
				$cashout_b38 = $this->m_bulan->tampil_cashout_b3($tanggal8);
				$cashout_c38 = $this->m_bulan->tampil_cashout_c3($tanggal8);
				$cashout_d38 = $this->m_bulan->tampil_cashout_d3($tanggal8);
				$cashout_e38 = $this->m_bulan->tampil_cashout_e3($tanggal8);
				$cashout_f38 = $this->m_bulan->tampil_cashout_f3($tanggal8);
				$cashout_g38 = $this->m_bulan->tampil_cashout_g3($tanggal8);
				$cashout_h38 = $this->m_bulan->tampil_cashout_h3($tanggal8);
				$cashout_i38 = $this->m_bulan->tampil_cashout_i3($tanggal8);
				$cashout_j38 = $this->m_bulan->tampil_cashout_j3($tanggal8);
				$cashout_k38 = $this->m_bulan->tampil_cashout_k3($tanggal8);
				$cashout_l38 = $this->m_bulan->tampil_cashout_l3($tanggal8);
				$tCashoutProj_8 = $this->m_bulan->totalCashoutProj($tanggal8);
				$tCashoutReal_8 = $this->m_bulan->totalCashoutReal($tanggal8);

				// CASH-OUT Hari Ke-9
				$cashout_a9 = $this->m_bulan->tampil_cashout_a($tanggal9);
				$cashout_b9 = $this->m_bulan->tampil_cashout_b($tanggal9);
				$cashout_c9 = $this->m_bulan->tampil_cashout_c($tanggal9);
				$cashout_d9 = $this->m_bulan->tampil_cashout_d($tanggal9);
				$cashout_e9 = $this->m_bulan->tampil_cashout_e($tanggal9);
				$cashout_f9 = $this->m_bulan->tampil_cashout_f($tanggal9);
				$cashout_g9 = $this->m_bulan->tampil_cashout_g($tanggal9);
				$cashout_h9 = $this->m_bulan->tampil_cashout_h($tanggal9);
				$cashout_i9 = $this->m_bulan->tampil_cashout_i($tanggal9);
				$cashout_j9 = $this->m_bulan->tampil_cashout_j($tanggal9);
				$cashout_k9 = $this->m_bulan->tampil_cashout_k($tanggal9);
				$cashout_l9 = $this->m_bulan->tampil_cashout_l($tanggal9);
				$cashout_m9 = $this->m_bulan->tampil_cashout_m($tanggal9);
				$cashout_n9 = $this->m_bulan->tampil_cashout_n($tanggal9);
				$cashout_o9 = $this->m_bulan->tampil_cashout_o($tanggal9);
				$cashout_p9 = $this->m_bulan->tampil_cashout_p($tanggal9);
				$cashout_q9 = $this->m_bulan->tampil_cashout_q($tanggal9);
				$cashout_r9 = $this->m_bulan->tampil_cashout_r($tanggal9);
				$cashout_s9 = $this->m_bulan->tampil_cashout_s($tanggal9);
				$cashout_t9 = $this->m_bulan->tampil_cashout_t($tanggal9);
				$cashout_u9 = $this->m_bulan->tampil_cashout_u($tanggal9);
				$cashout_v9 = $this->m_bulan->tampil_cashout_v($tanggal9);
				$cashout_w9 = $this->m_bulan->tampil_cashout_w($tanggal9);
				$cashout_x9 = $this->m_bulan->tampil_cashout_x($tanggal9);
				$cashout_y9 = $this->m_bulan->tampil_cashout_y($tanggal9);
				$cashout_z9 = $this->m_bulan->tampil_cashout_z($tanggal9);
				$cashout_a29 = $this->m_bulan->tampil_cashout_a2($tanggal9);
				$cashout_b29 = $this->m_bulan->tampil_cashout_b2($tanggal9);
				$cashout_c29 = $this->m_bulan->tampil_cashout_c2($tanggal9);
				$cashout_d29 = $this->m_bulan->tampil_cashout_d2($tanggal9);
				$cashout_e29 = $this->m_bulan->tampil_cashout_e2($tanggal9);
				$cashout_f29 = $this->m_bulan->tampil_cashout_f2($tanggal9);
				$cashout_g29 = $this->m_bulan->tampil_cashout_g2($tanggal9);
				$cashout_h29 = $this->m_bulan->tampil_cashout_h2($tanggal9);
				$cashout_i29 = $this->m_bulan->tampil_cashout_i2($tanggal9);
				$cashout_j29 = $this->m_bulan->tampil_cashout_j2($tanggal9);
				$cashout_k29 = $this->m_bulan->tampil_cashout_k2($tanggal9);
				$cashout_l29 = $this->m_bulan->tampil_cashout_l2($tanggal9);
				$cashout_m29 = $this->m_bulan->tampil_cashout_m2($tanggal9);
				$cashout_n29 = $this->m_bulan->tampil_cashout_n2($tanggal9);
				$cashout_o29 = $this->m_bulan->tampil_cashout_o2($tanggal9);
				$cashout_p29 = $this->m_bulan->tampil_cashout_p2($tanggal9);
				$cashout_q29 = $this->m_bulan->tampil_cashout_q2($tanggal9);
				$cashout_r29 = $this->m_bulan->tampil_cashout_r2($tanggal9);
				$cashout_s29 = $this->m_bulan->tampil_cashout_s2($tanggal9);
				$cashout_t29 = $this->m_bulan->tampil_cashout_t2($tanggal9);
				$cashout_u29 = $this->m_bulan->tampil_cashout_u2($tanggal9);
				$cashout_v29 = $this->m_bulan->tampil_cashout_v2($tanggal9);
				$cashout_w29 = $this->m_bulan->tampil_cashout_w2($tanggal9);
				$cashout_x29 = $this->m_bulan->tampil_cashout_x2($tanggal9);
				$cashout_y29 = $this->m_bulan->tampil_cashout_y2($tanggal9);
				$cashout_z29 = $this->m_bulan->tampil_cashout_z2($tanggal9);
				$cashout_a39 = $this->m_bulan->tampil_cashout_a3($tanggal9);
				$cashout_b39 = $this->m_bulan->tampil_cashout_b3($tanggal9);
				$cashout_c39 = $this->m_bulan->tampil_cashout_c3($tanggal9);
				$cashout_d39 = $this->m_bulan->tampil_cashout_d3($tanggal9);
				$cashout_e39 = $this->m_bulan->tampil_cashout_e3($tanggal9);
				$cashout_f39 = $this->m_bulan->tampil_cashout_f3($tanggal9);
				$cashout_g39 = $this->m_bulan->tampil_cashout_g3($tanggal9);
				$cashout_h39 = $this->m_bulan->tampil_cashout_h3($tanggal9);
				$cashout_i39 = $this->m_bulan->tampil_cashout_i3($tanggal9);
				$cashout_j39 = $this->m_bulan->tampil_cashout_j3($tanggal9);
				$cashout_k39 = $this->m_bulan->tampil_cashout_k3($tanggal9);
				$cashout_l39 = $this->m_bulan->tampil_cashout_l3($tanggal9);
				$tCashoutProj_9 = $this->m_bulan->totalCashoutProj($tanggal9);
				$tCashoutReal_9 = $this->m_bulan->totalCashoutReal($tanggal9);

				// CASH-OUT Hari Ke-10
				$cashout_a10 = $this->m_bulan->tampil_cashout_a($tanggal10);
				$cashout_b10 = $this->m_bulan->tampil_cashout_b($tanggal10);
				$cashout_c10 = $this->m_bulan->tampil_cashout_c($tanggal10);
				$cashout_d10 = $this->m_bulan->tampil_cashout_d($tanggal10);
				$cashout_e10 = $this->m_bulan->tampil_cashout_e($tanggal10);
				$cashout_f10 = $this->m_bulan->tampil_cashout_f($tanggal10);
				$cashout_g10 = $this->m_bulan->tampil_cashout_g($tanggal10);
				$cashout_h10 = $this->m_bulan->tampil_cashout_h($tanggal10);
				$cashout_i10 = $this->m_bulan->tampil_cashout_i($tanggal10);
				$cashout_j10 = $this->m_bulan->tampil_cashout_j($tanggal10);
				$cashout_k10 = $this->m_bulan->tampil_cashout_k($tanggal10);
				$cashout_l10 = $this->m_bulan->tampil_cashout_l($tanggal10);
				$cashout_m10 = $this->m_bulan->tampil_cashout_m($tanggal10);
				$cashout_n10 = $this->m_bulan->tampil_cashout_n($tanggal10);
				$cashout_o10 = $this->m_bulan->tampil_cashout_o($tanggal10);
				$cashout_p10 = $this->m_bulan->tampil_cashout_p($tanggal10);
				$cashout_q10 = $this->m_bulan->tampil_cashout_q($tanggal10);
				$cashout_r10 = $this->m_bulan->tampil_cashout_r($tanggal10);
				$cashout_s10 = $this->m_bulan->tampil_cashout_s($tanggal10);
				$cashout_t10 = $this->m_bulan->tampil_cashout_t($tanggal10);
				$cashout_u10 = $this->m_bulan->tampil_cashout_u($tanggal10);
				$cashout_v10 = $this->m_bulan->tampil_cashout_v($tanggal10);
				$cashout_w10 = $this->m_bulan->tampil_cashout_w($tanggal10);
				$cashout_x10 = $this->m_bulan->tampil_cashout_x($tanggal10);
				$cashout_y10 = $this->m_bulan->tampil_cashout_y($tanggal10);
				$cashout_z10 = $this->m_bulan->tampil_cashout_z($tanggal10);
				$cashout_a210 = $this->m_bulan->tampil_cashout_a2($tanggal10);
				$cashout_b210 = $this->m_bulan->tampil_cashout_b2($tanggal10);
				$cashout_c210 = $this->m_bulan->tampil_cashout_c2($tanggal10);
				$cashout_d210 = $this->m_bulan->tampil_cashout_d2($tanggal10);
				$cashout_e210 = $this->m_bulan->tampil_cashout_e2($tanggal10);
				$cashout_f210 = $this->m_bulan->tampil_cashout_f2($tanggal10);
				$cashout_g210 = $this->m_bulan->tampil_cashout_g2($tanggal10);
				$cashout_h210 = $this->m_bulan->tampil_cashout_h2($tanggal10);
				$cashout_i210 = $this->m_bulan->tampil_cashout_i2($tanggal10);
				$cashout_j210 = $this->m_bulan->tampil_cashout_j2($tanggal10);
				$cashout_k210 = $this->m_bulan->tampil_cashout_k2($tanggal10);
				$cashout_l210 = $this->m_bulan->tampil_cashout_l2($tanggal10);
				$cashout_m210 = $this->m_bulan->tampil_cashout_m2($tanggal10);
				$cashout_n210 = $this->m_bulan->tampil_cashout_n2($tanggal10);
				$cashout_o210 = $this->m_bulan->tampil_cashout_o2($tanggal10);
				$cashout_p210 = $this->m_bulan->tampil_cashout_p2($tanggal10);
				$cashout_q210 = $this->m_bulan->tampil_cashout_q2($tanggal10);
				$cashout_r210 = $this->m_bulan->tampil_cashout_r2($tanggal10);
				$cashout_s210 = $this->m_bulan->tampil_cashout_s2($tanggal10);
				$cashout_t210 = $this->m_bulan->tampil_cashout_t2($tanggal10);
				$cashout_u210 = $this->m_bulan->tampil_cashout_u2($tanggal10);
				$cashout_v210 = $this->m_bulan->tampil_cashout_v2($tanggal10);
				$cashout_w210 = $this->m_bulan->tampil_cashout_w2($tanggal10);
				$cashout_x210 = $this->m_bulan->tampil_cashout_x2($tanggal10);
				$cashout_y210 = $this->m_bulan->tampil_cashout_y2($tanggal10);
				$cashout_z210 = $this->m_bulan->tampil_cashout_z2($tanggal10);
				$cashout_a310 = $this->m_bulan->tampil_cashout_a3($tanggal10);
				$cashout_b310 = $this->m_bulan->tampil_cashout_b3($tanggal10);
				$cashout_c310 = $this->m_bulan->tampil_cashout_c3($tanggal10);
				$cashout_d310 = $this->m_bulan->tampil_cashout_d3($tanggal10);
				$cashout_e310 = $this->m_bulan->tampil_cashout_e3($tanggal10);
				$cashout_f310 = $this->m_bulan->tampil_cashout_f3($tanggal10);
				$cashout_g310 = $this->m_bulan->tampil_cashout_g3($tanggal10);
				$cashout_h310 = $this->m_bulan->tampil_cashout_h3($tanggal10);
				$cashout_i310 = $this->m_bulan->tampil_cashout_i3($tanggal10);
				$cashout_j310 = $this->m_bulan->tampil_cashout_j3($tanggal10);
				$cashout_k310 = $this->m_bulan->tampil_cashout_k3($tanggal10);
				$cashout_l310 = $this->m_bulan->tampil_cashout_l3($tanggal10);
				$tCashoutProj_10 = $this->m_bulan->totalCashoutProj($tanggal10);
				$tCashoutReal_10 = $this->m_bulan->totalCashoutReal($tanggal10);

				// CASH-OUT Hari Ke-11
				$cashout_a11 = $this->m_bulan->tampil_cashout_a($tanggal11);
				$cashout_b11 = $this->m_bulan->tampil_cashout_b($tanggal11);
				$cashout_c11 = $this->m_bulan->tampil_cashout_c($tanggal11);
				$cashout_d11 = $this->m_bulan->tampil_cashout_d($tanggal11);
				$cashout_e11 = $this->m_bulan->tampil_cashout_e($tanggal11);
				$cashout_f11 = $this->m_bulan->tampil_cashout_f($tanggal11);
				$cashout_g11 = $this->m_bulan->tampil_cashout_g($tanggal11);
				$cashout_h11 = $this->m_bulan->tampil_cashout_h($tanggal11);
				$cashout_i11 = $this->m_bulan->tampil_cashout_i($tanggal11);
				$cashout_j11 = $this->m_bulan->tampil_cashout_j($tanggal11);
				$cashout_k11 = $this->m_bulan->tampil_cashout_k($tanggal11);
				$cashout_l11 = $this->m_bulan->tampil_cashout_l($tanggal11);
				$cashout_m11 = $this->m_bulan->tampil_cashout_m($tanggal11);
				$cashout_n11 = $this->m_bulan->tampil_cashout_n($tanggal11);
				$cashout_o11 = $this->m_bulan->tampil_cashout_o($tanggal11);
				$cashout_p11 = $this->m_bulan->tampil_cashout_p($tanggal11);
				$cashout_q11 = $this->m_bulan->tampil_cashout_q($tanggal11);
				$cashout_r11 = $this->m_bulan->tampil_cashout_r($tanggal11);
				$cashout_s11 = $this->m_bulan->tampil_cashout_s($tanggal11);
				$cashout_t11 = $this->m_bulan->tampil_cashout_t($tanggal11);
				$cashout_u11 = $this->m_bulan->tampil_cashout_u($tanggal11);
				$cashout_v11 = $this->m_bulan->tampil_cashout_v($tanggal11);
				$cashout_w11 = $this->m_bulan->tampil_cashout_w($tanggal11);
				$cashout_x11 = $this->m_bulan->tampil_cashout_x($tanggal11);
				$cashout_y11 = $this->m_bulan->tampil_cashout_y($tanggal11);
				$cashout_z11 = $this->m_bulan->tampil_cashout_z($tanggal11);
				$cashout_a211 = $this->m_bulan->tampil_cashout_a2($tanggal11);
				$cashout_b211 = $this->m_bulan->tampil_cashout_b2($tanggal11);
				$cashout_c211 = $this->m_bulan->tampil_cashout_c2($tanggal11);
				$cashout_d211 = $this->m_bulan->tampil_cashout_d2($tanggal11);
				$cashout_e211 = $this->m_bulan->tampil_cashout_e2($tanggal11);
				$cashout_f211 = $this->m_bulan->tampil_cashout_f2($tanggal11);
				$cashout_g211 = $this->m_bulan->tampil_cashout_g2($tanggal11);
				$cashout_h211 = $this->m_bulan->tampil_cashout_h2($tanggal11);
				$cashout_i211 = $this->m_bulan->tampil_cashout_i2($tanggal11);
				$cashout_j211 = $this->m_bulan->tampil_cashout_j2($tanggal11);
				$cashout_k211 = $this->m_bulan->tampil_cashout_k2($tanggal11);
				$cashout_l211 = $this->m_bulan->tampil_cashout_l2($tanggal11);
				$cashout_m211 = $this->m_bulan->tampil_cashout_m2($tanggal11);
				$cashout_n211 = $this->m_bulan->tampil_cashout_n2($tanggal11);
				$cashout_o211 = $this->m_bulan->tampil_cashout_o2($tanggal11);
				$cashout_p211 = $this->m_bulan->tampil_cashout_p2($tanggal11);
				$cashout_q211 = $this->m_bulan->tampil_cashout_q2($tanggal11);
				$cashout_r211 = $this->m_bulan->tampil_cashout_r2($tanggal11);
				$cashout_s211 = $this->m_bulan->tampil_cashout_s2($tanggal11);
				$cashout_t211 = $this->m_bulan->tampil_cashout_t2($tanggal11);
				$cashout_u211 = $this->m_bulan->tampil_cashout_u2($tanggal11);
				$cashout_v211 = $this->m_bulan->tampil_cashout_v2($tanggal11);
				$cashout_w211 = $this->m_bulan->tampil_cashout_w2($tanggal11);
				$cashout_x211 = $this->m_bulan->tampil_cashout_x2($tanggal11);
				$cashout_y211 = $this->m_bulan->tampil_cashout_y2($tanggal11);
				$cashout_z211 = $this->m_bulan->tampil_cashout_z2($tanggal11);
				$cashout_a311 = $this->m_bulan->tampil_cashout_a3($tanggal11);
				$cashout_b311 = $this->m_bulan->tampil_cashout_b3($tanggal11);
				$cashout_c311 = $this->m_bulan->tampil_cashout_c3($tanggal11);
				$cashout_d311 = $this->m_bulan->tampil_cashout_d3($tanggal11);
				$cashout_e311 = $this->m_bulan->tampil_cashout_e3($tanggal11);
				$cashout_f311 = $this->m_bulan->tampil_cashout_f3($tanggal11);
				$cashout_g311 = $this->m_bulan->tampil_cashout_g3($tanggal11);
				$cashout_h311 = $this->m_bulan->tampil_cashout_h3($tanggal11);
				$cashout_i311 = $this->m_bulan->tampil_cashout_i3($tanggal11);
				$cashout_j311 = $this->m_bulan->tampil_cashout_j3($tanggal11);
				$cashout_k311 = $this->m_bulan->tampil_cashout_k3($tanggal11);
				$cashout_l311 = $this->m_bulan->tampil_cashout_l3($tanggal11);
				$tCashoutProj_11 = $this->m_bulan->totalCashoutProj($tanggal11);
				$tCashoutReal_11 = $this->m_bulan->totalCashoutReal($tanggal11);

				// CASH-OUT Hari Ke-12
				$cashout_a12 = $this->m_bulan->tampil_cashout_a($tanggal12);
				$cashout_b12 = $this->m_bulan->tampil_cashout_b($tanggal12);
				$cashout_c12 = $this->m_bulan->tampil_cashout_c($tanggal12);
				$cashout_d12 = $this->m_bulan->tampil_cashout_d($tanggal12);
				$cashout_e12 = $this->m_bulan->tampil_cashout_e($tanggal12);
				$cashout_f12 = $this->m_bulan->tampil_cashout_f($tanggal12);
				$cashout_g12 = $this->m_bulan->tampil_cashout_g($tanggal12);
				$cashout_h12 = $this->m_bulan->tampil_cashout_h($tanggal12);
				$cashout_i12 = $this->m_bulan->tampil_cashout_i($tanggal12);
				$cashout_j12 = $this->m_bulan->tampil_cashout_j($tanggal12);
				$cashout_k12 = $this->m_bulan->tampil_cashout_k($tanggal12);
				$cashout_l12 = $this->m_bulan->tampil_cashout_l($tanggal12);
				$cashout_m12 = $this->m_bulan->tampil_cashout_m($tanggal12);
				$cashout_n12 = $this->m_bulan->tampil_cashout_n($tanggal12);
				$cashout_o12 = $this->m_bulan->tampil_cashout_o($tanggal12);
				$cashout_p12 = $this->m_bulan->tampil_cashout_p($tanggal12);
				$cashout_q12 = $this->m_bulan->tampil_cashout_q($tanggal12);
				$cashout_r12 = $this->m_bulan->tampil_cashout_r($tanggal12);
				$cashout_s12 = $this->m_bulan->tampil_cashout_s($tanggal12);
				$cashout_t12 = $this->m_bulan->tampil_cashout_t($tanggal12);
				$cashout_u12 = $this->m_bulan->tampil_cashout_u($tanggal12);
				$cashout_v12 = $this->m_bulan->tampil_cashout_v($tanggal12);
				$cashout_w12 = $this->m_bulan->tampil_cashout_w($tanggal12);
				$cashout_x12 = $this->m_bulan->tampil_cashout_x($tanggal12);
				$cashout_y12 = $this->m_bulan->tampil_cashout_y($tanggal12);
				$cashout_z12 = $this->m_bulan->tampil_cashout_z($tanggal12);
				$cashout_a212 = $this->m_bulan->tampil_cashout_a2($tanggal12);
				$cashout_b212 = $this->m_bulan->tampil_cashout_b2($tanggal12);
				$cashout_c212 = $this->m_bulan->tampil_cashout_c2($tanggal12);
				$cashout_d212 = $this->m_bulan->tampil_cashout_d2($tanggal12);
				$cashout_e212 = $this->m_bulan->tampil_cashout_e2($tanggal12);
				$cashout_f212 = $this->m_bulan->tampil_cashout_f2($tanggal12);
				$cashout_g212 = $this->m_bulan->tampil_cashout_g2($tanggal12);
				$cashout_h212 = $this->m_bulan->tampil_cashout_h2($tanggal12);
				$cashout_i212 = $this->m_bulan->tampil_cashout_i2($tanggal12);
				$cashout_j212 = $this->m_bulan->tampil_cashout_j2($tanggal12);
				$cashout_k212 = $this->m_bulan->tampil_cashout_k2($tanggal12);
				$cashout_l212 = $this->m_bulan->tampil_cashout_l2($tanggal12);
				$cashout_m212 = $this->m_bulan->tampil_cashout_m2($tanggal12);
				$cashout_n212 = $this->m_bulan->tampil_cashout_n2($tanggal12);
				$cashout_o212 = $this->m_bulan->tampil_cashout_o2($tanggal12);
				$cashout_p212 = $this->m_bulan->tampil_cashout_p2($tanggal12);
				$cashout_q212 = $this->m_bulan->tampil_cashout_q2($tanggal12);
				$cashout_r212 = $this->m_bulan->tampil_cashout_r2($tanggal12);
				$cashout_s212 = $this->m_bulan->tampil_cashout_s2($tanggal12);
				$cashout_t212 = $this->m_bulan->tampil_cashout_t2($tanggal12);
				$cashout_u212 = $this->m_bulan->tampil_cashout_u2($tanggal12);
				$cashout_v212 = $this->m_bulan->tampil_cashout_v2($tanggal12);
				$cashout_w212 = $this->m_bulan->tampil_cashout_w2($tanggal12);
				$cashout_x212 = $this->m_bulan->tampil_cashout_x2($tanggal12);
				$cashout_y212 = $this->m_bulan->tampil_cashout_y2($tanggal12);
				$cashout_z212 = $this->m_bulan->tampil_cashout_z2($tanggal12);
				$cashout_a312 = $this->m_bulan->tampil_cashout_a3($tanggal12);
				$cashout_b312 = $this->m_bulan->tampil_cashout_b3($tanggal12);
				$cashout_c312 = $this->m_bulan->tampil_cashout_c3($tanggal12);
				$cashout_d312 = $this->m_bulan->tampil_cashout_d3($tanggal12);
				$cashout_e312 = $this->m_bulan->tampil_cashout_e3($tanggal12);
				$cashout_f312 = $this->m_bulan->tampil_cashout_f3($tanggal12);
				$cashout_g312 = $this->m_bulan->tampil_cashout_g3($tanggal12);
				$cashout_h312 = $this->m_bulan->tampil_cashout_h3($tanggal12);
				$cashout_i312 = $this->m_bulan->tampil_cashout_i3($tanggal12);
				$cashout_j312 = $this->m_bulan->tampil_cashout_j3($tanggal12);
				$cashout_k312 = $this->m_bulan->tampil_cashout_k3($tanggal12);
				$cashout_l312 = $this->m_bulan->tampil_cashout_l3($tanggal12);
				$tCashoutProj_12 = $this->m_bulan->totalCashoutProj($tanggal12);
				$tCashoutReal_12 = $this->m_bulan->totalCashoutReal($tanggal12);

				// CASH-OUT Hari Ke-13
				$cashout_a13 = $this->m_bulan->tampil_cashout_a($tanggal13);
				$cashout_b13 = $this->m_bulan->tampil_cashout_b($tanggal13);
				$cashout_c13 = $this->m_bulan->tampil_cashout_c($tanggal13);
				$cashout_d13 = $this->m_bulan->tampil_cashout_d($tanggal13);
				$cashout_e13 = $this->m_bulan->tampil_cashout_e($tanggal13);
				$cashout_f13 = $this->m_bulan->tampil_cashout_f($tanggal13);
				$cashout_g13 = $this->m_bulan->tampil_cashout_g($tanggal13);
				$cashout_h13 = $this->m_bulan->tampil_cashout_h($tanggal13);
				$cashout_i13 = $this->m_bulan->tampil_cashout_i($tanggal13);
				$cashout_j13 = $this->m_bulan->tampil_cashout_j($tanggal13);
				$cashout_k13 = $this->m_bulan->tampil_cashout_k($tanggal13);
				$cashout_l13 = $this->m_bulan->tampil_cashout_l($tanggal13);
				$cashout_m13 = $this->m_bulan->tampil_cashout_m($tanggal13);
				$cashout_n13 = $this->m_bulan->tampil_cashout_n($tanggal13);
				$cashout_o13 = $this->m_bulan->tampil_cashout_o($tanggal13);
				$cashout_p13 = $this->m_bulan->tampil_cashout_p($tanggal13);
				$cashout_q13 = $this->m_bulan->tampil_cashout_q($tanggal13);
				$cashout_r13 = $this->m_bulan->tampil_cashout_r($tanggal13);
				$cashout_s13 = $this->m_bulan->tampil_cashout_s($tanggal13);
				$cashout_t13 = $this->m_bulan->tampil_cashout_t($tanggal13);
				$cashout_u13 = $this->m_bulan->tampil_cashout_u($tanggal13);
				$cashout_v13 = $this->m_bulan->tampil_cashout_v($tanggal13);
				$cashout_w13 = $this->m_bulan->tampil_cashout_w($tanggal13);
				$cashout_x13 = $this->m_bulan->tampil_cashout_x($tanggal13);
				$cashout_y13 = $this->m_bulan->tampil_cashout_y($tanggal13);
				$cashout_z13 = $this->m_bulan->tampil_cashout_z($tanggal13);
				$cashout_a213 = $this->m_bulan->tampil_cashout_a2($tanggal13);
				$cashout_b213 = $this->m_bulan->tampil_cashout_b2($tanggal13);
				$cashout_c213 = $this->m_bulan->tampil_cashout_c2($tanggal13);
				$cashout_d213 = $this->m_bulan->tampil_cashout_d2($tanggal13);
				$cashout_e213 = $this->m_bulan->tampil_cashout_e2($tanggal13);
				$cashout_f213 = $this->m_bulan->tampil_cashout_f2($tanggal13);
				$cashout_g213 = $this->m_bulan->tampil_cashout_g2($tanggal13);
				$cashout_h213 = $this->m_bulan->tampil_cashout_h2($tanggal13);
				$cashout_i213 = $this->m_bulan->tampil_cashout_i2($tanggal13);
				$cashout_j213 = $this->m_bulan->tampil_cashout_j2($tanggal13);
				$cashout_k213 = $this->m_bulan->tampil_cashout_k2($tanggal13);
				$cashout_l213 = $this->m_bulan->tampil_cashout_l2($tanggal13);
				$cashout_m213 = $this->m_bulan->tampil_cashout_m2($tanggal13);
				$cashout_n213 = $this->m_bulan->tampil_cashout_n2($tanggal13);
				$cashout_o213 = $this->m_bulan->tampil_cashout_o2($tanggal13);
				$cashout_p213 = $this->m_bulan->tampil_cashout_p2($tanggal13);
				$cashout_q213 = $this->m_bulan->tampil_cashout_q2($tanggal13);
				$cashout_r213 = $this->m_bulan->tampil_cashout_r2($tanggal13);
				$cashout_s213 = $this->m_bulan->tampil_cashout_s2($tanggal13);
				$cashout_t213 = $this->m_bulan->tampil_cashout_t2($tanggal13);
				$cashout_u213 = $this->m_bulan->tampil_cashout_u2($tanggal13);
				$cashout_v213 = $this->m_bulan->tampil_cashout_v2($tanggal13);
				$cashout_w213 = $this->m_bulan->tampil_cashout_w2($tanggal13);
				$cashout_x213 = $this->m_bulan->tampil_cashout_x2($tanggal13);
				$cashout_y213 = $this->m_bulan->tampil_cashout_y2($tanggal13);
				$cashout_z213 = $this->m_bulan->tampil_cashout_z2($tanggal13);
				$cashout_a313 = $this->m_bulan->tampil_cashout_a3($tanggal13);
				$cashout_b313 = $this->m_bulan->tampil_cashout_b3($tanggal13);
				$cashout_c313 = $this->m_bulan->tampil_cashout_c3($tanggal13);
				$cashout_d313 = $this->m_bulan->tampil_cashout_d3($tanggal13);
				$cashout_e313 = $this->m_bulan->tampil_cashout_e3($tanggal13);
				$cashout_f313 = $this->m_bulan->tampil_cashout_f3($tanggal13);
				$cashout_g313 = $this->m_bulan->tampil_cashout_g3($tanggal13);
				$cashout_h313 = $this->m_bulan->tampil_cashout_h3($tanggal13);
				$cashout_i313 = $this->m_bulan->tampil_cashout_i3($tanggal13);
				$cashout_j313 = $this->m_bulan->tampil_cashout_j3($tanggal13);
				$cashout_k313 = $this->m_bulan->tampil_cashout_k3($tanggal13);
				$cashout_l313 = $this->m_bulan->tampil_cashout_l3($tanggal13);
				$tCashoutProj_13 = $this->m_bulan->totalCashoutProj($tanggal13);
				$tCashoutReal_13 = $this->m_bulan->totalCashoutReal($tanggal13);

				// CASH-OUT Hari Ke-14
				$cashout_a14 = $this->m_bulan->tampil_cashout_a($tanggal14);
				$cashout_b14 = $this->m_bulan->tampil_cashout_b($tanggal14);
				$cashout_c14 = $this->m_bulan->tampil_cashout_c($tanggal14);
				$cashout_d14 = $this->m_bulan->tampil_cashout_d($tanggal14);
				$cashout_e14 = $this->m_bulan->tampil_cashout_e($tanggal14);
				$cashout_f14 = $this->m_bulan->tampil_cashout_f($tanggal14);
				$cashout_g14 = $this->m_bulan->tampil_cashout_g($tanggal14);
				$cashout_h14 = $this->m_bulan->tampil_cashout_h($tanggal14);
				$cashout_i14 = $this->m_bulan->tampil_cashout_i($tanggal14);
				$cashout_j14 = $this->m_bulan->tampil_cashout_j($tanggal14);
				$cashout_k14 = $this->m_bulan->tampil_cashout_k($tanggal14);
				$cashout_l14 = $this->m_bulan->tampil_cashout_l($tanggal14);
				$cashout_m14 = $this->m_bulan->tampil_cashout_m($tanggal14);
				$cashout_n14 = $this->m_bulan->tampil_cashout_n($tanggal14);
				$cashout_o14 = $this->m_bulan->tampil_cashout_o($tanggal14);
				$cashout_p14 = $this->m_bulan->tampil_cashout_p($tanggal14);
				$cashout_q14 = $this->m_bulan->tampil_cashout_q($tanggal14);
				$cashout_r14 = $this->m_bulan->tampil_cashout_r($tanggal14);
				$cashout_s14 = $this->m_bulan->tampil_cashout_s($tanggal14);
				$cashout_t14 = $this->m_bulan->tampil_cashout_t($tanggal14);
				$cashout_u14 = $this->m_bulan->tampil_cashout_u($tanggal14);
				$cashout_v14 = $this->m_bulan->tampil_cashout_v($tanggal14);
				$cashout_w14 = $this->m_bulan->tampil_cashout_w($tanggal14);
				$cashout_x14 = $this->m_bulan->tampil_cashout_x($tanggal14);
				$cashout_y14 = $this->m_bulan->tampil_cashout_y($tanggal14);
				$cashout_z14 = $this->m_bulan->tampil_cashout_z($tanggal14);
				$cashout_a214 = $this->m_bulan->tampil_cashout_a2($tanggal14);
				$cashout_b214 = $this->m_bulan->tampil_cashout_b2($tanggal14);
				$cashout_c214 = $this->m_bulan->tampil_cashout_c2($tanggal14);
				$cashout_d214 = $this->m_bulan->tampil_cashout_d2($tanggal14);
				$cashout_e214 = $this->m_bulan->tampil_cashout_e2($tanggal14);
				$cashout_f214 = $this->m_bulan->tampil_cashout_f2($tanggal14);
				$cashout_g214 = $this->m_bulan->tampil_cashout_g2($tanggal14);
				$cashout_h214 = $this->m_bulan->tampil_cashout_h2($tanggal14);
				$cashout_i214 = $this->m_bulan->tampil_cashout_i2($tanggal14);
				$cashout_j214 = $this->m_bulan->tampil_cashout_j2($tanggal14);
				$cashout_k214 = $this->m_bulan->tampil_cashout_k2($tanggal14);
				$cashout_l214 = $this->m_bulan->tampil_cashout_l2($tanggal14);
				$cashout_m214 = $this->m_bulan->tampil_cashout_m2($tanggal14);
				$cashout_n214 = $this->m_bulan->tampil_cashout_n2($tanggal14);
				$cashout_o214 = $this->m_bulan->tampil_cashout_o2($tanggal14);
				$cashout_p214 = $this->m_bulan->tampil_cashout_p2($tanggal14);
				$cashout_q214 = $this->m_bulan->tampil_cashout_q2($tanggal14);
				$cashout_r214 = $this->m_bulan->tampil_cashout_r2($tanggal14);
				$cashout_s214 = $this->m_bulan->tampil_cashout_s2($tanggal14);
				$cashout_t214 = $this->m_bulan->tampil_cashout_t2($tanggal14);
				$cashout_u214 = $this->m_bulan->tampil_cashout_u2($tanggal14);
				$cashout_v214 = $this->m_bulan->tampil_cashout_v2($tanggal14);
				$cashout_w214 = $this->m_bulan->tampil_cashout_w2($tanggal14);
				$cashout_x214 = $this->m_bulan->tampil_cashout_x2($tanggal14);
				$cashout_y214 = $this->m_bulan->tampil_cashout_y2($tanggal14);
				$cashout_z214 = $this->m_bulan->tampil_cashout_z2($tanggal14);
				$cashout_a314 = $this->m_bulan->tampil_cashout_a3($tanggal14);
				$cashout_b314 = $this->m_bulan->tampil_cashout_b3($tanggal14);
				$cashout_c314 = $this->m_bulan->tampil_cashout_c3($tanggal14);
				$cashout_d314 = $this->m_bulan->tampil_cashout_d3($tanggal14);
				$cashout_e314 = $this->m_bulan->tampil_cashout_e3($tanggal14);
				$cashout_f314 = $this->m_bulan->tampil_cashout_f3($tanggal14);
				$cashout_g314 = $this->m_bulan->tampil_cashout_g3($tanggal14);
				$cashout_h314 = $this->m_bulan->tampil_cashout_h3($tanggal14);
				$cashout_i314 = $this->m_bulan->tampil_cashout_i3($tanggal14);
				$cashout_j314 = $this->m_bulan->tampil_cashout_j3($tanggal14);
				$cashout_k314 = $this->m_bulan->tampil_cashout_k3($tanggal14);
				$cashout_l314 = $this->m_bulan->tampil_cashout_l3($tanggal14);
				$tCashoutProj_14 = $this->m_bulan->totalCashoutProj($tanggal14);
				$tCashoutReal_14 = $this->m_bulan->totalCashoutReal($tanggal14);

				// CASH-OUT Hari Ke-15
				$cashout_a15 = $this->m_bulan->tampil_cashout_a($tanggal15);
				$cashout_b15 = $this->m_bulan->tampil_cashout_b($tanggal15);
				$cashout_c15 = $this->m_bulan->tampil_cashout_c($tanggal15);
				$cashout_d15 = $this->m_bulan->tampil_cashout_d($tanggal15);
				$cashout_e15 = $this->m_bulan->tampil_cashout_e($tanggal15);
				$cashout_f15 = $this->m_bulan->tampil_cashout_f($tanggal15);
				$cashout_g15 = $this->m_bulan->tampil_cashout_g($tanggal15);
				$cashout_h15 = $this->m_bulan->tampil_cashout_h($tanggal15);
				$cashout_i15 = $this->m_bulan->tampil_cashout_i($tanggal15);
				$cashout_j15 = $this->m_bulan->tampil_cashout_j($tanggal15);
				$cashout_k15 = $this->m_bulan->tampil_cashout_k($tanggal15);
				$cashout_l15 = $this->m_bulan->tampil_cashout_l($tanggal15);
				$cashout_m15 = $this->m_bulan->tampil_cashout_m($tanggal15);
				$cashout_n15 = $this->m_bulan->tampil_cashout_n($tanggal15);
				$cashout_o15 = $this->m_bulan->tampil_cashout_o($tanggal15);
				$cashout_p15 = $this->m_bulan->tampil_cashout_p($tanggal15);
				$cashout_q15 = $this->m_bulan->tampil_cashout_q($tanggal15);
				$cashout_r15 = $this->m_bulan->tampil_cashout_r($tanggal15);
				$cashout_s15 = $this->m_bulan->tampil_cashout_s($tanggal15);
				$cashout_t15 = $this->m_bulan->tampil_cashout_t($tanggal15);
				$cashout_u15 = $this->m_bulan->tampil_cashout_u($tanggal15);
				$cashout_v15 = $this->m_bulan->tampil_cashout_v($tanggal15);
				$cashout_w15 = $this->m_bulan->tampil_cashout_w($tanggal15);
				$cashout_x15 = $this->m_bulan->tampil_cashout_x($tanggal15);
				$cashout_y15 = $this->m_bulan->tampil_cashout_y($tanggal15);
				$cashout_z15 = $this->m_bulan->tampil_cashout_z($tanggal15);
				$cashout_a215 = $this->m_bulan->tampil_cashout_a2($tanggal15);
				$cashout_b215 = $this->m_bulan->tampil_cashout_b2($tanggal15);
				$cashout_c215 = $this->m_bulan->tampil_cashout_c2($tanggal15);
				$cashout_d215 = $this->m_bulan->tampil_cashout_d2($tanggal15);
				$cashout_e215 = $this->m_bulan->tampil_cashout_e2($tanggal15);
				$cashout_f215 = $this->m_bulan->tampil_cashout_f2($tanggal15);
				$cashout_g215 = $this->m_bulan->tampil_cashout_g2($tanggal15);
				$cashout_h215 = $this->m_bulan->tampil_cashout_h2($tanggal15);
				$cashout_i215 = $this->m_bulan->tampil_cashout_i2($tanggal15);
				$cashout_j215 = $this->m_bulan->tampil_cashout_j2($tanggal15);
				$cashout_k215 = $this->m_bulan->tampil_cashout_k2($tanggal15);
				$cashout_l215 = $this->m_bulan->tampil_cashout_l2($tanggal15);
				$cashout_m215 = $this->m_bulan->tampil_cashout_m2($tanggal15);
				$cashout_n215 = $this->m_bulan->tampil_cashout_n2($tanggal15);
				$cashout_o215 = $this->m_bulan->tampil_cashout_o2($tanggal15);
				$cashout_p215 = $this->m_bulan->tampil_cashout_p2($tanggal15);
				$cashout_q215 = $this->m_bulan->tampil_cashout_q2($tanggal15);
				$cashout_r215 = $this->m_bulan->tampil_cashout_r2($tanggal15);
				$cashout_s215 = $this->m_bulan->tampil_cashout_s2($tanggal15);
				$cashout_t215 = $this->m_bulan->tampil_cashout_t2($tanggal15);
				$cashout_u215 = $this->m_bulan->tampil_cashout_u2($tanggal15);
				$cashout_v215 = $this->m_bulan->tampil_cashout_v2($tanggal15);
				$cashout_w215 = $this->m_bulan->tampil_cashout_w2($tanggal15);
				$cashout_x215 = $this->m_bulan->tampil_cashout_x2($tanggal15);
				$cashout_y215 = $this->m_bulan->tampil_cashout_y2($tanggal15);
				$cashout_z215 = $this->m_bulan->tampil_cashout_z2($tanggal15);
				$cashout_a315 = $this->m_bulan->tampil_cashout_a3($tanggal15);
				$cashout_b315 = $this->m_bulan->tampil_cashout_b3($tanggal15);
				$cashout_c315 = $this->m_bulan->tampil_cashout_c3($tanggal15);
				$cashout_d315 = $this->m_bulan->tampil_cashout_d3($tanggal15);
				$cashout_e315 = $this->m_bulan->tampil_cashout_e3($tanggal15);
				$cashout_f315 = $this->m_bulan->tampil_cashout_f3($tanggal15);
				$cashout_g315 = $this->m_bulan->tampil_cashout_g3($tanggal15);
				$cashout_h315 = $this->m_bulan->tampil_cashout_h3($tanggal15);
				$cashout_i315 = $this->m_bulan->tampil_cashout_i3($tanggal15);
				$cashout_j315 = $this->m_bulan->tampil_cashout_j3($tanggal15);
				$cashout_k315 = $this->m_bulan->tampil_cashout_k3($tanggal15);
				$cashout_l315 = $this->m_bulan->tampil_cashout_l3($tanggal15);
				$tCashoutProj_15 = $this->m_bulan->totalCashoutProj($tanggal15);
				$tCashoutReal_15 = $this->m_bulan->totalCashoutReal($tanggal15);

				// CASH-OUT Hari Ke-16
				$cashout_a16 = $this->m_bulan->tampil_cashout_a($tanggal16);
				$cashout_b16 = $this->m_bulan->tampil_cashout_b($tanggal16);
				$cashout_c16 = $this->m_bulan->tampil_cashout_c($tanggal16);
				$cashout_d16 = $this->m_bulan->tampil_cashout_d($tanggal16);
				$cashout_e16 = $this->m_bulan->tampil_cashout_e($tanggal16);
				$cashout_f16 = $this->m_bulan->tampil_cashout_f($tanggal16);
				$cashout_g16 = $this->m_bulan->tampil_cashout_g($tanggal16);
				$cashout_h16 = $this->m_bulan->tampil_cashout_h($tanggal16);
				$cashout_i16 = $this->m_bulan->tampil_cashout_i($tanggal16);
				$cashout_j16 = $this->m_bulan->tampil_cashout_j($tanggal16);
				$cashout_k16 = $this->m_bulan->tampil_cashout_k($tanggal16);
				$cashout_l16 = $this->m_bulan->tampil_cashout_l($tanggal16);
				$cashout_m16 = $this->m_bulan->tampil_cashout_m($tanggal16);
				$cashout_n16 = $this->m_bulan->tampil_cashout_n($tanggal16);
				$cashout_o16 = $this->m_bulan->tampil_cashout_o($tanggal16);
				$cashout_p16 = $this->m_bulan->tampil_cashout_p($tanggal16);
				$cashout_q16 = $this->m_bulan->tampil_cashout_q($tanggal16);
				$cashout_r16 = $this->m_bulan->tampil_cashout_r($tanggal16);
				$cashout_s16 = $this->m_bulan->tampil_cashout_s($tanggal16);
				$cashout_t16 = $this->m_bulan->tampil_cashout_t($tanggal16);
				$cashout_u16 = $this->m_bulan->tampil_cashout_u($tanggal16);
				$cashout_v16 = $this->m_bulan->tampil_cashout_v($tanggal16);
				$cashout_w16 = $this->m_bulan->tampil_cashout_w($tanggal16);
				$cashout_x16 = $this->m_bulan->tampil_cashout_x($tanggal16);
				$cashout_y16 = $this->m_bulan->tampil_cashout_y($tanggal16);
				$cashout_z16 = $this->m_bulan->tampil_cashout_z($tanggal16);
				$cashout_a216 = $this->m_bulan->tampil_cashout_a2($tanggal16);
				$cashout_b216 = $this->m_bulan->tampil_cashout_b2($tanggal16);
				$cashout_c216 = $this->m_bulan->tampil_cashout_c2($tanggal16);
				$cashout_d216 = $this->m_bulan->tampil_cashout_d2($tanggal16);
				$cashout_e216 = $this->m_bulan->tampil_cashout_e2($tanggal16);
				$cashout_f216 = $this->m_bulan->tampil_cashout_f2($tanggal16);
				$cashout_g216 = $this->m_bulan->tampil_cashout_g2($tanggal16);
				$cashout_h216 = $this->m_bulan->tampil_cashout_h2($tanggal16);
				$cashout_i216 = $this->m_bulan->tampil_cashout_i2($tanggal16);
				$cashout_j216 = $this->m_bulan->tampil_cashout_j2($tanggal16);
				$cashout_k216 = $this->m_bulan->tampil_cashout_k2($tanggal16);
				$cashout_l216 = $this->m_bulan->tampil_cashout_l2($tanggal16);
				$cashout_m216 = $this->m_bulan->tampil_cashout_m2($tanggal16);
				$cashout_n216 = $this->m_bulan->tampil_cashout_n2($tanggal16);
				$cashout_o216 = $this->m_bulan->tampil_cashout_o2($tanggal16);
				$cashout_p216 = $this->m_bulan->tampil_cashout_p2($tanggal16);
				$cashout_q216 = $this->m_bulan->tampil_cashout_q2($tanggal16);
				$cashout_r216 = $this->m_bulan->tampil_cashout_r2($tanggal16);
				$cashout_s216 = $this->m_bulan->tampil_cashout_s2($tanggal16);
				$cashout_t216 = $this->m_bulan->tampil_cashout_t2($tanggal16);
				$cashout_u216 = $this->m_bulan->tampil_cashout_u2($tanggal16);
				$cashout_v216 = $this->m_bulan->tampil_cashout_v2($tanggal16);
				$cashout_w216 = $this->m_bulan->tampil_cashout_w2($tanggal16);
				$cashout_x216 = $this->m_bulan->tampil_cashout_x2($tanggal16);
				$cashout_y216 = $this->m_bulan->tampil_cashout_y2($tanggal16);
				$cashout_z216 = $this->m_bulan->tampil_cashout_z2($tanggal16);
				$cashout_a316 = $this->m_bulan->tampil_cashout_a3($tanggal16);
				$cashout_b316 = $this->m_bulan->tampil_cashout_b3($tanggal16);
				$cashout_c316 = $this->m_bulan->tampil_cashout_c3($tanggal16);
				$cashout_d316 = $this->m_bulan->tampil_cashout_d3($tanggal16);
				$cashout_e316 = $this->m_bulan->tampil_cashout_e3($tanggal16);
				$cashout_f316 = $this->m_bulan->tampil_cashout_f3($tanggal16);
				$cashout_g316 = $this->m_bulan->tampil_cashout_g3($tanggal16);
				$cashout_h316 = $this->m_bulan->tampil_cashout_h3($tanggal16);
				$cashout_i316 = $this->m_bulan->tampil_cashout_i3($tanggal16);
				$cashout_j316 = $this->m_bulan->tampil_cashout_j3($tanggal16);
				$cashout_k316 = $this->m_bulan->tampil_cashout_k3($tanggal16);
				$cashout_l316 = $this->m_bulan->tampil_cashout_l3($tanggal16);
				$tCashoutProj_16 = $this->m_bulan->totalCashoutProj($tanggal16);
				$tCashoutReal_16 = $this->m_bulan->totalCashoutReal($tanggal16);

				// CASH-OUT Hari Ke-17
				$cashout_a17 = $this->m_bulan->tampil_cashout_a($tanggal17);
				$cashout_b17 = $this->m_bulan->tampil_cashout_b($tanggal17);
				$cashout_c17 = $this->m_bulan->tampil_cashout_c($tanggal17);
				$cashout_d17 = $this->m_bulan->tampil_cashout_d($tanggal17);
				$cashout_e17 = $this->m_bulan->tampil_cashout_e($tanggal17);
				$cashout_f17 = $this->m_bulan->tampil_cashout_f($tanggal17);
				$cashout_g17 = $this->m_bulan->tampil_cashout_g($tanggal17);
				$cashout_h17 = $this->m_bulan->tampil_cashout_h($tanggal17);
				$cashout_i17 = $this->m_bulan->tampil_cashout_i($tanggal17);
				$cashout_j17 = $this->m_bulan->tampil_cashout_j($tanggal17);
				$cashout_k17 = $this->m_bulan->tampil_cashout_k($tanggal17);
				$cashout_l17 = $this->m_bulan->tampil_cashout_l($tanggal17);
				$cashout_m17 = $this->m_bulan->tampil_cashout_m($tanggal17);
				$cashout_n17 = $this->m_bulan->tampil_cashout_n($tanggal17);
				$cashout_o17 = $this->m_bulan->tampil_cashout_o($tanggal17);
				$cashout_p17 = $this->m_bulan->tampil_cashout_p($tanggal17);
				$cashout_q17 = $this->m_bulan->tampil_cashout_q($tanggal17);
				$cashout_r17 = $this->m_bulan->tampil_cashout_r($tanggal17);
				$cashout_s17 = $this->m_bulan->tampil_cashout_s($tanggal17);
				$cashout_t17 = $this->m_bulan->tampil_cashout_t($tanggal17);
				$cashout_u17 = $this->m_bulan->tampil_cashout_u($tanggal17);
				$cashout_v17 = $this->m_bulan->tampil_cashout_v($tanggal17);
				$cashout_w17 = $this->m_bulan->tampil_cashout_w($tanggal17);
				$cashout_x17 = $this->m_bulan->tampil_cashout_x($tanggal17);
				$cashout_y17 = $this->m_bulan->tampil_cashout_y($tanggal17);
				$cashout_z17 = $this->m_bulan->tampil_cashout_z($tanggal17);
				$cashout_a217 = $this->m_bulan->tampil_cashout_a2($tanggal17);
				$cashout_b217 = $this->m_bulan->tampil_cashout_b2($tanggal17);
				$cashout_c217 = $this->m_bulan->tampil_cashout_c2($tanggal17);
				$cashout_d217 = $this->m_bulan->tampil_cashout_d2($tanggal17);
				$cashout_e217 = $this->m_bulan->tampil_cashout_e2($tanggal17);
				$cashout_f217 = $this->m_bulan->tampil_cashout_f2($tanggal17);
				$cashout_g217 = $this->m_bulan->tampil_cashout_g2($tanggal17);
				$cashout_h217 = $this->m_bulan->tampil_cashout_h2($tanggal17);
				$cashout_i217 = $this->m_bulan->tampil_cashout_i2($tanggal17);
				$cashout_j217 = $this->m_bulan->tampil_cashout_j2($tanggal17);
				$cashout_k217 = $this->m_bulan->tampil_cashout_k2($tanggal17);
				$cashout_l217 = $this->m_bulan->tampil_cashout_l2($tanggal17);
				$cashout_m217 = $this->m_bulan->tampil_cashout_m2($tanggal17);
				$cashout_n217 = $this->m_bulan->tampil_cashout_n2($tanggal17);
				$cashout_o217 = $this->m_bulan->tampil_cashout_o2($tanggal17);
				$cashout_p217 = $this->m_bulan->tampil_cashout_p2($tanggal17);
				$cashout_q217 = $this->m_bulan->tampil_cashout_q2($tanggal17);
				$cashout_r217 = $this->m_bulan->tampil_cashout_r2($tanggal17);
				$cashout_s217 = $this->m_bulan->tampil_cashout_s2($tanggal17);
				$cashout_t217 = $this->m_bulan->tampil_cashout_t2($tanggal17);
				$cashout_u217 = $this->m_bulan->tampil_cashout_u2($tanggal17);
				$cashout_v217 = $this->m_bulan->tampil_cashout_v2($tanggal17);
				$cashout_w217 = $this->m_bulan->tampil_cashout_w2($tanggal17);
				$cashout_x217 = $this->m_bulan->tampil_cashout_x2($tanggal17);
				$cashout_y217 = $this->m_bulan->tampil_cashout_y2($tanggal17);
				$cashout_z217 = $this->m_bulan->tampil_cashout_z2($tanggal17);
				$cashout_a317 = $this->m_bulan->tampil_cashout_a3($tanggal17);
				$cashout_b317 = $this->m_bulan->tampil_cashout_b3($tanggal17);
				$cashout_c317 = $this->m_bulan->tampil_cashout_c3($tanggal17);
				$cashout_d317 = $this->m_bulan->tampil_cashout_d3($tanggal17);
				$cashout_e317 = $this->m_bulan->tampil_cashout_e3($tanggal17);
				$cashout_f317 = $this->m_bulan->tampil_cashout_f3($tanggal17);
				$cashout_g317 = $this->m_bulan->tampil_cashout_g3($tanggal17);
				$cashout_h317 = $this->m_bulan->tampil_cashout_h3($tanggal17);
				$cashout_i317 = $this->m_bulan->tampil_cashout_i3($tanggal17);
				$cashout_j317 = $this->m_bulan->tampil_cashout_j3($tanggal17);
				$cashout_k317 = $this->m_bulan->tampil_cashout_k3($tanggal17);
				$cashout_l317 = $this->m_bulan->tampil_cashout_l3($tanggal17);
				$tCashoutProj_17 = $this->m_bulan->totalCashoutProj($tanggal17);
				$tCashoutReal_17 = $this->m_bulan->totalCashoutReal($tanggal17);

				// CASH-OUT Hari Ke-18
				$cashout_a18 = $this->m_bulan->tampil_cashout_a($tanggal18);
				$cashout_b18 = $this->m_bulan->tampil_cashout_b($tanggal18);
				$cashout_c18 = $this->m_bulan->tampil_cashout_c($tanggal18);
				$cashout_d18 = $this->m_bulan->tampil_cashout_d($tanggal18);
				$cashout_e18 = $this->m_bulan->tampil_cashout_e($tanggal18);
				$cashout_f18 = $this->m_bulan->tampil_cashout_f($tanggal18);
				$cashout_g18 = $this->m_bulan->tampil_cashout_g($tanggal18);
				$cashout_h18 = $this->m_bulan->tampil_cashout_h($tanggal18);
				$cashout_i18 = $this->m_bulan->tampil_cashout_i($tanggal18);
				$cashout_j18 = $this->m_bulan->tampil_cashout_j($tanggal18);
				$cashout_k18 = $this->m_bulan->tampil_cashout_k($tanggal18);
				$cashout_l18 = $this->m_bulan->tampil_cashout_l($tanggal18);
				$cashout_m18 = $this->m_bulan->tampil_cashout_m($tanggal18);
				$cashout_n18 = $this->m_bulan->tampil_cashout_n($tanggal18);
				$cashout_o18 = $this->m_bulan->tampil_cashout_o($tanggal18);
				$cashout_p18 = $this->m_bulan->tampil_cashout_p($tanggal18);
				$cashout_q18 = $this->m_bulan->tampil_cashout_q($tanggal18);
				$cashout_r18 = $this->m_bulan->tampil_cashout_r($tanggal18);
				$cashout_s18 = $this->m_bulan->tampil_cashout_s($tanggal18);
				$cashout_t18 = $this->m_bulan->tampil_cashout_t($tanggal18);
				$cashout_u18 = $this->m_bulan->tampil_cashout_u($tanggal18);
				$cashout_v18 = $this->m_bulan->tampil_cashout_v($tanggal18);
				$cashout_w18 = $this->m_bulan->tampil_cashout_w($tanggal18);
				$cashout_x18 = $this->m_bulan->tampil_cashout_x($tanggal18);
				$cashout_y18 = $this->m_bulan->tampil_cashout_y($tanggal18);
				$cashout_z18 = $this->m_bulan->tampil_cashout_z($tanggal18);
				$cashout_a218 = $this->m_bulan->tampil_cashout_a2($tanggal18);
				$cashout_b218 = $this->m_bulan->tampil_cashout_b2($tanggal18);
				$cashout_c218 = $this->m_bulan->tampil_cashout_c2($tanggal18);
				$cashout_d218 = $this->m_bulan->tampil_cashout_d2($tanggal18);
				$cashout_e218 = $this->m_bulan->tampil_cashout_e2($tanggal18);
				$cashout_f218 = $this->m_bulan->tampil_cashout_f2($tanggal18);
				$cashout_g218 = $this->m_bulan->tampil_cashout_g2($tanggal18);
				$cashout_h218 = $this->m_bulan->tampil_cashout_h2($tanggal18);
				$cashout_i218 = $this->m_bulan->tampil_cashout_i2($tanggal18);
				$cashout_j218 = $this->m_bulan->tampil_cashout_j2($tanggal18);
				$cashout_k218 = $this->m_bulan->tampil_cashout_k2($tanggal18);
				$cashout_l218 = $this->m_bulan->tampil_cashout_l2($tanggal18);
				$cashout_m218 = $this->m_bulan->tampil_cashout_m2($tanggal18);
				$cashout_n218 = $this->m_bulan->tampil_cashout_n2($tanggal18);
				$cashout_o218 = $this->m_bulan->tampil_cashout_o2($tanggal18);
				$cashout_p218 = $this->m_bulan->tampil_cashout_p2($tanggal18);
				$cashout_q218 = $this->m_bulan->tampil_cashout_q2($tanggal18);
				$cashout_r218 = $this->m_bulan->tampil_cashout_r2($tanggal18);
				$cashout_s218 = $this->m_bulan->tampil_cashout_s2($tanggal18);
				$cashout_t218 = $this->m_bulan->tampil_cashout_t2($tanggal18);
				$cashout_u218 = $this->m_bulan->tampil_cashout_u2($tanggal18);
				$cashout_v218 = $this->m_bulan->tampil_cashout_v2($tanggal18);
				$cashout_w218 = $this->m_bulan->tampil_cashout_w2($tanggal18);
				$cashout_x218 = $this->m_bulan->tampil_cashout_x2($tanggal18);
				$cashout_y218 = $this->m_bulan->tampil_cashout_y2($tanggal18);
				$cashout_z218 = $this->m_bulan->tampil_cashout_z2($tanggal18);
				$cashout_a318 = $this->m_bulan->tampil_cashout_a3($tanggal18);
				$cashout_b318 = $this->m_bulan->tampil_cashout_b3($tanggal18);
				$cashout_c318 = $this->m_bulan->tampil_cashout_c3($tanggal18);
				$cashout_d318 = $this->m_bulan->tampil_cashout_d3($tanggal18);
				$cashout_e318 = $this->m_bulan->tampil_cashout_e3($tanggal18);
				$cashout_f318 = $this->m_bulan->tampil_cashout_f3($tanggal18);
				$cashout_g318 = $this->m_bulan->tampil_cashout_g3($tanggal18);
				$cashout_h318 = $this->m_bulan->tampil_cashout_h3($tanggal18);
				$cashout_i318 = $this->m_bulan->tampil_cashout_i3($tanggal18);
				$cashout_j318 = $this->m_bulan->tampil_cashout_j3($tanggal18);
				$cashout_k318 = $this->m_bulan->tampil_cashout_k3($tanggal18);
				$cashout_l318 = $this->m_bulan->tampil_cashout_l3($tanggal18);
				$tCashoutProj_18 = $this->m_bulan->totalCashoutProj($tanggal18);
				$tCashoutReal_18 = $this->m_bulan->totalCashoutReal($tanggal18);

				// CASH-OUT Hari Ke-19
				$cashout_a19 = $this->m_bulan->tampil_cashout_a($tanggal19);
				$cashout_b19 = $this->m_bulan->tampil_cashout_b($tanggal19);
				$cashout_c19 = $this->m_bulan->tampil_cashout_c($tanggal19);
				$cashout_d19 = $this->m_bulan->tampil_cashout_d($tanggal19);
				$cashout_e19 = $this->m_bulan->tampil_cashout_e($tanggal19);
				$cashout_f19 = $this->m_bulan->tampil_cashout_f($tanggal19);
				$cashout_g19 = $this->m_bulan->tampil_cashout_g($tanggal19);
				$cashout_h19 = $this->m_bulan->tampil_cashout_h($tanggal19);
				$cashout_i19 = $this->m_bulan->tampil_cashout_i($tanggal19);
				$cashout_j19 = $this->m_bulan->tampil_cashout_j($tanggal19);
				$cashout_k19 = $this->m_bulan->tampil_cashout_k($tanggal19);
				$cashout_l19 = $this->m_bulan->tampil_cashout_l($tanggal19);
				$cashout_m19 = $this->m_bulan->tampil_cashout_m($tanggal19);
				$cashout_n19 = $this->m_bulan->tampil_cashout_n($tanggal19);
				$cashout_o19 = $this->m_bulan->tampil_cashout_o($tanggal19);
				$cashout_p19 = $this->m_bulan->tampil_cashout_p($tanggal19);
				$cashout_q19 = $this->m_bulan->tampil_cashout_q($tanggal19);
				$cashout_r19 = $this->m_bulan->tampil_cashout_r($tanggal19);
				$cashout_s19 = $this->m_bulan->tampil_cashout_s($tanggal19);
				$cashout_t19 = $this->m_bulan->tampil_cashout_t($tanggal19);
				$cashout_u19 = $this->m_bulan->tampil_cashout_u($tanggal19);
				$cashout_v19 = $this->m_bulan->tampil_cashout_v($tanggal19);
				$cashout_w19 = $this->m_bulan->tampil_cashout_w($tanggal19);
				$cashout_x19 = $this->m_bulan->tampil_cashout_x($tanggal19);
				$cashout_y19 = $this->m_bulan->tampil_cashout_y($tanggal19);
				$cashout_z19 = $this->m_bulan->tampil_cashout_z($tanggal19);
				$cashout_a219 = $this->m_bulan->tampil_cashout_a2($tanggal19);
				$cashout_b219 = $this->m_bulan->tampil_cashout_b2($tanggal19);
				$cashout_c219 = $this->m_bulan->tampil_cashout_c2($tanggal19);
				$cashout_d219 = $this->m_bulan->tampil_cashout_d2($tanggal19);
				$cashout_e219 = $this->m_bulan->tampil_cashout_e2($tanggal19);
				$cashout_f219 = $this->m_bulan->tampil_cashout_f2($tanggal19);
				$cashout_g219 = $this->m_bulan->tampil_cashout_g2($tanggal19);
				$cashout_h219 = $this->m_bulan->tampil_cashout_h2($tanggal19);
				$cashout_i219 = $this->m_bulan->tampil_cashout_i2($tanggal19);
				$cashout_j219 = $this->m_bulan->tampil_cashout_j2($tanggal19);
				$cashout_k219 = $this->m_bulan->tampil_cashout_k2($tanggal19);
				$cashout_l219 = $this->m_bulan->tampil_cashout_l2($tanggal19);
				$cashout_m219 = $this->m_bulan->tampil_cashout_m2($tanggal19);
				$cashout_n219 = $this->m_bulan->tampil_cashout_n2($tanggal19);
				$cashout_o219 = $this->m_bulan->tampil_cashout_o2($tanggal19);
				$cashout_p219 = $this->m_bulan->tampil_cashout_p2($tanggal19);
				$cashout_q219 = $this->m_bulan->tampil_cashout_q2($tanggal19);
				$cashout_r219 = $this->m_bulan->tampil_cashout_r2($tanggal19);
				$cashout_s219 = $this->m_bulan->tampil_cashout_s2($tanggal19);
				$cashout_t219 = $this->m_bulan->tampil_cashout_t2($tanggal19);
				$cashout_u219 = $this->m_bulan->tampil_cashout_u2($tanggal19);
				$cashout_v219 = $this->m_bulan->tampil_cashout_v2($tanggal19);
				$cashout_w219 = $this->m_bulan->tampil_cashout_w2($tanggal19);
				$cashout_x219 = $this->m_bulan->tampil_cashout_x2($tanggal19);
				$cashout_y219 = $this->m_bulan->tampil_cashout_y2($tanggal19);
				$cashout_z219 = $this->m_bulan->tampil_cashout_z2($tanggal19);
				$cashout_a319 = $this->m_bulan->tampil_cashout_a3($tanggal19);
				$cashout_b319 = $this->m_bulan->tampil_cashout_b3($tanggal19);
				$cashout_c319 = $this->m_bulan->tampil_cashout_c3($tanggal19);
				$cashout_d319 = $this->m_bulan->tampil_cashout_d3($tanggal19);
				$cashout_e319 = $this->m_bulan->tampil_cashout_e3($tanggal19);
				$cashout_f319 = $this->m_bulan->tampil_cashout_f3($tanggal19);
				$cashout_g319 = $this->m_bulan->tampil_cashout_g3($tanggal19);
				$cashout_h319 = $this->m_bulan->tampil_cashout_h3($tanggal19);
				$cashout_i319 = $this->m_bulan->tampil_cashout_i3($tanggal19);
				$cashout_j319 = $this->m_bulan->tampil_cashout_j3($tanggal19);
				$cashout_k319 = $this->m_bulan->tampil_cashout_k3($tanggal19);
				$cashout_l319 = $this->m_bulan->tampil_cashout_l3($tanggal19);
				$tCashoutProj_19 = $this->m_bulan->totalCashoutProj($tanggal19);
				$tCashoutReal_19 = $this->m_bulan->totalCashoutReal($tanggal19);

				// CASH-OUT Hari Ke-20
				$cashout_a20 = $this->m_bulan->tampil_cashout_a($tanggal20);
				$cashout_b20 = $this->m_bulan->tampil_cashout_b($tanggal20);
				$cashout_c20 = $this->m_bulan->tampil_cashout_c($tanggal20);
				$cashout_d20 = $this->m_bulan->tampil_cashout_d($tanggal20);
				$cashout_e20 = $this->m_bulan->tampil_cashout_e($tanggal20);
				$cashout_f20 = $this->m_bulan->tampil_cashout_f($tanggal20);
				$cashout_g20 = $this->m_bulan->tampil_cashout_g($tanggal20);
				$cashout_h20 = $this->m_bulan->tampil_cashout_h($tanggal20);
				$cashout_i20 = $this->m_bulan->tampil_cashout_i($tanggal20);
				$cashout_j20 = $this->m_bulan->tampil_cashout_j($tanggal20);
				$cashout_k20 = $this->m_bulan->tampil_cashout_k($tanggal20);
				$cashout_l20 = $this->m_bulan->tampil_cashout_l($tanggal20);
				$cashout_m20 = $this->m_bulan->tampil_cashout_m($tanggal20);
				$cashout_n20 = $this->m_bulan->tampil_cashout_n($tanggal20);
				$cashout_o20 = $this->m_bulan->tampil_cashout_o($tanggal20);
				$cashout_p20 = $this->m_bulan->tampil_cashout_p($tanggal20);
				$cashout_q20 = $this->m_bulan->tampil_cashout_q($tanggal20);
				$cashout_r20 = $this->m_bulan->tampil_cashout_r($tanggal20);
				$cashout_s20 = $this->m_bulan->tampil_cashout_s($tanggal20);
				$cashout_t20 = $this->m_bulan->tampil_cashout_t($tanggal20);
				$cashout_u20 = $this->m_bulan->tampil_cashout_u($tanggal20);
				$cashout_v20 = $this->m_bulan->tampil_cashout_v($tanggal20);
				$cashout_w20 = $this->m_bulan->tampil_cashout_w($tanggal20);
				$cashout_x20 = $this->m_bulan->tampil_cashout_x($tanggal20);
				$cashout_y20 = $this->m_bulan->tampil_cashout_y($tanggal20);
				$cashout_z20 = $this->m_bulan->tampil_cashout_z($tanggal20);
				$cashout_a220 = $this->m_bulan->tampil_cashout_a2($tanggal20);
				$cashout_b220 = $this->m_bulan->tampil_cashout_b2($tanggal20);
				$cashout_c220 = $this->m_bulan->tampil_cashout_c2($tanggal20);
				$cashout_d220 = $this->m_bulan->tampil_cashout_d2($tanggal20);
				$cashout_e220 = $this->m_bulan->tampil_cashout_e2($tanggal20);
				$cashout_f220 = $this->m_bulan->tampil_cashout_f2($tanggal20);
				$cashout_g220 = $this->m_bulan->tampil_cashout_g2($tanggal20);
				$cashout_h220 = $this->m_bulan->tampil_cashout_h2($tanggal20);
				$cashout_i220 = $this->m_bulan->tampil_cashout_i2($tanggal20);
				$cashout_j220 = $this->m_bulan->tampil_cashout_j2($tanggal20);
				$cashout_k220 = $this->m_bulan->tampil_cashout_k2($tanggal20);
				$cashout_l220 = $this->m_bulan->tampil_cashout_l2($tanggal20);
				$cashout_m220 = $this->m_bulan->tampil_cashout_m2($tanggal20);
				$cashout_n220 = $this->m_bulan->tampil_cashout_n2($tanggal20);
				$cashout_o220 = $this->m_bulan->tampil_cashout_o2($tanggal20);
				$cashout_p220 = $this->m_bulan->tampil_cashout_p2($tanggal20);
				$cashout_q220 = $this->m_bulan->tampil_cashout_q2($tanggal20);
				$cashout_r220 = $this->m_bulan->tampil_cashout_r2($tanggal20);
				$cashout_s220 = $this->m_bulan->tampil_cashout_s2($tanggal20);
				$cashout_t220 = $this->m_bulan->tampil_cashout_t2($tanggal20);
				$cashout_u220 = $this->m_bulan->tampil_cashout_u2($tanggal20);
				$cashout_v220 = $this->m_bulan->tampil_cashout_v2($tanggal20);
				$cashout_w220 = $this->m_bulan->tampil_cashout_w2($tanggal20);
				$cashout_x220 = $this->m_bulan->tampil_cashout_x2($tanggal20);
				$cashout_y220 = $this->m_bulan->tampil_cashout_y2($tanggal20);
				$cashout_z220 = $this->m_bulan->tampil_cashout_z2($tanggal20);
				$cashout_a320 = $this->m_bulan->tampil_cashout_a3($tanggal20);
				$cashout_b320 = $this->m_bulan->tampil_cashout_b3($tanggal20);
				$cashout_c320 = $this->m_bulan->tampil_cashout_c3($tanggal20);
				$cashout_d320 = $this->m_bulan->tampil_cashout_d3($tanggal20);
				$cashout_e320 = $this->m_bulan->tampil_cashout_e3($tanggal20);
				$cashout_f320 = $this->m_bulan->tampil_cashout_f3($tanggal20);
				$cashout_g320 = $this->m_bulan->tampil_cashout_g3($tanggal20);
				$cashout_h320 = $this->m_bulan->tampil_cashout_h3($tanggal20);
				$cashout_i320 = $this->m_bulan->tampil_cashout_i3($tanggal20);
				$cashout_j320 = $this->m_bulan->tampil_cashout_j3($tanggal20);
				$cashout_k320 = $this->m_bulan->tampil_cashout_k3($tanggal20);
				$cashout_l320 = $this->m_bulan->tampil_cashout_l3($tanggal20);
				$tCashoutProj_20 = $this->m_bulan->totalCashoutProj($tanggal20);
				$tCashoutReal_20 = $this->m_bulan->totalCashoutReal($tanggal20);

				// CASH-OUT Hari Ke-21
				$cashout_a21 = $this->m_bulan->tampil_cashout_a($tanggal21);
				$cashout_b21 = $this->m_bulan->tampil_cashout_b($tanggal21);
				$cashout_c21 = $this->m_bulan->tampil_cashout_c($tanggal21);
				$cashout_d21 = $this->m_bulan->tampil_cashout_d($tanggal21);
				$cashout_e21 = $this->m_bulan->tampil_cashout_e($tanggal21);
				$cashout_f21 = $this->m_bulan->tampil_cashout_f($tanggal21);
				$cashout_g21 = $this->m_bulan->tampil_cashout_g($tanggal21);
				$cashout_h21 = $this->m_bulan->tampil_cashout_h($tanggal21);
				$cashout_i21 = $this->m_bulan->tampil_cashout_i($tanggal21);
				$cashout_j21 = $this->m_bulan->tampil_cashout_j($tanggal21);
				$cashout_k21 = $this->m_bulan->tampil_cashout_k($tanggal21);
				$cashout_l21 = $this->m_bulan->tampil_cashout_l($tanggal21);
				$cashout_m21 = $this->m_bulan->tampil_cashout_m($tanggal21);
				$cashout_n21 = $this->m_bulan->tampil_cashout_n($tanggal21);
				$cashout_o21 = $this->m_bulan->tampil_cashout_o($tanggal21);
				$cashout_p21 = $this->m_bulan->tampil_cashout_p($tanggal21);
				$cashout_q21 = $this->m_bulan->tampil_cashout_q($tanggal21);
				$cashout_r21 = $this->m_bulan->tampil_cashout_r($tanggal21);
				$cashout_s21 = $this->m_bulan->tampil_cashout_s($tanggal21);
				$cashout_t21 = $this->m_bulan->tampil_cashout_t($tanggal21);
				$cashout_u21 = $this->m_bulan->tampil_cashout_u($tanggal21);
				$cashout_v21 = $this->m_bulan->tampil_cashout_v($tanggal21);
				$cashout_w21 = $this->m_bulan->tampil_cashout_w($tanggal21);
				$cashout_x21 = $this->m_bulan->tampil_cashout_x($tanggal21);
				$cashout_y21 = $this->m_bulan->tampil_cashout_y($tanggal21);
				$cashout_z21 = $this->m_bulan->tampil_cashout_z($tanggal21);
				$cashout_a221 = $this->m_bulan->tampil_cashout_a2($tanggal21);
				$cashout_b221 = $this->m_bulan->tampil_cashout_b2($tanggal21);
				$cashout_c221 = $this->m_bulan->tampil_cashout_c2($tanggal21);
				$cashout_d221 = $this->m_bulan->tampil_cashout_d2($tanggal21);
				$cashout_e221 = $this->m_bulan->tampil_cashout_e2($tanggal21);
				$cashout_f221 = $this->m_bulan->tampil_cashout_f2($tanggal21);
				$cashout_g221 = $this->m_bulan->tampil_cashout_g2($tanggal21);
				$cashout_h221 = $this->m_bulan->tampil_cashout_h2($tanggal21);
				$cashout_i221 = $this->m_bulan->tampil_cashout_i2($tanggal21);
				$cashout_j221 = $this->m_bulan->tampil_cashout_j2($tanggal21);
				$cashout_k221 = $this->m_bulan->tampil_cashout_k2($tanggal21);
				$cashout_l221 = $this->m_bulan->tampil_cashout_l2($tanggal21);
				$cashout_m221 = $this->m_bulan->tampil_cashout_m2($tanggal21);
				$cashout_n221 = $this->m_bulan->tampil_cashout_n2($tanggal21);
				$cashout_o221 = $this->m_bulan->tampil_cashout_o2($tanggal21);
				$cashout_p221 = $this->m_bulan->tampil_cashout_p2($tanggal21);
				$cashout_q221 = $this->m_bulan->tampil_cashout_q2($tanggal21);
				$cashout_r221 = $this->m_bulan->tampil_cashout_r2($tanggal21);
				$cashout_s221 = $this->m_bulan->tampil_cashout_s2($tanggal21);
				$cashout_t221 = $this->m_bulan->tampil_cashout_t2($tanggal21);
				$cashout_u221 = $this->m_bulan->tampil_cashout_u2($tanggal21);
				$cashout_v221 = $this->m_bulan->tampil_cashout_v2($tanggal21);
				$cashout_w221 = $this->m_bulan->tampil_cashout_w2($tanggal21);
				$cashout_x221 = $this->m_bulan->tampil_cashout_x2($tanggal21);
				$cashout_y221 = $this->m_bulan->tampil_cashout_y2($tanggal21);
				$cashout_z221 = $this->m_bulan->tampil_cashout_z2($tanggal21);
				$cashout_a321 = $this->m_bulan->tampil_cashout_a3($tanggal21);
				$cashout_b321 = $this->m_bulan->tampil_cashout_b3($tanggal21);
				$cashout_c321 = $this->m_bulan->tampil_cashout_c3($tanggal21);
				$cashout_d321 = $this->m_bulan->tampil_cashout_d3($tanggal21);
				$cashout_e321 = $this->m_bulan->tampil_cashout_e3($tanggal21);
				$cashout_f321 = $this->m_bulan->tampil_cashout_f3($tanggal21);
				$cashout_g321 = $this->m_bulan->tampil_cashout_g3($tanggal21);
				$cashout_h321 = $this->m_bulan->tampil_cashout_h3($tanggal21);
				$cashout_i321 = $this->m_bulan->tampil_cashout_i3($tanggal21);
				$cashout_j321 = $this->m_bulan->tampil_cashout_j3($tanggal21);
				$cashout_k321 = $this->m_bulan->tampil_cashout_k3($tanggal21);
				$cashout_l321 = $this->m_bulan->tampil_cashout_l3($tanggal21);
				$tCashoutProj_21 = $this->m_bulan->totalCashoutProj($tanggal21);
				$tCashoutReal_21 = $this->m_bulan->totalCashoutReal($tanggal21);

				// CASH-OUT Hari Ke-22
				$cashout_a22 = $this->m_bulan->tampil_cashout_a($tanggal22);
				$cashout_b22 = $this->m_bulan->tampil_cashout_b($tanggal22);
				$cashout_c22 = $this->m_bulan->tampil_cashout_c($tanggal22);
				$cashout_d22 = $this->m_bulan->tampil_cashout_d($tanggal22);
				$cashout_e22 = $this->m_bulan->tampil_cashout_e($tanggal22);
				$cashout_f22 = $this->m_bulan->tampil_cashout_f($tanggal22);
				$cashout_g22 = $this->m_bulan->tampil_cashout_g($tanggal22);
				$cashout_h22 = $this->m_bulan->tampil_cashout_h($tanggal22);
				$cashout_i22 = $this->m_bulan->tampil_cashout_i($tanggal22);
				$cashout_j22 = $this->m_bulan->tampil_cashout_j($tanggal22);
				$cashout_k22 = $this->m_bulan->tampil_cashout_k($tanggal22);
				$cashout_l22 = $this->m_bulan->tampil_cashout_l($tanggal22);
				$cashout_m22 = $this->m_bulan->tampil_cashout_m($tanggal22);
				$cashout_n22 = $this->m_bulan->tampil_cashout_n($tanggal22);
				$cashout_o22 = $this->m_bulan->tampil_cashout_o($tanggal22);
				$cashout_p22 = $this->m_bulan->tampil_cashout_p($tanggal22);
				$cashout_q22 = $this->m_bulan->tampil_cashout_q($tanggal22);
				$cashout_r22 = $this->m_bulan->tampil_cashout_r($tanggal22);
				$cashout_s22 = $this->m_bulan->tampil_cashout_s($tanggal22);
				$cashout_t22 = $this->m_bulan->tampil_cashout_t($tanggal22);
				$cashout_u22 = $this->m_bulan->tampil_cashout_u($tanggal22);
				$cashout_v22 = $this->m_bulan->tampil_cashout_v($tanggal22);
				$cashout_w22 = $this->m_bulan->tampil_cashout_w($tanggal22);
				$cashout_x22 = $this->m_bulan->tampil_cashout_x($tanggal22);
				$cashout_y22 = $this->m_bulan->tampil_cashout_y($tanggal22);
				$cashout_z22 = $this->m_bulan->tampil_cashout_z($tanggal22);
				$cashout_a222 = $this->m_bulan->tampil_cashout_a2($tanggal22);
				$cashout_b222 = $this->m_bulan->tampil_cashout_b2($tanggal22);
				$cashout_c222 = $this->m_bulan->tampil_cashout_c2($tanggal22);
				$cashout_d222 = $this->m_bulan->tampil_cashout_d2($tanggal22);
				$cashout_e222 = $this->m_bulan->tampil_cashout_e2($tanggal22);
				$cashout_f222 = $this->m_bulan->tampil_cashout_f2($tanggal22);
				$cashout_g222 = $this->m_bulan->tampil_cashout_g2($tanggal22);
				$cashout_h222 = $this->m_bulan->tampil_cashout_h2($tanggal22);
				$cashout_i222 = $this->m_bulan->tampil_cashout_i2($tanggal22);
				$cashout_j222 = $this->m_bulan->tampil_cashout_j2($tanggal22);
				$cashout_k222 = $this->m_bulan->tampil_cashout_k2($tanggal22);
				$cashout_l222 = $this->m_bulan->tampil_cashout_l2($tanggal22);
				$cashout_m222 = $this->m_bulan->tampil_cashout_m2($tanggal22);
				$cashout_n222 = $this->m_bulan->tampil_cashout_n2($tanggal22);
				$cashout_o222 = $this->m_bulan->tampil_cashout_o2($tanggal22);
				$cashout_p222 = $this->m_bulan->tampil_cashout_p2($tanggal22);
				$cashout_q222 = $this->m_bulan->tampil_cashout_q2($tanggal22);
				$cashout_r222 = $this->m_bulan->tampil_cashout_r2($tanggal22);
				$cashout_s222 = $this->m_bulan->tampil_cashout_s2($tanggal22);
				$cashout_t222 = $this->m_bulan->tampil_cashout_t2($tanggal22);
				$cashout_u222 = $this->m_bulan->tampil_cashout_u2($tanggal22);
				$cashout_v222 = $this->m_bulan->tampil_cashout_v2($tanggal22);
				$cashout_w222 = $this->m_bulan->tampil_cashout_w2($tanggal22);
				$cashout_x222 = $this->m_bulan->tampil_cashout_x2($tanggal22);
				$cashout_y222 = $this->m_bulan->tampil_cashout_y2($tanggal22);
				$cashout_z222 = $this->m_bulan->tampil_cashout_z2($tanggal22);
				$cashout_a322 = $this->m_bulan->tampil_cashout_a3($tanggal22);
				$cashout_b322 = $this->m_bulan->tampil_cashout_b3($tanggal22);
				$cashout_c322 = $this->m_bulan->tampil_cashout_c3($tanggal22);
				$cashout_d322 = $this->m_bulan->tampil_cashout_d3($tanggal22);
				$cashout_e322 = $this->m_bulan->tampil_cashout_e3($tanggal22);
				$cashout_f322 = $this->m_bulan->tampil_cashout_f3($tanggal22);
				$cashout_g322 = $this->m_bulan->tampil_cashout_g3($tanggal22);
				$cashout_h322 = $this->m_bulan->tampil_cashout_h3($tanggal22);
				$cashout_i322 = $this->m_bulan->tampil_cashout_i3($tanggal22);
				$cashout_j322 = $this->m_bulan->tampil_cashout_j3($tanggal22);
				$cashout_k322 = $this->m_bulan->tampil_cashout_k3($tanggal22);
				$cashout_l322 = $this->m_bulan->tampil_cashout_l3($tanggal22);
				$tCashoutProj_22 = $this->m_bulan->totalCashoutProj($tanggal22);
				$tCashoutReal_22 = $this->m_bulan->totalCashoutReal($tanggal22);

				// CASH-OUT Hari Ke-23
				$cashout_a23 = $this->m_bulan->tampil_cashout_a($tanggal23);
				$cashout_b23 = $this->m_bulan->tampil_cashout_b($tanggal23);
				$cashout_c23 = $this->m_bulan->tampil_cashout_c($tanggal23);
				$cashout_d23 = $this->m_bulan->tampil_cashout_d($tanggal23);
				$cashout_e23 = $this->m_bulan->tampil_cashout_e($tanggal23);
				$cashout_f23 = $this->m_bulan->tampil_cashout_f($tanggal23);
				$cashout_g23 = $this->m_bulan->tampil_cashout_g($tanggal23);
				$cashout_h23 = $this->m_bulan->tampil_cashout_h($tanggal23);
				$cashout_i23 = $this->m_bulan->tampil_cashout_i($tanggal23);
				$cashout_j23 = $this->m_bulan->tampil_cashout_j($tanggal23);
				$cashout_k23 = $this->m_bulan->tampil_cashout_k($tanggal23);
				$cashout_l23 = $this->m_bulan->tampil_cashout_l($tanggal23);
				$cashout_m23 = $this->m_bulan->tampil_cashout_m($tanggal23);
				$cashout_n23 = $this->m_bulan->tampil_cashout_n($tanggal23);
				$cashout_o23 = $this->m_bulan->tampil_cashout_o($tanggal23);
				$cashout_p23 = $this->m_bulan->tampil_cashout_p($tanggal23);
				$cashout_q23 = $this->m_bulan->tampil_cashout_q($tanggal23);
				$cashout_r23 = $this->m_bulan->tampil_cashout_r($tanggal23);
				$cashout_s23 = $this->m_bulan->tampil_cashout_s($tanggal23);
				$cashout_t23 = $this->m_bulan->tampil_cashout_t($tanggal23);
				$cashout_u23 = $this->m_bulan->tampil_cashout_u($tanggal23);
				$cashout_v23 = $this->m_bulan->tampil_cashout_v($tanggal23);
				$cashout_w23 = $this->m_bulan->tampil_cashout_w($tanggal23);
				$cashout_x23 = $this->m_bulan->tampil_cashout_x($tanggal23);
				$cashout_y23 = $this->m_bulan->tampil_cashout_y($tanggal23);
				$cashout_z23 = $this->m_bulan->tampil_cashout_z($tanggal23);
				$cashout_a223 = $this->m_bulan->tampil_cashout_a2($tanggal23);
				$cashout_b223 = $this->m_bulan->tampil_cashout_b2($tanggal23);
				$cashout_c223 = $this->m_bulan->tampil_cashout_c2($tanggal23);
				$cashout_d223 = $this->m_bulan->tampil_cashout_d2($tanggal23);
				$cashout_e223 = $this->m_bulan->tampil_cashout_e2($tanggal23);
				$cashout_f223 = $this->m_bulan->tampil_cashout_f2($tanggal23);
				$cashout_g223 = $this->m_bulan->tampil_cashout_g2($tanggal23);
				$cashout_h223 = $this->m_bulan->tampil_cashout_h2($tanggal23);
				$cashout_i223 = $this->m_bulan->tampil_cashout_i2($tanggal23);
				$cashout_j223 = $this->m_bulan->tampil_cashout_j2($tanggal23);
				$cashout_k223 = $this->m_bulan->tampil_cashout_k2($tanggal23);
				$cashout_l223 = $this->m_bulan->tampil_cashout_l2($tanggal23);
				$cashout_m223 = $this->m_bulan->tampil_cashout_m2($tanggal23);
				$cashout_n223 = $this->m_bulan->tampil_cashout_n2($tanggal23);
				$cashout_o223 = $this->m_bulan->tampil_cashout_o2($tanggal23);
				$cashout_p223 = $this->m_bulan->tampil_cashout_p2($tanggal23);
				$cashout_q223 = $this->m_bulan->tampil_cashout_q2($tanggal23);
				$cashout_r223 = $this->m_bulan->tampil_cashout_r2($tanggal23);
				$cashout_s223 = $this->m_bulan->tampil_cashout_s2($tanggal23);
				$cashout_t223 = $this->m_bulan->tampil_cashout_t2($tanggal23);
				$cashout_u223 = $this->m_bulan->tampil_cashout_u2($tanggal23);
				$cashout_v223 = $this->m_bulan->tampil_cashout_v2($tanggal23);
				$cashout_w223 = $this->m_bulan->tampil_cashout_w2($tanggal23);
				$cashout_x223 = $this->m_bulan->tampil_cashout_x2($tanggal23);
				$cashout_y223 = $this->m_bulan->tampil_cashout_y2($tanggal23);
				$cashout_z223 = $this->m_bulan->tampil_cashout_z2($tanggal23);
				$cashout_a323 = $this->m_bulan->tampil_cashout_a3($tanggal23);
				$cashout_b323 = $this->m_bulan->tampil_cashout_b3($tanggal23);
				$cashout_c323 = $this->m_bulan->tampil_cashout_c3($tanggal23);
				$cashout_d323 = $this->m_bulan->tampil_cashout_d3($tanggal23);
				$cashout_e323 = $this->m_bulan->tampil_cashout_e3($tanggal23);
				$cashout_f323 = $this->m_bulan->tampil_cashout_f3($tanggal23);
				$cashout_g323 = $this->m_bulan->tampil_cashout_g3($tanggal23);
				$cashout_h323 = $this->m_bulan->tampil_cashout_h3($tanggal23);
				$cashout_i323 = $this->m_bulan->tampil_cashout_i3($tanggal23);
				$cashout_j323 = $this->m_bulan->tampil_cashout_j3($tanggal23);
				$cashout_k323 = $this->m_bulan->tampil_cashout_k3($tanggal23);
				$cashout_l323 = $this->m_bulan->tampil_cashout_l3($tanggal23);
				$tCashoutProj_23 = $this->m_bulan->totalCashoutProj($tanggal23);
				$tCashoutReal_23 = $this->m_bulan->totalCashoutReal($tanggal23);

				// CASH-OUT Hari Ke-24
				$cashout_a24 = $this->m_bulan->tampil_cashout_a($tanggal24);
				$cashout_b24 = $this->m_bulan->tampil_cashout_b($tanggal24);
				$cashout_c24 = $this->m_bulan->tampil_cashout_c($tanggal24);
				$cashout_d24 = $this->m_bulan->tampil_cashout_d($tanggal24);
				$cashout_e24 = $this->m_bulan->tampil_cashout_e($tanggal24);
				$cashout_f24 = $this->m_bulan->tampil_cashout_f($tanggal24);
				$cashout_g24 = $this->m_bulan->tampil_cashout_g($tanggal24);
				$cashout_h24 = $this->m_bulan->tampil_cashout_h($tanggal24);
				$cashout_i24 = $this->m_bulan->tampil_cashout_i($tanggal24);
				$cashout_j24 = $this->m_bulan->tampil_cashout_j($tanggal24);
				$cashout_k24 = $this->m_bulan->tampil_cashout_k($tanggal24);
				$cashout_l24 = $this->m_bulan->tampil_cashout_l($tanggal24);
				$cashout_m24 = $this->m_bulan->tampil_cashout_m($tanggal24);
				$cashout_n24 = $this->m_bulan->tampil_cashout_n($tanggal24);
				$cashout_o24 = $this->m_bulan->tampil_cashout_o($tanggal24);
				$cashout_p24 = $this->m_bulan->tampil_cashout_p($tanggal24);
				$cashout_q24 = $this->m_bulan->tampil_cashout_q($tanggal24);
				$cashout_r24 = $this->m_bulan->tampil_cashout_r($tanggal24);
				$cashout_s24 = $this->m_bulan->tampil_cashout_s($tanggal24);
				$cashout_t24 = $this->m_bulan->tampil_cashout_t($tanggal24);
				$cashout_u24 = $this->m_bulan->tampil_cashout_u($tanggal24);
				$cashout_v24 = $this->m_bulan->tampil_cashout_v($tanggal24);
				$cashout_w24 = $this->m_bulan->tampil_cashout_w($tanggal24);
				$cashout_x24 = $this->m_bulan->tampil_cashout_x($tanggal24);
				$cashout_y24 = $this->m_bulan->tampil_cashout_y($tanggal24);
				$cashout_z24 = $this->m_bulan->tampil_cashout_z($tanggal24);
				$cashout_a224 = $this->m_bulan->tampil_cashout_a2($tanggal24);
				$cashout_b224 = $this->m_bulan->tampil_cashout_b2($tanggal24);
				$cashout_c224 = $this->m_bulan->tampil_cashout_c2($tanggal24);
				$cashout_d224 = $this->m_bulan->tampil_cashout_d2($tanggal24);
				$cashout_e224 = $this->m_bulan->tampil_cashout_e2($tanggal24);
				$cashout_f224 = $this->m_bulan->tampil_cashout_f2($tanggal24);
				$cashout_g224 = $this->m_bulan->tampil_cashout_g2($tanggal24);
				$cashout_h224 = $this->m_bulan->tampil_cashout_h2($tanggal24);
				$cashout_i224 = $this->m_bulan->tampil_cashout_i2($tanggal24);
				$cashout_j224 = $this->m_bulan->tampil_cashout_j2($tanggal24);
				$cashout_k224 = $this->m_bulan->tampil_cashout_k2($tanggal24);
				$cashout_l224 = $this->m_bulan->tampil_cashout_l2($tanggal24);
				$cashout_m224 = $this->m_bulan->tampil_cashout_m2($tanggal24);
				$cashout_n224 = $this->m_bulan->tampil_cashout_n2($tanggal24);
				$cashout_o224 = $this->m_bulan->tampil_cashout_o2($tanggal24);
				$cashout_p224 = $this->m_bulan->tampil_cashout_p2($tanggal24);
				$cashout_q224 = $this->m_bulan->tampil_cashout_q2($tanggal24);
				$cashout_r224 = $this->m_bulan->tampil_cashout_r2($tanggal24);
				$cashout_s224 = $this->m_bulan->tampil_cashout_s2($tanggal24);
				$cashout_t224 = $this->m_bulan->tampil_cashout_t2($tanggal24);
				$cashout_u224 = $this->m_bulan->tampil_cashout_u2($tanggal24);
				$cashout_v224 = $this->m_bulan->tampil_cashout_v2($tanggal24);
				$cashout_w224 = $this->m_bulan->tampil_cashout_w2($tanggal24);
				$cashout_x224 = $this->m_bulan->tampil_cashout_x2($tanggal24);
				$cashout_y224 = $this->m_bulan->tampil_cashout_y2($tanggal24);
				$cashout_z224 = $this->m_bulan->tampil_cashout_z2($tanggal24);
				$cashout_a324 = $this->m_bulan->tampil_cashout_a3($tanggal24);
				$cashout_b324 = $this->m_bulan->tampil_cashout_b3($tanggal24);
				$cashout_c324 = $this->m_bulan->tampil_cashout_c3($tanggal24);
				$cashout_d324 = $this->m_bulan->tampil_cashout_d3($tanggal24);
				$cashout_e324 = $this->m_bulan->tampil_cashout_e3($tanggal24);
				$cashout_f324 = $this->m_bulan->tampil_cashout_f3($tanggal24);
				$cashout_g324 = $this->m_bulan->tampil_cashout_g3($tanggal24);
				$cashout_h324 = $this->m_bulan->tampil_cashout_h3($tanggal24);
				$cashout_i324 = $this->m_bulan->tampil_cashout_i3($tanggal24);
				$cashout_j324 = $this->m_bulan->tampil_cashout_j3($tanggal24);
				$cashout_k324 = $this->m_bulan->tampil_cashout_k3($tanggal24);
				$cashout_l324 = $this->m_bulan->tampil_cashout_l3($tanggal24);
				$tCashoutProj_24 = $this->m_bulan->totalCashoutProj($tanggal24);
				$tCashoutReal_24 = $this->m_bulan->totalCashoutReal($tanggal24);

				// CASH-OUT Hari Ke-25
				$cashout_a25 = $this->m_bulan->tampil_cashout_a($tanggal25);
				$cashout_b25 = $this->m_bulan->tampil_cashout_b($tanggal25);
				$cashout_c25 = $this->m_bulan->tampil_cashout_c($tanggal25);
				$cashout_d25 = $this->m_bulan->tampil_cashout_d($tanggal25);
				$cashout_e25 = $this->m_bulan->tampil_cashout_e($tanggal25);
				$cashout_f25 = $this->m_bulan->tampil_cashout_f($tanggal25);
				$cashout_g25 = $this->m_bulan->tampil_cashout_g($tanggal25);
				$cashout_h25 = $this->m_bulan->tampil_cashout_h($tanggal25);
				$cashout_i25 = $this->m_bulan->tampil_cashout_i($tanggal25);
				$cashout_j25 = $this->m_bulan->tampil_cashout_j($tanggal25);
				$cashout_k25 = $this->m_bulan->tampil_cashout_k($tanggal25);
				$cashout_l25 = $this->m_bulan->tampil_cashout_l($tanggal25);
				$cashout_m25 = $this->m_bulan->tampil_cashout_m($tanggal25);
				$cashout_n25 = $this->m_bulan->tampil_cashout_n($tanggal25);
				$cashout_o25 = $this->m_bulan->tampil_cashout_o($tanggal25);
				$cashout_p25 = $this->m_bulan->tampil_cashout_p($tanggal25);
				$cashout_q25 = $this->m_bulan->tampil_cashout_q($tanggal25);
				$cashout_r25 = $this->m_bulan->tampil_cashout_r($tanggal25);
				$cashout_s25 = $this->m_bulan->tampil_cashout_s($tanggal25);
				$cashout_t25 = $this->m_bulan->tampil_cashout_t($tanggal25);
				$cashout_u25 = $this->m_bulan->tampil_cashout_u($tanggal25);
				$cashout_v25 = $this->m_bulan->tampil_cashout_v($tanggal25);
				$cashout_w25 = $this->m_bulan->tampil_cashout_w($tanggal25);
				$cashout_x25 = $this->m_bulan->tampil_cashout_x($tanggal25);
				$cashout_y25 = $this->m_bulan->tampil_cashout_y($tanggal25);
				$cashout_z25 = $this->m_bulan->tampil_cashout_z($tanggal25);
				$cashout_a225 = $this->m_bulan->tampil_cashout_a2($tanggal25);
				$cashout_b225 = $this->m_bulan->tampil_cashout_b2($tanggal25);
				$cashout_c225 = $this->m_bulan->tampil_cashout_c2($tanggal25);
				$cashout_d225 = $this->m_bulan->tampil_cashout_d2($tanggal25);
				$cashout_e225 = $this->m_bulan->tampil_cashout_e2($tanggal25);
				$cashout_f225 = $this->m_bulan->tampil_cashout_f2($tanggal25);
				$cashout_g225 = $this->m_bulan->tampil_cashout_g2($tanggal25);
				$cashout_h225 = $this->m_bulan->tampil_cashout_h2($tanggal25);
				$cashout_i225 = $this->m_bulan->tampil_cashout_i2($tanggal25);
				$cashout_j225 = $this->m_bulan->tampil_cashout_j2($tanggal25);
				$cashout_k225 = $this->m_bulan->tampil_cashout_k2($tanggal25);
				$cashout_l225 = $this->m_bulan->tampil_cashout_l2($tanggal25);
				$cashout_m225 = $this->m_bulan->tampil_cashout_m2($tanggal25);
				$cashout_n225 = $this->m_bulan->tampil_cashout_n2($tanggal25);
				$cashout_o225 = $this->m_bulan->tampil_cashout_o2($tanggal25);
				$cashout_p225 = $this->m_bulan->tampil_cashout_p2($tanggal25);
				$cashout_q225 = $this->m_bulan->tampil_cashout_q2($tanggal25);
				$cashout_r225 = $this->m_bulan->tampil_cashout_r2($tanggal25);
				$cashout_s225 = $this->m_bulan->tampil_cashout_s2($tanggal25);
				$cashout_t225 = $this->m_bulan->tampil_cashout_t2($tanggal25);
				$cashout_u225 = $this->m_bulan->tampil_cashout_u2($tanggal25);
				$cashout_v225 = $this->m_bulan->tampil_cashout_v2($tanggal25);
				$cashout_w225 = $this->m_bulan->tampil_cashout_w2($tanggal25);
				$cashout_x225 = $this->m_bulan->tampil_cashout_x2($tanggal25);
				$cashout_y225 = $this->m_bulan->tampil_cashout_y2($tanggal25);
				$cashout_z225 = $this->m_bulan->tampil_cashout_z2($tanggal25);
				$cashout_a325 = $this->m_bulan->tampil_cashout_a3($tanggal25);
				$cashout_b325 = $this->m_bulan->tampil_cashout_b3($tanggal25);
				$cashout_c325 = $this->m_bulan->tampil_cashout_c3($tanggal25);
				$cashout_d325 = $this->m_bulan->tampil_cashout_d3($tanggal25);
				$cashout_e325 = $this->m_bulan->tampil_cashout_e3($tanggal25);
				$cashout_f325 = $this->m_bulan->tampil_cashout_f3($tanggal25);
				$cashout_g325 = $this->m_bulan->tampil_cashout_g3($tanggal25);
				$cashout_h325 = $this->m_bulan->tampil_cashout_h3($tanggal25);
				$cashout_i325 = $this->m_bulan->tampil_cashout_i3($tanggal25);
				$cashout_j325 = $this->m_bulan->tampil_cashout_j3($tanggal25);
				$cashout_k325 = $this->m_bulan->tampil_cashout_k3($tanggal25);
				$cashout_l325 = $this->m_bulan->tampil_cashout_l3($tanggal25);
				$tCashoutProj_25 = $this->m_bulan->totalCashoutProj($tanggal25);
				$tCashoutReal_25 = $this->m_bulan->totalCashoutReal($tanggal25);


				$this->load->view('header');
				$this->load->view('sidebar');
				$this->load->view('v_bulan_cari',array(

					// Hari & Tanggal
					'hari1' => $hari1,
					'hari2' => $hari2,
					'hari3' => $hari3,
					'hari4' => $hari4,
					'hari5' => $hari5,
					'hari6' => $hari6,
					'hari7' => $hari7,
					'hari8' => $hari8,
					'hari9' => $hari9,
					'hari10' => $hari10,
					'hari11' => $hari11,
					'hari12' => $hari12,
					'hari13' => $hari13,
					'hari14' => $hari14,
					'hari15' => $hari15,
					'hari16' => $hari16,
					'hari17' => $hari17,
					'hari18' => $hari18,
					'hari19' => $hari19,
					'hari20' => $hari20,
					'hari21' => $hari21,
					'hari22' => $hari22,
					'hari23' => $hari23,
					'hari24' => $hari24,
					'hari25' => $hari25,
					
					'tanggal1' => $tanggal1,
					'tanggal2' => $tanggal2,
					'tanggal3' => $tanggal3,
					'tanggal4' => $tanggal4,
					'tanggal5' => $tanggal5,
					'tanggal6' => $tanggal6,
					'tanggal7' => $tanggal7,
					'tanggal8' => $tanggal8,
					'tanggal9' => $tanggal9,
					'tanggal10' => $tanggal10,
					'tanggal11' => $tanggal11,
					'tanggal12' => $tanggal12,
					'tanggal13' => $tanggal13,
					'tanggal14' => $tanggal14,
					'tanggal15' => $tanggal15,
					'tanggal16' => $tanggal16,
					'tanggal17' => $tanggal17,
					'tanggal18' => $tanggal18,
					'tanggal19' => $tanggal19,
					'tanggal20' => $tanggal20,
					'tanggal21' => $tanggal21,
					'tanggal22' => $tanggal22,
					'tanggal23' => $tanggal23,
					'tanggal24' => $tanggal24,
					'tanggal25' => $tanggal25,

					// Saldo Awal
					'row_salaw1' => $salaw_1,
					'row_salaw2' => $salaw_2,
					'row_salaw3' => $salaw_3,
					'row_salaw4' => $salaw_4,
					'row_salaw5' => $salaw_5,
					'row_salaw6' => $salaw_6,
					'row_salaw7' => $salaw_7,
					'row_salaw8' => $salaw_8,
					'row_salaw9' => $salaw_9,
					'row_salaw10' => $salaw_10,
					'row_salaw11' => $salaw_11,
					'row_salaw12' => $salaw_12,
					'row_salaw13' => $salaw_13,
					'row_salaw14' => $salaw_14,
					'row_salaw15' => $salaw_15,
					'row_salaw16' => $salaw_16,
					'row_salaw17' => $salaw_17,
					'row_salaw18' => $salaw_18,
					'row_salaw19' => $salaw_19,
					'row_salaw20' => $salaw_20,
					'row_salaw21' => $salaw_21,
					'row_salaw22' => $salaw_22,
					'row_salaw23' => $salaw_23,
					'row_salaw24' => $salaw_24,
					'row_salaw25' => $salaw_25,

					// Allocated Cash
					'row_allo1' => $allo_1,
					'row_allo2' => $allo_2,
					'row_allo3' => $allo_3,
					'row_allo4' => $allo_4,
					'row_allo5' => $allo_5,
					'row_allo6' => $allo_6,
					'row_allo7' => $allo_7,
					'row_allo8' => $allo_8,
					'row_allo9' => $allo_9,
					'row_allo10' => $allo_10,
					'row_allo11' => $allo_11,
					'row_allo12' => $allo_12,
					'row_allo13' => $allo_13,
					'row_allo14' => $allo_14,
					'row_allo15' => $allo_15,
					'row_allo16' => $allo_16,
					'row_allo17' => $allo_17,
					'row_allo18' => $allo_18,
					'row_allo19' => $allo_19,
					'row_allo20' => $allo_20,
					'row_allo21' => $allo_21,
					'row_allo22' => $allo_22,
					'row_allo23' => $allo_23,
					'row_allo24' => $allo_24,
					'row_allo25' => $allo_25,

					// Ready Cash
					'row_read1' => $read_1,
					'row_read2' => $read_2,
					'row_read3' => $read_3,
					'row_read4' => $read_4,
					'row_read5' => $read_5,
					'row_read6' => $read_6,
					'row_read7' => $read_7,
					'row_read8' => $read_8,
					'row_read9' => $read_9,
					'row_read10' => $read_10,
					'row_read11' => $read_11,
					'row_read12' => $read_12,
					'row_read13' => $read_13,
					'row_read14' => $read_14,
					'row_read15' => $read_15,
					'row_read16' => $read_16,
					'row_read17' => $read_17,
					'row_read18' => $read_18,
					'row_read19' => $read_19,
					'row_read20' => $read_20,
					'row_read21' => $read_21,
					'row_read22' => $read_22,
					'row_read23' => $read_23,
					'row_read24' => $read_24,
					'row_read25' => $read_25,

					// Kas Besar Cabang
					'row_kbc1' => $kbc_1,
					'row_kbc2' => $kbc_2,
					'row_kbc3' => $kbc_3,
					'row_kbc4' => $kbc_4,
					'row_kbc5' => $kbc_5,
					'row_kbc6' => $kbc_6,
					'row_kbc7' => $kbc_7,
					'row_kbc8' => $kbc_8,
					'row_kbc9' => $kbc_9,
					'row_kbc10' => $kbc_10,
					'row_kbc11' => $kbc_11,
					'row_kbc12' => $kbc_12,
					'row_kbc13' => $kbc_13,
					'row_kbc14' => $kbc_14,
					'row_kbc15' => $kbc_15,
					'row_kbc16' => $kbc_16,
					'row_kbc17' => $kbc_17,
					'row_kbc18' => $kbc_18,
					'row_kbc19' => $kbc_19,
					'row_kbc20' => $kbc_20,
					'row_kbc21' => $kbc_21,
					'row_kbc22' => $kbc_22,
					'row_kbc23' => $kbc_23,
					'row_kbc24' => $kbc_24,
					'row_kbc25' => $kbc_25,

					// Note
					'row_note1' => $note_1,
					'row_note2' => $note_2,
					'row_note3' => $note_3,
					'row_note4' => $note_4,
					'row_note5' => $note_5,
					'row_note6' => $note_6,
					'row_note7' => $note_7,
					'row_note8' => $note_8,
					'row_note9' => $note_9,
					'row_note10' => $note_10,
					'row_note11' => $note_11,
					'row_note12' => $note_12,
					'row_note13' => $note_13,
					'row_note14' => $note_14,
					'row_note15' => $note_15,
					'row_note16' => $note_16,
					'row_note17' => $note_17,
					'row_note18' => $note_18,
					'row_note19' => $note_19,
					'row_note20' => $note_20,
					'row_note21' => $note_21,
					'row_note22' => $note_22,
					'row_note23' => $note_23,
					'row_note24' => $note_24,
					'row_note25' => $note_25,

					// Status Closing
					'row_closing1' => $closing_1,
					'row_closing2' => $closing_2,
					'row_closing3' => $closing_3,
					'row_closing4' => $closing_4,
					'row_closing5' => $closing_5,
					'row_closing6' => $closing_6,
					'row_closing7' => $closing_7,
					'row_closing8' => $closing_8,
					'row_closing9' => $closing_9,
					'row_closing10' => $closing_10,
					'row_closing11' => $closing_11,
					'row_closing12' => $closing_12,
					'row_closing13' => $closing_13,
					'row_closing14' => $closing_14,
					'row_closing15' => $closing_15,
					'row_closing16' => $closing_16,
					'row_closing17' => $closing_17,
					'row_closing18' => $closing_18,
					'row_closing19' => $closing_19,
					'row_closing20' => $closing_20,
					'row_closing21' => $closing_21,
					'row_closing22' => $closing_22,
					'row_closing23' => $closing_23,
					'row_closing24' => $closing_24,
					'row_closing25' => $closing_25,

					// Deposito
					'row_deposito1' => $deposito_1,
					'row_deposito2' => $deposito_2,
					'row_deposito3' => $deposito_3,
					'row_deposito4' => $deposito_4,
					'row_deposito5' => $deposito_5,
					'row_deposito6' => $deposito_6,
					'row_deposito7' => $deposito_7,
					'row_deposito8' => $deposito_8,
					'row_deposito9' => $deposito_9,
					'row_deposito10' => $deposito_10,
					'row_deposito11' => $deposito_11,
					'row_deposito12' => $deposito_12,
					'row_deposito13' => $deposito_13,
					'row_deposito14' => $deposito_14,
					'row_deposito15' => $deposito_15,
					'row_deposito16' => $deposito_16,
					'row_deposito17' => $deposito_17,
					'row_deposito18' => $deposito_18,
					'row_deposito19' => $deposito_19,
					'row_deposito20' => $deposito_20,
					'row_deposito21' => $deposito_21,
					'row_deposito22' => $deposito_22,
					'row_deposito23' => $deposito_23,
					'row_deposito24' => $deposito_24,
					'row_deposito25' => $deposito_25,

					// B2b
					'row_b2b1' => $b2b_1,
					'row_b2b2' => $b2b_2,
					'row_b2b3' => $b2b_3,
					'row_b2b4' => $b2b_4,
					'row_b2b5' => $b2b_5,
					'row_b2b6' => $b2b_6,
					'row_b2b7' => $b2b_7,
					'row_b2b8' => $b2b_8,
					'row_b2b9' => $b2b_9,
					'row_b2b10' => $b2b_10,
					'row_b2b11' => $b2b_11,
					'row_b2b12' => $b2b_12,
					'row_b2b13' => $b2b_13,
					'row_b2b14' => $b2b_14,
					'row_b2b15' => $b2b_15,
					'row_b2b16' => $b2b_16,
					'row_b2b17' => $b2b_17,
					'row_b2b18' => $b2b_18,
					'row_b2b19' => $b2b_19,
					'row_b2b20' => $b2b_20,
					'row_b2b21' => $b2b_21,
					'row_b2b22' => $b2b_22,
					'row_b2b23' => $b2b_23,
					'row_b2b24' => $b2b_24,
					'row_b2b25' => $b2b_25,

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

					// Cash-In Hari Ke-6
					'row_cashin_a6' => $cashin_a6,
					'row_cashin_b6' => $cashin_b6,
					'row_cashin_c6' => $cashin_c6,
					'row_cashin_d6' => $cashin_d6,
					'row_cashin_e6' => $cashin_e6,
					'row_cashin_f6' => $cashin_f6,
					'row_cashin_g6' => $cashin_g6,
					'row_cashin_h6' => $cashin_h6,
					'row_cashin_i6' => $cashin_i6,
					'row_cashin_j6' => $cashin_j6,
					'row_cashin_k6' => $cashin_k6,
					'row_cashin_l6' => $cashin_l6,
					'row_cashin_m6' => $cashin_m6,
					'row_cashin_n6' => $cashin_n6,
					'row_cashin_o6' => $cashin_o6,
					'row_cashin_p6' => $cashin_p6,
					'row_cashin_q6' => $cashin_q6,
					'row_cashin_r6' => $cashin_r6,
					'row_cashin_s6' => $cashin_s6,
					'row_tCashinProj6' => $tCashinProj_6,
					'row_tCashinReal6' => $tCashinReal_6,

					// Cash-In Hari Ke-7
					'row_cashin_a7' => $cashin_a7,
					'row_cashin_b7' => $cashin_b7,
					'row_cashin_c7' => $cashin_c7,
					'row_cashin_d7' => $cashin_d7,
					'row_cashin_e7' => $cashin_e7,
					'row_cashin_f7' => $cashin_f7,
					'row_cashin_g7' => $cashin_g7,
					'row_cashin_h7' => $cashin_h7,
					'row_cashin_i7' => $cashin_i7,
					'row_cashin_j7' => $cashin_j7,
					'row_cashin_k7' => $cashin_k7,
					'row_cashin_l7' => $cashin_l7,
					'row_cashin_m7' => $cashin_m7,
					'row_cashin_n7' => $cashin_n7,
					'row_cashin_o7' => $cashin_o7,
					'row_cashin_p7' => $cashin_p7,
					'row_cashin_q7' => $cashin_q7,
					'row_cashin_r7' => $cashin_r7,
					'row_cashin_s7' => $cashin_s7,
					'row_tCashinProj7' => $tCashinProj_7,
					'row_tCashinReal7' => $tCashinReal_7,

					// Cash-In Hari Ke-8
					'row_cashin_a8' => $cashin_a8,
					'row_cashin_b8' => $cashin_b8,
					'row_cashin_c8' => $cashin_c8,
					'row_cashin_d8' => $cashin_d8,
					'row_cashin_e8' => $cashin_e8,
					'row_cashin_f8' => $cashin_f8,
					'row_cashin_g8' => $cashin_g8,
					'row_cashin_h8' => $cashin_h8,
					'row_cashin_i8' => $cashin_i8,
					'row_cashin_j8' => $cashin_j8,
					'row_cashin_k8' => $cashin_k8,
					'row_cashin_l8' => $cashin_l8,
					'row_cashin_m8' => $cashin_m8,
					'row_cashin_n8' => $cashin_n8,
					'row_cashin_o8' => $cashin_o8,
					'row_cashin_p8' => $cashin_p8,
					'row_cashin_q8' => $cashin_q8,
					'row_cashin_r8' => $cashin_r8,
					'row_cashin_s8' => $cashin_s8,
					'row_tCashinProj8' => $tCashinProj_8,
					'row_tCashinReal8' => $tCashinReal_8,

					// Cash-In Hari Ke-9
					'row_cashin_a9' => $cashin_a9,
					'row_cashin_b9' => $cashin_b9,
					'row_cashin_c9' => $cashin_c9,
					'row_cashin_d9' => $cashin_d9,
					'row_cashin_e9' => $cashin_e9,
					'row_cashin_f9' => $cashin_f9,
					'row_cashin_g9' => $cashin_g9,
					'row_cashin_h9' => $cashin_h9,
					'row_cashin_i9' => $cashin_i9,
					'row_cashin_j9' => $cashin_j9,
					'row_cashin_k9' => $cashin_k9,
					'row_cashin_l9' => $cashin_l9,
					'row_cashin_m9' => $cashin_m9,
					'row_cashin_n9' => $cashin_n9,
					'row_cashin_o9' => $cashin_o9,
					'row_cashin_p9' => $cashin_p9,
					'row_cashin_q9' => $cashin_q9,
					'row_cashin_r9' => $cashin_r9,
					'row_cashin_s9' => $cashin_s9,
					'row_tCashinProj9' => $tCashinProj_9,
					'row_tCashinReal9' => $tCashinReal_9,

					// Cash-In Hari Ke-10
					'row_cashin_a10' => $cashin_a10,
					'row_cashin_b10' => $cashin_b10,
					'row_cashin_c10' => $cashin_c10,
					'row_cashin_d10' => $cashin_d10,
					'row_cashin_e10' => $cashin_e10,
					'row_cashin_f10' => $cashin_f10,
					'row_cashin_g10' => $cashin_g10,
					'row_cashin_h10' => $cashin_h10,
					'row_cashin_i10' => $cashin_i10,
					'row_cashin_j10' => $cashin_j10,
					'row_cashin_k10' => $cashin_k10,
					'row_cashin_l10' => $cashin_l10,
					'row_cashin_m10' => $cashin_m10,
					'row_cashin_n10' => $cashin_n10,
					'row_cashin_o10' => $cashin_o10,
					'row_cashin_p10' => $cashin_p10,
					'row_cashin_q10' => $cashin_q10,
					'row_cashin_r10' => $cashin_r10,
					'row_cashin_s10' => $cashin_s10,
					'row_tCashinProj10' => $tCashinProj_10,
					'row_tCashinReal10' => $tCashinReal_10,

					// Cash-In Hari Ke-11
					'row_cashin_a11' => $cashin_a11,
					'row_cashin_b11' => $cashin_b11,
					'row_cashin_c11' => $cashin_c11,
					'row_cashin_d11' => $cashin_d11,
					'row_cashin_e11' => $cashin_e11,
					'row_cashin_f11' => $cashin_f11,
					'row_cashin_g11' => $cashin_g11,
					'row_cashin_h11' => $cashin_h11,
					'row_cashin_i11' => $cashin_i11,
					'row_cashin_j11' => $cashin_j11,
					'row_cashin_k11' => $cashin_k11,
					'row_cashin_l11' => $cashin_l11,
					'row_cashin_m11' => $cashin_m11,
					'row_cashin_n11' => $cashin_n11,
					'row_cashin_o11' => $cashin_o11,
					'row_cashin_p11' => $cashin_p11,
					'row_cashin_q11' => $cashin_q11,
					'row_cashin_r11' => $cashin_r11,
					'row_cashin_s11' => $cashin_s11,
					'row_tCashinProj11' => $tCashinProj_11,
					'row_tCashinReal11' => $tCashinReal_11,

					// Cash-In Hari Ke-12
					'row_cashin_a12' => $cashin_a12,
					'row_cashin_b12' => $cashin_b12,
					'row_cashin_c12' => $cashin_c12,
					'row_cashin_d12' => $cashin_d12,
					'row_cashin_e12' => $cashin_e12,
					'row_cashin_f12' => $cashin_f12,
					'row_cashin_g12' => $cashin_g12,
					'row_cashin_h12' => $cashin_h12,
					'row_cashin_i12' => $cashin_i12,
					'row_cashin_j12' => $cashin_j12,
					'row_cashin_k12' => $cashin_k12,
					'row_cashin_l12' => $cashin_l12,
					'row_cashin_m12' => $cashin_m12,
					'row_cashin_n12' => $cashin_n12,
					'row_cashin_o12' => $cashin_o12,
					'row_cashin_p12' => $cashin_p12,
					'row_cashin_q12' => $cashin_q12,
					'row_cashin_r12' => $cashin_r12,
					'row_cashin_s12' => $cashin_s12,
					'row_tCashinProj12' => $tCashinProj_12,
					'row_tCashinReal12' => $tCashinReal_12,

					// Cash-In Hari Ke-13
					'row_cashin_a13' => $cashin_a13,
					'row_cashin_b13' => $cashin_b13,
					'row_cashin_c13' => $cashin_c13,
					'row_cashin_d13' => $cashin_d13,
					'row_cashin_e13' => $cashin_e13,
					'row_cashin_f13' => $cashin_f13,
					'row_cashin_g13' => $cashin_g13,
					'row_cashin_h13' => $cashin_h13,
					'row_cashin_i13' => $cashin_i13,
					'row_cashin_j13' => $cashin_j13,
					'row_cashin_k13' => $cashin_k13,
					'row_cashin_l13' => $cashin_l13,
					'row_cashin_m13' => $cashin_m13,
					'row_cashin_n13' => $cashin_n13,
					'row_cashin_o13' => $cashin_o13,
					'row_cashin_p13' => $cashin_p13,
					'row_cashin_q13' => $cashin_q13,
					'row_cashin_r13' => $cashin_r13,
					'row_cashin_s13' => $cashin_s13,
					'row_tCashinProj13' => $tCashinProj_13,
					'row_tCashinReal13' => $tCashinReal_13,

					// Cash-In Hari Ke-14
					'row_cashin_a14' => $cashin_a14,
					'row_cashin_b14' => $cashin_b14,
					'row_cashin_c14' => $cashin_c14,
					'row_cashin_d14' => $cashin_d14,
					'row_cashin_e14' => $cashin_e14,
					'row_cashin_f14' => $cashin_f14,
					'row_cashin_g14' => $cashin_g14,
					'row_cashin_h14' => $cashin_h14,
					'row_cashin_i14' => $cashin_i14,
					'row_cashin_j14' => $cashin_j14,
					'row_cashin_k14' => $cashin_k14,
					'row_cashin_l14' => $cashin_l14,
					'row_cashin_m14' => $cashin_m14,
					'row_cashin_n14' => $cashin_n14,
					'row_cashin_o14' => $cashin_o14,
					'row_cashin_p14' => $cashin_p14,
					'row_cashin_q14' => $cashin_q14,
					'row_cashin_r14' => $cashin_r14,
					'row_cashin_s14' => $cashin_s14,
					'row_tCashinProj14' => $tCashinProj_14,
					'row_tCashinReal14' => $tCashinReal_14,

					// Cash-In Hari Ke-15
					'row_cashin_a15' => $cashin_a15,
					'row_cashin_b15' => $cashin_b15,
					'row_cashin_c15' => $cashin_c15,
					'row_cashin_d15' => $cashin_d15,
					'row_cashin_e15' => $cashin_e15,
					'row_cashin_f15' => $cashin_f15,
					'row_cashin_g15' => $cashin_g15,
					'row_cashin_h15' => $cashin_h15,
					'row_cashin_i15' => $cashin_i15,
					'row_cashin_j15' => $cashin_j15,
					'row_cashin_k15' => $cashin_k15,
					'row_cashin_l15' => $cashin_l15,
					'row_cashin_m15' => $cashin_m15,
					'row_cashin_n15' => $cashin_n15,
					'row_cashin_o15' => $cashin_o15,
					'row_cashin_p15' => $cashin_p15,
					'row_cashin_q15' => $cashin_q15,
					'row_cashin_r15' => $cashin_r15,
					'row_cashin_s15' => $cashin_s15,
					'row_tCashinProj15' => $tCashinProj_15,
					'row_tCashinReal15' => $tCashinReal_15,

					// Cash-In Hari Ke-16
					'row_cashin_a16' => $cashin_a16,
					'row_cashin_b16' => $cashin_b16,
					'row_cashin_c16' => $cashin_c16,
					'row_cashin_d16' => $cashin_d16,
					'row_cashin_e16' => $cashin_e16,
					'row_cashin_f16' => $cashin_f16,
					'row_cashin_g16' => $cashin_g16,
					'row_cashin_h16' => $cashin_h16,
					'row_cashin_i16' => $cashin_i16,
					'row_cashin_j16' => $cashin_j16,
					'row_cashin_k16' => $cashin_k16,
					'row_cashin_l16' => $cashin_l16,
					'row_cashin_m16' => $cashin_m16,
					'row_cashin_n16' => $cashin_n16,
					'row_cashin_o16' => $cashin_o16,
					'row_cashin_p16' => $cashin_p16,
					'row_cashin_q16' => $cashin_q16,
					'row_cashin_r16' => $cashin_r16,
					'row_cashin_s16' => $cashin_s16,
					'row_tCashinProj16' => $tCashinProj_16,
					'row_tCashinReal16' => $tCashinReal_16,

					// Cash-In Hari Ke-17
					'row_cashin_a17' => $cashin_a17,
					'row_cashin_b17' => $cashin_b17,
					'row_cashin_c17' => $cashin_c17,
					'row_cashin_d17' => $cashin_d17,
					'row_cashin_e17' => $cashin_e17,
					'row_cashin_f17' => $cashin_f17,
					'row_cashin_g17' => $cashin_g17,
					'row_cashin_h17' => $cashin_h17,
					'row_cashin_i17' => $cashin_i17,
					'row_cashin_j17' => $cashin_j17,
					'row_cashin_k17' => $cashin_k17,
					'row_cashin_l17' => $cashin_l17,
					'row_cashin_m17' => $cashin_m17,
					'row_cashin_n17' => $cashin_n17,
					'row_cashin_o17' => $cashin_o17,
					'row_cashin_p17' => $cashin_p17,
					'row_cashin_q17' => $cashin_q17,
					'row_cashin_r17' => $cashin_r17,
					'row_cashin_s17' => $cashin_s17,
					'row_tCashinProj17' => $tCashinProj_17,
					'row_tCashinReal17' => $tCashinReal_17,

					// Cash-In Hari Ke-18
					'row_cashin_a18' => $cashin_a18,
					'row_cashin_b18' => $cashin_b18,
					'row_cashin_c18' => $cashin_c18,
					'row_cashin_d18' => $cashin_d18,
					'row_cashin_e18' => $cashin_e18,
					'row_cashin_f18' => $cashin_f18,
					'row_cashin_g18' => $cashin_g18,
					'row_cashin_h18' => $cashin_h18,
					'row_cashin_i18' => $cashin_i18,
					'row_cashin_j18' => $cashin_j18,
					'row_cashin_k18' => $cashin_k18,
					'row_cashin_l18' => $cashin_l18,
					'row_cashin_m18' => $cashin_m18,
					'row_cashin_n18' => $cashin_n18,
					'row_cashin_o18' => $cashin_o18,
					'row_cashin_p18' => $cashin_p18,
					'row_cashin_q18' => $cashin_q18,
					'row_cashin_r18' => $cashin_r18,
					'row_cashin_s18' => $cashin_s18,
					'row_tCashinProj18' => $tCashinProj_18,
					'row_tCashinReal18' => $tCashinReal_18,

					// Cash-In Hari Ke-19
					'row_cashin_a19' => $cashin_a19,
					'row_cashin_b19' => $cashin_b19,
					'row_cashin_c19' => $cashin_c19,
					'row_cashin_d19' => $cashin_d19,
					'row_cashin_e19' => $cashin_e19,
					'row_cashin_f19' => $cashin_f19,
					'row_cashin_g19' => $cashin_g19,
					'row_cashin_h19' => $cashin_h19,
					'row_cashin_i19' => $cashin_i19,
					'row_cashin_j19' => $cashin_j19,
					'row_cashin_k19' => $cashin_k19,
					'row_cashin_l19' => $cashin_l19,
					'row_cashin_m19' => $cashin_m19,
					'row_cashin_n19' => $cashin_n19,
					'row_cashin_o19' => $cashin_o19,
					'row_cashin_p19' => $cashin_p19,
					'row_cashin_q19' => $cashin_q19,
					'row_cashin_r19' => $cashin_r19,
					'row_cashin_s19' => $cashin_s19,
					'row_tCashinProj19' => $tCashinProj_19,
					'row_tCashinReal19' => $tCashinReal_19,

					// Cash-In Hari Ke-20
					'row_cashin_a20' => $cashin_a20,
					'row_cashin_b20' => $cashin_b20,
					'row_cashin_c20' => $cashin_c20,
					'row_cashin_d20' => $cashin_d20,
					'row_cashin_e20' => $cashin_e20,
					'row_cashin_f20' => $cashin_f20,
					'row_cashin_g20' => $cashin_g20,
					'row_cashin_h20' => $cashin_h20,
					'row_cashin_i20' => $cashin_i20,
					'row_cashin_j20' => $cashin_j20,
					'row_cashin_k20' => $cashin_k20,
					'row_cashin_l20' => $cashin_l20,
					'row_cashin_m20' => $cashin_m20,
					'row_cashin_n20' => $cashin_n20,
					'row_cashin_o20' => $cashin_o20,
					'row_cashin_p20' => $cashin_p20,
					'row_cashin_q20' => $cashin_q20,
					'row_cashin_r20' => $cashin_r20,
					'row_cashin_s20' => $cashin_s20,
					'row_tCashinProj20' => $tCashinProj_20,
					'row_tCashinReal20' => $tCashinReal_20,

					// Cash-In Hari Ke-21
					'row_cashin_a21' => $cashin_a21,
					'row_cashin_b21' => $cashin_b21,
					'row_cashin_c21' => $cashin_c21,
					'row_cashin_d21' => $cashin_d21,
					'row_cashin_e21' => $cashin_e21,
					'row_cashin_f21' => $cashin_f21,
					'row_cashin_g21' => $cashin_g21,
					'row_cashin_h21' => $cashin_h21,
					'row_cashin_i21' => $cashin_i21,
					'row_cashin_j21' => $cashin_j21,
					'row_cashin_k21' => $cashin_k21,
					'row_cashin_l21' => $cashin_l21,
					'row_cashin_m21' => $cashin_m21,
					'row_cashin_n21' => $cashin_n21,
					'row_cashin_o21' => $cashin_o21,
					'row_cashin_p21' => $cashin_p21,
					'row_cashin_q21' => $cashin_q21,
					'row_cashin_r21' => $cashin_r21,
					'row_cashin_s21' => $cashin_s21,
					'row_tCashinProj21' => $tCashinProj_21,
					'row_tCashinReal21' => $tCashinReal_21,

					// Cash-In Hari Ke-22
					'row_cashin_a22' => $cashin_a22,
					'row_cashin_b22' => $cashin_b22,
					'row_cashin_c22' => $cashin_c22,
					'row_cashin_d22' => $cashin_d22,
					'row_cashin_e22' => $cashin_e22,
					'row_cashin_f22' => $cashin_f22,
					'row_cashin_g22' => $cashin_g22,
					'row_cashin_h22' => $cashin_h22,
					'row_cashin_i22' => $cashin_i22,
					'row_cashin_j22' => $cashin_j22,
					'row_cashin_k22' => $cashin_k22,
					'row_cashin_l22' => $cashin_l22,
					'row_cashin_m22' => $cashin_m22,
					'row_cashin_n22' => $cashin_n22,
					'row_cashin_o22' => $cashin_o22,
					'row_cashin_p22' => $cashin_p22,
					'row_cashin_q22' => $cashin_q22,
					'row_cashin_r22' => $cashin_r22,
					'row_cashin_s22' => $cashin_s22,
					'row_tCashinProj22' => $tCashinProj_22,
					'row_tCashinReal22' => $tCashinReal_22,

					// Cash-In Hari Ke-23
					'row_cashin_a23' => $cashin_a23,
					'row_cashin_b23' => $cashin_b23,
					'row_cashin_c23' => $cashin_c23,
					'row_cashin_d23' => $cashin_d23,
					'row_cashin_e23' => $cashin_e23,
					'row_cashin_f23' => $cashin_f23,
					'row_cashin_g23' => $cashin_g23,
					'row_cashin_h23' => $cashin_h23,
					'row_cashin_i23' => $cashin_i23,
					'row_cashin_j23' => $cashin_j23,
					'row_cashin_k23' => $cashin_k23,
					'row_cashin_l23' => $cashin_l23,
					'row_cashin_m23' => $cashin_m23,
					'row_cashin_n23' => $cashin_n23,
					'row_cashin_o23' => $cashin_o23,
					'row_cashin_p23' => $cashin_p23,
					'row_cashin_q23' => $cashin_q23,
					'row_cashin_r23' => $cashin_r23,
					'row_cashin_s23' => $cashin_s23,
					'row_tCashinProj23' => $tCashinProj_23,
					'row_tCashinReal23' => $tCashinReal_23,

					// Cash-In Hari Ke-24
					'row_cashin_a24' => $cashin_a24,
					'row_cashin_b24' => $cashin_b24,
					'row_cashin_c24' => $cashin_c24,
					'row_cashin_d24' => $cashin_d24,
					'row_cashin_e24' => $cashin_e24,
					'row_cashin_f24' => $cashin_f24,
					'row_cashin_g24' => $cashin_g24,
					'row_cashin_h24' => $cashin_h24,
					'row_cashin_i24' => $cashin_i24,
					'row_cashin_j24' => $cashin_j24,
					'row_cashin_k24' => $cashin_k24,
					'row_cashin_l24' => $cashin_l24,
					'row_cashin_m24' => $cashin_m24,
					'row_cashin_n24' => $cashin_n24,
					'row_cashin_o24' => $cashin_o24,
					'row_cashin_p24' => $cashin_p24,
					'row_cashin_q24' => $cashin_q24,
					'row_cashin_r24' => $cashin_r24,
					'row_cashin_s24' => $cashin_s24,
					'row_tCashinProj24' => $tCashinProj_24,
					'row_tCashinReal24' => $tCashinReal_24,

					// Cash-In Hari Ke-25
					'row_cashin_a25' => $cashin_a25,
					'row_cashin_b25' => $cashin_b25,
					'row_cashin_c25' => $cashin_c25,
					'row_cashin_d25' => $cashin_d25,
					'row_cashin_e25' => $cashin_e25,
					'row_cashin_f25' => $cashin_f25,
					'row_cashin_g25' => $cashin_g25,
					'row_cashin_h25' => $cashin_h25,
					'row_cashin_i25' => $cashin_i25,
					'row_cashin_j25' => $cashin_j25,
					'row_cashin_k25' => $cashin_k25,
					'row_cashin_l25' => $cashin_l25,
					'row_cashin_m25' => $cashin_m25,
					'row_cashin_n25' => $cashin_n25,
					'row_cashin_o25' => $cashin_o25,
					'row_cashin_p25' => $cashin_p25,
					'row_cashin_q25' => $cashin_q25,
					'row_cashin_r25' => $cashin_r25,
					'row_cashin_s25' => $cashin_s25,
					'row_tCashinProj25' => $tCashinProj_25,
					'row_tCashinReal25' => $tCashinReal_25,

					
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
					'row_tCashoutProj5' => $tCashoutProj_5,
					'row_tCashoutReal5' => $tCashoutReal_5,

					// Cash-Out Hari Ke-6
					'row_cashout_a6' => $cashout_a6,
					'row_cashout_b6' => $cashout_b6,
					'row_cashout_c6' => $cashout_c6,
					'row_cashout_d6' => $cashout_d6,
					'row_cashout_e6' => $cashout_e6,
					'row_cashout_f6' => $cashout_f6,
					'row_cashout_g6' => $cashout_g6,
					'row_cashout_h6' => $cashout_h6,
					'row_cashout_i6' => $cashout_i6,
					'row_cashout_j6' => $cashout_j6,
					'row_cashout_k6' => $cashout_k6,
					'row_cashout_l6' => $cashout_l6,
					'row_cashout_m6' => $cashout_m6,
					'row_cashout_n6' => $cashout_n6,
					'row_cashout_o6' => $cashout_o6,
					'row_cashout_p6' => $cashout_p6,
					'row_cashout_q6' => $cashout_q6,
					'row_cashout_r6' => $cashout_r6,
					'row_cashout_s6' => $cashout_s6,
					'row_cashout_t6' => $cashout_t6,
					'row_cashout_u6' => $cashout_u6,
					'row_cashout_v6' => $cashout_v6,
					'row_cashout_w6' => $cashout_w6,
					'row_cashout_x6' => $cashout_x6,
					'row_cashout_y6' => $cashout_y6,
					'row_cashout_z6' => $cashout_z6,
					'row_cashout_a26' => $cashout_a26,
					'row_cashout_b26' => $cashout_b26,
					'row_cashout_c26' => $cashout_c26,
					'row_cashout_d26' => $cashout_d26,
					'row_cashout_e26' => $cashout_e26,
					'row_cashout_f26' => $cashout_f26,
					'row_cashout_g26' => $cashout_g26,
					'row_cashout_h26' => $cashout_h26,
					'row_cashout_i26' => $cashout_i26,
					'row_cashout_j26' => $cashout_j26,
					'row_cashout_k26' => $cashout_k26,
					'row_cashout_l26' => $cashout_l26,
					'row_cashout_m26' => $cashout_m26,
					'row_cashout_n26' => $cashout_n26,
					'row_cashout_o26' => $cashout_o26,
					'row_cashout_p26' => $cashout_p26,
					'row_cashout_q26' => $cashout_q26,
					'row_cashout_r26' => $cashout_r26,
					'row_cashout_s26' => $cashout_s26,
					'row_cashout_t26' => $cashout_t26,
					'row_cashout_u26' => $cashout_u26,
					'row_cashout_v26' => $cashout_v26,
					'row_cashout_w26' => $cashout_w26,
					'row_cashout_x26' => $cashout_x26,
					'row_cashout_y26' => $cashout_y26,
					'row_cashout_z26' => $cashout_z26,
					'row_cashout_a36' => $cashout_a36,
					'row_cashout_b36' => $cashout_b36,
					'row_cashout_c36' => $cashout_c36,
					'row_cashout_d36' => $cashout_d36,
					'row_cashout_e36' => $cashout_e36,
					'row_cashout_f36' => $cashout_f36,
					'row_cashout_g36' => $cashout_g36,
					'row_cashout_h36' => $cashout_h36,
					'row_cashout_i36' => $cashout_i36,
					'row_cashout_j36' => $cashout_j36,
					'row_cashout_k36' => $cashout_k36,
					'row_cashout_l36' => $cashout_l36,
					'row_tCashoutProj6' => $tCashoutProj_6,
					'row_tCashoutReal6' => $tCashoutReal_6,

					// Cash-Out Hari Ke-7
					'row_cashout_a7' => $cashout_a7,
					'row_cashout_b7' => $cashout_b7,
					'row_cashout_c7' => $cashout_c7,
					'row_cashout_d7' => $cashout_d7,
					'row_cashout_e7' => $cashout_e7,
					'row_cashout_f7' => $cashout_f7,
					'row_cashout_g7' => $cashout_g7,
					'row_cashout_h7' => $cashout_h7,
					'row_cashout_i7' => $cashout_i7,
					'row_cashout_j7' => $cashout_j7,
					'row_cashout_k7' => $cashout_k7,
					'row_cashout_l7' => $cashout_l7,
					'row_cashout_m7' => $cashout_m7,
					'row_cashout_n7' => $cashout_n7,
					'row_cashout_o7' => $cashout_o7,
					'row_cashout_p7' => $cashout_p7,
					'row_cashout_q7' => $cashout_q7,
					'row_cashout_r7' => $cashout_r7,
					'row_cashout_s7' => $cashout_s7,
					'row_cashout_t7' => $cashout_t7,
					'row_cashout_u7' => $cashout_u7,
					'row_cashout_v7' => $cashout_v7,
					'row_cashout_w7' => $cashout_w7,
					'row_cashout_x7' => $cashout_x7,
					'row_cashout_y7' => $cashout_y7,
					'row_cashout_z7' => $cashout_z7,
					'row_cashout_a27' => $cashout_a27,
					'row_cashout_b27' => $cashout_b27,
					'row_cashout_c27' => $cashout_c27,
					'row_cashout_d27' => $cashout_d27,
					'row_cashout_e27' => $cashout_e27,
					'row_cashout_f27' => $cashout_f27,
					'row_cashout_g27' => $cashout_g27,
					'row_cashout_h27' => $cashout_h27,
					'row_cashout_i27' => $cashout_i27,
					'row_cashout_j27' => $cashout_j27,
					'row_cashout_k27' => $cashout_k27,
					'row_cashout_l27' => $cashout_l27,
					'row_cashout_m27' => $cashout_m27,
					'row_cashout_n27' => $cashout_n27,
					'row_cashout_o27' => $cashout_o27,
					'row_cashout_p27' => $cashout_p27,
					'row_cashout_q27' => $cashout_q27,
					'row_cashout_r27' => $cashout_r27,
					'row_cashout_s27' => $cashout_s27,
					'row_cashout_t27' => $cashout_t27,
					'row_cashout_u27' => $cashout_u27,
					'row_cashout_v27' => $cashout_v27,
					'row_cashout_w27' => $cashout_w27,
					'row_cashout_x27' => $cashout_x27,
					'row_cashout_y27' => $cashout_y27,
					'row_cashout_z27' => $cashout_z27,
					'row_cashout_a37' => $cashout_a37,
					'row_cashout_b37' => $cashout_b37,
					'row_cashout_c37' => $cashout_c37,
					'row_cashout_d37' => $cashout_d37,
					'row_cashout_e37' => $cashout_e37,
					'row_cashout_f37' => $cashout_f37,
					'row_cashout_g37' => $cashout_g37,
					'row_cashout_h37' => $cashout_h37,
					'row_cashout_i37' => $cashout_i37,
					'row_cashout_j37' => $cashout_j37,
					'row_cashout_k37' => $cashout_k37,
					'row_cashout_l37' => $cashout_l37,
					'row_tCashoutProj7' => $tCashoutProj_7,
					'row_tCashoutReal7' => $tCashoutReal_7,

					// Cash-Out Hari Ke-8
					'row_cashout_a8' => $cashout_a8,
					'row_cashout_b8' => $cashout_b8,
					'row_cashout_c8' => $cashout_c8,
					'row_cashout_d8' => $cashout_d8,
					'row_cashout_e8' => $cashout_e8,
					'row_cashout_f8' => $cashout_f8,
					'row_cashout_g8' => $cashout_g8,
					'row_cashout_h8' => $cashout_h8,
					'row_cashout_i8' => $cashout_i8,
					'row_cashout_j8' => $cashout_j8,
					'row_cashout_k8' => $cashout_k8,
					'row_cashout_l8' => $cashout_l8,
					'row_cashout_m8' => $cashout_m8,
					'row_cashout_n8' => $cashout_n8,
					'row_cashout_o8' => $cashout_o8,
					'row_cashout_p8' => $cashout_p8,
					'row_cashout_q8' => $cashout_q8,
					'row_cashout_r8' => $cashout_r8,
					'row_cashout_s8' => $cashout_s8,
					'row_cashout_t8' => $cashout_t8,
					'row_cashout_u8' => $cashout_u8,
					'row_cashout_v8' => $cashout_v8,
					'row_cashout_w8' => $cashout_w8,
					'row_cashout_x8' => $cashout_x8,
					'row_cashout_y8' => $cashout_y8,
					'row_cashout_z8' => $cashout_z8,
					'row_cashout_a28' => $cashout_a28,
					'row_cashout_b28' => $cashout_b28,
					'row_cashout_c28' => $cashout_c28,
					'row_cashout_d28' => $cashout_d28,
					'row_cashout_e28' => $cashout_e28,
					'row_cashout_f28' => $cashout_f28,
					'row_cashout_g28' => $cashout_g28,
					'row_cashout_h28' => $cashout_h28,
					'row_cashout_i28' => $cashout_i28,
					'row_cashout_j28' => $cashout_j28,
					'row_cashout_k28' => $cashout_k28,
					'row_cashout_l28' => $cashout_l28,
					'row_cashout_m28' => $cashout_m28,
					'row_cashout_n28' => $cashout_n28,
					'row_cashout_o28' => $cashout_o28,
					'row_cashout_p28' => $cashout_p28,
					'row_cashout_q28' => $cashout_q28,
					'row_cashout_r28' => $cashout_r28,
					'row_cashout_s28' => $cashout_s28,
					'row_cashout_t28' => $cashout_t28,
					'row_cashout_u28' => $cashout_u28,
					'row_cashout_v28' => $cashout_v28,
					'row_cashout_w28' => $cashout_w28,
					'row_cashout_x28' => $cashout_x28,
					'row_cashout_y28' => $cashout_y28,
					'row_cashout_z28' => $cashout_z28,
					'row_cashout_a38' => $cashout_a38,
					'row_cashout_b38' => $cashout_b38,
					'row_cashout_c38' => $cashout_c38,
					'row_cashout_d38' => $cashout_d38,
					'row_cashout_e38' => $cashout_e38,
					'row_cashout_f38' => $cashout_f38,
					'row_cashout_g38' => $cashout_g38,
					'row_cashout_h38' => $cashout_h38,
					'row_cashout_i38' => $cashout_i38,
					'row_cashout_j38' => $cashout_j38,
					'row_cashout_k38' => $cashout_k38,
					'row_cashout_l38' => $cashout_l38,
					'row_tCashoutProj8' => $tCashoutProj_8,
					'row_tCashoutReal8' => $tCashoutReal_8,

					// Cash-Out Hari Ke-9
					'row_cashout_a9' => $cashout_a9,
					'row_cashout_b9' => $cashout_b9,
					'row_cashout_c9' => $cashout_c9,
					'row_cashout_d9' => $cashout_d9,
					'row_cashout_e9' => $cashout_e9,
					'row_cashout_f9' => $cashout_f9,
					'row_cashout_g9' => $cashout_g9,
					'row_cashout_h9' => $cashout_h9,
					'row_cashout_i9' => $cashout_i9,
					'row_cashout_j9' => $cashout_j9,
					'row_cashout_k9' => $cashout_k9,
					'row_cashout_l9' => $cashout_l9,
					'row_cashout_m9' => $cashout_m9,
					'row_cashout_n9' => $cashout_n9,
					'row_cashout_o9' => $cashout_o9,
					'row_cashout_p9' => $cashout_p9,
					'row_cashout_q9' => $cashout_q9,
					'row_cashout_r9' => $cashout_r9,
					'row_cashout_s9' => $cashout_s9,
					'row_cashout_t9' => $cashout_t9,
					'row_cashout_u9' => $cashout_u9,
					'row_cashout_v9' => $cashout_v9,
					'row_cashout_w9' => $cashout_w9,
					'row_cashout_x9' => $cashout_x9,
					'row_cashout_y9' => $cashout_y9,
					'row_cashout_z9' => $cashout_z9,
					'row_cashout_a29' => $cashout_a29,
					'row_cashout_b29' => $cashout_b29,
					'row_cashout_c29' => $cashout_c29,
					'row_cashout_d29' => $cashout_d29,
					'row_cashout_e29' => $cashout_e29,
					'row_cashout_f29' => $cashout_f29,
					'row_cashout_g29' => $cashout_g29,
					'row_cashout_h29' => $cashout_h29,
					'row_cashout_i29' => $cashout_i29,
					'row_cashout_j29' => $cashout_j29,
					'row_cashout_k29' => $cashout_k29,
					'row_cashout_l29' => $cashout_l29,
					'row_cashout_m29' => $cashout_m29,
					'row_cashout_n29' => $cashout_n29,
					'row_cashout_o29' => $cashout_o29,
					'row_cashout_p29' => $cashout_p29,
					'row_cashout_q29' => $cashout_q29,
					'row_cashout_r29' => $cashout_r29,
					'row_cashout_s29' => $cashout_s29,
					'row_cashout_t29' => $cashout_t29,
					'row_cashout_u29' => $cashout_u29,
					'row_cashout_v29' => $cashout_v29,
					'row_cashout_w29' => $cashout_w29,
					'row_cashout_x29' => $cashout_x29,
					'row_cashout_y29' => $cashout_y29,
					'row_cashout_z29' => $cashout_z29,
					'row_cashout_a39' => $cashout_a39,
					'row_cashout_b39' => $cashout_b39,
					'row_cashout_c39' => $cashout_c39,
					'row_cashout_d39' => $cashout_d39,
					'row_cashout_e39' => $cashout_e39,
					'row_cashout_f39' => $cashout_f39,
					'row_cashout_g39' => $cashout_g39,
					'row_cashout_h39' => $cashout_h39,
					'row_cashout_i39' => $cashout_i39,
					'row_cashout_j39' => $cashout_j39,
					'row_cashout_k39' => $cashout_k39,
					'row_cashout_l39' => $cashout_l39,
					'row_tCashoutProj9' => $tCashoutProj_9,
					'row_tCashoutReal9' => $tCashoutReal_9,

					// Cash-Out Hari Ke-10
					'row_cashout_a10' => $cashout_a10,
					'row_cashout_b10' => $cashout_b10,
					'row_cashout_c10' => $cashout_c10,
					'row_cashout_d10' => $cashout_d10,
					'row_cashout_e10' => $cashout_e10,
					'row_cashout_f10' => $cashout_f10,
					'row_cashout_g10' => $cashout_g10,
					'row_cashout_h10' => $cashout_h10,
					'row_cashout_i10' => $cashout_i10,
					'row_cashout_j10' => $cashout_j10,
					'row_cashout_k10' => $cashout_k10,
					'row_cashout_l10' => $cashout_l10,
					'row_cashout_m10' => $cashout_m10,
					'row_cashout_n10' => $cashout_n10,
					'row_cashout_o10' => $cashout_o10,
					'row_cashout_p10' => $cashout_p10,
					'row_cashout_q10' => $cashout_q10,
					'row_cashout_r10' => $cashout_r10,
					'row_cashout_s10' => $cashout_s10,
					'row_cashout_t10' => $cashout_t10,
					'row_cashout_u10' => $cashout_u10,
					'row_cashout_v10' => $cashout_v10,
					'row_cashout_w10' => $cashout_w10,
					'row_cashout_x10' => $cashout_x10,
					'row_cashout_y10' => $cashout_y10,
					'row_cashout_z10' => $cashout_z10,
					'row_cashout_a210' => $cashout_a210,
					'row_cashout_b210' => $cashout_b210,
					'row_cashout_c210' => $cashout_c210,
					'row_cashout_d210' => $cashout_d210,
					'row_cashout_e210' => $cashout_e210,
					'row_cashout_f210' => $cashout_f210,
					'row_cashout_g210' => $cashout_g210,
					'row_cashout_h210' => $cashout_h210,
					'row_cashout_i210' => $cashout_i210,
					'row_cashout_j210' => $cashout_j210,
					'row_cashout_k210' => $cashout_k210,
					'row_cashout_l210' => $cashout_l210,
					'row_cashout_m210' => $cashout_m210,
					'row_cashout_n210' => $cashout_n210,
					'row_cashout_o210' => $cashout_o210,
					'row_cashout_p210' => $cashout_p210,
					'row_cashout_q210' => $cashout_q210,
					'row_cashout_r210' => $cashout_r210,
					'row_cashout_s210' => $cashout_s210,
					'row_cashout_t210' => $cashout_t210,
					'row_cashout_u210' => $cashout_u210,
					'row_cashout_v210' => $cashout_v210,
					'row_cashout_w210' => $cashout_w210,
					'row_cashout_x210' => $cashout_x210,
					'row_cashout_y210' => $cashout_y210,
					'row_cashout_z210' => $cashout_z210,
					'row_cashout_a310' => $cashout_a310,
					'row_cashout_b310' => $cashout_b310,
					'row_cashout_c310' => $cashout_c310,
					'row_cashout_d310' => $cashout_d310,
					'row_cashout_e310' => $cashout_e310,
					'row_cashout_f310' => $cashout_f310,
					'row_cashout_g310' => $cashout_g310,
					'row_cashout_h310' => $cashout_h310,
					'row_cashout_i310' => $cashout_i310,
					'row_cashout_j310' => $cashout_j310,
					'row_cashout_k310' => $cashout_k310,
					'row_cashout_l310' => $cashout_l310,
					'row_tCashoutProj10' => $tCashoutProj_10,
					'row_tCashoutReal10' => $tCashoutReal_10,

					// Cash-Out Hari Ke-11
					'row_cashout_a11' => $cashout_a11,
					'row_cashout_b11' => $cashout_b11,
					'row_cashout_c11' => $cashout_c11,
					'row_cashout_d11' => $cashout_d11,
					'row_cashout_e11' => $cashout_e11,
					'row_cashout_f11' => $cashout_f11,
					'row_cashout_g11' => $cashout_g11,
					'row_cashout_h11' => $cashout_h11,
					'row_cashout_i11' => $cashout_i11,
					'row_cashout_j11' => $cashout_j11,
					'row_cashout_k11' => $cashout_k11,
					'row_cashout_l11' => $cashout_l11,
					'row_cashout_m11' => $cashout_m11,
					'row_cashout_n11' => $cashout_n11,
					'row_cashout_o11' => $cashout_o11,
					'row_cashout_p11' => $cashout_p11,
					'row_cashout_q11' => $cashout_q11,
					'row_cashout_r11' => $cashout_r11,
					'row_cashout_s11' => $cashout_s11,
					'row_cashout_t11' => $cashout_t11,
					'row_cashout_u11' => $cashout_u11,
					'row_cashout_v11' => $cashout_v11,
					'row_cashout_w11' => $cashout_w11,
					'row_cashout_x11' => $cashout_x11,
					'row_cashout_y11' => $cashout_y11,
					'row_cashout_z11' => $cashout_z11,
					'row_cashout_a211' => $cashout_a211,
					'row_cashout_b211' => $cashout_b211,
					'row_cashout_c211' => $cashout_c211,
					'row_cashout_d211' => $cashout_d211,
					'row_cashout_e211' => $cashout_e211,
					'row_cashout_f211' => $cashout_f211,
					'row_cashout_g211' => $cashout_g211,
					'row_cashout_h211' => $cashout_h211,
					'row_cashout_i211' => $cashout_i211,
					'row_cashout_j211' => $cashout_j211,
					'row_cashout_k211' => $cashout_k211,
					'row_cashout_l211' => $cashout_l211,
					'row_cashout_m211' => $cashout_m211,
					'row_cashout_n211' => $cashout_n211,
					'row_cashout_o211' => $cashout_o211,
					'row_cashout_p211' => $cashout_p211,
					'row_cashout_q211' => $cashout_q211,
					'row_cashout_r211' => $cashout_r211,
					'row_cashout_s211' => $cashout_s211,
					'row_cashout_t211' => $cashout_t211,
					'row_cashout_u211' => $cashout_u211,
					'row_cashout_v211' => $cashout_v211,
					'row_cashout_w211' => $cashout_w211,
					'row_cashout_x211' => $cashout_x211,
					'row_cashout_y211' => $cashout_y211,
					'row_cashout_z211' => $cashout_z211,
					'row_cashout_a311' => $cashout_a311,
					'row_cashout_b311' => $cashout_b311,
					'row_cashout_c311' => $cashout_c311,
					'row_cashout_d311' => $cashout_d311,
					'row_cashout_e311' => $cashout_e311,
					'row_cashout_f311' => $cashout_f311,
					'row_cashout_g311' => $cashout_g311,
					'row_cashout_h311' => $cashout_h311,
					'row_cashout_i311' => $cashout_i311,
					'row_cashout_j311' => $cashout_j311,
					'row_cashout_k311' => $cashout_k311,
					'row_cashout_l311' => $cashout_l311,
					'row_tCashoutProj11' => $tCashoutProj_11,
					'row_tCashoutReal11' => $tCashoutReal_11,

					// Cash-Out Hari Ke-12
					'row_cashout_a12' => $cashout_a12,
					'row_cashout_b12' => $cashout_b12,
					'row_cashout_c12' => $cashout_c12,
					'row_cashout_d12' => $cashout_d12,
					'row_cashout_e12' => $cashout_e12,
					'row_cashout_f12' => $cashout_f12,
					'row_cashout_g12' => $cashout_g12,
					'row_cashout_h12' => $cashout_h12,
					'row_cashout_i12' => $cashout_i12,
					'row_cashout_j12' => $cashout_j12,
					'row_cashout_k12' => $cashout_k12,
					'row_cashout_l12' => $cashout_l12,
					'row_cashout_m12' => $cashout_m12,
					'row_cashout_n12' => $cashout_n12,
					'row_cashout_o12' => $cashout_o12,
					'row_cashout_p12' => $cashout_p12,
					'row_cashout_q12' => $cashout_q12,
					'row_cashout_r12' => $cashout_r12,
					'row_cashout_s12' => $cashout_s12,
					'row_cashout_t12' => $cashout_t12,
					'row_cashout_u12' => $cashout_u12,
					'row_cashout_v12' => $cashout_v12,
					'row_cashout_w12' => $cashout_w12,
					'row_cashout_x12' => $cashout_x12,
					'row_cashout_y12' => $cashout_y12,
					'row_cashout_z12' => $cashout_z12,
					'row_cashout_a212' => $cashout_a212,
					'row_cashout_b212' => $cashout_b212,
					'row_cashout_c212' => $cashout_c212,
					'row_cashout_d212' => $cashout_d212,
					'row_cashout_e212' => $cashout_e212,
					'row_cashout_f212' => $cashout_f212,
					'row_cashout_g212' => $cashout_g212,
					'row_cashout_h212' => $cashout_h212,
					'row_cashout_i212' => $cashout_i212,
					'row_cashout_j212' => $cashout_j212,
					'row_cashout_k212' => $cashout_k212,
					'row_cashout_l212' => $cashout_l212,
					'row_cashout_m212' => $cashout_m212,
					'row_cashout_n212' => $cashout_n212,
					'row_cashout_o212' => $cashout_o212,
					'row_cashout_p212' => $cashout_p212,
					'row_cashout_q212' => $cashout_q212,
					'row_cashout_r212' => $cashout_r212,
					'row_cashout_s212' => $cashout_s212,
					'row_cashout_t212' => $cashout_t212,
					'row_cashout_u212' => $cashout_u212,
					'row_cashout_v212' => $cashout_v212,
					'row_cashout_w212' => $cashout_w212,
					'row_cashout_x212' => $cashout_x212,
					'row_cashout_y212' => $cashout_y212,
					'row_cashout_z212' => $cashout_z212,
					'row_cashout_a312' => $cashout_a312,
					'row_cashout_b312' => $cashout_b312,
					'row_cashout_c312' => $cashout_c312,
					'row_cashout_d312' => $cashout_d312,
					'row_cashout_e312' => $cashout_e312,
					'row_cashout_f312' => $cashout_f312,
					'row_cashout_g312' => $cashout_g312,
					'row_cashout_h312' => $cashout_h312,
					'row_cashout_i312' => $cashout_i312,
					'row_cashout_j312' => $cashout_j312,
					'row_cashout_k312' => $cashout_k312,
					'row_cashout_l312' => $cashout_l312,
					'row_tCashoutProj12' => $tCashoutProj_12,
					'row_tCashoutReal12' => $tCashoutReal_12,

					// Cash-Out Hari Ke-13
					'row_cashout_a13' => $cashout_a13,
					'row_cashout_b13' => $cashout_b13,
					'row_cashout_c13' => $cashout_c13,
					'row_cashout_d13' => $cashout_d13,
					'row_cashout_e13' => $cashout_e13,
					'row_cashout_f13' => $cashout_f13,
					'row_cashout_g13' => $cashout_g13,
					'row_cashout_h13' => $cashout_h13,
					'row_cashout_i13' => $cashout_i13,
					'row_cashout_j13' => $cashout_j13,
					'row_cashout_k13' => $cashout_k13,
					'row_cashout_l13' => $cashout_l13,
					'row_cashout_m13' => $cashout_m13,
					'row_cashout_n13' => $cashout_n13,
					'row_cashout_o13' => $cashout_o13,
					'row_cashout_p13' => $cashout_p13,
					'row_cashout_q13' => $cashout_q13,
					'row_cashout_r13' => $cashout_r13,
					'row_cashout_s13' => $cashout_s13,
					'row_cashout_t13' => $cashout_t13,
					'row_cashout_u13' => $cashout_u13,
					'row_cashout_v13' => $cashout_v13,
					'row_cashout_w13' => $cashout_w13,
					'row_cashout_x13' => $cashout_x13,
					'row_cashout_y13' => $cashout_y13,
					'row_cashout_z13' => $cashout_z13,
					'row_cashout_a213' => $cashout_a213,
					'row_cashout_b213' => $cashout_b213,
					'row_cashout_c213' => $cashout_c213,
					'row_cashout_d213' => $cashout_d213,
					'row_cashout_e213' => $cashout_e213,
					'row_cashout_f213' => $cashout_f213,
					'row_cashout_g213' => $cashout_g213,
					'row_cashout_h213' => $cashout_h213,
					'row_cashout_i213' => $cashout_i213,
					'row_cashout_j213' => $cashout_j213,
					'row_cashout_k213' => $cashout_k213,
					'row_cashout_l213' => $cashout_l213,
					'row_cashout_m213' => $cashout_m213,
					'row_cashout_n213' => $cashout_n213,
					'row_cashout_o213' => $cashout_o213,
					'row_cashout_p213' => $cashout_p213,
					'row_cashout_q213' => $cashout_q213,
					'row_cashout_r213' => $cashout_r213,
					'row_cashout_s213' => $cashout_s213,
					'row_cashout_t213' => $cashout_t213,
					'row_cashout_u213' => $cashout_u213,
					'row_cashout_v213' => $cashout_v213,
					'row_cashout_w213' => $cashout_w213,
					'row_cashout_x213' => $cashout_x213,
					'row_cashout_y213' => $cashout_y213,
					'row_cashout_z213' => $cashout_z213,
					'row_cashout_a313' => $cashout_a313,
					'row_cashout_b313' => $cashout_b313,
					'row_cashout_c313' => $cashout_c313,
					'row_cashout_d313' => $cashout_d313,
					'row_cashout_e313' => $cashout_e313,
					'row_cashout_f313' => $cashout_f313,
					'row_cashout_g313' => $cashout_g313,
					'row_cashout_h313' => $cashout_h313,
					'row_cashout_i313' => $cashout_i313,
					'row_cashout_j313' => $cashout_j313,
					'row_cashout_k313' => $cashout_k313,
					'row_cashout_l313' => $cashout_l313,
					'row_tCashoutProj13' => $tCashoutProj_13,
					'row_tCashoutReal13' => $tCashoutReal_13,

					// Cash-Out Hari Ke-14
					'row_cashout_a14' => $cashout_a14,
					'row_cashout_b14' => $cashout_b14,
					'row_cashout_c14' => $cashout_c14,
					'row_cashout_d14' => $cashout_d14,
					'row_cashout_e14' => $cashout_e14,
					'row_cashout_f14' => $cashout_f14,
					'row_cashout_g14' => $cashout_g14,
					'row_cashout_h14' => $cashout_h14,
					'row_cashout_i14' => $cashout_i14,
					'row_cashout_j14' => $cashout_j14,
					'row_cashout_k14' => $cashout_k14,
					'row_cashout_l14' => $cashout_l14,
					'row_cashout_m14' => $cashout_m14,
					'row_cashout_n14' => $cashout_n14,
					'row_cashout_o14' => $cashout_o14,
					'row_cashout_p14' => $cashout_p14,
					'row_cashout_q14' => $cashout_q14,
					'row_cashout_r14' => $cashout_r14,
					'row_cashout_s14' => $cashout_s14,
					'row_cashout_t14' => $cashout_t14,
					'row_cashout_u14' => $cashout_u14,
					'row_cashout_v14' => $cashout_v14,
					'row_cashout_w14' => $cashout_w14,
					'row_cashout_x14' => $cashout_x14,
					'row_cashout_y14' => $cashout_y14,
					'row_cashout_z14' => $cashout_z14,
					'row_cashout_a214' => $cashout_a214,
					'row_cashout_b214' => $cashout_b214,
					'row_cashout_c214' => $cashout_c214,
					'row_cashout_d214' => $cashout_d214,
					'row_cashout_e214' => $cashout_e214,
					'row_cashout_f214' => $cashout_f214,
					'row_cashout_g214' => $cashout_g214,
					'row_cashout_h214' => $cashout_h214,
					'row_cashout_i214' => $cashout_i214,
					'row_cashout_j214' => $cashout_j214,
					'row_cashout_k214' => $cashout_k214,
					'row_cashout_l214' => $cashout_l214,
					'row_cashout_m214' => $cashout_m214,
					'row_cashout_n214' => $cashout_n214,
					'row_cashout_o214' => $cashout_o214,
					'row_cashout_p214' => $cashout_p214,
					'row_cashout_q214' => $cashout_q214,
					'row_cashout_r214' => $cashout_r214,
					'row_cashout_s214' => $cashout_s214,
					'row_cashout_t214' => $cashout_t214,
					'row_cashout_u214' => $cashout_u214,
					'row_cashout_v214' => $cashout_v214,
					'row_cashout_w214' => $cashout_w214,
					'row_cashout_x214' => $cashout_x214,
					'row_cashout_y214' => $cashout_y214,
					'row_cashout_z214' => $cashout_z214,
					'row_cashout_a314' => $cashout_a314,
					'row_cashout_b314' => $cashout_b314,
					'row_cashout_c314' => $cashout_c314,
					'row_cashout_d314' => $cashout_d314,
					'row_cashout_e314' => $cashout_e314,
					'row_cashout_f314' => $cashout_f314,
					'row_cashout_g314' => $cashout_g314,
					'row_cashout_h314' => $cashout_h314,
					'row_cashout_i314' => $cashout_i314,
					'row_cashout_j314' => $cashout_j314,
					'row_cashout_k314' => $cashout_k314,
					'row_cashout_l314' => $cashout_l314,
					'row_tCashoutProj14' => $tCashoutProj_14,
					'row_tCashoutReal14' => $tCashoutReal_14,

					// Cash-Out Hari Ke-15
					'row_cashout_a15' => $cashout_a15,
					'row_cashout_b15' => $cashout_b15,
					'row_cashout_c15' => $cashout_c15,
					'row_cashout_d15' => $cashout_d15,
					'row_cashout_e15' => $cashout_e15,
					'row_cashout_f15' => $cashout_f15,
					'row_cashout_g15' => $cashout_g15,
					'row_cashout_h15' => $cashout_h15,
					'row_cashout_i15' => $cashout_i15,
					'row_cashout_j15' => $cashout_j15,
					'row_cashout_k15' => $cashout_k15,
					'row_cashout_l15' => $cashout_l15,
					'row_cashout_m15' => $cashout_m15,
					'row_cashout_n15' => $cashout_n15,
					'row_cashout_o15' => $cashout_o15,
					'row_cashout_p15' => $cashout_p15,
					'row_cashout_q15' => $cashout_q15,
					'row_cashout_r15' => $cashout_r15,
					'row_cashout_s15' => $cashout_s15,
					'row_cashout_t15' => $cashout_t15,
					'row_cashout_u15' => $cashout_u15,
					'row_cashout_v15' => $cashout_v15,
					'row_cashout_w15' => $cashout_w15,
					'row_cashout_x15' => $cashout_x15,
					'row_cashout_y15' => $cashout_y15,
					'row_cashout_z15' => $cashout_z15,
					'row_cashout_a215' => $cashout_a215,
					'row_cashout_b215' => $cashout_b215,
					'row_cashout_c215' => $cashout_c215,
					'row_cashout_d215' => $cashout_d215,
					'row_cashout_e215' => $cashout_e215,
					'row_cashout_f215' => $cashout_f215,
					'row_cashout_g215' => $cashout_g215,
					'row_cashout_h215' => $cashout_h215,
					'row_cashout_i215' => $cashout_i215,
					'row_cashout_j215' => $cashout_j215,
					'row_cashout_k215' => $cashout_k215,
					'row_cashout_l215' => $cashout_l215,
					'row_cashout_m215' => $cashout_m215,
					'row_cashout_n215' => $cashout_n215,
					'row_cashout_o215' => $cashout_o215,
					'row_cashout_p215' => $cashout_p215,
					'row_cashout_q215' => $cashout_q215,
					'row_cashout_r215' => $cashout_r215,
					'row_cashout_s215' => $cashout_s215,
					'row_cashout_t215' => $cashout_t215,
					'row_cashout_u215' => $cashout_u215,
					'row_cashout_v215' => $cashout_v215,
					'row_cashout_w215' => $cashout_w215,
					'row_cashout_x215' => $cashout_x215,
					'row_cashout_y215' => $cashout_y215,
					'row_cashout_z215' => $cashout_z215,
					'row_cashout_a315' => $cashout_a315,
					'row_cashout_b315' => $cashout_b315,
					'row_cashout_c315' => $cashout_c315,
					'row_cashout_d315' => $cashout_d315,
					'row_cashout_e315' => $cashout_e315,
					'row_cashout_f315' => $cashout_f315,
					'row_cashout_g315' => $cashout_g315,
					'row_cashout_h315' => $cashout_h315,
					'row_cashout_i315' => $cashout_i315,
					'row_cashout_j315' => $cashout_j315,
					'row_cashout_k315' => $cashout_k315,
					'row_cashout_l315' => $cashout_l315,
					'row_tCashoutProj15' => $tCashoutProj_15,
					'row_tCashoutReal15' => $tCashoutReal_15,

					// Cash-Out Hari Ke-16
					'row_cashout_a16' => $cashout_a16,
					'row_cashout_b16' => $cashout_b16,
					'row_cashout_c16' => $cashout_c16,
					'row_cashout_d16' => $cashout_d16,
					'row_cashout_e16' => $cashout_e16,
					'row_cashout_f16' => $cashout_f16,
					'row_cashout_g16' => $cashout_g16,
					'row_cashout_h16' => $cashout_h16,
					'row_cashout_i16' => $cashout_i16,
					'row_cashout_j16' => $cashout_j16,
					'row_cashout_k16' => $cashout_k16,
					'row_cashout_l16' => $cashout_l16,
					'row_cashout_m16' => $cashout_m16,
					'row_cashout_n16' => $cashout_n16,
					'row_cashout_o16' => $cashout_o16,
					'row_cashout_p16' => $cashout_p16,
					'row_cashout_q16' => $cashout_q16,
					'row_cashout_r16' => $cashout_r16,
					'row_cashout_s16' => $cashout_s16,
					'row_cashout_t16' => $cashout_t16,
					'row_cashout_u16' => $cashout_u16,
					'row_cashout_v16' => $cashout_v16,
					'row_cashout_w16' => $cashout_w16,
					'row_cashout_x16' => $cashout_x16,
					'row_cashout_y16' => $cashout_y16,
					'row_cashout_z16' => $cashout_z16,
					'row_cashout_a216' => $cashout_a216,
					'row_cashout_b216' => $cashout_b216,
					'row_cashout_c216' => $cashout_c216,
					'row_cashout_d216' => $cashout_d216,
					'row_cashout_e216' => $cashout_e216,
					'row_cashout_f216' => $cashout_f216,
					'row_cashout_g216' => $cashout_g216,
					'row_cashout_h216' => $cashout_h216,
					'row_cashout_i216' => $cashout_i216,
					'row_cashout_j216' => $cashout_j216,
					'row_cashout_k216' => $cashout_k216,
					'row_cashout_l216' => $cashout_l216,
					'row_cashout_m216' => $cashout_m216,
					'row_cashout_n216' => $cashout_n216,
					'row_cashout_o216' => $cashout_o216,
					'row_cashout_p216' => $cashout_p216,
					'row_cashout_q216' => $cashout_q216,
					'row_cashout_r216' => $cashout_r216,
					'row_cashout_s216' => $cashout_s216,
					'row_cashout_t216' => $cashout_t216,
					'row_cashout_u216' => $cashout_u216,
					'row_cashout_v216' => $cashout_v216,
					'row_cashout_w216' => $cashout_w216,
					'row_cashout_x216' => $cashout_x216,
					'row_cashout_y216' => $cashout_y216,
					'row_cashout_z216' => $cashout_z216,
					'row_cashout_a316' => $cashout_a316,
					'row_cashout_b316' => $cashout_b316,
					'row_cashout_c316' => $cashout_c316,
					'row_cashout_d316' => $cashout_d316,
					'row_cashout_e316' => $cashout_e316,
					'row_cashout_f316' => $cashout_f316,
					'row_cashout_g316' => $cashout_g316,
					'row_cashout_h316' => $cashout_h316,
					'row_cashout_i316' => $cashout_i316,
					'row_cashout_j316' => $cashout_j316,
					'row_cashout_k316' => $cashout_k316,
					'row_cashout_l316' => $cashout_l316,
					'row_tCashoutProj16' => $tCashoutProj_16,
					'row_tCashoutReal16' => $tCashoutReal_16,

					// Cash-Out Hari Ke-17
					'row_cashout_a17' => $cashout_a17,
					'row_cashout_b17' => $cashout_b17,
					'row_cashout_c17' => $cashout_c17,
					'row_cashout_d17' => $cashout_d17,
					'row_cashout_e17' => $cashout_e17,
					'row_cashout_f17' => $cashout_f17,
					'row_cashout_g17' => $cashout_g17,
					'row_cashout_h17' => $cashout_h17,
					'row_cashout_i17' => $cashout_i17,
					'row_cashout_j17' => $cashout_j17,
					'row_cashout_k17' => $cashout_k17,
					'row_cashout_l17' => $cashout_l17,
					'row_cashout_m17' => $cashout_m17,
					'row_cashout_n17' => $cashout_n17,
					'row_cashout_o17' => $cashout_o17,
					'row_cashout_p17' => $cashout_p17,
					'row_cashout_q17' => $cashout_q17,
					'row_cashout_r17' => $cashout_r17,
					'row_cashout_s17' => $cashout_s17,
					'row_cashout_t17' => $cashout_t17,
					'row_cashout_u17' => $cashout_u17,
					'row_cashout_v17' => $cashout_v17,
					'row_cashout_w17' => $cashout_w17,
					'row_cashout_x17' => $cashout_x17,
					'row_cashout_y17' => $cashout_y17,
					'row_cashout_z17' => $cashout_z17,
					'row_cashout_a217' => $cashout_a217,
					'row_cashout_b217' => $cashout_b217,
					'row_cashout_c217' => $cashout_c217,
					'row_cashout_d217' => $cashout_d217,
					'row_cashout_e217' => $cashout_e217,
					'row_cashout_f217' => $cashout_f217,
					'row_cashout_g217' => $cashout_g217,
					'row_cashout_h217' => $cashout_h217,
					'row_cashout_i217' => $cashout_i217,
					'row_cashout_j217' => $cashout_j217,
					'row_cashout_k217' => $cashout_k217,
					'row_cashout_l217' => $cashout_l217,
					'row_cashout_m217' => $cashout_m217,
					'row_cashout_n217' => $cashout_n217,
					'row_cashout_o217' => $cashout_o217,
					'row_cashout_p217' => $cashout_p217,
					'row_cashout_q217' => $cashout_q217,
					'row_cashout_r217' => $cashout_r217,
					'row_cashout_s217' => $cashout_s217,
					'row_cashout_t217' => $cashout_t217,
					'row_cashout_u217' => $cashout_u217,
					'row_cashout_v217' => $cashout_v217,
					'row_cashout_w217' => $cashout_w217,
					'row_cashout_x217' => $cashout_x217,
					'row_cashout_y217' => $cashout_y217,
					'row_cashout_z217' => $cashout_z217,
					'row_cashout_a317' => $cashout_a317,
					'row_cashout_b317' => $cashout_b317,
					'row_cashout_c317' => $cashout_c317,
					'row_cashout_d317' => $cashout_d317,
					'row_cashout_e317' => $cashout_e317,
					'row_cashout_f317' => $cashout_f317,
					'row_cashout_g317' => $cashout_g317,
					'row_cashout_h317' => $cashout_h317,
					'row_cashout_i317' => $cashout_i317,
					'row_cashout_j317' => $cashout_j317,
					'row_cashout_k317' => $cashout_k317,
					'row_cashout_l317' => $cashout_l317,
					'row_tCashoutProj17' => $tCashoutProj_17,
					'row_tCashoutReal17' => $tCashoutReal_17,

					// Cash-Out Hari Ke-18
					'row_cashout_a18' => $cashout_a18,
					'row_cashout_b18' => $cashout_b18,
					'row_cashout_c18' => $cashout_c18,
					'row_cashout_d18' => $cashout_d18,
					'row_cashout_e18' => $cashout_e18,
					'row_cashout_f18' => $cashout_f18,
					'row_cashout_g18' => $cashout_g18,
					'row_cashout_h18' => $cashout_h18,
					'row_cashout_i18' => $cashout_i18,
					'row_cashout_j18' => $cashout_j18,
					'row_cashout_k18' => $cashout_k18,
					'row_cashout_l18' => $cashout_l18,
					'row_cashout_m18' => $cashout_m18,
					'row_cashout_n18' => $cashout_n18,
					'row_cashout_o18' => $cashout_o18,
					'row_cashout_p18' => $cashout_p18,
					'row_cashout_q18' => $cashout_q18,
					'row_cashout_r18' => $cashout_r18,
					'row_cashout_s18' => $cashout_s18,
					'row_cashout_t18' => $cashout_t18,
					'row_cashout_u18' => $cashout_u18,
					'row_cashout_v18' => $cashout_v18,
					'row_cashout_w18' => $cashout_w18,
					'row_cashout_x18' => $cashout_x18,
					'row_cashout_y18' => $cashout_y18,
					'row_cashout_z18' => $cashout_z18,
					'row_cashout_a218' => $cashout_a218,
					'row_cashout_b218' => $cashout_b218,
					'row_cashout_c218' => $cashout_c218,
					'row_cashout_d218' => $cashout_d218,
					'row_cashout_e218' => $cashout_e218,
					'row_cashout_f218' => $cashout_f218,
					'row_cashout_g218' => $cashout_g218,
					'row_cashout_h218' => $cashout_h218,
					'row_cashout_i218' => $cashout_i218,
					'row_cashout_j218' => $cashout_j218,
					'row_cashout_k218' => $cashout_k218,
					'row_cashout_l218' => $cashout_l218,
					'row_cashout_m218' => $cashout_m218,
					'row_cashout_n218' => $cashout_n218,
					'row_cashout_o218' => $cashout_o218,
					'row_cashout_p218' => $cashout_p218,
					'row_cashout_q218' => $cashout_q218,
					'row_cashout_r218' => $cashout_r218,
					'row_cashout_s218' => $cashout_s218,
					'row_cashout_t218' => $cashout_t218,
					'row_cashout_u218' => $cashout_u218,
					'row_cashout_v218' => $cashout_v218,
					'row_cashout_w218' => $cashout_w218,
					'row_cashout_x218' => $cashout_x218,
					'row_cashout_y218' => $cashout_y218,
					'row_cashout_z218' => $cashout_z218,
					'row_cashout_a318' => $cashout_a318,
					'row_cashout_b318' => $cashout_b318,
					'row_cashout_c318' => $cashout_c318,
					'row_cashout_d318' => $cashout_d318,
					'row_cashout_e318' => $cashout_e318,
					'row_cashout_f318' => $cashout_f318,
					'row_cashout_g318' => $cashout_g318,
					'row_cashout_h318' => $cashout_h318,
					'row_cashout_i318' => $cashout_i318,
					'row_cashout_j318' => $cashout_j318,
					'row_cashout_k318' => $cashout_k318,
					'row_cashout_l318' => $cashout_l318,
					'row_tCashoutProj18' => $tCashoutProj_18,
					'row_tCashoutReal18' => $tCashoutReal_18,

					// Cash-Out Hari Ke-19
					'row_cashout_a19' => $cashout_a19,
					'row_cashout_b19' => $cashout_b19,
					'row_cashout_c19' => $cashout_c19,
					'row_cashout_d19' => $cashout_d19,
					'row_cashout_e19' => $cashout_e19,
					'row_cashout_f19' => $cashout_f19,
					'row_cashout_g19' => $cashout_g19,
					'row_cashout_h19' => $cashout_h19,
					'row_cashout_i19' => $cashout_i19,
					'row_cashout_j19' => $cashout_j19,
					'row_cashout_k19' => $cashout_k19,
					'row_cashout_l19' => $cashout_l19,
					'row_cashout_m19' => $cashout_m19,
					'row_cashout_n19' => $cashout_n19,
					'row_cashout_o19' => $cashout_o19,
					'row_cashout_p19' => $cashout_p19,
					'row_cashout_q19' => $cashout_q19,
					'row_cashout_r19' => $cashout_r19,
					'row_cashout_s19' => $cashout_s19,
					'row_cashout_t19' => $cashout_t19,
					'row_cashout_u19' => $cashout_u19,
					'row_cashout_v19' => $cashout_v19,
					'row_cashout_w19' => $cashout_w19,
					'row_cashout_x19' => $cashout_x19,
					'row_cashout_y19' => $cashout_y19,
					'row_cashout_z19' => $cashout_z19,
					'row_cashout_a219' => $cashout_a219,
					'row_cashout_b219' => $cashout_b219,
					'row_cashout_c219' => $cashout_c219,
					'row_cashout_d219' => $cashout_d219,
					'row_cashout_e219' => $cashout_e219,
					'row_cashout_f219' => $cashout_f219,
					'row_cashout_g219' => $cashout_g219,
					'row_cashout_h219' => $cashout_h219,
					'row_cashout_i219' => $cashout_i219,
					'row_cashout_j219' => $cashout_j219,
					'row_cashout_k219' => $cashout_k219,
					'row_cashout_l219' => $cashout_l219,
					'row_cashout_m219' => $cashout_m219,
					'row_cashout_n219' => $cashout_n219,
					'row_cashout_o219' => $cashout_o219,
					'row_cashout_p219' => $cashout_p219,
					'row_cashout_q219' => $cashout_q219,
					'row_cashout_r219' => $cashout_r219,
					'row_cashout_s219' => $cashout_s219,
					'row_cashout_t219' => $cashout_t219,
					'row_cashout_u219' => $cashout_u219,
					'row_cashout_v219' => $cashout_v219,
					'row_cashout_w219' => $cashout_w219,
					'row_cashout_x219' => $cashout_x219,
					'row_cashout_y219' => $cashout_y219,
					'row_cashout_z219' => $cashout_z219,
					'row_cashout_a319' => $cashout_a319,
					'row_cashout_b319' => $cashout_b319,
					'row_cashout_c319' => $cashout_c319,
					'row_cashout_d319' => $cashout_d319,
					'row_cashout_e319' => $cashout_e319,
					'row_cashout_f319' => $cashout_f319,
					'row_cashout_g319' => $cashout_g319,
					'row_cashout_h319' => $cashout_h319,
					'row_cashout_i319' => $cashout_i319,
					'row_cashout_j319' => $cashout_j319,
					'row_cashout_k319' => $cashout_k319,
					'row_cashout_l319' => $cashout_l319,
					'row_tCashoutProj19' => $tCashoutProj_19,
					'row_tCashoutReal19' => $tCashoutReal_19,

					// Cash-Out Hari Ke-20
					'row_cashout_a20' => $cashout_a20,
					'row_cashout_b20' => $cashout_b20,
					'row_cashout_c20' => $cashout_c20,
					'row_cashout_d20' => $cashout_d20,
					'row_cashout_e20' => $cashout_e20,
					'row_cashout_f20' => $cashout_f20,
					'row_cashout_g20' => $cashout_g20,
					'row_cashout_h20' => $cashout_h20,
					'row_cashout_i20' => $cashout_i20,
					'row_cashout_j20' => $cashout_j20,
					'row_cashout_k20' => $cashout_k20,
					'row_cashout_l20' => $cashout_l20,
					'row_cashout_m20' => $cashout_m20,
					'row_cashout_n20' => $cashout_n20,
					'row_cashout_o20' => $cashout_o20,
					'row_cashout_p20' => $cashout_p20,
					'row_cashout_q20' => $cashout_q20,
					'row_cashout_r20' => $cashout_r20,
					'row_cashout_s20' => $cashout_s20,
					'row_cashout_t20' => $cashout_t20,
					'row_cashout_u20' => $cashout_u20,
					'row_cashout_v20' => $cashout_v20,
					'row_cashout_w20' => $cashout_w20,
					'row_cashout_x20' => $cashout_x20,
					'row_cashout_y20' => $cashout_y20,
					'row_cashout_z20' => $cashout_z20,
					'row_cashout_a220' => $cashout_a220,
					'row_cashout_b220' => $cashout_b220,
					'row_cashout_c220' => $cashout_c220,
					'row_cashout_d220' => $cashout_d220,
					'row_cashout_e220' => $cashout_e220,
					'row_cashout_f220' => $cashout_f220,
					'row_cashout_g220' => $cashout_g220,
					'row_cashout_h220' => $cashout_h220,
					'row_cashout_i220' => $cashout_i220,
					'row_cashout_j220' => $cashout_j220,
					'row_cashout_k220' => $cashout_k220,
					'row_cashout_l220' => $cashout_l220,
					'row_cashout_m220' => $cashout_m220,
					'row_cashout_n220' => $cashout_n220,
					'row_cashout_o220' => $cashout_o220,
					'row_cashout_p220' => $cashout_p220,
					'row_cashout_q220' => $cashout_q220,
					'row_cashout_r220' => $cashout_r220,
					'row_cashout_s220' => $cashout_s220,
					'row_cashout_t220' => $cashout_t220,
					'row_cashout_u220' => $cashout_u220,
					'row_cashout_v220' => $cashout_v220,
					'row_cashout_w220' => $cashout_w220,
					'row_cashout_x220' => $cashout_x220,
					'row_cashout_y220' => $cashout_y220,
					'row_cashout_z220' => $cashout_z220,
					'row_cashout_a320' => $cashout_a320,
					'row_cashout_b320' => $cashout_b320,
					'row_cashout_c320' => $cashout_c320,
					'row_cashout_d320' => $cashout_d320,
					'row_cashout_e320' => $cashout_e320,
					'row_cashout_f320' => $cashout_f320,
					'row_cashout_g320' => $cashout_g320,
					'row_cashout_h320' => $cashout_h320,
					'row_cashout_i320' => $cashout_i320,
					'row_cashout_j320' => $cashout_j320,
					'row_cashout_k320' => $cashout_k320,
					'row_cashout_l320' => $cashout_l320,
					'row_tCashoutProj20' => $tCashoutProj_20,
					'row_tCashoutReal20' => $tCashoutReal_20,

					// Cash-Out Hari Ke-21
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
					'row_cashout_a221' => $cashout_a221,
					'row_cashout_b221' => $cashout_b221,
					'row_cashout_c221' => $cashout_c221,
					'row_cashout_d221' => $cashout_d221,
					'row_cashout_e221' => $cashout_e221,
					'row_cashout_f221' => $cashout_f221,
					'row_cashout_g221' => $cashout_g221,
					'row_cashout_h221' => $cashout_h221,
					'row_cashout_i221' => $cashout_i221,
					'row_cashout_j221' => $cashout_j221,
					'row_cashout_k221' => $cashout_k221,
					'row_cashout_l221' => $cashout_l221,
					'row_cashout_m221' => $cashout_m221,
					'row_cashout_n221' => $cashout_n221,
					'row_cashout_o221' => $cashout_o221,
					'row_cashout_p221' => $cashout_p221,
					'row_cashout_q221' => $cashout_q221,
					'row_cashout_r221' => $cashout_r221,
					'row_cashout_s221' => $cashout_s221,
					'row_cashout_t221' => $cashout_t221,
					'row_cashout_u221' => $cashout_u221,
					'row_cashout_v221' => $cashout_v221,
					'row_cashout_w221' => $cashout_w221,
					'row_cashout_x221' => $cashout_x221,
					'row_cashout_y221' => $cashout_y221,
					'row_cashout_z221' => $cashout_z221,
					'row_cashout_a321' => $cashout_a321,
					'row_cashout_b321' => $cashout_b321,
					'row_cashout_c321' => $cashout_c321,
					'row_cashout_d321' => $cashout_d321,
					'row_cashout_e321' => $cashout_e321,
					'row_cashout_f321' => $cashout_f321,
					'row_cashout_g321' => $cashout_g321,
					'row_cashout_h321' => $cashout_h321,
					'row_cashout_i321' => $cashout_i321,
					'row_cashout_j321' => $cashout_j321,
					'row_cashout_k321' => $cashout_k321,
					'row_cashout_l321' => $cashout_l321,
					'row_tCashoutProj21' => $tCashoutProj_21,
					'row_tCashoutReal21' => $tCashoutReal_21,

					// Cash-Out Hari Ke-22
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
					'row_cashout_a222' => $cashout_a222,
					'row_cashout_b222' => $cashout_b222,
					'row_cashout_c222' => $cashout_c222,
					'row_cashout_d222' => $cashout_d222,
					'row_cashout_e222' => $cashout_e222,
					'row_cashout_f222' => $cashout_f222,
					'row_cashout_g222' => $cashout_g222,
					'row_cashout_h222' => $cashout_h222,
					'row_cashout_i222' => $cashout_i222,
					'row_cashout_j222' => $cashout_j222,
					'row_cashout_k222' => $cashout_k222,
					'row_cashout_l222' => $cashout_l222,
					'row_cashout_m222' => $cashout_m222,
					'row_cashout_n222' => $cashout_n222,
					'row_cashout_o222' => $cashout_o222,
					'row_cashout_p222' => $cashout_p222,
					'row_cashout_q222' => $cashout_q222,
					'row_cashout_r222' => $cashout_r222,
					'row_cashout_s222' => $cashout_s222,
					'row_cashout_t222' => $cashout_t222,
					'row_cashout_u222' => $cashout_u222,
					'row_cashout_v222' => $cashout_v222,
					'row_cashout_w222' => $cashout_w222,
					'row_cashout_x222' => $cashout_x222,
					'row_cashout_y222' => $cashout_y222,
					'row_cashout_z222' => $cashout_z222,
					'row_cashout_a322' => $cashout_a322,
					'row_cashout_b322' => $cashout_b322,
					'row_cashout_c322' => $cashout_c322,
					'row_cashout_d322' => $cashout_d322,
					'row_cashout_e322' => $cashout_e322,
					'row_cashout_f322' => $cashout_f322,
					'row_cashout_g322' => $cashout_g322,
					'row_cashout_h322' => $cashout_h322,
					'row_cashout_i322' => $cashout_i322,
					'row_cashout_j322' => $cashout_j322,
					'row_cashout_k322' => $cashout_k322,
					'row_cashout_l322' => $cashout_l322,
					'row_tCashoutProj22' => $tCashoutProj_22,
					'row_tCashoutReal22' => $tCashoutReal_22,

					// Cash-Out Hari Ke-23
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
					'row_cashout_a223' => $cashout_a223,
					'row_cashout_b223' => $cashout_b223,
					'row_cashout_c223' => $cashout_c223,
					'row_cashout_d223' => $cashout_d223,
					'row_cashout_e223' => $cashout_e223,
					'row_cashout_f223' => $cashout_f223,
					'row_cashout_g223' => $cashout_g223,
					'row_cashout_h223' => $cashout_h223,
					'row_cashout_i223' => $cashout_i223,
					'row_cashout_j223' => $cashout_j223,
					'row_cashout_k223' => $cashout_k223,
					'row_cashout_l223' => $cashout_l223,
					'row_cashout_m223' => $cashout_m223,
					'row_cashout_n223' => $cashout_n223,
					'row_cashout_o223' => $cashout_o223,
					'row_cashout_p223' => $cashout_p223,
					'row_cashout_q223' => $cashout_q223,
					'row_cashout_r223' => $cashout_r223,
					'row_cashout_s223' => $cashout_s223,
					'row_cashout_t223' => $cashout_t223,
					'row_cashout_u223' => $cashout_u223,
					'row_cashout_v223' => $cashout_v223,
					'row_cashout_w223' => $cashout_w223,
					'row_cashout_x223' => $cashout_x223,
					'row_cashout_y223' => $cashout_y223,
					'row_cashout_z223' => $cashout_z223,
					'row_cashout_a323' => $cashout_a323,
					'row_cashout_b323' => $cashout_b323,
					'row_cashout_c323' => $cashout_c323,
					'row_cashout_d323' => $cashout_d323,
					'row_cashout_e323' => $cashout_e323,
					'row_cashout_f323' => $cashout_f323,
					'row_cashout_g323' => $cashout_g323,
					'row_cashout_h323' => $cashout_h323,
					'row_cashout_i323' => $cashout_i323,
					'row_cashout_j323' => $cashout_j323,
					'row_cashout_k323' => $cashout_k323,
					'row_cashout_l323' => $cashout_l323,
					'row_tCashoutProj23' => $tCashoutProj_23,
					'row_tCashoutReal23' => $tCashoutReal_23,

					// Cash-Out Hari Ke-24
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
					'row_cashout_a224' => $cashout_a224,
					'row_cashout_b224' => $cashout_b224,
					'row_cashout_c224' => $cashout_c224,
					'row_cashout_d224' => $cashout_d224,
					'row_cashout_e224' => $cashout_e224,
					'row_cashout_f224' => $cashout_f224,
					'row_cashout_g224' => $cashout_g224,
					'row_cashout_h224' => $cashout_h224,
					'row_cashout_i224' => $cashout_i224,
					'row_cashout_j224' => $cashout_j224,
					'row_cashout_k224' => $cashout_k224,
					'row_cashout_l224' => $cashout_l224,
					'row_cashout_m224' => $cashout_m224,
					'row_cashout_n224' => $cashout_n224,
					'row_cashout_o224' => $cashout_o224,
					'row_cashout_p224' => $cashout_p224,
					'row_cashout_q224' => $cashout_q224,
					'row_cashout_r224' => $cashout_r224,
					'row_cashout_s224' => $cashout_s224,
					'row_cashout_t224' => $cashout_t224,
					'row_cashout_u224' => $cashout_u224,
					'row_cashout_v224' => $cashout_v224,
					'row_cashout_w224' => $cashout_w224,
					'row_cashout_x224' => $cashout_x224,
					'row_cashout_y224' => $cashout_y224,
					'row_cashout_z224' => $cashout_z224,
					'row_cashout_a324' => $cashout_a324,
					'row_cashout_b324' => $cashout_b324,
					'row_cashout_c324' => $cashout_c324,
					'row_cashout_d324' => $cashout_d324,
					'row_cashout_e324' => $cashout_e324,
					'row_cashout_f324' => $cashout_f324,
					'row_cashout_g324' => $cashout_g324,
					'row_cashout_h324' => $cashout_h324,
					'row_cashout_i324' => $cashout_i324,
					'row_cashout_j324' => $cashout_j324,
					'row_cashout_k324' => $cashout_k324,
					'row_cashout_l324' => $cashout_l324,
					'row_tCashoutProj24' => $tCashoutProj_24,
					'row_tCashoutReal24' => $tCashoutReal_24,

					// Cash-Out Hari Ke-25
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
					'row_cashout_a225' => $cashout_a225,
					'row_cashout_b225' => $cashout_b225,
					'row_cashout_c225' => $cashout_c225,
					'row_cashout_d225' => $cashout_d225,
					'row_cashout_e225' => $cashout_e225,
					'row_cashout_f225' => $cashout_f225,
					'row_cashout_g225' => $cashout_g225,
					'row_cashout_h225' => $cashout_h225,
					'row_cashout_i225' => $cashout_i225,
					'row_cashout_j225' => $cashout_j225,
					'row_cashout_k225' => $cashout_k225,
					'row_cashout_l225' => $cashout_l225,
					'row_cashout_m225' => $cashout_m225,
					'row_cashout_n225' => $cashout_n225,
					'row_cashout_o225' => $cashout_o225,
					'row_cashout_p225' => $cashout_p225,
					'row_cashout_q225' => $cashout_q225,
					'row_cashout_r225' => $cashout_r225,
					'row_cashout_s225' => $cashout_s225,
					'row_cashout_t225' => $cashout_t225,
					'row_cashout_u225' => $cashout_u225,
					'row_cashout_v225' => $cashout_v225,
					'row_cashout_w225' => $cashout_w225,
					'row_cashout_x225' => $cashout_x225,
					'row_cashout_y225' => $cashout_y225,
					'row_cashout_z225' => $cashout_z225,
					'row_cashout_a325' => $cashout_a325,
					'row_cashout_b325' => $cashout_b325,
					'row_cashout_c325' => $cashout_c325,
					'row_cashout_d325' => $cashout_d325,
					'row_cashout_e325' => $cashout_e325,
					'row_cashout_f325' => $cashout_f325,
					'row_cashout_g325' => $cashout_g325,
					'row_cashout_h325' => $cashout_h325,
					'row_cashout_i325' => $cashout_i325,
					'row_cashout_j325' => $cashout_j325,
					'row_cashout_k325' => $cashout_k325,
					'row_cashout_l325' => $cashout_l325,
					'row_tCashoutProj25' => $tCashoutProj_25,
					'row_tCashoutReal25' => $tCashoutReal_25

				));
				$this->load->view('footer');

		}else{ // Jika tombol cari tidak di klik / posisi default

			// Settingan Hari Dan Tanggal
  
			  $hari = date('D'); // Hari Ini Dalam Format Standar (Sun, Mon, Tue, Wed, Thu, Fri, Sat)
			  $tanggal = date('Y-m-d');

			  switch($hari){
		        case 'Mon' :
		          $hari1='Sen'; $hari2='Sel'; $hari3='Rab'; $hari4='Kam'; $hari5='Jum';
		          $hari6='Sen'; $hari7='Sel'; $hari8='Rab'; $hari9='Kam'; $hari10='Jum';
		          $hari11='Sen'; $hari12='Sel'; $hari13='Rab'; $hari14='Kam'; $hari15='Jum';
		          $hari16='Sen'; $hari17='Sel'; $hari18='Rab'; $hari19='Kam'; $hari20='Jum';
		          $hari21='Sen'; $hari22='Sel'; $hari23='Rab'; $hari24='Kam'; $hari25='Jum';

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

		          // Senin / Minggu ke-2
		          $tanggal6 = date('d-m-Y', strtotime($tanggal)+60*60*24*7);
		          // Selasa-2
		          $tanggal7 = date('d-m-Y', strtotime($tanggal)+60*60*24*8);
		          // Rabu-2
		          $tanggal8 = date('d-m-Y', strtotime($tanggal)+60*60*24*9);
		          // Kamis-2
		          $tanggal9 = date('d-m-Y', strtotime($tanggal)+60*60*24*10);
		          // Jumat-2
		          $tanggal10 = date('d-m-Y', strtotime($tanggal)+60*60*24*11);

		          // Senin / Minggu ke-3
		          $tanggal11 = date('d-m-Y', strtotime($tanggal)+60*60*24*14);
		          // Selasa-3
		          $tanggal12 = date('d-m-Y', strtotime($tanggal)+60*60*24*15);
		          // Rabu-3
		          $tanggal13 = date('d-m-Y', strtotime($tanggal)+60*60*24*16);
		          // Kamis-3
		          $tanggal14 = date('d-m-Y', strtotime($tanggal)+60*60*24*17);
		          // Jumat-3
		          $tanggal15 = date('d-m-Y', strtotime($tanggal)+60*60*24*18);

		          // Senin / Minggu ke-4
		          $tanggal16 = date('d-m-Y', strtotime($tanggal)+60*60*24*21);
		          // Selasa-4
		          $tanggal17 = date('d-m-Y', strtotime($tanggal)+60*60*24*12);
		          // Rabu-4
		          $tanggal18 = date('d-m-Y', strtotime($tanggal)+60*60*24*23);
		          // Kamis-4
		          $tanggal19 = date('d-m-Y', strtotime($tanggal)+60*60*24*24);
		          // Jumat-4
		          $tanggal20 = date('d-m-Y', strtotime($tanggal)+60*60*24*25);

		          // Senin / Minggu ke-5
		          $tanggal21 = date('d-m-Y', strtotime($tanggal)+60*60*24*28);
		          // Selasa-5
		          $tanggal22 = date('d-m-Y', strtotime($tanggal)+60*60*24*29);
		          // Rabu-5
		          $tanggal23 = date('d-m-Y', strtotime($tanggal)+60*60*24*30);
		          // Kamis-5
		          $tanggal24 = date('d-m-Y', strtotime($tanggal)+60*60*24*31);
		          // Jumat-5
		          $tanggal25 = date('d-m-Y', strtotime($tanggal)+60*60*24*32);

		          break;

		        case 'Tue' :
		          $hari1='Sel'; $hari2='Rab'; $hari3='Kam'; $hari4='Jum'; $hari5='Sen';
		          $hari6='Sel'; $hari7='Rab'; $hari8='Kam'; $hari9='Jum'; $hari10='Sen';
		          $hari11='Sel'; $hari12='Rab'; $hari13='Kam'; $hari14='Jum'; $hari15='Sen';
		          $hari16='Sel'; $hari17='Rab'; $hari18='Kam'; $hari19='Jum'; $hari20='Sen';
		          $hari21='Sel'; $hari22='Rab'; $hari23='Kam'; $hari24='Jum'; $hari25='Sen';

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

		          // Selasa / Minggu Ke-2
		          $tanggal6 = date('d-m-Y', strtotime($tanggal)+60*60*24*7);
		          // Rabu-2
		          $tanggal7 = date('d-m-Y', strtotime($tanggal)+60*60*24*8);
		          // Kamis-2
		          $tanggal8 = date('d-m-Y', strtotime($tanggal)+60*60*24*9);
		          // Jumat-2
		          $tanggal9 = date('d-m-Y', strtotime($tanggal)+60*60*24*10);
		          // Senin-2
		          $tanggal10 = date('d-m-Y', strtotime($tanggal)+60*60*24*13);

		          // Selasa / Minggu Ke-3
		          $tanggal11 = date('d-m-Y', strtotime($tanggal)+60*60*24*14);
		          // Rabu-3
		          $tanggal12 = date('d-m-Y', strtotime($tanggal)+60*60*24*15);
		          // Kamis-3
		          $tanggal13 = date('d-m-Y', strtotime($tanggal)+60*60*24*16);
		          // Jumat-3
		          $tanggal14 = date('d-m-Y', strtotime($tanggal)+60*60*24*17);
		          // Senin-3
		          $tanggal15 = date('d-m-Y', strtotime($tanggal)+60*60*24*20);

		          // Selasa / Minggu Ke-4
		          $tanggal16 = date('d-m-Y', strtotime($tanggal)+60*60*24*21);
		          // Rabu-4
		          $tanggal17 = date('d-m-Y', strtotime($tanggal)+60*60*24*22);
		          // Kamis-4
		          $tanggal18 = date('d-m-Y', strtotime($tanggal)+60*60*24*23);
		          // Jumat-4
		          $tanggal19 = date('d-m-Y', strtotime($tanggal)+60*60*24*24);
		          // Senin-4
		          $tanggal20 = date('d-m-Y', strtotime($tanggal)+60*60*24*27);

		          // Selasa / Minggu Ke-5
		          $tanggal21 = date('d-m-Y', strtotime($tanggal)+60*60*24*28);
		          // Rabu-5
		          $tanggal22 = date('d-m-Y', strtotime($tanggal)+60*60*24*29);
		          // Kamis-5
		          $tanggal23 = date('d-m-Y', strtotime($tanggal)+60*60*24*30);
		          // Jumat-5
		          $tanggal24 = date('d-m-Y', strtotime($tanggal)+60*60*24*31);
		          // Senin-5
		          $tanggal25 = date('d-m-Y', strtotime($tanggal)+60*60*24*34);

		          break;

		        case 'Wed' :
		          $hari1='Rab'; $hari2='Kam'; $hari3='Jum'; $hari4='Sen'; $hari5='Sel';
		          $hari6='Rab'; $hari7='Kam'; $hari8='Jum'; $hari9='Sen'; $hari10='Sel';
		          $hari11='Rab'; $hari12='Kam'; $hari13='Jum'; $hari14='Sen'; $hari15='Sel';
		          $hari16='Rab'; $hari17='Kam'; $hari18='Jum'; $hari19='Sen'; $hari20='Sel';
		          $hari21='Rab'; $hari22='Kam'; $hari23='Jum'; $hari24='Sen'; $hari25='Sel';

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

		          // Rabu / Minggu Ke-2
		          $tanggal6 = date('d-m-Y', strtotime($tanggal)+60*60*24*7);
		          // Kamis-2
		          $tanggal7 = date('d-m-Y', strtotime($tanggal)+60*60*24*8);
		          // Jumat-2
		          $tanggal8 = date('d-m-Y', strtotime($tanggal)+60*60*24*9);
		          // Senin-2
		          $tanggal9 = date('d-m-Y', strtotime($tanggal)+60*60*24*12);
		          // Selasa-2
		          $tanggal10 = date('d-m-Y', strtotime($tanggal)+60*60*24*13);

		          // Rabu / Minggu Ke-3
		          $tanggal11 = date('d-m-Y', strtotime($tanggal)+60*60*24*14);
		          // Kamis-3
		          $tanggal12 = date('d-m-Y', strtotime($tanggal)+60*60*24*15);
		          // Jumat-3
		          $tanggal13 = date('d-m-Y', strtotime($tanggal)+60*60*24*16);
		          // Senin-3
		          $tanggal14 = date('d-m-Y', strtotime($tanggal)+60*60*24*19);
		          // Selasa-3
		          $tanggal15 = date('d-m-Y', strtotime($tanggal)+60*60*24*20);

		          // Rabu / Minggu Ke-4
		          $tanggal16 = date('d-m-Y', strtotime($tanggal)+60*60*24*21);
		          // Kamis-4
		          $tanggal17 = date('d-m-Y', strtotime($tanggal)+60*60*24*22);
		          // Jumat-4
		          $tanggal18 = date('d-m-Y', strtotime($tanggal)+60*60*24*23);
		          // Senin-4
		          $tanggal19 = date('d-m-Y', strtotime($tanggal)+60*60*24*26);
		          // Selasa-4
		          $tanggal20 = date('d-m-Y', strtotime($tanggal)+60*60*24*27);

		          // Rabu / Minggu Ke-5
		          $tanggal21 = date('d-m-Y', strtotime($tanggal)+60*60*24*28);
		          // Kamis-5
		          $tanggal22 = date('d-m-Y', strtotime($tanggal)+60*60*24*29);
		          // Jumat-5
		          $tanggal23 = date('d-m-Y', strtotime($tanggal)+60*60*24*30);
		          // Senin-5
		          $tanggal24 = date('d-m-Y', strtotime($tanggal)+60*60*24*33);
		          // Selasa-5
		          $tanggal25 = date('d-m-Y', strtotime($tanggal)+60*60*24*34);

		          break;

		        case 'Thu' :
		          $hari1='Kam'; $hari2='Jum'; $hari3='Sen'; $hari4='Sel'; $hari5='Rab';
		          $hari6='Kam'; $hari7='Jum'; $hari8='Sen'; $hari9='Sel'; $hari10='Rab';
		          $hari11='Kam'; $hari12='Jum'; $hari13='Sen'; $hari14='Sel'; $hari15='Rab';
		          $hari16='Kam'; $hari17='Jum'; $hari18='Sen'; $hari19='Sel'; $hari20='Rab';
		          $hari21='Kam'; $hari22='Jum'; $hari23='Sen'; $hari24='Sel'; $hari25='Rab';

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

		          // Kamis Minggu Ke-2
		          $tanggal6 = date('d-m-Y', strtotime($tanggal)+60*60*24*7);
		          // Jumat-2
		          $tanggal7 = date('d-m-Y', strtotime($tanggal)+60*60*24*8);
		          // Senin-2
		          $tanggal8 = date('d-m-Y', strtotime($tanggal)+60*60*24*11);
		          // Selasa-2
		          $tanggal9 = date('d-m-Y', strtotime($tanggal)+60*60*24*12);
		          // Rabu-2
		          $tanggal10 = date('d-m-Y', strtotime($tanggal)+60*60*24*13);

		          // Kamis Minggu Ke-3
		          $tanggal11 = date('d-m-Y', strtotime($tanggal)+60*60*24*14);
		          // Jumat-3
		          $tanggal12 = date('d-m-Y', strtotime($tanggal)+60*60*24*15);
		          // Senin-3
		          $tanggal13 = date('d-m-Y', strtotime($tanggal)+60*60*24*18);
		          // Selasa-3
		          $tanggal14 = date('d-m-Y', strtotime($tanggal)+60*60*24*19);
		          // Rabu-3
		          $tanggal15 = date('d-m-Y', strtotime($tanggal)+60*60*24*20);

		          // Kamis Minggu Ke-4
		          $tanggal16 = date('d-m-Y', strtotime($tanggal)+60*60*24*21);
		          // Jumat-4
		          $tanggal17 = date('d-m-Y', strtotime($tanggal)+60*60*24*22);
		          // Senin-4
		          $tanggal18 = date('d-m-Y', strtotime($tanggal)+60*60*24*25);
		          // Selasa-4
		          $tanggal19 = date('d-m-Y', strtotime($tanggal)+60*60*24*26);
		          // Rabu-4
		          $tanggal20 = date('d-m-Y', strtotime($tanggal)+60*60*24*27);

		          // Kamis Minggu Ke-5
		          $tanggal21 = date('d-m-Y', strtotime($tanggal)+60*60*24*28);
		          // Jumat-5
		          $tanggal22 = date('d-m-Y', strtotime($tanggal)+60*60*24*29);
		          // Senin-5
		          $tanggal23 = date('d-m-Y', strtotime($tanggal)+60*60*24*32);
		          // Selasa-5
		          $tanggal24 = date('d-m-Y', strtotime($tanggal)+60*60*24*33);
		          // Rabu-5
		          $tanggal25 = date('d-m-Y', strtotime($tanggal)+60*60*24*34);

		          break;

		        case 'Fri' :
		          $hari1='Jum'; $hari2='Sen'; $hari3='Sel'; $hari4='Rab'; $hari5='Kam';
		          $hari6='Jum'; $hari7='Sen'; $hari8='Sel'; $hari9='Rab'; $hari10='Kam';
		          $hari11='Jum'; $hari12='Sen'; $hari13='Sel'; $hari14='Rab'; $hari15='Kam';
		          $hari16='Jum'; $hari17='Sen'; $hari18='Sel'; $hari19='Rab'; $hari20='Kam';
		          $hari21='Jum'; $hari22='Sen'; $hari23='Sel'; $hari24='Rab'; $hari25='Kam';

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

		          // Jumat / Minggu Ke-2
		          $tanggal6 = date('d-m-Y', strtotime($tanggal)+60*60*24*7);
		          // Senin-2
		          $tanggal7 = date('d-m-Y', strtotime($tanggal)+60*60*24*10);
		          // Selasa-2
		          $tanggal8 = date('d-m-Y', strtotime($tanggal)+60*60*24*11);
		          // Rabu-2
		          $tanggal9 = date('d-m-Y', strtotime($tanggal)+60*60*24*12);
		          // Kamis-2
		          $tanggal10 = date('d-m-Y', strtotime($tanggal)+60*60*24*13);

		          // Jumat / Minggu Ke-3
		          $tanggal11 = date('d-m-Y', strtotime($tanggal)+60*60*24*14);
		          // Senin-3
		          $tanggal12 = date('d-m-Y', strtotime($tanggal)+60*60*24*17);
		          // Selasa-3
		          $tanggal13 = date('d-m-Y', strtotime($tanggal)+60*60*24*18);
		          // Rabu-3
		          $tanggal14 = date('d-m-Y', strtotime($tanggal)+60*60*24*19);
		          // Kamis-3
		          $tanggal15 = date('d-m-Y', strtotime($tanggal)+60*60*24*20);

		          // Jumat / Minggu Ke-4
		          $tanggal16 = date('d-m-Y', strtotime($tanggal)+60*60*24*21);
		          // Senin-4
		          $tanggal17 = date('d-m-Y', strtotime($tanggal)+60*60*24*24);
		          // Selasa-4
		          $tanggal18 = date('d-m-Y', strtotime($tanggal)+60*60*24*25);
		          // Rabu-4
		          $tanggal19 = date('d-m-Y', strtotime($tanggal)+60*60*24*26);
		          // Kamis-4
		          $tanggal20 = date('d-m-Y', strtotime($tanggal)+60*60*24*27);

		          // Jumat / Minggu Ke-5
		          $tanggal21 = date('d-m-Y', strtotime($tanggal)+60*60*24*28);
		          // Senin-5
		          $tanggal22 = date('d-m-Y', strtotime($tanggal)+60*60*24*31);
		          // Selasa-5
		          $tanggal23 = date('d-m-Y', strtotime($tanggal)+60*60*24*32);
		          // Rabu-5
		          $tanggal24 = date('d-m-Y', strtotime($tanggal)+60*60*24*33);
		          // Kamis-5
		          $tanggal25 = date('d-m-Y', strtotime($tanggal)+60*60*24*34);

		          break;

		        case 'Sat' :
		          $hari1='Jum'; $hari2='Sen'; $hari3='Sel'; $hari4='Rab'; $hari5='Kam';
		          $hari6='Jum'; $hari7='Sen'; $hari8='Sel'; $hari9='Rab'; $hari10='Kam';
		          $hari11='Jum'; $hari12='Sen'; $hari13='Sel'; $hari14='Rab'; $hari15='Kam';
		          $hari16='Jum'; $hari17='Sen'; $hari18='Sel'; $hari19='Rab'; $hari20='Kam';
		          $hari21='Jum'; $hari22='Sen'; $hari23='Sel'; $hari24='Rab'; $hari25='Kam';

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

		          // Jumat / Minggu Ke-2
		          $tanggal6 = date('d-m-Y', strtotime($tanggal)+60*60*24*6);
		          // Senin-2
		          $tanggal7 = date('d-m-Y', strtotime($tanggal)+60*60*24*9);
		          // Selasa-2
		          $tanggal8 = date('d-m-Y', strtotime($tanggal)+60*60*24*10);
		          // Rabu-2
		          $tanggal9 = date('d-m-Y', strtotime($tanggal)+60*60*24*11);
		          // Kamis-2
		          $tanggal10 = date('d-m-Y', strtotime($tanggal)+60*60*24*12);

		          // Jumat / Minggu Ke-3
		          $tanggal11 = date('d-m-Y', strtotime($tanggal)+60*60*24*13);
		          // Senin-3
		          $tanggal12 = date('d-m-Y', strtotime($tanggal)+60*60*24*16);
		          // Selasa-3
		          $tanggal13 = date('d-m-Y', strtotime($tanggal)+60*60*24*17);
		          // Rabu-3
		          $tanggal14 = date('d-m-Y', strtotime($tanggal)+60*60*24*18);
		          // Kamis-3
		          $tanggal15 = date('d-m-Y', strtotime($tanggal)+60*60*24*19);

		          // Jumat / Minggu Ke-4
		          $tanggal16 = date('d-m-Y', strtotime($tanggal)+60*60*24*20);
		          // Senin-4
		          $tanggal17 = date('d-m-Y', strtotime($tanggal)+60*60*24*23);
		          // Selasa-4
		          $tanggal18 = date('d-m-Y', strtotime($tanggal)+60*60*24*24);
		          // Rabu-4
		          $tanggal19 = date('d-m-Y', strtotime($tanggal)+60*60*24*25);
		          // Kamis-4
		          $tanggal20 = date('d-m-Y', strtotime($tanggal)+60*60*24*26);

		          // Jumat / Minggu Ke-5
		          $tanggal21 = date('d-m-Y', strtotime($tanggal)+60*60*24*27);
		          // Senin-5
		          $tanggal22 = date('d-m-Y', strtotime($tanggal)+60*60*24*30);
		          // Selasa-5
		          $tanggal23 = date('d-m-Y', strtotime($tanggal)+60*60*24*31);
		          // Rabu-5
		          $tanggal24 = date('d-m-Y', strtotime($tanggal)+60*60*24*32);
		          // Kamis-5
		          $tanggal25 = date('d-m-Y', strtotime($tanggal)+60*60*24*33);

		          break;

		        case 'Sun' :
		          $hari1='Jum'; $hari2='Sen'; $hari3='Sel'; $hari4='Rab'; $hari5='Kam';
		          $hari6='Jum'; $hari7='Sen'; $hari8='Sel'; $hari9='Rab'; $hari10='Kam';
		          $hari11='Jum'; $hari12='Sen'; $hari13='Sel'; $hari14='Rab'; $hari15='Kam';
		          $hari16='Jum'; $hari17='Sen'; $hari18='Sel'; $hari19='Rab'; $hari20='Kam';
		          $hari21='Jum'; $hari22='Sen'; $hari23='Sel'; $hari24='Rab'; $hari25='Kam';

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

		          // Jumat / Minggu Ke-2
		          $tanggal6 = date('d-m-Y', strtotime($tanggal)-60*60*24*5);
		          // Senin-2
		          $tanggal7 = date('d-m-Y', strtotime($tanggal)+60*60*24*8);
		          // Selasa-2
		          $tanggal8 = date('d-m-Y', strtotime($tanggal)+60*60*24*9);
		          // Rabu-2
		          $tanggal9 = date('d-m-Y', strtotime($tanggal)+60*60*24*10);
		          // Kamis-2
		          $tanggal10 = date('d-m-Y', strtotime($tanggal)+60*60*24*11);

		          // Jumat / Minggu Ke-3
		          $tanggal11 = date('d-m-Y', strtotime($tanggal)-60*60*24*12);
		          // Senin-3
		          $tanggal12 = date('d-m-Y', strtotime($tanggal)+60*60*24*15);
		          // Selasa-3
		          $tanggal13 = date('d-m-Y', strtotime($tanggal)+60*60*24*16);
		          // Rabu-3
		          $tanggal14 = date('d-m-Y', strtotime($tanggal)+60*60*24*17);
		          // Kamis-3
		          $tanggal15 = date('d-m-Y', strtotime($tanggal)+60*60*24*18);

		          // Jumat / Minggu Ke-4
		          $tanggal16 = date('d-m-Y', strtotime($tanggal)-60*60*24*19);
		          // Senin-4
		          $tanggal17 = date('d-m-Y', strtotime($tanggal)+60*60*24*22);
		          // Selasa-4
		          $tanggal18 = date('d-m-Y', strtotime($tanggal)+60*60*24*23);
		          // Rabu-4
		          $tanggal19 = date('d-m-Y', strtotime($tanggal)+60*60*24*24);
		          // Kamis-4
		          $tanggal20 = date('d-m-Y', strtotime($tanggal)+60*60*24*25);

		          // Jumat / Minggu Ke-5
		          $tanggal21 = date('d-m-Y', strtotime($tanggal)-60*60*24*26);
		          // Senin-5
		          $tanggal22 = date('d-m-Y', strtotime($tanggal)+60*60*24*29);
		          // Selasa-5
		          $tanggal23 = date('d-m-Y', strtotime($tanggal)+60*60*24*30);
		          // Rabu-5
		          $tanggal24 = date('d-m-Y', strtotime($tanggal)+60*60*24*31);
		          // Kamis-5
		          $tanggal25 = date('d-m-Y', strtotime($tanggal)+60*60*24*32);

		          break;

		      } // Penutup Settingan Hari Dan Tanggal

			  // ....................................................................................

        // Saldo Awal Hari-1
        $salaw_1 = $this->m_bulan->saldo_awal($tanggal1);

        // Allocated Cash Hari-1
        $allo_1 = $this->m_bulan->allocated_cash($tanggal1);

        // Ready Cash Hari-1
        $read_1 = $this->m_bulan->ready_cash($tanggal1);

        // Kas Besar Cabang Hari-1
        $kbc_1 = $this->m_bulan->kbc($tanggal1);

        // Note Hari-1
        $note_1 = $this->m_bulan->note($tanggal1);

        // Status Closing Hari-1
        $closing_1 = $this->m_bulan->status_closing($tanggal1);

        // Deposito (Hari-1)
        $deposito_1 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal1)));

        // B2B (Hari-1)
        $b2b_1 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal1)));

        // CASH-IN Hari Ke-1
        $cashin_a1 = $this->m_bulan->tampil_cashin_a($tanggal1);
        $cashin_b1 = $this->m_bulan->tampil_cashin_b($tanggal1);
        $cashin_c1 = $this->m_bulan->tampil_cashin_c($tanggal1);
        $cashin_d1 = $this->m_bulan->tampil_cashin_d($tanggal1);
        $cashin_e1 = $this->m_bulan->tampil_cashin_e($tanggal1);
        $cashin_f1 = $this->m_bulan->tampil_cashin_f($tanggal1);
        $cashin_g1 = $this->m_bulan->tampil_cashin_g($tanggal1);
        $cashin_h1 = $this->m_bulan->tampil_cashin_h($tanggal1);
        $cashin_i1 = $this->m_bulan->tampil_cashin_i($tanggal1);
        $cashin_j1 = $this->m_bulan->tampil_cashin_j($tanggal1);
        $cashin_k1 = $this->m_bulan->tampil_cashin_k($tanggal1);
        $cashin_l1 = $this->m_bulan->tampil_cashin_l($tanggal1);
        $cashin_m1 = $this->m_bulan->tampil_cashin_m($tanggal1);
        $cashin_n1 = $this->m_bulan->tampil_cashin_n($tanggal1);
        $cashin_o1 = $this->m_bulan->tampil_cashin_o($tanggal1);
        $cashin_p1 = $this->m_bulan->tampil_cashin_p($tanggal1);
        $cashin_q1 = $this->m_bulan->tampil_cashin_q($tanggal1);
        $cashin_r1 = $this->m_bulan->tampil_cashin_r($tanggal1);
        $cashin_s1 = $this->m_bulan->tampil_cashin_s($tanggal1);
        $tCashinProj_1 = $this->m_bulan->totalCashinProj($tanggal1);
        $tCashinReal_1 = $this->m_bulan->totalCashinReal($tanggal1);

        // ....................................................................................

        // Saldo Awal Hari-2
        $salaw_2 = $this->m_bulan->saldo_awal($tanggal2);

        // Allocated Cash Hari-2
        $allo_2 = $this->m_bulan->allocated_cash($tanggal2);

        // Ready Cash Hari-2
        $read_2 = $this->m_bulan->ready_cash($tanggal2);

        // Kas Besar Cabang Hari-2
        $kbc_2 = $this->m_bulan->kbc($tanggal2);

        // Note Hari-2
        $note_2 = $this->m_bulan->note($tanggal2);

        // Status Closing Hari-2
        $closing_2 = $this->m_bulan->status_closing($tanggal2);

        // Deposito (Hari-2)
        $deposito_2 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal2)));

        // B2B (Hari-2)
        $b2b_2 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal2)));

        // CASH-IN Hari Ke-2
        $cashin_a2 = $this->m_bulan->tampil_cashin_a($tanggal2);
        $cashin_b2 = $this->m_bulan->tampil_cashin_b($tanggal2);
        $cashin_c2 = $this->m_bulan->tampil_cashin_c($tanggal2);
        $cashin_d2 = $this->m_bulan->tampil_cashin_d($tanggal2);
        $cashin_e2 = $this->m_bulan->tampil_cashin_e($tanggal2);
        $cashin_f2 = $this->m_bulan->tampil_cashin_f($tanggal2);
        $cashin_g2 = $this->m_bulan->tampil_cashin_g($tanggal2);
        $cashin_h2 = $this->m_bulan->tampil_cashin_h($tanggal2);
        $cashin_i2 = $this->m_bulan->tampil_cashin_i($tanggal2);
        $cashin_j2 = $this->m_bulan->tampil_cashin_j($tanggal2);
        $cashin_k2 = $this->m_bulan->tampil_cashin_k($tanggal2);
        $cashin_l2 = $this->m_bulan->tampil_cashin_l($tanggal2);
        $cashin_m2 = $this->m_bulan->tampil_cashin_m($tanggal2);
        $cashin_n2 = $this->m_bulan->tampil_cashin_n($tanggal2);
        $cashin_o2 = $this->m_bulan->tampil_cashin_o($tanggal2);
        $cashin_p2 = $this->m_bulan->tampil_cashin_p($tanggal2);
        $cashin_q2 = $this->m_bulan->tampil_cashin_q($tanggal2);
        $cashin_r2 = $this->m_bulan->tampil_cashin_r($tanggal2);
        $cashin_s2 = $this->m_bulan->tampil_cashin_s($tanggal2);
        $tCashinProj_2 = $this->m_bulan->totalCashinProj($tanggal2);
        $tCashinReal_2 = $this->m_bulan->totalCashinReal($tanggal2);

        // ....................................................................................

        // Saldo Awal Hari-3
        $salaw_3 = $this->m_bulan->saldo_awal($tanggal3);

        // Allocated Cash Hari-3
        $allo_3 = $this->m_bulan->allocated_cash($tanggal3);

        // Ready Cash Hari-3
        $read_3 = $this->m_bulan->ready_cash($tanggal3);

        // Kas Besar Cabang Hari-3
        $kbc_3 = $this->m_bulan->kbc($tanggal3);

        // Note Hari-3
        $note_3 = $this->m_bulan->note($tanggal3);

        // Status Closing Hari-3
        $closing_3 = $this->m_bulan->status_closing($tanggal3);

        // Deposito (Hari-3)
        $deposito_3 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal3)));

        // B2B (Hari-3)
        $b2b_3 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal3)));


        // CASH-IN Hari Ke-3
        $cashin_a3 = $this->m_bulan->tampil_cashin_a($tanggal3);
        $cashin_b3 = $this->m_bulan->tampil_cashin_b($tanggal3);
        $cashin_c3 = $this->m_bulan->tampil_cashin_c($tanggal3);
        $cashin_d3 = $this->m_bulan->tampil_cashin_d($tanggal3);
        $cashin_e3 = $this->m_bulan->tampil_cashin_e($tanggal3);
        $cashin_f3 = $this->m_bulan->tampil_cashin_f($tanggal3);
        $cashin_g3 = $this->m_bulan->tampil_cashin_g($tanggal3);
        $cashin_h3 = $this->m_bulan->tampil_cashin_h($tanggal3);
        $cashin_i3 = $this->m_bulan->tampil_cashin_i($tanggal3);
        $cashin_j3 = $this->m_bulan->tampil_cashin_j($tanggal3);
        $cashin_k3 = $this->m_bulan->tampil_cashin_k($tanggal3);
        $cashin_l3 = $this->m_bulan->tampil_cashin_l($tanggal3);
        $cashin_m3 = $this->m_bulan->tampil_cashin_m($tanggal3);
        $cashin_n3 = $this->m_bulan->tampil_cashin_n($tanggal3);
        $cashin_o3 = $this->m_bulan->tampil_cashin_o($tanggal3);
        $cashin_p3 = $this->m_bulan->tampil_cashin_p($tanggal3);
        $cashin_q3 = $this->m_bulan->tampil_cashin_q($tanggal3);
        $cashin_r3 = $this->m_bulan->tampil_cashin_r($tanggal3);
        $cashin_s3 = $this->m_bulan->tampil_cashin_s($tanggal3);
        $tCashinProj_3 = $this->m_bulan->totalCashinProj($tanggal3);
        $tCashinReal_3 = $this->m_bulan->totalCashinReal($tanggal3);

        // ....................................................................................

        // Saldo Awal Hari-4
        $salaw_4 = $this->m_bulan->saldo_awal($tanggal4);

        // Allocated Cash Hari-4
        $allo_4 = $this->m_bulan->allocated_cash($tanggal4);

        // Ready Cash Hari-4
        $read_4 = $this->m_bulan->ready_cash($tanggal4);

        // Kas Besar Cabang Hari-4
        $kbc_4 = $this->m_bulan->kbc($tanggal4);

        // Note Hari-4
        $note_4 = $this->m_bulan->note($tanggal4);

        // Status Closing Hari-4
        $closing_4 = $this->m_bulan->status_closing($tanggal4);

        // Deposito (Hari-4)
        $deposito_4 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal4)));

        // B2B (Hari-4)
        $b2b_4 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal4)));

        // CASH-IN Hari Ke-4
        $cashin_a4 = $this->m_bulan->tampil_cashin_a($tanggal4);
        $cashin_b4 = $this->m_bulan->tampil_cashin_b($tanggal4);
        $cashin_c4 = $this->m_bulan->tampil_cashin_c($tanggal4);
        $cashin_d4 = $this->m_bulan->tampil_cashin_d($tanggal4);
        $cashin_e4 = $this->m_bulan->tampil_cashin_e($tanggal4);
        $cashin_f4 = $this->m_bulan->tampil_cashin_f($tanggal4);
        $cashin_g4 = $this->m_bulan->tampil_cashin_g($tanggal4);
        $cashin_h4 = $this->m_bulan->tampil_cashin_h($tanggal4);
        $cashin_i4 = $this->m_bulan->tampil_cashin_i($tanggal4);
        $cashin_j4 = $this->m_bulan->tampil_cashin_j($tanggal4);
        $cashin_k4 = $this->m_bulan->tampil_cashin_k($tanggal4);
        $cashin_l4 = $this->m_bulan->tampil_cashin_l($tanggal4);
        $cashin_m4 = $this->m_bulan->tampil_cashin_m($tanggal4);
        $cashin_n4 = $this->m_bulan->tampil_cashin_n($tanggal4);
        $cashin_o4 = $this->m_bulan->tampil_cashin_o($tanggal4);
        $cashin_p4 = $this->m_bulan->tampil_cashin_p($tanggal4);
        $cashin_q4 = $this->m_bulan->tampil_cashin_q($tanggal4);
        $cashin_r4 = $this->m_bulan->tampil_cashin_r($tanggal4);
        $cashin_s4 = $this->m_bulan->tampil_cashin_s($tanggal4);
        $tCashinProj_4 = $this->m_bulan->totalCashinProj($tanggal4);
        $tCashinReal_4 = $this->m_bulan->totalCashinReal($tanggal4);

        // ....................................................................................

        // Saldo Awal Hari-5
        $salaw_5 = $this->m_bulan->saldo_awal($tanggal5);

        // Allocated Cash Hari-5
        $allo_5 = $this->m_bulan->allocated_cash($tanggal5);

        // Ready Cash Hari-5
        $read_5 = $this->m_bulan->ready_cash($tanggal5);

        // Kas Besar Cabang Hari-5
        $kbc_5 = $this->m_bulan->kbc($tanggal5);

        // Note Hari-5
        $note_5 = $this->m_bulan->note($tanggal5);

        // Status Closing Hari-5
        $closing_5 = $this->m_bulan->status_closing($tanggal5);

        // Deposito (Hari-5)
        $deposito_5 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal5)));

        // B2B (Hari-5)
        $b2b_5 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal5)));

        // CASH-IN Hari Ke-5
        $cashin_a5 = $this->m_bulan->tampil_cashin_a($tanggal5);
        $cashin_b5 = $this->m_bulan->tampil_cashin_b($tanggal5);
        $cashin_c5 = $this->m_bulan->tampil_cashin_c($tanggal5);
        $cashin_d5 = $this->m_bulan->tampil_cashin_d($tanggal5);
        $cashin_e5 = $this->m_bulan->tampil_cashin_e($tanggal5);
        $cashin_f5 = $this->m_bulan->tampil_cashin_f($tanggal5);
        $cashin_g5 = $this->m_bulan->tampil_cashin_g($tanggal5);
        $cashin_h5 = $this->m_bulan->tampil_cashin_h($tanggal5);
        $cashin_i5 = $this->m_bulan->tampil_cashin_i($tanggal5);
        $cashin_j5 = $this->m_bulan->tampil_cashin_j($tanggal5);
        $cashin_k5 = $this->m_bulan->tampil_cashin_k($tanggal5);
        $cashin_l5 = $this->m_bulan->tampil_cashin_l($tanggal5);
        $cashin_m5 = $this->m_bulan->tampil_cashin_m($tanggal5);
        $cashin_n5 = $this->m_bulan->tampil_cashin_n($tanggal5);
        $cashin_o5 = $this->m_bulan->tampil_cashin_o($tanggal5);
        $cashin_p5 = $this->m_bulan->tampil_cashin_p($tanggal5);
        $cashin_q5 = $this->m_bulan->tampil_cashin_q($tanggal5);
        $cashin_r5 = $this->m_bulan->tampil_cashin_r($tanggal5);
        $cashin_s5 = $this->m_bulan->tampil_cashin_s($tanggal5);
        $tCashinProj_5 = $this->m_bulan->totalCashinProj($tanggal5);
        $tCashinReal_5 = $this->m_bulan->totalCashinReal($tanggal5);

        // ....................................................................................

        // Saldo Awal Hari-6
        $salaw_6 = $this->m_bulan->saldo_awal($tanggal6);

        // Allocated Cash Hari-6
        $allo_6 = $this->m_bulan->allocated_cash($tanggal6);

        // Ready Cash Hari-6
        $read_6 = $this->m_bulan->ready_cash($tanggal6);

        // Kas Besar Cabang Hari-6
        $kbc_6 = $this->m_bulan->kbc($tanggal6);

        // Note Hari-6
        $note_6 = $this->m_bulan->note($tanggal6);

        // Status Closing Hari-6
        $closing_6 = $this->m_bulan->status_closing($tanggal6);

        // Deposito (Hari-6)
        $deposito_6 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal6)));

        // B2B (Hari-6)
        $b2b_6 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal6)));

        // CASH-IN Hari Ke-6
        $cashin_a6 = $this->m_bulan->tampil_cashin_a($tanggal6);
        $cashin_b6 = $this->m_bulan->tampil_cashin_b($tanggal6);
        $cashin_c6 = $this->m_bulan->tampil_cashin_c($tanggal6);
        $cashin_d6 = $this->m_bulan->tampil_cashin_d($tanggal6);
        $cashin_e6 = $this->m_bulan->tampil_cashin_e($tanggal6);
        $cashin_f6 = $this->m_bulan->tampil_cashin_f($tanggal6);
        $cashin_g6 = $this->m_bulan->tampil_cashin_g($tanggal6);
        $cashin_h6 = $this->m_bulan->tampil_cashin_h($tanggal6);
        $cashin_i6 = $this->m_bulan->tampil_cashin_i($tanggal6);
        $cashin_j6 = $this->m_bulan->tampil_cashin_j($tanggal6);
        $cashin_k6 = $this->m_bulan->tampil_cashin_k($tanggal6);
        $cashin_l6 = $this->m_bulan->tampil_cashin_l($tanggal6);
        $cashin_m6 = $this->m_bulan->tampil_cashin_m($tanggal6);
        $cashin_n6 = $this->m_bulan->tampil_cashin_n($tanggal6);
        $cashin_o6 = $this->m_bulan->tampil_cashin_o($tanggal6);
        $cashin_p6 = $this->m_bulan->tampil_cashin_p($tanggal6);
        $cashin_q6 = $this->m_bulan->tampil_cashin_q($tanggal6);
        $cashin_r6 = $this->m_bulan->tampil_cashin_r($tanggal6);
        $cashin_s6 = $this->m_bulan->tampil_cashin_s($tanggal6);
        $tCashinProj_6 = $this->m_bulan->totalCashinProj($tanggal6);
        $tCashinReal_6 = $this->m_bulan->totalCashinReal($tanggal6);

        // ....................................................................................

        // Saldo Awal Hari-7
        $salaw_7 = $this->m_bulan->saldo_awal($tanggal7);

        // Allocated Cash Hari-7
        $allo_7 = $this->m_bulan->allocated_cash($tanggal7);

        // Ready Cash Hari-7
        $read_7 = $this->m_bulan->ready_cash($tanggal7);

        // Kas Besar Cabang Hari-7
        $kbc_7 = $this->m_bulan->kbc($tanggal7);

        // Note Hari-7
        $note_7 = $this->m_bulan->note($tanggal7);

        // Status Closing Hari-7
        $closing_7 = $this->m_bulan->status_closing($tanggal7);

        // Deposito (Hari-7)
        $deposito_7 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal7)));

        // B2B (Hari-7)
        $b2b_7 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal7)));

        // CASH-IN Hari Ke-7
        $cashin_a7 = $this->m_bulan->tampil_cashin_a($tanggal7);
        $cashin_b7 = $this->m_bulan->tampil_cashin_b($tanggal7);
        $cashin_c7 = $this->m_bulan->tampil_cashin_c($tanggal7);
        $cashin_d7 = $this->m_bulan->tampil_cashin_d($tanggal7);
        $cashin_e7 = $this->m_bulan->tampil_cashin_e($tanggal7);
        $cashin_f7 = $this->m_bulan->tampil_cashin_f($tanggal7);
        $cashin_g7 = $this->m_bulan->tampil_cashin_g($tanggal7);
        $cashin_h7 = $this->m_bulan->tampil_cashin_h($tanggal7);
        $cashin_i7 = $this->m_bulan->tampil_cashin_i($tanggal7);
        $cashin_j7 = $this->m_bulan->tampil_cashin_j($tanggal7);
        $cashin_k7 = $this->m_bulan->tampil_cashin_k($tanggal7);
        $cashin_l7 = $this->m_bulan->tampil_cashin_l($tanggal7);
        $cashin_m7 = $this->m_bulan->tampil_cashin_m($tanggal7);
        $cashin_n7 = $this->m_bulan->tampil_cashin_n($tanggal7);
        $cashin_o7 = $this->m_bulan->tampil_cashin_o($tanggal7);
        $cashin_p7 = $this->m_bulan->tampil_cashin_p($tanggal7);
        $cashin_q7 = $this->m_bulan->tampil_cashin_q($tanggal7);
        $cashin_r7 = $this->m_bulan->tampil_cashin_r($tanggal7);
        $cashin_s7 = $this->m_bulan->tampil_cashin_s($tanggal7);
        $tCashinProj_7 = $this->m_bulan->totalCashinProj($tanggal7);
        $tCashinReal_7 = $this->m_bulan->totalCashinReal($tanggal7);

        // ....................................................................................

        // Saldo Awal Hari-8
        $salaw_8 = $this->m_bulan->saldo_awal($tanggal8);

        // Allocated Cash Hari-8
        $allo_8 = $this->m_bulan->allocated_cash($tanggal8);

        // Ready Cash Hari-8
        $read_8 = $this->m_bulan->ready_cash($tanggal8);

        // Kas Besar Cabang Hari-8
        $kbc_8 = $this->m_bulan->kbc($tanggal8);

        // Note Hari-8
        $note_8 = $this->m_bulan->note($tanggal8);

        // Status Closing Hari-8
        $closing_8 = $this->m_bulan->status_closing($tanggal8);

        // Deposito (Hari-8)
        $deposito_8 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal8)));

        // B2B (Hari-8)
        $b2b_8 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal8)));

        // CASH-IN Hari Ke-8
        $cashin_a8 = $this->m_bulan->tampil_cashin_a($tanggal8);
        $cashin_b8 = $this->m_bulan->tampil_cashin_b($tanggal8);
        $cashin_c8 = $this->m_bulan->tampil_cashin_c($tanggal8);
        $cashin_d8 = $this->m_bulan->tampil_cashin_d($tanggal8);
        $cashin_e8 = $this->m_bulan->tampil_cashin_e($tanggal8);
        $cashin_f8 = $this->m_bulan->tampil_cashin_f($tanggal8);
        $cashin_g8 = $this->m_bulan->tampil_cashin_g($tanggal8);
        $cashin_h8 = $this->m_bulan->tampil_cashin_h($tanggal8);
        $cashin_i8 = $this->m_bulan->tampil_cashin_i($tanggal8);
        $cashin_j8 = $this->m_bulan->tampil_cashin_j($tanggal8);
        $cashin_k8 = $this->m_bulan->tampil_cashin_k($tanggal8);
        $cashin_l8 = $this->m_bulan->tampil_cashin_l($tanggal8);
        $cashin_m8 = $this->m_bulan->tampil_cashin_m($tanggal8);
        $cashin_n8 = $this->m_bulan->tampil_cashin_n($tanggal8);
        $cashin_o8 = $this->m_bulan->tampil_cashin_o($tanggal8);
        $cashin_p8 = $this->m_bulan->tampil_cashin_p($tanggal8);
        $cashin_q8 = $this->m_bulan->tampil_cashin_q($tanggal8);
        $cashin_r8 = $this->m_bulan->tampil_cashin_r($tanggal8);
        $cashin_s8 = $this->m_bulan->tampil_cashin_s($tanggal8);
        $tCashinProj_8 = $this->m_bulan->totalCashinProj($tanggal8);
        $tCashinReal_8 = $this->m_bulan->totalCashinReal($tanggal8);

        // ....................................................................................

        // Saldo Awal Hari-9
        $salaw_9 = $this->m_bulan->saldo_awal($tanggal9);

        // Allocated Cash Hari-9
        $allo_9 = $this->m_bulan->allocated_cash($tanggal9);

        // Ready Cash Hari-9
        $read_9 = $this->m_bulan->ready_cash($tanggal9);

        // Kas Besar Cabang Hari-9
        $kbc_9 = $this->m_bulan->kbc($tanggal9);

        // Note Hari-9
        $note_9 = $this->m_bulan->note($tanggal9);

        // Status Closing Hari-9
        $closing_9 = $this->m_bulan->status_closing($tanggal9);

        // Deposito (Hari-9)
        $deposito_9 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal9)));

        // B2B (Hari-9)
        $b2b_9 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal9)));

        // CASH-IN Hari Ke-9
        $cashin_a9 = $this->m_bulan->tampil_cashin_a($tanggal9);
        $cashin_b9 = $this->m_bulan->tampil_cashin_b($tanggal9);
        $cashin_c9 = $this->m_bulan->tampil_cashin_c($tanggal9);
        $cashin_d9 = $this->m_bulan->tampil_cashin_d($tanggal9);
        $cashin_e9 = $this->m_bulan->tampil_cashin_e($tanggal9);
        $cashin_f9 = $this->m_bulan->tampil_cashin_f($tanggal9);
        $cashin_g9 = $this->m_bulan->tampil_cashin_g($tanggal9);
        $cashin_h9 = $this->m_bulan->tampil_cashin_h($tanggal9);
        $cashin_i9 = $this->m_bulan->tampil_cashin_i($tanggal9);
        $cashin_j9 = $this->m_bulan->tampil_cashin_j($tanggal9);
        $cashin_k9 = $this->m_bulan->tampil_cashin_k($tanggal9);
        $cashin_l9 = $this->m_bulan->tampil_cashin_l($tanggal9);
        $cashin_m9 = $this->m_bulan->tampil_cashin_m($tanggal9);
        $cashin_n9 = $this->m_bulan->tampil_cashin_n($tanggal9);
        $cashin_o9 = $this->m_bulan->tampil_cashin_o($tanggal9);
        $cashin_p9 = $this->m_bulan->tampil_cashin_p($tanggal9);
        $cashin_q9 = $this->m_bulan->tampil_cashin_q($tanggal9);
        $cashin_r9 = $this->m_bulan->tampil_cashin_r($tanggal9);
        $cashin_s9 = $this->m_bulan->tampil_cashin_s($tanggal9);
        $tCashinProj_9 = $this->m_bulan->totalCashinProj($tanggal9);
        $tCashinReal_9 = $this->m_bulan->totalCashinReal($tanggal9);

        // ....................................................................................

        // Saldo Awal Hari-10
        $salaw_10 = $this->m_bulan->saldo_awal($tanggal10);

        // Allocated Cash Hari-10
        $allo_10 = $this->m_bulan->allocated_cash($tanggal10);

        // Ready Cash Hari-10
        $read_10 = $this->m_bulan->ready_cash($tanggal10);

        // Kas Besar Cabang Hari-10
        $kbc_10 = $this->m_bulan->kbc($tanggal10);

        // Note Hari-10
        $note_10 = $this->m_bulan->note($tanggal10);

        // Status Closing Hari-10
        $closing_10 = $this->m_bulan->status_closing($tanggal10);

        // Deposito (Hari-10)
        $deposito_10 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal10)));

        // B2B (Hari-10)
        $b2b_10 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal10)));

        // CASH-IN Hari Ke-10
        $cashin_a10 = $this->m_bulan->tampil_cashin_a($tanggal10);
        $cashin_b10 = $this->m_bulan->tampil_cashin_b($tanggal10);
        $cashin_c10 = $this->m_bulan->tampil_cashin_c($tanggal10);
        $cashin_d10 = $this->m_bulan->tampil_cashin_d($tanggal10);
        $cashin_e10 = $this->m_bulan->tampil_cashin_e($tanggal10);
        $cashin_f10 = $this->m_bulan->tampil_cashin_f($tanggal10);
        $cashin_g10 = $this->m_bulan->tampil_cashin_g($tanggal10);
        $cashin_h10 = $this->m_bulan->tampil_cashin_h($tanggal10);
        $cashin_i10 = $this->m_bulan->tampil_cashin_i($tanggal10);
        $cashin_j10 = $this->m_bulan->tampil_cashin_j($tanggal10);
        $cashin_k10 = $this->m_bulan->tampil_cashin_k($tanggal10);
        $cashin_l10 = $this->m_bulan->tampil_cashin_l($tanggal10);
        $cashin_m10 = $this->m_bulan->tampil_cashin_m($tanggal10);
        $cashin_n10 = $this->m_bulan->tampil_cashin_n($tanggal10);
        $cashin_o10 = $this->m_bulan->tampil_cashin_o($tanggal10);
        $cashin_p10 = $this->m_bulan->tampil_cashin_p($tanggal10);
        $cashin_q10 = $this->m_bulan->tampil_cashin_q($tanggal10);
        $cashin_r10 = $this->m_bulan->tampil_cashin_r($tanggal10);
        $cashin_s10 = $this->m_bulan->tampil_cashin_s($tanggal10);
        $tCashinProj_10 = $this->m_bulan->totalCashinProj($tanggal10);
        $tCashinReal_10 = $this->m_bulan->totalCashinReal($tanggal10);

        // ....................................................................................

        // Saldo Awal Hari-11
        $salaw_11 = $this->m_bulan->saldo_awal($tanggal11);

        // Allocated Cash Hari-11
        $allo_11 = $this->m_bulan->allocated_cash($tanggal11);

        // Ready Cash Hari-11
        $read_11 = $this->m_bulan->ready_cash($tanggal11);

        // Kas Besar Cabang Hari-11
        $kbc_11 = $this->m_bulan->kbc($tanggal11);

        // Note Hari-11
        $note_11 = $this->m_bulan->note($tanggal11);

        // Status Closing Hari-11
        $closing_11 = $this->m_bulan->status_closing($tanggal11);

        // Deposito (Hari-11)
        $deposito_11 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal11)));

        // B2B (Hari-11)
        $b2b_11 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal11)));

        // CASH-IN Hari Ke-11
        $cashin_a11 = $this->m_bulan->tampil_cashin_a($tanggal11);
        $cashin_b11 = $this->m_bulan->tampil_cashin_b($tanggal11);
        $cashin_c11 = $this->m_bulan->tampil_cashin_c($tanggal11);
        $cashin_d11 = $this->m_bulan->tampil_cashin_d($tanggal11);
        $cashin_e11 = $this->m_bulan->tampil_cashin_e($tanggal11);
        $cashin_f11 = $this->m_bulan->tampil_cashin_f($tanggal11);
        $cashin_g11 = $this->m_bulan->tampil_cashin_g($tanggal11);
        $cashin_h11 = $this->m_bulan->tampil_cashin_h($tanggal11);
        $cashin_i11 = $this->m_bulan->tampil_cashin_i($tanggal11);
        $cashin_j11 = $this->m_bulan->tampil_cashin_j($tanggal11);
        $cashin_k11 = $this->m_bulan->tampil_cashin_k($tanggal11);
        $cashin_l11 = $this->m_bulan->tampil_cashin_l($tanggal11);
        $cashin_m11 = $this->m_bulan->tampil_cashin_m($tanggal11);
        $cashin_n11 = $this->m_bulan->tampil_cashin_n($tanggal11);
        $cashin_o11 = $this->m_bulan->tampil_cashin_o($tanggal11);
        $cashin_p11 = $this->m_bulan->tampil_cashin_p($tanggal11);
        $cashin_q11 = $this->m_bulan->tampil_cashin_q($tanggal11);
        $cashin_r11 = $this->m_bulan->tampil_cashin_r($tanggal11);
        $cashin_s11 = $this->m_bulan->tampil_cashin_s($tanggal11);
        $tCashinProj_11 = $this->m_bulan->totalCashinProj($tanggal11);
        $tCashinReal_11 = $this->m_bulan->totalCashinReal($tanggal11);

        // ....................................................................................

        // Saldo Awal Hari-12
        $salaw_12 = $this->m_bulan->saldo_awal($tanggal12);

        // Allocated Cash Hari-12
        $allo_12 = $this->m_bulan->allocated_cash($tanggal12);

        // Ready Cash Hari-12
        $read_12 = $this->m_bulan->ready_cash($tanggal12);

        // Kas Besar Cabang Hari-12
        $kbc_12 = $this->m_bulan->kbc($tanggal12);

        // Note Hari-12
        $note_12 = $this->m_bulan->note($tanggal12);

        // Status Closing Hari-12
        $closing_12 = $this->m_bulan->status_closing($tanggal12);

        // Deposito (Hari-12)
        $deposito_12 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal12)));

        // B2B (Hari-12)
        $b2b_12 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal12)));

        // CASH-IN Hari Ke-12
        $cashin_a12 = $this->m_bulan->tampil_cashin_a($tanggal12);
        $cashin_b12 = $this->m_bulan->tampil_cashin_b($tanggal12);
        $cashin_c12 = $this->m_bulan->tampil_cashin_c($tanggal12);
        $cashin_d12 = $this->m_bulan->tampil_cashin_d($tanggal12);
        $cashin_e12 = $this->m_bulan->tampil_cashin_e($tanggal12);
        $cashin_f12 = $this->m_bulan->tampil_cashin_f($tanggal12);
        $cashin_g12 = $this->m_bulan->tampil_cashin_g($tanggal12);
        $cashin_h12 = $this->m_bulan->tampil_cashin_h($tanggal12);
        $cashin_i12 = $this->m_bulan->tampil_cashin_i($tanggal12);
        $cashin_j12 = $this->m_bulan->tampil_cashin_j($tanggal12);
        $cashin_k12 = $this->m_bulan->tampil_cashin_k($tanggal12);
        $cashin_l12 = $this->m_bulan->tampil_cashin_l($tanggal12);
        $cashin_m12 = $this->m_bulan->tampil_cashin_m($tanggal12);
        $cashin_n12 = $this->m_bulan->tampil_cashin_n($tanggal12);
        $cashin_o12 = $this->m_bulan->tampil_cashin_o($tanggal12);
        $cashin_p12 = $this->m_bulan->tampil_cashin_p($tanggal12);
        $cashin_q12 = $this->m_bulan->tampil_cashin_q($tanggal12);
        $cashin_r12 = $this->m_bulan->tampil_cashin_r($tanggal12);
        $cashin_s12 = $this->m_bulan->tampil_cashin_s($tanggal12);
        $tCashinProj_12 = $this->m_bulan->totalCashinProj($tanggal12);
        $tCashinReal_12 = $this->m_bulan->totalCashinReal($tanggal12);

        // ....................................................................................

        // Saldo Awal Hari-13
        $salaw_13 = $this->m_bulan->saldo_awal($tanggal13);

        // Allocated Cash Hari-13
        $allo_13 = $this->m_bulan->allocated_cash($tanggal13);

        // Ready Cash Hari-13
        $read_13 = $this->m_bulan->ready_cash($tanggal13);

        // Kas Besar Cabang Hari-13
        $kbc_13 = $this->m_bulan->kbc($tanggal13);

        // Note Hari-13
        $note_13 = $this->m_bulan->note($tanggal13);

        // Status Closing Hari-13
        $closing_13 = $this->m_bulan->status_closing($tanggal13);

        // Deposito (Hari-13)
        $deposito_13 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal13)));

        // B2B (Hari-13)
        $b2b_13 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal13)));

        // CASH-IN Hari Ke-13
        $cashin_a13 = $this->m_bulan->tampil_cashin_a($tanggal13);
        $cashin_b13 = $this->m_bulan->tampil_cashin_b($tanggal13);
        $cashin_c13 = $this->m_bulan->tampil_cashin_c($tanggal13);
        $cashin_d13 = $this->m_bulan->tampil_cashin_d($tanggal13);
        $cashin_e13 = $this->m_bulan->tampil_cashin_e($tanggal13);
        $cashin_f13 = $this->m_bulan->tampil_cashin_f($tanggal13);
        $cashin_g13 = $this->m_bulan->tampil_cashin_g($tanggal13);
        $cashin_h13 = $this->m_bulan->tampil_cashin_h($tanggal13);
        $cashin_i13 = $this->m_bulan->tampil_cashin_i($tanggal13);
        $cashin_j13 = $this->m_bulan->tampil_cashin_j($tanggal13);
        $cashin_k13 = $this->m_bulan->tampil_cashin_k($tanggal13);
        $cashin_l13 = $this->m_bulan->tampil_cashin_l($tanggal13);
        $cashin_m13 = $this->m_bulan->tampil_cashin_m($tanggal13);
        $cashin_n13 = $this->m_bulan->tampil_cashin_n($tanggal13);
        $cashin_o13 = $this->m_bulan->tampil_cashin_o($tanggal13);
        $cashin_p13 = $this->m_bulan->tampil_cashin_p($tanggal13);
        $cashin_q13 = $this->m_bulan->tampil_cashin_q($tanggal13);
        $cashin_r13 = $this->m_bulan->tampil_cashin_r($tanggal13);
        $cashin_s13 = $this->m_bulan->tampil_cashin_s($tanggal13);
        $tCashinProj_13 = $this->m_bulan->totalCashinProj($tanggal13);
        $tCashinReal_13 = $this->m_bulan->totalCashinReal($tanggal13);

        // ....................................................................................

        // Saldo Awal Hari-14
        $salaw_14 = $this->m_bulan->saldo_awal($tanggal14);

        // Allocated Cash Hari-14
        $allo_14 = $this->m_bulan->allocated_cash($tanggal14);

        // Ready Cash Hari-14
        $read_14 = $this->m_bulan->ready_cash($tanggal14);

        // Kas Besar Cabang Hari-14
        $kbc_14 = $this->m_bulan->kbc($tanggal14);

        // Note Hari-14
        $note_14 = $this->m_bulan->note($tanggal14);

        // Status Closing Hari-14
        $closing_14 = $this->m_bulan->status_closing($tanggal14);

        // Deposito (Hari-14)
        $deposito_14 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal14)));

        // B2B (Hari-14)
        $b2b_14 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal14)));

        // CASH-IN Hari Ke-14
        $cashin_a14 = $this->m_bulan->tampil_cashin_a($tanggal14);
        $cashin_b14 = $this->m_bulan->tampil_cashin_b($tanggal14);
        $cashin_c14 = $this->m_bulan->tampil_cashin_c($tanggal14);
        $cashin_d14 = $this->m_bulan->tampil_cashin_d($tanggal14);
        $cashin_e14 = $this->m_bulan->tampil_cashin_e($tanggal14);
        $cashin_f14 = $this->m_bulan->tampil_cashin_f($tanggal14);
        $cashin_g14 = $this->m_bulan->tampil_cashin_g($tanggal14);
        $cashin_h14 = $this->m_bulan->tampil_cashin_h($tanggal14);
        $cashin_i14 = $this->m_bulan->tampil_cashin_i($tanggal14);
        $cashin_j14 = $this->m_bulan->tampil_cashin_j($tanggal14);
        $cashin_k14 = $this->m_bulan->tampil_cashin_k($tanggal14);
        $cashin_l14 = $this->m_bulan->tampil_cashin_l($tanggal14);
        $cashin_m14 = $this->m_bulan->tampil_cashin_m($tanggal14);
        $cashin_n14 = $this->m_bulan->tampil_cashin_n($tanggal14);
        $cashin_o14 = $this->m_bulan->tampil_cashin_o($tanggal14);
        $cashin_p14 = $this->m_bulan->tampil_cashin_p($tanggal14);
        $cashin_q14 = $this->m_bulan->tampil_cashin_q($tanggal14);
        $cashin_r14 = $this->m_bulan->tampil_cashin_r($tanggal14);
        $cashin_s14 = $this->m_bulan->tampil_cashin_s($tanggal14);
        $tCashinProj_14 = $this->m_bulan->totalCashinProj($tanggal14);
        $tCashinReal_14 = $this->m_bulan->totalCashinReal($tanggal14);

        // ....................................................................................

        // Saldo Awal Hari-15
        $salaw_15 = $this->m_bulan->saldo_awal($tanggal15);

        // Allocated Cash Hari-15
        $allo_15 = $this->m_bulan->allocated_cash($tanggal15);

        // Ready Cash Hari-15
        $read_15 = $this->m_bulan->ready_cash($tanggal15);

        // Kas Besar Cabang Hari-15
        $kbc_15 = $this->m_bulan->kbc($tanggal15);

        // Note Hari-15
        $note_15 = $this->m_bulan->note($tanggal15);

        // Status Closing Hari-15
        $closing_15 = $this->m_bulan->status_closing($tanggal15);

        // Deposito (Hari-15)
        $deposito_15 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal15)));

        // B2B (Hari-15)
        $b2b_15 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal15)));

        // CASH-IN Hari Ke-15
        $cashin_a15 = $this->m_bulan->tampil_cashin_a($tanggal15);
        $cashin_b15 = $this->m_bulan->tampil_cashin_b($tanggal15);
        $cashin_c15 = $this->m_bulan->tampil_cashin_c($tanggal15);
        $cashin_d15 = $this->m_bulan->tampil_cashin_d($tanggal15);
        $cashin_e15 = $this->m_bulan->tampil_cashin_e($tanggal15);
        $cashin_f15 = $this->m_bulan->tampil_cashin_f($tanggal15);
        $cashin_g15 = $this->m_bulan->tampil_cashin_g($tanggal15);
        $cashin_h15 = $this->m_bulan->tampil_cashin_h($tanggal15);
        $cashin_i15 = $this->m_bulan->tampil_cashin_i($tanggal15);
        $cashin_j15 = $this->m_bulan->tampil_cashin_j($tanggal15);
        $cashin_k15 = $this->m_bulan->tampil_cashin_k($tanggal15);
        $cashin_l15 = $this->m_bulan->tampil_cashin_l($tanggal15);
        $cashin_m15 = $this->m_bulan->tampil_cashin_m($tanggal15);
        $cashin_n15 = $this->m_bulan->tampil_cashin_n($tanggal15);
        $cashin_o15 = $this->m_bulan->tampil_cashin_o($tanggal15);
        $cashin_p15 = $this->m_bulan->tampil_cashin_p($tanggal15);
        $cashin_q15 = $this->m_bulan->tampil_cashin_q($tanggal15);
        $cashin_r15 = $this->m_bulan->tampil_cashin_r($tanggal15);
        $cashin_s15 = $this->m_bulan->tampil_cashin_s($tanggal15);
        $tCashinProj_15 = $this->m_bulan->totalCashinProj($tanggal15);
        $tCashinReal_15 = $this->m_bulan->totalCashinReal($tanggal15);

        // ....................................................................................

        // Saldo Awal Hari-16
        $salaw_16 = $this->m_bulan->saldo_awal($tanggal16);

        // Allocated Cash Hari-16
        $allo_16 = $this->m_bulan->allocated_cash($tanggal16);

        // Ready Cash Hari-16
        $read_16 = $this->m_bulan->ready_cash($tanggal16);

        // Kas Besar Cabang Hari-16
        $kbc_16 = $this->m_bulan->kbc($tanggal16);

        // Note Hari-16
        $note_16 = $this->m_bulan->note($tanggal16);

        // Status Closing Hari-16
        $closing_16 = $this->m_bulan->status_closing($tanggal16);

        // Deposito (Hari-16)
        $deposito_16 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal16)));

        // B2B (Hari-16)
        $b2b_16 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal16)));

        // CASH-IN Hari Ke-16
        $cashin_a16 = $this->m_bulan->tampil_cashin_a($tanggal16);
        $cashin_b16 = $this->m_bulan->tampil_cashin_b($tanggal16);
        $cashin_c16 = $this->m_bulan->tampil_cashin_c($tanggal16);
        $cashin_d16 = $this->m_bulan->tampil_cashin_d($tanggal16);
        $cashin_e16 = $this->m_bulan->tampil_cashin_e($tanggal16);
        $cashin_f16 = $this->m_bulan->tampil_cashin_f($tanggal16);
        $cashin_g16 = $this->m_bulan->tampil_cashin_g($tanggal16);
        $cashin_h16 = $this->m_bulan->tampil_cashin_h($tanggal16);
        $cashin_i16 = $this->m_bulan->tampil_cashin_i($tanggal16);
        $cashin_j16 = $this->m_bulan->tampil_cashin_j($tanggal16);
        $cashin_k16 = $this->m_bulan->tampil_cashin_k($tanggal16);
        $cashin_l16 = $this->m_bulan->tampil_cashin_l($tanggal16);
        $cashin_m16 = $this->m_bulan->tampil_cashin_m($tanggal16);
        $cashin_n16 = $this->m_bulan->tampil_cashin_n($tanggal16);
        $cashin_o16 = $this->m_bulan->tampil_cashin_o($tanggal16);
        $cashin_p16 = $this->m_bulan->tampil_cashin_p($tanggal16);
        $cashin_q16 = $this->m_bulan->tampil_cashin_q($tanggal16);
        $cashin_r16 = $this->m_bulan->tampil_cashin_r($tanggal16);
        $cashin_s16 = $this->m_bulan->tampil_cashin_s($tanggal16);
        $tCashinProj_16 = $this->m_bulan->totalCashinProj($tanggal16);
        $tCashinReal_16 = $this->m_bulan->totalCashinReal($tanggal16);

        // ....................................................................................

        // Saldo Awal Hari-17
        $salaw_17 = $this->m_bulan->saldo_awal($tanggal17);

        // Allocated Cash Hari-17
        $allo_17 = $this->m_bulan->allocated_cash($tanggal17);

        // Ready Cash Hari-17
        $read_17 = $this->m_bulan->ready_cash($tanggal17);

        // Kas Besar Cabang Hari-17
        $kbc_17 = $this->m_bulan->kbc($tanggal17);

        // Note Hari-17
        $note_17 = $this->m_bulan->note($tanggal17);

        // Status Closing Hari-17
        $closing_17 = $this->m_bulan->status_closing($tanggal17);

        // Deposito (Hari-17)
        $deposito_17 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal17)));

        // B2B (Hari-17)
        $b2b_17 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal17)));

        // CASH-IN Hari Ke-17
        $cashin_a17 = $this->m_bulan->tampil_cashin_a($tanggal17);
        $cashin_b17 = $this->m_bulan->tampil_cashin_b($tanggal17);
        $cashin_c17 = $this->m_bulan->tampil_cashin_c($tanggal17);
        $cashin_d17 = $this->m_bulan->tampil_cashin_d($tanggal17);
        $cashin_e17 = $this->m_bulan->tampil_cashin_e($tanggal17);
        $cashin_f17 = $this->m_bulan->tampil_cashin_f($tanggal17);
        $cashin_g17 = $this->m_bulan->tampil_cashin_g($tanggal17);
        $cashin_h17 = $this->m_bulan->tampil_cashin_h($tanggal17);
        $cashin_i17 = $this->m_bulan->tampil_cashin_i($tanggal17);
        $cashin_j17 = $this->m_bulan->tampil_cashin_j($tanggal17);
        $cashin_k17 = $this->m_bulan->tampil_cashin_k($tanggal17);
        $cashin_l17 = $this->m_bulan->tampil_cashin_l($tanggal17);
        $cashin_m17 = $this->m_bulan->tampil_cashin_m($tanggal17);
        $cashin_n17 = $this->m_bulan->tampil_cashin_n($tanggal17);
        $cashin_o17 = $this->m_bulan->tampil_cashin_o($tanggal17);
        $cashin_p17 = $this->m_bulan->tampil_cashin_p($tanggal17);
        $cashin_q17 = $this->m_bulan->tampil_cashin_q($tanggal17);
        $cashin_r17 = $this->m_bulan->tampil_cashin_r($tanggal17);
        $cashin_s17 = $this->m_bulan->tampil_cashin_s($tanggal17);
        $tCashinProj_17 = $this->m_bulan->totalCashinProj($tanggal17);
        $tCashinReal_17 = $this->m_bulan->totalCashinReal($tanggal17);

        // ....................................................................................

        // Saldo Awal Hari-18
        $salaw_18 = $this->m_bulan->saldo_awal($tanggal18);

        // Allocated Cash Hari-18
        $allo_18 = $this->m_bulan->allocated_cash($tanggal18);

        // Ready Cash Hari-18
        $read_18 = $this->m_bulan->ready_cash($tanggal18);

        // Kas Besar Cabang Hari-18
        $kbc_18 = $this->m_bulan->kbc($tanggal18);

        // Note Hari-18
        $note_18 = $this->m_bulan->note($tanggal18);

        // Status Closing Hari-18
        $closing_18 = $this->m_bulan->status_closing($tanggal18);

        // Deposito (Hari-18)
        $deposito_18 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal18)));

        // B2B (Hari-18)
        $b2b_18 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal18)));

        // CASH-IN Hari Ke-18
        $cashin_a18 = $this->m_bulan->tampil_cashin_a($tanggal18);
        $cashin_b18 = $this->m_bulan->tampil_cashin_b($tanggal18);
        $cashin_c18 = $this->m_bulan->tampil_cashin_c($tanggal18);
        $cashin_d18 = $this->m_bulan->tampil_cashin_d($tanggal18);
        $cashin_e18 = $this->m_bulan->tampil_cashin_e($tanggal18);
        $cashin_f18 = $this->m_bulan->tampil_cashin_f($tanggal18);
        $cashin_g18 = $this->m_bulan->tampil_cashin_g($tanggal18);
        $cashin_h18 = $this->m_bulan->tampil_cashin_h($tanggal18);
        $cashin_i18 = $this->m_bulan->tampil_cashin_i($tanggal18);
        $cashin_j18 = $this->m_bulan->tampil_cashin_j($tanggal18);
        $cashin_k18 = $this->m_bulan->tampil_cashin_k($tanggal18);
        $cashin_l18 = $this->m_bulan->tampil_cashin_l($tanggal18);
        $cashin_m18 = $this->m_bulan->tampil_cashin_m($tanggal18);
        $cashin_n18 = $this->m_bulan->tampil_cashin_n($tanggal18);
        $cashin_o18 = $this->m_bulan->tampil_cashin_o($tanggal18);
        $cashin_p18 = $this->m_bulan->tampil_cashin_p($tanggal18);
        $cashin_q18 = $this->m_bulan->tampil_cashin_q($tanggal18);
        $cashin_r18 = $this->m_bulan->tampil_cashin_r($tanggal18);
        $cashin_s18 = $this->m_bulan->tampil_cashin_s($tanggal18);
        $tCashinProj_18 = $this->m_bulan->totalCashinProj($tanggal18);
        $tCashinReal_18 = $this->m_bulan->totalCashinReal($tanggal18);

        // ....................................................................................

        // Saldo Awal Hari-19
        $salaw_19 = $this->m_bulan->saldo_awal($tanggal19);

        // Allocated Cash Hari-19
        $allo_19 = $this->m_bulan->allocated_cash($tanggal19);

        // Ready Cash Hari-19
        $read_19 = $this->m_bulan->ready_cash($tanggal19);

        // Kas Besar Cabang Hari-19
        $kbc_19 = $this->m_bulan->kbc($tanggal19);

        // Note Hari-19
        $note_19 = $this->m_bulan->note($tanggal19);

        // Status Closing Hari-19
        $closing_19 = $this->m_bulan->status_closing($tanggal19);

        // Deposito (Hari-19)
        $deposito_19 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal19)));

        // B2B (Hari-19)
        $b2b_19 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal19)));

        // CASH-IN Hari Ke-19
        $cashin_a19 = $this->m_bulan->tampil_cashin_a($tanggal19);
        $cashin_b19 = $this->m_bulan->tampil_cashin_b($tanggal19);
        $cashin_c19 = $this->m_bulan->tampil_cashin_c($tanggal19);
        $cashin_d19 = $this->m_bulan->tampil_cashin_d($tanggal19);
        $cashin_e19 = $this->m_bulan->tampil_cashin_e($tanggal19);
        $cashin_f19 = $this->m_bulan->tampil_cashin_f($tanggal19);
        $cashin_g19 = $this->m_bulan->tampil_cashin_g($tanggal19);
        $cashin_h19 = $this->m_bulan->tampil_cashin_h($tanggal19);
        $cashin_i19 = $this->m_bulan->tampil_cashin_i($tanggal19);
        $cashin_j19 = $this->m_bulan->tampil_cashin_j($tanggal19);
        $cashin_k19 = $this->m_bulan->tampil_cashin_k($tanggal19);
        $cashin_l19 = $this->m_bulan->tampil_cashin_l($tanggal19);
        $cashin_m19 = $this->m_bulan->tampil_cashin_m($tanggal19);
        $cashin_n19 = $this->m_bulan->tampil_cashin_n($tanggal19);
        $cashin_o19 = $this->m_bulan->tampil_cashin_o($tanggal19);
        $cashin_p19 = $this->m_bulan->tampil_cashin_p($tanggal19);
        $cashin_q19 = $this->m_bulan->tampil_cashin_q($tanggal19);
        $cashin_r19 = $this->m_bulan->tampil_cashin_r($tanggal19);
        $cashin_s19 = $this->m_bulan->tampil_cashin_s($tanggal19);
        $tCashinProj_19 = $this->m_bulan->totalCashinProj($tanggal19);
        $tCashinReal_19 = $this->m_bulan->totalCashinReal($tanggal19);

        // ....................................................................................

        // Saldo Awal Hari-20
        $salaw_20 = $this->m_bulan->saldo_awal($tanggal20);

        // Allocated Cash Hari-20
        $allo_20 = $this->m_bulan->allocated_cash($tanggal20);

        // Ready Cash Hari-20
        $read_20 = $this->m_bulan->ready_cash($tanggal20);

        // Kas Besar Cabang Hari-20
        $kbc_20 = $this->m_bulan->kbc($tanggal20);

        // Note Hari-20
        $note_20 = $this->m_bulan->note($tanggal20);

        // Status Closing Hari-20
        $closing_20 = $this->m_bulan->status_closing($tanggal20);

        // Deposito (Hari-20)
        $deposito_20 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal20)));

        // B2B (Hari-20)
        $b2b_20 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal20)));

        // CASH-IN Hari Ke-20
        $cashin_a20 = $this->m_bulan->tampil_cashin_a($tanggal20);
        $cashin_b20 = $this->m_bulan->tampil_cashin_b($tanggal20);
        $cashin_c20 = $this->m_bulan->tampil_cashin_c($tanggal20);
        $cashin_d20 = $this->m_bulan->tampil_cashin_d($tanggal20);
        $cashin_e20 = $this->m_bulan->tampil_cashin_e($tanggal20);
        $cashin_f20 = $this->m_bulan->tampil_cashin_f($tanggal20);
        $cashin_g20 = $this->m_bulan->tampil_cashin_g($tanggal20);
        $cashin_h20 = $this->m_bulan->tampil_cashin_h($tanggal20);
        $cashin_i20 = $this->m_bulan->tampil_cashin_i($tanggal20);
        $cashin_j20 = $this->m_bulan->tampil_cashin_j($tanggal20);
        $cashin_k20 = $this->m_bulan->tampil_cashin_k($tanggal20);
        $cashin_l20 = $this->m_bulan->tampil_cashin_l($tanggal20);
        $cashin_m20 = $this->m_bulan->tampil_cashin_m($tanggal20);
        $cashin_n20 = $this->m_bulan->tampil_cashin_n($tanggal20);
        $cashin_o20 = $this->m_bulan->tampil_cashin_o($tanggal20);
        $cashin_p20 = $this->m_bulan->tampil_cashin_p($tanggal20);
        $cashin_q20 = $this->m_bulan->tampil_cashin_q($tanggal20);
        $cashin_r20 = $this->m_bulan->tampil_cashin_r($tanggal20);
        $cashin_s20 = $this->m_bulan->tampil_cashin_s($tanggal20);
        $tCashinProj_20 = $this->m_bulan->totalCashinProj($tanggal20);
        $tCashinReal_20 = $this->m_bulan->totalCashinReal($tanggal20);

        // ....................................................................................

        // Saldo Awal Hari-21
        $salaw_21 = $this->m_bulan->saldo_awal($tanggal21);

        // Allocated Cash Hari-21
        $allo_21 = $this->m_bulan->allocated_cash($tanggal21);

        // Ready Cash Hari-21
        $read_21 = $this->m_bulan->ready_cash($tanggal21);

        // Kas Besar Cabang Hari-21
        $kbc_21 = $this->m_bulan->kbc($tanggal21);

        // Note Hari-21
        $note_21 = $this->m_bulan->note($tanggal21);

        // Status Closing Hari-21
        $closing_21 = $this->m_bulan->status_closing($tanggal21);

        // Deposito (Hari-21)
        $deposito_21 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal21)));

        // B2B (Hari-21)
        $b2b_21 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal21)));

        // CASH-IN Hari Ke-21
        $cashin_a21 = $this->m_bulan->tampil_cashin_a($tanggal21);
        $cashin_b21 = $this->m_bulan->tampil_cashin_b($tanggal21);
        $cashin_c21 = $this->m_bulan->tampil_cashin_c($tanggal21);
        $cashin_d21 = $this->m_bulan->tampil_cashin_d($tanggal21);
        $cashin_e21 = $this->m_bulan->tampil_cashin_e($tanggal21);
        $cashin_f21 = $this->m_bulan->tampil_cashin_f($tanggal21);
        $cashin_g21 = $this->m_bulan->tampil_cashin_g($tanggal21);
        $cashin_h21 = $this->m_bulan->tampil_cashin_h($tanggal21);
        $cashin_i21 = $this->m_bulan->tampil_cashin_i($tanggal21);
        $cashin_j21 = $this->m_bulan->tampil_cashin_j($tanggal21);
        $cashin_k21 = $this->m_bulan->tampil_cashin_k($tanggal21);
        $cashin_l21 = $this->m_bulan->tampil_cashin_l($tanggal21);
        $cashin_m21 = $this->m_bulan->tampil_cashin_m($tanggal21);
        $cashin_n21 = $this->m_bulan->tampil_cashin_n($tanggal21);
        $cashin_o21 = $this->m_bulan->tampil_cashin_o($tanggal21);
        $cashin_p21 = $this->m_bulan->tampil_cashin_p($tanggal21);
        $cashin_q21 = $this->m_bulan->tampil_cashin_q($tanggal21);
        $cashin_r21 = $this->m_bulan->tampil_cashin_r($tanggal21);
        $cashin_s21 = $this->m_bulan->tampil_cashin_s($tanggal21);
        $tCashinProj_21 = $this->m_bulan->totalCashinProj($tanggal21);
        $tCashinReal_21 = $this->m_bulan->totalCashinReal($tanggal21);

        // ....................................................................................

        // Saldo Awal Hari-22
        $salaw_22 = $this->m_bulan->saldo_awal($tanggal22);

        // Allocated Cash Hari-22
        $allo_22 = $this->m_bulan->allocated_cash($tanggal22);

        // Ready Cash Hari-22
        $read_22 = $this->m_bulan->ready_cash($tanggal22);

        // Kas Besar Cabang Hari-22
        $kbc_22 = $this->m_bulan->kbc($tanggal22);

        // Note Hari-22
        $note_22 = $this->m_bulan->note($tanggal22);

        // Status Closing Hari-22
        $closing_22 = $this->m_bulan->status_closing($tanggal22);

        // Deposito (Hari-22)
        $deposito_22 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal22)));

        // B2B (Hari-22)
        $b2b_22 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal22)));

        // CASH-IN Hari Ke-22
        $cashin_a22 = $this->m_bulan->tampil_cashin_a($tanggal22);
        $cashin_b22 = $this->m_bulan->tampil_cashin_b($tanggal22);
        $cashin_c22 = $this->m_bulan->tampil_cashin_c($tanggal22);
        $cashin_d22 = $this->m_bulan->tampil_cashin_d($tanggal22);
        $cashin_e22 = $this->m_bulan->tampil_cashin_e($tanggal22);
        $cashin_f22 = $this->m_bulan->tampil_cashin_f($tanggal22);
        $cashin_g22 = $this->m_bulan->tampil_cashin_g($tanggal22);
        $cashin_h22 = $this->m_bulan->tampil_cashin_h($tanggal22);
        $cashin_i22 = $this->m_bulan->tampil_cashin_i($tanggal22);
        $cashin_j22 = $this->m_bulan->tampil_cashin_j($tanggal22);
        $cashin_k22 = $this->m_bulan->tampil_cashin_k($tanggal22);
        $cashin_l22 = $this->m_bulan->tampil_cashin_l($tanggal22);
        $cashin_m22 = $this->m_bulan->tampil_cashin_m($tanggal22);
        $cashin_n22 = $this->m_bulan->tampil_cashin_n($tanggal22);
        $cashin_o22 = $this->m_bulan->tampil_cashin_o($tanggal22);
        $cashin_p22 = $this->m_bulan->tampil_cashin_p($tanggal22);
        $cashin_q22 = $this->m_bulan->tampil_cashin_q($tanggal22);
        $cashin_r22 = $this->m_bulan->tampil_cashin_r($tanggal22);
        $cashin_s22 = $this->m_bulan->tampil_cashin_s($tanggal22);
        $tCashinProj_22 = $this->m_bulan->totalCashinProj($tanggal22);
        $tCashinReal_22 = $this->m_bulan->totalCashinReal($tanggal22);

        // ....................................................................................

        // Saldo Awal Hari-23
        $salaw_23 = $this->m_bulan->saldo_awal($tanggal23);

        // Allocated Cash Hari-23
        $allo_23 = $this->m_bulan->allocated_cash($tanggal23);

        // Ready Cash Hari-23
        $read_23 = $this->m_bulan->ready_cash($tanggal23);

        // Kas Besar Cabang Hari-23
        $kbc_23 = $this->m_bulan->kbc($tanggal23);

        // Note Hari-23
        $note_23 = $this->m_bulan->note($tanggal23);

        // Status Closing Hari-23
        $closing_23 = $this->m_bulan->status_closing($tanggal23);

        // Deposito (Hari-23)
        $deposito_23 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal23)));

        // B2B (Hari-23)
        $b2b_23 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal23)));

        // CASH-IN Hari Ke-23
        $cashin_a23 = $this->m_bulan->tampil_cashin_a($tanggal23);
        $cashin_b23 = $this->m_bulan->tampil_cashin_b($tanggal23);
        $cashin_c23 = $this->m_bulan->tampil_cashin_c($tanggal23);
        $cashin_d23 = $this->m_bulan->tampil_cashin_d($tanggal23);
        $cashin_e23 = $this->m_bulan->tampil_cashin_e($tanggal23);
        $cashin_f23 = $this->m_bulan->tampil_cashin_f($tanggal23);
        $cashin_g23 = $this->m_bulan->tampil_cashin_g($tanggal23);
        $cashin_h23 = $this->m_bulan->tampil_cashin_h($tanggal23);
        $cashin_i23 = $this->m_bulan->tampil_cashin_i($tanggal23);
        $cashin_j23 = $this->m_bulan->tampil_cashin_j($tanggal23);
        $cashin_k23 = $this->m_bulan->tampil_cashin_k($tanggal23);
        $cashin_l23 = $this->m_bulan->tampil_cashin_l($tanggal23);
        $cashin_m23 = $this->m_bulan->tampil_cashin_m($tanggal23);
        $cashin_n23 = $this->m_bulan->tampil_cashin_n($tanggal23);
        $cashin_o23 = $this->m_bulan->tampil_cashin_o($tanggal23);
        $cashin_p23 = $this->m_bulan->tampil_cashin_p($tanggal23);
        $cashin_q23 = $this->m_bulan->tampil_cashin_q($tanggal23);
        $cashin_r23 = $this->m_bulan->tampil_cashin_r($tanggal23);
        $cashin_s23 = $this->m_bulan->tampil_cashin_s($tanggal23);
        $tCashinProj_23 = $this->m_bulan->totalCashinProj($tanggal23);
        $tCashinReal_23 = $this->m_bulan->totalCashinReal($tanggal23);

        // ....................................................................................

        // Saldo Awal Hari-24
        $salaw_24 = $this->m_bulan->saldo_awal($tanggal24);

        // Allocated Cash Hari-24
        $allo_24 = $this->m_bulan->allocated_cash($tanggal24);

        // Ready Cash Hari-24
        $read_24 = $this->m_bulan->ready_cash($tanggal24);

        // Kas Besar Cabang Hari-24
        $kbc_24 = $this->m_bulan->kbc($tanggal24);

        // Note Hari-24
        $note_24 = $this->m_bulan->note($tanggal24);

        // Status Closing Hari-24
        $closing_24 = $this->m_bulan->status_closing($tanggal24);

        // Deposito (Hari-24)
        $deposito_24 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal24)));

        // B2B (Hari-24)
        $b2b_24 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal24)));

        // CASH-IN Hari Ke-24
        $cashin_a24 = $this->m_bulan->tampil_cashin_a($tanggal24);
        $cashin_b24 = $this->m_bulan->tampil_cashin_b($tanggal24);
        $cashin_c24 = $this->m_bulan->tampil_cashin_c($tanggal24);
        $cashin_d24 = $this->m_bulan->tampil_cashin_d($tanggal24);
        $cashin_e24 = $this->m_bulan->tampil_cashin_e($tanggal24);
        $cashin_f24 = $this->m_bulan->tampil_cashin_f($tanggal24);
        $cashin_g24 = $this->m_bulan->tampil_cashin_g($tanggal24);
        $cashin_h24 = $this->m_bulan->tampil_cashin_h($tanggal24);
        $cashin_i24 = $this->m_bulan->tampil_cashin_i($tanggal24);
        $cashin_j24 = $this->m_bulan->tampil_cashin_j($tanggal24);
        $cashin_k24 = $this->m_bulan->tampil_cashin_k($tanggal24);
        $cashin_l24 = $this->m_bulan->tampil_cashin_l($tanggal24);
        $cashin_m24 = $this->m_bulan->tampil_cashin_m($tanggal24);
        $cashin_n24 = $this->m_bulan->tampil_cashin_n($tanggal24);
        $cashin_o24 = $this->m_bulan->tampil_cashin_o($tanggal24);
        $cashin_p24 = $this->m_bulan->tampil_cashin_p($tanggal24);
        $cashin_q24 = $this->m_bulan->tampil_cashin_q($tanggal24);
        $cashin_r24 = $this->m_bulan->tampil_cashin_r($tanggal24);
        $cashin_s24 = $this->m_bulan->tampil_cashin_s($tanggal24);
        $tCashinProj_24 = $this->m_bulan->totalCashinProj($tanggal24);
        $tCashinReal_24 = $this->m_bulan->totalCashinReal($tanggal24);

        // ....................................................................................

        // Saldo Awal Hari-25
        $salaw_25 = $this->m_bulan->saldo_awal($tanggal25);

        // Allocated Cash Hari-25
        $allo_25 = $this->m_bulan->allocated_cash($tanggal25);

        // Ready Cash Hari-25
        $read_25 = $this->m_bulan->ready_cash($tanggal25);

        // Kas Besar Cabang Hari-25
        $kbc_25 = $this->m_bulan->kbc($tanggal25);

        // Note Hari-25
        $note_25 = $this->m_bulan->note($tanggal25);

        // Status Closing Hari-25
        $closing_25 = $this->m_bulan->status_closing($tanggal25);

        // Deposito (Hari-25)
        $deposito_25 = $this->m_bulan->deposito(date('Y-m-d', strtotime($tanggal25)));

        // B2B (Hari-25)
        $b2b_25 = $this->m_bulan->b2b(date('Y-m-d', strtotime($tanggal25)));

        // CASH-IN Hari Ke-25
        $cashin_a25 = $this->m_bulan->tampil_cashin_a($tanggal25);
        $cashin_b25 = $this->m_bulan->tampil_cashin_b($tanggal25);
        $cashin_c25 = $this->m_bulan->tampil_cashin_c($tanggal25);
        $cashin_d25 = $this->m_bulan->tampil_cashin_d($tanggal25);
        $cashin_e25 = $this->m_bulan->tampil_cashin_e($tanggal25);
        $cashin_f25 = $this->m_bulan->tampil_cashin_f($tanggal25);
        $cashin_g25 = $this->m_bulan->tampil_cashin_g($tanggal25);
        $cashin_h25 = $this->m_bulan->tampil_cashin_h($tanggal25);
        $cashin_i25 = $this->m_bulan->tampil_cashin_i($tanggal25);
        $cashin_j25 = $this->m_bulan->tampil_cashin_j($tanggal25);
        $cashin_k25 = $this->m_bulan->tampil_cashin_k($tanggal25);
        $cashin_l25 = $this->m_bulan->tampil_cashin_l($tanggal25);
        $cashin_m25 = $this->m_bulan->tampil_cashin_m($tanggal25);
        $cashin_n25 = $this->m_bulan->tampil_cashin_n($tanggal25);
        $cashin_o25 = $this->m_bulan->tampil_cashin_o($tanggal25);
        $cashin_p25 = $this->m_bulan->tampil_cashin_p($tanggal25);
        $cashin_q25 = $this->m_bulan->tampil_cashin_q($tanggal25);
        $cashin_r25 = $this->m_bulan->tampil_cashin_r($tanggal25);
        $cashin_s25 = $this->m_bulan->tampil_cashin_s($tanggal25);
        $tCashinProj_25 = $this->m_bulan->totalCashinProj($tanggal25);
        $tCashinReal_25 = $this->m_bulan->totalCashinReal($tanggal25);

        // ...................................................................................

        // CASH-OUT Hari Ke-1
        $cashout_a1 = $this->m_bulan->tampil_cashout_a($tanggal1);
        $cashout_b1 = $this->m_bulan->tampil_cashout_b($tanggal1);
        $cashout_c1 = $this->m_bulan->tampil_cashout_c($tanggal1);
        $cashout_d1 = $this->m_bulan->tampil_cashout_d($tanggal1);
        $cashout_e1 = $this->m_bulan->tampil_cashout_e($tanggal1);
        $cashout_f1 = $this->m_bulan->tampil_cashout_f($tanggal1);
        $cashout_g1 = $this->m_bulan->tampil_cashout_g($tanggal1);
        $cashout_h1 = $this->m_bulan->tampil_cashout_h($tanggal1);
        $cashout_i1 = $this->m_bulan->tampil_cashout_i($tanggal1);
        $cashout_j1 = $this->m_bulan->tampil_cashout_j($tanggal1);
        $cashout_k1 = $this->m_bulan->tampil_cashout_k($tanggal1);
        $cashout_l1 = $this->m_bulan->tampil_cashout_l($tanggal1);
        $cashout_m1 = $this->m_bulan->tampil_cashout_m($tanggal1);
        $cashout_n1 = $this->m_bulan->tampil_cashout_n($tanggal1);
        $cashout_o1 = $this->m_bulan->tampil_cashout_o($tanggal1);
        $cashout_p1 = $this->m_bulan->tampil_cashout_p($tanggal1);
        $cashout_q1 = $this->m_bulan->tampil_cashout_q($tanggal1);
        $cashout_r1 = $this->m_bulan->tampil_cashout_r($tanggal1);
        $cashout_s1 = $this->m_bulan->tampil_cashout_s($tanggal1);
        $cashout_t1 = $this->m_bulan->tampil_cashout_t($tanggal1);
        $cashout_u1 = $this->m_bulan->tampil_cashout_u($tanggal1);
        $cashout_v1 = $this->m_bulan->tampil_cashout_v($tanggal1);
        $cashout_w1 = $this->m_bulan->tampil_cashout_w($tanggal1);
        $cashout_x1 = $this->m_bulan->tampil_cashout_x($tanggal1);
        $cashout_y1 = $this->m_bulan->tampil_cashout_y($tanggal1);
        $cashout_z1 = $this->m_bulan->tampil_cashout_z($tanggal1);
        $cashout_a21 = $this->m_bulan->tampil_cashout_a2($tanggal1);
        $cashout_b21 = $this->m_bulan->tampil_cashout_b2($tanggal1);
        $cashout_c21 = $this->m_bulan->tampil_cashout_c2($tanggal1);
        $cashout_d21 = $this->m_bulan->tampil_cashout_d2($tanggal1);
        $cashout_e21 = $this->m_bulan->tampil_cashout_e2($tanggal1);
        $cashout_f21 = $this->m_bulan->tampil_cashout_f2($tanggal1);
        $cashout_g21 = $this->m_bulan->tampil_cashout_g2($tanggal1);
        $cashout_h21 = $this->m_bulan->tampil_cashout_h2($tanggal1);
        $cashout_i21 = $this->m_bulan->tampil_cashout_i2($tanggal1);
        $cashout_j21 = $this->m_bulan->tampil_cashout_j2($tanggal1);
        $cashout_k21 = $this->m_bulan->tampil_cashout_k2($tanggal1);
        $cashout_l21 = $this->m_bulan->tampil_cashout_l2($tanggal1);
        $cashout_m21 = $this->m_bulan->tampil_cashout_m2($tanggal1);
        $cashout_n21 = $this->m_bulan->tampil_cashout_n2($tanggal1);
        $cashout_o21 = $this->m_bulan->tampil_cashout_o2($tanggal1);
        $cashout_p21 = $this->m_bulan->tampil_cashout_p2($tanggal1);
        $cashout_q21 = $this->m_bulan->tampil_cashout_q2($tanggal1);
        $cashout_r21 = $this->m_bulan->tampil_cashout_r2($tanggal1);
        $cashout_s21 = $this->m_bulan->tampil_cashout_s2($tanggal1);
        $cashout_t21 = $this->m_bulan->tampil_cashout_t2($tanggal1);
        $cashout_u21 = $this->m_bulan->tampil_cashout_u2($tanggal1);
        $cashout_v21 = $this->m_bulan->tampil_cashout_v2($tanggal1);
        $cashout_w21 = $this->m_bulan->tampil_cashout_w2($tanggal1);
        $cashout_x21 = $this->m_bulan->tampil_cashout_x2($tanggal1);
        $cashout_y21 = $this->m_bulan->tampil_cashout_y2($tanggal1);
        $cashout_z21 = $this->m_bulan->tampil_cashout_z2($tanggal1);
        $cashout_a31 = $this->m_bulan->tampil_cashout_a3($tanggal1);
        $cashout_b31 = $this->m_bulan->tampil_cashout_b3($tanggal1);
        $cashout_c31 = $this->m_bulan->tampil_cashout_c3($tanggal1);
        $cashout_d31 = $this->m_bulan->tampil_cashout_d3($tanggal1);
        $cashout_e31 = $this->m_bulan->tampil_cashout_e3($tanggal1);
        $cashout_f31 = $this->m_bulan->tampil_cashout_f3($tanggal1);
        $cashout_g31 = $this->m_bulan->tampil_cashout_g3($tanggal1);
        $cashout_h31 = $this->m_bulan->tampil_cashout_h3($tanggal1);
        $cashout_i31 = $this->m_bulan->tampil_cashout_i3($tanggal1);
        $cashout_j31 = $this->m_bulan->tampil_cashout_j3($tanggal1);
        $cashout_k31 = $this->m_bulan->tampil_cashout_k3($tanggal1);
        $cashout_l31 = $this->m_bulan->tampil_cashout_l3($tanggal1);
        $tCashoutProj_1 = $this->m_bulan->totalCashoutProj($tanggal1);
        $tCashoutReal_1 = $this->m_bulan->totalCashoutReal($tanggal1);


        // CASH-OUT Hari Ke-2
        $cashout_a2 = $this->m_bulan->tampil_cashout_a($tanggal2);
        $cashout_b2 = $this->m_bulan->tampil_cashout_b($tanggal2);
        $cashout_c2 = $this->m_bulan->tampil_cashout_c($tanggal2);
        $cashout_d2 = $this->m_bulan->tampil_cashout_d($tanggal2);
        $cashout_e2 = $this->m_bulan->tampil_cashout_e($tanggal2);
        $cashout_f2 = $this->m_bulan->tampil_cashout_f($tanggal2);
        $cashout_g2 = $this->m_bulan->tampil_cashout_g($tanggal2);
        $cashout_h2 = $this->m_bulan->tampil_cashout_h($tanggal2);
        $cashout_i2 = $this->m_bulan->tampil_cashout_i($tanggal2);
        $cashout_j2 = $this->m_bulan->tampil_cashout_j($tanggal2);
        $cashout_k2 = $this->m_bulan->tampil_cashout_k($tanggal2);
        $cashout_l2 = $this->m_bulan->tampil_cashout_l($tanggal2);
        $cashout_m2 = $this->m_bulan->tampil_cashout_m($tanggal2);
        $cashout_n2 = $this->m_bulan->tampil_cashout_n($tanggal2);
        $cashout_o2 = $this->m_bulan->tampil_cashout_o($tanggal2);
        $cashout_p2 = $this->m_bulan->tampil_cashout_p($tanggal2);
        $cashout_q2 = $this->m_bulan->tampil_cashout_q($tanggal2);
        $cashout_r2 = $this->m_bulan->tampil_cashout_r($tanggal2);
        $cashout_s2 = $this->m_bulan->tampil_cashout_s($tanggal2);
        $cashout_t2 = $this->m_bulan->tampil_cashout_t($tanggal2);
        $cashout_u2 = $this->m_bulan->tampil_cashout_u($tanggal2);
        $cashout_v2 = $this->m_bulan->tampil_cashout_v($tanggal2);
        $cashout_w2 = $this->m_bulan->tampil_cashout_w($tanggal2);
        $cashout_x2 = $this->m_bulan->tampil_cashout_x($tanggal2);
        $cashout_y2 = $this->m_bulan->tampil_cashout_y($tanggal2);
        $cashout_z2 = $this->m_bulan->tampil_cashout_z($tanggal2);
        $cashout_a22 = $this->m_bulan->tampil_cashout_a2($tanggal2);
        $cashout_b22 = $this->m_bulan->tampil_cashout_b2($tanggal2);
        $cashout_c22 = $this->m_bulan->tampil_cashout_c2($tanggal2);
        $cashout_d22 = $this->m_bulan->tampil_cashout_d2($tanggal2);
        $cashout_e22 = $this->m_bulan->tampil_cashout_e2($tanggal2);
        $cashout_f22 = $this->m_bulan->tampil_cashout_f2($tanggal2);
        $cashout_g22 = $this->m_bulan->tampil_cashout_g2($tanggal2);
        $cashout_h22 = $this->m_bulan->tampil_cashout_h2($tanggal2);
        $cashout_i22 = $this->m_bulan->tampil_cashout_i2($tanggal2);
        $cashout_j22 = $this->m_bulan->tampil_cashout_j2($tanggal2);
        $cashout_k22 = $this->m_bulan->tampil_cashout_k2($tanggal2);
        $cashout_l22 = $this->m_bulan->tampil_cashout_l2($tanggal2);
        $cashout_m22 = $this->m_bulan->tampil_cashout_m2($tanggal2);
        $cashout_n22 = $this->m_bulan->tampil_cashout_n2($tanggal2);
        $cashout_o22 = $this->m_bulan->tampil_cashout_o2($tanggal2);
        $cashout_p22 = $this->m_bulan->tampil_cashout_p2($tanggal2);
        $cashout_q22 = $this->m_bulan->tampil_cashout_q2($tanggal2);
        $cashout_r22 = $this->m_bulan->tampil_cashout_r2($tanggal2);
        $cashout_s22 = $this->m_bulan->tampil_cashout_s2($tanggal2);
        $cashout_t22 = $this->m_bulan->tampil_cashout_t2($tanggal2);
        $cashout_u22 = $this->m_bulan->tampil_cashout_u2($tanggal2);
        $cashout_v22 = $this->m_bulan->tampil_cashout_v2($tanggal2);
        $cashout_w22 = $this->m_bulan->tampil_cashout_w2($tanggal2);
        $cashout_x22 = $this->m_bulan->tampil_cashout_x2($tanggal2);
        $cashout_y22 = $this->m_bulan->tampil_cashout_y2($tanggal2);
        $cashout_z22 = $this->m_bulan->tampil_cashout_z2($tanggal2);
        $cashout_a32 = $this->m_bulan->tampil_cashout_a3($tanggal2);
        $cashout_b32 = $this->m_bulan->tampil_cashout_b3($tanggal2);
        $cashout_c32 = $this->m_bulan->tampil_cashout_c3($tanggal2);
        $cashout_d32 = $this->m_bulan->tampil_cashout_d3($tanggal2);
        $cashout_e32 = $this->m_bulan->tampil_cashout_e3($tanggal2);
        $cashout_f32 = $this->m_bulan->tampil_cashout_f3($tanggal2);
        $cashout_g32 = $this->m_bulan->tampil_cashout_g3($tanggal2);
        $cashout_h32 = $this->m_bulan->tampil_cashout_h3($tanggal2);
        $cashout_i32 = $this->m_bulan->tampil_cashout_i3($tanggal2);
        $cashout_j32 = $this->m_bulan->tampil_cashout_j3($tanggal2);
        $cashout_k32 = $this->m_bulan->tampil_cashout_k3($tanggal2);
        $cashout_l32 = $this->m_bulan->tampil_cashout_l3($tanggal2);
        $tCashoutProj_2 = $this->m_bulan->totalCashoutProj($tanggal2);
        $tCashoutReal_2 = $this->m_bulan->totalCashoutReal($tanggal2);


        // CASH-OUT Hari Ke-3
        $cashout_a3 = $this->m_bulan->tampil_cashout_a($tanggal3);
        $cashout_b3 = $this->m_bulan->tampil_cashout_b($tanggal3);
        $cashout_c3 = $this->m_bulan->tampil_cashout_c($tanggal3);
        $cashout_d3 = $this->m_bulan->tampil_cashout_d($tanggal3);
        $cashout_e3 = $this->m_bulan->tampil_cashout_e($tanggal3);
        $cashout_f3 = $this->m_bulan->tampil_cashout_f($tanggal3);
        $cashout_g3 = $this->m_bulan->tampil_cashout_g($tanggal3);
        $cashout_h3 = $this->m_bulan->tampil_cashout_h($tanggal3);
        $cashout_i3 = $this->m_bulan->tampil_cashout_i($tanggal3);
        $cashout_j3 = $this->m_bulan->tampil_cashout_j($tanggal3);
        $cashout_k3 = $this->m_bulan->tampil_cashout_k($tanggal3);
        $cashout_l3 = $this->m_bulan->tampil_cashout_l($tanggal3);
        $cashout_m3 = $this->m_bulan->tampil_cashout_m($tanggal3);
        $cashout_n3 = $this->m_bulan->tampil_cashout_n($tanggal3);
        $cashout_o3 = $this->m_bulan->tampil_cashout_o($tanggal3);
        $cashout_p3 = $this->m_bulan->tampil_cashout_p($tanggal3);
        $cashout_q3 = $this->m_bulan->tampil_cashout_q($tanggal3);
        $cashout_r3 = $this->m_bulan->tampil_cashout_r($tanggal3);
        $cashout_s3 = $this->m_bulan->tampil_cashout_s($tanggal3);
        $cashout_t3 = $this->m_bulan->tampil_cashout_t($tanggal3);
        $cashout_u3 = $this->m_bulan->tampil_cashout_u($tanggal3);
        $cashout_v3 = $this->m_bulan->tampil_cashout_v($tanggal3);
        $cashout_w3 = $this->m_bulan->tampil_cashout_w($tanggal3);
        $cashout_x3 = $this->m_bulan->tampil_cashout_x($tanggal3);
        $cashout_y3 = $this->m_bulan->tampil_cashout_y($tanggal3);
        $cashout_z3 = $this->m_bulan->tampil_cashout_z($tanggal3);
        $cashout_a23 = $this->m_bulan->tampil_cashout_a2($tanggal3);
        $cashout_b23 = $this->m_bulan->tampil_cashout_b2($tanggal3);
        $cashout_c23 = $this->m_bulan->tampil_cashout_c2($tanggal3);
        $cashout_d23 = $this->m_bulan->tampil_cashout_d2($tanggal3);
        $cashout_e23 = $this->m_bulan->tampil_cashout_e2($tanggal3);
        $cashout_f23 = $this->m_bulan->tampil_cashout_f2($tanggal3);
        $cashout_g23 = $this->m_bulan->tampil_cashout_g2($tanggal3);
        $cashout_h23 = $this->m_bulan->tampil_cashout_h2($tanggal3);
        $cashout_i23 = $this->m_bulan->tampil_cashout_i2($tanggal3);
        $cashout_j23 = $this->m_bulan->tampil_cashout_j2($tanggal3);
        $cashout_k23 = $this->m_bulan->tampil_cashout_k2($tanggal3);
        $cashout_l23 = $this->m_bulan->tampil_cashout_l2($tanggal3);
        $cashout_m23 = $this->m_bulan->tampil_cashout_m2($tanggal3);
        $cashout_n23 = $this->m_bulan->tampil_cashout_n2($tanggal3);
        $cashout_o23 = $this->m_bulan->tampil_cashout_o2($tanggal3);
        $cashout_p23 = $this->m_bulan->tampil_cashout_p2($tanggal3);
        $cashout_q23 = $this->m_bulan->tampil_cashout_q2($tanggal3);
        $cashout_r23 = $this->m_bulan->tampil_cashout_r2($tanggal3);
        $cashout_s23 = $this->m_bulan->tampil_cashout_s2($tanggal3);
        $cashout_t23 = $this->m_bulan->tampil_cashout_t2($tanggal3);
        $cashout_u23 = $this->m_bulan->tampil_cashout_u2($tanggal3);
        $cashout_v23 = $this->m_bulan->tampil_cashout_v2($tanggal3);
        $cashout_w23 = $this->m_bulan->tampil_cashout_w2($tanggal3);
        $cashout_x23 = $this->m_bulan->tampil_cashout_x2($tanggal3);
        $cashout_y23 = $this->m_bulan->tampil_cashout_y2($tanggal3);
        $cashout_z23 = $this->m_bulan->tampil_cashout_z2($tanggal3);
        $cashout_a33 = $this->m_bulan->tampil_cashout_a3($tanggal3);
        $cashout_b33 = $this->m_bulan->tampil_cashout_b3($tanggal3);
        $cashout_c33 = $this->m_bulan->tampil_cashout_c3($tanggal3);
        $cashout_d33 = $this->m_bulan->tampil_cashout_d3($tanggal3);
        $cashout_e33 = $this->m_bulan->tampil_cashout_e3($tanggal3);
        $cashout_f33 = $this->m_bulan->tampil_cashout_f3($tanggal3);
        $cashout_g33 = $this->m_bulan->tampil_cashout_g3($tanggal3);
        $cashout_h33 = $this->m_bulan->tampil_cashout_h3($tanggal3);
        $cashout_i33 = $this->m_bulan->tampil_cashout_i3($tanggal3);
        $cashout_j33 = $this->m_bulan->tampil_cashout_j3($tanggal3);
        $cashout_k33 = $this->m_bulan->tampil_cashout_k3($tanggal3);
        $cashout_l33 = $this->m_bulan->tampil_cashout_l3($tanggal3);
        $tCashoutProj_3 = $this->m_bulan->totalCashoutProj($tanggal3);
        $tCashoutReal_3 = $this->m_bulan->totalCashoutReal($tanggal3);


        // CASH-OUT Hari Ke-4
        $cashout_a4 = $this->m_bulan->tampil_cashout_a($tanggal4);
        $cashout_b4 = $this->m_bulan->tampil_cashout_b($tanggal4);
        $cashout_c4 = $this->m_bulan->tampil_cashout_c($tanggal4);
        $cashout_d4 = $this->m_bulan->tampil_cashout_d($tanggal4);
        $cashout_e4 = $this->m_bulan->tampil_cashout_e($tanggal4);
        $cashout_f4 = $this->m_bulan->tampil_cashout_f($tanggal4);
        $cashout_g4 = $this->m_bulan->tampil_cashout_g($tanggal4);
        $cashout_h4 = $this->m_bulan->tampil_cashout_h($tanggal4);
        $cashout_i4 = $this->m_bulan->tampil_cashout_i($tanggal4);
        $cashout_j4 = $this->m_bulan->tampil_cashout_j($tanggal4);
        $cashout_k4 = $this->m_bulan->tampil_cashout_k($tanggal4);
        $cashout_l4 = $this->m_bulan->tampil_cashout_l($tanggal4);
        $cashout_m4 = $this->m_bulan->tampil_cashout_m($tanggal4);
        $cashout_n4 = $this->m_bulan->tampil_cashout_n($tanggal4);
        $cashout_o4 = $this->m_bulan->tampil_cashout_o($tanggal4);
        $cashout_p4 = $this->m_bulan->tampil_cashout_p($tanggal4);
        $cashout_q4 = $this->m_bulan->tampil_cashout_q($tanggal4);
        $cashout_r4 = $this->m_bulan->tampil_cashout_r($tanggal4);
        $cashout_s4 = $this->m_bulan->tampil_cashout_s($tanggal4);
        $cashout_t4 = $this->m_bulan->tampil_cashout_t($tanggal4);
        $cashout_u4 = $this->m_bulan->tampil_cashout_u($tanggal4);
        $cashout_v4 = $this->m_bulan->tampil_cashout_v($tanggal4);
        $cashout_w4 = $this->m_bulan->tampil_cashout_w($tanggal4);
        $cashout_x4 = $this->m_bulan->tampil_cashout_x($tanggal4);
        $cashout_y4 = $this->m_bulan->tampil_cashout_y($tanggal4);
        $cashout_z4 = $this->m_bulan->tampil_cashout_z($tanggal4);
        $cashout_a24 = $this->m_bulan->tampil_cashout_a2($tanggal4);
        $cashout_b24 = $this->m_bulan->tampil_cashout_b2($tanggal4);
        $cashout_c24 = $this->m_bulan->tampil_cashout_c2($tanggal4);
        $cashout_d24 = $this->m_bulan->tampil_cashout_d2($tanggal4);
        $cashout_e24 = $this->m_bulan->tampil_cashout_e2($tanggal4);
        $cashout_f24 = $this->m_bulan->tampil_cashout_f2($tanggal4);
        $cashout_g24 = $this->m_bulan->tampil_cashout_g2($tanggal4);
        $cashout_h24 = $this->m_bulan->tampil_cashout_h2($tanggal4);
        $cashout_i24 = $this->m_bulan->tampil_cashout_i2($tanggal4);
        $cashout_j24 = $this->m_bulan->tampil_cashout_j2($tanggal4);
        $cashout_k24 = $this->m_bulan->tampil_cashout_k2($tanggal4);
        $cashout_l24 = $this->m_bulan->tampil_cashout_l2($tanggal4);
        $cashout_m24 = $this->m_bulan->tampil_cashout_m2($tanggal4);
        $cashout_n24 = $this->m_bulan->tampil_cashout_n2($tanggal4);
        $cashout_o24 = $this->m_bulan->tampil_cashout_o2($tanggal4);
        $cashout_p24 = $this->m_bulan->tampil_cashout_p2($tanggal4);
        $cashout_q24 = $this->m_bulan->tampil_cashout_q2($tanggal4);
        $cashout_r24 = $this->m_bulan->tampil_cashout_r2($tanggal4);
        $cashout_s24 = $this->m_bulan->tampil_cashout_s2($tanggal4);
        $cashout_t24 = $this->m_bulan->tampil_cashout_t2($tanggal4);
        $cashout_u24 = $this->m_bulan->tampil_cashout_u2($tanggal4);
        $cashout_v24 = $this->m_bulan->tampil_cashout_v2($tanggal4);
        $cashout_w24 = $this->m_bulan->tampil_cashout_w2($tanggal4);
        $cashout_x24 = $this->m_bulan->tampil_cashout_x2($tanggal4);
        $cashout_y24 = $this->m_bulan->tampil_cashout_y2($tanggal4);
        $cashout_z24 = $this->m_bulan->tampil_cashout_z2($tanggal4);
        $cashout_a34 = $this->m_bulan->tampil_cashout_a3($tanggal4);
        $cashout_b34 = $this->m_bulan->tampil_cashout_b3($tanggal4);
        $cashout_c34 = $this->m_bulan->tampil_cashout_c3($tanggal4);
        $cashout_d34 = $this->m_bulan->tampil_cashout_d3($tanggal4);
        $cashout_e34 = $this->m_bulan->tampil_cashout_e3($tanggal4);
        $cashout_f34 = $this->m_bulan->tampil_cashout_f3($tanggal4);
        $cashout_g34 = $this->m_bulan->tampil_cashout_g3($tanggal4);
        $cashout_h34 = $this->m_bulan->tampil_cashout_h3($tanggal4);
        $cashout_i34 = $this->m_bulan->tampil_cashout_i3($tanggal4);
        $cashout_j34 = $this->m_bulan->tampil_cashout_j3($tanggal4);
        $cashout_k34 = $this->m_bulan->tampil_cashout_k3($tanggal4);
        $cashout_l34 = $this->m_bulan->tampil_cashout_l3($tanggal4);
        $tCashoutProj_4 = $this->m_bulan->totalCashoutProj($tanggal4);
        $tCashoutReal_4 = $this->m_bulan->totalCashoutReal($tanggal4);


        // CASH-OUT Hari Ke-5
        $cashout_a5 = $this->m_bulan->tampil_cashout_a($tanggal5);
        $cashout_b5 = $this->m_bulan->tampil_cashout_b($tanggal5);
        $cashout_c5 = $this->m_bulan->tampil_cashout_c($tanggal5);
        $cashout_d5 = $this->m_bulan->tampil_cashout_d($tanggal5);
        $cashout_e5 = $this->m_bulan->tampil_cashout_e($tanggal5);
        $cashout_f5 = $this->m_bulan->tampil_cashout_f($tanggal5);
        $cashout_g5 = $this->m_bulan->tampil_cashout_g($tanggal5);
        $cashout_h5 = $this->m_bulan->tampil_cashout_h($tanggal5);
        $cashout_i5 = $this->m_bulan->tampil_cashout_i($tanggal5);
        $cashout_j5 = $this->m_bulan->tampil_cashout_j($tanggal5);
        $cashout_k5 = $this->m_bulan->tampil_cashout_k($tanggal5);
        $cashout_l5 = $this->m_bulan->tampil_cashout_l($tanggal5);
        $cashout_m5 = $this->m_bulan->tampil_cashout_m($tanggal5);
        $cashout_n5 = $this->m_bulan->tampil_cashout_n($tanggal5);
        $cashout_o5 = $this->m_bulan->tampil_cashout_o($tanggal5);
        $cashout_p5 = $this->m_bulan->tampil_cashout_p($tanggal5);
        $cashout_q5 = $this->m_bulan->tampil_cashout_q($tanggal5);
        $cashout_r5 = $this->m_bulan->tampil_cashout_r($tanggal5);
        $cashout_s5 = $this->m_bulan->tampil_cashout_s($tanggal5);
        $cashout_t5 = $this->m_bulan->tampil_cashout_t($tanggal5);
        $cashout_u5 = $this->m_bulan->tampil_cashout_u($tanggal5);
        $cashout_v5 = $this->m_bulan->tampil_cashout_v($tanggal5);
        $cashout_w5 = $this->m_bulan->tampil_cashout_w($tanggal5);
        $cashout_x5 = $this->m_bulan->tampil_cashout_x($tanggal5);
        $cashout_y5 = $this->m_bulan->tampil_cashout_y($tanggal5);
        $cashout_z5 = $this->m_bulan->tampil_cashout_z($tanggal5);
        $cashout_a25 = $this->m_bulan->tampil_cashout_a2($tanggal5);
        $cashout_b25 = $this->m_bulan->tampil_cashout_b2($tanggal5);
        $cashout_c25 = $this->m_bulan->tampil_cashout_c2($tanggal5);
        $cashout_d25 = $this->m_bulan->tampil_cashout_d2($tanggal5);
        $cashout_e25 = $this->m_bulan->tampil_cashout_e2($tanggal5);
        $cashout_f25 = $this->m_bulan->tampil_cashout_f2($tanggal5);
        $cashout_g25 = $this->m_bulan->tampil_cashout_g2($tanggal5);
        $cashout_h25 = $this->m_bulan->tampil_cashout_h2($tanggal5);
        $cashout_i25 = $this->m_bulan->tampil_cashout_i2($tanggal5);
        $cashout_j25 = $this->m_bulan->tampil_cashout_j2($tanggal5);
        $cashout_k25 = $this->m_bulan->tampil_cashout_k2($tanggal5);
        $cashout_l25 = $this->m_bulan->tampil_cashout_l2($tanggal5);
        $cashout_m25 = $this->m_bulan->tampil_cashout_m2($tanggal5);
        $cashout_n25 = $this->m_bulan->tampil_cashout_n2($tanggal5);
        $cashout_o25 = $this->m_bulan->tampil_cashout_o2($tanggal5);
        $cashout_p25 = $this->m_bulan->tampil_cashout_p2($tanggal5);
        $cashout_q25 = $this->m_bulan->tampil_cashout_q2($tanggal5);
        $cashout_r25 = $this->m_bulan->tampil_cashout_r2($tanggal5);
        $cashout_s25 = $this->m_bulan->tampil_cashout_s2($tanggal5);
        $cashout_t25 = $this->m_bulan->tampil_cashout_t2($tanggal5);
        $cashout_u25 = $this->m_bulan->tampil_cashout_u2($tanggal5);
        $cashout_v25 = $this->m_bulan->tampil_cashout_v2($tanggal5);
        $cashout_w25 = $this->m_bulan->tampil_cashout_w2($tanggal5);
        $cashout_x25 = $this->m_bulan->tampil_cashout_x2($tanggal5);
        $cashout_y25 = $this->m_bulan->tampil_cashout_y2($tanggal5);
        $cashout_z25 = $this->m_bulan->tampil_cashout_z2($tanggal5);
        $cashout_a35 = $this->m_bulan->tampil_cashout_a3($tanggal5);
        $cashout_b35 = $this->m_bulan->tampil_cashout_b3($tanggal5);
        $cashout_c35 = $this->m_bulan->tampil_cashout_c3($tanggal5);
        $cashout_d35 = $this->m_bulan->tampil_cashout_d3($tanggal5);
        $cashout_e35 = $this->m_bulan->tampil_cashout_e3($tanggal5);
        $cashout_f35 = $this->m_bulan->tampil_cashout_f3($tanggal5);
        $cashout_g35 = $this->m_bulan->tampil_cashout_g3($tanggal5);
        $cashout_h35 = $this->m_bulan->tampil_cashout_h3($tanggal5);
        $cashout_i35 = $this->m_bulan->tampil_cashout_i3($tanggal5);
        $cashout_j35 = $this->m_bulan->tampil_cashout_j3($tanggal5);
        $cashout_k35 = $this->m_bulan->tampil_cashout_k3($tanggal5);
        $cashout_l35 = $this->m_bulan->tampil_cashout_l3($tanggal5);
        $tCashoutProj_5 = $this->m_bulan->totalCashoutProj($tanggal5);
        $tCashoutReal_5 = $this->m_bulan->totalCashoutReal($tanggal5);

        // CASH-OUT Hari Ke-6
        $cashout_a6 = $this->m_bulan->tampil_cashout_a($tanggal6);
        $cashout_b6 = $this->m_bulan->tampil_cashout_b($tanggal6);
        $cashout_c6 = $this->m_bulan->tampil_cashout_c($tanggal6);
        $cashout_d6 = $this->m_bulan->tampil_cashout_d($tanggal6);
        $cashout_e6 = $this->m_bulan->tampil_cashout_e($tanggal6);
        $cashout_f6 = $this->m_bulan->tampil_cashout_f($tanggal6);
        $cashout_g6 = $this->m_bulan->tampil_cashout_g($tanggal6);
        $cashout_h6 = $this->m_bulan->tampil_cashout_h($tanggal6);
        $cashout_i6 = $this->m_bulan->tampil_cashout_i($tanggal6);
        $cashout_j6 = $this->m_bulan->tampil_cashout_j($tanggal6);
        $cashout_k6 = $this->m_bulan->tampil_cashout_k($tanggal6);
        $cashout_l6 = $this->m_bulan->tampil_cashout_l($tanggal6);
        $cashout_m6 = $this->m_bulan->tampil_cashout_m($tanggal6);
        $cashout_n6 = $this->m_bulan->tampil_cashout_n($tanggal6);
        $cashout_o6 = $this->m_bulan->tampil_cashout_o($tanggal6);
        $cashout_p6 = $this->m_bulan->tampil_cashout_p($tanggal6);
        $cashout_q6 = $this->m_bulan->tampil_cashout_q($tanggal6);
        $cashout_r6 = $this->m_bulan->tampil_cashout_r($tanggal6);
        $cashout_s6 = $this->m_bulan->tampil_cashout_s($tanggal6);
        $cashout_t6 = $this->m_bulan->tampil_cashout_t($tanggal6);
        $cashout_u6 = $this->m_bulan->tampil_cashout_u($tanggal6);
        $cashout_v6 = $this->m_bulan->tampil_cashout_v($tanggal6);
        $cashout_w6 = $this->m_bulan->tampil_cashout_w($tanggal6);
        $cashout_x6 = $this->m_bulan->tampil_cashout_x($tanggal6);
        $cashout_y6 = $this->m_bulan->tampil_cashout_y($tanggal6);
        $cashout_z6 = $this->m_bulan->tampil_cashout_z($tanggal6);
        $cashout_a26 = $this->m_bulan->tampil_cashout_a2($tanggal6);
        $cashout_b26 = $this->m_bulan->tampil_cashout_b2($tanggal6);
        $cashout_c26 = $this->m_bulan->tampil_cashout_c2($tanggal6);
        $cashout_d26 = $this->m_bulan->tampil_cashout_d2($tanggal6);
        $cashout_e26 = $this->m_bulan->tampil_cashout_e2($tanggal6);
        $cashout_f26 = $this->m_bulan->tampil_cashout_f2($tanggal6);
        $cashout_g26 = $this->m_bulan->tampil_cashout_g2($tanggal6);
        $cashout_h26 = $this->m_bulan->tampil_cashout_h2($tanggal6);
        $cashout_i26 = $this->m_bulan->tampil_cashout_i2($tanggal6);
        $cashout_j26 = $this->m_bulan->tampil_cashout_j2($tanggal6);
        $cashout_k26 = $this->m_bulan->tampil_cashout_k2($tanggal6);
        $cashout_l26 = $this->m_bulan->tampil_cashout_l2($tanggal6);
        $cashout_m26 = $this->m_bulan->tampil_cashout_m2($tanggal6);
        $cashout_n26 = $this->m_bulan->tampil_cashout_n2($tanggal6);
        $cashout_o26 = $this->m_bulan->tampil_cashout_o2($tanggal6);
        $cashout_p26 = $this->m_bulan->tampil_cashout_p2($tanggal6);
        $cashout_q26 = $this->m_bulan->tampil_cashout_q2($tanggal6);
        $cashout_r26 = $this->m_bulan->tampil_cashout_r2($tanggal6);
        $cashout_s26 = $this->m_bulan->tampil_cashout_s2($tanggal6);
        $cashout_t26 = $this->m_bulan->tampil_cashout_t2($tanggal6);
        $cashout_u26 = $this->m_bulan->tampil_cashout_u2($tanggal6);
        $cashout_v26 = $this->m_bulan->tampil_cashout_v2($tanggal6);
        $cashout_w26 = $this->m_bulan->tampil_cashout_w2($tanggal6);
        $cashout_x26 = $this->m_bulan->tampil_cashout_x2($tanggal6);
        $cashout_y26 = $this->m_bulan->tampil_cashout_y2($tanggal6);
        $cashout_z26 = $this->m_bulan->tampil_cashout_z2($tanggal6);
        $cashout_a36 = $this->m_bulan->tampil_cashout_a3($tanggal6);
        $cashout_b36 = $this->m_bulan->tampil_cashout_b3($tanggal6);
        $cashout_c36 = $this->m_bulan->tampil_cashout_c3($tanggal6);
        $cashout_d36 = $this->m_bulan->tampil_cashout_d3($tanggal6);
        $cashout_e36 = $this->m_bulan->tampil_cashout_e3($tanggal6);
        $cashout_f36 = $this->m_bulan->tampil_cashout_f3($tanggal6);
        $cashout_g36 = $this->m_bulan->tampil_cashout_g3($tanggal6);
        $cashout_h36 = $this->m_bulan->tampil_cashout_h3($tanggal6);
        $cashout_i36 = $this->m_bulan->tampil_cashout_i3($tanggal6);
        $cashout_j36 = $this->m_bulan->tampil_cashout_j3($tanggal6);
        $cashout_k36 = $this->m_bulan->tampil_cashout_k3($tanggal6);
        $cashout_l36 = $this->m_bulan->tampil_cashout_l3($tanggal6);
        $tCashoutProj_6 = $this->m_bulan->totalCashoutProj($tanggal6);
        $tCashoutReal_6 = $this->m_bulan->totalCashoutReal($tanggal6);

        // CASH-OUT Hari Ke-7
        $cashout_a7 = $this->m_bulan->tampil_cashout_a($tanggal7);
        $cashout_b7 = $this->m_bulan->tampil_cashout_b($tanggal7);
        $cashout_c7 = $this->m_bulan->tampil_cashout_c($tanggal7);
        $cashout_d7 = $this->m_bulan->tampil_cashout_d($tanggal7);
        $cashout_e7 = $this->m_bulan->tampil_cashout_e($tanggal7);
        $cashout_f7 = $this->m_bulan->tampil_cashout_f($tanggal7);
        $cashout_g7 = $this->m_bulan->tampil_cashout_g($tanggal7);
        $cashout_h7 = $this->m_bulan->tampil_cashout_h($tanggal7);
        $cashout_i7 = $this->m_bulan->tampil_cashout_i($tanggal7);
        $cashout_j7 = $this->m_bulan->tampil_cashout_j($tanggal7);
        $cashout_k7 = $this->m_bulan->tampil_cashout_k($tanggal7);
        $cashout_l7 = $this->m_bulan->tampil_cashout_l($tanggal7);
        $cashout_m7 = $this->m_bulan->tampil_cashout_m($tanggal7);
        $cashout_n7 = $this->m_bulan->tampil_cashout_n($tanggal7);
        $cashout_o7 = $this->m_bulan->tampil_cashout_o($tanggal7);
        $cashout_p7 = $this->m_bulan->tampil_cashout_p($tanggal7);
        $cashout_q7 = $this->m_bulan->tampil_cashout_q($tanggal7);
        $cashout_r7 = $this->m_bulan->tampil_cashout_r($tanggal7);
        $cashout_s7 = $this->m_bulan->tampil_cashout_s($tanggal7);
        $cashout_t7 = $this->m_bulan->tampil_cashout_t($tanggal7);
        $cashout_u7 = $this->m_bulan->tampil_cashout_u($tanggal7);
        $cashout_v7 = $this->m_bulan->tampil_cashout_v($tanggal7);
        $cashout_w7 = $this->m_bulan->tampil_cashout_w($tanggal7);
        $cashout_x7 = $this->m_bulan->tampil_cashout_x($tanggal7);
        $cashout_y7 = $this->m_bulan->tampil_cashout_y($tanggal7);
        $cashout_z7 = $this->m_bulan->tampil_cashout_z($tanggal7);
        $cashout_a27 = $this->m_bulan->tampil_cashout_a2($tanggal7);
        $cashout_b27 = $this->m_bulan->tampil_cashout_b2($tanggal7);
        $cashout_c27 = $this->m_bulan->tampil_cashout_c2($tanggal7);
        $cashout_d27 = $this->m_bulan->tampil_cashout_d2($tanggal7);
        $cashout_e27 = $this->m_bulan->tampil_cashout_e2($tanggal7);
        $cashout_f27 = $this->m_bulan->tampil_cashout_f2($tanggal7);
        $cashout_g27 = $this->m_bulan->tampil_cashout_g2($tanggal7);
        $cashout_h27 = $this->m_bulan->tampil_cashout_h2($tanggal7);
        $cashout_i27 = $this->m_bulan->tampil_cashout_i2($tanggal7);
        $cashout_j27 = $this->m_bulan->tampil_cashout_j2($tanggal7);
        $cashout_k27 = $this->m_bulan->tampil_cashout_k2($tanggal7);
        $cashout_l27 = $this->m_bulan->tampil_cashout_l2($tanggal7);
        $cashout_m27 = $this->m_bulan->tampil_cashout_m2($tanggal7);
        $cashout_n27 = $this->m_bulan->tampil_cashout_n2($tanggal7);
        $cashout_o27 = $this->m_bulan->tampil_cashout_o2($tanggal7);
        $cashout_p27 = $this->m_bulan->tampil_cashout_p2($tanggal7);
        $cashout_q27 = $this->m_bulan->tampil_cashout_q2($tanggal7);
        $cashout_r27 = $this->m_bulan->tampil_cashout_r2($tanggal7);
        $cashout_s27 = $this->m_bulan->tampil_cashout_s2($tanggal7);
        $cashout_t27 = $this->m_bulan->tampil_cashout_t2($tanggal7);
        $cashout_u27 = $this->m_bulan->tampil_cashout_u2($tanggal7);
        $cashout_v27 = $this->m_bulan->tampil_cashout_v2($tanggal7);
        $cashout_w27 = $this->m_bulan->tampil_cashout_w2($tanggal7);
        $cashout_x27 = $this->m_bulan->tampil_cashout_x2($tanggal7);
        $cashout_y27 = $this->m_bulan->tampil_cashout_y2($tanggal7);
        $cashout_z27 = $this->m_bulan->tampil_cashout_z2($tanggal7);
        $cashout_a37 = $this->m_bulan->tampil_cashout_a3($tanggal7);
        $cashout_b37 = $this->m_bulan->tampil_cashout_b3($tanggal7);
        $cashout_c37 = $this->m_bulan->tampil_cashout_c3($tanggal7);
        $cashout_d37 = $this->m_bulan->tampil_cashout_d3($tanggal7);
        $cashout_e37 = $this->m_bulan->tampil_cashout_e3($tanggal7);
        $cashout_f37 = $this->m_bulan->tampil_cashout_f3($tanggal7);
        $cashout_g37 = $this->m_bulan->tampil_cashout_g3($tanggal7);
        $cashout_h37 = $this->m_bulan->tampil_cashout_h3($tanggal7);
        $cashout_i37 = $this->m_bulan->tampil_cashout_i3($tanggal7);
        $cashout_j37 = $this->m_bulan->tampil_cashout_j3($tanggal7);
        $cashout_k37 = $this->m_bulan->tampil_cashout_k3($tanggal7);
        $cashout_l37 = $this->m_bulan->tampil_cashout_l3($tanggal7);
        $tCashoutProj_7 = $this->m_bulan->totalCashoutProj($tanggal7);
        $tCashoutReal_7 = $this->m_bulan->totalCashoutReal($tanggal7);

        // CASH-OUT Hari Ke-8
        $cashout_a8 = $this->m_bulan->tampil_cashout_a($tanggal8);
        $cashout_b8 = $this->m_bulan->tampil_cashout_b($tanggal8);
        $cashout_c8 = $this->m_bulan->tampil_cashout_c($tanggal8);
        $cashout_d8 = $this->m_bulan->tampil_cashout_d($tanggal8);
        $cashout_e8 = $this->m_bulan->tampil_cashout_e($tanggal8);
        $cashout_f8 = $this->m_bulan->tampil_cashout_f($tanggal8);
        $cashout_g8 = $this->m_bulan->tampil_cashout_g($tanggal8);
        $cashout_h8 = $this->m_bulan->tampil_cashout_h($tanggal8);
        $cashout_i8 = $this->m_bulan->tampil_cashout_i($tanggal8);
        $cashout_j8 = $this->m_bulan->tampil_cashout_j($tanggal8);
        $cashout_k8 = $this->m_bulan->tampil_cashout_k($tanggal8);
        $cashout_l8 = $this->m_bulan->tampil_cashout_l($tanggal8);
        $cashout_m8 = $this->m_bulan->tampil_cashout_m($tanggal8);
        $cashout_n8 = $this->m_bulan->tampil_cashout_n($tanggal8);
        $cashout_o8 = $this->m_bulan->tampil_cashout_o($tanggal8);
        $cashout_p8 = $this->m_bulan->tampil_cashout_p($tanggal8);
        $cashout_q8 = $this->m_bulan->tampil_cashout_q($tanggal8);
        $cashout_r8 = $this->m_bulan->tampil_cashout_r($tanggal8);
        $cashout_s8 = $this->m_bulan->tampil_cashout_s($tanggal8);
        $cashout_t8 = $this->m_bulan->tampil_cashout_t($tanggal8);
        $cashout_u8 = $this->m_bulan->tampil_cashout_u($tanggal8);
        $cashout_v8 = $this->m_bulan->tampil_cashout_v($tanggal8);
        $cashout_w8 = $this->m_bulan->tampil_cashout_w($tanggal8);
        $cashout_x8 = $this->m_bulan->tampil_cashout_x($tanggal8);
        $cashout_y8 = $this->m_bulan->tampil_cashout_y($tanggal8);
        $cashout_z8 = $this->m_bulan->tampil_cashout_z($tanggal8);
        $cashout_a28 = $this->m_bulan->tampil_cashout_a2($tanggal8);
        $cashout_b28 = $this->m_bulan->tampil_cashout_b2($tanggal8);
        $cashout_c28 = $this->m_bulan->tampil_cashout_c2($tanggal8);
        $cashout_d28 = $this->m_bulan->tampil_cashout_d2($tanggal8);
        $cashout_e28 = $this->m_bulan->tampil_cashout_e2($tanggal8);
        $cashout_f28 = $this->m_bulan->tampil_cashout_f2($tanggal8);
        $cashout_g28 = $this->m_bulan->tampil_cashout_g2($tanggal8);
        $cashout_h28 = $this->m_bulan->tampil_cashout_h2($tanggal8);
        $cashout_i28 = $this->m_bulan->tampil_cashout_i2($tanggal8);
        $cashout_j28 = $this->m_bulan->tampil_cashout_j2($tanggal8);
        $cashout_k28 = $this->m_bulan->tampil_cashout_k2($tanggal8);
        $cashout_l28 = $this->m_bulan->tampil_cashout_l2($tanggal8);
        $cashout_m28 = $this->m_bulan->tampil_cashout_m2($tanggal8);
        $cashout_n28 = $this->m_bulan->tampil_cashout_n2($tanggal8);
        $cashout_o28 = $this->m_bulan->tampil_cashout_o2($tanggal8);
        $cashout_p28 = $this->m_bulan->tampil_cashout_p2($tanggal8);
        $cashout_q28 = $this->m_bulan->tampil_cashout_q2($tanggal8);
        $cashout_r28 = $this->m_bulan->tampil_cashout_r2($tanggal8);
        $cashout_s28 = $this->m_bulan->tampil_cashout_s2($tanggal8);
        $cashout_t28 = $this->m_bulan->tampil_cashout_t2($tanggal8);
        $cashout_u28 = $this->m_bulan->tampil_cashout_u2($tanggal8);
        $cashout_v28 = $this->m_bulan->tampil_cashout_v2($tanggal8);
        $cashout_w28 = $this->m_bulan->tampil_cashout_w2($tanggal8);
        $cashout_x28 = $this->m_bulan->tampil_cashout_x2($tanggal8);
        $cashout_y28 = $this->m_bulan->tampil_cashout_y2($tanggal8);
        $cashout_z28 = $this->m_bulan->tampil_cashout_z2($tanggal8);
        $cashout_a38 = $this->m_bulan->tampil_cashout_a3($tanggal8);
        $cashout_b38 = $this->m_bulan->tampil_cashout_b3($tanggal8);
        $cashout_c38 = $this->m_bulan->tampil_cashout_c3($tanggal8);
        $cashout_d38 = $this->m_bulan->tampil_cashout_d3($tanggal8);
        $cashout_e38 = $this->m_bulan->tampil_cashout_e3($tanggal8);
        $cashout_f38 = $this->m_bulan->tampil_cashout_f3($tanggal8);
        $cashout_g38 = $this->m_bulan->tampil_cashout_g3($tanggal8);
        $cashout_h38 = $this->m_bulan->tampil_cashout_h3($tanggal8);
        $cashout_i38 = $this->m_bulan->tampil_cashout_i3($tanggal8);
        $cashout_j38 = $this->m_bulan->tampil_cashout_j3($tanggal8);
        $cashout_k38 = $this->m_bulan->tampil_cashout_k3($tanggal8);
        $cashout_l38 = $this->m_bulan->tampil_cashout_l3($tanggal8);
        $tCashoutProj_8 = $this->m_bulan->totalCashoutProj($tanggal8);
        $tCashoutReal_8 = $this->m_bulan->totalCashoutReal($tanggal8);

        // CASH-OUT Hari Ke-9
        $cashout_a9 = $this->m_bulan->tampil_cashout_a($tanggal9);
        $cashout_b9 = $this->m_bulan->tampil_cashout_b($tanggal9);
        $cashout_c9 = $this->m_bulan->tampil_cashout_c($tanggal9);
        $cashout_d9 = $this->m_bulan->tampil_cashout_d($tanggal9);
        $cashout_e9 = $this->m_bulan->tampil_cashout_e($tanggal9);
        $cashout_f9 = $this->m_bulan->tampil_cashout_f($tanggal9);
        $cashout_g9 = $this->m_bulan->tampil_cashout_g($tanggal9);
        $cashout_h9 = $this->m_bulan->tampil_cashout_h($tanggal9);
        $cashout_i9 = $this->m_bulan->tampil_cashout_i($tanggal9);
        $cashout_j9 = $this->m_bulan->tampil_cashout_j($tanggal9);
        $cashout_k9 = $this->m_bulan->tampil_cashout_k($tanggal9);
        $cashout_l9 = $this->m_bulan->tampil_cashout_l($tanggal9);
        $cashout_m9 = $this->m_bulan->tampil_cashout_m($tanggal9);
        $cashout_n9 = $this->m_bulan->tampil_cashout_n($tanggal9);
        $cashout_o9 = $this->m_bulan->tampil_cashout_o($tanggal9);
        $cashout_p9 = $this->m_bulan->tampil_cashout_p($tanggal9);
        $cashout_q9 = $this->m_bulan->tampil_cashout_q($tanggal9);
        $cashout_r9 = $this->m_bulan->tampil_cashout_r($tanggal9);
        $cashout_s9 = $this->m_bulan->tampil_cashout_s($tanggal9);
        $cashout_t9 = $this->m_bulan->tampil_cashout_t($tanggal9);
        $cashout_u9 = $this->m_bulan->tampil_cashout_u($tanggal9);
        $cashout_v9 = $this->m_bulan->tampil_cashout_v($tanggal9);
        $cashout_w9 = $this->m_bulan->tampil_cashout_w($tanggal9);
        $cashout_x9 = $this->m_bulan->tampil_cashout_x($tanggal9);
        $cashout_y9 = $this->m_bulan->tampil_cashout_y($tanggal9);
        $cashout_z9 = $this->m_bulan->tampil_cashout_z($tanggal9);
        $cashout_a29 = $this->m_bulan->tampil_cashout_a2($tanggal9);
        $cashout_b29 = $this->m_bulan->tampil_cashout_b2($tanggal9);
        $cashout_c29 = $this->m_bulan->tampil_cashout_c2($tanggal9);
        $cashout_d29 = $this->m_bulan->tampil_cashout_d2($tanggal9);
        $cashout_e29 = $this->m_bulan->tampil_cashout_e2($tanggal9);
        $cashout_f29 = $this->m_bulan->tampil_cashout_f2($tanggal9);
        $cashout_g29 = $this->m_bulan->tampil_cashout_g2($tanggal9);
        $cashout_h29 = $this->m_bulan->tampil_cashout_h2($tanggal9);
        $cashout_i29 = $this->m_bulan->tampil_cashout_i2($tanggal9);
        $cashout_j29 = $this->m_bulan->tampil_cashout_j2($tanggal9);
        $cashout_k29 = $this->m_bulan->tampil_cashout_k2($tanggal9);
        $cashout_l29 = $this->m_bulan->tampil_cashout_l2($tanggal9);
        $cashout_m29 = $this->m_bulan->tampil_cashout_m2($tanggal9);
        $cashout_n29 = $this->m_bulan->tampil_cashout_n2($tanggal9);
        $cashout_o29 = $this->m_bulan->tampil_cashout_o2($tanggal9);
        $cashout_p29 = $this->m_bulan->tampil_cashout_p2($tanggal9);
        $cashout_q29 = $this->m_bulan->tampil_cashout_q2($tanggal9);
        $cashout_r29 = $this->m_bulan->tampil_cashout_r2($tanggal9);
        $cashout_s29 = $this->m_bulan->tampil_cashout_s2($tanggal9);
        $cashout_t29 = $this->m_bulan->tampil_cashout_t2($tanggal9);
        $cashout_u29 = $this->m_bulan->tampil_cashout_u2($tanggal9);
        $cashout_v29 = $this->m_bulan->tampil_cashout_v2($tanggal9);
        $cashout_w29 = $this->m_bulan->tampil_cashout_w2($tanggal9);
        $cashout_x29 = $this->m_bulan->tampil_cashout_x2($tanggal9);
        $cashout_y29 = $this->m_bulan->tampil_cashout_y2($tanggal9);
        $cashout_z29 = $this->m_bulan->tampil_cashout_z2($tanggal9);
        $cashout_a39 = $this->m_bulan->tampil_cashout_a3($tanggal9);
        $cashout_b39 = $this->m_bulan->tampil_cashout_b3($tanggal9);
        $cashout_c39 = $this->m_bulan->tampil_cashout_c3($tanggal9);
        $cashout_d39 = $this->m_bulan->tampil_cashout_d3($tanggal9);
        $cashout_e39 = $this->m_bulan->tampil_cashout_e3($tanggal9);
        $cashout_f39 = $this->m_bulan->tampil_cashout_f3($tanggal9);
        $cashout_g39 = $this->m_bulan->tampil_cashout_g3($tanggal9);
        $cashout_h39 = $this->m_bulan->tampil_cashout_h3($tanggal9);
        $cashout_i39 = $this->m_bulan->tampil_cashout_i3($tanggal9);
        $cashout_j39 = $this->m_bulan->tampil_cashout_j3($tanggal9);
        $cashout_k39 = $this->m_bulan->tampil_cashout_k3($tanggal9);
        $cashout_l39 = $this->m_bulan->tampil_cashout_l3($tanggal9);
        $tCashoutProj_9 = $this->m_bulan->totalCashoutProj($tanggal9);
        $tCashoutReal_9 = $this->m_bulan->totalCashoutReal($tanggal9);

        // CASH-OUT Hari Ke-10
        $cashout_a10 = $this->m_bulan->tampil_cashout_a($tanggal10);
        $cashout_b10 = $this->m_bulan->tampil_cashout_b($tanggal10);
        $cashout_c10 = $this->m_bulan->tampil_cashout_c($tanggal10);
        $cashout_d10 = $this->m_bulan->tampil_cashout_d($tanggal10);
        $cashout_e10 = $this->m_bulan->tampil_cashout_e($tanggal10);
        $cashout_f10 = $this->m_bulan->tampil_cashout_f($tanggal10);
        $cashout_g10 = $this->m_bulan->tampil_cashout_g($tanggal10);
        $cashout_h10 = $this->m_bulan->tampil_cashout_h($tanggal10);
        $cashout_i10 = $this->m_bulan->tampil_cashout_i($tanggal10);
        $cashout_j10 = $this->m_bulan->tampil_cashout_j($tanggal10);
        $cashout_k10 = $this->m_bulan->tampil_cashout_k($tanggal10);
        $cashout_l10 = $this->m_bulan->tampil_cashout_l($tanggal10);
        $cashout_m10 = $this->m_bulan->tampil_cashout_m($tanggal10);
        $cashout_n10 = $this->m_bulan->tampil_cashout_n($tanggal10);
        $cashout_o10 = $this->m_bulan->tampil_cashout_o($tanggal10);
        $cashout_p10 = $this->m_bulan->tampil_cashout_p($tanggal10);
        $cashout_q10 = $this->m_bulan->tampil_cashout_q($tanggal10);
        $cashout_r10 = $this->m_bulan->tampil_cashout_r($tanggal10);
        $cashout_s10 = $this->m_bulan->tampil_cashout_s($tanggal10);
        $cashout_t10 = $this->m_bulan->tampil_cashout_t($tanggal10);
        $cashout_u10 = $this->m_bulan->tampil_cashout_u($tanggal10);
        $cashout_v10 = $this->m_bulan->tampil_cashout_v($tanggal10);
        $cashout_w10 = $this->m_bulan->tampil_cashout_w($tanggal10);
        $cashout_x10 = $this->m_bulan->tampil_cashout_x($tanggal10);
        $cashout_y10 = $this->m_bulan->tampil_cashout_y($tanggal10);
        $cashout_z10 = $this->m_bulan->tampil_cashout_z($tanggal10);
        $cashout_a210 = $this->m_bulan->tampil_cashout_a2($tanggal10);
        $cashout_b210 = $this->m_bulan->tampil_cashout_b2($tanggal10);
        $cashout_c210 = $this->m_bulan->tampil_cashout_c2($tanggal10);
        $cashout_d210 = $this->m_bulan->tampil_cashout_d2($tanggal10);
        $cashout_e210 = $this->m_bulan->tampil_cashout_e2($tanggal10);
        $cashout_f210 = $this->m_bulan->tampil_cashout_f2($tanggal10);
        $cashout_g210 = $this->m_bulan->tampil_cashout_g2($tanggal10);
        $cashout_h210 = $this->m_bulan->tampil_cashout_h2($tanggal10);
        $cashout_i210 = $this->m_bulan->tampil_cashout_i2($tanggal10);
        $cashout_j210 = $this->m_bulan->tampil_cashout_j2($tanggal10);
        $cashout_k210 = $this->m_bulan->tampil_cashout_k2($tanggal10);
        $cashout_l210 = $this->m_bulan->tampil_cashout_l2($tanggal10);
        $cashout_m210 = $this->m_bulan->tampil_cashout_m2($tanggal10);
        $cashout_n210 = $this->m_bulan->tampil_cashout_n2($tanggal10);
        $cashout_o210 = $this->m_bulan->tampil_cashout_o2($tanggal10);
        $cashout_p210 = $this->m_bulan->tampil_cashout_p2($tanggal10);
        $cashout_q210 = $this->m_bulan->tampil_cashout_q2($tanggal10);
        $cashout_r210 = $this->m_bulan->tampil_cashout_r2($tanggal10);
        $cashout_s210 = $this->m_bulan->tampil_cashout_s2($tanggal10);
        $cashout_t210 = $this->m_bulan->tampil_cashout_t2($tanggal10);
        $cashout_u210 = $this->m_bulan->tampil_cashout_u2($tanggal10);
        $cashout_v210 = $this->m_bulan->tampil_cashout_v2($tanggal10);
        $cashout_w210 = $this->m_bulan->tampil_cashout_w2($tanggal10);
        $cashout_x210 = $this->m_bulan->tampil_cashout_x2($tanggal10);
        $cashout_y210 = $this->m_bulan->tampil_cashout_y2($tanggal10);
        $cashout_z210 = $this->m_bulan->tampil_cashout_z2($tanggal10);
        $cashout_a310 = $this->m_bulan->tampil_cashout_a3($tanggal10);
        $cashout_b310 = $this->m_bulan->tampil_cashout_b3($tanggal10);
        $cashout_c310 = $this->m_bulan->tampil_cashout_c3($tanggal10);
        $cashout_d310 = $this->m_bulan->tampil_cashout_d3($tanggal10);
        $cashout_e310 = $this->m_bulan->tampil_cashout_e3($tanggal10);
        $cashout_f310 = $this->m_bulan->tampil_cashout_f3($tanggal10);
        $cashout_g310 = $this->m_bulan->tampil_cashout_g3($tanggal10);
        $cashout_h310 = $this->m_bulan->tampil_cashout_h3($tanggal10);
        $cashout_i310 = $this->m_bulan->tampil_cashout_i3($tanggal10);
        $cashout_j310 = $this->m_bulan->tampil_cashout_j3($tanggal10);
        $cashout_k310 = $this->m_bulan->tampil_cashout_k3($tanggal10);
        $cashout_l310 = $this->m_bulan->tampil_cashout_l3($tanggal10);
        $tCashoutProj_10 = $this->m_bulan->totalCashoutProj($tanggal10);
        $tCashoutReal_10 = $this->m_bulan->totalCashoutReal($tanggal10);

        // CASH-OUT Hari Ke-11
        $cashout_a11 = $this->m_bulan->tampil_cashout_a($tanggal11);
        $cashout_b11 = $this->m_bulan->tampil_cashout_b($tanggal11);
        $cashout_c11 = $this->m_bulan->tampil_cashout_c($tanggal11);
        $cashout_d11 = $this->m_bulan->tampil_cashout_d($tanggal11);
        $cashout_e11 = $this->m_bulan->tampil_cashout_e($tanggal11);
        $cashout_f11 = $this->m_bulan->tampil_cashout_f($tanggal11);
        $cashout_g11 = $this->m_bulan->tampil_cashout_g($tanggal11);
        $cashout_h11 = $this->m_bulan->tampil_cashout_h($tanggal11);
        $cashout_i11 = $this->m_bulan->tampil_cashout_i($tanggal11);
        $cashout_j11 = $this->m_bulan->tampil_cashout_j($tanggal11);
        $cashout_k11 = $this->m_bulan->tampil_cashout_k($tanggal11);
        $cashout_l11 = $this->m_bulan->tampil_cashout_l($tanggal11);
        $cashout_m11 = $this->m_bulan->tampil_cashout_m($tanggal11);
        $cashout_n11 = $this->m_bulan->tampil_cashout_n($tanggal11);
        $cashout_o11 = $this->m_bulan->tampil_cashout_o($tanggal11);
        $cashout_p11 = $this->m_bulan->tampil_cashout_p($tanggal11);
        $cashout_q11 = $this->m_bulan->tampil_cashout_q($tanggal11);
        $cashout_r11 = $this->m_bulan->tampil_cashout_r($tanggal11);
        $cashout_s11 = $this->m_bulan->tampil_cashout_s($tanggal11);
        $cashout_t11 = $this->m_bulan->tampil_cashout_t($tanggal11);
        $cashout_u11 = $this->m_bulan->tampil_cashout_u($tanggal11);
        $cashout_v11 = $this->m_bulan->tampil_cashout_v($tanggal11);
        $cashout_w11 = $this->m_bulan->tampil_cashout_w($tanggal11);
        $cashout_x11 = $this->m_bulan->tampil_cashout_x($tanggal11);
        $cashout_y11 = $this->m_bulan->tampil_cashout_y($tanggal11);
        $cashout_z11 = $this->m_bulan->tampil_cashout_z($tanggal11);
        $cashout_a211 = $this->m_bulan->tampil_cashout_a2($tanggal11);
        $cashout_b211 = $this->m_bulan->tampil_cashout_b2($tanggal11);
        $cashout_c211 = $this->m_bulan->tampil_cashout_c2($tanggal11);
        $cashout_d211 = $this->m_bulan->tampil_cashout_d2($tanggal11);
        $cashout_e211 = $this->m_bulan->tampil_cashout_e2($tanggal11);
        $cashout_f211 = $this->m_bulan->tampil_cashout_f2($tanggal11);
        $cashout_g211 = $this->m_bulan->tampil_cashout_g2($tanggal11);
        $cashout_h211 = $this->m_bulan->tampil_cashout_h2($tanggal11);
        $cashout_i211 = $this->m_bulan->tampil_cashout_i2($tanggal11);
        $cashout_j211 = $this->m_bulan->tampil_cashout_j2($tanggal11);
        $cashout_k211 = $this->m_bulan->tampil_cashout_k2($tanggal11);
        $cashout_l211 = $this->m_bulan->tampil_cashout_l2($tanggal11);
        $cashout_m211 = $this->m_bulan->tampil_cashout_m2($tanggal11);
        $cashout_n211 = $this->m_bulan->tampil_cashout_n2($tanggal11);
        $cashout_o211 = $this->m_bulan->tampil_cashout_o2($tanggal11);
        $cashout_p211 = $this->m_bulan->tampil_cashout_p2($tanggal11);
        $cashout_q211 = $this->m_bulan->tampil_cashout_q2($tanggal11);
        $cashout_r211 = $this->m_bulan->tampil_cashout_r2($tanggal11);
        $cashout_s211 = $this->m_bulan->tampil_cashout_s2($tanggal11);
        $cashout_t211 = $this->m_bulan->tampil_cashout_t2($tanggal11);
        $cashout_u211 = $this->m_bulan->tampil_cashout_u2($tanggal11);
        $cashout_v211 = $this->m_bulan->tampil_cashout_v2($tanggal11);
        $cashout_w211 = $this->m_bulan->tampil_cashout_w2($tanggal11);
        $cashout_x211 = $this->m_bulan->tampil_cashout_x2($tanggal11);
        $cashout_y211 = $this->m_bulan->tampil_cashout_y2($tanggal11);
        $cashout_z211 = $this->m_bulan->tampil_cashout_z2($tanggal11);
        $cashout_a311 = $this->m_bulan->tampil_cashout_a3($tanggal11);
        $cashout_b311 = $this->m_bulan->tampil_cashout_b3($tanggal11);
        $cashout_c311 = $this->m_bulan->tampil_cashout_c3($tanggal11);
        $cashout_d311 = $this->m_bulan->tampil_cashout_d3($tanggal11);
        $cashout_e311 = $this->m_bulan->tampil_cashout_e3($tanggal11);
        $cashout_f311 = $this->m_bulan->tampil_cashout_f3($tanggal11);
        $cashout_g311 = $this->m_bulan->tampil_cashout_g3($tanggal11);
        $cashout_h311 = $this->m_bulan->tampil_cashout_h3($tanggal11);
        $cashout_i311 = $this->m_bulan->tampil_cashout_i3($tanggal11);
        $cashout_j311 = $this->m_bulan->tampil_cashout_j3($tanggal11);
        $cashout_k311 = $this->m_bulan->tampil_cashout_k3($tanggal11);
        $cashout_l311 = $this->m_bulan->tampil_cashout_l3($tanggal11);
        $tCashoutProj_11 = $this->m_bulan->totalCashoutProj($tanggal11);
        $tCashoutReal_11 = $this->m_bulan->totalCashoutReal($tanggal11);

        // CASH-OUT Hari Ke-12
        $cashout_a12 = $this->m_bulan->tampil_cashout_a($tanggal12);
        $cashout_b12 = $this->m_bulan->tampil_cashout_b($tanggal12);
        $cashout_c12 = $this->m_bulan->tampil_cashout_c($tanggal12);
        $cashout_d12 = $this->m_bulan->tampil_cashout_d($tanggal12);
        $cashout_e12 = $this->m_bulan->tampil_cashout_e($tanggal12);
        $cashout_f12 = $this->m_bulan->tampil_cashout_f($tanggal12);
        $cashout_g12 = $this->m_bulan->tampil_cashout_g($tanggal12);
        $cashout_h12 = $this->m_bulan->tampil_cashout_h($tanggal12);
        $cashout_i12 = $this->m_bulan->tampil_cashout_i($tanggal12);
        $cashout_j12 = $this->m_bulan->tampil_cashout_j($tanggal12);
        $cashout_k12 = $this->m_bulan->tampil_cashout_k($tanggal12);
        $cashout_l12 = $this->m_bulan->tampil_cashout_l($tanggal12);
        $cashout_m12 = $this->m_bulan->tampil_cashout_m($tanggal12);
        $cashout_n12 = $this->m_bulan->tampil_cashout_n($tanggal12);
        $cashout_o12 = $this->m_bulan->tampil_cashout_o($tanggal12);
        $cashout_p12 = $this->m_bulan->tampil_cashout_p($tanggal12);
        $cashout_q12 = $this->m_bulan->tampil_cashout_q($tanggal12);
        $cashout_r12 = $this->m_bulan->tampil_cashout_r($tanggal12);
        $cashout_s12 = $this->m_bulan->tampil_cashout_s($tanggal12);
        $cashout_t12 = $this->m_bulan->tampil_cashout_t($tanggal12);
        $cashout_u12 = $this->m_bulan->tampil_cashout_u($tanggal12);
        $cashout_v12 = $this->m_bulan->tampil_cashout_v($tanggal12);
        $cashout_w12 = $this->m_bulan->tampil_cashout_w($tanggal12);
        $cashout_x12 = $this->m_bulan->tampil_cashout_x($tanggal12);
        $cashout_y12 = $this->m_bulan->tampil_cashout_y($tanggal12);
        $cashout_z12 = $this->m_bulan->tampil_cashout_z($tanggal12);
        $cashout_a212 = $this->m_bulan->tampil_cashout_a2($tanggal12);
        $cashout_b212 = $this->m_bulan->tampil_cashout_b2($tanggal12);
        $cashout_c212 = $this->m_bulan->tampil_cashout_c2($tanggal12);
        $cashout_d212 = $this->m_bulan->tampil_cashout_d2($tanggal12);
        $cashout_e212 = $this->m_bulan->tampil_cashout_e2($tanggal12);
        $cashout_f212 = $this->m_bulan->tampil_cashout_f2($tanggal12);
        $cashout_g212 = $this->m_bulan->tampil_cashout_g2($tanggal12);
        $cashout_h212 = $this->m_bulan->tampil_cashout_h2($tanggal12);
        $cashout_i212 = $this->m_bulan->tampil_cashout_i2($tanggal12);
        $cashout_j212 = $this->m_bulan->tampil_cashout_j2($tanggal12);
        $cashout_k212 = $this->m_bulan->tampil_cashout_k2($tanggal12);
        $cashout_l212 = $this->m_bulan->tampil_cashout_l2($tanggal12);
        $cashout_m212 = $this->m_bulan->tampil_cashout_m2($tanggal12);
        $cashout_n212 = $this->m_bulan->tampil_cashout_n2($tanggal12);
        $cashout_o212 = $this->m_bulan->tampil_cashout_o2($tanggal12);
        $cashout_p212 = $this->m_bulan->tampil_cashout_p2($tanggal12);
        $cashout_q212 = $this->m_bulan->tampil_cashout_q2($tanggal12);
        $cashout_r212 = $this->m_bulan->tampil_cashout_r2($tanggal12);
        $cashout_s212 = $this->m_bulan->tampil_cashout_s2($tanggal12);
        $cashout_t212 = $this->m_bulan->tampil_cashout_t2($tanggal12);
        $cashout_u212 = $this->m_bulan->tampil_cashout_u2($tanggal12);
        $cashout_v212 = $this->m_bulan->tampil_cashout_v2($tanggal12);
        $cashout_w212 = $this->m_bulan->tampil_cashout_w2($tanggal12);
        $cashout_x212 = $this->m_bulan->tampil_cashout_x2($tanggal12);
        $cashout_y212 = $this->m_bulan->tampil_cashout_y2($tanggal12);
        $cashout_z212 = $this->m_bulan->tampil_cashout_z2($tanggal12);
        $cashout_a312 = $this->m_bulan->tampil_cashout_a3($tanggal12);
        $cashout_b312 = $this->m_bulan->tampil_cashout_b3($tanggal12);
        $cashout_c312 = $this->m_bulan->tampil_cashout_c3($tanggal12);
        $cashout_d312 = $this->m_bulan->tampil_cashout_d3($tanggal12);
        $cashout_e312 = $this->m_bulan->tampil_cashout_e3($tanggal12);
        $cashout_f312 = $this->m_bulan->tampil_cashout_f3($tanggal12);
        $cashout_g312 = $this->m_bulan->tampil_cashout_g3($tanggal12);
        $cashout_h312 = $this->m_bulan->tampil_cashout_h3($tanggal12);
        $cashout_i312 = $this->m_bulan->tampil_cashout_i3($tanggal12);
        $cashout_j312 = $this->m_bulan->tampil_cashout_j3($tanggal12);
        $cashout_k312 = $this->m_bulan->tampil_cashout_k3($tanggal12);
        $cashout_l312 = $this->m_bulan->tampil_cashout_l3($tanggal12);
        $tCashoutProj_12 = $this->m_bulan->totalCashoutProj($tanggal12);
        $tCashoutReal_12 = $this->m_bulan->totalCashoutReal($tanggal12);

        // CASH-OUT Hari Ke-13
        $cashout_a13 = $this->m_bulan->tampil_cashout_a($tanggal13);
        $cashout_b13 = $this->m_bulan->tampil_cashout_b($tanggal13);
        $cashout_c13 = $this->m_bulan->tampil_cashout_c($tanggal13);
        $cashout_d13 = $this->m_bulan->tampil_cashout_d($tanggal13);
        $cashout_e13 = $this->m_bulan->tampil_cashout_e($tanggal13);
        $cashout_f13 = $this->m_bulan->tampil_cashout_f($tanggal13);
        $cashout_g13 = $this->m_bulan->tampil_cashout_g($tanggal13);
        $cashout_h13 = $this->m_bulan->tampil_cashout_h($tanggal13);
        $cashout_i13 = $this->m_bulan->tampil_cashout_i($tanggal13);
        $cashout_j13 = $this->m_bulan->tampil_cashout_j($tanggal13);
        $cashout_k13 = $this->m_bulan->tampil_cashout_k($tanggal13);
        $cashout_l13 = $this->m_bulan->tampil_cashout_l($tanggal13);
        $cashout_m13 = $this->m_bulan->tampil_cashout_m($tanggal13);
        $cashout_n13 = $this->m_bulan->tampil_cashout_n($tanggal13);
        $cashout_o13 = $this->m_bulan->tampil_cashout_o($tanggal13);
        $cashout_p13 = $this->m_bulan->tampil_cashout_p($tanggal13);
        $cashout_q13 = $this->m_bulan->tampil_cashout_q($tanggal13);
        $cashout_r13 = $this->m_bulan->tampil_cashout_r($tanggal13);
        $cashout_s13 = $this->m_bulan->tampil_cashout_s($tanggal13);
        $cashout_t13 = $this->m_bulan->tampil_cashout_t($tanggal13);
        $cashout_u13 = $this->m_bulan->tampil_cashout_u($tanggal13);
        $cashout_v13 = $this->m_bulan->tampil_cashout_v($tanggal13);
        $cashout_w13 = $this->m_bulan->tampil_cashout_w($tanggal13);
        $cashout_x13 = $this->m_bulan->tampil_cashout_x($tanggal13);
        $cashout_y13 = $this->m_bulan->tampil_cashout_y($tanggal13);
        $cashout_z13 = $this->m_bulan->tampil_cashout_z($tanggal13);
        $cashout_a213 = $this->m_bulan->tampil_cashout_a2($tanggal13);
        $cashout_b213 = $this->m_bulan->tampil_cashout_b2($tanggal13);
        $cashout_c213 = $this->m_bulan->tampil_cashout_c2($tanggal13);
        $cashout_d213 = $this->m_bulan->tampil_cashout_d2($tanggal13);
        $cashout_e213 = $this->m_bulan->tampil_cashout_e2($tanggal13);
        $cashout_f213 = $this->m_bulan->tampil_cashout_f2($tanggal13);
        $cashout_g213 = $this->m_bulan->tampil_cashout_g2($tanggal13);
        $cashout_h213 = $this->m_bulan->tampil_cashout_h2($tanggal13);
        $cashout_i213 = $this->m_bulan->tampil_cashout_i2($tanggal13);
        $cashout_j213 = $this->m_bulan->tampil_cashout_j2($tanggal13);
        $cashout_k213 = $this->m_bulan->tampil_cashout_k2($tanggal13);
        $cashout_l213 = $this->m_bulan->tampil_cashout_l2($tanggal13);
        $cashout_m213 = $this->m_bulan->tampil_cashout_m2($tanggal13);
        $cashout_n213 = $this->m_bulan->tampil_cashout_n2($tanggal13);
        $cashout_o213 = $this->m_bulan->tampil_cashout_o2($tanggal13);
        $cashout_p213 = $this->m_bulan->tampil_cashout_p2($tanggal13);
        $cashout_q213 = $this->m_bulan->tampil_cashout_q2($tanggal13);
        $cashout_r213 = $this->m_bulan->tampil_cashout_r2($tanggal13);
        $cashout_s213 = $this->m_bulan->tampil_cashout_s2($tanggal13);
        $cashout_t213 = $this->m_bulan->tampil_cashout_t2($tanggal13);
        $cashout_u213 = $this->m_bulan->tampil_cashout_u2($tanggal13);
        $cashout_v213 = $this->m_bulan->tampil_cashout_v2($tanggal13);
        $cashout_w213 = $this->m_bulan->tampil_cashout_w2($tanggal13);
        $cashout_x213 = $this->m_bulan->tampil_cashout_x2($tanggal13);
        $cashout_y213 = $this->m_bulan->tampil_cashout_y2($tanggal13);
        $cashout_z213 = $this->m_bulan->tampil_cashout_z2($tanggal13);
        $cashout_a313 = $this->m_bulan->tampil_cashout_a3($tanggal13);
        $cashout_b313 = $this->m_bulan->tampil_cashout_b3($tanggal13);
        $cashout_c313 = $this->m_bulan->tampil_cashout_c3($tanggal13);
        $cashout_d313 = $this->m_bulan->tampil_cashout_d3($tanggal13);
        $cashout_e313 = $this->m_bulan->tampil_cashout_e3($tanggal13);
        $cashout_f313 = $this->m_bulan->tampil_cashout_f3($tanggal13);
        $cashout_g313 = $this->m_bulan->tampil_cashout_g3($tanggal13);
        $cashout_h313 = $this->m_bulan->tampil_cashout_h3($tanggal13);
        $cashout_i313 = $this->m_bulan->tampil_cashout_i3($tanggal13);
        $cashout_j313 = $this->m_bulan->tampil_cashout_j3($tanggal13);
        $cashout_k313 = $this->m_bulan->tampil_cashout_k3($tanggal13);
        $cashout_l313 = $this->m_bulan->tampil_cashout_l3($tanggal13);
        $tCashoutProj_13 = $this->m_bulan->totalCashoutProj($tanggal13);
        $tCashoutReal_13 = $this->m_bulan->totalCashoutReal($tanggal13);

        // CASH-OUT Hari Ke-14
        $cashout_a14 = $this->m_bulan->tampil_cashout_a($tanggal14);
        $cashout_b14 = $this->m_bulan->tampil_cashout_b($tanggal14);
        $cashout_c14 = $this->m_bulan->tampil_cashout_c($tanggal14);
        $cashout_d14 = $this->m_bulan->tampil_cashout_d($tanggal14);
        $cashout_e14 = $this->m_bulan->tampil_cashout_e($tanggal14);
        $cashout_f14 = $this->m_bulan->tampil_cashout_f($tanggal14);
        $cashout_g14 = $this->m_bulan->tampil_cashout_g($tanggal14);
        $cashout_h14 = $this->m_bulan->tampil_cashout_h($tanggal14);
        $cashout_i14 = $this->m_bulan->tampil_cashout_i($tanggal14);
        $cashout_j14 = $this->m_bulan->tampil_cashout_j($tanggal14);
        $cashout_k14 = $this->m_bulan->tampil_cashout_k($tanggal14);
        $cashout_l14 = $this->m_bulan->tampil_cashout_l($tanggal14);
        $cashout_m14 = $this->m_bulan->tampil_cashout_m($tanggal14);
        $cashout_n14 = $this->m_bulan->tampil_cashout_n($tanggal14);
        $cashout_o14 = $this->m_bulan->tampil_cashout_o($tanggal14);
        $cashout_p14 = $this->m_bulan->tampil_cashout_p($tanggal14);
        $cashout_q14 = $this->m_bulan->tampil_cashout_q($tanggal14);
        $cashout_r14 = $this->m_bulan->tampil_cashout_r($tanggal14);
        $cashout_s14 = $this->m_bulan->tampil_cashout_s($tanggal14);
        $cashout_t14 = $this->m_bulan->tampil_cashout_t($tanggal14);
        $cashout_u14 = $this->m_bulan->tampil_cashout_u($tanggal14);
        $cashout_v14 = $this->m_bulan->tampil_cashout_v($tanggal14);
        $cashout_w14 = $this->m_bulan->tampil_cashout_w($tanggal14);
        $cashout_x14 = $this->m_bulan->tampil_cashout_x($tanggal14);
        $cashout_y14 = $this->m_bulan->tampil_cashout_y($tanggal14);
        $cashout_z14 = $this->m_bulan->tampil_cashout_z($tanggal14);
        $cashout_a214 = $this->m_bulan->tampil_cashout_a2($tanggal14);
        $cashout_b214 = $this->m_bulan->tampil_cashout_b2($tanggal14);
        $cashout_c214 = $this->m_bulan->tampil_cashout_c2($tanggal14);
        $cashout_d214 = $this->m_bulan->tampil_cashout_d2($tanggal14);
        $cashout_e214 = $this->m_bulan->tampil_cashout_e2($tanggal14);
        $cashout_f214 = $this->m_bulan->tampil_cashout_f2($tanggal14);
        $cashout_g214 = $this->m_bulan->tampil_cashout_g2($tanggal14);
        $cashout_h214 = $this->m_bulan->tampil_cashout_h2($tanggal14);
        $cashout_i214 = $this->m_bulan->tampil_cashout_i2($tanggal14);
        $cashout_j214 = $this->m_bulan->tampil_cashout_j2($tanggal14);
        $cashout_k214 = $this->m_bulan->tampil_cashout_k2($tanggal14);
        $cashout_l214 = $this->m_bulan->tampil_cashout_l2($tanggal14);
        $cashout_m214 = $this->m_bulan->tampil_cashout_m2($tanggal14);
        $cashout_n214 = $this->m_bulan->tampil_cashout_n2($tanggal14);
        $cashout_o214 = $this->m_bulan->tampil_cashout_o2($tanggal14);
        $cashout_p214 = $this->m_bulan->tampil_cashout_p2($tanggal14);
        $cashout_q214 = $this->m_bulan->tampil_cashout_q2($tanggal14);
        $cashout_r214 = $this->m_bulan->tampil_cashout_r2($tanggal14);
        $cashout_s214 = $this->m_bulan->tampil_cashout_s2($tanggal14);
        $cashout_t214 = $this->m_bulan->tampil_cashout_t2($tanggal14);
        $cashout_u214 = $this->m_bulan->tampil_cashout_u2($tanggal14);
        $cashout_v214 = $this->m_bulan->tampil_cashout_v2($tanggal14);
        $cashout_w214 = $this->m_bulan->tampil_cashout_w2($tanggal14);
        $cashout_x214 = $this->m_bulan->tampil_cashout_x2($tanggal14);
        $cashout_y214 = $this->m_bulan->tampil_cashout_y2($tanggal14);
        $cashout_z214 = $this->m_bulan->tampil_cashout_z2($tanggal14);
        $cashout_a314 = $this->m_bulan->tampil_cashout_a3($tanggal14);
        $cashout_b314 = $this->m_bulan->tampil_cashout_b3($tanggal14);
        $cashout_c314 = $this->m_bulan->tampil_cashout_c3($tanggal14);
        $cashout_d314 = $this->m_bulan->tampil_cashout_d3($tanggal14);
        $cashout_e314 = $this->m_bulan->tampil_cashout_e3($tanggal14);
        $cashout_f314 = $this->m_bulan->tampil_cashout_f3($tanggal14);
        $cashout_g314 = $this->m_bulan->tampil_cashout_g3($tanggal14);
        $cashout_h314 = $this->m_bulan->tampil_cashout_h3($tanggal14);
        $cashout_i314 = $this->m_bulan->tampil_cashout_i3($tanggal14);
        $cashout_j314 = $this->m_bulan->tampil_cashout_j3($tanggal14);
        $cashout_k314 = $this->m_bulan->tampil_cashout_k3($tanggal14);
        $cashout_l314 = $this->m_bulan->tampil_cashout_l3($tanggal14);
        $tCashoutProj_14 = $this->m_bulan->totalCashoutProj($tanggal14);
        $tCashoutReal_14 = $this->m_bulan->totalCashoutReal($tanggal14);

        // CASH-OUT Hari Ke-15
        $cashout_a15 = $this->m_bulan->tampil_cashout_a($tanggal15);
        $cashout_b15 = $this->m_bulan->tampil_cashout_b($tanggal15);
        $cashout_c15 = $this->m_bulan->tampil_cashout_c($tanggal15);
        $cashout_d15 = $this->m_bulan->tampil_cashout_d($tanggal15);
        $cashout_e15 = $this->m_bulan->tampil_cashout_e($tanggal15);
        $cashout_f15 = $this->m_bulan->tampil_cashout_f($tanggal15);
        $cashout_g15 = $this->m_bulan->tampil_cashout_g($tanggal15);
        $cashout_h15 = $this->m_bulan->tampil_cashout_h($tanggal15);
        $cashout_i15 = $this->m_bulan->tampil_cashout_i($tanggal15);
        $cashout_j15 = $this->m_bulan->tampil_cashout_j($tanggal15);
        $cashout_k15 = $this->m_bulan->tampil_cashout_k($tanggal15);
        $cashout_l15 = $this->m_bulan->tampil_cashout_l($tanggal15);
        $cashout_m15 = $this->m_bulan->tampil_cashout_m($tanggal15);
        $cashout_n15 = $this->m_bulan->tampil_cashout_n($tanggal15);
        $cashout_o15 = $this->m_bulan->tampil_cashout_o($tanggal15);
        $cashout_p15 = $this->m_bulan->tampil_cashout_p($tanggal15);
        $cashout_q15 = $this->m_bulan->tampil_cashout_q($tanggal15);
        $cashout_r15 = $this->m_bulan->tampil_cashout_r($tanggal15);
        $cashout_s15 = $this->m_bulan->tampil_cashout_s($tanggal15);
        $cashout_t15 = $this->m_bulan->tampil_cashout_t($tanggal15);
        $cashout_u15 = $this->m_bulan->tampil_cashout_u($tanggal15);
        $cashout_v15 = $this->m_bulan->tampil_cashout_v($tanggal15);
        $cashout_w15 = $this->m_bulan->tampil_cashout_w($tanggal15);
        $cashout_x15 = $this->m_bulan->tampil_cashout_x($tanggal15);
        $cashout_y15 = $this->m_bulan->tampil_cashout_y($tanggal15);
        $cashout_z15 = $this->m_bulan->tampil_cashout_z($tanggal15);
        $cashout_a215 = $this->m_bulan->tampil_cashout_a2($tanggal15);
        $cashout_b215 = $this->m_bulan->tampil_cashout_b2($tanggal15);
        $cashout_c215 = $this->m_bulan->tampil_cashout_c2($tanggal15);
        $cashout_d215 = $this->m_bulan->tampil_cashout_d2($tanggal15);
        $cashout_e215 = $this->m_bulan->tampil_cashout_e2($tanggal15);
        $cashout_f215 = $this->m_bulan->tampil_cashout_f2($tanggal15);
        $cashout_g215 = $this->m_bulan->tampil_cashout_g2($tanggal15);
        $cashout_h215 = $this->m_bulan->tampil_cashout_h2($tanggal15);
        $cashout_i215 = $this->m_bulan->tampil_cashout_i2($tanggal15);
        $cashout_j215 = $this->m_bulan->tampil_cashout_j2($tanggal15);
        $cashout_k215 = $this->m_bulan->tampil_cashout_k2($tanggal15);
        $cashout_l215 = $this->m_bulan->tampil_cashout_l2($tanggal15);
        $cashout_m215 = $this->m_bulan->tampil_cashout_m2($tanggal15);
        $cashout_n215 = $this->m_bulan->tampil_cashout_n2($tanggal15);
        $cashout_o215 = $this->m_bulan->tampil_cashout_o2($tanggal15);
        $cashout_p215 = $this->m_bulan->tampil_cashout_p2($tanggal15);
        $cashout_q215 = $this->m_bulan->tampil_cashout_q2($tanggal15);
        $cashout_r215 = $this->m_bulan->tampil_cashout_r2($tanggal15);
        $cashout_s215 = $this->m_bulan->tampil_cashout_s2($tanggal15);
        $cashout_t215 = $this->m_bulan->tampil_cashout_t2($tanggal15);
        $cashout_u215 = $this->m_bulan->tampil_cashout_u2($tanggal15);
        $cashout_v215 = $this->m_bulan->tampil_cashout_v2($tanggal15);
        $cashout_w215 = $this->m_bulan->tampil_cashout_w2($tanggal15);
        $cashout_x215 = $this->m_bulan->tampil_cashout_x2($tanggal15);
        $cashout_y215 = $this->m_bulan->tampil_cashout_y2($tanggal15);
        $cashout_z215 = $this->m_bulan->tampil_cashout_z2($tanggal15);
        $cashout_a315 = $this->m_bulan->tampil_cashout_a3($tanggal15);
        $cashout_b315 = $this->m_bulan->tampil_cashout_b3($tanggal15);
        $cashout_c315 = $this->m_bulan->tampil_cashout_c3($tanggal15);
        $cashout_d315 = $this->m_bulan->tampil_cashout_d3($tanggal15);
        $cashout_e315 = $this->m_bulan->tampil_cashout_e3($tanggal15);
        $cashout_f315 = $this->m_bulan->tampil_cashout_f3($tanggal15);
        $cashout_g315 = $this->m_bulan->tampil_cashout_g3($tanggal15);
        $cashout_h315 = $this->m_bulan->tampil_cashout_h3($tanggal15);
        $cashout_i315 = $this->m_bulan->tampil_cashout_i3($tanggal15);
        $cashout_j315 = $this->m_bulan->tampil_cashout_j3($tanggal15);
        $cashout_k315 = $this->m_bulan->tampil_cashout_k3($tanggal15);
        $cashout_l315 = $this->m_bulan->tampil_cashout_l3($tanggal15);
        $tCashoutProj_15 = $this->m_bulan->totalCashoutProj($tanggal15);
        $tCashoutReal_15 = $this->m_bulan->totalCashoutReal($tanggal15);

        // CASH-OUT Hari Ke-16
        $cashout_a16 = $this->m_bulan->tampil_cashout_a($tanggal16);
        $cashout_b16 = $this->m_bulan->tampil_cashout_b($tanggal16);
        $cashout_c16 = $this->m_bulan->tampil_cashout_c($tanggal16);
        $cashout_d16 = $this->m_bulan->tampil_cashout_d($tanggal16);
        $cashout_e16 = $this->m_bulan->tampil_cashout_e($tanggal16);
        $cashout_f16 = $this->m_bulan->tampil_cashout_f($tanggal16);
        $cashout_g16 = $this->m_bulan->tampil_cashout_g($tanggal16);
        $cashout_h16 = $this->m_bulan->tampil_cashout_h($tanggal16);
        $cashout_i16 = $this->m_bulan->tampil_cashout_i($tanggal16);
        $cashout_j16 = $this->m_bulan->tampil_cashout_j($tanggal16);
        $cashout_k16 = $this->m_bulan->tampil_cashout_k($tanggal16);
        $cashout_l16 = $this->m_bulan->tampil_cashout_l($tanggal16);
        $cashout_m16 = $this->m_bulan->tampil_cashout_m($tanggal16);
        $cashout_n16 = $this->m_bulan->tampil_cashout_n($tanggal16);
        $cashout_o16 = $this->m_bulan->tampil_cashout_o($tanggal16);
        $cashout_p16 = $this->m_bulan->tampil_cashout_p($tanggal16);
        $cashout_q16 = $this->m_bulan->tampil_cashout_q($tanggal16);
        $cashout_r16 = $this->m_bulan->tampil_cashout_r($tanggal16);
        $cashout_s16 = $this->m_bulan->tampil_cashout_s($tanggal16);
        $cashout_t16 = $this->m_bulan->tampil_cashout_t($tanggal16);
        $cashout_u16 = $this->m_bulan->tampil_cashout_u($tanggal16);
        $cashout_v16 = $this->m_bulan->tampil_cashout_v($tanggal16);
        $cashout_w16 = $this->m_bulan->tampil_cashout_w($tanggal16);
        $cashout_x16 = $this->m_bulan->tampil_cashout_x($tanggal16);
        $cashout_y16 = $this->m_bulan->tampil_cashout_y($tanggal16);
        $cashout_z16 = $this->m_bulan->tampil_cashout_z($tanggal16);
        $cashout_a216 = $this->m_bulan->tampil_cashout_a2($tanggal16);
        $cashout_b216 = $this->m_bulan->tampil_cashout_b2($tanggal16);
        $cashout_c216 = $this->m_bulan->tampil_cashout_c2($tanggal16);
        $cashout_d216 = $this->m_bulan->tampil_cashout_d2($tanggal16);
        $cashout_e216 = $this->m_bulan->tampil_cashout_e2($tanggal16);
        $cashout_f216 = $this->m_bulan->tampil_cashout_f2($tanggal16);
        $cashout_g216 = $this->m_bulan->tampil_cashout_g2($tanggal16);
        $cashout_h216 = $this->m_bulan->tampil_cashout_h2($tanggal16);
        $cashout_i216 = $this->m_bulan->tampil_cashout_i2($tanggal16);
        $cashout_j216 = $this->m_bulan->tampil_cashout_j2($tanggal16);
        $cashout_k216 = $this->m_bulan->tampil_cashout_k2($tanggal16);
        $cashout_l216 = $this->m_bulan->tampil_cashout_l2($tanggal16);
        $cashout_m216 = $this->m_bulan->tampil_cashout_m2($tanggal16);
        $cashout_n216 = $this->m_bulan->tampil_cashout_n2($tanggal16);
        $cashout_o216 = $this->m_bulan->tampil_cashout_o2($tanggal16);
        $cashout_p216 = $this->m_bulan->tampil_cashout_p2($tanggal16);
        $cashout_q216 = $this->m_bulan->tampil_cashout_q2($tanggal16);
        $cashout_r216 = $this->m_bulan->tampil_cashout_r2($tanggal16);
        $cashout_s216 = $this->m_bulan->tampil_cashout_s2($tanggal16);
        $cashout_t216 = $this->m_bulan->tampil_cashout_t2($tanggal16);
        $cashout_u216 = $this->m_bulan->tampil_cashout_u2($tanggal16);
        $cashout_v216 = $this->m_bulan->tampil_cashout_v2($tanggal16);
        $cashout_w216 = $this->m_bulan->tampil_cashout_w2($tanggal16);
        $cashout_x216 = $this->m_bulan->tampil_cashout_x2($tanggal16);
        $cashout_y216 = $this->m_bulan->tampil_cashout_y2($tanggal16);
        $cashout_z216 = $this->m_bulan->tampil_cashout_z2($tanggal16);
        $cashout_a316 = $this->m_bulan->tampil_cashout_a3($tanggal16);
        $cashout_b316 = $this->m_bulan->tampil_cashout_b3($tanggal16);
        $cashout_c316 = $this->m_bulan->tampil_cashout_c3($tanggal16);
        $cashout_d316 = $this->m_bulan->tampil_cashout_d3($tanggal16);
        $cashout_e316 = $this->m_bulan->tampil_cashout_e3($tanggal16);
        $cashout_f316 = $this->m_bulan->tampil_cashout_f3($tanggal16);
        $cashout_g316 = $this->m_bulan->tampil_cashout_g3($tanggal16);
        $cashout_h316 = $this->m_bulan->tampil_cashout_h3($tanggal16);
        $cashout_i316 = $this->m_bulan->tampil_cashout_i3($tanggal16);
        $cashout_j316 = $this->m_bulan->tampil_cashout_j3($tanggal16);
        $cashout_k316 = $this->m_bulan->tampil_cashout_k3($tanggal16);
        $cashout_l316 = $this->m_bulan->tampil_cashout_l3($tanggal16);
        $tCashoutProj_16 = $this->m_bulan->totalCashoutProj($tanggal16);
        $tCashoutReal_16 = $this->m_bulan->totalCashoutReal($tanggal16);

        // CASH-OUT Hari Ke-17
        $cashout_a17 = $this->m_bulan->tampil_cashout_a($tanggal17);
        $cashout_b17 = $this->m_bulan->tampil_cashout_b($tanggal17);
        $cashout_c17 = $this->m_bulan->tampil_cashout_c($tanggal17);
        $cashout_d17 = $this->m_bulan->tampil_cashout_d($tanggal17);
        $cashout_e17 = $this->m_bulan->tampil_cashout_e($tanggal17);
        $cashout_f17 = $this->m_bulan->tampil_cashout_f($tanggal17);
        $cashout_g17 = $this->m_bulan->tampil_cashout_g($tanggal17);
        $cashout_h17 = $this->m_bulan->tampil_cashout_h($tanggal17);
        $cashout_i17 = $this->m_bulan->tampil_cashout_i($tanggal17);
        $cashout_j17 = $this->m_bulan->tampil_cashout_j($tanggal17);
        $cashout_k17 = $this->m_bulan->tampil_cashout_k($tanggal17);
        $cashout_l17 = $this->m_bulan->tampil_cashout_l($tanggal17);
        $cashout_m17 = $this->m_bulan->tampil_cashout_m($tanggal17);
        $cashout_n17 = $this->m_bulan->tampil_cashout_n($tanggal17);
        $cashout_o17 = $this->m_bulan->tampil_cashout_o($tanggal17);
        $cashout_p17 = $this->m_bulan->tampil_cashout_p($tanggal17);
        $cashout_q17 = $this->m_bulan->tampil_cashout_q($tanggal17);
        $cashout_r17 = $this->m_bulan->tampil_cashout_r($tanggal17);
        $cashout_s17 = $this->m_bulan->tampil_cashout_s($tanggal17);
        $cashout_t17 = $this->m_bulan->tampil_cashout_t($tanggal17);
        $cashout_u17 = $this->m_bulan->tampil_cashout_u($tanggal17);
        $cashout_v17 = $this->m_bulan->tampil_cashout_v($tanggal17);
        $cashout_w17 = $this->m_bulan->tampil_cashout_w($tanggal17);
        $cashout_x17 = $this->m_bulan->tampil_cashout_x($tanggal17);
        $cashout_y17 = $this->m_bulan->tampil_cashout_y($tanggal17);
        $cashout_z17 = $this->m_bulan->tampil_cashout_z($tanggal17);
        $cashout_a217 = $this->m_bulan->tampil_cashout_a2($tanggal17);
        $cashout_b217 = $this->m_bulan->tampil_cashout_b2($tanggal17);
        $cashout_c217 = $this->m_bulan->tampil_cashout_c2($tanggal17);
        $cashout_d217 = $this->m_bulan->tampil_cashout_d2($tanggal17);
        $cashout_e217 = $this->m_bulan->tampil_cashout_e2($tanggal17);
        $cashout_f217 = $this->m_bulan->tampil_cashout_f2($tanggal17);
        $cashout_g217 = $this->m_bulan->tampil_cashout_g2($tanggal17);
        $cashout_h217 = $this->m_bulan->tampil_cashout_h2($tanggal17);
        $cashout_i217 = $this->m_bulan->tampil_cashout_i2($tanggal17);
        $cashout_j217 = $this->m_bulan->tampil_cashout_j2($tanggal17);
        $cashout_k217 = $this->m_bulan->tampil_cashout_k2($tanggal17);
        $cashout_l217 = $this->m_bulan->tampil_cashout_l2($tanggal17);
        $cashout_m217 = $this->m_bulan->tampil_cashout_m2($tanggal17);
        $cashout_n217 = $this->m_bulan->tampil_cashout_n2($tanggal17);
        $cashout_o217 = $this->m_bulan->tampil_cashout_o2($tanggal17);
        $cashout_p217 = $this->m_bulan->tampil_cashout_p2($tanggal17);
        $cashout_q217 = $this->m_bulan->tampil_cashout_q2($tanggal17);
        $cashout_r217 = $this->m_bulan->tampil_cashout_r2($tanggal17);
        $cashout_s217 = $this->m_bulan->tampil_cashout_s2($tanggal17);
        $cashout_t217 = $this->m_bulan->tampil_cashout_t2($tanggal17);
        $cashout_u217 = $this->m_bulan->tampil_cashout_u2($tanggal17);
        $cashout_v217 = $this->m_bulan->tampil_cashout_v2($tanggal17);
        $cashout_w217 = $this->m_bulan->tampil_cashout_w2($tanggal17);
        $cashout_x217 = $this->m_bulan->tampil_cashout_x2($tanggal17);
        $cashout_y217 = $this->m_bulan->tampil_cashout_y2($tanggal17);
        $cashout_z217 = $this->m_bulan->tampil_cashout_z2($tanggal17);
        $cashout_a317 = $this->m_bulan->tampil_cashout_a3($tanggal17);
        $cashout_b317 = $this->m_bulan->tampil_cashout_b3($tanggal17);
        $cashout_c317 = $this->m_bulan->tampil_cashout_c3($tanggal17);
        $cashout_d317 = $this->m_bulan->tampil_cashout_d3($tanggal17);
        $cashout_e317 = $this->m_bulan->tampil_cashout_e3($tanggal17);
        $cashout_f317 = $this->m_bulan->tampil_cashout_f3($tanggal17);
        $cashout_g317 = $this->m_bulan->tampil_cashout_g3($tanggal17);
        $cashout_h317 = $this->m_bulan->tampil_cashout_h3($tanggal17);
        $cashout_i317 = $this->m_bulan->tampil_cashout_i3($tanggal17);
        $cashout_j317 = $this->m_bulan->tampil_cashout_j3($tanggal17);
        $cashout_k317 = $this->m_bulan->tampil_cashout_k3($tanggal17);
        $cashout_l317 = $this->m_bulan->tampil_cashout_l3($tanggal17);
        $tCashoutProj_17 = $this->m_bulan->totalCashoutProj($tanggal17);
        $tCashoutReal_17 = $this->m_bulan->totalCashoutReal($tanggal17);

        // CASH-OUT Hari Ke-18
        $cashout_a18 = $this->m_bulan->tampil_cashout_a($tanggal18);
        $cashout_b18 = $this->m_bulan->tampil_cashout_b($tanggal18);
        $cashout_c18 = $this->m_bulan->tampil_cashout_c($tanggal18);
        $cashout_d18 = $this->m_bulan->tampil_cashout_d($tanggal18);
        $cashout_e18 = $this->m_bulan->tampil_cashout_e($tanggal18);
        $cashout_f18 = $this->m_bulan->tampil_cashout_f($tanggal18);
        $cashout_g18 = $this->m_bulan->tampil_cashout_g($tanggal18);
        $cashout_h18 = $this->m_bulan->tampil_cashout_h($tanggal18);
        $cashout_i18 = $this->m_bulan->tampil_cashout_i($tanggal18);
        $cashout_j18 = $this->m_bulan->tampil_cashout_j($tanggal18);
        $cashout_k18 = $this->m_bulan->tampil_cashout_k($tanggal18);
        $cashout_l18 = $this->m_bulan->tampil_cashout_l($tanggal18);
        $cashout_m18 = $this->m_bulan->tampil_cashout_m($tanggal18);
        $cashout_n18 = $this->m_bulan->tampil_cashout_n($tanggal18);
        $cashout_o18 = $this->m_bulan->tampil_cashout_o($tanggal18);
        $cashout_p18 = $this->m_bulan->tampil_cashout_p($tanggal18);
        $cashout_q18 = $this->m_bulan->tampil_cashout_q($tanggal18);
        $cashout_r18 = $this->m_bulan->tampil_cashout_r($tanggal18);
        $cashout_s18 = $this->m_bulan->tampil_cashout_s($tanggal18);
        $cashout_t18 = $this->m_bulan->tampil_cashout_t($tanggal18);
        $cashout_u18 = $this->m_bulan->tampil_cashout_u($tanggal18);
        $cashout_v18 = $this->m_bulan->tampil_cashout_v($tanggal18);
        $cashout_w18 = $this->m_bulan->tampil_cashout_w($tanggal18);
        $cashout_x18 = $this->m_bulan->tampil_cashout_x($tanggal18);
        $cashout_y18 = $this->m_bulan->tampil_cashout_y($tanggal18);
        $cashout_z18 = $this->m_bulan->tampil_cashout_z($tanggal18);
        $cashout_a218 = $this->m_bulan->tampil_cashout_a2($tanggal18);
        $cashout_b218 = $this->m_bulan->tampil_cashout_b2($tanggal18);
        $cashout_c218 = $this->m_bulan->tampil_cashout_c2($tanggal18);
        $cashout_d218 = $this->m_bulan->tampil_cashout_d2($tanggal18);
        $cashout_e218 = $this->m_bulan->tampil_cashout_e2($tanggal18);
        $cashout_f218 = $this->m_bulan->tampil_cashout_f2($tanggal18);
        $cashout_g218 = $this->m_bulan->tampil_cashout_g2($tanggal18);
        $cashout_h218 = $this->m_bulan->tampil_cashout_h2($tanggal18);
        $cashout_i218 = $this->m_bulan->tampil_cashout_i2($tanggal18);
        $cashout_j218 = $this->m_bulan->tampil_cashout_j2($tanggal18);
        $cashout_k218 = $this->m_bulan->tampil_cashout_k2($tanggal18);
        $cashout_l218 = $this->m_bulan->tampil_cashout_l2($tanggal18);
        $cashout_m218 = $this->m_bulan->tampil_cashout_m2($tanggal18);
        $cashout_n218 = $this->m_bulan->tampil_cashout_n2($tanggal18);
        $cashout_o218 = $this->m_bulan->tampil_cashout_o2($tanggal18);
        $cashout_p218 = $this->m_bulan->tampil_cashout_p2($tanggal18);
        $cashout_q218 = $this->m_bulan->tampil_cashout_q2($tanggal18);
        $cashout_r218 = $this->m_bulan->tampil_cashout_r2($tanggal18);
        $cashout_s218 = $this->m_bulan->tampil_cashout_s2($tanggal18);
        $cashout_t218 = $this->m_bulan->tampil_cashout_t2($tanggal18);
        $cashout_u218 = $this->m_bulan->tampil_cashout_u2($tanggal18);
        $cashout_v218 = $this->m_bulan->tampil_cashout_v2($tanggal18);
        $cashout_w218 = $this->m_bulan->tampil_cashout_w2($tanggal18);
        $cashout_x218 = $this->m_bulan->tampil_cashout_x2($tanggal18);
        $cashout_y218 = $this->m_bulan->tampil_cashout_y2($tanggal18);
        $cashout_z218 = $this->m_bulan->tampil_cashout_z2($tanggal18);
        $cashout_a318 = $this->m_bulan->tampil_cashout_a3($tanggal18);
        $cashout_b318 = $this->m_bulan->tampil_cashout_b3($tanggal18);
        $cashout_c318 = $this->m_bulan->tampil_cashout_c3($tanggal18);
        $cashout_d318 = $this->m_bulan->tampil_cashout_d3($tanggal18);
        $cashout_e318 = $this->m_bulan->tampil_cashout_e3($tanggal18);
        $cashout_f318 = $this->m_bulan->tampil_cashout_f3($tanggal18);
        $cashout_g318 = $this->m_bulan->tampil_cashout_g3($tanggal18);
        $cashout_h318 = $this->m_bulan->tampil_cashout_h3($tanggal18);
        $cashout_i318 = $this->m_bulan->tampil_cashout_i3($tanggal18);
        $cashout_j318 = $this->m_bulan->tampil_cashout_j3($tanggal18);
        $cashout_k318 = $this->m_bulan->tampil_cashout_k3($tanggal18);
        $cashout_l318 = $this->m_bulan->tampil_cashout_l3($tanggal18);
        $tCashoutProj_18 = $this->m_bulan->totalCashoutProj($tanggal18);
        $tCashoutReal_18 = $this->m_bulan->totalCashoutReal($tanggal18);

        // CASH-OUT Hari Ke-19
        $cashout_a19 = $this->m_bulan->tampil_cashout_a($tanggal19);
        $cashout_b19 = $this->m_bulan->tampil_cashout_b($tanggal19);
        $cashout_c19 = $this->m_bulan->tampil_cashout_c($tanggal19);
        $cashout_d19 = $this->m_bulan->tampil_cashout_d($tanggal19);
        $cashout_e19 = $this->m_bulan->tampil_cashout_e($tanggal19);
        $cashout_f19 = $this->m_bulan->tampil_cashout_f($tanggal19);
        $cashout_g19 = $this->m_bulan->tampil_cashout_g($tanggal19);
        $cashout_h19 = $this->m_bulan->tampil_cashout_h($tanggal19);
        $cashout_i19 = $this->m_bulan->tampil_cashout_i($tanggal19);
        $cashout_j19 = $this->m_bulan->tampil_cashout_j($tanggal19);
        $cashout_k19 = $this->m_bulan->tampil_cashout_k($tanggal19);
        $cashout_l19 = $this->m_bulan->tampil_cashout_l($tanggal19);
        $cashout_m19 = $this->m_bulan->tampil_cashout_m($tanggal19);
        $cashout_n19 = $this->m_bulan->tampil_cashout_n($tanggal19);
        $cashout_o19 = $this->m_bulan->tampil_cashout_o($tanggal19);
        $cashout_p19 = $this->m_bulan->tampil_cashout_p($tanggal19);
        $cashout_q19 = $this->m_bulan->tampil_cashout_q($tanggal19);
        $cashout_r19 = $this->m_bulan->tampil_cashout_r($tanggal19);
        $cashout_s19 = $this->m_bulan->tampil_cashout_s($tanggal19);
        $cashout_t19 = $this->m_bulan->tampil_cashout_t($tanggal19);
        $cashout_u19 = $this->m_bulan->tampil_cashout_u($tanggal19);
        $cashout_v19 = $this->m_bulan->tampil_cashout_v($tanggal19);
        $cashout_w19 = $this->m_bulan->tampil_cashout_w($tanggal19);
        $cashout_x19 = $this->m_bulan->tampil_cashout_x($tanggal19);
        $cashout_y19 = $this->m_bulan->tampil_cashout_y($tanggal19);
        $cashout_z19 = $this->m_bulan->tampil_cashout_z($tanggal19);
        $cashout_a219 = $this->m_bulan->tampil_cashout_a2($tanggal19);
        $cashout_b219 = $this->m_bulan->tampil_cashout_b2($tanggal19);
        $cashout_c219 = $this->m_bulan->tampil_cashout_c2($tanggal19);
        $cashout_d219 = $this->m_bulan->tampil_cashout_d2($tanggal19);
        $cashout_e219 = $this->m_bulan->tampil_cashout_e2($tanggal19);
        $cashout_f219 = $this->m_bulan->tampil_cashout_f2($tanggal19);
        $cashout_g219 = $this->m_bulan->tampil_cashout_g2($tanggal19);
        $cashout_h219 = $this->m_bulan->tampil_cashout_h2($tanggal19);
        $cashout_i219 = $this->m_bulan->tampil_cashout_i2($tanggal19);
        $cashout_j219 = $this->m_bulan->tampil_cashout_j2($tanggal19);
        $cashout_k219 = $this->m_bulan->tampil_cashout_k2($tanggal19);
        $cashout_l219 = $this->m_bulan->tampil_cashout_l2($tanggal19);
        $cashout_m219 = $this->m_bulan->tampil_cashout_m2($tanggal19);
        $cashout_n219 = $this->m_bulan->tampil_cashout_n2($tanggal19);
        $cashout_o219 = $this->m_bulan->tampil_cashout_o2($tanggal19);
        $cashout_p219 = $this->m_bulan->tampil_cashout_p2($tanggal19);
        $cashout_q219 = $this->m_bulan->tampil_cashout_q2($tanggal19);
        $cashout_r219 = $this->m_bulan->tampil_cashout_r2($tanggal19);
        $cashout_s219 = $this->m_bulan->tampil_cashout_s2($tanggal19);
        $cashout_t219 = $this->m_bulan->tampil_cashout_t2($tanggal19);
        $cashout_u219 = $this->m_bulan->tampil_cashout_u2($tanggal19);
        $cashout_v219 = $this->m_bulan->tampil_cashout_v2($tanggal19);
        $cashout_w219 = $this->m_bulan->tampil_cashout_w2($tanggal19);
        $cashout_x219 = $this->m_bulan->tampil_cashout_x2($tanggal19);
        $cashout_y219 = $this->m_bulan->tampil_cashout_y2($tanggal19);
        $cashout_z219 = $this->m_bulan->tampil_cashout_z2($tanggal19);
        $cashout_a319 = $this->m_bulan->tampil_cashout_a3($tanggal19);
        $cashout_b319 = $this->m_bulan->tampil_cashout_b3($tanggal19);
        $cashout_c319 = $this->m_bulan->tampil_cashout_c3($tanggal19);
        $cashout_d319 = $this->m_bulan->tampil_cashout_d3($tanggal19);
        $cashout_e319 = $this->m_bulan->tampil_cashout_e3($tanggal19);
        $cashout_f319 = $this->m_bulan->tampil_cashout_f3($tanggal19);
        $cashout_g319 = $this->m_bulan->tampil_cashout_g3($tanggal19);
        $cashout_h319 = $this->m_bulan->tampil_cashout_h3($tanggal19);
        $cashout_i319 = $this->m_bulan->tampil_cashout_i3($tanggal19);
        $cashout_j319 = $this->m_bulan->tampil_cashout_j3($tanggal19);
        $cashout_k319 = $this->m_bulan->tampil_cashout_k3($tanggal19);
        $cashout_l319 = $this->m_bulan->tampil_cashout_l3($tanggal19);
        $tCashoutProj_19 = $this->m_bulan->totalCashoutProj($tanggal19);
        $tCashoutReal_19 = $this->m_bulan->totalCashoutReal($tanggal19);

        // CASH-OUT Hari Ke-20
        $cashout_a20 = $this->m_bulan->tampil_cashout_a($tanggal20);
        $cashout_b20 = $this->m_bulan->tampil_cashout_b($tanggal20);
        $cashout_c20 = $this->m_bulan->tampil_cashout_c($tanggal20);
        $cashout_d20 = $this->m_bulan->tampil_cashout_d($tanggal20);
        $cashout_e20 = $this->m_bulan->tampil_cashout_e($tanggal20);
        $cashout_f20 = $this->m_bulan->tampil_cashout_f($tanggal20);
        $cashout_g20 = $this->m_bulan->tampil_cashout_g($tanggal20);
        $cashout_h20 = $this->m_bulan->tampil_cashout_h($tanggal20);
        $cashout_i20 = $this->m_bulan->tampil_cashout_i($tanggal20);
        $cashout_j20 = $this->m_bulan->tampil_cashout_j($tanggal20);
        $cashout_k20 = $this->m_bulan->tampil_cashout_k($tanggal20);
        $cashout_l20 = $this->m_bulan->tampil_cashout_l($tanggal20);
        $cashout_m20 = $this->m_bulan->tampil_cashout_m($tanggal20);
        $cashout_n20 = $this->m_bulan->tampil_cashout_n($tanggal20);
        $cashout_o20 = $this->m_bulan->tampil_cashout_o($tanggal20);
        $cashout_p20 = $this->m_bulan->tampil_cashout_p($tanggal20);
        $cashout_q20 = $this->m_bulan->tampil_cashout_q($tanggal20);
        $cashout_r20 = $this->m_bulan->tampil_cashout_r($tanggal20);
        $cashout_s20 = $this->m_bulan->tampil_cashout_s($tanggal20);
        $cashout_t20 = $this->m_bulan->tampil_cashout_t($tanggal20);
        $cashout_u20 = $this->m_bulan->tampil_cashout_u($tanggal20);
        $cashout_v20 = $this->m_bulan->tampil_cashout_v($tanggal20);
        $cashout_w20 = $this->m_bulan->tampil_cashout_w($tanggal20);
        $cashout_x20 = $this->m_bulan->tampil_cashout_x($tanggal20);
        $cashout_y20 = $this->m_bulan->tampil_cashout_y($tanggal20);
        $cashout_z20 = $this->m_bulan->tampil_cashout_z($tanggal20);
        $cashout_a220 = $this->m_bulan->tampil_cashout_a2($tanggal20);
        $cashout_b220 = $this->m_bulan->tampil_cashout_b2($tanggal20);
        $cashout_c220 = $this->m_bulan->tampil_cashout_c2($tanggal20);
        $cashout_d220 = $this->m_bulan->tampil_cashout_d2($tanggal20);
        $cashout_e220 = $this->m_bulan->tampil_cashout_e2($tanggal20);
        $cashout_f220 = $this->m_bulan->tampil_cashout_f2($tanggal20);
        $cashout_g220 = $this->m_bulan->tampil_cashout_g2($tanggal20);
        $cashout_h220 = $this->m_bulan->tampil_cashout_h2($tanggal20);
        $cashout_i220 = $this->m_bulan->tampil_cashout_i2($tanggal20);
        $cashout_j220 = $this->m_bulan->tampil_cashout_j2($tanggal20);
        $cashout_k220 = $this->m_bulan->tampil_cashout_k2($tanggal20);
        $cashout_l220 = $this->m_bulan->tampil_cashout_l2($tanggal20);
        $cashout_m220 = $this->m_bulan->tampil_cashout_m2($tanggal20);
        $cashout_n220 = $this->m_bulan->tampil_cashout_n2($tanggal20);
        $cashout_o220 = $this->m_bulan->tampil_cashout_o2($tanggal20);
        $cashout_p220 = $this->m_bulan->tampil_cashout_p2($tanggal20);
        $cashout_q220 = $this->m_bulan->tampil_cashout_q2($tanggal20);
        $cashout_r220 = $this->m_bulan->tampil_cashout_r2($tanggal20);
        $cashout_s220 = $this->m_bulan->tampil_cashout_s2($tanggal20);
        $cashout_t220 = $this->m_bulan->tampil_cashout_t2($tanggal20);
        $cashout_u220 = $this->m_bulan->tampil_cashout_u2($tanggal20);
        $cashout_v220 = $this->m_bulan->tampil_cashout_v2($tanggal20);
        $cashout_w220 = $this->m_bulan->tampil_cashout_w2($tanggal20);
        $cashout_x220 = $this->m_bulan->tampil_cashout_x2($tanggal20);
        $cashout_y220 = $this->m_bulan->tampil_cashout_y2($tanggal20);
        $cashout_z220 = $this->m_bulan->tampil_cashout_z2($tanggal20);
        $cashout_a320 = $this->m_bulan->tampil_cashout_a3($tanggal20);
        $cashout_b320 = $this->m_bulan->tampil_cashout_b3($tanggal20);
        $cashout_c320 = $this->m_bulan->tampil_cashout_c3($tanggal20);
        $cashout_d320 = $this->m_bulan->tampil_cashout_d3($tanggal20);
        $cashout_e320 = $this->m_bulan->tampil_cashout_e3($tanggal20);
        $cashout_f320 = $this->m_bulan->tampil_cashout_f3($tanggal20);
        $cashout_g320 = $this->m_bulan->tampil_cashout_g3($tanggal20);
        $cashout_h320 = $this->m_bulan->tampil_cashout_h3($tanggal20);
        $cashout_i320 = $this->m_bulan->tampil_cashout_i3($tanggal20);
        $cashout_j320 = $this->m_bulan->tampil_cashout_j3($tanggal20);
        $cashout_k320 = $this->m_bulan->tampil_cashout_k3($tanggal20);
        $cashout_l320 = $this->m_bulan->tampil_cashout_l3($tanggal20);
        $tCashoutProj_20 = $this->m_bulan->totalCashoutProj($tanggal20);
        $tCashoutReal_20 = $this->m_bulan->totalCashoutReal($tanggal20);

        // CASH-OUT Hari Ke-21
        $cashout_a21 = $this->m_bulan->tampil_cashout_a($tanggal21);
        $cashout_b21 = $this->m_bulan->tampil_cashout_b($tanggal21);
        $cashout_c21 = $this->m_bulan->tampil_cashout_c($tanggal21);
        $cashout_d21 = $this->m_bulan->tampil_cashout_d($tanggal21);
        $cashout_e21 = $this->m_bulan->tampil_cashout_e($tanggal21);
        $cashout_f21 = $this->m_bulan->tampil_cashout_f($tanggal21);
        $cashout_g21 = $this->m_bulan->tampil_cashout_g($tanggal21);
        $cashout_h21 = $this->m_bulan->tampil_cashout_h($tanggal21);
        $cashout_i21 = $this->m_bulan->tampil_cashout_i($tanggal21);
        $cashout_j21 = $this->m_bulan->tampil_cashout_j($tanggal21);
        $cashout_k21 = $this->m_bulan->tampil_cashout_k($tanggal21);
        $cashout_l21 = $this->m_bulan->tampil_cashout_l($tanggal21);
        $cashout_m21 = $this->m_bulan->tampil_cashout_m($tanggal21);
        $cashout_n21 = $this->m_bulan->tampil_cashout_n($tanggal21);
        $cashout_o21 = $this->m_bulan->tampil_cashout_o($tanggal21);
        $cashout_p21 = $this->m_bulan->tampil_cashout_p($tanggal21);
        $cashout_q21 = $this->m_bulan->tampil_cashout_q($tanggal21);
        $cashout_r21 = $this->m_bulan->tampil_cashout_r($tanggal21);
        $cashout_s21 = $this->m_bulan->tampil_cashout_s($tanggal21);
        $cashout_t21 = $this->m_bulan->tampil_cashout_t($tanggal21);
        $cashout_u21 = $this->m_bulan->tampil_cashout_u($tanggal21);
        $cashout_v21 = $this->m_bulan->tampil_cashout_v($tanggal21);
        $cashout_w21 = $this->m_bulan->tampil_cashout_w($tanggal21);
        $cashout_x21 = $this->m_bulan->tampil_cashout_x($tanggal21);
        $cashout_y21 = $this->m_bulan->tampil_cashout_y($tanggal21);
        $cashout_z21 = $this->m_bulan->tampil_cashout_z($tanggal21);
        $cashout_a221 = $this->m_bulan->tampil_cashout_a2($tanggal21);
        $cashout_b221 = $this->m_bulan->tampil_cashout_b2($tanggal21);
        $cashout_c221 = $this->m_bulan->tampil_cashout_c2($tanggal21);
        $cashout_d221 = $this->m_bulan->tampil_cashout_d2($tanggal21);
        $cashout_e221 = $this->m_bulan->tampil_cashout_e2($tanggal21);
        $cashout_f221 = $this->m_bulan->tampil_cashout_f2($tanggal21);
        $cashout_g221 = $this->m_bulan->tampil_cashout_g2($tanggal21);
        $cashout_h221 = $this->m_bulan->tampil_cashout_h2($tanggal21);
        $cashout_i221 = $this->m_bulan->tampil_cashout_i2($tanggal21);
        $cashout_j221 = $this->m_bulan->tampil_cashout_j2($tanggal21);
        $cashout_k221 = $this->m_bulan->tampil_cashout_k2($tanggal21);
        $cashout_l221 = $this->m_bulan->tampil_cashout_l2($tanggal21);
        $cashout_m221 = $this->m_bulan->tampil_cashout_m2($tanggal21);
        $cashout_n221 = $this->m_bulan->tampil_cashout_n2($tanggal21);
        $cashout_o221 = $this->m_bulan->tampil_cashout_o2($tanggal21);
        $cashout_p221 = $this->m_bulan->tampil_cashout_p2($tanggal21);
        $cashout_q221 = $this->m_bulan->tampil_cashout_q2($tanggal21);
        $cashout_r221 = $this->m_bulan->tampil_cashout_r2($tanggal21);
        $cashout_s221 = $this->m_bulan->tampil_cashout_s2($tanggal21);
        $cashout_t221 = $this->m_bulan->tampil_cashout_t2($tanggal21);
        $cashout_u221 = $this->m_bulan->tampil_cashout_u2($tanggal21);
        $cashout_v221 = $this->m_bulan->tampil_cashout_v2($tanggal21);
        $cashout_w221 = $this->m_bulan->tampil_cashout_w2($tanggal21);
        $cashout_x221 = $this->m_bulan->tampil_cashout_x2($tanggal21);
        $cashout_y221 = $this->m_bulan->tampil_cashout_y2($tanggal21);
        $cashout_z221 = $this->m_bulan->tampil_cashout_z2($tanggal21);
        $cashout_a321 = $this->m_bulan->tampil_cashout_a3($tanggal21);
        $cashout_b321 = $this->m_bulan->tampil_cashout_b3($tanggal21);
        $cashout_c321 = $this->m_bulan->tampil_cashout_c3($tanggal21);
        $cashout_d321 = $this->m_bulan->tampil_cashout_d3($tanggal21);
        $cashout_e321 = $this->m_bulan->tampil_cashout_e3($tanggal21);
        $cashout_f321 = $this->m_bulan->tampil_cashout_f3($tanggal21);
        $cashout_g321 = $this->m_bulan->tampil_cashout_g3($tanggal21);
        $cashout_h321 = $this->m_bulan->tampil_cashout_h3($tanggal21);
        $cashout_i321 = $this->m_bulan->tampil_cashout_i3($tanggal21);
        $cashout_j321 = $this->m_bulan->tampil_cashout_j3($tanggal21);
        $cashout_k321 = $this->m_bulan->tampil_cashout_k3($tanggal21);
        $cashout_l321 = $this->m_bulan->tampil_cashout_l3($tanggal21);
        $tCashoutProj_21 = $this->m_bulan->totalCashoutProj($tanggal21);
        $tCashoutReal_21 = $this->m_bulan->totalCashoutReal($tanggal21);

        // CASH-OUT Hari Ke-22
        $cashout_a22 = $this->m_bulan->tampil_cashout_a($tanggal22);
        $cashout_b22 = $this->m_bulan->tampil_cashout_b($tanggal22);
        $cashout_c22 = $this->m_bulan->tampil_cashout_c($tanggal22);
        $cashout_d22 = $this->m_bulan->tampil_cashout_d($tanggal22);
        $cashout_e22 = $this->m_bulan->tampil_cashout_e($tanggal22);
        $cashout_f22 = $this->m_bulan->tampil_cashout_f($tanggal22);
        $cashout_g22 = $this->m_bulan->tampil_cashout_g($tanggal22);
        $cashout_h22 = $this->m_bulan->tampil_cashout_h($tanggal22);
        $cashout_i22 = $this->m_bulan->tampil_cashout_i($tanggal22);
        $cashout_j22 = $this->m_bulan->tampil_cashout_j($tanggal22);
        $cashout_k22 = $this->m_bulan->tampil_cashout_k($tanggal22);
        $cashout_l22 = $this->m_bulan->tampil_cashout_l($tanggal22);
        $cashout_m22 = $this->m_bulan->tampil_cashout_m($tanggal22);
        $cashout_n22 = $this->m_bulan->tampil_cashout_n($tanggal22);
        $cashout_o22 = $this->m_bulan->tampil_cashout_o($tanggal22);
        $cashout_p22 = $this->m_bulan->tampil_cashout_p($tanggal22);
        $cashout_q22 = $this->m_bulan->tampil_cashout_q($tanggal22);
        $cashout_r22 = $this->m_bulan->tampil_cashout_r($tanggal22);
        $cashout_s22 = $this->m_bulan->tampil_cashout_s($tanggal22);
        $cashout_t22 = $this->m_bulan->tampil_cashout_t($tanggal22);
        $cashout_u22 = $this->m_bulan->tampil_cashout_u($tanggal22);
        $cashout_v22 = $this->m_bulan->tampil_cashout_v($tanggal22);
        $cashout_w22 = $this->m_bulan->tampil_cashout_w($tanggal22);
        $cashout_x22 = $this->m_bulan->tampil_cashout_x($tanggal22);
        $cashout_y22 = $this->m_bulan->tampil_cashout_y($tanggal22);
        $cashout_z22 = $this->m_bulan->tampil_cashout_z($tanggal22);
        $cashout_a222 = $this->m_bulan->tampil_cashout_a2($tanggal22);
        $cashout_b222 = $this->m_bulan->tampil_cashout_b2($tanggal22);
        $cashout_c222 = $this->m_bulan->tampil_cashout_c2($tanggal22);
        $cashout_d222 = $this->m_bulan->tampil_cashout_d2($tanggal22);
        $cashout_e222 = $this->m_bulan->tampil_cashout_e2($tanggal22);
        $cashout_f222 = $this->m_bulan->tampil_cashout_f2($tanggal22);
        $cashout_g222 = $this->m_bulan->tampil_cashout_g2($tanggal22);
        $cashout_h222 = $this->m_bulan->tampil_cashout_h2($tanggal22);
        $cashout_i222 = $this->m_bulan->tampil_cashout_i2($tanggal22);
        $cashout_j222 = $this->m_bulan->tampil_cashout_j2($tanggal22);
        $cashout_k222 = $this->m_bulan->tampil_cashout_k2($tanggal22);
        $cashout_l222 = $this->m_bulan->tampil_cashout_l2($tanggal22);
        $cashout_m222 = $this->m_bulan->tampil_cashout_m2($tanggal22);
        $cashout_n222 = $this->m_bulan->tampil_cashout_n2($tanggal22);
        $cashout_o222 = $this->m_bulan->tampil_cashout_o2($tanggal22);
        $cashout_p222 = $this->m_bulan->tampil_cashout_p2($tanggal22);
        $cashout_q222 = $this->m_bulan->tampil_cashout_q2($tanggal22);
        $cashout_r222 = $this->m_bulan->tampil_cashout_r2($tanggal22);
        $cashout_s222 = $this->m_bulan->tampil_cashout_s2($tanggal22);
        $cashout_t222 = $this->m_bulan->tampil_cashout_t2($tanggal22);
        $cashout_u222 = $this->m_bulan->tampil_cashout_u2($tanggal22);
        $cashout_v222 = $this->m_bulan->tampil_cashout_v2($tanggal22);
        $cashout_w222 = $this->m_bulan->tampil_cashout_w2($tanggal22);
        $cashout_x222 = $this->m_bulan->tampil_cashout_x2($tanggal22);
        $cashout_y222 = $this->m_bulan->tampil_cashout_y2($tanggal22);
        $cashout_z222 = $this->m_bulan->tampil_cashout_z2($tanggal22);
        $cashout_a322 = $this->m_bulan->tampil_cashout_a3($tanggal22);
        $cashout_b322 = $this->m_bulan->tampil_cashout_b3($tanggal22);
        $cashout_c322 = $this->m_bulan->tampil_cashout_c3($tanggal22);
        $cashout_d322 = $this->m_bulan->tampil_cashout_d3($tanggal22);
        $cashout_e322 = $this->m_bulan->tampil_cashout_e3($tanggal22);
        $cashout_f322 = $this->m_bulan->tampil_cashout_f3($tanggal22);
        $cashout_g322 = $this->m_bulan->tampil_cashout_g3($tanggal22);
        $cashout_h322 = $this->m_bulan->tampil_cashout_h3($tanggal22);
        $cashout_i322 = $this->m_bulan->tampil_cashout_i3($tanggal22);
        $cashout_j322 = $this->m_bulan->tampil_cashout_j3($tanggal22);
        $cashout_k322 = $this->m_bulan->tampil_cashout_k3($tanggal22);
        $cashout_l322 = $this->m_bulan->tampil_cashout_l3($tanggal22);
        $tCashoutProj_22 = $this->m_bulan->totalCashoutProj($tanggal22);
        $tCashoutReal_22 = $this->m_bulan->totalCashoutReal($tanggal22);

        // CASH-OUT Hari Ke-23
        $cashout_a23 = $this->m_bulan->tampil_cashout_a($tanggal23);
        $cashout_b23 = $this->m_bulan->tampil_cashout_b($tanggal23);
        $cashout_c23 = $this->m_bulan->tampil_cashout_c($tanggal23);
        $cashout_d23 = $this->m_bulan->tampil_cashout_d($tanggal23);
        $cashout_e23 = $this->m_bulan->tampil_cashout_e($tanggal23);
        $cashout_f23 = $this->m_bulan->tampil_cashout_f($tanggal23);
        $cashout_g23 = $this->m_bulan->tampil_cashout_g($tanggal23);
        $cashout_h23 = $this->m_bulan->tampil_cashout_h($tanggal23);
        $cashout_i23 = $this->m_bulan->tampil_cashout_i($tanggal23);
        $cashout_j23 = $this->m_bulan->tampil_cashout_j($tanggal23);
        $cashout_k23 = $this->m_bulan->tampil_cashout_k($tanggal23);
        $cashout_l23 = $this->m_bulan->tampil_cashout_l($tanggal23);
        $cashout_m23 = $this->m_bulan->tampil_cashout_m($tanggal23);
        $cashout_n23 = $this->m_bulan->tampil_cashout_n($tanggal23);
        $cashout_o23 = $this->m_bulan->tampil_cashout_o($tanggal23);
        $cashout_p23 = $this->m_bulan->tampil_cashout_p($tanggal23);
        $cashout_q23 = $this->m_bulan->tampil_cashout_q($tanggal23);
        $cashout_r23 = $this->m_bulan->tampil_cashout_r($tanggal23);
        $cashout_s23 = $this->m_bulan->tampil_cashout_s($tanggal23);
        $cashout_t23 = $this->m_bulan->tampil_cashout_t($tanggal23);
        $cashout_u23 = $this->m_bulan->tampil_cashout_u($tanggal23);
        $cashout_v23 = $this->m_bulan->tampil_cashout_v($tanggal23);
        $cashout_w23 = $this->m_bulan->tampil_cashout_w($tanggal23);
        $cashout_x23 = $this->m_bulan->tampil_cashout_x($tanggal23);
        $cashout_y23 = $this->m_bulan->tampil_cashout_y($tanggal23);
        $cashout_z23 = $this->m_bulan->tampil_cashout_z($tanggal23);
        $cashout_a223 = $this->m_bulan->tampil_cashout_a2($tanggal23);
        $cashout_b223 = $this->m_bulan->tampil_cashout_b2($tanggal23);
        $cashout_c223 = $this->m_bulan->tampil_cashout_c2($tanggal23);
        $cashout_d223 = $this->m_bulan->tampil_cashout_d2($tanggal23);
        $cashout_e223 = $this->m_bulan->tampil_cashout_e2($tanggal23);
        $cashout_f223 = $this->m_bulan->tampil_cashout_f2($tanggal23);
        $cashout_g223 = $this->m_bulan->tampil_cashout_g2($tanggal23);
        $cashout_h223 = $this->m_bulan->tampil_cashout_h2($tanggal23);
        $cashout_i223 = $this->m_bulan->tampil_cashout_i2($tanggal23);
        $cashout_j223 = $this->m_bulan->tampil_cashout_j2($tanggal23);
        $cashout_k223 = $this->m_bulan->tampil_cashout_k2($tanggal23);
        $cashout_l223 = $this->m_bulan->tampil_cashout_l2($tanggal23);
        $cashout_m223 = $this->m_bulan->tampil_cashout_m2($tanggal23);
        $cashout_n223 = $this->m_bulan->tampil_cashout_n2($tanggal23);
        $cashout_o223 = $this->m_bulan->tampil_cashout_o2($tanggal23);
        $cashout_p223 = $this->m_bulan->tampil_cashout_p2($tanggal23);
        $cashout_q223 = $this->m_bulan->tampil_cashout_q2($tanggal23);
        $cashout_r223 = $this->m_bulan->tampil_cashout_r2($tanggal23);
        $cashout_s223 = $this->m_bulan->tampil_cashout_s2($tanggal23);
        $cashout_t223 = $this->m_bulan->tampil_cashout_t2($tanggal23);
        $cashout_u223 = $this->m_bulan->tampil_cashout_u2($tanggal23);
        $cashout_v223 = $this->m_bulan->tampil_cashout_v2($tanggal23);
        $cashout_w223 = $this->m_bulan->tampil_cashout_w2($tanggal23);
        $cashout_x223 = $this->m_bulan->tampil_cashout_x2($tanggal23);
        $cashout_y223 = $this->m_bulan->tampil_cashout_y2($tanggal23);
        $cashout_z223 = $this->m_bulan->tampil_cashout_z2($tanggal23);
        $cashout_a323 = $this->m_bulan->tampil_cashout_a3($tanggal23);
        $cashout_b323 = $this->m_bulan->tampil_cashout_b3($tanggal23);
        $cashout_c323 = $this->m_bulan->tampil_cashout_c3($tanggal23);
        $cashout_d323 = $this->m_bulan->tampil_cashout_d3($tanggal23);
        $cashout_e323 = $this->m_bulan->tampil_cashout_e3($tanggal23);
        $cashout_f323 = $this->m_bulan->tampil_cashout_f3($tanggal23);
        $cashout_g323 = $this->m_bulan->tampil_cashout_g3($tanggal23);
        $cashout_h323 = $this->m_bulan->tampil_cashout_h3($tanggal23);
        $cashout_i323 = $this->m_bulan->tampil_cashout_i3($tanggal23);
        $cashout_j323 = $this->m_bulan->tampil_cashout_j3($tanggal23);
        $cashout_k323 = $this->m_bulan->tampil_cashout_k3($tanggal23);
        $cashout_l323 = $this->m_bulan->tampil_cashout_l3($tanggal23);
        $tCashoutProj_23 = $this->m_bulan->totalCashoutProj($tanggal23);
        $tCashoutReal_23 = $this->m_bulan->totalCashoutReal($tanggal23);

        // CASH-OUT Hari Ke-24
        $cashout_a24 = $this->m_bulan->tampil_cashout_a($tanggal24);
        $cashout_b24 = $this->m_bulan->tampil_cashout_b($tanggal24);
        $cashout_c24 = $this->m_bulan->tampil_cashout_c($tanggal24);
        $cashout_d24 = $this->m_bulan->tampil_cashout_d($tanggal24);
        $cashout_e24 = $this->m_bulan->tampil_cashout_e($tanggal24);
        $cashout_f24 = $this->m_bulan->tampil_cashout_f($tanggal24);
        $cashout_g24 = $this->m_bulan->tampil_cashout_g($tanggal24);
        $cashout_h24 = $this->m_bulan->tampil_cashout_h($tanggal24);
        $cashout_i24 = $this->m_bulan->tampil_cashout_i($tanggal24);
        $cashout_j24 = $this->m_bulan->tampil_cashout_j($tanggal24);
        $cashout_k24 = $this->m_bulan->tampil_cashout_k($tanggal24);
        $cashout_l24 = $this->m_bulan->tampil_cashout_l($tanggal24);
        $cashout_m24 = $this->m_bulan->tampil_cashout_m($tanggal24);
        $cashout_n24 = $this->m_bulan->tampil_cashout_n($tanggal24);
        $cashout_o24 = $this->m_bulan->tampil_cashout_o($tanggal24);
        $cashout_p24 = $this->m_bulan->tampil_cashout_p($tanggal24);
        $cashout_q24 = $this->m_bulan->tampil_cashout_q($tanggal24);
        $cashout_r24 = $this->m_bulan->tampil_cashout_r($tanggal24);
        $cashout_s24 = $this->m_bulan->tampil_cashout_s($tanggal24);
        $cashout_t24 = $this->m_bulan->tampil_cashout_t($tanggal24);
        $cashout_u24 = $this->m_bulan->tampil_cashout_u($tanggal24);
        $cashout_v24 = $this->m_bulan->tampil_cashout_v($tanggal24);
        $cashout_w24 = $this->m_bulan->tampil_cashout_w($tanggal24);
        $cashout_x24 = $this->m_bulan->tampil_cashout_x($tanggal24);
        $cashout_y24 = $this->m_bulan->tampil_cashout_y($tanggal24);
        $cashout_z24 = $this->m_bulan->tampil_cashout_z($tanggal24);
        $cashout_a224 = $this->m_bulan->tampil_cashout_a2($tanggal24);
        $cashout_b224 = $this->m_bulan->tampil_cashout_b2($tanggal24);
        $cashout_c224 = $this->m_bulan->tampil_cashout_c2($tanggal24);
        $cashout_d224 = $this->m_bulan->tampil_cashout_d2($tanggal24);
        $cashout_e224 = $this->m_bulan->tampil_cashout_e2($tanggal24);
        $cashout_f224 = $this->m_bulan->tampil_cashout_f2($tanggal24);
        $cashout_g224 = $this->m_bulan->tampil_cashout_g2($tanggal24);
        $cashout_h224 = $this->m_bulan->tampil_cashout_h2($tanggal24);
        $cashout_i224 = $this->m_bulan->tampil_cashout_i2($tanggal24);
        $cashout_j224 = $this->m_bulan->tampil_cashout_j2($tanggal24);
        $cashout_k224 = $this->m_bulan->tampil_cashout_k2($tanggal24);
        $cashout_l224 = $this->m_bulan->tampil_cashout_l2($tanggal24);
        $cashout_m224 = $this->m_bulan->tampil_cashout_m2($tanggal24);
        $cashout_n224 = $this->m_bulan->tampil_cashout_n2($tanggal24);
        $cashout_o224 = $this->m_bulan->tampil_cashout_o2($tanggal24);
        $cashout_p224 = $this->m_bulan->tampil_cashout_p2($tanggal24);
        $cashout_q224 = $this->m_bulan->tampil_cashout_q2($tanggal24);
        $cashout_r224 = $this->m_bulan->tampil_cashout_r2($tanggal24);
        $cashout_s224 = $this->m_bulan->tampil_cashout_s2($tanggal24);
        $cashout_t224 = $this->m_bulan->tampil_cashout_t2($tanggal24);
        $cashout_u224 = $this->m_bulan->tampil_cashout_u2($tanggal24);
        $cashout_v224 = $this->m_bulan->tampil_cashout_v2($tanggal24);
        $cashout_w224 = $this->m_bulan->tampil_cashout_w2($tanggal24);
        $cashout_x224 = $this->m_bulan->tampil_cashout_x2($tanggal24);
        $cashout_y224 = $this->m_bulan->tampil_cashout_y2($tanggal24);
        $cashout_z224 = $this->m_bulan->tampil_cashout_z2($tanggal24);
        $cashout_a324 = $this->m_bulan->tampil_cashout_a3($tanggal24);
        $cashout_b324 = $this->m_bulan->tampil_cashout_b3($tanggal24);
        $cashout_c324 = $this->m_bulan->tampil_cashout_c3($tanggal24);
        $cashout_d324 = $this->m_bulan->tampil_cashout_d3($tanggal24);
        $cashout_e324 = $this->m_bulan->tampil_cashout_e3($tanggal24);
        $cashout_f324 = $this->m_bulan->tampil_cashout_f3($tanggal24);
        $cashout_g324 = $this->m_bulan->tampil_cashout_g3($tanggal24);
        $cashout_h324 = $this->m_bulan->tampil_cashout_h3($tanggal24);
        $cashout_i324 = $this->m_bulan->tampil_cashout_i3($tanggal24);
        $cashout_j324 = $this->m_bulan->tampil_cashout_j3($tanggal24);
        $cashout_k324 = $this->m_bulan->tampil_cashout_k3($tanggal24);
        $cashout_l324 = $this->m_bulan->tampil_cashout_l3($tanggal24);
        $tCashoutProj_24 = $this->m_bulan->totalCashoutProj($tanggal24);
        $tCashoutReal_24 = $this->m_bulan->totalCashoutReal($tanggal24);

        // CASH-OUT Hari Ke-25
        $cashout_a25 = $this->m_bulan->tampil_cashout_a($tanggal25);
        $cashout_b25 = $this->m_bulan->tampil_cashout_b($tanggal25);
        $cashout_c25 = $this->m_bulan->tampil_cashout_c($tanggal25);
        $cashout_d25 = $this->m_bulan->tampil_cashout_d($tanggal25);
        $cashout_e25 = $this->m_bulan->tampil_cashout_e($tanggal25);
        $cashout_f25 = $this->m_bulan->tampil_cashout_f($tanggal25);
        $cashout_g25 = $this->m_bulan->tampil_cashout_g($tanggal25);
        $cashout_h25 = $this->m_bulan->tampil_cashout_h($tanggal25);
        $cashout_i25 = $this->m_bulan->tampil_cashout_i($tanggal25);
        $cashout_j25 = $this->m_bulan->tampil_cashout_j($tanggal25);
        $cashout_k25 = $this->m_bulan->tampil_cashout_k($tanggal25);
        $cashout_l25 = $this->m_bulan->tampil_cashout_l($tanggal25);
        $cashout_m25 = $this->m_bulan->tampil_cashout_m($tanggal25);
        $cashout_n25 = $this->m_bulan->tampil_cashout_n($tanggal25);
        $cashout_o25 = $this->m_bulan->tampil_cashout_o($tanggal25);
        $cashout_p25 = $this->m_bulan->tampil_cashout_p($tanggal25);
        $cashout_q25 = $this->m_bulan->tampil_cashout_q($tanggal25);
        $cashout_r25 = $this->m_bulan->tampil_cashout_r($tanggal25);
        $cashout_s25 = $this->m_bulan->tampil_cashout_s($tanggal25);
        $cashout_t25 = $this->m_bulan->tampil_cashout_t($tanggal25);
        $cashout_u25 = $this->m_bulan->tampil_cashout_u($tanggal25);
        $cashout_v25 = $this->m_bulan->tampil_cashout_v($tanggal25);
        $cashout_w25 = $this->m_bulan->tampil_cashout_w($tanggal25);
        $cashout_x25 = $this->m_bulan->tampil_cashout_x($tanggal25);
        $cashout_y25 = $this->m_bulan->tampil_cashout_y($tanggal25);
        $cashout_z25 = $this->m_bulan->tampil_cashout_z($tanggal25);
        $cashout_a225 = $this->m_bulan->tampil_cashout_a2($tanggal25);
        $cashout_b225 = $this->m_bulan->tampil_cashout_b2($tanggal25);
        $cashout_c225 = $this->m_bulan->tampil_cashout_c2($tanggal25);
        $cashout_d225 = $this->m_bulan->tampil_cashout_d2($tanggal25);
        $cashout_e225 = $this->m_bulan->tampil_cashout_e2($tanggal25);
        $cashout_f225 = $this->m_bulan->tampil_cashout_f2($tanggal25);
        $cashout_g225 = $this->m_bulan->tampil_cashout_g2($tanggal25);
        $cashout_h225 = $this->m_bulan->tampil_cashout_h2($tanggal25);
        $cashout_i225 = $this->m_bulan->tampil_cashout_i2($tanggal25);
        $cashout_j225 = $this->m_bulan->tampil_cashout_j2($tanggal25);
        $cashout_k225 = $this->m_bulan->tampil_cashout_k2($tanggal25);
        $cashout_l225 = $this->m_bulan->tampil_cashout_l2($tanggal25);
        $cashout_m225 = $this->m_bulan->tampil_cashout_m2($tanggal25);
        $cashout_n225 = $this->m_bulan->tampil_cashout_n2($tanggal25);
        $cashout_o225 = $this->m_bulan->tampil_cashout_o2($tanggal25);
        $cashout_p225 = $this->m_bulan->tampil_cashout_p2($tanggal25);
        $cashout_q225 = $this->m_bulan->tampil_cashout_q2($tanggal25);
        $cashout_r225 = $this->m_bulan->tampil_cashout_r2($tanggal25);
        $cashout_s225 = $this->m_bulan->tampil_cashout_s2($tanggal25);
        $cashout_t225 = $this->m_bulan->tampil_cashout_t2($tanggal25);
        $cashout_u225 = $this->m_bulan->tampil_cashout_u2($tanggal25);
        $cashout_v225 = $this->m_bulan->tampil_cashout_v2($tanggal25);
        $cashout_w225 = $this->m_bulan->tampil_cashout_w2($tanggal25);
        $cashout_x225 = $this->m_bulan->tampil_cashout_x2($tanggal25);
        $cashout_y225 = $this->m_bulan->tampil_cashout_y2($tanggal25);
        $cashout_z225 = $this->m_bulan->tampil_cashout_z2($tanggal25);
        $cashout_a325 = $this->m_bulan->tampil_cashout_a3($tanggal25);
        $cashout_b325 = $this->m_bulan->tampil_cashout_b3($tanggal25);
        $cashout_c325 = $this->m_bulan->tampil_cashout_c3($tanggal25);
        $cashout_d325 = $this->m_bulan->tampil_cashout_d3($tanggal25);
        $cashout_e325 = $this->m_bulan->tampil_cashout_e3($tanggal25);
        $cashout_f325 = $this->m_bulan->tampil_cashout_f3($tanggal25);
        $cashout_g325 = $this->m_bulan->tampil_cashout_g3($tanggal25);
        $cashout_h325 = $this->m_bulan->tampil_cashout_h3($tanggal25);
        $cashout_i325 = $this->m_bulan->tampil_cashout_i3($tanggal25);
        $cashout_j325 = $this->m_bulan->tampil_cashout_j3($tanggal25);
        $cashout_k325 = $this->m_bulan->tampil_cashout_k3($tanggal25);
        $cashout_l325 = $this->m_bulan->tampil_cashout_l3($tanggal25);
        $tCashoutProj_25 = $this->m_bulan->totalCashoutProj($tanggal25);
        $tCashoutReal_25 = $this->m_bulan->totalCashoutReal($tanggal25);


        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('v_bulan',array(

          // Hari & Tanggal
          'hari1' => $hari1,
          'hari2' => $hari2,
          'hari3' => $hari3,
          'hari4' => $hari4,
          'hari5' => $hari5,
          'hari6' => $hari6,
          'hari7' => $hari7,
          'hari8' => $hari8,
          'hari9' => $hari9,
          'hari10' => $hari10,
          'hari11' => $hari11,
          'hari12' => $hari12,
          'hari13' => $hari13,
          'hari14' => $hari14,
          'hari15' => $hari15,
          'hari16' => $hari16,
          'hari17' => $hari17,
          'hari18' => $hari18,
          'hari19' => $hari19,
          'hari20' => $hari20,
          'hari21' => $hari21,
          'hari22' => $hari22,
          'hari23' => $hari23,
          'hari24' => $hari24,
          'hari25' => $hari25,
          
          'tanggal1' => $tanggal1,
          'tanggal2' => $tanggal2,
          'tanggal3' => $tanggal3,
          'tanggal4' => $tanggal4,
          'tanggal5' => $tanggal5,
          'tanggal6' => $tanggal6,
          'tanggal7' => $tanggal7,
          'tanggal8' => $tanggal8,
          'tanggal9' => $tanggal9,
          'tanggal10' => $tanggal10,
          'tanggal11' => $tanggal11,
          'tanggal12' => $tanggal12,
          'tanggal13' => $tanggal13,
          'tanggal14' => $tanggal14,
          'tanggal15' => $tanggal15,
          'tanggal16' => $tanggal16,
          'tanggal17' => $tanggal17,
          'tanggal18' => $tanggal18,
          'tanggal19' => $tanggal19,
          'tanggal20' => $tanggal20,
          'tanggal21' => $tanggal21,
          'tanggal22' => $tanggal22,
          'tanggal23' => $tanggal23,
          'tanggal24' => $tanggal24,
          'tanggal25' => $tanggal25,

          // Saldo Awal
          'row_salaw1' => $salaw_1,
          'row_salaw2' => $salaw_2,
          'row_salaw3' => $salaw_3,
          'row_salaw4' => $salaw_4,
          'row_salaw5' => $salaw_5,
          'row_salaw6' => $salaw_6,
          'row_salaw7' => $salaw_7,
          'row_salaw8' => $salaw_8,
          'row_salaw9' => $salaw_9,
          'row_salaw10' => $salaw_10,
          'row_salaw11' => $salaw_11,
          'row_salaw12' => $salaw_12,
          'row_salaw13' => $salaw_13,
          'row_salaw14' => $salaw_14,
          'row_salaw15' => $salaw_15,
          'row_salaw16' => $salaw_16,
          'row_salaw17' => $salaw_17,
          'row_salaw18' => $salaw_18,
          'row_salaw19' => $salaw_19,
          'row_salaw20' => $salaw_20,
          'row_salaw21' => $salaw_21,
          'row_salaw22' => $salaw_22,
          'row_salaw23' => $salaw_23,
          'row_salaw24' => $salaw_24,
          'row_salaw25' => $salaw_25,

          // Allocated Cash
          'row_allo1' => $allo_1,
          'row_allo2' => $allo_2,
          'row_allo3' => $allo_3,
          'row_allo4' => $allo_4,
          'row_allo5' => $allo_5,
          'row_allo6' => $allo_6,
          'row_allo7' => $allo_7,
          'row_allo8' => $allo_8,
          'row_allo9' => $allo_9,
          'row_allo10' => $allo_10,
          'row_allo11' => $allo_11,
          'row_allo12' => $allo_12,
          'row_allo13' => $allo_13,
          'row_allo14' => $allo_14,
          'row_allo15' => $allo_15,
          'row_allo16' => $allo_16,
          'row_allo17' => $allo_17,
          'row_allo18' => $allo_18,
          'row_allo19' => $allo_19,
          'row_allo20' => $allo_20,
          'row_allo21' => $allo_21,
          'row_allo22' => $allo_22,
          'row_allo23' => $allo_23,
          'row_allo24' => $allo_24,
          'row_allo25' => $allo_25,

          // Ready Cash
          'row_read1' => $read_1,
          'row_read2' => $read_2,
          'row_read3' => $read_3,
          'row_read4' => $read_4,
          'row_read5' => $read_5,
          'row_read6' => $read_6,
          'row_read7' => $read_7,
          'row_read8' => $read_8,
          'row_read9' => $read_9,
          'row_read10' => $read_10,
          'row_read11' => $read_11,
          'row_read12' => $read_12,
          'row_read13' => $read_13,
          'row_read14' => $read_14,
          'row_read15' => $read_15,
          'row_read16' => $read_16,
          'row_read17' => $read_17,
          'row_read18' => $read_18,
          'row_read19' => $read_19,
          'row_read20' => $read_20,
          'row_read21' => $read_21,
          'row_read22' => $read_22,
          'row_read23' => $read_23,
          'row_read24' => $read_24,
          'row_read25' => $read_25,

          // Kas Besar Cabang
          'row_kbc1' => $kbc_1,
          'row_kbc2' => $kbc_2,
          'row_kbc3' => $kbc_3,
          'row_kbc4' => $kbc_4,
          'row_kbc5' => $kbc_5,
          'row_kbc6' => $kbc_6,
          'row_kbc7' => $kbc_7,
          'row_kbc8' => $kbc_8,
          'row_kbc9' => $kbc_9,
          'row_kbc10' => $kbc_10,
          'row_kbc11' => $kbc_11,
          'row_kbc12' => $kbc_12,
          'row_kbc13' => $kbc_13,
          'row_kbc14' => $kbc_14,
          'row_kbc15' => $kbc_15,
          'row_kbc16' => $kbc_16,
          'row_kbc17' => $kbc_17,
          'row_kbc18' => $kbc_18,
          'row_kbc19' => $kbc_19,
          'row_kbc20' => $kbc_20,
          'row_kbc21' => $kbc_21,
          'row_kbc22' => $kbc_22,
          'row_kbc23' => $kbc_23,
          'row_kbc24' => $kbc_24,
          'row_kbc25' => $kbc_25,

          // Note
          'row_note1' => $note_1,
          'row_note2' => $note_2,
          'row_note3' => $note_3,
          'row_note4' => $note_4,
          'row_note5' => $note_5,
          'row_note6' => $note_6,
          'row_note7' => $note_7,
          'row_note8' => $note_8,
          'row_note9' => $note_9,
          'row_note10' => $note_10,
          'row_note11' => $note_11,
          'row_note12' => $note_12,
          'row_note13' => $note_13,
          'row_note14' => $note_14,
          'row_note15' => $note_15,
          'row_note16' => $note_16,
          'row_note17' => $note_17,
          'row_note18' => $note_18,
          'row_note19' => $note_19,
          'row_note20' => $note_20,
          'row_note21' => $note_21,
          'row_note22' => $note_22,
          'row_note23' => $note_23,
          'row_note24' => $note_24,
          'row_note25' => $note_25,

          // Status Closing
          'row_closing1' => $closing_1,
          'row_closing2' => $closing_2,
          'row_closing3' => $closing_3,
          'row_closing4' => $closing_4,
          'row_closing5' => $closing_5,
          'row_closing6' => $closing_6,
          'row_closing7' => $closing_7,
          'row_closing8' => $closing_8,
          'row_closing9' => $closing_9,
          'row_closing10' => $closing_10,
          'row_closing11' => $closing_11,
          'row_closing12' => $closing_12,
          'row_closing13' => $closing_13,
          'row_closing14' => $closing_14,
          'row_closing15' => $closing_15,
          'row_closing16' => $closing_16,
          'row_closing17' => $closing_17,
          'row_closing18' => $closing_18,
          'row_closing19' => $closing_19,
          'row_closing20' => $closing_20,
          'row_closing21' => $closing_21,
          'row_closing22' => $closing_22,
          'row_closing23' => $closing_23,
          'row_closing24' => $closing_24,
          'row_closing25' => $closing_25,

          // Deposito
          'row_deposito1' => $deposito_1,
          'row_deposito2' => $deposito_2,
          'row_deposito3' => $deposito_3,
          'row_deposito4' => $deposito_4,
          'row_deposito5' => $deposito_5,
          'row_deposito6' => $deposito_6,
          'row_deposito7' => $deposito_7,
          'row_deposito8' => $deposito_8,
          'row_deposito9' => $deposito_9,
          'row_deposito10' => $deposito_10,
          'row_deposito11' => $deposito_11,
          'row_deposito12' => $deposito_12,
          'row_deposito13' => $deposito_13,
          'row_deposito14' => $deposito_14,
          'row_deposito15' => $deposito_15,
          'row_deposito16' => $deposito_16,
          'row_deposito17' => $deposito_17,
          'row_deposito18' => $deposito_18,
          'row_deposito19' => $deposito_19,
          'row_deposito20' => $deposito_20,
          'row_deposito21' => $deposito_21,
          'row_deposito22' => $deposito_22,
          'row_deposito23' => $deposito_23,
          'row_deposito24' => $deposito_24,
          'row_deposito25' => $deposito_25,

          // B2b
          'row_b2b1' => $b2b_1,
          'row_b2b2' => $b2b_2,
          'row_b2b3' => $b2b_3,
          'row_b2b4' => $b2b_4,
          'row_b2b5' => $b2b_5,
          'row_b2b6' => $b2b_6,
          'row_b2b7' => $b2b_7,
          'row_b2b8' => $b2b_8,
          'row_b2b9' => $b2b_9,
          'row_b2b10' => $b2b_10,
          'row_b2b11' => $b2b_11,
          'row_b2b12' => $b2b_12,
          'row_b2b13' => $b2b_13,
          'row_b2b14' => $b2b_14,
          'row_b2b15' => $b2b_15,
          'row_b2b16' => $b2b_16,
          'row_b2b17' => $b2b_17,
          'row_b2b18' => $b2b_18,
          'row_b2b19' => $b2b_19,
          'row_b2b20' => $b2b_20,
          'row_b2b21' => $b2b_21,
          'row_b2b22' => $b2b_22,
          'row_b2b23' => $b2b_23,
          'row_b2b24' => $b2b_24,
          'row_b2b25' => $b2b_25,

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

          // Cash-In Hari Ke-6
          'row_cashin_a6' => $cashin_a6,
          'row_cashin_b6' => $cashin_b6,
          'row_cashin_c6' => $cashin_c6,
          'row_cashin_d6' => $cashin_d6,
          'row_cashin_e6' => $cashin_e6,
          'row_cashin_f6' => $cashin_f6,
          'row_cashin_g6' => $cashin_g6,
          'row_cashin_h6' => $cashin_h6,
          'row_cashin_i6' => $cashin_i6,
          'row_cashin_j6' => $cashin_j6,
          'row_cashin_k6' => $cashin_k6,
          'row_cashin_l6' => $cashin_l6,
          'row_cashin_m6' => $cashin_m6,
          'row_cashin_n6' => $cashin_n6,
          'row_cashin_o6' => $cashin_o6,
          'row_cashin_p6' => $cashin_p6,
          'row_cashin_q6' => $cashin_q6,
          'row_cashin_r6' => $cashin_r6,
          'row_cashin_s6' => $cashin_s6,
          'row_tCashinProj6' => $tCashinProj_6,
          'row_tCashinReal6' => $tCashinReal_6,

          // Cash-In Hari Ke-7
          'row_cashin_a7' => $cashin_a7,
          'row_cashin_b7' => $cashin_b7,
          'row_cashin_c7' => $cashin_c7,
          'row_cashin_d7' => $cashin_d7,
          'row_cashin_e7' => $cashin_e7,
          'row_cashin_f7' => $cashin_f7,
          'row_cashin_g7' => $cashin_g7,
          'row_cashin_h7' => $cashin_h7,
          'row_cashin_i7' => $cashin_i7,
          'row_cashin_j7' => $cashin_j7,
          'row_cashin_k7' => $cashin_k7,
          'row_cashin_l7' => $cashin_l7,
          'row_cashin_m7' => $cashin_m7,
          'row_cashin_n7' => $cashin_n7,
          'row_cashin_o7' => $cashin_o7,
          'row_cashin_p7' => $cashin_p7,
          'row_cashin_q7' => $cashin_q7,
          'row_cashin_r7' => $cashin_r7,
          'row_cashin_s7' => $cashin_s7,
          'row_tCashinProj7' => $tCashinProj_7,
          'row_tCashinReal7' => $tCashinReal_7,

          // Cash-In Hari Ke-8
          'row_cashin_a8' => $cashin_a8,
          'row_cashin_b8' => $cashin_b8,
          'row_cashin_c8' => $cashin_c8,
          'row_cashin_d8' => $cashin_d8,
          'row_cashin_e8' => $cashin_e8,
          'row_cashin_f8' => $cashin_f8,
          'row_cashin_g8' => $cashin_g8,
          'row_cashin_h8' => $cashin_h8,
          'row_cashin_i8' => $cashin_i8,
          'row_cashin_j8' => $cashin_j8,
          'row_cashin_k8' => $cashin_k8,
          'row_cashin_l8' => $cashin_l8,
          'row_cashin_m8' => $cashin_m8,
          'row_cashin_n8' => $cashin_n8,
          'row_cashin_o8' => $cashin_o8,
          'row_cashin_p8' => $cashin_p8,
          'row_cashin_q8' => $cashin_q8,
          'row_cashin_r8' => $cashin_r8,
          'row_cashin_s8' => $cashin_s8,
          'row_tCashinProj8' => $tCashinProj_8,
          'row_tCashinReal8' => $tCashinReal_8,

          // Cash-In Hari Ke-9
          'row_cashin_a9' => $cashin_a9,
          'row_cashin_b9' => $cashin_b9,
          'row_cashin_c9' => $cashin_c9,
          'row_cashin_d9' => $cashin_d9,
          'row_cashin_e9' => $cashin_e9,
          'row_cashin_f9' => $cashin_f9,
          'row_cashin_g9' => $cashin_g9,
          'row_cashin_h9' => $cashin_h9,
          'row_cashin_i9' => $cashin_i9,
          'row_cashin_j9' => $cashin_j9,
          'row_cashin_k9' => $cashin_k9,
          'row_cashin_l9' => $cashin_l9,
          'row_cashin_m9' => $cashin_m9,
          'row_cashin_n9' => $cashin_n9,
          'row_cashin_o9' => $cashin_o9,
          'row_cashin_p9' => $cashin_p9,
          'row_cashin_q9' => $cashin_q9,
          'row_cashin_r9' => $cashin_r9,
          'row_cashin_s9' => $cashin_s9,
          'row_tCashinProj9' => $tCashinProj_9,
          'row_tCashinReal9' => $tCashinReal_9,

          // Cash-In Hari Ke-10
          'row_cashin_a10' => $cashin_a10,
          'row_cashin_b10' => $cashin_b10,
          'row_cashin_c10' => $cashin_c10,
          'row_cashin_d10' => $cashin_d10,
          'row_cashin_e10' => $cashin_e10,
          'row_cashin_f10' => $cashin_f10,
          'row_cashin_g10' => $cashin_g10,
          'row_cashin_h10' => $cashin_h10,
          'row_cashin_i10' => $cashin_i10,
          'row_cashin_j10' => $cashin_j10,
          'row_cashin_k10' => $cashin_k10,
          'row_cashin_l10' => $cashin_l10,
          'row_cashin_m10' => $cashin_m10,
          'row_cashin_n10' => $cashin_n10,
          'row_cashin_o10' => $cashin_o10,
          'row_cashin_p10' => $cashin_p10,
          'row_cashin_q10' => $cashin_q10,
          'row_cashin_r10' => $cashin_r10,
          'row_cashin_s10' => $cashin_s10,
          'row_tCashinProj10' => $tCashinProj_10,
          'row_tCashinReal10' => $tCashinReal_10,

          // Cash-In Hari Ke-11
          'row_cashin_a11' => $cashin_a11,
          'row_cashin_b11' => $cashin_b11,
          'row_cashin_c11' => $cashin_c11,
          'row_cashin_d11' => $cashin_d11,
          'row_cashin_e11' => $cashin_e11,
          'row_cashin_f11' => $cashin_f11,
          'row_cashin_g11' => $cashin_g11,
          'row_cashin_h11' => $cashin_h11,
          'row_cashin_i11' => $cashin_i11,
          'row_cashin_j11' => $cashin_j11,
          'row_cashin_k11' => $cashin_k11,
          'row_cashin_l11' => $cashin_l11,
          'row_cashin_m11' => $cashin_m11,
          'row_cashin_n11' => $cashin_n11,
          'row_cashin_o11' => $cashin_o11,
          'row_cashin_p11' => $cashin_p11,
          'row_cashin_q11' => $cashin_q11,
          'row_cashin_r11' => $cashin_r11,
          'row_cashin_s11' => $cashin_s11,
          'row_tCashinProj11' => $tCashinProj_11,
          'row_tCashinReal11' => $tCashinReal_11,

          // Cash-In Hari Ke-12
          'row_cashin_a12' => $cashin_a12,
          'row_cashin_b12' => $cashin_b12,
          'row_cashin_c12' => $cashin_c12,
          'row_cashin_d12' => $cashin_d12,
          'row_cashin_e12' => $cashin_e12,
          'row_cashin_f12' => $cashin_f12,
          'row_cashin_g12' => $cashin_g12,
          'row_cashin_h12' => $cashin_h12,
          'row_cashin_i12' => $cashin_i12,
          'row_cashin_j12' => $cashin_j12,
          'row_cashin_k12' => $cashin_k12,
          'row_cashin_l12' => $cashin_l12,
          'row_cashin_m12' => $cashin_m12,
          'row_cashin_n12' => $cashin_n12,
          'row_cashin_o12' => $cashin_o12,
          'row_cashin_p12' => $cashin_p12,
          'row_cashin_q12' => $cashin_q12,
          'row_cashin_r12' => $cashin_r12,
          'row_cashin_s12' => $cashin_s12,
          'row_tCashinProj12' => $tCashinProj_12,
          'row_tCashinReal12' => $tCashinReal_12,

          // Cash-In Hari Ke-13
          'row_cashin_a13' => $cashin_a13,
          'row_cashin_b13' => $cashin_b13,
          'row_cashin_c13' => $cashin_c13,
          'row_cashin_d13' => $cashin_d13,
          'row_cashin_e13' => $cashin_e13,
          'row_cashin_f13' => $cashin_f13,
          'row_cashin_g13' => $cashin_g13,
          'row_cashin_h13' => $cashin_h13,
          'row_cashin_i13' => $cashin_i13,
          'row_cashin_j13' => $cashin_j13,
          'row_cashin_k13' => $cashin_k13,
          'row_cashin_l13' => $cashin_l13,
          'row_cashin_m13' => $cashin_m13,
          'row_cashin_n13' => $cashin_n13,
          'row_cashin_o13' => $cashin_o13,
          'row_cashin_p13' => $cashin_p13,
          'row_cashin_q13' => $cashin_q13,
          'row_cashin_r13' => $cashin_r13,
          'row_cashin_s13' => $cashin_s13,
          'row_tCashinProj13' => $tCashinProj_13,
          'row_tCashinReal13' => $tCashinReal_13,

          // Cash-In Hari Ke-14
          'row_cashin_a14' => $cashin_a14,
          'row_cashin_b14' => $cashin_b14,
          'row_cashin_c14' => $cashin_c14,
          'row_cashin_d14' => $cashin_d14,
          'row_cashin_e14' => $cashin_e14,
          'row_cashin_f14' => $cashin_f14,
          'row_cashin_g14' => $cashin_g14,
          'row_cashin_h14' => $cashin_h14,
          'row_cashin_i14' => $cashin_i14,
          'row_cashin_j14' => $cashin_j14,
          'row_cashin_k14' => $cashin_k14,
          'row_cashin_l14' => $cashin_l14,
          'row_cashin_m14' => $cashin_m14,
          'row_cashin_n14' => $cashin_n14,
          'row_cashin_o14' => $cashin_o14,
          'row_cashin_p14' => $cashin_p14,
          'row_cashin_q14' => $cashin_q14,
          'row_cashin_r14' => $cashin_r14,
          'row_cashin_s14' => $cashin_s14,
          'row_tCashinProj14' => $tCashinProj_14,
          'row_tCashinReal14' => $tCashinReal_14,

          // Cash-In Hari Ke-15
          'row_cashin_a15' => $cashin_a15,
          'row_cashin_b15' => $cashin_b15,
          'row_cashin_c15' => $cashin_c15,
          'row_cashin_d15' => $cashin_d15,
          'row_cashin_e15' => $cashin_e15,
          'row_cashin_f15' => $cashin_f15,
          'row_cashin_g15' => $cashin_g15,
          'row_cashin_h15' => $cashin_h15,
          'row_cashin_i15' => $cashin_i15,
          'row_cashin_j15' => $cashin_j15,
          'row_cashin_k15' => $cashin_k15,
          'row_cashin_l15' => $cashin_l15,
          'row_cashin_m15' => $cashin_m15,
          'row_cashin_n15' => $cashin_n15,
          'row_cashin_o15' => $cashin_o15,
          'row_cashin_p15' => $cashin_p15,
          'row_cashin_q15' => $cashin_q15,
          'row_cashin_r15' => $cashin_r15,
          'row_cashin_s15' => $cashin_s15,
          'row_tCashinProj15' => $tCashinProj_15,
          'row_tCashinReal15' => $tCashinReal_15,

          // Cash-In Hari Ke-16
          'row_cashin_a16' => $cashin_a16,
          'row_cashin_b16' => $cashin_b16,
          'row_cashin_c16' => $cashin_c16,
          'row_cashin_d16' => $cashin_d16,
          'row_cashin_e16' => $cashin_e16,
          'row_cashin_f16' => $cashin_f16,
          'row_cashin_g16' => $cashin_g16,
          'row_cashin_h16' => $cashin_h16,
          'row_cashin_i16' => $cashin_i16,
          'row_cashin_j16' => $cashin_j16,
          'row_cashin_k16' => $cashin_k16,
          'row_cashin_l16' => $cashin_l16,
          'row_cashin_m16' => $cashin_m16,
          'row_cashin_n16' => $cashin_n16,
          'row_cashin_o16' => $cashin_o16,
          'row_cashin_p16' => $cashin_p16,
          'row_cashin_q16' => $cashin_q16,
          'row_cashin_r16' => $cashin_r16,
          'row_cashin_s16' => $cashin_s16,
          'row_tCashinProj16' => $tCashinProj_16,
          'row_tCashinReal16' => $tCashinReal_16,

          // Cash-In Hari Ke-17
          'row_cashin_a17' => $cashin_a17,
          'row_cashin_b17' => $cashin_b17,
          'row_cashin_c17' => $cashin_c17,
          'row_cashin_d17' => $cashin_d17,
          'row_cashin_e17' => $cashin_e17,
          'row_cashin_f17' => $cashin_f17,
          'row_cashin_g17' => $cashin_g17,
          'row_cashin_h17' => $cashin_h17,
          'row_cashin_i17' => $cashin_i17,
          'row_cashin_j17' => $cashin_j17,
          'row_cashin_k17' => $cashin_k17,
          'row_cashin_l17' => $cashin_l17,
          'row_cashin_m17' => $cashin_m17,
          'row_cashin_n17' => $cashin_n17,
          'row_cashin_o17' => $cashin_o17,
          'row_cashin_p17' => $cashin_p17,
          'row_cashin_q17' => $cashin_q17,
          'row_cashin_r17' => $cashin_r17,
          'row_cashin_s17' => $cashin_s17,
          'row_tCashinProj17' => $tCashinProj_17,
          'row_tCashinReal17' => $tCashinReal_17,

          // Cash-In Hari Ke-18
          'row_cashin_a18' => $cashin_a18,
          'row_cashin_b18' => $cashin_b18,
          'row_cashin_c18' => $cashin_c18,
          'row_cashin_d18' => $cashin_d18,
          'row_cashin_e18' => $cashin_e18,
          'row_cashin_f18' => $cashin_f18,
          'row_cashin_g18' => $cashin_g18,
          'row_cashin_h18' => $cashin_h18,
          'row_cashin_i18' => $cashin_i18,
          'row_cashin_j18' => $cashin_j18,
          'row_cashin_k18' => $cashin_k18,
          'row_cashin_l18' => $cashin_l18,
          'row_cashin_m18' => $cashin_m18,
          'row_cashin_n18' => $cashin_n18,
          'row_cashin_o18' => $cashin_o18,
          'row_cashin_p18' => $cashin_p18,
          'row_cashin_q18' => $cashin_q18,
          'row_cashin_r18' => $cashin_r18,
          'row_cashin_s18' => $cashin_s18,
          'row_tCashinProj18' => $tCashinProj_18,
          'row_tCashinReal18' => $tCashinReal_18,

          // Cash-In Hari Ke-19
          'row_cashin_a19' => $cashin_a19,
          'row_cashin_b19' => $cashin_b19,
          'row_cashin_c19' => $cashin_c19,
          'row_cashin_d19' => $cashin_d19,
          'row_cashin_e19' => $cashin_e19,
          'row_cashin_f19' => $cashin_f19,
          'row_cashin_g19' => $cashin_g19,
          'row_cashin_h19' => $cashin_h19,
          'row_cashin_i19' => $cashin_i19,
          'row_cashin_j19' => $cashin_j19,
          'row_cashin_k19' => $cashin_k19,
          'row_cashin_l19' => $cashin_l19,
          'row_cashin_m19' => $cashin_m19,
          'row_cashin_n19' => $cashin_n19,
          'row_cashin_o19' => $cashin_o19,
          'row_cashin_p19' => $cashin_p19,
          'row_cashin_q19' => $cashin_q19,
          'row_cashin_r19' => $cashin_r19,
          'row_cashin_s19' => $cashin_s19,
          'row_tCashinProj19' => $tCashinProj_19,
          'row_tCashinReal19' => $tCashinReal_19,

          // Cash-In Hari Ke-20
          'row_cashin_a20' => $cashin_a20,
          'row_cashin_b20' => $cashin_b20,
          'row_cashin_c20' => $cashin_c20,
          'row_cashin_d20' => $cashin_d20,
          'row_cashin_e20' => $cashin_e20,
          'row_cashin_f20' => $cashin_f20,
          'row_cashin_g20' => $cashin_g20,
          'row_cashin_h20' => $cashin_h20,
          'row_cashin_i20' => $cashin_i20,
          'row_cashin_j20' => $cashin_j20,
          'row_cashin_k20' => $cashin_k20,
          'row_cashin_l20' => $cashin_l20,
          'row_cashin_m20' => $cashin_m20,
          'row_cashin_n20' => $cashin_n20,
          'row_cashin_o20' => $cashin_o20,
          'row_cashin_p20' => $cashin_p20,
          'row_cashin_q20' => $cashin_q20,
          'row_cashin_r20' => $cashin_r20,
          'row_cashin_s20' => $cashin_s20,
          'row_tCashinProj20' => $tCashinProj_20,
          'row_tCashinReal20' => $tCashinReal_20,

          // Cash-In Hari Ke-21
          'row_cashin_a21' => $cashin_a21,
          'row_cashin_b21' => $cashin_b21,
          'row_cashin_c21' => $cashin_c21,
          'row_cashin_d21' => $cashin_d21,
          'row_cashin_e21' => $cashin_e21,
          'row_cashin_f21' => $cashin_f21,
          'row_cashin_g21' => $cashin_g21,
          'row_cashin_h21' => $cashin_h21,
          'row_cashin_i21' => $cashin_i21,
          'row_cashin_j21' => $cashin_j21,
          'row_cashin_k21' => $cashin_k21,
          'row_cashin_l21' => $cashin_l21,
          'row_cashin_m21' => $cashin_m21,
          'row_cashin_n21' => $cashin_n21,
          'row_cashin_o21' => $cashin_o21,
          'row_cashin_p21' => $cashin_p21,
          'row_cashin_q21' => $cashin_q21,
          'row_cashin_r21' => $cashin_r21,
          'row_cashin_s21' => $cashin_s21,
          'row_tCashinProj21' => $tCashinProj_21,
          'row_tCashinReal21' => $tCashinReal_21,

          // Cash-In Hari Ke-22
          'row_cashin_a22' => $cashin_a22,
          'row_cashin_b22' => $cashin_b22,
          'row_cashin_c22' => $cashin_c22,
          'row_cashin_d22' => $cashin_d22,
          'row_cashin_e22' => $cashin_e22,
          'row_cashin_f22' => $cashin_f22,
          'row_cashin_g22' => $cashin_g22,
          'row_cashin_h22' => $cashin_h22,
          'row_cashin_i22' => $cashin_i22,
          'row_cashin_j22' => $cashin_j22,
          'row_cashin_k22' => $cashin_k22,
          'row_cashin_l22' => $cashin_l22,
          'row_cashin_m22' => $cashin_m22,
          'row_cashin_n22' => $cashin_n22,
          'row_cashin_o22' => $cashin_o22,
          'row_cashin_p22' => $cashin_p22,
          'row_cashin_q22' => $cashin_q22,
          'row_cashin_r22' => $cashin_r22,
          'row_cashin_s22' => $cashin_s22,
          'row_tCashinProj22' => $tCashinProj_22,
          'row_tCashinReal22' => $tCashinReal_22,

          // Cash-In Hari Ke-23
          'row_cashin_a23' => $cashin_a23,
          'row_cashin_b23' => $cashin_b23,
          'row_cashin_c23' => $cashin_c23,
          'row_cashin_d23' => $cashin_d23,
          'row_cashin_e23' => $cashin_e23,
          'row_cashin_f23' => $cashin_f23,
          'row_cashin_g23' => $cashin_g23,
          'row_cashin_h23' => $cashin_h23,
          'row_cashin_i23' => $cashin_i23,
          'row_cashin_j23' => $cashin_j23,
          'row_cashin_k23' => $cashin_k23,
          'row_cashin_l23' => $cashin_l23,
          'row_cashin_m23' => $cashin_m23,
          'row_cashin_n23' => $cashin_n23,
          'row_cashin_o23' => $cashin_o23,
          'row_cashin_p23' => $cashin_p23,
          'row_cashin_q23' => $cashin_q23,
          'row_cashin_r23' => $cashin_r23,
          'row_cashin_s23' => $cashin_s23,
          'row_tCashinProj23' => $tCashinProj_23,
          'row_tCashinReal23' => $tCashinReal_23,

          // Cash-In Hari Ke-24
          'row_cashin_a24' => $cashin_a24,
          'row_cashin_b24' => $cashin_b24,
          'row_cashin_c24' => $cashin_c24,
          'row_cashin_d24' => $cashin_d24,
          'row_cashin_e24' => $cashin_e24,
          'row_cashin_f24' => $cashin_f24,
          'row_cashin_g24' => $cashin_g24,
          'row_cashin_h24' => $cashin_h24,
          'row_cashin_i24' => $cashin_i24,
          'row_cashin_j24' => $cashin_j24,
          'row_cashin_k24' => $cashin_k24,
          'row_cashin_l24' => $cashin_l24,
          'row_cashin_m24' => $cashin_m24,
          'row_cashin_n24' => $cashin_n24,
          'row_cashin_o24' => $cashin_o24,
          'row_cashin_p24' => $cashin_p24,
          'row_cashin_q24' => $cashin_q24,
          'row_cashin_r24' => $cashin_r24,
          'row_cashin_s24' => $cashin_s24,
          'row_tCashinProj24' => $tCashinProj_24,
          'row_tCashinReal24' => $tCashinReal_24,

          // Cash-In Hari Ke-25
          'row_cashin_a25' => $cashin_a25,
          'row_cashin_b25' => $cashin_b25,
          'row_cashin_c25' => $cashin_c25,
          'row_cashin_d25' => $cashin_d25,
          'row_cashin_e25' => $cashin_e25,
          'row_cashin_f25' => $cashin_f25,
          'row_cashin_g25' => $cashin_g25,
          'row_cashin_h25' => $cashin_h25,
          'row_cashin_i25' => $cashin_i25,
          'row_cashin_j25' => $cashin_j25,
          'row_cashin_k25' => $cashin_k25,
          'row_cashin_l25' => $cashin_l25,
          'row_cashin_m25' => $cashin_m25,
          'row_cashin_n25' => $cashin_n25,
          'row_cashin_o25' => $cashin_o25,
          'row_cashin_p25' => $cashin_p25,
          'row_cashin_q25' => $cashin_q25,
          'row_cashin_r25' => $cashin_r25,
          'row_cashin_s25' => $cashin_s25,
          'row_tCashinProj25' => $tCashinProj_25,
          'row_tCashinReal25' => $tCashinReal_25,

          
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
          'row_tCashoutProj5' => $tCashoutProj_5,
          'row_tCashoutReal5' => $tCashoutReal_5,

          // Cash-Out Hari Ke-6
          'row_cashout_a6' => $cashout_a6,
          'row_cashout_b6' => $cashout_b6,
          'row_cashout_c6' => $cashout_c6,
          'row_cashout_d6' => $cashout_d6,
          'row_cashout_e6' => $cashout_e6,
          'row_cashout_f6' => $cashout_f6,
          'row_cashout_g6' => $cashout_g6,
          'row_cashout_h6' => $cashout_h6,
          'row_cashout_i6' => $cashout_i6,
          'row_cashout_j6' => $cashout_j6,
          'row_cashout_k6' => $cashout_k6,
          'row_cashout_l6' => $cashout_l6,
          'row_cashout_m6' => $cashout_m6,
          'row_cashout_n6' => $cashout_n6,
          'row_cashout_o6' => $cashout_o6,
          'row_cashout_p6' => $cashout_p6,
          'row_cashout_q6' => $cashout_q6,
          'row_cashout_r6' => $cashout_r6,
          'row_cashout_s6' => $cashout_s6,
          'row_cashout_t6' => $cashout_t6,
          'row_cashout_u6' => $cashout_u6,
          'row_cashout_v6' => $cashout_v6,
          'row_cashout_w6' => $cashout_w6,
          'row_cashout_x6' => $cashout_x6,
          'row_cashout_y6' => $cashout_y6,
          'row_cashout_z6' => $cashout_z6,
          'row_cashout_a26' => $cashout_a26,
          'row_cashout_b26' => $cashout_b26,
          'row_cashout_c26' => $cashout_c26,
          'row_cashout_d26' => $cashout_d26,
          'row_cashout_e26' => $cashout_e26,
          'row_cashout_f26' => $cashout_f26,
          'row_cashout_g26' => $cashout_g26,
          'row_cashout_h26' => $cashout_h26,
          'row_cashout_i26' => $cashout_i26,
          'row_cashout_j26' => $cashout_j26,
          'row_cashout_k26' => $cashout_k26,
          'row_cashout_l26' => $cashout_l26,
          'row_cashout_m26' => $cashout_m26,
          'row_cashout_n26' => $cashout_n26,
          'row_cashout_o26' => $cashout_o26,
          'row_cashout_p26' => $cashout_p26,
          'row_cashout_q26' => $cashout_q26,
          'row_cashout_r26' => $cashout_r26,
          'row_cashout_s26' => $cashout_s26,
          'row_cashout_t26' => $cashout_t26,
          'row_cashout_u26' => $cashout_u26,
          'row_cashout_v26' => $cashout_v26,
          'row_cashout_w26' => $cashout_w26,
          'row_cashout_x26' => $cashout_x26,
          'row_cashout_y26' => $cashout_y26,
          'row_cashout_z26' => $cashout_z26,
          'row_cashout_a36' => $cashout_a36,
          'row_cashout_b36' => $cashout_b36,
          'row_cashout_c36' => $cashout_c36,
          'row_cashout_d36' => $cashout_d36,
          'row_cashout_e36' => $cashout_e36,
          'row_cashout_f36' => $cashout_f36,
          'row_cashout_g36' => $cashout_g36,
          'row_cashout_h36' => $cashout_h36,
          'row_cashout_i36' => $cashout_i36,
          'row_cashout_j36' => $cashout_j36,
          'row_cashout_k36' => $cashout_k36,
          'row_cashout_l36' => $cashout_l36,
          'row_tCashoutProj6' => $tCashoutProj_6,
          'row_tCashoutReal6' => $tCashoutReal_6,

          // Cash-Out Hari Ke-7
          'row_cashout_a7' => $cashout_a7,
          'row_cashout_b7' => $cashout_b7,
          'row_cashout_c7' => $cashout_c7,
          'row_cashout_d7' => $cashout_d7,
          'row_cashout_e7' => $cashout_e7,
          'row_cashout_f7' => $cashout_f7,
          'row_cashout_g7' => $cashout_g7,
          'row_cashout_h7' => $cashout_h7,
          'row_cashout_i7' => $cashout_i7,
          'row_cashout_j7' => $cashout_j7,
          'row_cashout_k7' => $cashout_k7,
          'row_cashout_l7' => $cashout_l7,
          'row_cashout_m7' => $cashout_m7,
          'row_cashout_n7' => $cashout_n7,
          'row_cashout_o7' => $cashout_o7,
          'row_cashout_p7' => $cashout_p7,
          'row_cashout_q7' => $cashout_q7,
          'row_cashout_r7' => $cashout_r7,
          'row_cashout_s7' => $cashout_s7,
          'row_cashout_t7' => $cashout_t7,
          'row_cashout_u7' => $cashout_u7,
          'row_cashout_v7' => $cashout_v7,
          'row_cashout_w7' => $cashout_w7,
          'row_cashout_x7' => $cashout_x7,
          'row_cashout_y7' => $cashout_y7,
          'row_cashout_z7' => $cashout_z7,
          'row_cashout_a27' => $cashout_a27,
          'row_cashout_b27' => $cashout_b27,
          'row_cashout_c27' => $cashout_c27,
          'row_cashout_d27' => $cashout_d27,
          'row_cashout_e27' => $cashout_e27,
          'row_cashout_f27' => $cashout_f27,
          'row_cashout_g27' => $cashout_g27,
          'row_cashout_h27' => $cashout_h27,
          'row_cashout_i27' => $cashout_i27,
          'row_cashout_j27' => $cashout_j27,
          'row_cashout_k27' => $cashout_k27,
          'row_cashout_l27' => $cashout_l27,
          'row_cashout_m27' => $cashout_m27,
          'row_cashout_n27' => $cashout_n27,
          'row_cashout_o27' => $cashout_o27,
          'row_cashout_p27' => $cashout_p27,
          'row_cashout_q27' => $cashout_q27,
          'row_cashout_r27' => $cashout_r27,
          'row_cashout_s27' => $cashout_s27,
          'row_cashout_t27' => $cashout_t27,
          'row_cashout_u27' => $cashout_u27,
          'row_cashout_v27' => $cashout_v27,
          'row_cashout_w27' => $cashout_w27,
          'row_cashout_x27' => $cashout_x27,
          'row_cashout_y27' => $cashout_y27,
          'row_cashout_z27' => $cashout_z27,
          'row_cashout_a37' => $cashout_a37,
          'row_cashout_b37' => $cashout_b37,
          'row_cashout_c37' => $cashout_c37,
          'row_cashout_d37' => $cashout_d37,
          'row_cashout_e37' => $cashout_e37,
          'row_cashout_f37' => $cashout_f37,
          'row_cashout_g37' => $cashout_g37,
          'row_cashout_h37' => $cashout_h37,
          'row_cashout_i37' => $cashout_i37,
          'row_cashout_j37' => $cashout_j37,
          'row_cashout_k37' => $cashout_k37,
          'row_cashout_l37' => $cashout_l37,
          'row_tCashoutProj7' => $tCashoutProj_7,
          'row_tCashoutReal7' => $tCashoutReal_7,

          // Cash-Out Hari Ke-8
          'row_cashout_a8' => $cashout_a8,
          'row_cashout_b8' => $cashout_b8,
          'row_cashout_c8' => $cashout_c8,
          'row_cashout_d8' => $cashout_d8,
          'row_cashout_e8' => $cashout_e8,
          'row_cashout_f8' => $cashout_f8,
          'row_cashout_g8' => $cashout_g8,
          'row_cashout_h8' => $cashout_h8,
          'row_cashout_i8' => $cashout_i8,
          'row_cashout_j8' => $cashout_j8,
          'row_cashout_k8' => $cashout_k8,
          'row_cashout_l8' => $cashout_l8,
          'row_cashout_m8' => $cashout_m8,
          'row_cashout_n8' => $cashout_n8,
          'row_cashout_o8' => $cashout_o8,
          'row_cashout_p8' => $cashout_p8,
          'row_cashout_q8' => $cashout_q8,
          'row_cashout_r8' => $cashout_r8,
          'row_cashout_s8' => $cashout_s8,
          'row_cashout_t8' => $cashout_t8,
          'row_cashout_u8' => $cashout_u8,
          'row_cashout_v8' => $cashout_v8,
          'row_cashout_w8' => $cashout_w8,
          'row_cashout_x8' => $cashout_x8,
          'row_cashout_y8' => $cashout_y8,
          'row_cashout_z8' => $cashout_z8,
          'row_cashout_a28' => $cashout_a28,
          'row_cashout_b28' => $cashout_b28,
          'row_cashout_c28' => $cashout_c28,
          'row_cashout_d28' => $cashout_d28,
          'row_cashout_e28' => $cashout_e28,
          'row_cashout_f28' => $cashout_f28,
          'row_cashout_g28' => $cashout_g28,
          'row_cashout_h28' => $cashout_h28,
          'row_cashout_i28' => $cashout_i28,
          'row_cashout_j28' => $cashout_j28,
          'row_cashout_k28' => $cashout_k28,
          'row_cashout_l28' => $cashout_l28,
          'row_cashout_m28' => $cashout_m28,
          'row_cashout_n28' => $cashout_n28,
          'row_cashout_o28' => $cashout_o28,
          'row_cashout_p28' => $cashout_p28,
          'row_cashout_q28' => $cashout_q28,
          'row_cashout_r28' => $cashout_r28,
          'row_cashout_s28' => $cashout_s28,
          'row_cashout_t28' => $cashout_t28,
          'row_cashout_u28' => $cashout_u28,
          'row_cashout_v28' => $cashout_v28,
          'row_cashout_w28' => $cashout_w28,
          'row_cashout_x28' => $cashout_x28,
          'row_cashout_y28' => $cashout_y28,
          'row_cashout_z28' => $cashout_z28,
          'row_cashout_a38' => $cashout_a38,
          'row_cashout_b38' => $cashout_b38,
          'row_cashout_c38' => $cashout_c38,
          'row_cashout_d38' => $cashout_d38,
          'row_cashout_e38' => $cashout_e38,
          'row_cashout_f38' => $cashout_f38,
          'row_cashout_g38' => $cashout_g38,
          'row_cashout_h38' => $cashout_h38,
          'row_cashout_i38' => $cashout_i38,
          'row_cashout_j38' => $cashout_j38,
          'row_cashout_k38' => $cashout_k38,
          'row_cashout_l38' => $cashout_l38,
          'row_tCashoutProj8' => $tCashoutProj_8,
          'row_tCashoutReal8' => $tCashoutReal_8,

          // Cash-Out Hari Ke-9
          'row_cashout_a9' => $cashout_a9,
          'row_cashout_b9' => $cashout_b9,
          'row_cashout_c9' => $cashout_c9,
          'row_cashout_d9' => $cashout_d9,
          'row_cashout_e9' => $cashout_e9,
          'row_cashout_f9' => $cashout_f9,
          'row_cashout_g9' => $cashout_g9,
          'row_cashout_h9' => $cashout_h9,
          'row_cashout_i9' => $cashout_i9,
          'row_cashout_j9' => $cashout_j9,
          'row_cashout_k9' => $cashout_k9,
          'row_cashout_l9' => $cashout_l9,
          'row_cashout_m9' => $cashout_m9,
          'row_cashout_n9' => $cashout_n9,
          'row_cashout_o9' => $cashout_o9,
          'row_cashout_p9' => $cashout_p9,
          'row_cashout_q9' => $cashout_q9,
          'row_cashout_r9' => $cashout_r9,
          'row_cashout_s9' => $cashout_s9,
          'row_cashout_t9' => $cashout_t9,
          'row_cashout_u9' => $cashout_u9,
          'row_cashout_v9' => $cashout_v9,
          'row_cashout_w9' => $cashout_w9,
          'row_cashout_x9' => $cashout_x9,
          'row_cashout_y9' => $cashout_y9,
          'row_cashout_z9' => $cashout_z9,
          'row_cashout_a29' => $cashout_a29,
          'row_cashout_b29' => $cashout_b29,
          'row_cashout_c29' => $cashout_c29,
          'row_cashout_d29' => $cashout_d29,
          'row_cashout_e29' => $cashout_e29,
          'row_cashout_f29' => $cashout_f29,
          'row_cashout_g29' => $cashout_g29,
          'row_cashout_h29' => $cashout_h29,
          'row_cashout_i29' => $cashout_i29,
          'row_cashout_j29' => $cashout_j29,
          'row_cashout_k29' => $cashout_k29,
          'row_cashout_l29' => $cashout_l29,
          'row_cashout_m29' => $cashout_m29,
          'row_cashout_n29' => $cashout_n29,
          'row_cashout_o29' => $cashout_o29,
          'row_cashout_p29' => $cashout_p29,
          'row_cashout_q29' => $cashout_q29,
          'row_cashout_r29' => $cashout_r29,
          'row_cashout_s29' => $cashout_s29,
          'row_cashout_t29' => $cashout_t29,
          'row_cashout_u29' => $cashout_u29,
          'row_cashout_v29' => $cashout_v29,
          'row_cashout_w29' => $cashout_w29,
          'row_cashout_x29' => $cashout_x29,
          'row_cashout_y29' => $cashout_y29,
          'row_cashout_z29' => $cashout_z29,
          'row_cashout_a39' => $cashout_a39,
          'row_cashout_b39' => $cashout_b39,
          'row_cashout_c39' => $cashout_c39,
          'row_cashout_d39' => $cashout_d39,
          'row_cashout_e39' => $cashout_e39,
          'row_cashout_f39' => $cashout_f39,
          'row_cashout_g39' => $cashout_g39,
          'row_cashout_h39' => $cashout_h39,
          'row_cashout_i39' => $cashout_i39,
          'row_cashout_j39' => $cashout_j39,
          'row_cashout_k39' => $cashout_k39,
          'row_cashout_l39' => $cashout_l39,
          'row_tCashoutProj9' => $tCashoutProj_9,
          'row_tCashoutReal9' => $tCashoutReal_9,

          // Cash-Out Hari Ke-10
          'row_cashout_a10' => $cashout_a10,
          'row_cashout_b10' => $cashout_b10,
          'row_cashout_c10' => $cashout_c10,
          'row_cashout_d10' => $cashout_d10,
          'row_cashout_e10' => $cashout_e10,
          'row_cashout_f10' => $cashout_f10,
          'row_cashout_g10' => $cashout_g10,
          'row_cashout_h10' => $cashout_h10,
          'row_cashout_i10' => $cashout_i10,
          'row_cashout_j10' => $cashout_j10,
          'row_cashout_k10' => $cashout_k10,
          'row_cashout_l10' => $cashout_l10,
          'row_cashout_m10' => $cashout_m10,
          'row_cashout_n10' => $cashout_n10,
          'row_cashout_o10' => $cashout_o10,
          'row_cashout_p10' => $cashout_p10,
          'row_cashout_q10' => $cashout_q10,
          'row_cashout_r10' => $cashout_r10,
          'row_cashout_s10' => $cashout_s10,
          'row_cashout_t10' => $cashout_t10,
          'row_cashout_u10' => $cashout_u10,
          'row_cashout_v10' => $cashout_v10,
          'row_cashout_w10' => $cashout_w10,
          'row_cashout_x10' => $cashout_x10,
          'row_cashout_y10' => $cashout_y10,
          'row_cashout_z10' => $cashout_z10,
          'row_cashout_a210' => $cashout_a210,
          'row_cashout_b210' => $cashout_b210,
          'row_cashout_c210' => $cashout_c210,
          'row_cashout_d210' => $cashout_d210,
          'row_cashout_e210' => $cashout_e210,
          'row_cashout_f210' => $cashout_f210,
          'row_cashout_g210' => $cashout_g210,
          'row_cashout_h210' => $cashout_h210,
          'row_cashout_i210' => $cashout_i210,
          'row_cashout_j210' => $cashout_j210,
          'row_cashout_k210' => $cashout_k210,
          'row_cashout_l210' => $cashout_l210,
          'row_cashout_m210' => $cashout_m210,
          'row_cashout_n210' => $cashout_n210,
          'row_cashout_o210' => $cashout_o210,
          'row_cashout_p210' => $cashout_p210,
          'row_cashout_q210' => $cashout_q210,
          'row_cashout_r210' => $cashout_r210,
          'row_cashout_s210' => $cashout_s210,
          'row_cashout_t210' => $cashout_t210,
          'row_cashout_u210' => $cashout_u210,
          'row_cashout_v210' => $cashout_v210,
          'row_cashout_w210' => $cashout_w210,
          'row_cashout_x210' => $cashout_x210,
          'row_cashout_y210' => $cashout_y210,
          'row_cashout_z210' => $cashout_z210,
          'row_cashout_a310' => $cashout_a310,
          'row_cashout_b310' => $cashout_b310,
          'row_cashout_c310' => $cashout_c310,
          'row_cashout_d310' => $cashout_d310,
          'row_cashout_e310' => $cashout_e310,
          'row_cashout_f310' => $cashout_f310,
          'row_cashout_g310' => $cashout_g310,
          'row_cashout_h310' => $cashout_h310,
          'row_cashout_i310' => $cashout_i310,
          'row_cashout_j310' => $cashout_j310,
          'row_cashout_k310' => $cashout_k310,
          'row_cashout_l310' => $cashout_l310,
          'row_tCashoutProj10' => $tCashoutProj_10,
          'row_tCashoutReal10' => $tCashoutReal_10,

          // Cash-Out Hari Ke-11
          'row_cashout_a11' => $cashout_a11,
          'row_cashout_b11' => $cashout_b11,
          'row_cashout_c11' => $cashout_c11,
          'row_cashout_d11' => $cashout_d11,
          'row_cashout_e11' => $cashout_e11,
          'row_cashout_f11' => $cashout_f11,
          'row_cashout_g11' => $cashout_g11,
          'row_cashout_h11' => $cashout_h11,
          'row_cashout_i11' => $cashout_i11,
          'row_cashout_j11' => $cashout_j11,
          'row_cashout_k11' => $cashout_k11,
          'row_cashout_l11' => $cashout_l11,
          'row_cashout_m11' => $cashout_m11,
          'row_cashout_n11' => $cashout_n11,
          'row_cashout_o11' => $cashout_o11,
          'row_cashout_p11' => $cashout_p11,
          'row_cashout_q11' => $cashout_q11,
          'row_cashout_r11' => $cashout_r11,
          'row_cashout_s11' => $cashout_s11,
          'row_cashout_t11' => $cashout_t11,
          'row_cashout_u11' => $cashout_u11,
          'row_cashout_v11' => $cashout_v11,
          'row_cashout_w11' => $cashout_w11,
          'row_cashout_x11' => $cashout_x11,
          'row_cashout_y11' => $cashout_y11,
          'row_cashout_z11' => $cashout_z11,
          'row_cashout_a211' => $cashout_a211,
          'row_cashout_b211' => $cashout_b211,
          'row_cashout_c211' => $cashout_c211,
          'row_cashout_d211' => $cashout_d211,
          'row_cashout_e211' => $cashout_e211,
          'row_cashout_f211' => $cashout_f211,
          'row_cashout_g211' => $cashout_g211,
          'row_cashout_h211' => $cashout_h211,
          'row_cashout_i211' => $cashout_i211,
          'row_cashout_j211' => $cashout_j211,
          'row_cashout_k211' => $cashout_k211,
          'row_cashout_l211' => $cashout_l211,
          'row_cashout_m211' => $cashout_m211,
          'row_cashout_n211' => $cashout_n211,
          'row_cashout_o211' => $cashout_o211,
          'row_cashout_p211' => $cashout_p211,
          'row_cashout_q211' => $cashout_q211,
          'row_cashout_r211' => $cashout_r211,
          'row_cashout_s211' => $cashout_s211,
          'row_cashout_t211' => $cashout_t211,
          'row_cashout_u211' => $cashout_u211,
          'row_cashout_v211' => $cashout_v211,
          'row_cashout_w211' => $cashout_w211,
          'row_cashout_x211' => $cashout_x211,
          'row_cashout_y211' => $cashout_y211,
          'row_cashout_z211' => $cashout_z211,
          'row_cashout_a311' => $cashout_a311,
          'row_cashout_b311' => $cashout_b311,
          'row_cashout_c311' => $cashout_c311,
          'row_cashout_d311' => $cashout_d311,
          'row_cashout_e311' => $cashout_e311,
          'row_cashout_f311' => $cashout_f311,
          'row_cashout_g311' => $cashout_g311,
          'row_cashout_h311' => $cashout_h311,
          'row_cashout_i311' => $cashout_i311,
          'row_cashout_j311' => $cashout_j311,
          'row_cashout_k311' => $cashout_k311,
          'row_cashout_l311' => $cashout_l311,
          'row_tCashoutProj11' => $tCashoutProj_11,
          'row_tCashoutReal11' => $tCashoutReal_11,

          // Cash-Out Hari Ke-12
          'row_cashout_a12' => $cashout_a12,
          'row_cashout_b12' => $cashout_b12,
          'row_cashout_c12' => $cashout_c12,
          'row_cashout_d12' => $cashout_d12,
          'row_cashout_e12' => $cashout_e12,
          'row_cashout_f12' => $cashout_f12,
          'row_cashout_g12' => $cashout_g12,
          'row_cashout_h12' => $cashout_h12,
          'row_cashout_i12' => $cashout_i12,
          'row_cashout_j12' => $cashout_j12,
          'row_cashout_k12' => $cashout_k12,
          'row_cashout_l12' => $cashout_l12,
          'row_cashout_m12' => $cashout_m12,
          'row_cashout_n12' => $cashout_n12,
          'row_cashout_o12' => $cashout_o12,
          'row_cashout_p12' => $cashout_p12,
          'row_cashout_q12' => $cashout_q12,
          'row_cashout_r12' => $cashout_r12,
          'row_cashout_s12' => $cashout_s12,
          'row_cashout_t12' => $cashout_t12,
          'row_cashout_u12' => $cashout_u12,
          'row_cashout_v12' => $cashout_v12,
          'row_cashout_w12' => $cashout_w12,
          'row_cashout_x12' => $cashout_x12,
          'row_cashout_y12' => $cashout_y12,
          'row_cashout_z12' => $cashout_z12,
          'row_cashout_a212' => $cashout_a212,
          'row_cashout_b212' => $cashout_b212,
          'row_cashout_c212' => $cashout_c212,
          'row_cashout_d212' => $cashout_d212,
          'row_cashout_e212' => $cashout_e212,
          'row_cashout_f212' => $cashout_f212,
          'row_cashout_g212' => $cashout_g212,
          'row_cashout_h212' => $cashout_h212,
          'row_cashout_i212' => $cashout_i212,
          'row_cashout_j212' => $cashout_j212,
          'row_cashout_k212' => $cashout_k212,
          'row_cashout_l212' => $cashout_l212,
          'row_cashout_m212' => $cashout_m212,
          'row_cashout_n212' => $cashout_n212,
          'row_cashout_o212' => $cashout_o212,
          'row_cashout_p212' => $cashout_p212,
          'row_cashout_q212' => $cashout_q212,
          'row_cashout_r212' => $cashout_r212,
          'row_cashout_s212' => $cashout_s212,
          'row_cashout_t212' => $cashout_t212,
          'row_cashout_u212' => $cashout_u212,
          'row_cashout_v212' => $cashout_v212,
          'row_cashout_w212' => $cashout_w212,
          'row_cashout_x212' => $cashout_x212,
          'row_cashout_y212' => $cashout_y212,
          'row_cashout_z212' => $cashout_z212,
          'row_cashout_a312' => $cashout_a312,
          'row_cashout_b312' => $cashout_b312,
          'row_cashout_c312' => $cashout_c312,
          'row_cashout_d312' => $cashout_d312,
          'row_cashout_e312' => $cashout_e312,
          'row_cashout_f312' => $cashout_f312,
          'row_cashout_g312' => $cashout_g312,
          'row_cashout_h312' => $cashout_h312,
          'row_cashout_i312' => $cashout_i312,
          'row_cashout_j312' => $cashout_j312,
          'row_cashout_k312' => $cashout_k312,
          'row_cashout_l312' => $cashout_l312,
          'row_tCashoutProj12' => $tCashoutProj_12,
          'row_tCashoutReal12' => $tCashoutReal_12,

          // Cash-Out Hari Ke-13
          'row_cashout_a13' => $cashout_a13,
          'row_cashout_b13' => $cashout_b13,
          'row_cashout_c13' => $cashout_c13,
          'row_cashout_d13' => $cashout_d13,
          'row_cashout_e13' => $cashout_e13,
          'row_cashout_f13' => $cashout_f13,
          'row_cashout_g13' => $cashout_g13,
          'row_cashout_h13' => $cashout_h13,
          'row_cashout_i13' => $cashout_i13,
          'row_cashout_j13' => $cashout_j13,
          'row_cashout_k13' => $cashout_k13,
          'row_cashout_l13' => $cashout_l13,
          'row_cashout_m13' => $cashout_m13,
          'row_cashout_n13' => $cashout_n13,
          'row_cashout_o13' => $cashout_o13,
          'row_cashout_p13' => $cashout_p13,
          'row_cashout_q13' => $cashout_q13,
          'row_cashout_r13' => $cashout_r13,
          'row_cashout_s13' => $cashout_s13,
          'row_cashout_t13' => $cashout_t13,
          'row_cashout_u13' => $cashout_u13,
          'row_cashout_v13' => $cashout_v13,
          'row_cashout_w13' => $cashout_w13,
          'row_cashout_x13' => $cashout_x13,
          'row_cashout_y13' => $cashout_y13,
          'row_cashout_z13' => $cashout_z13,
          'row_cashout_a213' => $cashout_a213,
          'row_cashout_b213' => $cashout_b213,
          'row_cashout_c213' => $cashout_c213,
          'row_cashout_d213' => $cashout_d213,
          'row_cashout_e213' => $cashout_e213,
          'row_cashout_f213' => $cashout_f213,
          'row_cashout_g213' => $cashout_g213,
          'row_cashout_h213' => $cashout_h213,
          'row_cashout_i213' => $cashout_i213,
          'row_cashout_j213' => $cashout_j213,
          'row_cashout_k213' => $cashout_k213,
          'row_cashout_l213' => $cashout_l213,
          'row_cashout_m213' => $cashout_m213,
          'row_cashout_n213' => $cashout_n213,
          'row_cashout_o213' => $cashout_o213,
          'row_cashout_p213' => $cashout_p213,
          'row_cashout_q213' => $cashout_q213,
          'row_cashout_r213' => $cashout_r213,
          'row_cashout_s213' => $cashout_s213,
          'row_cashout_t213' => $cashout_t213,
          'row_cashout_u213' => $cashout_u213,
          'row_cashout_v213' => $cashout_v213,
          'row_cashout_w213' => $cashout_w213,
          'row_cashout_x213' => $cashout_x213,
          'row_cashout_y213' => $cashout_y213,
          'row_cashout_z213' => $cashout_z213,
          'row_cashout_a313' => $cashout_a313,
          'row_cashout_b313' => $cashout_b313,
          'row_cashout_c313' => $cashout_c313,
          'row_cashout_d313' => $cashout_d313,
          'row_cashout_e313' => $cashout_e313,
          'row_cashout_f313' => $cashout_f313,
          'row_cashout_g313' => $cashout_g313,
          'row_cashout_h313' => $cashout_h313,
          'row_cashout_i313' => $cashout_i313,
          'row_cashout_j313' => $cashout_j313,
          'row_cashout_k313' => $cashout_k313,
          'row_cashout_l313' => $cashout_l313,
          'row_tCashoutProj13' => $tCashoutProj_13,
          'row_tCashoutReal13' => $tCashoutReal_13,

          // Cash-Out Hari Ke-14
          'row_cashout_a14' => $cashout_a14,
          'row_cashout_b14' => $cashout_b14,
          'row_cashout_c14' => $cashout_c14,
          'row_cashout_d14' => $cashout_d14,
          'row_cashout_e14' => $cashout_e14,
          'row_cashout_f14' => $cashout_f14,
          'row_cashout_g14' => $cashout_g14,
          'row_cashout_h14' => $cashout_h14,
          'row_cashout_i14' => $cashout_i14,
          'row_cashout_j14' => $cashout_j14,
          'row_cashout_k14' => $cashout_k14,
          'row_cashout_l14' => $cashout_l14,
          'row_cashout_m14' => $cashout_m14,
          'row_cashout_n14' => $cashout_n14,
          'row_cashout_o14' => $cashout_o14,
          'row_cashout_p14' => $cashout_p14,
          'row_cashout_q14' => $cashout_q14,
          'row_cashout_r14' => $cashout_r14,
          'row_cashout_s14' => $cashout_s14,
          'row_cashout_t14' => $cashout_t14,
          'row_cashout_u14' => $cashout_u14,
          'row_cashout_v14' => $cashout_v14,
          'row_cashout_w14' => $cashout_w14,
          'row_cashout_x14' => $cashout_x14,
          'row_cashout_y14' => $cashout_y14,
          'row_cashout_z14' => $cashout_z14,
          'row_cashout_a214' => $cashout_a214,
          'row_cashout_b214' => $cashout_b214,
          'row_cashout_c214' => $cashout_c214,
          'row_cashout_d214' => $cashout_d214,
          'row_cashout_e214' => $cashout_e214,
          'row_cashout_f214' => $cashout_f214,
          'row_cashout_g214' => $cashout_g214,
          'row_cashout_h214' => $cashout_h214,
          'row_cashout_i214' => $cashout_i214,
          'row_cashout_j214' => $cashout_j214,
          'row_cashout_k214' => $cashout_k214,
          'row_cashout_l214' => $cashout_l214,
          'row_cashout_m214' => $cashout_m214,
          'row_cashout_n214' => $cashout_n214,
          'row_cashout_o214' => $cashout_o214,
          'row_cashout_p214' => $cashout_p214,
          'row_cashout_q214' => $cashout_q214,
          'row_cashout_r214' => $cashout_r214,
          'row_cashout_s214' => $cashout_s214,
          'row_cashout_t214' => $cashout_t214,
          'row_cashout_u214' => $cashout_u214,
          'row_cashout_v214' => $cashout_v214,
          'row_cashout_w214' => $cashout_w214,
          'row_cashout_x214' => $cashout_x214,
          'row_cashout_y214' => $cashout_y214,
          'row_cashout_z214' => $cashout_z214,
          'row_cashout_a314' => $cashout_a314,
          'row_cashout_b314' => $cashout_b314,
          'row_cashout_c314' => $cashout_c314,
          'row_cashout_d314' => $cashout_d314,
          'row_cashout_e314' => $cashout_e314,
          'row_cashout_f314' => $cashout_f314,
          'row_cashout_g314' => $cashout_g314,
          'row_cashout_h314' => $cashout_h314,
          'row_cashout_i314' => $cashout_i314,
          'row_cashout_j314' => $cashout_j314,
          'row_cashout_k314' => $cashout_k314,
          'row_cashout_l314' => $cashout_l314,
          'row_tCashoutProj14' => $tCashoutProj_14,
          'row_tCashoutReal14' => $tCashoutReal_14,

          // Cash-Out Hari Ke-15
          'row_cashout_a15' => $cashout_a15,
          'row_cashout_b15' => $cashout_b15,
          'row_cashout_c15' => $cashout_c15,
          'row_cashout_d15' => $cashout_d15,
          'row_cashout_e15' => $cashout_e15,
          'row_cashout_f15' => $cashout_f15,
          'row_cashout_g15' => $cashout_g15,
          'row_cashout_h15' => $cashout_h15,
          'row_cashout_i15' => $cashout_i15,
          'row_cashout_j15' => $cashout_j15,
          'row_cashout_k15' => $cashout_k15,
          'row_cashout_l15' => $cashout_l15,
          'row_cashout_m15' => $cashout_m15,
          'row_cashout_n15' => $cashout_n15,
          'row_cashout_o15' => $cashout_o15,
          'row_cashout_p15' => $cashout_p15,
          'row_cashout_q15' => $cashout_q15,
          'row_cashout_r15' => $cashout_r15,
          'row_cashout_s15' => $cashout_s15,
          'row_cashout_t15' => $cashout_t15,
          'row_cashout_u15' => $cashout_u15,
          'row_cashout_v15' => $cashout_v15,
          'row_cashout_w15' => $cashout_w15,
          'row_cashout_x15' => $cashout_x15,
          'row_cashout_y15' => $cashout_y15,
          'row_cashout_z15' => $cashout_z15,
          'row_cashout_a215' => $cashout_a215,
          'row_cashout_b215' => $cashout_b215,
          'row_cashout_c215' => $cashout_c215,
          'row_cashout_d215' => $cashout_d215,
          'row_cashout_e215' => $cashout_e215,
          'row_cashout_f215' => $cashout_f215,
          'row_cashout_g215' => $cashout_g215,
          'row_cashout_h215' => $cashout_h215,
          'row_cashout_i215' => $cashout_i215,
          'row_cashout_j215' => $cashout_j215,
          'row_cashout_k215' => $cashout_k215,
          'row_cashout_l215' => $cashout_l215,
          'row_cashout_m215' => $cashout_m215,
          'row_cashout_n215' => $cashout_n215,
          'row_cashout_o215' => $cashout_o215,
          'row_cashout_p215' => $cashout_p215,
          'row_cashout_q215' => $cashout_q215,
          'row_cashout_r215' => $cashout_r215,
          'row_cashout_s215' => $cashout_s215,
          'row_cashout_t215' => $cashout_t215,
          'row_cashout_u215' => $cashout_u215,
          'row_cashout_v215' => $cashout_v215,
          'row_cashout_w215' => $cashout_w215,
          'row_cashout_x215' => $cashout_x215,
          'row_cashout_y215' => $cashout_y215,
          'row_cashout_z215' => $cashout_z215,
          'row_cashout_a315' => $cashout_a315,
          'row_cashout_b315' => $cashout_b315,
          'row_cashout_c315' => $cashout_c315,
          'row_cashout_d315' => $cashout_d315,
          'row_cashout_e315' => $cashout_e315,
          'row_cashout_f315' => $cashout_f315,
          'row_cashout_g315' => $cashout_g315,
          'row_cashout_h315' => $cashout_h315,
          'row_cashout_i315' => $cashout_i315,
          'row_cashout_j315' => $cashout_j315,
          'row_cashout_k315' => $cashout_k315,
          'row_cashout_l315' => $cashout_l315,
          'row_tCashoutProj15' => $tCashoutProj_15,
          'row_tCashoutReal15' => $tCashoutReal_15,

          // Cash-Out Hari Ke-16
          'row_cashout_a16' => $cashout_a16,
          'row_cashout_b16' => $cashout_b16,
          'row_cashout_c16' => $cashout_c16,
          'row_cashout_d16' => $cashout_d16,
          'row_cashout_e16' => $cashout_e16,
          'row_cashout_f16' => $cashout_f16,
          'row_cashout_g16' => $cashout_g16,
          'row_cashout_h16' => $cashout_h16,
          'row_cashout_i16' => $cashout_i16,
          'row_cashout_j16' => $cashout_j16,
          'row_cashout_k16' => $cashout_k16,
          'row_cashout_l16' => $cashout_l16,
          'row_cashout_m16' => $cashout_m16,
          'row_cashout_n16' => $cashout_n16,
          'row_cashout_o16' => $cashout_o16,
          'row_cashout_p16' => $cashout_p16,
          'row_cashout_q16' => $cashout_q16,
          'row_cashout_r16' => $cashout_r16,
          'row_cashout_s16' => $cashout_s16,
          'row_cashout_t16' => $cashout_t16,
          'row_cashout_u16' => $cashout_u16,
          'row_cashout_v16' => $cashout_v16,
          'row_cashout_w16' => $cashout_w16,
          'row_cashout_x16' => $cashout_x16,
          'row_cashout_y16' => $cashout_y16,
          'row_cashout_z16' => $cashout_z16,
          'row_cashout_a216' => $cashout_a216,
          'row_cashout_b216' => $cashout_b216,
          'row_cashout_c216' => $cashout_c216,
          'row_cashout_d216' => $cashout_d216,
          'row_cashout_e216' => $cashout_e216,
          'row_cashout_f216' => $cashout_f216,
          'row_cashout_g216' => $cashout_g216,
          'row_cashout_h216' => $cashout_h216,
          'row_cashout_i216' => $cashout_i216,
          'row_cashout_j216' => $cashout_j216,
          'row_cashout_k216' => $cashout_k216,
          'row_cashout_l216' => $cashout_l216,
          'row_cashout_m216' => $cashout_m216,
          'row_cashout_n216' => $cashout_n216,
          'row_cashout_o216' => $cashout_o216,
          'row_cashout_p216' => $cashout_p216,
          'row_cashout_q216' => $cashout_q216,
          'row_cashout_r216' => $cashout_r216,
          'row_cashout_s216' => $cashout_s216,
          'row_cashout_t216' => $cashout_t216,
          'row_cashout_u216' => $cashout_u216,
          'row_cashout_v216' => $cashout_v216,
          'row_cashout_w216' => $cashout_w216,
          'row_cashout_x216' => $cashout_x216,
          'row_cashout_y216' => $cashout_y216,
          'row_cashout_z216' => $cashout_z216,
          'row_cashout_a316' => $cashout_a316,
          'row_cashout_b316' => $cashout_b316,
          'row_cashout_c316' => $cashout_c316,
          'row_cashout_d316' => $cashout_d316,
          'row_cashout_e316' => $cashout_e316,
          'row_cashout_f316' => $cashout_f316,
          'row_cashout_g316' => $cashout_g316,
          'row_cashout_h316' => $cashout_h316,
          'row_cashout_i316' => $cashout_i316,
          'row_cashout_j316' => $cashout_j316,
          'row_cashout_k316' => $cashout_k316,
          'row_cashout_l316' => $cashout_l316,
          'row_tCashoutProj16' => $tCashoutProj_16,
          'row_tCashoutReal16' => $tCashoutReal_16,

          // Cash-Out Hari Ke-17
          'row_cashout_a17' => $cashout_a17,
          'row_cashout_b17' => $cashout_b17,
          'row_cashout_c17' => $cashout_c17,
          'row_cashout_d17' => $cashout_d17,
          'row_cashout_e17' => $cashout_e17,
          'row_cashout_f17' => $cashout_f17,
          'row_cashout_g17' => $cashout_g17,
          'row_cashout_h17' => $cashout_h17,
          'row_cashout_i17' => $cashout_i17,
          'row_cashout_j17' => $cashout_j17,
          'row_cashout_k17' => $cashout_k17,
          'row_cashout_l17' => $cashout_l17,
          'row_cashout_m17' => $cashout_m17,
          'row_cashout_n17' => $cashout_n17,
          'row_cashout_o17' => $cashout_o17,
          'row_cashout_p17' => $cashout_p17,
          'row_cashout_q17' => $cashout_q17,
          'row_cashout_r17' => $cashout_r17,
          'row_cashout_s17' => $cashout_s17,
          'row_cashout_t17' => $cashout_t17,
          'row_cashout_u17' => $cashout_u17,
          'row_cashout_v17' => $cashout_v17,
          'row_cashout_w17' => $cashout_w17,
          'row_cashout_x17' => $cashout_x17,
          'row_cashout_y17' => $cashout_y17,
          'row_cashout_z17' => $cashout_z17,
          'row_cashout_a217' => $cashout_a217,
          'row_cashout_b217' => $cashout_b217,
          'row_cashout_c217' => $cashout_c217,
          'row_cashout_d217' => $cashout_d217,
          'row_cashout_e217' => $cashout_e217,
          'row_cashout_f217' => $cashout_f217,
          'row_cashout_g217' => $cashout_g217,
          'row_cashout_h217' => $cashout_h217,
          'row_cashout_i217' => $cashout_i217,
          'row_cashout_j217' => $cashout_j217,
          'row_cashout_k217' => $cashout_k217,
          'row_cashout_l217' => $cashout_l217,
          'row_cashout_m217' => $cashout_m217,
          'row_cashout_n217' => $cashout_n217,
          'row_cashout_o217' => $cashout_o217,
          'row_cashout_p217' => $cashout_p217,
          'row_cashout_q217' => $cashout_q217,
          'row_cashout_r217' => $cashout_r217,
          'row_cashout_s217' => $cashout_s217,
          'row_cashout_t217' => $cashout_t217,
          'row_cashout_u217' => $cashout_u217,
          'row_cashout_v217' => $cashout_v217,
          'row_cashout_w217' => $cashout_w217,
          'row_cashout_x217' => $cashout_x217,
          'row_cashout_y217' => $cashout_y217,
          'row_cashout_z217' => $cashout_z217,
          'row_cashout_a317' => $cashout_a317,
          'row_cashout_b317' => $cashout_b317,
          'row_cashout_c317' => $cashout_c317,
          'row_cashout_d317' => $cashout_d317,
          'row_cashout_e317' => $cashout_e317,
          'row_cashout_f317' => $cashout_f317,
          'row_cashout_g317' => $cashout_g317,
          'row_cashout_h317' => $cashout_h317,
          'row_cashout_i317' => $cashout_i317,
          'row_cashout_j317' => $cashout_j317,
          'row_cashout_k317' => $cashout_k317,
          'row_cashout_l317' => $cashout_l317,
          'row_tCashoutProj17' => $tCashoutProj_17,
          'row_tCashoutReal17' => $tCashoutReal_17,

          // Cash-Out Hari Ke-18
          'row_cashout_a18' => $cashout_a18,
          'row_cashout_b18' => $cashout_b18,
          'row_cashout_c18' => $cashout_c18,
          'row_cashout_d18' => $cashout_d18,
          'row_cashout_e18' => $cashout_e18,
          'row_cashout_f18' => $cashout_f18,
          'row_cashout_g18' => $cashout_g18,
          'row_cashout_h18' => $cashout_h18,
          'row_cashout_i18' => $cashout_i18,
          'row_cashout_j18' => $cashout_j18,
          'row_cashout_k18' => $cashout_k18,
          'row_cashout_l18' => $cashout_l18,
          'row_cashout_m18' => $cashout_m18,
          'row_cashout_n18' => $cashout_n18,
          'row_cashout_o18' => $cashout_o18,
          'row_cashout_p18' => $cashout_p18,
          'row_cashout_q18' => $cashout_q18,
          'row_cashout_r18' => $cashout_r18,
          'row_cashout_s18' => $cashout_s18,
          'row_cashout_t18' => $cashout_t18,
          'row_cashout_u18' => $cashout_u18,
          'row_cashout_v18' => $cashout_v18,
          'row_cashout_w18' => $cashout_w18,
          'row_cashout_x18' => $cashout_x18,
          'row_cashout_y18' => $cashout_y18,
          'row_cashout_z18' => $cashout_z18,
          'row_cashout_a218' => $cashout_a218,
          'row_cashout_b218' => $cashout_b218,
          'row_cashout_c218' => $cashout_c218,
          'row_cashout_d218' => $cashout_d218,
          'row_cashout_e218' => $cashout_e218,
          'row_cashout_f218' => $cashout_f218,
          'row_cashout_g218' => $cashout_g218,
          'row_cashout_h218' => $cashout_h218,
          'row_cashout_i218' => $cashout_i218,
          'row_cashout_j218' => $cashout_j218,
          'row_cashout_k218' => $cashout_k218,
          'row_cashout_l218' => $cashout_l218,
          'row_cashout_m218' => $cashout_m218,
          'row_cashout_n218' => $cashout_n218,
          'row_cashout_o218' => $cashout_o218,
          'row_cashout_p218' => $cashout_p218,
          'row_cashout_q218' => $cashout_q218,
          'row_cashout_r218' => $cashout_r218,
          'row_cashout_s218' => $cashout_s218,
          'row_cashout_t218' => $cashout_t218,
          'row_cashout_u218' => $cashout_u218,
          'row_cashout_v218' => $cashout_v218,
          'row_cashout_w218' => $cashout_w218,
          'row_cashout_x218' => $cashout_x218,
          'row_cashout_y218' => $cashout_y218,
          'row_cashout_z218' => $cashout_z218,
          'row_cashout_a318' => $cashout_a318,
          'row_cashout_b318' => $cashout_b318,
          'row_cashout_c318' => $cashout_c318,
          'row_cashout_d318' => $cashout_d318,
          'row_cashout_e318' => $cashout_e318,
          'row_cashout_f318' => $cashout_f318,
          'row_cashout_g318' => $cashout_g318,
          'row_cashout_h318' => $cashout_h318,
          'row_cashout_i318' => $cashout_i318,
          'row_cashout_j318' => $cashout_j318,
          'row_cashout_k318' => $cashout_k318,
          'row_cashout_l318' => $cashout_l318,
          'row_tCashoutProj18' => $tCashoutProj_18,
          'row_tCashoutReal18' => $tCashoutReal_18,

          // Cash-Out Hari Ke-19
          'row_cashout_a19' => $cashout_a19,
          'row_cashout_b19' => $cashout_b19,
          'row_cashout_c19' => $cashout_c19,
          'row_cashout_d19' => $cashout_d19,
          'row_cashout_e19' => $cashout_e19,
          'row_cashout_f19' => $cashout_f19,
          'row_cashout_g19' => $cashout_g19,
          'row_cashout_h19' => $cashout_h19,
          'row_cashout_i19' => $cashout_i19,
          'row_cashout_j19' => $cashout_j19,
          'row_cashout_k19' => $cashout_k19,
          'row_cashout_l19' => $cashout_l19,
          'row_cashout_m19' => $cashout_m19,
          'row_cashout_n19' => $cashout_n19,
          'row_cashout_o19' => $cashout_o19,
          'row_cashout_p19' => $cashout_p19,
          'row_cashout_q19' => $cashout_q19,
          'row_cashout_r19' => $cashout_r19,
          'row_cashout_s19' => $cashout_s19,
          'row_cashout_t19' => $cashout_t19,
          'row_cashout_u19' => $cashout_u19,
          'row_cashout_v19' => $cashout_v19,
          'row_cashout_w19' => $cashout_w19,
          'row_cashout_x19' => $cashout_x19,
          'row_cashout_y19' => $cashout_y19,
          'row_cashout_z19' => $cashout_z19,
          'row_cashout_a219' => $cashout_a219,
          'row_cashout_b219' => $cashout_b219,
          'row_cashout_c219' => $cashout_c219,
          'row_cashout_d219' => $cashout_d219,
          'row_cashout_e219' => $cashout_e219,
          'row_cashout_f219' => $cashout_f219,
          'row_cashout_g219' => $cashout_g219,
          'row_cashout_h219' => $cashout_h219,
          'row_cashout_i219' => $cashout_i219,
          'row_cashout_j219' => $cashout_j219,
          'row_cashout_k219' => $cashout_k219,
          'row_cashout_l219' => $cashout_l219,
          'row_cashout_m219' => $cashout_m219,
          'row_cashout_n219' => $cashout_n219,
          'row_cashout_o219' => $cashout_o219,
          'row_cashout_p219' => $cashout_p219,
          'row_cashout_q219' => $cashout_q219,
          'row_cashout_r219' => $cashout_r219,
          'row_cashout_s219' => $cashout_s219,
          'row_cashout_t219' => $cashout_t219,
          'row_cashout_u219' => $cashout_u219,
          'row_cashout_v219' => $cashout_v219,
          'row_cashout_w219' => $cashout_w219,
          'row_cashout_x219' => $cashout_x219,
          'row_cashout_y219' => $cashout_y219,
          'row_cashout_z219' => $cashout_z219,
          'row_cashout_a319' => $cashout_a319,
          'row_cashout_b319' => $cashout_b319,
          'row_cashout_c319' => $cashout_c319,
          'row_cashout_d319' => $cashout_d319,
          'row_cashout_e319' => $cashout_e319,
          'row_cashout_f319' => $cashout_f319,
          'row_cashout_g319' => $cashout_g319,
          'row_cashout_h319' => $cashout_h319,
          'row_cashout_i319' => $cashout_i319,
          'row_cashout_j319' => $cashout_j319,
          'row_cashout_k319' => $cashout_k319,
          'row_cashout_l319' => $cashout_l319,
          'row_tCashoutProj19' => $tCashoutProj_19,
          'row_tCashoutReal19' => $tCashoutReal_19,

          // Cash-Out Hari Ke-20
          'row_cashout_a20' => $cashout_a20,
          'row_cashout_b20' => $cashout_b20,
          'row_cashout_c20' => $cashout_c20,
          'row_cashout_d20' => $cashout_d20,
          'row_cashout_e20' => $cashout_e20,
          'row_cashout_f20' => $cashout_f20,
          'row_cashout_g20' => $cashout_g20,
          'row_cashout_h20' => $cashout_h20,
          'row_cashout_i20' => $cashout_i20,
          'row_cashout_j20' => $cashout_j20,
          'row_cashout_k20' => $cashout_k20,
          'row_cashout_l20' => $cashout_l20,
          'row_cashout_m20' => $cashout_m20,
          'row_cashout_n20' => $cashout_n20,
          'row_cashout_o20' => $cashout_o20,
          'row_cashout_p20' => $cashout_p20,
          'row_cashout_q20' => $cashout_q20,
          'row_cashout_r20' => $cashout_r20,
          'row_cashout_s20' => $cashout_s20,
          'row_cashout_t20' => $cashout_t20,
          'row_cashout_u20' => $cashout_u20,
          'row_cashout_v20' => $cashout_v20,
          'row_cashout_w20' => $cashout_w20,
          'row_cashout_x20' => $cashout_x20,
          'row_cashout_y20' => $cashout_y20,
          'row_cashout_z20' => $cashout_z20,
          'row_cashout_a220' => $cashout_a220,
          'row_cashout_b220' => $cashout_b220,
          'row_cashout_c220' => $cashout_c220,
          'row_cashout_d220' => $cashout_d220,
          'row_cashout_e220' => $cashout_e220,
          'row_cashout_f220' => $cashout_f220,
          'row_cashout_g220' => $cashout_g220,
          'row_cashout_h220' => $cashout_h220,
          'row_cashout_i220' => $cashout_i220,
          'row_cashout_j220' => $cashout_j220,
          'row_cashout_k220' => $cashout_k220,
          'row_cashout_l220' => $cashout_l220,
          'row_cashout_m220' => $cashout_m220,
          'row_cashout_n220' => $cashout_n220,
          'row_cashout_o220' => $cashout_o220,
          'row_cashout_p220' => $cashout_p220,
          'row_cashout_q220' => $cashout_q220,
          'row_cashout_r220' => $cashout_r220,
          'row_cashout_s220' => $cashout_s220,
          'row_cashout_t220' => $cashout_t220,
          'row_cashout_u220' => $cashout_u220,
          'row_cashout_v220' => $cashout_v220,
          'row_cashout_w220' => $cashout_w220,
          'row_cashout_x220' => $cashout_x220,
          'row_cashout_y220' => $cashout_y220,
          'row_cashout_z220' => $cashout_z220,
          'row_cashout_a320' => $cashout_a320,
          'row_cashout_b320' => $cashout_b320,
          'row_cashout_c320' => $cashout_c320,
          'row_cashout_d320' => $cashout_d320,
          'row_cashout_e320' => $cashout_e320,
          'row_cashout_f320' => $cashout_f320,
          'row_cashout_g320' => $cashout_g320,
          'row_cashout_h320' => $cashout_h320,
          'row_cashout_i320' => $cashout_i320,
          'row_cashout_j320' => $cashout_j320,
          'row_cashout_k320' => $cashout_k320,
          'row_cashout_l320' => $cashout_l320,
          'row_tCashoutProj20' => $tCashoutProj_20,
          'row_tCashoutReal20' => $tCashoutReal_20,

          // Cash-Out Hari Ke-21
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
          'row_cashout_a221' => $cashout_a221,
          'row_cashout_b221' => $cashout_b221,
          'row_cashout_c221' => $cashout_c221,
          'row_cashout_d221' => $cashout_d221,
          'row_cashout_e221' => $cashout_e221,
          'row_cashout_f221' => $cashout_f221,
          'row_cashout_g221' => $cashout_g221,
          'row_cashout_h221' => $cashout_h221,
          'row_cashout_i221' => $cashout_i221,
          'row_cashout_j221' => $cashout_j221,
          'row_cashout_k221' => $cashout_k221,
          'row_cashout_l221' => $cashout_l221,
          'row_cashout_m221' => $cashout_m221,
          'row_cashout_n221' => $cashout_n221,
          'row_cashout_o221' => $cashout_o221,
          'row_cashout_p221' => $cashout_p221,
          'row_cashout_q221' => $cashout_q221,
          'row_cashout_r221' => $cashout_r221,
          'row_cashout_s221' => $cashout_s221,
          'row_cashout_t221' => $cashout_t221,
          'row_cashout_u221' => $cashout_u221,
          'row_cashout_v221' => $cashout_v221,
          'row_cashout_w221' => $cashout_w221,
          'row_cashout_x221' => $cashout_x221,
          'row_cashout_y221' => $cashout_y221,
          'row_cashout_z221' => $cashout_z221,
          'row_cashout_a321' => $cashout_a321,
          'row_cashout_b321' => $cashout_b321,
          'row_cashout_c321' => $cashout_c321,
          'row_cashout_d321' => $cashout_d321,
          'row_cashout_e321' => $cashout_e321,
          'row_cashout_f321' => $cashout_f321,
          'row_cashout_g321' => $cashout_g321,
          'row_cashout_h321' => $cashout_h321,
          'row_cashout_i321' => $cashout_i321,
          'row_cashout_j321' => $cashout_j321,
          'row_cashout_k321' => $cashout_k321,
          'row_cashout_l321' => $cashout_l321,
          'row_tCashoutProj21' => $tCashoutProj_21,
          'row_tCashoutReal21' => $tCashoutReal_21,

          // Cash-Out Hari Ke-22
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
          'row_cashout_a222' => $cashout_a222,
          'row_cashout_b222' => $cashout_b222,
          'row_cashout_c222' => $cashout_c222,
          'row_cashout_d222' => $cashout_d222,
          'row_cashout_e222' => $cashout_e222,
          'row_cashout_f222' => $cashout_f222,
          'row_cashout_g222' => $cashout_g222,
          'row_cashout_h222' => $cashout_h222,
          'row_cashout_i222' => $cashout_i222,
          'row_cashout_j222' => $cashout_j222,
          'row_cashout_k222' => $cashout_k222,
          'row_cashout_l222' => $cashout_l222,
          'row_cashout_m222' => $cashout_m222,
          'row_cashout_n222' => $cashout_n222,
          'row_cashout_o222' => $cashout_o222,
          'row_cashout_p222' => $cashout_p222,
          'row_cashout_q222' => $cashout_q222,
          'row_cashout_r222' => $cashout_r222,
          'row_cashout_s222' => $cashout_s222,
          'row_cashout_t222' => $cashout_t222,
          'row_cashout_u222' => $cashout_u222,
          'row_cashout_v222' => $cashout_v222,
          'row_cashout_w222' => $cashout_w222,
          'row_cashout_x222' => $cashout_x222,
          'row_cashout_y222' => $cashout_y222,
          'row_cashout_z222' => $cashout_z222,
          'row_cashout_a322' => $cashout_a322,
          'row_cashout_b322' => $cashout_b322,
          'row_cashout_c322' => $cashout_c322,
          'row_cashout_d322' => $cashout_d322,
          'row_cashout_e322' => $cashout_e322,
          'row_cashout_f322' => $cashout_f322,
          'row_cashout_g322' => $cashout_g322,
          'row_cashout_h322' => $cashout_h322,
          'row_cashout_i322' => $cashout_i322,
          'row_cashout_j322' => $cashout_j322,
          'row_cashout_k322' => $cashout_k322,
          'row_cashout_l322' => $cashout_l322,
          'row_tCashoutProj22' => $tCashoutProj_22,
          'row_tCashoutReal22' => $tCashoutReal_22,

          // Cash-Out Hari Ke-23
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
          'row_cashout_a223' => $cashout_a223,
          'row_cashout_b223' => $cashout_b223,
          'row_cashout_c223' => $cashout_c223,
          'row_cashout_d223' => $cashout_d223,
          'row_cashout_e223' => $cashout_e223,
          'row_cashout_f223' => $cashout_f223,
          'row_cashout_g223' => $cashout_g223,
          'row_cashout_h223' => $cashout_h223,
          'row_cashout_i223' => $cashout_i223,
          'row_cashout_j223' => $cashout_j223,
          'row_cashout_k223' => $cashout_k223,
          'row_cashout_l223' => $cashout_l223,
          'row_cashout_m223' => $cashout_m223,
          'row_cashout_n223' => $cashout_n223,
          'row_cashout_o223' => $cashout_o223,
          'row_cashout_p223' => $cashout_p223,
          'row_cashout_q223' => $cashout_q223,
          'row_cashout_r223' => $cashout_r223,
          'row_cashout_s223' => $cashout_s223,
          'row_cashout_t223' => $cashout_t223,
          'row_cashout_u223' => $cashout_u223,
          'row_cashout_v223' => $cashout_v223,
          'row_cashout_w223' => $cashout_w223,
          'row_cashout_x223' => $cashout_x223,
          'row_cashout_y223' => $cashout_y223,
          'row_cashout_z223' => $cashout_z223,
          'row_cashout_a323' => $cashout_a323,
          'row_cashout_b323' => $cashout_b323,
          'row_cashout_c323' => $cashout_c323,
          'row_cashout_d323' => $cashout_d323,
          'row_cashout_e323' => $cashout_e323,
          'row_cashout_f323' => $cashout_f323,
          'row_cashout_g323' => $cashout_g323,
          'row_cashout_h323' => $cashout_h323,
          'row_cashout_i323' => $cashout_i323,
          'row_cashout_j323' => $cashout_j323,
          'row_cashout_k323' => $cashout_k323,
          'row_cashout_l323' => $cashout_l323,
          'row_tCashoutProj23' => $tCashoutProj_23,
          'row_tCashoutReal23' => $tCashoutReal_23,

          // Cash-Out Hari Ke-24
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
          'row_cashout_a224' => $cashout_a224,
          'row_cashout_b224' => $cashout_b224,
          'row_cashout_c224' => $cashout_c224,
          'row_cashout_d224' => $cashout_d224,
          'row_cashout_e224' => $cashout_e224,
          'row_cashout_f224' => $cashout_f224,
          'row_cashout_g224' => $cashout_g224,
          'row_cashout_h224' => $cashout_h224,
          'row_cashout_i224' => $cashout_i224,
          'row_cashout_j224' => $cashout_j224,
          'row_cashout_k224' => $cashout_k224,
          'row_cashout_l224' => $cashout_l224,
          'row_cashout_m224' => $cashout_m224,
          'row_cashout_n224' => $cashout_n224,
          'row_cashout_o224' => $cashout_o224,
          'row_cashout_p224' => $cashout_p224,
          'row_cashout_q224' => $cashout_q224,
          'row_cashout_r224' => $cashout_r224,
          'row_cashout_s224' => $cashout_s224,
          'row_cashout_t224' => $cashout_t224,
          'row_cashout_u224' => $cashout_u224,
          'row_cashout_v224' => $cashout_v224,
          'row_cashout_w224' => $cashout_w224,
          'row_cashout_x224' => $cashout_x224,
          'row_cashout_y224' => $cashout_y224,
          'row_cashout_z224' => $cashout_z224,
          'row_cashout_a324' => $cashout_a324,
          'row_cashout_b324' => $cashout_b324,
          'row_cashout_c324' => $cashout_c324,
          'row_cashout_d324' => $cashout_d324,
          'row_cashout_e324' => $cashout_e324,
          'row_cashout_f324' => $cashout_f324,
          'row_cashout_g324' => $cashout_g324,
          'row_cashout_h324' => $cashout_h324,
          'row_cashout_i324' => $cashout_i324,
          'row_cashout_j324' => $cashout_j324,
          'row_cashout_k324' => $cashout_k324,
          'row_cashout_l324' => $cashout_l324,
          'row_tCashoutProj24' => $tCashoutProj_24,
          'row_tCashoutReal24' => $tCashoutReal_24,

          // Cash-Out Hari Ke-25
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
          'row_cashout_a225' => $cashout_a225,
          'row_cashout_b225' => $cashout_b225,
          'row_cashout_c225' => $cashout_c225,
          'row_cashout_d225' => $cashout_d225,
          'row_cashout_e225' => $cashout_e225,
          'row_cashout_f225' => $cashout_f225,
          'row_cashout_g225' => $cashout_g225,
          'row_cashout_h225' => $cashout_h225,
          'row_cashout_i225' => $cashout_i225,
          'row_cashout_j225' => $cashout_j225,
          'row_cashout_k225' => $cashout_k225,
          'row_cashout_l225' => $cashout_l225,
          'row_cashout_m225' => $cashout_m225,
          'row_cashout_n225' => $cashout_n225,
          'row_cashout_o225' => $cashout_o225,
          'row_cashout_p225' => $cashout_p225,
          'row_cashout_q225' => $cashout_q225,
          'row_cashout_r225' => $cashout_r225,
          'row_cashout_s225' => $cashout_s225,
          'row_cashout_t225' => $cashout_t225,
          'row_cashout_u225' => $cashout_u225,
          'row_cashout_v225' => $cashout_v225,
          'row_cashout_w225' => $cashout_w225,
          'row_cashout_x225' => $cashout_x225,
          'row_cashout_y225' => $cashout_y225,
          'row_cashout_z225' => $cashout_z225,
          'row_cashout_a325' => $cashout_a325,
          'row_cashout_b325' => $cashout_b325,
          'row_cashout_c325' => $cashout_c325,
          'row_cashout_d325' => $cashout_d325,
          'row_cashout_e325' => $cashout_e325,
          'row_cashout_f325' => $cashout_f325,
          'row_cashout_g325' => $cashout_g325,
          'row_cashout_h325' => $cashout_h325,
          'row_cashout_i325' => $cashout_i325,
          'row_cashout_j325' => $cashout_j325,
          'row_cashout_k325' => $cashout_k325,
          'row_cashout_l325' => $cashout_l325,
          'row_tCashoutProj25' => $tCashoutProj_25,
          'row_tCashoutReal25' => $tCashoutReal_25

        ));
        $this->load->view('footer');
		
		} // Penutup else S_POST

		// ...................................................................................

		
	}
}
