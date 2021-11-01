<?php  

  // Data User Yang Login
  $nama = $this->libraryku->tampil_user()->nama;
  $username = $this->libraryku->tampil_user()->username;
  $level = $this->libraryku->tampil_user()->level;

  $tgl = date('d');
  $bln = date('m');
  $thn = date('Y');

?>


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section>
    <div class="container-fluid">

    <!-- Small boxes (Stat box) -->
      <div class="row" style="margin-top: 10px">

        <div class="col-lg-3 col-xs-3">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h4>Saldo Awal</h4>

              <p><?php echo number_format($row_salaw1['saldo_awal_real'],0,'.',','); ?></p>
            </div>
            <div class="icon">
              <i class="fa fa-money"></i>
            </div>
            <center><span>Data Tanggal : <?php echo $tanggal1; ?></span></center>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-3">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h4>Cash In</h4>

              <p><?php echo number_format($row_tCashinReal1['tRealisasi']) ?></p>
            </div>
            <div class="icon">
              <i class="fa fa-money"></i>
            </div>
            <center><span>Data Tanggal : <?php echo $tanggal1; ?></span></center>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-3">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h4>Cash Out</h4>

              <p><?php echo number_format($row_tCashoutReal1['tRealisasi']) ?></p>
            </div>
            <div class="icon">
              <i class="fa fa-money"></i>
            </div>
            <center><span>Data Tanggal : <?php echo $tanggal1; ?></span></center>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-3">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h4>Saldo Akhir</h4>

              <p>
                <?php
                    $tampil_saldo_akhir = $row_salaw1['saldo_awal_real'] + $row_tCashinReal1['tRealisasi'] - $row_tCashoutReal1['tRealisasi']; 
                    echo number_format($tampil_saldo_akhir,0,'.',',');
                ?>
              </p>
            </div>
            <div class="icon">
              <i class="fa fa-money"></i>
            </div>
            <center><span>Data Tanggal : <?php echo $tanggal1; ?></span></center>
          </div>
        </div>
        <!-- ./col -->
        
      </div>
      </div>
    </section>
    <!-- /.content -->

    
    

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data CashFlow (SUMMARY)
        <small>All Dept</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Box Cash In -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">CASH - IN & CASH - OUT</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>

        <div class="box-body table-responsive">
          
          <form method="post" action="<?php echo base_url().'home/index' ?>">
            <div class="row">

              <div class="col-sm-2">
                Cari Berdasarkan Tanggal:
              </div>

              <div class="col-sm-4">
                <input name="tanggal" type="date" class="form-control"></input>
              </div>

              <div class="col-sm-4">
                <button type="submit" name="cari" class="btn btn-warning"><i class="fa fa-search"></i> CARI</button>
                <a href="<?php echo base_url().'home' ?>" class="btn btn-success">Data Realtime</a>
              </div>

            </div>
          </form>
          
          <!-- Table Cash Flow  -->
          <table class="table table-striped table-bordered" style="margin-top: 10px;">

            <tr style="background-color: orange; color: white">
              <th rowspan="2" style="font-size: 150%"><span>CASHFLOW</span></th>
              
              <th colspan="2" style="text-align: center;"><?php echo $hari1 ?>, <?php echo $tanggal1; ?></th>
              <th colspan="2" style="text-align: center;"><?php echo $hari2 ?>, <?php echo $tanggal2; ?></th>
              <th colspan="2" style="text-align: center;"><?php echo $hari3 ?>, <?php echo $tanggal3; ?></th>
              <th colspan="2" style="text-align: center;"><?php echo $hari4 ?>, <?php echo $tanggal4; ?></th>
              <th colspan="2" style="text-align: center;"><?php echo $hari5 ?>, <?php echo $tanggal5; ?></th>
              <th colspan="2" style="text-align: center;">Total (Bulan Berjalan)</th>
            </tr>
            
            <tr>
              
              <th style="background-color: #FAF330; text-align: center;">Proyeksi</th>
              <th style="background-color: #B3FEAD; text-align: center;">Realisasi</th>
              <th colspan="2" style="background-color: #FAF330; text-align: center;">Proyeksi</th>
              
              <th colspan="2" style="background-color: #FAF330; text-align: center;">Proyeksi</th>
              
              <th colspan="2" style="background-color: #FAF330; text-align: center;">Proyeksi</th>
              
              <th colspan="2" style="background-color: #FAF330; text-align: center;">Proyeksi</th>

              <th style="background-color: #FAF330; text-align: center;" rowspan="3"><br>Total <br> Proyeksi</th>
              <th style="background-color: #B3FEAD; text-align: center;" rowspan="3"><br>Total <br> Realisasi</th>
              
            </tr>

            <tr style="background-color: #edfa7a">
              <th>Saldo Awal : </th>

              <?php  

                // Identifikasi Dulu Saldo Akhir Hari Ke-1, Untuk rentetan hari berikutnya (Proyeksi)

                // Cek Apaka Hari ini sudah ada realisasi nya (Cashin/Cashout) ?
                $koneksi = mysqli_connect('localhost','root','','db_cashflow');
                $q_cek_in = "SELECT * FROM tbl_cashinreal WHERE tanggal='$tanggal1'";
                $q_cek_out = "SELECT * FROM tbl_cashoutreal WHERE tanggal='$tanggal1'";

                $r_cek_in = mysqli_query($koneksi, $q_cek_in) or die ('error cek cashin');
                $r_cek_out = mysqli_query($koneksi, $q_cek_out) or die ('error cek cashout');

                $cek_in = mysqli_num_rows($r_cek_in);
                $cek_out = mysqli_num_rows($r_cek_out);

                if($cek_in>0 || $cek_out>0){ //Jika Realisasi Sudah Ada
                  $salakh_proj1_awal = $row_salaw1['saldo_awal_real'] + $row_tCashinReal1['tRealisasi'] - $row_tCashoutReal1['tRealisasi'];
                }else{ //Jika Realisasi Belum Ada
                  $salakh_proj1_awal = $row_salaw1['saldo_awal_proj'] + $row_tCashinProj1['tProjection'] - $row_tCashoutProj1['tProjection'];
                }

              
                $salakh_proj2_awal = $salakh_proj1_awal + $row_tCashinProj2['tProjection'] - $row_tCashoutProj2['tProjection'];

                $salakh_proj3_awal = $salakh_proj2_awal + $row_tCashinProj3['tProjection'] - $row_tCashoutProj3['tProjection'];

                $salakh_proj4_awal = $salakh_proj3_awal + $row_tCashinProj4['tProjection'] - $row_tCashoutProj4['tProjection'];

              ?>
              
              <td style="text-align: right;"><?php echo number_format($row_salaw1['saldo_awal_proj'],0,'.',','); ?></td>
              <td style="text-align: right; background-color: #c8f5a3;"><?php echo number_format($row_salaw1['saldo_awal_real'],0,'.',','); ?></td>
              
              <td style="text-align: right;" colspan="2"><?php echo number_format($salakh_proj1_awal,0,'.',','); ?></td>
              
              <td style="text-align: right;" colspan="2"><?php echo number_format($salakh_proj2_awal,0,'.',','); ?></td>
              
              <td style="text-align: right;" colspan="2"><?php echo number_format($salakh_proj3_awal,0,'.',','); ?></td>
              
              <td style="text-align: right;" colspan="2"><?php echo number_format($salakh_proj4_awal,0,'.',','); ?></td>
              
            </tr>

            <tr style="background-color: #56F88F">
              <th colspan="11">CASH-IN</th>
            </tr>

            <!-- Pengulangan Jenis Biaya -->
            <?php  
              $q_jb_cashin = $this->db->query("SELECT * FROM tbl_jb_cashin")->result_array();
              foreach($q_jb_cashin as $data){

                $kode_jb = $data['kode_jb'];

                // Proyeksi Cash-In Hari 1
                $cashinProj1 = $this->db->query("SELECT SUM(projection) AS total_proyeksi FROM tbl_cashinproj INNER JOIN tbl_sb_cashin USING(kode_status) WHERE tanggal='$tanggal1' AND kode_jb='$kode_jb'")->row_array();

                // Realisasi Cash-In Hari 1
                $cashinReal1 = $this->db->query("SELECT SUM(realisasi) AS total_realisasi FROM tbl_cashinreal INNER JOIN tbl_sb_cashin USING(kode_status) WHERE tanggal='$tanggal1' AND kode_jb='$kode_jb'")->row_array();

                // Proyeksi Cash-In Hari 2
                $cashinProj2 = $this->db->query("SELECT SUM(projection) AS total_proyeksi FROM tbl_cashinproj INNER JOIN tbl_sb_cashin USING(kode_status) WHERE tanggal='$tanggal2' AND kode_jb='$kode_jb'")->row_array();

                // Proyeksi Cash-In Hari 3
                $cashinProj3 = $this->db->query("SELECT SUM(projection) AS total_proyeksi FROM tbl_cashinproj INNER JOIN tbl_sb_cashin USING(kode_status) WHERE tanggal='$tanggal3' AND kode_jb='$kode_jb'")->row_array();

                // Proyeksi Cash-In Hari 4
                $cashinProj4 = $this->db->query("SELECT SUM(projection) AS total_proyeksi FROM tbl_cashinproj INNER JOIN tbl_sb_cashin USING(kode_status) WHERE tanggal='$tanggal4' AND kode_jb='$kode_jb'")->row_array();

                // Proyeksi Cash-In Hari 5
                $cashinProj5 = $this->db->query("SELECT SUM(projection) AS total_proyeksi FROM tbl_cashinproj INNER JOIN tbl_sb_cashin USING(kode_status) WHERE tanggal='$tanggal5' AND kode_jb='$kode_jb'")->row_array();

                // ...................................................................................................

                // Proyeksi Cash-In TOTAL di bulan berjalan per kategori biaya
                $cashinProjTotal = $this->db->query("SELECT SUM(projection) AS total_proyeksi FROM tbl_cashinproj INNER JOIN tbl_sb_cashin USING(kode_status) WHERE SUBSTR(tanggal, 4,2)='$bln' AND SUBSTR(tanggal, 7,4)='$thn' AND kode_jb='$kode_jb'")->row_array();

                // Realisasi Cash-In TOTAL di bulan berjalan per kategori biaya
                $cashinRealTotal = $this->db->query("SELECT SUM(realisasi) AS total_realisasi FROM tbl_cashinreal INNER JOIN tbl_sb_cashin USING(kode_status) WHERE SUBSTR(tanggal, 4,2)='$bln' AND SUBSTR(tanggal, 7,4)='$thn' AND kode_jb='$kode_jb'")->row_array();

                // ...................................................................................................

                // Proyeksi Cash-In TOTAL di bulan berjalan All
                $cashinProjGrandTotal = $this->db->query("SELECT SUM(projection) AS total_proyeksi FROM tbl_cashinproj INNER JOIN tbl_sb_cashin USING(kode_status) WHERE SUBSTR(tanggal, 4,2)='$bln' AND SUBSTR(tanggal, 7,4)='$thn'")->row_array();

                // Realisasi Cash-In TOTAL di bulan berjalan All
                $cashinRealGrandTotal = $this->db->query("SELECT SUM(realisasi) AS total_realisasi FROM tbl_cashinreal INNER JOIN tbl_sb_cashin USING(kode_status) WHERE SUBSTR(tanggal, 4,2)='$bln' AND SUBSTR(tanggal, 7,4)='$thn'")->row_array();
                
            ?>

            <tr>
              <td><?php echo $data['nama_jb'] ?></td>
              
              <!-- Data Proyeksi Cashin Hari - 1 -->
              <?php if($cashinProj1['total_proyeksi'] == ''){ ?>
                <td style="text-align: right;"><?php echo '0'; ?></td>
              <?php }else{ ?>
                <td style="text-align: right;"><?php echo number_format($cashinProj1['total_proyeksi'],0, '.', ',') ?></td>
              <?php } ?>
              
              <!-- Data Realisasi Cashin Hari - 1 -->
              <?php if($cashinReal1['total_realisasi'] == ''){ ?>
                <td style="text-align: right;"><?php echo '0'; ?></td>
              <?php }else{ ?>
                <td style="text-align: right;"><?php echo number_format($cashinReal1['total_realisasi'],0, '.', ',') ?></td>
              <?php } ?>

              <!-- Data Proyeksi Cashin Hari - 2 -->
              <?php if($cashinProj2['total_proyeksi'] == ''){ ?>
                <td style="text-align: right;" colspan="2"><?php echo '0'; ?></td>
              <?php }else{ ?>
                <td style="text-align: right;" colspan="2"><?php echo number_format($cashinProj2['total_proyeksi'],0, '.', ',') ?></td>
              <?php } ?>
              
              <!-- Data Proyeksi Cashin Hari - 3 -->
              <?php if($cashinProj3['total_proyeksi'] == ''){ ?>
                <td style="text-align: right;" colspan="2"><?php echo '0'; ?></td>
              <?php }else{ ?>
                <td style="text-align: right;" colspan="2"><?php echo number_format($cashinProj3['total_proyeksi'],0, '.', ',') ?></td>
              <?php } ?>
              
              <!-- Data Proyeksi Cashin Hari - 4 -->
              <?php if($cashinProj4['total_proyeksi'] == ''){ ?>
                <td style="text-align: right;" colspan="2"><?php echo '0'; ?></td>
              <?php }else{ ?>
                <td style="text-align: right;" colspan="2"><?php echo number_format($cashinProj4['total_proyeksi'],0, '.', ',') ?></td>
              <?php } ?>
              
              <!-- Data Proyeksi Cashin Hari - 5 -->
              <?php if($cashinProj5['total_proyeksi'] == ''){ ?>
                <td style="text-align: right;" colspan="2"><?php echo '0'; ?></td>
              <?php }else{ ?>
                <td style="text-align: right;" colspan="2"><?php echo number_format($cashinProj5['total_proyeksi'],0, '.', ',') ?></td>
              <?php } ?>

              <!-- Data Proyeksi Cashin Total Bulan Berjalan -->
              <?php if($cashinProjTotal['total_proyeksi'] == ''){ ?>
                <td style="text-align: right;"><?php echo '0'; ?></td>
              <?php }else{ ?>
                <td style="text-align: right;"><?php echo number_format($cashinProjTotal['total_proyeksi'],0, '.', ',') ?></td>
              <?php } ?>
              
              <!-- Data Realisasi Cashin Total Bulan Berjalan -->
              <?php if($cashinRealTotal['total_realisasi'] == ''){ ?>
                <td style="text-align: right;"><?php echo '0'; ?></td>
              <?php }else{ ?>
                <td style="text-align: right;"><?php echo number_format($cashinRealTotal['total_realisasi'],0, '.', ',') ?></td>
              <?php } ?>
              
            </tr>

            <?php } ?>

            <!-- Penutup Pengulangan Jenis Biaya -->

            <tr style="background-color: silver; color: white">
              <td>TOTAL CASH - IN</td>
              
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinProj1['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinReal1['tRealisasi']) ?></b></td>
              <td style="text-align: right;" colspan="2"><b><?php echo number_format($row_tCashinProj2['tProjection']) ?></b></td>
              
              <td style="text-align: right;" colspan="2"><b><?php echo number_format($row_tCashinProj3['tProjection']) ?></b></td>
              
              <td style="text-align: right;" colspan="2"><b><?php echo number_format($row_tCashinProj4['tProjection']) ?></b></td>
              
              <td style="text-align: right;" colspan="2"><b><?php echo number_format($row_tCashinProj5['tProjection']) ?></b></td>

              <td style="text-align: right;"><b><?php echo number_format($cashinProjGrandTotal['total_proyeksi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($cashinRealGrandTotal['total_realisasi']) ?></b></td>
              
            </tr>

            

            <!-- CASH OUT .................................................................................. -->

            <tr style="background-color: white; color: white">
              <td colspan="12"></td>
            </tr>

            <tr style="background-color: yellow">
              <th colspan="11">CASH-OUT</th>
              <th style="text-align: center;">Total Proyeksi</th>
              <th style="text-align: center; background-color: #B3FEAD;">Total Realisasi</th>
            </tr>

            <!-- Pengulangan Jenis Biaya -->
            <?php  
              $q_jb_cashout = $this->db->query("SELECT * FROM tbl_jb_cashout")->result_array();

              foreach($q_jb_cashout as $data){

                $kode_jb = $data['kode_jb'];

                // Proyeksi Cash-Out Hari 1
                $cashoutProj1 = $this->db->query("SELECT SUM(projection) AS total_proyeksi FROM tbl_cashoutproj INNER JOIN tbl_sb_cashout USING(kode_status) WHERE tanggal='$tanggal1' AND kode_jb='$kode_jb'")->row_array();

                // Realisasi Cash-Out Hari 1
                $cashoutReal1 = $this->db->query("SELECT SUM(realisasi) AS total_realisasi FROM tbl_cashoutreal INNER JOIN tbl_sb_cashout USING(kode_status) WHERE tanggal='$tanggal1' AND kode_jb='$kode_jb'")->row_array();

                // Proyeksi Cash-Out Hari 2
                $cashoutProj2 = $this->db->query("SELECT SUM(projection) AS total_proyeksi FROM tbl_cashoutproj INNER JOIN tbl_sb_cashout USING(kode_status) WHERE tanggal='$tanggal2' AND kode_jb='$kode_jb'")->row_array();

                // Proyeksi Cash-Out Hari 3
                $cashoutProj3 = $this->db->query("SELECT SUM(projection) AS total_proyeksi FROM tbl_cashoutproj INNER JOIN tbl_sb_cashout USING(kode_status) WHERE tanggal='$tanggal3' AND kode_jb='$kode_jb'")->row_array();

                // Proyeksi Cash-Out Hari 4
                $cashoutProj4 = $this->db->query("SELECT SUM(projection) AS total_proyeksi FROM tbl_cashoutproj INNER JOIN tbl_sb_cashout USING(kode_status) WHERE tanggal='$tanggal4' AND kode_jb='$kode_jb'")->row_array();

                // Proyeksi Cash-Out Hari 5
                $cashoutProj5 = $this->db->query("SELECT SUM(projection) AS total_proyeksi FROM tbl_cashoutproj INNER JOIN tbl_sb_cashout USING(kode_status) WHERE tanggal='$tanggal5' AND kode_jb='$kode_jb'")->row_array();

                // -----------------------------------------------------------------------------------------------------

                // Proyeksi Cash-Out Total Bulan Berjalan Berdasarkan Kode Jenis Biaya
                $cashoutProjTotal = $this->db->query("SELECT SUM(projection) AS total_proyeksi FROM tbl_cashoutproj INNER JOIN tbl_sb_cashout USING(kode_status) WHERE SUBSTR(tanggal, 4,2)='$bln' AND SUBSTR(tanggal, 7,4)='$thn' AND kode_jb='$kode_jb'")->row_array();

                // Realisasi Cash-Out Total Bulan Berjalan Berdasarkan Kode Jenis Biaya
                $cashoutRealTotal = $this->db->query("SELECT SUM(realisasi) AS total_realisasi FROM tbl_cashoutreal INNER JOIN tbl_sb_cashout USING(kode_status) WHERE SUBSTR(tanggal, 4,2)='$bln' AND SUBSTR(tanggal, 7,4)='$thn' AND kode_jb='$kode_jb'")->row_array();

                // Proyeksi Cash-Out Total Bulan Berjalan All
                $cashoutProjGrandTotal = $this->db->query("SELECT SUM(projection) AS total_proyeksi FROM tbl_cashoutproj INNER JOIN tbl_sb_cashout USING(kode_status) WHERE SUBSTR(tanggal, 4,2)='$bln' AND SUBSTR(tanggal, 7,4)='$thn'")->row_array();

                // Realisasi Cash-Out Total Bulan Berjalan All
                $cashoutRealGrandTotal = $this->db->query("SELECT SUM(realisasi) AS total_realisasi FROM tbl_cashoutreal INNER JOIN tbl_sb_cashout USING(kode_status) WHERE SUBSTR(tanggal, 4,2)='$bln' AND SUBSTR(tanggal, 7,4)='$thn'")->row_array();
                
            ?>

            <tr>
              <td><?php echo $data['nama_jb'] ?></td>
                          
              <!-- Data Proyeksi Cashout Hari - 1 -->
              <?php if($cashoutProj1['total_proyeksi'] == ''){ ?>
                <td style="text-align: right;"><?php echo '0'; ?></td>
              <?php }else{ ?>
                <td style="text-align: right;"><?php echo number_format($cashoutProj1['total_proyeksi'],0, '.', ',') ?></td>
              <?php } ?>
              
              <!-- Data Realisasi cashout Hari - 1 -->
              <?php if($cashoutReal1['total_realisasi'] == ''){ ?>
                <td style="text-align: right;"><?php echo '0'; ?></td>
              <?php }else{ ?>
                <td style="text-align: right;"><?php echo number_format($cashoutReal1['total_realisasi'],0, '.', ',') ?></td>
              <?php } ?>
              
              <!-- Data Proyeksi cashout Hari - 2 -->
              <?php if($cashoutProj2['total_proyeksi'] == ''){ ?>
                <td style="text-align: right;" colspan="2"><?php echo '0'; ?></td>
              <?php }else{ ?>
                <td style="text-align: right;" colspan="2"><?php echo number_format($cashoutProj2['total_proyeksi'],0, '.', ',') ?></td>
              <?php } ?>
              
              <!-- Data Proyeksi cashout Hari - 3 -->
              <?php if($cashoutProj3['total_proyeksi'] == ''){ ?>
                <td style="text-align: right;" colspan="2"><?php echo '0'; ?></td>
              <?php }else{ ?>
                <td style="text-align: right;" colspan="2"><?php echo number_format($cashoutProj3['total_proyeksi'],0, '.', ',') ?></td>
              <?php } ?>
              
              <!-- Data Proyeksi cashout Hari - 4 -->
              <?php if($cashoutProj4['total_proyeksi'] == ''){ ?>
                <td style="text-align: right;" colspan="2"><?php echo '0'; ?></td>
              <?php }else{ ?>
                <td style="text-align: right;" colspan="2"><?php echo number_format($cashoutProj4['total_proyeksi'],0, '.', ',') ?></td>
              <?php } ?>
              
              <!-- Data Proyeksi cashout Hari - 5 -->
              <?php if($cashoutProj5['total_proyeksi'] == ''){ ?>
                <td style="text-align: right;" colspan="2"><?php echo '0'; ?></td>
              <?php }else{ ?>
                <td style="text-align: right;" colspan="2"><?php echo number_format($cashoutProj5['total_proyeksi'],0, '.', ',') ?></td>
              <?php } ?>

              <!-- Data Proyeksi Cashout Total Bulan Berjalan Berdasarkan Kode Jenis Biaya -->
              <?php if($cashoutProjTotal['total_proyeksi'] == ''){ ?>
                <td style="text-align: right;"><?php echo '0'; ?></td>
              <?php }else{ ?>
                <td style="text-align: right;"><?php echo number_format($cashoutProjTotal['total_proyeksi'],0, '.', ',') ?></td>
              <?php } ?>
              
              <!-- Data Realisasi cashout Total Bulan Berjalan Berdasarkan Kode Jenis Biaya -->
              <?php if($cashoutRealTotal['total_realisasi'] == ''){ ?>
                <td style="text-align: right;"><?php echo '0'; ?></td>
              <?php }else{ ?>
                <td style="text-align: right;"><?php echo number_format($cashoutRealTotal['total_realisasi'],0, '.', ',') ?></td>
              <?php } ?>
          
            </tr>
            
            <?php } ?>
            
            <tr style="background-color: silver; color: white">
              <td>TOTAL CASH - OUT</td>
              
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutProj1['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutReal1['tRealisasi']) ?></b></td>

              <td style="text-align: right;" colspan="2"><b><?php echo number_format($row_tCashoutProj2['tProjection']) ?></b></td>
              
              <td style="text-align: right;" colspan="2"><b><?php echo number_format($row_tCashoutProj3['tProjection']) ?></b></td>
              
              <td style="text-align: right;" colspan="2"><b><?php echo number_format($row_tCashoutProj4['tProjection']) ?></b></td>
              
              <td style="text-align: right;" colspan="2"><b><?php echo number_format($row_tCashoutProj5['tProjection']) ?></b></td>

              <td style="text-align: right;"><b><?php echo number_format($cashoutProjGrandTotal['total_proyeksi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($cashoutRealGrandTotal['total_realisasi']) ?></b></td>
              
            </tr>

            <tr style="background-color: #bef05b">
              <td><b>NET IN-OUT</b></td>

              <th style="background-color: #FAF330"><center>Proj</center></th>
              <th style="background-color: #B3FEAD"><center>Real</center></th>
              <th colspan="2" style="background-color: #FAF330"><center>Proj</center></th>
              
              <th colspan="2" style="background-color: #FAF330"><center>Proj</center></th>
              
              <th colspan="2" style="background-color: #FAF330"><center>Proj</center></th>
             
              <th colspan="2" style="background-color: #FAF330"><center>Proj</center></th>
              
            </tr>
            

            <tr style="background-color: orange; font-weight: bold">
              <td><b>Saldo Akhir :</b></td>

              <?php  

                $salakh_proj1 = $row_salaw1['saldo_awal_proj'] + $row_tCashinProj1['tProjection'] - $row_tCashoutProj1['tProjection'];
                $salakh_real1 = $row_salaw1['saldo_awal_real'] + $row_tCashinReal1['tRealisasi'] - $row_tCashoutReal1['tRealisasi'];

                $salakh_proj2 = $salakh_proj1_awal + $row_tCashinProj2['tProjection'] - $row_tCashoutProj2['tProjection'];
                $salakh_real2 = $row_salaw2['saldo_awal_real'] + $row_tCashinReal2['tRealisasi'] - $row_tCashoutReal2['tRealisasi'];

                $salakh_proj3 = $salakh_proj2_awal + $row_tCashinProj3['tProjection'] - $row_tCashoutProj3['tProjection'];
                $salakh_real3 = $row_salaw3['saldo_awal_real'] + $row_tCashinReal3['tRealisasi'] - $row_tCashoutReal3['tRealisasi'];

                $salakh_proj4 = $salakh_proj3_awal + $row_tCashinProj4['tProjection'] - $row_tCashoutProj4['tProjection'];
                $salakh_real4 = $row_salaw4['saldo_awal_real'] + $row_tCashinReal4['tRealisasi'] - $row_tCashoutReal4['tRealisasi'];

                $salakh_proj5 = $salakh_proj4_awal + $row_tCashinProj5['tProjection'] - $row_tCashoutProj5['tProjection'];
                $salakh_real5 = $row_salaw5['saldo_awal_real'] + $row_tCashinReal5['tRealisasi'] - $row_tCashoutReal5['tRealisasi'];

              ?>
              
              <td style="text-align: right;"><?php echo number_format($salakh_proj1,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_real1,0,'.',',') ?></td>

              <td style="text-align: right;" colspan="2"><?php echo number_format($salakh_proj2,0,'.',',') ?></td>
              
              <td style="text-align: right;" colspan="2"><?php echo number_format($salakh_proj3,0,'.',',') ?></td>
              
              <td style="text-align: right;" colspan="2"><?php echo number_format($salakh_proj4,0,'.',',') ?></td>
              
              <td style="text-align: right;" colspan="2"><?php echo number_format($salakh_proj5,0,'.',',') ?></td>
              
            </tr>

            <tr style="background-color: silver">
              <td><b>Allocated Cash :</b></td>
              
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_allo1['allocated_cash'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_allo2['allocated_cash'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_allo3['allocated_cash'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_allo4['allocated_cash'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_allo5['allocated_cash'],0,'.',','); ?></td>
            </tr>

            <tr style="background-color: silver">
              <td><b>Ready Cash :</b></td>
              
              <?php  
                $ready_cash1 = $salakh_real1 - $row_allo1['allocated_cash'];
                $ready_cash2 = $salakh_proj2 - $row_allo2['allocated_cash'];
                $ready_cash3 = $salakh_proj3 - $row_allo3['allocated_cash'];
                $ready_cash4 = $salakh_proj4 - $row_allo4['allocated_cash'];
                $ready_cash5 = $salakh_proj5 - $row_allo5['allocated_cash'];
              ?>

              <td></td>
              <td style="text-align: right"><?php echo number_format($ready_cash1,0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($ready_cash2,0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($ready_cash3,0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($ready_cash4,0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($ready_cash5,0,'.',','); ?></td>
            </tr>

            <tr style="background-color: #edfa7a">
              <td><b>Kas Besar Cabang :</b></td>
              
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_kbc1['kbc'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_kbc2['kbc'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_kbc3['kbc'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_kbc4['kbc'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_kbc5['kbc'],0,'.',','); ?></td>
            </tr>

            <tr style="background-color: #edfa7a">
              <td><b>Deposito :</b></td>
              
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_deposito['deposito'],0,'.',','); ?>
              </td>

              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_deposito['deposito'],0,'.',','); ?>
              </td>

              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_deposito['deposito'],0,'.',','); ?>
              </td>

              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_deposito['deposito'],0,'.',','); ?>
              </td>

              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_deposito['deposito'],0,'.',','); ?>
              </td>

            </tr>


            <tr style="background-color: #edfa7a">
              <td><b>Rekening Back to Back :</b></td>
              
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_b2b['b2b'],0,'.',','); ?>
              </td>

              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_b2b['b2b'],0,'.',','); ?>
              </td>

              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_b2b['b2b'],0,'.',','); ?>
              </td>

              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_b2b['b2b'],0,'.',','); ?>
              </td>

              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_b2b['b2b'],0,'.',','); ?>
              </td>

            </tr>


            <tr style="background-color: orange; font-weight: bold">
              <td><b>Total Kas & Setara Kas :</b></td>

              <?php  

                $tot_kas1 = $salakh_real1 + $row_kbc1['kbc'] + $row_deposito['deposito'] + $row_b2b['b2b'];
                $tot_kas2 = $salakh_real2 + $row_kbc2['kbc'] + $row_deposito['deposito'] + $row_b2b['b2b'];
                $tot_kas2 = $salakh_real2 + $row_kbc2['kbc'] + $row_deposito['deposito'] + $row_b2b['b2b'];
                $tot_kas2 = $salakh_real2 + $row_kbc2['kbc'] + $row_deposito['deposito'] + $row_b2b['b2b'];
                $tot_kas2 = $salakh_real2 + $row_kbc2['kbc'] + $row_deposito['deposito'] + $row_b2b['b2b'];

              ?>
              
              <td colspan="2" style="text-align: right">
                <?php echo number_format($tot_kas1,0,'.',','); ?>
              </td>

              <!-- <td colspan="2" style="text-align: right">
                <?php echo number_format($tot_kas2,0,'.',','); ?>
              </td>

              <td colspan="2" style="text-align: right">
                <?php echo number_format($tot_kas3,0,'.',','); ?>
              </td>

              <td colspan="2" style="text-align: right">
                <?php echo number_format($tot_kas4,0,'.',','); ?>
              </td>

              <td colspan="2" style="text-align: right">
                <?php echo number_format($tot_kas5,0,'.',','); ?>
              </td> -->

            </tr>

            <!-- <tr style="background-color: #FBD073">
              <td><b>Note Finance :</b></td> -->
              
              <!-- <td colspan="2" style="text-align: center"> -->
                <!-- Button trigger modal -->
                <!-- <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#note1">
                  <i class="fa fa-eye"></i> View Note
                </button>
              </td> -->

              <!-- <td colspan="2" style="text-align: center"> -->
                <!-- Button trigger modal -->
                <!-- <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#note2">
                  <i class="fa fa-eye"></i> View Note
                </button>
              </td> -->

              <!-- <td colspan="2" style="text-align: center"> -->
                <!-- Button trigger modal -->
                <!-- <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#note3">
                  <i class="fa fa-eye"></i> View Note
                </button>
              </td> -->

              <!-- <td colspan="2" style="text-align: center"> -->
                <!-- Button trigger modal -->
                <!-- <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#note4">
                  <i class="fa fa-eye"></i> View Note
                </button>
              </td> -->

              <!-- <td colspan="2" style="text-align: center"> -->
                <!-- Button trigger modal -->
                <!-- <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#note5">
                  <i class="fa fa-eye"></i> View Note
                </button>
              </td>
            </tr> -->


            <!-- <tr style="background-color: #FBD073">
              <td><b>Status Closing :</b></td>
              
              <td colspan="2" style="text-align: center; font-weight: bold"><?php echo $row_closing1['status_closing'] ?></td>

              <td colspan="2" style="text-align: center; font-weight: bold"><?php echo $row_closing2['status_closing'] ?></td>

              <td colspan="2" style="text-align: center; font-weight: bold"><?php echo $row_closing3['status_closing'] ?></td>

              <td colspan="2" style="text-align: center; font-weight: bold"><?php echo $row_closing4['status_closing'] ?></td>

              <td colspan="2" style="text-align: center; font-weight: bold"><?php echo $row_closing5['status_closing'] ?></td>
            </tr> -->
            
          </table>
        

        </div>
        <!-- /.box-body -->
        
      </div>
      <!-- /.Box Cash In -->

    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->


<!-- Kumpulan Modal Notes -->
  
  <!-- Note Hari-1 -->
  <div class="modal fade" id="note1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Note <?php echo $tanggal1 ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="overflow: scroll;">
          <?php echo $row_note1['note']; ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Note Hari-2 -->
  <div class="modal fade" id="note2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Note <?php echo $tanggal2 ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="overflow: scroll;">
          <?php echo $row_note2['note']; ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Note Hari-3 -->
  <div class="modal fade" id="note3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Note <?php echo $tanggal3 ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="overflow: scroll;">
          <?php echo $row_note3['note']; ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Note Hari-4 -->
  <div class="modal fade" id="note4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Note <?php echo $tanggal4 ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="overflow: scroll;">
          <?php echo $row_note4['note']; ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Note Hari-5 -->
  <div class="modal fade" id="note5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Note <?php echo $tanggal5 ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="overflow: scroll;">
          <?php echo $row_note5['note']; ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        </div>
      </div>
    </div>
  </div>

<!-- Penutup Kumpulan Modal Notes -->