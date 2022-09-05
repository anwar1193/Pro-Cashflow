<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cashflow_data extends CI_Model {

	// Saldo Awal
	public function saldo_awal($tanggal){
		$result = $this->db->query('SELECT * FROM tbl_saldo_awal WHERE tanggal = "'.$tanggal.'"');
		return $result->row_array();
	}

	// Allocated Cash
	public function allocated_cash($tanggal){
		$result = $this->db->query('SELECT * FROM tbl_allocated_cash WHERE tanggal = "'.$tanggal.'"');
		return $result->row_array();
	}

	// Ready Cash
	public function ready_cash($tanggal){
		$result = $this->db->query('SELECT * FROM tbl_ready_cash WHERE tanggal = "'.$tanggal.'"');
		return $result->row_array();
	}

	// Kas Besar Cabang
	public function kbc($tanggal){
		$result = $this->db->query('SELECT * FROM tbl_kbc WHERE tanggal = "'.$tanggal.'"');
		return $result->row_array();
	}


	// ..........................................................................................

	// CASH-IN HARI Kemarin

	// Cash-In Hari Kemarin, Bidang A (Pencairan Bank)
	public function tampil_cashin_aKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="A" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Kemarin, Bidang B (Pencairan Bank)
	public function tampil_cashin_bKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="B" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Kemarin, Bidang C (Setoran Angsuran Debitur)
	public function tampil_cashin_cKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="C" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Kemarin, Bidang D (Angsuran Dari Kantor POS)
	public function tampil_cashin_dKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="D" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Kemarin, Bidang E (Pelunasan Awal)
	public function tampil_cashin_eKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="E" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Kemarin, Bidang F (Penjualan AYDA)
	public function tampil_cashin_fKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="F" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Kemarin, Bidang G (Recovery WO)
	public function tampil_cashin_gKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="G" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Kemarin, Bidang H (Ganti Klaim Asuransi)
	public function tampil_cashin_hKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="H" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Kemarin, Bidang I (Tarik PRK)
	public function tampil_cashin_iKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="I" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Kemarin, Bidang J (Pinjaman)
	public function tampil_cashin_jKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="J" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Kemarin, Bidang K (Pembayaran Suryamas)
	public function tampil_cashin_kKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="K" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Kemarin, Bidang L (Penjualan Kendaraan Inventaris)
	public function tampil_cashin_lKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="L" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Kemarin, Bidang M
	public function tampil_cashin_mKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="M" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Kemarin, Bidang N
	public function tampil_cashin_nKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="N" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Kemarin, Bidang O
	public function tampil_cashin_oKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="O" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Kemarin, Bidang P
	public function tampil_cashin_pKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="P" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Kemarin, Bidang Q
	public function tampil_cashin_qKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Q" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Kemarin, Bidang R
	public function tampil_cashin_rKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="R" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Kemarin, Bidang S
	public function tampil_cashin_sKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="S" 
		');
		return $result->row_array();
	}


	// TOTAL Cash-In Hari Kemarin

	// Projection (Total Hari - Kemarin)
	public function totalCashinProj_Kem($tanggal){
		$result = $this->db->query('
			SELECT SUM(projection) AS tProjection FROM tbl_cashinproj WHERE tanggal="'.$tanggal.'"
		');
		return $result->row_array();
	}

	// Realisasi (Total Hari - Kemarin)
	// public function totalCashinReal_Kem($tanggal){
	// 	$result = $this->db->query('
	// 		SELECT SUM(realisasi) AS tRealisasi FROM tbl_cashinreal WHERE tanggal="'.$tanggal.'"
	// 	');
	// 	return $result->row_array();
	// }

// -------------------------------------------------------------------------------------------------------------------------

	// CASH-IN HARI KE-1

	// Cash-In Hari Ke-1, Bidang A (Pencairan Bank)
	public function tampil_cashin_a1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="A" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-1, Bidang B (Pencairan Bank)
	public function tampil_cashin_b1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="B" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-1, Bidang C (Setoran Angsuran Debitur)
	public function tampil_cashin_c1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="C" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-1, Bidang D (Angsuran Dari Kantor POS)
	public function tampil_cashin_d1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="D" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-1, Bidang E (Pelunasan Awal)
	public function tampil_cashin_e1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="E" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-1, Bidang F (Penjualan AYDA)
	public function tampil_cashin_f1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="F" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-1, Bidang G (Recovery WO)
	public function tampil_cashin_g1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="G" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-1, Bidang H (Ganti Klaim Asuransi)
	public function tampil_cashin_h1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="H" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-1, Bidang I (Tarik PRK)
	public function tampil_cashin_i1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="I" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-1, Bidang J (Pinjaman)
	public function tampil_cashin_j1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="J" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-1, Bidang K (Pembayaran Suryamas)
	public function tampil_cashin_k1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="K" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-1, Bidang L (Penjualan Kendaraan Inventaris)
	public function tampil_cashin_l1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="L" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-1, Bidang M
	public function tampil_cashin_m1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="M" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-1, Bidang N
	public function tampil_cashin_n1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="N" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-1, Bidang O
	public function tampil_cashin_o1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="O" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-1, Bidang P
	public function tampil_cashin_p1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="P" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-1, Bidang Q
	public function tampil_cashin_q1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Q" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-1, Bidang R
	public function tampil_cashin_r1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="R" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-1, Bidang S
	public function tampil_cashin_s1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="S" 
		');
		return $result->row_array();
	}


	// TOTAL Cash-In Hari Ke-1

	// Projection (Total Hari - 1)
	public function totalCashinProj_1($tanggal){
		$result = $this->db->query('
			SELECT SUM(projection) AS tProjection FROM tbl_cashinproj INNER JOIN tbl_sb_cashin USING(kode_status) WHERE status_aktif=1 AND tanggal="'.$tanggal.'"
		');
		return $result->row_array();
	}

	// Realisasi (Total Hari - 1)
	public function totalCashinReal_1($tanggal){
		$result = $this->db->query('
			SELECT SUM(realisasi) AS tRealisasi FROM tbl_cashinreal INNER JOIN tbl_sb_cashin USING(kode_status) WHERE status_aktif=1 AND tanggal="'.$tanggal.'"
		');
		return $result->row_array();
	}

// -------------------------------------------------------------------------------------------------------------------------

	// CASH-IN HARI KE-2

	// Cash-In Hari Ke-2, Bidang A (Pencairan Bank)
	public function tampil_cashin_a2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="A" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-2, Bidang B (Pencairan Bank)
	public function tampil_cashin_b2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="B" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-2, Bidang C (Setoran Angsuran Debitur)
	public function tampil_cashin_c2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="C" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-2, Bidang D (Angsuran Dari Kantor POS)
	public function tampil_cashin_d2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="D" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-2, Bidang E (Pelunasan Awal)
	public function tampil_cashin_e2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="E" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-2, Bidang F (Penjualan AYDA)
	public function tampil_cashin_f2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="F" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-2, Bidang G (Recovery WO)
	public function tampil_cashin_g2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="G" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-2, Bidang H (Ganti Klaim Asuransi)
	public function tampil_cashin_h2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="H" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-2, Bidang I (Tarik PRK)
	public function tampil_cashin_i2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="I" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-2, Bidang J (Pinjaman)
	public function tampil_cashin_j2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="J" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-2, Bidang K (Pembayaran Suryamas)
	public function tampil_cashin_k2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="K" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-2, Bidang L (Penjualan Kendaraan Inventaris)
	public function tampil_cashin_l2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="L" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-2, Bidang M
	public function tampil_cashin_m2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="M" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-2, Bidang N
	public function tampil_cashin_n2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="N" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-2, Bidang O
	public function tampil_cashin_o2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="O" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-2, Bidang P
	public function tampil_cashin_p2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="P" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-2, Bidang Q
	public function tampil_cashin_q2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Q" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-2, Bidang R
	public function tampil_cashin_r2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="R" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-2, Bidang S
	public function tampil_cashin_s2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="S" 
		');
		return $result->row_array();
	}


	// TOTAL Cash-In Hari Ke-2

	// Projection (Total Hari - 2)
	public function totalCashinProj_2($tanggal){
		$result = $this->db->query('
			SELECT SUM(projection) AS tProjection FROM tbl_cashinproj INNER JOIN tbl_sb_cashin USING(kode_status) WHERE status_aktif=1 AND tanggal="'.$tanggal.'"
		');
		return $result->row_array();
	}

	// Realisasi (Total Hari - 2)
	public function totalCashinReal_2($tanggal){
		$result = $this->db->query('
			SELECT SUM(realisasi) AS tRealisasi FROM tbl_cashinreal INNER JOIN tbl_sb_cashin USING(kode_status) WHERE status_aktif=1 AND tanggal="'.$tanggal.'"
		');
		return $result->row_array();
	}


// -------------------------------------------------------------------------------------------------------------------------

	// CASH-IN HARI KE-3

	// Cash-In Hari Ke-3, Bidang A (Pencairan Bank)
	public function tampil_cashin_a3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="A" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-3, Bidang B (Pencairan Bank)
	public function tampil_cashin_b3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="B" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-3, Bidang C (Setoran Angsuran Debitur)
	public function tampil_cashin_c3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="C" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-3, Bidang D (Angsuran Dari Kantor POS)
	public function tampil_cashin_d3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="D" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-3, Bidang E (Pelunasan Awal)
	public function tampil_cashin_e3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="E" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-3, Bidang F (Penjualan AYDA)
	public function tampil_cashin_f3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="F" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-3, Bidang G (Recovery WO)
	public function tampil_cashin_g3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="G" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-3, Bidang H (Ganti Klaim Asuransi)
	public function tampil_cashin_h3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="H" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-3, Bidang I (Tarik PRK)
	public function tampil_cashin_i3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="I" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-3, Bidang J (Pinjaman)
	public function tampil_cashin_j3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="J" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-3, Bidang K (Pembayaran Suryamas)
	public function tampil_cashin_k3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="K" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-3, Bidang L (Penjualan Kendaraan Inventaris)
	public function tampil_cashin_l3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="L" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-3, Bidang M
	public function tampil_cashin_m3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="M" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-3, Bidang N
	public function tampil_cashin_n3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="N" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-3, Bidang O
	public function tampil_cashin_o3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="O" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-3, Bidang P
	public function tampil_cashin_p3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="P" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-3, Bidang Q
	public function tampil_cashin_q3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Q" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-3, Bidang R
	public function tampil_cashin_r3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="R" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-3, Bidang S
	public function tampil_cashin_s3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="S" 
		');
		return $result->row_array();
	}


	// TOTAL Cash-In Hari Ke-3

	// Projection (Total Hari - 3)
	public function totalCashinProj_3($tanggal){
		$result = $this->db->query('
			SELECT SUM(projection) AS tProjection FROM tbl_cashinproj INNER JOIN tbl_sb_cashin USING(kode_status) WHERE status_aktif=1 AND tanggal="'.$tanggal.'"
		');
		return $result->row_array();
	}

	// Realisasi (Total Hari - 3)
	public function totalCashinReal_3($tanggal){
		$result = $this->db->query('
			SELECT SUM(realisasi) AS tRealisasi FROM tbl_cashinreal INNER JOIN tbl_sb_cashin USING(kode_status) WHERE status_aktif=1 AND tanggal="'.$tanggal.'"
		');
		return $result->row_array();
	}

// -------------------------------------------------------------------------------------------------------------------------

	// CASH-IN HARI KE-4

	// Cash-In Hari Ke-4, Bidang A (Pencairan Bank)
	public function tampil_cashin_a4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="A" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-4, Bidang B (Pencairan Bank)
	public function tampil_cashin_b4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="B" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-4, Bidang C (Setoran Angsuran Debitur)
	public function tampil_cashin_c4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="C" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-4, Bidang D (Angsuran Dari Kantor POS)
	public function tampil_cashin_d4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="D" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-4, Bidang E (Pelunasan Awal)
	public function tampil_cashin_e4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="E" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-4, Bidang F (Penjualan AYDA)
	public function tampil_cashin_f4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="F" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-4, Bidang G (Recovery WO)
	public function tampil_cashin_g4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="G" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-4, Bidang H (Ganti Klaim Asuransi)
	public function tampil_cashin_h4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="H" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-4, Bidang I (Tarik PRK)
	public function tampil_cashin_i4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="I" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-4, Bidang J (Pinjaman)
	public function tampil_cashin_j4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="J" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-4, Bidang K (Pembayaran Suryamas)
	public function tampil_cashin_k4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="K" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-4, Bidang L (Penjualan Kendaraan Inventaris)
	public function tampil_cashin_l4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="L" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-4, Bidang M
	public function tampil_cashin_m4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="M" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-4, Bidang N
	public function tampil_cashin_n4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="N" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-4, Bidang O
	public function tampil_cashin_o4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="O" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-4, Bidang P
	public function tampil_cashin_p4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="P" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-4, Bidang Q
	public function tampil_cashin_q4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Q" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-4, Bidang R
	public function tampil_cashin_r4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="R" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-4, Bidang S
	public function tampil_cashin_s4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="S" 
		');
		return $result->row_array();
	}


	// Projection (Total Hari - 4)
	public function totalCashinProj_4($tanggal){
		$result = $this->db->query('
			SELECT SUM(projection) AS tProjection FROM tbl_cashinproj INNER JOIN tbl_sb_cashin USING(kode_status) WHERE status_aktif=1 AND tanggal="'.$tanggal.'"
		');
		return $result->row_array();
	}

	// Realisasi (Total Hari - 4)
	public function totalCashinReal_4($tanggal){
		$result = $this->db->query('
			SELECT SUM(realisasi) AS tRealisasi FROM tbl_cashinreal INNER JOIN tbl_sb_cashin USING(kode_status) WHERE status_aktif=1 AND tanggal="'.$tanggal.'"
		');
		return $result->row_array();
	}


// -------------------------------------------------------------------------------------------------------------------------

	// CASH-IN HARI KE-5

	// Cash-In Hari Ke-5, Bidang A (Pencairan Bank)
	public function tampil_cashin_a5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="A" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-5, Bidang B (Pencairan Bank)
	public function tampil_cashin_b5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="B" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-5, Bidang C (Setoran Angsuran Debitur)
	public function tampil_cashin_c5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="C" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-5, Bidang D (Angsuran Dari Kantor POS)
	public function tampil_cashin_d5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="D" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-5, Bidang E (Pelunasan Awal)
	public function tampil_cashin_e5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="E" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-5, Bidang F (Penjualan AYDA)
	public function tampil_cashin_f5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="F" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-5, Bidang G (Recovery WO)
	public function tampil_cashin_g5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="G" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-5, Bidang H (Ganti Klaim Asuransi)
	public function tampil_cashin_h5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="H" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-5, Bidang I (Tarik PRK)
	public function tampil_cashin_i5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="I" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-5, Bidang J (Pinjaman)
	public function tampil_cashin_j5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="J" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-5, Bidang K (Pembayaran Suryamas)
	public function tampil_cashin_k5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="K" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-5, Bidang L (Penjualan Kendaraan Inventaris)
	public function tampil_cashin_l5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="L" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-5, Bidang M
	public function tampil_cashin_m5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="M" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-5, Bidang N
	public function tampil_cashin_n5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="N" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-5, Bidang O
	public function tampil_cashin_o5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="O" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-5, Bidang P
	public function tampil_cashin_p5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="P" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-5, Bidang Q
	public function tampil_cashin_q5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Q" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-5, Bidang R
	public function tampil_cashin_r5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="R" 
		');
		return $result->row_array();
	}

	// Cash-In Hari Ke-5, Bidang S
	public function tampil_cashin_s5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="S" 
		');
		return $result->row_array();
	}


	// Projection (Total Hari - 5)
	public function totalCashinProj_5($tanggal){
		$result = $this->db->query('
			SELECT SUM(projection) AS tProjection FROM tbl_cashinproj INNER JOIN tbl_sb_cashin USING(kode_status) WHERE status_aktif=1 AND tanggal="'.$tanggal.'"
		');
		return $result->row_array();
	}

	// Realisasi (Total Hari - 5)
	public function totalCashinReal_5($tanggal){
		$result = $this->db->query('
			SELECT SUM(realisasi) AS tRealisasi FROM tbl_cashinreal INNER JOIN tbl_sb_cashin USING(kode_status) WHERE status_aktif=1 AND tanggal="'.$tanggal.'"
		');
		return $result->row_array();
	}

// -------------------------------------------------------------------------------------------------------------------------

	// CASH-OUT HARI Kemarin

	// Cash-Out Hari Kemarin, Bidang A (Pencairan Dealer)
	public function tampil_cashout_aKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="A" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang B (Angsuran Bank (Non Mirroring))
	public function tampil_cashout_bKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="B" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang C (Angsuran Bank (Mirroring))
	public function tampil_cashout_cKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="C" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang D (Pelunasan Closed Reguler & ET)
	public function tampil_cashout_dKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="D" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang E (Pelunasan Buy Back 90 Up)
	public function tampil_cashout_eKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="E" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang F (Pelunasan AYDA)
	public function tampil_cashout_fKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="F" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang G (Pelunasan WO)
	public function tampil_cashout_gKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="G" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang H (Pelunasan CSUL)
	public function tampil_cashout_hKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="H" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang I (Isi Kas)
	public function tampil_cashout_iKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="I"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang J (Biaya Gaji)
	public function tampil_cashout_jKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="J" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang K (Biaya Pajak)
	public function tampil_cashout_kKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="K" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang L (Bayar Pesangon)
	public function tampil_cashout_lKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="L" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang M (Biaya THR, Bonus)
	public function tampil_cashout_mKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="M" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang N (Biaya Jamsostek & BPJS)
	public function tampil_cashout_nKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="N" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang O (Biaya Sewa Kantor/ Rumah Kacab / Pool)
	public function tampil_cashout_oKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="O" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang P (Biaya Maintenance (Dleas & Jari))
	public function tampil_cashout_pKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="P" 
		');
		return $result->row_array();
	}

	// Cash-Out Hari Kemarin, Bidang Q (Biaya Listrik - Cabang)
	public function tampil_cashout_qKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Q" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang R (Biaya Listrik - Kantor Pusat)
	public function tampil_cashout_rKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="R" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang S (Biaya Air (Cabang & Pusat))
	public function tampil_cashout_sKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="S" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang T (Biaya Internet - Cabang)
	public function tampil_cashout_tKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="T" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang U (Biaya Internet - Kantor Pusat )
	public function tampil_cashout_uKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="U" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang V (Biaya Telepon - Cabang )
	public function tampil_cashout_vKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="V" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang W (Biaya Telepon - Kantor Pusat)
	public function tampil_cashout_wKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="W" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang X (Biaya Sewa Mesin Foto Copy)
	public function tampil_cashout_xKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="X" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang Y (Biaya Beli ATK & Cetakan)
	public function tampil_cashout_yKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Y" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang Z (Biaya POS & Pengiriman)
	public function tampil_cashout_zKem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Z"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang A2 (Biaya Perbaikan Kendaraan)
	public function tampil_cashout_a2Kem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="A2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang B2 (Biaya Perbaikan/Pembelian/Sewa Peralatan Kantor)
	public function tampil_cashout_b2Kem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="B2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang C2 (Biaya PBB, Service Charge Sentraya)
	public function tampil_cashout_c2Kem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="C2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang D2 (Biaya Asuransi Hagati, Sinar Mas)
	public function tampil_cashout_d2Kem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="D2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang E2 (Biaya Asuransi Jamkrindo)
	public function tampil_cashout_e2Kem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="E2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang F2 (Penggantian Klaim Asuransi ke Nasabah )
	public function tampil_cashout_f2Kem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="F2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang G2 (Biaya Perbaikan Gedung)
	public function tampil_cashout_g2Kem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="G2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang H2 (Biaya Tour & Raker)
	public function tampil_cashout_h2Kem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="H2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang I2 (Biaya Microsoft, Aktiva Tak Berwujud)
	public function tampil_cashout_i2Kem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="I2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang J2 (Biaya BMHD Notaris Fiducia)
	public function tampil_cashout_j2Kem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="J2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang K2 (Biaya Penarikan / Penagihan)
	public function tampil_cashout_k2Kem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="K2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang L2 (Biaya Dinas Keluar Kota, Represetasi)
	public function tampil_cashout_l2Kem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="L2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang M2 (Biaya Keperluan Kantor, Pajak Kendaraan)
	public function tampil_cashout_m2Kem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="M2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang N2 (Biaya Profesional )
	public function tampil_cashout_n2Kem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="N2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang O2 (Biaya Iklan)
	public function tampil_cashout_o2Kem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="O2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang P2 (Biaya Jasa Perantara, Jasa Penyimpanan)
	public function tampil_cashout_p2Kem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="P2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang Q2 (Biaya Pendidikan / Diklat)
	public function tampil_cashout_q2Kem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Q2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang R2 (Biaya Bank)
	public function tampil_cashout_r2Kem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="R2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang S2 (Bayar Pinjaman PRK)
	public function tampil_cashout_s2Kem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="S2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang T2 (Bayar Pinjaman Pemegang Saham)
	public function tampil_cashout_t2Kem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="T2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Kemarin, Bidang U2 (Bayar Pinjaman Lain-lain)
	public function tampil_cashout_u2Kem($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="U2"
		');
		return $result->row_array();
	}


	// Projection (Total Hari - Kemarin)
	public function totalCashoutProj_Kem($tanggal){
		$result = $this->db->query('
			SELECT SUM(projection) AS tProjection FROM tbl_cashoutproj WHERE tanggal="'.$tanggal.'"
		');
		return $result->row_array();
	}

	// Realisasi (Total Hari - Kemarin)
	// public function totalCashoutReal_Kem($tanggal){
	// 	$result = $this->db->query('
	// 		SELECT SUM(realisasi) AS tRealisasi FROM tbl_cashoutreal WHERE tanggal="'.$tanggal.'"
	// 	');
	// 	return $result->row_array();
	// }

// -------------------------------------------------------------------------------------------------------------------------

	// CASH-OUT HARI KE-1

	// Cash-Out Hari Ke-1, Bidang A (Pencairan Dealer)
	public function tampil_cashout_a1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="A" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang B (Angsuran Bank (Non Mirroring))
	public function tampil_cashout_b1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="B" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang C (Angsuran Bank (Mirroring))
	public function tampil_cashout_c1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="C" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang D (Pelunasan Closed Reguler & ET)
	public function tampil_cashout_d1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="D" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang E (Pelunasan Buy Back 90 Up)
	public function tampil_cashout_e1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="E" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang F (Pelunasan AYDA)
	public function tampil_cashout_f1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="F" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang G (Pelunasan WO)
	public function tampil_cashout_g1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="G" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang H (Pelunasan CSUL)
	public function tampil_cashout_h1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="H" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang I (Isi Kas)
	public function tampil_cashout_i1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="I"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang J (Biaya Gaji)
	public function tampil_cashout_j1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="J" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang K (Biaya Pajak)
	public function tampil_cashout_k1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="K" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang L (Bayar Pesangon)
	public function tampil_cashout_l1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="L" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang M (Biaya THR, Bonus)
	public function tampil_cashout_m1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="M" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang N (Biaya Jamsostek & BPJS)
	public function tampil_cashout_n1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="N" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang O (Biaya Sewa Kantor/ Rumah Kacab / Pool)
	public function tampil_cashout_o1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="O" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang P (Biaya Maintenance (Dleas & Jari))
	public function tampil_cashout_p1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="P" 
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-1, Bidang Q (Biaya Listrik - Cabang)
	public function tampil_cashout_q1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Q" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang R (Biaya Listrik - Kantor Pusat)
	public function tampil_cashout_r1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="R" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang S (Biaya Air (Cabang & Pusat))
	public function tampil_cashout_s1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="S" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang T (Biaya Internet - Cabang)
	public function tampil_cashout_t1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="T" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang U (Biaya Internet - Kantor Pusat )
	public function tampil_cashout_u1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="U" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang V (Biaya Telepon - Cabang )
	public function tampil_cashout_v1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="V" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang W (Biaya Telepon - Kantor Pusat)
	public function tampil_cashout_w1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="W" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang X (Biaya Sewa Mesin Foto Copy)
	public function tampil_cashout_x1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="X" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang Y (Biaya Beli ATK & Cetakan)
	public function tampil_cashout_y1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Y" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang Z (Biaya POS & Pengiriman)
	public function tampil_cashout_z1($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Z"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang A2 (Biaya Perbaikan Kendaraan)
	public function tampil_cashout_a21($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="A2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang B2 (Biaya Perbaikan/Pembelian/Sewa Peralatan Kantor)
	public function tampil_cashout_b21($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="B2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang C2 (Biaya PBB, Service Charge Sentraya)
	public function tampil_cashout_c21($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="C2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang D2 (Biaya Asuransi Hagati, Sinar Mas)
	public function tampil_cashout_d21($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="D2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang E2 (Biaya Asuransi Jamkrindo)
	public function tampil_cashout_e21($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="E2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang F2 (Penggantian Klaim Asuransi ke Nasabah )
	public function tampil_cashout_f21($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="F2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang G2 (Biaya Perbaikan Gedung)
	public function tampil_cashout_g21($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="G2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang H2 (Biaya Tour & Raker)
	public function tampil_cashout_h21($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="H2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang I2 (Biaya Microsoft, Aktiva Tak Berwujud)
	public function tampil_cashout_i21($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="I2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang J2 (Biaya BMHD Notaris Fiducia)
	public function tampil_cashout_j21($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="J2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang K2 (Biaya Penarikan / Penagihan)
	public function tampil_cashout_k21($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="K2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang L2 (Biaya Dinas Keluar Kota, Represetasi)
	public function tampil_cashout_l21($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="L2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang M2 (Biaya Keperluan Kantor, Pajak Kendaraan)
	public function tampil_cashout_m21($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="M2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang N2 (Biaya Profesional )
	public function tampil_cashout_n21($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="N2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang O2 (Biaya Iklan)
	public function tampil_cashout_o21($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="O2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang P2 (Biaya Jasa Perantara, Jasa Penyimpanan)
	public function tampil_cashout_p21($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="P2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang Q2 (Biaya Pendidikan / Diklat)
	public function tampil_cashout_q21($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Q2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang R2 (Biaya Bank)
	public function tampil_cashout_r21($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="R2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang S2 (Bayar Pinjaman PRK)
	public function tampil_cashout_s21($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="S2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang T2 (Bayar Pinjaman Pemegang Saham)
	public function tampil_cashout_t21($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="T2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang U2 (Bayar Pinjaman Lain-lain)
	public function tampil_cashout_u21($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="U2"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-1, Bidang V2
	public function tampil_cashout_v21($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="V2"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-1, Bidang W2
	public function tampil_cashout_w21($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="W2"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-1, Bidang X2
	public function tampil_cashout_x21($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="X2"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-1, Bidang Y2
	public function tampil_cashout_y21($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Y2"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-1, Bidang Z2
	public function tampil_cashout_z21($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Z2"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-1, Bidang A3
	public function tampil_cashout_a31($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="A3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-1, Bidang B3
	public function tampil_cashout_b31($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="B3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-1, Bidang C3
	public function tampil_cashout_c31($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="C3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-1, Bidang D3
	public function tampil_cashout_d31($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="D3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-1, Bidang E3
	public function tampil_cashout_e31($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="E3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-1, Bidang F3
	public function tampil_cashout_f31($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="F3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-1, Bidang G3
	public function tampil_cashout_g31($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="G3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-1, Bidang H3
	public function tampil_cashout_h31($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="H3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-1, Bidang I3
	public function tampil_cashout_i31($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="I3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-1, Bidang J3
	public function tampil_cashout_j31($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="J3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-1, Bidang K3
	public function tampil_cashout_k31($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="K3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-1, Bidang L3
	public function tampil_cashout_l31($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="L3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-1, Bidang M3
	public function tampil_cashout_m31($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="M3"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-1, Bidang N3
	public function tampil_cashout_n31($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="N3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-1, Bidang O3
	public function tampil_cashout_o31($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="O3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-1, Bidang P3
	public function tampil_cashout_p31($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="P3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-1, Bidang Q3
	public function tampil_cashout_q31($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Q3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-1, Bidang R3
	public function tampil_cashout_r31($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="R3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-1, Bidang S3
	public function tampil_cashout_s31($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="S3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-1, Bidang T3
	public function tampil_cashout_t31($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="T3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-1, Bidang U3
	public function tampil_cashout_u31($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="U3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-1, Bidang V3
	public function tampil_cashout_v31($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="V3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-1, Bidang W3
	public function tampil_cashout_w31($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="W3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-1, Bidang X3
	public function tampil_cashout_x31($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="X3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-1, Bidang Y3
	public function tampil_cashout_y31($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Y3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-1, Bidang Z3
	public function tampil_cashout_z31($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Z3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-1, Bidang A4
	public function tampil_cashout_a41($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="A4"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-1, Bidang B4
	public function tampil_cashout_b41($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="B4"
		');
		return $result->row_array();
	}


	// Projection (Total Hari - 1)
	public function totalCashoutProj_1($tanggal){
		$result = $this->db->query('
			SELECT SUM(projection) AS tProjection FROM tbl_cashoutproj INNER JOIN tbl_sb_cashout USING(kode_status) WHERE status_aktif=1 AND tanggal="'.$tanggal.'"
		');
		return $result->row_array();
	}

	// Realisasi (Total Hari - 1)
	public function totalCashoutReal_1($tanggal){
		$result = $this->db->query('
			SELECT SUM(realisasi) AS tRealisasi FROM tbl_cashoutreal INNER JOIN tbl_sb_cashout USING(kode_status) WHERE status_aktif=1 AND tanggal="'.$tanggal.'"
		');
		return $result->row_array();
	}


// -------------------------------------------------------------------------------------------------------------------------

	// CASH-OUT HARI KE-2

	// Cash-Out Hari Ke-2, Bidang A (Pencairan Dealer)
	public function tampil_cashout_a2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="A" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang B (Angsuran Bank (Non Mirroring))
	public function tampil_cashout_b2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="B" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang C (Angsuran Bank (Mirroring))
	public function tampil_cashout_c2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="C" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang D (Pelunasan Closed Reguler & ET)
	public function tampil_cashout_d2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="D" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang E (Pelunasan Buy Back 90 Up)
	public function tampil_cashout_e2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="E" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang F (Pelunasan AYDA)
	public function tampil_cashout_f2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="F" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang G (Pelunasan WO)
	public function tampil_cashout_g2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="G" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang H (Pelunasan CSUL)
	public function tampil_cashout_h2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="H" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang I (Isi Kas)
	public function tampil_cashout_i2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="I"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang J (Biaya Gaji)
	public function tampil_cashout_j2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="J" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang K (Biaya Pajak)
	public function tampil_cashout_k2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="K" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang L (Bayar Pesangon)
	public function tampil_cashout_l2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="L" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang M (Biaya THR, Bonus)
	public function tampil_cashout_m2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="M" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang N (Biaya Jamsostek & BPJS)
	public function tampil_cashout_n2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="N" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang O (Biaya Sewa Kantor/ Rumah Kacab / Pool)
	public function tampil_cashout_o2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="O" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang P (Biaya Maintenance (Dleas & Jari))
	public function tampil_cashout_p2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="P" 
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-2, Bidang Q (Biaya Listrik - Cabang)
	public function tampil_cashout_q2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Q" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang R (Biaya Listrik - Kantor Pusat)
	public function tampil_cashout_r2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="R" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang S (Biaya Air (Cabang & Pusat))
	public function tampil_cashout_s2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="S" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang T (Biaya Internet - Cabang)
	public function tampil_cashout_t2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="T" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang U (Biaya Internet - Kantor Pusat )
	public function tampil_cashout_u2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="U" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang V (Biaya Telepon - Cabang )
	public function tampil_cashout_v2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="V" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang W (Biaya Telepon - Kantor Pusat)
	public function tampil_cashout_w2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="W" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang X (Biaya Sewa Mesin Foto Copy)
	public function tampil_cashout_x2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="X" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang Y (Biaya Beli ATK & Cetakan)
	public function tampil_cashout_y2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Y" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang Z (Biaya POS & Pengiriman)
	public function tampil_cashout_z2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Z"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang A2 (Biaya Perbaikan Kendaraan)
	public function tampil_cashout_a22($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="A2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang B2 (Biaya Perbaikan/Pembelian/Sewa Peralatan Kantor)
	public function tampil_cashout_b22($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="B2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang C2 (Biaya PBB, Service Charge Sentraya)
	public function tampil_cashout_c22($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="C2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang D2 (Biaya Asuransi Hagati, Sinar Mas)
	public function tampil_cashout_d22($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="D2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang E2 (Biaya Asuransi Jamkrindo)
	public function tampil_cashout_e22($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="E2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang F2 (Penggantian Klaim Asuransi ke Nasabah )
	public function tampil_cashout_f22($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="F2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang G2 (Biaya Perbaikan Gedung)
	public function tampil_cashout_g22($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="G2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang H2 (Biaya Tour & Raker)
	public function tampil_cashout_h22($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="H2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang I2 (Biaya Microsoft, Aktiva Tak Berwujud)
	public function tampil_cashout_i22($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="I2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang J2 (Biaya BMHD Notaris Fiducia)
	public function tampil_cashout_j22($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="J2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang K2 (Biaya Penarikan / Penagihan)
	public function tampil_cashout_k22($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="K2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang L2 (Biaya Dinas Keluar Kota, Represetasi)
	public function tampil_cashout_l22($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="L2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang M2 (Biaya Keperluan Kantor, Pajak Kendaraan)
	public function tampil_cashout_m22($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="M2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang N2 (Biaya Profesional )
	public function tampil_cashout_n22($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="N2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang O2 (Biaya Iklan)
	public function tampil_cashout_o22($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="O2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang P2 (Biaya Jasa Perantara, Jasa Penyimpanan)
	public function tampil_cashout_p22($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="P2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang Q2 (Biaya Pendidikan / Diklat)
	public function tampil_cashout_q22($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Q2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang R2 (Biaya Bank)
	public function tampil_cashout_r22($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="R2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang S2 (Bayar Pinjaman PRK)
	public function tampil_cashout_s22($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="S2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang T2 (Bayar Pinjaman Pemegang Saham)
	public function tampil_cashout_t22($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="T2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-2, Bidang U2 (Bayar Pinjaman Lain-lain)
	public function tampil_cashout_u22($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="U2"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-2, Bidang V2
	public function tampil_cashout_v22($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="V2"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-2, Bidang W2
	public function tampil_cashout_w22($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="W2"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-2, Bidang X2
	public function tampil_cashout_x22($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="X2"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-2, Bidang Y2
	public function tampil_cashout_y22($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Y2"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-2, Bidang Z2
	public function tampil_cashout_z22($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Z2"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-2, Bidang A3
	public function tampil_cashout_a32($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="A3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-2, Bidang B3
	public function tampil_cashout_b32($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="B3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-2, Bidang C3
	public function tampil_cashout_c32($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="C3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-2, Bidang D3
	public function tampil_cashout_d32($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="D3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-2, Bidang E3
	public function tampil_cashout_e32($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="E3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-2, Bidang F3
	public function tampil_cashout_f32($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="F3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-2, Bidang G3
	public function tampil_cashout_g32($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="G3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-2, Bidang H3
	public function tampil_cashout_h32($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="H3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-2, Bidang I3
	public function tampil_cashout_i32($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="I3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-2, Bidang J3
	public function tampil_cashout_j32($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="J3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-2, Bidang K3
	public function tampil_cashout_k32($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="K3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-2, Bidang L3
	public function tampil_cashout_l32($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="L3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-2, Bidang M3
	public function tampil_cashout_m32($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="M3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-2, Bidang N3
	public function tampil_cashout_n32($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="N3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-2, Bidang O3
	public function tampil_cashout_o32($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="O3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-2, Bidang P3
	public function tampil_cashout_p32($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="P3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-2, Bidang Q3
	public function tampil_cashout_q32($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Q3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-2, Bidang R3
	public function tampil_cashout_r32($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="R3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-2, Bidang S3
	public function tampil_cashout_s32($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="S3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-2, Bidang T3
	public function tampil_cashout_t32($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="T3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-2, Bidang U3
	public function tampil_cashout_u32($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="U3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-2, Bidang V3
	public function tampil_cashout_v32($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="V3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-2, Bidang W3
	public function tampil_cashout_w32($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="W3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-2, Bidang X3
	public function tampil_cashout_x32($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="X3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-2, Bidang Y3
	public function tampil_cashout_y32($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Y3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-2, Bidang Z3
	public function tampil_cashout_z32($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Z3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-2, Bidang A4
	public function tampil_cashout_a42($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="A4"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-2, Bidang B4
	public function tampil_cashout_b42($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="B4"
		');
		return $result->row_array();
	}


	// Projection (Total Hari - 2)
	public function totalCashoutProj_2($tanggal){
		$result = $this->db->query('
			SELECT SUM(projection) AS tProjection FROM tbl_cashoutproj INNER JOIN tbl_sb_cashout USING(kode_status) WHERE status_aktif=1 AND tanggal="'.$tanggal.'"
		');
		return $result->row_array();
	}

	// Realisasi (Total Hari - 2)
	public function totalCashoutReal_2($tanggal){
		$result = $this->db->query('
			SELECT SUM(realisasi) AS tRealisasi FROM tbl_cashoutreal INNER JOIN tbl_sb_cashout USING(kode_status) WHERE status_aktif=1 AND tanggal="'.$tanggal.'"
		');
		return $result->row_array();
	}


// -------------------------------------------------------------------------------------------------------------------------

	// CASH-OUT HARI KE-3

	// Cash-Out Hari Ke-3, Bidang A (Pencairan Dealer)
	public function tampil_cashout_a3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="A" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang B (Angsuran Bank (Non Mirroring))
	public function tampil_cashout_b3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="B" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang C (Angsuran Bank (Mirroring))
	public function tampil_cashout_c3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="C" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang D (Pelunasan Closed Reguler & ET)
	public function tampil_cashout_d3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="D" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang E (Pelunasan Buy Back 90 Up)
	public function tampil_cashout_e3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="E" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang F (Pelunasan AYDA)
	public function tampil_cashout_f3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="F" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang G (Pelunasan WO)
	public function tampil_cashout_g3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="G" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang H (Pelunasan CSUL)
	public function tampil_cashout_h3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="H" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang I (Isi Kas)
	public function tampil_cashout_i3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="I"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang J (Biaya Gaji)
	public function tampil_cashout_j3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="J" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang K (Biaya Pajak)
	public function tampil_cashout_k3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="K" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang L (Bayar Pesangon)
	public function tampil_cashout_l3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="L" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang M (Biaya THR, Bonus)
	public function tampil_cashout_m3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="M" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang N (Biaya Jamsostek & BPJS)
	public function tampil_cashout_n3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="N" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang O (Biaya Sewa Kantor/ Rumah Kacab / Pool)
	public function tampil_cashout_o3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="O" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang P (Biaya Maintenance (Dleas & Jari))
	public function tampil_cashout_p3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="P" 
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-3, Bidang Q (Biaya Listrik - Cabang)
	public function tampil_cashout_q3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Q" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang R (Biaya Listrik - Kantor Pusat)
	public function tampil_cashout_r3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="R" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang S (Biaya Air (Cabang & Pusat))
	public function tampil_cashout_s3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="S" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang T (Biaya Internet - Cabang)
	public function tampil_cashout_t3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="T" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang U (Biaya Internet - Kantor Pusat )
	public function tampil_cashout_u3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="U" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang V (Biaya Telepon - Cabang )
	public function tampil_cashout_v3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="V" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang W (Biaya Telepon - Kantor Pusat)
	public function tampil_cashout_w3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="W" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang X (Biaya Sewa Mesin Foto Copy)
	public function tampil_cashout_x3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="X" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang Y (Biaya Beli ATK & Cetakan)
	public function tampil_cashout_y3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Y" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang Z (Biaya POS & Pengiriman)
	public function tampil_cashout_z3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Z"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang A2 (Biaya Perbaikan Kendaraan)
	public function tampil_cashout_a23($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="A2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang B2 (Biaya Perbaikan/Pembelian/Sewa Peralatan Kantor)
	public function tampil_cashout_b23($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="B2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang C2 (Biaya PBB, Service Charge Sentraya)
	public function tampil_cashout_c23($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="C2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang D2 (Biaya Asuransi Hagati, Sinar Mas)
	public function tampil_cashout_d23($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="D2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang E2 (Biaya Asuransi Jamkrindo)
	public function tampil_cashout_e23($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="E2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang F2 (Penggantian Klaim Asuransi ke Nasabah )
	public function tampil_cashout_f23($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="F2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang G2 (Biaya Perbaikan Gedung)
	public function tampil_cashout_g23($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="G2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang H2 (Biaya Tour & Raker)
	public function tampil_cashout_h23($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="H2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang I2 (Biaya Microsoft, Aktiva Tak Berwujud)
	public function tampil_cashout_i23($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="I2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang J2 (Biaya BMHD Notaris Fiducia)
	public function tampil_cashout_j23($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="J2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang K2 (Biaya Penarikan / Penagihan)
	public function tampil_cashout_k23($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="K2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang L2 (Biaya Dinas Keluar Kota, Represetasi)
	public function tampil_cashout_l23($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="L2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang M2 (Biaya Keperluan Kantor, Pajak Kendaraan)
	public function tampil_cashout_m23($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="M2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang N2 (Biaya Profesional )
	public function tampil_cashout_n23($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="N2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang O2 (Biaya Iklan)
	public function tampil_cashout_o23($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="O2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang P2 (Biaya Jasa Perantara, Jasa Penyimpanan)
	public function tampil_cashout_p23($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="P2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang Q2 (Biaya Pendidikan / Diklat)
	public function tampil_cashout_q23($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Q2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang R2 (Biaya Bank)
	public function tampil_cashout_r23($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="R2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang S2 (Bayar Pinjaman PRK)
	public function tampil_cashout_s23($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="S2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang T2 (Bayar Pinjaman Pemegang Saham)
	public function tampil_cashout_t23($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="T2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-3, Bidang U2 (Bayar Pinjaman Lain-lain)
	public function tampil_cashout_u23($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="U2"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-3, Bidang V2
	public function tampil_cashout_v23($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="V2"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-3, Bidang W2
	public function tampil_cashout_w23($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="W2"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-3, Bidang X2
	public function tampil_cashout_x23($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="X2"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-3, Bidang Y2
	public function tampil_cashout_y23($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Y2"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-3, Bidang Z2
	public function tampil_cashout_z23($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Z2"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-3, Bidang A3
	public function tampil_cashout_a33($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="A3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-3, Bidang B3
	public function tampil_cashout_b33($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="B3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-3, Bidang C3
	public function tampil_cashout_c33($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="C3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-3, Bidang D3
	public function tampil_cashout_d33($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="D3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-3, Bidang E3
	public function tampil_cashout_e33($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="E3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-3, Bidang F3
	public function tampil_cashout_f33($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="F3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-3, Bidang G3
	public function tampil_cashout_g33($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="G3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-3, Bidang H3
	public function tampil_cashout_h33($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="H3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-3, Bidang I3
	public function tampil_cashout_i33($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="I3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-3, Bidang J3
	public function tampil_cashout_j33($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="J3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-3, Bidang K3
	public function tampil_cashout_k33($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="K3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-3, Bidang L3
	public function tampil_cashout_l33($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="L3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-3, Bidang M3
	public function tampil_cashout_m33($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="M3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-3, Bidang N3
	public function tampil_cashout_n33($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="N3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-3, Bidang O3
	public function tampil_cashout_o33($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="O3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-3, Bidang P3
	public function tampil_cashout_p33($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="P3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-3, Bidang Q3
	public function tampil_cashout_q33($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Q3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-3, Bidang R3
	public function tampil_cashout_r33($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="R3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-3, Bidang S3
	public function tampil_cashout_s33($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="S3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-3, Bidang T3
	public function tampil_cashout_t33($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="T3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-3, Bidang U3
	public function tampil_cashout_u33($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="U3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-3, Bidang V3
	public function tampil_cashout_v33($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="V3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-3, Bidang W3
	public function tampil_cashout_w33($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="W3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-3, Bidang X3
	public function tampil_cashout_x33($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="X3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-3, Bidang Y3
	public function tampil_cashout_y33($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Y3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-3, Bidang Z3
	public function tampil_cashout_z33($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Z3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-3, Bidang A4
	public function tampil_cashout_a43($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="A4"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-3, Bidang B4
	public function tampil_cashout_b43($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="B4"
		');
		return $result->row_array();
	}


	// Projection (Total Hari - 3)
	public function totalCashoutProj_3($tanggal){
		$result = $this->db->query('
			SELECT SUM(projection) AS tProjection FROM tbl_cashoutproj INNER JOIN tbl_sb_cashout USING(kode_status) WHERE status_aktif=1 AND tanggal="'.$tanggal.'"
		');
		return $result->row_array();
	}

	// Realisasi (Total Hari - 3)
	public function totalCashoutReal_3($tanggal){
		$result = $this->db->query('
			SELECT SUM(realisasi) AS tRealisasi FROM tbl_cashoutreal INNER JOIN tbl_sb_cashout USING(kode_status) WHERE status_aktif=1 AND tanggal="'.$tanggal.'"
		');
		return $result->row_array();
	}


// -------------------------------------------------------------------------------------------------------------------------

	// CASH-OUT HARI KE-4

	// Cash-Out Hari Ke-4, Bidang A (Pencairan Dealer)
	public function tampil_cashout_a4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="A" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang B (Angsuran Bank (Non Mirroring))
	public function tampil_cashout_b4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="B" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang C (Angsuran Bank (Mirroring))
	public function tampil_cashout_c4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="C" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang D (Pelunasan Closed Reguler & ET)
	public function tampil_cashout_d4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="D" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang E (Pelunasan Buy Back 90 Up)
	public function tampil_cashout_e4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="E" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang F (Pelunasan AYDA)
	public function tampil_cashout_f4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="F" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang G (Pelunasan WO)
	public function tampil_cashout_g4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="G" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang H (Pelunasan CSUL)
	public function tampil_cashout_h4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="H" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang I (Isi Kas)
	public function tampil_cashout_i4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="I"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang J (Biaya Gaji)
	public function tampil_cashout_j4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="J" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang K (Biaya Pajak)
	public function tampil_cashout_k4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="K" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang L (Bayar Pesangon)
	public function tampil_cashout_l4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="L" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang M (Biaya THR, Bonus)
	public function tampil_cashout_m4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="M" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang N (Biaya Jamsostek & BPJS)
	public function tampil_cashout_n4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="N" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang O (Biaya Sewa Kantor/ Rumah Kacab / Pool)
	public function tampil_cashout_o4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="O" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang P (Biaya Maintenance (Dleas & Jari))
	public function tampil_cashout_p4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="P" 
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-4, Bidang Q (Biaya Listrik - Cabang)
	public function tampil_cashout_q4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Q" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang R (Biaya Listrik - Kantor Pusat)
	public function tampil_cashout_r4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="R" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang S (Biaya Air (Cabang & Pusat))
	public function tampil_cashout_s4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="S" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang T (Biaya Internet - Cabang)
	public function tampil_cashout_t4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="T" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang U (Biaya Internet - Kantor Pusat )
	public function tampil_cashout_u4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="U" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang V (Biaya Telepon - Cabang )
	public function tampil_cashout_v4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="V" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang W (Biaya Telepon - Kantor Pusat)
	public function tampil_cashout_w4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="W" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang X (Biaya Sewa Mesin Foto Copy)
	public function tampil_cashout_x4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="X" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang Y (Biaya Beli ATK & Cetakan)
	public function tampil_cashout_y4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Y" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang Z (Biaya POS & Pengiriman)
	public function tampil_cashout_z4($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Z"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang A2 (Biaya Perbaikan Kendaraan)
	public function tampil_cashout_a24($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="A2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang B2 (Biaya Perbaikan/Pembelian/Sewa Peralatan Kantor)
	public function tampil_cashout_b24($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="B2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang C2 (Biaya PBB, Service Charge Sentraya)
	public function tampil_cashout_c24($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="C2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang D2 (Biaya Asuransi Hagati, Sinar Mas)
	public function tampil_cashout_d24($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="D2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang E2 (Biaya Asuransi Jamkrindo)
	public function tampil_cashout_e24($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="E2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang F2 (Penggantian Klaim Asuransi ke Nasabah )
	public function tampil_cashout_f24($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="F2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang G2 (Biaya Perbaikan Gedung)
	public function tampil_cashout_g24($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="G2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang H2 (Biaya Tour & Raker)
	public function tampil_cashout_h24($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="H2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang I2 (Biaya Microsoft, Aktiva Tak Berwujud)
	public function tampil_cashout_i24($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="I2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang J2 (Biaya BMHD Notaris Fiducia)
	public function tampil_cashout_j24($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="J2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang K2 (Biaya Penarikan / Penagihan)
	public function tampil_cashout_k24($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="K2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang L2 (Biaya Dinas Keluar Kota, Represetasi)
	public function tampil_cashout_l24($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="L2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang M2 (Biaya Keperluan Kantor, Pajak Kendaraan)
	public function tampil_cashout_m24($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="M2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang N2 (Biaya Profesional )
	public function tampil_cashout_n24($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="N2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang O2 (Biaya Iklan)
	public function tampil_cashout_o24($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="O2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang P2 (Biaya Jasa Perantara, Jasa Penyimpanan)
	public function tampil_cashout_p24($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="P2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang Q2 (Biaya Pendidikan / Diklat)
	public function tampil_cashout_q24($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Q2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang R2 (Biaya Bank)
	public function tampil_cashout_r24($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="R2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang S2 (Bayar Pinjaman PRK)
	public function tampil_cashout_s24($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="S2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang T2 (Bayar Pinjaman Pemegang Saham)
	public function tampil_cashout_t24($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="T2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-4, Bidang U2 (Bayar Pinjaman Lain-lain)
	public function tampil_cashout_u24($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="U2"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-4, Bidang V2
	public function tampil_cashout_v24($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="V2"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-4, Bidang W2
	public function tampil_cashout_w24($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="W2"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-4, Bidang X2
	public function tampil_cashout_x24($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="X2"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-4, Bidang Y2
	public function tampil_cashout_y24($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Y2"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-4, Bidang Z2
	public function tampil_cashout_z24($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Z2"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-4, Bidang A3
	public function tampil_cashout_a34($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="A3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-4, Bidang B3
	public function tampil_cashout_b34($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="B3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-4, Bidang C3
	public function tampil_cashout_c34($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="C3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-4, Bidang D3
	public function tampil_cashout_d34($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="D3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-4, Bidang E3
	public function tampil_cashout_e34($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="E3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-4, Bidang F3
	public function tampil_cashout_f34($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="F3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-4, Bidang G3
	public function tampil_cashout_g34($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="G3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-4, Bidang H3
	public function tampil_cashout_h34($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="H3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-4, Bidang I3
	public function tampil_cashout_i34($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="I3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-4, Bidang J3
	public function tampil_cashout_j34($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="J3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-4, Bidang K3
	public function tampil_cashout_k34($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="K3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-4, Bidang L3
	public function tampil_cashout_l34($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="L3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-4, Bidang M3
	public function tampil_cashout_m34($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="M3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-4, Bidang N3
	public function tampil_cashout_n34($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="N3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-4, Bidang O3
	public function tampil_cashout_o34($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="O3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-4, Bidang P3
	public function tampil_cashout_p34($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="P3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-4, Bidang Q3
	public function tampil_cashout_q34($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Q3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-4, Bidang R3
	public function tampil_cashout_r34($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="R3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-4, Bidang S3
	public function tampil_cashout_s34($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="S3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-4, Bidang T3
	public function tampil_cashout_t34($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="T3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-4, Bidang U3
	public function tampil_cashout_u34($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="U3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-4, Bidang V3
	public function tampil_cashout_v34($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="V3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-4, Bidang W3
	public function tampil_cashout_w34($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="W3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-4, Bidang X3
	public function tampil_cashout_x34($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="X3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-4, Bidang Y3
	public function tampil_cashout_y34($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Y3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-4, Bidang Z3
	public function tampil_cashout_z34($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Z3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-4, Bidang A4
	public function tampil_cashout_a44($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="A4"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-4, Bidang B4
	public function tampil_cashout_b44($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="B4"
		');
		return $result->row_array();
	}


	// Projection (Total Hari - 4)
	public function totalCashoutProj_4($tanggal){
		$result = $this->db->query('
			SELECT SUM(projection) AS tProjection FROM tbl_cashoutproj INNER JOIN tbl_sb_cashout USING(kode_status) WHERE status_aktif=1 AND tanggal="'.$tanggal.'"
		');
		return $result->row_array();
	}

	// Realisasi (Total Hari - 4)
	public function totalCashoutReal_4($tanggal){
		$result = $this->db->query('
			SELECT SUM(realisasi) AS tRealisasi FROM tbl_cashoutreal INNER JOIN tbl_sb_cashout USING(kode_status) WHERE status_aktif=1 AND tanggal="'.$tanggal.'"
		');
		return $result->row_array();
	}


// -------------------------------------------------------------------------------------------------------------------------

	// CASH-OUT HARI KE-5

	// Cash-Out Hari Ke-5, Bidang A (Pencairan Dealer)
	public function tampil_cashout_a5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="A" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang B (Angsuran Bank (Non Mirroring))
	public function tampil_cashout_b5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="B" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang C (Angsuran Bank (Mirroring))
	public function tampil_cashout_c5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="C" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang D (Pelunasan Closed Reguler & ET)
	public function tampil_cashout_d5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="D" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang E (Pelunasan Buy Back 90 Up)
	public function tampil_cashout_e5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="E" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang F (Pelunasan AYDA)
	public function tampil_cashout_f5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="F" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang G (Pelunasan WO)
	public function tampil_cashout_g5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="G" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang H (Pelunasan CSUL)
	public function tampil_cashout_h5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="H" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang I (Isi Kas)
	public function tampil_cashout_i5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="I"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang J (Biaya Gaji)
	public function tampil_cashout_j5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="J" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang K (Biaya Pajak)
	public function tampil_cashout_k5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="K" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang L (Bayar Pesangon)
	public function tampil_cashout_l5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="L" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang M (Biaya THR, Bonus)
	public function tampil_cashout_m5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="M" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang N (Biaya Jamsostek & BPJS)
	public function tampil_cashout_n5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="N" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang O (Biaya Sewa Kantor/ Rumah Kacab / Pool)
	public function tampil_cashout_o5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="O" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang P (Biaya Maintenance (Dleas & Jari))
	public function tampil_cashout_p5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="P" 
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-5, Bidang Q (Biaya Listrik - Cabang)
	public function tampil_cashout_q5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Q" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang R (Biaya Listrik - Kantor Pusat)
	public function tampil_cashout_r5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="R" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang S (Biaya Air (Cabang & Pusat))
	public function tampil_cashout_s5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="S" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang T (Biaya Internet - Cabang)
	public function tampil_cashout_t5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="T" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang U (Biaya Internet - Kantor Pusat )
	public function tampil_cashout_u5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="U" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang V (Biaya Telepon - Cabang )
	public function tampil_cashout_v5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="V" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang W (Biaya Telepon - Kantor Pusat)
	public function tampil_cashout_w5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="W" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang X (Biaya Sewa Mesin Foto Copy)
	public function tampil_cashout_x5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="X" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang Y (Biaya Beli ATK & Cetakan)
	public function tampil_cashout_y5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Y" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang Z (Biaya POS & Pengiriman)
	public function tampil_cashout_z5($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Z"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang A2 (Biaya Perbaikan Kendaraan)
	public function tampil_cashout_a25($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="A2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang B2 (Biaya Perbaikan/Pembelian/Sewa Peralatan Kantor)
	public function tampil_cashout_b25($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="B2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang C2 (Biaya PBB, Service Charge Sentraya)
	public function tampil_cashout_c25($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="C2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang D2 (Biaya Asuransi Hagati, Sinar Mas)
	public function tampil_cashout_d25($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="D2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang E2 (Biaya Asuransi Jamkrindo)
	public function tampil_cashout_e25($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="E2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang F2 (Penggantian Klaim Asuransi ke Nasabah )
	public function tampil_cashout_f25($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="F2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang G2 (Biaya Perbaikan Gedung)
	public function tampil_cashout_g25($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="G2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang H2 (Biaya Tour & Raker)
	public function tampil_cashout_h25($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="H2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang I2 (Biaya Microsoft, Aktiva Tak Berwujud)
	public function tampil_cashout_i25($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="I2" 
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang J2 (Biaya BMHD Notaris Fiducia)
	public function tampil_cashout_j25($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="J2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang K2 (Biaya Penarikan / Penagihan)
	public function tampil_cashout_k25($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="K2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang L2 (Biaya Dinas Keluar Kota, Represetasi)
	public function tampil_cashout_l25($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="L2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang M2 (Biaya Keperluan Kantor, Pajak Kendaraan)
	public function tampil_cashout_m25($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="M2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang N2 (Biaya Profesional )
	public function tampil_cashout_n25($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="N2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang O2 (Biaya Iklan)
	public function tampil_cashout_o25($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="O2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang P2 (Biaya Jasa Perantara, Jasa Penyimpanan)
	public function tampil_cashout_p25($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="P2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang Q2 (Biaya Pendidikan / Diklat)
	public function tampil_cashout_q25($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Q2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang R2 (Biaya Bank)
	public function tampil_cashout_r25($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="R2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang S2 (Bayar Pinjaman PRK)
	public function tampil_cashout_s25($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="S2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang T2 (Bayar Pinjaman Pemegang Saham)
	public function tampil_cashout_t25($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="T2"
		');
		return $result->row_array();
	}


	// Cash-Out Hari Ke-5, Bidang U2 (Bayar Pinjaman Lain-lain)
	public function tampil_cashout_u25($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="U2"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-5, Bidang V2
	public function tampil_cashout_v25($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="V2"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-5, Bidang W2
	public function tampil_cashout_w25($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="W2"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-5, Bidang X2
	public function tampil_cashout_x25($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="X2"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-5, Bidang Y2
	public function tampil_cashout_y25($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Y2"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-5, Bidang Z2
	public function tampil_cashout_z25($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Z2"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-5, Bidang A3
	public function tampil_cashout_a35($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="A3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-5, Bidang B3
	public function tampil_cashout_b35($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="B3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-5, Bidang C3
	public function tampil_cashout_c35($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="C3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-5, Bidang D3
	public function tampil_cashout_d35($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="D3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-5, Bidang E3
	public function tampil_cashout_e35($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="E3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-5, Bidang F3
	public function tampil_cashout_f35($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="F3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-5, Bidang G3
	public function tampil_cashout_g35($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="G3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-5, Bidang H3
	public function tampil_cashout_h35($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="H3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-5, Bidang I3
	public function tampil_cashout_i35($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="I3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-5, Bidang J3
	public function tampil_cashout_j35($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="J3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-5, Bidang K3
	public function tampil_cashout_k35($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="K3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-5, Bidang L3
	public function tampil_cashout_l35($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="L3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-5, Bidang M3
	public function tampil_cashout_m35($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="M3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-5, Bidang N3
	public function tampil_cashout_n35($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="N3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-5, Bidang O3
	public function tampil_cashout_o35($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="O3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-5, Bidang P3
	public function tampil_cashout_p35($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="P3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-5, Bidang Q3
	public function tampil_cashout_q35($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Q3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-5, Bidang R3
	public function tampil_cashout_r35($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="R3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-5, Bidang S3
	public function tampil_cashout_s35($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="S3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-5, Bidang T3
	public function tampil_cashout_t35($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="T3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-5, Bidang U3
	public function tampil_cashout_u35($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="U3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-5, Bidang V3
	public function tampil_cashout_v35($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="V3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-5, Bidang W3
	public function tampil_cashout_w35($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="W3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-5, Bidang X3
	public function tampil_cashout_x35($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="X3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-5, Bidang Y3
	public function tampil_cashout_y35($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Y3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-5, Bidang Z3
	public function tampil_cashout_z35($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Z3"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-5, Bidang A4
	public function tampil_cashout_a45($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="A4"
		');
		return $result->row_array();
	}

	// Cash-Out Hari Ke-5, Bidang B4
	public function tampil_cashout_b45($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="B4"
		');
		return $result->row_array();
	}

	// Projection (Total Hari - 5)
	public function totalCashoutProj_5($tanggal){
		$result = $this->db->query('
			SELECT SUM(projection) AS tProjection FROM tbl_cashoutproj INNER JOIN tbl_sb_cashout USING(kode_status) WHERE status_aktif=1 AND tanggal="'.$tanggal.'"
		');
		return $result->row_array();
	}

	// Realisasi (Total Hari - 5)
	public function totalCashoutReal_5($tanggal){
		$result = $this->db->query('
			SELECT SUM(realisasi) AS tRealisasi FROM tbl_cashoutreal INNER JOIN tbl_sb_cashout USING(kode_status) WHERE status_aktif=1 AND tanggal="'.$tanggal.'"
		');
		return $result->row_array();
	}



}
