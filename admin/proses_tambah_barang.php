<?php
if($_POST) {
  date_default_timezone_set("Asia/Jakarta");

  $nama_barang=$_POST['nama_barang'];
  $harga_awal=$_POST['harga_awal'];
  $deskripsi=$_POST['deskripsi'];
  $tgl_daftar = date('Y-m-d');
  $foto = basename($_FILES["foto"]["name"]);
  $target_dir = "../foto/";
  $target_file = $target_dir . basename($_FILES["foto"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  if(empty($nama_barang)){
    echo "<script>alert('nama barang tidak boleh kosong');
    location.href='tambah_barang.php';</script>";

  } elseif(empty($deskripsi)){
    echo "<script>alert('deskripsi barang tidak boleh kosong');
    location.href='tambah_barang.php';</script>";

  } elseif(empty($harga_awal)){
    echo "<script>alert('harga barang tidak boleh kosong');
    location.href='tambah_barang.php';</script>";

  } elseif(empty($foto)){
    echo "<script>alert('foto barang tidak boleh kosong');
    location.href='tambah_barang.php';</script>";

  }
    else {
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["foto"]["tmp_name"]);
    if($check == false) {
        echo "<script>alert('File yang dipilih bukan foto.');
        location.href='tambah_barang.php';</script>";
        $uploadOk = 0;
    } else {
        $uploadOk = 1;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "<script>alert('File foto sudah ada.');
        location.href='tambah_barang.php';</script>";
    $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["foto"]["size"] > 5242880) {
        echo "<script>alert('File foto terlalu besar');
        location.href='tambah_barang.php';</script>";
    $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo "<script>alert('Hanya menerima file foto JPG, JPEG,  & PNG');
        location.href='tambah_barang.php';</script>";
    $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "<script>alert('File foto tidak terupload');
        location.href='tambah_barang.php';</script>";  
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {                
            include "../koneksi.php";           
            $sql = "INSERT INTO `barang` (`nama_barang`, `harga_awal`, `deskripsi`, `tgl_daftar`, `foto`) VALUES ('$nama_barang', '$harga_awal', '$deskripsi','$tgl_daftar','$foto')";    
            $insert=mysqli_query($conn, $sql);
            if($insert) {
                echo "<script>alert('Sukses menambahkan barang');
                location.href='data_petugas.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan barang');
                location.href='tambah_barang.php';</script>";
            }
        } else {
            echo "<script>alert('Error saat upload file foto');
            location.href='tambah_barang.php';</script>";
        }
      }
  }
}

?>