<?php

session_start();


if(!empty($_SESSION['cart']))

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https//pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEc3Yw5cVb3zcuHt0A93w35dYTsvhLPVnYs9eStHfGJvOvkxVfELGroGkvsg+p" crossorigin="anonymous" >

    <link rel="stylesheet" href="assets/css/style.css">
    
</head>
<body>


    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-3 fixed-top">
        <div class="container text-nowrap" >
          <img class="logo" src="assets/imgs/logo.jpeg" >
          <h2 class="brand">Car Rental System</h2>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact US</a>
              </li>

              <li class="nav-item">
                <i class="material-icons">shopping_cart</i>
                <i class="material-icons">person</i>
              </li>

           

              

              
              
            </ul>
            
          </div>
        </div>
    </nav>


    <!--Checkout-->
    <section class="my-5 py-5" >
        <div class="container text-center mt-3 pt-5" >
            <h2 class="form-weight-bold" >Checkout</h2>
            <hr class="mx-auto" >
        </div>
        <div class="mx-auto container">
            <form id="checkout-form" method="POST" action="place_order.php">
                <div class="form-group checkout-small-element" >
                    <label>Name</label>
                    <input type="text" class="form-control" id="checkout-name" name="name" placeholder="name" required>
                </div>
                <div class="form-group checkout-small-element">
                    <label>Email</label>
                    <input type="text" class="form-control" id="checkout-email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group checkout-small-element">
                    <label>Phone</label>
                    <input type="tel" class="form-control" id="checkout-password" name="phone" placeholder="Phone" required>
                </div>
                <div class="form-group checkout-small-element">
                    <label>City</label>
                    <input type="text" class="form-control" id="checkout-city" name="city" placeholder="City" required>
                </div>
                <div class="form-group checkout-large-element">
                    <label>Address</label>
                    <input type="text" class="form-control" id="checkout-address" name="address" placeholder="Address" required>
                </div>
                <div class="form-group checkout-btn-container">
                    <input type="submit" class="btn" id="checkout-btn" name="Place_order" value="Place Order ">
                </div>
            </form>
        </div>
    </section>









    <!--Footer-->
    <footer class="mt-5 py-5">
        <div class="row container mx-auto pt-5 ">
            <div class="footer one col-lg-3 col-md-6 col-sm-12">
                <img class="logo" src="assets/imgs/logo.jpeg" />
                <p class="pt-3">We provide the best cars for the most affordable prices</p>
            </div>
            <div class="footer one col-lg-3 col-md-6 col-sm-12">
                <h5 class="pb-2">featured</h5>
                <ul class="text-uppercase">
                    <li><a href="#">sport cars</a></li>
                    <li><a href="#">classic cars</a></li>
                    <li><a href="#">suv cars</a></li>
                    <li><a href="#">sedan cars</a></li>
                    <li><a href="#">4x4 cars</a></li>
                    <li><a href="#">hatchback cars</a></li>
                </ul>
            </div>

            <div class="footer one col-lg-3 col-md-6 col-sm-12">
                <h5 class="pb-2">Contact Us</h5>
                <div>
                    <h6 class="text-uppercase">Address</h6>
                    <p>1234 Street Name, City</p>
                </div>
                <div>
                    <h6 class="text-uppercase">Phone</h6>
                    <p>123 456 7890</p>
                </div>
                <div>
                    <h6 class="text-uppercase">Email</h6>
                    <p>info@email.com</p>
                </div>
            </div>
            <div class="footer one col-lg-3 col-md-6 col-sm-12">
                <h5 class="pb-2">Instagram</h5>
                <div class="row">
                    <img src="assets/imgs/footer1.jpeg" class="img-fluid w-25 h-100 m-2">
                    <img src="assets/imgs/footer2.jpeg" class="img-fluid w-25 h-100 m-2">
                    <img src="assets/imgs/footer3.jpeg" class="img-fluid w-25 h-100 m-2">
                    <img src="assets/imgs/footer4.jpeg" class="img-fluid w-25 h-100 m-2">
                    <img src="assets/imgs/footer5.jpeg" class="img-fluid w-25 h-100 m-2">
                </div>
            </div>
        </div>

        <div class="copyright mt-5">
            <div class="row container mx-auto">
                <div class="col-lg-3 col-md-5 col-sm-12 mb-4 ">
                    <img src="assets/imgs/payment.jpeg">
                </div>
                <div class="col-lg-3 col-md-5 col-sm-12 mb-4 text-nowrap mb-2">
                    <p>car rental system @2025 All Right Reserved</p>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>

    </footer>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>