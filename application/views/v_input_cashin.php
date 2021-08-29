<?php  

// Data User Yang Login
  $nama = $this->libraryku->tampil_user()->nama;
  $username = $this->libraryku->tampil_user()->username;
  $level = $this->libraryku->tampil_user()->level;

?>


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    <?php echo $this->session->flashdata('pesan_sukses'); ?>

      <h1>
        Input Data Cash-In Proyeksi
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <!-- Box Projection -->
        <div class="col-sm-10">
          
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Proyeksi Cash-In</h3>

              <span style="margin-left: 38%">
                <a href="<?php echo base_url().'upload_csv/upload_cashin_proyeksi.php' ?>" type="button" class="btn btn-info btn-xs">
                  <i class="fa fa-upload"></i> Upload Proyeksi
                </a>
              </span>

              <span>
                <a href="<?php echo base_url().'input_cashin/view_inputan' ?>" type="button" class="btn btn-warning btn-xs"><i class="fa fa-eye"></i> Lihat Yang Sudah Diinput</a>
              </span>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>

            <div class="box-body">
              
              <!-- Isi Form -->

                <div style="background-color: #fcf1b1; padding: 5px; border-radius: 5px; margin-bottom: 8px; font-weight: bold">
                  Pencairan Bank
                </div>

                <!-- FORM (A)-->
                <form method="post" action="<?php echo base_url().'input_cashin/tambah' ?>">
                <div class="row">

                <!-- Inputan Hidden -->
                <input type="text" name="kode_status" value="A" hidden>
                <input type="text" name="status" value="Pencairan Bank" hidden>

                  <div class="col-xs-4">
                    <div class="form-group <?php echo form_error('projection') ? 'has-error' : null ?>">
                      <label>Pencairan Bank (A) *</label>
                      <input type="number" name="projection" class="form-control" placeholder="(Rp)" required required>
                      <?php echo form_error('projection') ?>
                    </div>
                  </div>

                  <div class="col-xs-4">
                    <div class="form-group <?php echo form_error('tanggal') ? 'has-error' : null ?>">
                      <label>Tanggal *</label>
                      <input type="date" name="tanggal" class="form-control" required required>
                      <?php echo form_error('tanggal'); ?>
                    </div>
                  </div>

                  <div class="col-xs-4">

                    <button class="btn btn-success btn-sm" type="submit" name="simpan_A" style="margin-top: 25px;">
                      <i class="fa fa-save"></i> Simpan
                    </button>

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashin_proj.php?kode=A&status=Pencairan_Bank" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->

                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (A)-->


                <div style="background-color: #fcf1b1; padding: 5px; border-radius: 5px; margin-bottom: 8px; font-weight: bold">
                  Penerimaan Angsuran Debitur (C+D)
                </div>


                <!-- FORM (C)-->
                <form method="post" action="<?php echo base_url().'input_cashin/tambah' ?>">
                <div class="row">

                <!-- Inputan Hidden -->
                <input type="text" name="kode_status" value="C" hidden>
                <input type="text" name="status" value="Setoran Angsuran Debitur" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Setoran Angsuran Debitur (C) *</label>
                      <input type="number" name="projection" class="form-control" placeholder="(Rp)" required required>
                    </div>
                  </div>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Tanggal *</label>
                      <input type="date" name="tanggal" class="form-control" required required>
                    </div>
                  </div>

                  <div class="col-xs-4">

                    <button class="btn btn-success btn-sm" type="submit" name="simpan_C" style="margin-top: 25px;">
                      <i class="fa fa-save"></i> Simpan
                    </button>

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashin_proj.php?kode=C&status=Setoran_Angsuran_Debitur" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (C)-->



                <!-- FORM (D)-->
                <form method="post" action="<?php echo base_url().'input_cashin/tambah' ?>">
                <div class="row">

                <!-- Inputan Hidden -->
                <input type="text" name="kode_status" value="D" hidden>
                <input type="text" name="status" value="Angsuran Dari Kantor POS" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Angsuran Dari Kantor Pos (D) *</label>
                      <input type="number" name="projection" class="form-control" placeholder="(Rp)" required required>
                    </div>
                  </div>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Tanggal *</label>
                      <input type="date" name="tanggal" class="form-control" required required>
                    </div>
                  </div>

                  <div class="col-xs-4">

                    <button class="btn btn-success btn-sm" type="submit" name="simpan_D" style="margin-top: 25px;">
                      <i class="fa fa-save"></i> Simpan
                    </button>

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashin_proj.php?kode=D&status=Angsuran_Dari_Kantor_POS" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (D)-->


                <div style="background-color: #fcf1b1; padding: 5px; border-radius: 5px; margin-bottom: 8px; font-weight: bold">
                  Penerimaan Pelunasan & Recovery (E+F+G)
                </div>



                <!-- FORM (E)-->
                <form method="post" action="<?php echo base_url().'input_cashin/tambah' ?>">
                <div class="row">

                <!-- Inputan Hidden -->
                <input type="text" name="kode_status" value="E" hidden>
                <input type="text" name="status" value="Pelunasan Awal" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Pelunasan Awal (E) *</label>
                      <input type="number" name="projection" class="form-control" placeholder="(Rp)" required required>
                    </div>
                  </div>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Tanggal *</label>
                      <input type="date" name="tanggal" class="form-control" required required>
                    </div>
                  </div>

                  <div class="col-xs-4">

                    <button class="btn btn-success btn-sm" type="submit" name="simpan_E" style="margin-top: 25px;">
                      <i class="fa fa-save"></i> Simpan
                    </button>

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashin_proj.php?kode=E&status=Pelunasan_Awal" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (E)-->


                <!-- FORM (F)-->
                <form method="post" action="<?php echo base_url().'input_cashin/tambah' ?>">
                <div class="row">

                <!-- Inputan Hidden -->
                <input type="text" name="kode_status" value="F" hidden>
                <input type="text" name="status" value="Penjualan AYDA" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Penjualan AYDA (F) *</label>
                      <input type="number" name="projection" class="form-control" placeholder="(Rp)" required>
                    </div>
                  </div>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Tanggal *</label>
                      <input type="date" name="tanggal" class="form-control" required>
                    </div>
                  </div>

                  <div class="col-xs-4">

                    <button class="btn btn-success btn-sm" type="submit" name="simpan_F" style="margin-top: 25px;">
                      <i class="fa fa-save"></i> Simpan
                    </button>

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashin_proj.php?kode=F&status=Penjualan_Ayda" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (F)-->


                <!-- FORM (G)-->
                <form method="post" action="<?php echo base_url().'input_cashin/tambah' ?>">
                <div class="row">

                <!-- Inputan Hidden -->
                <input type="text" name="kode_status" value="G" hidden>
                <input type="text" name="status" value="Recovery WO" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Recovery WO (G) *</label>
                      <input type="number" name="projection" class="form-control" placeholder="(Rp)" required>
                    </div>
                  </div>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Tanggal *</label>
                      <input type="date" name="tanggal" class="form-control" required>
                    </div>
                  </div>

                  <div class="col-xs-4">

                    <button class="btn btn-success btn-sm" type="submit" name="simpan_G" style="margin-top: 25px;">
                      <i class="fa fa-save"></i> Simpan
                    </button>

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashin_proj.php?kode=G&status=Recovery_WO" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (G)-->


                <div style="background-color: #fcf1b1; padding: 5px; border-radius: 5px; margin-bottom: 8px; font-weight: bold">
                  Penerimaan Diluar Angsuran Debitur (H+I+J+K+L+M+N)
                </div>


                <!-- FORM (H)-->
                <form method="post" action="<?php echo base_url().'input_cashin/tambah' ?>">
                <div class="row">

                <!-- Inputan Hidden -->
                <input type="text" name="kode_status" value="H" hidden>
                <input type="text" name="status" value="Penggantian Klaim Asuransi" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Penggantian Klaim Asuransi (H) *</label>
                      <input type="number" name="projection" class="form-control" placeholder="(Rp)" required>
                    </div>
                  </div>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Tanggal *</label>
                      <input type="date" name="tanggal" class="form-control" required>
                    </div>
                  </div>

                  <div class="col-xs-4">

                    <button class="btn btn-success btn-sm" type="submit" name="simpan_H" style="margin-top: 25px;">
                      <i class="fa fa-save"></i> Simpan
                    </button>

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashin_proj.php?kode=H&status=Penggantian_Klaim_Asuransi" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (H)-->


                <!-- FORM (I)-->
                <form method="post" action="<?php echo base_url().'input_cashin/tambah' ?>">
                <div class="row">

                <!-- Inputan Hidden -->
                <input type="text" name="kode_status" value="I" hidden>
                <input type="text" name="status" value="Pembayaran Suryamas" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Pembayaran Suryamas (I) *</label>
                      <input type="number" name="projection" class="form-control" placeholder="(Rp)" required>
                    </div>
                  </div>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Tanggal *</label>
                      <input type="date" name="tanggal" class="form-control" required>
                    </div>
                  </div>

                  <div class="col-xs-4">

                    <button class="btn btn-success btn-sm" type="submit" name="simpan_I" style="margin-top: 25px;">
                      <i class="fa fa-save"></i> Simpan
                    </button>

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashin_proj.php?kode=I&status=Pembayaran_Suryamas" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (I)-->



                <!-- FORM (J)-->
                <form method="post" action="<?php echo base_url().'input_cashin/tambah' ?>">
                <div class="row">

                <!-- Inputan Hidden -->
                <input type="text" name="kode_status" value="J" hidden>
                <input type="text" name="status" value="Penerimaan Cicilan" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Penerimaan Cicilan (Karyawan,dll) (J) *</label>
                      <input type="number" name="projection" class="form-control" placeholder="(Rp)" required>
                    </div>
                  </div>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Tanggal *</label>
                      <input type="date" name="tanggal" class="form-control" required>
                    </div>
                  </div>

                  <div class="col-xs-4">

                    <button class="btn btn-success btn-sm" type="submit" name="simpan_J" style="margin-top: 25px;">
                      <i class="fa fa-save"></i> Simpan
                    </button>

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashin_proj.php?kode=J&status=Penerimaan_Cicilan" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (J)-->



                <!-- FORM (K)-->
                <form method="post" action="<?php echo base_url().'input_cashin/tambah' ?>">
                <div class="row">

                <!-- Inputan Hidden -->
                <input type="text" name="kode_status" value="K" hidden>
                <input type="text" name="status" value="Pengembalian Uang Muka" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Pengembalian Uang Muka (K) *</label>
                      <input type="number" name="projection" class="form-control" placeholder="(Rp)" required>
                    </div>
                  </div>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Tanggal *</label>
                      <input type="date" name="tanggal" class="form-control" required>
                    </div>
                  </div>

                  <div class="col-xs-4">

                    <button class="btn btn-success btn-sm" type="submit" name="simpan_K" style="margin-top: 25px;">
                      <i class="fa fa-save"></i> Simpan
                    </button>

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashin_proj.php?kode=K&status=Pengembalian_Uang_Muka" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (K)-->


                <!-- FORM (L)-->
                <form method="post" action="<?php echo base_url().'input_cashin/tambah' ?>">
                <div class="row">

                <!-- Inputan Hidden -->
                <input type="text" name="kode_status" value="L" hidden>
                <input type="text" name="status" value="Penjualan Kendaraan Inventaris" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Penjualan Kendaraan Inventaris (L) *</label>
                      <input type="number" name="projection" class="form-control" placeholder="(Rp)" required>
                    </div>
                  </div>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Tanggal *</label>
                      <input type="date" name="tanggal" class="form-control" required>
                    </div>
                  </div>

                  <div class="col-xs-4">

                    <button class="btn btn-success btn-sm" type="submit" name="simpan_L" style="margin-top: 25px;">
                      <i class="fa fa-save"></i> Simpan
                    </button>

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashin_proj.php?kode=L&status=Penjualan_Kendaraan_Inventaris" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (L)-->


                <!-- FORM (L)-->
                <form method="post" action="<?php echo base_url().'input_cashin/tambah' ?>">
                <div class="row">

                <!-- Inputan Hidden -->
                <input type="text" name="kode_status" value="M" hidden>
                <input type="text" name="status" value="Sewa Gedung" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Sewa Gedung (M) *</label>
                      <input type="number" name="projection" class="form-control" placeholder="(Rp)" required>
                    </div>
                  </div>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Tanggal *</label>
                      <input type="date" name="tanggal" class="form-control" required>
                    </div>
                  </div>

                  <div class="col-xs-4">

                    <button class="btn btn-success btn-sm" type="submit" name="simpan_M" style="margin-top: 25px;">
                      <i class="fa fa-save"></i> Simpan
                    </button>

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashin_proj.php?kode=M&status=Sewa_Gedung" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (M)-->


                <!-- FORM (L)-->
                <form method="post" action="<?php echo base_url().'input_cashin/tambah' ?>">
                <div class="row">

                <!-- Inputan Hidden -->
                <input type="text" name="kode_status" value="N" hidden>
                <input type="text" name="status" value="Terima Pengembalian Pinjaman" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Terima Pengembalian Pinjaman (N) *</label>
                      <input type="number" name="projection" class="form-control" placeholder="(Rp)" required>
                    </div>
                  </div>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Tanggal *</label>
                      <input type="date" name="tanggal" class="form-control" required>
                    </div>
                  </div>

                  <div class="col-xs-4">

                    <button class="btn btn-success btn-sm" type="submit" name="simpan_N" style="margin-top: 25px;">
                      <i class="fa fa-save"></i> Simpan
                    </button>

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashin_proj.php?kode=N&status=Terima_Pengembalian_Pinjaman" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (N)-->


                <div style="background-color: #fcf1b1; padding: 5px; border-radius: 5px; margin-bottom: 8px; font-weight: bold">
                  Pencairan PRK
                </div>


                <!-- FORM (O)-->
                <form method="post" action="<?php echo base_url().'input_cashin/tambah' ?>">
                <div class="row">

                <!-- Inputan Hidden -->
                <input type="text" name="kode_status" value="O" hidden>
                <input type="text" name="status" value="Pencairan PRK" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Pencairan PRK (O) *</label>
                      <input type="number" name="projection" class="form-control" placeholder="(Rp)" required>
                    </div>
                  </div>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Tanggal *</label>
                      <input type="date" name="tanggal" class="form-control" required>
                    </div>
                  </div>

                  <div class="col-xs-4">

                    <button class="btn btn-success btn-sm" type="submit" name="simpan_O" style="margin-top: 25px;">
                      <i class="fa fa-save"></i> Simpan
                    </button>

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashin_proj.php?kode=O&status=Pencairan_PRK" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (O)-->


                <div style="background-color: #fcf1b1; padding: 5px; border-radius: 5px; margin-bottom: 8px; font-weight: bold">
                  Pinjaman/Hutang Pemegang Saham
                </div>


                <!-- FORM (L)-->
                <form method="post" action="<?php echo base_url().'input_cashin/tambah' ?>">
                <div class="row">

                <!-- Inputan Hidden -->
                <input type="text" name="kode_status" value="P" hidden>
                <input type="text" name="status" value="Pinjaman/Hutang Pemegang Saham" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Pinjaman/Hutang Pemegang Saham (P) *</label>
                      <input type="number" name="projection" class="form-control" placeholder="(Rp)" required>
                    </div>
                  </div>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Tanggal *</label>
                      <input type="date" name="tanggal" class="form-control" required>
                    </div>
                  </div>

                  <div class="col-xs-4">

                    <button class="btn btn-success btn-sm" type="submit" name="simpan_P" style="margin-top: 25px;">
                      <i class="fa fa-save"></i> Simpan
                    </button>

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashin_proj.php?kode=P&status=Pinjaman_Hutang_Pemegang_Saham" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (P)-->



                <div style="background-color: #fcf1b1; padding: 5px; border-radius: 5px; margin-bottom: 8px; font-weight: bold">
                  Setoran Modal
                </div>


                <!-- FORM (Q)-->
                <form method="post" action="<?php echo base_url().'input_cashin/tambah' ?>">
                <div class="row">

                <!-- Inputan Hidden -->
                <input type="text" name="kode_status" value="Q" hidden>
                <input type="text" name="status" value="Setoran Modal" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Setoran Modal (Q) *</label>
                      <input type="number" name="projection" class="form-control" placeholder="(Rp)" required>
                    </div>
                  </div>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Tanggal *</label>
                      <input type="date" name="tanggal" class="form-control" required>
                    </div>
                  </div>

                  <div class="col-xs-4">

                    <button class="btn btn-success btn-sm" type="submit" name="simpan_Q" style="margin-top: 25px;">
                      <i class="fa fa-save"></i> Simpan
                    </button>

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashin_proj.php?kode=Q&status=Setoran_Modal" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (Q)-->


                <div style="background-color: #fcf1b1; padding: 5px; border-radius: 5px; margin-bottom: 8px; font-weight: bold">
                  Pencairan Deposito
                </div>


                <!-- FORM (R)-->
                <form method="post" action="<?php echo base_url().'input_cashin/tambah' ?>">
                <div class="row">

                <!-- Inputan Hidden -->
                <input type="text" name="kode_status" value="R" hidden>
                <input type="text" name="status" value="Pencairan Deposito" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Pencairan Deposito (R) *</label>
                      <input type="number" name="projection" class="form-control" placeholder="(Rp)" required>
                    </div>
                  </div>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Tanggal *</label>
                      <input type="date" name="tanggal" class="form-control" required>
                    </div>
                  </div>

                  <div class="col-xs-4">

                    <button class="btn btn-success btn-sm" type="submit" name="simpan_R" style="margin-top: 25px;">
                      <i class="fa fa-save"></i> Simpan
                    </button>

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashin_proj.php?kode=R&status=Pencairan_Deposito" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (R)-->



                <div style="background-color: #fcf1b1; padding: 5px; border-radius: 5px; margin-bottom: 8px; font-weight: bold">
                  Pencairan Rekening B2B
                </div>


                <!-- FORM (S)-->
                <form method="post" action="<?php echo base_url().'input_cashin/tambah' ?>">
                <div class="row">

                <!-- Inputan Hidden -->
                <input type="text" name="kode_status" value="S" hidden>
                <input type="text" name="status" value="Pencairan Rekening B2B" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Pencairan Rekening B2B (S) *</label>
                      <input type="number" name="projection" class="form-control" placeholder="(Rp)" required>
                    </div>
                  </div>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Tanggal *</label>
                      <input type="date" name="tanggal" class="form-control" required>
                    </div>
                  </div>

                  <div class="col-xs-4">

                    <button class="btn btn-success btn-sm" type="submit" name="simpan_R" style="margin-top: 25px;">
                      <i class="fa fa-save"></i> Simpan
                    </button>

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashin_proj.php?kode=S&status=Pencairan_Rekening_B2B" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (S)-->
                
                

              <!-- / Isi Form -->

            </div>
            <!-- /.box-body -->
            
          </div>

        </div>
        <!-- /.Box Projection -->

      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Modal Upload -->
  <div class="modal fade" id="modal-upload">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Upload Proyeksi Cash-In</h4>
          <br>
          <span>
            <a href="<?php echo base_url().'upload_excel/proyeksi_cashin.xlsx' ?>" class="btn btn-info btn-xs">
              <i class="fa fa-download"></i> Download Format
            </a>
          </span>

        </div>
        
        <div class="modal-footer">
          <form method="post" action="<?php echo base_url().'upload_excel/upload_proyeksi_cashin.php' ?>" enctype="multipart/form-data">
            
            <div class="form-group">
              <input type="file" name="berkas_excel" class="form-control" id="exampleInputFile" required>
            </div>  

            <button type="button" name="closing" class="btn btn-danger pull-left" data-dismiss="modal">
              Batalkan
            </button>

            <button type="submit" class="btn btn-success">
              Upload
            </button>
          </form>
        </div>
        
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- / Modal Upload -->