<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_real_otomatis extends CI_Model {

	public function tampil_cashout_proj()
	{
		$this->db->order_by('id','DESC');
		$result = $this->db->get('tbl_cashoutproj');
		return $result->result_array();
	}

	public function approve($tbl,$data){
		$result = $this->db->insert($tbl,$data);
		return $result;
	}

	public function edit_amount_cashout($tbl,$id){
		$result = $this->db->get_Where($tbl,$id);
		return $result->row_array();
	}

	public function update_amount_cashout($tbl,$data,$id){
		$result = $this->db->update($tbl,$data,$id);
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
