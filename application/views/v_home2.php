<?php  

  // Data User Yang Login
  $nama = $this->libraryku->tampil_user()->nama;
  $username = $this->libraryku->tampil_user()->username;
  $level = $this->libraryku->tampil_user()->level;

  $tgl = date('d');
  $bln = date('m');
  $thn = date('Y');

?>


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section>
    
    <div class="callout callout-success">
        <h4>Selamat Datang</h4>

        <p>Aplikasi Pro-Cashflow PT Procar Int'l Finance</p>
    </div>

    </section>
    <!-- /.content -->

    
    

  </div>
  <!-- /.content-wrapper -->