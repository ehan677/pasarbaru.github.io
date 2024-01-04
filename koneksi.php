<?php
$konek = mysqli_connect("localhost", "root", "", "pasar");

// Check connection
if (!$konek) {
	echo "koneksi error";
}
