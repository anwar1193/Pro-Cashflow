<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_input_allocated_cash extends CI_Model {

	public function tambah($tbl,$data){
		$result = $this->db->insert($tbl,$data);
		return $result;
	}

	public function tampil_edit($tbl,$tanggal){
		$result = $this->db->get_where($tbl,$tanggal);
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
