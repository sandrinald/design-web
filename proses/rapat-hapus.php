<?php
include'../koneksi.php';
$id_rapat=$_GET['id'];

mysqli_query($db,
	"DELETE FROM tbrapat
	WHERE id_rapat='$id_rapat'"
);

header("location:../index.php?p=rapat");
?>