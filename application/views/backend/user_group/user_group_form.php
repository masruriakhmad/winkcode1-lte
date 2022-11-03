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
                    <h1 class="m-0"><?php echo $button ?> User_group </h1>

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

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <form action="<?php echo $action; ?>" method="post">
                <div class="ibox-content">
                    <div class="form-group">
                        <label for="varchar">Group Name <?php echo form_error('group_name') ?></label>
                        <input type="text" class="form-control" name="group_name" id="group_name" placeholder="Group Name" value="<?php echo $group_name; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="note">Note <?php echo form_error('note') ?></label>
                        <textarea class="form-control" rows="3" name="note" id="note" placeholder="Note"><?php echo $note; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="int">Created By <?php echo form_error('created_by') ?></label>
                        <input type="text" class="form-control" name="created_by" id="created_by" placeholder="Created By" value="<?php echo $created_by; ?>" readonly />
                    </div>
                    <div class="form-group">
                        <label for="datetime">Created At <?php echo form_error('created_at') ?></label>
                        <input type="text" class="form-control" name="created_at" id="created_at" placeholder="Created At" value="<?php echo $created_at; ?>" readonly />
                    </div>
                    <div class="form-group">
                        <label for="int">Updated By <?php echo form_error('updated_by') ?></label>
                        <input type="text" class="form-control" name="updated_by" id="updated_by" placeholder="Updated By" value="<?php echo $updated_by; ?>" readonly />
                    </div>
                    <div class="form-group">
                        <label for="datetime">Updated At <?php echo form_error('updated_at') ?></label>
                        <input type="text" class="form-control" name="updated_at" id="updated_at" placeholder="Updated At" value="<?php echo $updated_at; ?>" readonly />
                    </div>
                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
                    <a href="<?php echo site_url('user_group') ?>" class="btn btn-default">Cancel</a>
                </div>
            </form>
        </div>
    </section>
</body>

</html>