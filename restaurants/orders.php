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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<link rel="stylesheet" href="./css/home.css">
<title>Akonnor - Orders</title>
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
                    <img src="../assets/img/icons8-home-page-100.png" alt="" width="30">
                    <a href="./home.php">Home</a>
                </div>

                <div class="menu">
                    <img src="../restaurants/img/icons8-menu-100.png" alt="" width="30">
                    <a href="./menu.php">Menu</a>
                </div>

                <div class="menu m-active">
                    <img src="../assets/img/icons8-time-machine-100.png" alt="" width="30">
                    <a href="./orders.php">Orders</a>
                </div>

                <div class="bottom">
                    <div class="menu">
                        <img src="../assets/img/icons8-settings-100.png" alt="" width="30">
                        <a href="./profilesettings.php">Profile Settings</a>
                    </div>

                    <div class="menu">
                        <img src="../assets/img/icons8-logout-rounded-left-100.png" alt="" width="30">
                        <a href="./r-logout.php">Logout</a>
                    </div>
                </div>
                
            </div>
           
        </div>

        <!-- main content -->
        <div class="main-content">
            <!-- title -->
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-header clearfix">
                                <h2 class="pull-left">Order Details</h2>
                                <!-- <a href="create.php" class="btn btn-success pull-right">Add New Menu Item</a> -->
                            </div>
                            <?php
                            // Include config file
                            require_once "../dbconnection.php";
                            
                            // Attempt select query execution
                            $sql = "SELECT * FROM orders";
                            if($result = mysqli_query($link, $sql)){
                                if(mysqli_num_rows($result) > 0){
                                    echo "<table class='table table-bordered table-striped'>";
                                        echo "<thead>";
                                            echo "<tr>";
                                                echo "<th>Order ID</th>";
                                                echo "<th>Food</th>";
                                                echo "<th>Quantity</th>";
                                                echo "<th>Customer Name</th>";
                                                echo "<th>Hostel</th>";
                                                echo "<th>Room</th>";
                                                echo "<th>Payment Method</th>";
                                            echo "</tr>";
                                        echo "</thead>";
                                        echo "<tbody>";
                                        while($row = mysqli_fetch_array($result)){
                                            echo "<tr>";
                                                echo "<td>" . $row['ID'] . "</td>";
                                                echo "<td>" . $row['Food'] . "</td>";
                                                echo "<td>" . $row['Quantity'] . "</td>";
                                                echo "<td>" . $row['Customer Name'] . "</td>";
                                                echo "<td>" . $row['Hostel'] . "</td>";
                                                echo "<td>" . $row['Payment Method'] . "</td>";
                                                echo "<td>";
                                                    echo "<a href='read.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span style='margin-right: 10px;' class='glyphicon glyphicon-eye-open'></span></a>";
                                                    echo "<a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span style='margin-right: 10px;' class='glyphicon glyphicon-pencil'></span></a>";
                                                    echo "<a href='delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                                echo "</td>";
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
<?php
}
else {
    header('location: login.php');
}