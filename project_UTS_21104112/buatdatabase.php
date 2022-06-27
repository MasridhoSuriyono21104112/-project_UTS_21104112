<?php
    include_once("koneksi.php");
    $sql = "CREATE DATABASE toko ku;";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "database sukses";
    }
    else{
        echo "Terjadi kesalahan dalam pembuatan database";
    }
    mysqli_close($cnn);