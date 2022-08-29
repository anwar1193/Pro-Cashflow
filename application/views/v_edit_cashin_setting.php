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
      <h1>
        Pengaturan Item Cash-In
        <small>Update Data Cash-In </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Update Cash-In</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
      <!-- Tampilan Form Tambah Data -->
      <div class="box box-widget">
        <div class="box-body">
          <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
              <?php echo $this->session->flashdata('pesan'); ?>

              <h3>Update Data Cash-In</h3>
              <hr style="border-width: 4px;">
              <form method="post" action="<?php echo base_url().'pengaturan_cashin/update_cashin' ?>">

                <input type="text" name="id_jb" value="<?php echo $data['id_jb'] ?>" hidden>

                <div class="form-group">
                  <label for="kode_jb">Kode Cash-In :</label>
                  <input type="text" name="kode_jb" value="<?php echo $data['kode_jb'] ?>" class="form-control" required="" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="nama_jb">Cash-In :</label>
                  <input type="text" name="nama_jb" value="<?php echo $data['nama_jb'] ?>" id="nama_jb" class="form-control" required autocomplete="off">
                </div>

                <br>

                <a class="btn btn-danger btn-sm" href="<?php echo base_url().'pengaturan_cashin' ?>">
                  <i class="fa fa-backward"></i> Kembali
                </a>
                <button class="btn btn-success btn-sm" type="submit"><i class="fa fa-save"></i> Update Data</button>
                
              </form>

            </div>
          </div>
        </div>
      </div>
      <!-- / Tampilan Form Tambah Data -->
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->