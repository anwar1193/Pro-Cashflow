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
        Approve (Realisasi) Cash-Out
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
              <h3 class="box-title">Data Proyeksi Cash-Out</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>

            <div class="box-body table-responsive">

            <!-- <form method="post" action="<?php echo base_url().'real_otomatis/index' ?>">
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
            </form> -->
              
              <!-- Tampilan Hasil Inputan Cashin Projection -->

              <table class="table table-bordered" id="tableDT" style="margin-top: 10px;">
              	<thead>
              		<tr style="background-color: #d3fa46">
              			<th>NO</th>
              			<th>Kode Status</th>
              			<th>Status</th>
              			<th>Tanggal</th>
              			<th>Besar Proyeksi</th>
              			<th>Realisasi</th>
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
              			<td>

                      <?php echo number_format($data['projection'],0,'.',','); ?> &nbsp; &nbsp; &nbsp;

                      <!-- Jika sudah approve apa belum (untuk tombol edit amount) -->
                      <?php  
                          $status = $data['status'];
                          $tanggal = $data['tanggal'];

                          $koneksi = mysqli_connect('localhost','root','','db_cashflow');
                          $quer_cek = "SELECT * FROM tbl_cashoutreal WHERE status='$status' AND tanggal='$tanggal'";
                          $res_cek = mysqli_query($koneksi,$quer_cek) or die ('error cek'); 
                          $cek = mysqli_num_rows($res_cek);
                          if($cek>0){
                      ?>

                        <a href="#" class="btn btn-default btn-xs">Edit Amount</a>

                      <?php }else{ ?>

                        <a href="<?php echo base_url().'real_otomatis/edit_amount_cashout/'.$data['id'] ?>" class="btn btn-warning btn-xs">Edit Amount</a>

                      <?php } ?>

                      <!-- Jika sudah approve apa belum (untuk tombol edit amount) -->
                   
                    </td>
              			<td>

                      <form method="POST" action="<?php echo base_url().'real_otomatis/approve' ?>">
                        <input type="text" name="kode_status" value="<?php echo $data['kode_status'] ?>" hidden>
                        <input type="text" name="status" value="<?php echo $data['status'] ?>" hidden>
                        <input type="text" name="tanggal" value="<?php echo $data['tanggal'] ?>" hidden>
                        <input type="text" name="realisasi" value="<?php echo $data['projection'] ?>" hidden>

                        <?php  
                          if($cek>0){
                        ?>

                          <button type="reset" class="btn btn-default btn-sm"><i class="fa fa-check"></i> Bayar/Approve</button>

                        <?php }else{ ?>

                          <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Bayar/Approve</button>
                        
                        <?php } ?>
                      </form>

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