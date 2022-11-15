<?php
    session_start();
    if($_SESSION['status_admin']!=true){
        header('location:../');
    }
?>