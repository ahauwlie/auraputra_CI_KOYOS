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
      <h1>Edit Artikel</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Edit Artikel</li>
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
                    <label>Judul Artikel</label>
                    <input name="judul" id="judul" type="text" maxlength="100" class="form-control" value="<?php echo $artikel['judul_ar']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Isi Artikel</label>
                    <input name="isi" id="isi" type="text" class="form-control" value="<?php echo $artikel['isi_ar']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Ayat Artikel</label>
                    <input name="ayat" id="ayat" type="text" class="form-control" value="<?php echo $artikel['ayat_ar']; ?>" required>
                </div>
                <!-- <div class="form-group">
                    <label>Tipe Barang</label>
                    <select name="tipe" id="tipe" class="form-control select-search m-t-4" required>
                      <option value="" disabled>Pilih kategori...</option>
                      <option value="Kopi">Kopi</option>
                      <option value="Filter">Filter</option>
                      <option value="Kopi_1kg">Kopi_1kg</option>
                      <option value="Biji_kopi">Biji_kopi</option>
                      <option value="Alat_seduh">Alat_seduh</option>
                      <option value="Mesin_Kopi">Mesin_Kopi</option>
                    </select>
                </div> -->
                <div class="form-group">
                    <label>Tanggal</label>
                    <input name="tanggal" id="tanggal" type="date" class="form-control" value="<?php echo $artikel['tanggal_ar']; ?>" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                    <label>Kategori</label>
                    <input name="kat" id="kat" class="form-control" value="<?php echo $artikel['id_kat']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Tag</label>
                    <input name="tag" id="tag" class="form-control" value="<?php echo $artikel['id_tag']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Foto Link</label>
                    <input name="foto" id="foto" class="form-control" maxlength="255" value="<?php echo $artikel['foto_ar']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Admin</label>
                    <input name="admin" id="admin" class="form-control" value="<?php echo $artikel['id_adm']; ?>" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                    <button class="btn btn-info">Edit</button>
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

<!-- <script>
  $(function () {
    $('#tipe').val('<?php echo $artikel['tipe_pr']; ?>').trigger('change');
    $('#tag').val('<?php echo $artikel['tag_pr']; ?>').trigger('change');
  })
</script> -->
<script src="<?php echo base_url('/inti/admin/js/barang/bootstrap_select.min.js'); ?>"></script>
</body>
</html>
