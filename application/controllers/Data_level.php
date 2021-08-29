<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_level extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('helperku');
		$this->load->library('libraryku');
		$this->load->model('M_pengaturan_akses');
	}

	public function index()
	{
		date_default_timezone_set("Asia/Jakarta");
		cek_belum_login();

		$data_level = $this->M_pengaturan_akses->tampil_data('tbl_level')->result_array();
        $data_menu = $this->M_pengaturan_akses->tampil_data('tbl_menu')->result_array();

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_level',array('data_level'=>$data_level, 'data_menu'=>$data_menu));
		$this->load->view('footer');
	}

    public function simpan_relasi(){
        $id_level = $this->input->post('id_level');
        $id_menu = $this->input->post('id_menu');

        // Cek Apakah Relasi Menu Sudah Terbentuk
        $cek_relasi = $this->db->query("SELECT * FROM tbl_relasi_menu WHERE id_level=$id_level AND id_menu=$id_menu")->num_rows();

        if($cek_relasi > 0){ // Jika Relasi Sudah Terbentuk Sebelumnya

            echo '<script>alert("Menu Ini Sudah Tersedia"); window.location="Index"</script>';

        }else{ // Jika Relasi Belum Terbentuk

            $result = $this->M_pengaturan_akses->simpan_data('tbl_relasi_menu', array(
                'id_level' => $this->input->post('id_level'),
                'id_menu' => $this->input->post('id_menu')
            ));
    
            if($result > 0){
                echo '<script>alert("Relasi Menu Berhasil Disimpan"); window.location="Index"</script>';
            }

        }

	}

    public function hapus_relasi($id){
		$result = $this->M_pengaturan_akses->hapus_data('tbl_relasi_menu', array('id_relasi' => $id));
		if($result > 0){
			$this->session->set_flashdata('pesan_sukses','
				<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Data Relasi Menu Berhasil Dihapus</strong>
				</div>
			');

			redirect('data_level');
		}
	}

	public function simpan(){
		$result = $this->M_pengaturan_akses->simpan_data('tbl_level', array(
			'level' => $this->input->post('level')
		));

		if($result > 0){
			echo '<script>alert("Data Level Tersimpan"); window.location="Index"</script>';
		}
	}


	public function update(){
		$result = $this->M_pengaturan_akses->update_data('tbl_level', array(
			'level' => $this->input->post('level')
		), array('id_level' => $this->input->post('id_level')));

		if($result > 0){
			echo '<script>alert("Data Level Berhasil Diupdate"); window.location="Index"</script>';
		}
	}

	public function hapus($id){
		$result = $this->M_pengaturan_akses->hapus_data('tbl_level', array('id_level' => $id));
		if($result > 0){
			$this->session->set_flashdata('pesan_sukses','
				<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Data Level Berhasil Dihapus</strong>
				</div>
			');

			redirect('data_level');
		}
	}

}
