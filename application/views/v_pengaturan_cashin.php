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
          
          <!-- Cashin Item -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Pengaturan Cash-In Item</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>

            <div class="box-body table-responsive">

              <a href="<?php echo base_url().'pengaturan_cashin/tambah_cashin' ?>" class="btn btn-success btn-sm" style="align-content: right;">
                <i class="fa fa-plus"></i> Tambah Cash-In Item
              </a>

              <br><br>

              <table class="table table-bordered" id="tableDT" style="margin-top: 10px;">
              	<thead>

              		<tr style="background-color:black; color:white; font-weight:bold">
              			<th>NO</th>
              			<th>Kode Cash-In</th>
              			<th>Cash-In</th>
              			<th style="text-align: center;">Action</th>
              		</tr>

              	</thead>


              	<tbody>
              		<?php 
              			$no=1;
              			foreach($data_cashin as $row_cashin){
              		?>

              		<tr>
              			<td><?php echo $no++; ?></td>
              			<td><?php echo $row_cashin['kode_jb']; ?></td>
              			<td><?php echo $row_cashin['nama_jb']; ?></td>
              			<td style="text-align: center;">

                            <a class="btn btn-info btn-xs" href="<?php echo base_url().'pengaturan_cashin/edit_cashin/'.$row_cashin['id_jb'] ?>">
                                <i class="fa fa-edit"></i> Edit
                            </a>

                            <a class="btn btn-danger btn-xs" href="<?php echo base_url().'pengaturan_cashin/hapus_cashin/'.$row_cashin['id_jb'] ?>" onclick="return confirm('Apakah Anda Yakin?')">
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
          <!-- END Cashin Item -->

          <!-- Cashin Sub Item -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Pengaturan Cash-In Sub-Item</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>

            <div class="box-body table-responsive">

              <a href="<?php echo base_url().'pengaturan_cashin/tambah_cashin_sub' ?>" class="btn btn-success btn-sm" style="align-content: right;">
                <i class="fa fa-plus"></i> Tambah Cash-In Sub-Item
              </a>

              <br><br>

              <table class="table table-bordered" id="tableDT2" style="margin-top: 10px;">
              	<thead>

              		<tr style="background-color:black; color:white; font-weight:bold">
              			<th>NO</th>
              			<th>Kode Sub Cash-In</th>
              			<th>Sub Cash-In</th>
              			<th>Kode Cash-In</th>
              			<th style="text-align: center;">Action</th>
              		</tr>

              	</thead>


              	<tbody>
              		<?php 
              			$no=1;
              			foreach($data_cashin_sub as $row_cashin){
              		?>

              		<tr>
              			<td><?php echo $no++; ?></td>
              			<td><?php echo $row_cashin['kode_status']; ?></td>
              			<td><?php echo $row_cashin['status']; ?></td>
              			<td><?php echo $row_cashin['kode_jb'].' - '.$row_cashin['nama_jb']; ?></td>
              			<td style="text-align: center;">

                            <a class="btn btn-info btn-xs" href="<?php echo base_url().'pengaturan_cashin/edit_cashin_sub/'.$row_cashin['id_sb'] ?>">
                                <i class="fa fa-edit"></i> Edit
                            </a>

                            <a class="btn btn-danger btn-xs" href="<?php echo base_url().'pengaturan_cashin/hapus_cashin_sub/'.$row_cashin['id_sb'] ?>" onclick="return confirm('Apakah Anda Yakin?')">
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
          <!-- END Cashin Sub Item -->

        </div>
        <!-- /.Box Projection -->

      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper