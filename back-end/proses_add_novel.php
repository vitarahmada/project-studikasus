<?php
    echo $_POST['id_kategori'] . "<br>";
    echo $_POST['judul'] . "<br>";
    echo $_POST['id_penulis'] . "<br>";
    echo $_POST['ket'] . "<br>";
    echo $_POST['harga'] . "<br>";

    // $id_kategori = mysqli_real_escape_string($mysqli, $_POST['id_kategori']);
    // $judul = mysqli_real_escape_string($mysqli, $_POST['judul']);
    // $id_penulis = mysqli_real_escape_string($mysqli, $_POST['id_penulis']);
    // $ket = mysqli_real_escape_string($mysqli, $_POST['ket']);
    // $harga = mysqli_real_escape_string($mysqli, $_POST['harga']);

    $id_kategori = $_POST["id_kategori"];
    $judul = $_POST["judul"];
    $id_penulis = $_POST["id_penulis"];
    $ket = $_POST["ket"];
    $harga = $_POST["harga"];

    include "connection.php";
    mysqli_query($connection, "INSERT INTO `novel` (`id_kategori`, `judul`, `id_penulis`, `ket`, `harga`) VALUES ('$id_kategori', '$judul', '$id_penulis', '$ket', '$harga');");
    header("Location:../novel.php");
?>