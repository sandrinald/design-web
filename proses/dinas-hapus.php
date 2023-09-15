<?php
include'../koneksi.php';
$id_dinas=$_GET['id'];

mysqli_query($db,
	"DELETE FROM tbperjalanandinas
	WHERE id_dinas='$id_dinas'"
);

header("location:../index.php?p=dinas");
?>