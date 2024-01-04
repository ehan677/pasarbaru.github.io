<?php
include "koneksi.php";

$lantai = $_POST['lantai'];
$baju = $_POST['baju'];
$makanan = $_POST['makanan'];
$perabotan = $_POST['perabotan'];
$keterangan = $_POST['keterangan'];



$query = "INSERT into tp_toko (lantai, baju, makanan, perabotan, keterangan ) VALUES 
            ('$lantai', '$baju', '$makanan', '$perabotan', '$keterangan')";
$eksekusi = mysqli_query($konek, $query);
if ($eksekusi) {
    echo "<script> 
            alert('Data Berhasil ditambahkan!');
            window.location='toko.php';
    
    </script>";
} else {
    echo "<script> 
    alert('Data Gagal ditambahkan!');
    window.location='tambahtoko.php';

</script>";
}
