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

    <!-- <link href="<?= base_url() ?>assets/vendor/inspinia/css/bootstrap.min.css" rel="stylesheet">-->
    <!-- <link href="<?= base_url() ?>assets/vendor/inspinia/font-awesome/css/font-awesome.css" rel="stylesheet"> -->
    <!-- <link href="<?= base_url() ?>assets/vendor/sweetalert/css/sweetalert.css" rel="stylesheet"> -->

    <!-- Toastr style -->
    <!-- <link href="<?= base_url() ?>assets/vendor/inspinia/css/plugins/toastr/toastr.min.css" rel="stylesheet"> -->

    <!-- Morris -->
    <!-- <link href="<?= base_url() ?>assets/vendor/inspinia/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet"> -->
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
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div> -->

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
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
                <li class="nav-item dropdown show">
                    <a class="nav-link align-items-center" data-toggle="dropdown" href="#" aria-expanded="true">
                        <span class="mx-2"><?php echo $this->session->userdata('fullname') ?></span>

                        <!-- Default Profile Picture User -->
                        <img src="https://data.perpusnas.go.id/assets/img/default-user.png" class="img-circle border-gray" height="30px" width="30px" alt="User">
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
                        <span class="dropdown-item dropdown-header">
                            <?php echo $this->session->userdata('email') ?> </span>
                        <div class="dropdown-divider"></div>
                        <a href="/profile" class="dropdown-item">
                            <i class="fas fa-user mr-2"></i> Profil
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="<?php base_url() ?>auth/logout" class="dropdown-item">
                            <i class="fas fa-sign-out-alt mr-2"></i> Keluar
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo ok-->
            <a href="index3.html" class="brand-link">
                <img src="<?= base_url() ?>assets/vendor/AdminLte-3.2.0/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <br>
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
                            <li class="nav-item">
                                <a href="<?= base_url() ?><?= $vmenu0->url ?>" class="nav-link">
                                    <i class="nav-icon fas <?= $vmenu0->icon ?>"></i>
                                    <p><?= $vmenu0->label ?></p>
                                    <!-- <i class="right fas fa-angle-left"></i> -->
                                </a>
                                <?php foreach ($this->db->get_where('sy_menu', array('parent' => $vmenu0->id_menu))->result() as $kmenu1 => $vmenu1) { ?>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="<?= base_url() ?><?= $vmenu1->url ?>" class="nav-link">
                                                <i class="far <?= $vmenu1->icon ?> nav-icon"></i><?= $vmenu1->label ?>
                                                <!-- <span class="label label-primary pull-right">12</span> -->
                                            </a>
                                        </li>
                                    </ul>
                                <?php } ?>
                            </li>
                        <?php } ?>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END ADMIN LTE  SIDE-->

        <!-- DYNAMIC CONTENT-->
        <div class="content-wrapper">
            <?php $this->load->view($content); ?>
            <div class="col-md-12">
                <br>
            </div>
        </div>

        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong><?= data_app('LEFT_FOOTER'); ?>.&nbsp<a href="https://adminlte.io"><?= data_app('RIGHT_FOOTER'); ?></a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-block">
                <b>Version</b> <?= data_app('VERSION'); ?>
            </div>
        </footer>
        <!-- END FOOTER ADMIN LTE -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark" style="display: none;">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane" id="control-sidebar-home-tab">
                    <h3 class="control-sidebar-heading">Recent Activity</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                    <p>Will be 23 on April 24th</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-user bg-yellow"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                    <p>New phone +1(800)555-1234</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                    <p>nora@example.com</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-file-code-o bg-green"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                    <p>Execution time 5 seconds</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                    <h3 class="control-sidebar-heading">Tasks Progress</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Custom Template Design
                                    <span class="label label-danger pull-right">70%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Update Resume
                                    <span class="label label-success pull-right">95%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Laravel Integration
                                    <span class="label label-warning pull-right">50%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Back End Framework
                                    <span class="label label-primary pull-right">68%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                </div>
                <!-- /.tab-pane -->
                <!-- Stats tab content -->
                <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">
                    <form method="post">
                        <h3 class="control-sidebar-heading">General Settings</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Report panel usage
                                <input type="checkbox" class="pull-right" checked>
                            </label>

                            <p>
                                Some information about this general settings option
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Allow mail redirect
                                <input type="checkbox" class="pull-right" checked>
                            </label>

                            <p>
                                Other sets of options are available
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Expose author name in posts
                                <input type="checkbox" class="pull-right" checked>
                            </label>

                            <p>
                                Allow the user to show his name in blog posts
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <h3 class="control-sidebar-heading">Chat Settings</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Show me as online
                                <input type="checkbox" class="pull-right" checked>
                            </label>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Turn off notifications
                                <input type="checkbox" class="pull-right">
                            </label>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Delete chat history
                                <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                            </label>
                        </div>
                        <!-- /.form-group -->
                    </form>
                </div>
                <!-- /.tab-pane -->
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>


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