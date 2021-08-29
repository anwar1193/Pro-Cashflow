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
        Management User
        <small>Input Data User </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Input User</li>
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

              <h3>Input Data User</h3>
              <hr style="border-width: 4px;">
              <form method="post" action="<?php echo base_url().'menejemen_user/simpan' ?>">

                <div class="form-group">
                  <label for="nama">Nama Lengkap :</label>
                  <input type="text" name="nama" id="nama" class="form-control" required="" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="username">Username :</label>
                  <input type="text" name="username" id="username" class="form-control" required autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="password">Password :</label>
                  <input type="password" name="password" id="password" class="form-control" required>
                </div>

                <div class="form-group">
                  <label for="level">Level :</label>
                  <select class="form-control" name="level" required>
                    <option value="">Pilih Level</option>
                    <?php foreach($data_level as $row_level){ ?>
                      <option value="<?php echo $row_level['id_level'] ?>"><?php echo $row_level['level'] ?></option>
                    <?php } ?>
                  </select>
                </div>

                <br>

                <a class="btn btn-danger btn-sm" href="<?php echo base_url().'menejemen_user' ?>">
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