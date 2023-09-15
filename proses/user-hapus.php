<?php
include'../koneksi.php';
$iduser=$_GET['id'];

mysqli_query($db,
	"DELETE FROM tbuser
	WHERE iduser='$iduser'"
);

header("location:../index.php?p=user");
?>