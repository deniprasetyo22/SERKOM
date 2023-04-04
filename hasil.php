<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
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
        #judul{
            padding-top: 30px;
            padding-bottom: 30px;
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
    <h2 class="text-center" id="judul">HASIL PENDAFTARAN BEASISWA</h2>
    <div class="container">
        <table class="table table-bordered text-center" id="table">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">NO HP</th>
                    <th scope="col">SEMESTER SAAT INI</th>
                    <th scope="col">IPK TERAKHIR</th>
                    <th scope="col">PILIHAN BEASISWA</th>
                    <th scope="col">BERKAS</th>
                    <th scope="col">STATUS AJUAN</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!-- Menampilkan data dari database -->
                    <?php
                    include "koneksi.php";
                    $data = mysqli_query($koneksi, "SELECT id, nama, email, nohp, semester, ipk, beasiswa, berkas, status FROM daftar ORDER BY id DESC");
                    $batas = 10;
                    $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
                    $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;
                    $previous = $halaman - 1;
                    $next = $halaman + 1;
                    $jumlah_data = mysqli_num_rows($data);
                    $total_halaman = ceil($jumlah_data / $batas);
                    $no = $halaman_awal + 1;

                    $query = mysqli_query($koneksi, "SELECT id, nama, email, nohp, semester, ipk, beasiswa, berkas, status FROM daftar ORDER BY id DESC LIMIT $halaman_awal, $batas");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <td class="text-center"><?php echo $no++ ?></td>
                        <td class="text-center"><?php echo $data['nama']; ?></td>
                        <td class="text-center"><?php echo $data['email']; ?></td>
                        <td class="text-center"><?php echo $data['nohp']; ?></td>
                        <td class="text-center"><?php echo $data['semester']; ?></td>
                        <td class="text-center"><?php echo $data['ipk']; ?></td>
                        <td class="text-center"><?php echo $data['beasiswa']; ?></td>
                        <td class="text-center"><?php echo "<img src='file/$data[berkas]' width='100' height='100' />"; ?></td>
                        <td class="text-center"><?php echo $data['status']; ?></td>
                </tr>
            <?php
                    }
            ?>

            </tbody>
        </table>
        <nav>
            <!-- Pagination -->
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" <?php if ($halaman > 1) {
                                                echo "href='?halaman=$previous'";
                                            } ?>>Previous</a>
                </li>
                <?php
                for ($x = 1; $x <= $total_halaman; $x++) {
                ?>
                    <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                <?php
                }
                ?>
                <li class="page-item">
                    <a class="page-link" <?php if ($halaman < $total_halaman) {
                                                echo "href='?halaman=$next'";
                                            } ?>>Next</a>
                </li>
            </ul>
        </nav>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>