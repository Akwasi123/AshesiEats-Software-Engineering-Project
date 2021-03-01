<!-- logout file -->
<?php
    session_start();
    unset($_SESSION['r-Name']);
    unset($_SESSION['id']);
    header('location: login.php');

?>