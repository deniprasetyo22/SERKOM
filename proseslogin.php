<?php
include 'koneksi.php';
if(isset($_POST['btnLogin'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query=mysqli_query($koneksi,"SELECT * FROM admin WHERE email='$email' AND password='$password'");
    $data=mysqli_fetch_array($query);

    if(mysqli_num_rows($query)==1){
        if($password=$data['password']){
            //login valid
            session_start();  
            $_SESSION['email']=$data['email'];
            header('location:admin.php');
        } else {
            //password salah
            header('location:login.php');
        }
    }else{
        //username salah
        header('location:login.php');
    }
}
