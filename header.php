<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OMAR Final Project</title>
    <link rel="stylesheet" href="./style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <?php 
    require('functions.php');
    ?>

  </head>
<body>
    <!--Header-->
    <header id="header">
        <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
            <p class="font-cairo font-size-20 yexy-black-250 m-0">Free shipping on all orders</p>
            <div class="font-cairo font-size-16 d-flex">
                <a href="#" class="px-3-border-right-border-left-text-dark p-2 text-decoration-none color-third">My Acount</a>
                <a href="#" class="px-3-border-right-border-left-text-dark p-2 text-decoration-none color-third">Whishlest</a>
                <a href="#" class="px-3-border-right-border-left-text-dark p-2 text-decoration-none color-third">Currency</a>
                <a href="./cart.php" class="px-3-border-right-text-dark p-2 text-decoration-none color-third"><i class="fa-solid fa-cart-shopping"></i> My Cart</a>
                
            </div>     
        </div>
        
        <div class="input-group input-group-merge input-group-borderless input-group-hover-light navbar-input-group">
          <div class="input-group-prepend input-group-text">
            <i class="bi-search"></i>
          </div>

          <input type="search" class="js-form-search form-control" placeholder="Search" aria-label="Search">
          <a class="input-group-append input-group-text" href="javascript:;">
            <i id="clearSearchResultsIcon" class="bi-x-lg" style="display: none;"></i>
          </a>
        </div>

        <!--Main Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark color-last-bg color-third font-rubik">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Fashion </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active color-third" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Women</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Men</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Footwear</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Accesories</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Sales</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          
        <!--Main Navbar-->
    </header>