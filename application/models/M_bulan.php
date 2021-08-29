<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_bulan extends CI_Model {

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

	// Note
	public function note($tanggal){
		$result = $this->db->query('SELECT * FROM tbl_note WHERE tanggal = "'.$tanggal.'"');
		return $result->row_array();
	}

	// Status Closing
	public function status_closing($tanggal){
		$result = $this->db->query('SELECT * FROM tbl_closing WHERE tanggal = "'.$tanggal.'"');
		return $result->row_array();
	}

	// Deposito
	public function deposito($tanggal){
		$result = $this->db->get_where('tbl_deposito', array('tanggal' => $tanggal));
		return $result->row_array();
	}

	// B2B
	public function b2b($tanggal){
		$result = $this->db->get_where('tbl_b2b', array('tanggal' => $tanggal));
		return $result->row_array();
	}


	// ..........................................................................................

	// CASH-IN

	// Cash-In Bidang A (Pencairan Bank)
	public function tampil_cashin_a($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="A" 
		');
		return $result->row_array();
	}

	// Cash-In Bidang B
	public function tampil_cashin_b($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="B" 
		');
		return $result->row_array();
	}

	// Cash-In Bidang C (Setoran Angsuran Debitur)
	public function tampil_cashin_c($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="C" 
		');
		return $result->row_array();
	}

	// Cash-In Bidang D (Angsuran Dari Kantor POS)
	public function tampil_cashin_d($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="D" 
		');
		return $result->row_array();
	}

	// Cash-In Bidang E (Pelunasan Awal)
	public function tampil_cashin_e($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="E" 
		');
		return $result->row_array();
	}

	// Cash-In Bidang F (Penjualan AYDA)
	public function tampil_cashin_f($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="F" 
		');
		return $result->row_array();
	}

	// Cash-In Bidang G (Recovery WO)
	public function tampil_cashin_g($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="G" 
		');
		return $result->row_array();
	}

	// Cash-In Bidang H (Ganti Klaim Asuransi)
	public function tampil_cashin_h($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="H" 
		');
		return $result->row_array();
	}

	// Cash-In Bidang I (Tarik PRK)
	public function tampil_cashin_i($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="I" 
		');
		return $result->row_array();
	}

	// Cash-In Bidang J (Pinjaman)
	public function tampil_cashin_j($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="J" 
		');
		return $result->row_array();
	}

	// Cash-In Bidang K (Pembayaran Suryamas)
	public function tampil_cashin_k($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="K" 
		');
		return $result->row_array();
	}

	// Cash-In Bidang L (Penjualan Kendaraan Inventaris)
	public function tampil_cashin_l($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="L" 
		');
		return $result->row_array();
	}

	// Cash-In Bidang M
	public function tampil_cashin_m($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="M" 
		');
		return $result->row_array();
	}

	// Cash-In Bidang N
	public function tampil_cashin_n($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="N" 
		');
		return $result->row_array();
	}

	// Cash-In Bidang O
	public function tampil_cashin_o($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="O" 
		');
		return $result->row_array();
	}

	// Cash-In Bidang P
	public function tampil_cashin_p($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="P" 
		');
		return $result->row_array();
	}

	// Cash-In Bidang Q
	public function tampil_cashin_q($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Q" 
		');
		return $result->row_array();
	}

	// Cash-In Bidang R
	public function tampil_cashin_r($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="R" 
		');
		return $result->row_array();
	}

	// Cash-In Bidang S
	public function tampil_cashin_s($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashinproj LEFT JOIN tbl_cashinreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="S" 
		');
		return $result->row_array();
	}


	// TOTAL Cash-In

	// Projection (Total)
	public function totalCashinProj($tanggal){
		$result = $this->db->query('
			SELECT SUM(projection) AS tProjection FROM tbl_cashinproj WHERE tanggal="'.$tanggal.'"
		');
		return $result->row_array();
	}

	// Realisasi (Total)
	public function totalCashinReal($tanggal){
		$result = $this->db->query('
			SELECT SUM(realisasi) AS tRealisasi FROM tbl_cashinreal WHERE tanggal="'.$tanggal.'"
		');
		return $result->row_array();
	}

// -------------------------------------------------------------------------------------------------------------------------


	// CASH-OUT

	// Cash-Out Bidang A (Pencairan Dealer)
	public function tampil_cashout_a($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="A" 
		');
		return $result->row_array();
	}


	// Cash-Out Bidang B (Angsuran Bank (Non Mirroring))
	public function tampil_cashout_b($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="B" 
		');
		return $result->row_array();
	}


	// Cash-Out Bidang C (Angsuran Bank (Mirroring))
	public function tampil_cashout_c($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="C" 
		');
		return $result->row_array();
	}


	// Cash-Out Bidang D (Pelunasan Closed Reguler & ET)
	public function tampil_cashout_d($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="D" 
		');
		return $result->row_array();
	}


	// Cash-Out Bidang E (Pelunasan Buy Back 90 Up)
	public function tampil_cashout_e($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="E" 
		');
		return $result->row_array();
	}


	// Cash-Out Bidang F (Pelunasan AYDA)
	public function tampil_cashout_f($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="F" 
		');
		return $result->row_array();
	}


	// Cash-Out Bidang G (Pelunasan WO)
	public function tampil_cashout_g($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="G" 
		');
		return $result->row_array();
	}


	// Cash-Out Bidang H (Pelunasan CSUL)
	public function tampil_cashout_h($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="H" 
		');
		return $result->row_array();
	}


	// Cash-Out Bidang I (Isi Kas)
	public function tampil_cashout_i($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="I"
		');
		return $result->row_array();
	}


	// Cash-Out Bidang J (Biaya Gaji)
	public function tampil_cashout_j($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="J" 
		');
		return $result->row_array();
	}


	// Cash-Out Bidang K (Biaya Pajak)
	public function tampil_cashout_k($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="K" 
		');
		return $result->row_array();
	}


	// Cash-Out Bidang L (Bayar Pesangon)
	public function tampil_cashout_l($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="L" 
		');
		return $result->row_array();
	}


	// Cash-Out Bidang M (Biaya THR, Bonus)
	public function tampil_cashout_m($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="M" 
		');
		return $result->row_array();
	}


	// Cash-Out Bidang N (Biaya Jamsostek & BPJS)
	public function tampil_cashout_n($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="N" 
		');
		return $result->row_array();
	}


	// Cash-Out Bidang O (Biaya Sewa Kantor/ Rumah Kacab / Pool)
	public function tampil_cashout_o($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="O" 
		');
		return $result->row_array();
	}


	// Cash-Out Bidang P (Biaya Maintenance (Dleas & Jari))
	public function tampil_cashout_p($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="P" 
		');
		return $result->row_array();
	}

	// Cash-Out Bidang Q (Biaya Listrik - Cabang)
	public function tampil_cashout_q($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Q" 
		');
		return $result->row_array();
	}


	// Cash-Out Bidang R (Biaya Listrik - Kantor Pusat)
	public function tampil_cashout_r($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="R" 
		');
		return $result->row_array();
	}


	// Cash-Out Bidang S (Biaya Air (Cabang & Pusat))
	public function tampil_cashout_s($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="S" 
		');
		return $result->row_array();
	}


	// Cash-Out Bidang T (Biaya Internet - Cabang)
	public function tampil_cashout_t($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="T" 
		');
		return $result->row_array();
	}


	// Cash-Out Bidang U (Biaya Internet - Kantor Pusat )
	public function tampil_cashout_u($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="U" 
		');
		return $result->row_array();
	}


	// Cash-Out Bidang V (Biaya Telepon - Cabang )
	public function tampil_cashout_v($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="V" 
		');
		return $result->row_array();
	}


	// Cash-Out Bidang W (Biaya Telepon - Kantor Pusat)
	public function tampil_cashout_w($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="W" 
		');
		return $result->row_array();
	}


	// Cash-Out Bidang X (Biaya Sewa Mesin Foto Copy)
	public function tampil_cashout_x($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="X" 
		');
		return $result->row_array();
	}


	// Cash-Out Bidang Y (Biaya Beli ATK & Cetakan)
	public function tampil_cashout_y($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Y" 
		');
		return $result->row_array();
	}


	// Cash-Out Bidang Z (Biaya POS & Pengiriman)
	public function tampil_cashout_z($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Z"
		');
		return $result->row_array();
	}


	// Cash-Out Bidang A2 (Biaya Perbaikan Kendaraan)
	public function tampil_cashout_a2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="A2" 
		');
		return $result->row_array();
	}


	// Cash-Out Bidang B2 (Biaya Perbaikan/Pembelian/Sewa Peralatan Kantor)
	public function tampil_cashout_b2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="B2" 
		');
		return $result->row_array();
	}


	// Cash-Out Bidang C2 (Biaya PBB, Service Charge Sentraya)
	public function tampil_cashout_c2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="C2" 
		');
		return $result->row_array();
	}


	// Cash-Out Bidang D2 (Biaya Asuransi Hagati, Sinar Mas)
	public function tampil_cashout_d2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="D2" 
		');
		return $result->row_array();
	}


	// Cash-Out Bidang E2 (Biaya Asuransi Jamkrindo)
	public function tampil_cashout_e2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="E2" 
		');
		return $result->row_array();
	}


	// Cash-Out Bidang F2 (Penggantian Klaim Asuransi ke Nasabah )
	public function tampil_cashout_f2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="F2" 
		');
		return $result->row_array();
	}


	// Cash-Out Bidang G2 (Biaya Perbaikan Gedung)
	public function tampil_cashout_g2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="G2" 
		');
		return $result->row_array();
	}


	// Cash-Out Bidang H2 (Biaya Tour & Raker)
	public function tampil_cashout_h2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="H2" 
		');
		return $result->row_array();
	}


	// Cash-Out Bidang I2 (Biaya Microsoft, Aktiva Tak Berwujud)
	public function tampil_cashout_i2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="I2" 
		');
		return $result->row_array();
	}


	// Cash-Out Bidang J2 (Biaya BMHD Notaris Fiducia)
	public function tampil_cashout_j2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="J2"
		');
		return $result->row_array();
	}


	// Cash-Out Bidang K2 (Biaya Penarikan / Penagihan)
	public function tampil_cashout_k2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="K2"
		');
		return $result->row_array();
	}


	// Cash-Out Bidang L2 (Biaya Dinas Keluar Kota, Represetasi)
	public function tampil_cashout_l2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="L2"
		');
		return $result->row_array();
	}


	// Cash-Out Bidang M2 (Biaya Keperluan Kantor, Pajak Kendaraan)
	public function tampil_cashout_m2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="M2"
		');
		return $result->row_array();
	}


	// Cash-Out Bidang N2 (Biaya Profesional )
	public function tampil_cashout_n2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="N2"
		');
		return $result->row_array();
	}


	// Cash-Out Bidang O2 (Biaya Iklan)
	public function tampil_cashout_o2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="O2"
		');
		return $result->row_array();
	}


	// Cash-Out Bidang P2 (Biaya Jasa Perantara, Jasa Penyimpanan)
	public function tampil_cashout_p2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="P2"
		');
		return $result->row_array();
	}


	// Cash-Out Bidang Q2 (Biaya Pendidikan / Diklat)
	public function tampil_cashout_q2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Q2"
		');
		return $result->row_array();
	}


	// Cash-Out Bidang R2 (Biaya Bank)
	public function tampil_cashout_r2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="R2"
		');
		return $result->row_array();
	}


	// Cash-Out Bidang S2 (Bayar Pinjaman PRK)
	public function tampil_cashout_s2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="S2"
		');
		return $result->row_array();
	}


	// Cash-Out Bidang T2 (Bayar Pinjaman Pemegang Saham)
	public function tampil_cashout_t2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="T2"
		');
		return $result->row_array();
	}


	// Cash-Out Bidang U2 (Bayar Pinjaman Lain-lain)
	public function tampil_cashout_u2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="U2"
		');
		return $result->row_array();
	}

	// Cash-Out Bidang V2
	public function tampil_cashout_v2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="V2"
		');
		return $result->row_array();
	}

	// Cash-Out Bidang W2
	public function tampil_cashout_w2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="W2"
		');
		return $result->row_array();
	}

	// Cash-Out Bidang X2
	public function tampil_cashout_x2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="X2"
		');
		return $result->row_array();
	}

	// Cash-Out Bidang Y2
	public function tampil_cashout_y2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Y2"
		');
		return $result->row_array();
	}

	// Cash-Out Bidang Z2
	public function tampil_cashout_z2($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="Z2"
		');
		return $result->row_array();
	}

	// Cash-Out Bidang A3
	public function tampil_cashout_a3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="A3"
		');
		return $result->row_array();
	}

	// Cash-Out Bidang B3
	public function tampil_cashout_b3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="B3"
		');
		return $result->row_array();
	}

	// Cash-Out Bidang C3
	public function tampil_cashout_c3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="C3"
		');
		return $result->row_array();
	}

	// Cash-Out Bidang D3
	public function tampil_cashout_d3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="D3"
		');
		return $result->row_array();
	}

	// Cash-Out Bidang E3
	public function tampil_cashout_e3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="E3"
		');
		return $result->row_array();
	}

	// Cash-Out Bidang F3
	public function tampil_cashout_f3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="F3"
		');
		return $result->row_array();
	}

	// Cash-Out Bidang G3
	public function tampil_cashout_g3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="G3"
		');
		return $result->row_array();
	}

	// Cash-Out Bidang H3
	public function tampil_cashout_h3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="H3"
		');
		return $result->row_array();
	}

	// Cash-Out Bidang I3
	public function tampil_cashout_i3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="I3"
		');
		return $result->row_array();
	}

	// Cash-Out Bidang J3
	public function tampil_cashout_j3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="J3"
		');
		return $result->row_array();
	}

	// Cash-Out Bidang K3
	public function tampil_cashout_k3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="K3"
		');
		return $result->row_array();
	}

	// Cash-Out Bidang L3
	public function tampil_cashout_l3($tanggal){
		$result = $this->db->query('
				SELECT * FROM tbl_cashoutproj LEFT JOIN tbl_cashoutreal USING (kode_status,tanggal)
				WHERE tanggal="'.$tanggal.'" AND kode_status="L3"
		');
		return $result->row_array();
	}


	// Projection (Total)
	public function totalCashoutProj($tanggal){
		$result = $this->db->query('
			SELECT SUM(projection) AS tProjection FROM tbl_cashoutproj WHERE tanggal="'.$tanggal.'"
		');
		return $result->row_array();
	}

	// Realisasi (Total)
	public function totalCashoutReal($tanggal){
		$result = $this->db->query('
			SELECT SUM(realisasi) AS tRealisasi FROM tbl_cashoutreal WHERE tanggal="'.$tanggal.'"
		');
		return $result->row_array();
	}


}
