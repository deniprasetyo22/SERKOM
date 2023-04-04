<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <style>
        .navbar-brand {
            color: white;
            font-size: 40px;
            font-weight: 500;
        }

        .nav-link {
            color: white;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <!-- Menu Navigasi Utama -->
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">BEASISWAKU.COM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-right" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="pilihan_beasiswa.php">PILIHAN BEASISWA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="daftar.php">DAFTAR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="hasil.php">HASIL</a>
                    </li>
                </ul>
                <a class="nav-link" aria-current="page" href="login.php">LOGIN</a>
            </div>
        </div>
    </nav>
    <div class="container position-absolute top-50 start-50 translate-middle">
        <h1>DAFTARKAN DIRIMU</h1>
        <h1>SEKARANG JUGA</h1>
    </div>

    <div class="me-0">
        <img src="assets/images/bg.jpg" class="rounded float-end" style="width: 40%;" alt="">
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>