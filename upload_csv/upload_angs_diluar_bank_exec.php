<?php

// Load file koneksi.php
include "koneksi.php";
$contract_no = $_POST['contract_no'];

if(isset($_POST['import'])){ // Jika user mengklik tombol Import
    
	// Load librari PHPExcel nya
	require_once 'PHPExcel/PHPExcel.php';

	$inputFileType = 'CSV';
	$inputFileName = 'tmp/data.csv';

	$reader = PHPExcel_IOFactory::createReader($inputFileType);
	$excel = $reader->load($inputFileName);

	$numrow = 1;
	$worksheet = $excel->getActiveSheet();
	foreach ($worksheet->getRowIterator() as $row) {
		// Cek $numrow apakah lebih dari 1
		// Artinya karena baris pertama adalah nama-nama kolom
		// Jadi dilewat saja, tidak usah diimport
		if($numrow > 1){
			// START -->
			// Skrip untuk mengambil value nya
			$cellIterator = $row->getCellIterator();
			$cellIterator->setIterateOnlyExistingCells(false); // Loop all cells, even if it is not set

			$get = array(); // Valuenya akan di simpan kedalam array,dimulai dari index ke 0
			foreach ($cellIterator as $cell) {
				array_push($get, $cell->getValue()); // Menambahkan value ke variabel array $get
			}
			// <-- END

			// Ambil data value yang telah di ambil dan dimasukkan ke variabel $get
			$id = NULL;
			$no = $get[0];

			// Due Date
            $due_date0 = $get[1];
			$due_date1 = explode("/", $due_date0);
			$due_date2 = $due_date1[2].'-'.$due_date1[1].'-'.$due_date1[0];
			$due_date = date('Y-m-d', strtotime($due_date2));

            $principal = $get[2];
            $interest = $get[3];

			$installment = $principal + $interest;

			// Cek jika semua data tidak diisi
			if($no == "" && $due_date == "" && $principal == "" && $interest == "")
				continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

            // Masukan Data
            mysqli_query($koneksi, "insert into tbl_angsuranluarbank_detail(contract_no, no_periode, due_date, principal, interest, installment) 
            values ('$contract_no',$no,'$due_date', $principal, $interest, $installment)");

		}

		$numrow++; // Tambah 1 setiap kali looping
	}
}


// Setelah Proses simpan csv ke table berhasil, lakukan proses hitung os_principal, os_interest, os_receivable.....................

// 1. Ambil data dari tbl_angsuranluarbank
$sql_data_utama = "SELECT * FROM tbl_angsuranluarbank WHERE contract_no='$contract_no'";
$res_data_utama = mysqli_query($koneksi, $sql_data_utama) or die('error sql_data_utama');
$data_utama = mysqli_fetch_array($res_data_utama);

$principal_bank = $data_utama['principal_bank'];
$interest_bank = $data_utama['interest_bank'];


// 2. Query tbl_angsuranluarbank_detail berdasarkan contract_no, lalu lakukan looping/foreach
$sql_data_detail = "SELECT * FROM tbl_angsuranluarbank_detail WHERE contract_no='$contract_no'";
$res_data_detail = mysqli_query($koneksi, $sql_data_detail) or die('error sql_data_detail');

while($data_detail = mysqli_fetch_array($res_data_detail))
{
	$no = $data_detail['no_periode'];
	$no_old = $no - 1;
	$principal = $data_detail['principal'];
	$interest = $data_detail['interest'];

	if($no == 1){
		$os_principal = $principal_bank - $principal;
		$os_interest = $interest_bank - $interest;
	}elseif($no > 1){
		// ambil os sebelumnya
		$sql_old = "SELECT * FROM tbl_angsuranluarbank_detail WHERE contract_no='$contract_no' AND no_periode = $no_old";
		$res_old = mysqli_query($koneksi, $sql_old) or die('error sql_old');
		$data_old = mysqli_fetch_array($res_old);
		
		$os_principal_old = $data_old['os_principal'];
		$os_interest_old = $data_old['os_interest'];

		$os_principal = $os_principal_old - $principal;
		$os_interest = $os_interest_old - $interest;
	}

	$os_receivable = $os_principal + $os_interest;

	$sql_update = "UPDATE tbl_angsuranluarbank_detail SET os_principal=$os_principal, os_interest=$os_interest, os_receivable=$os_receivable WHERE contract_no='$contract_no' AND no_periode=$no";

	mysqli_query($koneksi, $sql_update);

}

// Redirect Di Server 10.20.1.201 (Yang Ada Domain nya)
echo '<script>
alert("Proses Upload Data Angsuran Di Luar Bank Berhasil");window.location="http://localhost:8056/Pro-Cashflow/angsuran_diluar_bank";
</script>';

?>
