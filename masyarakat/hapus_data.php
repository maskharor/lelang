<?php
    session_start();
    unset($_SESSION['table'][$_GET['id']]);
    header('location: konfirmasi.php');
?>