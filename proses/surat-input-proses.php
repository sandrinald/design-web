<?php
include'../koneksi.php';
$id_surat = $_POST['id_surat'];
$no_surat = $_POST['no_surat'];
$tgl = $_POST['tgl'];
$perihal =$_POST['perihal'];
$jenis =$_POST['jenis'];

$nama_admin =$_POST['nama_admin'];
if(isset($_POST['simpan'])){
	extract($_POST);
	$nama_file   = $_FILES['dokumen']['name'];
	if(!empty($nama_file)){
	// Baca lokasi file sebentar dan nama file dari form (fupload)
	$lokasi_file = $_FILES['dokumen']['tmp_name'];
	$tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
	$file_dokumen = $nama_file;

	// Tentukan folder untuk menyimpan file
	$folder = "../berkassurat/$file_dokumen";
	// Apabila file berhasil di upload
	move_uploaded_file($lokasi_file,"$folder");
	}
	else
		$file_dokumen="-";

	$sql = 
	"INSERT INTO tbsurat values ('$id_surat','$no_surat','$tgl','$perihal',
	'$jenis','$file_dokumen','$nama_admin')";
	$query = mysqli_query($db, $sql);

	header("location:../index.php?p=surat");
}
?>