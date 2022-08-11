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
              <h3 class="box-title">Angsuran Diluar Bank</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>

            <div class="box-body table-responsive">

              <a href="<?php echo base_url().'upload_csv/upload_angs_diluar_bank.php' ?>" class="btn btn-success btn-xs" style="align-content: right;">
                <i class="fa fa-plus"></i> Tambah Angsuran Diluar Bank
              </a>

              <br><br>

              <table class="table table-bordered" id="tableDT" style="margin-top: 10px;">
              	<thead>

              		<tr style="background-color: orange">
              			<th>NO</th>
              			<th>Contract No</th>
              			<th>Principal Bank</th>
              			<th>Interest Bank</th>
              			<th>Contact Term</th>
                        <th>Effective Rate</th>
                        <th>Payment Method</th>
              			<th style="text-align: center;">Action</th>
              		</tr>

              	</thead>


              	<tbody>
              		<?php 
              			$no=1;
              			foreach($data_angsuran_diluar_bank as $row){
              		?>

              		<tr>
              			<td><?php echo $no++; ?></td>
              			<td><?php echo $row['contract_no']; ?></td>
              			<td style="text-align:right"><?php echo number_format($row['principal_bank'], 0, '.', ','); ?></td>
              			<td style="text-align:right"><?php echo number_format($row['interest_bank'], 0, '.', ','); ?></td>
              			<td><?php echo $row['contract_term']; ?></td>
              			<td><?php echo $row['effective_rate']; ?></td>
              			<td><?php echo $row['payment_method']; ?></td>
              			<td style="text-align: center;">

                          <a class="btn btn-warning btn-xs" href="<?php echo base_url().'angsuran_diluar_bank/detail/'.$row['id'] ?>">
                            <i class="fa fa-eye"></i>
                          </a>

                          <a class="btn btn-danger btn-xs" href="<?php echo base_url().'angsuran_diluar_bank/hapus/'.$row['id'] ?>" onclick="return confirm('Apakah Anda Yakin?')">
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