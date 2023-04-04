<?php

include "koneksi.php";
$id = $_GET['id'];
$status = $_POST['status'];

$query_sql = "UPDATE daftar SET status='$status' where id='$id' ";

if (mysqli_query($koneksi, $query_sql)) {
    echo '<script language="javascript">
              alert ("Update Berhasil !");
              window.location="admin.php";
              </script>';
    exit();
}
