            <div class="main-content container-fluid">
                <div class="page-title">
                    <h3>Detail Data Warga | <?= $nik ?></h3>
                </div>
                <section class="section">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="card">
                                <div class="card-body">
                                    <a href="<?= base_url('data-warga') ?>" class="btn btn-warning btn-sm mb-2">Kembali</a>
                                    <table class="table" style="width:100%">
                                        <?php foreach ($detail as $data) { ?>
                                            <tr>
                                                <td>Nik</td>
                                                <td> : <?= $data->nik ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Nama Lengkap</td>
                                                <td> : <?= $data->nama ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Jenis Kelamin</td>
                                                <td> : <?= $data->jekel ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Agama</td>
                                                <td> : <?= $data->agama ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Golongan Darah</td>
                                                <td> : <?= $data->golongan_darah ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Pendidikan</td>
                                                <td> : <?= $data->pendidikan ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Status Pernikahan</td>
                                                <td> : <?= $data->status_pernikahan ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Pekerjaan</td>
                                                <td> : <?= $data->pekerjaan ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Tempat, Tanggal Lahir</td>
                                                <td> : <?= $data->tempat_lahir ?>, <?= $data->tgl_lahir ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Rt / Rw</td>
                                                <td> : <?= $data->rt ?> / <?= $data->rw ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td> : <?= $data->alamat ?></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                        <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>