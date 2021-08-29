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
        $projection = $sheetData[$i]['4'];

        // Cek Apakah Data Sudah Ada Sebelumnya
        $q_cek = "SELECT * FROM tbl_cashinproj WHERE kode_status='$kode_status' AND tanggal='$tanggal'";
        $res_cek = mysqli_query($koneksi, $q_cek);
        $cek = mysqli_num_rows($res_cek);
        $data = mysqli_fetch_array($res_cek);

        if($cek>0){ //kalo data sudah ada sebelumnya
            $proj_sebelumnya = $data['projection'];
            $proj_tambahan = $projection;
            $proj_baru = $proj_sebelumnya + $proj_tambahan;

            // Data Lama Akan Ditambahkan Dengan Yang Baru
            mysqli_query($koneksi, "UPDATE tbl_cashinproj SET projection=$proj_baru WHERE kode_status='$kode_status' AND tanggal='$tanggal'");

            // Masukan Detail Data
            mysqli_query($koneksi, "insert into tbl_cashinproj_d(kode_status, status, tanggal, projection) 
            values ('$kode_status','$status','$tanggal', $projection)");

        }else{
            // Masukan Data
            mysqli_query($koneksi, "insert into tbl_cashinproj(kode_status, status, tanggal, projection) 
            values ('$kode_status','$status','$tanggal', $projection)");

            // Masukan Detail Data
            mysqli_query($koneksi, "insert into tbl_cashinproj_d(kode_status, status, tanggal, projection) 
            values ('$kode_status','$status','$tanggal', $projection)");
        }

    }

    
    // Redirect Di Server 10.20.0.30
    // echo '<script>
    //     alert("Data Berhasil Diupload");window.location="http://10.20.0.30/Pro-Cashflow/input_cashin";
    // </script>';

    // Redirect Di Laptop Local
    //  echo '<script>
    //     alert("Data Berhasil Diupload");window.location="http://localhost:8056/Pro-Cashflow/input_cashin";
    // </script>';

    // Redirect Di Server 10.20.1.201 (Yang Ada Domain nya)
    echo '<script>
        alert("Data Berhasil Diupload");window.location="http://10.20.0.30/Pro-Cashflow/collection_proyeksi";
    </script>';

}
?>