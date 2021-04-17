<?php
session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>IoT Networks (ESD Group 93)</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="INTERACTIVE WEBSITE FOR IOT NETWORKS" name="keywords">
  <meta content="INTERACTIVE WEBSITE FOR IOT NETWORKS" name="description">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

  <!-- CSS Libraries -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
</head>
     <?php if(isset($_SESSION['newsletter'])): ?>
     <div class="alert alert-success alert-dismissible" role="alert">
     <?php echo $_SESSION['newsletter']; ?>
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
 </button>
     </div>
<?php endif; ?>
<?php unset($_SESSION['newsletter']); ?>
<body>
  <div class="wrapper">
    <!-- Top Bar Start -->
    <div class="top-bar">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3">
            <div class="logo">
              <a href="index.php">
                <h2>IoT Networks</h2>
                <!-- <img src="img/logo.jpg" alt="Logo"> -->
              </a>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="top-bar-right">

              <div class="social">
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-linkedin-in"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <div class="nav-bar">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
          <a href="#" class="navbar-brand">MENU</a>
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav mr-auto">
              <a href="index.php" class="nav-item nav-link active">Home </a>
              <a href="about.html" class="nav-item nav-link">About Us </a>
              <a href="blog.html" class="nav-item nav-link">Blogs </a>
              <!-- <a href="portfolio.html" class="nav-item nav-link">IOT </a> -->
              <!-- <a href="contact.html" class="nav-item nav-link">Reach out to Us </a> -->
            </div>
            <div class="ml-auto">
              <a class="btn" href="contact.php">Ask a Question</a>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <!-- Nav Bar End -->

    <!-- Carousel Start -->
    <div id="carousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/img1.jpg" alt="Carousel Image">
          <div class="carousel-caption">
            <form action="main.php">
              <input type="submit" class="btn animated fadeInUp" value="See Demo" </input>
            </form>
          </div>
        </div>

        <div class="carousel-item">
          <img src="img/img3.jpg" alt="Carousel Image">
          <div class="carousel-caption">
            <form action="main.php">
              <input type="submit" class="btn animated fadeInUp" value="See Demo" </input>
            </form>
          </div>
        </div>

        <div class="carousel-item">
          <img src="img/img4.jpg" alt="Carousel Image">
          <div class="carousel-caption">
            <form action="main.php">
              <input type="submit" class="btn animated fadeInUp" value="See Demo" </input>
            </form>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


    <!-- Feature Start -->
    <div class="feature">
      <div class="container align-items-center">
        <div class="row align-items-center">
          <div class="col-md-7">
            <div class="section-header align-items-center">
              <h2>Our Features</h2>
            </div>
            <div class="row align-items-center feature-item">
              <div class="col-5">
                <div class="feature-icon">
                  <i class="far fa-smile"></i>
                </div>
              </div>
              <div class="col-7">
                <h3>File Support To Embed in IoT Devices</h3>
                <p>
                  Data stored in DB is exported in Json format to desirable location
                </p>
              </div>
            </div>
            <div class="row align-items-center feature-item">
              <div class="col-5">
                <div class="feature-icon">
                  <i class="far fa-smile"></i>
                </div>
              </div>
              <div class="col-7">
                <h3>Customize Datasets in Database</h3>
                <p>
                  The demo shows for basic weather and temperature data but other Datasets
                  can be made as well
                </p>
              </div>
            </div>
            <div class="row align-items-center feature-item">
              <div class="col-5">
                <div class="feature-icon">
                  <i class="far fa-smile"></i>
                </div>
              </div>
              <div class="col-7">
                <h3>API Support Coming Soon</h3>
                <p>
                  Refer the datasets directly from the source through API and embed in website
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Newsletter Start -->
    <div class="newsletter">
      <div class="container">
        <div class="section-header">
          <h2>Subscribe to Our Newsletter</h2>
        </div>
        <form action="newsletter.php" method="post">
          <div class="form">
            <input type="email" class="form-control" name="email" placeholder="Email here">
            <button class="btn" type="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
    <!-- Newsletter End -->
    <!-- Footer Start -->
    <div class="footer">

      <div class="container copyright">
        <div>
          <p> All Rights Reserved. Project by Group 93 Under ESD 2021</p>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  </div>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>
