<?php

    $id_penulis = $_GET['id_penulis'];
    $nama_penulis = $_POST['nama_penulis'];

    include "connection.php";
    
    mysqli_query($connection, "UPDATE penulis SET nama_penulis = '$nama_penulis' WHERE id_penulis = '$id_penulis' ");

    header("Location:../penulis.php");
?>