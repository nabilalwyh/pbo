<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_tokobuku");

if (mysqli_connect_errno()) {
    echo "Gagal Koneksi Database: " . mysqli_connect_error();
}
