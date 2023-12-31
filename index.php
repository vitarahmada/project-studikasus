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

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <div class="hero_bg_box">
      <div class="img-box">
        <img src="images/main.jpg" alt="">
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
                <li class="nav-item active">
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
    <!-- slider section -->
    <section class=" slider_section ">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Welcome to <br>
                      <span>
                        Our Extensive Novel Catalog!!
                      </span>
                    </h1>
                    <p>
                      Where you can explore a diverse collection of literary works
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Our Catalog Features <br>
                      <span>
                        a Wide Range of Genres
                      </span>
                    </h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Discover <br>
                      <span>
                        New and Exciting Titles
                      </span>
                    </h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container idicator_container">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img_container">
            <div class="img-box">
              <img src="images/about.jpg" alt="" />
            </div>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="detail-box">
            <div class="heading_container ">
              <h2>
                Who Are We?
              </h2>
            </div>
            <p>
              A website catalog of novels is a digital platform that offers a comprehensive collection of literary
              works, providing readers with access to a diverse range of genres, authors, and titles. Users can explore
              and discover new novels, access detailed information about each book, including summaries, author
              biographies, and reader reviews.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="service_section layout_padding ">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          CATEGORIES
        </h2>
      </div>
      <div class="row">
        <?php
        include "back-end/connection.php";

        $kategori = mysqli_query($connection, "SELECT * FROM kategori");

        foreach ($kategori as $key => $kategori1) {
        ?>
          <div class="col-md-4">
            <div class="box ">
              <div class="img-box">
                <svg enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg">
                  <g>
                    <g>
                      <circle cx="256" cy="125" r="15" />
                      <path d="m356 262c-18.955 0-35.996-10.532-44.472-27.484l-2.111-4.223c-2.541-5.083-7.735-8.293-13.417-8.293h-80c-5.682 0-10.876 3.21-13.417 8.292l-2.111 4.222c-8.476 16.954-25.517 27.486-44.472 27.486-8.284 0-15 6.716-15 15v85.597c0 33.654 10.619 65.715 30.708 92.716 20.089 27 47.747 46.384 79.982 56.054 1.406.422 2.858.633 4.31.633s2.904-.211 4.31-.633c32.235-9.67 59.893-29.054 79.982-56.054 20.089-27.001 30.708-59.062 30.708-92.716v-85.597c0-8.284-6.716-15-15-15zm-46.967 87.322-56.568 56.568c-2.929 2.929-6.768 4.394-10.606 4.394s-7.678-1.464-10.606-4.394l-28.284-28.284c-5.858-5.858-5.858-15.355 0-21.213 5.857-5.858 15.355-5.858 21.213 0l17.678 17.677 45.962-45.961c5.857-5.858 15.355-5.858 21.213 0 5.856 5.858 5.856 15.355-.002 21.213z" />
                      <g>
                        <path d="m485.371 179.287-220-176c-5.479-4.383-13.263-4.383-18.741 0l-220 176c-6.469 5.175-7.518 14.614-2.342 21.083 5.175 6.468 14.614 7.517 21.083 2.342l30.629-24.503v232.791c0 8.284 6.716 15 15 15h31.119c-7.333-20.12-11.119-41.476-11.119-63.403v-85.597c0-24.813 20.187-45 45-45 7.632 0 14.226-4.075 17.639-10.901l2.112-4.224c7.67-15.342 23.093-24.875 40.249-24.875h80c17.156 0 32.579 9.533 40.25 24.878l2.111 4.223c3.412 6.824 10.007 10.899 17.639 10.899 24.813 0 45 20.187 45 45v85.597c0 21.927-3.786 43.283-11.119 63.403h31.119c8.284 0 15-6.716 15-15v-232.791l30.629 24.503c2.766 2.213 6.075 3.288 9.361 3.288 4.4 0 8.76-1.927 11.722-5.63 5.176-6.469 4.127-15.908-2.341-21.083zm-229.371-9.287c-24.813 0-45-20.187-45-45s20.187-45 45-45 45 20.187 45 45-20.187 45-45 45z" />
                      </g>
                    </g>
                    <g>
                      <path d="m156 15c0-8.284-6.716-15-15-15h-30c-8.284 0-15 6.716-15 15v70.372l60-48z" />
                    </g>
                  </g>
                </svg>
              </div>
              <div class="detail-box">
                <h6>
                  <?php echo $kategori1["nama_kategori"]; ?>
                </h6>
                <!--  -->
                <div class="row">
                  <div class="col">
                    <a href="edit_kategori.php?id_kategori=<?php echo $kategori1["id_kategori"] ?>" class="btn">Edit</a>
                  </div>
                  <div class="col">
                    <a href="back-end/proses_delete_kategori.php?id_kategori=<?php echo $kategori1["id_kategori"] ?>" class="btn" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>

  <!-- end about section -->



  <!-- team section -->

  <section class="team_section layout_padding pt-5">
    <div class="container">
      <div class="row">
        <div class="col-4">
          <div class="btn-box">
            <a href="add_kategori.php">
              Add Category
            </a>
          </div>
        </div>
        <div class="col-4">
          <div class="btn-box">
            <a href="add_novel.php">
              Add Novel
            </a>
          </div>
        </div>
        <div class="col-4">
          <div class="btn-box">
            <a href="add_penulis.php">
              Add Author
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end team section -->

  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="info_logo">
            <a class="navbar-brand" href="index.html">
              <span>
                MyNovel
              </span>
            </a>
            <p>
              Our catalog is your gateway to a world of literary exploration
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="info_info">
            <h5>
              Contact Us
            </h5>
          </div>
          <div class="info_contact">
            <a href="" class="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Surabaya, Jawa Timur
              </span>
            </a>
            <a href="" class="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +62 85222333444
              </span>
            </a>
            <a href="" class="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                mynovel@gmail.com
              </span>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="info_form ">
            <h5>
              Newsletter
            </h5>
            <form action="#">
              <input type="email" placeholder="Enter your email">
              <button>
                Subscribe
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->




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