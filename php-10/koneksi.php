<?php 
    $conn = mysqli_connect("localhost","root","","nebarazka");
    if (mysqli_connect_errno()) {
        echo "Koneksi Dengan Database Gagal.".mysqli_connect_error();
    }
   /* else {
        echo "Koneksi Database Berhasil"
    } */
?>