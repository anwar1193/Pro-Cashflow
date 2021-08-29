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
        View Hasil Input Realisasi Cash-In
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
              <h3 class="box-title">Detail Hasil Inputan</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>

            <div class="box-body table-responsive">
              
              <!-- Tampilan Hasil Inputan Cashin Realisasi -->

              <table class="table table-bordered">
              	<thead>
              		<tr style="background-color: #d3fa46">
              			<th>NO</th>
              			<th>Kode Status</th>
              			<th>Status</th>
              			<th>Tanggal</th>
              			<th>Besar Realisasi</th>
              		</tr>
              	</thead>

              	<tbody>
              		<?php 
              			$no=1;
              			foreach($result as $data){ 
              		?>
              		<tr>
              			<td><?php echo $no++; ?></td>
              			<td><?php echo $data['kode_status']; ?></td>
              			<td><?php echo $data['status']; ?></td>
              			<td><?php echo $data['tanggal']; ?></td>
              			<td style="text-align: right;"><?php echo number_format($data['realisasi'], 0, '.', ','); ?></td>
              			
              		</tr>
              		<?php } ?>
              	</tbody>
              </table>

              <!-- Penutup Tampilan Hasil Inputan Cashin Realisasi -->

            </div>
            <!-- /.box-body -->
            
          </div>

        </div>
        <!-- /.Box Realisasi -->

      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper-->



<!-- Script Tombol Kembali -->
<script>
    function goBack() {
        window.history.back();
    }
</script>