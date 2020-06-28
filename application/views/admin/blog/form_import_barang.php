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
        <small>- Import Blog</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Upload</a></li>
        <li class="active">Import Blog</li>
      </ol>
    </section>


     <!-- class="form-group btn btn-primary browse m-l-5" -->
    <!-- Main content -->
    <section class="content">
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
          <form method="post" action="<?php echo site_url("Blog_import_admin/form") ?>" enctype="multipart/form-data">
            <a href="<?php echo base_url("excel/import_data_blog.xlsx"); ?>"class="btn btn-primary"><i class="fa fa-download"></i> Download Format</a><br><br>
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
              
              echo "<form method='post' action='".site_url("Blog_import_admin/import")."'>";
              
              echo "<table border='1' cellpadding='8'>
              <tr>
                <th colspan='9'>Preview Data</th>
              </tr>
              <tr>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Deskripsi</th>
                <th>Kategori</th>
                <th>Quotes</th>
                <th>Quotes Author</th>
                <th>Foto</th>
                <th>Foto 2</th>
                <th>Foto 3</th>
                <th>Foto 4</th>
                <th>Admin Id</th>
                <th>NULL</th>
              </tr>";
              
              $numrow = 1;
              $kosong = 0;

              foreach($sheet as $row){ 
                $judul_blog = $row['A']; 
                $tanggal_blog = $row['B']; 
                $isi_blog = $row['C']; 
                $kategori_blog = $row['D'];
                $quotes_blog = $row['E']; 
                $quotes_author_blog = $row['F']; 
                $img_1_blog = $row['G'];
                $img_2_blog = $row['H'];
                $img_3_blog = $row['I'];
                $img_4_blog = $row['J'];
                $id_adm = $row['K'];
                $NULL = $row['L'];
                
                if(empty($judul_blog) && empty($tanggal_blog) && empty($isi_blog) && empty($kategori_blog) && empty($quotes_blog) && empty($quotes_author_blog) && empty($img_1_blog) && empty($img_2_blog) && empty($img_3_blog) && empty($img_4_blog) && empty($id_adm) && ! empty($NULL))
                  continue;
                
                if($numrow > 1){
                  $judul_blog_td = ( ! empty($judul_blog))? "" : " style='background: #E07171;'"; 
                  $tanggal_blog_td = ( ! empty($tanggal_blog))? "" : " style='background: #E07171;'"; 
                  $isi_blog_td = ( ! empty($isi_blog))? "" : " style='background: #E07171;'";
                  $kategori_blog_td = ( ! empty($kategori_blog))? "" : " style='background: #E07171;'"; 
                  $quotes_blog_td = ( ! empty($quotes_blog))? "" : " style='background: #E07171;'"; 
                  $quotes_author_blog_td = ( ! empty($quotes_author_blog))? "" : " style='background: #E07171;'";
                  $img_1_blog_td = ( ! empty($img_1_blog))? "" : " style='background: #E07171;'"; 
                  $img_2_blog_td = ( ! empty($img_2_blog))? "" : " style='background: #E07171;'"; 
                  $img_3_blog_td = ( ! empty($img_3_blog))? "" : " style='background: #E07171;'"; 
                  $img_4_blog_td = ( ! empty($img_4_blog))? "" : " style='background: #E07171;'"; 
                  $id_adm_td = ( ! empty($id_adm))? "" : " style='background: #E07171;'";
                  $NULL_td = ( empty($NULL))? "" : " style='background: #E07171;'";
                  
                  if(empty($judul_blog) or empty($tanggal_blog) or empty($isi_blog) or empty($kategori_blog) or empty($quotes_blog) or empty($quotes_author_blog) or empty($img_1_blog) or empty($img_2_blog) or empty($img_3_blog) or empty($img_4_blog) or empty($id_adm) or ! empty($NULL)){
                    $kosong++; 
                  }
                  
                  echo "<tr>";
                  echo "<td".$judul_blog_td.">".$judul_blog."</td>";
                  echo "<td".$tanggal_blog_td.">".$tanggal_blog."</td>";
                  echo "<td".$isi_blog_td.">".$isi_blog."</td>";
                  echo "<td".$kategori_blog_td.">".$kategori_blog."</td>";
                  echo "<td".$quotes_blog_td.">".$quotes_blog."</td>";
                  echo "<td".$quotes_author_blog_td.">".$quotes_author_blog."</td>";
                  echo "<td".$img_1_blog_td.">".$img_1_blog."</td>";
                  echo "<td".$img_2_blog_td.">".$img_2_blog."</td>";
                  echo "<td".$img_3_blog_td.">".$img_3_blog."</td>";
                  echo "<td".$img_4_blog_td.">".$img_4_blog."</td>";
                  echo "<td".$id_adm_td.">".$id_adm."</td>";
                  echo "<td".$NULL_td.">".$NULL."</td>";
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
                echo "<a href='".site_url("Blog_import_admin")."'>Cancel</a>";
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
