<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
</head>

<body>
    <div class="container">
        <div class="alert alert-info rounded-pill text-center mt-4" role="alert">
            <h3>Tugas Crud Web Lanjut</h3>
        </div>
        <div class="card rounded-4 overflow-hidden">
            <div class="card-header text-center">
                <h5>Tabel Komponen 2001050004</h5>
            </div>
            <div class="card-body ">
                <a href="<?= site_url() ?>/Komponen004/tambah" class="btn rounded-pill btn-primary mb-2" role="button">Tambah Komponen</a>
                <div class="table-responsive-lg">
                    <table class="table table-hover table-bordered align-middle">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">ID Komponen</th>
                                <th scope="col">Merek Komponen</th>
                                <th scope="col">Kapasitas Komponen</th>
                                <th scope="col">Harga Komponen</th>
                                <th scope="col">Jenis Komponen</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($komponen as $kmpn) : ?>
                                <tr>
                                    <th scope="row"><?= $no ?></th>
                                    <td><?= $kmpn['id_komponen'] ?></td>
                                    <td><?= $kmpn['merek_004'] ?></td>
                                    <td><?= $kmpn['kapasitas_004'] ?></td>
                                    <td><?= $kmpn['harga_004'] ?></td>
                                    <td><?= $kmpn['jenis_004'] ?></td>
                                    <td>
                                        <div class="d-flex gap-1">
                                            <a href="<?= site_url() ?>/Komponen004/ubah/<?= $kmpn['id_komponen'] ?>" class="btn rounded-pill w-100 btn-warning btn-sm" role="button">Ubah</a>
                                            <a href="<?= site_url() ?>/Komponen004/hapus/<?= $kmpn['id_komponen'] ?>" class="btn rounded-pill w-100 btn-danger btn-sm" role="button" onclick="return confirm('Yakin menghapus barang?')">Hapus</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                                $no++;
                            endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




    <script src="<?= base_url('assets/js/bootstrap.js') ?>"></script>
</body>

</html>