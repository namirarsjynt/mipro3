<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bumantara Studioo - Produk</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Your custom styles for the produk page can go here */
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">bumantara Studioo</a>
  </nav>

  <!-- Product Listing Section -->
  <section class="product-listing">
    <div class="container">
      <h2 class="text-center my-4">Featured Products</h2>
      <div class="row">
        <?php
          include "koneksi.php";

          $query = "SELECT * FROM produk";
          $hasil = mysqli_query($connect, $query);

          while ($data = mysqli_fetch_array($hasil)) {
            echo '<div class="col-md-4">
                    <div class="card mb-4">
                      <img src="' . $data['gambar'] . '" class="card-img-top" alt="' . $data['nama_produk'] . '">
                      <div class="card-body">
                        <h5 class="card-title">' . $data['nama_produk'] . '</h5>
                        <p class="card-text">' . $data['deskripsi'] . '</p>
                        <p class="card-text">Harga: ' . $data['harga'] . '</p>
                        <p class="card-text">Jumlah: ' . $data['jumlah'] . '</p>
                      </div>
                    </div>
                  </div>';
          }
        ?>
      </div>
    </div>
  </section>

  <!-- Bootstrap scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
