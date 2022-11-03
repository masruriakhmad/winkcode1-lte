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
                    <h1 class="m-0">Kategori Read</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= site_url('backend') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Kategori</li>
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
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <td>Cat Name</td>
                        <td><?php echo $cat_name; ?></td>
                    </tr>
                    <tr>
                        <td>Note</td>
                        <td><?php echo $note; ?></td>
                    </tr>
                    <tr>
                        <td>For Modul</td>
                        <td><?php echo $for_modul; ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><a href="<?php echo site_url('kategori') ?>" class="btn btn-default">Cancel</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
</body>

</html>