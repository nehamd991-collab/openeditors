<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-commerce</title>
     <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <div class="container-fluid p-0">

      <!-- NAVBAR 1 -->
      <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
          <img src="images (7).jpg" alt="" class="logo">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav1">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="nav1">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Register</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
              <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-shopping-cart"></i><sup>1</sup></a></li>
              <li class="nav-item"><a class="nav-link" href="#">Total price:100/-</a></li>
              <li class="nav-item"><a class="nav-link disabled">Disabled</a></li>
            </ul>

            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search">
              <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      <!-- NAVBAR 2 -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <ul class="navbar nav me-auto">
          <li class="nav-item"><a class="nav-link" href="#">Welcome Guest</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
        </ul>
      </nav>

      <!-- HEADER -->
      <div class="bg-light">
        <h3 class="text-center">Hidden Store</h3>
        <p class="text-center">communications is at the heart of e-commerce and community</p>
      </div>

      <!-- MAIN ROW -->
      <div class="row">

        <!-- LEFT PRODUCTS -->
        <div class="col-md-10">
          <div class="row">

            <div class="col-md-4 mb-2">
              <div class="card" style="width: 18rem;">
                <img src="images (8).jpg" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title...</p>
                  <a href="#" class="btn btn-info">Add to cart</a>
                  <a href="#" class="btn btn-secondary">View more</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-2">
              <div class="card" style="width: 18rem;">
                <img src="images (9).jpg" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title...</p>
                  <a href="#" class="btn btn-primary">Add to cart</a>
                  <a href="#" class="btn btn-secondary">View more</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-2">
              <div class="card" style="width: 18rem;">
                <img src="images (10).jpg" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text...</p>
                  <a href="#" class="btn btn-primary">Add to cart</a>
                  <a href="#" class="btn btn-secondary">View more</a>
                </div>
              </div>
            </div>

            <!-- more cards -->
            <div class="col-md-4 mb-2">
              <div class="card" style="width: 18rem;">
                <img src="images (6).jpg" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text...</p>
                  <a href="#" class="btn btn-primary">Add to cart</a>
                  <a href="#" class="btn btn-secondary">View more</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-2">
              <div class="card" style="width: 18rem;">
                <img src="FST_FJAMC-16002_GREY_1_e5fae8d2-df27-4120-9397-138d5a4315ac_400x.webp" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text...</p>
                  <a href="#" class="btn btn-primary">Add to cart</a>
                  <a href="#" class="btn btn-secondary">View more</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-2">
              <div class="card" style="width: 18rem;">
                <img src="men-s-full-sleeves-hoodie-t-shirts-for-regular-use-red-product-images-rvudchtbvg-0-202304111210.webp" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text...</p>
                  <a href="#" class="btn btn-primary">Add to cart</a>
                  <a href="#" class="btn btn-secondary">View more</a>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- RIGHT SIDEBAR -->
        <div class="col-md-2 bg-secondary p-0">
          <ul class="navbar-nav me-auto">

            <li class="nav-item bg-info">
              <a href="#" class="nav-link text-light"><h4>Delivery Brand</h4></a>
            </li>

            <li class="nav-item"><a href="#" class="nav-link text-light"><h4>Brand1</h4></a></li>
            <li class="nav-item"><a href="#" class="nav-link text-light"><h4>Brand2</h4></a></li>
            <li class="nav-item"><a href="#" class="nav-link text-light"><h4>Brand3</h4></a></li>
            <li class="nav-item"><a href="#" class="nav-link text-light"><h4>Brand4</h4></a></li>
            <li class="nav-item"><a href="#" class="nav-link text-light"><h4>Brand5</h4></a></li>

            <li class="nav-item bg-info">
              <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
            </li>

            <li class="nav-item"><a href="#" class="nav-link text-light"><h4>categories1</h4></a></li>
            <li class="nav-item"><a href="#" class="nav-link text-light"><h4>categories2</h4></a></li>
            <li class="nav-item"><a href="#" class="nav-link text-light"><h4>categories3</h4></a></li>
            <li class="nav-item"><a href="#" class="nav-link text-light"><h4>categories4</h4></a></li>
            <li class="nav-item"><a href="#" class="nav-link text-light"><h4>categories5</h4></a></li>

          </ul>
        </div>

      </div>

      <!-- FOOTER -->
      <div class="bg-info p-3 text-center">
        <p>All rights reserved @-Designed by Neha-2025</p>
      </div>

    </div>
  </body>
</html>
