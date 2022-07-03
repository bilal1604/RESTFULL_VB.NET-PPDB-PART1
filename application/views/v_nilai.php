        <?php 
            if($profile->status_formulir === '0'){
                echo '  
                <div class="alert border-0 bg-danger mx-4 mt-3" role="alert">
                    <h4 class="alert-heading">Data Formulir Belum Lengkap</h4>
                    <hr>
                    <p>Silahkan lengkapi data anda, untuk bisa menginput data di form nilai.
                    </p> 
                </div>
                ';
            }
            ?>         
        <?php if($profile->status_formulir === '1') : ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
            </head>
            <body>
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
                                                <h6 class="my-0 content-color-primary">Petunjuk Pengisian Form Nilai</h6>
                                                <p class="mb-2">
                                                </p>
                                                <p>1. Silahkan Input nilai rata-rata raport</p>
                                                <p>2. Lalu tekan tombol submit untuk menginput data yang tadinya kosong</p>
                                                <p>3. Isi data dengan data yang sebenar-benarnya</p>
                                                <p>4. Sebelum mengklik tombol submit , <b>anda harus menekan tombol lihat hasil terlebih dahulu</b>, setelah itu<br> Tombol submit akan hilang ketika anda sudah menginput semua nilai</p>
                                            </div>
                                        </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="container mt-4 main-container">
                    <form action="<?= site_url('nilai/insertNilai'); ?>" method="POST">
                        <input type="hidden" name="nisn" value="<?=$this->session->userdata["nisn"]; ?>">
                        <input type="hidden" name="status_nilai" value="1">
                        <div class="card mb-4">
                            <div class="card-header border-bottom bg-warning">
                                <h5 class="content-color-warning mb-0 bg-pri">Input Nilai Rata-Rata Semester</h5>
                            </div>
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="col-md-10 ">
                                        <div class="form-group row">
                                        <?php if($profile->status_nilai === '0') :?>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label>Nilai Kelas 7 - Semester1</label>
                                                        <input name="nilai1"  id="nilai1" type="text" class="form-control" placeholder="Semester 1" value="<?= $profile->nilai1; ?>" required>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label>Nilai Kelas 7 - Semester 2</label>
                                                        <input name="nilai2" id="nilai2" type="text" class="form-control" placeholder="Semester 2" value="<?= $profile->nilai2; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label>Nilai Kelas 8 - Semester 1</label>
                                                        <input name="nilai3" id="nilai3" type="text" class="form-control" placeholder="Semester 3" value="<?= $profile->nilai3; ?>" required>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label>Nilai Kelas 8 - Semester 2</label>
                                                        <input name="nilai4" id="nilai4" type="text" class="form-control" placeholder="Semester 4" value="<?= $profile->nilai4; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 mt-3">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label>Nilai Kelas 9 - Semester 1</label>
                                                        <input name="nilai5" id="nilai5" type="text" class="form-control" placeholder="Semester 5" value="<?= $profile->nilai5; ?>" required>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-lg-6">
                                                        <label>Rata-Rata Nilai</label>
                                                        <input name="rata_rata" id="hasilnilai" type="text" class="form-control" value="<?= $profile->rata_rata; ?>">
                                                    </div>
                                                </div>
                                                <button id="btn-hasil" type="button" class="mt-2 btn btn-success btn-md">Lihat Hasil</button>
                                            </div>
                                        <?php else: ?>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label>Nilai Kelas 7 - Semester1</label>
                                                        <input name="nilai1" disabled  id="nilai1" type="text" class="form-control" placeholder="Semester 1" value="<?= $profile->nilai1; ?>" required>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label>Nilai Kelas 7 - Semester 2</label>
                                                        <input name="nilai2" disabled id="nilai2" type="text" class="form-control" placeholder="Semester 2" value="<?= $profile->nilai2; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label>Nilai Kelas 8 - Semester 1</label>
                                                        <input name="nilai3" disabled id="nilai3" type="text" class="form-control" placeholder="Semester 3" value="<?= $profile->nilai3; ?>" required>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label>Nilai Kelas 8 - Semester 2</label>
                                                        <input name="nilai4" disabled id="nilai4" type="text" class="form-control" placeholder="Semester 4" value="<?= $profile->nilai4; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 mt-3">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label>Nilai Kelas 9 - Semester 1</label>
                                                        <input name="nilai5" disabled id="nilai5" type="text" class="form-control" placeholder="Semester 5" value="<?= $profile->nilai5; ?>" required>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-lg-6">
                                                        <label>Rata-Rata Nilai</label>
                                                        <input name="rata_rata" id="hasilnilai" disabled type="text" class="form-control" value="<?= $profile->rata_rata; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php if($profile->status_nilai === '0') :?>
                            <div class="card-footer">
                                <button class="btn btn-secondary" type="reset">Cancel</button>
                                <button type="submit" class="btn btn-success float-right">Submit</button>
                            </div>
                            <?php else: ?>
                            <div class="card-footer">
                                <button class="btn btn-secondary" hidden>Cancel</button>
                                <button type="submit" class="btn btn-success float-right" hidden>Submit</button>
                            </div>
                            <?php endif; ?>
                        </div>
                    </form>
                </div>
                <script>
                    $(document).ready(function(){
                        $("#btn-hasil").click(function(){
                            var n1 = parseInt($("#nilai1").val());
                            var n2 = parseInt($("#nilai2").val());
                            var n3 = parseInt($("#nilai3").val());
                            var n4 = parseInt($("#nilai4").val());
                            var n5 = parseInt($("#nilai5").val());

			                var result = (n1+n2+n3+n4+n5)/5;
                            $("#hasilnilai").val(result);
                        });
                    });
                </script>
            </body>
            </html>
        <?php endif; ?>
