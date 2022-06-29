            <div class="main-content container-fluid">
            	<div class="page-title">
            		<h3>Edit Data Warga</h3>
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
            								<form action="<?= base_url('aksi-edit-warga/' . $this->uri->segment(2)) ?>" method="post" enctype="multipart/form-data">
            									<?php foreach ($warga as $data) { ?>
            										<div class="row">
            											<div class="col-lg-6">
            												<div class="form-group">
            													<label for="">NIK</label>
            													<input type="number" name="nik" class="form-control" value="<?= $data->nik ?>">
            												</div>

            												<div class="form-group">
            													<label for="">Nama Lengkap</label>
            													<input type="text" name="nama" class="form-control" value="<?= $data->nama ?>">
            												</div>
            												<div class="form-group">
            													<label for="">Jenis Kelamin</label>
            													<select name="jekel" class="form-control" id="">
            														<option selected disabled>-- Pilih Jenis Kelamin --</option>
            														<option value="Laki-laki" <?= $data->jekel == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
            														<option value="Perempuan" <?= $data->jekel == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
            													</select>
            												</div>

            												<div class="form-group">
            													<label for="">Agama</label>
            													<select name="agama" class="form-control" id="">
            														<option selected disabled>-- Pilih Agama--</option>
            														<option value="Islam" <?= $data->agama == 'Islam' ? 'selected' : '' ?>>Islam</option>
            														<option value="Kristen" <?= $data->agama == 'Kristen' ? 'selected' : '' ?>>Kristen</option>
            														<option value="Hindu" <?= $data->agama == 'Hindu' ? 'selected' : '' ?>>Hindu</option>
            														<option value="Buddha" <?= $data->agama == 'Buddha' ? 'selected' : '' ?>>Buddha</option>
            													</select>
            												</div>

            												<div class="form-group">
            													<label for="">Golongan Darah</label>
            													<select name="golongan_darah" class="form-control" id="">
            														<option selected disabled>-- Pilih Golongan Darah--</option>
            														<option value="A" <?= $data->golongan_darah == 'A' ? 'selected' : '' ?>>A</option>
            														<option value="B" <?= $data->golongan_darah == 'B' ? 'selected' : '' ?>>B</option>
            														<option value="AB" <?= $data->golongan_darah == 'AB' ? 'selected' : '' ?>>AB</option>
            														<option value="O" <?= $data->golongan_darah == 'O' ? 'selected' : '' ?>>O</option>
            														<option value="Tidak Tahu" <?= $data->golongan_darah == 'Tidak Tahu' ? 'selected' : '' ?>>Tidak Tahu</option>
            													</select>
            												</div>

            												<div class="form-group">
            													<label for="">Pendidikan</label>
            													<select name="pendidikan" class="form-control" id="">
            														<option selected disabled>-- Pilih Pendidikan--</option>
            														<option value="Tamat SD/Sederajat" <?= $data->pendidikan == 'Tamat SD/Sederajat' ? 'selected' : '' ?>>Tamat SD/Sederajat</option>
            														<option value="Tamat SMP/Sederajat" <?= $data->pendidikan == 'Tamat SMP/Sederajat' ? 'selected' : '' ?>>Tamat SMP/Sederajat</option>
            														<option value="Tamat SMA/Sederajat" <?= $data->pendidikan == 'Tamat SMA/Sederajat' ? 'selected' : '' ?>>Tamat SMA/Sederajat</option>
            														<option value="D3" <?= $data->pendidikan == 'D3' ? 'selected' : '' ?>>D3</option>
            														<option value="S1" <?= $data->pendidikan == 'S1' ? 'selected' : '' ?>>S1</option>
            														<option value="S2" <?= $data->pendidikan == 'S2' ? 'selected' : '' ?>>S2</option>
            														<option value="S3" <?= $data->pendidikan == 'S3' ? 'selected' : '' ?>>S3</option>
            														<option value="Tidak Sekolah" <?= $data->pendidikan == 'Tidak Sekolah' ? 'selected' : '' ?>>Tidak Sekolah</option>
            													</select>
            												</div>

            											</div>
            											<div class="col-lg-6">
            												<div class="form-group">
            													<label for="">Status Pernikahan</label>
            													<select name="status_pernikahan" class="form-control" id="">
            														<option selected disabled>-- Pilih Status --</option>
            														<option value="Menikah" <?= $data->status_pernikahan == 'Menikah' ? 'selected' : '' ?>>Menikah</option>
            														<option value="Belum Menikah" <?= $data->status_pernikahan == 'Belum Menikah' ? 'selected' : '' ?>>Belum Menikah</option>
            														<option value="Cerai" <?= $data->status_pernikahan == 'Cerai' ? 'selected' : '' ?>>Cerai</option>
            													</select>
            												</div>

            												<div class="form-group">
            													<label for="">Pekerjaan</label>
            													<input type="text" name="pekerjaan" class="form-control" value="<?= $data->pekerjaan ?>">
            												</div>

            												<div class="form-group">
            													<label for="">Tempat Lahir</label>
            													<input type="text" name="tempat_lahir" class="form-control" value="<?= $data->tempat_lahir ?>">
            												</div>

            												<div class="form-group">
            													<label for="">Tanggal Lahir</label>
            													<input type="date" name="tgl_lahir" class="form-control" value="<?= $data->tgl_lahir ?>" id="">
            												</div>

            												<div class="form-group">
            													<label for="">Rt/Rw</label>
            													<div class="row">
            														<div class="col-6">
            															<input type="number" name="rt" class="form-control" placeholder="RT" value="<?= $data->rt ?>">

            														</div>
            														<div class="col-6">
            															<input type="number" name="rw" class="form-control" placeholder="RW" value="<?= $data->rw ?>">

            														</div>
            													</div>
            												</div>
            												<div class="form-group">
            													<label for="">Alamat</label>
            													<textarea name="alamat" id="" class="form-control"><?= $data->alamat ?></textarea>
            												</div>

            											</div>
            										</div>
            									<?php } ?>
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
