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
      <h1>Edit Admin</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Edit Admin</li>
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
                    <input name="uname" id="uname" type="text" maxlength="50" class="form-control" value="<?php echo $user['username']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input name="pass" id="pass" type="text" maxlength="16" class="form-control" value="<?php echo $user['password']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input name="fnama" id="fnama" type="text" maxlength="100" class="form-control" value="<?php echo $user['nama_adm']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Foto Link</label>
                    <input name="foto" id="foto" type="text" maxlength="255" class="form-control" value="<?php echo $user['foto_adm']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Moto Admin</label>
                    <input name="moto" id="moto" type="text" maxlength="255" class="form-control" value="<?php echo $user['moto_adm']; ?>" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                    <label>Whatsapp</label>
                    <input name="wa" id="wa" type="number" class="form-control" value="<?php echo $user['whatsapp']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Instagram</label>
                    <input name="ig" id="ig" type="text" maxlength="255" class="form-control" value="<?php echo $user['instagram']; ?>">
                </div>
                <div class="form-group">
                    <label>Facebook</label>
                    <input name="fb" id="fb" type="text" class="form-control" value="<?php echo $user['facebook']; ?>">
                </div>
                <div class="form-group">
                    <label>Twitter</label>
                    <input name="tw" id="tw" type="text" maxlength="255" class="form-control" value="<?php echo $user['twitter']; ?>">
                </div>
                <div class="form-group">
                    <label>Status Aktifasi</label>
                    <input name="active" id="active" type="number" max="2" class="form-control" value="<?php echo $user['active']; ?>" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                    <button class="btn btn-info">Edit</button>
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

<script>
  $(function () {
    $('#idug').val('<?php echo $user['id_ug']; ?>').trigger('change');
  })
</script>
<script src="<?php echo base_url('/inti/admin/js/barang/bootstrap_select.min.js'); ?>"></script>
</body>
</html>
