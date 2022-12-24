<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
</head>

<body>
    <div class="container mt-4">
        <div class="d-flex justify-content-center">
            <div class="card rounded-4 overflow-hidden" style="width: 30rem;">
                <div class="card-header text-center">
                    <h5>Form Tambah Data Komponen</h5>
                </div>
                <div class="card-body">
                    <a href="<?= site_url() ?>">&lt Kembali</a>
                    <form method="POST" action="<?= site_url() ?>/Komponen004/simpan" class="mt-4">
                        <div class="mb-3">
                            <label for="merek" class="form-label">Merek Komponen</label>
                            <input type="text" class="form-control rounded-pill" id="merek" name="merek">
                        </div>
                        <div class="mb-3">
                            <label for="kapasitas" class="form-label">Kapasitas Komponen</label>
                            <input type="text" class="form-control rounded-pill" id="kapasitas" name="kapasitas">
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga Komponen</label>
                            <input type="text" class="form-control rounded-pill" id="harga" name="harga">
                        </div>
                        <div class="mb-3">
                            <label for="jenis" class="form-label">Jenis Komponen</label>
                            <input type="text" class="form-control rounded-pill" id="jenis" name="jenis">
                        </div>
                        <button type="submit" class="btn btn-primary rounded-pill w-100">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>