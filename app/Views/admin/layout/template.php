<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $title; ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">Tiket Wisata</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url('admin'); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/wisata'); ?>">Wisata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/petugas'); ?>">Admin</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/member'); ?>">Member</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/order'); ?>">Order Tiket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/laporan'); ?>">Laporan Tiket</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/'); ?>">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container py-3">
        <div class="row">
            <div class="col-md-12 mb-5">
                <?= $this->renderSection('content'); ?>
            </div>
            <!-- <div class="col-md-4">
                <h5>List Wisata</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Curug Badak</li>
                    <li class="list-group-item">Curug Batuhanoman</li>

                </ul>
            </div> -->

        </div>
    </div>
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-12 bg-dark text-white py-2">
                <p class="text-center my-auto">
                    2023 &copy; Projek Kel-3 STT YBSI Tasikmalaya
                </p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>