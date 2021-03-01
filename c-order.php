<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<link rel="stylesheet" href="assets/css/order.css">
<title>Order Food - Akonnor</title>
</head>
<body>
    <div class="order-plaque container px-0">
        <!-- image -->
        <div class="left-img">
            <img src="./assets/img/whitney-wright-6G98hiCJETA-unsplash.jpg" alt="">
        </div>

        <!-- order form -->
        <div class="order">
        
            <a href="./akonnor.php" class="close"><img  src="./assets/img/icons8-macos-close-100.png" alt="" width="40"></a>
            <div class="brand">
                <img src="./assets/img/icons8-kawaii-french-fries-100.png" alt="">
                <p>Akonnor Catering Services</p>
                <!-- <span>Enjoy your meal</span> -->
            </div>
            <form action="pushorders.php" class="order-form" method="POST">
                <div class="f-item">
                    <label for="">Order:</label>
                    <select name="foodlist">
                        <?php 
                        include "dbconnection.php";
                        $sql = mysqli_query($link, "SELECT Breakfast, Lunch, Supper, Drink FROM meal");
                        while ($row = $sql->fetch_assoc()){
                            echo "<option name = 'breakfast' selected='true' disabled='disabled'>--- Select food option ---</option>";
                            echo "<option name = 'breakfast' value='".$row['Breakfast']."'>" . $row['Breakfast'] . "</option>";
                            echo "<option name = 'lunch' value='".$row['Lunch']."'>" . $row['Lunch'] . "</option>";
                            echo "<option name = 'supper' value='".$row['Supper']."'>" . $row['Supper'] . "</option>";
                            echo "<option name = 'drinks' value='".$row['Drink']."'" . $row['Drink'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="f-item">
                    <label for="">Quantity:</label>
                    <input type="text" name="quantity" placeholder="Quantity">
                </div>
                
                <div class="f-item">
                     <label for="">Hostel:</label>
                    <input type="text" name="hostel" placeholder="Hostel">
                </div>
               
                <div class="f-item">
                    <label for="">Room:</label>
                    <input type="text" name="room" id="" placeholder="Room">
                </div>
                
                <div class="f-item">
                    <label for="">Payment:</label>
                    <input type="radio" name="momo" id="" value="Mobile Money"> Mobile Money
                    <input type="radio" name="delivery" id="delivery" value="On-delivery"> On-delivery
                </div>   
                
                <div class="button">
                    <input type="submit" name="submit" value="Order">
                </div>
            </form>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>