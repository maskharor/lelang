<?php
    include "../status_login_admin.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADMIN-Tambah Barang</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-left">
                                        <a class="small" href="data_barang.php"><- kembali ke data barang</a>
                            </div>
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Tambah Barang Lelang!</h1>
                            </div>
                            <h3>Tambah Buku</h3>
                                <form action="proses_tambah_barang.php" class="user" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        Nama barang: 
                                        <input type="text" name="nama_barang" value="" class="form-control form-control-user">
                                    </div>

                                    <div class="form-group">
                                        Harga awal: 
                                        <input type="number" name="harga_awal" value="" class="form-control form-control-user">
                                    </div>

                                    <div class="form-group">
                                        Deskripsi : 
                                        <textarea name="deskripsi" cols = 147 class = "form-control form-control-user"></textarea>
                                    </div>

                                    <div class="form-group">
                                        Foto produk : <br>
                                        <input type="file" name="foto" class="form-control form-control-user">
                                    </div>

                                    <br>
                                    <input type="submit" name="simpan" value="Tambah Buku" class="btn btn-primary btn-user btn-block">
                                </form>
                            <hr>
                            <div class="text-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>