<!DOCTYPE html>
<html lang="en">

<!-- Session Untuk Mengakses Halaman Admin Harus ada username dan password yg valid -->
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location:admin.php');
    exit;
}
?>

<!-- Mengkoneksikan dengan database -->
<?php
include 'koneksi.php';

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- Memasukkan Skrip Javascript -->
    <script type="text/javascript" src="Chart.js"></script>
    <!-- Memasukkan Link Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <!-- CSS -->
    <style>
        #judul {
            padding-top: 30px;
            padding-bottom: 30px;
        }

        .navbar-brand {
            color: white;
            font-size: 40px;
            font-weight: 500;
        }

        .nav-link {
            color: white;
            font-size: 20px;
        }

        #table {
            align-items: center;
            justify-content: center;
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
                <a class="nav-link" aria-current="page" href="logout.php">LOGOUT</a>
            </div>
        </div>
    </nav>
    <!-- Form Pendaftar yang terdapat dalam database -->
    <h2 class="text-center" id="judul">DATA PENDAFTAR BEASISWA</h2>
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
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!-- Menampilkan Data dari database -->
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
                        <td class="text-center">
                            <form action="verifikasi.php?id=<?php echo $data['id']; ?>" method="POST">
                                <div class="form-group">
                                    <select class="form-control" id="status" name="status" placeholder="Pilih Proses" aria-describedby="addon-wrapping" autocomplete="off">
                                        <option selected>--Pilih Proses--</option>
                                        <option value="Diterima">Terima</option>
                                        <option value="Ditolak">Tolak</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary m-2" type="submit">Submit</button>
                            </form>
                        </td>
                </tr>
            <?php
                    }
            ?>

            </tbody>
        </table>
        <!-- Pagination -->
        <nav>
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
        <div style="width: 800px;margin: 0px auto;">
            <canvas id="myChart"></canvas>
        </div>
    </div>

    <!-- Script Daigram -->
    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Beasiswa Prestasi Akademik", "Beasiswa Prestasi Non Akademik"],
                datasets: [{
                    label: '',
                    data: [
                        <?php
                        $jumlah_akademik = mysqli_query($koneksi, "SELECT * from daftar where beasiswa='Akademik'");
                        echo mysqli_num_rows($jumlah_akademik);
                        ?>,
                        <?php
                        $jumlah_nonakademik = mysqli_query($koneksi, "SELECT * from daftar where beasiswa='Non Akademik'");
                        echo mysqli_num_rows($jumlah_nonakademik);
                        ?>,
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
    <script src="Chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>