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

      <h1>
        View Hasil Input Proyeksi Bank (Cash-Out)
        <small><?php echo $nama; ?></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <!-- Box Projection -->
        <div class="col-sm-10">
          
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Hasil Inputan</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>

            <div class="box-body table-responsive">

            
              <div class="row">
                <form method="post" action="<?php echo base_url().'bank_proyeksi/view_inputan' ?>">
                  <div class="col-sm-2">
                    Cari Berdasarkan Tanggal:
                  </div>

                  <div class="col-sm-4">
                    <input name="tanggal" type="date" class="form-control"></input>
                  </div>

                  <div class="col-sm-3">
                    <button type="submit" name="cari" class="btn btn-warning"><i class="fa fa-search"></i> CARI</button>
                  </div>
                </form>

                <form method="post" action="<?php echo base_url().'bank_proyeksi/hapus_cashout' ?>">
                  <div class="col-sm-3">
                    <button type="submit" name="hapus_tandai" class="btn btn-danger" style="margin-left: 50px"><i class="fa fa-trash"></i> Hapus yg Ditandai</button>
                  </div>

              </div>
            
              
              <!-- Tampilan Hasil Inputan Cashout Projection -->

              <table class="table table-bordered" style="margin-top: 10px">
              	<thead>
              		<tr style="background-color: #d3fa46">
              			<th>NO</th>
              			<th>Kode Status</th>
              			<th>Status</th>
              			<th>Tanggal</th>
              			<th>Besar Proyeksi</th>
              			<th style="text-align: center;">Action</th>
                    <th style="text-align: center;">Tandai</th>
              		</tr>
              	</thead>

              	<tbody>
              		<?php 
              			$no=1;
              			foreach($row as $data){ 
              		?>
              		<tr>
              			<td><?php echo $no++; ?></td>
              			<td><?php echo $data['kode_status']; ?></td>
              			<td><?php echo $data['status']; ?></td>
              			<td><?php echo $data['tanggal']; ?></td>
              			<td style="text-align: right;"><?php echo number_format($data['projection'], 0, '.', ','); ?></td>
              			<td style="text-align: center">
              				<!-- <a href="<?php echo base_url().'bank_proyeksi/edit_cashout/'.$data['id'] ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit</a>  -->

              				<!-- <a href="<?php echo base_url().'bank_proyeksi/hapus_cashout/'.$data['id'] ?>" class="btn btn-danger btn-xs" onclick="return confirm('Anda Yakin?')"><i class="fa fa-trash"></i> Hapus</a> -->

                      <a href="<?php echo base_url().'bank_proyeksi/detail_cashout/'.$data['kode_status'].'/'.$data['tanggal'] ?>" class="btn btn-warning btn-xs" target="_blank">
                        <i class="fa fa-list"></i> Detail
                      </a>

              			</td>

                    <td style="text-align: center;">
                      <input type="checkbox" name="id[]" value="<?php echo $data['id'] ?>">
                    </td>
              		</tr>
              		<?php } ?>
              	</tbody>
              </table>
              </form>

              <!-- Penutup Tampilan Hasil Inputan Cashin Projection -->

            </div>
            <!-- /.box-body -->
            
          </div>

        </div>
        <!-- /.Box Projection -->

      </div>

      <!-- Tombol Kembali -->
      <a href="<?php echo base_url().'bank_proyeksi' ?>" class="btn btn-danger"><i class="fa fa-backward"></i> Kembali</a>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Script Tombol Kembali -->
  <script>
      function goBack() {
          window.history.back();
      }
  </script>