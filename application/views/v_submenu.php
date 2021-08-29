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
              <h3 class="box-title">Data Sub Menu</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>

            <div class="box-body table-responsive">

              <a href="<?php echo base_url().'data_submenu/tambah' ?>" class="btn btn-success btn-sm" style="align-content: right;">
                <i class="fa fa-plus"></i> Tambah Sub Menu
              </a>

              <br><br>

              <table class="table table-bordered" id="tableDT" style="margin-top: 10px;">
              	<thead>

              		<tr style="background-color: orange">
              			<th>NO</th>
              			<th>Menu</th>
                        <th>Sub-Menu</th>
                        <th>URL Sub-Menu</th>
                        <th>Icon Sub-Menu</th>
              			<th style="text-align: center;">Action</th>
              		</tr>

              	</thead>


              	<tbody>
              		<?php 
              			$no=1;
              			foreach($data_submenu as $row_submenu){
              		?>

              		<tr>
              			<td><?php echo $no++; ?></td>
              			<td><?php echo $row_submenu['menu']; ?></td>
              			<td><?php echo $row_submenu['submenu']; ?></td>
              			<td><?php echo $row_submenu['url_sub']; ?></td>
              			<td><i class="<?php echo $row_submenu['icon_sub'] ?>"></i> (<?php echo $row_submenu['icon_sub']; ?>)</td>
              			<td style="text-align: center;">

                      <a class="btn btn-info btn-xs" href="<?php echo base_url().'data_submenu/edit/'.$row_submenu['id_submenu'] ?>">
                        <i class="fa fa-edit"></i> Edit
                      </a>

                      <a class="btn btn-danger btn-xs" href="<?php echo base_url().'data_submenu/hapus/'.$row_submenu['id_submenu'] ?>" onclick="return confirm('Apakah Anda Yakin?')">
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
  <!-- /.content-wrapper