<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_cashin_real extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('helperku');
		$this->load->library('libraryku');
		$this->load->model('m_input_cashin_real');
	}

	public function index()
	{
		cek_belum_login();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_input_cashin_real');
		$this->load->view('footer');
	}

	public function tambah(){
		date_default_timezone_set("Asia/Jakarta");

		$status = $this->input->post('status');
		$tanggal = $this->input->post('tanggal');
		$tgl = date('d-m-Y', strtotime($tanggal));
		$realisasi = $this->input->post('realisasi');

		$koneksi = mysqli_connect('localhost','root','Profi@123','db_cashflow');

		// Cek Apakah Sudah Ada Proyeksinya
		$qcek_proj = "SELECT * FROM tbl_cashinproj WHERE status='$status' AND tanggal='$tgl'";
		$rcek_proj = mysqli_query($koneksi,$qcek_proj) or die ('error fungsi cek proj');
		$cek_proj = mysqli_num_rows($rcek_proj);
		if($cek_proj>0){ // Jika Sudah Ada Proyeksinya, Lanjutkan Proses

			// Cek Apakah Data Sudah Ada Sebelumnya
			$q_cek = "SELECT * FROM tbl_cashinreal WHERE status='$status' AND tanggal='$tgl'";
			$r_cek = mysqli_query($koneksi,$q_cek) or die ('error fungsi');
			$cek = mysqli_num_rows($r_cek);

			$data = mysqli_fetch_array($r_cek);
			$real_awal = $data['realisasi'];

			if($cek>0){ //Jika Data Sudah Ada

				$result = $this->m_input_cashin_real->tambah_lagi('tbl_cashinreal', array(
					'realisasi' => $real_awal + $realisasi
				),array(
					'kode_status' => $this->input->post('kode_status'), 
					'tanggal' => $tgl
				));

				if($result>0){

					// tambah data ke detail realisasi cashin (tbl_cashinreal_d)
					$this->m_input_cashin_real->tambah('tbl_cashinreal_d',array(
						'kode_status' => $this->input->post('kode_status'),
						'status' => $this->input->post('status'),
						'tanggal' => $tgl,
						'realisasi' => $this->input->post('realisasi')
					));

					$status = $this->input->post('status');
					$this->session->set_flashdata('pesan_sukses','
						<div class="alert alert-success alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  <strong>Sukses!</strong> Realisasi '.$status.' Berhasil Disimpan
						</div>
					');
					redirect('Input_cashin_real');
				}	

			}else{ //Jika Data Belum Ada

				$result = $this->m_input_cashin_real->tambah('tbl_cashinreal',array(
					'kode_status' => $this->input->post('kode_status'),
					'status' => $this->input->post('status'),
					'tanggal' => $tgl,
					'realisasi' => $this->input->post('realisasi')
				));

				if($result>0){
					$status = $this->input->post('status');
					$kode_status = $this->input->post('kode_status');

					// tambah data ke detail realisasi cashin (tbl_cashinreal_d)
					$this->m_input_cashin_real->tambah('tbl_cashinreal_d',array(
						'kode_status' => $this->input->post('kode_status'),
						'status' => $this->input->post('status'),
						'tanggal' => $tgl,
						'realisasi' => $this->input->post('realisasi')
					));

					// Jika Yang Diinput Pencairan Deposito (R) Maka Update Jumlah Deposito (di tbl_deposito)
					if($kode_status=='R'){
						$r_deposito = $this->m_input_cashin_real->tampil_deposito();
						$deposito_awal = $r_deposito['deposito'];
						$pengurangan_deposito = $this->input->post('realisasi');

						$this->m_input_cashin_real->update_deposito('tbl_deposito', array(
							'deposito' => $deposito_awal - $pengurangan_deposito
						), array('id' => 1));
					}

					// Jika Yang Diinput Pencairan Rek B2B (S) Maka Update Jumlah Rek B2B (di tbl_b2b)
					elseif($kode_status=='S'){
						$r_b2b = $this->m_input_cashin_real->tampil_b2b();
						$b2b_awal = $r_b2b['b2b'];
						$pengurangan_b2b = $this->input->post('realisasi');

						$this->m_input_cashin_real->update_b2b('tbl_b2b', array(
							'b2b' => $b2b_awal - $pengurangan_b2b
						), array('id' => 1));
					}

					$this->session->set_flashdata('pesan_sukses','
						<div class="alert alert-success alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  <strong>Sukses!</strong> Realisasi '.$status.' Berhasil Disimpan
						</div>
					');
					redirect('Input_cashin_real');
				}

			}

		}else{ // Kalo Belum Ada Proyeksi nya, input proyeksi dengan nilai 0, lalu jalankan proses

			// input proyeksi dengan nilai 0
			$this->m_input_cashin_real->tambah('tbl_cashinproj', array(
				'kode_status' => $this->input->post('kode_status'),
				'status' => $this->input->post('status'),
				'tanggal' => $tgl,
				'projection' => 0
			));

			// Cek Apakah Data Sudah Ada Sebelumnya
			$q_cek = "SELECT * FROM tbl_cashinreal WHERE status='$status' AND tanggal='$tgl'";
			$r_cek = mysqli_query($koneksi,$q_cek) or die ('error fungsi');
			$cek = mysqli_num_rows($r_cek);

			$data = mysqli_fetch_array($r_cek);
			$real_awal = $data['realisasi'];

			if($cek>0){ //Jika Data Sudah Ada

				$result = $this->m_input_cashin_real->tambah_lagi('tbl_cashinreal', array(
					'realisasi' => $real_awal + $realisasi
				),array(
					'kode_status' => $this->input->post('kode_status'), 
					'tanggal' => $tgl
				));

				if($result>0){

					// tambah data ke detail realisasi cashin (tbl_cashinreal_d)
					$this->m_input_cashin_real->tambah('tbl_cashinreal_d',array(
						'kode_status' => $this->input->post('kode_status'),
						'status' => $this->input->post('status'),
						'tanggal' => $tgl,
						'realisasi' => $this->input->post('realisasi')
					));

					$status = $this->input->post('status');
					$this->session->set_flashdata('pesan_sukses','
						<div class="alert alert-success alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  <strong>Sukses!</strong> Realisasi '.$status.' Berhasil Disimpan
						</div>
					');
					redirect('Input_cashin_real');
				}	

			}else{ //Jika Data Belum Ada

				$result = $this->m_input_cashin_real->tambah('tbl_cashinreal',array(
					'kode_status' => $this->input->post('kode_status'),
					'status' => $this->input->post('status'),
					'tanggal' => $tgl,
					'realisasi' => $this->input->post('realisasi')
				));

				if($result>0){
					$status = $this->input->post('status');
					$kode_status = $this->input->post('kode_status');

					// tambah data ke detail realisasi cashin (tbl_cashinreal_d)
					$this->m_input_cashin_real->tambah('tbl_cashinreal_d',array(
						'kode_status' => $this->input->post('kode_status'),
						'status' => $this->input->post('status'),
						'tanggal' => $tgl,
						'realisasi' => $this->input->post('realisasi')
					));

					// Jika Yang Diinput Pencairan Deposito (R) Maka Update Jumlah Deposito (di tbl_deposito)
					if($kode_status=='R'){
						$r_deposito = $this->m_input_cashin_real->tampil_deposito();
						$deposito_awal = $r_deposito['deposito'];
						$pengurangan_deposito = $this->input->post('realisasi');

						$this->m_input_cashin_real->update_deposito('tbl_deposito', array(
							'deposito' => $deposito_awal - $pengurangan_deposito
						), array('id' => 1));
					}

					// Jika Yang Diinput Pencairan Rek B2B (S) Maka Update Jumlah Rek B2B (di tbl_b2b)
					elseif($kode_status=='S'){
						$r_b2b = $this->m_input_cashin_real->tampil_b2b();
						$b2b_awal = $r_b2b['b2b'];
						$pengurangan_b2b = $this->input->post('realisasi');

						$this->m_input_cashin_real->update_b2b('tbl_b2b', array(
							'b2b' => $b2b_awal - $pengurangan_b2b
						), array('id' => 1));
					}

					$this->session->set_flashdata('pesan_sukses','
						<div class="alert alert-success alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  <strong>Sukses!</strong> Realisasi '.$status.' Berhasil Disimpan
						</div>
					');
					redirect('Input_cashin_real');
				}

			}

			// Script Realisasi Di Lock Kalo Belum Ada Proyeksinya
			// echo '<script>alert("Harap Item Ini Diisi Proyeksi nya Dahulu");window.location="index"</script>';
		}
	}


	public function view_inputan(){
		date_default_timezone_set("Asia/Jakarta");
		$tanggal = $this->input->post('tanggal');
		$tgl = date('d-m-Y',strtotime($tanggal));

		$result = $this->m_input_cashin_real->view_inputan($tgl);

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_tampilan_cashin_real',array('row' => $result));
		$this->load->view('footer');
	}


	public function detail_cashin($kode_status, $tanggal){
		date_default_timezone_set("Asia/Jakarta");

		$result = $this->m_input_cashin_real->detail_cashin('tbl_cashinreal_d', array(
			'kode_status' => $kode_status,
			'tanggal' => $tanggal
		));

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_detail_cashin_real',array('result' => $result));
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
			redirect('Input_cashin_real/view_inputan');
		}else{
			for($i=0; $i<sizeof($id); $i++){
				$result = $this->m_input_cashin_real->hapus_cashin('tbl_cashinreal',array('id'=>$id[$i]));
			}
			
			if($result>0){
				$this->session->set_flashdata('pesan_sukses','
					<div class="alert alert-danger alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  <strong>Sukses!</strong> Realisasi Berhasil Dihapus
					</div>
				');
				redirect('Input_cashin_real/view_inputan');
			}
			
		}
		
	}

	public function edit_cashin($id){
		$result = $this->m_input_cashin_real->edit_cashin('tbl_cashinreal', array('id'=>$id));
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_edit_cashin_real',array('row' => $result));
		$this->load->view('footer');
	}

	public function update_cashin(){
		$result = $this->m_input_cashin_real->update_cashin('tbl_cashinreal',array(
			'realisasi' => $this->input->post('realisasi')
		),array('id' => $this->input->post('id')));

		if($result>0){
			$status = $this->input->post('status');
			$tanggal = $this->input->post('tanggal');
			$tgl = date('d-m-Y',strtotime($tanggal));

			$this->session->set_flashdata('pesan_sukses','
				<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Sukses!</strong> Realisasi '.$status.' Pada Tanggal '.$tgl.' Berhasil Diubah
				</div>
			');
			redirect('input_cashin_real/view_inputan');
		}
	}


}
