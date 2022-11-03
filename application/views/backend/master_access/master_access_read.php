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
                    <h1 class="m-0">Master_access Read</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= site_url('backend') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Master_access</li>
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
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <table class="table">
                <tr>
                    <td>Nm Access</td>
                    <td><?php echo $nm_access; ?></td>
                </tr>
                <tr>
                    <td>Note</td>
                    <td><?php echo $note; ?></td>
                </tr>
                <tr>
                    <td>Created At</td>
                    <td><?php echo $created_at; ?></td>
                </tr>
                <tr>
                    <td>Created By</td>
                    <td><?php echo $created_by; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td><a href="<?php echo site_url('master_access') ?>" class="btn btn-default">Cancel</a></td>
                </tr>
            </table>
        </div>
    </section>
</body>

</html>