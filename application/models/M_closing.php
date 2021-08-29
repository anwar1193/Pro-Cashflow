<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_closing extends CI_Model {


	// RANAH HITUNG OTOMATIS

	public function salaw($tanggal){
		$result = $this->db->query('SELECT * FROM tbl_saldo_awal WHERE tanggal="'.$tanggal.'"');
		return $result->row_array();
	}

	public function cashinproj($tanggal){
		$result = $this->db->query('SELECT SUM(projection) AS cashin_proj FROM tbl_cashinproj WHERE tanggal="'.$tanggal.'"');
		return $result->row_array();
	}

	public function cashinreal($tanggal){
		$result = $this->db->query('SELECT SUM(realisasi) AS cashin_real FROM tbl_cashinreal WHERE tanggal="'.$tanggal.'"');
		return $result->row_array();
	}

	public function cashoutproj($tanggal){
		$result = $this->db->query('SELECT SUM(projection) AS cashout_proj FROM tbl_cashoutproj WHERE tanggal="'.$tanggal.'"');
		return $result->row_array();
	}

	public function cashoutreal($tanggal){
		$result = $this->db->query('SELECT SUM(realisasi) AS cashout_real FROM tbl_cashoutreal WHERE tanggal="'.$tanggal.'"');
		return $result->row_array();
	}

	public function hitung_otomatis($tbl,$data){
		$result = $this->db->insert($tbl,$data);
		return $result;
	}

	public function hitung_otomatis_update($tbl,$data,$where){
		$result = $this->db->update($tbl,$data,$where);
		return $result;
	}

	// Cek Apakah Sudah Di Closing
	public function cek_closing($tbl,$tgl){
		$result = $this->db->get_where($tbl,$tgl);
		return $result;
	}

	// Simpan Note Dari Finance
	public function simpan_note($tbl,$data){
		$result = $this->db->insert($tbl,$data);
		return $result;
	}

	// Simpan Status Closing
	public function status_closing($tbl,$data){
		$result = $this->db->insert($tbl,$data);
		return $result;
	}

}
