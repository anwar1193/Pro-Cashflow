<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Import Data Cashout Proyeksi</title>

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
			<a href="http://localhost/Pro-Cashflow/input_cashout" class="btn btn-danger pull-right">
				Kembali
			</a>

			<h3>Import Data Cashout Proyeksi</h3>
			<hr>

			<!-- Buat sebuah tag form dan arahkan action nya ke file ini lagi -->
			<form method="post" action="" enctype="multipart/form-data">
				<a href="file_csv/proyeksi_cashout.csv" class="btn btn-primary">
					Download Format
				</a>

                <a href="file_csv/proyeksi_cashout_contoh.csv" class="btn btn-warning">
					Download Contoh Pengisian
				</a>
                
                <br><br>

				<!--
				-- Buat sebuah input type file
				-- class pull-left berfungsi agar file input berada di sebelah kiri
				-->
				<input type="file" name="file" class="pull-left">

				<button type="submit" name="preview" class="btn btn-success btn-sm">
					Preview
				</button>
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

				$nama_file = $_FILES['file']['name']; // Ambil nama file yang akan diupload
				$tmp_file = $_FILES['file']['tmp_name'];
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
					echo "<form method='post' action='upload_cashout_proyeksi_exec.php'>";

					// Buat sebuah div untuk alert validasi kosong
					echo "<div class='alert alert-danger' id='kosong'>
					Semua data belum diisi, Ada <span id='jumlah_kosong'></span> data yang belum lengkap diisi.
					</div>";

					echo "<table class='table table-bordered'>
					<tr>
						<th colspan='8' class='text-center'>Preview Data</th>
					</tr>

					<tr>
                        <th style='text-align:center'>Kode Status</th>
                        <th style='text-align:center'>Status</th>
                        <th style='text-align:center'>Tanggal</th>
                        <th style='text-align:center'>Jumlah</th>
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
							$kode_status = $get[0];
                            $status = $get[1];
                            $tanggal = $get[2];
                            $jumlah = $get[3];

							// Cek jika semua data tidak diisi
							if($kode_status == "" && $status == "" && $tanggal == "" && $jumlah == "")
                                continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

							 // Validasi apakah semua data telah diisi
                             $kode_status_td = ($kode_status == "")? " style='background: #E07171;'" : ""; // Jika Kode Sts kosong, beri warna merah
                             $status_td = ($status == "")? " style='background: #E07171;'" : ""; // Jika Status kosong, beri warna merah
                             $tanggal_td = ($tanggal == "")? " style='background: #E07171;'" : ""; // Jika Tanggal kosong, beri warna merah
                             $jumlah_td = ($jumlah == "")? " style='background: #E07171;'" : ""; // Jika Jumlah kosong, beri warna merah
                             

							// Jika salah satu data ada yang kosong
                            if($kode_status == "" or $status == "" or $tanggal == "" or $jumlah == ""){
                                $kosong++; // Tambah 1 variabel $kosong
                            }

							echo "<tr>";
                            echo "<td style='text-align:center'".$kode_status_td.">".$kode_status."</td>";
                            echo "<td style='text-align:center'".$status_td.">".$status."</td>";
                            echo "<td style='text-align:center'".$tanggal_td.">".$tanggal."</td>";
                            echo "<td style='text-align:right'".$jumlah_td.">".number_format($jumlah, 0, '.', ',')."</td>";
                            echo "</tr>";
						}

						$numrow++; // Tambah 1 setiap kali looping
					}

					echo "</table>";

					// Cek apakah variabel kosong lebih dari 1
					// Jika lebih dari 1, berarti ada data yang masih kosong
					if($kosong > 1){
					?>
						<script>
						$(document).ready(function(){
							// Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
							$("#jumlah_kosong").html('<?php echo $kosong; ?>');

							$("#kosong").show(); // Munculkan alert validasi kosong
						});
						</script>
					<?php
					}else{ // Jika semua data sudah diisi
						echo "<hr>";

						// Buat sebuah tombol untuk mengimport data ke database
						echo "<button type='submit' name='import' class='btn btn-primary'> Import Data</button>";
					}

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