<?php

// Load file koneksi.php
include "koneksi.php";

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
			$kode_status = $get[0];
            $status = $get[1];

            $tgl0 = $get[2]; // 18/06/2021
			$tgl = substr($tgl0, 0,2);
			$bln = substr($tgl0, 3,2);
			$thn = substr($tgl0, 6,4);
			$tanggal = $tgl.'-'.$bln.'-'.$thn;

            $jumlah = $get[3];

			// Cek jika semua data tidak diisi
			if($kode_status == "" && $status == "" && $tanggal == "" && $jumlah == "")
				continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

            // Cek Apakah Data Sudah Ada Sebelumnya
            $q_cek = "SELECT * FROM tbl_cashinproj WHERE kode_status='$kode_status' AND tanggal='$tanggal'";
            $res_cek = mysqli_query($koneksi, $q_cek);
            $cek = mysqli_num_rows($res_cek);
            $data = mysqli_fetch_array($res_cek);

            if($cek>0){ //kalo data sudah ada sebelumnya
                $proj_sebelumnya = $data['projection'];
                $proj_tambahan = $jumlah;
                $proj_baru = $proj_sebelumnya + $proj_tambahan;

                // Data Lama Akan Ditambahkan Dengan Yang Baru
                mysqli_query($koneksi, "UPDATE tbl_cashinproj SET projection=$proj_baru WHERE kode_status='$kode_status' AND tanggal='$tanggal'");

                // Masukan Detail Data
                mysqli_query($koneksi, "insert into tbl_cashinproj_d(kode_status, status, tanggal, projection) 
                values ('$kode_status','$status','$tanggal', $jumlah)");

            }else{
                // Masukan Data
                mysqli_query($koneksi, "insert into tbl_cashinproj(kode_status, status, tanggal, projection) 
                values ('$kode_status','$status','$tanggal', $jumlah)");

                // Masukan Detail Data
                mysqli_query($koneksi, "insert into tbl_cashinproj_d(kode_status, status, tanggal, projection) 
                values ('$kode_status','$status','$tanggal', $jumlah)");
            }

			// // Tambahkan value yang akan di insert ke variabel $query
			// // Buat query Insert
			// $query = "INSERT INTO tbl_coll_payment VALUES('".$id."','".$cabang."','".$target_all."','".$target_cabang."','".$pers_all_cabang."','".$pencapaian."','".$pers_pencapaian."','".$selisih."','".$tanggal."')";
			// mysqli_query($koneksi, $query);
		}

		$numrow++; // Tambah 1 setiap kali looping
	}
}

// Redirect Di Server 10.20.1.201 (Yang Ada Domain nya)
echo '<script>
alert("Data Berhasil Diupload");window.location="http://localhost/Pro-Cashflow/collection_proyeksi";
</script>';

?>
