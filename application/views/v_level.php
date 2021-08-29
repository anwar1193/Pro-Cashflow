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

    <?php echo $this->session->flashdata('pesan_sukses'); ?>

    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <!-- Box Projection -->
        <div class="col-sm-12">
          
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Level Akses</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>

            <div class="box-body table-responsive">

              <a href="" class="btn btn-success btn-sm" style="align-content: right;" data-toggle="modal" data-target="#modal-tambah_level">
                <i class="fa fa-plus"></i> Tambah Level
              </a>

              <br><br>

              <table class="table table-bordered table-striped" id="tableDT" style="margin-top: 10px;">
              	<thead>

              		<tr style="background-color: orange">
              			<th>NO</th>
              			<th>Level</th>
              			<th>Hak Akses (Menu)</th>
              			<th style="text-align: center;">Action</th>
              		</tr>

              	</thead>


              	<tbody>
              		<?php 
              			$no=1;
              			foreach($data_level as $row_level){
              		?>

              		<tr>
              			<td><?php echo $no++; ?></td>
              			<td style="font-size:20px;"><?php echo $row_level['level']; ?></td>
              			<td>
                            <ol>
                                <?php  
                                    $id_level = $row_level['id_level'];
                                    $data_akses = $this->db->query("SELECT * FROM tbl_menu INNER JOIN tbl_relasi_menu USING(id_menu) WHERE id_level=$id_level")->result_array();
                                    foreach($data_akses as $row_akses){
                                ?>
                                    <li>
                                        <i class="<?php echo $row_akses['icon'] ?>"></i>
                                        <?php echo $row_akses['menu'] ?>

                                        <!-- Tombol Hapus menu -->
                                        <a href="<?php echo base_url().'data_level/hapus_relasi/'.$row_akses['id_relasi'] ?>" class="btn btn-danger btn-xs btn-circle" onclick="return confirm('Apakah Anda Yakin?')">
                                            <i class="fa fa-times"></i>
                                        </a>
                                        <!-- Penutup Tombol Hapus menu -->

                                    </li>
                                <?php } ?>
                            </ol>

                            <!-- Tombol Tambah Menu -->
                            <!-- <a href="" class="btn btn-facebook btn-xs" style="margin-left:15px" data-toggle="modal" data-target="#modal-relasi">
                                <i class="fa fa-plus"></i> Add Menu
                            </a> -->

                            <button class="btn btn-facebook btn-xs" data-toggle="modal" data-target="#modal-relasi" style="margin-left:15px"
                            data-id_level = "<?php echo $row_level['id_level'] ?>"
                            data-level = "<?php echo $row_level['level'] ?>"
                            id="add_menu">
                                <i class="fa fa-plus btn-rounded"></i> Add Menu
                            </button>
                            <!-- Penutup Tombol Tambah Menu -->
                        </td>
              			<td style="text-align: center;">

                      <a class="btn btn-info btn-sm" href="" data-toggle="modal" data-target="#modal-edit_level" id="edit_level"
                            data-id_level = "<?php echo $row_level['id_level'] ?>"
                            data-level = "<?php echo $row_level['level'] ?>"
                      >
                        <i class="fa fa-edit"></i> Edit
                      </a>

                      <a class="btn btn-danger btn-sm" href="<?php echo base_url().'data_level/hapus/'.$row_level['id_level'] ?>" onclick="return confirm('Apakah Anda Yakin?')">
                        <i class="fa fa-trash"></i> Hapus
                      </a>

                    </td>
              		</tr>
                  <?php 
                    }
                  ?>
              		
              	</tbody>
              </table>

              <!-- Penutup Tampilan Hasil Inputan Cashin Projection -->

            </div>
            <!-- /.box-body -->
            
          </div>

        </div>
        <!-- /.Box Projection -->

      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Modal Tambah Relasi Menu -->
  <div class="modal fade" id="modal-relasi">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Tambah Menu</h4>
        </div>
        
        <div class="modal-footer">
          <form method="post" action="<?php echo base_url().'data_level/simpan_relasi' ?>">

            <input id="id_level" type="text" name="id_level" hidden>


            <div class="form-group">
              <label for="level" style="float:left">Level :</label>
              <input class="form-control" id="level" type="text" name="level" readonly>
            </div>

            <div class="form-group">
              <label for="level" style="float:left">Menu :</label>
              <select name="id_menu" class="form-control" required>
                    <option value="">Pilih Menu</option>
                    <?php  
                        foreach($data_menu as $row_menu){
                    ?>
                        <option value="<?php echo $row_menu['id_menu'] ?>">
                            <?php echo $row_menu['menu'] ?>
                        </option>
                    <?php } ?>
              </select>
            </div>

            <button type="button" name="closing" class="btn btn-danger pull-left" data-dismiss="modal">
              Batalkan
            </button>

            <button type="submit" class="btn btn-success">
              Tambahkan Menu
            </button>
          </form>
        </div>
        
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- / Modal Tambah Relasi Menu -->


  <!-- Modal Tambah Level -->
  <div class="modal fade" id="modal-tambah_level">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Tambah Level</h4>
        </div>
        
        <div class="modal-footer">
          <form method="post" action="<?php echo base_url().'data_level/simpan' ?>">

            <div class="form-group">
              <label for="level" style="float:left">Level :</label>
              <input class="form-control" type="text" name="level" required placeholder="Masukan Level Baru" autocomplete="off">
            </div>

            <button type="button" name="closing" class="btn btn-danger pull-left" data-dismiss="modal">
              Batalkan
            </button>

            <button type="submit" class="btn btn-success">
              Simpan Level
            </button>
          </form>
        </div>
        
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- / Modal Tambah Level -->


  <!-- Modal Edit Level -->
  <div class="modal fade" id="modal-edit_level">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Edit Level</h4>
        </div>
        
        <div class="modal-footer">
          <form method="post" action="<?php echo base_url().'data_level/update' ?>">
            
            <input type="text" name="id_level" id="id_level_edit" hidden>

            <div class="form-group">
              <label for="level" style="float:left">Level :</label>
              <input class="form-control" type="text" name="level" required autocomplete="off" id="level_edit">
            </div>

            <button type="button" name="closing" class="btn btn-danger pull-left" data-dismiss="modal">
              Batalkan
            </button>

            <button type="submit" class="btn btn-success">
              Update Level
            </button>
          </form>
        </div>
        
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- / Modal Edit Level -->


  <!-- Script Jquery Edit -->
  <script>
    $(document).ready(function(){
      $(document).on('click','#add_menu', function(){

        var id_level = $(this).data('id_level');
        var level = $(this).data('level');

        $('#id_level').val(id_level);
        $('#level').val(level);
      });
    });
  </script>

<script>
    $(document).ready(function(){
      $(document).on('click','#edit_level', function(){

        var id_level = $(this).data('id_level');
        var level = $(this).data('level');

        $('#id_level_edit').val(id_level);
        $('#level_edit').val(level);
      });
    });
  </script>
  <!-- / Script Jquery Edit -->