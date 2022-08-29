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
        Pengaturan Cash-In Sub-Item
        <small>Input Data Cash-In Sub-Item</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Input Cash-In Sub-Item</li>
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

              <h3>Input Data Cash-In Sub-Item</h3>
              <hr style="border-width: 4px;">
              <form method="post" action="<?php echo base_url().'pengaturan_cashin/simpan_cashin_sub' ?>">

                <div class="form-group">
                  <label for="kode_jb">Kode Cash-In :</label>
                  <select name="kode_jb" class="form-control" required="">
                    <option value="">- Pilih -</option>
                    <?php foreach($data_cashin as $row){ ?>
                        <option value="<?php echo $row['kode_jb'] ?>">
                            <?php echo $row['kode_jb'].' - '.$row['nama_jb'] ?>
                        </option>
                    <?php } ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="kode_status">Kode Sub Cash-In :</label>
                  <input type="text" name="kode_status" id="kode_status" class="form-control" required autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="status">Sub Cash-In :</label>
                  <input type="text" name="status" id="status" class="form-control" required autocomplete="off">
                </div>

                <br>

                <a class="btn btn-danger btn-sm" href="<?php echo base_url().'pengaturan_cashin' ?>">
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