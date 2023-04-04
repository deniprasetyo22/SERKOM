<?php
include 'koneksi.php';
$nama = $_POST["nama"];
$email = $_POST["email"];
$nohp = $_POST["nohp"];
$semester = $_POST["semester"];
$ipk = $_POST["ipk"];
$beasiswa = $_POST["beasiswa"];
$ekstensi_diperbolehkan = array("png", "jpg");
$berkas = $_FILES['berkas']['name'];
$x = explode('.', $berkas);
$ekstensi = strtolower(end($x));
$file_tmp = $_FILES['berkas']['tmp_name'];
move_uploaded_file($file_tmp, 'file/' . $berkas);

$query_sql = "INSERT INTO daftar (nama, email, nohp, semester, ipk, beasiswa, berkas, status) VALUES ('$nama', '$email', '$nohp', '$semester', '$ipk', '$beasiswa', '$berkas', 'Belum Diverifikasi')";

if (mysqli_query($koneksi, $query_sql)) {
    echo '<script language="javascript">
              alert ("Pendaftaran Berhasil !");
              window.location="hasil.php";
              </script>';
    exit();
}
