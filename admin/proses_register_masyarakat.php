<?php
    if($_POST){
        $nama=$_POST['nama_masyarakat'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $tlp=$_POST['tlp'];

        if(empty($nama)){
            echo "<script>
                    alert('nama tidak boleh kosong');
                    location.href='register_masyarakat.php';
                  </script>";
        }

        elseif(empty($username)){
            echo "<script>
                    alert('Usernama tidak boleh kosong');
                    location.href='register_masyarakat.php';
                  </script>";
        }

        elseif(empty($password)){
            echo "<script>
                    alert('Password tidak boleh kosong');
                    location.href='register_masyarakat.php';
                  </script>";
        }

        elseif(empty($tlp)){
          echo "<script>
                  alert('No.telepon tidak boleh kosong');
                  location.href='register_masyarakat.php';
                </script>";
        }
        else{
            include "../koneksi.php";

            $insert=mysqli_query($conn, "insert into masyarakat (nama_masyarakat, username, password, tlp) 
                                value 
                                ('".$nama."','".$username."','".md5($password)."', '".$tlp."')") or die(mysqli_eror($conn));
                if($insert){
                    echo "<script>
                            alert('Sukses register akun');
                            location.href='data_masyarakat.php';
                          </script>";
                }
                else{
                    echo "<script>
                            alert('Sukses register akun');
                            location.href='register_masyarakat.php';
                          </script>";
                }
            }
    }
?>
