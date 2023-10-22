<?php
    session_start();
    unlink($_SESSION['flag']);
    header('location: login.php');
?>