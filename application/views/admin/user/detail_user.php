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
      <h1>Detail Admin</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Detail Admin</li>
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
                    <label>Email</label>
                    <p class="form-control-static"><?php echo $user['username']; ?></p>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <p class="form-control-static"><?php echo $user['password']; ?></p>
                </div>
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <p class="form-control-static"><?php echo $user['nama_adm']; ?></p>
                </div>
                <div class="form-group">
                    <label>Foto Admin</label>
                    <p class="form-control-static"><?php echo $user['foto_adm']; ?></p>
                    <img src="<?php echo $user['foto_adm']; ?>">
                </div>
                <div class="form-group">
                    <label>Moto Admin</label>
                    <p class="form-control-static"><?php echo $user['moto_adm']; ?></p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                    <label>Whatsapp</label>
                    <p class="form-control-static"><?php echo $user['whatsapp']; ?></p>
                </div>
                <div class="form-group">
                    <label>Instagram</label>
                    <p class="form-control-static"><?php echo $user['instagram']; ?></p>
                </div>
                <div class="form-group">
                    <label>Facebook</label>
                    <p class="form-control-static"><?php echo $user['facebook']; ?></p>
                </div>
                <div class="form-group">
                    <label>Twitter</label>
                    <p class="form-control-static"><?php echo $user['twitter']; ?></p>
                </div>
                <div class="form-group">
                    <label>Status Aktifasi</label>
                    <p class="form-control-static"><?php echo $user['active']; ?></p>
                </div>
              </div>
            </div>
            <div class="form-group">
              <a href="<?php echo site_url('User_manage_admin/edit/').$user['id_adm']; ?>" class="btn btn-info">Edit</a>
              <a href="<?php echo site_url('User_manage_admin/index'); ?>" class="btn btn-danger">Batal</a>
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
