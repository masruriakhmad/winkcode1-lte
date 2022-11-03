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
                    <h1 class=\"m-0\"><?php echo \$button ?> " . ucfirst($table_name) . " </h1>

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
        <form action=\"<?php echo \$action; ?>\" method=\"post\">
        <div class=\"ibox-content\">";
foreach ($non_pk as $row) {
    if ($row["data_type"] == 'text') {
        $string .= "\n\t    <div class=\"form-group\">
            <label for=\"" . $row["column_name"] . "\">" . label($row["column_name"]) . " <?php echo form_error('" . $row["column_name"] . "') ?></label>
            <textarea class=\"form-control\" rows=\"3\" name=\"" . $row["column_name"] . "\" id=\"" . $row["column_name"] . "\" placeholder=\"" . label($row["column_name"]) . "\"><?php echo $" . $row["column_name"] . "; ?></textarea>
        </div>";
    } else {
        $string .= "\n\t    <div class=\"form-group\">
            <label for=\"" . $row["data_type"] . "\">" . label($row["column_name"]) . " <?php echo form_error('" . $row["column_name"] . "') ?></label>
            <input type=\"text\" class=\"form-control\" name=\"" . $row["column_name"] . "\" id=\"" . $row["column_name"] . "\" placeholder=\"" . label($row["column_name"]) . "\" value=\"<?php echo $" . $row["column_name"] . "; ?>\" />
        </div>";
    }
}
$string .= "\n\t    <input type=\"hidden\" name=\"" . $pk . "\" value=\"<?php echo $" . $pk . "; ?>\" /> ";
$string .= "\n\t    <button type=\"submit\" class=\"btn btn-primary\"><?php echo \$button ?></button> ";
$string .= "\n\t    <a href=\"<?php echo site_url('" . $c_url . "') ?>\" class=\"btn btn-default\">Cancel</a>";
$string .= "\n\t</div>
            </form>
        </div>
        </section>
    </body>
</html>";

$hasil_view_form = createFile($string, $target . "views/backend/" . $c_url . "/" . $v_form_file);
