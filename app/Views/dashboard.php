<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RadiusPanel - Dashboard</title>
    <link rel="shortcut icon" href="<?= base_url('assets/img/icon_RadiusPanel.png'); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('plugins/bootstrap-5.2.3-dist/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/bootstrap-icons-1.10.3/bootstrap-icons.css'); ?>">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url(''); ?>">
                <img src="<?= base_url('assets/img/RadiusPanel.png'); ?>" alt="Logo" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url(''); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <section>
        <div class="container pt-4">
            <div class="row row-cols-1 row-cols-lg-3 g-4">
                <div class="col">
                    <div class="card text-bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Total Akun</h5>
                            <p class="card-text h1 fs-1 fw-bold">
                                1928
                                <span class="position-absolute end-0 translate-middle-x text-white-50">
                                    <i class="bi bi-people-fill"></i>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-bg-success">
                        <div class="card-body">
                            <h5 class="card-title">Online Akun</h5>
                            <p class="card-text h1 fs-1 fw-bold">
                                690
                                <span class="position-absolute end-0 translate-middle-x text-white-50">
                                    <i class="bi bi-play-circle-fill"></i>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-bg-warning">
                        <div class="card-body">
                            <h5 class="card-title">Log</h5>
                            <p class="card-text h1 fs-1 fw-bold">
                                690
                                <span class="position-absolute end-0 translate-middle-x text-white-50">
                                    <i class="bi bi-person-lines-fill"></i>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container pt-4">
            <div class="row row-cols-1 row-cols-lg-3 g-4">
                <div class="col">
                    <div class="card h-100 border-primary">
                        <div class="card-body">
                            <h6 class="card-title fw-bold">Informasi FreeRadius</h6>
                            <table class="table table-borderless table-sm table-hover">
                                <tr>
                                    <th style="width: 100px;">Status</th>
                                    <td>
                                        <div class="spinner-grow spinner-grow-sm text-success" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        Aktif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Versi</th>
                                    <td>3.0.16</td>
                                </tr>
                                <tr>
                                    <th>Tool</th>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-primary"><i class="bi bi-play-circle"></i></button>
                                            <button type="button" class="btn btn-primary"><i class="bi bi-stop-circle"></i></button>
                                            <button type="button" class="btn btn-primary"><i class="bi bi-arrow-repeat"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-success">
                        <div class="card-body">
                            <h6 class="card-title fw-bold">Informasi RadiusPanel</h6>
                            <table class="table table-borderless table-sm table-hover">
                                <tr>
                                    <th style="width: 150px;">Versi Applikasi</th>
                                    <td>
                                        v2.0.0
                                    </td>
                                </tr>
                                <tr>
                                    <th>Versi Database</th>
                                    <td>v1.1</td>
                                </tr>
                                <tr>
                                    <th>Tool</th>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-arrow-down-up"></i> Cek Update</button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-success">
                        <div class="card-body">
                            <h6 class="card-title fw-bold">Informasi System</h6>
                            <table class="table table-borderless table-sm table-hover">
                                <tr>
                                    <th style="width: 150px;">Sistem Operasi</th>
                                    <td>Ubuntu Server 18.0.5 LTS
                                    </td>
                                </tr>
                                <tr>
                                    <th>Processor</th>
                                    <td>Intel(R) Xeon(R) CPU E3-1220 v3 @ 3.10GHz</td>
                                </tr>
                                <tr>
                                    <th>Hardisk</th>
                                    <td>947M</td>
                                </tr>
                                <tr>
                                    <th>RAM</th>
                                    <td> 565M of 985M</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container pt-4 pb-3">
            <div class="small text-muted text-center">
                &copy; 2023 Dibuat dan dikembangkan oleh <a href="https://muhsaidlg.my.id" class="text-decoration-none">Muhammad Said Latif Ghofari</a>
            </div>
        </div>
    </footer>

    <script src="<?= base_url('plugins/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>