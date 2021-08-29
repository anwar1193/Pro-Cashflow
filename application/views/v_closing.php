<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    <?php echo $this->session->flashdata('pesan_sukses'); ?>

      <h1>
        Generate Saldo Akhir
        <small>All Dept</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <!-- Box Input Saldo Awal Hitung Otomatis -->
        <div class="col-sm-6">
          
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Generate By Tanggal
            </div>

            <div class="box-body">
              <!-- Isi Form -->

                <!-- Form Saldo Awal -->
                <form method="post" action="<?php echo base_url().'closing/hitung_otomatis' ?>">
                
                  <div class="form-group">
                    <label for="tanggal">Masukkan Tanggal Saldo Akhir</label>
                    <input type="date" class="form-control" name="tanggal">
                  </div>

                  <div class="form-group">
                    <label for="ready_cash">Note Finance</label>
                    <textarea name="note" cols="30" rows="10" class="form-control"></textarea>
                  </div>

                  <button class="btn btn-info" type="submit"><i class="fa fa-check"></i> Closing</button>

                </form>
                <!-- Penutup Form Saldo Awal -->

              <!-- / Isi Form -->

            </div>
            <!-- /.box-body -->
            
          </div>

        </div>
        <!-- /.Box Input Saldo Awal Hitung Otomatis -->

      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper