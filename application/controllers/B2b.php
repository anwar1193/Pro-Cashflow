<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B2b extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('helperku');
		$this->load->library('libraryku');
		$this->load->model('M_b2b');
	}

	public function update(){
		date_default_timezone_set("Asia/Jakarta");
		$b2b = $this->input->post('b2b');
		$tanggal = $this->input->post('tanggal');

		// Cek apa b2b di tanggal tersebut sudah ada?
		$cek = $this->M_b2b->cek_b2b('tbl_b2b', array('tanggal'=>$tanggal));
		if($cek>0){ // jika sudah ada b2b
			$result = $this->M_b2b->update_b2b('tbl_b2b', array(
				'b2b' => $b2b
			), array('tanggal' => $tanggal));
		}else{ // jika belum ada b2b
			$result = $this->M_b2b->simpan_b2b('tbl_b2b', array(
				'tanggal' => $tanggal,
				'b2b' => $b2b
			));
		}
		

		if($result>0){
			echo '<script>
				alert("Dana B2B Tersimpan");window.location="ke_home";
			</script>';
		}
	}

	public function ke_home(){
		redirect('home');
	}

}
