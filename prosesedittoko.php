<?php
include "koneksi.php";

$id = $_POST['id_toko'];
$lantai = $_POST['lantai'];
$baju = $_POST['baju'];
$makanan = $_POST['makanan'];
$perabotan = $_POST['perabotan'];
$keterangan = $_POST['keterangan'];


$query = "UPDATE tp_toko set lantai='$lantai',
baju = '$baju',
makanan = '$makanan',
perabotan ='$perabotan',
keterangan ='$keterangan'
WHERE id_toko = '$id'";
$eksekusi = mysqli_query($konek, $query);
if ($eksekusi) {
    echo "<script> 
            alert('Data Berhasil diubah!');
            window.location='toko.php';
    
    </script>";
} else {
    echo "<script> 
    alert('Data Gagal diubah!');
    window.location='edittoko.php';

</script>";
}
