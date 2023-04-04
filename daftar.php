<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
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

        #form {
            padding-top: 10px;
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
    <!-- Form Pendaftaran -->
    <div class="container" id="form">
        <div class="card">
            <div class="card-header text-center">
                Daftar Beasiswa
            </div>
            <form action="prosesdaftar.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <label for="nama" class="form-label">Nama</label>
                    <div class="input-group flex-nowrap">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama" aria-describedby="addon-wrapping" autocomplete="off">
                    </div>
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group flex-nowrap">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email" aria-describedby="addon-wrapping" autocomplete="off">
                    </div>
                    <label for="nohp" class="form-label">No HP</label>
                    <div class="input-group flex-nowrap">
                        <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Masukan No HP" aria-describedby="addon-wrapping" autocomplete="off">
                    </div>
                    <label for="semester" class="form-label">Semester Saat Ini</label>
                    <div class="input-group flex-nowrap">
                        <select class="form-control" onchange="ipk_terakhir()" id="semester" name="semester" placeholder="Pilih Semester" aria-describedby="addon-wrapping" autocomplete="off">
                            <option selected>--Pilih Semester--</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                    </div>
                    <label for="ipk" class="form-label">IPK Terakhir</label>
                    <div class="input-group flex-nowrap">
                        <input type="int"  class="form-control" id="ipk" name="ipk" placeholder="Masukan IPK" aria-describedby="addon-wrapping" autocomplete="off" readonly require>
                    </div>
                    <label for="beasiswa" class="form-label">Pilih Beasiswa</label>
                    <div class="input-group flex-nowrap">
                        <select class="form-control" id="beasiswa" name="beasiswa" placeholder="Pilih Beasiswa" aria-describedby="addon-wrapping" autocomplete="off">
                            <option selected>--Pilih Beasiswa--</option>
                            <option value="Akademik">Akademik</option>
                            <option value="Non Akademik">Non Akademik</option>
                        </select>
                    </div>
                    <label for="berkas" class="form-label">Upload Berkas Syarat ( *JPG/PNG )</label>
                    <div class="input-group flex-nowrap">
                        <input type= "file" name="berkas" class="form-control" id="berkas" name="berkas" placeholder="Upload Berkas" aria-describedby="addon-wrapping" autocomplete="off">
                    </div>
                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-primary" name="btnRegister">Daftar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Memasukkan Script dengan link -->
    <script src="script_ipk.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>
