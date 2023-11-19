<?php
    echo $_POST['nama_penulis'] . "<br>";

    // $id_penulis = mysqli_real_escape_string($mysqli, $_POST['id_penulis']);

    $nama_penulis = $_POST["nama_penulis"];

    include "connection.php";
    mysqli_query($connection, "INSERT INTO `penulis` (`nama_penulis`) VALUES ('$nama_penulis');");
    header("Location:../penulis.php");
?>