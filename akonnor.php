<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<link rel="stylesheet" href="assets/css/akonnor.css">
<title>Akonnor Catering Services</title>
</head>
<body>
  <!-- akonnor food ordering page -->
  <div class="container-fluid mx-0 px-0">
    <!-- carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./assets/img/akonnor carousel/cristiano-pinto-2lWGQ02DGL8-unsplash.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./assets/img/akonnor carousel/dan-gold-E6HjQaB7UEA-unsplash.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./assets/img/akonnor carousel/emerson-vieira-cpkPJ-U9eUM-unsplash.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./assets/img/akonnor carousel/pixzolo-photography-Qtd5z7g4thc-unsplash.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./assets/img/akonnor carousel/sigmund-x7-h2yuZVRs-unsplash.jpg" class="d-block w-100" alt="...">
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

  </div>

  <!-- rest of page content -->
  <div class="container">
    <div class="slogan pt-lg-5">
      <p>Food has never tasted better.</p>
      <hr>
    </div>
  </div>

  <!--  positioned foods -->
  <div class="container-fluid px-5 food-background">
    <div class="foods container pb-lg-5">
      <img src="./assets/img/absolute img/icons8-kawaii-croissant-100.png" alt="" width="150" class="img1">
      <img src="./assets/img/absolute img/icons8-kawaii-cupcake-100.png" alt="" width="150" class="img2">
      <img src="./assets/img/absolute img/icons8-kawaii-ice-cream-100.png" alt="" width="150" class="img3">
      <img src="./assets/img/absolute img/icons8-kawaii-soda-100.png" alt="" width="150" class="img4">
      <img src="./assets/img/absolute img/icons8-kawaii-steak-100.png" alt="" width="150" class="img5">
      <img src="./assets/img/absolute img/icons8-kawaii-taco-100.png" alt="" width="150" class="img6">
    </div>
  </div>

  <!-- menu -->
  <div class="container-fluid menu-section s1">
    <div class="slogan meals">
      <p>Today's meals</p>
      <hr>
    </div>
    <div class="container">
      <div class="card menu-plaque px-5">
        <span>Menu</span>
        <hr>
        <div class="row">
            <div class="col-md-12">
        
                <?php
                // Include config file
                require_once "dbconnection.php";
                
                // Attempt select query execution
                $sql = "SELECT * FROM meal";
                if($result = mysqli_query($link, $sql)){
                    if(mysqli_num_rows($result) > 0){
                        echo "<table class='table table-bordered table-striped'>";
                            echo "<thead>";
                                echo "<tr>";
                                    echo "<th>ID</th>";
                                    echo "<th>BREAKFAST</th>";
                                    echo "<th>LUNCH</th>";
                                    echo "<th>JUICE</th>";
                                    echo "<th>SUPPER</th>";
                                echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while($row = mysqli_fetch_array($result)){
                                echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td>" . $row['Breakfast'] . "</td>";
                                    echo "<td>" . $row['Lunch'] . "</td>";
                                    echo "<td>" . $row['Drink'] . "</td>";
                                    echo "<td>" . $row['Supper'] . "</td>";
                      
                                echo "</tr>";
                            }
                            echo "</tbody>";                            
                        echo "</table>";
                        // Free result set
                        mysqli_free_result($result);
                    } else{
                        echo "<p class='lead'><em>No records were found.</em></p>";
                    }
                } else{
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                }

                // Close connection
                mysqli_close($link);
                ?>
            </div>
        </div>        
                  
          
      </div>
    </div>
  </div>

  <div class="container-fluid menu-section s2">
    <div class="container order-box">
      <div class="slogan order-heading">
        <p>Ready to order?</p>
        <hr>
      </div>

      <div class="card box">
        <div class="svg-img">
          <img src="./assets/img/undraw_Hamburger_8ge6.svg" alt="">
        </div>

        <!-- order-box -->
        <div class="portal">
          <div class="brand">
            <img src="./assets/img/icons8-kawaii-french-fries-100.png" alt="">
            <p>Akonnor Catering Services</p>
            <span>Order now</span>
          </div>

          <!-- order button -->
          <a href="c-order.php" class="order-button">
            <img src="./assets/img/icons8-arrow-100.png" alt="">
          </a>

        </div>
      </div>
    </div>
  </div>

  <!-- footer -->
  <!-- Footer -->
<footer class="text-center text-lg-start footer">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">Footer Content</h5>

        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
          molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
          voluptatem veniam, est atque cumque eum delectus sint!
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="#!" class="text-white">Link 1</a>
          </li>
          <li>
            <a href="#!" class="text-white">Link 2</a>
          </li>
          <li>
            <a href="#!" class="text-white">Link 3</a>
          </li>
          <li>
            <a href="#!" class="text-white">Link 4</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-0">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="text-white">Link 1</a>
          </li>
          <li>
            <a href="#!" class="text-white">Link 2</a>
          </li>
          <li>
            <a href="#!" class="text-white">Link 3</a>
          </li>
          <li>
            <a href="#!" class="text-white">Link 4</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: black;">
    <span style="color: white;">© 2021 Copyright:</span>
    <span class="text-white" >AshesiEats</span>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>