<?php  

  // Data User Yang Login
  $nama = $this->libraryku->tampil_user()->nama;
  $username = $this->libraryku->tampil_user()->username;
  $level = $this->libraryku->tampil_user()->level;

?>


<!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url().'asset' ?>/img/user.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $nama; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">

        <li class="header">MAIN NAVIGATION</li>
        
        <li class="<?=$this->uri->segment(1)=='home' ? 'active' : '' ?>"><a href="<?php echo base_url().'home' ?>"><i class="fa fa-home"></i> <span>Home</span></a></li>


        <!-- Jika login administrator, tampil data cashflow detail dan cashflow perbulan -->
        <?php if($level=='administrator'){ ?>

        <li class="<?=$this->uri->segment(1)=='cashflow_data' ? 'active' : '' ?>"><a href="<?php echo base_url().'cashflow_data' ?>"><i class="fa fa-archive"></i> <span>Cash Flow Detail</span></a></li>

        <!-- <li class="<?=$this->uri->segment(1)=='cashflow_bulan' ? 'active' : '' ?>"><a href="<?php echo base_url().'cashflow_bulan' ?>"><i class="fa fa-list"></i> <span>Cash Flow 1 Bulan</span></a></li> -->

        
        <?php } ?>
        <!-- Penutup Jika login administrator, tampil data cashflow detail dan cashflow perbulan -->

        <li class="treeview <?= $this->uri->segment(1)=='input_cashin' || $this->uri->segment(1)=='edit_cashinproj' || $this->uri->segment(1)=='input_cashin_real' || $this->uri->segment(1)=='edit_cashinreal' || $this->uri->segment(1)=='input_cashout' || $this->uri->segment(1)=='input_cashout_real' || $this->uri->segment(1)=='edit_cashoutreal' || $this->uri->segment(1)=='input_saldo_awal' || $this->uri->segment(1)=='input_allocated_cash' || $this->uri->segment(1)=='input_ready_cash' || $this->uri->segment(1)=='input_kbc' || $this->uri->segment(1)=='real_otomatis' || $this->uri->segment(1)=='real_otomatis_in' || $this->uri->segment(1)=='edit_cashoutproj' || $this->uri->segment(1)=='input_deposito' || $this->uri->segment(1)=='collection_proyeksi' || $this->uri->segment(1)=='collection_realisasi' || $this->uri->segment(1)=='bank_proyeksi' || $this->uri->segment(1)=='bank_realisasi' ? 'active' : '' ?>">

          <a href="#">
            <i class="fa fa-plus-square"></i> <span>Input CashFlow</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            <!-- Menu Input Saldo Awal -->
            <?php if($level == 'administrator'){ ?>
              <li class="<?=$this->uri->segment(1)=='input_saldo_awal' ? 'active' : '' ?>"><a href="<?php echo base_url().'input_saldo_awal' ?>"><i class="fa fa-circle-o"></i> <span>Saldo Awal</span></a></li>
              <!-- Penutup Menu Saldo Awal -->
            <?php } ?>
            
            <!-- Menu CashIn -->
            <?php if($level == 'administrator'){ ?>
            <li class="treeview <?= $this->uri->segment(1)=='input_cashin' || $this->uri->segment(1)=='edit_cashinproj' || $this->uri->segment(1)=='input_cashin_real' || $this->uri->segment(1)=='edit_cashinreal' || $this->uri->segment(1)=='real_otomatis_in' ? 'active' : '' ?>">
              <a href="#"><i class="fa fa-circle-o"></i> Cash In
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">

                <li class="<?= $this->uri->segment(1)=='input_cashin' ? 'active' : '' ?>">
                <a href="<?php echo base_url().'input_cashin' ?>"><i class="fa fa-circle-o"></i> Projection</a></li>

                <!-- Jika Login Administrator, tampil menu edit projection, realisasi, edit realisasi -->
                <?php if($level=='administrator'){ ?>

                <li class="<?= $this->uri->segment(1)=='edit_cashinproj' ? 'active' : '' ?>">
                <a href="<?php echo base_url().'edit_cashinproj' ?>"><i class="fa fa-circle-o"></i> Edit Projection</a></li>

                <li class="<?= $this->uri->segment(1)=='real_otomatis_in' ? 'active' : '' ?>">
                <a href="<?php echo base_url().'real_otomatis_in' ?>"><i class="fa fa-circle-o"></i> Realisasi Otomatis</a></li>

                <li class="<?= $this->uri->segment(1)=='input_cashin_real' ? 'active' : '' ?>">
                <a href="<?php echo base_url().'input_cashin_real' ?>"><i class="fa fa-circle-o"></i> Realisasi Manual</a></li>

                <li class="<?= $this->uri->segment(1)=='edit_cashinreal' ? 'active' : '' ?>">
                <a href="<?php echo base_url().'edit_cashinreal' ?>"><i class="fa fa-circle-o"></i> Edit Realisasi</a></li>
                
                <?php } ?>
                <!-- Penutup Jika Login Administrator, tampil menu realisasi -->

              </ul>
            </li>
            <?php } ?>
            <!-- Penutup Menu CashIn -->

            <!-- Menu CashOUt -->
            <?php if($level == 'administrator'){ ?>
            <li class="treeview <?= $this->uri->segment(1)=='input_cashout' || $this->uri->segment(1)=='input_cashout_real' || $this->uri->segment(1)=='real_otomatis' || $this->uri->segment(1)=='edit_cashoutproj' || $this->uri->segment(1)=='edit_cashoutreal' ? 'active' : '' ?>">

              <a href="#"><i class="fa fa-circle-o"></i> Cash Out
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">

                <li class="<?= $this->uri->segment(1)=='input_cashout' ? 'active' : '' ?>">
                <a href="<?php echo base_url().'input_cashout' ?>"><i class="fa fa-circle-o"></i> Projection</a></li>

                <!-- Jika login administrator, tampil menu edit projection, realisasi, edit realisasi -->
                <?php if($level=='administrator'){ ?>

                <li class="<?= $this->uri->segment(1)=='edit_cashoutproj' ? 'active' : '' ?>">
                <a href="<?php echo base_url().'edit_cashoutproj' ?>"><i class="fa fa-circle-o"></i> Edit Projection</a></li>

                <li class="<?= $this->uri->segment(1)=='real_otomatis' ? 'active' : '' ?>">
                <a href="<?php echo base_url().'real_otomatis' ?>"><i class="fa fa-circle-o"></i> Realisasi Otomatis</a></li>

                <li class="<?= $this->uri->segment(1)=='input_cashout_real' ? 'active' : '' ?>">
                <a href="<?php echo base_url().'input_cashout_real' ?>"><i class="fa fa-circle-o"></i> Realisasi Manual</a></li>

                <li class="<?= $this->uri->segment(1)=='edit_cashoutreal' ? 'active' : '' ?>">
                <a href="<?php echo base_url().'edit_cashoutreal' ?>"><i class="fa fa-circle-o"></i> Edit Realisasi</a></li>

                <?php } ?>
                <!-- Penutup Jika login administrator, tampil menu realisasi -->

              </ul>
            </li>
            <?php } ?>
            <!-- Penutup Menu CashOut -->

            <!-- Jika Yang Login Administrator Maka Akan Tampil Inputan Saldo Awal, Allocated Cash, Ready Cash, Kas Besar Cabang -->
            <?php if($level=='administrator'){ ?>

            <!-- Menu Input Allocated Cash -->
            <li class="<?=$this->uri->segment(1)=='input_allocated_cash' ? 'active' : '' ?>"><a href="<?php echo base_url().'input_allocated_cash' ?>"><i class="fa fa-circle-o"></i> <span>Allocated Cash</span></a></li>
            <!-- Penutup Menu Allocated Cash -->

            <!-- Menu Input Ready Cash -->
            
            <!-- <li class="<?=$this->uri->segment(1)=='input_ready_cash' ? 'active' : '' ?>"><a href="<?php echo base_url().'input_ready_cash' ?>"><i class="fa fa-circle-o"></i> <span>Ready Cash</span></a></li> -->
            <!-- Penutup Menu Ready Cash -->

            <!-- Menu Input Kas Besar Cabang -->
            <li class="<?=$this->uri->segment(1)=='input_kbc' ? 'active' : '' ?>"><a href="<?php echo base_url().'input_kbc' ?>"><i class="fa fa-circle-o"></i> <span>Kas Besar Cabang</span></a></li>
            <!-- Penutup Menu Kas Besar Cabang -->

            <!-- Menu Input Deposito -->
            <li><a href="#" data-toggle="modal" data-target="#modal-deposito">
              <i class="fa fa-circle-o"></i> Deposito</a>
            </li>
            <!-- Penutup Menu Deposito -->

            <!-- Menu Input Back to Back -->
            <li><a href="#" data-toggle="modal" data-target="#modal-b2b">
              <i class="fa fa-circle-o"></i> Dana Back to Back</a>
            </li>
            <!-- Penutup Menu Back to Back -->

            <?php } ?>
            <!-- Penutup Jika Yang Login Administrator Maka Akan Tampil Inputan Saldo Awal, Allocated Cash dan Ready Cash -->


            <!-- Menu Collection -->
            <?php if($level == 'collection'){ ?>
            <li class="treeview <?= $this->uri->segment(1)=='collection_proyeksi' || $this->uri->segment(1)=='collection_realisasi'  ? 'active' : '' ?>">
              <a href="#"><i class="fa fa-circle-o"></i> Input Collection
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">

                <li class="<?= $this->uri->segment(1)=='collection_proyeksi' ? 'active' : '' ?>">
                <a href="<?php echo base_url().'collection_proyeksi' ?>"><i class="fa fa-circle-o"></i> Proyeksi</a></li>

                <li class="<?= $this->uri->segment(1)=='collection_realisasi' ? 'active' : '' ?>">
                <a href="<?php echo base_url().'collection_realisasi' ?>"><i class="fa fa-circle-o"></i> Realisasi</a></li>

              </ul>
            </li>
            <?php } ?>
            <!-- Penutup Menu Collection -->


            <!-- Menu Bank -->
            <?php if($level == 'bank'){ ?>
            <li class="treeview <?= $this->uri->segment(1)=='bank_proyeksi' || $this->uri->segment(1)=='bank_realisasi'  ? 'active' : '' ?>">
              <a href="#"><i class="fa fa-circle-o"></i> Input Bank
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">

                <li class="<?= $this->uri->segment(1)=='bank_proyeksi' ? 'active' : '' ?>">
                <a href="<?php echo base_url().'bank_proyeksi' ?>"><i class="fa fa-circle-o"></i> Proyeksi</a></li>

                <li class="<?= $this->uri->segment(1)=='bank_realisasi' ? 'active' : '' ?>">
                <a href="<?php echo base_url().'bank_realisasi' ?>"><i class="fa fa-circle-o"></i> Realisasi</a></li>

              </ul>
            </li>
            <?php } ?>
            <!-- Penutup Menu Bank -->


          </ul>
        </li>

        <!-- Jika Yang Login Administrator Maka Akan Tampil Closing Harian & Note Finance -->
        <?php if($level=='administrator'){ ?>

        <li class="treeview <?=$this->uri->segment(1)=='closing' ? 'active' : '' ?>">
          <a href="#">
            <i class="fa fa-calendar-check-o"></i>
            <span>Generate Saldo Akhir</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            <li><a href="#" data-toggle="modal" data-target="#modal-closing"><i class="fa fa-circle-o"></i> Hari Ini</a></li>

            <li class="<?=$this->uri->segment(1)=='closing' ? 'active' : '' ?>"><a href="<?php echo base_url().'closing' ?>"><i class="fa fa-circle-o"></i> By Tanggal</a></li>

          </ul>
        </li>

        <li class="<?=$this->uri->segment(1)=='note' ? 'active' : '' ?>"><a href="<?php echo base_url().'note' ?>"><i class="fa fa-list-alt"></i> <span>Note Finance</span></a></li>

        <?php } ?>
        <!-- Penutup Jika Yang Login Administrator Maka Akan Tampil Closing Harian & Note Finance -->

        <li class="header">AKSES</li>
        
        <?php if($level == 'administrator'){ ?>
          <li class="<?=$this->uri->segment(1)=='menejemen_user' ? 'active' : '' ?>"><a href="<?php echo base_url().'menejemen_user' ?>"><i class="fa fa-user"></i> <span>Menejemen User</span></a></li>
        <?php } ?>
        
        <li><a href="<?php echo base_url().'login/logout' ?>"><i class="fa fa-close text-red"></i> <span>Logout</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Modal Generate Saldo Akhir Hari Ini -->
  <div class="modal fade" id="modal-closing">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Generate Saldo Akhir</h4>
        </div>
        <div class="modal-body">
          <p>Generate Saldo Akhir Hari Ini?</p>
        </div>
        
        <div class="modal-footer">
          <form method="post" action="<?php echo base_url().'closing/hitung_otomatis' ?>">
            <?php 
              date_default_timezone_set("Asia/Jakarta");
              $date = date('m/d/y'); 
            ?>
            <input type="text" name="tanggal" value="<?php echo $date ?>" hidden>
            <input type="text" name="note" value="-" hidden>
            <button type="button" name="closing" class="btn btn-danger pull-left" data-dismiss="modal">
              Batalkan
            </button>

            <button type="submit" class="btn btn-success">
              Ya, Generate
            </button>
          </form>
        </div>
        
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- / Modal Generate Saldo Akhir Hari Ini -->



  <!-- Modal Deposito -->
  <div class="modal fade" id="modal-deposito">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Input Deposito</h4>
        </div>
        
        <div class="modal-footer">
          <form method="post" action="<?php echo base_url().'deposito/update' ?>">
            
            <div class="form-group">
              <input class="form-control" type="date" name="tanggal" required>
            </div>

            <div class="form-group">
              <input class="form-control" type="number" name="deposito" placeholder="(Rp)" required>
            </div>

            <button type="button" name="closing" class="btn btn-danger pull-left" data-dismiss="modal">
              Batalkan
            </button>

            <button type="submit" class="btn btn-success">
              Simpan Deposito
            </button>
          </form>
        </div>
        
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- / Modal Deposito -->


  <!-- Modal B2B -->
  <div class="modal fade" id="modal-b2b">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Input Dana Back to Back</h4>
        </div>
        
        <div class="modal-footer">
          <form method="post" action="<?php echo base_url().'b2b/update' ?>">
            
            <div class="form-group">
              <input class="form-control" type="date" name="tanggal" required>
            </div>

            <div class="form-group">
              <input class="form-control" type="number" name="b2b" placeholder="(Rp)" required>
            </div>

            <button type="button" name="closing" class="btn btn-danger pull-left" data-dismiss="modal">
              Batalkan
            </button>

            <button type="submit" class="btn btn-success">
              Simpan Dana B2B
            </button>
          </form>
        </div>
        
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- / Modal B2B -->