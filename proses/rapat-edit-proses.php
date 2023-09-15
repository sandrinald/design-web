<?php
include'../koneksi.php';
$id_rapat = $_POST['id_rapat'];
$agenda = $_POST['agenda'];
$tgl = $_POST['tgl'];
$tempat =$_POST['tempat'];
$jenis =$_POST['jenis'];
$nama_admin =$_POST['nama_admin'];
If(isset($_POST['simpan'])){
	
	extract($_POST);
	$nama_file   = $_FILES['dokumen']['name'];
	if(!empty($nama_file)){
	// Baca lokasi file sementar dan nama file dari form (fupload)
	$lokasi_file = $_FILES['dokumen']['tmp_name'];
	$tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
	$file_dokumen = $nama_file ;
	// Tentukan folder untuk menyimpan file
	$folder = "../berkasrapat/$file_dokumen";
	@unlink ("$folder");
	// Apabila file berhasil di upload
	move_uploaded_file($lokasi_file,"$folder");
	}
	else
		$file_dokumen=$dokumen_awal;

	$sql = 
	"UPDATE tbrapat
		SET id_rapat='$id_rapat', agenda='$agenda',tgl='$tgl',tempat='$tempat',jenis='$jenis',dokumen='$file_dokumen',nama_admin='$nama_admin'
		WHERE id_rapat='$id_rapat'";
	$query = mysqli_query($db, $sql);

	header("location:../index.php?p=rapat");
}
?>
