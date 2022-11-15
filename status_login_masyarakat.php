<?php
    session_start();
    if($_SESSION['status_masyarakat']!=true){
        header('location:../');
    }
?>