<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_cashout extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('helperku');
		$this->load->library('libraryku');
		$this->load->model('m_input_cashout');
	}

	public function index()
	{
		cek_belum_login();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_input_cashout');
		$this->load->view('footer');
	}

	public function tambah(){
		date_default_timezone_set("Asia/Jakarta");
		$tanggal = $this->input->post('tanggal');
		$tgl = date('d-m-Y', strtotime($tanggal));
		$status = $this->input->post('status');
		$projection = $this->input->post('projection');

		// Cek Apakah Data Sudah Ada Sebelumnya
		$koneksi = mysqli_connect('localhost','root','','db_cashflow');
		$q_cek = "SELECT * FROM tbl_cashoutproj WHERE status='$status' AND tanggal='$tgl'";
		$r_cek = mysqli_query($koneksi,$q_cek) or die ('error fungsi');
		$cek = mysqli_num_rows($r_cek);

		$data = mysqli_fetch_array($r_cek);
		$proj_awal = $data['projection'];
		$projection = $this->input->post('projection');

		if($cek>0){ // Jika data sudah ada

			$result = $this->m_input_cashout->tambah_lagi('tbl_cashoutproj', array(
				'projection' => $proj_awal + $projection
			),array(
				'kode_status' => $this->input->post('kode_status'), 
				'tanggal' => $tgl
			));

			if($result>0){
				// tambah data ke detail proyeksi cashout (tbl_cashoutproj_d)
				$this->m_input_cashout->tambah('tbl_cashoutproj_d',array(
					'kode_status' => $this->input->post('kode_status'),
					'status' => $this->input->post('status'),
					'tanggal' => $tgl,
					'projection' => $this->input->post('projection')
				));

				$status = $this->input->post('status');
				$this->session->set_flashdata('pesan_sukses','
					<div class="alert alert-success alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  <strong>Sukses!</strong> Projection '.$status.' Berhasil Disimpan
					</div>
				');
				redirect('input_cashout');
			}

		}else{ // Jika data belum ada

			$result = $this->m_input_cashout->tambah('tbl_cashoutproj',array(
				'kode_status' => $this->input->post('kode_status'),
				'status' => $this->input->post('status'),
				'tanggal' => $tgl,
				'projection' => $this->input->post('projection')
			));

			if($result>0){

				// tambah data ke detail proyeksi cashout (tbl_cashoutproj_d)
				$this->m_input_cashout->tambah('tbl_cashoutproj_d',array(
					'kode_status' => $this->input->post('kode_status'),
					'status' => $this->input->post('status'),
					'tanggal' => $tgl,
					'projection' => $this->input->post('projection')
				));

				$status = $this->input->post('status');
				$this->session->set_flashdata('pesan_sukses','
					<div class="alert alert-success alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  <strong>Sukses!</strong> Projection '.$status.' Berhasil Disimpan
					</div>
				');
				redirect('input_cashout');
			}

		}

		
	}

	public function view_inputan(){
		date_default_timezone_set("Asia/Jakarta");
		$tanggal = $this->input->post('tanggal');
		$tgl = date('d-m-Y',strtotime($tanggal));

		$result = $this->m_input_cashout->view_inputan($tgl);

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_tampilan_cashout',array('row' => $result));
		$this->load->view('footer');
	}

	public function detail_cashout($kode_status, $tanggal){
		date_default_timezone_set("Asia/Jakarta");

		$result = $this->m_input_cashout->detail_cashout('tbl_cashoutproj_d', array(
			'kode_status' => $kode_status,
			'tanggal' => $tanggal
		));

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_detail_cashout',array('result' => $result));
		$this->load->view('footer');
	}

	public function edit_cashout($id){
		$result = $this->m_input_cashout->edit_cashout('tbl_cashoutproj', array('id'=>$id));
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_edit_cashout',array('row' => $result));
		$this->load->view('footer');
	}

	public function update_cashout(){
		$result = $this->m_input_cashout->update_cashout('tbl_cashoutproj',array(
			'projection' => $this->input->post('projection')
		),array('id' => $this->input->post('id')));

		if($result>0){
			$status = $this->input->post('status');
			$tanggal = $this->input->post('tanggal');
			$tgl = date('d-m-Y',strtotime($tanggal));

			$this->session->set_flashdata('pesan_sukses','
				<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Sukses!</strong> Projection '.$status.' Pada Tanggal '.$tgl.' Berhasil Diubah
				</div>
			');
			redirect('input_cashout/view_inputan');
		}
	}

	public function hapus_cashout(){
		$id = $this->input->post('id');

		if($id==''){
			$this->session->set_flashdata('pesan_sukses','
				<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Warning!</strong> Belum Ada Data Yang Dipilih
				</div>
			');
			redirect('input_cashout/view_inputan');
		}else{
			
			for ($i=0; $i < sizeof($id); $i++) { 
				$result = $this->m_input_cashout->hapus_cashout('tbl_cashoutproj',array('id'=>$id[$i]));
			}
			
			if($result>0){
				$this->session->set_flashdata('pesan_sukses','
					<div class="alert alert-danger alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  <strong>Sukses!</strong> Projection Berhasil Dihapus
					</div>
				');
				redirect('input_cashout/view_inputan');
			}
		}
		
	}


}
