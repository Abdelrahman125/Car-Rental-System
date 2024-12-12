<?php
include('server/connection.php');

    $stmt = $conn->prepare("SELECT Plate_ID FROM car LIMIT 1 ");

    $stmt-> execute();

    $cid = $stmt->get_result();

    $row = $cid->fetch_assoc()

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

    <section class="container single-car my-5 pt-5" >
        <div class="row mt-5">
            <div class="col-lg-5 col-md-6 col-sm-12" >
                <img class="img-fluid w-100 pb-1" src="assets/imgs/BMW.jpeg" id="mainImg">
                <div class="small-img-group">
                    <div class="small-img-col" >
                        <img src="assets/imgs/Mercedes.jpeg" width="100%" class="small-img" >
                    </div>
                    <div class="small-img-col" >
                        <img src="assets/imgs/Audi.jpeg" width="100%" class="small-img" >
                    </div>
                    <div class="small-img-col" >
                        <img src="assets/imgs/ferrari.jpeg" width="100%" class="small-img" >
                    </div>
                    <div class="small-img-col" >
                        <img src="assets/imgs/lamborghini.jpeg" width="100%" class="small-img" >
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12" >
                <h6>Sport cars</h6>
                <h3 class="py-4">BMW</h3>
                <h2>155$</h2>
                
                <?php if ($row): ?>
                    <!-- Generate a single "Rent Now" button -->
                    <a href="cart.php?id=<?php echo $row['Plate_ID']; ?>">
                        <button class="buy-btn">Rent Now</button>
                    </a>
                <?php else: ?>
                    <p>No cars available at the moment.</p>
                <?php endif; ?>
                <h4 class="mt-5 mb-5" >Product details</h4>
                <span>The details of this car will be displayed shortly.
                    The details of this car will be displayed shortly.
                    The details of this car will be displayed shortly.
                    The details of this car will be displayed shortly.
                    The details of this car will be displayed shortly.
                </span>
            </div>

        </div>
    </section>




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


    <script>

        var mainImg = document.getElementById("mainImg");
        var smallImg = document.getElementsByClassName("small-img");

        for(let i=0; i<4 ; i++){
            smallImg[i].onclick = function(){
                mainImg.src= smallImg[i].src;
            }
        }


    </script>
</body>
</html>