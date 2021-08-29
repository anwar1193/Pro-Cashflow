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
        Input Data Bank (Cash-Out) Proyeksi
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
                <a href="<?php echo base_url().'upload_csv/upload_bank_proyeksi.php' ?>" type="button" class="btn btn-info btn-xs">
                  <i class="fa fa-upload"></i> Upload Proyeksi
                </a>
              </span>

              <span>
                <a href="<?php echo base_url().'bank_proyeksi/view_inputan' ?>" type="button" class="btn btn-warning btn-xs"><i class="fa fa-eye"></i> Lihat Yang Sudah Diinput</a>
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
                  Angsuran Bank (C+D)
                </div>

                <!-- FORM (C)-->
                <form method="post" action="<?php echo base_url().'bank_proyeksi/tambah' ?>">
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
            <a href="<?php echo base_url().'upload_excel/proyeksi_bank.xlsx' ?>" class="btn btn-info btn-xs">
              <i class="fa fa-download"></i> Download Format
            </a>
          </span>

        </div>
        
        <div class="modal-footer">
          <form method="post" action="<?php echo base_url().'upload_excel/upload_proyeksi_bank.php' ?>" enctype="multipart/form-data">
            
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