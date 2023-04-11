<!-- Tag PHP -->
<?php
    $page   = $_GET['page'];
    switch($page) {
        case 1 :
            $akses  = "Admin";
            break;
        case 2 :
            $akses  = "Petugas";
            break;
        case 3 :
            $akses  = "Mahasiswa";
            break;
        default :
            $akses  = "Pengguna";
            break;
    }
    $judul  = "Dashboard";
    $nama   = "Srik";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title><?= $judul.' | '.$akses; ?></title>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-gradient bg-primary px-5 py-4">
    <div class="container-fluid px-5">
        <a class="navbar-brand text-light" href="#">Website</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link text-light" href="?page=1">Halaman Admin</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-light" href="?page=2">Halaman Petugas</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-light" href="?page=3">Halaman Mahasiswa</a>
            </li>
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav>
    
    <center class="pt-5">
        <h1>Selamat Datang, <?= $nama; ?></h1>
        <p>Silahkan kelola data <?= $akses; ?> ini dengan baik ya!</p>
    </center>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>