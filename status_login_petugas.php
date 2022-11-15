<?php
    session_start();
    if($_SESSION['status_petugas']!=true){
        header('location:../');
    }
?>