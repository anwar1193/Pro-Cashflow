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
              <h3 class="box-title">Detail Angsuran Diluar Bank</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>

            <div class="box-body table-responsive">

              <!-- Data Utama -->
              <div class="row">

                <div class="col-md-6">
                    <table class="table">
                        <tr>
                            <th>Contract No</th>
                            <th>:</th>
                            <td><?= $data_angsuran['contract_no'] ?></td>
                        </tr>

                        <tr>
                            <th>Request Date</th>
                            <th>:</th>
                            <td><?= $data_angsuran['request_date'] ?></td>
                        </tr>

                        <tr>
                            <th>Bank Group</th>
                            <th>:</th>
                            <td><?= $data_angsuran['bank_group'] ?></td>
                        </tr>

                        <tr>
                            <th>Bank Name</th>
                            <th>:</th>
                            <td><?= $data_angsuran['bank_name'] ?></td>
                        </tr>

                        <tr>
                            <th>Principal Bank</th>
                            <th>:</th>
                            <td><?= number_format($data_angsuran['principal_bank'], 0, '.', ',') ?></td>
                        </tr>

                        <tr>
                            <th>Interest Bank</th>
                            <th>:</th>
                            <td><?= number_format($data_angsuran['interest_bank'], 0, '.', ',') ?></td>
                        </tr>

                        <tr>
                            <th>Contract Term</th>
                            <th>:</th>
                            <td><?= $data_angsuran['contract_term'] ?></td>
                        </tr>

                        <tr>
                            <th>Effective Rate</th>
                            <th>:</th>
                            <td><?= $data_angsuran['effective_rate'] ?></td>
                        </tr>

                        <tr>
                            <th>Payment Method</th>
                            <th>:</th>
                            <td><?= $data_angsuran['payment_method'] ?></td>
                        </tr>
                    </table>
                </div>

                <div class="col-md-6">
                    <table class="table">
                        <tr>
                            <th>Interest Calculation</th>
                            <th>:</th>
                            <td><?= $data_angsuran['interest_calculation'] ?></td>
                        </tr>

                        <tr>
                            <th>Go Live Date</th>
                            <th>:</th>
                            <td><?= $data_angsuran['golive_date'] ?></td>
                        </tr>

                        <tr>
                            <th>Handling Fee</th>
                            <th>:</th>
                            <td><?= number_format($data_angsuran['handling_fee'], 0, '.', ',') ?></td>
                        </tr>

                        <tr>
                            <th>Installment</th>
                            <th>:</th>
                            <td><?= number_format($data_angsuran['installment'], 0, '.', ',') ?></td>
                        </tr>

                        <tr>
                            <th>Installment Date</th>
                            <th>:</th>
                            <td><?= $data_angsuran['installment_date'] ?></td>
                        </tr>

                        <tr>
                            <th>Provision Fee</th>
                            <th>:</th>
                            <td><?= number_format($data_angsuran['provision_fee'], 0, '.', ',') ?></td>
                        </tr>

                        <tr>
                            <th>Admin Fee</th>
                            <th>:</th>
                            <td><?= number_format($data_angsuran['admin_fee'], 0, '.', ',') ?></td>
                        </tr>

                        <tr>
                            <th>File Bank</th>
                            <th>:</th>
                            <td>
                                <?= $data_angsuran['file_bank'] ?> - 
                                <a href="<?php echo base_url().'upload_csv/file_bank/'.$data_angsuran['file_bank'] ?>" target="_blank"><i class="fa fa-download"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <th>File Dleas</th>
                            <th>:</th>
                            <td>
                                <?= $data_angsuran['file_dleas'] ?> - 
                                <a href="<?php echo base_url().'upload_csv/file_dleas/'.$data_angsuran['file_dleas'] ?>" target="_blank"><i class="fa fa-download"></i></a>
                            </td>
                        </tr>
                    </table>
                </div>

              </div>
              <!-- END Data Utama -->

              <!-- Data Angsuran -->
              <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr class="bg-success">
                                <th colspan="13">Table Angsuran</th>
                            </tr>

                            <tr>
                                <th>No</th>
                                <th>Due Date</th>
                                <th>Paid Amount</th>
                                <th>Paid Date</th>
                                <th>Principal</th>
                                <th>Interest</th>
                                <th>Installment</th>
                                <th>OS Principal</th>
                                <th>OS Intersest</th>
                                <th>OS Receivable</th>
                                <th>Interest Adjst</th>
                                <th>Payment Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach($data_angsuran_detail as $row){  ?>
                            <tr>
                                <td><?= $row['no_periode'] ?></td>
                                <td><?= $row['due_date'] ?></td>
                                <td><?= number_format($row['paid_amount'], 2, '.', ',') ?></td>
                                <td><?= $row['paid_date'] ?></td>
                                <td><?= number_format($row['principal'], 2, '.', ',') ?></td>
                                <td><?= number_format($row['interest'], 2, '.', ',') ?></td>
                                <td><?= number_format($row['installment'], 2, '.', ',') ?></td>
                                <td><?= number_format($row['os_principal'], 2, '.', ',') ?></td>
                                <td><?= number_format($row['os_interest'], 2, '.', ',') ?></td>
                                <td><?= number_format($row['os_receivable'], 2, '.', ',') ?></td>
                                <td><?= number_format($row['interest_adjst'], 2, '.', ',') ?></td>
                                <td class="text-center"><?= $row['payment_status'] == 1 ? 'Paid' : 'Belum'; ?></td>
                                <td>
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
        <form method="post" action="<?php echo base_url().'angsuran_diluar_bank/proses_paid' ?>">
            <input type="text" id="id" name="id" placeholder="id" hidden>
            <input type="text" id="contract_no" name="contract_no" hidden>
            <input type="text" id="installment" name="installment" hidden>

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