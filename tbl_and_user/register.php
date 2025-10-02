<?php

include	"koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$query = "SELECT username FROM tbl_and_user WHERE username='".$username."'";

$result = mysqli_query($koneksi, $query);

$numrows = mysqli_num_rows($result);

if ($numrows == 0)	{
	if ($username=="" || $password=="" || $email=="") {
		echo "Silahkan isi semua bagian yang masih kosong";
	} else {
		$query2 = "INSERT INTO tbl_and_user VALUES (null, '".$username."', '".$password."', '".$email."')";

		mysqli_query($koneksi, $query2);
		echo "Registrasi berhasil";
	}	
} else {
	echo "User sudah ada, silahkan pilih username lain";
}
