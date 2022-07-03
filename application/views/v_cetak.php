<?php if($profile->status_nilai === '0') : ?>
  <div class="alert border-0 bg-danger mx-4 mt-3" role="alert">
      <h4 class="alert-heading">Data Nilai Belum Lengkap</h4>
      <hr>
      <p>Silahkan lengkapi data nilai, untuk bisa mencetak kartu pendaftaran anda.
      </p> 
  </div>
<?php else: ?>
  <div class=" col-12 col-md-12 mt-3">
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
                <h6 class="my-0 content-color-primary">Petunjuk Mencetak Kartu Pendaftaran</h6>
                <p class="mb-2"></p>
                <p>1. Jika anda sudah mengisi data formulir dan data nilai</p>
                <p>2. Silahkan anda menekah tombol cetak kartu untuk mendapatkan kartu</p>
                <p>3. Setelah berhasil mencetak kartu pendaftaran, maka kamu akan mendapatkan jadwal verifikasi data</p>
                <p>
                  4. Setelah berhasil mendapatkan jadwal, maka siapkan dokumen seperti :<br>
                      ✔ Pas Foto 3 X 4 (Background berwarna merah)<br>
                      ✔ Fotocopy , Kartu Keluarga<br>
                      ✔ Fotocopy , Akta Kelahiran<br>
                      ✔ Fotocopy Nilai Raport SMP dari kelas 7 Semester 1 sampai dengan kelas 9 Semester 1<br>
                      Dokumen diatas dibawa ke sekolah sesuai jadwal yang anda dapat pada kartu peserta, berkas yang dilampirkan dibawa untuk keperluan verifikasi data<br>
                      ❌ Jika ada kebohongan atau ketidak sesuaian nilai yang di input dengan raport aslinya Maka anda dinyatakan <b>Gugur<b>
                </p>
                <p class="mt-4">
                  <a target="_blank" href="<?= site_url('CetakKartu/printKartuPendaftaran'); ?>" class="btn btn-outline-primary btn-md">Cetak Kartu</a>
                </p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
<?php endif; ?>