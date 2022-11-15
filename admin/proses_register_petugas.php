<?php
    if($_POST){
        $nama=$_POST['nama_petugas'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $level=$_POST['level'];

        if(empty($nama)){
            echo "<script>
                    alert('nama tidak boleh kosong');
                    location.href='register_petugas.php';
                  </script>";
        }
        elseif(empty($username)){
            echo "<script>
                    alert('Usernama tidak boleh kosong');
                    location.href='register_petugas.php';
                  </script>";
        }
        elseif(empty($level)){
            echo "<script>
                    alert('level tidak boleh kosong');
                    location.href='register_petugas.php';
                  </script>";
        }
        else{
            include "../koneksi.php";

            $insert=mysqli_query($conn, "insert into petugas (nama_petugas, username, password, level) 
                                value 
                                ('".$nama."','".$username."','".md5($password)."','".$level."')") or die(mysqli_eror($conn));
                if($insert){
                    echo "<script>
                            alert('Sukses register akun');
                            location.href='data_petugas.php';
                          </script>";
                }
                else{
                    echo "<script>
                            alert('Sukses register akun');
                            location.href='register_petugas.php';
                          </script>";
                }
            }
    }
?>
