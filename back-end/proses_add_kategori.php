<?php
    echo $_POST['nama_kategori'] . "<br>";

    // $id_kategori = mysqli_real_escape_string($mysqli, $_POST['id_kategori']);

    $nama_kategori = $_POST["nama_kategori"];

    include "connection.php";
    mysqli_query($connection, "INSERT INTO `kategori` (`nama_kategori`) VALUES ('$nama_kategori');");
    header("Location:../index.php");
?>