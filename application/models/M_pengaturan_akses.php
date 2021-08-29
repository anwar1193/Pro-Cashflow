<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengaturan_akses extends CI_Model {

	public function tampil_data($tabel){
		$result = $this->db->get($tabel);
		return $result;
	}

	public function simpan_data($tbl,$data){
		$result = $this->db->insert($tbl,$data);
		return $result;
	}

	public function tampil_data_where($tbl,$where){
		$result = $this->db->get_where($tbl, $where);
		return $result;
	}

	public function update_data($tbl, $data, $where){
		$result = $this->db->update($tbl, $data, $where);
		return $result;
	}

	public function hapus_data($tbl,$id){
		$result = $this->db->delete($tbl,$id);
		return $result;
	}

    // Tampilkan tbl_submenu join tbl_menu 
    public function tampil_submenu(){
        $result = $this->db->query("SELECT id_submenu, menu, submenu, tbl_submenu.url as url_sub, tbl_submenu.icon as icon_sub
                                 FROM tbl_submenu INNER JOIN tbl_menu USING(id_menu)");
        return $result;
    }

}
