<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	public function tampil_user(){
		// $result = $this->db->get('tbl_user');
		$result = $this->db->query('SELECT * FROM tbl_user INNER JOIN tbl_level ON tbl_user.level = tbl_level.id_level');
		return $result;
	}

	public function simpan_user($tbl,$data){
		$result = $this->db->insert($tbl,$data);
		return $result;
	}

	public function tampil_user_where($tbl,$where){
		$result = $this->db->get_where($tbl, $where);
		return $result;
	}

	public function update_user($tbl, $data, $where){
		$result = $this->db->update($tbl, $data, $where);
		return $result;
	}

	public function hapus_user($tbl,$id){
		$result = $this->db->delete($tbl,$id);
		return $result;
	}

}
