<?php  
  // 01-01-2022
  $tgl = substr($tanggal1, 0, 2);
  $bln = substr($tanggal1, 3, 2);
  $thn = substr($tanggal1, 6, 4);
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data CashFlow (Detail)
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
          
          <form method="post" action="<?php echo base_url().'cashflow_data/index' ?>">
            <div class="row">

              <div class="col-sm-2">
                Cari Berdasarkan Tanggal:
              </div>

              <div class="col-sm-4">
                <input name="tanggal" type="date" class="form-control"></input>
              </div>

              <div class="col-sm-4">
                <button type="submit" name="cari" class="btn btn-warning"><i class="fa fa-search"></i> CARI</button>
                <a href="<?php echo base_url().'cashflow_data' ?>" class="btn btn-success">Data Realtime</a>
              </div>

            </div>
          </form>
          
          <!-- Table Cash Flow  -->
          <table class="table table-striped table-bordered" style="margin-top: 10px;">

            <tr style="background-color: orange; color: white">
              <th rowspan="2" style="font-size: 150%"><span>CASHFLOW CARI</span></th>
              
              <th colspan="2" style="text-align: center;"><?php echo $hari1 ?>, <?php echo $tanggal1; ?></th>
              <th colspan="2" style="text-align: center;"><?php echo $hari2 ?>, <?php echo $tanggal2; ?></th>
              <th colspan="2" style="text-align: center;"><?php echo $hari3 ?>, <?php echo $tanggal3; ?></th>
              <th colspan="2" style="text-align: center;"><?php echo $hari4 ?>, <?php echo $tanggal4; ?></th>
              <th colspan="2" style="text-align: center;"><?php echo $hari5 ?>, <?php echo $tanggal5; ?></th>
              <th colspan="2" style="text-align: center;">Total (Bulan Berjalan)</th>
            </tr>
            
            <tr>
              
              <th style="background-color: #FAF330; text-align: center;">Proj</th>
              <th style="background-color: #B3FEAD; text-align: center;">Real</th>
              <th style="background-color: #FAF330; text-align: center;">Proj</th>
              <th style="background-color: #B3FEAD; text-align: center;">Real</th>
              <th style="background-color: #FAF330; text-align: center;">Proj</th>
              <th style="background-color: #B3FEAD; text-align: center;">Real</th>
              <th style="background-color: #FAF330; text-align: center;">Proj</th>
              <th style="background-color: #B3FEAD; text-align: center;">Real</th>
              <th style="background-color: #FAF330; text-align: center;">Proj</th>
              <th style="background-color: #B3FEAD; text-align: center;">Real</th>

              <th style="background-color: #FAF330; text-align: center;" rowspan="3"><br>Total <br> Proyeksi</th>
              <th style="background-color: #B3FEAD; text-align: center;" rowspan="3"><br>Total <br> Realisasi</th>

            </tr>

            <tr style="background-color: #edfa7a">
              <th>Saldo Awal : </th>
              
              <td style="text-align: right;"><?php echo number_format($row_salaw1['saldo_awal_proj'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw1['saldo_awal_real'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw2['saldo_awal_proj'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw2['saldo_awal_real'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw3['saldo_awal_proj'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw3['saldo_awal_real'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw4['saldo_awal_proj'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw4['saldo_awal_real'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw5['saldo_awal_proj'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw5['saldo_awal_real'],0,'.',','); ?></td>
            </tr>

            <tr style="background-color: #56F88F">
              <th colspan="11">CASH-IN</th>
            </tr>

            <!-- Pengulangan Jenis Biaya -->
            <?php  
              $q_jb_cashin = $this->db->query("SELECT * FROM tbl_jb_cashin ORDER BY posisi")->result_array();
              foreach($q_jb_cashin as $data){

                $kode_jb = $data['kode_jb'];

                // Proyeksi Cash-In Hari 1
                $cashinProj1 = $this->db->query("SELECT SUM(projection) AS total_proyeksi FROM tbl_cashinproj INNER JOIN tbl_sb_cashin USING(kode_status) WHERE tanggal='$tanggal1' AND kode_jb='$kode_jb' AND status_aktif=1")->row_array();

                // Realisasi Cash-In Hari 1
                $cashinReal1 = $this->db->query("SELECT SUM(realisasi) AS total_realisasi FROM tbl_cashinreal INNER JOIN tbl_sb_cashin USING(kode_status) WHERE tanggal='$tanggal1' AND kode_jb='$kode_jb' AND status_aktif=1")->row_array();

                // Proyeksi Cash-In Hari 2
                $cashinProj2 = $this->db->query("SELECT SUM(projection) AS total_proyeksi FROM tbl_cashinproj INNER JOIN tbl_sb_cashin USING(kode_status) WHERE tanggal='$tanggal2' AND kode_jb='$kode_jb' AND status_aktif=1")->row_array();

                // Realisasi Cash-In Hari 2
                $cashinReal2 = $this->db->query("SELECT SUM(realisasi) AS total_realisasi FROM tbl_cashinreal INNER JOIN tbl_sb_cashin USING(kode_status) WHERE tanggal='$tanggal2' AND kode_jb='$kode_jb' AND status_aktif=1")->row_array();

                // Proyeksi Cash-In Hari 3
                $cashinProj3 = $this->db->query("SELECT SUM(projection) AS total_proyeksi FROM tbl_cashinproj INNER JOIN tbl_sb_cashin USING(kode_status) WHERE tanggal='$tanggal3' AND kode_jb='$kode_jb' AND status_aktif=1")->row_array();

                // Realisasi Cash-In Hari 3
                $cashinReal3 = $this->db->query("SELECT SUM(realisasi) AS total_realisasi FROM tbl_cashinreal INNER JOIN tbl_sb_cashin USING(kode_status) WHERE tanggal='$tanggal3' AND kode_jb='$kode_jb' AND status_aktif=1")->row_array();

                // Proyeksi Cash-In Hari 4
                $cashinProj4 = $this->db->query("SELECT SUM(projection) AS total_proyeksi FROM tbl_cashinproj INNER JOIN tbl_sb_cashin USING(kode_status) WHERE tanggal='$tanggal4' AND kode_jb='$kode_jb' AND status_aktif=1")->row_array();

                // Realisasi Cash-In Hari 4
                $cashinReal4 = $this->db->query("SELECT SUM(realisasi) AS total_realisasi FROM tbl_cashinreal INNER JOIN tbl_sb_cashin USING(kode_status) WHERE tanggal='$tanggal4' AND kode_jb='$kode_jb' AND status_aktif=1")->row_array();

                // Proyeksi Cash-In Hari 5
                $cashinProj5 = $this->db->query("SELECT SUM(projection) AS total_proyeksi FROM tbl_cashinproj INNER JOIN tbl_sb_cashin USING(kode_status) WHERE tanggal='$tanggal5' AND kode_jb='$kode_jb' AND status_aktif=1")->row_array();

                // Realisasi Cash-In Hari 5
                $cashinReal5 = $this->db->query("SELECT SUM(realisasi) AS total_realisasi FROM tbl_cashinreal INNER JOIN tbl_sb_cashin USING(kode_status) WHERE tanggal='$tanggal5' AND kode_jb='$kode_jb' AND status_aktif=1")->row_array();

                // Proyeksi Cash-In Total Bulan Berjalan By Kode
                $cashinProjTotal = $this->db->query("SELECT SUM(projection) AS total_proyeksi FROM tbl_cashinproj INNER JOIN tbl_sb_cashin USING(kode_status) WHERE SUBSTR(tanggal, 4,2)='$bln' AND SUBSTR(tanggal, 7,4)='$thn' AND kode_jb='$kode_jb' AND status_aktif=1")->row_array();

                // Realisasi Cash-In Total Bulan Berjalan By Kode
                $cashinRealTotal = $this->db->query("SELECT SUM(realisasi) AS total_realisasi FROM tbl_cashinreal INNER JOIN tbl_sb_cashin USING(kode_status) WHERE SUBSTR(tanggal, 4,2)='$bln' AND SUBSTR(tanggal, 7,4)='$thn' AND kode_jb='$kode_jb' AND status_aktif=1")->row_array();
                
            ?>

            <tr style="background-color: #FDEEB9">
              
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
                <td style="text-align: right;"><?php echo '0'; ?></td>
              <?php }else{ ?>
                <td style="text-align: right;"><?php echo number_format($cashinProj2['total_proyeksi'],0, '.', ',') ?></td>
              <?php } ?>

              <!-- Data Realisasi Cashin Hari - 2 -->
              <?php if($cashinReal2['total_realisasi'] == ''){ ?>
                <td style="text-align: right;"><?php echo '0'; ?></td>
              <?php }else{ ?>
                <td style="text-align: right;"><?php echo number_format($cashinReal2['total_realisasi'],0, '.', ',') ?></td>
              <?php } ?>
              
              <!-- Data Proyeksi Cashin Hari - 3 -->
              <?php if($cashinProj3['total_proyeksi'] == ''){ ?>
                <td style="text-align: right;"><?php echo '0'; ?></td>
              <?php }else{ ?>
                <td style="text-align: right;"><?php echo number_format($cashinProj3['total_proyeksi'],0, '.', ',') ?></td>
              <?php } ?>

              <!-- Data Realisasi Cashin Hari - 3 -->
              <?php if($cashinReal3['total_realisasi'] == ''){ ?>
                <td style="text-align: right;"><?php echo '0'; ?></td>
              <?php }else{ ?>
                <td style="text-align: right;"><?php echo number_format($cashinReal3['total_realisasi'],0, '.', ',') ?></td>
              <?php } ?>
              
              <!-- Data Proyeksi Cashin Hari - 4 -->
              <?php if($cashinProj4['total_proyeksi'] == ''){ ?>
                <td style="text-align: right;"><?php echo '0'; ?></td>
              <?php }else{ ?>
                <td style="text-align: right;"><?php echo number_format($cashinProj4['total_proyeksi'],0, '.', ',') ?></td>
              <?php } ?>

              <!-- Data Realisasi Cashin Hari - 4 -->
              <?php if($cashinReal4['total_realisasi'] == ''){ ?>
                <td style="text-align: right;"><?php echo '0'; ?></td>
              <?php }else{ ?>
                <td style="text-align: right;"><?php echo number_format($cashinReal4['total_realisasi'],0, '.', ',') ?></td>
              <?php } ?>
              
              <!-- Data Proyeksi Cashin Hari - 5 -->
              <?php if($cashinProj5['total_proyeksi'] == ''){ ?>
                <td style="text-align: right;"><?php echo '0'; ?></td>
              <?php }else{ ?>
                <td style="text-align: right;"><?php echo number_format($cashinProj5['total_proyeksi'],0, '.', ',') ?></td>
              <?php } ?>

              <!-- Data Realisasi Cashin Hari - 5 -->
              <?php if($cashinReal5['total_realisasi'] == ''){ ?>
                <td style="text-align: right;"><?php echo '0'; ?></td>
              <?php }else{ ?>
                <td style="text-align: right;"><?php echo number_format($cashinReal5['total_realisasi'],0, '.', ',') ?></td>
              <?php } ?>

              <!-- Data Proyeksi Cashin Total Bulan Berjalan By Kode -->
              <?php if($cashinProjTotal['total_proyeksi'] == ''){ ?>
                <td style="text-align: right;"><?php echo '0'; ?></td>
              <?php }else{ ?>
                <td style="text-align: right;"><?php echo number_format($cashinProjTotal['total_proyeksi'],0, '.', ',') ?></td>
              <?php } ?>
              
              <!-- Data Realisasi Cashin Total Bulan Berjalan By Kode -->
              <?php if($cashinRealTotal['total_realisasi'] == ''){ ?>
                <td style="text-align: right;"><?php echo '0'; ?></td>
              <?php }else{ ?>
                <td style="text-align: right;"><?php echo number_format($cashinRealTotal['total_realisasi'],0, '.', ',') ?></td>
              <?php } ?>

            </tr>

              <!-- Pengulangan Sub Biaya -->

              <?php  
                $q_sb_cashin = $this->db->query("SELECT * FROM tbl_sb_cashin WHERE kode_jb='$kode_jb' AND status_aktif=1")->result_array();
                foreach($q_sb_cashin as $data_sb){

                  $kode_status = $data_sb['kode_status'];

                  // Proyeksi Cash-In Hari 1
                  $cashinProjD1 = $this->db->query("SELECT SUM(projection) AS proyeksi FROM tbl_cashinproj
                  WHERE tanggal='$tanggal1' AND kode_status='$kode_status'")->row_array();

                  // Realisasi Cash-In Hari 1
                  $cashinRealD1 = $this->db->query("SELECT SUM(realisasi) AS realisasi FROM tbl_cashinreal
                  WHERE tanggal='$tanggal1' AND kode_status='$kode_status'")->row_array();

                  // Proyeksi Cash-In Hari 2
                  $cashinProjD2 = $this->db->query("SELECT SUM(projection) AS proyeksi FROM tbl_cashinproj
                  WHERE tanggal='$tanggal2' AND kode_status='$kode_status'")->row_array();

                  // Realisasi Cash-In Hari 2
                  $cashinRealD2 = $this->db->query("SELECT SUM(realisasi) AS realisasi FROM tbl_cashinreal
                  WHERE tanggal='$tanggal2' AND kode_status='$kode_status'")->row_array();

                  // Proyeksi Cash-In Hari 3
                  $cashinProjD3 = $this->db->query("SELECT SUM(projection) AS proyeksi FROM tbl_cashinproj
                  WHERE tanggal='$tanggal3' AND kode_status='$kode_status'")->row_array();

                  // Realisasi Cash-In Hari 3
                  $cashinRealD3 = $this->db->query("SELECT SUM(realisasi) AS realisasi FROM tbl_cashinreal
                  WHERE tanggal='$tanggal3' AND kode_status='$kode_status'")->row_array();

                  // Proyeksi Cash-In Hari 4
                  $cashinProjD4 = $this->db->query("SELECT SUM(projection) AS proyeksi FROM tbl_cashinproj
                  WHERE tanggal='$tanggal4' AND kode_status='$kode_status'")->row_array();

                  // Realisasi Cash-In Hari 4
                  $cashinRealD4 = $this->db->query("SELECT SUM(realisasi) AS realisasi FROM tbl_cashinreal
                  WHERE tanggal='$tanggal4' AND kode_status='$kode_status'")->row_array();

                  // Proyeksi Cash-In Hari 5
                  $cashinProjD5 = $this->db->query("SELECT SUM(projection) AS proyeksi FROM tbl_cashinproj
                  WHERE tanggal='$tanggal5' AND kode_status='$kode_status'")->row_array();

                  // Realisasi Cash-In Hari 5
                  $cashinRealD5 = $this->db->query("SELECT SUM(realisasi) AS realisasi FROM tbl_cashinreal
                  WHERE tanggal='$tanggal5' AND kode_status='$kode_status'")->row_array();

                  // Proyeksi Cash-In Total Bulan Berjalan By Kode
                  $cashinProjDTotal = $this->db->query("SELECT SUM(projection) AS proyeksi FROM tbl_cashinproj
                  WHERE SUBSTR(tanggal, 4,2)='$bln' AND SUBSTR(tanggal, 7,4)='$thn' AND kode_status='$kode_status'")->row_array();

                  // Realisasi Cash-In Total Bulan Berjalan By Kode
                  $cashinRealDTotal = $this->db->query("SELECT SUM(realisasi) AS realisasi FROM tbl_cashinreal
                  WHERE SUBSTR(tanggal, 4,2)='$bln' AND SUBSTR(tanggal, 7,4)='$thn' AND kode_status='$kode_status'")->row_array();

              ?>

              <tr>
                <td style="text-indent: 40px;"><?php echo $data_sb['status'].' ('.$data_sb['kode_status'].')' ?></td>
                
                <!-- Data Proyeksi Sub Cashin Hari - 1 -->
                <?php if($cashinProjD1['proyeksi'] == ''){ ?>
                  <td style="text-align: right;"><?php echo '0'; ?></td>
                <?php }else{ ?>
                  <td style="text-align: right;"><?php echo number_format($cashinProjD1['proyeksi'],0, '.', ',') ?></td>
                <?php } ?>

                <!-- Data Realisasi Sub Cashin Hari - 1 -->
                <?php if($cashinRealD1['realisasi'] == ''){ ?>
                  <td style="text-align: right;"><?php echo '0'; ?></td>
                <?php }else{ ?>
                  <td style="text-align: right;"><?php echo number_format($cashinRealD1['realisasi'],0, '.', ',') ?></td>
                <?php } ?>

                <!-- Data Proyeksi Sub Cashin Hari - 2 -->
                <?php if($cashinProjD2['proyeksi'] == ''){ ?>
                  <td style="text-align: right;"><?php echo '0'; ?></td>
                <?php }else{ ?>
                  <td style="text-align: right;"><?php echo number_format($cashinProjD2['proyeksi'],0, '.', ',') ?></td>
                <?php } ?>

                <!-- Data Realisasi Sub Cashin Hari - 2 -->
                <?php if($cashinRealD2['realisasi'] == ''){ ?>
                  <td style="text-align: right;"><?php echo '0'; ?></td>
                <?php }else{ ?>
                  <td style="text-align: right;"><?php echo number_format($cashinRealD2['realisasi'],0, '.', ',') ?></td>
                <?php } ?>

                <!-- Data Proyeksi Sub Cashin Hari - 3 -->
                <?php if($cashinProjD3['proyeksi'] == ''){ ?>
                  <td style="text-align: right;"><?php echo '0'; ?></td>
                <?php }else{ ?>
                  <td style="text-align: right;"><?php echo number_format($cashinProjD3['proyeksi'],0, '.', ',') ?></td>
                <?php } ?>

                <!-- Data Realisasi Sub Cashin Hari - 3 -->
                <?php if($cashinRealD3['realisasi'] == ''){ ?>
                  <td style="text-align: right;"><?php echo '0'; ?></td>
                <?php }else{ ?>
                  <td style="text-align: right;"><?php echo number_format($cashinRealD3['realisasi'],0, '.', ',') ?></td>
                <?php } ?>

                <!-- Data Proyeksi Sub Cashin Hari - 4 -->
                <?php if($cashinProjD4['proyeksi'] == ''){ ?>
                  <td style="text-align: right;"><?php echo '0'; ?></td>
                <?php }else{ ?>
                  <td style="text-align: right;"><?php echo number_format($cashinProjD4['proyeksi'],0, '.', ',') ?></td>
                <?php } ?>

                <!-- Data Realisasi Sub Cashin Hari - 4 -->
                <?php if($cashinRealD4['realisasi'] == ''){ ?>
                  <td style="text-align: right;"><?php echo '0'; ?></td>
                <?php }else{ ?>
                  <td style="text-align: right;"><?php echo number_format($cashinRealD4['realisasi'],0, '.', ',') ?></td>
                <?php } ?>

                <!-- Data Proyeksi Sub Cashin Hari - 5 -->
                <?php if($cashinProjD5['proyeksi'] == ''){ ?>
                  <td style="text-align: right;"><?php echo '0'; ?></td>
                <?php }else{ ?>
                  <td style="text-align: right;"><?php echo number_format($cashinProjD5['proyeksi'],0, '.', ',') ?></td>
                <?php } ?>

                <!-- Data Realisasi Sub Cashin Hari - 5 -->
                <?php if($cashinRealD5['realisasi'] == ''){ ?>
                  <td style="text-align: right;"><?php echo '0'; ?></td>
                <?php }else{ ?>
                  <td style="text-align: right;"><?php echo number_format($cashinRealD5['realisasi'],0, '.', ',') ?></td>
                <?php } ?>

                <!-- Data Proyeksi Sub Cashin Total Bulan Berjalan By Biaya -->
                <?php if($cashinProjDTotal['proyeksi'] == ''){ ?>
                  <td style="text-align: right;"><?php echo '0'; ?></td>
                <?php }else{ ?>
                  <td style="text-align: right;"><?php echo number_format($cashinProjDTotal['proyeksi'],0, '.', ',') ?></td>
                <?php } ?>

                <!-- Data Realisasi Sub Cashin Total Bulan Berjalan By Biaya -->
                <?php if($cashinRealDTotal['realisasi'] == ''){ ?>
                  <td style="text-align: right;"><?php echo '0'; ?></td>
                <?php }else{ ?>
                  <td style="text-align: right;"><?php echo number_format($cashinRealDTotal['realisasi'],0, '.', ',') ?></td>
                <?php } ?>

              </tr>
              
              <?php } ?>
              <!-- Penutup Pengulangan Sub Biaya -->

            <?php } ?>

            

            <tr style="background-color: silver; color: white">
              <td>TOTAL CASH - IN</td>

              <?php  
                // Proyeksi Cash-In TOTAL di bulan berjalan All
                $cashinProjGrandTotal = $this->db->query("SELECT SUM(projection) AS total_proyeksi FROM tbl_cashinproj INNER JOIN tbl_sb_cashin USING(kode_status) WHERE SUBSTR(tanggal, 4,2)='$bln' AND SUBSTR(tanggal, 7,4)='$thn' AND status_aktif=1")->row_array();

                // Realisasi Cash-In TOTAL di bulan berjalan All
                $cashinRealGrandTotal = $this->db->query("SELECT SUM(realisasi) AS total_realisasi FROM tbl_cashinreal INNER JOIN tbl_sb_cashin USING(kode_status) WHERE SUBSTR(tanggal, 4,2)='$bln' AND SUBSTR(tanggal, 7,4)='$thn' AND status_aktif=1")->row_array();
              ?>
              
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinProj1['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinReal1['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinProj2['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinReal2['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinProj3['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinReal3['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinProj4['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinReal4['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinProj5['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinReal5['tRealisasi']) ?></b></td>

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
              $q_jb_cashout = $this->db->query("SELECT * FROM tbl_jb_cashout ORDER BY posisi")->result_array();
              foreach($q_jb_cashout as $data){

                $kode_jb = $data['kode_jb'];

                // Proyeksi Cash-In Hari 1
                $cashoutProj1 = $this->db->query("SELECT SUM(projection) AS total_proyeksi FROM tbl_cashoutproj INNER JOIN tbl_sb_cashout USING(kode_status) WHERE tanggal='$tanggal1' AND kode_jb='$kode_jb' AND status_aktif=1")->row_array();

                // Realisasi Cash-In Hari 1
                $cashoutReal1 = $this->db->query("SELECT SUM(realisasi) AS total_realisasi FROM tbl_cashoutreal INNER JOIN tbl_sb_cashout USING(kode_status) WHERE tanggal='$tanggal1' AND kode_jb='$kode_jb' AND status_aktif=1")->row_array();

                // Proyeksi Cash-In Hari 2
                $cashoutProj2 = $this->db->query("SELECT SUM(projection) AS total_proyeksi FROM tbl_cashoutproj INNER JOIN tbl_sb_cashout USING(kode_status) WHERE tanggal='$tanggal2' AND kode_jb='$kode_jb' AND status_aktif=1")->row_array();

                // Realisasi Cash-In Hari 2
                $cashoutReal2 = $this->db->query("SELECT SUM(realisasi) AS total_realisasi FROM tbl_cashoutreal INNER JOIN tbl_sb_cashout USING(kode_status) WHERE tanggal='$tanggal2' AND kode_jb='$kode_jb' AND status_aktif=1")->row_array();

                // Proyeksi Cash-In Hari 3
                $cashoutProj3 = $this->db->query("SELECT SUM(projection) AS total_proyeksi FROM tbl_cashoutproj INNER JOIN tbl_sb_cashout USING(kode_status) WHERE tanggal='$tanggal3' AND kode_jb='$kode_jb' AND status_aktif=1")->row_array();

                // Realisasi Cash-In Hari 3
                $cashoutReal3 = $this->db->query("SELECT SUM(realisasi) AS total_realisasi FROM tbl_cashoutreal INNER JOIN tbl_sb_cashout USING(kode_status) WHERE tanggal='$tanggal3' AND kode_jb='$kode_jb' AND status_aktif=1")->row_array();

                // Proyeksi Cash-In Hari 4
                $cashoutProj4 = $this->db->query("SELECT SUM(projection) AS total_proyeksi FROM tbl_cashoutproj INNER JOIN tbl_sb_cashout USING(kode_status) WHERE tanggal='$tanggal4' AND kode_jb='$kode_jb' AND status_aktif=1")->row_array();

                // Realisasi Cash-In Hari 4
                $cashoutReal4 = $this->db->query("SELECT SUM(realisasi) AS total_realisasi FROM tbl_cashoutreal INNER JOIN tbl_sb_cashout USING(kode_status) WHERE tanggal='$tanggal4' AND kode_jb='$kode_jb' AND status_aktif=1")->row_array();

                // Proyeksi Cash-In Hari 5
                $cashoutProj5 = $this->db->query("SELECT SUM(projection) AS total_proyeksi FROM tbl_cashoutproj INNER JOIN tbl_sb_cashout USING(kode_status) WHERE tanggal='$tanggal5' AND kode_jb='$kode_jb' AND status_aktif=1")->row_array();

                // Realisasi Cash-In Hari 5
                $cashoutReal5 = $this->db->query("SELECT SUM(realisasi) AS total_realisasi FROM tbl_cashoutreal INNER JOIN tbl_sb_cashout USING(kode_status) WHERE tanggal='$tanggal5' AND kode_jb='$kode_jb' AND status_aktif=1")->row_array();

                // Proyeksi Cash-Out Total Bulan Berjalan By Kode
                $cashoutProjTotal = $this->db->query("SELECT SUM(projection) AS total_proyeksi FROM tbl_cashoutproj INNER JOIN tbl_sb_cashout USING(kode_status) WHERE SUBSTR(tanggal, 4,2)='$bln' AND SUBSTR(tanggal, 7,4)='$thn' AND kode_jb='$kode_jb' AND status_aktif=1")->row_array();

                // Realisasi Cash-Out Total Bulan Berjalan By Kode
                $cashoutRealTotal = $this->db->query("SELECT SUM(realisasi) AS total_realisasi FROM tbl_cashoutreal INNER JOIN tbl_sb_cashout USING(kode_status) WHERE SUBSTR(tanggal, 4,2)='$bln' AND SUBSTR(tanggal, 7,4)='$thn' AND kode_jb='$kode_jb' AND status_aktif=1")->row_array();
                
            ?>

            <tr style="background-color: #FDEEB9">
            <td><?php echo $data['nama_jb'] ?></td>
              
              <!-- Data Proyeksi cashout Hari - 1 -->
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
                <td style="text-align: right;"><?php echo '0'; ?></td>
              <?php }else{ ?>
                <td style="text-align: right;"><?php echo number_format($cashoutProj2['total_proyeksi'],0, '.', ',') ?></td>
              <?php } ?>

              <!-- Data Realisasi cashout Hari - 2 -->
              <?php if($cashoutReal2['total_realisasi'] == ''){ ?>
                <td style="text-align: right;"><?php echo '0'; ?></td>
              <?php }else{ ?>
                <td style="text-align: right;"><?php echo number_format($cashoutReal2['total_realisasi'],0, '.', ',') ?></td>
              <?php } ?>
              
              <!-- Data Proyeksi cashout Hari - 3 -->
              <?php if($cashoutProj3['total_proyeksi'] == ''){ ?>
                <td style="text-align: right;"><?php echo '0'; ?></td>
              <?php }else{ ?>
                <td style="text-align: right;"><?php echo number_format($cashoutProj3['total_proyeksi'],0, '.', ',') ?></td>
              <?php } ?>

              <!-- Data Realisasi cashout Hari - 3 -->
              <?php if($cashoutReal3['total_realisasi'] == ''){ ?>
                <td style="text-align: right;"><?php echo '0'; ?></td>
              <?php }else{ ?>
                <td style="text-align: right;"><?php echo number_format($cashoutReal3['total_realisasi'],0, '.', ',') ?></td>
              <?php } ?>
              
              <!-- Data Proyeksi cashout Hari - 4 -->
              <?php if($cashoutProj4['total_proyeksi'] == ''){ ?>
                <td style="text-align: right;"><?php echo '0'; ?></td>
              <?php }else{ ?>
                <td style="text-align: right;"><?php echo number_format($cashoutProj4['total_proyeksi'],0, '.', ',') ?></td>
              <?php } ?>

              <!-- Data Realisasi cashout Hari - 4 -->
              <?php if($cashoutReal4['total_realisasi'] == ''){ ?>
                <td style="text-align: right;"><?php echo '0'; ?></td>
              <?php }else{ ?>
                <td style="text-align: right;"><?php echo number_format($cashoutReal4['total_realisasi'],0, '.', ',') ?></td>
              <?php } ?>
              
              <!-- Data Proyeksi cashout Hari - 5 -->
              <?php if($cashoutProj5['total_proyeksi'] == ''){ ?>
                <td style="text-align: right;"><?php echo '0'; ?></td>
              <?php }else{ ?>
                <td style="text-align: right;"><?php echo number_format($cashoutProj5['total_proyeksi'],0, '.', ',') ?></td>
              <?php } ?>

              <!-- Data Realisasi cashout Hari - 5 -->
              <?php if($cashoutReal5['total_realisasi'] == ''){ ?>
                <td style="text-align: right;"><?php echo '0'; ?></td>
              <?php }else{ ?>
                <td style="text-align: right;"><?php echo number_format($cashoutReal5['total_realisasi'],0, '.', ',') ?></td>
              <?php } ?>

              <!-- Data Proyeksi Cashout Total Bulan Berjalan By Kode -->
              <?php if($cashoutProjTotal['total_proyeksi'] == ''){ ?>
                <td style="text-align: right;"><?php echo '0'; ?></td>
              <?php }else{ ?>
                <td style="text-align: right;"><?php echo number_format($cashoutProjTotal['total_proyeksi'],0, '.', ',') ?></td>
              <?php } ?>
              
              <!-- Data Realisasi cashout Total Bulan Berjalan By Kode -->
              <?php if($cashoutRealTotal['total_realisasi'] == ''){ ?>
                <td style="text-align: right;"><?php echo '0'; ?></td>
              <?php }else{ ?>
                <td style="text-align: right;"><?php echo number_format($cashoutRealTotal['total_realisasi'],0, '.', ',') ?></td>
              <?php } ?>

            </tr>
              
              <!-- Pengulangan Sub Biaya -->

              <?php  
                $q_sb_cashout = $this->db->query("SELECT * FROM tbl_sb_cashout WHERE kode_jb='$kode_jb' AND status_aktif=1")->result_array();
                foreach($q_sb_cashout as $data_sb){

                  $kode_status = $data_sb['kode_status'];

                  // Proyeksi Cash-In Hari 1
                  $cashoutProjD1 = $this->db->query("SELECT SUM(projection) AS proyeksi FROM tbl_cashoutproj
                  WHERE tanggal='$tanggal1' AND kode_status='$kode_status'")->row_array();

                  // Realisasi Cash-In Hari 1
                  $cashoutRealD1 = $this->db->query("SELECT SUM(realisasi) AS realisasi FROM tbl_cashoutreal
                  WHERE tanggal='$tanggal1' AND kode_status='$kode_status'")->row_array();

                  // Proyeksi Cash-In Hari 2
                  $cashoutProjD2 = $this->db->query("SELECT SUM(projection) AS proyeksi FROM tbl_cashoutproj
                  WHERE tanggal='$tanggal2' AND kode_status='$kode_status'")->row_array();

                  // Realisasi Cash-In Hari 2
                  $cashoutRealD2 = $this->db->query("SELECT SUM(realisasi) AS realisasi FROM tbl_cashoutreal
                  WHERE tanggal='$tanggal2' AND kode_status='$kode_status'")->row_array();

                  // Proyeksi Cash-In Hari 3
                  $cashoutProjD3 = $this->db->query("SELECT SUM(projection) AS proyeksi FROM tbl_cashoutproj
                  WHERE tanggal='$tanggal3' AND kode_status='$kode_status'")->row_array();

                  // Realisasi Cash-In Hari 3
                  $cashoutRealD3 = $this->db->query("SELECT SUM(realisasi) AS realisasi FROM tbl_cashoutreal
                  WHERE tanggal='$tanggal3' AND kode_status='$kode_status'")->row_array();

                  // Proyeksi Cash-In Hari 4
                  $cashoutProjD4 = $this->db->query("SELECT SUM(projection) AS proyeksi FROM tbl_cashoutproj
                  WHERE tanggal='$tanggal4' AND kode_status='$kode_status'")->row_array();

                  // Realisasi Cash-In Hari 4
                  $cashoutRealD4 = $this->db->query("SELECT SUM(realisasi) AS realisasi FROM tbl_cashoutreal
                  WHERE tanggal='$tanggal4' AND kode_status='$kode_status'")->row_array();

                  // Proyeksi Cash-In Hari 5
                  $cashoutProjD5 = $this->db->query("SELECT SUM(projection) AS proyeksi FROM tbl_cashoutproj
                  WHERE tanggal='$tanggal5' AND kode_status='$kode_status'")->row_array();

                  // Realisasi Cash-In Hari 5
                  $cashoutRealD5 = $this->db->query("SELECT SUM(realisasi) AS realisasi FROM tbl_cashoutreal
                  WHERE tanggal='$tanggal5' AND kode_status='$kode_status'")->row_array();

                  // Proyeksi Cash-In Total Bulan Berjalan By Biaya
                  $cashoutProjDTotal = $this->db->query("SELECT SUM(projection) AS proyeksi FROM tbl_cashoutproj
                  WHERE SUBSTR(tanggal, 4,2)='$bln' AND SUBSTR(tanggal, 7,4)='$thn' AND kode_status='$kode_status'")->row_array();

                  // Realisasi Cash-In Total Bulan Berjalan By Biaya
                  $cashoutRealDTotal = $this->db->query("SELECT SUM(realisasi) AS realisasi FROM tbl_cashoutreal
                  WHERE SUBSTR(tanggal, 4,2)='$bln' AND SUBSTR(tanggal, 7,4)='$thn' AND kode_status='$kode_status'")->row_array();

              ?>

              <tr>
              <td style="text-indent: 40px;"><?php echo $data_sb['status'].' ('.$data_sb['kode_status'].')' ?></td>
                
                <!-- Data Proyeksi Sub cashout Hari - 1 -->
                <?php if($cashoutProjD1['proyeksi'] == ''){ ?>
                  <td style="text-align: right;"><?php echo '0'; ?></td>
                <?php }else{ ?>
                  <td style="text-align: right;"><?php echo number_format($cashoutProjD1['proyeksi'],0, '.', ',') ?></td>
                <?php } ?>

                <!-- Data Realisasi Sub cashout Hari - 1 -->
                <?php if($cashoutRealD1['realisasi'] == ''){ ?>
                  <td style="text-align: right;"><?php echo '0'; ?></td>
                <?php }else{ ?>
                  <td style="text-align: right;"><?php echo number_format($cashoutRealD1['realisasi'],0, '.', ',') ?></td>
                <?php } ?>

                <!-- Data Proyeksi Sub cashout Hari - 2 -->
                <?php if($cashoutProjD2['proyeksi'] == ''){ ?>
                  <td style="text-align: right;"><?php echo '0'; ?></td>
                <?php }else{ ?>
                  <td style="text-align: right;"><?php echo number_format($cashoutProjD2['proyeksi'],0, '.', ',') ?></td>
                <?php } ?>

                <!-- Data Realisasi Sub cashout Hari - 2 -->
                <?php if($cashoutRealD2['realisasi'] == ''){ ?>
                  <td style="text-align: right;"><?php echo '0'; ?></td>
                <?php }else{ ?>
                  <td style="text-align: right;"><?php echo number_format($cashoutRealD2['realisasi'],0, '.', ',') ?></td>
                <?php } ?>

                <!-- Data Proyeksi Sub cashout Hari - 3 -->
                <?php if($cashoutProjD3['proyeksi'] == ''){ ?>
                  <td style="text-align: right;"><?php echo '0'; ?></td>
                <?php }else{ ?>
                  <td style="text-align: right;"><?php echo number_format($cashoutProjD3['proyeksi'],0, '.', ',') ?></td>
                <?php } ?>

                <!-- Data Realisasi Sub cashout Hari - 3 -->
                <?php if($cashoutRealD3['realisasi'] == ''){ ?>
                  <td style="text-align: right;"><?php echo '0'; ?></td>
                <?php }else{ ?>
                  <td style="text-align: right;"><?php echo number_format($cashoutRealD3['realisasi'],0, '.', ',') ?></td>
                <?php } ?>

                <!-- Data Proyeksi Sub cashout Hari - 4 -->
                <?php if($cashoutProjD4['proyeksi'] == ''){ ?>
                  <td style="text-align: right;"><?php echo '0'; ?></td>
                <?php }else{ ?>
                  <td style="text-align: right;"><?php echo number_format($cashoutProjD4['proyeksi'],0, '.', ',') ?></td>
                <?php } ?>

                <!-- Data Realisasi Sub cashout Hari - 4 -->
                <?php if($cashoutRealD4['realisasi'] == ''){ ?>
                  <td style="text-align: right;"><?php echo '0'; ?></td>
                <?php }else{ ?>
                  <td style="text-align: right;"><?php echo number_format($cashoutRealD4['realisasi'],0, '.', ',') ?></td>
                <?php } ?>

                <!-- Data Proyeksi Sub cashout Hari - 5 -->
                <?php if($cashoutProjD5['proyeksi'] == ''){ ?>
                  <td style="text-align: right;"><?php echo '0'; ?></td>
                <?php }else{ ?>
                  <td style="text-align: right;"><?php echo number_format($cashoutProjD5['proyeksi'],0, '.', ',') ?></td>
                <?php } ?>

                <!-- Data Realisasi Sub cashout Hari - 5 -->
                <?php if($cashoutRealD5['realisasi'] == ''){ ?>
                  <td style="text-align: right;"><?php echo '0'; ?></td>
                <?php }else{ ?>
                  <td style="text-align: right;"><?php echo number_format($cashoutRealD5['realisasi'],0, '.', ',') ?></td>
                <?php } ?>

                <!-- Data Proyeksi Sub cashout Total Bulan Berjalan By Biaya -->
                <?php if($cashoutProjDTotal['proyeksi'] == ''){ ?>
                  <td style="text-align: right;"><?php echo '0'; ?></td>
                <?php }else{ ?>
                  <td style="text-align: right;"><?php echo number_format($cashoutProjDTotal['proyeksi'],0, '.', ',') ?></td>
                <?php } ?>

                <!-- Data Realisasi Sub cashout Total Bulan Berjalan By Biaya -->
                <?php if($cashoutRealDTotal['realisasi'] == ''){ ?>
                  <td style="text-align: right;"><?php echo '0'; ?></td>
                <?php }else{ ?>
                  <td style="text-align: right;"><?php echo number_format($cashoutRealDTotal['realisasi'],0, '.', ',') ?></td>
                <?php } ?>

              </tr>

              <?php } ?>
              <!-- Penutup Pengulangan Sub Biaya -->

            <?php } ?>

            <tr style="background-color: silver; color: white">
              <td>TOTAL CASH - OUT</td>

              <?php  
                // Proyeksi Cash-Out Total Bulan Berjalan All
                $cashoutProjGrandTotal = $this->db->query("SELECT SUM(projection) AS total_proyeksi FROM tbl_cashoutproj INNER JOIN tbl_sb_cashout USING(kode_status) WHERE SUBSTR(tanggal, 4,2)='$bln' AND SUBSTR(tanggal, 7,4)='$thn' AND status_aktif=1")->row_array();

                // Realisasi Cash-Out Total Bulan Berjalan All
                $cashoutRealGrandTotal = $this->db->query("SELECT SUM(realisasi) AS total_realisasi FROM tbl_cashoutreal INNER JOIN tbl_sb_cashout USING(kode_status) WHERE SUBSTR(tanggal, 4,2)='$bln' AND SUBSTR(tanggal, 7,4)='$thn' AND status_aktif=1")->row_array();
              ?>
              
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutProj1['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutReal1['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutProj2['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutReal2['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutProj3['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutReal3['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutProj4['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutReal4['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutProj5['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutReal5['tRealisasi']) ?></b></td>

              <td style="text-align: right;"><b><?php echo number_format($cashoutProjGrandTotal['total_proyeksi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($cashoutRealGrandTotal['total_realisasi']) ?></b></td>
            </tr>

            <tr style="background-color: #bef05b">
              <td><b>NET IN-OUT</b></td>

              <th style="background-color: #FAF330"><center>Proj</center></th>
              <th style="background-color: #B3FEAD"><center>Real</center></th>
              <th style="background-color: #FAF330"><center>Proj</center></th>
              <th style="background-color: #B3FEAD"><center>Real</center></th>
              <th style="background-color: #FAF330"><center>Proj</center></th>
              <th style="background-color: #B3FEAD"><center>Real</center></th>
              <th style="background-color: #FAF330"><center>Proj</center></th>
              <th style="background-color: #B3FEAD"><center>Real</center></th>
              <th style="background-color: #FAF330"><center>Proj</center></th>
              <th style="background-color: #B3FEAD"><center>Real</center></th>
            </tr>
            

            <tr style="background-color: orange">
              <td><b>Saldo Akhir (A) :</b></td>

              <?php  

                $salakh_proj1 = $row_salaw1['saldo_awal_proj'] + $row_tCashinProj1['tProjection'] - $row_tCashoutProj1['tProjection'];
                $salakh_real1 = $row_salaw1['saldo_awal_real'] + $row_tCashinReal1['tRealisasi'] - $row_tCashoutReal1['tRealisasi'];

                $salakh_proj2 = $row_salaw2['saldo_awal_proj'] + $row_tCashinProj2['tProjection'] - $row_tCashoutProj2['tProjection'];
                $salakh_real2 = $row_salaw2['saldo_awal_real'] + $row_tCashinReal2['tRealisasi'] - $row_tCashoutReal2['tRealisasi'];

                $salakh_proj3 = $row_salaw3['saldo_awal_proj'] + $row_tCashinProj3['tProjection'] - $row_tCashoutProj3['tProjection'];
                $salakh_real3 = $row_salaw3['saldo_awal_real'] + $row_tCashinReal3['tRealisasi'] - $row_tCashoutReal3['tRealisasi'];

                $salakh_proj4 = $row_salaw4['saldo_awal_proj'] + $row_tCashinProj4['tProjection'] - $row_tCashoutProj4['tProjection'];
                $salakh_real4 = $row_salaw4['saldo_awal_real'] + $row_tCashinReal4['tRealisasi'] - $row_tCashoutReal4['tRealisasi'];

                $salakh_proj5 = $row_salaw5['saldo_awal_proj'] + $row_tCashinProj5['tProjection'] - $row_tCashoutProj5['tProjection'];
                $salakh_real5 = $row_salaw5['saldo_awal_real'] + $row_tCashinReal5['tRealisasi'] - $row_tCashoutReal5['tRealisasi'];

              ?>
              
              <td style="text-align: right;"><?php echo number_format($salakh_proj1,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_real1,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_proj2,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_real2,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_proj3,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_real3,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_proj4,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_real4,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_proj5,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_real5,0,'.',',') ?></td>
            </tr>

            <tr style="background-color: silver">
              <td><b>Allocated Cash (B) :</b></td>
              
              <td style="text-align: right" colspan="2"><?php echo number_format($row_allo1['allocated_cash'],0,'.',','); ?></td>
              <td style="text-align: right" colspan="2"><?php echo number_format($row_allo2['allocated_cash'],0,'.',','); ?></td>
              <td style="text-align: right" colspan="2"><?php echo number_format($row_allo3['allocated_cash'],0,'.',','); ?></td>
              <td style="text-align: right" colspan="2"><?php echo number_format($row_allo4['allocated_cash'],0,'.',','); ?></td>
              <td style="text-align: right" colspan="2"><?php echo number_format($row_allo5['allocated_cash'],0,'.',','); ?></td>
            </tr>

            <tr style="background-color: silver">
              <td><b>Ready Cash (C) :</b></td>
              
              <td style="text-align: right" colspan="2"><?php echo number_format($row_read1['ready_cash'],0,'.',','); ?></td>
              <td style="text-align: right" colspan="2"><?php echo number_format($row_read2['ready_cash'],0,'.',','); ?></td>
              <td style="text-align: right" colspan="2"><?php echo number_format($row_read3['ready_cash'],0,'.',','); ?></td>
              <td style="text-align: right" colspan="2"><?php echo number_format($row_read4['ready_cash'],0,'.',','); ?></td>
              <td style="text-align: right" colspan="2"><?php echo number_format($row_read5['ready_cash'],0,'.',','); ?></td>
            </tr>

            <tr style="background-color: #edfa7a">
              <td><b>Kas Besar Cabang (D) :</b></td>
              
              <td style="text-align: right" colspan="2"><?php echo number_format($row_kbc1['kbc'],0,'.',','); ?></td>
              <td style="text-align: right" colspan="2"><?php echo number_format($row_kbc2['kbc'],0,'.',','); ?></td>
              <td style="text-align: right" colspan="2"><?php echo number_format($row_kbc3['kbc'],0,'.',','); ?></td>
              <td style="text-align: right" colspan="2"><?php echo number_format($row_kbc4['kbc'],0,'.',','); ?></td>
              <td style="text-align: right" colspan="2"><?php echo number_format($row_kbc5['kbc'],0,'.',','); ?></td>
            </tr>

            <tr style="background-color: orange">
              <td><b>Total Saldo Akhir di Bank & Cabang (E = A + D) :</b></td>
              
              <td style="text-align: right" colspan="2"><?php echo number_format($salakh_real1 + $row_kbc1['kbc'],0,'.',','); ?></td>
              
              <td style="text-align: right" colspan="2"><?php echo number_format($salakh_proj2 + $row_kbc2['kbc'],0,'.',','); ?></td>
              
              <td style="text-align: right" colspan="2"><?php echo number_format($salakh_proj3 + $row_kbc3['kbc'],0,'.',','); ?></td>
              
              <td style="text-align: right" colspan="2"><?php echo number_format($salakh_proj4 + $row_kbc4['kbc'],0,'.',','); ?></td>
              
              <td style="text-align: right" colspan="2"><?php echo number_format($salakh_proj5 + $row_kbc5['kbc'],0,'.',','); ?></td>
            </tr>
            
          </table>
        

        </div>
        <!-- /.box-body -->
        
      </div>
      <!-- /.Box Cash In -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper