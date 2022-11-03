<!-- Untuk Header -->
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <h1 id="winkcode-1-framework">Winkcode 1 Framework</h1>
        <p>Build with Codeigniter 3.1.9 + Harviacode</p>
        <h3 id="features">Features</h3>
        <ul>
            <li>Auth</li>
            <li>Access Management</li>
            <li>CRUD Generator include template (localhost/winkcode1/crud)</li>
            <li>Suport master detail form</li>
            <li>Lookup data, example on Management Users>Users menu, on group button input</li>
        </ul>
        <h3 id="how-do-i-get-set-up-">How do I get set up?</h3>
        <ul>
            <li>copy paste project folder</li>
            <li>import DB (path: assets/db/)</li>
            <li>setup base_url on config.php, and set your database.php </li>
        </ul>
        <h3 id="how-to-use-crud-generator-">How to use CRUD Generator?</h3>
        <ul>
            <li>clone Winkcode 1 to your localhost</li>
            <li>import database on assets/db/</li>
            <li>login on localhost/winkcode1/auth (user: dev, pass: dev123)</li>
            <li>go to localhost/winkcode1/harviacode</li>
            <li>choose table want to generate</li>
            <li>generate model, controller and view (use default name)</li>
            <li>go to localhost/winkcode1/master_access</li>
            <li>create master access as like your table (ex: tabel siswa): M_SISWA</li>
            <li>go to localhost/winkcode1/user_access, turn on for developer group with your access M_SISWA you have created before.</li>
            <li>set your menu on localhost/winkcode1/sy_menu (can be multiple level)</li>
            <li>lauch your new page: localhost/winkcode1/siswa</li>
            <li>drinking the coffe :)</li>
        </ul>

        <h3 id="contribution-guidelines">Copyright</h3>
        <ul>
            <li>Free to use (dont remove watermark on footerpage)</li>
        </ul>
        <p>Thanks for contributing</p>
        <h3 id="documentation-buka-a-href-https-www-youtube-com-watch-v-hwhypsoj1p4-target-_blank-link-ini-a-">Documentation is <a href="https://www.youtube.com/watch?v=qo5MI1_EB5M" target="_blank">here</a></h3>
        try also <a href="https://github.com/fahrudinyuniwinanto/winkcode2" target="_blank">Winkcode 2 Framework</>
    </div>
</section>
<!-- End Main content -->