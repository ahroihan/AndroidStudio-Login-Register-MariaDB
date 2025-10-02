<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "android";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if ($koneksi) {
	//echo "koneksi berhasil";
} else
{
	echo "koneksi gagal";
}
