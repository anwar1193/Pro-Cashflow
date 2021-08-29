<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_b2b extends CI_Model {

	public function simpan_b2b($tbl, $data){
		$result = $this->db->insert($tbl, $data);
		return $result;
	}

	public function update_b2b($tbl, $data, $where){
		$result = $this->db->update($tbl, $data, $where);
		return $result;
	}

	public function cek_b2b($tbl, $where){
		$result = $this->db->get_where($tbl, $where);
		return $result->num_rows();
	}

}
