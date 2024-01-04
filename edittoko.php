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
    <form action="prosesedittoko.php" method="post" class="main-input">
        <div class="container">
            <div class="d-grid">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                       <div class="col-lg-5 d-none d-lg-block" style="background-image: url('./assets/compiled/jpg/tokopasarbaru.jpeg');"></div>
                            <div class="col-lg-7"> 
                                 <div class="p-5">
                        <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Tambah Data Toko</h1>
                            </div>
                            <?php
            include "koneksi.php";
            $id = $_GET['id_toko'];

            $sql = "SELECT * FROM tp_toko WHERE id_toko = $id";
            $row = $konek->query($sql)->fetch_assoc();
            ?>
            <input type="hidden" name="id_toko" value="<?= $row['id_toko'] ?>">
                                                         <div class="form-group">
                                <input type="number" class="form-control form-control-user" placeholder="Isi Dengan Lantai" name="lantai" id="lantai" required="" autocomplete="off" value="<?= $row['lantai'] ?>"> <br>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" placeholder="Isi tingkat keterisian oleh toko baju" name="baju" id="baju" required="" autocomplete="off" value="<?= $row['baju'] ?>"> <br>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" placeholder="Isi tingkat keterisian oleh toko makanan" name="makanan" id="makanan" required="" autocomplete="off" value="<?= $row['makanan'] ?>"> <br>
                            </div>
                             <div class="form-group">
                                <input type="text" class="form-control form-control-user" placeholder="Isi tingkat keterisian oleh toko perabotan" name="perabotan" id="perabotan" required="" autocomplete="off" value="<?= $row['perabotan'] ?>"><br>
                            </div>
                             <div class="form-group">
                                <input type="text" class="form-control form-control-user" placeholder="Keterangan" name="keterangan" id="keterangan" required="" autocomplete="off" value="<?= $row['keterangan'] ?>"><br>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-warning btn-style">Edit Toko</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>