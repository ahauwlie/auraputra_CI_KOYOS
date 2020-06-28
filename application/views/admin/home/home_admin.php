<?php
	/**
	 * Created by PhpStorm.
	 * User: Hauw
	 * Date: 9/26/2018
	 * Time: 9:11 AM
	 */
	defined('BASEPATH') OR exit('No direct script access allowed');
	?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aura Putra Wijaya</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php echo $css; ?>
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <?php echo $preloader; ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>
                    <?php foreach ($sum_project as $row) : ?>
                      <span><?=  $row->num_of_time  ?></span>
                    <?php endforeach; ?>
                  </h3>
                  <p>Jumlah Total Artikel Yang Ada</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href=" " class="small-box-footer">Telusuri <i class="fa fa-arrow-circle-right"></i></a>
                <!-- <?php echo site_url('Barang_admin/index') ?> -->
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>
                    <?php foreach ($sum_user as $row) : ?>
                      <span><?=  $row->num_of_time  ?></span>
                    <?php endforeach; ?>
                  </h3>
                  <p>User Yang Terdaftar</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="<?php echo site_url('User_manage_admin/index') ?>" class="small-box-footer">Telusuri <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
          <!-- /.row -->

          <!-- Main row -->
          <div class="row">
            <section class="col-lg-5 connectedSortable">
              <!-- Calendar -->
              <div class="box box-solid bg-green-gradient">
                <div class="box-header">
                  <i class="fa fa-calendar"></i>
                  <h3 class="box-title">Calendar</h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <!-- button with a dropdown -->

                    <!-- <div class="btn-group">
                      <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bars"></i></button>
                      <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="#">Add new event</a></li>
                        <li><a href="#">Clear events</a></li>
                        <li class="divider"></li>
                        <li><a href="#">View calendar</a></li>
                      </ul>
                    </div> -->
                    
                    <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                  </div>
                  <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <div id="calendar" style="width: 100%"></div>
                </div>
                <!-- /.box-body -->
              </div>
            </section>
            <!-- right col -->
          </div>
          <!-- /.row (main row) -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <?php echo $footer; ?>
    </div>
    <!-- ./wrapper -->
    <?php echo $js; ?>
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
  </body>
</html>
