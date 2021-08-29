Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    <?php echo $this->session->flashdata('pesan_sukses'); ?>

      <h1>
        Input Ready Cash
        <small>All Dept</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <!-- Box Projection -->
        <div class="col-sm-8">
          
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Ready Cash</h3>

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

                <!-- Form Allocated Cash -->
                <form method="post" action="<?php echo base_url().'input_ready_cash/tambah' ?>">
                
          				<div class="form-group">
          					<label for="tanggal">Tanggal</label>
          					<input type="date" class="form-control" name="tanggal">
          				</div>	

          				<div class="form-group">
          					<label for="ready_cash">Ready Cash</label>
          					<input type="number" class="form-control" name="ready_cash">
          				</div>

          				<button class="btn btn-success btn-sm"><i class="fa fa-save"></i> Simpan</button>
                  <a href="<?php echo base_url().'input_ready_cash/tampil_edit' ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Edit Ready Cash</a>

                </form>
                <!-- Penutup Form Allocated Cash -->

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
  <!-- /.content-wrapper