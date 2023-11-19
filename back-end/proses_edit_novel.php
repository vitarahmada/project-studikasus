<?php

    $id_novel = $_GET['id_novel'];
    $id_kategori = $_POST['id_kategori'];
    $judul = $_POST['judul'];
    $id_penulis = $_POST['id_penulis'];
    $ket = $_POST['ket'];
    $harga = $_POST['harga'];

    include "connection.php";

    mysqli_query($connection, "UPDATE novel SET id_kategori = '$id_kategori', judul =  '$judul', id_penulis = '$id_penulis', ket = '$ket', 
        harga = '$harga' WHERE id_novel = '$id_novel' ");

    header("Location:../novel.php");

?>