<?php
    if($_POST){
    $id_masyarakat=$_POST['id_masyarakat'];
    $nama_masyarakat=$_POST['nama_masyarakat'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $tlp=$_POST['tlp'];
    
    if(empty($nama_masyarakat)){
        echo "<script>
                alert('nama tidak boleh kosong');
                location.href='ubah_masyarakat.php?id_masyarakat=".$id_masyarakat."';
            </script>";
    } elseif(empty($username)){
        echo "<script>
                alert('Username tidak boleh kosong');
                location.href='ubah_masyarakat.php?id_masyarakat=".$id_masyarakat."';
            </script>";  
    } elseif(empty($password)){
        echo "<script>
                alert('Password tidak boleh kosong');
                location.href='ubah_masyarakat.php?id_masyarakat=".$id_masyarakat."';
            </script>";  
    } 
    else{
    include "../koneksi.php";
        $update=mysqli_query($conn,"update masyarakat set nama_masyarakat='".$nama_masyarakat."',  username='".$username."', password='".$password."', tlp='".$tlp."'  where id_masyarakat = '".$id_masyarakat."' ") or die (mysqli_error($conn));
            if($update){
                echo "<script>
                        alert('Sukses update masyarakat');
                        location.href='data_masyarakat.php';
                </script>";
            } else {
                echo "<script>
                        alert('Gagal update masyarakat');
                        location.href='ubah_masyarakat.php?id_masyarakat=".$id_masyarakat."';
                </script>";
            }
    }
}
?>