<!-- logout file -->
<?php
    session_start();
    unset($_SESSION['Name']);
    unset($_SESSION['id']);
    header('location: login.php');

?>