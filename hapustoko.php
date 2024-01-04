<?php
include "koneksi.php";

$id = $_GET['id_toko'];


$query = "DELETE FROM tp_toko WHERE id_toko = $id";
$eksekusi = mysqli_query($konek, $query);

if ($eksekusi) {
    echo "<script> 
            alert('Data berhasil dihapus');
            window.location='toko.php';
    
    </script>";
} else {
    echo "<script> 
    alert('Data Gagal dihapus');
    window.location='toko.php';

</script>";
}
