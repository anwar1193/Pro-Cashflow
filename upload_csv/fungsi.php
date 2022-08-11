<?php  
    function upload_bank(){
		$namaFile = $_FILES['file_bank']['name'];
		$ukuranFile = $_FILES['file_bank']['size'];
		$error = $_FILES['file_bank']['error'];
		$tmpName = $_FILES['file_bank']['tmp_name']; //tmp_name adalah tempat penyimpanan file_bank sementara

		// Cek apakah tidak ada file_bank yang diupload
		if($error === 4){ // 4 adalah kode jika tidak ada file_bank yang diupload
			echo "<script>
				alert('Pilih file_bank Terlebih Dahulu !');
			</script>";
			return false;
		}


		// Cek apakah yang di upload adalah file_bank
		$ekstensiGambarvalid = ['jpg', 'jpeg', 'png'];
		$ekstensiGambar = explode('.', $namaFile); // delimiter yang di masukkan adalah titik, jadi jika ada file namanya gambar.jpg, maka namanya dipecah menjadi ["gambar" , "jpg"] berbentuk array
		$ekstensiGambar = strtolower(end($ekstensiGambar)); // end maksudnya mengambil kata terakhir (ekstensi), yaitu jpg dari ["gambar",  "jpg"] , sedangkan strtolower supaya memastikan semua ekstensi dalam huruf kecil

		// if(!in_array($ekstensiGambar, $ekstensiGambarvalid)){ //in_array adalah fungsi yang mengecek apakah parameter pertama nilainya ada/termasuk di dalam daftar array parameter kedua ($ekstensiGambarValid)
		// 	echo "<script>
		// 		alert('Yang Anda Upload Bukan Gambar');
		// 	</script>";
		// 	return false;
		// }


		// Cek apakah ukurannya terlalu besar
		if($ukuranFile > 10000000){ // angka dalam byte, jadi 10000000 byte = 10000 kb = 10 mb
			echo "<script>
				alert('Ukuran Gambar Terlalu Besar');
			</script>";
			return false;
		}


		// Lolos pengecekan, gambar siap di upload
		// generate nama gambar baru
		$namaFileBaru = uniqid();
		$namaFileBaru .= '.';
		$namaFileBaru .= $ekstensiGambar;


		move_uploaded_file($tmpName, 'file_bank/'.$namaFileBaru); // $tmpName = lokasi lama (penyimpanan sementara)

		return $namaFileBaru;

	}



    function upload_dleas(){
		$namaFile = $_FILES['file_dleas']['name'];
		$ukuranFile = $_FILES['file_dleas']['size'];
		$error = $_FILES['file_dleas']['error'];
		$tmpName = $_FILES['file_dleas']['tmp_name']; //tmp_name adalah tempat penyimpanan file_dleas sementara

		// Cek apakah tidak ada file_dleas yang diupload
		if($error === 4){ // 4 adalah kode jika tidak ada file_dleas yang diupload
			echo "<script>
				alert('Pilih file_dleas Terlebih Dahulu !');
			</script>";
			return false;
		}


		// Cek apakah yang di upload adalah file_dleas
		$ekstensiGambarvalid = ['jpg', 'jpeg', 'png', 'pdf', 'xlsx'];
		$ekstensiGambar = explode('.', $namaFile); // delimiter yang di masukkan adalah titik, jadi jika ada file namanya gambar.jpg, maka namanya dipecah menjadi ["gambar" , "jpg"] berbentuk array
		$ekstensiGambar = strtolower(end($ekstensiGambar)); // end maksudnya mengambil kata terakhir (ekstensi), yaitu jpg dari ["gambar",  "jpg"] , sedangkan strtolower supaya memastikan semua ekstensi dalam huruf kecil

		// if(!in_array($ekstensiGambar, $ekstensiGambarvalid)){ //in_array adalah fungsi yang mengecek apakah parameter pertama nilainya ada/termasuk di dalam daftar array parameter kedua ($ekstensiGambarValid)
		// 	echo "<script>
		// 		alert('Yang Anda Upload Bukan Gambar');
		// 	</script>";
		// 	return false;
		// }


		// Cek apakah ukurannya terlalu besar
		if($ukuranFile > 10000000){ // angka dalam byte, jadi 10000000 byte = 10000 kb = 10 mb
			echo "<script>
				alert('Ukuran Gambar Terlalu Besar');
			</script>";
			return false;
		}


		// Lolos pengecekan, gambar siap di upload
		// generate nama gambar baru
		$namaFileBaru = uniqid();
		$namaFileBaru .= '.';
		$namaFileBaru .= $ekstensiGambar;


		move_uploaded_file($tmpName, 'file_dleas/'.$namaFileBaru); // $tmpName = lokasi lama (penyimpanan sementara)

		return $namaFileBaru;

	}


    function tambah_data($data){
		global $koneksi;

		// htmlspecialchars : supaya gak bisa di masukin sintaks html/css
		// mysqli_real_escape_string : supaya bisa masukin tanda kutip 1 (gak error) , format : mysqli_real_escape_string($koneksi, $data)

		$request_date0 = $data['request_date'];
		$request_explode = explode('/', $request_date0);
		$request_date1 = $request_explode[2].'-'.$request_explode[1].'-'.$request_explode[0];

		$request_date = mysqli_real_escape_string($koneksi, htmlspecialchars($request_date1));
		$bank_group = mysqli_real_escape_string($koneksi, htmlspecialchars($data['bank_group']));
		$bank_name = mysqli_real_escape_string($koneksi, htmlspecialchars($data['bank_name']));
		$principal_bank = mysqli_real_escape_string($koneksi, htmlspecialchars($data['principal_bank']));
		$interest_bank = mysqli_real_escape_string($koneksi, htmlspecialchars($data['interest_bank']));
		$contract_no = mysqli_real_escape_string($koneksi, htmlspecialchars($data['contract_no']));
		$contract_term = mysqli_real_escape_string($koneksi, htmlspecialchars($data['contract_term']));
		$effective_rate = mysqli_real_escape_string($koneksi, htmlspecialchars($data['effective_rate']));
		$payment_method = mysqli_real_escape_string($koneksi, htmlspecialchars($data['payment_method']));
		$interest_calculation = mysqli_real_escape_string($koneksi, htmlspecialchars($data['interest_calculation']));
		$golive_date = mysqli_real_escape_string($koneksi, htmlspecialchars($data['golive_date']));
		$handling_fee = mysqli_real_escape_string($koneksi, htmlspecialchars($data['handling_fee']));
		$installment = mysqli_real_escape_string($koneksi, htmlspecialchars($data['installment']));
		$installment_date = mysqli_real_escape_string($koneksi, htmlspecialchars($data['installment_date']));
		$provision_fee = mysqli_real_escape_string($koneksi, htmlspecialchars($data['provision_fee']));
		$admin_fee = mysqli_real_escape_string($koneksi, htmlspecialchars($data['admin_fee']));

		// Upload File Bank
		$file_bank = upload_bank();
		if(!$file_bank){
			return false;
		}

        // Upload File Dleas
		$file_dleas = upload_dleas();
		if(!$file_dleas){
			return false;
		}

		$query = "INSERT INTO tbl_angsuranluarbank(request_date, bank_group, bank_name, principal_bank, interest_bank, contract_no, contract_term, effective_rate, payment_method, interest_calculation, golive_date, handling_fee, installment, installment_date, provision_fee, admin_fee, file_bank, file_dleas)
					VALUES('$request_date', '$bank_group', '$bank_name', $principal_bank, $interest_bank, '$contract_no', $contract_term, '$effective_rate', '$payment_method', '$interest_calculation', '$golive_date', $handling_fee, $installment, '$installment_date', $provision_fee, $admin_fee, '$file_bank', '$file_dleas')";

		mysqli_query($koneksi, $query);

		return mysqli_affected_rows($koneksi); //mysqli_affected_rows, jika query berhasil bernilai 1, kalo gagal bernilai -1
	}

?>