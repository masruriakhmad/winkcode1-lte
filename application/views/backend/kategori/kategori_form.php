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
                    <h1 class="m-0"><?php echo $button ?> Kategori </h1>

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
            <form action="<?php echo $action; ?>" method="post">
                <div class="ibox-content">
                    <div class="form-group">
                        <label for="varchar">ID Kategori <?php echo form_error('cat_name') ?></label>
                        <input type="text" class="form-control" name="id_kat" id="id_kat" placeholder="ID Kategori" value="<?php echo $id_kat; ?>" readonly />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Nama Kategori <?php echo form_error('cat_name') ?></label>
                        <input type="text" class="form-control" name="cat_name" id="cat_name" placeholder="Cat Name" value="<?php echo $cat_name; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="note">Note <?php echo form_error('note') ?></label>
                        <textarea class="form-control" rows="3" name="note" id="note" placeholder="Note"><?php echo $note; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="varchar">For Modul <?php echo form_error('for_modul') ?></label>
                        <?= form_dropdown('for_modul', $data_for_modul, $for_modul, ["class" => "form-control", "id" => "for_modul"]) ?>
                    </div>
                    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
                    <a href="<?php echo site_url('kategori') ?>" class="btn btn-default">Cancel</a>
                </div>
            </form>
        </div>
    </section>
</body>

</html>