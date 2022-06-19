<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>./assets/css/print.css">
</head>


<body>
    <div class="container mt-3 page">
        <div class="sub-page">
            <center>
                <table width="100%">
                    <tr>
                        <td>
                            <img src="<?= base_url() ?>./assets/logo/jpr.png" width="100px" height="130px">
                        </td>
                        <td>
                            <center>
                                <strong>
                                    <h5>PEMERINTAHAN KABUPATEN JEPARA</h5>
                                    <h5>KECAMATAN WELAHAN</h5>
                                    <h5>DESA BRANTAKSEKARJATI</h5>
                                    <small>Jalan Serut Raya No. 1 Kode Pos : 59464</small>
                                </strong>
                            </center>
                        </td>
                    </tr>
                </table>
            </center>
            <hr>

            <div class="identitas">
                <?php foreach ($data as $d) { ?>
                    <p class="text-end fw-bold">
                        <small>
                            <?= $d->tanggal_surat ?>
                        </small>
                    </p>
                    <span class="text-center">
                        <strong>
                            <p>
                                <u><?= $d->jenis_surat ?></u>
                            </p>
                        </strong>
                        <p>Nomor : <?= $d->nomor_surat ?></p>
                    </span>
                <?php } ?>
            </div>
            <div class="text-surat">
                <p>Yang bertanda tangan di bawah ini:</p>
                <table class="ms-5">
                    <?php foreach ($data as $d) { ?>
                        <tr>
                            <td>Nama</td>
                            <td>: </td>
                            <td><?= $d->nama ?></td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td>: </td>
                            <td><?= $d->nik ?></td>
                        </tr>
                        <tr>
                            <td>Tempat/Tanggal Lahir</td>
                            <td>: </td>
                            <td><?= $d->tempat_lahir ?>, <?= $d->tgl_lahir ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>: </td>
                            <td><?= $d->alamat ?></td>
                        </tr>
                        <tr>
                            <td>Hubungan dengan yang meninggal</td>
                            <td>: </td>
                            <td><?= $d->hubungan ?></td>
                        </tr>
                    <?php } ?>
                </table>
                <br>
                <p>Menyatakan bahwa:</p>
                <table class="ms-5">
                    <?php foreach ($data as $d) { ?>
                        <tr>
                            <td>Nama</td>
                            <td>: </td>
                            <td><?= $d->nama_alm ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>: </td>
                            <td><?= $d->jekel_a ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>: </td>
                            <td><?= $d->alamat_a ?></td>
                        </tr>
                    <?php } ?>
                </table>
                <br>
                <p>Adalah benar - benar meninggal pada:</p>
                <table class="ms-5">
                    <?php foreach ($data as $d) { ?>
                        <tr>
                            <td>Hari</td>
                            <td>: </td>
                            <td><?= $d->hari ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td>: </td>
                            <td><?= $d->tanggal_meninggal ?></td>
                        </tr>
                        <tr>
                            <td>Dimakamkan di</td>
                            <td>: </td>
                            <td><?= $d->tempat_pemakaman ?></td>
                        </tr>
                    <?php } ?>
                </table>
                <br>
                <p style="text-align: justify;">
                    Demikian surat pernyataan ini saya buat dengan sebenar-benarnya dan apabila dikemudian hari
                    ternyata pernyataan saya ini tidak benar, maka saya bersedia diproses secara hukum sesuai
                    peraturan perundang-undangan dan dokumen yangditerbitkan akibat dan pernyataan tidak benar
                    menjadi tidak sah/batal demi hukum.
                </p>
                <br>
                <div class="kades float-end">
                    <span class="mb-n2">Berantakskarjati, <?= date('d M Y') ?></span>
                    <p>KEPALA DESA BRANTAKSEKARJATI</p>
                    <img src="<?= base_url('./assets/ttd/ttd.png') ?>" class="ttd-kades" width="80%" style="margin-top: -25px; z-index:9999;">
                    <p class="fw-bold" style="margin-top: -30px; z-index:2;">MUSYAFAK BAIHAQY</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.print();
    </script>
    </div>
    <script src="<?= base_url(); ?>./assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>