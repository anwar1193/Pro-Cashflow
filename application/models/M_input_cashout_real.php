<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_input_cashout_real extends CI_Model {

	public function tambah($tbl,$data){
		$result = $this->db->insert($tbl,$data);
		return $result;
	}

	public function tambah_lagi($tbl, $data, $where){
		$result = $this->db->update($tbl, $data, $where);
		return $result;
	}

	public function view_inputan($tgl){
		$result = $this->db->query("SELECT * FROM tbl_cashoutreal WHERE tanggal='$tgl' ORDER BY kode_status");
		return $result->result_array();
	}

	public function view_inputan_bank($tgl){
		$result = $this->db->query("SELECT * FROM tbl_cashoutreal WHERE tanggal='$tgl' AND (kode_status='C' OR kode_status='D') ORDER BY kode_status");
		return $result->result_array();
	}

	public function detail_cashout($tbl,$where){
		$result = $this->db->get_where($tbl,$where);
		return $result->result_array();
	}

	public function edit_cashout($tbl,$id){
		$result = $this->db->get_where($tbl,$id);
		return $result->row_array();
	}

	public function update_cashout($tbl,$data,$id){
		$result = $this->db->update($tbl,$data,$id);
		return $result;
	}

	public function hapus_cashout($tbl,$id){
		$result = $this->db->delete($tbl,$id);
		return $result;
	}

	public function tampil_deposito(){
		$result = $this->db->get_where('tbl_deposito', array('id' => 1));
		return $result->row_array();
	}

	public function update_deposito($tbl, $data, $where){
		$result = $this->db->update($tbl, $data, $where);
		return $result;
	}

	public function tampil_b2b(){
		$result = $this->db->get_where('tbl_b2b', array('id' => 1));
		return $result->row_array();
	}

	public function update_b2b($tbl, $data, $where){
		$result = $this->db->update($tbl, $data, $where);
		return $result;
	}

}
