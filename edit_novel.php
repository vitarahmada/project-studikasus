<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

    <title>MyNovel</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
</head>

<?php
include "back-end/connection.php";
$id_novel = $_GET['id_novel'];

$novel = mysqli_query($connection, "SELECT * FROM novel WHERE id_novel = '$id_novel' ");
$kategori1 = mysqli_query($connection, "SELECT * FROM kategori");
$penulis1 = mysqli_query($connection, "SELECT * FROM penulis");

foreach ($novel as $novel1) {
    $id_kategori = $novel1['id_kategori'];
    $judul = $novel1['judul'];
    $id_penulis = $novel1['id_penulis'];
    $ket = $novel1['ket'];
    $harga = $novel1['harga'];
}

// echo $novel1['id_kategori'] . "<br>";
// echo $novel1['judul'] . "<br>";
// echo $novel1['id_penulis'] . "<br>";
// echo $novel1['ket'] . "<br>";
// echo $novel1['harga'] . "<br>";
?>

<body class="sub_page">
    <div class="hero_area">
        <!-- header section strats -->
        <div class="hero_bg_box">
            <div class="img-box">
                <img src="images/about.jpg" alt="">
            </div>
        </div>

        <header class="header_section">
            <div class="header_top">
                <div class="container-fluid">
                    <div class="contact_link-container">
                        <a href="" class="contact_link1">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>
                                Surabaya, Jawa Timur
                            </span>
                        </a>
                        <a href="" class="contact_link2">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>
                                Call : +62 85222333444
                            </span>
                        </a>
                        <a href="" class="contact_link3">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>
                                mynovel@gmail.com
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="header_bottom">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg custom_nav-container">
                        <a class="navbar-brand" href="index.html">
                            <span>
                                MyNovel
                            </span>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class=""></span>
                        </button>

                        <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
                            <ul class="navbar-nav  ">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="novel.php"> NOVEL</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="penulis.php"> AUTHOR</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html"> ABOUT</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- end header section -->
    </div>

    <!-- service section -->

    <section class="service_section layout_padding ">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Edit Novel
                </h2>
            </div>

            <form class="text-light" action="back-end/proses_edit_novel.php?id_novel=<?php echo $novel1["id_novel"] ?>" method="post">
                <div class="form-group">
                    <label>ID Kategori</label>
                    <select class="form-control"  name="id_kategori">
                        <?php foreach ($kategori1 as $kategori) { ?>
                            <?php
                                if ($id_kategori == $kategori['id_kategori']) {
                                    $var = "selected";
                                } else {
                                    $var = " ";
                                }
                            ?>
                            <option value="<?php echo $kategori['id_kategori']; ?>" <?php echo $var ?>><?php echo $kategori['id_kategori'] . " - " . $kategori['nama_kategori']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Judul</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="judul" value="<?php echo $judul; ?>">
                </div>
                <div class="form-group">
                    <label>ID Penulis</label>
                    <select class="form-control"  name="id_penulis">
                        <?php foreach ($penulis1 as $penulis) { ?>
                            <?php
                                if ($id_penulis == $penulis['id_penulis']) {
                                    $var = "selected";
                                } else {
                                    $var = " ";
                                }
                            ?>
                            <option value="<?php echo $penulis['id_penulis']; ?>" <?php echo $var ?>><?php echo $penulis['id_penulis'] . " - " . $penulis['nama_penulis']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Deskripsi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ket"><?php echo $ket; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput2">Harga</label>
                    <input type="number" class="form-control" id="exampleFormControlInput2" name="harga" value="<?php echo $harga; ?>">
                </div>
                <input type="submit" name="Submit" value="Submit" class="btn btn-secondary">
            </form>
        </div>
    </section>

    <!-- end service section -->



    <!-- footer section -->
    <footer class="container-fluid footer_section">
        <p>
            &copy; <span id="currentYear"></span> vitarahmada
        </p>
    </footer>
    <!-- footer section -->

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>