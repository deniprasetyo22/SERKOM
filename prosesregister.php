<?php
include 'koneksi.php';
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "INSERT INTO admin (name, email, password) VALUES ('$name', '$email', '$password')";

if (mysqli_query($koneksi, $query_sql)){
    echo '<script language="javascript">
              alert ("Register Success !");
              window.location="login.php";
              </script>';
              exit();
    }
?>
}