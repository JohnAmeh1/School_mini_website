<?php
    session_start();
    if(isset($_SESSION['matNumber'])){
        header("location: ./dashboard.php");
        exit();
    }
?>