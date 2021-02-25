<?php include ('validation.php')?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/index.css">
    <title>Create an account</title>
</head>

<body>
    <!-- login page -->
    <div class="signup-container">
        <!-- brand -->
        <div class="brand">
            <img src="" alt="">
            <p>Sign Up</p>
        </div>
        <form onsubmit="return valid()" action="signup.php" class="login-form" method="post">
            <?php include ('error.php'); ?>

            <div class="field">
                <img src="" alt="">
                <input type="text" id="Name" name="Name" placeholder="Name">
            </div>

            <div class="field">
                <img src="" alt="">
                <input type="text" id="Email" name="Email" placeholder="Email">
            </div>

            <div class="field">
                <img src="" alt="">
                <input type="password" id="password_1" name="password_1" placeholder="Password">
            </div>

            <div class="field">
                <img src="" alt="">
                <input type="password" id="password_2" name="password_2" placeholder="Password">
            </div>

            <div class="field">
            <input type="submit" name="submit" value="Create account">
            </div>            
        </form>

        <!-- create account -->
        <span class="create-account">Already have an account? <a href="index.php">Log in</a></span>
    </div>
    
    <img src="./assets/img/eaters-collective-12eHC6FxPyg-unsplash.jpg" alt="" class="signup-background-image">

    <script src="./assets/js/validation.js"></script>
</body>

</html>