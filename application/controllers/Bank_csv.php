<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank_csv extends CI_Controller {

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

		$data = $this->db->query("SELECT * FROM tbl_bank_csv ORDER BY id")->result_array();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_bank_csv',array('data'=>$data));
		$this->load->view('footer');
	}

	
    public function detail($id)
    {
        cek_belum_login();
        $data_bank_csv = $this->db->get_where('tbl_bank_csv', array('id' => $id))->row_array();
        $no_rekening = $data_bank_csv['no_rekening'];
        $periode_from = $data_bank_csv['periode_from'];
        $periode_to = $data_bank_csv['periode_to'];
        $data_bank_csv_detail = $this->db->get_where('tbl_bank_csv_transaksi', array(
            'no_rekening' => $no_rekening,
            'periode_from' => $periode_from,
            'periode_to' => $periode_to
        ))->result_array();

        $this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_bank_csv_detail',array(
            'data_bank_csv' => $data_bank_csv,
            'data_bank_csv_detail' => $data_bank_csv_detail
        ));
		$this->load->view('footer');
    }

    public function hapus($id)
    {
        cek_belum_login();
        $data_bank_csv = $this->db->get_where('tbl_bank_csv', array('id' => $id))->row_array();
        $no_rekening = $data_bank_csv['no_rekening'];
        $periode_from = $data_bank_csv['periode_from'];
        $periode_to = $data_bank_csv['periode_to'];

        // hapus data angsuran
        $result = $this->db->delete('tbl_bank_csv', array('id' => $id));

        if($result > 0){
            // hapus data angsuran detail
            $this->db->delete('tbl_bank_csv_transaksi', array(
                'no_rekening' => $no_rekening,
                'periode_from' => $periode_from,
                'periode_to' => $periode_to
            ));

            echo '<script>alert("Data Bank CSV berhasil dihapus !");window.location="../index"</script>';
        }
    }

}
