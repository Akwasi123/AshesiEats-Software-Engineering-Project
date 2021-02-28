<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<link rel="stylesheet" href="../restaurants/css/home.css">
<title>Akonnor - Dashboard</title>
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
                <div class="menu m-active">
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
            

            <div class="akonnor-r-plaque">
                <p class="b-name">Akonnor</p>
                <img src="../restaurants/img/icons8-male-user-100.png" alt="" width="50">     
            </div>

            <!-- menu items -->
            <div class="card-container">
                <a class="text-decoration-none card" href="orders.php">Orders</a>
                <a class="text-decoration-none card" href="orders.php">Feedback<i class="far fa-comment-alt"></i></a>
                <a class="text-decoration-none card c2" href="orders.php">Sales Analytics<i class="far fa-chart-bar"></i> </a>
                <a class="text-decoration-none card c2" href="orders.php">Profile Settings<i class="fas fa-users-cog"></i> </a>
            </div>

            <!-- <div class="card-container">
                <a class="text-decoration-none card" href="orders.php">Sales Analytics <i class="far fa-chart-bar"></a>
                <a class="text-decoration-none card" href="orders.php">Profile Settings <i class="fas fa-users-cog"></a>
    
            </div> -->


        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>