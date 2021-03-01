<?php
session_start();
if($_SESSION['Name']){
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<link rel="stylesheet" href="assets/css/homepage.css">
<title>Your cart</title>
</head>
<body>
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
                <div class="menu">
                    <img src="./assets/img/icons8-home-page-100.png" alt="" width="30">
                    <a href="homepage.php">Home</a>
                </div>

                <div class="menu m-active">
                    <img src="./assets/img/icons8-shopping-cart-100.png" alt="" width="30">
                    <a href="cart.php">Cart</a>
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
            <div class="wrapper">
                <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="page-header clearfix">
                                    <div class="heading">
                                        <img src="./assets/img/icons8-shopping-cart-black-100.png" alt="">
                                        <p class="cart-title">Cart</p>
                                    </div>
                                    <hr>
                                </div>
                                <?php
                                // Include config file
                                require_once "dbconnection.php";
                                
                                // Attempt select query execution
                                $sql = "SELECT Food, Quantity FROM orders WHERE `Customer Name` = '" .$_SESSION['Name']. "'";
                                if($result = mysqli_query($link, $sql)){
                                    if(mysqli_num_rows($result) > 0){
                                        echo "<table class='table table-bordered table-striped'>";
                                            echo "<thead>";
                                                echo "<tr>";
                                                    echo "<th>Food</th>";
                                                    echo "<th>Quantity</th>";
                                                echo "</tr>";
                                            echo "</thead>";
                                            echo "<tbody>";
                                            while($row = mysqli_fetch_array($result)){
                                                echo "<tr>";
                                                    echo "<td>" . $row['Food'] . "</td>";
                                                    echo "<td>" . $row['Quantity'] . "</td>";
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


