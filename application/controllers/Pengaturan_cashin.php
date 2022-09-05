<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan_cashin extends CI_Controller {

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

		$data_cashin = $this->db->query("SELECT * FROM tbl_jb_cashin ORDER BY posisi")->result_array();

		$data_cashin_sub = $this->db->query("SELECT  
                                                tbl_sb_cashin.id_sb,    
                                                tbl_sb_cashin.kode_status,    
                                                tbl_sb_cashin.status,
                                                tbl_sb_cashin.status_aktif,
                                                tbl_jb_cashin.kode_jb AS kode_jb,
                                                tbl_jb_cashin.nama_jb
                                            FROM 
                                                tbl_sb_cashin INNER JOIN tbl_jb_cashin
                                            ON 
                                                tbl_sb_cashin.kode_jb = tbl_jb_cashin.kode_jb
                                            ORDER BY 
                                                tbl_sb_cashin.id_sb")->result_array();

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_pengaturan_cashin',array(
            'data_cashin' => $data_cashin,
            'data_cashin_sub' => $data_cashin_sub
        ));
		$this->load->view('footer');
	}

	public function tambah_cashin(){
		cek_belum_login();

        $this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_tambah_cashin');
		$this->load->view('footer');
	}

	public function simpan_cashin(){
        $kode_jb = $this->input->post('kode_jb');

        // Cek Apakah Cash-In Item sudah ada sebelumnya
        $cek_jb = $this->db->query("SELECT * FROM tbl_jb_cashin WHERE kode_jb='$kode_jb'")->num_rows();

        if($cek_jb > 0){ // Jika data sudah ada sebelumnya

            echo '<script>alert("Kode Cash-In yang anda masukan sudah terdaftar, ganti Kode Cash-In"); window.location="tambah_cashin"</script>';
            exit;

        }else{ // Jika data belum ada

            $result = $this->M_user->simpan_user('tbl_jb_cashin', array(
                'kode_jb' => $this->input->post('kode_jb'),
                'nama_jb' => $this->input->post('nama_jb')
            ));
    
            if($result > 0){
                echo '<script>alert("Data Cash-In Tersimpan"); window.location="index"</script>';
            }

        }
		
	}

	public function edit_cashin($id){
        cek_belum_login();
		$data = $this->db->query("SELECT * FROM tbl_jb_cashin WHERE id_jb=$id")->row_array();

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_edit_cashin_setting', array('data' => $data));
		$this->load->view('footer');
	}

	public function update_cashin(){
        $id = $this->input->post('id_jb');
        $kode_jb = $this->input->post('kode_jb');
        $nama_jb = $this->input->post('nama_jb');

        $result = $this->db->update('tbl_jb_cashin', array(
            'kode_jb' => $kode_jb,
            'nama_jb' => $nama_jb
        ), array('id_jb' => $id));

		if($result > 0){
			echo '<script>alert("Data Item Cash-In Berhasil Diupdate"); window.location="index"</script>';
		}
	}

	public function hapus_cashin($id){
        $result = $this->db->delete('tbl_jb_cashin', array('id_jb' => $id));
		if($result > 0){
			$this->session->set_flashdata('pesan_sukses','
				<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Data Item Cash-In Berhasil Dihapus</strong>
				</div>
			');

			redirect('pengaturan_cashin');
		}
	}

    // ...................................................................................................................................................

    public function tambah_cashin_sub(){
		cek_belum_login();
        $data_cashin = $this->db->query("SELECT * FROM tbl_jb_cashin ORDER BY id_jb")->result_array();

        $this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_tambah_cashin_sub', array('data_cashin' => $data_cashin));
		$this->load->view('footer');
	}


    public function simpan_cashin_sub(){
        $kode_status = $this->input->post('kode_status');

        // Cek Apakah Cash-In Item sudah ada sebelumnya
        $cek_sb = $this->db->query("SELECT * FROM tbl_sb_cashin WHERE kode_status='$kode_status'")->num_rows();

        if($cek_sb > 0){ // Jika data sudah ada sebelumnya

            echo '<script>alert("Kode Sub Cash-In yang anda masukan sudah terdaftar, ganti Kode Sub Cash-In"); window.location="tambah_cashin_sub"</script>';
            exit;

        }else{ // Jika data belum ada

            $result = $this->M_user->simpan_user('tbl_sb_cashin', array(
                'kode_jb' => $this->input->post('kode_jb'),
                'kode_status' => $this->input->post('kode_status'),
                'status' => $this->input->post('status')
            ));
    
            if($result > 0){
                echo '<script>alert("Data Sub Cash-In Tersimpan"); window.location="index"</script>';
            }

        }
	}


    public function edit_cashin_sub($id){
        cek_belum_login();
		$data = $this->db->query("SELECT  
                                        tbl_sb_cashin.id_sb,    
                                        tbl_sb_cashin.kode_status,    
                                        tbl_sb_cashin.status,    
                                        tbl_jb_cashin.kode_jb AS kode_jb,
                                        tbl_jb_cashin.nama_jb
                                    FROM 
                                        tbl_sb_cashin INNER JOIN tbl_jb_cashin
                                    ON 
                                        tbl_sb_cashin.kode_jb = tbl_jb_cashin.kode_jb
                                    WHERE
                                        tbl_sb_cashin.id_sb = $id")->row_array();

        $data_cashin = $this->db->query("SELECT * FROM tbl_jb_cashin ORDER BY id_jb")->result_array();

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_edit_cashin_sub_setting', array(
            'data' => $data,
            'data_cashin' => $data_cashin
        ));
		$this->load->view('footer');
	}


    public function update_cashin_sub(){
        $id = $this->input->post('id_sb');

        $result = $this->db->update('tbl_sb_cashin', array(
            'kode_jb' => $this->input->post('kode_jb'),
            'kode_status' => $this->input->post('kode_status'),
            'status' => $this->input->post('status')
        ), array('id_sb' => $id));

		if($result > 0){
			echo '<script>alert("Data Sub-Item Cash-In Berhasil Diupdate"); window.location="index"</script>';
		}
	}

    
    public function hapus_cashin_sub($id){
        $result = $this->db->delete('tbl_sb_cashin', array('id_sb' => $id));
		if($result > 0){
			$this->session->set_flashdata('pesan_sukses','
				<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Data Sub-Item Cash-In Berhasil Dihapus</strong>
				</div>
			');

			redirect('pengaturan_cashin');
		}
	}


    public function nonaktifkan_cashin_sub($id){
        $result = $this->db->update('tbl_sb_cashin', array(
            'status_aktif' => 0
        ), array('id_sb' => $id));

        if($result > 0){
            echo '<script>alert("Sub-Item CashIn Berhasil Di Non-Aktifkan");window.location="../index"</script>';
        }
    }


    public function aktifkan_cashin_sub($id){
        $result = $this->db->update('tbl_sb_cashin', array(
            'status_aktif' => 1
        ), array('id_sb' => $id));

        if($result > 0){
            echo '<script>alert("Sub-Item CashIn Berhasil Di Aktifkan");window.location="../index"</script>';
        }
    }

    public function naik_posisi($id){
        // Ambil Posisi Sekarang
        $r_posisi_sekarang = $this->db->get_where('tbl_jb_cashin', array('id_jb' => $id))->row_array();
        $posisi_sekarang = $r_posisi_sekarang['posisi'];
        $posisi_diatasnya = $posisi_sekarang - 1;

        // Turunkan Posisi Diatasnya 1 tingkat
        $this->db->update('tbl_jb_cashin', array(
            'posisi' => $posisi_sekarang
        ), array('posisi' => $posisi_diatasnya));

        // Naikkan Posisi Sekarang 1 tingkat
        $this->db->update('tbl_jb_cashin', array(
            'posisi' => $posisi_diatasnya
        ), array('id_jb' => $id));

        echo '<script>alert("Posisi Cash-In Item Berhasil Diubah");window.location="../index"</script>';

    }

    public function turun_posisi($id){
        // Ambil Posisi Sekarang
        $r_posisi_sekarang = $this->db->get_where('tbl_jb_cashin', array('id_jb' => $id))->row_array();
        $posisi_sekarang = $r_posisi_sekarang['posisi'];
        $posisi_dibawahnya = $posisi_sekarang + 1;

        // Naikkan Posisi dibawahnya 1 tingkat
        $this->db->update('tbl_jb_cashin', array(
            'posisi' => $posisi_sekarang
        ), array('posisi' => $posisi_dibawahnya));

        // Turunkan Posisi Sekarang 1 tingkat
        $this->db->update('tbl_jb_cashin', array(
            'posisi' => $posisi_dibawahnya
        ), array('id_jb' => $id));

        echo '<script>alert("Posisi Cash-In Item Berhasil Diubah");window.location="../index"</script>';

    }

}
