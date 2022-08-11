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

        <!-- Tampilkan List Menu Dari Database -->
        <?php  
          // $q_menu = $this->db->query("SELECT * FROM tbl_menu ORDER BY id_menu")->result_array();
          $q_menu = $this->db->query("SELECT * FROM tbl_menu INNER JOIN tbl_relasi_menu USING(id_menu) WHERE id_level=$level ORDER BY id_menu")->result_array();
          foreach($q_menu as $data_menu){
            $id_menu = $data_menu['id_menu'];
            $menu = $data_menu['menu'];
            $url = $data_menu['url'];
            $icon = $data_menu['icon'];
        ?>

          <!-- Cek Apakah Tipe Menu Dropdown Atau Biasa -->
          <?php if($url != 'dropdown'){ // jika menu biasa ?>

            <li class="<?=$this->uri->segment(1)==$url ? 'active' : '' ?>"><a href="<?php echo base_url().$url ?>"><i class="<?php echo $icon ?>"></i> <span><?php echo $menu ?></span></a></li>

          <?php }else{ // jika menu dropdown ?>

              <li class="treeview 
                <?php 
                  // Logika manipulasi class pada li, supaya submenu yang di klik terseleksi
                  $ambil_sub = $this->db->query("SELECT * FROM tbl_submenu WHERE id_menu=$id_menu")->result_array();
                  foreach($ambil_sub as $data_sub){
                    $url_sub = $data_sub['url'];
                    if($this->uri->segment(1) == $url_sub){
                      echo 'active';
                    }
                  }

                ?>">

                <a href="#">
                  <i class="<?php echo $icon ?>"></i>
                  <span><?php echo $menu ?></span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">

                  <!-- Perulangan Sub Biaya -->
                  <?php  
                    $q_sub_menu = $this->db->query("SELECT * FROM tbl_submenu WHERE id_menu=$id_menu")->result_array();
                    foreach($q_sub_menu as $data_submenu){
                      $submenu = $data_submenu['submenu'];
                      $url_submenu = $data_submenu['url'];
                      $icon_submenu = $data_submenu['icon'];
                      $data_target_submenu = $data_submenu['data_target'];
                  ?>

                    <!-- Cek Apakah Jenis Link Submenu nya : Link Biasa atau pop up (modal) -->
                    <?php if($url_submenu == 'modal'){ //jika tipe nya modal ?>

                      <li><a href="#" data-toggle="modal" data-target="<?php echo $data_target_submenu ?>"><i class="fa fa-circle-o"></i> <?php echo $submenu ?></a></li>

                    <?php }else{ // jika tipe nya link biasa ?>

                      <li class="<?=$this->uri->segment(1)==$url_submenu ? 'active' : '' ?>"><a href="<?php echo base_url().$url_submenu ?>"><i class="<?php echo $icon_submenu ?>"></i> <?php echo $submenu ?></a></li>
                    
                    <?php } ?>                      

                  <?php } ?>
                  <!-- Penutup Perulangan Sub Biaya -->

                </ul>
              </li>

          <?php } ?>
          <!-- Penutup Cek Apakah Tipe Menu Dropdown Atau Biasa -->

        <?php } ?>
        <!-- Penutup Tampilkan List Menu Dari Database -->


        <li class="header">AKSES</li>

        <li class="<?= $this->uri->segment(1)=='ganti_password' ? 'active' : ''; ?>"><a href="<?php echo base_url().'ganti_password' ?>"><i class="fa fa-lock"></i> <span>Ganti Password</span></a></li>
        
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


  <!-- Modal Angsuran -->
  <div class="modal fade" id="modal-angsuran">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Bayar Angsuran</h4>
        </div>
        
        <div class="modal-footer">
          <form method="post" action="<?php echo base_url().'angsuran_diluar_bank/paid_selected' ?>">
            
            <div class="form-group" style="text-align:left">
              <label>From :</label>
              <input class="form-control" type="date" name="tanggal_from" required>
            </div>

            <div class="form-group" style="text-align:left">
              <label>To :</label>
              <input class="form-control" type="date" name="tanggal_to" required>
            </div>

            <button type="button" name="closing" class="btn btn-danger pull-left" data-dismiss="modal">
              Batalkan
            </button>

            <button type="submit" class="btn btn-success">
              Proses
            </button>
          </form>
        </div>
        
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- / Modal Angsuran -->