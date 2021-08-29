<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="overflow-x: scroll;">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    <?php echo $this->session->flashdata('pesan_sukses'); ?>

      <h1>
        Data Cashflow Bulanan
        <small>All Dept</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <!-- Box Projection -->
        <div class="col-sm-8">
          
         <!-- Data Cashflow Bulanan -->
          <?php 
  // include 'koneksi.php';
  $koneksi = mysqli_connect('localhost','root','','db_cashflow') or die (mysqli_error($koneksi));

  
?>

  <table class="table table-bordered" style="overflow-x: scroll;">

    <!-- Baris 1 -->
    <tr style="background-color: orange">
      <td rowspan="2">CASHFLOW</td>
      <?php 
        $query = "SELECT * FROM tbl_tanggal";
        $result = mysqli_query($koneksi,$query) or die ('error fungsi ambil tanggal');
        while($row = mysqli_fetch_array($result)){
      ?>

      <td colspan="2"><?php echo $row['tanggal']; ?></td>

      <?php } ?>
    </tr>
    
    <!-- Baris 2 -->
    <tr>
      <?php
        $query = "SELECT * FROM tbl_tanggal";
        $result = mysqli_query($koneksi,$query) or die ('error fungsi ambil tanggal');
        while($row = mysqli_fetch_array($result)){
      ?>

      <td style="background-color: #faf623">Proj</td>
      <td style="background-color: #cef542">Real</td>

      <?php } ?>
    </tr>

    <!-- Baris Saldo Awal -->
    <tr style="background-color: #edfa7a">
      <td>SALDO AWAL</td>
      <?php
        $query = "SELECT * FROM tbl_tanggal";
        $result = mysqli_query($koneksi,$query) or die ('error fungsi ambil tanggal');
        while($row = mysqli_fetch_array($result)){
      ?>

        <?php  
          $tgl = $row['tanggal'];
          $query_salaw = "SELECT * FROM tbl_saldo_awal WHERE tanggal = '$tgl'";
          $result_salaw = mysqli_query($koneksi,$query_salaw) or die ('error fungsi');

          $row_salaw = mysqli_fetch_array($result_salaw);
        ?>
      <td><?php echo $row_salaw['saldo_awal_proj'] ?></td>
      <td><?php echo $row_salaw['saldo_awal_real'] ?></td>

      <?php } ?>
    </tr>
    </tr>


    <!-- Baris Tulisan Cash-In -->
    <tr style="background-color: #56F88F">
      <td>CASH-IN</td>
      <?php
        $query = "SELECT * FROM tbl_tanggal";
        $result = mysqli_query($koneksi,$query) or die ('error fungsi ambil tanggal');
        while($row = mysqli_fetch_array($result)){
      ?>

      <td></td>
      <td></td>

      <?php } ?>
    </tr>
    </tr>


    <!-- Baris 3 -->
    <tr style="background-color: white">
      <td>Pencairan Bank (A)</td>
      <?php
        $query = "SELECT * FROM tbl_tanggal";
        $result = mysqli_query($koneksi,$query) or die ('error fungsi ambil tanggal');
        while($row = mysqli_fetch_array($result)){
      ?>
        
        <?php  

          $tgl = $row['tanggal'];

          $quer_cashinprojA = "SELECT * FROM tbl_cashinproj WHERE kode_status='A' AND tanggal='$tgl'";
          $res_cashinprojA = mysqli_query($koneksi,$quer_cashinprojA) or die ('error A');
          $row_cipA = mysqli_fetch_array($res_cashinprojA);

          $quer_cashinrealA = "SELECT * FROM tbl_cashinreal WHERE kode_status='A' AND tanggal='$tgl'";
          $res_cashinrealA = mysqli_query($koneksi,$quer_cashinrealA) or die ('error A');
          $row_cirA = mysqli_fetch_array($res_cashinrealA);

        ?>
        <td><?php echo $row_cipA['projection']; ?></td>
        <td><?php echo $row_cirA['realisasi']; ?></td>

      <?php } ?>
    </tr>

    <!-- Baris 4 -->
    <tr style="background-color: #FDEEB9">
      <td>Penerimaan Angsuran Debitur (C+D)</td>
      <?php
        $query = "SELECT * FROM tbl_tanggal";
        $result = mysqli_query($koneksi,$query) or die ('error fungsi ambil tanggal');
        while($row = mysqli_fetch_array($result)){
      ?>
        <td></td>
        <td></td>
      <?php } ?>
    </tr>


    <!-- Baris 5 -->
    <tr style="background-color: white">
      <td>Setoran Angsuran Debitur (C)</td>
      <?php
        $query = "SELECT * FROM tbl_tanggal";
        $result = mysqli_query($koneksi,$query) or die ('error fungsi ambil tanggal');
        while($row = mysqli_fetch_array($result)){
      ?>
        
        <?php  

          $tgl = $row['tanggal'];

          $quer_cashinprojC = "SELECT * FROM tbl_cashinproj WHERE kode_status='C' AND tanggal='$tgl'";
          $res_cashinprojC = mysqli_query($koneksi,$quer_cashinprojC) or die ('error C');
          $row_cipC = mysqli_fetch_array($res_cashinprojA);

          $quer_cashinrealC = "SELECT * FROM tbl_cashinreal WHERE kode_status='C' AND tanggal='$tgl'";
          $res_cashinrealC = mysqli_query($koneksi,$quer_cashinrealC) or die ('error C');
          $row_cirC = mysqli_fetch_array($res_cashinrealA);

        ?>
        <td><?php echo $row_cipC['projection']; ?></td>
        <td><?php echo $row_cirC['realisasi']; ?></td>

      <?php } ?>
    </tr>


    <!-- Baris 6 -->
    <tr style="background-color: white">
      <td>Angsuran Dari Kantor POS (D)</td>
      <?php
        $query = "SELECT * FROM tbl_tanggal";
        $result = mysqli_query($koneksi,$query) or die ('error fungsi ambil tanggal');
        while($row = mysqli_fetch_array($result)){
      ?>
        
        <?php  

          $tgl = $row['tanggal'];

          $quer_cashinprojD = "SELECT * FROM tbl_cashinproj WHERE kode_status='D' AND tanggal='$tgl'";
          $res_cashinprojD = mysqli_query($koneksi,$quer_cashinprojD) or die ('error D');
          $row_cipD = mysqli_fetch_array($res_cashinprojD);

          $quer_cashinrealD = "SELECT * FROM tbl_cashinreal WHERE kode_status='D' AND tanggal='$tgl'";
          $res_cashinrealD = mysqli_query($koneksi,$quer_cashinrealD) or die ('error D');
          $row_cirD = mysqli_fetch_array($res_cashinrealD);

        ?>
        <td><?php echo $row_cipD['projection']; ?></td>
        <td><?php echo $row_cirD['realisasi']; ?></td>

      <?php } ?>
    </tr>


    <!-- Baris 7 -->
    <tr style="background-color: white">
      <td>Pelunasan Awal (E)</td>
      <?php
        $query = "SELECT * FROM tbl_tanggal";
        $result = mysqli_query($koneksi,$query) or die ('error fungsi ambil tanggal');
        while($row = mysqli_fetch_array($result)){
      ?>
        
        <?php  

          $tgl = $row['tanggal'];

          $quer_cashinprojE = "SELECT * FROM tbl_cashinproj WHERE kode_status='E' AND tanggal='$tgl'";
          $res_cashinprojE = mysqli_query($koneksi,$quer_cashinprojE) or die ('error E');
          $row_cipE = mysqli_fetch_array($res_cashinprojE);

          $quer_cashinrealE = "SELECT * FROM tbl_cashinreal WHERE kode_status='E' AND tanggal='$tgl'";
          $res_cashinrealE = mysqli_query($koneksi,$quer_cashinrealE) or die ('error E');
          $row_cirE = mysqli_fetch_array($res_cashinrealE);

        ?>
        <td><?php echo $row_cipE['projection']; ?></td>
        <td><?php echo $row_cirE['realisasi']; ?></td>

      <?php } ?>
    </tr>


    <!-- Baris 8 -->
    <tr style="background-color: white">
      <td>Penjualan AYDA (F)</td>
      <?php
        $query = "SELECT * FROM tbl_tanggal";
        $result = mysqli_query($koneksi,$query) or die ('error fungsi ambil tanggal');
        while($row = mysqli_fetch_array($result)){
      ?>
        
        <?php  

          $tgl = $row['tanggal'];

          $quer_cashinprojF = "SELECT * FROM tbl_cashinproj WHERE kode_status='F' AND tanggal='$tgl'";
          $res_cashinprojF = mysqli_query($koneksi,$quer_cashinprojF) or die ('error F');
          $row_cipF = mysqli_fetch_array($res_cashinprojF);

          $quer_cashinrealF = "SELECT * FROM tbl_cashinreal WHERE kode_status='F' AND tanggal='$tgl'";
          $res_cashinrealF = mysqli_query($koneksi,$quer_cashinrealF) or die ('error F');
          $row_cirF = mysqli_fetch_array($res_cashinrealF);

        ?>
        <td><?php echo $row_cipF['projection']; ?></td>
        <td><?php echo $row_cirF['realisasi']; ?></td>

      <?php } ?>
    </tr>


    <!-- Baris 9 -->
    <tr style="background-color: white">
      <td>Recovery WO (G)</td>
      <?php
        $query = "SELECT * FROM tbl_tanggal";
        $result = mysqli_query($koneksi,$query) or die ('error fungsi ambil tanggal');
        while($row = mysqli_fetch_array($result)){
      ?>
        
        <?php  

          $tgl = $row['tanggal'];

          $quer_cashinprojG = "SELECT * FROM tbl_cashinproj WHERE kode_status='G' AND tanggal='$tgl'";
          $res_cashinprojG = mysqli_query($koneksi,$quer_cashinprojG) or die ('error G');
          $row_cipG = mysqli_fetch_array($res_cashinprojG);

          $quer_cashinrealG = "SELECT * FROM tbl_cashinreal WHERE kode_status='G' AND tanggal='$tgl'";
          $res_cashinrealG = mysqli_query($koneksi,$quer_cashinrealG) or die ('error G');
          $row_cirG = mysqli_fetch_array($res_cashinrealG);

        ?>
        <td><?php echo $row_cipG['projection']; ?></td>
        <td><?php echo $row_cirG['realisasi']; ?></td>

      <?php } ?>
    </tr>


    <!-- Baris 10 -->
    <tr style="background-color: #FDEEB9">
      <td>Penerimaan Lain-lain (H+I+J+K+L+M)</td>
      <?php
        $query = "SELECT * FROM tbl_tanggal";
        $result = mysqli_query($koneksi,$query) or die ('error fungsi ambil tanggal');
        while($row = mysqli_fetch_array($result)){
      ?>
        <td></td>
        <td></td>

      <?php } ?>
    </tr>


    <!-- Baris 11 -->
    <tr style="background-color: white">
      <td>Ganti Klaim Asuransi (H)</td>
      <?php
        $query = "SELECT * FROM tbl_tanggal";
        $result = mysqli_query($koneksi,$query) or die ('error fungsi ambil tanggal');
        while($row = mysqli_fetch_array($result)){
      ?>
        
        <?php  

          $tgl = $row['tanggal'];

          $quer_cashinprojH = "SELECT * FROM tbl_cashinproj WHERE kode_status='H' AND tanggal='$tgl'";
          $res_cashinprojH = mysqli_query($koneksi,$quer_cashinprojH) or die ('error H');
          $row_cipH = mysqli_fetch_array($res_cashinprojH);

          $quer_cashinrealH = "SELECT * FROM tbl_cashinreal WHERE kode_status='H' AND tanggal='$tgl'";
          $res_cashinrealH = mysqli_query($koneksi,$quer_cashinrealH) or die ('error H');
          $row_cirH = mysqli_fetch_array($res_cashinrealH);

        ?>
        <td><?php echo $row_cipH['projection']; ?></td>
        <td><?php echo $row_cirH['realisasi']; ?></td>

      <?php } ?>
    </tr>


    <!-- Baris 12 -->
    <tr style="background-color: white">
      <td>Pembayaran Suryamas (I)</td>
      <?php
        $query = "SELECT * FROM tbl_tanggal";
        $result = mysqli_query($koneksi,$query) or die ('error fungsi ambil tanggal');
        while($row = mysqli_fetch_array($result)){
      ?>
        
        <?php  

          $tgl = $row['tanggal'];

          $quer_cashinprojI = "SELECT * FROM tbl_cashinproj WHERE kode_status='I' AND tanggal='$tgl'";
          $res_cashinprojI = mysqli_query($koneksi,$quer_cashinprojI) or die ('error I');
          $row_cipI = mysqli_fetch_array($res_cashinprojI);

          $quer_cashinrealI = "SELECT * FROM tbl_cashinreal WHERE kode_status='I' AND tanggal='$tgl'";
          $res_cashinrealI = mysqli_query($koneksi,$quer_cashinrealI) or die ('error I');
          $row_cirI = mysqli_fetch_array($res_cashinrealI);

        ?>
        <td><?php echo $row_cipI['projection']; ?></td>
        <td><?php echo $row_cirI['realisasi']; ?></td>

      <?php } ?>
    </tr>


    <!-- Baris 13 -->
    <tr style="background-color: white">
      <td>Penerimaan Cicilan (J)</td>
      <?php
        $query = "SELECT * FROM tbl_tanggal";
        $result = mysqli_query($koneksi,$query) or die ('error fungsi ambil tanggal');
        while($row = mysqli_fetch_array($result)){
      ?>
        
        <?php  

          $tgl = $row['tanggal'];

          $quer_cashinprojJ = "SELECT * FROM tbl_cashinproj WHERE kode_status='J' AND tanggal='$tgl'";
          $res_cashinprojJ = mysqli_query($koneksi,$quer_cashinprojJ) or die ('error J');
          $row_cipJ = mysqli_fetch_array($res_cashinprojJ);

          $quer_cashinrealJ = "SELECT * FROM tbl_cashinreal WHERE kode_status='J' AND tanggal='$tgl'";
          $res_cashinrealJ = mysqli_query($koneksi,$quer_cashinrealJ) or die ('error J');
          $row_cirJ = mysqli_fetch_array($res_cashinrealJ);

        ?>
        <td><?php echo $row_cipJ['projection']; ?></td>
        <td><?php echo $row_cirJ['realisasi']; ?></td>

      <?php } ?>
    </tr>


    <!-- Baris 14 -->
    <tr style="background-color: white">
      <td>Pengembalian Uang Muka (K)</td>
      <?php
        $query = "SELECT * FROM tbl_tanggal";
        $result = mysqli_query($koneksi,$query) or die ('error fungsi ambil tanggal');
        while($row = mysqli_fetch_array($result)){
      ?>
        
        <?php  

          $tgl = $row['tanggal'];

          $quer_cashinprojK = "SELECT * FROM tbl_cashinproj WHERE kode_status='K' AND tanggal='$tgl'";
          $res_cashinprojK = mysqli_query($koneksi,$quer_cashinprojK) or die ('error K');
          $row_cipK = mysqli_fetch_array($res_cashinprojK);

          $quer_cashinrealK = "SELECT * FROM tbl_cashinreal WHERE kode_status='K' AND tanggal='$tgl'";
          $res_cashinrealK = mysqli_query($koneksi,$quer_cashinrealK) or die ('error K');
          $row_cirK = mysqli_fetch_array($res_cashinrealK);

        ?>
        <td><?php echo $row_cipK['projection']; ?></td>
        <td><?php echo $row_cirK['realisasi']; ?></td>

      <?php } ?>
    </tr>


    <!-- Baris 15 -->
    <tr style="background-color: white">
      <td>Penjualan Kendaraan Inventaris (L)</td>
      <?php
        $query = "SELECT * FROM tbl_tanggal";
        $result = mysqli_query($koneksi,$query) or die ('error fungsi ambil tanggal');
        while($row = mysqli_fetch_array($result)){
      ?>
        
        <?php  

          $tgl = $row['tanggal'];

          $quer_cashinprojL = "SELECT * FROM tbl_cashinproj WHERE kode_status='L' AND tanggal='$tgl'";
          $res_cashinprojL = mysqli_query($koneksi,$quer_cashinprojL) or die ('error L');
          $row_cipL = mysqli_fetch_array($res_cashinprojL);

          $quer_cashinrealL = "SELECT * FROM tbl_cashinreal WHERE kode_status='L' AND tanggal='$tgl'";
          $res_cashinrealL = mysqli_query($koneksi,$quer_cashinrealL) or die ('error L');
          $row_cirL = mysqli_fetch_array($res_cashinrealL);

        ?>
        <td><?php echo $row_cipL['projection']; ?></td>
        <td><?php echo $row_cirL['realisasi']; ?></td>

      <?php } ?>
    </tr>


    <!-- Baris 16 -->
    <tr style="background-color: white">
      <td>Sewa Gedung (M)</td>
      <?php
        $query = "SELECT * FROM tbl_tanggal";
        $result = mysqli_query($koneksi,$query) or die ('error fungsi ambil tanggal');
        while($row = mysqli_fetch_array($result)){
      ?>
        
        <?php  

          $tgl = $row['tanggal'];

          $quer_cashinprojM = "SELECT * FROM tbl_cashinproj WHERE kode_status='M' AND tanggal='$tgl'";
          $res_cashinprojM = mysqli_query($koneksi,$quer_cashinprojM) or die ('error M');
          $row_cipM = mysqli_fetch_array($res_cashinprojM);

          $quer_cashinrealM = "SELECT * FROM tbl_cashinreal WHERE kode_status='M' AND tanggal='$tgl'";
          $res_cashinrealM = mysqli_query($koneksi,$quer_cashinrealM) or die ('error M');
          $row_cirM = mysqli_fetch_array($res_cashinrealM);

        ?>
        <td><?php echo $row_cipM['projection']; ?></td>
        <td><?php echo $row_cirM['realisasi']; ?></td>

      <?php } ?>
    </tr>


    <!-- Baris 17 -->
    <tr style="background-color: white">
      <td>Pencairan PRK (N)</td>
      <?php
        $query = "SELECT * FROM tbl_tanggal";
        $result = mysqli_query($koneksi,$query) or die ('error fungsi ambil tanggal');
        while($row = mysqli_fetch_array($result)){
      ?>
        
        <?php  

          $tgl = $row['tanggal'];

          $quer_cashinprojN = "SELECT * FROM tbl_cashinproj WHERE kode_status='N' AND tanggal='$tgl'";
          $res_cashinprojN = mysqli_query($koneksi,$quer_cashinprojN) or die ('error N');
          $row_cipN = mysqli_fetch_array($res_cashinprojN);

          $quer_cashinrealN = "SELECT * FROM tbl_cashinreal WHERE kode_status='N' AND tanggal='$tgl'";
          $res_cashinrealN = mysqli_query($koneksi,$quer_cashinrealN) or die ('error N');
          $row_cirN = mysqli_fetch_array($res_cashinrealN);

        ?>
        <td><?php echo $row_cipN['projection']; ?></td>
        <td><?php echo $row_cirN['realisasi']; ?></td>

      <?php } ?>
    </tr>


    <!-- Baris 18 -->
    <tr style="background-color: white">
      <td>Pinjaman/Hutang Pemegang Saham (O)</td>
      <?php
        $query = "SELECT * FROM tbl_tanggal";
        $result = mysqli_query($koneksi,$query) or die ('error fungsi ambil tanggal');
        while($row = mysqli_fetch_array($result)){
      ?>
        
        <?php  

          $tgl = $row['tanggal'];

          $quer_cashinprojO = "SELECT * FROM tbl_cashinproj WHERE kode_status='O' AND tanggal='$tgl'";
          $res_cashinprojO = mysqli_query($koneksi,$quer_cashinprojO) or die ('error O');
          $row_cipO = mysqli_fetch_array($res_cashinprojO);

          $quer_cashinrealO = "SELECT * FROM tbl_cashinreal WHERE kode_status='O' AND tanggal='$tgl'";
          $res_cashinrealO = mysqli_query($koneksi,$quer_cashinrealO) or die ('error O');
          $row_cirO = mysqli_fetch_array($res_cashinrealO);

        ?>
        <td><?php echo $row_cipO['projection']; ?></td>
        <td><?php echo $row_cirO['realisasi']; ?></td>

      <?php } ?>
    </tr>


     <!-- Baris 19 -->
    <tr style="background-color: white">
      <td>Setoran Modal (P)</td>
      <?php
        $query = "SELECT * FROM tbl_tanggal";
        $result = mysqli_query($koneksi,$query) or die ('error fungsi ambil tanggal');
        while($row = mysqli_fetch_array($result)){
      ?>
        
        <?php  

          $tgl = $row['tanggal'];

          $quer_cashinprojP = "SELECT * FROM tbl_cashinproj WHERE kode_status='P' AND tanggal='$tgl'";
          $res_cashinprojP = mysqli_query($koneksi,$quer_cashinprojP) or die ('error P');
          $row_cipP = mysqli_fetch_array($res_cashinprojP);

          $quer_cashinrealP = "SELECT * FROM tbl_cashinreal WHERE kode_status='P' AND tanggal='$tgl'";
          $res_cashinrealP = mysqli_query($koneksi,$quer_cashinrealP) or die ('error P');
          $row_cirP = mysqli_fetch_array($res_cashinrealP);

        ?>
        <td><?php echo $row_cipP['projection']; ?></td>
        <td><?php echo $row_cirP['realisasi']; ?></td>

      <?php } ?>
    </tr>


    <!-- Baris 20 -->
    <tr style="background-color: white">
      <td>Terima Pengembalian Pinjaman (Q)</td>
      <?php
        $query = "SELECT * FROM tbl_tanggal";
        $result = mysqli_query($koneksi,$query) or die ('error fungsi ambil tanggal');
        while($row = mysqli_fetch_array($result)){
      ?>
        
        <?php  

          $tgl = $row['tanggal'];

          $quer_cashinprojQ = "SELECT * FROM tbl_cashinproj WHERE kode_status='Q' AND tanggal='$tgl'";
          $res_cashinprojQ = mysqli_query($koneksi,$quer_cashinprojQ) or die ('error Q');
          $row_cipQ = mysqli_fetch_array($res_cashinprojQ);

          $quer_cashinrealQ = "SELECT * FROM tbl_cashinreal WHERE kode_status='Q' AND tanggal='$tgl'";
          $res_cashinrealQ = mysqli_query($koneksi,$quer_cashinrealQ) or die ('error Q');
          $row_cirQ = mysqli_fetch_array($res_cashinrealQ);

        ?>
        <td><?php echo $row_cipQ['projection']; ?></td>
        <td><?php echo $row_cirQ['realisasi']; ?></td>

      <?php } ?>
    </tr>


    <!-- Baris 21 -->
    <tr style="background-color: silver">
      <td>TOTAL CASH-IN</td>
      <?php
        $query = "SELECT * FROM tbl_tanggal";
        $result = mysqli_query($koneksi,$query) or die ('error fungsi ambil tanggal');
        while($row = mysqli_fetch_array($result)){
      ?>
        
        <?php  

          $tgl = $row['tanggal'];

          $quer_cashinprojTot = "SELECT SUM(projection) AS tot_projection FROM tbl_cashinproj WHERE tanggal='$tgl'";
          $res_cashinprojTot = mysqli_query($koneksi,$quer_cashinprojTot) or die ('error Tot');
          $row_cipTot = mysqli_fetch_array($res_cashinprojTot);

          $quer_cashinrealTot = "SELECT SUM(realisasi) AS tot_realisasi FROM tbl_cashinreal WHERE tanggal='$tgl'";
          $res_cashinrealTot = mysqli_query($koneksi,$quer_cashinrealTot) or die ('error Tot');
          $row_cirTot = mysqli_fetch_array($res_cashinrealTot);

        ?>
        <td><?php echo $row_cipTot['tot_projection']; ?></td>
        <td><?php echo $row_cirTot['tot_realisasi']; ?></td>

      <?php } ?>
    </tr>

  </table>

         <!-- Penutup Data Cashflow Bulanan -->

        </div>
        <!-- /.Box Projection -->

      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper