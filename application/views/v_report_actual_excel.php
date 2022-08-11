<?php  

	// Script Excel (Tanpa Tambahan Library) Apapun
	header("Cache-Control: no-cache, must-revalidate");
	header("Pragma: no-cache");
	header("Content-type: application/x-msexcel");
	header("Content-type: application/octet-stream");
	header("Content-Disposition: attachment; filename=reportActualCashflow.xls");

    switch ($bulan) {
        case 01: $bulan_nama = 'Januari'; break;
        case 02: $bulan_nama = 'Februari'; break;
        case 03: $bulan_nama = 'Maret'; break;
        case 04: $bulan_nama = 'April'; break;
        case 05: $bulan_nama = 'Mei'; break;
        case 06: $bulan_nama = 'Juni'; break;
        case 07: $bulan_nama = 'Juli'; break;
        case 08: $bulan_nama = 'Agustus'; break;
        case 09: $bulan_nama = 'September'; break;
        case 10: $bulan_nama = 'Oktober'; break;
        case 11: $bulan_nama = 'November'; break;
        case 12: $bulan_nama = 'Desember'; break;
        default: $bulan_nama = 'Bulan Tidak Ditemukan';
    }

    // Saldo Awal
    $saldo_awal = $data_saldo_awal['saldo_awal_real'];

    // Cashin
    $total_collection = $data_collection['total_cashin'];
    $total_penerimaan_csul = $data_penerimaan_csul['total_cashin'];
    $total_jual_mobil = $data_jual_mobil['total_cashin'];
    $total_et_inflow = $data_et_inflow['total_cashin'];
    $total_ayda = $data_ayda['total_cashin'];
    $total_recovery = $data_recovery['total_cashin'];
    $total_pindah_btb = $data_pindah_btb['total_cashin'];

    $total_cashin = $total_collection + $total_penerimaan_csul + $total_jual_mobil + $total_et_inflow + $total_ayda + $total_recovery + $total_pindah_btb;

    // Cashout
    $total_cicilan_bank = $data_cicilan_bank['total_cashout'];
    $total_cicilan_bank_lain = $data_cicilan_bank_lain['total_cashout'];
    $total_bunga_prk = $data_bunga_prk['total_cashout'];
    $total_asuransi_simas = $data_asuransi_simas['total_cashout'];
    $total_pelunasan_et = $data_pelunasan_et['total_cashout'];
    $total_biaya_rutin = $data_biaya_rutin['total_cashout'];
    $total_pindah_ke_btb = $data_pindah_ke_btb['total_cashout'];
    $total_new_booking = $data_new_booking['total_cashout'];
    $total_pesangon = $data_pesangon['total_cashout'];

    $total_cashout = $total_cicilan_bank + $total_cicilan_bank_lain + $total_bunga_prk + $total_asuransi_simas + $total_pelunasan_et +
                        $total_biaya_rutin + $total_pindah_ke_btb + $total_new_booking + $total_pesangon;

    // Saldo Akhir
    $saldo_akhir = $saldo_awal + $total_cashin - $total_cashout;

?>

<style>
	table,th,td{
		border-collapse: collapse;
		padding: 15px;
		margin: 10px;
		color: #000;
	}

	.str{ mso-number-format:\@; }
</style>

<div>
	<span style="font-size: 20px"><b>Report Actual Cashflow - <?php echo $bulan_nama.' '.$tahun ?></b></span>
</div>

<!-- Saldo Awal --> <br>
<table border="1">	
    <tr style="background-color:orange">
        <th style="text-align:center">Beginning Ballance</th>
        <th>:</th>
        <th style="text-align:right">
            <?php echo number_format($saldo_awal, 0, '.', ',') ?>
        </th>
    </tr>
</table>

