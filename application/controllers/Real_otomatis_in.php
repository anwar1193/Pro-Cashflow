<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Real_otomatis_in extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('helperku');
		$this->load->library('libraryku');
		$this->load->model('M_real_otomatis_in');
	}

	public function index()
	{
		date_default_timezone_set("Asia/Jakarta");
		cek_belum_login();

		$result = $this->M_real_otomatis_in->tampil_cashin_proj();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_real_otomatis_in',array('row'=>$result));
		$this->load->view('footer');
	}

	public function approve(){
		date_default_timezone_set("Asia/Jakarta");
		$tgl = $this->input->post('tanggal');
		$tanggal = date('d-m-Y',strtotime($tgl));

		$result = $this->M_real_otomatis_in->approve('tbl_cashinreal',array(
			'kode_status' => $this->input->post('kode_status'),
			'status' => $this->input->post('status'),
			'tanggal' => $tanggal,
			'realisasi' => $this->input->post('realisasi')
		));

		if($result>0){
			$kode_status = $this->input->post('kode_status');

			// Jika Yang Diinput Pencairan Deposito (R) Maka Update Jumlah Deposito (di tbl_deposito)
			if($kode_status=='R'){
				$r_deposito = $this->M_real_otomatis_in->tampil_deposito();
				$deposito_awal = $r_deposito['deposito'];
				$pengurangan_deposito = $this->input->post('realisasi');

				$this->M_real_otomatis_in->update_deposito('tbl_deposito', array(
					'deposito' => $deposito_awal - $pengurangan_deposito
				), array('id' => 1));
			}

			// Jika Yang Diinput Pencairan Rek B2B (S) Maka Update Jumlah Rek B2B (di tbl_b2b)
			elseif($kode_status=='S'){
				$r_b2b = $this->M_real_otomatis_in->tampil_b2b();
				$b2b_awal = $r_b2b['b2b'];
				$pengurangan_b2b = $this->input->post('realisasi');

				$this->M_real_otomatis_in->update_b2b('tbl_b2b', array(
					'b2b' => $b2b_awal - $pengurangan_b2b
				), array('id' => 1));
			}

			redirect('real_otomatis_in');
		}
	}

	public function edit_amount_cashin($id){
		$result = $this->M_real_otomatis_in->edit_amount_cashin('tbl_cashinproj',array('id'=>$id));
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_edit_amout_cashin',array('row'=>$result));
		$this->load->view('footer');
	}

	public function update_amount_cashin(){
		$result = $this->M_real_otomatis_in->update_amount_cashin('tbl_cashinproj',array(
			'projection' => $this->input->post('projection')
		),array('id' => $this->input->post('id')));

		if($result>0){
			$status = $this->input->post('status');
			$tanggal = $this->input->post('tanggal');
			$tgl = date('d-m-Y',strtotime($tanggal));

			$this->session->set_flashdata('pesan_sukses','
				<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Sukses!</strong>Amount Projection '.$status.' Pada Tanggal '.$tgl.' Berhasil Diubah
				</div>
			');
			redirect('real_otomatis_in');
		}
	}

}
