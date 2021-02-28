<?php
session_start();
$Name="";
$Email="";
$errors=array();

include 'dbconnection.php';

if(isset($_POST['submit'])){
    $Name = $_POST['Name'];
    $email = $_POST['Email'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];

    if (empty($Name)) {
        array_push($errors, "Fill Username");
    }
    if (empty($email)) {
        array_push($errors, "Fill email");
    }
    if (empty($password_1)) {
        array_push($errors, "Fill password");
    }
    if ($password_1 != $password_2) {
        array_push($errors,"Password do not match"); 
    }
    else {
        $password=md5($password_1);
        $sql="INSERT INTO signup (Name,Email,password) VALUES ('$Name','$email','$password')";

        mysqli_query($link,$sql);
        header('location:index.php');
        
        
    }
}

if(isset($_POST['Login'])){
    $Name = $_POST['Name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($Name)) {
        array_push($errors, "<span style='color: red;'>" .'Username Required'. "</span>");
    }
    if (empty($email)) {
        array_push($errors, "<span style='color: red;'>" .'Email Required'. "</span>");
    }
    if (empty($password)) {
        array_push($errors, "<span style='color: red;'>" .'Password Required'. "</span>");
    }
    
    if (count($errors)==0) { 
        $password=md5($password);
        $query="SELECT * FROM signup WHERE Email='$email' AND Name='$Name' AND password='$password'";
        
        $results1= mysqli_query($link,$query);

        
        if ($row=mysqli_fetch_array($results1)) {
            $_SESSION['Name'] = $Name;
            header('location:home.php');
        }
        else{
            array_push($errors,"<span style='color: red;'>" .'Wrong username or password'. "</span>");
            // header('location: home.php');
        }
    
    }
}
?>