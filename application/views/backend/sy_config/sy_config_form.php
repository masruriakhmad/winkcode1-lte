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
                    <h1 class="m-0"><?php echo $button ?> Sy_config </h1>

                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= site_url('backend') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Sy_config</li>
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
                        <label for="varchar">Conf Name <?php echo form_error('conf_name') ?></label>
                        <input type="text" class="form-control" name="conf_name" id="conf_name" placeholder="Conf Name" value="<?php echo $conf_name; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="conf_val">Conf Val <?php echo form_error('conf_val') ?></label>
                        <textarea class="form-control" rows="3" name="conf_val" id="conf_val" placeholder="Conf Val"><?php echo $conf_val; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="note">Note <?php echo form_error('note') ?></label>
                        <textarea class="form-control" rows="3" name="note" id="note" placeholder="Note"><?php echo $note; ?></textarea>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
                    <a href="<?php echo site_url('sy_config') ?>" class="btn btn-default">Cancel</a>
                </div>
            </form>
        </div>
    </section>
</body>

</html>