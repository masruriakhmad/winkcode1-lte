<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= data_app() ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/AdminLte-3.2.0/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/AdminLte-3.2.0/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/AdminLte-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/AdminLte-3.2.0/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/AdminLte-3.2.0/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/AdminLte-3.2.0/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/AdminLte-3.2.0/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/AdminLte-3.2.0/plugins/summernote/summernote-bs4.min.css">
    <!-- END Admin LTE -->

    <!-- <link href="<?= base_url() ?>assets/vendor/inspinia/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/inspinia/font-awesome/css/font-awesome.css" rel="stylesheet"> -->
    <link href="<?= base_url() ?>assets/vendor/sweetalert/css/sweetalert.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="<?= base_url() ?>assets/vendor/inspinia/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Morris -->
    <link href="<?= base_url() ?>assets/vendor/inspinia/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/datepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet"> -->

    <link href="<?= base_url() ?>assets/vendor/datepicker/css/datepicker3.css" rel="stylesheet">
    <!-- <link href="<?= base_url() ?>assets/vendor/inspinia/css/animate.css" rel="stylesheet"> -->
    <!-- <link href="<?= base_url() ?>assets/vendor/inspinia/css/style.css" rel="stylesheet"> -->
    <link href="<?= base_url() ?>assets/vendor/radiocheck/radiocheck.css" rel="stylesheet">
    <!-- <link href="<?= base_url() ?>assets/vendor/inspinia/css/plugins/iCheck/custom.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/vendor/radiocheck/radioonoff.css" />
    <!-- <link href="<?= base_url() ?>assets/vendor/inspinia/css/animate.css" rel="stylesheet"> -->
    <!-- <script src="<?= base_url() ?>assets/vendor/inspinia/js/jquery-2.1.1.js"></script> -->
    <!-- <script src="<?= base_url() ?>assets/vendor/inspinia/js/bootstrap.min.js"></script> -->
    <style>
        html {
            height: 100% !important;
        }

        body {
            height: 100% !important;
            padding-bottom: 30px;
        }

        .footer {
            position: fixed;
            left: 0;
            right: 0;
            bottom: 0;
        }

        .table-condensed {
            font-size: 13px;
        }
    </style>
</head>
<?php
$CI = &get_instance();
lookup();
//panggil sf_helper
$CI->load->model('Users_model');
// $jml_upload_risalah      = $CI->Upload_risalah_model->total_rows();
// Penarikan jumlah data untuk syarat

// $CI->load->model('Kelengkapan_model');
// $jml_kelengkapan = $CI->Kelengkapan_model->total_rows();

