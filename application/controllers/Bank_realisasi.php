<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank_realisasi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('helperku');
		$this->load->library('libraryku');
		$this->load->model('m_input_cashout_real');
	}

	public function index()
	{
		cek_belum_login();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_bank_realisasi');
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
		$qcek_proj = "SELECT * FROM tbl_cashoutproj WHERE status='$status' AND tanggal='$tgl'";
		$rcek_proj = mysqli_query($koneksi,$qcek_proj) or die ('error fungsi cek proj');
		$cek_proj = mysqli_num_rows($rcek_proj);

		if($cek_proj>0){ // Jika Sudah Ada Proyeksinya, Lanjutkan Proses

			// Cek Apakah Data Sudah Ada Sebelumnya
			$q_cek = "SELECT * FROM tbl_cashoutreal WHERE status='$status' AND tanggal='$tgl'";
			$r_cek = mysqli_query($koneksi,$q_cek) or die ('error fungsi');
			$cek = mysqli_num_rows($r_cek);

			$data = mysqli_fetch_array($r_cek);
			$real_awal = $data['realisasi'];

			if($cek>0){ //Jjika data sudah ada

				$result = $this->m_input_cashout_real->tambah_lagi('tbl_cashoutreal', array(
					'realisasi' => $real_awal + $realisasi
				),array(
					'kode_status' => $this->input->post('kode_status'), 
					'tanggal' => $tgl
				));

				if($result>0){

					// tambah data ke detail realisasi cashout (tbl_cashoutreal_d)
					$this->m_input_cashout_real->tambah('tbl_cashoutreal_d',array(
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
					redirect('bank_realisasi');
				}

			}else{ // Jika data belum ada

				$result = $this->m_input_cashout_real->tambah('tbl_cashoutreal',array(
					'kode_status' => $this->input->post('kode_status'),
					'status' => $this->input->post('status'),
					'tanggal' => $tgl,
					'realisasi' => $this->input->post('realisasi')
				));

				if($result>0){
					$status = $this->input->post('status');
					$kode_status = $this->input->post('kode_status');

					// tambah data ke detail realisasi cashout (tbl_cashoutreal_d)
					$this->m_input_cashout_real->tambah('tbl_cashoutreal_d',array(
						'kode_status' => $this->input->post('kode_status'),
						'status' => $this->input->post('status'),
						'tanggal' => $tgl,
						'realisasi' => $this->input->post('realisasi')
					));

					// Jika Yang Diinput Pencairan Deposito (R) Maka Update Jumlah Deposito (di tbl_deposito)
					if($kode_status=='H3'){
						$r_deposito = $this->m_input_cashout_real->tampil_deposito();
						$deposito_awal = $r_deposito['deposito'];
						$penambahan_deposito = $this->input->post('realisasi');

						$this->m_input_cashout_real->update_deposito('tbl_deposito', array(
							'deposito' => $deposito_awal + $penambahan_deposito
						), array('id' => 1));
					}

					// Jika Yang Diinput Pencairan Rek B2B (S) Maka Update Jumlah Rek B2B (di tbl_b2b)
					elseif($kode_status=='I3'){
						$r_b2b = $this->m_input_cashout_real->tampil_b2b();
						$b2b_awal = $r_b2b['b2b'];
						$penambahan_b2b = $this->input->post('realisasi');

						$this->m_input_cashout_real->update_b2b('tbl_b2b', array(
							'b2b' => $b2b_awal + $penambahan_b2b
						), array('id' => 1));
					}

					$this->session->set_flashdata('pesan_sukses','
						<div class="alert alert-success alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  <strong>Sukses!</strong> Realisasi '.$status.' Berhasil Disimpan
						</div>
					');
					redirect('bank_realisasi');
				}

			}

		}else{ // Jika Belum Ada Proyeksinya, Tambahkan Proyeksi dgn nilai 0 + jalankan proses

			// Tambahkan Proyeksi Dengan Nilai 0
			$this->m_input_cashout_real->tambah('tbl_cashoutproj', array(
				'kode_status' => $this->input->post('kode_status'),
				'status' => $this->input->post('status'),
				'tanggal' => $tgl,
				'projection' => 0
			));

			// Cek Apakah Data Sudah Ada Sebelumnya
			$q_cek = "SELECT * FROM tbl_cashoutreal WHERE status='$status' AND tanggal='$tgl'";
			$r_cek = mysqli_query($koneksi,$q_cek) or die ('error fungsi');
			$cek = mysqli_num_rows($r_cek);

			$data = mysqli_fetch_array($r_cek);
			$real_awal = $data['realisasi'];

			if($cek>0){ //Jjika data sudah ada

				$result = $this->m_input_cashout_real->tambah_lagi('tbl_cashoutreal', array(
					'realisasi' => $real_awal + $realisasi
				),array(
					'kode_status' => $this->input->post('kode_status'), 
					'tanggal' => $tgl
				));

				if($result>0){

					// tambah data ke detail realisasi cashout (tbl_cashoutreal_d)
					$this->m_input_cashout_real->tambah('tbl_cashoutreal_d',array(
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
					redirect('bank_realisasi');
				}

			}else{ // Jika data belum ada

				$result = $this->m_input_cashout_real->tambah('tbl_cashoutreal',array(
					'kode_status' => $this->input->post('kode_status'),
					'status' => $this->input->post('status'),
					'tanggal' => $tgl,
					'realisasi' => $this->input->post('realisasi')
				));

				if($result>0){
					$status = $this->input->post('status');
					$kode_status = $this->input->post('kode_status');

					// tambah data ke detail realisasi cashout (tbl_cashoutreal_d)
					$this->m_input_cashout_real->tambah('tbl_cashoutreal_d',array(
						'kode_status' => $this->input->post('kode_status'),
						'status' => $this->input->post('status'),
						'tanggal' => $tgl,
						'realisasi' => $this->input->post('realisasi')
					));

					// Jika Yang Diinput Pencairan Deposito (R) Maka Update Jumlah Deposito (di tbl_deposito)
					if($kode_status=='H3'){
						$r_deposito = $this->m_input_cashout_real->tampil_deposito();
						$deposito_awal = $r_deposito['deposito'];
						$penambahan_deposito = $this->input->post('realisasi');

						$this->m_input_cashout_real->update_deposito('tbl_deposito', array(
							'deposito' => $deposito_awal + $penambahan_deposito
						), array('id' => 1));
					}

					// Jika Yang Diinput Pencairan Rek B2B (S) Maka Update Jumlah Rek B2B (di tbl_b2b)
					elseif($kode_status=='I3'){
						$r_b2b = $this->m_input_cashout_real->tampil_b2b();
						$b2b_awal = $r_b2b['b2b'];
						$penambahan_b2b = $this->input->post('realisasi');

						$this->m_input_cashout_real->update_b2b('tbl_b2b', array(
							'b2b' => $b2b_awal + $penambahan_b2b
						), array('id' => 1));
					}

					$this->session->set_flashdata('pesan_sukses','
						<div class="alert alert-success alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  <strong>Sukses!</strong> Realisasi '.$status.' Berhasil Disimpan
						</div>
					');
					redirect('bank_realisasi');
				}

			}

			// echo '<script>alert("Harap Item Ini Diisi Proyeksi nya Dahulu");window.location="index"</script>';
		}
		
	}


	public function view_inputan(){
		date_default_timezone_set("Asia/Jakarta");
		$tanggal = $this->input->post('tanggal');
		$tgl = date('d-m-Y',strtotime($tanggal));

		$result = $this->m_input_cashout_real->view_inputan($tgl);

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_tampil_bank_realisasi',array('row' => $result));
		$this->load->view('footer');
	}

	public function detail_cashout($kode_status, $tanggal){
		date_default_timezone_set("Asia/Jakarta");

		$result = $this->m_input_cashout_real->detail_cashout('tbl_cashoutreal_d', array(
			'kode_status' => $kode_status,
			'tanggal' => $tanggal
		));

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_detail_cashout_real',array('result' => $result));
		$this->load->view('footer');
	}

	public function edit_cashout($id){
		$result = $this->m_input_cashout_real->edit_cashout('tbl_cashoutreal', array('id'=>$id));
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_edit_cashout_real',array('row' => $result));
		$this->load->view('footer');
	}

	public function update_cashout(){
		$result = $this->m_input_cashout_real->update_cashout('tbl_cashoutreal',array(
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
			redirect('bank_realisasi/view_inputan');
		}
	}

	public function hapus_cashout(){
		$id = $this->input->post('id');
		if($id==''){
			$this->session->set_flashdata('pesan_sukses','
				<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Warning!</strong> Belum Ada Data yang Dipilih
				</div>
			');
			redirect('bank_realisasi/view_inputan');
		}else{
			for($i=0; $i<sizeof($id); $i++){
				$result = $this->m_input_cashout_real->hapus_cashout('tbl_cashoutreal',array('id'=>$id[$i]));
			}
			
			if($result>0){
				$this->session->set_flashdata('pesan_sukses','
					<div class="alert alert-danger alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  <strong>Sukses!</strong> Realisasi Berhasil Dihapus
					</div>
				');
				redirect('bank_realisasi/view_inputan');
			}
		}
		
	}

}
