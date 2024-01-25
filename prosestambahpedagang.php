<?php
include "koneksi.php";

$nama = $_POST['nama'];
$barang = $_POST['barang'];
$tempat = $_POST['tempat'];



$query = "INSERT into tp_pedagang (nama_pedagang, barang, tempat ) VALUES 
            ('$nama','$barang','$tempat')";
$eksekusi = mysqli_query($konek, $query);
if ($eksekusi) {
    echo "<script> 
            alert('Data Berhasil ditambahkan!');
            window.location='pedagang.php';
    
    </script>";
} else {
    echo "<script> 
    alert('Data Gagal ditambahkan!');
    window.location='tambahpedagang.php';

</script>";
}

