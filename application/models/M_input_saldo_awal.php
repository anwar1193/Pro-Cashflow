<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_input_saldo_awal extends CI_Model {

	public function tambah($tbl,$data){
		$result = $this->db->insert($tbl,$data);
		return $result;
	}

	public function tambah_realtime($tbl,$data){
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


	// RANAH HITUNG OTOMATIS

	public function salaw_kemarin($tanggal_kemarin){
		$result = $this->db->query('SELECT * FROM tbl_saldo_awal WHERE tanggal="'.$tanggal_kemarin.'"');
		return $result->row_array();
	}

	public function cashinproj_kemarin($tanggal_kemarin){
		$result = $this->db->query('SELECT SUM(projection) AS cashin_proj FROM tbl_cashinproj WHERE tanggal="'.$tanggal_kemarin.'"');
		return $result->row_array();
	}

	public function cashinreal_kemarin($tanggal_kemarin){
		$result = $this->db->query('SELECT SUM(realisasi) AS cashin_real FROM tbl_cashinreal WHERE tanggal="'.$tanggal_kemarin.'"');
		return $result->row_array();
	}

	public function cashoutproj_kemarin($tanggal_kemarin){
		$result = $this->db->query('SELECT SUM(projection) AS cashout_proj FROM tbl_cashoutproj WHERE tanggal="'.$tanggal_kemarin.'"');
		return $result->row_array();
	}

	public function cashoutreal_kemarin($tanggal_kemarin){
		$result = $this->db->query('SELECT SUM(realisasi) AS cashout_real FROM tbl_cashoutreal WHERE tanggal="'.$tanggal_kemarin.'"');
		return $result->row_array();
	}

	public function hitung_otomatis($tbl,$data){
		$result = $this->db->insert($tbl,$data);
		return $result;
	}

}
