<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Data Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php echo $css; ?>
  <link href="<?php echo base_url('assets/css/admin/sweetalert.css'); ?>" rel="stylesheet">
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
        <small>- Import Project</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Upload</a></li>
        <li class="active">Import Project</li>
      </ol>
    </section>


     <!-- class="form-group btn btn-primary browse m-l-5" -->
    <!-- Main content -->
    <section class="content">
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
          <form method="post" action="<?php echo site_url("Project_import_admin/form") ?>" enctype="multipart/form-data">
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
              
              echo "<form method='post' action='".site_url("Project_import_admin/import")."'>";
              
              echo "<table border='1' cellpadding='8'>
              <tr>
                <th colspan='9'>Preview Data</th>
              </tr>
              <tr>
                <th>Kategori</th>
                <th>Judul</th>
                <th>Mini Text</th>
                <th>Tanggal</th>
                <th>Admin_id</th>
                <th>Nama Client</th>
                <th>Lokasi</th>
                <th>Foto</th>
                <th>Foto 2</th>
                <th>Foto 3</th>
                <th>Foto 4</th>
                <th>Deskripsi</th>
              </tr>";
              
              $numrow = 1;
              $kosong = 0;

              foreach($sheet as $row){ 
                $kategory_pro = $row['A']; 
                $judul_pro = $row['B']; 
                $mini_text_pro = $row['C']; 
                $tanggal_pro = $row['D'];
                $id_adm = $row['E']; 
                $nama_client_pro = $row['F']; 
                $lokasi_pro = $row['G'];
                $img_1_pro = $row['H'];
                $img_2_pro = $row['I'];
                $img_3_pro = $row['J'];
                $img_4_pro = $row['K'];
                $isi_pro = $row['L'];
                
                if(empty($kategory_pro) && empty($judul_pro) && empty($mini_text_pro) && empty($tanggal_pro) && empty($id_adm) && empty($nama_client_pro) && empty($lokasi) && empty($img_1_pro) && empty($img_2_pro) && empty($img_3_pro) && empty($img_4_pro) && empty($isi_pro))
                  continue;
                
                if($numrow > 1){
                  $kategory_pro_td = ( ! empty($kategory_pro))? "" : " style='background: #E07171;'"; 
                  $judul_pro_td = ( ! empty($judul_pro))? "" : " style='background: #E07171;'"; 
                  $mini_text_pro_td = ( ! empty($mini_text_pro))? "" : " style='background: #E07171;'";
                  $tanggal_pro_td = ( ! empty($tanggal_pro))? "" : " style='background: #E07171;'"; 
                  $id_adm_td = ( ! empty($id_adm))? "" : " style='background: #E07171;'"; 
                  $nama_client_pro_td = ( ! empty($nama_client_pro))? "" : " style='background: #E07171;'";
                  $lokasi_pro_td = ( ! empty($lokasi_pro))? "" : " style='background: #E07171;'"; 
                  $img_1_pro_td = ( ! empty($img_1_pro))? "" : " style='background: #E07171;'"; 
                  $img_2_pro_td = ( ! empty($img_2_pro))? "" : " style='background: #E07171;'"; 
                  $img_3_pro_td = ( ! empty($img_3_pro))? "" : " style='background: #E07171;'"; 
                  $img_4_pro_td = ( ! empty($img_4_pro))? "" : " style='background: #E07171;'"; 
                  $isi_pro_td = ( ! empty($isi_pro))? "" : " style='background: #E07171;'"; 
                  
                  if(empty($kategory_pro) or empty($judul_pro) or empty($mini_text_pro) or empty($tanggal_pro) or empty($id_adm) or empty($nama_client_pro) or empty($lokasi_pro) or empty($img_1_pro) or empty($img_2_pro) or empty($img_3_pro) or empty($img_4_pro) or empty($isi_pro)){
                    $kosong++; 
                  }
                  
                  echo "<tr>";
                  echo "<td".$kategory_pro_td.">".$kategory_pro."</td>";
                  echo "<td".$judul_pro_td.">".$judul_pro."</td>";
                  echo "<td".$mini_text_pro_td.">".$mini_text_pro."</td>";
                  echo "<td".$tanggal_pro_td.">".$tanggal_pro."</td>";
                  echo "<td".$id_adm_td.">".$id_adm."</td>";
                  echo "<td".$nama_client_pro_td.">".$nama_client_pro."</td>";
                  echo "<td".$lokasi_pro_td.">".$lokasi_pro."</td>";
                  echo "<td".$img_1_pro_td.">".$img_1_pro."</td>";
                  echo "<td".$img_2_pro_td.">".$img_2_pro."</td>";
                  echo "<td".$img_3_pro_td.">".$img_3_pro."</td>";
                  echo "<td".$img_4_pro_td.">".$img_4_pro."</td>";
                  echo "<td".$isi_pro_td.">".$isi_pro."</td>";
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
                echo "<a href='".site_url("Project_import_admin")."'>Cancel</a>";
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
<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
  
  <script>
  $(document).ready(function(){
    // Sembunyikan alert validasi kosong
    $("#kosong").hide();
  });
  </script>
</body>
</html>
