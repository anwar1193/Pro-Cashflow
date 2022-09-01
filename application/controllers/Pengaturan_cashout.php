<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan_cashout extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('helperku');
		$this->load->library('libraryku');
		$this->load->model('M_user');
	}

	public function index()
	{
		date_default_timezone_set("Asia/Jakarta");
		cek_belum_login();

		$data_cashout = $this->db->query("SELECT * FROM tbl_jb_cashout ORDER BY id_jb")->result_array();

		$data_cashout_sub = $this->db->query("SELECT  
                                                tbl_sb_cashout.id_sb,    
                                                tbl_sb_cashout.kode_status,    
                                                tbl_sb_cashout.status,
                                                tbl_sb_cashout.status_aktif,
                                                tbl_jb_cashout.kode_jb AS kode_jb,
                                                tbl_jb_cashout.nama_jb
                                            FROM 
                                                tbl_sb_cashout INNER JOIN tbl_jb_cashout
                                            ON 
                                                tbl_sb_cashout.kode_jb = tbl_jb_cashout.kode_jb
                                            ORDER BY 
                                                tbl_sb_cashout.id_sb")->result_array();

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_pengaturan_cashout',array(
            'data_cashout' => $data_cashout,
            'data_cashout_sub' => $data_cashout_sub
        ));
		$this->load->view('footer');
	}

	public function tambah_cashout(){
		cek_belum_login();

        $this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_tambah_cashout');
		$this->load->view('footer');
	}

	public function simpan_cashout(){
        $kode_jb = $this->input->post('kode_jb');

        // Cek Apakah Cash-Out Item sudah ada sebelumnya
        $cek_jb = $this->db->query("SELECT * FROM tbl_jb_cashout WHERE kode_jb='$kode_jb'")->num_rows();

        if($cek_jb > 0){ // Jika data sudah ada sebelumnya

            echo '<script>alert("Kode Cash-Out yang anda masukan sudah terdaftar, ganti Kode Cash-Out"); window.location="tambah_cashout"</script>';
            exit;

        }else{ // Jika data belum ada

            $result = $this->M_user->simpan_user('tbl_jb_cashout', array(
                'kode_jb' => $this->input->post('kode_jb'),
                'nama_jb' => $this->input->post('nama_jb')
            ));
    
            if($result > 0){
                echo '<script>alert("Data Cash-Out Tersimpan"); window.location="index"</script>';
            }

        }
		
	}

	public function edit_cashout($id){
        cek_belum_login();
		$data = $this->db->query("SELECT * FROM tbl_jb_cashout WHERE id_jb=$id")->row_array();

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_edit_cashout_setting', array('data' => $data));
		$this->load->view('footer');
	}

	public function update_cashout(){
        $id = $this->input->post('id_jb');
        $kode_jb = $this->input->post('kode_jb');
        $nama_jb = $this->input->post('nama_jb');

        $result = $this->db->update('tbl_jb_cashout', array(
            'kode_jb' => $kode_jb,
            'nama_jb' => $nama_jb
        ), array('id_jb' => $id));

		if($result > 0){
			echo '<script>alert("Data Item Cash-Out Berhasil Diupdate"); window.location="index"</script>';
		}
	}

	public function hapus_cashout($id){
        $result = $this->db->delete('tbl_jb_cashout', array('id_jb' => $id));
		if($result > 0){
			$this->session->set_flashdata('pesan_sukses','
				<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Data Item Cash-Out Berhasil Dihapus</strong>
				</div>
			');

			redirect('pengaturan_cashout');
		}
	}

    // ...................................................................................................................................................

    public function tambah_cashout_sub(){
		cek_belum_login();
        $data_cashout = $this->db->query("SELECT * FROM tbl_jb_cashout ORDER BY id_jb")->result_array();

        $this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_tambah_cashout_sub', array('data_cashout' => $data_cashout)); // BUAT VIEW UNTUK TAMBAH CASHOUT ******************************
		$this->load->view('footer');
	}


    public function simpan_cashout_sub(){
        $kode_status = $this->input->post('kode_status');

        // Cek Apakah Cash-Out Item sudah ada sebelumnya
        $cek_sb = $this->db->query("SELECT * FROM tbl_sb_cashout WHERE kode_status='$kode_status'")->num_rows();

        if($cek_sb > 0){ // Jika data sudah ada sebelumnya

            echo '<script>alert("Kode Sub Cash-Out yang anda masukan sudah terdaftar, ganti Kode Sub Cash-Out"); window.location="tambah_cashout_sub"</script>';
            exit;

        }else{ // Jika data belum ada

            $result = $this->M_user->simpan_user('tbl_sb_cashout', array(
                'kode_jb' => $this->input->post('kode_jb'),
                'kode_status' => $this->input->post('kode_status'),
                'status' => $this->input->post('status')
            ));
    
            if($result > 0){
                echo '<script>alert("Data Sub Cash-Out Tersimpan"); window.location="index"</script>';
            }

        }
	}


    public function edit_cashout_sub($id){
        cek_belum_login();
		$data = $this->db->query("SELECT  
                                        tbl_sb_cashout.id_sb,    
                                        tbl_sb_cashout.kode_status,    
                                        tbl_sb_cashout.status,    
                                        tbl_jb_cashout.kode_jb AS kode_jb,
                                        tbl_jb_cashout.nama_jb
                                    FROM 
                                        tbl_sb_cashout INNER JOIN tbl_jb_cashout
                                    ON 
                                        tbl_sb_cashout.kode_jb = tbl_jb_cashout.kode_jb
                                    WHERE
                                        tbl_sb_cashout.id_sb = $id")->row_array();

        $data_cashout = $this->db->query("SELECT * FROM tbl_jb_cashout ORDER BY id_jb")->result_array();

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_edit_cashout_sub_setting', array(
            'data' => $data,
            'data_cashout' => $data_cashout
        ));
		$this->load->view('footer');
	}


    public function update_cashout_sub(){
        $id = $this->input->post('id_sb');

        $result = $this->db->update('tbl_sb_cashout', array(
            'kode_jb' => $this->input->post('kode_jb'),
            'kode_status' => $this->input->post('kode_status'),
            'status' => $this->input->post('status')
        ), array('id_sb' => $id));

		if($result > 0){
			echo '<script>alert("Data Sub-Item Cash-Out Berhasil Diupdate"); window.location="index"</script>';
		}
	}

    
    public function hapus_cashout_sub($id){
        $result = $this->db->delete('tbl_sb_cashout', array('id_sb' => $id));
		if($result > 0){
			$this->session->set_flashdata('pesan_sukses','
				<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Data Sub-Item Cash-Out Berhasil Dihapus</strong>
				</div>
			');

			redirect('pengaturan_cashout');
		}
	}


    public function nonaktifkan_cashout_sub($id){
        $result = $this->db->update('tbl_sb_cashout', array(
            'status_aktif' => 0
        ), array('id_sb' => $id));

        if($result > 0){
            echo '<script>alert("Sub-Item cashOut Berhasil Di Non-Aktifkan");window.location="../index"</script>';
        }
    }


    public function aktifkan_cashout_sub($id){
        $result = $this->db->update('tbl_sb_cashout', array(
            'status_aktif' => 1
        ), array('id_sb' => $id));

        if($result > 0){
            echo '<script>alert("Sub-Item cashOut Berhasil Di Aktifkan");window.location="../index"</script>';
        }
    }

}
