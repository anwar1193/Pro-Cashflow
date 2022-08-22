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
			$kolom_ke1 = $get[0];
			$kolom_ke2 = $get[1];
			$kolom_ke3 = $get[2];
			$kolom_ke4 = $get[3];
			$kolom_ke5 = $get[4];

            // Nomor Rekening
            if(substr($kolom_ke1, 0, 12) == 'No. rekening'){
                $no_rekening = substr($kolom_ke1, 15, 100);
            }

            // Nama
            if(substr($kolom_ke1, 0, 4) == 'Nama'){
                $nama = substr($kolom_ke1, 7, 100);
            }

            // Periode
            if(substr($kolom_ke1, 0, 7) == 'Periode'){
                $periode_from0 = substr($kolom_ke1, 10, 10);
                $periode_to0 = substr($kolom_ke1, 23, 10);

                $periode_from_explode = explode('/', $periode_from0);
                $periode_from = $periode_from_explode[2].'-'.$periode_from_explode[1].'-'.$periode_from_explode[0];

                $periode_to_explode = explode('/', $periode_to0);
                $periode_to = $periode_to_explode[2].'-'.$periode_to_explode[1].'-'.$periode_to_explode[0];
            }

            // Kode Mata Uang
            if(substr($kolom_ke1, 0, 14) == 'Kode Mata Uang'){
                $kode_mata_uang = substr($kolom_ke1, 17, 100);
            }

            // Saldo Awal
            if(substr($kolom_ke1, 0, 10) == 'Saldo Awal'){
                $saldo_awal0 = substr($kolom_ke1, 13, 100);
                $saldo_awal = str_replace(',', '', $saldo_awal0);
            }

            // Mutasi Debet
            if(substr($kolom_ke1, 0, 12) == 'Mutasi Debet'){
                $mutasi_debet0 = substr($kolom_ke1, 15, 100);
                $mutasi_debet = str_replace(',', '', $mutasi_debet0);
            }

            // Mutasi Kredit
            if(substr($kolom_ke1, 0, 13) == 'Mutasi Kredit'){
                $mutasi_kredit0 = substr($kolom_ke1, 16, 100);
                $mutasi_kredit = str_replace(',', '', $mutasi_kredit0);
            }

            // Saldo Akhir
            if(substr($kolom_ke1, 0, 11) == 'Saldo Akhir'){
                $saldo_akhir0 = substr($kolom_ke1, 14, 100);
                $saldo_akhir = str_replace(',', '', $saldo_akhir0);
            }

            // Data Detail Transaksi
            if(substr($kolom_ke1, 0, 1) == '0' || substr($kolom_ke1, 0, 1) == '1' || substr($kolom_ke1, 0, 1) == '2' || substr($kolom_ke1, 0, 1) == '3'){
                $d_tanggal_transaksi = $kolom_ke1;
                $d_keterangan = $kolom_ke2;
                $d_cabang = $kolom_ke3;
                $d_jumlah = $kolom_ke4;
                $d_saldo = $kolom_ke5;

                $jumlah_tipe = substr($d_jumlah, -2, 2); // Untuk mendapatkan Jumlah Tipe CR/DB 

                // Untuk Mendapatkan Jumlah
                if($jumlah_tipe == 'CR'){
                    $jumlah0 = str_replace(' CR', '', $d_jumlah);
                }elseif($jumlah_tipe == 'DB'){
                    $jumlah0 = str_replace(' DB', '', $d_jumlah);
                }

                $jumlah = str_replace(',', '', $jumlah0);
                $saldo = str_replace(',', '', $d_saldo);

                // Simpan Data ke tbl_bank_csv_transaksi
                // if($d_tanggal_transaksi != '' && $d_keterangan != '' && $d_cabang != '' && $d_jumlah != '' && $d_saldo != ''){
                //     mysqli_query($koneksi, "insert into tbl_bank_csv_transaksi(no_rekening, periode_from, periode_to, tanggal_transaksi, keterangan, cabang, jumlah, jumlah_tipe, saldo) 
                //     values ('$no_rekening', '$periode_from', '$periode_to', '$d_tanggal_transaksi', '$d_keterangan', '$d_cabang', $jumlah, '$jumlah_tipe', $saldo)");
                // }

                mysqli_query($koneksi, "insert into tbl_bank_csv_transaksi(no_rekening, periode_from, periode_to, tanggal_transaksi, keterangan, cabang, jumlah, jumlah_tipe, saldo) 
                    values ('$no_rekening', '$periode_from', '$periode_to', '$d_tanggal_transaksi', '$d_keterangan', '$d_cabang', $jumlah, '$jumlah_tipe', $saldo)");

            }

            // Simpan Data ke tbl_bank_csv
            if($no_rekening != '' && $nama != '' && $periode_from != '' && $periode_to != '' && $kode_mata_uang != '' && $saldo_awal != '' && $mutasi_debet != '' && $mutasi_kredit != '' && $saldo_akhir != ''){
                mysqli_query($koneksi, "insert into tbl_bank_csv(no_rekening, nama, periode_from, periode_to, kode_mata_uang, saldo_awal, mutasi_debet, mutasi_kredit, saldo_akhir) 
                values ('$no_rekening','$nama','$periode_from', '$periode_to', '$kode_mata_uang', $saldo_awal, $mutasi_debet, $mutasi_kredit, $saldo_akhir)");
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
alert("Data Berhasil Diupload");window.location="http://localhost:8056/Pro-Cashflow/bank_csv";
</script>';

?>
