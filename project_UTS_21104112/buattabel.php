<?php
    include_once("koneksi.php");
    $sql = "CREATE TABLE barang(
        NAMA Varchar(50) PRIMARY KEY, 
        JENIS_BARANG Varchar(20), 
        HARGA FLOAT(10)
    );";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "pembuatan tabel berhasil";
    } else{
        echo "pembuatan tabel gagal";
    }
