<!-- content page -->
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
                                <h6 class="my-0 content-color-primary">Petunjuk Pengisian Formulir</h6>
                                <p class="mb-2">
                                </p>
                                <p>1. Silahkan Input data asal sekolah hingga pilih menu jurusan</p>
                                <p>2. Lalu tekan tombol submit untuk menginput data yang tadinya kosong</p>
                                <p>3. Jika anda salah input atau salah memilih, anda bisa menginput dan memilih datanya kembali</p>
                                <p>4. Setelah itu klik tombol submit jika ingin mengubah data</p>
                            </div>
                        </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container mt-4 main-container">
    <div class="card mb-4">
        <div class="card-header border-bottom">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#data-siswa" role="tab" aria-controls="nav-home" aria-selected="true">Data Siswa</a>
                    <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#data-parent" role="tab" aria-controls="nav-profile" aria-selected="false">Data Orangtua</a>
                    <!-- <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#upload" role="tab" aria-controls="nav-contact" aria-selected="false">Unggah Dokumen</a> -->
                </div>
            </nav>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-10 tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="data-siswa" role="tabpanel" aria-labelledby="nav-home-tab">
                        <form action="<?= site_url('formulir/insertFormulirSiswa'); ?>" method="POST">
                            <div class="form-group row">
                                <input type="hidden" name="nisn" value="<?= $this->session->userdata['nisn']; ?>">
                                <div class="col-lg-6 col-md-6">
                                    <label>Nama Lengkap</label>
                                    <input type="text" name="fullname" class="form-control" autocomplete="off"  placeholder="" value="<?= $profile->fullname; ?>">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label>Asal Sekolah</label>
                                    <input type="text" name="asal_sekolah" class="form-control" placeholder="" autocomplete="off" value="<?= $profile->asal_sekolah; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <input type="hidden" name="nisn" value="<?= $this->session->userdata['nisn']; ?>">
                                <div class="col-lg-6 col-md-6">
                                    <label>Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" autocomplete="off"  placeholder="" value="<?= $profile->tempat_lahir; ?>">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" class="form-control" placeholder="" autocomplete="off" value="<?= $profile->tgl_lahir; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <label>Alamat</label>
                                    <textarea name="alamat" class="form-control" placeholder="Type here" rows="2" autocomplete="off"><?= $profile->alamat; ?></textarea>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label>Jenis Kelamin</label>
                                    <select class="form-control" name="gender">
                                        <option value="<?= $profile->gender; ?>" selected ><?= $profile->gender; ?></option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <label>Telepon</label>
                                    <input name="telepon" type="text" class="form-control" placeholder="" autocomplete="off" value="<?= $profile->telepon; ?>">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label>Jurusan</label>
                                    <select class="form-control" name="jurusan">
                                        <option value="<?= $profile->jurusan; ?>" selected ><?= $profile->jurusan; ?></option>
                                        <option value="Bisnis konstruksi dan properti">Bisnis konstruksi dan properti</option>
                                        <option value="Desain Pemodelan dan Informasi Bangun">Desain Pemodelan dan Informasi Bangun</option>
                                        <option value="Teknik Instalasi Tenaga Listrik">Teknik Instalasi Tenaga Listrik</option>
                                        <option value="Teknik Audio-Video">Teknik Audio-Video</option>
                                        <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
                                        <option value="Teknik Pemesinan">Teknik Pemesinan</option>
                                        <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-5 ml-0">
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                                <button type="submit" class="btn btn-success float-right ml-3">Submit</button>
                            </div>
                        </form>                     
                    </div>
                    <div class="tab-pane fade" id="data-parent" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <form action="<?= site_url('formulir/insertFormulirParent'); ?>" method="POST">
                            <input type="hidden" name="nisn" value="<?= $this->session->userdata['nisn']; ?>">
                            <input type="hidden" name="status_formulir" value="1">
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <label>Nama Lengkap Ayah</label>
                                    <input type="text" name="nama_ayah" class="form-control"  autocomplete="off"  placeholder="" value="<?= $profile->nama_ayah; ?>">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label>Nama Lengkap Ibu</label>
                                    <input type="text" name="nama_ibu" class="form-control" autocomplete="off" placeholder="" value="<?= $profile->nama_ibu; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <label>Pendidikan Terakhir Ayah</label>
                                    <input type="text" name="pdk_ayah" autocomplete="off" class="form-control" placeholder="" value="<?= $profile->pdk_ayah; ?>">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label>Pendidikan Terakhir Ibu</label>
                                    <input type="text" name="pdk_ibu" class="form-control" autocomplete="off" placeholder="" value="<?= $profile->pdk_ibu; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <label>Pekerjaan Ayah</label>
                                    <input type="text" name="pkr_ayah" class="form-control" autocomplete="off" placeholder="" value="<?= $profile->pkr_ayah; ?>">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label>Pekerjaan Ibu</label>
                                    <input type="text" name="pkr_ibu" class="form-control" autocomplete="off" placeholder="" value="<?= $profile->pkr_ibu; ?>">
                                </div>
                            </div>
                            <div class="mt-4 ml-0">
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                                <button type="submit" class="btn btn-success float-right ml-3">Submit</button>
                            </div>
                        </form> 
                    </div>
                    <!-- <div class="tab-pane fade" id="upload" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="form-group row">
                            <div class="col-lg-6 col-md-6">
                                <?= form_open_multipart('Formulir/savePasFoto'); ?>
                                    <div class="card">
                                        <input type="hidden" name="nisn" value="<?= $this->session->userdata['nisn']; ?>">
                                        <label>Pas Foto</label>
                                        <p><b> 3X4 Background Merah</b></p>
                                        <p>
                                            <small>Ektensi: jpg, jpeg | Ukuran Maks : 200kb</small>
                                        </p>
                                        <div class="custom-file">
                                            <input type="file" class="form-control" name="pasfoto">
                                        </div>
                                        <div class="mt-2">
                                            <p>Dokumen Yang Di Upload</p>
                                            <?php echo"<img src='".base_url("/assets/upload/".$profile->pasfoto)."' width='100' height='100'>"; ?>
                                            <p>Nama File: <b><?= $profile->pasfoto; ?></b></p>
                                        </div>
                                        <div class="mt-4">
                                            <button type="reset" class="btn btn-secondary btn-sm ml-2 mb-3">Cancel</button>
                                            <button type="submit" class="btn btn-success float-right btn-sm mr-2 mb-3">Submit</button>
                                        </div>
                                    </div>
                                <?= form_close(); ?>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                Lihat Dokumen KK Yang di Upload : <button class="btn btn-rounded pink-gradient text-uppercase pr-3 mb-4" data-toggle="modal" data-target="#exampleModal"><i class="material-icons">add</i> <span class="text-hide-xs">Transfer</span></button>
                                <?= form_open_multipart('Formulir/saveKartuKeluarga'); ?>
                                    <div class="card">
                                        <input type="hidden" name="nisn" value="<?= $this->session->userdata['nisn']; ?>">
                                        <label>Kartu Keluarga</label>
                                        <p>
                                            <small>Ektensi: jpg, jpeg | Ukuran Maks : 200kb</small>
                                        </p>
                                        <div class="custom-file">
                                            <input type="file" class="form-control" name="kakel">
                                        </div>
                                        <div class="mt-2">
                                            <p>Dokumen Yang Di Upload</p>
                                            <?php echo"<img src='".base_url("/assets/upload/".$profile->kakel)."' width='100' height='100'>"; ?>
                                            <p>Nama File: <b><?= $profile->kakel; ?></b></p>
                                        </div>
                                        <div class="mt-4">
                                            <button type="reset" class="btn btn-secondary btn-sm ml-2 mb-3">Cancel</button>
                                            <button type="submit" class="btn btn-success float-right btn-sm mr-2 mb-3">Submit</button>
                                        </div>
                                    </div>
                                    <?= form_close(); ?>
                                </div>
                            </div>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Dokumen Kartu Keluarga</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                        <div class="col-lg-6 col-md-6">
                                Lihat Dokumen Akte Yang di Upload : <button class="btn btn-rounded pink-gradient text-uppercase pr-3 mb-4" data-toggle="modal" data-target="#exampleModal"><i class="material-icons">add</i> <span class="text-hide-xs">Transfer</span></button>
                                <?= form_open_multipart('Formulir/saveAkte'); ?>
                                    <div class="card">
                                        <input type="hidden" name="nisn" value="<?= $this->session->userdata['nisn']; ?>">
                                        <label>Akte Kelahiran</label>
                                        <p>
                                            <small>Ektensi: pdf | Ukuran Maks : 200kb</small>
                                        </p>
                                        <div class="custom-file">
                                            <input type="file" class="form-control" name="akte">
                                        </div>
                                        <div class="mt-2">
                                            <p>Dokumen Yang Di Upload</p>
                                            <?php echo"<img src='".base_url("/assets/upload/".$profile->akte)."' width='100' height='100'>"; ?>
                                            <p>Nama File: <b><?= $profile->akte; ?></b></p>
                                        </div>
                                        <div class="mt-4">
                                            <button type="reset" class="btn btn-secondary btn-sm ml-2 mb-3">Cancel</button>
                                            <button type="submit" class="btn btn-success float-right btn-sm mr-2 mb-3">Submit</button>
                                        </div>
                                    </div>
                                    <?= form_close(); ?>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content page ends -->  