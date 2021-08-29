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
        Data Sub-Menu
        <small>Input Data Sub-Menu </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Input Sub-Menu</li>
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

              <h3>Input Data Sub-Menu</h3>
              <hr style="border-width: 4px;">
              <form method="post" action="<?php echo base_url().'data_submenu/simpan' ?>">

                <div class="form-group">
                  <label for="id_menu">Menu :</label>
                  <select name="id_menu" class="form-control" required="">
                    <option value="">Pilih Menu</option>
                    <?php foreach($data_menu as $row_menu){ ?>
                        <option value="<?php echo $row_menu['id_menu'] ?>"><?php echo $row_menu['menu'] ?></option>
                    <?php } ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="submenu">Sub-Menu :</label>
                  <input type="text" name="submenu" id="submenu" class="form-control" required autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="url">URL Sub-Menu :</label>
                  <input type="text" name="url" id="url" class="form-control" required="" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="icon">Icon :</label>
                  <input type="text" name="icon" id="icon" class="form-control" required="" autocomplete="off">
                </div>

                <br>

                <a class="btn btn-danger btn-sm" href="<?php echo base_url().'data_submenu' ?>">
                  <i class="fa fa-backward"></i> Kembali
                </a>
                <button class="btn btn-success btn-sm" type="submit"><i class="fa fa-save"></i> Simpan Data</button>
                
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