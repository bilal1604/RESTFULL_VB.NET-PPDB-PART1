<div class="container mt-4 main-container">
    <div class="row">
        <div class="col-md-12">
            <?php if(date('d-m-Y', time()) !== date('d-m-Y', strtotime($jadwal->pengumuman_hasil_seleksi))) : ?>
                <div class="jumbotron jumbotron-fluid bg-secodary">
                    <div class="container">
                        <h1 class="display-4 h1">Pemberitahuan Hasil Seleksi</h1>
                    </div>
                </div>
            <?php elseif($profile->status_seleksi === '2' && date('d-m-Y', time()) == date('d-m-Y', strtotime($jadwal->pengumuman_hasil_seleksi))) : ?>
                <div class="jumbotron jumbotron-fluid bg-success">
                    <div class="container">
                        <h1 class="display-4 h1"><?= $profile->fullname; ?>, Selamat Anda Lulus</h1>
                    </div>
                </div>
            <?php else : ?>
                <div class="jumbotron jumbotron-fluid bg-danger">
                    <div class="container">
                        <h1 class="display-4 h1"><?= $profile->fullname; ?>,Silahkan coba lagi, tetap semangat</h1>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-12 col-md-8">
            <div class="card mb-4">
                <div class="card-body">
                    <ul class="list-group list-group-flush w-100 log-information mt-2">
                        <li class="list-group-item">
                            <div class="avatar avatar-15 border-success"></div>
                            <div class="media experience">
                            <div class="icon-rounded icon-40 bg-light-success mr-3">
                                <i class="material-icons">info</i>
                            </div>
                            <div class="media-body">
                                <h6 class="my-0 content-color-primary">Petunjuk pengisian data pada aplikasi ppdb</h6>
                                <p class="mb-2">
                                </p>
                                <p>1. Klik menu Isi formulir untuk melengkapi data pendaftaran</p>
                                <p>2. Isikan semua data dengan <b>benar</b> dan <b>jujur</b>, isian terdiri dari:</p>
                                <p class="ml-3">a. Isi biodata pribadi dan orang tua</p>
                                <p class="ml-3">b. Isi nilai rata-rata raport tiap semester</p>
                                <p class="ml-3">c. Jika anda sudah selesai mengisi data diri dan nilai raport, baru anda <br>bisa mencetak kartu pendaftaran untuk mendapatkan jadwal verifikasi data</p>
                                <!-- <p>4. Kartu bukti pendaftaran harus dibawa saat pendaftaran ulang di SMKN 2 Kota Bogor, karena akan dilakukan verifikasi data</p> -->
                                <p>3. Jika anda sudah lolos tahap verifikasi data, anda tinggal menunggu pengumuman kelulusan sesuai tanggal dan jam yang di tentukan oleh pihak sekolah</p>                            
                            </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>