<?php
include "koneksi.php";

$id = $_POST['id_P'];
$nama_pedagang = $_POST['nama'];
$barang = $_POST['barang'];
$tempat = $_POST['tempat'];


$query = "UPDATE tp_pedagang set nama_pedagang='$nama_pedagang',
barang = '$barang',
tempat = '$tempat'
WHERE id_P = '$id'";
$eksekusi = mysqli_query($konek, $query);
if ($eksekusi) {
    echo "<script> 
            alert('Data Berhasil diubah');
            window.location='pedagang.php';
    
    </script>";
} else {
    echo "<script> 
    alert('Data Gagal diubah!');
    window.location='editpedagang.php';

</script>";
}
