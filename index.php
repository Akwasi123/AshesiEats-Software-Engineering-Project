<?php include ('validation.php')?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/index.css">
    <title>Ashesi Eats - Login</title>
</head>

<body>
    <!-- login page -->
    <div class="login-container">
        <!-- brand -->
        <div class="brand">
            <img src="" alt="">
            <p>Ashesi Eats</p>
        </div>
        <form action="index.php" class="login-form" method="post">
        <?php include ('error.php'); ?>

            <div class="field">
                <img src="" alt="">
                <input type="text" name="Name" placeholder="Username">
            </div>

            <div class="field">
                <img src="" alt="">
                <input type="password" name="password" placeholder="Password">
            </div>

            <div class="field">
                <input type="submit" name="Login" value="Log in">
            </div>            
        </form>

        <!-- create account -->
        <span class="create-account">Don't have an account? Sign up <a href="signup.php">here.</a></span>
    </div>
    
    <img src="./assets/img/lily-banse--YHSwy6uqvk-unsplash.jpg" alt="" class="login-background-image">
</body>

</html>