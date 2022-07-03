 <?php if($profile->status_verifikasi === '0' && date('d-m-Y', time()) == date('d-m-Y', strtotime($jadwal->mulai_verifikasi)))  : ?>
    <div class="alert border-0 bg-warning mx-4 mt-3" role="alert">
      <h4 class="alert-heading">Data sedang di proses pada tahap verifikasi</h4>
      <hr>
      <p>Data sedang dalam pengecekan oleh pihak sekolah.
      </p> 
    </div>
  <?php elseif($profile->status_verifikasi === '1') : ?>
    <div class="alert border-0 bg-danger mx-4 mt-3" role="alert">
      <h4 class="alert-heading">Anda Tidak Lolos Tahap Verifikasi</h4>
      <hr>
      <p>Ada kebohongan data yang anda input form nilai raport, kami sesuaikan dengan raport asli ternyata ada ketidak samaan nilai.
      </p> 
    </div>
  <?php elseif($profile->status_verifikasi === '2' && date('d-m-Y', time()) == date('d-m-Y', strtotime($jadwal->pengumuman_hasil_seleksi))) : ?>
    <div class="card-body">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Asal Sekolah</th>
            <th>Rata-Rata Nilai</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
        <?php echo form_open('informasi/hasilseleksi/searchData') ?>
          <div class="input-group mb-4 col-sm-4">
            <input type="text" name="keyword" class="form-control" placeholder="Masukan NISN anda" aria-label="Masukan NISN anda" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button type="submit" class="btn btn-outline-secondary" type="button">Cari</button>
            </div>
          </div>
        <?php echo form_close() ?>
          <?php $no = 1; ?>
          <?php foreach($siswa as $data): ?>
            <?php if($data->status_seleksi == 2) :?>
            <tr>
              <th><?= $no++; ?></th>
              <td><?= $data->fullname; ?></td>
              <td><?= $data->asal_sekolah; ?></td>
              <td><?= $data->rata_rata; ?></td>
              <td><?= $data->status_seleksi; ?></td>
            </tr>
            <?php else : ?>
            <?php endif; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <?php elseif($profile->status_verifikasi === '2' ) : ?>
      <div class="alert border-0 bg-success mx-4 mt-3" role="alert">
      <h4 class="alert-heading">Selamat anda lolos tahap verifikasi</h4>
      <hr>
      <p>Tunggu Pengumuman Hasil Seleksi sesuai jadwal ya, Jika note anda tidak lolos tahap verifikasi maka hasil seleksi kamu bearti tidak lulus seleksi .
      </p> 
    </div>
    <?php else: ?>
      <div class="alert border-0 bg-info mx-4 mt-3" role="alert">
      <h4 class="alert-heading">Tahap Verifikasi Belom dimulai</h4>
      <hr>
      <p>Tunggu Pengumuman Hasil Verifikasi sesuai jadwal ya .
      </p> 
    </div>
  <?php endif; ?>