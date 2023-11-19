<?php

    include "connection.php";
    $id_novel = $_GET['id_novel'];

    mysqli_query($connection, "DELETE FROM novel WHERE id_novel = '$id_novel' ");

    header("Location:../novel.php");
?>