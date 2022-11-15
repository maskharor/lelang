<?php
    if($_GET['id']){
        include "../koneksi.php";
        $qry_hapus=mysqli_query($conn, "delete from barang where id='".$_GET['id']."' ");
        if($qry_hapus){
            echo "<script>
                    alert('Sukses hapus barang');
                    location.href='data_barang.php';
                </script>";
        }
        else{
            echo "<script>
                    alert('Gagal hapus barang');
                    location.href='data_barang.php';
                </script>";
        }
    }
?>