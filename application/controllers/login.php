<?php
session_start();
include 'koneksi.php';

$username = $_POST['email'];
$password = md5($_POST['password']);

$data = mysqli_query($koneksi, "SELECT * FROM admin WHERE email='$email' and password = '$password'");
$cek = mysqli_num_rows($data);
if ($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:admin/index.php");
} else {
    header("location:index.php?pesan=gagal");
}