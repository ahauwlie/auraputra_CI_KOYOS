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
      <h1>Detail Blog</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Detail Blog</li>
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
                    <p class="form-control-static"><?php echo $blog['judul_blog']; ?></p>
                </div>
                <div class="form-group">
                    <label>Isi</label>
                    <p class="form-control-static"><?php echo $blog['isi_blog']; ?></p>
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <p class="form-control-static"><?php echo $blog['tanggal_blog']; ?></p>
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <p class="form-control-static"><?php echo $blog['kategori_blog']; ?></p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label>Admin</label>
                  <p class="form-control-static"><?php echo $blog['id_adm']; ?></p>
                </div>
                <div class="form-group p-t-4">
                  <label>Quotes</label>
                  <p class="form-control-static"><?php echo $blog['quotes_blog']; ?></p>
                </div>
                <div class="form-group p-t-4">
                  <label>Quotes Author</label>
                  <p class="form-control-static"><?php echo $blog['quotes_author_blog']; ?></p>
                </div>
                <div class="form-group p-t-4">
                  <label>Foto 1</label>
                  <p class="form-control-static"><?php echo $blog['img_1_blog']; ?></p>
                  <img src="<?php echo $blog['img_1_blog']; ?>" style="width: 300px;">
                </div>
                <div class="form-group p-t-4">
                  <label>Foto 2</label>
                  <p class="form-control-static"><?php echo $blog['img_2_blog']; ?></p>
                  <img src="<?php echo $blog['img_2_blog']; ?>" style="width: 300px;">
                </div>
                <div class="form-group p-t-4">
                  <label>Foto 3</label>
                  <p class="form-control-static"><?php echo $blog['img_3_blog']; ?></p>
                  <img src="<?php echo $blog['img_3_blog']; ?>" style="width: 300px;">
                </div>
                <div class="form-group p-t-4">
                  <label>Foto 4</label>
                  <p class="form-control-static"><?php echo $blog['img_4_blog']; ?></p>
                  <img src="<?php echo $blog['img_4_blog']; ?>" style="width: 300px;">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                    <a href="<?php echo site_url('Blog_admin/edit/').$blog['id_blog']; ?>" class="btn btn-info">Edit</a>
                    <a href="<?php echo site_url('Blog_admin/index'); ?>" class="btn btn-danger">Batal</a>
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
