<?php
    if($_GET['id']){
        include "../koneksi.php";
        $qry_hapus=mysqli_query($conn, "delete from petugas where id='".$_GET['id']."' ");
        if($qry_hapus){
            echo "<script>
                alert('Sukses hapus Petugas'); location.href='data_petugas.php';
            </script>";
        }
        else{
            echo "<script>
            alert('Gagal hapus Petugas'); location.href='data_petugas.php';
            </script>";
        }
    }
?>