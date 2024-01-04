<?php
include "koneksi.php";

$id = $_POST['id_har'];
$nama_barang = $_POST['nama_barang'];
$satuan = $_POST['satuan'];
$harga_kemarin = $_POST['harga_kemarin'];
$harga_sekarang = $_POST['harga_sekarang'];
$perubahan = (($harga_sekarang - $harga_kemarin) / $harga_kemarin * 100);
$keterangan = $_POST['keterangan'];


$query = "UPDATE tp_harga set nama_barang='$nama_barang',
satuan = '$satuan',
harga_kemarin = '$harga_kemarin',
harga_sekarang ='$harga_sekarang',
perubahan ='$perubahan',
keterangan ='$keterangan'
WHERE id_har = '$id'";
$eksekusi = mysqli_query($konek, $query);
if ($eksekusi) {
    echo "<script> 
            alert('Data Berhasil diubah');
            window.location='barang.php';
    
    </script>";
} else {
    echo "<script> 
    alert('Data Gagal diubah!');
    window.location='editbarang.php';

</script>";
}
