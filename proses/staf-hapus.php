<?php
include'../koneksi.php';
$id_staf=$_GET['id'];

mysqli_query($db,
	"DELETE FROM tbstaf
	WHERE idstaf='$id_staf'"
);

header("location:../index.php?p=staf");
?>