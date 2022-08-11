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
              <h3 class="box-title">
                Proses Bayar Angsuran Diluar Bank (Periode : <?php echo date('d-m-Y', strtotime($tanggal_from)) ?> s/d <?php echo date('d-m-Y', strtotime($tanggal_to)) ?> )
              </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>

            <div class="box-body table-responsive">

              <!-- Data Angsuran -->
              <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr style="background-color:black; color:white">
                                <th class="text-center">No</th>
                                <th class="text-center">Contract No</th>
                                <th class="text-center">Bank Group</th>
                                <th class="text-center">Bank Name</th>
                                <th class="text-center">Periode</th>
                                <th class="text-center">Due Date</th>
                                <th class="text-center">Principal</th>
                                <th class="text-center">Interest</th>
                                <th class="text-center">Installment</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- Jika Ada Data -->
                            <?php if(count($data_angsuran) > 0){ ?> 

                                <?php 
                                    $no = 1;
                                    foreach($data_angsuran as $row){  
                                ?>
                                <tr>
                                    <td class="text-center"><?= $no++; ?></td>
                                    <td class="text-center"><?= $row['contract_no']; ?></td>
                                    <td class="text-center"><?= $row['bank_group']; ?></td>
                                    <td class="text-center"><?= $row['bank_name']; ?></td>
                                    <td class="text-center"><?= $row['no_periode']; ?></td>
                                    <td class="text-center"><?= $row['due_date']; ?></td>
                                    <td class="text-right"><?= number_format($row['principal'], 2, ',', '.'); ?></td>
                                    <td class="text-right"><?= number_format($row['interest'], 2, ',', '.'); ?></td>
                                    <td class="text-right"><?= number_format($row['installment'], 2, ',', '.'); ?></td>
                                    
                                    <td class="text-center">
                                        <?php if($row['paid_amount'] == 0){ ?>
                                            <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-paid" id="pilih-paid"
                                                data-id="<?php echo $row['id'] ?>"
                                                data-contract_no="<?php echo $row['contract_no'] ?>"
                                                data-due_date="<?php echo $row['due_date'] ?>"
                                                data-periode="<?php echo $row['no_periode'] ?>"
                                                data-installment="<?php echo $row['installment'] ?>"
                                            >
                                                <i class="fa fa-dollar"></i> Paid
                                            </a>
                                        <?php }else{ ?>
                                            <a href="#" class="btn btn-default btn-sm  disabled">
                                                <i class="fa fa-dollar"></i> Paid
                                            </a>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <?php } ?>
                            
                            <!-- Jika tidak ada data -->
                            <?php }else{ ?>
                                <tr>
                                    <td colspan="10" style="font-weight:bold">Tidak ada data ditemukan.</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
              </div>
              <!-- END Data Angsuran -->

            </div>
            <!-- /.box-body -->

            <div style="margin-top:5px; margin-left:5px">
                <a href="<?php echo base_url().'angsuran_diluar_bank' ?>" class="btn btn-danger btn-sm">
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


<!-- Modal Paid -->
<div class="modal fade" id="modal-paid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Paid Proccess</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'angsuran_diluar_bank/proses_paid_selected' ?>">
            <input type="text" id="id" name="id" placeholder="id" hidden>
            <input type="text" id="contract_no" name="contract_no" hidden>
            <input type="text" id="installment" name="installment" hidden>
            <input type="date" name="tanggal_from" value="<?php echo $tanggal_from ?>" hidden>
            <input type="date" name="tanggal_to" value="<?php echo $tanggal_to ?>" hidden>

            <div class="form-group">
                <label>Periode</label>
                <input type="text" id="periode" class="form-control" name="periode" readonly>
            </div>

            <div class="form-group">
                <label>Due Date</label>
                <input type="text" id="due_date" class="form-control" name="due_date" readonly>
            </div>

            <div class="form-group">
                <label>Paid Date</label>
                <input type="date" id="paid_date" class="form-control" name="paid_date" required>
            </div>

            <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Paid</button>

        </form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
<!-- END Modal Paid -->


<script>
    $(document).on('click', '#pilih-paid', function(){
        let id = $(this).data('id');
        let contract_no = $(this).data('contract_no');
        let due_date = $(this).data('due_date');
        let installment = $(this).data('installment');
        let periode = $(this).data('periode');

        $('#id').val(id);
        $('#contract_no').val(contract_no);
        $('#due_date').val(due_date);
        $('#installment').val(installment);
        $('#periode').val(periode);
    });
</script>