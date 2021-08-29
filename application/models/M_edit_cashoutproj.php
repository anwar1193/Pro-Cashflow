<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_edit_cashoutproj extends CI_Model {

	public function tampil_cashout($tbl,$tgl){
		$result = $this->db->get_where($tbl,$tgl);
		return $result->result_array();
	}

	public function edit($tbl,$id){
		$result = $this->db->get_where($tbl,$id);
		return $result->row_array();
	}

	public function update($tbl,$data,$id){
		$result = $this->db->update($tbl,$data,$id);
		return $result;
	}

}
