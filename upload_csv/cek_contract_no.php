<?php  
    require('koneksi.php');
    $contract_no = $_POST['contract_no'];

    $sql_contract = "SELECT * FROM tbl_angsuranluarbank WHERE contract_no = '$contract_no'";
    $res_contract = mysqli_query($koneksi, $sql_contract) or die('error fungsi');
    $num_contract = mysqli_num_rows($res_contract);

    if($num_contract > 0){
        echo '<span style="color:red;">Contract No. Sudah Digunakan Sebelumnya, Ganti Contract No. !</span>';
		echo '<input type="text" value="1" id="cek_contract_no" hidden>';
    }else{
        echo '<input type="text" value="0" id="cek_contract_no" hidden>';
    }
?>