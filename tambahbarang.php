<?php
session_start();

if (!isset($_SESSION['status']) == 'login') {
    header("location:login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

     <title>Sistem Informasi Pasar Baru</title>

    <link
      rel="shortcut icon"
      href="./assets/compiled/svg/ars.svg"
      type="image/x-icon"
    />

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-dark">
    <form action="prosestambahbarang.php" method="post" class="main-input">
        <div class="container">
            <div class="d-grid">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                       <div class="col-lg-5 d-none d-lg-block" style="background-image: url('./assets/compiled/jpg/barangpasarbaru.jpeg');"></div>
                            <div class="col-lg-7"> 
                                 <div class="p-5">
                        <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Tambah Data Barang Penjual</h1>
                            </div>
                             <div class="form-group">
                                <input type="text" class="form-control form-control-user"  placeholder="Nama Barang" name="nama_barang" id="nama_barang" required="" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" placeholder="satuan" name="satuan" id="satuan" required="" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" placeholder="Harga Kemarin" name="harga_kemarin" id="harga_kemarin" required="" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" placeholder="Harga Sekarang" name="harga_sekarang" id="harga_sekarang" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user"  placeholder="Keterangan" name="keterangan" id="keterangan" required="" autocomplete="off">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-warning btn-style">Tambahkan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>