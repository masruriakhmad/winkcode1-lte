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
                    <h1 class="m-0">List User_group</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= site_url('backend') ?>">Home</a></li>
                        <li class="breadcrumb-item active">User_group</li>
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
                    <?php echo anchor(site_url('user_group/create'), 'Create', 'class="btn btn-primary"'); ?>
                </div>


                <div class="col-md-1 text-right">
                </div>
                <div class="col-md-3 text-right">
                    <form action="<?php echo site_url('user_group/index'); ?>" class="form-inline" method="get">
                        <div class="input-group">
                            <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                            <span class="input-group-btn">
                                <?php
                                if ($q <> '') {
                                ?>
                                    <a href="<?php echo site_url('user_group'); ?>" class="btn btn-default">Reset</a>
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
                        <th class="text-center">Group Name</th>
                        <th class="text-center">Note</th>
                        <th class="text-center">Created By</th>
                        <th class="text-center">Created At</th>
                        <th class="text-center">Updated By</th>
                        <th class="text-center">Updated At</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody><?php
                        foreach ($user_group_data as $user_group) {
                        ?>
                        <tr>
                            <td width="80px"><?php echo ++$start ?></td>
                            <td><?php echo $user_group->group_name ?></td>
                            <td><?php echo $user_group->note ?></td>
                            <td><?php echo $user_group->created_by ?></td>
                            <td><?php echo tanggal_indo(date_format(date_create($user_group->created_at), "Y-m-d")); ?></td>
                            <td><?php echo $user_group->updated_by ?></td>
                            <td><?php echo $user_group->updated_at ?></td>
                            <td style="text-align:center" width="200px">
                                <?php
                                echo anchor(site_url('user_group/read/' . $user_group->id), 'Lihat', 'class="btn btn-xs btn-success"');
                                echo ' | ';
                                echo anchor(site_url('user_group/update/' . $user_group->id), 'Edit', 'class="btn btn-xs btn-warning"');
                                echo ' | ';
                                echo anchor(site_url('user_group/delete/' . $user_group->id), 'Hapus', 'class="btn btn-xs btn-danger" onclick="javascript: return confirm(\'Yakin hapus data?\')"');
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
                    <?php echo anchor(site_url('user_group/excel'), 'Excel', 'class="btn btn-primary"'); ?>
                </div>
                <div class="col-md-6 text-right">
                    <?php echo $pagination ?>
                </div>
            </div>
        </div>
    </section>
</body>

</html>