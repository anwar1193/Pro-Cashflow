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
        Data Menu
        <small>Update Data Menu </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Update Menu</li>
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

              <h3>Update Data Menu</h3>
              <hr style="border-width: 4px;">
              <form method="post" action="<?php echo base_url().'data_menu/update' ?>">

                <input type="text" name="id_menu" value="<?php echo $data_menu['id_menu'] ?>" hidden>

                <div class="form-group">
                  <label for="menu">Menu :</label>
                  <input type="text" name="menu" id="menu" class="form-control" required="" autocomplete="off" value="<?php echo $data_menu['menu'] ?>">
                </div>

                <div class="form-group">
                  <label for="url">URL Menu :</label>
                  <input type="text" name="url" id="url" class="form-control" required autocomplete="off" value="<?php echo $data_menu['url'] ?>">
                </div>

                <div class="form-group">
                  <label for="icon">Icon :</label>
                  <input type="text" name="icon" id="icon" class="form-control" required="" autocomplete="off" value="<?php echo $data_menu['icon'] ?>">
                </div>

                <br>

                <a class="btn btn-danger btn-sm" href="<?php echo base_url().'data_menu' ?>">
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