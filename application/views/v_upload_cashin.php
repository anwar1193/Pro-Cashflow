  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Upload Data CashFlow
        <small>Projection Cash-In</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

    <!-- Small boxes (Stat box) -->
      <div class="row">

        <div class="col-sm-10">
          
          <!-- Box Utama -->
          <div class="box">
            
            <!-- Box Header -->
            <div class="box-header with-border">
              <h3 class="box-title">Upload Data <?php echo $status; ?></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>

            <!-- Box Body -->
            <div class="box-body">
              
              <!-- Buat sebuah tag form dan arahkan action nya ke file ini lagi -->
              <form method="post" action="" enctype="multipart/form-data">

                <!-- Format yang di download akan sesuai dengan Kode Status -->
                <?php if($kode=='A'){ ?>
                  <a href="<?php echo base_url().'format/cashin/Format_A.csv'?>" class="btn btn-default">
                <?php }else if($kode=='B'){ ?>
                  <a href="<?php echo base_url().'format/cashin/Format_B.csv'?>" class="btn btn-default">
                <?php }else if($kode=='C'){ ?>
                  <a href="<?php echo base_url().'format/cashin/Format_C.csv'?>" class="btn btn-default">
                <?php }else if($kode=='D'){ ?>
                  <a href="<?php echo base_url().'format/cashin/Format_D.csv'?>" class="btn btn-default">
                <?php }else if($kode=='E'){ ?>
                  <a href="<?php echo base_url().'format/cashin/Format_E.csv'?>" class="btn btn-default">
                <?php }else if($kode=='F'){ ?>
                  <a href="<?php echo base_url().'format/cashin/Format_F.csv'?>" class="btn btn-default">
                <?php }else if($kode=='G'){ ?>
                  <a href="<?php echo base_url().'format/cashin/Format_G.csv'?>" class="btn btn-default">
                <?php }else if($kode=='H'){ ?>
                  <a href="<?php echo base_url().'format/cashin/Format_H.csv'?>" class="btn btn-default">
                <?php }else if($kode=='I'){ ?>
                  <a href="<?php echo base_url().'format/cashin/Format_I.csv'?>" class="btn btn-default">
                <?php }else if($kode=='J'){ ?>
                  <a href="<?php echo base_url().'format/cashin/Format_J.csv'?>" class="btn btn-default">
                <?php }else if($kode=='K'){ ?>
                  <a href="<?php echo base_url().'format/cashin/Format_K.csv'?>" class="btn btn-default">
                <?php }else if($kode=='L'){ ?>
                  <a href="<?php echo base_url().'format/cashin/Format_L.csv'?>" class="btn btn-default">
                <?php } ?>

                  <span class="glyphicon glyphicon-download"></span>
                  Download Format
                </a><br><br>

                <!--
                -- Buat sebuah input type file
                -- class pull-left berfungsi agar file input berada di sebelah kiri
                -->
                <input type="file" name="file" class="pull-left">

                <button type="submit" name="preview" class="btn btn-success btn-sm">
                  <span class="glyphicon glyphicon-eye-open"></span> Preview
                </button>
              </form>

              <hr>
              <a href="http://localhost/dashboard-procar/">Dashboard</a>
              <!-- Buat Preview Data -->
              <?php
              // Jika user telah mengklik tombol Preview
              if(isset($_POST['preview'])){
                $nama_file_baru = 'data.csv';

                // Cek apakah terdapat file data.xlsx pada folder tmp
                // if(is_file('tmp/'.$nama_file_baru)) // Jika file tersebut ada
                //   unlink('tmp/'.$nama_file_baru); // Hapus file tersebut

                if(is_file(base_url().'tmp/'.$nama_file_baru)) // Jika file tersebut ada
                  unlink(base_url().'tmp/'.$nama_file_baru); // Hapus file tersebut

                $nama_file = $_FILES['file']['name']; // Ambil nama file yang akan diupload
                $tmp_file = $_FILES['file']['tmp_name'];
                $ext = pathinfo($nama_file, PATHINFO_EXTENSION); // Ambil ekstensi file yang akan diupload

                // Cek apakah file yang diupload adalah file CSV
                if($ext == "csv"){
                  // Upload file yang dipilih ke folder tmp
                  move_uploaded_file($tmp_file, 'tmp/'.$nama_file_baru);

                  // Load librari PHPExcel nya
                  require_once 'PHPExcel/PHPExcel.php';

                  $inputFileType = 'CSV';
                  $inputFileName = base_url().'tmp/data.csv';

                  $reader = PHPExcel_IOFactory::createReader($inputFileType);
                  $excel = $reader->load($inputFileName);

                  // Buat sebuah tag form untuk proses import data ke database
                  echo "<form method='post' action='import.php'>";

                  // Buat sebuah div untuk alert validasi kosong
                  echo "<div class='alert alert-danger' id='kosong'>
                  Semua data belum diisi, Ada <span id='jumlah_kosong'></span> data yang belum lengkap diisi.
                  </div>";

                  echo "<table class='table table-bordered'>
                  <tr>
                    <th colspan='5' class='text-center'>Preview Data</th>
                  </tr>
                  <tr>
                    <th>Kode Status</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                    <th>Jumlah (Rp)</th>       
                  </tr>";

                  $numrow = 1;
                  $kosong = 0;
                  $worksheet = $excel->getActiveSheet();
                  foreach ($worksheet->getRowIterator() as $row) { // Lakukan perulangan dari data yang ada di csv
                    // Cek $numrow apakah lebih dari 1
                    // Artinya karena baris pertama adalah nama-nama kolom
                    // Jadi dilewat saja, tidak usah diimport
                    if($numrow > 1){
                      // START -->
                      // Skrip untuk mengambil value nya
                      $cellIterator = $row->getCellIterator();
                      $cellIterator->setIterateOnlyExistingCells(false); // Loop all cells, even if it is not set

                      $get = array(); // Valuenya akan di simpan kedalam array,dimulai dari index ke 0
                      foreach ($cellIterator as $cell) {
                        array_push($get, $cell->getValue()); // Menambahkan value ke variabel array $get
                      }
                      // <-- END

                      // Ambil data value yang telah di ambil dan dimasukkan ke variabel $get
                      $kode_status = $get[0]; 
                      $status = $get[1]; 
                      $tanggal = $get[2]; 
                      $jumlah = $get[3];

                      // Cek jika semua data tidak diisi
                      if($kode_status == "" && $status == "" && $tanggal == "" && $jumlah == "")
                        continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

                      // Validasi apakah semua data telah diisi
                      $kode_status_td = ( ! empty($kode_status))? "" : " style='background: #E07171;'"; 

                      $status_td = ( ! empty($status))? "" : " style='background: #E07171;'"; 

                      $tanggal_td = ( ! empty($tanggal))? "" : " style='background: #E07171;'"; 

                      $jumlah_td = ( ! empty($jumlah))? "" : " style='background: #E07171;'"; 

                      // Jika salah satu data ada yang kosong
                      if($kode_status == "" or $status == "" or $tanggal == "" or $jumlah == ""){
                        $kosong++; // Tambah 1 variabel $kosong
                      }

                      echo "<tr>";
                      echo "<td".$kode_status_td.">".$kode_status."</td>";
                      echo "<td".$status_td.">".$status."</td>";
                      echo "<td".$tanggal_td.">".$tanggal."</td>";
                      echo "<td".$jumlah_td.">".$jumlah."</td>";
                      echo "</tr>";
                    }

                    $numrow++; // Tambah 1 setiap kali looping
                  }

                  echo "</table>";

                  // Cek apakah variabel kosong lebih dari 1
                  // Jika lebih dari 1, berarti ada data yang masih kosong
                  if($kosong > 1){
                  ?>
                    <script>
                    $(document).ready(function(){
                      // Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
                      $("#jumlah_kosong").html('<?php echo $kosong; ?>');

                      $("#kosong").show(); // Munculkan alert validasi kosong
                    });
                    </script>
                  <?php
                  }else{ // Jika semua data sudah diisi
                    echo "<hr>";

                    // Buat sebuah tombol untuk mengimport data ke database -> action nya ke import.php
                    echo "<button type='submit' name='import' class='btn btn-primary'><span class='glyphicon glyphicon-upload'></span> Import</button>";
                  }

                  echo "</form>";
                }else{ // Jika file yang diupload bukan File CSV
                  // Munculkan pesan validasi
                  echo "<div class='alert alert-danger'>
                  Hanya File CSV (.csv) yang diperbolehkan
                  </div>";
                }
              }
              ?>


            </div>

          </div> 

        </div>
        
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
