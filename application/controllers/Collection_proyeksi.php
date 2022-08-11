<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Collection_proyeksi extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('helperku');
		$this->load->library(array('libraryku', 'form_validation'));
		$this->load->model(array('M_input_cashin'));
	}

	public function index()
	{
		cek_belum_login();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_input_coll_proyeksi');
		$this->load->view('footer');
	}

	public function tambah(){
		date_default_timezone_set("Asia/Jakarta");

		$status = $this->input->post('status');
		$tanggal = $this->input->post('tanggal');
		$tgl = date('d-m-Y', strtotime($tanggal));

		// Cek Apakah Data Sudah Ada Sebelumnya
		$koneksi = mysqli_connect('localhost','root','Profi@123','db_cashflow');
		$q_cek = "SELECT * FROM tbl_cashinproj WHERE status='$status' AND tanggal='$tgl'";
		$r_cek = mysqli_query($koneksi,$q_cek) or die ('error fungsi');
		$cek = mysqli_num_rows($r_cek);

		$data = mysqli_fetch_array($r_cek);
		$proj_awal = $data['projection'];
		$proj_tambahan = $this->input->post('projection');

		if($cek>0){ //jika data sudah ada

			$result = $this->M_input_cashin->tambah_lagi('tbl_cashinproj', array(
				'projection' => $proj_awal + $proj_tambahan
			),array(
				'kode_status' => $this->input->post('kode_status'), 
				'tanggal' => $tgl
			));

			if($result>0){

				// tambah data ke detail proyeksi cashin (tbl_cashinproj_d)
				$this->M_input_cashin->tambah('tbl_cashinproj_d',array(
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
				redirect('collection_proyeksi');
			}			

		}else{ //jika data belum ada
			$result = $this->M_input_cashin->tambah('tbl_cashinproj', array(
				'kode_status' => $this->input->post('kode_status'),
				'status' => $this->input->post('status'),
				'tanggal' => $tgl,
				'projection' => $this->input->post('projection')
			));

			if($result>0){

				// tambah data ke detail proyeksi cashin (tbl_cashinproj_d)
				$this->M_input_cashin->tambah('tbl_cashinproj_d',array(
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
				redirect('collection_proyeksi');
			}
		}
		
	}


	public function view_inputan(){
		date_default_timezone_set("Asia/Jakarta");
		$tanggal = $this->input->post('tanggal');
		$tgl = date('d-m-Y',strtotime($tanggal));

		if(isset($_POST['cari'])){
			$result = $this->M_input_cashin->view_inputan_collection($tgl);
		}else{
			$result = $this->M_input_cashin->view_inputan_collection_default();
		}
		

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_tampil_coll_proyeksi',array('row' => $result));
		$this->load->view('footer');
	}

	public function detail_cashin($kode_status, $tanggal){
		date_default_timezone_set("Asia/Jakarta");

		$result = $this->M_input_cashin->detail_cashin('tbl_cashinproj_d', array(
			'kode_status' => $kode_status,
			'tanggal' => $tanggal
		));

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_detail_cashin',array('result' => $result));
		$this->load->view('footer');
	}

	public function hapus_cashin(){
		$id = $this->input->post('id');

		if($id==''){	
			$this->session->set_flashdata('pesan_sukses','
				<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Warning!</strong> Belum Ada Data Yang Dipilih
				</div>
			');
			redirect('collection_proyeksi/view_inputan');
		}else{
			for($i=0 ; $i<sizeof($id) ; $i++){
				$result = $this->M_input_cashin->hapus_cashin('tbl_cashinproj',array('id'=>$id[$i]));
			}
			
			if($result>0){
				$this->session->set_flashdata('pesan_sukses','
					<div class="alert alert-danger alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  <strong>Sukses!</strong> Projection Berhasil Dihapus
					</div>
				');
				redirect('collection_proyeksi/view_inputan');
			}
		}
	}

	public function edit_cashin($id){
		$result = $this->M_input_cashin->edit_cashin('tbl_cashinproj', array('id'=>$id));
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_edit_cashin',array('row' => $result));
		$this->load->view('footer');
	}

	public function update_cashin(){
		$result = $this->M_input_cashin->update_cashin('tbl_cashinproj',array(
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
			redirect('collection_proyeksi/view_inputan');
		}
	}


}