?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div id="wrapper">


        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <!-- <img src="<?= base_url() ?>assets/vendor/AdminLte-3.2.0/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
                <span class="brand-text font-weight-light"><?= data_app() ?></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url() ?>assets/vendor/AdminLte-3.2.0/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?= $CI->Users_model->get_by_id($this->session->userdata('id_user'))->fullname ?></a>
                    </div>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <?php
                    //MENU DARI TABEL sy_menu
                    foreach ($this->db->order_by("order_no", "ASC")->get_where('sy_menu', array('parent' => 0))->result() as $kmenu0 => $vmenu0) { ?>
                        <li class="nav-item menu-open">
                            <a href="<?= base_url() ?><?= $vmenu0->url ?>" class="nav-link">
                                <i class="nav-icon fas <?= $vmenu0->icon ?>"></i>
                                <p><?= $vmenu0->label ?></p>
                                <i class="right fas fa-angle-left"></i>
                            </a>
                            <?php foreach ($this->db->get_where('sy_menu', array('parent' => $vmenu0->id_menu))->result() as $kmenu1 => $vmenu1) { ?>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?= base_url() ?><?= $vmenu1->url ?>" class="nav-link">
                                            <i class="far <?= $vmenu1->icon ?>nav-icon"></i><?= $vmenu1->label ?>
                                            <!-- <span class="label label-primary pull-right">12</span> -->
                                        </a>
                                    </li>
                                </ul>
                            <?php } ?>
                        </li>
                    <?php } ?>
                </ul>
            </nav>
        </aside>
        <!-- END ADMIN LTE -->

        <div class="content-wrapper">
            <div class="col-md-12 table-responsive">
                <?php $this->load->view($content); ?>
            </div>
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong><?= data_app('LEFT_FOOTER'); ?>.&nbsp<a href="https://adminlte.io"><?= data_app('RIGHT_FOOTER'); ?></a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> <?= data_app('VERSION'); ?>
            </div>
        </footer>
        <!-- END FOOTER ADMIN LTE -->

    </div>

    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/vendor/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url() ?>assets/vendor/AdminLTE-3.2.0/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>assets/vendor/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= base_url() ?>assets/vendor/AdminLTE-3.2.0/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?= base_url() ?>assets/vendor/AdminLTE-3.2.0/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?= base_url() ?>assets/vendor/AdminLTE-3.2.0/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/AdminLTE-3.2.0/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= base_url() ?>assets/vendor/AdminLTE-3.2.0/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?= base_url() ?>assets/vendor/AdminLTE-3.2.0/plugins/moment/moment.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/AdminLTE-3.2.0/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= base_url() ?>assets/vendor/AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?= base_url() ?>assets/vendor/AdminLTE-3.2.0/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url() ?>assets/vendor/AdminLTE-3.2.0/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>assets/vendor/AdminLTE-3.2.0/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url() ?>assets/vendor/AdminLTE-3.2.0/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?= base_url() ?>assets/vendor/AdminLTE-3.2.0/dist/js/pages/dashboard.js"></script>
    <!-- END ADMIN LTE -->


    <!-- Mainly scripts -->
    <!-- <script src="<?= base_url() ?>assets/vendor/inspinia/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?= base_url() ?>assets/vendor/inspinia/js/plugins/slimscroll/jquery.slimscroll.min.js"></script> -->

    <!-- Flot -->
    <!-- <script src="<?= base_url() ?>assets/vendor/inspinia/js/plugins/flot/jquery.flot.js"></script>
    <script src="<?= base_url() ?>assets/vendor/inspinia/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/inspinia/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="<?= base_url() ?>assets/vendor/inspinia/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?= base_url() ?>assets/vendor/inspinia/js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="<?= base_url() ?>assets/vendor/inspinia/js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="<?= base_url() ?>assets/vendor/inspinia/js/plugins/flot/curvedLines.js"></script> -->

    <!-- Peity -->
    <!-- <script src="<?= base_url() ?>assets/vendor/inspinia/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/inspinia/js/demo/peity-demo.js"></script> -->

    <!-- Custom and plugin javascript -->
    <!-- <script src="<?= base_url() ?>assets/vendor/inspinia/js/inspinia.js"></script>
    <script src="<?= base_url() ?>assets/vendor/inspinia/js/plugins/pace/pace.min.js"></script> -->

    <!-- jQuery UI -->
    <!-- <script src="<?= base_url() ?>assets/vendor/inspinia/js/plugins/jquery-ui/jquery-ui.min.js"></script> -->

    <!-- Jvectormap -->
    <!-- <script src="<?= base_url() ?>assets/vendor/inspinia/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/inspinia/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script> -->
    <script src="<?= base_url() ?>assets/vendor/sweetalert/js/sweetalert.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/datepicker/js/bootstrap-datepicker.js"></script>

    <!-- Sparkline -->
    <!-- <script src="<?= base_url() ?>assets/vendor/inspinia/js/plugins/sparkline/jquery.sparkline.min.js"></script> -->

    <!-- Sparkline demo data  -->
    <!-- <script src="<?= base_url() ?>assets/vendor/inspinia/js/demo/sparkline-demo.js"></script> -->

    <!-- ChartJS-->
    <!-- <script src="<?= base_url() ?>assets/vendor/inspinia/js/plugins/chartJs/Chart.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/inspinia/js/plugins/toastr/toastr.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/inspinia/js/plugins/iCheck/icheck.min.js"></script> -->
    <script src="<?= base_url() ?>assets/js/sf.js"></script>

    <script>
        $(document).ready(function() {

            // $(".m-t").iCheck();
            //      $('input').iCheck({
            //     checkboxClass: 'icheckbox_minimal-grey',
            //     radioClass: 'iradio_minimal-grey'
            // });
            // $('input.timepicker').timepicker({ timeFormat: 'h:mm'});
            $('input.datepicker').datepicker({
                dateFormat: 'yy/mm/dd'
            });
            // $('input.datepicker-ym').datepicker({ dateFormat: 'mm/yy'});


        });
    </script>
</body>

</html>