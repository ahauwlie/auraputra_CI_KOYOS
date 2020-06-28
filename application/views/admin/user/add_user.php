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
      <h1>Tambah Admin Baru</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Tambah Admin Baru</li>
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
                    <input name="uname" id="uname" type="text" maxlength="50" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input name="pass" id="pass" type="password" maxlength="16" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input name="fnama" id="fnama" type="text" maxlength="100" class="form-control" required>
                </div>                
                <div class="form-group">
                    <label>Upload foto</label>
                    <input name="image" type="file">
                    atau<br>
                    <label>Link Foto</label>
                    <input name="foto" id="foto" type="text" maxlength="255" class="form-control">
                    *wajib di isi salah 1nya, baik upload atau link*
                </div>
                <div class="form-group">
                    <label>Moto</label>
                    <input name="moto" id="moto" type="text" max="255" class="form-control" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                    <label>Whatsapp</label>
                    <input name="wa" id="wa" maxlength="15" type="number" class="form-control" required>
                </div>
                <div class="form-group p-t-4">
                    <label>Instagram</label>
                    <input name="ig" id="ig" type="text" maxlength="255" class="form-control">
                </div>
                <div class="form-group p-t-4">
                    <label>Facebook</label>
                    <input name="fb" id="fb" type="text" class="form-control">
                </div>
                <div class="form-group p-t-4">
                    <label>Twitter</label>
                    <input name="tw" id="tw" type="text" maxlength="255" class="form-control">
                </div>
                <div class="form-group p-t-4">
                    <label>Aktifasi</label>
                    <input name="active" id="active" type="number" maxlength="1" class="form-control" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                    <button class="btn btn-info">Tambah</button>
                    <a href="<?php echo site_url('User_manage_admin/index'); ?>" class="btn btn-danger">Batal</a>
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
