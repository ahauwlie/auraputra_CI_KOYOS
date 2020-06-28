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
    td {
      max-width: 100px;
      overflow: hidden;
      text-overflow: ellipsis;
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
        Data Tables
        <small>- Daftar Artikel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
          <a href="<?php echo site_url("Artikel_import_admin/form") ?>"class="btn btn-primary"><i class="fa fa-plus-circle"></i> Import Artikel</a>
          <table id="productTable" class="table-bordered table-hover" style="table-layout: auto; width: 100%; ">
            <thead>
            <tr>
              <th>Id</th>
              <th>Tanggal</th>
              <th>Kategori</th>
              <th>Judul</th>
              <th>Isi</th>
              <th>Ayat</th>
              <th>Tag</th>
              <th>Foto</th>
              <th>Admin</th>
            </tr>
            </thead>
            <tbody>
              <?php
                if( ! empty($import)){
                  foreach($import as $data){
                    echo "<tr>";
                    echo "<td>".$data->id_ar."</td>";
                    echo "<td>".$data->tanggal_ar."</td>";
                    echo "<td>".$data->id_kat."</td>";
                    echo "<td>".$data->judul_ar."</td>";
                    echo "<td>".$data->isi_ar."</td>";
                    echo "<td>".$data->ayat_ar."</td>";
                    echo "<td>".$data->id_tag."</td>";
                    echo "<td>".$data->foto_ar."</td>";
                    echo "<td>".$data->id_adm."</td>";
                    echo "</tr>";
                  }
                }else{
                  echo "<tr><td colspan='7'>Data tidak ada</td></tr>";
                }
              ?>
            </tbody>
            <tfoot>
            <tr>
              <th>Id</th>
              <th>Tanggal</th>
              <th>Kategori</th>
              <th>Judul</th>
              <th>Isi</th>
              <th>Ayat</th>
              <th>Tag</th>
              <th>Foto</th>
              <th>Admin</th>
            </tr>
            </tfoot>
          </table>
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
<script>
  $(document).ready(function () {
        $('#example2').DataTable({
            dom: 'Bfrtip',
        });
      })
</script>
</body>
</html>
