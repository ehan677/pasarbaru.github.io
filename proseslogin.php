<?php
include "koneksi.php";

session_start();
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * FROM tp_login where username='$username' AND password='$password' LIMIT 1";
$eksekusi = mysqli_query($konek , $query);

$ada = mysqli_fetch_array($eksekusi);

if ($ada > 0) {
    $_SESSION['username'] = $ada['username'];
    $_SESSION['status'] = "login";
    echo "<script> 
            alert('Anda akan diarahkan ke halaman utama!');
            window.location='dashboardadmin.php';
        </script>";
} else {
    echo "<script> 
        alert('Username dan Password tidak ditemukan!');
        setTimeout(function(){
            window.location='login.php';
        }, 3000); // waktu tunggu dalam milidetik (dalam contoh ini, 3000 milidetik = 3 detik)
    </script>";
}

?>

