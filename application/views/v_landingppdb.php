<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PPDB - SMK Negeri 2 Bogor</title>
        
        <link rel="apple-touch-icon" href="<?= base_url(); ?>assets/img/favicon-apple.png">
        <link rel="icon" href="<?= base_url(); ?>assets/img/favicon.png">

        <!-- Bootsrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
        crossorigin="anonymous"/>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" 
        integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" 
        crossorigin="anonymous"/>
        
        <!-- AOS -->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <!-- CSS -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets-lp/css/style.css"/>
    </head>
  <body>
    <!-- Banner -->
        <div class="container-fluid" style="background: url(assets-lp/img/gif_bg3.gif) no-repeat center center; background-size: cover; padding-top: 5%; padding-bottom: 7%; color: hsl(261, 35%, 50%); font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-weight: 700;">
            <div class="container text-center">
                <img src="<?= base_url(); ?>assets-lp/img/smkn2bogorlogo2.jpg" class="rounded mx-auto d-block"/>
                <br>
                <h3 class="display-4">Penerimaan Peserta Didik Baru <br>SMK Negeri 2 Bogor</h3>
                <h3 class="lead display-5"></h3>
                <?php if( date('d-m-Y', time()) == date('d-m-Y', strtotime($jadwal->mulai_pendaftaran)))  : ?>
                    <a href="<?= site_url('register'); ?>" data-micron="pop">
                        <button type="button" class="badge btn-xl btn-outline-light">Daftar Sekarang</button>
                    </a>
                <?php elseif( date('d-m-Y', time()) == date('d-m-Y', strtotime($jadwal->akhir_pendaftaran))) : ?>
                    <a href="<?= site_url('register'); ?>" data-micron="pop">
                        <button type="button" disabled class="badge btn-xl btn-danger">Pendaftaran Ditutup</button>
                    </a>
                <?php else : ?>
                    <a href="#" data-micron="pop">
                        <button type="button" disabled class="badge btn-xl btn-info">Pendaftaran Belum Dimulai</button>
                    </a>
                <?php endif ?>
            </div>
        </div> 
    <!--Akhir Banner  -->
    <!-- Table Schedule -->
    <div class="container-fluid pt-5 pb-5">
        <br>
        <div class="container text-center" data-aos="zoom-in-up" data-aos-offset="150" data-aos-duration="2000">
            <h4 class="display-5 page-section-heading text-center text-uppercase text-secondary mb-0">Jadwal PPDB SMKN 2 Bogor <br>Tahun Pelajaran 2022/2023</h4>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
          <br>
          <table border="5" cellspacing="0" align="center" class="table table-bordered">
            <!--<caption>Timetable</caption>-->
            <tr>
                <td align="center" height="50"
                    width="100">
                    <b>Pendaftaran</b>
                </td>
                <td align="center" height="50"
                    width="100">
                    <b>Verifikasi</b>
                </td>
                <td align="center" height="50"
                    width="100">
                    <b>Pengumuman</b>
                </td>
                <td align="center" height="50"
                    width="100">
                    <b>Daftar Ulang</b>
                </td>
            </tr>
            <tr>
                <td align="center" height="50">06 - 11 Mei 2022</td>
                <td align="center" height="50">12 - 13 Mei 2022</td>
                <td align="center" height="50">25 Mei 2022 <br> 10.00 WIB</td>
                <td align="center" height="50">27 - 28 Mei 2022</td>
            </tr>
            <tr>
                <td align="center" height="50"> </td>
                <td align="center" height="50"> </td>
            </tr>
          </table>  
            <br>
            <div class="card crop-ppdb">
              <div class="card-body">
                <h4 class="card-title">Catatan PPDB</h4>
                <div class="row pt-6">
                    <br>
                    <p class="card-text">
                        <div>
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-warning">Catatan:</li>
                                <li class="list-group-item">1. Pendaftaran PPDB SMKN 2 Bogor tidak dipungut biaya pendaftaran</li>
                                <li class="list-group-item">2. Calon Peserta Didik Baru yang sudah dinyatakan diterima apabila tidak melakukan daftar ulang sesuai dengan jadwal yang telah ditentukan maka dianggap mengundurkan diri</li>
                              </ul>
                        </div>
                    </p>  
                </div>
              </div>
           </div> 
        </div>  
    </div>
 
    <!-- Akhir Table -->
    <!-- Hubungi Kami -->
    <div class="container-fluid pt-5 pb-5 hubungi">
        <div class="container">
            <section class="contact-section bg-black">
                <div class="container px-4 px-lg-5">
                    <div class="row gx-4 gx-lg-5">
                        <div class="col-md-4 mb-3 mb-md-0" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="100">
                            <div class="card py-4 h-100">
                                <div class="card-body text-center">
                                    <i class="fas fa-map-location text-primary mb-2"></i>
                                    <h4 class="text-uppercase m-0">Lokasi</h4>
                                    <hr class="my-4 mx-auto" />
                                    <div class="small text-black-50">
                                        Jl. Pangeran Sogiri No.404 Tanah Baru <br>
                                        Bogor Utara Kota Bogor 16154
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="100">
                            <div class="card py-4 h-100">
                                <div class="card-body text-center">
                                    <i class="fas fa-envelope text-primary mb-2"></i>
                                    <h4 class="text-uppercase m-0">Email</h4>
                                    <hr class="my-4 mx-auto" />
                                    <div class="small text-black-50"><a href="#!">
                                        smkn2bgr@yahoo.com <br>
                                        smkn2kotabgr@gmail.com
                                    </a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="100">
                            <div class="card py-4 h-100">
                                <div class="card-body text-center">
                                    <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                    <h4 class="text-uppercase m-0">Nomor Telpon</h4>
                                    <hr class="my-4 mx-auto" />
                                    <div class="small text-black-50">(0251) 8652085</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </section>
        </div>
    </div>
    <!-- Akhir Hubungi Kami -->
    <!-- Footer -->
    <footer class="footer text-center">
        <p>
         <a href="#" class="social btn btn-outline-light btn-social mx-1"><i class="fab fa-fw fa-youtube"></i></a>
         <a href="#" class="social btn btn-outline-light btn-social mx-1"><i class="fab fa-fw fa-instagram"></i></a>
         <a href="#" class="social btn btn-outline-light btn-social mx-1"><i class="fab fa-fw fa-linkedin"></i></a>
        </p>
        <div class="divider-custom">
         <p></p>
          <div class="divider-custom-line"></div>
          <div class="divider-custom-line"></div>
        </div>
    </footer>
    <!-- Akhir Footer -->
    <!--  Copyright Section -->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>COPYRIGHT &copy; SMKN 2 BOGOR 2022 </small></div>
    </div>
    <!-- Akhir Copyright Section-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous">
    </script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init({
        });
      </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/TextPlugin.min.js"></script>

    <script src="<?= base_url(); ?>assets-lp/js/script.js"></script>
  </body>
</html>