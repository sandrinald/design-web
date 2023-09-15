<?php
include'../koneksi.php';
$id_surat=$_GET['id'];

mysqli_query($db,
	"DELETE FROM tbsurat
	WHERE id_surat='$id_surat'"
);

header("location:../index.php?p=surat");
?>