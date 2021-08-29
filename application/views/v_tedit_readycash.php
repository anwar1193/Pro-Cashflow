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
        Edit Ready Cash
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
              <h3 class="box-title">Data Ready Cash</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>

            <div class="box-body table-responsive">

            <form method="post" action="<?php echo base_url().'input_ready_cash/tampil_edit' ?>">
              <div class="row">

                <div class="col-sm-2">
                  Cari Berdasarkan Tanggal:
                </div>

                <div class="col-sm-4">
                  <input name="tanggal" type="date" class="form-control"></input>
                </div>

                <div class="col-sm-4">
                  <button type="submit" name="cari" class="btn btn-warning"><i class="fa fa-search"></i> CARI</button>
                </div>

              </div>
            </form>
              
              <!-- Tampilan Cashout Projection -->

              <table class="table table-bordered" style="margin-top: 10px;">
              	<thead>
              		<tr style="background-color: #F7AE3C">
              			<th>NO</th>
              			<th>Tanggal</th>
              			<th>Ready Cash</th>
              			<th>Action</th>
              		</tr>
              	</thead>

              	<tbody>
              		<?php 
              			$no=1;
              			foreach($row as $data){
              		?>
              		<tr>
              			<td><?php echo $no++; ?></td>
              			<td><?php echo $data['tanggal']; ?></td>
              			<td><?php echo number_format($data['ready_cash'],0,'.',','); ?></td>
              			<td>
                      <a href="<?php echo base_url().'input_ready_cash/edit/'.$data['id'] ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Edit</a>   
                    </td>
              		</tr>
                  <?php 
                    }
                  ?>
              		
              	</tbody>
              </table>

              <!-- Penutup Tampilan Cashout Projection -->

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