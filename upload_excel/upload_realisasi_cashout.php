<?php
include('koneksi.php');
require 'vendor/autoload.php';
error_reporting(0);
date_default_timezone_set("Asia/Jakarta");
 
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
 
$file_mimes = array('application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

if(isset($_FILES['berkas_excel']['name']) && in_array($_FILES['berkas_excel']['type'], $file_mimes)) {
 
    $arr_file = explode('.', $_FILES['berkas_excel']['name']);
    $extension = end($arr_file);
 
    if('csv' == $extension) {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
    } else {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
    }
 
    $spreadsheet = $reader->load($_FILES['berkas_excel']['tmp_name']);
     
    $sheetData = $spreadsheet->getActiveSheet()->toArray();
	for($i = 1;$i < count($sheetData);$i++)
	{
        $kode_status = $sheetData[$i]['1'];
        $status = $sheetData[$i]['2'];
        $tgl = $sheetData[$i]['3'];
        $tanggal = date('d-m-Y', strtotime($tgl));
        $realisasi = $sheetData[$i]['4'];

        // Cek Apakah Sudah Ada Proyeksinya
        $q_cek_proj = "SELECT * FROM tbl_cashoutproj WHERE kode_status='$kode_status' AND tanggal='$tanggal'";
        $r_cek_proj = mysqli_query($koneksi, $q_cek_proj);
        $cek_proj = mysqli_num_rows($r_cek_proj);

        if($cek_proj>0){ //Jika Sudah Ada Proyeksinya

            // Cek Apakah Data Sudah Ada Sebelumnya
            $q_cek = "SELECT * FROM tbl_cashoutreal WHERE kode_status='$kode_status' AND tanggal='$tanggal'";
            $res_cek = mysqli_query($koneksi, $q_cek);
            $cek = mysqli_num_rows($res_cek);
            $data = mysqli_fetch_array($res_cek);

            if($cek>0){ //kalo data sudah ada sebelumnya
                $real_sebelumnya = $data['realisasi'];
                $real_tambahan = $realisasi;
                $real_baru = $real_sebelumnya + $real_tambahan;

                // Data Lama Akan Ditambahkan Dengan Yang Baru
                mysqli_query($koneksi, "UPDATE tbl_cashoutreal SET realisasi=$real_baru WHERE kode_status='$kode_status' AND tanggal='$tanggal'");

                // Masukan Detail Data
                mysqli_query($koneksi, "insert into tbl_cashoutreal_d(kode_status, status, tanggal, realisasi) 
                values ('$kode_status','$status','$tanggal', $realisasi)");

            }else{
                // Masukan Data
                mysqli_query($koneksi, "insert into tbl_cashoutreal(kode_status, status, tanggal, realisasi) 
                values ('$kode_status','$status','$tanggal', $realisasi)");

                // Masukan Detail Data
                mysqli_query($koneksi, "insert into tbl_cashoutreal_d(kode_status, status, tanggal, realisasi) 
                values ('$kode_status','$status','$tanggal', $realisasi)");
            }

        }else{ //Jika Belum Ada Proyeksinya

            // Tambahkan Proyeksinya Dengan Nilai 0
            mysqli_query($koneksi, "insert into tbl_cashoutproj(kode_status, status, tanggal, projection) 
            values ('$kode_status','$status','$tanggal', 0)");

            // Cek Apakah Data Sudah Ada Sebelumnya
            $q_cek = "SELECT * FROM tbl_cashoutreal WHERE kode_status='$kode_status' AND tanggal='$tanggal'";
            $res_cek = mysqli_query($koneksi, $q_cek);
            $cek = mysqli_num_rows($res_cek);
            $data = mysqli_fetch_array($res_cek);

            if($cek>0){ //kalo data sudah ada sebelumnya
                $real_sebelumnya = $data['realisasi'];
                $real_tambahan = $realisasi;
                $real_baru = $real_sebelumnya + $real_tambahan;

                // Data Lama Akan Ditambahkan Dengan Yang Baru
                mysqli_query($koneksi, "UPDATE tbl_cashoutreal SET realisasi=$real_baru WHERE kode_status='$kode_status' AND tanggal='$tanggal'");

                // Masukan Detail Data
                mysqli_query($koneksi, "insert into tbl_cashoutreal_d(kode_status, status, tanggal, realisasi) 
                values ('$kode_status','$status','$tanggal', $realisasi)");

            }else{
                // Masukan Data
                mysqli_query($koneksi, "insert into tbl_cashoutreal(kode_status, status, tanggal, realisasi) 
                values ('$kode_status','$status','$tanggal', $realisasi)");

                // Masukan Detail Data
                mysqli_query($koneksi, "insert into tbl_cashoutreal_d(kode_status, status, tanggal, realisasi) 
                values ('$kode_status','$status','$tanggal', $realisasi)");
            }

        }

    }

    
    // Redirect Di Server 10.20.0.30
    // echo '<script>
    //     alert("Data Berhasil Diupload");window.location="http://10.20.0.30/Pro-Cashflow/input_cashout_real";
    // </script>';

    // Redirect Di Laptop Local
    //  echo '<script>
    //     alert("Data Berhasil Diupload");window.location="http://localhost:8056/Pro-Cashflow/input_cashout_real";
    // </script>';

    // Redirect Di Server 10.20.1.201 (Yang Ada Domain nya)
    echo '<script>
        alert("Data Berhasil Diupload");window.location="http://10.20.0.30/Pro-Cashflow/input_cashout_real";
    </script>';

}
?>