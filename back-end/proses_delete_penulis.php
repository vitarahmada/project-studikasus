<?php

    include "connection.php";
    $id_penulis = $_GET['id_penulis'];

    mysqli_query($connection, "DELETE FROM penulis WHERE id_penulis = '$id_penulis' ");

    header("Location:../penulis.php");
?>