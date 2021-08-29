<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function proses($tbl,$user,$pass){
		$result = $this->db->get_where($tbl,$user,$pass);
		return $result;
	}

	public function ambil_user($id=null){
		$this->db->from('tbl_user');
		if($id != null){
			$this->db->where('id', $id);
		}
		$query = $this->db->get();
		return $query;
	}

}
