<?php

include_once("Koneksi.php");

$sql = "UPDATE barang SET NAMA='Dido' WHERE JENIS_BARANG='Ginjal';";

$hsl = mysqli_query($cnn, $sql);

if($hsl){
    echo "Pengubahan data suskes<br>";
}else{
    echo "Pengubahan data Gagal<br>";
}
mysqli_close($cnn);