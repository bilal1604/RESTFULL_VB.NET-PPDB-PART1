
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover">

    <!-- favicons -->
    <link rel="apple-touch-icon" href="<?= base_url() ?>assets/img/favicon-apple.png">
    <link rel="icon" href="<?= base_url() ?>assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/bootstrap-4.1.3/css/bootstrap.min.css">

    <!-- Material design icons CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/materializeicon/material-icons.css">

    <!-- aniamte CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/animatecss/animate.css">

    <!-- swiper slider CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/swiper/css/swiper.min.css">

    <!-- app CSS -->
    <link id="theme" rel="stylesheet" href="<?= base_url() ?>assets/css/purplesidebar.css" type="text/css">

    <title>Register | PPDB</title>
</head>

<body class="fixed-header sidebar-right-close sidebar-left-close">
    <!-- page loader -->
    <div class="loader justify-content-center pink-gradient">
        <div class="align-self-center text-center">
            <div class="logo-img-loader">
                <img src="img/loader-hole.png" alt="" class="logo-image">
                <img src="img/loader-bg.png" alt="" class="logo-bg-image">
            </div>
            <h2 class="mt-3 font-weight-light">GoTRI</h2>
            <p class="mt-2 text-white">Awesome things getting ready...</p>
        </div>
    </div>
    <!-- page loader ends  -->

    <div class="wrapper h-100 h-sm-auto justify-content-center">

        <!-- content page -->
        <div class="container-fluid h-100 h-sm-auto">
            <div class="row h-100 h-sm-auto">
                <div class="col-12 col-md-6 h-md-100 order-2 order-md-1">
                    <div class="row align-items-center h-100">
                        <div class="col-12 col-md-10 col-lg-8 col-xl-6 mx-auto mt-2">
                            <h1 class="font-weight-light mb-3 content-color-secondary text-left">PPDB<span class="font-weight-normal content-color-primary"> SMKN2</span></h1>
                            <h4 class="font-weight-light mb-5 content-color-secondary text-left">Selamat Datang<br> Segera Buat Akunmu.</h4>
                            <form action="<?= site_url('register/daftarsiswa'); ?>" method="post">
                                <div class="card mb-2">
                                    <div class="card-body p-0">
                                        <label for="nisn" class="sr-only">Nisn</label>
                                        <input type="text" id="nisn" class="form-control form-control-lg border-0" name="nisn" placeholder="NISN" required="" autofocus="" autocomplete="off" required>
                                        <hr class="my-0">
                                        <label for="fullname" class="sr-only">Nama Lengkap</label>
                                        <input type="text" id="fullname" class="form-control form-control-lg border-0" name="fullname" placeholder="Nama Lengkap" required="" autofocus="" autocomplete="off" required>
                                        <hr class="my-0">
                                        <label for="inputPassword" class="sr-only">Username</label>
                                        <input type="text" id="inputPassword" name="username" class="form-control form-control-lg border-0" placeholder="Username" autocomplete="off" required="">
                                        <hr class="my-0">
                                        <label for="inputPassword" class="sr-only">Kata Sandi</label>
                                        <input type="password" id="password" name="password" class="form-control  form-control-lg border-0" placeholder="Kata Sandi" autocomplete="off"required="">
                                        <hr class="my-0">
                                    </div>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Tampil Kata Sandi</label>
                                </div>
                                <div class="text-left mt-5">
                                    <button type="submit" href="javascript:void(0)" class="float-right mb-4 btn btn-primary pink-gradient  dark-maroon text-white">Daftar</button>
                                    <p class="text-left mt-2"><span>Sudah memiliki akun?</span><a href="<?= site_url('login'); ?>"><span>&nbsp;Masuk </span></a><span>disini.</span></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 h-md-100 order-1 order-md-2 min-height-300 p-0 bg-dark ">
                    <div class="carosel swiper-location-carousel h-100">
                        <div data-pagination='{"el": ".swiper-pagination"}' data-space-between="0" data-slides-per-view="1" class="swiper-container swiper-init swiper-signin h-100">
                            <div class="swiper-pagination"></div>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide text-center ">
                                    <div class="background-img"><img src="<?= base_url(); ?>assets/img/banner1.jpg" alt="" class="w-auto float-right"></div>
                                    <div class="row align-items-center h-100 text-white">
                                        <div class="col-10 col-md-8 col-lg-6 mx-auto">
                                            <h1 class="font-weight-light mb-4">SMKN 2 Mempunyai, Akreditasi A</h1>
                                            <p>Yang dimana Nilai sekolah nya yaitu akreditasi A itu artinya amat baik .</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide text-center">
                                    <div class="background-img"><img src="<?= base_url(); ?>assets/img/banner2.png" alt="" class="w-auto"></div>
                                    <div class="row align-items-center h-100 text-white">
                                        <div class="col-10 col-md-8 col-lg-6 mx-auto">
                                            <h1 class="font-weight-light mb-4">70%, dari SMKN2 Bogor Diterima di Perusahaan Ternama</h1>
                                            <p>Lulusan nya berkualitas dan sekolah nya nyaman.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content page ends -->

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url() ?>assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/bootstrap-4.1.3/js/bootstrap.min.js"></script>

    <!-- Cookie jquery file -->
    <script src="<?= base_url() ?>assets/vendor/cookie/jquery.cookie.js"></script>

    <!-- swiper slider jquery file -->
    <script src="<?= base_url() ?>assets/vendor/swiper/js/swiper.min.js"></script>

    <!-- Application main common jquery file -->
    <script src="<?= base_url() ?>assets/js/main.js"></script>

    <!-- page specific script -->
    <script>
        'use strict';
        var mySwiper = new Swiper('.swiper-signin', {
            slidesPerView: 1,
            spaceBetween: 0,
            autoplay: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            }
        });
        $(document).ready(function() {
            $('.custom-control-input').click(function() {
                if ($(this).is(':checked')){
                    $('#password').attr('type', 'text');
                }else{
                    $('#password').attr('type', 'password');
                }
            })
        })
    </script>
</body>

</html>
