<?php

$string = "<!doctype html>
<html>
    <head>
        <title></title>
    </head>
    <body>
    <!-- Untuk Header -->
    <!-- Content Header (Page header) -->
    <div class=\"content-header\">
        <div class=\"container-fluid\">
            <div class=\"row mb-2\">
                <div class=\"col-sm-6\">
                    <h1 class=\"m-0\"> Detail " . ucfirst($table_name) . "</h1>
                </div><!-- /.col -->
                <div class=\"col-sm-6\">
                    <ol class=\"breadcrumb float-sm-right\">
                        <li class=\"breadcrumb-item\"><a href=\"<?= site_url('backend') ?>\">Home</a></li>
                        <li class=\"breadcrumb-item active\">" . ucfirst($table_name) . "</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <?php if (\$this->session->userdata('message') != '') { ?>
                <div class=\"alert alert-success alert-dismissable\">
                    <button aria-hidden=\"true\" data-dismiss=\"alert\" class=\"close\" type=\"button\">×</button>
                    <?= \$this->session->userdata('message') ?> <a class=\"alert-link\" href=\"#\"></a>
                </div>
            <?php } ?>
        </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class=\"content\">
        <div class=\"container-fluid\">
        <table class=\"table\">";
foreach ($non_pk as $row) {
    $string .= "\n\t    <tr><td>" . label($row["column_name"]) . "</td><td><?php echo $" . $row["column_name"] . "; ?></td></tr>";
}
$string .= "\n\t    <tr><td></td><td><a href=\"<?php echo site_url('" . $c_url . "') ?>\" class=\"btn btn-default\">Cancel</a></td></tr>";
$string .= "\n\t</table>
            </div>
        </section>
    </body>
</html>";



$hasil_view_read = createFile($string, $target . "views/backend/" . $c_url . "/" . $v_read_file);
