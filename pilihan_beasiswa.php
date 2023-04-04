<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilihan Beasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
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

        #form {
            padding-top: 30px;
            padding-bottom: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }
    </style>
</head>

<body>
    <!-- Menu Navigasi Utama -->
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">BEASISWAKU.COM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
    <div class="container" id="form">
        <div class="card">
            <div class="card-header text-center">
                Daftar Beasiswa
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card-body">
                        <h5 class="card-title text-center">Beasiswa Prestasi Akademik</h5><br>
                        <p class="card-text">
                            Syarat dan Ketentuan : <br>
                            1. Warga Negara Indonesia <br>
                            2. Mahasiswa aktif semester 1-8 <br>
                            3. Melengkapi berkas wajib (KTP, KK dan KTM) <br>
                            4. IPK Min. 3.00 dari skala 4 <br>
                            5. Tidak sedang menerima beasiswa lain <br>
                        </p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card-body">
                        <h5 class="card-title text-center">Beasiswa Prestasi Non Akademik</h5><br>
                        <p class="card-text">
                            Syarat dan Ketentuan : <br>
                            1. Warga Negara Indonesia <br>
                            2. Mahasiswa aktif semester 1-8 <br>
                            3. Melengkapi berkas wajib (KTP, KK dan KTM) <br>
                            4. IPK Min. 3.00 dari skala 4 <br>
                            5. Memiliki bukti prestasi non akademik <br>
                            6. Tidak sedang menerima beasiswa lain <br>
                        </p>
                    </div>
                </div>
                <div class="text-center mt-3 mb-3">
                    <!-- Mengarahkan ke menu Pendaftaran Beasiswa -->
                    <a href="daftar.php" class="btn btn-primary">Daftar</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>
