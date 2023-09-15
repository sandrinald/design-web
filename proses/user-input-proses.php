<?php
include'../koneksi.php';
$iduser=$_POST['iduser'];
$nama=$_POST['nama'];
$jabatan=$_POST['jabatan'];
$username=$_POST['username'];
$password=$_POST['password'];
	

	$sql = 
	"INSERT INTO tbuser
		VALUES('$iduser','$nama','$jabatan','$username','$password')";
	$query = mysqli_query($db, $sql);

	header("location:../index.php?p=user");

?>