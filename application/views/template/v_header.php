<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover">

    <!-- favicons -->
    <link rel="apple-touch-icon" href="<?= base_url(); ?>assets/img/favicon-apple.png">
    <link rel="icon" href="<?= base_url(); ?>assets/img/favicon.png">

    <!--CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/bootstrap-4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/materializeicon/material-icons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/animatecss/animate.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/swiper/css/swiper.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/bootstrap-daterangepicker-master/daterangepicker.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/footable-bootstrap/css/footable.bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/bootstrap_tour/css/bootstrap-tour-standalone.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/jquery-jvectormap/jquery-jvectormap-2.0.3.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
    <link id="theme" rel="stylesheet" href="<?= base_url(); ?>assets/css/purplesidebar.css" type="text/css">

    <!-- JS -->
    <script src="<?= base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/bootstrap-4.1.3/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/cookie/jquery.cookie.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/sparklines/jquery.sparkline.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/swiper/js/swiper.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/chartjs/utils.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/footable-bootstrap/js/footable.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/bootstrap-daterangepicker-master/moment.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/bootstrap-daterangepicker-master/daterangepicker.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/jquery-jvectormap/jquery-jvectormap.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/bootstrap_tour/js/bootstrap-tour-standalone.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/jquery-toast-plugin-master/dist/jquery.toast.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/main.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/DataTables-1.10.18/js/dataTables.bootstrap4.min.js"></script>
    
    <title><?= $title; ?></title>
</head>

<body class="fixed-header sidebar-right-close">
    <!-- page loader -->
    <div class="loader justify-content-center pink-gradient">
        <div class="align-self-center text-center">
            <div class="logo-img-loader">
                <img src="<?= base_url(); ?>assets/img/loader-hole.png" alt="" class="logo-image">
                <img src="<?= base_url(); ?>assets/img/loader-bg.png" alt="" class="logo-bg-image">
            </div>
            <h2 class="mt-3 font-weight-light">GoTRI</h2>
        </div>
    </div>
    <!-- page loader ends  -->

    <div class="wrapper">
        <!-- main header -->
        <header class="main-header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-auto pl-0">
                        <button class="btn pink-gradient btn-icon" id="left-menu"><i class="material-icons">widgets</i></button>
                        <a href="index.html" class="logo"><img src="<?= base_url(); ?>assets/img/logo-icon.png" alt=""><span class="text-hide-xs"><b>PP</b>DB</span></a>
                    </div>
                    <div class="col text-center p-xs-0">
                    </div>
                    <div class="col-auto pr-0">
                        <div class="dropdown text-hide-lg d-inline-block">
                            <div class="dropdown-menu notification-dropdown" aria-labelledby="dropdownnotification">
                                <a href="#" class="media  pink-gradient-active new">
                                    <figure class="avatar avatar-40">
                                        <img src="<?= base_url(); ?>assets/img/user1.png" alt="Generic placeholder image">
                                    </figure>
                                    <div class="media-body">
                                        <h5 class="mt-0">Media heading</h5>
                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="dropdown d-inline-block">
                            <a class="btn header-color-secondary dropdown-toggle username" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <figure class="userpic">
                                    <!-- <img src="<?= base_url(); ?>assets/upload/<?= $profile->pasfoto; ?>" alt=""> -->
                                </figure>
                                <h5 class="text-hide-xs">
                                    <small class="header-color-secondary">Welcome,</small>
                                    <span class="header-color-primary"><?= $profile->username; ?></span>
                                </h5>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown" aria-labelledby="dropdownMenuLink">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <a href="profile.html">
                                            <!-- <figure class="avatar avatar-120 mx-auto my-3">
                                                <img src="<?= base_url(); ?>assets/upload/<?= $profile->pasfoto; ?>" alt="">
                                            </figure> -->
                                            <h5 class="card-title mb-2 header-color-primary"><?= $profile->fullname; ?></h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="dropdown-divider m-0"></div>
                                <div class="dropdown-divider m-0"></div>
                                <a class="dropdown-item pink-gradient-active" href="<?= site_url('login/keluar'); ?>">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            Logout
                                        </div>

                                        <div class="col-auto">
                                            <div class="text-danger ml-2"><i class="material-icons vm">exit_to_app</i></div>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>
        <!-- main header ends -->

        <!-- sidebar left -->
        <div class="sidebar sidebar-left">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="<?= site_url('dashboard'); ?>" class="nav-link dropdwown-toggle"><i class="material-icons icon">insert_chart_outlined</i> <span>Dashboard</span></a>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url('formulir'); ?>" class="nav-link dropdwown-toggle"><i class="material-icons icon">note_add</i> <span>Formulir</span></a>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url('nilai'); ?>" class="nav-link dropdwown-toggle"><i class="material-icons icon">edit_calendar</i> <span>Nilai</span></a>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url('cetakkartu'); ?>" class="nav-link dropdwown-toggle"><i class="material-icons icon">print</i> <span style="font-size: 15px;">Cetak Kartu Pendaftaran</span></a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link dropdwown-toggle"><i class="material-icons icon">information</i> <span>Informasi</span><i class="material-icons icon arrow">expand_more</i></a>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="<?= site_url('informasi/hasilseleksi'); ?>" class="nav-link pink-gradient-active"><i class="material-icons icon"></i> <span>Hasil Seleksi</span></a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link pink-gradient-active"><i class="material-icons icon"></i> <span>Nilai Jurusan</span></a>
                        </li> -->
                    </ul>
                </li>
            </ul>
        </div>
        <!-- sidebar left ends -->
        <div class="page-content">
