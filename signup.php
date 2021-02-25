<?php include ('validation.php')?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/index.css">
    <title>Create an account</title>

    <script type="text/javascript">
        function valid(){
            var Name=document.getElementById("Name");
            var Email=document.getElementById("Email");
            var password_1=document.getElementById("password_1");
            var password_2=document.getElementById("password_2");


            if (Name.value.trim()==("")){
            alert("Fill Name");
            return false;
            }
            else if (Email.value.trim()==("")){
            alert("Fill email");
            return false;
            }
            else if (! Email.value.match(/^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)$/)) {
            alert("gmail only");
            return false;
            }

            else if (password_1.value.trim()==("")){
            alert("Fill Password");
            return false;
            }
            else if (! password_1.value.match(/^(?=.*[0-9]+.*)(?=.*[a-zA-Z]+.*)[0-9a-zA-Z]{6,}$/)){
            alert("Password must contain at least one letter, at least one number, and be longer than six charaters");
            return false;
            }
            else if (password_2.value.trim()==("")){
            alert("Repeat Passsword");
            return false; 
            }
            else{
                return true;
            }
        }
        
    
        </script>
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
    
    <img src="assets/img/lily-banse--YHSwy6uqvk-unsplash.jpg" alt="" class="background-image">
</body>

</html>