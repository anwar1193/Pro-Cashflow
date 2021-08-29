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
        <small>Update Data User </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Update User</li>
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
              <form method="post" action="<?php echo base_url().'menejemen_user/update' ?>">

                <input type="text" name="id" value="<?php echo $data_user['id'] ?>" hidden>

                <div class="form-group">
                  <label for="nama">Nama Lengkap :</label>
                  <input type="text" name="nama" id="nama" class="form-control" required="" autocomplete="off" value="<?php echo $data_user['nama'] ?>">
                </div>

                <div class="form-group">
                  <label for="username">Username :</label>
                  <input type="text" name="username" id="username" class="form-control" required autocomplete="off" value="<?php echo $data_user['username'] ?>">
                </div>

                <div class="form-group">
                  <label for="level">Level :</label>
                  <select class="form-control" name="level">
                    <option value="<?php echo $data_level['id_level'] ?>"><?php echo $data_level['level'] ?></option>
                    
                    <?php  
                      $ambil_level = $this->db->query("SELECT * FROM tbl_level")->result_array();
                      foreach($ambil_level as $row_level){
                    ?>
                      <option value="<?php echo $row_level['id_level'] ?>"><?php echo $row_level['level'] ?></option>
                    <?php } ?>

                  </select>
                </div>

                <br>

                <a class="btn btn-danger btn-sm" href="<?php echo base_url().'menejemen_user' ?>">
                  <i class="fa fa-backward"></i> Kembali
                </a>

                <a class="btn btn-warning btn-sm" href="<?php echo base_url().'menejemen_user/reset_password/'.$data_user['id'] ?>">
                  <i class="fa fa-refresh"></i> Reset Password
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