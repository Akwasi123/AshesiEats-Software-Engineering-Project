<?php
session_start();

require 'dbconnection.php';
$cname = $_SESSION['Name'];
$food = $quantity = $hostel = $room = $momo = $delivery = $payment = "";
$errors = array();

if(isset($_POST['submit'])){
    $food = $_POST['foodlist'];
    $quantity = $_POST['quantity'];
    $hostel = $_POST['hostel'];
    $room = $_POST['room'];
    $momo = $_POST['momo'];
    $delivery = $_POST['delivery'];

    // check which payment method
    // if(!empty($_POST['foodlist'])){
    //     foreach ($_POST['foodlist'] as $selected) {
    //         $food = $selected;
    //     }
    // }
    // else{
    //     echo '<script>alert("No food selected")</script>';
    // }

    if($momo == "Mobile Money"){
        $payment .= "Mobile Money";
    }
    elseif ($delivery == "On-delivery") {
        $payment .= "On-delivery";
    }


    $sql = "INSERT INTO orders (Food, Quantity, `Customer Name`, Hostel, Room, `Payment Method`) VALUES ('$food', '$quantity','$cname', '$hostel', '$room', '$payment')";

    
    if(mysqli_query($link, $sql)){
        header('location: cart.php');
    }
    
}
else{
    echo 'Failed to add to database';
}
?>
