<?php
    session_start();
    include ("Header.php");
    $_SESSION["user_id"]=1;
    $_SESSION["username"]="Akornor";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/39aa2f0e20.js" crossorigin="anonymous"></script>
    
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>AshesiEats - Dashboard</title>
</head>
<body>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
    <?php
        $id= $_SESSION["user_id"];
        $user= $_SESSION["username"];
        $header = new Header($id, $user);
        $header->show();
    ?>
        <div class="page-title">
            <h2>Home</h2>
        </div>

        <div class="cards">
            <div id="" class="card">
                    <?php
                        // require_once("../dbconnection.php");
                        // $id = $_SESSION['user_id'];
                        // $db = new mysqli(DB_SERVER, DB_USERNAME,DB_PASSWORD,DB_NAME);
                        // // Check connection
                        // if ($db->connect_error) {
                        //     die("Connection failed: " . $db->connect_error);
                        // }else{
                        //     $sql="SELECT * FROM cart WHERE restaurant_id='$id' AND status='active'";
                        //     $result = $db->query($sql);
            
                        //     $cards=array();
                        //     $count=$result->num_rows;
                        //     if($count>0){
                        //         echo "
                        //         <div class='card-title'>
                        //             <h4>Orders <small class='badge rounded-pill bg-primary text-white'>".$count."new</small></h4>
                        //         </div>";
                        //     }else{
                        //         echo "
                        //         <div class='card-title'>
                        //             <h4>Orders <small class='badge rounded-pill bg-primary text-white'>no new orders</small></h4>
                        //         </div>";
                        //     }
                        // }   
                    ?>
                    <h4><a class="text-decoration-none" href="orders.php">Orders</a></h4>
            </div>

            <div id="" class="card ">
                <a class="text-decoration-none" href="feedback.php"><h4>Feedback <i class="far fa-comment-alt"></i></h4></a>
            </div>

            <div id="" class="card ">
                <a class="text-decoration-none" href="analytics.php"><h4>Sales Analytics <i class="far fa-chart-bar"></i></h4></a>
            </div>

            <div id="" class="card ">
                <a class="text-decoration-none" href="profile.php"><h4>Profile Settings <i class="fas fa-users-cog"></i></h4></a>
            </div>

        </div>
    </div>
</div>
<?php require_once('../footer.php')?>
</body>
</html>
