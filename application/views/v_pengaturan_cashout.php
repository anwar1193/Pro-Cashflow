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
          
          <!-- Cashout Item -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Pengaturan Cash-Out Item</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>

            <div class="box-body table-responsive">

              <a href="<?php echo base_url().'pengaturan_cashout/tambah_cashout' ?>" class="btn btn-success btn-sm" style="align-content: right;">
                <i class="fa fa-plus"></i> Tambah Cash-Out Item
              </a>

              <br><br>

              <table class="table table-bordered" id="tableDT" style="margin-top: 10px;">
              	<thead>

              		<tr style="background-color:black; color:white; font-weight:bold">
              			<th>NO</th>
              			<th>Kode Cash-Out</th>
              			<th>Cash-Out</th>
                    <th class="text-center">Ubah Posisi</th>
              			<th style="text-align: center;">Action</th>
              		</tr>

              	</thead>


              	<tbody>
              		<?php 
              			$no=1;
              			foreach($data_cashout as $row_cashout){

                      // Posisi Terbawah
                      $r_posisi_terbawah = $this->db->query("SELECT MAX(posisi) AS posisi FROM tbl_jb_cashout")->row_array();
                      $posisi_terbawah = $r_posisi_terbawah['posisi'];

              		?>

              		<tr>
              			<td><?php echo $no++; ?></td>
              			<td><?php echo $row_cashout['kode_jb']; ?></td>
              			<td><?php echo $row_cashout['nama_jb']; ?></td>

                    <td class="text-center">

                      <!-- Jika Posisi nya teratas, disable tombol naik posisi -->
                      <?php if($row_cashout['posisi'] == 1){ ?>
                        <a href="#" class="btn btn-default disabled btn-xs">
                          <i class="fa fa-arrow-circle-up"></i>
                        </a>
                      <?php }else{ ?>
                        <a href="<?php echo base_url().'pengaturan_cashout/naik_posisi/'.$row_cashout['id_jb'] ?>" class="btn btn-success btn-xs">
                          <i class="fa fa-arrow-circle-up"></i>
                        </a>
                      <?php } ?>

                      <!-- Jika Posisi nya terbawah, disable tombol turun posisi -->
                      <?php if($row_cashout['posisi'] == $posisi_terbawah){ ?>
                        <a href="#" class="btn btn-default disabled btn-xs">
                          <i class="fa fa-arrow-circle-down"></i>
                        </a>
                      <?php }else{ ?>
                        <a href="<?php echo base_url().'pengaturan_cashout/turun_posisi/'.$row_cashout['id_jb'] ?>" class="btn btn-danger btn-xs">
                          <i class="fa fa-arrow-circle-down"></i>
                        </a>
                      <?php } ?>
                      
                    </td>

              			<td style="text-align: center;">

                            <a class="btn btn-info btn-xs" href="<?php echo base_url().'pengaturan_cashout/edit_cashout/'.$row_cashout['id_jb'] ?>">
                                <i class="fa fa-edit"></i> Edit
                            </a>

                            <a class="btn btn-danger btn-xs" href="<?php echo base_url().'pengaturan_cashout/hapus_cashout/'.$row_cashout['id_jb'] ?>" onclick="return confirm('Apakah Anda Yakin?')">
                                <i class="fa fa-trash"></i> Hapus
                            </a>

                        </td>
              		</tr>
                  <?php 
                    }
                  ?>
              		
              	</tbody>
              </table>

              <!-- Penutup Tampilan Hasil Inputan Cashout Projection -->

            </div>
            <!-- /.box-body -->
            
          </div>
          <!-- END Cashout Item -->

          <!-- Cashout Sub Item -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Pengaturan Cash-Out Sub-Item</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>

            <div class="box-body table-responsive">

              <a href="<?php echo base_url().'pengaturan_cashout/tambah_cashout_sub' ?>" class="btn btn-success btn-sm" style="align-content: right;">
                <i class="fa fa-plus"></i> Tambah Cash-Out Sub-Item
              </a>

              <br><br>

              <table class="table table-bordered" id="tableDT2" style="margin-top: 10px;">
              	<thead>

              		<tr style="background-color:black; color:white; font-weight:bold">
              			<th>NO</th>
              			<th>Kode Sub Cash-Out</th>
              			<th>Sub Cash-Out</th>
              			<th>Kode Cash-Out</th>
              			<th>Status Aktif</th>
              			<th style="text-align: center;">Action</th>
              		</tr>

              	</thead>


              	<tbody>
              		<?php 
              			$no=1;
              			foreach($data_cashout_sub as $row_cashout){
              		?>

              		<tr style="vertical-align: middle">
              			<td style="vertical-align:middle"><?php echo $no++; ?></td>
              			<td style="vertical-align:middle"><?php echo $row_cashout['kode_status']; ?></td>
              			<td style="vertical-align:middle"><?php echo $row_cashout['status']; ?></td>
              			<td style="vertical-align:middle"><?php echo $row_cashout['kode_jb'].' - '.$row_cashout['nama_jb']; ?></td>
                    <td style="vertical-align:middle">
                      <?php  
                          if($row_cashout['status_aktif'] == 1){ 
                      ?>
                        <i class="fa fa-check-circle text-success"></i> Aktif <br>
                        <a href="<?php echo base_url().'pengaturan_cashout/nonaktifkan_cashout_sub/'.$row_cashout['id_sb'] ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin?')">
                            <i class="fa fa-times"></i> Nonaktifkan
                        </a>
                      <?php }else{ ?>
                        <i class="fa fa-times text-danger"></i> Non-Aktif <br>
                        <a href="<?php echo base_url().'pengaturan_cashout/aktifkan_cashout_sub/'.$row_cashout['id_sb'] ?>" class="btn btn-success btn-xs" onclick="return confirm('Apakah anda yakin?')">
                            <i class="fa fa-check"></i> Aktifkan
                        </a>
                      <?php } ?>  
                    </td>
              			<td style="text-align: center; vertical-align:middle">

                            <a class="btn btn-info btn-xs" href="<?php echo base_url().'pengaturan_cashout/edit_cashout_sub/'.$row_cashout['id_sb'] ?>">
                                <i class="fa fa-edit"></i> Edit
                            </a>

                            <a class="btn btn-danger btn-xs" href="<?php echo base_url().'pengaturan_cashout/hapus_cashout_sub/'.$row_cashout['id_sb'] ?>" onclick="return confirm('Apakah Anda Yakin?')">
                                <i class="fa fa-trash"></i> Hapus
                            </a>

                        </td>
              		</tr>
                  <?php 
                    }
                  ?>
              		
              	</tbody>
              </table>

              <!-- Penutup Tampilan Hasil Inputan Cashout Projection -->

            </div>
            <!-- /.box-body -->
            
          </div>
          <!-- END Cashout Sub Item -->

        </div>
        <!-- /.Box Projection -->

      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper