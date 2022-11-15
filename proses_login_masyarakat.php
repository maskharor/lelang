<?php
    if($_POST){
        // buat variabel untuk nampung data dari form inputan
        $username=$_POST['username'];
        $password=$_POST['password'];

        // pengecekan input username tidak boleh kosong
        if(empty($username)){
            echo "<script>
                    alert('Username tidak boleh kosong');
                    location.href='login_masyarakat.php';
                  </script>";
        }
        // pengecekan input password tidak boleh kosong
        elseif(empty($password)){
            echo "<script>
                    alert('Password tidak boleh kosong');
                    location.href='login_masyarakat.php';
                  </script>";
        }
        // pengecekan input tidak ada yang kosong
        else{
            include "koneksi.php";

            $qry_login=mysqli_query($conn, "select * from masyarakat where username = '".$username."' and password = '".md5($password)."'");
            // pengecekan berapa jumlah baris di dalam tabel database 
            if(mysqli_num_rows($qry_login)>0){
                // mysqli_fetch_array untuk mengambil data dari database mysql 
                $dt_login=mysqli_fetch_array($qry_login);
            
                // untuk memulai eksekusi session pada server dan nantinya akan di simpan dalam browser
                session_start();

                $_SESSION['id_masyarakat']=$dt_login['id_masyarakat'];
                $_SESSION['nama_masyarakat']=$dt_login['nama_masyarakat'];
                $_SESSION['username']=$dt_login['username'];
                $_SESSION['tlp']=$dt_login['tlp'];
                $_SESSION['status_masyarakat']=true;

                // untuk membawa kita ke folder masyarakat dan masuk ke halaman homepage.php
                header("location: masyarakat/homepage.php");
                
            }
            // pengecekan jika username dan password tidak sesuai dengan yang ada di tabel masyarakat
            else{
                echo "<script>
                        alert('Username dan Password salah');
                        location.href='login_masyarakat.php';
                     </script>";
            }
        }
    }
?>

