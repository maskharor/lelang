<?php
    if($_SESSION['status_barang']!=true){
        echo "<script>
                alert('Lelang Was Closed');
                location.href='homepage.php';
            </script>";    

    }
?>