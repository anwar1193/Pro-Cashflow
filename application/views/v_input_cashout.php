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
        Input Data Cash-Out Proyeksi
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <!-- Box Projection -->
        <div class="col-sm-10">
          
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Proyeksi Cash-Out</h3>

              <span style="margin-left: 38%">
                <a href="<?php echo base_url().'upload_csv/upload_cashout_proyeksi.php' ?>" type="button" class="btn btn-info btn-xs">
                  <i class="fa fa-upload"></i> Upload Proyeksi
                </a>
              </span>

              <span>
                <a href="<?php echo base_url().'input_cashout/view_inputan' ?>" type="button" class="btn btn-warning btn-xs"><i class="fa fa-eye"></i> Lihat Yang Sudah Diinput</a>
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
                  Pencairan Dealer dan Insentif (A+B)
                </div>


                <!-- FORM (A)-->
                <form method="post" action="<?php echo base_url().'input_cashout/tambah' ?>">
                <div class="row">

                <!-- inputan hidden -->
                <input type="text" name="kode_status" value="A" hidden>
                <input type="text" name="status" value="Pencairan Dealer" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Pencairan Dealer (A) *</label>
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

                    <button class="btn btn-success btn-sm" type="submit" name="simpan_A" style="margin-top: 25px;">
                      <i class="fa fa-save"></i> Simpan
                    </button>

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashout_proj.php?kode=A&status=Pencairan_Dealer" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (A)-->


                <!-- FORM (A)-->
                <form method="post" action="<?php echo base_url().'input_cashout/tambah' ?>">
                <div class="row">

                <!-- inputan hidden -->
                <input type="text" name="kode_status" value="B" hidden>
                <input type="text" name="status" value="Pembayaran Refund & Insentif Dealer" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Pembayaran Refund & Insentif Dealer (B) *</label>
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

                    <button class="btn btn-success btn-sm" type="submit" name="simpan_B" style="margin-top: 25px;">
                      <i class="fa fa-save"></i> Simpan
                    </button>

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashout_proj.php?kode=B&status=Pembayaran_Refund_insentif_Delaer" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (B)-->

                
                <div style="background-color: #fcf1b1; padding: 5px; border-radius: 5px; margin-bottom: 8px; font-weight: bold">
                  Angsuran Bank (C+D)
                </div>


                <!-- FORM (C)-->
                <form method="post" action="<?php echo base_url().'input_cashout/tambah' ?>">
                <div class="row">

                <!-- inputan hidden -->
                <input type="text" name="kode_status" value="C" hidden>
                <input type="text" name="status" value="Angsuran Bank (Non Mirroring)" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Angsuran Bank (Non Mirroring) (C) *</label>
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

                    <button class="btn btn-success btn-sm" type="submit" name="simpan_C" style="margin-top: 25px;">
                      <i class="fa fa-save"></i> Simpan
                    </button>

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashout_proj.php?kode=C&status=Angsuran_Bank_Non_Mirroring" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (C)-->


                <!-- FORM (D)-->
                <form method="post" action="<?php echo base_url().'input_cashout/tambah' ?>">
                <div class="row">

                <!-- inputan hidden -->
                <input type="text" name="kode_status" value="D" hidden>
                <input type="text" name="status" value="Angsuran Bank (Mirroring)" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Angsuran Bank (Mirroring) (D) *</label>
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

                    <button class="btn btn-success btn-sm" type="submit" name="simpan_D" style="margin-top: 25px;">
                      <i class="fa fa-save"></i> Simpan
                    </button>

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashout_proj.php?kode=D&status=Angsuran_Bank_Mirroring" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (D)-->


                <div style="background-color: #fcf1b1; padding: 5px; border-radius: 5px; margin-bottom: 8px; font-weight: bold">
                  Pelunasan Bank (E+F+G+H)
                </div>


                <!-- FORM (E)-->
                <form method="post" action="<?php echo base_url().'input_cashout/tambah' ?>">
                <div class="row">

                <!-- inputan hidden -->
                <input type="text" name="kode_status" value="E" hidden>
                <input type="text" name="status" value="Pelunasan Closed Regular & ET" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Pelunasan Closed Reguler & ET (E) *</label>
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

                    <button class="btn btn-success btn-sm" type="submit" name="simpan_E" style="margin-top: 25px;">
                      <i class="fa fa-save"></i> Simpan
                    </button>

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashout_proj.php?kode=E&status=Pelunasan_Closed_Reguler_ET" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (E)-->


                <!-- FORM (F)-->
                <form method="post" action="<?php echo base_url().'input_cashout/tambah' ?>">
                <div class="row">

                <!-- inputan hidden -->
                <input type="text" name="kode_status" value="F" hidden>
                <input type="text" name="status" value="Pelunasan Buy Back 90 Up" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Pelunasan Buy Back 90 Up (F) *</label>
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

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashout_proj.php?kode=F&status=Pelunasan_Buy_Back_90Up" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (F)-->


                <!-- FORM (G)-->
                <form method="post" action="<?php echo base_url().'input_cashout/tambah' ?>">
                <div class="row">

                <!-- inputan hidden -->
                <input type="text" name="kode_status" value="G" hidden>
                <input type="text" name="status" value="Pelunasan AYDA" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Pelunasan AYDA (G) *</label>
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

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashout_proj.php?kode=G&status=Pelunasan_AYDA" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (G)-->


                <!-- FORM (H)-->
                <form method="post" action="<?php echo base_url().'input_cashout/tambah' ?>">
                <div class="row">

                <!-- inputan hidden -->
                <input type="text" name="kode_status" value="H" hidden>
                <input type="text" name="status" value="Pelunasan WO" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Pelunasan WO (H) *</label>
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

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashout_proj.php?kode=H&status=Pelunasan_WO" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (H)-->


                <div style="background-color: #fcf1b1; padding: 5px; border-radius: 5px; margin-bottom: 8px; font-weight: bold">
                  Pembayaran Hutang Bank Lain-lain (I+J+K+L+M+N)
                </div>


                <!-- FORM (I)-->
                <form method="post" action="<?php echo base_url().'input_cashout/tambah' ?>">
                <div class="row">

                <!-- inputan hidden -->
                <input type="text" name="kode_status" value="I" hidden>
                <input type="text" name="status" value="Menara Sentraya" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Menara Sentraya (I) *</label>
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

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashout_proj.php?kode=I&status=Menara_Sentraya" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (I)-->


                <!-- FORM (K)-->
                <form method="post" action="<?php echo base_url().'input_cashout/tambah' ?>">
                <div class="row">

                <!-- inputan hidden -->
                <input type="text" name="kode_status" value="K" hidden>
                <input type="text" name="status" value="Bank EXIM" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Bank EXIM (K) *</label>
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

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashout_proj.php?kode=K&status=Bank_EXIM" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (K)-->


                <!-- FORM (L)-->
                <form method="post" action="<?php echo base_url().'input_cashout/tambah' ?>">
                <div class="row">

                <!-- inputan hidden -->
                <input type="text" name="kode_status" value="L" hidden>
                <input type="text" name="status" value="Bayar PRK Mega dan BCA" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Bayar PRK Mega dan BCA (L) *</label>
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

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashout_proj.php?kode=L&status=Bayar_PRK_Mega_dan_BCA" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (L)-->


                <!-- FORM (M)-->
                <form method="post" action="<?php echo base_url().'input_cashout/tambah' ?>">
                <div class="row">

                <!-- inputan hidden -->
                <input type="text" name="kode_status" value="M" hidden>
                <input type="text" name="status" value="Buy Back 90 Up, Memo Percepatan Cabang" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Buy Back 90 Up, Memo Percepatan Cabang (M) *</label>
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

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashout_proj.php?kode=M&status=Biaya_THR_Bonus" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (M)-->


                <!-- FORM (N)-->
                <form method="post" action="<?php echo base_url().'input_cashout/tambah' ?>">
                <div class="row">

                <!-- inputan hidden -->
                <input type="text" name="kode_status" value="N" hidden>
                <input type="text" name="status" value="Bayar CSUL" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Bayar CSUL (N) *</label>
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

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashout_proj.php?kode=N&status=Bayar_CSUL" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (N)-->


                <!-- FORM (L3)-->
                <form method="post" action="<?php echo base_url().'input_cashout/tambah' ?>">
                <div class="row">

                <!-- inputan hidden -->
                <input type="text" name="kode_status" value="L3" hidden>
                <input type="text" name="status" value="Victoria Syariah" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Victoria Syariah (L3) *</label>
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

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashout_proj.php?kode=N&status=Bayar_CSUL" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (L3)-->



                <div style="background-color: #fcf1b1; padding: 5px; border-radius: 5px; margin-bottom: 8px; font-weight: bold">
                  Pengisian Kas (O+P)
                </div>

                
                <!-- FORM (P)-->
                <form method="post" action="<?php echo base_url().'input_cashout/tambah' ?>">
                <div class="row">

                <!-- inputan hidden -->
                <input type="text" name="kode_status" value="P" hidden>
                <input type="text" name="status" value="Isi Biaya Bank" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Isi Biaya Bank (P) *</label>
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

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashout_proj.php?kode=P&status=Biaya_Maintenance_Dleas_Jari" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (P)-->


                <div style="background-color: #fcf1b1; padding: 5px; border-radius: 5px; margin-bottom: 8px; font-weight: bold">
                  Uang Muka (K3+Q+R+S+T+U+V+W+X+Y+Z)
                </div>

              
                <!-- FORM (W)-->
                <form method="post" action="<?php echo base_url().'input_cashout/tambah' ?>">
                <div class="row">

                <!-- inputan hidden -->
                <input type="text" name="kode_status" value="W" hidden>
                <input type="text" name="status" value="Perbaikan Kendaraan" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Perbaikan Kendaraan (W) *</label>
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

                    <button class="btn btn-success btn-sm" type="submit" name="simpan_W" style="margin-top: 25px;">
                      <i class="fa fa-save"></i> Simpan
                    </button>

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashout_proj.php?kode=W&status=Perbaikan_Kendaraan" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (W)-->


                <!-- FORM (Z)-->
                <form method="post" action="<?php echo base_url().'input_cashout/tambah' ?>">
                <div class="row">

                <!-- inputan hidden -->
                <input type="text" name="kode_status" value="Z" hidden>
                <input type="text" name="status" value="Penggantian Klaim Asuransi Ke Nasabah" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Penggantian Klaim Asuransi Ke Nasabah (Z) *</label>
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

                    <button class="btn btn-success btn-sm" type="submit" name="simpan_Z" style="margin-top: 25px;">
                      <i class="fa fa-save"></i> Simpan
                    </button>

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashout_proj.php?kode=Z&status=Penggantian_Klaim_Asuransi_Ke_Nasabah" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (Z)-->



                <div style="background-color: #fcf1b1; padding: 5px; border-radius: 5px; margin-bottom: 8px; font-weight: bold">
                  Biaya Pajak (F2+G2)
                </div>


                <!-- FORM (G2)-->
                <form method="post" action="<?php echo base_url().'input_cashout/tambah' ?>">
                <div class="row">

                <!-- inputan hidden -->
                <input type="text" name="kode_status" value="G2" hidden>
                <input type="text" name="status" value="Biaya Pajak" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Biaya Pajak (G2) *</label>
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

                    <button class="btn btn-success btn-sm" type="submit" name="simpan_G2" style="margin-top: 25px;">
                      <i class="fa fa-save"></i> Simpan
                    </button>

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashout_proj.php?kode=G2&status=Biaya_Pajak" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (G2)-->


                <div style="background-color: #fcf1b1; padding: 5px; border-radius: 5px; margin-bottom: 8px; font-weight: bold">
                  Biaya Gaji, Kesejahteraan Karyawan dan Diklat (H2+J2+K2+C4)
                </div>


                <!-- FORM (H2)-->
                <form method="post" action="<?php echo base_url().'input_cashout/tambah' ?>">
                <div class="row">

                <!-- inputan hidden -->
                <input type="text" name="kode_status" value="H2" hidden>
                <input type="text" name="status" value="Biaya Gaji, Cadangan Gaji" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Biaya Gaji, Cadangan Gaji (H2) *</label>
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

                    <button class="btn btn-success btn-sm" type="submit" name="simpan_H2" style="margin-top: 25px;">
                      <i class="fa fa-save"></i> Simpan
                    </button>

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashout_proj.php?kode=H2&status=Biaya_Gaji_Cadangan_Gaji" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (H2)-->


                <!-- FORM (J2)-->
                <form method="post" action="<?php echo base_url().'input_cashout/tambah' ?>">
                <div class="row">

                <!-- inputan hidden -->
                <input type="text" name="kode_status" value="J2" hidden>
                <input type="text" name="status" value="Biaya THR, Bonus" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Biaya THR, Bonus (J2) *</label>
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

                    <button class="btn btn-success btn-sm" type="submit" name="simpan_J2" style="margin-top: 25px;">
                      <i class="fa fa-save"></i> Simpan
                    </button>

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashout_proj.php?kode=J2&status=Biaya_THR_Bonus" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (J2)-->


                <!-- FORM (K2)-->
                <form method="post" action="<?php echo base_url().'input_cashout/tambah' ?>">
                <div class="row">

                <!-- inputan hidden -->
                <input type="text" name="kode_status" value="K2" hidden>
                <input type="text" name="status" value="Biaya Jamsostek dan BPJS" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Biaya Jamsostek dan BPJS (K2) *</label>
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

                    <button class="btn btn-success btn-sm" type="submit" name="simpan_K2" style="margin-top: 25px;">
                      <i class="fa fa-save"></i> Simpan
                    </button>

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashout_proj.php?kode=K2&status=Biaya_Jamsostek_dan_BPJS" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (K2)-->



                <!-- FORM (C4)-->
                <form method="post" action="<?php echo base_url().'input_cashout/tambah' ?>">
                <div class="row">

                <!-- inputan hidden -->
                <input type="text" name="kode_status" value="C4" hidden>
                <input type="text" name="status" value="Biaya Pesangon" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Biaya Pesangon (C4) *</label>
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

                    <button class="btn btn-success btn-sm" type="submit" name="simpan_K2" style="margin-top: 25px;">
                      <i class="fa fa-save"></i> Simpan
                    </button>

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashout_proj.php?kode=K2&status=Biaya_Jamsostek_dan_BPJS" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (C4)-->
                
                

                <div style="background-color: #fcf1b1; padding: 5px; border-radius: 5px; margin-bottom: 8px; font-weight: bold">
                  Biaya Lainnya (B3+C3+D3+E3)
                </div>


                <!-- FORM (B3)-->
                <form method="post" action="<?php echo base_url().'input_cashout/tambah' ?>">
                <div class="row">

                <!-- inputan hidden -->
                <input type="text" name="kode_status" value="B3" hidden>
                <input type="text" name="status" value="Biaya Asuransi Hagati, Sinar Mas" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Biaya Asuransi Hagati, Sinar Mas (B3) *</label>
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

                    <button class="btn btn-success btn-sm" type="submit" name="simpan_B3" style="margin-top: 25px;">
                      <i class="fa fa-save"></i> Simpan
                    </button>

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashout_proj.php?kode=B3&status=Biaya_Asuransi_Hagati_Sinar_Mas" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (B3)-->


                <!-- FORM (C3)-->
                <form method="post" action="<?php echo base_url().'input_cashout/tambah' ?>">
                <div class="row">

                <!-- inputan hidden -->
                <input type="text" name="kode_status" value="C3" hidden>
                <input type="text" name="status" value="Biaya BMHD Notaris Fiducia" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Biaya BMHD Notaris Fiducia (C3) *</label>
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

                    <button class="btn btn-success btn-sm" type="submit" name="simpan_C3" style="margin-top: 25px;">
                      <i class="fa fa-save"></i> Simpan
                    </button>

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashout_proj.php?kode=C3&status=Biaya_BMHD_Notaris_Fiducia" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (C3)-->



                <div style="background-color: #fcf1b1; padding: 5px; border-radius: 5px; margin-bottom: 8px; font-weight: bold">
                  Bayar Pinjaman Lain-lain (F3+G3)
                </div>


                <!-- FORM (F3)-->
                <form method="post" action="<?php echo base_url().'input_cashout/tambah' ?>">
                <div class="row">

                <!-- inputan hidden -->
                <input type="text" name="kode_status" value="F3" hidden>
                <input type="text" name="status" value="Biaya Pengembalian Titipan Lain-lain" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Biaya Pengembalian Titipan Lain-lain (F3) *</label>
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

                    <button class="btn btn-success btn-sm" type="submit" name="simpan_F3" style="margin-top: 25px;">
                      <i class="fa fa-save"></i> Simpan
                    </button>

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashout_proj.php?kode=F3&status=Biaya_Pengembalian_Titipan_Lain" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (F3)-->




                <!-- FORM (G3)-->
                <form method="post" action="<?php echo base_url().'input_cashout/tambah' ?>">
                <div class="row">

                <!-- inputan hidden -->
                <input type="text" name="kode_status" value="G3" hidden>
                <input type="text" name="status" value="Biaya Pinjaman PRK" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Biaya Pinjaman PRK (G3) *</label>
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

                    <button class="btn btn-success btn-sm" type="submit" name="simpan_G3" style="margin-top: 25px;">
                      <i class="fa fa-save"></i> Simpan
                    </button>

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashout_proj.php?kode=G3&status=Biaya_Pinjaman_PRK" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (G3)-->



                <!-- FORM (H3)-->
                <form method="post" action="<?php echo base_url().'input_cashout/tambah' ?>">
                <div class="row">

                <!-- inputan hidden -->
                <input type="text" name="kode_status" value="H3" hidden>
                <input type="text" name="status" value="Penempatan Deposito" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Penempatan Deposito (H3) *</label>
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

                    <button class="btn btn-success btn-sm" type="submit" name="simpan_H3" style="margin-top: 25px;">
                      <i class="fa fa-save"></i> Simpan
                    </button>

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashout_proj.php?kode=H3&status=Penempatan_Deposito" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (H3)-->


                <!-- FORM (I3)-->
                <form method="post" action="<?php echo base_url().'input_cashout/tambah' ?>">
                <div class="row">

                <!-- inputan hidden -->
                <input type="text" name="kode_status" value="I3" hidden>
                <input type="text" name="status" value="Pengembalian Rekening B2B" hidden>

                  <div class="col-xs-4">
                    <div class="form-group">
                      <label>Pengembalian Rekening B2B (I3) *</label>
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

                    <button class="btn btn-success btn-sm" type="submit" name="simpan_I3" style="margin-top: 25px;">
                      <i class="fa fa-save"></i> Simpan
                    </button>

                    <!-- <a href="http://upload-cashflow.procarfinance.com/cashout_proj.php?kode=I3&status=Pengembalian_Rekening_B2B" class="btn btn-primary btn-sm" style="margin-top: 25px;"><i class="fa fa-upload"></i> Upload</a> -->
                    
                  </div>

                </div>
                </form>
                <!-- Penutup FORM (I3)-->
                

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
          <h4 class="modal-title">Upload Proyeksi Cash-Out</h4>
          <br>
          <span>
            <a href="<?php echo base_url().'upload_excel/proyeksi_cashout.xlsx' ?>" class="btn btn-info btn-xs">
              <i class="fa fa-download"></i> Download Format
            </a>
          </span>

        </div>
        
        <div class="modal-footer">
          <form method="post" action="<?php echo base_url().'upload_excel/upload_proyeksi_cashout.php' ?>" enctype="multipart/form-data">
            
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