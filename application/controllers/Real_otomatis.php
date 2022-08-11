<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Real_otomatis extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('helperku');
		$this->load->library('libraryku');
		$this->load->model('M_real_otomatis');
	}

	public function index()
	{
		date_default_timezone_set("Asia/Jakarta");
		cek_belum_login();

		$result = $this->M_real_otomatis->tampil_cashout_proj();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_real_otomatis',array('row'=>$result));
		$this->load->view('footer');
	}

	public function approve(){
		date_default_timezone_set("Asia/Jakarta");
		$tgl = $this->input->post('tanggal');
		$tanggal = date('d-m-Y',strtotime($tgl));

		$result = $this->M_real_otomatis->approve('tbl_cashoutreal',array(
			'kode_status' => $this->input->post('kode_status'),
			'status' => $this->input->post('status'),
			'tanggal' => $tanggal,
			'realisasi' => $this->input->post('realisasi')
		));

		if($result>0){
			$kode_status = $this->input->post('kode_status');

			// Update Status Bayar Di Pro-Biaya
			$tanggal_biaya = date('Y-m-d',strtotime($tgl));
			$con_biaya = mysqli_connect('localhost','root','Profi@123','db_probiaya');

			$quer_biaya = "UPDATE tbl_pengajuan SET status_bayar='Telah Dibayar' WHERE kode_cashflow='$kode_status' AND tanggal_bayar='$tanggal_biaya' AND status_bayar='Proses Bayar'";
			
			mysqli_query($con_biaya, $quer_biaya);
			// Penutup Update Status Bayar Di Pro-Biaya

			

			// Jika Yang Diinput Pencairan Deposito (R) Maka Update Jumlah Deposito (di tbl_deposito)
			if($kode_status=='H3'){
				$r_deposito = $this->M_real_otomatis->tampil_deposito();
				$deposito_awal = $r_deposito['deposito'];
				$penambahan_deposito = $this->input->post('realisasi');

				$this->M_real_otomatis->update_deposito('tbl_deposito', array(
					'deposito' => $deposito_awal + $penambahan_deposito
				), array('id' => 1));
			}

			// Jika Yang Diinput Pencairan Rek B2B (S) Maka Update Jumlah Rek B2B (di tbl_b2b)
			elseif($kode_status=='I3'){
				$r_b2b = $this->M_real_otomatis->tampil_b2b();
				$b2b_awal = $r_b2b['b2b'];
				$penambahan_b2b = $this->input->post('realisasi');

				$this->M_real_otomatis->update_b2b('tbl_b2b', array(
					'b2b' => $b2b_awal + $penambahan_b2b
				), array('id' => 1));
			}
			redirect('real_otomatis');
		}
	}

	public function edit_amount_cashout($id){
		$result = $this->M_real_otomatis->edit_amount_cashout('tbl_cashoutproj',array('id'=>$id));
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_edit_amout_cashout',array('row'=>$result));
		$this->load->view('footer');
	}

	public function update_amount_cashout(){
		$result = $this->M_real_otomatis->update_amount_cashout('tbl_cashoutproj',array(
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
			redirect('real_otomatis');
		}
	}

}
