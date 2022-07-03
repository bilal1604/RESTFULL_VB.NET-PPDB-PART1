<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" href="<?= base_url(); ?>assets/img/favicon-apple.png">
    <link rel="icon" href="<?= base_url(); ?>assets/img/favicon.png">

    <title>PPDB - SMK Negeri 2 Bogor</title>

    <!-- Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous"/>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets-lp/css/style.css"/>
</head>
<body>
    <!-- Navbar -->  
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg fixed-top" id="mainNav">
        <div class="container">
          <br>
          <a class="navbar-brand" href="#">SMK Negeri 2 Bogor</a>
          <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation" >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse text-right" id="navbarText">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#beranda">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#tentangkami">Tentang Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#jurusan">Jurusan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#hubungikami">Hubungi Kami</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">PPDB</a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                    <li><a class="dropdown-item" href="<?= site_url('ppdbpage'); ?>" target="_blank">PPDB 2022/2023</a></li>
                </ul>
              </li>   
              <li class="nav-item">
                <a class="nav-link" href="">  </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= site_url('login'); ?>">Login</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->
    <!-- Banner -->
      <div class="container-fluid banner">
        <div class="container text-center">
            <br>
            <br>
            <h3 class="display-4">Penerimaan Peserta Didik Baru</h3>
            <h3 class="lead display-5"></h3>
            <br>
           
        </div>
      </div> 
    <!--Akhir Banner  -->
    <!-- Beranda -->
    <diid="beranda"v class="container-fluid beranda pt-5 pb-5" id="beranda">
        <div class="container text-center" data-aos="zoom-in-up" data-aos-offset="150" data-aos-duration="2000">
            <br>
            <h5 class="display-5"></h5>
            <div class="row pt-4">
              <div class="col-md-4">
                <div class="card"> <br>
                    <span class="lingkaran"><i class="fa-solid fa-person-rays fa-5x"></i></span>
                    <h3 class="mt-3">Visi</h3>
                    <p>Terwujudnya sekolah berwawasan lingkungan dalam menghasilkan lulusan yang cerdas, trampil dan berkarakter unggul.</p>
                    <br>
                    <br>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card"> <br>
                    <span class="lingkaran"><i class="fa-solid fa-arrows-to-circle fa-5x"></i></span>
                    <h3 class="mt-3">Misi</h3>
                    <p>Mendidik dan Melatih Peserta Didik agar memiliki karakter unggul Mendidik dan Melatih Peserta Didik sesuai Kebutuhan Dunia Kerja dan pendidikan tinggi.</p>
                    <br>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card"> <br>
                    <span class="lingkaran"><i class="fa-solid fa-arrow-down-up-across-line fa-5x"></i></span>
                    <h3 class="mt-3">Tujuan</h3>
                    <p>Meningkatkan kepedulian warga sekolah terhadap lingkungan dalam mewujudkan sekolah adiwiyata mandiri dan Meningkatkan pelayanan prima dengan memanfaatkan teknologi informasi dan komunikasi.</p>
                </div>
              </div>
            </div>
        </div>
    </div>
    <!-- Akhir Beranda -->
    <!-- Tentang Kami -->
    <div class="container-fluid pt-5 pb-5" data-aos="fade-down" data-aos-offset="300" data-aos-duration="2000">
        <div class="container text-center">
            <h2 class="display-5 page-section-heading text-center text-uppercase text-secondary mb-0" id="tentangkami">Tentang Kami</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
              <div class="divider-custom-line"></div>
              <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
              <div class="divider-custom-line"></div>
            </div>
          <br>
                <div class="card crop-img">
                    <br>
                    <img src="<?= base_url() ?>assets-lp/img/smkn2bogorlogo2.jpg" class="rounded mx-auto d-block">
                    <div class="card-body">
                      <h5 class="card-title">Sejarah Singkat SMKN 2 Bogor</h5>
                      <p class="card-text">Sekolah Menengah Kejuruan (SMK) Negeri 2 Bogor Kelompok Teknologi dan Industri atau dahulu dikenal dengan nama Sekolah Teknologi Menengah Negeri (STM N) Bogor, didirikan pada tahun 1963, dan SK-nya tanggal 5 Oktober 1965 Nomor : 137/DIRPT/BI/65 dan Nomor Statistik Sekolah (NSS) 321026101001.
                        <br>Berlokasi pertama kali di daerah Sempur kemudian Gang Aut daerah Jalan Surya Kencana selanjutnya pindah ke Jalan Pemuda No. 28, dan terakhir sampai dengan sekarang di Jalan Tanah Baru No. 1 Bogor Utara ( sekarang Jalan Pangeran Sogiri No. 404 Tanah Baru ) Kota Bogor dengan menempati lokasi areal kurang lebih 4 Ha (+-32.123 m2).</p>
                    </div>
                </div>
        </div>
    </div> 
    <!-- Akhir Tentang Kami -->
    <!-- Jurusan -->
    <div class="container-fluid pt-5 pb-5" data-aos="fade-down" data-aos-offset="300" data-aos-duration="2000">
        <div class="container text-center">
            <br>
            <h2 class="display-5 page-section-heading text-center text-uppercase text-secondary mb-0" id="jurusan">Jurusan</h2>
              <!-- Icon Divider-->
            <div class="divider-custom" data-aos="flip-up" data-aos-offset="200" data-aos-duration="2000">
              <div class="divider-custom-line"></div>
              <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
              <div class="divider-custom-line"></div>
            </div>
            <div class="row justify-content-center" >
            <!-- Portfolio Item 1-->
            <div class="col-md-6 col-lg-4 mb-5" data-aos="flip-left" data-aos-duration="500">
              <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                  <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                  </div>
                  <img class="img-fluid" src="<?= base_url() ?>assets-lp/img/1_teknik_listrik.jpg" />
              </div>
           </div>
           <!-- Portfolio Item 2-->
           <div class="col-md-6 col-lg-4 mb-5" data-aos="flip-left" data-aos-duration="500" data-aos-delay="150">
              <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                  <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                  </div>
                  <img class="img-fluid" src="<?= base_url() ?>assets-lp/img/2_teknik_mesin.jpg" />
              </div>
           </div>
           <!-- Portfolio Item 3-->
           <div class="col-md-6 col-lg-4 mb-5" data-aos="flip-left" data-aos-duration="500" data-aos-delay="300">
            <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                </div>
                <img class="img-fluid" src="<?= base_url() ?>assets-lp/img/3_teknik_otomotif.jpg" />
            </div>
           </div>
           <!-- Portfolio Item 4-->
           <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="flip-left" data-aos-duration="500" data-aos-delay="450">
            <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                </div>
                <img class="img-fluid" src="<?= base_url() ?>assets-lp/img/4_teknik_audiovideo.jpg" />
            </div>
        </div>
        <!-- Portfolio Item 5-->
        <div class="col-md-6 col-lg-4 mb-5 mb-md-0" data-aos="flip-left" data-aos-duration="500" data-aos-delay="550">
            <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                </div>
                <img class="img-fluid" src="<?= base_url() ?>assets-lp/img/5_teknik_komputer.jpg" />
            </div>
        </div>
        <!-- Portfolio Item 6-->
        <div class="col-md-6 col-lg-4" data-aos="flip-left" data-aos-duration="500" data-aos-delay="650">
            <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal6">
                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                </div>
                <img class="img-fluid" src="<?= base_url() ?>assets-lp/img/6_konstruksi.jpg" />
            </div>
        </div>
        <!-- Portfolio Item 7-->
        <div class="col-md-6 col-lg-4" data-aos="flip-left" data-aos-duration="500" data-aos-delay="650">
            <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal7">
                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                </div>
                <img class="img-fluid" src="<?= base_url() ?>assets-lp/img/7_arsitektur.jpg" />
            </div>
        </div>
    </div>
        </div>
    </div>
    <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
          <div class="modal-dialog modal-xl">
              <div class="modal-content">
                  <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                  <div class="modal-body text-center pb-5">
                      <div class="container">
                          <div class="row justify-content-center">
                              <div class="col-lg-8">
                                  <!-- Portfolio Modal - Title-->
                                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Teknik Instalasi Tenaga Listrik</h2>
                                  <!-- Icon Divider-->
                                  <div class="divider-custom">
                                      <div class="divider-custom-line"></div>
                                      <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                      <div class="divider-custom-line"></div>
                                  </div>
                                  <!-- Portfolio Modal - Image-->
                                  <img class="img-fluid rounded mb-5" src="<?= base_url() ?>assets-lp/img/1_teknik_listrik.jpg" alt="..." />
                                  <!-- Portfolio Modal - Text-->
                                  <p class="mb-4">Secara umum Teknik Instalasi Pemanfaatan Tenaga Listrik mempelajari ilmu tentang gambar teknik listrik, rangkaian elektornika, 
                                    rangkaian kontrol listrik, layout PCB, software aplikasi untuk rangkaian kontrol listrik, komponen elektronika, elektromekanik, instalasi penerangan 
                                    listrik bangunan gedung, instalasi penerangan listrik jalan, instalasi tenaga listrik 3 fase, instalasi motor listrik, mengoperasikan PLC, perbaikan peralatan listrik, dll.</p>
                                  <button class="badge rounded-pill btn btn-xl btn-outline-dark" data-bs-dismiss="modal">
                                      <i class="fas fa-xmark fa-fw"></i>
                                      Close Window
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Portfolio Modal 2-->
      <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
          <div class="modal-dialog modal-xl">
              <div class="modal-content">
                  <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                  <div class="modal-body text-center pb-5">
                      <div class="container">
                          <div class="row justify-content-center">
                              <div class="col-lg-8">
                                  <!-- Portfolio Modal - Title-->
                                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Teknik Mesin / Mekanik</h2>
                                  <!-- Icon Divider-->
                                  <div class="divider-custom">
                                      <div class="divider-custom-line"></div>
                                      <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                      <div class="divider-custom-line"></div>
                                  </div>
                                  <!-- Portfolio Modal - Image-->
                                  <img class="img-fluid rounded mb-5" src="<?= base_url() ?>assets-lp/img/2_teknik_mesin.jpg" alt="..." />
                                  <!-- Portfolio Modal - Text-->
                                  <p class="mb-4">Teknik mesin atau Teknik mekanik adalah ilmu teknik mengenai aplikasi dari prinsip fisika untuk analisis, desain, manufaktur dan pemeliharaan sebuah sistem mekanik. 
                                    Ilmu ini membutuhkan pengertian mendalam atas konsep utama dari cabang ilmu mekanika, kinematika, teknik material, termodinamika dan energi. 
                                    Ahli atau pakar dari teknik mesin biasanya disebut sebagai insinyur (teknik mesin), yang memanfaatkan pengertian atas ilmu teknik ini dalam mendesain dan menganalisis pembuatan kendaraan, pesawat, pabrik industri, peralatan dan mesin industri dan lain sebagainya.</p>
                                  <button class="badge rounded-pill btn btn-xl btn-outline-dark" data-bs-dismiss="modal">
                                      <i class="fas fa-xmark fa-fw"></i>
                                      Close Window
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Portfolio Modal 3-->
      <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
          <div class="modal-dialog modal-xl">
              <div class="modal-content">
                  <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                  <div class="modal-body text-center pb-5">
                      <div class="container">
                          <div class="row justify-content-center">
                              <div class="col-lg-8">
                                  <!-- Portfolio Modal - Title-->
                                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Teknik Kendaraan Ringan Otomotif</h2>
                                  <!-- Icon Divider-->
                                  <div class="divider-custom">
                                      <div class="divider-custom-line"></div>
                                      <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                      <div class="divider-custom-line"></div>
                                  </div>
                                  <!-- Portfolio Modal - Image-->
                                  <img class="img-fluid rounded mb-5" src="<?= base_url() ?>assets-lp/img/3_teknik_otomotif.jpg" alt="..." />
                                  <!-- Portfolio Modal - Text-->
                                  <p class="mb-4">Teknik Kendaraan Ringan Otomotif merupakan kompetensi keahlian bidang teknik otomotif yang menekankan keahlian pada bidang penguasaan jasa perbaikan kendaraan ringan. 
                                    Kompetensi keahlian teknik kendaraan ringan menyiapkan peserta didik untuk bekerja pada bidang pekerjaan jasa perawatan dan perbaikan di dunia usaha/industri. 
                                    TKRO / Otomotif Tujuan Kompetensi Keahlian Teknik Kendaraan Ringan secara umum mengacu pada isi Undang-Undang Sistem Pendidikan Nasional (UU SPN) pasal 3 
                                    mengenai tujuan PendidikanNasional dan penjelasan pasal 15 yang menyebutkan bahwa pendidikan kejuruan merupakan pendidikan menengah yang mempersiapkan peserta didik terutama untuk bekerja dalam bidang tertentu.</p>
                                  <button class="badge rounded-pill btn btn-xl btn-outline-dark" data-bs-dismiss="modal">
                                      <i class="fas fa-xmark fa-fw"></i>
                                      Close Window
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Portfolio Modal 4-->
      <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
          <div class="modal-dialog modal-xl">
              <div class="modal-content">
                  <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                  <div class="modal-body text-center pb-5">
                      <div class="container">
                          <div class="row justify-content-center">
                              <div class="col-lg-8">
                                  <!-- Portfolio Modal - Title-->
                                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Teknik Audio-Video</h2>
                                  <!-- Icon Divider-->
                                  <div class="divider-custom">
                                      <div class="divider-custom-line"></div>
                                      <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                      <div class="divider-custom-line"></div>
                                  </div>
                                  <!-- Portfolio Modal - Image-->
                                  <img class="img-fluid rounded mb-5" src="<?= base_url() ?>assets-lp/img/4_teknik_audiovideo.jpg" alt="..." />
                                  <!-- Portfolio Modal - Text-->
                                  <p class="mb-4">Program Keahlian Teknik Elektronika Kompetensi Teknik Audio Video sebagai bagian dari pendidikan menengah, bertujuan menyiapkan siswa / tamatan:<br>
                                    1. Memasuki lapangan kerja serta dapat mengembangkan sikap profesional dalam lingkup keahlian Teknik Elektronika, khususnya Teknik Audio Video.<br>
                                    2.  Mampu memilih karier, mampu berkompetisi dan mampu mengembangkan diri dalam lingkup keahlian Teknik Elektronika, khususnya Teknik Audio Video.<br>
                                    3. Menjadi tenaga kerja tingkat menengah untuk mengisi kebutuhan dunia usaha dan industri pada saat ini maupun masa yang akan datang dalam lingkup keahlian Teknik Elektronika, khususnya Teknik Audio Video.
                                    4. Menjadi warga negara yang produktif, adaptif, selektif dan kreatif.</p>
                                  <button class="badge rounded-pill btn btn-xl btn-outline-dark" data-bs-dismiss="modal">
                                      <i class="fas fa-xmark fa-fw"></i>
                                      Close Window
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Portfolio Modal 5-->
      <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5" aria-hidden="true">
          <div class="modal-dialog modal-xl">
              <div class="modal-content">
                  <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                  <div class="modal-body text-center pb-5">
                      <div class="container">
                          <div class="row justify-content-center">
                              <div class="col-lg-8">
                                  <!-- Portfolio Modal - Title-->
                                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Teknik Komputer dan Jaringan</h2>
                                  <!-- Icon Divider-->
                                  <div class="divider-custom">
                                      <div class="divider-custom-line"></div>
                                      <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                      <div class="divider-custom-line"></div>
                                  </div>
                                  <!-- Portfolio Modal - Image-->
                                  <img class="img-fluid rounded mb-5" src="<?= base_url() ?>assets-lp/img/5_teknik_komputer.jpg" alt="..." />
                                  <!-- Portfolio Modal - Text-->
                                  <p class="mb-4">Teknik komputer dan jaringan (TKJ) merupakan model pendidikan kejuruan yang berbasis teknologi informasi dan komunikasi. 
                                    Teknik komputer dan jaringan saat ini keberadaannya sudah mulai terlihat dimata publik, dimana jurusan ini merupakan jurusan yangsudah mendekati ilmu praktisi yang langsung dapat diimplementasikan di lingkungan dunia kerja profesional.<br>
                                    Kompetensi Keahlian:
                                    Teknik dasar operasi dan perawatan komputer,
                                    Instalasi Sistem Operasi PC,
                                    Instalasi Sistem Operasi Server, dan
                                    Instalasi dan perawatan jaringan komputer (LAN, WAN)
                                  </p>
                                  <button class="badge rounded-pill btn btn-xl btn-outline-dark" data-bs-dismiss="modal">
                                      <i class="fas fa-xmark fa-fw"></i>
                                      Close Window
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Portfolio Modal 6-->
      <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
          <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close"  data-bs-dismiss="modal" aria-label="Close"></button></div>
                  <div class="modal-body text-center pb-5">
                      <div class="container">
                          <div class="row justify-content-center">
                              <div class="col-lg-8">
                                  <!-- Portfolio Modal - Title-->
                                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Bisnis Konstruksi dan Properti</h2>
                                  <!-- Icon Divider-->
                                  <div class="divider-custom">
                                      <div class="divider-custom-line"></div>
                                      <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                      <div class="divider-custom-line"></div>
                                  </div>
                                  <!-- Portfolio Modal - Image-->
                                  <img class="img-fluid rounded mb-5" src="<?= base_url() ?>assets-lp/img/6_konstruksi.jpg" alt="..." />
                                  <!-- Portfolio Modal - Text-->
                                  <p class="mb-4">Secara umum Bisnis Konstruksi dan Properti atau biasa disebut BKP mempelajari ilmu tentang konstruksi bangunan dan furniture perkayuan, pengukuran tanah, rancangan anggaran biaya (RAB) konstruksi bangunan, laporan pelaksaan konstruksi bangunan, perencanaan bisnis konstruksi dan properti, pelaksanaan dan pengawasan konstruksi, dll.</p>
                                  <button class="badge rounded-pill btn btn-xl btn-outline-dark" data-bs-dismiss="modal">
                                      <i class="fas fa-xmark fa-fw"></i>
                                      Close Window
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Portfolio Modal 7-->
      <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" aria-labelledby="portfolioModal7" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header border-0"><button class="btn-close"  data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Desain Pemodelan dan Informasi Bangunan</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="<?= base_url(); ?>assets-lp/img/7_arsitektur.jpg" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Secara umum Desain Permodelan dan Informasi bangunan (DPIB) mempelajari ilmu tentang gambar konstruksi bangunan, konstruksi bangunan, pengukuran tanah, gambar konstruksi menggunakan aplikasi komputer baik 2D maupun 3D, desain interior dan eksterior, konstruksi jalan dan jembatan, menghitung RAB, laporan pemangunan, dll.</p>
                                <button class="badge rounded-pill btn btn-xl btn-outline-dark" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    <!-- Akhir Jurusan -->
    <!-- Hubungi Kami -->
    <div class="container-fluid pt-5 pb-5 hubungi" data-aos="fade-down" data-aos-offset="300" data-aos-duration="2000">
        <div class="container">
            <h2 class="display-5 page-section-heading text-center text-uppercase text-secondary mb-0" id="hubungikami">Hubungi Kami</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
              <div class="divider-custom-line"></div>
              <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
              <div class="divider-custom-line"></div>
            </div>
            <br>
            <div class="row pb-3"> 
                <div class="col-md-6">
                    <input class="form-control form-control-lg mb-3" type="text" placeholder="Nama"/>
                    <input class="form-control form-control-lg mb-3" type="text" placeholder="Alamat Email"/> 
                    <input class="form-control form-control-lg mb-3" type="text" placeholder="No.Telpon"/>
                </div>
                <div class="col-md-6">
                    <textarea class="form-control form-control-lg" rows="5" placeholder="Pesan Anda"></textarea>
                </div>
            </div>
            <div class="col-md-3 mx-auto text-center">
                <a href="#!">
                    <button type="button" class="badge btn-xl btn-outline-light">Kirim Pesan</button>
                </a>
            </div>
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
        </div>
    </footer>
    <!-- Akhir Footer -->
    <!--  Copyright Section -->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>COPYRIGHT &copy; SMKN 2 BOGOR 2022 </small></div>
    </div>
    <!-- Akhir Copyright Section-->
    <!-- iframe untuk preloader -->
    <section id="preloader-section">
        <div id="preloader">
            <div id="ctn-preloader" class="ctn-preloader">
                <div class="animation-preloader">
                    
                    <!-- Spinner -->
                    <div class="spinner"></div>
                    
                    <!-- Start: Text Loading -->
                    <div class="txt-loading">
                        <span data-text-preloader="P" class="letters-loading">P</span>
                        <span data-text-preloader="P" class="letters-loading">P</span>
                        <span data-text-preloader="D" class="letters-loading">D</span>
                        <span data-text-preloader="B" class="letters-loading">B</span>
                        <span data-text-preloader="" class="letters-loading">&nbsp</span>
                        <span data-text-preloader="S" class="letters-loading">S</span>
                        <span data-text-preloader="M" class="letters-loading">M</span>
                        <span data-text-preloader="K" class="letters-loading">K</span>
                        <span data-text-preloader="N" class="letters-loading">N</span>
                        <span data-text-preloader="" class="letters-loading">&nbsp</span>
                        <span data-text-preloader="2" class="letters-loading">2</span>
                        <span data-text-preloader="" class="letters-loading">&nbsp</span>
                        <span data-text-preloader="B" class="letters-loading">B</span>
                        <span data-text-preloader="O" class="letters-loading">O</span>
                        <span data-text-preloader="G" class="letters-loading">G</span>
                        <span data-text-preloader="O" class="letters-loading">O</span>
                        <span data-text-preloader="R" class="letters-loading">R</span>
                    </div>
                    <!-- End: Text Loading -->

                </div>

                <!-- Start: Preloader sides - Model 1 -->
                <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>
                <!-- End: Preloader sides - Model 1 -->

            </div>
            <div class="loader-wrapper">
                <span class="loader">
                    <span class="loader-inner"></span>
                </span>
            </div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/h1RHsfA_IFM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/h1RHsfA_IFM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>      
        </div>
    </section>
     
    
    <!-- Akhir iframe untuk preloader -->

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

    <script>
        gsap.registerPlugin(TextPlugin);
        gsap.to('.lead', {duration: 4, delay: 4, text: 'SMK Negeri 2 Bogor'})
    </script>
    
    <script>
        var loader = document.getElementById("preloader");

        window.addEventListener("load", function(){
            
            loader.style.display = "none";
        })
    </script>

    <script src="<?= base_url(); ?>assets-lp/js/script.js"></script>

</body>
</html>