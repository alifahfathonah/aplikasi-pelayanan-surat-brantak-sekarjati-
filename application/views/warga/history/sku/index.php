            <div class="main-content container-fluid">
                <div class="page-title">
                    <h4>History Surat Keterangan Usaha</h4>
                </div>
                <section class="section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive overflow-auto">
                                        <table id="histori" class="table table-striped table-bordered text-center" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Jenis Surat</th>
                                                    <th>Nomor Surat</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $n = 1;
                                                foreach ($datas as $data) { ?>
                                                    <tr>
                                                        <td><?= $n ?></td>
                                                        <td><?= $data->jenis_surat ?></td>
                                                        <td><?= $data->nomor_surat ?></td>
                                                        <td>
                                                            <?php
                                                            if ($data->status == 'Menunggu Verifikasi') {
                                                                echo '<span class="badge bg-warning">Menunggu Verifikasi</span>';
                                                            } else if ($data->status == 'Terverifikasi') {
                                                                echo '<span class="badge bg-primary">Terverifikasi</span>';
                                                            } else if ($data->status == 'Diterima') {
                                                                echo '<span class="badge bg-success">Diterima</span>';
                                                            } else if ($data->status == 'Ditolak') {
                                                                echo '<span class="badge bg-danger">Ditolak</span>';
                                                            }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($data->status == 'Diterima') { ?>
                                                                <a href="<?= base_url('cetak-surat-usaha/' . $data->id . '?nomor=' . $data->nomor_surat) ?>" class="btn btn-primary btn-sm" target="_blank"><i class="bi bi-printer-fill"></i> Cetak</a>
                                                            <?php } else if ($data->status == 'Ditolak') { ?>
                                                                <button class="btn btn-warning btn-sm" type="button">Komentar</button>
                                                            <?php } else { ?>
                                                                <small class="text-center text-danger font-bold">No Action</small>
                                                            <?php } ?>
                                                        </td>
                                                    </tr>
                                                <?php $n++;
                                                } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>