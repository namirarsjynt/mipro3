<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bumantara Studioo - Home</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Custom styles */
    .navbar-brand {
      font-weight: bold;
    }
    .hero {
      background-color: #f8f9fa;
      padding: 100px 0;
      text-align: center;
    }
    .hero h1 {
      font-size: 3rem;
      margin-bottom: 20px;
    }
    .hero p {
      font-size: 1.2rem;
      color: #6c757d;
    }
    .slideshow {
      padding: 50px 0;
    }
    .instagram {
      background-color: #f8f9fa;
      padding: 50px 0;
    }
    .instagram h2 {
      font-size: 2rem;
      margin-bottom: 30px;
    }
    .instagram .row {
      justify-content: center;
    }
    .instagram img {
      border-radius: 10px;
      cursor: pointer; /* Add pointer cursor to indicate clickable */
    }
    /* Center align content */
    .center-content {
      text-align: center;
    }
    .center-content .container {
      display: inline-block;
      text-align: left;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Bumantara Studioo</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h1>Welcome to Bumantara Studioo</h1>
      <p>Discover our high-quality products and elevate your style!</p>
    </div>
  </section>

  <!-- Centered Content Section -->
  <section class="center-content">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4">
          <h2><a href="#">Home</a></h2>
          <!-- Home content goes here -->
        </div>
        <div class="col-md-4 mb-4">
          <h2><a href="produk.php">Produk</a></h2>
          <!-- Produk content goes here -->
        </div>
        <div class="col-md-4 mb-4">
          <h2><a href="contact.php">Contact</a></h2>
          <!-- Contact content goes here -->
        </div>
      </div>
    </div>
  </section>

  <!-- Slideshow Section -->
  <section class="slideshow">
    <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="1.jpg" class="d-block w-100" alt="Slide 1">
          </div>
          <div class="carousel-item">
            <img src="2.jpg" class="d-block w-100" alt="Slide 2">
          </div>
          <div class="carousel-item">
            <img src="3.jpg" class="d-block w-100" alt="Slide 3">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>

  <!-- Instagram Section -->
  <section class="instagram">
    <div class="container">
      <h2>Follow us on Instagram</h2>
      <div class="row">
        <div class="col-md-4 mb-4">
          <a href="https://www.instagram.com/bumantara.studioo?igsh=aXdpbGRueWlvaG55" target="_blank">
            <img src="bumantara.png" alt="Instagram 1" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4 mb-4">
          <a href="https://www.instagram.com/bumantara.studioo?igsh=aXdpbGRueWlvaG55" target="_blank">
            <img src="bmn1.jpg.jpeg" alt="Instagram 2" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4 mb-4">
          <a href="https://www.instagram.com/bumantara.studioo?igsh=aXdpbGRueWlvaG55" target="_blank">
            <img src="bmn.jpg.jpeg" alt="Instagram 3" class="img-fluid">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

