<?php
session_start();
if($_SESSION['r-Name']){
    echo $_SESSION['ID'];
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

                    <div class="menu">
                        <img src="../assets/img/icons8-time-machine-100.png" alt="" width="30">
                        <a href="./orders.php">Orders</a>
                    </div>

                    <div class="bottom">
                        <div class="menu m-active">
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
                <div class="container">
                    <div class="heading">
                        <img src="../assets/img/icons8-settings-black-100.png" alt="">
                        <p class="cart-title">Settings</p>
                    </div>
                    
                    <hr>

                    <!-- menu -->
                    <div class="card-container settings-card">
                        <!-- <div class="card ">
                            <img src="../assets/img/icons8-edit-100.png" alt="">
                            <p>Edit Profile</p>
                        </div> -->
                        <?php echo "<a style='text-decoration: none;' href='changepassword.php?id=". $_SESSION['r-Name']. "'class='card'>
                            <img src='../assets/img/icons8-forgot-password-100.png' >
                            <p>Change Password</p>
                        </a>"
                        ?>
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