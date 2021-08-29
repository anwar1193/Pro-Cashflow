<?php date_default_timezone_set("Asia/Jakarta"); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    <?php echo $this->session->flashdata('pesan_sukses'); ?>

      <h1>
        Input Saldo Awal
        <small>All Dept <?php echo date('D'); ?></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <!-- Box Input Saldo Awal Manual -->
        <div class="col-sm-8">
          
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Saldo Awal (Input Manual)</h3>

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

                <!-- Form Saldo Awal -->
                <form method="post" action="<?php echo base_url().'input_saldo_awal/tambah' ?>">
                
          				<div class="form-group">
          					<label for="tanggal">Tanggal</label>
          					<input type="date" class="form-control" name="tanggal">
          				</div>	

          				<div class="form-group">
          					<label for="salaw_proj">Saldo Awal (Projection)</label>
          					<input type="number" class="form-control" name="salaw_proj">
          				</div>

          				<div class="form-group">
          					<label for="salaw_real">Saldo Awal (Realisasi)</label>
          					<input type="number" class="form-control" name="salaw_real">
          				</div>

          				<button class="btn btn-success btn-sm"><i class="fa fa-save"></i> Simpan</button>
                  <a href="<?php echo base_url().'input_saldo_awal/tampil_edit' ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Edit Saldo Awal</a>

                </form>
                <!-- Penutup Form Saldo Awal -->

              <!-- / Isi Form -->

            </div>
            <!-- /.box-body -->
            
          </div>

        </div>
        <!-- /.Box Input Saldo Awal Manual -->



        <!-- Box Input Saldo Awal Hitung Otomatis -->
        <!-- <div class="col-sm-6">
          
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Saldo Awal (Hitung Otomatis)
            </div>

            <div class="box-body"> -->
              <!-- Isi Form -->

                <!-- Form Saldo Awal -->
                <!-- <form method="post" action="<?php echo base_url().'input_saldo_awal/hitung_otomatis' ?>">
                
                  <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal">
                  </div>

                  <button class="btn btn-success btn-sm" type="submit"><i class="fa fa-save"></i> Simpan</button>

                </form> -->
                <!-- Penutup Form Saldo Awal -->

              <!-- / Isi Form -->

            <!-- </div> -->
            <!-- /.box-body -->
            
          <!-- </div> -->

        </div>
        <!-- /.Box Input Saldo Awal Hitung Otomatis -->

      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->