<!doctype html>
<html>

<head>
    <title></title>
</head>

<body>
    <!-- Untuk Header -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">List Master_access</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= site_url('backend') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Master Access</li>
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
                    <?php echo anchor(site_url('master_access/create'), 'Create', 'class="btn btn-primary"'); ?>
                </div>


                <div class="col-md-1 text-right">
                </div>
                <div class="col-md-3 text-right">
                    <form action="<?php echo site_url('master_access/index'); ?>" class="form-inline" method="get">
                        <div class="input-group">
                            <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                            <span class="input-group-btn">
                                <?php
                                if ($q <> '') {
                                ?>
                                    <a href="<?php echo site_url('master_access'); ?>" class="btn btn-default">Reset</a>
                                <?php
                                }
                                ?>
                                <button class="btn btn-primary" type="submit">Search</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <table class="table table-bordered table-hover table-condensed" style="margin-bottom: 10px">
                <thead class="thead-light">
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nm Access</th>
                        <th class="text-center">Nm Menu</th>
                        <th class="text-center">Note</th>
                        <!-- <th class="text-center">Created At</th>
                                <th class="text-center">Created By</th> -->
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody><?php
                        foreach ($master_access_data as $master_access) {
                        ?>
                        <tr>
                            <td width="80px"><?php echo ++$start ?></td>
                            <td><?php echo $master_access->nm_access ?></td>
                            <td><?php echo $master_access->label ?></td>
                            <td><?php echo $master_access->note ?></td>
                            <!-- <td><?php echo $master_access->created_at ?></td>
                                    <td><?php echo $master_access->created_by ?></td> -->
                            <td style="text-align:center" width="200px">
                                <?php
                                echo anchor(site_url('master_access/read/' . $master_access->id), 'Lihat', 'class="btn btn-xs btn-success"');
                                echo ' | ';
                                echo anchor(site_url('master_access/update/' . $master_access->id), 'Edit', 'class="btn btn-xs btn-warning"');
                                echo ' | ';
                                echo anchor(site_url('master_access/delete/' . $master_access->id), 'Hapus', 'class="btn btn-xs btn-danger" onclick="javascript: return confirm(\'Yakin hapus data?\')"');
                                ?>
                            </td>
                        </tr>

                    <?php
                        }
                    ?>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6">
                    <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
                    <?php echo anchor(site_url('master_access/excel'), 'Excel', 'class="btn btn-primary"'); ?>
                    <?php echo anchor(site_url('master_access/word'), 'Word', 'class="btn btn-primary"'); ?>
                </div>
                <div class="col-md-6 text-right">
                    <?php echo $pagination ?>
                </div>
            </div>
        </div>
    </section>
</body>

</html>