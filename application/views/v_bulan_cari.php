<?php  

  // Data User Yang Login
  $nama = $this->libraryku->tampil_user()->nama;
  $username = $this->libraryku->tampil_user()->username;
  $level = $this->libraryku->tampil_user()->level;

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

    <!-- Jika Yang Login Administrator Maka Akan Tampil Summary -->
    <?php if($level=='administrator'){ ?>

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
                <a href="<?php echo base_url().'cashflow_bulan' ?>" class="btn btn-success">Data Realtime</a>
              </div>

            </div>
          </form>
          
          <!-- Table Cash Flow  -->
          <table class="table" style="display: block; overflow-x: auto; white-space: nowrap;">
          <tr>
          <td>

          <table class="table table-striped table-bordered" style="margin-top: 10px;">

            <tr style="background-color: orange; color: white">
              <th rowspan="2" style="font-size: 150%"><span>CASHFLOW</span></th>
              
              <th colspan="2" style="text-align: center;"><?php echo $hari1 ?>, <?php echo $tanggal1; ?></th>
              <th colspan="2" style="text-align: center;"><?php echo $hari2 ?>, <?php echo $tanggal2; ?></th>
              <th colspan="2" style="text-align: center;"><?php echo $hari3 ?>, <?php echo $tanggal3; ?></th>
              <th colspan="2" style="text-align: center;"><?php echo $hari4 ?>, <?php echo $tanggal4; ?></th>
              <th colspan="2" style="text-align: center;"><?php echo $hari5 ?>, <?php echo $tanggal5; ?></th>

              <th colspan="2" style="text-align: center;"><?php echo $hari6 ?>, <?php echo $tanggal6; ?></th>
              <th colspan="2" style="text-align: center;"><?php echo $hari7 ?>, <?php echo $tanggal7; ?></th>
              <th colspan="2" style="text-align: center;"><?php echo $hari8 ?>, <?php echo $tanggal8; ?></th>
              <th colspan="2" style="text-align: center;"><?php echo $hari9 ?>, <?php echo $tanggal9; ?></th>
              <th colspan="2" style="text-align: center;"><?php echo $hari10 ?>, <?php echo $tanggal10; ?></th>

              <th colspan="2" style="text-align: center;"><?php echo $hari11 ?>, <?php echo $tanggal11; ?></th>
              <th colspan="2" style="text-align: center;"><?php echo $hari12 ?>, <?php echo $tanggal12; ?></th>
              <th colspan="2" style="text-align: center;"><?php echo $hari13 ?>, <?php echo $tanggal13; ?></th>
              <th colspan="2" style="text-align: center;"><?php echo $hari14 ?>, <?php echo $tanggal14; ?></th>
              <th colspan="2" style="text-align: center;"><?php echo $hari15 ?>, <?php echo $tanggal15; ?></th>

              <th colspan="2" style="text-align: center;"><?php echo $hari16 ?>, <?php echo $tanggal16; ?></th>
              <th colspan="2" style="text-align: center;"><?php echo $hari17 ?>, <?php echo $tanggal17; ?></th>
              <th colspan="2" style="text-align: center;"><?php echo $hari18 ?>, <?php echo $tanggal18; ?></th>
              <th colspan="2" style="text-align: center;"><?php echo $hari19 ?>, <?php echo $tanggal19; ?></th>
              <th colspan="2" style="text-align: center;"><?php echo $hari20 ?>, <?php echo $tanggal20; ?></th>

              <th colspan="2" style="text-align: center;"><?php echo $hari21 ?>, <?php echo $tanggal21; ?></th>
              <th colspan="2" style="text-align: center;"><?php echo $hari22 ?>, <?php echo $tanggal22; ?></th>
              <th colspan="2" style="text-align: center;"><?php echo $hari23 ?>, <?php echo $tanggal23; ?></th>
              <th colspan="2" style="text-align: center;"><?php echo $hari24 ?>, <?php echo $tanggal24; ?></th>
              <th colspan="2" style="text-align: center;"><?php echo $hari25 ?>, <?php echo $tanggal25; ?></th>

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

              <td style="text-align: right;"><?php echo number_format($row_salaw6['saldo_awal_proj'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw6['saldo_awal_real'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw7['saldo_awal_proj'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw7['saldo_awal_real'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw8['saldo_awal_proj'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw8['saldo_awal_real'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw9['saldo_awal_proj'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw9['saldo_awal_real'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw10['saldo_awal_proj'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw10['saldo_awal_real'],0,'.',','); ?></td>

              <td style="text-align: right;"><?php echo number_format($row_salaw11['saldo_awal_proj'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw11['saldo_awal_real'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw12['saldo_awal_proj'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw12['saldo_awal_real'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw13['saldo_awal_proj'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw13['saldo_awal_real'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw14['saldo_awal_proj'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw14['saldo_awal_real'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw15['saldo_awal_proj'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw15['saldo_awal_real'],0,'.',','); ?></td>

              <td style="text-align: right;"><?php echo number_format($row_salaw16['saldo_awal_proj'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw16['saldo_awal_real'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw17['saldo_awal_proj'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw17['saldo_awal_real'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw18['saldo_awal_proj'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw18['saldo_awal_real'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw19['saldo_awal_proj'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw19['saldo_awal_real'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw20['saldo_awal_proj'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw20['saldo_awal_real'],0,'.',','); ?></td>

              <td style="text-align: right;"><?php echo number_format($row_salaw21['saldo_awal_proj'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw21['saldo_awal_real'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw22['saldo_awal_proj'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw22['saldo_awal_real'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw23['saldo_awal_proj'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw23['saldo_awal_real'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw24['saldo_awal_proj'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw24['saldo_awal_real'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw25['saldo_awal_proj'],0,'.',','); ?></td>
              <td style="text-align: right;"><?php echo number_format($row_salaw25['saldo_awal_real'],0,'.',','); ?></td>

            </tr>

            <tr style="background-color: #56F88F">
              <th colspan="51">CASH-IN</th>
            </tr>

            <tr>
              <td>Pencairan Bank (A)</td>
              
              <td style="text-align: right;"><?php echo number_format($row_cashin_a1['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a1['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a2['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a2['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a3['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a3['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a4['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a4['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a5['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a5['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_a6['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a6['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a7['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a7['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a8['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a8['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a9['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a9['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a10['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a10['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_a11['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a11['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a12['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a12['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a13['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a13['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a14['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a14['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a15['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a15['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_a16['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a16['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a17['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a17['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a18['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a18['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a19['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a19['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a20['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a20['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_a21['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a21['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a22['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a22['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a23['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a23['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a24['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a24['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a25['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_a25['realisasi']) ?></td>
            
            </tr>

            <tr>
              <td>Penerimaan Angsuran Debitur (B) (C+D)</td>
              
              <td style="text-align: right;"><?php echo number_format($row_cashin_c1['projection'] + $row_cashin_d1['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c1['realisasi'] + $row_cashin_d1['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c2['projection'] + $row_cashin_d2['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c2['realisasi'] + $row_cashin_d2['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c3['projection'] + $row_cashin_d3['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c3['realisasi'] + $row_cashin_d3['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c4['projection'] + $row_cashin_d4['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c4['realisasi'] + $row_cashin_d4['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c5['projection'] + $row_cashin_d5['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c5['realisasi'] + $row_cashin_d5['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_c6['projection'] + $row_cashin_d6['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c6['realisasi'] + $row_cashin_d6['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c7['projection'] + $row_cashin_d7['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c7['realisasi'] + $row_cashin_d7['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c8['projection'] + $row_cashin_d8['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c8['realisasi'] + $row_cashin_d8['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c9['projection'] + $row_cashin_d9['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c9['realisasi'] + $row_cashin_d9['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c10['projection'] + $row_cashin_d10['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c10['realisasi'] + $row_cashin_d10['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_c11['projection'] + $row_cashin_d11['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c11['realisasi'] + $row_cashin_d11['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c12['projection'] + $row_cashin_d12['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c12['realisasi'] + $row_cashin_d12['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c13['projection'] + $row_cashin_d13['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c13['realisasi'] + $row_cashin_d13['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c14['projection'] + $row_cashin_d14['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c14['realisasi'] + $row_cashin_d14['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c15['projection'] + $row_cashin_d15['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c15['realisasi'] + $row_cashin_d15['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_c16['projection'] + $row_cashin_d16['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c16['realisasi'] + $row_cashin_d16['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c17['projection'] + $row_cashin_d17['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c17['realisasi'] + $row_cashin_d17['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c18['projection'] + $row_cashin_d18['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c18['realisasi'] + $row_cashin_d18['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c19['projection'] + $row_cashin_d19['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c19['realisasi'] + $row_cashin_d19['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c20['projection'] + $row_cashin_d20['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c20['realisasi'] + $row_cashin_d20['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_c21['projection'] + $row_cashin_d21['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c21['realisasi'] + $row_cashin_d21['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c22['projection'] + $row_cashin_d22['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c22['realisasi'] + $row_cashin_d22['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c23['projection'] + $row_cashin_d23['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c23['realisasi'] + $row_cashin_d23['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c24['projection'] + $row_cashin_d24['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c24['realisasi'] + $row_cashin_d24['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c25['projection'] + $row_cashin_d25['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_c25['realisasi'] + $row_cashin_d25['realisasi']) ?></td>
              
            </tr>

            <tr>
              <td>Penerimaan Pelunasan & Recovery (E+F+G)</td>
                          
              <td style="text-align: right;"><?php echo number_format($row_cashin_e1['projection'] + $row_cashin_f1['projection'] + $row_cashin_g1['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e1['realisasi'] + $row_cashin_f1['realisasi'] + $row_cashin_g1['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e2['projection'] + $row_cashin_f2['projection'] + $row_cashin_g2['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e2['realisasi'] + $row_cashin_f2['realisasi'] + $row_cashin_g2['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e3['projection'] + $row_cashin_f3['projection'] + $row_cashin_g3['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e3['realisasi'] + $row_cashin_f3['realisasi'] + $row_cashin_g3['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e4['projection'] + $row_cashin_f4['projection'] + $row_cashin_g4['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e4['realisasi'] + $row_cashin_f4['realisasi'] + $row_cashin_g4['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e5['projection'] + $row_cashin_f5['projection'] + $row_cashin_g5['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e5['realisasi'] + $row_cashin_f5['realisasi'] + $row_cashin_g5['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_e6['projection'] + $row_cashin_f6['projection'] + $row_cashin_g6['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e6['realisasi'] + $row_cashin_f6['realisasi'] + $row_cashin_g6['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e7['projection'] + $row_cashin_f7['projection'] + $row_cashin_g7['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e7['realisasi'] + $row_cashin_f7['realisasi'] + $row_cashin_g7['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e8['projection'] + $row_cashin_f8['projection'] + $row_cashin_g8['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e8['realisasi'] + $row_cashin_f8['realisasi'] + $row_cashin_g8['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e9['projection'] + $row_cashin_f9['projection'] + $row_cashin_g9['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e9['realisasi'] + $row_cashin_f9['realisasi'] + $row_cashin_g9['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e10['projection'] + $row_cashin_f10['projection'] + $row_cashin_g10['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e10['realisasi'] + $row_cashin_f10['realisasi'] + $row_cashin_g10['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_e11['projection'] + $row_cashin_f11['projection'] + $row_cashin_g11['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e11['realisasi'] + $row_cashin_f11['realisasi'] + $row_cashin_g11['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e12['projection'] + $row_cashin_f12['projection'] + $row_cashin_g12['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e12['realisasi'] + $row_cashin_f12['realisasi'] + $row_cashin_g12['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e13['projection'] + $row_cashin_f13['projection'] + $row_cashin_g13['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e13['realisasi'] + $row_cashin_f13['realisasi'] + $row_cashin_g13['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e14['projection'] + $row_cashin_f14['projection'] + $row_cashin_g14['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e14['realisasi'] + $row_cashin_f14['realisasi'] + $row_cashin_g14['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e15['projection'] + $row_cashin_f15['projection'] + $row_cashin_g15['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e15['realisasi'] + $row_cashin_f15['realisasi'] + $row_cashin_g15['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_e16['projection'] + $row_cashin_f16['projection'] + $row_cashin_g16['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e16['realisasi'] + $row_cashin_f16['realisasi'] + $row_cashin_g16['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e17['projection'] + $row_cashin_f17['projection'] + $row_cashin_g17['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e17['realisasi'] + $row_cashin_f17['realisasi'] + $row_cashin_g17['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e18['projection'] + $row_cashin_f18['projection'] + $row_cashin_g18['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e18['realisasi'] + $row_cashin_f18['realisasi'] + $row_cashin_g18['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e19['projection'] + $row_cashin_f19['projection'] + $row_cashin_g19['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e19['realisasi'] + $row_cashin_f19['realisasi'] + $row_cashin_g19['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e20['projection'] + $row_cashin_f20['projection'] + $row_cashin_g20['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e20['realisasi'] + $row_cashin_f20['realisasi'] + $row_cashin_g20['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_e21['projection'] + $row_cashin_f21['projection'] + $row_cashin_g21['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e21['realisasi'] + $row_cashin_f21['realisasi'] + $row_cashin_g21['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e22['projection'] + $row_cashin_f22['projection'] + $row_cashin_g22['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e22['realisasi'] + $row_cashin_f22['realisasi'] + $row_cashin_g22['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e23['projection'] + $row_cashin_f23['projection'] + $row_cashin_g23['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e23['realisasi'] + $row_cashin_f23['realisasi'] + $row_cashin_g23['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e24['projection'] + $row_cashin_f24['projection'] + $row_cashin_g24['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e24['realisasi'] + $row_cashin_f24['realisasi'] + $row_cashin_g24['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e25['projection'] + $row_cashin_f25['projection'] + $row_cashin_g25['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_e25['realisasi'] + $row_cashin_f25['realisasi'] + $row_cashin_g25['realisasi']) ?></td>
              
            </tr>

            <tr>
              <td>Penerimaan Diluar Angsuran Debitur (H+I+J+K+L+M+N)</td>
                          
              <td style="text-align: right;"><?php echo number_format($row_cashin_h1['projection'] + $row_cashin_i1['projection'] + $row_cashin_j1['projection'] + $row_cashin_k1['projection'] + $row_cashin_l1['projection'] + $row_cashin_m1['projection'] + $row_cashin_n1['projection']) ?></td>
              
              <td style="text-align: right;"><?php echo number_format($row_cashin_h1['realisasi'] + $row_cashin_i1['realisasi'] + $row_cashin_j1['realisasi'] + $row_cashin_k1['realisasi'] + $row_cashin_l1['realisasi'] + $row_cashin_m1['realisasi'] + $row_cashin_n1['realisasi'] ) ?></td>
              
              <td style="text-align: right;"><?php echo number_format($row_cashin_h2['projection'] + $row_cashin_i2['projection'] + $row_cashin_j2['projection'] + $row_cashin_k2['projection'] + $row_cashin_l2['projection'] + $row_cashin_m2['projection'] + $row_cashin_n2['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h2['realisasi'] + $row_cashin_i2['realisasi'] + $row_cashin_j2['realisasi'] + $row_cashin_k2['realisasi'] + $row_cashin_l2['realisasi'] + $row_cashin_m2['realisasi'] + $row_cashin_n2['realisasi']) ?></td>
              
              <td style="text-align: right;"><?php echo number_format($row_cashin_h3['projection'] + $row_cashin_i3['projection'] + $row_cashin_j3['projection'] + $row_cashin_k3['projection'] + $row_cashin_l3['projection'] + $row_cashin_m3['projection'] + $row_cashin_n3['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h3['realisasi'] + $row_cashin_i3['realisasi'] + $row_cashin_j3['realisasi'] + $row_cashin_k3['realisasi'] + $row_cashin_l3['realisasi'] + $row_cashin_m3['realisasi'] + $row_cashin_n3['realisasi']) ?></td>
              
              <td style="text-align: right;"><?php echo number_format($row_cashin_h4['projection'] + $row_cashin_i4['projection'] + $row_cashin_j4['projection'] + $row_cashin_k4['projection'] + $row_cashin_l4['projection'] + $row_cashin_m4['projection'] + $row_cashin_n4['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h4['realisasi'] + $row_cashin_i4['realisasi'] + $row_cashin_j4['realisasi'] + $row_cashin_k4['realisasi'] + $row_cashin_l4['realisasi'] + $row_cashin_m4['realisasi'] + $row_cashin_n4['realisasi']) ?></td>
              
              <td style="text-align: right;"><?php echo number_format($row_cashin_h5['projection'] + $row_cashin_i5['projection'] + $row_cashin_j5['projection'] + $row_cashin_k5['projection'] + $row_cashin_l5['projection'] + $row_cashin_m5['projection'] + $row_cashin_n5['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h5['realisasi'] + $row_cashin_i5['realisasi'] + $row_cashin_j5['realisasi'] + $row_cashin_k5['realisasi'] + $row_cashin_l5['realisasi'] + $row_cashin_m5['realisasi'] + $row_cashin_n5['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h6['projection'] + $row_cashin_i6['projection'] + $row_cashin_j6['projection'] + $row_cashin_k6['projection'] + $row_cashin_l6['projection'] + $row_cashin_m6['projection'] + $row_cashin_n6['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h6['realisasi'] + $row_cashin_i6['realisasi'] + $row_cashin_j6['realisasi'] + $row_cashin_k6['realisasi'] + $row_cashin_l6['realisasi'] + $row_cashin_m6['realisasi'] + $row_cashin_n6['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h7['projection'] + $row_cashin_i7['projection'] + $row_cashin_j7['projection'] + $row_cashin_k7['projection'] + $row_cashin_l7['projection'] + $row_cashin_m7['projection'] + $row_cashin_n7['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h7['realisasi'] + $row_cashin_i7['realisasi'] + $row_cashin_j7['realisasi'] + $row_cashin_k7['realisasi'] + $row_cashin_l7['realisasi'] + $row_cashin_m7['realisasi'] + $row_cashin_n7['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h8['projection'] + $row_cashin_i8['projection'] + $row_cashin_j8['projection'] + $row_cashin_k8['projection'] + $row_cashin_l8['projection'] + $row_cashin_m8['projection'] + $row_cashin_n8['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h8['realisasi'] + $row_cashin_i8['realisasi'] + $row_cashin_j8['realisasi'] + $row_cashin_k8['realisasi'] + $row_cashin_l8['realisasi'] + $row_cashin_m8['realisasi'] + $row_cashin_n8['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h9['projection'] + $row_cashin_i9['projection'] + $row_cashin_j9['projection'] + $row_cashin_k9['projection'] + $row_cashin_l9['projection'] + $row_cashin_m9['projection'] + $row_cashin_n9['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h9['realisasi'] + $row_cashin_i9['realisasi'] + $row_cashin_j9['realisasi'] + $row_cashin_k9['realisasi'] + $row_cashin_l9['realisasi'] + $row_cashin_m9['realisasi'] + $row_cashin_n9['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h10['projection'] + $row_cashin_i10['projection'] + $row_cashin_j10['projection'] + $row_cashin_k10['projection'] + $row_cashin_l10['projection'] + $row_cashin_m10['projection'] + $row_cashin_n10['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h10['realisasi'] + $row_cashin_i10['realisasi'] + $row_cashin_j10['realisasi'] + $row_cashin_k10['realisasi'] + $row_cashin_l10['realisasi'] + $row_cashin_m10['realisasi'] + $row_cashin_n10['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h11['projection'] + $row_cashin_i11['projection'] + $row_cashin_j11['projection'] + $row_cashin_k11['projection'] + $row_cashin_l11['projection'] + $row_cashin_m11['projection'] + $row_cashin_n11['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h11['realisasi'] + $row_cashin_i11['realisasi'] + $row_cashin_j11['realisasi'] + $row_cashin_k11['realisasi'] + $row_cashin_l11['realisasi'] + $row_cashin_m11['realisasi'] + $row_cashin_n11['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h12['projection'] + $row_cashin_i12['projection'] + $row_cashin_j12['projection'] + $row_cashin_k12['projection'] + $row_cashin_l12['projection'] + $row_cashin_m12['projection'] + $row_cashin_n12['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h12['realisasi'] + $row_cashin_i12['realisasi'] + $row_cashin_j12['realisasi'] + $row_cashin_k12['realisasi'] + $row_cashin_l12['realisasi'] + $row_cashin_m12['realisasi'] + $row_cashin_n12['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h13['projection'] + $row_cashin_i13['projection'] + $row_cashin_j13['projection'] + $row_cashin_k13['projection'] + $row_cashin_l13['projection'] + $row_cashin_m13['projection'] + $row_cashin_n13['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h13['realisasi'] + $row_cashin_i13['realisasi'] + $row_cashin_j13['realisasi'] + $row_cashin_k13['realisasi'] + $row_cashin_l13['realisasi'] + $row_cashin_m13['realisasi'] + $row_cashin_n13['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h14['projection'] + $row_cashin_i14['projection'] + $row_cashin_j14['projection'] + $row_cashin_k14['projection'] + $row_cashin_l14['projection'] + $row_cashin_m14['projection'] + $row_cashin_n14['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h14['realisasi'] + $row_cashin_i14['realisasi'] + $row_cashin_j14['realisasi'] + $row_cashin_k14['realisasi'] + $row_cashin_l14['realisasi'] + $row_cashin_m14['realisasi'] + $row_cashin_n14['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h15['projection'] + $row_cashin_i15['projection'] + $row_cashin_j15['projection'] + $row_cashin_k15['projection'] + $row_cashin_l15['projection'] + $row_cashin_m15['projection'] + $row_cashin_n15['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h15['realisasi'] + $row_cashin_i15['realisasi'] + $row_cashin_j15['realisasi'] + $row_cashin_k15['realisasi'] + $row_cashin_l15['realisasi'] + $row_cashin_m15['realisasi'] + $row_cashin_n15['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h16['projection'] + $row_cashin_i16['projection'] + $row_cashin_j16['projection'] + $row_cashin_k16['projection'] + $row_cashin_l16['projection'] + $row_cashin_m16['projection'] + $row_cashin_n16['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h16['realisasi'] + $row_cashin_i16['realisasi'] + $row_cashin_j16['realisasi'] + $row_cashin_k16['realisasi'] + $row_cashin_l16['realisasi'] + $row_cashin_m16['realisasi'] + $row_cashin_n16['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h17['projection'] + $row_cashin_i17['projection'] + $row_cashin_j17['projection'] + $row_cashin_k17['projection'] + $row_cashin_l17['projection'] + $row_cashin_m17['projection'] + $row_cashin_n17['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h17['realisasi'] + $row_cashin_i17['realisasi'] + $row_cashin_j17['realisasi'] + $row_cashin_k17['realisasi'] + $row_cashin_l17['realisasi'] + $row_cashin_m17['realisasi'] + $row_cashin_n17['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h18['projection'] + $row_cashin_i18['projection'] + $row_cashin_j18['projection'] + $row_cashin_k18['projection'] + $row_cashin_l18['projection'] + $row_cashin_m18['projection'] + $row_cashin_n18['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h18['realisasi'] + $row_cashin_i18['realisasi'] + $row_cashin_j18['realisasi'] + $row_cashin_k18['realisasi'] + $row_cashin_l18['realisasi'] + $row_cashin_m18['realisasi'] + $row_cashin_n18['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h19['projection'] + $row_cashin_i19['projection'] + $row_cashin_j19['projection'] + $row_cashin_k19['projection'] + $row_cashin_l19['projection'] + $row_cashin_m19['projection'] + $row_cashin_n19['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h19['realisasi'] + $row_cashin_i19['realisasi'] + $row_cashin_j19['realisasi'] + $row_cashin_k19['realisasi'] + $row_cashin_l19['realisasi'] + $row_cashin_m19['realisasi'] + $row_cashin_n19['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h20['projection'] + $row_cashin_i20['projection'] + $row_cashin_j20['projection'] + $row_cashin_k20['projection'] + $row_cashin_l20['projection'] + $row_cashin_m20['projection'] + $row_cashin_n20['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h20['realisasi'] + $row_cashin_i20['realisasi'] + $row_cashin_j20['realisasi'] + $row_cashin_k20['realisasi'] + $row_cashin_l20['realisasi'] + $row_cashin_m20['realisasi'] + $row_cashin_n20['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h21['projection'] + $row_cashin_i21['projection'] + $row_cashin_j21['projection'] + $row_cashin_k21['projection'] + $row_cashin_l21['projection'] + $row_cashin_m21['projection'] + $row_cashin_n21['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h21['realisasi'] + $row_cashin_i21['realisasi'] + $row_cashin_j21['realisasi'] + $row_cashin_k21['realisasi'] + $row_cashin_l21['realisasi'] + $row_cashin_m21['realisasi'] + $row_cashin_n21['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h22['projection'] + $row_cashin_i22['projection'] + $row_cashin_j22['projection'] + $row_cashin_k22['projection'] + $row_cashin_l22['projection'] + $row_cashin_m22['projection'] + $row_cashin_n22['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h22['realisasi'] + $row_cashin_i22['realisasi'] + $row_cashin_j22['realisasi'] + $row_cashin_k22['realisasi'] + $row_cashin_l22['realisasi'] + $row_cashin_m22['realisasi'] + $row_cashin_n22['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h23['projection'] + $row_cashin_i23['projection'] + $row_cashin_j23['projection'] + $row_cashin_k23['projection'] + $row_cashin_l23['projection'] + $row_cashin_m23['projection'] + $row_cashin_n23['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h23['realisasi'] + $row_cashin_i23['realisasi'] + $row_cashin_j23['realisasi'] + $row_cashin_k23['realisasi'] + $row_cashin_l23['realisasi'] + $row_cashin_m23['realisasi'] + $row_cashin_n23['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h24['projection'] + $row_cashin_i24['projection'] + $row_cashin_j24['projection'] + $row_cashin_k24['projection'] + $row_cashin_l24['projection'] + $row_cashin_m24['projection'] + $row_cashin_n24['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h24['realisasi'] + $row_cashin_i24['realisasi'] + $row_cashin_j24['realisasi'] + $row_cashin_k24['realisasi'] + $row_cashin_l24['realisasi'] + $row_cashin_m24['realisasi'] + $row_cashin_n24['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h25['projection'] + $row_cashin_i25['projection'] + $row_cashin_j25['projection'] + $row_cashin_k25['projection'] + $row_cashin_l25['projection'] + $row_cashin_m25['projection'] + $row_cashin_n25['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_h25['realisasi'] + $row_cashin_i25['realisasi'] + $row_cashin_j25['realisasi'] + $row_cashin_k25['realisasi'] + $row_cashin_l25['realisasi'] + $row_cashin_m25['realisasi'] + $row_cashin_n25['realisasi']) ?></td>
              
            </tr>

            <tr>
              <td>Penerimaan Lainnya (O+P+Q)</td>
              
              <td style="text-align: right;"><?php echo number_format($row_cashin_o1['projection'] + $row_cashin_p1['projection'] + $row_cashin_q1['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o1['realisasi'] + $row_cashin_p1['realisasi'] + $row_cashin_q1['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o2['projection'] + $row_cashin_p2['projection'] + $row_cashin_q2['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o2['realisasi'] + $row_cashin_p2['realisasi'] + $row_cashin_q2['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o3['projection'] + $row_cashin_p3['projection'] + $row_cashin_q3['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o3['realisasi'] + $row_cashin_p3['realisasi'] + $row_cashin_q3['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o4['projection'] + $row_cashin_p4['projection'] + $row_cashin_q4['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o4['realisasi'] + $row_cashin_p4['realisasi'] + $row_cashin_q4['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o5['projection'] + $row_cashin_p5['projection'] + $row_cashin_q5['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o5['realisasi'] + $row_cashin_p5['realisasi'] + $row_cashin_q5['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_o6['projection'] + $row_cashin_p6['projection'] + $row_cashin_q6['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o6['realisasi'] + $row_cashin_p6['realisasi'] + $row_cashin_q6['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o7['projection'] + $row_cashin_p7['projection'] + $row_cashin_q7['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o7['realisasi'] + $row_cashin_p7['realisasi'] + $row_cashin_q7['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o8['projection'] + $row_cashin_p8['projection'] + $row_cashin_q8['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o8['realisasi'] + $row_cashin_p8['realisasi'] + $row_cashin_q8['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o9['projection'] + $row_cashin_p9['projection'] + $row_cashin_q9['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o9['realisasi'] + $row_cashin_p9['realisasi'] + $row_cashin_q9['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o10['projection'] + $row_cashin_p10['projection'] + $row_cashin_q10['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o10['realisasi'] + $row_cashin_p10['realisasi'] + $row_cashin_q10['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_o11['projection'] + $row_cashin_p11['projection'] + $row_cashin_q11['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o11['realisasi'] + $row_cashin_p11['realisasi'] + $row_cashin_q11['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o12['projection'] + $row_cashin_p12['projection'] + $row_cashin_q12['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o12['realisasi'] + $row_cashin_p12['realisasi'] + $row_cashin_q12['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o13['projection'] + $row_cashin_p13['projection'] + $row_cashin_q13['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o13['realisasi'] + $row_cashin_p13['realisasi'] + $row_cashin_q13['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o14['projection'] + $row_cashin_p14['projection'] + $row_cashin_q14['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o14['realisasi'] + $row_cashin_p14['realisasi'] + $row_cashin_q14['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o15['projection'] + $row_cashin_p15['projection'] + $row_cashin_q15['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o15['realisasi'] + $row_cashin_p15['realisasi'] + $row_cashin_q15['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_o16['projection'] + $row_cashin_p16['projection'] + $row_cashin_q16['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o16['realisasi'] + $row_cashin_p16['realisasi'] + $row_cashin_q16['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o17['projection'] + $row_cashin_p17['projection'] + $row_cashin_q17['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o17['realisasi'] + $row_cashin_p17['realisasi'] + $row_cashin_q17['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o18['projection'] + $row_cashin_p18['projection'] + $row_cashin_q18['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o18['realisasi'] + $row_cashin_p18['realisasi'] + $row_cashin_q18['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o19['projection'] + $row_cashin_p19['projection'] + $row_cashin_q19['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o19['realisasi'] + $row_cashin_p19['realisasi'] + $row_cashin_q19['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o20['projection'] + $row_cashin_p20['projection'] + $row_cashin_q20['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o20['realisasi'] + $row_cashin_p20['realisasi'] + $row_cashin_q20['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_o21['projection'] + $row_cashin_p21['projection'] + $row_cashin_q21['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o21['realisasi'] + $row_cashin_p21['realisasi'] + $row_cashin_q21['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o22['projection'] + $row_cashin_p22['projection'] + $row_cashin_q22['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o22['realisasi'] + $row_cashin_p22['realisasi'] + $row_cashin_q22['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o23['projection'] + $row_cashin_p23['projection'] + $row_cashin_q23['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o23['realisasi'] + $row_cashin_p23['realisasi'] + $row_cashin_q23['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o24['projection'] + $row_cashin_p24['projection'] + $row_cashin_q24['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o24['realisasi'] + $row_cashin_p24['realisasi'] + $row_cashin_q24['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o25['projection'] + $row_cashin_p25['projection'] + $row_cashin_q25['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_o25['realisasi'] + $row_cashin_p25['realisasi'] + $row_cashin_q25['realisasi']) ?></td>
              
            </tr>

            <tr>
              <td>Pencairan Deposito (R)</td>
              
              <td style="text-align: right;"><?php echo number_format($row_cashin_r1['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r1['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r2['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r2['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r3['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r3['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r4['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r4['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r5['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r5['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_r6['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r6['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r7['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r7['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r8['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r8['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r9['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r9['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r10['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r10['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_r11['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r11['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r12['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r12['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r13['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r13['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r14['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r14['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r15['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r15['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_r16['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r16['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r17['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r17['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r18['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r18['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r19['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r19['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r20['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r20['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_r21['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r21['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r22['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r22['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r23['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r23['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r24['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r24['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r25['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_r25['realisasi']) ?></td>
              
            </tr>

            <tr>
              <td>Pencairan Rekening B2B (S)</td>
              
              <td style="text-align: right;"><?php echo number_format($row_cashin_s1['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s1['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s2['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s2['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s3['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s3['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s4['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s4['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s5['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s5['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_s6['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s6['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s7['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s7['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s8['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s8['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s9['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s9['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s10['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s10['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_s11['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s11['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s12['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s12['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s13['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s13['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s14['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s14['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s15['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s15['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_s16['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s16['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s17['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s17['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s18['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s18['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s19['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s19['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s20['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s20['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashin_s21['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s21['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s22['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s22['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s23['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s23['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s24['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s24['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s25['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashin_s25['realisasi']) ?></td>
              
            </tr>

            <tr style="background-color: silver; color: white">
              <td>TOTAL CASH - IN</td>
              
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

              <td style="text-align: right;"><b><?php echo number_format($row_tCashinProj6['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinReal6['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinProj7['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinReal7['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinProj8['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinReal8['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinProj9['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinReal9['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinProj10['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinReal10['tRealisasi']) ?></b></td>

              <td style="text-align: right;"><b><?php echo number_format($row_tCashinProj11['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinReal11['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinProj12['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinReal12['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinProj13['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinReal13['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinProj14['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinReal14['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinProj15['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinReal15['tRealisasi']) ?></b></td>

              <td style="text-align: right;"><b><?php echo number_format($row_tCashinProj16['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinReal16['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinProj17['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinReal17['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinProj18['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinReal18['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinProj19['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinReal19['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinProj20['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinReal20['tRealisasi']) ?></b></td>

              <td style="text-align: right;"><b><?php echo number_format($row_tCashinProj21['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinReal21['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinProj22['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinReal22['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinProj23['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinReal23['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinProj24['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinReal24['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinProj25['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashinReal25['tRealisasi']) ?></b></td>

            </tr>

            

            <!-- CASH OUT .................................................................................. -->

            <tr style="background-color: white; color: white">
              <td colspan="51"></td>
            </tr>

            <tr style="background-color: yellow">
              <th colspan="51">CASH-OUT</th>
            </tr>

            <tr>
              <td>Pencairan Dealer dan Insentif (A+B)</td>
                          
              <td style="text-align: right;"><?php echo number_format($row_cashout_a1['projection'] + $row_cashout_b1['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a1['realisasi'] + $row_cashout_b1['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a2['projection'] + $row_cashout_b2['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a2['realisasi'] + $row_cashout_b2['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a3['projection'] + $row_cashout_b3['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a3['realisasi'] + $row_cashout_b3['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a4['projection'] + $row_cashout_b4['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a4['realisasi'] + $row_cashout_b4['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a5['projection'] + $row_cashout_b5['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a5['realisasi'] + $row_cashout_b5['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_a6['projection'] + $row_cashout_b6['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a6['realisasi'] + $row_cashout_b6['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a7['projection'] + $row_cashout_b7['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a7['realisasi'] + $row_cashout_b7['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a8['projection'] + $row_cashout_b8['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a8['realisasi'] + $row_cashout_b8['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a9['projection'] + $row_cashout_b9['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a9['realisasi'] + $row_cashout_b9['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a10['projection'] + $row_cashout_b10['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a10['realisasi'] + $row_cashout_b10['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_a11['projection'] + $row_cashout_b11['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a11['realisasi'] + $row_cashout_b11['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a12['projection'] + $row_cashout_b12['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a12['realisasi'] + $row_cashout_b12['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a13['projection'] + $row_cashout_b13['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a13['realisasi'] + $row_cashout_b13['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a14['projection'] + $row_cashout_b14['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a14['realisasi'] + $row_cashout_b14['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a15['projection'] + $row_cashout_b15['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a15['realisasi'] + $row_cashout_b15['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_a16['projection'] + $row_cashout_b16['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a16['realisasi'] + $row_cashout_b16['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a17['projection'] + $row_cashout_b17['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a17['realisasi'] + $row_cashout_b17['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a18['projection'] + $row_cashout_b18['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a18['realisasi'] + $row_cashout_b18['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a19['projection'] + $row_cashout_b19['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a19['realisasi'] + $row_cashout_b19['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a20['projection'] + $row_cashout_b20['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a20['realisasi'] + $row_cashout_b20['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_a21['projection'] + $row_cashout_b21['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a21['realisasi'] + $row_cashout_b21['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a22['projection'] + $row_cashout_b22['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a22['realisasi'] + $row_cashout_b22['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a23['projection'] + $row_cashout_b23['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a23['realisasi'] + $row_cashout_b23['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a24['projection'] + $row_cashout_b24['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a24['realisasi'] + $row_cashout_b24['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a25['projection'] + $row_cashout_b25['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_a25['realisasi'] + $row_cashout_b25['realisasi']) ?></td>

            </tr>

            <tr>
              <td>Angsuran Bank (C+D)</td>
                          
              <td style="text-align: right;"><?php echo number_format($row_cashout_c1['projection'] + $row_cashout_d1['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c1['realisasi'] + $row_cashout_d1['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c2['projection'] + $row_cashout_d2['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c2['realisasi'] + $row_cashout_d2['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c3['projection'] + $row_cashout_d3['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c3['realisasi'] + $row_cashout_d3['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c4['projection'] + $row_cashout_d4['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c4['realisasi'] + $row_cashout_d4['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c5['projection'] + $row_cashout_d5['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c5['realisasi'] + $row_cashout_d5['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_c6['projection'] + $row_cashout_d6['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c6['realisasi'] + $row_cashout_d6['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c7['projection'] + $row_cashout_d7['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c7['realisasi'] + $row_cashout_d7['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c8['projection'] + $row_cashout_d8['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c8['realisasi'] + $row_cashout_d8['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c9['projection'] + $row_cashout_d9['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c9['realisasi'] + $row_cashout_d9['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c10['projection'] + $row_cashout_d10['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c10['realisasi'] + $row_cashout_d10['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_c11['projection'] + $row_cashout_d11['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c11['realisasi'] + $row_cashout_d11['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c12['projection'] + $row_cashout_d12['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c12['realisasi'] + $row_cashout_d12['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c13['projection'] + $row_cashout_d13['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c13['realisasi'] + $row_cashout_d13['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c14['projection'] + $row_cashout_d14['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c14['realisasi'] + $row_cashout_d14['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c15['projection'] + $row_cashout_d15['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c15['realisasi'] + $row_cashout_d15['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_c16['projection'] + $row_cashout_d16['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c16['realisasi'] + $row_cashout_d16['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c17['projection'] + $row_cashout_d17['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c17['realisasi'] + $row_cashout_d17['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c18['projection'] + $row_cashout_d18['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c18['realisasi'] + $row_cashout_d18['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c19['projection'] + $row_cashout_d19['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c19['realisasi'] + $row_cashout_d19['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c20['projection'] + $row_cashout_d20['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c20['realisasi'] + $row_cashout_d20['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_c21['projection'] + $row_cashout_d21['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c21['realisasi'] + $row_cashout_d21['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c22['projection'] + $row_cashout_d22['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c22['realisasi'] + $row_cashout_d22['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c23['projection'] + $row_cashout_d23['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c23['realisasi'] + $row_cashout_d23['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c24['projection'] + $row_cashout_d24['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c24['realisasi'] + $row_cashout_d24['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c25['projection'] + $row_cashout_d25['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_c25['realisasi'] + $row_cashout_d25['realisasi']) ?></td>
            </tr>

            <tr>
              <td>Pelunasan Bank (E+F+G+H)</td>
                          
              <td style="text-align: right;"><?php echo number_format($row_cashout_e1['projection'] + $row_cashout_f1['projection'] + $row_cashout_g1['projection'] + $row_cashout_h1['projection']) ?></td>
              
              <td style="text-align: right;"><?php echo number_format($row_cashout_e1['realisasi'] + $row_cashout_f1['realisasi'] + $row_cashout_g1['realisasi'] + $row_cashout_h1['realisasi']) ?></td>
              
              <td style="text-align: right;"><?php echo number_format($row_cashout_e2['projection'] + $row_cashout_f2['projection'] + $row_cashout_g2['projection'] + $row_cashout_h2['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e2['realisasi'] + $row_cashout_f2['realisasi'] + $row_cashout_g2['realisasi'] + $row_cashout_h2['realisasi']) ?></td>
              
              <td style="text-align: right;"><?php echo number_format($row_cashout_e3['projection'] + $row_cashout_f3['projection'] + $row_cashout_g3['projection'] + $row_cashout_h3['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e3['realisasi'] + $row_cashout_f3['realisasi'] + $row_cashout_g3['realisasi'] + $row_cashout_h3['realisasi']) ?></td>
              
              <td style="text-align: right;"><?php echo number_format($row_cashout_e4['projection'] + $row_cashout_f4['projection'] + $row_cashout_g4['projection'] + $row_cashout_h4['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e4['realisasi'] + $row_cashout_f4['realisasi'] + $row_cashout_g4['realisasi'] + $row_cashout_h4['realisasi']) ?></td>
              
              <td style="text-align: right;"><?php echo number_format($row_cashout_e5['projection'] + $row_cashout_f5['projection'] + $row_cashout_g5['projection'] + $row_cashout_h5['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e5['realisasi'] + $row_cashout_f5['realisasi'] + $row_cashout_g5['realisasi'] + $row_cashout_h5['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e6['projection'] + $row_cashout_f6['projection'] + $row_cashout_g6['projection'] + $row_cashout_h6['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e6['realisasi'] + $row_cashout_f6['realisasi'] + $row_cashout_g6['realisasi'] + $row_cashout_h6['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e7['projection'] + $row_cashout_f7['projection'] + $row_cashout_g7['projection'] + $row_cashout_h7['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e7['realisasi'] + $row_cashout_f7['realisasi'] + $row_cashout_g7['realisasi'] + $row_cashout_h7['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e8['projection'] + $row_cashout_f8['projection'] + $row_cashout_g8['projection'] + $row_cashout_h8['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e8['realisasi'] + $row_cashout_f8['realisasi'] + $row_cashout_g8['realisasi'] + $row_cashout_h8['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e9['projection'] + $row_cashout_f9['projection'] + $row_cashout_g9['projection'] + $row_cashout_h9['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e9['realisasi'] + $row_cashout_f9['realisasi'] + $row_cashout_g9['realisasi'] + $row_cashout_h9['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e10['projection'] + $row_cashout_f10['projection'] + $row_cashout_g10['projection'] + $row_cashout_h10['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e10['realisasi'] + $row_cashout_f10['realisasi'] + $row_cashout_g10['realisasi'] + $row_cashout_h10['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e11['projection'] + $row_cashout_f11['projection'] + $row_cashout_g11['projection'] + $row_cashout_h11['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e11['realisasi'] + $row_cashout_f11['realisasi'] + $row_cashout_g11['realisasi'] + $row_cashout_h11['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e12['projection'] + $row_cashout_f12['projection'] + $row_cashout_g12['projection'] + $row_cashout_h12['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e12['realisasi'] + $row_cashout_f12['realisasi'] + $row_cashout_g12['realisasi'] + $row_cashout_h12['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e13['projection'] + $row_cashout_f13['projection'] + $row_cashout_g13['projection'] + $row_cashout_h13['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e13['realisasi'] + $row_cashout_f13['realisasi'] + $row_cashout_g13['realisasi'] + $row_cashout_h13['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e14['projection'] + $row_cashout_f14['projection'] + $row_cashout_g14['projection'] + $row_cashout_h14['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e14['realisasi'] + $row_cashout_f14['realisasi'] + $row_cashout_g14['realisasi'] + $row_cashout_h14['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e15['projection'] + $row_cashout_f15['projection'] + $row_cashout_g15['projection'] + $row_cashout_h15['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e15['realisasi'] + $row_cashout_f15['realisasi'] + $row_cashout_g15['realisasi'] + $row_cashout_h15['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e16['projection'] + $row_cashout_f16['projection'] + $row_cashout_g16['projection'] + $row_cashout_h16['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e16['realisasi'] + $row_cashout_f16['realisasi'] + $row_cashout_g16['realisasi'] + $row_cashout_h16['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e17['projection'] + $row_cashout_f17['projection'] + $row_cashout_g17['projection'] + $row_cashout_h17['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e17['realisasi'] + $row_cashout_f17['realisasi'] + $row_cashout_g17['realisasi'] + $row_cashout_h17['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e18['projection'] + $row_cashout_f18['projection'] + $row_cashout_g18['projection'] + $row_cashout_h18['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e18['realisasi'] + $row_cashout_f18['realisasi'] + $row_cashout_g18['realisasi'] + $row_cashout_h18['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e19['projection'] + $row_cashout_f19['projection'] + $row_cashout_g19['projection'] + $row_cashout_h19['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e19['realisasi'] + $row_cashout_f19['realisasi'] + $row_cashout_g19['realisasi'] + $row_cashout_h19['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e20['projection'] + $row_cashout_f20['projection'] + $row_cashout_g20['projection'] + $row_cashout_h20['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e20['realisasi'] + $row_cashout_f20['realisasi'] + $row_cashout_g20['realisasi'] + $row_cashout_h20['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e21['projection'] + $row_cashout_f21['projection'] + $row_cashout_g21['projection'] + $row_cashout_h21['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e21['realisasi'] + $row_cashout_f21['realisasi'] + $row_cashout_g21['realisasi'] + $row_cashout_h21['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e22['projection'] + $row_cashout_f22['projection'] + $row_cashout_g22['projection'] + $row_cashout_h22['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e22['realisasi'] + $row_cashout_f22['realisasi'] + $row_cashout_g22['realisasi'] + $row_cashout_h22['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e23['projection'] + $row_cashout_f23['projection'] + $row_cashout_g23['projection'] + $row_cashout_h23['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e23['realisasi'] + $row_cashout_f23['realisasi'] + $row_cashout_g23['realisasi'] + $row_cashout_h23['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e24['projection'] + $row_cashout_f24['projection'] + $row_cashout_g24['projection'] + $row_cashout_h24['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e24['realisasi'] + $row_cashout_f24['realisasi'] + $row_cashout_g24['realisasi'] + $row_cashout_h24['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e25['projection'] + $row_cashout_f25['projection'] + $row_cashout_g25['projection'] + $row_cashout_h25['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_e25['realisasi'] + $row_cashout_f25['realisasi'] + $row_cashout_g25['realisasi'] + $row_cashout_h25['realisasi']) ?></td>
              
            </tr>

            <tr>
              <td>Pembayaran Hutang Bank Lain-lain (I+J+K+L+M+N+L3)</td>
                          
              <td style="text-align: right;"><?php echo number_format($row_cashout_i1['projection'] + $row_cashout_j1['projection'] + $row_cashout_k1['projection'] + $row_cashout_l1['projection'] + $row_cashout_m1['projection'] + $row_cashout_n1['projection'] + $row_cashout_l31['projection']) ?></td>
              
              <td style="text-align: right;"><?php echo number_format($row_cashout_i1['realisasi'] + $row_cashout_j1['realisasi'] + $row_cashout_k1['realisasi'] + $row_cashout_l1['realisasi'] + $row_cashout_m1['realisasi'] + $row_cashout_n1['realisasi'] + $row_cashout_l31['realisasi']) ?></td>
              
              <td style="text-align: right;"><?php echo number_format($row_cashout_i2['projection'] + $row_cashout_j2['projection'] + $row_cashout_k2['projection'] + $row_cashout_l2['projection'] + $row_cashout_m2['projection'] + $row_cashout_n2['projection'] + $row_cashout_l32['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i2['realisasi'] + $row_cashout_j2['realisasi'] + $row_cashout_k2['realisasi'] + $row_cashout_l2['realisasi'] + $row_cashout_m2['realisasi'] + $row_cashout_n2['realisasi'] + $row_cashout_l32['realisasi']) ?></td>
              
              <td style="text-align: right;"><?php echo number_format($row_cashout_i3['projection'] + $row_cashout_j3['projection'] + $row_cashout_k3['projection'] + $row_cashout_l3['projection'] + $row_cashout_m3['projection'] + $row_cashout_n3['projection'] + $row_cashout_l33['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i3['realisasi'] + $row_cashout_j3['realisasi'] + $row_cashout_k3['realisasi'] + $row_cashout_l3['realisasi'] + $row_cashout_m3['realisasi'] + $row_cashout_n3['realisasi'] + $row_cashout_l33['realisasi']) ?></td>
              
              <td style="text-align: right;"><?php echo number_format($row_cashout_i4['projection'] + $row_cashout_j4['projection'] + $row_cashout_k4['projection'] + $row_cashout_l4['projection'] + $row_cashout_m4['projection'] + $row_cashout_n4['projection'] + $row_cashout_l34['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i4['realisasi'] + $row_cashout_j4['realisasi'] + $row_cashout_k4['realisasi'] + $row_cashout_l4['realisasi'] + $row_cashout_m4['realisasi'] + $row_cashout_n4['realisasi'] + $row_cashout_l34['realisasi']) ?></td>
              
              <td style="text-align: right;"><?php echo number_format($row_cashout_i5['projection'] + $row_cashout_j5['projection'] + $row_cashout_k5['projection'] + $row_cashout_l5['projection'] + $row_cashout_m5['projection'] + $row_cashout_n5['projection'] + $row_cashout_l35['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i5['realisasi'] + $row_cashout_j5['realisasi'] + $row_cashout_k5['realisasi'] + $row_cashout_l5['realisasi'] + $row_cashout_m5['realisasi'] + $row_cashout_n5['realisasi'] + $row_cashout_l35['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i6['projection'] + $row_cashout_j6['projection'] + $row_cashout_k6['projection'] + $row_cashout_l6['projection'] + $row_cashout_m6['projection'] + $row_cashout_n6['projection'] + $row_cashout_l36['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i6['realisasi'] + $row_cashout_j6['realisasi'] + $row_cashout_k6['realisasi'] + $row_cashout_l6['realisasi'] + $row_cashout_m6['realisasi'] + $row_cashout_n6['realisasi'] + $row_cashout_l36['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i7['projection'] + $row_cashout_j7['projection'] + $row_cashout_k7['projection'] + $row_cashout_l7['projection'] + $row_cashout_m7['projection'] + $row_cashout_n7['projection'] + $row_cashout_l37['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i7['realisasi'] + $row_cashout_j7['realisasi'] + $row_cashout_k7['realisasi'] + $row_cashout_l7['realisasi'] + $row_cashout_m7['realisasi'] + $row_cashout_n7['realisasi'] + $row_cashout_l37['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i8['projection'] + $row_cashout_j8['projection'] + $row_cashout_k8['projection'] + $row_cashout_l8['projection'] + $row_cashout_m8['projection'] + $row_cashout_n8['projection'] + $row_cashout_l38['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i8['realisasi'] + $row_cashout_j8['realisasi'] + $row_cashout_k8['realisasi'] + $row_cashout_l8['realisasi'] + $row_cashout_m8['realisasi'] + $row_cashout_n8['realisasi'] + $row_cashout_l38['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i9['projection'] + $row_cashout_j9['projection'] + $row_cashout_k9['projection'] + $row_cashout_l9['projection'] + $row_cashout_m9['projection'] + $row_cashout_n9['projection'] + $row_cashout_l39['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i9['realisasi'] + $row_cashout_j9['realisasi'] + $row_cashout_k9['realisasi'] + $row_cashout_l9['realisasi'] + $row_cashout_m9['realisasi'] + $row_cashout_n9['realisasi'] + $row_cashout_l39['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i10['projection'] + $row_cashout_j10['projection'] + $row_cashout_k10['projection'] + $row_cashout_l10['projection'] + $row_cashout_m10['projection'] + $row_cashout_n10['projection'] + $row_cashout_l310['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i10['realisasi'] + $row_cashout_j10['realisasi'] + $row_cashout_k10['realisasi'] + $row_cashout_l10['realisasi'] + $row_cashout_m10['realisasi'] + $row_cashout_n10['realisasi'] + $row_cashout_l310['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i11['projection'] + $row_cashout_j11['projection'] + $row_cashout_k11['projection'] + $row_cashout_l11['projection'] + $row_cashout_m11['projection'] + $row_cashout_n11['projection'] + $row_cashout_l311['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i11['realisasi'] + $row_cashout_j11['realisasi'] + $row_cashout_k11['realisasi'] + $row_cashout_l11['realisasi'] + $row_cashout_m11['realisasi'] + $row_cashout_n11['realisasi'] + $row_cashout_l311['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i12['projection'] + $row_cashout_j12['projection'] + $row_cashout_k12['projection'] + $row_cashout_l12['projection'] + $row_cashout_m12['projection'] + $row_cashout_n12['projection'] + $row_cashout_l312['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i12['realisasi'] + $row_cashout_j12['realisasi'] + $row_cashout_k12['realisasi'] + $row_cashout_l12['realisasi'] + $row_cashout_m12['realisasi'] + $row_cashout_n12['realisasi'] + $row_cashout_l312['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i13['projection'] + $row_cashout_j13['projection'] + $row_cashout_k13['projection'] + $row_cashout_l13['projection'] + $row_cashout_m13['projection'] + $row_cashout_n13['projection'] + $row_cashout_l313['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i13['realisasi'] + $row_cashout_j13['realisasi'] + $row_cashout_k13['realisasi'] + $row_cashout_l13['realisasi'] + $row_cashout_m13['realisasi'] + $row_cashout_n13['realisasi'] + $row_cashout_l313['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i14['projection'] + $row_cashout_j14['projection'] + $row_cashout_k14['projection'] + $row_cashout_l14['projection'] + $row_cashout_m14['projection'] + $row_cashout_n14['projection'] + $row_cashout_l314['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i14['realisasi'] + $row_cashout_j14['realisasi'] + $row_cashout_k14['realisasi'] + $row_cashout_l14['realisasi'] + $row_cashout_m14['realisasi'] + $row_cashout_n14['realisasi'] + $row_cashout_l314['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i15['projection'] + $row_cashout_j15['projection'] + $row_cashout_k15['projection'] + $row_cashout_l15['projection'] + $row_cashout_m15['projection'] + $row_cashout_n15['projection'] + $row_cashout_l315['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i15['realisasi'] + $row_cashout_j15['realisasi'] + $row_cashout_k15['realisasi'] + $row_cashout_l15['realisasi'] + $row_cashout_m15['realisasi'] + $row_cashout_n15['realisasi'] + $row_cashout_l315['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i16['projection'] + $row_cashout_j16['projection'] + $row_cashout_k16['projection'] + $row_cashout_l16['projection'] + $row_cashout_m16['projection'] + $row_cashout_n16['projection'] + $row_cashout_l316['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i16['realisasi'] + $row_cashout_j16['realisasi'] + $row_cashout_k16['realisasi'] + $row_cashout_l16['realisasi'] + $row_cashout_m16['realisasi'] + $row_cashout_n16['realisasi'] + $row_cashout_l316['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i17['projection'] + $row_cashout_j17['projection'] + $row_cashout_k17['projection'] + $row_cashout_l17['projection'] + $row_cashout_m17['projection'] + $row_cashout_n17['projection'] + $row_cashout_l317['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i17['realisasi'] + $row_cashout_j17['realisasi'] + $row_cashout_k17['realisasi'] + $row_cashout_l17['realisasi'] + $row_cashout_m17['realisasi'] + $row_cashout_n17['realisasi'] + $row_cashout_l317['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i18['projection'] + $row_cashout_j18['projection'] + $row_cashout_k18['projection'] + $row_cashout_l18['projection'] + $row_cashout_m18['projection'] + $row_cashout_n18['projection'] + $row_cashout_l318['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i18['realisasi'] + $row_cashout_j18['realisasi'] + $row_cashout_k18['realisasi'] + $row_cashout_l18['realisasi'] + $row_cashout_m18['realisasi'] + $row_cashout_n18['realisasi'] + $row_cashout_l318['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i19['projection'] + $row_cashout_j19['projection'] + $row_cashout_k19['projection'] + $row_cashout_l19['projection'] + $row_cashout_m19['projection'] + $row_cashout_n19['projection'] + $row_cashout_l319['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i19['realisasi'] + $row_cashout_j19['realisasi'] + $row_cashout_k19['realisasi'] + $row_cashout_l19['realisasi'] + $row_cashout_m19['realisasi'] + $row_cashout_n19['realisasi'] + $row_cashout_l319['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i20['projection'] + $row_cashout_j20['projection'] + $row_cashout_k20['projection'] + $row_cashout_l20['projection'] + $row_cashout_m20['projection'] + $row_cashout_n20['projection'] + $row_cashout_l320['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i20['realisasi'] + $row_cashout_j20['realisasi'] + $row_cashout_k20['realisasi'] + $row_cashout_l20['realisasi'] + $row_cashout_m20['realisasi'] + $row_cashout_n20['realisasi'] + $row_cashout_l320['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i21['projection'] + $row_cashout_j21['projection'] + $row_cashout_k21['projection'] + $row_cashout_l21['projection'] + $row_cashout_m21['projection'] + $row_cashout_n21['projection'] + $row_cashout_l321['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i21['realisasi'] + $row_cashout_j21['realisasi'] + $row_cashout_k21['realisasi'] + $row_cashout_l21['realisasi'] + $row_cashout_m21['realisasi'] + $row_cashout_n21['realisasi'] + $row_cashout_l321['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i22['projection'] + $row_cashout_j22['projection'] + $row_cashout_k22['projection'] + $row_cashout_l22['projection'] + $row_cashout_m22['projection'] + $row_cashout_n22['projection'] + $row_cashout_l322['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i22['realisasi'] + $row_cashout_j22['realisasi'] + $row_cashout_k22['realisasi'] + $row_cashout_l22['realisasi'] + $row_cashout_m22['realisasi'] + $row_cashout_n22['realisasi'] + $row_cashout_l322['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i23['projection'] + $row_cashout_j23['projection'] + $row_cashout_k23['projection'] + $row_cashout_l23['projection'] + $row_cashout_m23['projection'] + $row_cashout_n23['projection'] + $row_cashout_l323['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i23['realisasi'] + $row_cashout_j23['realisasi'] + $row_cashout_k23['realisasi'] + $row_cashout_l23['realisasi'] + $row_cashout_m23['realisasi'] + $row_cashout_n23['realisasi'] + $row_cashout_l323['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i24['projection'] + $row_cashout_j24['projection'] + $row_cashout_k24['projection'] + $row_cashout_l24['projection'] + $row_cashout_m24['projection'] + $row_cashout_n24['projection'] + $row_cashout_l324['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i24['realisasi'] + $row_cashout_j24['realisasi'] + $row_cashout_k24['realisasi'] + $row_cashout_l24['realisasi'] + $row_cashout_m24['realisasi'] + $row_cashout_n24['realisasi'] + $row_cashout_l324['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i25['projection'] + $row_cashout_j25['projection'] + $row_cashout_k25['projection'] + $row_cashout_l25['projection'] + $row_cashout_m25['projection'] + $row_cashout_n25['projection'] + $row_cashout_l325['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i25['realisasi'] + $row_cashout_j25['realisasi'] + $row_cashout_k25['realisasi'] + $row_cashout_l25['realisasi'] + $row_cashout_m25['realisasi'] + $row_cashout_n25['realisasi'] + $row_cashout_l325['realisasi']) ?></td>
              
            </tr>

            

            <tr>
              <td>Biaya-Biaya (O s/d G3) + J3 + K3</td>
                          
              <td style="text-align: right;"><?php echo number_format($row_cashout_o1['projection'] + $row_cashout_p1['projection'] + $row_cashout_q1['projection'] + $row_cashout_r1['projection'] + $row_cashout_s1['projection'] + $row_cashout_t1['projection'] + $row_cashout_u1['projection'] + $row_cashout_v1['projection'] + $row_cashout_w1['projection'] + $row_cashout_x1['projection'] + $row_cashout_y1['projection'] + $row_cashout_z1['projection'] + $row_cashout_a21['projection'] + $row_cashout_b21['projection'] + $row_cashout_c21['projection'] + $row_cashout_d21['projection'] + $row_cashout_e21['projection'] + $row_cashout_f21['projection'] + $row_cashout_g21['projection'] + $row_cashout_h21['projection'] + $row_cashout_i21['projection'] + $row_cashout_j21['projection'] + $row_cashout_k21['projection'] + $row_cashout_l21['projection'] + $row_cashout_m21['projection'] + $row_cashout_n21['projection'] + $row_cashout_o21['projection'] + $row_cashout_p21['projection'] +
                $row_cashout_q21['projection'] + $row_cashout_r21['projection'] + $row_cashout_s21['projection'] +
                $row_cashout_t21['projection'] + $row_cashout_u21['projection'] + $row_cashout_v21['projection'] +
                $row_cashout_w21['projection'] + $row_cashout_x21['projection'] + $row_cashout_y21['projection'] + $row_cashout_z21['projection'] + $row_cashout_a31['projection'] + $row_cashout_b31['projection'] + $row_cashout_c31['projection'] + $row_cashout_d31['projection'] + $row_cashout_e31['projection'] + $row_cashout_f31['projection'] + $row_cashout_g31['projection'] + $row_cashout_j31['projection'] + $row_cashout_k31['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o1['realisasi'] + $row_cashout_p1['realisasi'] + $row_cashout_q1['realisasi'] + $row_cashout_r1['realisasi'] + $row_cashout_s1['realisasi'] + $row_cashout_t1['realisasi'] + $row_cashout_u1['realisasi'] + $row_cashout_v1['realisasi'] + $row_cashout_w1['realisasi'] + $row_cashout_x1['realisasi'] + $row_cashout_y1['realisasi'] + $row_cashout_z1['realisasi'] + $row_cashout_a21['realisasi'] + $row_cashout_b21['realisasi'] + $row_cashout_c21['realisasi'] + $row_cashout_d21['realisasi'] + $row_cashout_e21['realisasi'] + $row_cashout_f21['realisasi'] + $row_cashout_g21['realisasi'] + $row_cashout_h21['realisasi'] + $row_cashout_i21['realisasi'] + $row_cashout_j21['realisasi'] + $row_cashout_k21['realisasi'] + $row_cashout_l21['realisasi'] + $row_cashout_m21['realisasi'] + $row_cashout_n21['realisasi'] + $row_cashout_o21['realisasi'] + $row_cashout_p21['realisasi'] +
                $row_cashout_q21['realisasi'] + $row_cashout_r21['realisasi'] + $row_cashout_s21['realisasi'] +
                $row_cashout_t21['realisasi'] + $row_cashout_u21['realisasi'] + $row_cashout_v21['realisasi'] +
                $row_cashout_w21['realisasi'] + $row_cashout_x21['realisasi'] + $row_cashout_y21['realisasi'] + $row_cashout_z21['realisasi'] + $row_cashout_a31['realisasi'] + $row_cashout_b31['realisasi'] + $row_cashout_c31['realisasi']  + $row_cashout_d31['realisasi']  + $row_cashout_e31['realisasi'] + $row_cashout_f31['realisasi'] + $row_cashout_g31['realisasi'] + $row_cashout_j31['realisasi'] + $row_cashout_k31['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o2['projection'] + $row_cashout_p2['projection'] + $row_cashout_q2['projection'] + $row_cashout_r2['projection'] + $row_cashout_s2['projection'] + $row_cashout_t2['projection'] + $row_cashout_u2['projection'] + $row_cashout_v2['projection'] + $row_cashout_w2['projection'] + $row_cashout_x2['projection'] + $row_cashout_y2['projection'] + $row_cashout_z2['projection'] + $row_cashout_a22['projection'] + $row_cashout_b22['projection'] + $row_cashout_c22['projection'] + $row_cashout_d22['projection'] + $row_cashout_e22['projection'] + $row_cashout_f22['projection'] + $row_cashout_g22['projection'] + $row_cashout_h22['projection'] + $row_cashout_i22['projection'] + $row_cashout_j22['projection'] + $row_cashout_k22['projection'] + $row_cashout_l22['projection'] + $row_cashout_m22['projection'] + $row_cashout_n22['projection'] + $row_cashout_o22['projection'] + $row_cashout_p22['projection'] +
                $row_cashout_q22['projection'] + $row_cashout_r22['projection'] + $row_cashout_s22['projection'] +
                $row_cashout_t22['projection'] + $row_cashout_u22['projection'] + $row_cashout_v22['projection'] +
                $row_cashout_w22['projection'] + $row_cashout_x22['projection'] + $row_cashout_y22['projection'] + $row_cashout_z22['projection'] + $row_cashout_a32['projection'] + $row_cashout_b32['projection'] + $row_cashout_c32['projection'] + $row_cashout_d32['projection'] + $row_cashout_e32['projection'] + $row_cashout_f32['projection'] + $row_cashout_g32['projection'] + $row_cashout_j32['projection'] + $row_cashout_k32['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o2['realisasi'] + $row_cashout_p2['realisasi'] + $row_cashout_q2['realisasi'] + $row_cashout_r2['realisasi'] + $row_cashout_s2['realisasi'] + $row_cashout_t2['realisasi'] + $row_cashout_u2['realisasi'] + $row_cashout_v2['realisasi'] + $row_cashout_w2['realisasi'] + $row_cashout_x2['realisasi'] + $row_cashout_y2['realisasi'] + $row_cashout_z2['realisasi'] + $row_cashout_a22['realisasi'] + $row_cashout_b22['realisasi'] + $row_cashout_c22['realisasi'] + $row_cashout_d22['realisasi'] + $row_cashout_e22['realisasi'] + $row_cashout_f22['realisasi'] + $row_cashout_g22['realisasi'] + $row_cashout_h22['realisasi'] + $row_cashout_i22['realisasi'] + $row_cashout_j22['realisasi'] + $row_cashout_k22['realisasi'] + $row_cashout_l22['realisasi'] + $row_cashout_m22['realisasi'] + $row_cashout_n22['realisasi'] + $row_cashout_o22['realisasi'] + $row_cashout_p22['realisasi'] +
                $row_cashout_q22['realisasi'] + $row_cashout_r22['realisasi'] + $row_cashout_s22['realisasi'] +
                $row_cashout_t22['realisasi'] + $row_cashout_u22['realisasi'] + $row_cashout_v22['realisasi'] +
                $row_cashout_w22['realisasi'] + $row_cashout_x22['realisasi'] + $row_cashout_y22['realisasi'] + $row_cashout_z22['realisasi'] + $row_cashout_a32['realisasi'] + $row_cashout_b32['realisasi'] + $row_cashout_c32['realisasi'] + $row_cashout_d32['realisasi'] + $row_cashout_e32['realisasi'] + $row_cashout_f32['realisasi'] + $row_cashout_g32['realisasi'] + $row_cashout_j32['realisasi'] + $row_cashout_k32['realisasi']) ?></td>
              
              <td style="text-align: right;"><?php echo number_format($row_cashout_o3['projection'] + $row_cashout_p3['projection'] + $row_cashout_q3['projection'] + $row_cashout_r3['projection'] + $row_cashout_s3['projection'] + $row_cashout_t3['projection'] + $row_cashout_u3['projection'] + $row_cashout_v3['projection'] + $row_cashout_w3['projection'] + $row_cashout_x3['projection'] + $row_cashout_y3['projection'] + $row_cashout_z3['projection'] + $row_cashout_a23['projection'] + $row_cashout_b23['projection'] + $row_cashout_c23['projection'] + $row_cashout_d23['projection'] + $row_cashout_e23['projection'] + $row_cashout_f23['projection'] + $row_cashout_g23['projection'] + $row_cashout_h23['projection'] + $row_cashout_i23['projection'] + $row_cashout_j23['projection'] + $row_cashout_k23['projection'] + $row_cashout_l23['projection'] + $row_cashout_m23['projection'] + $row_cashout_n23['projection'] + $row_cashout_o23['projection'] + $row_cashout_p23['projection'] +
                $row_cashout_q23['projection'] + $row_cashout_r23['projection'] + $row_cashout_s23['projection'] +
                $row_cashout_t23['projection'] + $row_cashout_u23['projection'] + $row_cashout_v23['projection'] +
                $row_cashout_w23['projection'] + $row_cashout_x23['projection'] + $row_cashout_y23['projection'] + $row_cashout_z23['projection'] + $row_cashout_a33['projection'] + $row_cashout_b33['projection'] + $row_cashout_c33['projection'] + $row_cashout_d33['projection'] + $row_cashout_e33['projection'] + $row_cashout_f33['projection'] + $row_cashout_g33['projection'] + $row_cashout_j33['projection'] + $row_cashout_k33['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o3['realisasi'] + $row_cashout_p3['realisasi'] + $row_cashout_q3['realisasi'] + $row_cashout_r3['realisasi'] + $row_cashout_s3['realisasi'] + $row_cashout_t3['realisasi'] + $row_cashout_u3['realisasi'] + $row_cashout_v3['realisasi'] + $row_cashout_w3['realisasi'] + $row_cashout_x3['realisasi'] + $row_cashout_y3['realisasi'] + $row_cashout_z3['realisasi'] + $row_cashout_a23['realisasi'] + $row_cashout_b23['realisasi'] + $row_cashout_c23['realisasi'] + $row_cashout_d23['realisasi'] + $row_cashout_e23['realisasi'] + $row_cashout_f23['realisasi'] + $row_cashout_g23['realisasi'] + $row_cashout_h23['realisasi'] + $row_cashout_i23['realisasi'] + $row_cashout_j23['realisasi'] + $row_cashout_k23['realisasi'] + $row_cashout_l23['realisasi'] + $row_cashout_m23['realisasi'] + $row_cashout_n23['realisasi'] + $row_cashout_o23['realisasi'] + $row_cashout_p23['realisasi'] +
                $row_cashout_q23['realisasi'] + $row_cashout_r23['realisasi'] + $row_cashout_s23['realisasi'] +
                $row_cashout_t23['realisasi'] + $row_cashout_u23['realisasi'] + $row_cashout_v23['realisasi'] +
                $row_cashout_w23['realisasi'] + $row_cashout_x23['realisasi'] + $row_cashout_y23['realisasi'] + $row_cashout_z23['realisasi'] + $row_cashout_a33['realisasi'] + $row_cashout_b33['realisasi'] + $row_cashout_c33['realisasi'] + $row_cashout_d33['realisasi'] + $row_cashout_e33['realisasi'] + $row_cashout_f33['realisasi'] + $row_cashout_g33['realisasi'] + $row_cashout_j33['realisasi'] + $row_cashout_k33['realisasi']) ?></td>
              
              <td style="text-align: right;"><?php echo number_format($row_cashout_o4['projection'] + $row_cashout_p4['projection'] + $row_cashout_q4['projection'] + $row_cashout_r4['projection'] + $row_cashout_s4['projection'] + $row_cashout_t4['projection'] + $row_cashout_u4['projection'] + $row_cashout_v4['projection'] + $row_cashout_w4['projection'] + $row_cashout_x4['projection'] + $row_cashout_y4['projection'] + $row_cashout_z4['projection'] + $row_cashout_a24['projection'] + $row_cashout_b24['projection'] + $row_cashout_c24['projection'] + $row_cashout_d24['projection'] + $row_cashout_e24['projection'] + $row_cashout_f24['projection'] + $row_cashout_g24['projection'] + $row_cashout_h24['projection'] + $row_cashout_i24['projection'] + $row_cashout_j24['projection'] + $row_cashout_k24['projection'] + $row_cashout_l24['projection'] + $row_cashout_m24['projection'] + $row_cashout_n24['projection'] + $row_cashout_o24['projection'] + $row_cashout_p24['projection'] +
                $row_cashout_q24['projection'] + $row_cashout_r24['projection'] + $row_cashout_s24['projection'] +
                $row_cashout_t24['projection'] + $row_cashout_u24['projection'] + $row_cashout_v24['projection'] +
                $row_cashout_w24['projection'] + $row_cashout_x24['projection'] + $row_cashout_y24['projection'] + $row_cashout_z24['projection'] + $row_cashout_a34['projection'] + $row_cashout_b34['projection'] + $row_cashout_c34['projection'] + $row_cashout_d34['projection'] + $row_cashout_e34['projection'] + $row_cashout_f34['projection'] + $row_cashout_g34['projection'] + $row_cashout_j34['projection'] + $row_cashout_k34['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o4['realisasi'] + $row_cashout_p4['realisasi'] + $row_cashout_q4['realisasi'] + $row_cashout_r4['realisasi'] + $row_cashout_s4['realisasi'] + $row_cashout_t4['realisasi'] + $row_cashout_u4['realisasi'] + $row_cashout_v4['realisasi'] + $row_cashout_w4['realisasi'] + $row_cashout_x4['realisasi'] + $row_cashout_y4['realisasi'] + $row_cashout_z4['realisasi'] + $row_cashout_a24['realisasi'] + $row_cashout_b24['realisasi'] + $row_cashout_c24['realisasi'] + $row_cashout_d24['realisasi'] + $row_cashout_e24['realisasi'] + $row_cashout_f24['realisasi'] + $row_cashout_g24['realisasi'] + $row_cashout_h24['realisasi'] + $row_cashout_i24['realisasi'] + $row_cashout_j24['realisasi'] + $row_cashout_k24['realisasi'] + $row_cashout_l24['realisasi'] + $row_cashout_m24['realisasi'] + $row_cashout_n24['realisasi'] + $row_cashout_o24['realisasi'] + $row_cashout_p24['realisasi'] +
                $row_cashout_q24['realisasi'] + $row_cashout_r24['realisasi'] + $row_cashout_s24['realisasi'] +
                $row_cashout_t24['realisasi'] + $row_cashout_u24['realisasi'] + $row_cashout_v24['realisasi'] +
                $row_cashout_w24['realisasi'] + $row_cashout_x24['realisasi'] + $row_cashout_y24['realisasi'] + $row_cashout_z24['realisasi'] + $row_cashout_a34['realisasi'] + $row_cashout_b34['realisasi'] + $row_cashout_c34['realisasi'] + $row_cashout_d34['realisasi'] + $row_cashout_e34['realisasi'] + $row_cashout_f34['realisasi'] + $row_cashout_g34['realisasi'] + $row_cashout_j34['realisasi'] + $row_cashout_k34['realisasi']) ?></td>
              
              <td style="text-align: right;"><?php echo number_format($row_cashout_o5['projection'] + $row_cashout_p5['projection'] + $row_cashout_q5['projection'] + $row_cashout_r5['projection'] + $row_cashout_s5['projection'] + $row_cashout_t5['projection'] + $row_cashout_u5['projection'] + $row_cashout_v5['projection'] + $row_cashout_w5['projection'] + $row_cashout_x5['projection'] + $row_cashout_y5['projection'] + $row_cashout_z5['projection'] + $row_cashout_a25['projection'] + $row_cashout_b25['projection'] + $row_cashout_c25['projection'] + $row_cashout_d25['projection'] + $row_cashout_e25['projection'] + $row_cashout_f25['projection'] + $row_cashout_g25['projection'] + $row_cashout_h25['projection'] + $row_cashout_i25['projection'] + $row_cashout_j25['projection'] + $row_cashout_k25['projection'] + $row_cashout_l25['projection'] + $row_cashout_m25['projection'] + $row_cashout_n25['projection'] + $row_cashout_o25['projection'] + $row_cashout_p25['projection'] +
                $row_cashout_q25['projection'] + $row_cashout_r25['projection'] + $row_cashout_s25['projection'] +
                $row_cashout_t25['projection'] + $row_cashout_u25['projection'] + $row_cashout_v25['projection'] +
                $row_cashout_w25['projection'] + $row_cashout_x25['projection'] + $row_cashout_y25['projection'] + $row_cashout_z25['projection'] + $row_cashout_a35['projection'] + $row_cashout_b35['projection'] + $row_cashout_c35['projection'] + $row_cashout_d35['projection'] + $row_cashout_e35['projection'] + $row_cashout_f35['projection'] + $row_cashout_g35['projection'] + $row_cashout_j35['projection'] + $row_cashout_k35['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o5['realisasi'] + $row_cashout_p5['realisasi'] + $row_cashout_q5['realisasi'] + $row_cashout_r5['realisasi'] + $row_cashout_s5['realisasi'] + $row_cashout_t5['realisasi'] + $row_cashout_u5['realisasi'] + $row_cashout_v5['realisasi'] + $row_cashout_w5['realisasi'] + $row_cashout_x5['realisasi'] + $row_cashout_y5['realisasi'] + $row_cashout_z5['realisasi'] + $row_cashout_a25['realisasi'] + $row_cashout_b25['realisasi'] + $row_cashout_c25['realisasi'] + $row_cashout_d25['realisasi'] + $row_cashout_e25['realisasi'] + $row_cashout_f25['realisasi'] + $row_cashout_g25['realisasi'] + $row_cashout_h25['realisasi'] + $row_cashout_i25['realisasi'] + $row_cashout_j25['realisasi'] + $row_cashout_k25['realisasi'] + $row_cashout_l25['realisasi'] + $row_cashout_m25['realisasi'] + $row_cashout_n25['realisasi'] + $row_cashout_o25['realisasi'] + $row_cashout_p25['realisasi'] +
                $row_cashout_q25['realisasi'] + $row_cashout_r25['realisasi'] + $row_cashout_s25['realisasi'] +
                $row_cashout_t25['realisasi'] + $row_cashout_u25['realisasi'] + $row_cashout_v25['realisasi'] +
                $row_cashout_w25['realisasi'] + $row_cashout_x25['realisasi'] + $row_cashout_y25['realisasi'] + $row_cashout_z25['realisasi'] + $row_cashout_a35['realisasi'] + $row_cashout_b35['realisasi'] + $row_cashout_c35['realisasi'] + $row_cashout_d35['realisasi'] + $row_cashout_e35['realisasi'] + $row_cashout_f35['realisasi'] + $row_cashout_g35['realisasi'] + $row_cashout_j35['realisasi'] + $row_cashout_k35['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o6['projection'] + $row_cashout_p6['projection'] + $row_cashout_q6['projection'] + $row_cashout_r6['projection'] + $row_cashout_s6['projection'] + $row_cashout_t6['projection'] + $row_cashout_u6['projection'] + $row_cashout_v6['projection'] + $row_cashout_w6['projection'] + $row_cashout_x6['projection'] + $row_cashout_y6['projection'] + $row_cashout_z6['projection'] + $row_cashout_a26['projection'] + $row_cashout_b26['projection'] + $row_cashout_c26['projection'] + $row_cashout_d26['projection'] + $row_cashout_e26['projection'] + $row_cashout_f26['projection'] + $row_cashout_g26['projection'] + $row_cashout_h26['projection'] + $row_cashout_i26['projection'] + $row_cashout_j26['projection'] + $row_cashout_k26['projection'] + $row_cashout_l26['projection'] + $row_cashout_m26['projection'] + $row_cashout_n26['projection'] + $row_cashout_o26['projection'] + $row_cashout_p26['projection'] +
                $row_cashout_q26['projection'] + $row_cashout_r26['projection'] + $row_cashout_s26['projection'] +
                $row_cashout_t26['projection'] + $row_cashout_u26['projection'] + $row_cashout_v26['projection'] +
                $row_cashout_w26['projection'] + $row_cashout_x26['projection'] + $row_cashout_y26['projection'] + $row_cashout_z26['projection'] + $row_cashout_a36['projection'] + $row_cashout_b36['projection'] + $row_cashout_c36['projection'] + $row_cashout_d36['projection'] + $row_cashout_e36['projection'] + $row_cashout_f36['projection'] + $row_cashout_g36['projection'] + $row_cashout_j36['projection'] + $row_cashout_k36['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o6['realisasi'] + $row_cashout_p6['realisasi'] + $row_cashout_q6['realisasi'] + $row_cashout_r6['realisasi'] + $row_cashout_s6['realisasi'] + $row_cashout_t6['realisasi'] + $row_cashout_u6['realisasi'] + $row_cashout_v6['realisasi'] + $row_cashout_w6['realisasi'] + $row_cashout_x6['realisasi'] + $row_cashout_y6['realisasi'] + $row_cashout_z6['realisasi'] + $row_cashout_a26['realisasi'] + $row_cashout_b26['realisasi'] + $row_cashout_c26['realisasi'] + $row_cashout_d26['realisasi'] + $row_cashout_e26['realisasi'] + $row_cashout_f26['realisasi'] + $row_cashout_g26['realisasi'] + $row_cashout_h26['realisasi'] + $row_cashout_i26['realisasi'] + $row_cashout_j26['realisasi'] + $row_cashout_k26['realisasi'] + $row_cashout_l26['realisasi'] + $row_cashout_m26['realisasi'] + $row_cashout_n26['realisasi'] + $row_cashout_o26['realisasi'] + $row_cashout_p26['realisasi'] +
                $row_cashout_q26['realisasi'] + $row_cashout_r26['realisasi'] + $row_cashout_s26['realisasi'] +
                $row_cashout_t26['realisasi'] + $row_cashout_u26['realisasi'] + $row_cashout_v26['realisasi'] +
                $row_cashout_w26['realisasi'] + $row_cashout_x26['realisasi'] + $row_cashout_y26['realisasi'] + $row_cashout_z26['realisasi'] + $row_cashout_a36['realisasi'] + $row_cashout_b36['realisasi'] + $row_cashout_c36['realisasi'] + $row_cashout_d36['realisasi'] + $row_cashout_e36['realisasi'] + $row_cashout_f36['realisasi'] + $row_cashout_g36['realisasi'] + $row_cashout_j36['realisasi'] + $row_cashout_k36['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o7['projection'] + $row_cashout_p7['projection'] + $row_cashout_q7['projection'] + $row_cashout_r7['projection'] + $row_cashout_s7['projection'] + $row_cashout_t7['projection'] + $row_cashout_u7['projection'] + $row_cashout_v7['projection'] + $row_cashout_w7['projection'] + $row_cashout_x7['projection'] + $row_cashout_y7['projection'] + $row_cashout_z7['projection'] + $row_cashout_a27['projection'] + $row_cashout_b27['projection'] + $row_cashout_c27['projection'] + $row_cashout_d27['projection'] + $row_cashout_e27['projection'] + $row_cashout_f27['projection'] + $row_cashout_g27['projection'] + $row_cashout_h27['projection'] + $row_cashout_i27['projection'] + $row_cashout_j27['projection'] + $row_cashout_k27['projection'] + $row_cashout_l27['projection'] + $row_cashout_m27['projection'] + $row_cashout_n27['projection'] + $row_cashout_o27['projection'] + $row_cashout_p27['projection'] +
                $row_cashout_q27['projection'] + $row_cashout_r27['projection'] + $row_cashout_s27['projection'] +
                $row_cashout_t27['projection'] + $row_cashout_u27['projection'] + $row_cashout_v27['projection'] +
                $row_cashout_w27['projection'] + $row_cashout_x27['projection'] + $row_cashout_y27['projection'] + $row_cashout_z27['projection'] + $row_cashout_a37['projection'] + $row_cashout_b37['projection'] + $row_cashout_c37['projection'] + $row_cashout_d37['projection'] + $row_cashout_e37['projection'] + $row_cashout_f37['projection'] + $row_cashout_g37['projection'] + $row_cashout_j37['projection'] + $row_cashout_k37['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o7['realisasi'] + $row_cashout_p7['realisasi'] + $row_cashout_q7['realisasi'] + $row_cashout_r7['realisasi'] + $row_cashout_s7['realisasi'] + $row_cashout_t7['realisasi'] + $row_cashout_u7['realisasi'] + $row_cashout_v7['realisasi'] + $row_cashout_w7['realisasi'] + $row_cashout_x7['realisasi'] + $row_cashout_y7['realisasi'] + $row_cashout_z7['realisasi'] + $row_cashout_a27['realisasi'] + $row_cashout_b27['realisasi'] + $row_cashout_c27['realisasi'] + $row_cashout_d27['realisasi'] + $row_cashout_e27['realisasi'] + $row_cashout_f27['realisasi'] + $row_cashout_g27['realisasi'] + $row_cashout_h27['realisasi'] + $row_cashout_i27['realisasi'] + $row_cashout_j27['realisasi'] + $row_cashout_k27['realisasi'] + $row_cashout_l27['realisasi'] + $row_cashout_m27['realisasi'] + $row_cashout_n27['realisasi'] + $row_cashout_o27['realisasi'] + $row_cashout_p27['realisasi'] +
                $row_cashout_q27['realisasi'] + $row_cashout_r27['realisasi'] + $row_cashout_s27['realisasi'] +
                $row_cashout_t27['realisasi'] + $row_cashout_u27['realisasi'] + $row_cashout_v27['realisasi'] +
                $row_cashout_w27['realisasi'] + $row_cashout_x27['realisasi'] + $row_cashout_y27['realisasi'] + $row_cashout_z27['realisasi'] + $row_cashout_a37['realisasi'] + $row_cashout_b37['realisasi'] + $row_cashout_c37['realisasi'] + $row_cashout_d37['realisasi'] + $row_cashout_e37['realisasi'] + $row_cashout_f37['realisasi'] + $row_cashout_g37['realisasi'] + $row_cashout_j37['realisasi'] + $row_cashout_k37['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o8['projection'] + $row_cashout_p8['projection'] + $row_cashout_q8['projection'] + $row_cashout_r8['projection'] + $row_cashout_s8['projection'] + $row_cashout_t8['projection'] + $row_cashout_u8['projection'] + $row_cashout_v8['projection'] + $row_cashout_w8['projection'] + $row_cashout_x8['projection'] + $row_cashout_y8['projection'] + $row_cashout_z8['projection'] + $row_cashout_a28['projection'] + $row_cashout_b28['projection'] + $row_cashout_c28['projection'] + $row_cashout_d28['projection'] + $row_cashout_e28['projection'] + $row_cashout_f28['projection'] + $row_cashout_g28['projection'] + $row_cashout_h28['projection'] + $row_cashout_i28['projection'] + $row_cashout_j28['projection'] + $row_cashout_k28['projection'] + $row_cashout_l28['projection'] + $row_cashout_m28['projection'] + $row_cashout_n28['projection'] + $row_cashout_o28['projection'] + $row_cashout_p28['projection'] +
                $row_cashout_q28['projection'] + $row_cashout_r28['projection'] + $row_cashout_s28['projection'] +
                $row_cashout_t28['projection'] + $row_cashout_u28['projection'] + $row_cashout_v28['projection'] +
                $row_cashout_w28['projection'] + $row_cashout_x28['projection'] + $row_cashout_y28['projection'] + $row_cashout_z28['projection'] + $row_cashout_a38['projection'] + $row_cashout_b38['projection'] + $row_cashout_c38['projection'] + $row_cashout_d38['projection'] + $row_cashout_e38['projection'] + $row_cashout_f38['projection'] + $row_cashout_g38['projection'] + $row_cashout_j38['projection'] + $row_cashout_k38['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o8['realisasi'] + $row_cashout_p8['realisasi'] + $row_cashout_q8['realisasi'] + $row_cashout_r8['realisasi'] + $row_cashout_s8['realisasi'] + $row_cashout_t8['realisasi'] + $row_cashout_u8['realisasi'] + $row_cashout_v8['realisasi'] + $row_cashout_w8['realisasi'] + $row_cashout_x8['realisasi'] + $row_cashout_y8['realisasi'] + $row_cashout_z8['realisasi'] + $row_cashout_a28['realisasi'] + $row_cashout_b28['realisasi'] + $row_cashout_c28['realisasi'] + $row_cashout_d28['realisasi'] + $row_cashout_e28['realisasi'] + $row_cashout_f28['realisasi'] + $row_cashout_g28['realisasi'] + $row_cashout_h28['realisasi'] + $row_cashout_i28['realisasi'] + $row_cashout_j28['realisasi'] + $row_cashout_k28['realisasi'] + $row_cashout_l28['realisasi'] + $row_cashout_m28['realisasi'] + $row_cashout_n28['realisasi'] + $row_cashout_o28['realisasi'] + $row_cashout_p28['realisasi'] +
                $row_cashout_q28['realisasi'] + $row_cashout_r28['realisasi'] + $row_cashout_s28['realisasi'] +
                $row_cashout_t28['realisasi'] + $row_cashout_u28['realisasi'] + $row_cashout_v28['realisasi'] +
                $row_cashout_w28['realisasi'] + $row_cashout_x28['realisasi'] + $row_cashout_y28['realisasi'] + $row_cashout_z28['realisasi'] + $row_cashout_a38['realisasi'] + $row_cashout_b38['realisasi'] + $row_cashout_c38['realisasi'] + $row_cashout_d38['realisasi'] + $row_cashout_e38['realisasi'] + $row_cashout_f38['realisasi'] + $row_cashout_g38['realisasi'] + $row_cashout_j38['realisasi'] + $row_cashout_k38['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o9['projection'] + $row_cashout_p9['projection'] + $row_cashout_q9['projection'] + $row_cashout_r9['projection'] + $row_cashout_s9['projection'] + $row_cashout_t9['projection'] + $row_cashout_u9['projection'] + $row_cashout_v9['projection'] + $row_cashout_w9['projection'] + $row_cashout_x9['projection'] + $row_cashout_y9['projection'] + $row_cashout_z9['projection'] + $row_cashout_a29['projection'] + $row_cashout_b29['projection'] + $row_cashout_c29['projection'] + $row_cashout_d29['projection'] + $row_cashout_e29['projection'] + $row_cashout_f29['projection'] + $row_cashout_g29['projection'] + $row_cashout_h29['projection'] + $row_cashout_i29['projection'] + $row_cashout_j29['projection'] + $row_cashout_k29['projection'] + $row_cashout_l29['projection'] + $row_cashout_m29['projection'] + $row_cashout_n29['projection'] + $row_cashout_o29['projection'] + $row_cashout_p29['projection'] +
                $row_cashout_q29['projection'] + $row_cashout_r29['projection'] + $row_cashout_s29['projection'] +
                $row_cashout_t29['projection'] + $row_cashout_u29['projection'] + $row_cashout_v29['projection'] +
                $row_cashout_w29['projection'] + $row_cashout_x29['projection'] + $row_cashout_y29['projection'] + $row_cashout_z29['projection'] + $row_cashout_a39['projection'] + $row_cashout_b39['projection'] + $row_cashout_c39['projection'] + $row_cashout_d39['projection'] + $row_cashout_e39['projection'] + $row_cashout_f39['projection'] + $row_cashout_g39['projection'] + $row_cashout_j39['projection'] + $row_cashout_k39['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o9['realisasi'] + $row_cashout_p9['realisasi'] + $row_cashout_q9['realisasi'] + $row_cashout_r9['realisasi'] + $row_cashout_s9['realisasi'] + $row_cashout_t9['realisasi'] + $row_cashout_u9['realisasi'] + $row_cashout_v9['realisasi'] + $row_cashout_w9['realisasi'] + $row_cashout_x9['realisasi'] + $row_cashout_y9['realisasi'] + $row_cashout_z9['realisasi'] + $row_cashout_a29['realisasi'] + $row_cashout_b29['realisasi'] + $row_cashout_c29['realisasi'] + $row_cashout_d29['realisasi'] + $row_cashout_e29['realisasi'] + $row_cashout_f29['realisasi'] + $row_cashout_g29['realisasi'] + $row_cashout_h29['realisasi'] + $row_cashout_i29['realisasi'] + $row_cashout_j29['realisasi'] + $row_cashout_k29['realisasi'] + $row_cashout_l29['realisasi'] + $row_cashout_m29['realisasi'] + $row_cashout_n29['realisasi'] + $row_cashout_o29['realisasi'] + $row_cashout_p29['realisasi'] +
                $row_cashout_q29['realisasi'] + $row_cashout_r29['realisasi'] + $row_cashout_s29['realisasi'] +
                $row_cashout_t29['realisasi'] + $row_cashout_u29['realisasi'] + $row_cashout_v29['realisasi'] +
                $row_cashout_w29['realisasi'] + $row_cashout_x29['realisasi'] + $row_cashout_y29['realisasi'] + $row_cashout_z29['realisasi'] + $row_cashout_a39['realisasi'] + $row_cashout_b39['realisasi'] + $row_cashout_c39['realisasi'] + $row_cashout_d39['realisasi'] + $row_cashout_e39['realisasi'] + $row_cashout_f39['realisasi'] + $row_cashout_g39['realisasi'] + $row_cashout_j39['realisasi'] + $row_cashout_k39['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o10['projection'] + $row_cashout_p10['projection'] + $row_cashout_q10['projection'] + $row_cashout_r10['projection'] + $row_cashout_s10['projection'] + $row_cashout_t10['projection'] + $row_cashout_u10['projection'] + $row_cashout_v10['projection'] + $row_cashout_w10['projection'] + $row_cashout_x10['projection'] + $row_cashout_y10['projection'] + $row_cashout_z10['projection'] + $row_cashout_a210['projection'] + $row_cashout_b210['projection'] + $row_cashout_c210['projection'] + $row_cashout_d210['projection'] + $row_cashout_e210['projection'] + $row_cashout_f210['projection'] + $row_cashout_g210['projection'] + $row_cashout_h210['projection'] + $row_cashout_i210['projection'] + $row_cashout_j210['projection'] + $row_cashout_k210['projection'] + $row_cashout_l210['projection'] + $row_cashout_m210['projection'] + $row_cashout_n210['projection'] + $row_cashout_o210['projection'] + $row_cashout_p210['projection'] +
                $row_cashout_q210['projection'] + $row_cashout_r210['projection'] + $row_cashout_s210['projection'] +
                $row_cashout_t210['projection'] + $row_cashout_u210['projection'] + $row_cashout_v210['projection'] +
                $row_cashout_w210['projection'] + $row_cashout_x210['projection'] + $row_cashout_y210['projection'] + $row_cashout_z210['projection'] + $row_cashout_a310['projection'] + $row_cashout_b310['projection'] + $row_cashout_c310['projection'] + $row_cashout_d310['projection'] + $row_cashout_e310['projection'] + $row_cashout_f310['projection'] + $row_cashout_g310['projection'] + $row_cashout_j310['projection'] + $row_cashout_k310['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o10['realisasi'] + $row_cashout_p10['realisasi'] + $row_cashout_q10['realisasi'] + $row_cashout_r10['realisasi'] + $row_cashout_s10['realisasi'] + $row_cashout_t10['realisasi'] + $row_cashout_u10['realisasi'] + $row_cashout_v10['realisasi'] + $row_cashout_w10['realisasi'] + $row_cashout_x10['realisasi'] + $row_cashout_y10['realisasi'] + $row_cashout_z10['realisasi'] + $row_cashout_a210['realisasi'] + $row_cashout_b210['realisasi'] + $row_cashout_c210['realisasi'] + $row_cashout_d210['realisasi'] + $row_cashout_e210['realisasi'] + $row_cashout_f210['realisasi'] + $row_cashout_g210['realisasi'] + $row_cashout_h210['realisasi'] + $row_cashout_i210['realisasi'] + $row_cashout_j210['realisasi'] + $row_cashout_k210['realisasi'] + $row_cashout_l210['realisasi'] + $row_cashout_m210['realisasi'] + $row_cashout_n210['realisasi'] + $row_cashout_o210['realisasi'] + $row_cashout_p210['realisasi'] +
                $row_cashout_q210['realisasi'] + $row_cashout_r210['realisasi'] + $row_cashout_s210['realisasi'] +
                $row_cashout_t210['realisasi'] + $row_cashout_u210['realisasi'] + $row_cashout_v210['realisasi'] +
                $row_cashout_w210['realisasi'] + $row_cashout_x210['realisasi'] + $row_cashout_y210['realisasi'] + $row_cashout_z210['realisasi'] + $row_cashout_a310['realisasi'] + $row_cashout_b310['realisasi'] + $row_cashout_c310['realisasi'] + $row_cashout_d310['realisasi'] + $row_cashout_e310['realisasi'] + $row_cashout_f310['realisasi'] + $row_cashout_g310['realisasi'] + $row_cashout_j310['realisasi'] + $row_cashout_k310['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o11['projection'] + $row_cashout_p11['projection'] + $row_cashout_q11['projection'] + $row_cashout_r11['projection'] + $row_cashout_s11['projection'] + $row_cashout_t11['projection'] + $row_cashout_u11['projection'] + $row_cashout_v11['projection'] + $row_cashout_w11['projection'] + $row_cashout_x11['projection'] + $row_cashout_y11['projection'] + $row_cashout_z11['projection'] + $row_cashout_a211['projection'] + $row_cashout_b211['projection'] + $row_cashout_c211['projection'] + $row_cashout_d211['projection'] + $row_cashout_e211['projection'] + $row_cashout_f211['projection'] + $row_cashout_g211['projection'] + $row_cashout_h211['projection'] + $row_cashout_i211['projection'] + $row_cashout_j211['projection'] + $row_cashout_k211['projection'] + $row_cashout_l211['projection'] + $row_cashout_m211['projection'] + $row_cashout_n211['projection'] + $row_cashout_o211['projection'] + $row_cashout_p211['projection'] +
                $row_cashout_q211['projection'] + $row_cashout_r211['projection'] + $row_cashout_s211['projection'] +
                $row_cashout_t211['projection'] + $row_cashout_u211['projection'] + $row_cashout_v211['projection'] +
                $row_cashout_w211['projection'] + $row_cashout_x211['projection'] + $row_cashout_y211['projection'] + $row_cashout_z211['projection'] + $row_cashout_a311['projection'] + $row_cashout_b311['projection'] + $row_cashout_c311['projection'] + $row_cashout_d311['projection'] + $row_cashout_e311['projection'] + $row_cashout_f311['projection'] + $row_cashout_g311['projection'] + $row_cashout_j311['projection'] + $row_cashout_k311['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o11['realisasi'] + $row_cashout_p11['realisasi'] + $row_cashout_q11['realisasi'] + $row_cashout_r11['realisasi'] + $row_cashout_s11['realisasi'] + $row_cashout_t11['realisasi'] + $row_cashout_u11['realisasi'] + $row_cashout_v11['realisasi'] + $row_cashout_w11['realisasi'] + $row_cashout_x11['realisasi'] + $row_cashout_y11['realisasi'] + $row_cashout_z11['realisasi'] + $row_cashout_a211['realisasi'] + $row_cashout_b211['realisasi'] + $row_cashout_c211['realisasi'] + $row_cashout_d211['realisasi'] + $row_cashout_e211['realisasi'] + $row_cashout_f211['realisasi'] + $row_cashout_g211['realisasi'] + $row_cashout_h211['realisasi'] + $row_cashout_i211['realisasi'] + $row_cashout_j211['realisasi'] + $row_cashout_k211['realisasi'] + $row_cashout_l211['realisasi'] + $row_cashout_m211['realisasi'] + $row_cashout_n211['realisasi'] + $row_cashout_o211['realisasi'] + $row_cashout_p211['realisasi'] +
                $row_cashout_q211['realisasi'] + $row_cashout_r211['realisasi'] + $row_cashout_s211['realisasi'] +
                $row_cashout_t211['realisasi'] + $row_cashout_u211['realisasi'] + $row_cashout_v211['realisasi'] +
                $row_cashout_w211['realisasi'] + $row_cashout_x211['realisasi'] + $row_cashout_y211['realisasi'] + $row_cashout_z211['realisasi'] + $row_cashout_a311['realisasi'] + $row_cashout_b311['realisasi'] + $row_cashout_c311['realisasi'] + $row_cashout_d311['realisasi'] + $row_cashout_e311['realisasi'] + $row_cashout_f311['realisasi'] + $row_cashout_g311['realisasi'] + $row_cashout_j311['realisasi'] + $row_cashout_k311['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o12['projection'] + $row_cashout_p12['projection'] + $row_cashout_q12['projection'] + $row_cashout_r12['projection'] + $row_cashout_s12['projection'] + $row_cashout_t12['projection'] + $row_cashout_u12['projection'] + $row_cashout_v12['projection'] + $row_cashout_w12['projection'] + $row_cashout_x12['projection'] + $row_cashout_y12['projection'] + $row_cashout_z12['projection'] + $row_cashout_a212['projection'] + $row_cashout_b212['projection'] + $row_cashout_c212['projection'] + $row_cashout_d212['projection'] + $row_cashout_e212['projection'] + $row_cashout_f212['projection'] + $row_cashout_g212['projection'] + $row_cashout_h212['projection'] + $row_cashout_i212['projection'] + $row_cashout_j212['projection'] + $row_cashout_k212['projection'] + $row_cashout_l212['projection'] + $row_cashout_m212['projection'] + $row_cashout_n212['projection'] + $row_cashout_o212['projection'] + $row_cashout_p212['projection'] +
                $row_cashout_q212['projection'] + $row_cashout_r212['projection'] + $row_cashout_s212['projection'] +
                $row_cashout_t212['projection'] + $row_cashout_u212['projection'] + $row_cashout_v212['projection'] +
                $row_cashout_w212['projection'] + $row_cashout_x212['projection'] + $row_cashout_y212['projection'] + $row_cashout_z212['projection'] + $row_cashout_a312['projection'] + $row_cashout_b312['projection'] + $row_cashout_c312['projection'] + $row_cashout_d312['projection'] + $row_cashout_e312['projection'] + $row_cashout_f312['projection'] + $row_cashout_g312['projection'] + $row_cashout_j312['projection'] + $row_cashout_k312['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o12['realisasi'] + $row_cashout_p12['realisasi'] + $row_cashout_q12['realisasi'] + $row_cashout_r12['realisasi'] + $row_cashout_s12['realisasi'] + $row_cashout_t12['realisasi'] + $row_cashout_u12['realisasi'] + $row_cashout_v12['realisasi'] + $row_cashout_w12['realisasi'] + $row_cashout_x12['realisasi'] + $row_cashout_y12['realisasi'] + $row_cashout_z12['realisasi'] + $row_cashout_a212['realisasi'] + $row_cashout_b212['realisasi'] + $row_cashout_c212['realisasi'] + $row_cashout_d212['realisasi'] + $row_cashout_e212['realisasi'] + $row_cashout_f212['realisasi'] + $row_cashout_g212['realisasi'] + $row_cashout_h212['realisasi'] + $row_cashout_i212['realisasi'] + $row_cashout_j212['realisasi'] + $row_cashout_k212['realisasi'] + $row_cashout_l212['realisasi'] + $row_cashout_m212['realisasi'] + $row_cashout_n212['realisasi'] + $row_cashout_o212['realisasi'] + $row_cashout_p212['realisasi'] +
                $row_cashout_q212['realisasi'] + $row_cashout_r212['realisasi'] + $row_cashout_s212['realisasi'] +
                $row_cashout_t212['realisasi'] + $row_cashout_u212['realisasi'] + $row_cashout_v212['realisasi'] +
                $row_cashout_w212['realisasi'] + $row_cashout_x212['realisasi'] + $row_cashout_y212['realisasi'] + $row_cashout_z212['realisasi'] + $row_cashout_a312['realisasi'] + $row_cashout_b312['realisasi'] + $row_cashout_c312['realisasi'] + $row_cashout_d312['realisasi'] + $row_cashout_e312['realisasi'] + $row_cashout_f312['realisasi'] + $row_cashout_g312['realisasi'] + $row_cashout_j312['realisasi'] + $row_cashout_k312['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o13['projection'] + $row_cashout_p13['projection'] + $row_cashout_q13['projection'] + $row_cashout_r13['projection'] + $row_cashout_s13['projection'] + $row_cashout_t13['projection'] + $row_cashout_u13['projection'] + $row_cashout_v13['projection'] + $row_cashout_w13['projection'] + $row_cashout_x13['projection'] + $row_cashout_y13['projection'] + $row_cashout_z13['projection'] + $row_cashout_a213['projection'] + $row_cashout_b213['projection'] + $row_cashout_c213['projection'] + $row_cashout_d213['projection'] + $row_cashout_e213['projection'] + $row_cashout_f213['projection'] + $row_cashout_g213['projection'] + $row_cashout_h213['projection'] + $row_cashout_i213['projection'] + $row_cashout_j213['projection'] + $row_cashout_k213['projection'] + $row_cashout_l213['projection'] + $row_cashout_m213['projection'] + $row_cashout_n213['projection'] + $row_cashout_o213['projection'] + $row_cashout_p213['projection'] +
                $row_cashout_q213['projection'] + $row_cashout_r213['projection'] + $row_cashout_s213['projection'] +
                $row_cashout_t213['projection'] + $row_cashout_u213['projection'] + $row_cashout_v213['projection'] +
                $row_cashout_w213['projection'] + $row_cashout_x213['projection'] + $row_cashout_y213['projection'] + $row_cashout_z213['projection'] + $row_cashout_a313['projection'] + $row_cashout_b313['projection'] + $row_cashout_c313['projection'] + $row_cashout_d313['projection'] + $row_cashout_e313['projection'] + $row_cashout_f313['projection'] + $row_cashout_g313['projection'] + $row_cashout_j313['projection'] + $row_cashout_k313['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o13['realisasi'] + $row_cashout_p13['realisasi'] + $row_cashout_q13['realisasi'] + $row_cashout_r13['realisasi'] + $row_cashout_s13['realisasi'] + $row_cashout_t13['realisasi'] + $row_cashout_u13['realisasi'] + $row_cashout_v13['realisasi'] + $row_cashout_w13['realisasi'] + $row_cashout_x13['realisasi'] + $row_cashout_y13['realisasi'] + $row_cashout_z13['realisasi'] + $row_cashout_a213['realisasi'] + $row_cashout_b213['realisasi'] + $row_cashout_c213['realisasi'] + $row_cashout_d213['realisasi'] + $row_cashout_e213['realisasi'] + $row_cashout_f213['realisasi'] + $row_cashout_g213['realisasi'] + $row_cashout_h213['realisasi'] + $row_cashout_i213['realisasi'] + $row_cashout_j213['realisasi'] + $row_cashout_k213['realisasi'] + $row_cashout_l213['realisasi'] + $row_cashout_m213['realisasi'] + $row_cashout_n213['realisasi'] + $row_cashout_o213['realisasi'] + $row_cashout_p213['realisasi'] +
                $row_cashout_q213['realisasi'] + $row_cashout_r213['realisasi'] + $row_cashout_s213['realisasi'] +
                $row_cashout_t213['realisasi'] + $row_cashout_u213['realisasi'] + $row_cashout_v213['realisasi'] +
                $row_cashout_w213['realisasi'] + $row_cashout_x213['realisasi'] + $row_cashout_y213['realisasi'] + $row_cashout_z213['realisasi'] + $row_cashout_a313['realisasi'] + $row_cashout_b313['realisasi'] + $row_cashout_c313['realisasi'] + $row_cashout_d313['realisasi'] + $row_cashout_e313['realisasi'] + $row_cashout_f313['realisasi'] + $row_cashout_g313['realisasi'] + $row_cashout_j313['realisasi'] + $row_cashout_k313['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o14['projection'] + $row_cashout_p14['projection'] + $row_cashout_q14['projection'] + $row_cashout_r14['projection'] + $row_cashout_s14['projection'] + $row_cashout_t14['projection'] + $row_cashout_u14['projection'] + $row_cashout_v14['projection'] + $row_cashout_w14['projection'] + $row_cashout_x14['projection'] + $row_cashout_y14['projection'] + $row_cashout_z14['projection'] + $row_cashout_a214['projection'] + $row_cashout_b214['projection'] + $row_cashout_c214['projection'] + $row_cashout_d214['projection'] + $row_cashout_e214['projection'] + $row_cashout_f214['projection'] + $row_cashout_g214['projection'] + $row_cashout_h214['projection'] + $row_cashout_i214['projection'] + $row_cashout_j214['projection'] + $row_cashout_k214['projection'] + $row_cashout_l214['projection'] + $row_cashout_m214['projection'] + $row_cashout_n214['projection'] + $row_cashout_o214['projection'] + $row_cashout_p214['projection'] +
                $row_cashout_q214['projection'] + $row_cashout_r214['projection'] + $row_cashout_s214['projection'] +
                $row_cashout_t214['projection'] + $row_cashout_u214['projection'] + $row_cashout_v214['projection'] +
                $row_cashout_w214['projection'] + $row_cashout_x214['projection'] + $row_cashout_y214['projection'] + $row_cashout_z214['projection'] + $row_cashout_a314['projection'] + $row_cashout_b314['projection'] + $row_cashout_c314['projection'] + $row_cashout_d314['projection'] + $row_cashout_e314['projection'] + $row_cashout_f314['projection'] + $row_cashout_g314['projection'] + $row_cashout_j314['projection'] + $row_cashout_k314['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o14['realisasi'] + $row_cashout_p14['realisasi'] + $row_cashout_q14['realisasi'] + $row_cashout_r14['realisasi'] + $row_cashout_s14['realisasi'] + $row_cashout_t14['realisasi'] + $row_cashout_u14['realisasi'] + $row_cashout_v14['realisasi'] + $row_cashout_w14['realisasi'] + $row_cashout_x14['realisasi'] + $row_cashout_y14['realisasi'] + $row_cashout_z14['realisasi'] + $row_cashout_a214['realisasi'] + $row_cashout_b214['realisasi'] + $row_cashout_c214['realisasi'] + $row_cashout_d214['realisasi'] + $row_cashout_e214['realisasi'] + $row_cashout_f214['realisasi'] + $row_cashout_g214['realisasi'] + $row_cashout_h214['realisasi'] + $row_cashout_i214['realisasi'] + $row_cashout_j214['realisasi'] + $row_cashout_k214['realisasi'] + $row_cashout_l214['realisasi'] + $row_cashout_m214['realisasi'] + $row_cashout_n214['realisasi'] + $row_cashout_o214['realisasi'] + $row_cashout_p214['realisasi'] +
                $row_cashout_q214['realisasi'] + $row_cashout_r214['realisasi'] + $row_cashout_s214['realisasi'] +
                $row_cashout_t214['realisasi'] + $row_cashout_u214['realisasi'] + $row_cashout_v214['realisasi'] +
                $row_cashout_w214['realisasi'] + $row_cashout_x214['realisasi'] + $row_cashout_y214['realisasi'] + $row_cashout_z214['realisasi'] + $row_cashout_a314['realisasi'] + $row_cashout_b314['realisasi'] + $row_cashout_c314['realisasi'] + $row_cashout_d314['realisasi'] + $row_cashout_e314['realisasi'] + $row_cashout_f314['realisasi'] + $row_cashout_g314['realisasi'] + $row_cashout_j314['realisasi'] + $row_cashout_k314['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o15['projection'] + $row_cashout_p15['projection'] + $row_cashout_q15['projection'] + $row_cashout_r15['projection'] + $row_cashout_s15['projection'] + $row_cashout_t15['projection'] + $row_cashout_u15['projection'] + $row_cashout_v15['projection'] + $row_cashout_w15['projection'] + $row_cashout_x15['projection'] + $row_cashout_y15['projection'] + $row_cashout_z15['projection'] + $row_cashout_a215['projection'] + $row_cashout_b215['projection'] + $row_cashout_c215['projection'] + $row_cashout_d215['projection'] + $row_cashout_e215['projection'] + $row_cashout_f215['projection'] + $row_cashout_g215['projection'] + $row_cashout_h215['projection'] + $row_cashout_i215['projection'] + $row_cashout_j215['projection'] + $row_cashout_k215['projection'] + $row_cashout_l215['projection'] + $row_cashout_m215['projection'] + $row_cashout_n215['projection'] + $row_cashout_o215['projection'] + $row_cashout_p215['projection'] +
                $row_cashout_q215['projection'] + $row_cashout_r215['projection'] + $row_cashout_s215['projection'] +
                $row_cashout_t215['projection'] + $row_cashout_u215['projection'] + $row_cashout_v215['projection'] +
                $row_cashout_w215['projection'] + $row_cashout_x215['projection'] + $row_cashout_y215['projection'] + $row_cashout_z215['projection'] + $row_cashout_a315['projection'] + $row_cashout_b315['projection'] + $row_cashout_c315['projection'] + $row_cashout_d315['projection'] + $row_cashout_e315['projection'] + $row_cashout_f315['projection'] + $row_cashout_g315['projection'] + $row_cashout_j315['projection'] + $row_cashout_k315['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o15['realisasi'] + $row_cashout_p15['realisasi'] + $row_cashout_q15['realisasi'] + $row_cashout_r15['realisasi'] + $row_cashout_s15['realisasi'] + $row_cashout_t15['realisasi'] + $row_cashout_u15['realisasi'] + $row_cashout_v15['realisasi'] + $row_cashout_w15['realisasi'] + $row_cashout_x15['realisasi'] + $row_cashout_y15['realisasi'] + $row_cashout_z15['realisasi'] + $row_cashout_a215['realisasi'] + $row_cashout_b215['realisasi'] + $row_cashout_c215['realisasi'] + $row_cashout_d215['realisasi'] + $row_cashout_e215['realisasi'] + $row_cashout_f215['realisasi'] + $row_cashout_g215['realisasi'] + $row_cashout_h215['realisasi'] + $row_cashout_i215['realisasi'] + $row_cashout_j215['realisasi'] + $row_cashout_k215['realisasi'] + $row_cashout_l215['realisasi'] + $row_cashout_m215['realisasi'] + $row_cashout_n215['realisasi'] + $row_cashout_o215['realisasi'] + $row_cashout_p215['realisasi'] +
                $row_cashout_q215['realisasi'] + $row_cashout_r215['realisasi'] + $row_cashout_s215['realisasi'] +
                $row_cashout_t215['realisasi'] + $row_cashout_u215['realisasi'] + $row_cashout_v215['realisasi'] +
                $row_cashout_w215['realisasi'] + $row_cashout_x215['realisasi'] + $row_cashout_y215['realisasi'] + $row_cashout_z215['realisasi'] + $row_cashout_a315['realisasi'] + $row_cashout_b315['realisasi'] + $row_cashout_c315['realisasi'] + $row_cashout_d315['realisasi'] + $row_cashout_e315['realisasi'] + $row_cashout_f315['realisasi'] + $row_cashout_g315['realisasi'] + $row_cashout_j315['realisasi'] + $row_cashout_k315['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o16['projection'] + $row_cashout_p16['projection'] + $row_cashout_q16['projection'] + $row_cashout_r16['projection'] + $row_cashout_s16['projection'] + $row_cashout_t16['projection'] + $row_cashout_u16['projection'] + $row_cashout_v16['projection'] + $row_cashout_w16['projection'] + $row_cashout_x16['projection'] + $row_cashout_y16['projection'] + $row_cashout_z16['projection'] + $row_cashout_a216['projection'] + $row_cashout_b216['projection'] + $row_cashout_c216['projection'] + $row_cashout_d216['projection'] + $row_cashout_e216['projection'] + $row_cashout_f216['projection'] + $row_cashout_g216['projection'] + $row_cashout_h216['projection'] + $row_cashout_i216['projection'] + $row_cashout_j216['projection'] + $row_cashout_k216['projection'] + $row_cashout_l216['projection'] + $row_cashout_m216['projection'] + $row_cashout_n216['projection'] + $row_cashout_o216['projection'] + $row_cashout_p216['projection'] +
                $row_cashout_q216['projection'] + $row_cashout_r216['projection'] + $row_cashout_s216['projection'] +
                $row_cashout_t216['projection'] + $row_cashout_u216['projection'] + $row_cashout_v216['projection'] +
                $row_cashout_w216['projection'] + $row_cashout_x216['projection'] + $row_cashout_y216['projection'] + $row_cashout_z216['projection'] + $row_cashout_a316['projection'] + $row_cashout_b316['projection'] + $row_cashout_c316['projection'] + $row_cashout_d316['projection'] + $row_cashout_e316['projection'] + $row_cashout_f316['projection'] + $row_cashout_g316['projection'] + $row_cashout_j316['projection'] + $row_cashout_k316['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o16['realisasi'] + $row_cashout_p16['realisasi'] + $row_cashout_q16['realisasi'] + $row_cashout_r16['realisasi'] + $row_cashout_s16['realisasi'] + $row_cashout_t16['realisasi'] + $row_cashout_u16['realisasi'] + $row_cashout_v16['realisasi'] + $row_cashout_w16['realisasi'] + $row_cashout_x16['realisasi'] + $row_cashout_y16['realisasi'] + $row_cashout_z16['realisasi'] + $row_cashout_a216['realisasi'] + $row_cashout_b216['realisasi'] + $row_cashout_c216['realisasi'] + $row_cashout_d216['realisasi'] + $row_cashout_e216['realisasi'] + $row_cashout_f216['realisasi'] + $row_cashout_g216['realisasi'] + $row_cashout_h216['realisasi'] + $row_cashout_i216['realisasi'] + $row_cashout_j216['realisasi'] + $row_cashout_k216['realisasi'] + $row_cashout_l216['realisasi'] + $row_cashout_m216['realisasi'] + $row_cashout_n216['realisasi'] + $row_cashout_o216['realisasi'] + $row_cashout_p216['realisasi'] +
                $row_cashout_q216['realisasi'] + $row_cashout_r216['realisasi'] + $row_cashout_s216['realisasi'] +
                $row_cashout_t216['realisasi'] + $row_cashout_u216['realisasi'] + $row_cashout_v216['realisasi'] +
                $row_cashout_w216['realisasi'] + $row_cashout_x216['realisasi'] + $row_cashout_y216['realisasi'] + $row_cashout_z216['realisasi'] + $row_cashout_a316['realisasi'] + $row_cashout_b316['realisasi'] + $row_cashout_c316['realisasi'] + $row_cashout_d316['realisasi'] + $row_cashout_e316['realisasi'] + $row_cashout_f316['realisasi'] + $row_cashout_g316['realisasi'] + $row_cashout_j316['realisasi'] + $row_cashout_k316['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o17['projection'] + $row_cashout_p17['projection'] + $row_cashout_q17['projection'] + $row_cashout_r17['projection'] + $row_cashout_s17['projection'] + $row_cashout_t17['projection'] + $row_cashout_u17['projection'] + $row_cashout_v17['projection'] + $row_cashout_w17['projection'] + $row_cashout_x17['projection'] + $row_cashout_y17['projection'] + $row_cashout_z17['projection'] + $row_cashout_a217['projection'] + $row_cashout_b217['projection'] + $row_cashout_c217['projection'] + $row_cashout_d217['projection'] + $row_cashout_e217['projection'] + $row_cashout_f217['projection'] + $row_cashout_g217['projection'] + $row_cashout_h217['projection'] + $row_cashout_i217['projection'] + $row_cashout_j217['projection'] + $row_cashout_k217['projection'] + $row_cashout_l217['projection'] + $row_cashout_m217['projection'] + $row_cashout_n217['projection'] + $row_cashout_o217['projection'] + $row_cashout_p217['projection'] +
                $row_cashout_q217['projection'] + $row_cashout_r217['projection'] + $row_cashout_s217['projection'] +
                $row_cashout_t217['projection'] + $row_cashout_u217['projection'] + $row_cashout_v217['projection'] +
                $row_cashout_w217['projection'] + $row_cashout_x217['projection'] + $row_cashout_y217['projection'] + $row_cashout_z217['projection'] + $row_cashout_a317['projection'] + $row_cashout_b317['projection'] + $row_cashout_c317['projection'] + $row_cashout_d317['projection'] + $row_cashout_e317['projection'] + $row_cashout_f317['projection'] + $row_cashout_g317['projection'] + $row_cashout_j317['projection'] + $row_cashout_k317['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o17['realisasi'] + $row_cashout_p17['realisasi'] + $row_cashout_q17['realisasi'] + $row_cashout_r17['realisasi'] + $row_cashout_s17['realisasi'] + $row_cashout_t17['realisasi'] + $row_cashout_u17['realisasi'] + $row_cashout_v17['realisasi'] + $row_cashout_w17['realisasi'] + $row_cashout_x17['realisasi'] + $row_cashout_y17['realisasi'] + $row_cashout_z17['realisasi'] + $row_cashout_a217['realisasi'] + $row_cashout_b217['realisasi'] + $row_cashout_c217['realisasi'] + $row_cashout_d217['realisasi'] + $row_cashout_e217['realisasi'] + $row_cashout_f217['realisasi'] + $row_cashout_g217['realisasi'] + $row_cashout_h217['realisasi'] + $row_cashout_i217['realisasi'] + $row_cashout_j217['realisasi'] + $row_cashout_k217['realisasi'] + $row_cashout_l217['realisasi'] + $row_cashout_m217['realisasi'] + $row_cashout_n217['realisasi'] + $row_cashout_o217['realisasi'] + $row_cashout_p217['realisasi'] +
                $row_cashout_q217['realisasi'] + $row_cashout_r217['realisasi'] + $row_cashout_s217['realisasi'] +
                $row_cashout_t217['realisasi'] + $row_cashout_u217['realisasi'] + $row_cashout_v217['realisasi'] +
                $row_cashout_w217['realisasi'] + $row_cashout_x217['realisasi'] + $row_cashout_y217['realisasi'] + $row_cashout_z217['realisasi'] + $row_cashout_a317['realisasi'] + $row_cashout_b317['realisasi'] + $row_cashout_c317['realisasi'] + $row_cashout_d317['realisasi'] + $row_cashout_e317['realisasi'] + $row_cashout_f317['realisasi'] + $row_cashout_g317['realisasi'] + $row_cashout_j317['realisasi'] + $row_cashout_k317['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o18['projection'] + $row_cashout_p18['projection'] + $row_cashout_q18['projection'] + $row_cashout_r18['projection'] + $row_cashout_s18['projection'] + $row_cashout_t18['projection'] + $row_cashout_u18['projection'] + $row_cashout_v18['projection'] + $row_cashout_w18['projection'] + $row_cashout_x18['projection'] + $row_cashout_y18['projection'] + $row_cashout_z18['projection'] + $row_cashout_a218['projection'] + $row_cashout_b218['projection'] + $row_cashout_c218['projection'] + $row_cashout_d218['projection'] + $row_cashout_e218['projection'] + $row_cashout_f218['projection'] + $row_cashout_g218['projection'] + $row_cashout_h218['projection'] + $row_cashout_i218['projection'] + $row_cashout_j218['projection'] + $row_cashout_k218['projection'] + $row_cashout_l218['projection'] + $row_cashout_m218['projection'] + $row_cashout_n218['projection'] + $row_cashout_o218['projection'] + $row_cashout_p218['projection'] +
                $row_cashout_q218['projection'] + $row_cashout_r218['projection'] + $row_cashout_s218['projection'] +
                $row_cashout_t218['projection'] + $row_cashout_u218['projection'] + $row_cashout_v218['projection'] +
                $row_cashout_w218['projection'] + $row_cashout_x218['projection'] + $row_cashout_y218['projection'] + $row_cashout_z218['projection'] + $row_cashout_a318['projection'] + $row_cashout_b318['projection'] + $row_cashout_c318['projection'] + $row_cashout_d318['projection'] + $row_cashout_e318['projection'] + $row_cashout_f318['projection'] + $row_cashout_g318['projection'] + $row_cashout_j318['projection'] + $row_cashout_k318['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o18['realisasi'] + $row_cashout_p18['realisasi'] + $row_cashout_q18['realisasi'] + $row_cashout_r18['realisasi'] + $row_cashout_s18['realisasi'] + $row_cashout_t18['realisasi'] + $row_cashout_u18['realisasi'] + $row_cashout_v18['realisasi'] + $row_cashout_w18['realisasi'] + $row_cashout_x18['realisasi'] + $row_cashout_y18['realisasi'] + $row_cashout_z18['realisasi'] + $row_cashout_a218['realisasi'] + $row_cashout_b218['realisasi'] + $row_cashout_c218['realisasi'] + $row_cashout_d218['realisasi'] + $row_cashout_e218['realisasi'] + $row_cashout_f218['realisasi'] + $row_cashout_g218['realisasi'] + $row_cashout_h218['realisasi'] + $row_cashout_i218['realisasi'] + $row_cashout_j218['realisasi'] + $row_cashout_k218['realisasi'] + $row_cashout_l218['realisasi'] + $row_cashout_m218['realisasi'] + $row_cashout_n218['realisasi'] + $row_cashout_o218['realisasi'] + $row_cashout_p218['realisasi'] +
                $row_cashout_q218['realisasi'] + $row_cashout_r218['realisasi'] + $row_cashout_s218['realisasi'] +
                $row_cashout_t218['realisasi'] + $row_cashout_u218['realisasi'] + $row_cashout_v218['realisasi'] +
                $row_cashout_w218['realisasi'] + $row_cashout_x218['realisasi'] + $row_cashout_y218['realisasi'] + $row_cashout_z218['realisasi'] + $row_cashout_a318['realisasi'] + $row_cashout_b318['realisasi'] + $row_cashout_c318['realisasi'] + $row_cashout_d318['realisasi'] + $row_cashout_e318['realisasi'] + $row_cashout_f318['realisasi'] + $row_cashout_g318['realisasi'] + $row_cashout_j318['realisasi'] + $row_cashout_k318['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o19['projection'] + $row_cashout_p19['projection'] + $row_cashout_q19['projection'] + $row_cashout_r19['projection'] + $row_cashout_s19['projection'] + $row_cashout_t19['projection'] + $row_cashout_u19['projection'] + $row_cashout_v19['projection'] + $row_cashout_w19['projection'] + $row_cashout_x19['projection'] + $row_cashout_y19['projection'] + $row_cashout_z19['projection'] + $row_cashout_a219['projection'] + $row_cashout_b219['projection'] + $row_cashout_c219['projection'] + $row_cashout_d219['projection'] + $row_cashout_e219['projection'] + $row_cashout_f219['projection'] + $row_cashout_g219['projection'] + $row_cashout_h219['projection'] + $row_cashout_i219['projection'] + $row_cashout_j219['projection'] + $row_cashout_k219['projection'] + $row_cashout_l219['projection'] + $row_cashout_m219['projection'] + $row_cashout_n219['projection'] + $row_cashout_o219['projection'] + $row_cashout_p219['projection'] +
                $row_cashout_q219['projection'] + $row_cashout_r219['projection'] + $row_cashout_s219['projection'] +
                $row_cashout_t219['projection'] + $row_cashout_u219['projection'] + $row_cashout_v219['projection'] +
                $row_cashout_w219['projection'] + $row_cashout_x219['projection'] + $row_cashout_y219['projection'] + $row_cashout_z219['projection'] + $row_cashout_a319['projection'] + $row_cashout_b319['projection'] + $row_cashout_c319['projection'] + $row_cashout_d319['projection'] + $row_cashout_e319['projection'] + $row_cashout_f319['projection'] + $row_cashout_g319['projection'] + $row_cashout_j319['projection'] + $row_cashout_k319['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o19['realisasi'] + $row_cashout_p19['realisasi'] + $row_cashout_q19['realisasi'] + $row_cashout_r19['realisasi'] + $row_cashout_s19['realisasi'] + $row_cashout_t19['realisasi'] + $row_cashout_u19['realisasi'] + $row_cashout_v19['realisasi'] + $row_cashout_w19['realisasi'] + $row_cashout_x19['realisasi'] + $row_cashout_y19['realisasi'] + $row_cashout_z19['realisasi'] + $row_cashout_a219['realisasi'] + $row_cashout_b219['realisasi'] + $row_cashout_c219['realisasi'] + $row_cashout_d219['realisasi'] + $row_cashout_e219['realisasi'] + $row_cashout_f219['realisasi'] + $row_cashout_g219['realisasi'] + $row_cashout_h219['realisasi'] + $row_cashout_i219['realisasi'] + $row_cashout_j219['realisasi'] + $row_cashout_k219['realisasi'] + $row_cashout_l219['realisasi'] + $row_cashout_m219['realisasi'] + $row_cashout_n219['realisasi'] + $row_cashout_o219['realisasi'] + $row_cashout_p219['realisasi'] +
                $row_cashout_q219['realisasi'] + $row_cashout_r219['realisasi'] + $row_cashout_s219['realisasi'] +
                $row_cashout_t219['realisasi'] + $row_cashout_u219['realisasi'] + $row_cashout_v219['realisasi'] +
                $row_cashout_w219['realisasi'] + $row_cashout_x219['realisasi'] + $row_cashout_y219['realisasi'] + $row_cashout_z219['realisasi'] + $row_cashout_a319['realisasi'] + $row_cashout_b319['realisasi'] + $row_cashout_c319['realisasi'] + $row_cashout_d319['realisasi'] + $row_cashout_e319['realisasi'] + $row_cashout_f319['realisasi'] + $row_cashout_g319['realisasi'] + $row_cashout_j319['realisasi'] + $row_cashout_k319['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o20['projection'] + $row_cashout_p20['projection'] + $row_cashout_q20['projection'] + $row_cashout_r20['projection'] + $row_cashout_s20['projection'] + $row_cashout_t20['projection'] + $row_cashout_u20['projection'] + $row_cashout_v20['projection'] + $row_cashout_w20['projection'] + $row_cashout_x20['projection'] + $row_cashout_y20['projection'] + $row_cashout_z20['projection'] + $row_cashout_a220['projection'] + $row_cashout_b220['projection'] + $row_cashout_c220['projection'] + $row_cashout_d220['projection'] + $row_cashout_e220['projection'] + $row_cashout_f220['projection'] + $row_cashout_g220['projection'] + $row_cashout_h220['projection'] + $row_cashout_i220['projection'] + $row_cashout_j220['projection'] + $row_cashout_k220['projection'] + $row_cashout_l220['projection'] + $row_cashout_m220['projection'] + $row_cashout_n220['projection'] + $row_cashout_o220['projection'] + $row_cashout_p220['projection'] +
                $row_cashout_q220['projection'] + $row_cashout_r220['projection'] + $row_cashout_s220['projection'] +
                $row_cashout_t220['projection'] + $row_cashout_u220['projection'] + $row_cashout_v220['projection'] +
                $row_cashout_w220['projection'] + $row_cashout_x220['projection'] + $row_cashout_y220['projection'] + $row_cashout_z220['projection'] + $row_cashout_a320['projection'] + $row_cashout_b320['projection'] + $row_cashout_c320['projection'] + $row_cashout_d320['projection'] + $row_cashout_e320['projection'] + $row_cashout_f320['projection'] + $row_cashout_g320['projection'] + $row_cashout_j320['projection'] + $row_cashout_k320['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o20['realisasi'] + $row_cashout_p20['realisasi'] + $row_cashout_q20['realisasi'] + $row_cashout_r20['realisasi'] + $row_cashout_s20['realisasi'] + $row_cashout_t20['realisasi'] + $row_cashout_u20['realisasi'] + $row_cashout_v20['realisasi'] + $row_cashout_w20['realisasi'] + $row_cashout_x20['realisasi'] + $row_cashout_y20['realisasi'] + $row_cashout_z20['realisasi'] + $row_cashout_a220['realisasi'] + $row_cashout_b220['realisasi'] + $row_cashout_c220['realisasi'] + $row_cashout_d220['realisasi'] + $row_cashout_e220['realisasi'] + $row_cashout_f220['realisasi'] + $row_cashout_g220['realisasi'] + $row_cashout_h220['realisasi'] + $row_cashout_i220['realisasi'] + $row_cashout_j220['realisasi'] + $row_cashout_k220['realisasi'] + $row_cashout_l220['realisasi'] + $row_cashout_m220['realisasi'] + $row_cashout_n220['realisasi'] + $row_cashout_o220['realisasi'] + $row_cashout_p220['realisasi'] +
                $row_cashout_q220['realisasi'] + $row_cashout_r220['realisasi'] + $row_cashout_s220['realisasi'] +
                $row_cashout_t220['realisasi'] + $row_cashout_u220['realisasi'] + $row_cashout_v220['realisasi'] +
                $row_cashout_w220['realisasi'] + $row_cashout_x220['realisasi'] + $row_cashout_y220['realisasi'] + $row_cashout_z220['realisasi'] + $row_cashout_a320['realisasi'] + $row_cashout_b320['realisasi'] + $row_cashout_c320['realisasi'] + $row_cashout_d320['realisasi'] + $row_cashout_e320['realisasi'] + $row_cashout_f320['realisasi'] + $row_cashout_g320['realisasi'] + $row_cashout_j320['realisasi'] + $row_cashout_k320['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o21['projection'] + $row_cashout_p21['projection'] + $row_cashout_q21['projection'] + $row_cashout_r21['projection'] + $row_cashout_s21['projection'] + $row_cashout_t21['projection'] + $row_cashout_u21['projection'] + $row_cashout_v21['projection'] + $row_cashout_w21['projection'] + $row_cashout_x21['projection'] + $row_cashout_y21['projection'] + $row_cashout_z21['projection'] + $row_cashout_a221['projection'] + $row_cashout_b221['projection'] + $row_cashout_c221['projection'] + $row_cashout_d221['projection'] + $row_cashout_e221['projection'] + $row_cashout_f221['projection'] + $row_cashout_g221['projection'] + $row_cashout_h221['projection'] + $row_cashout_i221['projection'] + $row_cashout_j221['projection'] + $row_cashout_k221['projection'] + $row_cashout_l221['projection'] + $row_cashout_m221['projection'] + $row_cashout_n221['projection'] + $row_cashout_o221['projection'] + $row_cashout_p221['projection'] +
                $row_cashout_q221['projection'] + $row_cashout_r221['projection'] + $row_cashout_s221['projection'] +
                $row_cashout_t221['projection'] + $row_cashout_u221['projection'] + $row_cashout_v221['projection'] +
                $row_cashout_w221['projection'] + $row_cashout_x221['projection'] + $row_cashout_y221['projection'] + $row_cashout_z221['projection'] + $row_cashout_a321['projection'] + $row_cashout_b321['projection'] + $row_cashout_c321['projection'] + $row_cashout_d321['projection'] + $row_cashout_e321['projection'] + $row_cashout_f321['projection'] + $row_cashout_g321['projection'] + $row_cashout_j321['projection'] + $row_cashout_k321['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o21['realisasi'] + $row_cashout_p21['realisasi'] + $row_cashout_q21['realisasi'] + $row_cashout_r21['realisasi'] + $row_cashout_s21['realisasi'] + $row_cashout_t21['realisasi'] + $row_cashout_u21['realisasi'] + $row_cashout_v21['realisasi'] + $row_cashout_w21['realisasi'] + $row_cashout_x21['realisasi'] + $row_cashout_y21['realisasi'] + $row_cashout_z21['realisasi'] + $row_cashout_a221['realisasi'] + $row_cashout_b221['realisasi'] + $row_cashout_c221['realisasi'] + $row_cashout_d221['realisasi'] + $row_cashout_e221['realisasi'] + $row_cashout_f221['realisasi'] + $row_cashout_g221['realisasi'] + $row_cashout_h221['realisasi'] + $row_cashout_i221['realisasi'] + $row_cashout_j221['realisasi'] + $row_cashout_k221['realisasi'] + $row_cashout_l221['realisasi'] + $row_cashout_m221['realisasi'] + $row_cashout_n221['realisasi'] + $row_cashout_o221['realisasi'] + $row_cashout_p221['realisasi'] +
                $row_cashout_q221['realisasi'] + $row_cashout_r221['realisasi'] + $row_cashout_s221['realisasi'] +
                $row_cashout_t221['realisasi'] + $row_cashout_u221['realisasi'] + $row_cashout_v221['realisasi'] +
                $row_cashout_w221['realisasi'] + $row_cashout_x221['realisasi'] + $row_cashout_y221['realisasi'] + $row_cashout_z221['realisasi'] + $row_cashout_a321['realisasi'] + $row_cashout_b321['realisasi'] + $row_cashout_c321['realisasi'] + $row_cashout_d321['realisasi'] + $row_cashout_e321['realisasi'] + $row_cashout_f321['realisasi'] + $row_cashout_g321['realisasi'] + $row_cashout_j321['realisasi'] + $row_cashout_k321['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o22['projection'] + $row_cashout_p22['projection'] + $row_cashout_q22['projection'] + $row_cashout_r22['projection'] + $row_cashout_s22['projection'] + $row_cashout_t22['projection'] + $row_cashout_u22['projection'] + $row_cashout_v22['projection'] + $row_cashout_w22['projection'] + $row_cashout_x22['projection'] + $row_cashout_y22['projection'] + $row_cashout_z22['projection'] + $row_cashout_a222['projection'] + $row_cashout_b222['projection'] + $row_cashout_c222['projection'] + $row_cashout_d222['projection'] + $row_cashout_e222['projection'] + $row_cashout_f222['projection'] + $row_cashout_g222['projection'] + $row_cashout_h222['projection'] + $row_cashout_i222['projection'] + $row_cashout_j222['projection'] + $row_cashout_k222['projection'] + $row_cashout_l222['projection'] + $row_cashout_m222['projection'] + $row_cashout_n222['projection'] + $row_cashout_o222['projection'] + $row_cashout_p222['projection'] +
                $row_cashout_q222['projection'] + $row_cashout_r222['projection'] + $row_cashout_s222['projection'] +
                $row_cashout_t222['projection'] + $row_cashout_u222['projection'] + $row_cashout_v222['projection'] +
                $row_cashout_w222['projection'] + $row_cashout_x222['projection'] + $row_cashout_y222['projection'] + $row_cashout_z222['projection'] + $row_cashout_a322['projection'] + $row_cashout_b322['projection'] + $row_cashout_c322['projection'] + $row_cashout_d322['projection'] + $row_cashout_e322['projection'] + $row_cashout_f322['projection'] + $row_cashout_g322['projection'] + $row_cashout_j322['projection'] + $row_cashout_k322['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o22['realisasi'] + $row_cashout_p22['realisasi'] + $row_cashout_q22['realisasi'] + $row_cashout_r22['realisasi'] + $row_cashout_s22['realisasi'] + $row_cashout_t22['realisasi'] + $row_cashout_u22['realisasi'] + $row_cashout_v22['realisasi'] + $row_cashout_w22['realisasi'] + $row_cashout_x22['realisasi'] + $row_cashout_y22['realisasi'] + $row_cashout_z22['realisasi'] + $row_cashout_a222['realisasi'] + $row_cashout_b222['realisasi'] + $row_cashout_c222['realisasi'] + $row_cashout_d222['realisasi'] + $row_cashout_e222['realisasi'] + $row_cashout_f222['realisasi'] + $row_cashout_g222['realisasi'] + $row_cashout_h222['realisasi'] + $row_cashout_i222['realisasi'] + $row_cashout_j222['realisasi'] + $row_cashout_k222['realisasi'] + $row_cashout_l222['realisasi'] + $row_cashout_m222['realisasi'] + $row_cashout_n222['realisasi'] + $row_cashout_o222['realisasi'] + $row_cashout_p222['realisasi'] +
                $row_cashout_q222['realisasi'] + $row_cashout_r222['realisasi'] + $row_cashout_s222['realisasi'] +
                $row_cashout_t222['realisasi'] + $row_cashout_u222['realisasi'] + $row_cashout_v222['realisasi'] +
                $row_cashout_w222['realisasi'] + $row_cashout_x222['realisasi'] + $row_cashout_y222['realisasi'] + $row_cashout_z222['realisasi'] + $row_cashout_a322['realisasi'] + $row_cashout_b322['realisasi'] + $row_cashout_c322['realisasi'] + $row_cashout_d322['realisasi'] + $row_cashout_e322['realisasi'] + $row_cashout_f322['realisasi'] + $row_cashout_g322['realisasi'] + $row_cashout_j322['realisasi'] + $row_cashout_k322['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o23['projection'] + $row_cashout_p23['projection'] + $row_cashout_q23['projection'] + $row_cashout_r23['projection'] + $row_cashout_s23['projection'] + $row_cashout_t23['projection'] + $row_cashout_u23['projection'] + $row_cashout_v23['projection'] + $row_cashout_w23['projection'] + $row_cashout_x23['projection'] + $row_cashout_y23['projection'] + $row_cashout_z23['projection'] + $row_cashout_a223['projection'] + $row_cashout_b223['projection'] + $row_cashout_c223['projection'] + $row_cashout_d223['projection'] + $row_cashout_e223['projection'] + $row_cashout_f223['projection'] + $row_cashout_g223['projection'] + $row_cashout_h223['projection'] + $row_cashout_i223['projection'] + $row_cashout_j223['projection'] + $row_cashout_k223['projection'] + $row_cashout_l223['projection'] + $row_cashout_m223['projection'] + $row_cashout_n223['projection'] + $row_cashout_o223['projection'] + $row_cashout_p223['projection'] +
                $row_cashout_q223['projection'] + $row_cashout_r223['projection'] + $row_cashout_s223['projection'] +
                $row_cashout_t223['projection'] + $row_cashout_u223['projection'] + $row_cashout_v223['projection'] +
                $row_cashout_w223['projection'] + $row_cashout_x223['projection'] + $row_cashout_y223['projection'] + $row_cashout_z223['projection'] + $row_cashout_a323['projection'] + $row_cashout_b323['projection'] + $row_cashout_c323['projection'] + $row_cashout_d323['projection'] + $row_cashout_e323['projection'] + $row_cashout_f323['projection'] + $row_cashout_g323['projection'] + $row_cashout_j323['projection'] + $row_cashout_k323['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o23['realisasi'] + $row_cashout_p23['realisasi'] + $row_cashout_q23['realisasi'] + $row_cashout_r23['realisasi'] + $row_cashout_s23['realisasi'] + $row_cashout_t23['realisasi'] + $row_cashout_u23['realisasi'] + $row_cashout_v23['realisasi'] + $row_cashout_w23['realisasi'] + $row_cashout_x23['realisasi'] + $row_cashout_y23['realisasi'] + $row_cashout_z23['realisasi'] + $row_cashout_a223['realisasi'] + $row_cashout_b223['realisasi'] + $row_cashout_c223['realisasi'] + $row_cashout_d223['realisasi'] + $row_cashout_e223['realisasi'] + $row_cashout_f223['realisasi'] + $row_cashout_g223['realisasi'] + $row_cashout_h223['realisasi'] + $row_cashout_i223['realisasi'] + $row_cashout_j223['realisasi'] + $row_cashout_k223['realisasi'] + $row_cashout_l223['realisasi'] + $row_cashout_m223['realisasi'] + $row_cashout_n223['realisasi'] + $row_cashout_o223['realisasi'] + $row_cashout_p223['realisasi'] +
                $row_cashout_q223['realisasi'] + $row_cashout_r223['realisasi'] + $row_cashout_s223['realisasi'] +
                $row_cashout_t223['realisasi'] + $row_cashout_u223['realisasi'] + $row_cashout_v223['realisasi'] +
                $row_cashout_w223['realisasi'] + $row_cashout_x223['realisasi'] + $row_cashout_y223['realisasi'] + $row_cashout_z223['realisasi'] + $row_cashout_a323['realisasi'] + $row_cashout_b323['realisasi'] + $row_cashout_c323['realisasi'] + $row_cashout_d323['realisasi'] + $row_cashout_e323['realisasi'] + $row_cashout_f323['realisasi'] + $row_cashout_g323['realisasi'] + $row_cashout_j323['realisasi'] + $row_cashout_k323['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o24['projection'] + $row_cashout_p24['projection'] + $row_cashout_q24['projection'] + $row_cashout_r24['projection'] + $row_cashout_s24['projection'] + $row_cashout_t24['projection'] + $row_cashout_u24['projection'] + $row_cashout_v24['projection'] + $row_cashout_w24['projection'] + $row_cashout_x24['projection'] + $row_cashout_y24['projection'] + $row_cashout_z24['projection'] + $row_cashout_a224['projection'] + $row_cashout_b224['projection'] + $row_cashout_c224['projection'] + $row_cashout_d224['projection'] + $row_cashout_e224['projection'] + $row_cashout_f224['projection'] + $row_cashout_g224['projection'] + $row_cashout_h224['projection'] + $row_cashout_i224['projection'] + $row_cashout_j224['projection'] + $row_cashout_k224['projection'] + $row_cashout_l224['projection'] + $row_cashout_m224['projection'] + $row_cashout_n224['projection'] + $row_cashout_o224['projection'] + $row_cashout_p224['projection'] +
                $row_cashout_q224['projection'] + $row_cashout_r224['projection'] + $row_cashout_s224['projection'] +
                $row_cashout_t224['projection'] + $row_cashout_u224['projection'] + $row_cashout_v224['projection'] +
                $row_cashout_w224['projection'] + $row_cashout_x224['projection'] + $row_cashout_y224['projection'] + $row_cashout_z224['projection'] + $row_cashout_a324['projection'] + $row_cashout_b324['projection'] + $row_cashout_c324['projection'] + $row_cashout_d324['projection'] + $row_cashout_e324['projection'] + $row_cashout_f324['projection'] + $row_cashout_g324['projection'] + $row_cashout_j324['projection'] + $row_cashout_k324['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o24['realisasi'] + $row_cashout_p24['realisasi'] + $row_cashout_q24['realisasi'] + $row_cashout_r24['realisasi'] + $row_cashout_s24['realisasi'] + $row_cashout_t24['realisasi'] + $row_cashout_u24['realisasi'] + $row_cashout_v24['realisasi'] + $row_cashout_w24['realisasi'] + $row_cashout_x24['realisasi'] + $row_cashout_y24['realisasi'] + $row_cashout_z24['realisasi'] + $row_cashout_a224['realisasi'] + $row_cashout_b224['realisasi'] + $row_cashout_c224['realisasi'] + $row_cashout_d224['realisasi'] + $row_cashout_e224['realisasi'] + $row_cashout_f224['realisasi'] + $row_cashout_g224['realisasi'] + $row_cashout_h224['realisasi'] + $row_cashout_i224['realisasi'] + $row_cashout_j224['realisasi'] + $row_cashout_k224['realisasi'] + $row_cashout_l224['realisasi'] + $row_cashout_m224['realisasi'] + $row_cashout_n224['realisasi'] + $row_cashout_o224['realisasi'] + $row_cashout_p224['realisasi'] +
                $row_cashout_q224['realisasi'] + $row_cashout_r224['realisasi'] + $row_cashout_s224['realisasi'] +
                $row_cashout_t224['realisasi'] + $row_cashout_u224['realisasi'] + $row_cashout_v224['realisasi'] +
                $row_cashout_w224['realisasi'] + $row_cashout_x224['realisasi'] + $row_cashout_y224['realisasi'] + $row_cashout_z224['realisasi'] + $row_cashout_a324['realisasi'] + $row_cashout_b324['realisasi'] + $row_cashout_c324['realisasi'] + $row_cashout_d324['realisasi'] + $row_cashout_e324['realisasi'] + $row_cashout_f324['realisasi'] + $row_cashout_g324['realisasi'] + $row_cashout_j324['realisasi'] + $row_cashout_k324['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o25['projection'] + $row_cashout_p25['projection'] + $row_cashout_q25['projection'] + $row_cashout_r25['projection'] + $row_cashout_s25['projection'] + $row_cashout_t25['projection'] + $row_cashout_u25['projection'] + $row_cashout_v25['projection'] + $row_cashout_w25['projection'] + $row_cashout_x25['projection'] + $row_cashout_y25['projection'] + $row_cashout_z25['projection'] + $row_cashout_a225['projection'] + $row_cashout_b225['projection'] + $row_cashout_c225['projection'] + $row_cashout_d225['projection'] + $row_cashout_e225['projection'] + $row_cashout_f225['projection'] + $row_cashout_g225['projection'] + $row_cashout_h225['projection'] + $row_cashout_i225['projection'] + $row_cashout_j225['projection'] + $row_cashout_k225['projection'] + $row_cashout_l225['projection'] + $row_cashout_m225['projection'] + $row_cashout_n225['projection'] + $row_cashout_o225['projection'] + $row_cashout_p225['projection'] +
                $row_cashout_q225['projection'] + $row_cashout_r225['projection'] + $row_cashout_s225['projection'] +
                $row_cashout_t225['projection'] + $row_cashout_u225['projection'] + $row_cashout_v225['projection'] +
                $row_cashout_w225['projection'] + $row_cashout_x225['projection'] + $row_cashout_y225['projection'] + $row_cashout_z225['projection'] + $row_cashout_a325['projection'] + $row_cashout_b325['projection'] + $row_cashout_c325['projection'] + $row_cashout_d325['projection'] + $row_cashout_e325['projection'] + $row_cashout_f325['projection'] + $row_cashout_g325['projection'] + $row_cashout_j325['projection'] + $row_cashout_k325['projection']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_o25['realisasi'] + $row_cashout_p25['realisasi'] + $row_cashout_q25['realisasi'] + $row_cashout_r25['realisasi'] + $row_cashout_s25['realisasi'] + $row_cashout_t25['realisasi'] + $row_cashout_u25['realisasi'] + $row_cashout_v25['realisasi'] + $row_cashout_w25['realisasi'] + $row_cashout_x25['realisasi'] + $row_cashout_y25['realisasi'] + $row_cashout_z25['realisasi'] + $row_cashout_a225['realisasi'] + $row_cashout_b225['realisasi'] + $row_cashout_c225['realisasi'] + $row_cashout_d225['realisasi'] + $row_cashout_e225['realisasi'] + $row_cashout_f225['realisasi'] + $row_cashout_g225['realisasi'] + $row_cashout_h225['realisasi'] + $row_cashout_i225['realisasi'] + $row_cashout_j225['realisasi'] + $row_cashout_k225['realisasi'] + $row_cashout_l225['realisasi'] + $row_cashout_m225['realisasi'] + $row_cashout_n225['realisasi'] + $row_cashout_o225['realisasi'] + $row_cashout_p225['realisasi'] +
                $row_cashout_q225['realisasi'] + $row_cashout_r225['realisasi'] + $row_cashout_s225['realisasi'] +
                $row_cashout_t225['realisasi'] + $row_cashout_u225['realisasi'] + $row_cashout_v225['realisasi'] +
                $row_cashout_w225['realisasi'] + $row_cashout_x225['realisasi'] + $row_cashout_y225['realisasi'] + $row_cashout_z225['realisasi'] + $row_cashout_a325['realisasi'] + $row_cashout_b325['realisasi'] + $row_cashout_c325['realisasi'] + $row_cashout_d325['realisasi'] + $row_cashout_e325['realisasi'] + $row_cashout_f325['realisasi'] + $row_cashout_g325['realisasi'] + $row_cashout_j325['realisasi'] + $row_cashout_k325['realisasi']) ?></td>
              
            </tr>

            <tr>
              <td>Penempatan Deposito (H3)</td>
              
              <td style="text-align: right;"><?php echo number_format($row_cashout_h31['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h31['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h32['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h32['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h33['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h33['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h34['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h34['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h35['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h35['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_h36['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h36['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h37['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h37['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h38['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h38['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h39['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h39['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h310['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h310['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_h311['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h311['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h312['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h312['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h313['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h313['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h314['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h314['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h315['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h315['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_h316['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h316['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h317['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h317['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h318['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h318['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h319['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h319['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h320['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h320['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_h321['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h321['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h322['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h322['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h323['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h323['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h324['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h324['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h325['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_h325['realisasi']) ?></td>
              
            </tr>

            <tr>
              <td>Pengembalian Rekening B2B (H3)</td>
              
              <td style="text-align: right;"><?php echo number_format($row_cashout_i31['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i31['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i32['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i32['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i33['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i33['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i34['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i34['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i35['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i35['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i36['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i36['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i37['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i37['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i38['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i38['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i39['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i39['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i310['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i310['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i311['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i311['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i312['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i312['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i313['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i313['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i314['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i314['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i315['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i315['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i316['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i316['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i317['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i317['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i318['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i318['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i319['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i319['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i320['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i320['realisasi']) ?></td>

              <td style="text-align: right;"><?php echo number_format($row_cashout_i321['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i321['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i322['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i322['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i323['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i323['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i324['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i324['realisasi']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i325['projection']) ?></td>
              <td style="text-align: right;"><?php echo number_format($row_cashout_i325['realisasi']) ?></td>
              
            </tr>

            
            <tr style="background-color: silver; color: white">
              <td>TOTAL CASH - OUT</td>
              
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

              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutProj6['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutReal6['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutProj7['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutReal7['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutProj8['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutReal8['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutProj9['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutReal9['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutProj10['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutReal10['tRealisasi']) ?></b></td>

              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutProj11['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutReal11['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutProj12['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutReal12['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutProj13['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutReal13['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutProj14['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutReal14['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutProj15['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutReal15['tRealisasi']) ?></b></td>

              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutProj16['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutReal16['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutProj17['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutReal17['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutProj18['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutReal18['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutProj19['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutReal19['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutProj20['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutReal20['tRealisasi']) ?></b></td>

              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutProj21['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutReal21['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutProj22['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutReal22['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutProj23['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutReal23['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutProj24['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutReal24['tRealisasi']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutProj25['tProjection']) ?></b></td>
              <td style="text-align: right;"><b><?php echo number_format($row_tCashoutReal25['tRealisasi']) ?></b></td>
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
            

            <tr style="background-color: orange; font-weight: bold">
              <td><b>Saldo Akhir :</b></td>

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

                $salakh_proj6 = $row_salaw6['saldo_awal_proj'] + $row_tCashinProj6['tProjection'] - $row_tCashoutProj6['tProjection'];
                $salakh_real6 = $row_salaw6['saldo_awal_real'] + $row_tCashinReal6['tRealisasi'] - $row_tCashoutReal6['tRealisasi'];

                $salakh_proj7 = $row_salaw7['saldo_awal_proj'] + $row_tCashinProj7['tProjection'] - $row_tCashoutProj7['tProjection'];
                $salakh_real7 = $row_salaw7['saldo_awal_real'] + $row_tCashinReal7['tRealisasi'] - $row_tCashoutReal7['tRealisasi'];

                $salakh_proj8 = $row_salaw8['saldo_awal_proj'] + $row_tCashinProj8['tProjection'] - $row_tCashoutProj8['tProjection'];
                $salakh_real8 = $row_salaw8['saldo_awal_real'] + $row_tCashinReal8['tRealisasi'] - $row_tCashoutReal8['tRealisasi'];

                $salakh_proj9 = $row_salaw9['saldo_awal_proj'] + $row_tCashinProj9['tProjection'] - $row_tCashoutProj9['tProjection'];
                $salakh_real9 = $row_salaw9['saldo_awal_real'] + $row_tCashinReal9['tRealisasi'] - $row_tCashoutReal9['tRealisasi'];

                $salakh_proj10 = $row_salaw10['saldo_awal_proj'] + $row_tCashinProj10['tProjection'] - $row_tCashoutProj10['tProjection'];
                $salakh_real10 = $row_salaw10['saldo_awal_real'] + $row_tCashinReal10['tRealisasi'] - $row_tCashoutReal10['tRealisasi'];

                $salakh_proj11 = $row_salaw11['saldo_awal_proj'] + $row_tCashinProj11['tProjection'] - $row_tCashoutProj11['tProjection'];
                $salakh_real11 = $row_salaw11['saldo_awal_real'] + $row_tCashinReal11['tRealisasi'] - $row_tCashoutReal11['tRealisasi'];

                $salakh_proj12 = $row_salaw12['saldo_awal_proj'] + $row_tCashinProj12['tProjection'] - $row_tCashoutProj12['tProjection'];
                $salakh_real12 = $row_salaw12['saldo_awal_real'] + $row_tCashinReal12['tRealisasi'] - $row_tCashoutReal12['tRealisasi'];

                $salakh_proj13 = $row_salaw13['saldo_awal_proj'] + $row_tCashinProj13['tProjection'] - $row_tCashoutProj13['tProjection'];
                $salakh_real13 = $row_salaw13['saldo_awal_real'] + $row_tCashinReal13['tRealisasi'] - $row_tCashoutReal13['tRealisasi'];

                $salakh_proj14 = $row_salaw14['saldo_awal_proj'] + $row_tCashinProj14['tProjection'] - $row_tCashoutProj14['tProjection'];
                $salakh_real14 = $row_salaw14['saldo_awal_real'] + $row_tCashinReal14['tRealisasi'] - $row_tCashoutReal14['tRealisasi'];

                $salakh_proj15 = $row_salaw15['saldo_awal_proj'] + $row_tCashinProj15['tProjection'] - $row_tCashoutProj15['tProjection'];
                $salakh_real15 = $row_salaw15['saldo_awal_real'] + $row_tCashinReal15['tRealisasi'] - $row_tCashoutReal15['tRealisasi'];

                $salakh_proj16 = $row_salaw16['saldo_awal_proj'] + $row_tCashinProj16['tProjection'] - $row_tCashoutProj16['tProjection'];
                $salakh_real16 = $row_salaw16['saldo_awal_real'] + $row_tCashinReal16['tRealisasi'] - $row_tCashoutReal16['tRealisasi'];

                $salakh_proj17 = $row_salaw17['saldo_awal_proj'] + $row_tCashinProj17['tProjection'] - $row_tCashoutProj17['tProjection'];
                $salakh_real17 = $row_salaw17['saldo_awal_real'] + $row_tCashinReal17['tRealisasi'] - $row_tCashoutReal17['tRealisasi'];

                $salakh_proj18 = $row_salaw18['saldo_awal_proj'] + $row_tCashinProj18['tProjection'] - $row_tCashoutProj18['tProjection'];
                $salakh_real18 = $row_salaw18['saldo_awal_real'] + $row_tCashinReal18['tRealisasi'] - $row_tCashoutReal18['tRealisasi'];

                $salakh_proj19 = $row_salaw19['saldo_awal_proj'] + $row_tCashinProj19['tProjection'] - $row_tCashoutProj19['tProjection'];
                $salakh_real19 = $row_salaw19['saldo_awal_real'] + $row_tCashinReal19['tRealisasi'] - $row_tCashoutReal19['tRealisasi'];

                $salakh_proj20 = $row_salaw20['saldo_awal_proj'] + $row_tCashinProj20['tProjection'] - $row_tCashoutProj20['tProjection'];
                $salakh_real20 = $row_salaw20['saldo_awal_real'] + $row_tCashinReal20['tRealisasi'] - $row_tCashoutReal20['tRealisasi'];

                $salakh_proj21 = $row_salaw21['saldo_awal_proj'] + $row_tCashinProj21['tProjection'] - $row_tCashoutProj21['tProjection'];
                $salakh_real21 = $row_salaw21['saldo_awal_real'] + $row_tCashinReal21['tRealisasi'] - $row_tCashoutReal21['tRealisasi'];

                $salakh_proj22 = $row_salaw22['saldo_awal_proj'] + $row_tCashinProj22['tProjection'] - $row_tCashoutProj22['tProjection'];
                $salakh_real22 = $row_salaw22['saldo_awal_real'] + $row_tCashinReal22['tRealisasi'] - $row_tCashoutReal22['tRealisasi'];

                $salakh_proj23 = $row_salaw23['saldo_awal_proj'] + $row_tCashinProj23['tProjection'] - $row_tCashoutProj23['tProjection'];
                $salakh_real23 = $row_salaw23['saldo_awal_real'] + $row_tCashinReal23['tRealisasi'] - $row_tCashoutReal23['tRealisasi'];

                $salakh_proj24 = $row_salaw24['saldo_awal_proj'] + $row_tCashinProj24['tProjection'] - $row_tCashoutProj24['tProjection'];
                $salakh_real24 = $row_salaw24['saldo_awal_real'] + $row_tCashinReal24['tRealisasi'] - $row_tCashoutReal24['tRealisasi'];

                $salakh_proj25 = $row_salaw25['saldo_awal_proj'] + $row_tCashinProj25['tProjection'] - $row_tCashoutProj25['tProjection'];
                $salakh_real25 = $row_salaw25['saldo_awal_real'] + $row_tCashinReal25['tRealisasi'] - $row_tCashoutReal25['tRealisasi'];

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

              <td style="text-align: right;"><?php echo number_format($salakh_proj6,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_real6,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_proj7,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_real7,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_proj8,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_real8,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_proj9,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_real9,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_proj10,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_real10,0,'.',',') ?></td>

              <td style="text-align: right;"><?php echo number_format($salakh_proj11,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_real11,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_proj12,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_real12,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_proj13,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_real13,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_proj14,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_real14,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_proj15,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_real15,0,'.',',') ?></td>

              <td style="text-align: right;"><?php echo number_format($salakh_proj16,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_real16,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_proj17,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_real17,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_proj18,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_real18,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_proj19,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_real19,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_proj20,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_real20,0,'.',',') ?></td>

              <td style="text-align: right;"><?php echo number_format($salakh_proj21,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_real21,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_proj22,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_real22,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_proj23,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_real23,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_proj24,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_real24,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_proj25,0,'.',',') ?></td>
              <td style="text-align: right;"><?php echo number_format($salakh_real25,0,'.',',') ?></td>
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

              <td></td>
              <td style="text-align: right"><?php echo number_format($row_allo6['allocated_cash'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_allo7['allocated_cash'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_allo8['allocated_cash'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_allo9['allocated_cash'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_allo10['allocated_cash'],0,'.',','); ?></td>

              <td></td>
              <td style="text-align: right"><?php echo number_format($row_allo11['allocated_cash'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_allo12['allocated_cash'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_allo13['allocated_cash'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_allo14['allocated_cash'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_allo15['allocated_cash'],0,'.',','); ?></td>

              <td></td>
              <td style="text-align: right"><?php echo number_format($row_allo16['allocated_cash'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_allo17['allocated_cash'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_allo18['allocated_cash'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_allo19['allocated_cash'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_allo20['allocated_cash'],0,'.',','); ?></td>

              <td></td>
              <td style="text-align: right"><?php echo number_format($row_allo21['allocated_cash'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_allo22['allocated_cash'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_allo23['allocated_cash'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_allo24['allocated_cash'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_allo25['allocated_cash'],0,'.',','); ?></td>

            </tr>

            <tr style="background-color: silver">
              <td><b>Ready Cash :</b></td>

              <?php  
                $ready_cash1 = $salakh_real1 - $row_allo1['allocated_cash'];
                $ready_cash2 = $salakh_real2 - $row_allo2['allocated_cash'];
                $ready_cash3 = $salakh_real3 - $row_allo3['allocated_cash'];
                $ready_cash4 = $salakh_real4 - $row_allo4['allocated_cash'];
                $ready_cash5 = $salakh_real5 - $row_allo5['allocated_cash'];

                $ready_cash6 = $salakh_real6 - $row_allo6['allocated_cash'];
                $ready_cash7 = $salakh_real7 - $row_allo7['allocated_cash'];
                $ready_cash8 = $salakh_real8 - $row_allo8['allocated_cash'];
                $ready_cash9 = $salakh_real9 - $row_allo9['allocated_cash'];
                $ready_cash10 = $salakh_real10 - $row_allo10['allocated_cash'];

                $ready_cash11 = $salakh_real11 - $row_allo11['allocated_cash'];
                $ready_cash12 = $salakh_real12 - $row_allo12['allocated_cash'];
                $ready_cash13 = $salakh_real13 - $row_allo13['allocated_cash'];
                $ready_cash14 = $salakh_real14 - $row_allo14['allocated_cash'];
                $ready_cash15 = $salakh_real15 - $row_allo15['allocated_cash'];

                $ready_cash16 = $salakh_real16 - $row_allo16['allocated_cash'];
                $ready_cash17 = $salakh_real17 - $row_allo17['allocated_cash'];
                $ready_cash18 = $salakh_real18 - $row_allo18['allocated_cash'];
                $ready_cash19 = $salakh_real19 - $row_allo19['allocated_cash'];
                $ready_cash20 = $salakh_real20 - $row_allo20['allocated_cash'];

                $ready_cash21 = $salakh_real21 - $row_allo21['allocated_cash'];
                $ready_cash22 = $salakh_real22 - $row_allo22['allocated_cash'];
                $ready_cash23 = $salakh_real23 - $row_allo23['allocated_cash'];
                $ready_cash24 = $salakh_real24 - $row_allo24['allocated_cash'];
                $ready_cash25 = $salakh_real25 - $row_allo25['allocated_cash'];
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

              <td></td>
              <td style="text-align: right"><?php echo number_format($ready_cash6,0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($ready_cash7,0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($ready_cash8,0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($ready_cash9,0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($ready_cash10,0,'.',','); ?></td>

              <td></td>
              <td style="text-align: right"><?php echo number_format($ready_cash11,0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($ready_cash12,0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($ready_cash13,0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($ready_cash14,0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($ready_cash15,0,'.',','); ?></td>

              <td></td>
              <td style="text-align: right"><?php echo number_format($ready_cash16,0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($ready_cash17,0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($ready_cash18,0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($ready_cash19,0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($ready_cash20,0,'.',','); ?></td>

              <td></td>
              <td style="text-align: right"><?php echo number_format($ready_cash21,0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($ready_cash22,0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($ready_cash23,0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($ready_cash24,0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($ready_cash25,0,'.',','); ?></td>

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

              <td></td>
              <td style="text-align: right"><?php echo number_format($row_kbc6['kbc'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_kbc7['kbc'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_kbc8['kbc'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_kbc9['kbc'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_kbc10['kbc'],0,'.',','); ?></td>

              <td></td>
              <td style="text-align: right"><?php echo number_format($row_kbc11['kbc'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_kbc12['kbc'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_kbc13['kbc'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_kbc14['kbc'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_kbc15['kbc'],0,'.',','); ?></td>

              <td></td>
              <td style="text-align: right"><?php echo number_format($row_kbc16['kbc'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_kbc17['kbc'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_kbc18['kbc'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_kbc19['kbc'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_kbc20['kbc'],0,'.',','); ?></td>

              <td></td>
              <td style="text-align: right"><?php echo number_format($row_kbc21['kbc'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_kbc22['kbc'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_kbc23['kbc'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_kbc24['kbc'],0,'.',','); ?></td>
              <td></td>
              <td style="text-align: right"><?php echo number_format($row_kbc25['kbc'],0,'.',','); ?></td>

            </tr>

            <tr style="background-color: #edfa7a">
              <td><b>Deposito :</b></td>
              
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_deposito1['deposito'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_deposito2['deposito'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_deposito3['deposito'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_deposito4['deposito'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_deposito5['deposito'],0,'.',','); ?>
              </td>

              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_deposito6['deposito'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_deposito7['deposito'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_deposito8['deposito'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_deposito9['deposito'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_deposito10['deposito'],0,'.',','); ?>
              </td>

              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_deposito11['deposito'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_deposito12['deposito'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_deposito13['deposito'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_deposito14['deposito'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_deposito15['deposito'],0,'.',','); ?>
              </td>

              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_deposito16['deposito'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_deposito17['deposito'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_deposito18['deposito'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_deposito19['deposito'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_deposito20['deposito'],0,'.',','); ?>
              </td>

              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_deposito21['deposito'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_deposito22['deposito'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_deposito23['deposito'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_deposito24['deposito'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_deposito25['deposito'],0,'.',','); ?>
              </td>

            </tr>


            <tr style="background-color: #edfa7a">
              <td><b>Rekening Back to Back :</b></td>
              
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_b2b1['b2b'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_b2b2['b2b'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_b2b3['b2b'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_b2b4['b2b'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_b2b5['b2b'],0,'.',','); ?>
              </td>

              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_b2b6['b2b'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_b2b7['b2b'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_b2b8['b2b'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_b2b9['b2b'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_b2b10['b2b'],0,'.',','); ?>
              </td>

              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_b2b11['b2b'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_b2b12['b2b'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_b2b13['b2b'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_b2b14['b2b'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_b2b15['b2b'],0,'.',','); ?>
              </td>

              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_b2b16['b2b'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_b2b17['b2b'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_b2b18['b2b'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_b2b19['b2b'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_b2b20['b2b'],0,'.',','); ?>
              </td>

              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_b2b21['b2b'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_b2b22['b2b'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_b2b23['b2b'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_b2b24['b2b'],0,'.',','); ?>
              </td>
              <td colspan="2" style="text-align: right">
                <?php echo number_format($row_b2b25['b2b'],0,'.',','); ?>
              </td>

            </tr>

            <!-- <tr style="background-color: #edfa7a">
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

            </tr> -->


            <!-- <tr style="background-color: #edfa7a">
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

            </tr> -->

            <!-- <tr style="background-color: #FBD073">
              <td><b>Note Finance :</b></td>
              
              <td colspan="2" style="text-align: center"> -->
                <!-- Button trigger modal -->
                <<!-- button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#note1">
                  <i class="fa fa-eye"></i> View Note
                </button>
              </td> -->

              <!-- <td colspan="2" style="text-align: center"> -->
                <!-- Button trigger modal -->
                <!-- <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#note2">
                  <i class="fa fa-eye"></i> View Note
                </button>
              </td>

              <td colspan="2" style="text-align: center"> -->
                <!-- Button trigger modal -->
                <!-- <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#note3">
                  <i class="fa fa-eye"></i> View Note
                </button>
              </td>

              <td colspan="2" style="text-align: center"> -->
                <!-- Button trigger modal -->
                <!-- <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#note4">
                  <i class="fa fa-eye"></i> View Note
                </button>
              </td>

              <td colspan="2" style="text-align: center"> -->
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

          </td>
          </tr>
          </table>
        

        </div>
        <!-- /.box-body -->
        
      </div>
      <!-- /.Box Cash In -->

    </section>
    <!-- /.content -->

    <?php } ?>
    <!-- Penutup Jika Yang Login Administrator Maka Akan Tampil Summary -->

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