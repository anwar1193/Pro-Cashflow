<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deposito extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('helperku');
		$this->load->library('libraryku');
		$this->load->model('M_deposito');
	}

	public function update(){
		date_default_timezone_set("Asia/Jakarta");
		$deposito = $this->input->post('deposito');
		$tanggal = $this->input->post('tanggal');

		// Cek apa deposito di tanggal tersebut sudah ada?
		$cek = $this->M_deposito->cek_deposito('tbl_deposito', array('tanggal'=>$tanggal));
		if($cek>0){ // jika sudah ada deposito
			$result = $this->M_deposito->update_deposito('tbl_deposito', array(
				'deposito' => $deposito
			), array('tanggal' => $tanggal));
		}else{ // jika belum ada deposito
			$result = $this->M_deposito->simpan_deposito('tbl_deposito', array(
				'tanggal' => $tanggal,
				'deposito' => $deposito
			));
		}
		

		if($result>0){
			echo '<script>
				alert("Deposito Tersimpan");window.location="ke_home";
			</script>';
		}
	}

	public function ke_home(){
		redirect('home');
	}

}
