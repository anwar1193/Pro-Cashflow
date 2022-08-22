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
              <h3 class="box-title">Data Bank CSV</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>

            <div class="box-body table-responsive">

              <a href="<?php echo base_url().'upload_csv/upload_bank_csv.php' ?>" class="btn btn-success btn-xs" style="align-content: right;">
                <i class="fa fa-plus"></i> Upload New Data
              </a>

              <br><br>

              <table class="table table-bordered" id="tableDT" style="margin-top: 10px;">
              	<thead>

              		<tr style="background-color: orange">
              			<th>NO</th>
              			<th>No. Rekening</th>
              			<th>Nama</th>
              			<th>Periode</th>
              			<th>Saldo Awal</th>
                        <th>Mutasi Debet</th>
                        <th>Mutasi Kredit</th>
                        <th>Saldo Akhir</th>
              			<th style="text-align: center;">Action</th>
              		</tr>

              	</thead>


              	<tbody>
              		<?php 
              			$no=1;
              			foreach($data as $row){
              		?>

              		<tr>
              			<td><?php echo $no++; ?></td>
              			<td><?php echo $row['no_rekening']; ?></td>
              			<td><?php echo $row['nama']; ?></td>
              			<td><?php echo $row['periode_from'].' - '.$row['periode_to']; ?></td>
              			<td style="text-align:right"><?php echo number_format($row['saldo_awal'], 2, '.', ','); ?></td>
              			<td style="text-align:right"><?php echo number_format($row['mutasi_debet'], 2, '.', ','); ?></td>
              			<td style="text-align:right"><?php echo number_format($row['mutasi_kredit'], 2, '.', ','); ?></td>
              			<td style="text-align:right"><?php echo number_format($row['saldo_akhir'], 2, '.', ','); ?></td>
              			<td style="text-align: center;">

                          <a class="btn btn-warning btn-xs" href="<?php echo base_url().'bank_csv/detail/'.$row['id'] ?>">
                            <i class="fa fa-eye"></i>
                          </a>

                          <a class="btn btn-danger btn-xs" href="<?php echo base_url().'bank_csv/hapus/'.$row['id'] ?>" onclick="return confirm('Apakah Anda Yakin?')">
                            <i class="fa fa-trash"></i>
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
  <!-- /.content-wrapper