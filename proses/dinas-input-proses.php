<?php
include'../koneksi.php';
$id_dinas = $_POST['id_dinas'];
$nama_pejabat = $_POST['nama_pejabat'];
$jabatan = $_POST['jabatan'];
$no_sppd =$_POST['no_sppd'];
$tujuan =$_POST['tujuan'];
$tgl =$_POST['tgl'];
$biaya =$_POST['biaya'];
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
	$folder = "../berkasdinas/$file_dokumen";
	// Apabila file berhasil di upload
	move_uploaded_file($lokasi_file,"$folder");
	}
	else
		$file_dokumen="-";

	$sql = 
	"INSERT INTO tbperjalanandinas values ('$id_dinas','$nama_pejabat','$jabatan','$no_sppd','$tujuan','$tgl',
	'$biaya','$file_dokumen','$nama_admin')";
	$query = mysqli_query($db, $sql);

	header("location:../index.php?p=dinas");
}
?>