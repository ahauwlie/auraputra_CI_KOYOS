<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Data Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php echo $css; ?>
  <link href="<?php echo base_url('inti/admin/sweetalert.css'); ?>" rel="stylesheet">
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style type="text/css">
    input[type="file"], input[type="submit"]{
      display: none;
    }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php echo $preloader; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Import
        <small>- Import Artikel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Upload</a></li>
        <li class="active">Import Artikel</li>
      </ol>
    </section>


     <!-- class="form-group btn btn-primary browse m-l-5" -->
    <!-- Main content -->
    <section class="content">
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
          <form method="post" action="<?php echo site_url("Artikel_import_admin/form") ?>" enctype="multipart/form-data">
            <a href="<?php echo base_url("excel/import_data.xlsx"); ?>"class="btn btn-primary"><i class="fa fa-download"></i> Download Format</a><br><br>
            <input id="pilih_file" type="file" name="file">
            <label for="pilih_file" class="form-group btn btn-info browse m-l-5">
              <i class="fa fa-download"> Pilih File</i>
            </label>
            <input type="submit" name="preview" id="ok">
            <label for="ok" class="form-group btn btn-warning browse m-l-5">
              <i class="fa fa-download"> Lihat data(Import)</i>
            </label>
          </form>
          <?php
            if(isset($_POST['preview'])){ 
              if(isset($upload_error)){ 
                echo "<div style='color: red;'>".$upload_error."</div>"; 
                die; 
              }
              
              echo "<form method='post' action='".site_url("Artikel_import_admin/import")."'>";
              
              echo "<table border='1' cellpadding='8'>
              <tr>
                <th colspan='9'>Preview Data</th>
              </tr>
              <tr>
                <th>Tanggal</th>
                <th>Kategori</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Ayat</th>
                <th>Tag</th>
                <th>Foto Link</th>
                <th>Admin</th>
              </tr>";
              
              $numrow = 1;
              $kosong = 0;

              foreach($sheet as $row){ 
                $tanggal_ar = $row['A']; 
                $id_kat = $row['B']; 
                $judul_ar = $row['C']; 
                $isi_ar = $row['D'];
                $ayat_ar = $row['E']; 
                $id_tag = $row['F']; 
                $foto_ar = $row['G'];
                $id_adm = $row['H'];

                
                if(empty($tanggal_ar) && empty($id_kat) && empty($judul_ar) && empty($isi_ar) && empty($ayat_ar) && empty($id_tag) && empty($foto_ar) && empty($id_adm))
                  continue;
                
                if($numrow > 1){
                  $tanggal_ar_td = ( ! empty($tanggal_ar))? "" : " style='background: #E07171;'"; 
                  $id_kat_td = ( ! empty($id_kat))? "" : " style='background: #E07171;'"; 
                  $judul_ar_td = ( ! empty($judul_ar))? "" : " style='background: #E07171;'";
                  $isi_ar_td = ( ! empty($isi_ar))? "" : " style='background: #E07171;'"; 
                  $ayat_ar_td = ( ! empty($ayat_ar))? "" : " style='background: #E07171;'"; 
                  $id_tag_td = ( ! empty($id_tag))? "" : " style='background: #E07171;'";
                  $foto_ar_td = ( ! empty($foto_ar))? "" : " style='background: #E07171;'"; 
                  $id_adm_td = ( ! empty($id_adm))? "" : " style='background: #E07171;'"; 
                  
                  if(empty($tanggal_ar) or empty($id_kat) or empty($judul_ar) or empty($isi_ar) or empty($ayat_ar) or empty($id_tag) or empty($foto_ar) or empty($id_adm) ){
                    $kosong++; 
                  }
                  
                  echo "<tr>";
                  echo "<td".$tanggal_ar_td.">".$tanggal_ar."</td>";
                  echo "<td".$id_kat_td.">".$id_kat."</td>";
                  echo "<td".$judul_ar_td.">".$judul_ar."</td>";
                  echo "<td".$isi_ar_td.">".$isi_ar."</td>";
                  echo "<td".$ayat_ar_td.">".$ayat_ar."</td>";
                  echo "<td".$id_tag_td.">".$id_tag."</td>";
                  echo "<td".$foto_ar_td.">".$foto_ar."</td>";
                  echo "<td".$id_adm_td.">".$id_adm."</td>";
                  echo "</tr>";
                }
                
                $numrow++; 
              }
              
              echo "</table>";
              
              if($kosong > 0){
              ?>  
                <script>
                $(document).ready(function(){
                  $("#jumlah_kosong").html('<?php echo $kosong; ?>');
                  
                  $("#kosong").show();
                });
                </script>
              <?php
              }else{ 
                echo "<hr>";
                echo "<button type='submit' name='import'>Import</button>";
                echo "<a href='".site_url("Artikel_import_admin")."'>Cancel</a>";
              }
              
              echo "</form>";
            }
            ?>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php echo $footer; ?>
</div>
<!-- ./wrapper -->

<?php echo $js; ?>

<!-- page script -->
<script src="<?php echo base_url('inti/js/jquery-3.2.1.min.js'); ?>"></script>
  
  <script>
  $(document).ready(function(){
    // Sembunyikan alert validasi kosong
    $("#kosong").hide();
  });
  </script>
</body>
</html>
