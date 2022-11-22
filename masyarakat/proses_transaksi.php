<?php  
     session_start();
     if($_POST){
        $harga_tawar=$_POST['penawaran_harga'];        
        if(empty($harga_tawar)){
            echo "<script>
                alert('Harga penawaran tidak boleh kosong');
                location.href='transaksi_lelang.php?id=3';
            </script>";
        }
        else{
            include "../koneksi.php";
            $qry_get_barang=mysqli_query($conn, "select *from barang where id = '".$_GET['id']."' ");
            $data_barang=mysqli_fetch_array($qry_get_barang);   
            
            if($harga_tawar <= $data_barang['harga_awal']){
                echo "<script>
                        alert('Harga penawaran tidak boleh dibawah harga awal');
                        location.href='transaksi_lelang.php?id=3';
                    </script>";                    
            }
            else{
                $qry_get_lelang=mysqli_query($conn,"insert into transaksi (id_masyarakat,id_barang, penawaran_harga) value ('".$_SESSION['id_masyarakat']."', '".$data_barang['id']."', '".$harga_tawar."')");
                echo "<script>
                        alert('Berhasil Menawar barang');
                        location.href='homepage.php';
                    </script>";    
            }
            
            //buat kondisi ketika harga tawar dibawah harga awal 
            
        }
        
    }
?>
