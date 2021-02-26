<!-- logout file -->
<?php
    session_start();
    unset($_SESSION['Name']);
    header('location: index.php');

?>