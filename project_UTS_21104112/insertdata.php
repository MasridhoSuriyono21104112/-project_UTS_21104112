<?php
     include_once("Koneksi.php");
     $nama = "Dodo";
     $jenis_barang = "Ginjal";
     $harga = "2.700.000.000";
     

     $sql = "INSERT INTO Ginjal(NAMA, JENIS_BARANG, HARGA) Values('$nama','$jenis_barang','$harga')";
     $hsl = mysqli_query($cnn, $sql);
     if($hsl){
         echo "Insert Data sukses<br>";
     }else{
        echo "Insert Data gagal<br>";
     }