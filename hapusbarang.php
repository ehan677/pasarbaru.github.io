<?php
include "koneksi.php";

$id = $_GET['id_har'];


$query = "DELETE FROM tp_harga WHERE id_har = $id";
$eksekusi = mysqli_query($konek, $query);

if ($eksekusi) {
    echo "<script> 
            alert('Data berhasil dihapus');
            window.location='barang.php';
    
    </script>";
} else {
    echo "<script> 
    alert('Data Gagal dihapus');
    window.location='barang.php';

</script>";
}