<!-- Cash In --> <br>
<table border="1">	
    <tr style="background-color:#a4eb34">
        <th>Inflow From</th>
        <th>&nbsp;</th>
        <th>Actual</th>
    </tr>

    <tr>
        <td style="text-align:left">Collection</td>
        <td>:</td>
        <td><?php echo number_format($total_collection, 0, '.', ',') ?></td>
    </tr>

    <tr>
        <td style="text-align:left">Kopaja</td>
        <td>:</td>
        <td>0</td>
    </tr>

    <tr>
        <td style="text-align:left">Penerimaan Dari CSUL & BPR</td>
        <td>:</td>
        <td><?php echo number_format($total_penerimaan_csul, 0, '.', ',') ?></td>
    </tr>

    <tr>
        <td style="text-align:left">Jual Mobil Inventaris + Claim Asuransi</td>
        <td>:</td>
        <td><?php echo number_format($total_jual_mobil, 0, '.', ',') ?></td>
    </tr>

    <tr>
        <td style="text-align:left">ET Inflow</td>
        <td>:</td>
        <td><?php echo number_format($total_et_inflow, 0, '.', ',') ?></td>
    </tr>

    <tr>
        <td style="text-align:left">AYDA</td>
        <td>:</td>
        <td><?php echo number_format($total_ayda, 0, '.', ',') ?></td>
    </tr>

    <tr>
        <td style="text-align:left">Recovery</td>
        <td>:</td>
        <td><?php echo number_format($total_recovery, 0, '.', ',') ?></td>
    </tr>

    <tr>
        <td style="text-align:left">Pindah Buku Dari Rek BTB</td>
        <td>:</td>
        <td><?php echo number_format($total_pindah_btb, 0, '.', ',') ?></td>
    </tr>

    <tr style="background-color:#dee3e3">
        <td style="text-align:left">Total Inflow</td>
        <td>:</td>
        <td style="font-weight:bold"><?php echo number_format($total_cashin, 0, '.', ',') ?></td>
    </tr>

</table>



<!-- Cash Out --> <br>
<table border="1">	
    <tr style="background-color:#eb5f34">
        <th>Outflow</th>
        <th>&nbsp;</th>
        <th>Actual</th>
    </tr>

    <tr>
        <td style="text-align:left">Cicilan Bank</td>
        <td>:</td>
        <td><?php echo number_format($total_cicilan_bank, 0, '.', ',') ?></td>
    </tr>

    <tr>
        <td style="text-align:left">Cicilan Bank (Lain-lain)</td>
        <td>:</td>
        <td><?php echo number_format($total_cicilan_bank_lain, 0, '.', ',') ?></td>
    </tr>

    <tr>
        <td style="text-align:left">Bunga PRK</td>
        <td>:</td>
        <td><?php echo number_format($total_bunga_prk, 0, '.', ',') ?></td>
    </tr>

    <tr>
        <td style="text-align:left">Asuransi SIMAS & HAGATI</td>
        <td>:</td>
        <td><?php echo number_format($total_asuransi_simas, 0, '.', ',') ?></td>
    </tr>

    <tr>
        <td style="text-align:left">Pelunasan ET/AYDA/WO</td>
        <td>:</td>
        <td><?php echo number_format($total_pelunasan_et, 0, '.', ',') ?></td>
    </tr>

    <tr>
        <td style="text-align:left">Biaya (Rutin)</td>
        <td>:</td>
        <td><?php echo number_format($total_biaya_rutin, 0, '.', ',') ?></td>
    </tr>

    <tr>
        <td style="text-align:left">Pindah Buku Ke BTB</td>
        <td>:</td>
        <td><?php echo number_format($total_pindah_ke_btb, 0, '.', ',') ?></td>
    </tr>

    <tr>
        <td style="text-align:left" colspan="3">Settlement Kopaja - JTrust</td>
        <!-- <td>:</td>
        <td>0</td> -->
    </tr>

    <tr>
        <td style="text-align:left">&nbsp; &nbsp; Pesangon</td>
        <td>:</td>
        <td><?php echo number_format($total_pesangon, 0, '.', ',') ?></td>
    </tr>

    <tr>
        <td style="text-align:left">&nbsp; &nbsp; New Booking / Cair Dealer</td>
        <td>:</td>
        <td><?php echo number_format($total_new_booking, 0, '.', ',') ?></td>
    </tr>

    <tr style="background-color:#dee3e3">
        <td style="text-align:left">Total Outflow</td>
        <td>:</td>
        <td style="font-weight:bold"><?php echo number_format($total_cashout, 0, '.', ',') ?></td>
    </tr>

</table>


<!-- Saldo Akhir --> <br>
<table border="1">	
    <tr style="background-color:orange">
        <th style="text-align:center">Ending Ballance</th>
        <th>:</th>
        <td style="font-weight:bold"><?php echo number_format($saldo_akhir, 0, '.', ',') ?></td>
    </tr>

    <tr style="background-color:orange">
        <th style="text-align:center">Kas Besar Cabang</th>
        <td>:</td>
        <td style="font-weight:bold"><?php echo number_format($data_kbc['kbc'], 0, '.', ',') ?></td>
    </tr>
</table>