<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_cashinproj extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('helperku');
		$this->load->library(array('libraryku', 'form_validation'));
		$this->load->model('M_edit_cashinproj');
	}

	public function index()
	{
		date_default_timezone_set("Asia/Jakarta");
		cek_belum_login();
		$tanggal = $this->input->post('tanggal');
		$tgl = date('d-m-Y', strtotime($tanggal));

		$result = $this->M_edit_cashinproj->tampil_cashin('tbl_cashinproj',array('tanggal'=>$tgl));
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_tedit_cashinproj',array('row'=>$result));
		$this->load->view('footer');
	}

	public function edit($id){
		$result = $this->M_edit_cashinproj->edit('tbl_cashinproj',array('id'=>$id));
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_edit_cashinproj',array('row'=>$result));
		$this->load->view('footer');
	}

	public function update(){
		$result = $this->M_edit_cashinproj->update('tbl_cashinproj',array(
			'tanggal' => $this->input->post('tanggal'),
			'projection' => $this->input->post('projection')
		),array('id'=>$this->input->post('id')));

		if($result>0){
			$status = $this->input->post('status');
			$tanggal = $this->input->post('tanggal');
			$tgl = date('d-m-Y',strtotime($tanggal));

			$this->session->set_flashdata('pesan_sukses','
				<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Sukses!</strong> Projection '.$status.' Pada Tanggal '.$tgl.' Berhasil Diubah
				</div>
			');
			redirect('edit_cashinproj');
		}
	}

}
