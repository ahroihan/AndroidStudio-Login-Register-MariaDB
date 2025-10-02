<?php

include	"koneksi.php";

$username = $_GET['username'];
$password = $_GET['password'];

$query = "SELECT username FROM tbl_and_user WHERE username='".$username."' AND password='".$password."'";

$result = mysqli_query($koneksi, $query);

$numrows = mysqli_num_rows($result);

if ($numrows == 0)	{
	echo "User tidak ada";
} else {
	echo "Login berhasil";
}
