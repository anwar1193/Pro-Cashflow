<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Angsuran_diluar_bank extends CI_Controller {

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

		$data_angsuran_diluar_bank = $this->db->query("SELECT * FROM tbl_angsuranluarbank ORDER BY id")->result_array();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_angsuran_diluar_bank',array('data_angsuran_diluar_bank'=>$data_angsuran_diluar_bank));
		$this->load->view('footer');
	}

	
    public function detail($id)
    {
        cek_belum_login();
        $data_angsuran = $this->db->get_where('tbl_angsuranluarbank', array('id' => $id))->row_array();
        $contract_no = $data_angsuran['contract_no'];
        $data_angsuran_detail = $this->db->get_where('tbl_angsuranluarbank_detail', array('contract_no' => $contract_no))->result_array();

        $this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_angsuran_diluar_bank_detail',array(
            'data_angsuran' => $data_angsuran,
            'data_angsuran_detail' => $data_angsuran_detail
        ));
		$this->load->view('footer');
    }

    public function hapus($id)
    {
        cek_belum_login();
        $data_angsuran = $this->db->get_where('tbl_angsuranluarbank', array('id' => $id))->row_array();
        $contract_no = $data_angsuran['contract_no'];

        // hapus data angsuran
        $result = $this->db->delete('tbl_angsuranluarbank', array('id' => $id));

        if($result > 0){
            // hapus data angsuran detail
            $this->db->delete('tbl_angsuranluarbank_detail', array('contract_no' => $contract_no));

            echo '<script>alert("Data angsuran berhasil dihapus !");window.location="../index"</script>';
        }
    }

    public function proses_paid()
    {
        date_default_timezone_set("Asia/Jakarta");
        $id = $this->input->post('id');
        $contract_no = $this->input->post('contract_no');

        // Cari id induk (untuk redirect ke halaman detail / halaman sebelumnya)
        $data_induk = $this->db->get_where('tbl_angsuranluarbank', array('contract_no' => $contract_no))->row_array();
        $id_induk = $data_induk['id'];

        $result = $this->db->update('tbl_angsuranluarbank_detail', array(
            'paid_amount' => $this->input->post('installment'),
            'paid_date' => date('Y-m-d', strtotime($this->input->post('paid_date')))
        ), array('id' => $id));

        if($result){
            echo '<script>
                alert("Proses Paid Berhasil!");window.location="detail/'.$id_induk.'";
            </script>';

        }
    }

    public function paid_selected()
    {
        $tanggal_from = $this->input->post('tanggal_from');
        $tanggal_to = $this->input->post('tanggal_to');
        
        $data_angsuran = $this->db->query("SELECT 
                                            tbl_angsuranluarbank.bank_group as bank_group,
                                            tbl_angsuranluarbank.contract_no as contract_no,
                                            tbl_angsuranluarbank.bank_name as bank_name,
                                            tbl_angsuranluarbank_detail.id as id,
                                            tbl_angsuranluarbank_detail.no_periode as no_periode,
                                            tbl_angsuranluarbank_detail.due_date as due_date,
                                            tbl_angsuranluarbank_detail.principal as principal,
                                            tbl_angsuranluarbank_detail.interest as interest,
                                            tbl_angsuranluarbank_detail.installment as installment,
                                            tbl_angsuranluarbank_detail.paid_amount as paid_amount
                                            FROM tbl_angsuranluarbank_detail INNER JOIN tbl_angsuranluarbank USING(contract_no) WHERE tbl_angsuranluarbank_detail.due_date BETWEEN '$tanggal_from' AND '$tanggal_to'")->result_array();

        $this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_angsuran_diluar_bank_paid',array(
            'data_angsuran' => $data_angsuran,
            'tanggal_from' => $tanggal_from,
            'tanggal_to' => $tanggal_to
        ));
		$this->load->view('footer');
    }

    public function proses_paid_selected()
    {
        date_default_timezone_set("Asia/Jakarta");
        $id = $this->input->post('id');
        $contract_no = $this->input->post('contract_no');
        $tanggal_from = $this->input->post('tanggal_from');
        $tanggal_to = $this->input->post('tanggal_to');

        // Untuk link supaya kembali ke halaman sebelumnya
        $tanggal_from_link = str_replace('-', '_', $tanggal_from);
        $tanggal_to_link = str_replace('-', '_', $tanggal_to);

        $result = $this->db->update('tbl_angsuranluarbank_detail', array(
            'paid_amount' => $this->input->post('installment'),
            'paid_date' => date('Y-m-d', strtotime($this->input->post('paid_date')))
        ), array('id' => $id));

        if($result){
            echo '<script>
                alert("Proses Paid Berhasil!");window.location="paid_selected_after/'.$tanggal_from_link.'/'.$tanggal_to_link.'";
            </script>';

        }
    }

    public function paid_selected_after($tanggal_form_link, $tanggal_to_link)
    {
        $tanggal_from = str_replace('_', '-', $tanggal_form_link);
        $tanggal_to = str_replace('_', '-', $tanggal_to_link);
        
        $data_angsuran = $this->db->query("SELECT 
                                            tbl_angsuranluarbank.bank_group as bank_group,
                                            tbl_angsuranluarbank.contract_no as contract_no,
                                            tbl_angsuranluarbank.bank_name as bank_name,
                                            tbl_angsuranluarbank_detail.id as id,
                                            tbl_angsuranluarbank_detail.no_periode as no_periode,
                                            tbl_angsuranluarbank_detail.due_date as due_date,
                                            tbl_angsuranluarbank_detail.principal as principal,
                                            tbl_angsuranluarbank_detail.interest as interest,
                                            tbl_angsuranluarbank_detail.installment as installment,
                                            tbl_angsuranluarbank_detail.paid_amount as paid_amount
                                            FROM tbl_angsuranluarbank_detail INNER JOIN tbl_angsuranluarbank USING(contract_no) WHERE tbl_angsuranluarbank_detail.due_date BETWEEN '$tanggal_from' AND '$tanggal_to'")->result_array();

        $this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_angsuran_diluar_bank_paid',array(
            'data_angsuran' => $data_angsuran,
            'tanggal_from' => $tanggal_from,
            'tanggal_to' => $tanggal_to
        ));
		$this->load->view('footer');
    }

}
