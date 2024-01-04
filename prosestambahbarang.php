<?php
include "koneksi.php";

$nama_barang = $_POST['nama_barang'];
$satuan = $_POST['satuan'];
$harga_kemarin = $_POST['harga_kemarin'];
$harga_sekarang = $_POST['harga_sekarang'];
$perubahan = (($harga_sekarang - $harga_kemarin) / $harga_kemarin * 100);
$keterangan = $_POST['keterangan'];



$query = "INSERT into tp_harga (nama_barang, satuan, harga_kemarin, harga_sekarang, perubahan, keterangan ) VALUES 
            ('$nama_barang', '$satuan', '$harga_kemarin', '$harga_sekarang', '$perubahan', '$keterangan')";
$eksekusi = mysqli_query($konek, $query);
if ($eksekusi) {
    echo "<script> 
            alert('Data Berhasil ditambahkan!');
            window.location='barang.php';
    
    </script>";
} else {
    echo "<script> 
    alert('Data Gagal ditambahkan!');
    window.location='tambahbarang.php';

</script>";
}
