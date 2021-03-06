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

                <div class="menu">
                    <img src="./assets/img/icons8-shopping-cart-100.png" alt="" width="30">
                    <a href="cart.php">Cart</a>
                </div>


                <div class="bottom">
                    <div class="menu m-active">
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
            <div class="container">
                <div class="heading">
                    <img src="./assets/img/icons8-settings-black-100.png" alt="">
                    <p class="cart-title">Settings</p>
                </div>
                
                <hr>

                <!-- menu -->
                <div class="card-container settings-card">
                    <!-- <div class="card ">
                        <img src="./assets/img/icons8-edit-100.png" alt="">
                        <p>Edit Profile</p>
                    </div> -->
                    <?php echo"<a href='userpasswordchange.php?id=" .$_SESSION['Name']. "' class='card '>
                        <img src='./assets/img/icons8-forgot-password-100.png' >
                        <p>Change Password</p>
                    </a>";
                    ?>
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