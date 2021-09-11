<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ganti_password extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('helperku');
		$this->load->library('libraryku');
		// $this->load->model('M_user');
	}

	public function index()
	{
		cek_belum_login();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_ganti_password');
		$this->load->view('footer');
	}

	public function update_password(){
		$username = $this->input->post('username');
		$password_lama = sha1($this->input->post('password_lama'));
		$password_baru = sha1($this->input->post('password'));
        $id_user = $this->input->post('id_user');

		// Cek Apakah Password Lama Benar
		$cek = $this->db->query("SELECT * FROM tbl_user WHERE username='$username' AND password='$password_lama'")->num_rows();

		if($cek>0){ // Jika Password Lama Benar

			if($password_lama == $password_baru){ //jika password lama & password baru sama
				echo '<script>alert("Password Baru Tidak Boleh Sama Dengan Password Lama");window.location="index"</script>';

			}else{
                // Ubah password
                $result = $this->db->query("UPDATE tbl_user SET password='$password_baru' WHERE id=$id_user");

				if($result>0){
					echo '<script>alert("Password Berhasil Diubah, Sistem Akan Logout Otomatis !");window.location="ke_logout"</script>';
				}
			}


		}else{ // Jika Password Lama Salah
			echo '<script>alert("Password Lama yang Anda Masukkan Salah");window.location="index"</script>';
		}

		
	}

    public function ke_logout(){
		redirect('login/logout');
	}

}
