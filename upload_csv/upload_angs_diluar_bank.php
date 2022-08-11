<?php  
    require_once('koneksi.php');
    date_default_timezone_set("Asia/Jakarta");
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
			<a href="http://localhost:8056/Pro-Cashflow/angsuran_diluar_bank" class="btn btn-danger pull-right">
				Kembali
			</a>

			<h3 class="text-center">Import Angsuran Diluar Bank</h3>
			<hr>

			<!-- Buat sebuah tag form dan arahkan action nya ke file ini lagi -->
			<form method="post" action="upload_angs_diluar_bank_next.php" enctype="multipart/form-data">

                <div class="row">
                    <!-- Inputan -->
                    <div class="col-md-10 col-md-offset-1">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="request_date">Request Date</label>
                                <input type="text" name="request_date" class="form-control" id="request_date" placeholder="Rp" value="<?php echo date('d/m/Y') ?>" readonly>
                            </div>

                            <div class="form-group">
                                <label for="bank_group">Bank Group</label>
                                <select name="bank_group" id="bank_group" class="form-control" required>
                                    <option value="">-Pilih Bank-</option>
                                    <?php  
                                        $sql_bank = "SELECT * FROM tbl_bank ORDER BY bank";
                                        $res_bank = mysqli_query($koneksi, $sql_bank) or die('error fungsi');
                                        // $data_bank = mysqli_fetch_array($res_bank);
                                    while($row = mysqli_fetch_array($res_bank)){                                ?>
                                        <option value="<?php echo $row['bank'] ?>"><?php echo $row['bank'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="bank_name">Bank Name</label>
                                <input type="text" name="bank_name" class="form-control" id="bank_name" placeholder="" required="">
                            </div>

                            <div class="form-group">
                                <label for="principal_bank">Principal Bank</label>
                                <input type="number" name="principal_bank" class="form-control" id="principal_bank" placeholder="Rp" required="">
                                <span id="principal_bank_v"></span>
                            </div>

                            <div class="form-group">
                                <label for="interest_bank">Interest Bank</label>
                                <input type="number" name="interest_bank" class="form-control" id="interest_bank" placeholder="Rp" required="">
                                <span id="interest_bank_v"></span>
                            </div>

                            <div class="form-group">
                                <label for="contract_no">Contract No.</label>
                                <input type="text" name="contract_no" class="form-control" id="contract_no" required="" autocomplete="off" placeholder="Note : Contract No Harus Unik">
                                <div id="pesan_contract_ada" style="margin-top: 10px; display: inline-block;"></div>
                            </div>

                            <div class="form-group">
                                <label for="contract_term">Contract Term/Frq</label>
                                <input type="number" name="contract_term" class="form-control" id="contract_term" placeholder="month" required="">
                            </div>

                            <div class="form-group">
                                <label for="effective_rate">Effective Rate</label>
                                <input type="text" name="effective_rate" class="form-control" id="effective_rate" placeholder="" required="" autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="payment_method">Payment Method</label>
                                <select name="payment_method" id="payment_method" class="form-control" required="">
                                    <option value="">- Pilih -</option>
                                    <option value="Arrear">Arrear</option>
                                    <option value="Advance">Advance</option>
                                </select>
                            </div>




                            <button type="submit" name="proses" class="btn btn-success btn-sm">
                                Proses
                            </button>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="interest_calculation">Interest Calculation</label>
                                <input type="text" name="interest_calculation" class="form-control" id="interest_calculation" value="Monthly" readonly>
                            </div>

                            <div class="form-group">
                                <label for="golive_date">GoLive Date</label>
                                <input type="date" name="golive_date" class="form-control" id="golive_date" required="">
                            </div>

                            <div class="form-group">
                                <label for="handling_fee">Handling Fee</label>
                                <input type="number" name="handling_fee" class="form-control" id="handling_fee" placeholder="Rp" required="">
                                <span id="handling_fee_v"></span>
                            </div>

                            <div class="form-group">
                                <label for="installment">Angsuran Per-Bulan</label>
                                <input type="number" name="installment" class="form-control" id="installment" placeholder="Rp" required="">
                                <span id="installment_v"></span>
                            </div>

                            <div id="installment_date_group" class="form-group">
                                <label for="installment_date">Installment Date</label>

                                <span id="installment_date_error" style="display:block; color:red"></span>

                                <input type="text" name="installment_date" id="installment_date" class="form-control" required placeholder="Isi dengan angka (1 s/d 31), contoh : 8" autocomplete="off" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxLength="2">
                            </div>

                            <div class="form-group">
                                <label for="provision_fee">Provision Fee</label>
                                <input type="number" name="provision_fee" class="form-control" id="provision_fee" placeholder="Rp" required="">
                                <span id="provision_fee_v"></span>
                            </div>

                            <div class="form-group">
                                <label for="admin_fee">Admin Fee</label>
                                <input type="number" name="admin_fee" class="form-control" id="admin_fee" placeholder="Rp" required="">
                                <span id="admin_fee_v"></span>
                            </div>

                            <div class="form-group">
                                <label for="upload_file_bank">Upload File Dari Bank (PDF)</label>
                                <input type="file" name="file_bank" class="form-control" required="">
                            </div>

                            <div class="form-group">
                                <label for="upload_file_dleas">Upload Hasil Reconsile Dleas (JPG, PDF, Excel)</label>
                                <input type="file" name="file_dleas" class="form-control" required="">
                            </div>
                        </div>
                    </div>
                    <!-- END Inputan -->
                </div>

			</form>

		</div>
	</body>
</html>

<script src="js2/upload_angs_diluar_bank.js"></script>