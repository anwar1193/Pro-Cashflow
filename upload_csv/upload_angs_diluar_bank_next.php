<?php  
	include 'koneksi.php';
	include 'fungsi.php';

	$berhasil = '';

	// Simpan Data Awal
	if(isset($_POST['proses'])){
		$contract_no = $_POST['contract_no'];

		// Cek Apakah Data dengan contract_no ini sudah ada sebelumnya
		$sql_cek = "SELECT contract_no FROM tbl_angsuranLuarBank WHERE contract_no='$contract_no'";
		$res_cek = mysqli_query($koneksi, $sql_cek) or die('error cek');
		$cek = mysqli_num_rows($res_cek);

		if($cek > 0){ // Jika Data Sudah Ada
			$berhasil = 'lanjut-aja'; // ini supaya gak kosong aja
		}else{ // Jika Data Belum Ada
			if(tambah_data($_POST) > 0){
				$berhasil = 'true'; // ini supaya gak kosong aja
			}else{
				echo '<script>
					alert("Data Barang Gagal Disimpan");
					document.location.href = "index.php";
				</script>';
			}
		}
	}
	// END Simpan Data Awal
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Import Angs. Diluar Bank</title>

		<!-- Load File bootstrap.min.css yang ada difolder css -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Style untuk Loading -->
		<style>
        #loading{
			background: whitesmoke;
			position: absolute;
			top: 140px;
			left: 82px;
			padding: 5px 10px;
			border: 1px solid #ccc;
		}
		</style>

		<!-- Load File jquery.min.js yang ada difolder js -->
		<script src="js2/jquery.min.js"></script>

		<script>
		$(document).ready(function(){
			// Sembunyikan alert validasi kosong
			$("#kosong").hide();
		});
		</script>
	</head>
	<body>
		<!--
		-- START HEADER
		-- Membuat Menu Header / Navbar
		-- Hapus saja jika tidak diperlukan
		-->
		<nav class="navbar navbar-inverse" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#" style="color: white;"><b>Pro-Cashflow</b></a>
				</div>
			</div>
		</nav>
		<!-- END HEADER -->

		<!-- Content -->
		<div style="padding: 0 15px;">
			<!-- Buat sebuah tombol Cancel untuk kemabli ke halaman awal / view data -->

			<h3 class="text-center">Import Angsuran Diluar Bank</h3>
			<hr>

			<!-- Buat sebuah tag form dan arahkan action nya ke file ini lagi -->
			<form method="post" action="" enctype="multipart/form-data">

                <div class="row">
                    <!-- Inputan -->
                    <div class="col-md-6 col-md-offset-3">

                        <div class="form-group">
                            <label for="contract_no">Contract No.</label>
                            <input type="text" name="contract_no" class="form-control" id="contract_no" value="<?php echo $_POST['contract_no'] ?>" readonly>
                        </div>

                        <div class="form-group">
                            <label for="upload_detail">Upload Detail</label>
                            <a href="file_csv/angsuran_luar_bank.csv" class="btn btn-primary btn-xs">
                                Download Format
                            </a>
                            <span class="font-font-weight-bold text-danger">
                                Penting : Hindari penggunaan titik(.) dan koma(,) saat mengisikan nominal !
                            </span>
                            <input type="file" name="file_excel" class="form-control" required="">
                        </div>
                        

                        <button type="submit" name="preview" class="btn btn-success btn-sm">
                            Preview Detail
                        </button>
                    </div>
                    <!-- END Inputan -->
                </div>

			</form>

			<hr>

			<!-- Buat Preview Data -->
			<?php
			// Jika user telah mengklik tombol Preview
			if(isset($_POST['preview'])){
				$nama_file_baru = 'data.csv';

				// Cek apakah terdapat file data.xlsx pada folder tmp
				if(is_file('tmp/'.$nama_file_baru)) // Jika file tersebut ada
					unlink('tmp/'.$nama_file_baru); // Hapus file tersebut

				$nama_file = $_FILES['file_excel']['name']; // Ambil nama file yang akan diupload
				$tmp_file = $_FILES['file_excel']['tmp_name'];
				$ext = pathinfo($nama_file, PATHINFO_EXTENSION); // Ambil ekstensi file yang akan diupload

				// Cek apakah file yang diupload adalah file CSV
				if($ext == "csv"){
					// Upload file yang dipilih ke folder tmp
					move_uploaded_file($tmp_file, 'tmp/'.$nama_file_baru);

					// Load librari PHPExcel nya
					require_once 'PHPExcel/PHPExcel.php';

					$inputFileType = 'CSV';
					$inputFileName = 'tmp/data.csv';

					$reader = PHPExcel_IOFactory::createReader($inputFileType);
					$excel = $reader->load($inputFileName);

					// Buat sebuah tag form untuk proses import data ke database
					echo "<form method='post' action='upload_angs_diluar_bank_exec.php'>";

					echo "<input type='text' name='contract_no' value='".$_POST['contract_no']."' hidden>";

					// Buat sebuah div untuk alert validasi kosong
					// echo "<div class='alert alert-danger' id='kosong'>
					// Semua data belum diisi, Ada <span id='jumlah_kosong'></span> data yang belum lengkap diisi.
					// </div>";

					echo "<table class='table table-bordered'>
					<tr>
						<th colspan='4' class='text-center'>Preview Data</th>
					</tr>

					<tr>
                        <th style='text-align:center'>No</th>
                        <th style='text-align:center'>Due Date</th>
						<th style='text-align:center'>Principal</th>
						<th style='text-align:center'>Interest</th>
                    </tr>";

					$numrow = 1;
					$kosong = 0;
					$worksheet = $excel->getActiveSheet();
					foreach ($worksheet->getRowIterator() as $row) { // Lakukan perulangan dari data yang ada di csv
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
                            $no = $get[0];
                            $due_date = $get[1];
                            $principal = $get[2];
                            $interest = $get[3];

							// Cek jika semua data tidak diisi
							if($no == "" && $due_date == "" && $principal=="" && $interest=="")
                                continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

							 // Validasi apakah semua data telah diisi
                             $no_td = ($no == "")? " style='background: #E07171;'" : ""; // Jika Kode Sts kosong, beri warna merah
                             $due_date_td = ($due_date == "")? " style='background: #E07171;'" : ""; // Jika due_date kosong, beri warna merah
							 $principal_td = ($principal == "")? " style='background: #E07171;'" : ""; // Jika principal kosong, beri warna merah
							 $interest_td = ($interest == "")? " style='background: #E07171;'" : ""; // Jika interest kosong, beri warna merah

							// Jika salah satu data ada yang kosong
                            if($no == "" or $due_date == "" or $principal == "" or $interest == ""){
                                $kosong++; // Tambah 1 variabel $kosong
                            }

							echo "<tr>";
                            echo "<td style='text-align:center'".$no_td.">".$no."</td>";
                            echo "<td style='text-align:center'".$due_date_td.">".$due_date."</td>";
							echo "<td style='text-align:right'".$principal_td.">".$principal."</td>";
							echo "<td style='text-align:right'".$interest_td.">".$interest."</td>";
                            echo "</tr>";
						}

						$numrow++; // Tambah 1 setiap kali looping
					}

					echo "</table>";

					echo "<hr>";

					// Buat sebuah tombol untuk mengimport data ke database
					echo "<button type='submit' name='import' class='btn btn-primary'> Import Data</button>";

					echo "</form>";
				}else{ // Jika file yang diupload bukan File CSV
					// Munculkan pesan validasi
					echo "<div class='alert alert-danger'>
					Hanya File CSV (.csv) yang diperbolehkan
					</div>";
				}
			}
			?>
		</div>
	</body>
</html>