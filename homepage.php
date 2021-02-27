<?php
session_start();
if($_SESSION['Name']){
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Inter&family=Montserrat:wght@300&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
      <link rel="stylesheet" href="./assets/css/homepage.css">
      <title>Ashesi Eats - Online Food Ordering System</title>
  </head>
  <body>
      <!-- users page -->
      <div class="content-container">
          <!-- content on sidebar -->
          <div class="sidebar">
              <div class="contents">
                  <!-- brand -->
                  <div class="brand">
                      <!-- <img src="./assets/img/9f914596-0217-419b-a760-d7b4019574ae.svg" alt="" width="60"> -->
                      <p>Ashesi Eats</p>
                  </div>

                  <!-- menu items -->
                  <div class="menu m-active">
                      <img src="./assets/img/icons8-home-page-100.png" alt="" width="30">
                      <a href="homepage.php">Home</a>
                  </div>

                  <div class="menu">
                      <img src="./assets/img/icons8-shopping-cart-100.png" alt="" width="30">
                      <a href="cart.php">Cart</a>
                  </div>

                  <div class="menu">
                      <img src="./assets/img/icons8-time-machine-100.png" alt="" width="30">
                      <a href="orderhistory.php">Order history</a>
                  </div>


                  <div class="menu">
                      <img src="./assets/img/icons8-gift-100.png" alt="" width="30">
                      <a href="">Offers</a>
                  </div>

                  <div class="bottom">
                      <div class="menu">
                          <img src="./assets/img/icons8-settings-100.png" alt="" width="30">
                          <a href="settings.php">Settings</a>
                      </div>

                      <div class="menu">
                          <img src="./assets/img/icons8-logout-rounded-left-100.png" alt="" width="30">
                          <a href="logout.php">Logout</a>
                      </div>
                  </div>
                  
              </div>
            
          </div>

          <!-- rest of content on page -->
          <div class="main-content">
              <!-- greeting -->
              <p class="greeting">Welcome, <span>Akwasi</span></p>
              <!-- carousel -->
              <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="./assets/img/sam-moqadam-wg551YMfeOc-unsplash.jpg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="./assets/img/yvens-banatte-jMryv3G7sxY-unsplash.jpg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="./assets/img/karim-manjra-xWtkhoLENDY-unsplash.jpg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
              </div>

              <!-- restaurants list -->
              <div class="card-container">
                  <a href="akonnor.html" class="card">
                      <!-- icon -->
                      <img src="./assets/img/icons8-kawaii-french-fries-100.png" alt="" width="100">
                      <p>Akonnor</p>
                  </a>
                  <a href="" class="card">
                      <!-- brand -->
                      <img src="./assets/img/icons8-kawaii-pizza-100.png" alt="">
                      <p>Big Ben</p>
                  </a>
                  <a href="" class="card">
                      <!-- brand -->
                      <img src="./assets/img/icons8-kawaii-noodle-100.png" alt="">
                      <p>Lynnes Cuisine</p>
                  </a>
              </div>
          </div>
      </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
  </body>
  </html>
  <?php
}
else{
  header('location: index.php');
}
