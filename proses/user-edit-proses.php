<?php
include'../koneksi.php';
$iduser=$_POST['iduser'];
$nama=$_POST['nama'];
$jabatan=$_POST['jabatan'];
$username=$_POST['username'];
$password=$_POST['password'];
	


	
	mysqli_query($db,
		"UPDATE tbuser
		SET nama='$nama',jabatan='$jabatan',username='$username',password='$password'
		WHERE iduser='$iduser'"
	);
	header("location:../index.php?p=user");

?>
