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
              <h3 class="box-title">Detail Data Bank CSV</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>

            <div class="box-body table-responsive">

              <!-- Data Atas -->
              <div class="row">

                <div class="col-md-6">
                    <table class="table">
                        <tr>
                            <th>No Rekening</th>
                            <th>:</th>
                            <td width="60%"><?= $data_bank_csv['no_rekening'] ?></td>
                        </tr>

                        <tr>
                            <th>Nama</th>
                            <th>:</th>
                            <td><?= $data_bank_csv['nama'] ?></td>
                        </tr>

                        <tr>
                            <th>Periode</th>
                            <th>:</th>
                            <td><?= $data_bank_csv['periode_from'].' - '.$data_bank_csv['periode_to'] ?></td>
                        </tr>

                        <tr>
                            <th>Kode Mata Uang</th>
                            <th>:</th>
                            <td><?= $data_bank_csv['kode_mata_uang'] ?></td>
                        </tr>
                    </table>
                </div>

              </div>
              <!-- END Data Atas -->

              <!-- Data Detail Transaksi -->
              <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>

                            <tr>
                                <th>No</th>
                                <th>Tanggal Transaksi</th>
                                <th>Keterangan</th>
                                <th>Cabang</th>
                                <th>Jumlah</th>
                                <th>Saldo</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php 
                                $no = 1;
                                foreach($data_bank_csv_detail as $row){  
                            ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $row['tanggal_transaksi'] ?></td>
                                <td><?= $row['keterangan'] ?></td>
                                <td><?= $row['cabang'] ?></td>
                                <td><?= number_format($row['jumlah'], 2, '.', ',') ?> <?= $row['jumlah_tipe'] ?></td>
                                <td><?= number_format($row['saldo'], 2, '.', ',') ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
              </div>
              <!-- END Data Detail Transaksi -->

              <!-- Data Atas -->
              <div class="row">

                <div class="col-md-6">
                    <table class="table">
                        <tr>
                            <th>Saldo Awal</th>
                            <th>:</th>
                            <td width="60%"><?= number_format($data_bank_csv['saldo_awal'], 2, '.', ',') ?></td>
                        </tr>

                        <tr>
                            <th>Mutasi Debet</th>
                            <th>:</th>
                            <td><?= number_format($data_bank_csv['mutasi_debet'], 2, '.', ',') ?></td>
                        </tr>

                        <tr>
                            <th>Mutasi Kredit</th>
                            <th>:</th>
                            <td><?= number_format($data_bank_csv['mutasi_kredit'], 2, '.', ',') ?></td>
                        </tr>

                        <tr>
                            <th>Saldo Akhir</th>
                            <th>:</th>
                            <td><?= number_format($data_bank_csv['saldo_akhir'], 2, '.', ',') ?></td>
                        </tr>
                    </table>
                </div>

              </div>
              <!-- END Data Atas -->

            </div>
            <!-- /.box-body -->

            <div style="margin-top:5px; margin-left:5px">
                <a href="<?php echo base_url().'bank_csv' ?>" class="btn btn-danger btn-sm">
                    <i class="fa fa-backward"></i> Kembali
                </a>
            </div>
            
          </div>

        </div>
        <!-- /.Box Projection -->

      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->