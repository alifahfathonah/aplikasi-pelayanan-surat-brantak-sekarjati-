            <div class="main-content container-fluid">
                <div class="page-title">
                    <h3>Tambah Data Warga</h3>
                </div>
                <section class="section">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="card">
                                <div class="card-body">
                                    <div class="btn-group mb-3">
                                        <a href="<?= base_url('data-warga') ?>" class="btn btn-warning btn-sm">Kembali</a>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form action="<?= base_url('create-warga') ?>" method="post" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="">NIK</label>
                                                            <input type="number" name="nik" class="form-control" value="<?= set_value('nik') ?>">
                                                        </div>
                                                        <small class="text-danger"><?= form_error('nik') ?></small>
                                                        <div class="form-group">
                                                            <label for="">Nama Lengkap</label>
                                                            <input type="text" name="nama" class="form-control" value="<?= set_value('nama') ?>">
                                                        </div>
                                                        <small class="text-danger"><?= form_error('nama') ?></small>
                                                        <div class="form-group">
                                                            <label for="">Jenis Kelamin</label>
                                                            <select name="jekel" class="form-control" id="">
                                                                <option selected disabled>-- Pilih Jenis Kelamin --</option>
                                                                <option value="Laki-laki">Laki-laki</option>
                                                                <option value="Perempuan">Perempuan</option>
                                                            </select>
                                                        </div>
                                                        <small class="text-danger"><?= form_error('jekel') ?></small>
                                                        <div class="form-group">
                                                            <label for="">Agama</label>
                                                            <select name="agama" class="form-control" id="">
                                                                <option selected disabled>-- Pilih Agama--</option>
                                                                <option value="Islam">Islam</option>
                                                                <option value="Kristen">Kristen</option>
                                                                <option value="Hindu">Hindu</option>
                                                                <option value="Buddha">Buddha</option>
                                                            </select>
                                                        </div>
                                                        <small class="text-danger"><?= form_error('agama') ?></small>
                                                        <div class="form-group">
                                                            <label for="">Golongan Darah</label>
                                                            <select name="golongan_darah" class="form-control" id="">
                                                                <option selected disabled>-- Pilih Golongan Darah--</option>
                                                                <option value="A">A</option>
                                                                <option value="B">B</option>
                                                                <option value="AB">AB</option>
                                                                <option value="O">O</option>
                                                                <option value="Tidak Tahu">Tidak Tahu</option>
                                                            </select>
                                                        </div>
                                                        <small class="text-danger"><?= form_error('golongan_darah') ?></small>
                                                        <div class="form-group">
                                                            <label for="">Pendidikan</label>
                                                            <select name="pendidikan" class="form-control" id="">
                                                                <option selected disabled>-- Pilih Pendidikan--</option>
                                                                <option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
                                                                <option value="Tamat SMP/Sederajat">Tamat SMP/Sederajat</option>
                                                                <option value="Tamat SMA/Sederajat">Tamat SMA/Sederajat</option>
                                                                <option value="D3">D3</option>
                                                                <option value="S1">S1</option>
                                                                <option value="S3">S3</option>
                                                                <option value="S3">S3</option>
                                                                <option value="Tidak Sekolah">Tidak Sekolah</option>
                                                            </select>
                                                        </div>
                                                        <small class="text-danger"><?= form_error('pendidikan') ?></small>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="">Status Perkawinan</label>
                                                            <select name="status_pernikahan" class="form-control" id="">
                                                                <option selected disabled>-- Pilih Status --</option>
                                                                <option value="Menikah">Menikah</option>
                                                                <option value="Belum Menikah">Belum Menikah</option>
                                                                <option value="Cerai">Cerai</option>
                                                            </select>
                                                        </div>
                                                        <small class="text-danger"><?= form_error('status_perkawinan') ?></small>
                                                        <div class="form-group">
                                                            <label for="">Pekerjaan</label>
                                                            <input type="text" name="pekerjaan" class="form-control" value="<?= set_value('pekerjaan') ?>">
                                                        </div>
                                                        <small class="text-danger"><?= form_error('pekerjaan') ?></small>
                                                        <div class="form-group">
                                                            <label for="">Tempat Lahir</label>
                                                            <input type="text" name="tempat_lahir" class="form-control" value="<?= set_value('tempat_lahir') ?>">
                                                        </div>
                                                        <small class="text-danger"><?= form_error('tempat_lahir') ?></small>
                                                        <div class="form-group">
                                                            <label for="">Tanggal Lahir</label>
                                                            <input type="date" name="tgl_lahir" class="form-control" value="<?= set_value('tgl_lahir') ?>" id="">
                                                        </div>
                                                        <small class="text-danger"><?= form_error('tgl_lahir') ?></small>
                                                        <div class="form-group">
                                                            <label for="">Rt/Rw</label>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <input type="number" name="rt" class="form-control" placeholder="RT" value="<?= set_value('rt') ?>">
                                                                    <small class="text-danger"><?= form_error('rt') ?></small>
                                                                </div>
                                                                <div class="col-6">
                                                                    <input type="number" name="rw" class="form-control" placeholder="RW" value="<?= set_value('rw') ?>">
                                                                    <small class="text-danger"><?= form_error('rw') ?></small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Alamat</label>
                                                            <textarea name="alamat" id="" class="form-control"><?= set_value('alamat') ?></textarea>
                                                        </div>
                                                        <small class="text-danger"><?= form_error('alamat') ?></small>
                                                    </div>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>