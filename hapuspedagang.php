<?php
include "koneksi.php";

$id = $_GET['id_P'];


$query = "DELETE FROM tp_pedagang WHERE id_P = $id";
$eksekusi = mysqli_query($konek, $query);

if ($eksekusi) {
    echo "<script> 
            alert('Data berhasil dihapus');
            window.location='pedagang.php';
    
    </script>";
} else {
    echo "<script> 
    alert('Data Gagal dihapus');
    window.location='pedagang.php';

</script>";
}