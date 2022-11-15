<?php
    if($_POST){
    $id=$_POST['id'];
    $nama_petugas=$_POST['nama_petugas'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $level=$_POST['level'];

    if(empty($nama_petugas)){
        echo "<script>
                alert('Nama petugas tidak boleh kosong');
                location.href='ubah_petugas.php?id=".$id."';
            </script>";
    }
    elseif(empty($username)){
        echo "<script>
                alert('Username tidak boleh kosong');
                location.href='ubah_petugas.php?id=".$id."';
              </script>";
    }
    elseif(empty($password)){
        echo "<script>
                alert('Password tidak boleh kosong');
                location.href='ubah_petugas.php?id=".$id."';
              </script>";
    } 
    elseif(empty($level)){
        echo "<script>
                alert('Level tidak boleh kosong');
                location.href='ubah_petugas.php';
              </script>";
    }
    else{
        include "../koneksi.php";
            $update=mysqli_query($conn,"update petugas set nama_petugas='".$nama_petugas."', username='".$username."',password='".$password."', level='".$level."' where id = '".$id."' ") or die(mysqli_error($conn));
                if($update){
                    echo "<script>
                            alert('Sukses update Petugas');
                            location.href='data_petugas.php';
                        </script>";
                } else {
                    echo "<script>
                            alert('Gagal update Petugas');
                            location.href='ubah_petugas.php?id=".$id."';
                        </script>";
                }
        }
    }
?>