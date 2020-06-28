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
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php echo $preloader; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Detail Artikel</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Detail Artikel</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
          <form method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                    <label>Judul</label>
                    <p class="form-control-static"><?php echo $artikel['judul_ar']; ?></p>
                </div>
                <div class="form-group">
                    <label>Isi</label>
                    <p class="form-control-static"><?php echo $artikel['isi_ar']; ?></p>
                </div>
                <div class="form-group">
                    <label>Ayat</label>
                    <p class="form-control-static"><?php echo $artikel['ayat_ar']; ?></p>
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <p class="form-control-static"><?php echo $artikel['tanggal_ar']; ?></p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label>Tag</label>
                  <p class="form-control-static"><?php echo $artikel['id_tag']; ?></p>
                </div>
                <div class="form-group p-t-4">
                  <label>Kategori</label>
                  <p class="form-control-static"><?php echo $artikel['id_kat']; ?></p>
                </div>
                <div class="form-group p-t-4">
                  <label>Foto</label>
                  <p class="form-control-static"><?php echo $artikel['foto_ar']; ?></p>
                  <img src="<?php echo $artikel['foto_ar']; ?>" style="width: 300px;">
                </div>
                <div class="form-group p-t-4">
                  <label>Admin</label>
                  <p class="form-control-static"><?php echo $artikel['id_adm']; ?></p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                    <a href="<?php echo site_url('Artikel_admin/edit/').$artikel['id_ar']; ?>" class="btn btn-info">Edit</a>
                    <a href="<?php echo site_url('Artikel_admin/index'); ?>" class="btn btn-danger">Batal</a>
                </div>
              </div>
            </div>
          </form>
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
<script src="<?php echo base_url('/inti/admin/js/barang/bootstrap_select.min.js'); ?>"></script>
</body>
</html>
