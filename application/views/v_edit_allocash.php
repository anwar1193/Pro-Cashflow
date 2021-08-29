hallo<?php  

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
        Edit Data Allocated Cash
        <small><?php echo $nama; ?></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <!-- Box Projection -->
        <div class="col-sm-8">
          
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Update Allocated Cash</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>

            <div class="box-body">
              
             <form method="post" action="<?php echo base_url().'input_allocated_cash/update' ?>">

                <!-- Input ID Untuk Identitas Update -->
                <input type="text" name="id" value="<?php echo $row['id']; ?>" hidden>

               <div class="form-group">
                 <label>Tanggal</label>
                 <input type="text" name="tanggal" class="form-control" value="<?php echo $row['tanggal'] ?>"></input>
               </div>

                <div class="form-group">
                  <label>Allocated Cash</label>
                  <input type="text" name="allocated_cash" class="form-control" value="<?php echo $row['allocated_cash'] ?>"></input>
                </div>

                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Update Data</button>
                <a href="<?php echo base_url().'input_allocated_cash/tampil_edit' ?>" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Batal</a>

             </form>

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