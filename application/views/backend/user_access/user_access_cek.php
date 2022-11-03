<!doctype html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/vendor/radiocheck/radioonoff.css" />
</head>

<body>
    <!-- Untuk Header -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">List User_access</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= site_url('backend') ?>">Home</a></li>
                        <li class="breadcrumb-item active">User_access</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <?php if ($this->session->userdata('message') != '') { ?>
                <div class="alert alert-success alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <?= $this->session->userdata('message') ?> <a class="alert-link" href="#"></a>
                </div>
            <?php } ?>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row" style="margin-bottom: 10px">
                <div class="col-md-8">
                </div>


                <div class="col-md-1 text-right">
                </div>
                <div class="col-md-3 text-right">
                    <form action="<?php echo site_url('user_access/index'); ?>" class="form-inline" method="get">
                        <div class="input-group">
                            <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                            <span class="input-group-btn">
                                <?php
                                if ($q <> '') {
                                ?>
                                    <a href="<?php echo site_url('user_access'); ?>" class="btn btn-default">Reset</a>
                                <?php
                                }
                                ?>
                                <button class="btn btn-primary" type="submit">Search</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-condensed" style="margin-bottom: 10px">
                    <thead class="thead-light">
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">id_akses</th>
                            <th class="text-center">User Group</th>
                            <th class="text-center">Nama Akses</th>
                            <th class="text-center">Nama Menu</th>
                            <th class="text-center">Note</th>
                            <th class="text-center">Status Aktif</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($user_access_data as $user_access) {
                        ?>
                            <tr>
                                <td width="80px"><?php echo ++$start ?></td>
                                <td><?php echo $user_access->id ?></td>
                                <td><?php echo $user_access->group_name ?></td>
                                <td><?php echo $user_access->nm_access ?></td>
                                <td><?php echo $user_access->id_menu ?></td>
                                <td><?php echo $user_access->note ?></td>
                                <td align="center">
                                    <!-- Rounded switch -->
                                    <label class="switch">

                                        <!-- parameter function js aktifkan(id_master_akses,id_group,id_master) -->
                                        <input type="checkbox" id="cek-<?= $user_access->id ?>" onclick="aktifkan(<?= $user_access->id ?>,<?= $user_access->id_user_group ?>,<?= $user_access->id_master_access ?>,<?= $user_access->id_menu ?>)" <?= $this->User_access_model->get_isallow($user_access->id_user_group, $user_access->id_master_access) ? "checked" : ""; ?> />

                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>

                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
                    <?php echo anchor(site_url('user_access/excel'), 'Excel', 'class="btn btn-primary"'); ?>
                </div>
                <div class="col-md-6 text-right">
                    <?php echo $pagination ?>
                </div>
            </div>
        </div>
    </section>
</body>
<script type="text/javascript">
    function aktifkan(iduseraccess, idgroup, kdmasteraccess) {
        if ($('#cek-' + iduseraccess).is(':checked')) {
            ischeck = 1;
        } else {
            ischeck = 0;
        }
        //alert(ischeck);
        $.post("<?= base_url() . 'user_access/aktifkan' ?>", {
            iduseraccess: iduseraccess,
            idgroup: idgroup,
            kdmasteraccess: kdmasteraccess,
            ischeck: ischeck
        }, function(data, textStatus, xhr) {
            toastr.success("Telah diaktifkan", iduseraccess);
        });
    }
</script>

</html>