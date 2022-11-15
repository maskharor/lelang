<?php
    session_start();

    include "koneksi.php";

    //buat variabel menamoung data 
    $username=$_POST['username'];
    $password=$_POST['password'];

    $login=mysqli_query($conn,"select * from petugas where username='".$username."' and password='".md5($password)."' ");

    $cek=mysqli_num_rows($login);

    if($cek>0){
        $data=mysqli_fetch_assoc($login);

        // jika login sebagai admin
        if($data['level']=="admin"){
            // session username dan login 
            $_SESSION['username']=$data['username'];
            $_SESSION['level'] = "admin";
            $_SESSION['status_admin']=true;

            header("location: admin/homepage.php ");
        }
        // jika login sebagai petugas
        elseif($data['level']=="petugas"){
            // session username dan login 
            $_SESSION['username']=$data['username'];
            $_SESSION['level'] = "petugas";
            $_SESSION['status_petugas']=true;

            header("location: petugas/homepage.php ");
        }
        else{
            header("location: login_petugas.php?pesan=gagal");
        }
    }
    else{
        header("location: login_petugas.php?pesan=gagal");
    }
?>