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
                    <h1 class="m-0"><?php echo $button ?> Master_access </h1>

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
            <form action="<?php echo $action; ?>" method="post">
                <div class="ibox-content">
                    <div class="form-group">
                        <label for="varchar">Nm Access <?php echo form_error('nm_access') ?></label>
                        <input type="text" class="form-control" name="nm_access" id="nm_access" placeholder="Nm Access" value="<?php echo $nm_access; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Pilih Menu <?php echo form_error('nm_menu') ?></label>
                        <select type="text" class="form-control" name="id_menu" id="id_menu" placeholder="Pilih Menu" value="<?php echo $id_kecamatan; ?>" />

                        <option value="<?php echo $id_menu; ?>"><?php echo $id_menu ?></option>

                        <?php foreach ($menu as $row) {
                            if ($row->id_menu == $id_menu) {
                                $selected = "selected";
                            } else {
                                $selected = "";
                            } ?>
                            <option value="<?php echo $row->id_menu; ?>" <?php echo $selected; ?>>
                                <?php echo $row->label ?>
                            </option>
                        <?php }; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="note">Note <?php echo form_error('note') ?></label>
                        <textarea class="form-control" rows="3" name="note" id="note" placeholder="Note"><?php echo $note; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="datetime">Created At <?php echo form_error('created_at') ?></label>
                        <input type="text" class="form-control" name="created_at" id="created_at" placeholder="Created At" value="<?php echo $created_at; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="int">Created By <?php echo form_error('created_by') ?></label>
                        <input type="text" class="form-control" name="created_by" id="created_by" placeholder="Created By" value="<?php echo $created_by; ?>" />
                    </div>
                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
                    <a href="<?php echo site_url('master_access') ?>" class="btn btn-default">Cancel</a>
                </div>
            </form>
        </div>
    </section>
</body>

</html>