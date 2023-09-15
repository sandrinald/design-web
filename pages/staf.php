<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="bs/bootstrap.min.css" rel="stylesheet">
  <script src="bs/bootstrap.bundle.min.js"></script>
  <style type="text/css">
  .pagination{
      padding:0px; float:left;
    }
	</style>
</head>
<body>

<div id="label-page"><h3><center>Data Staf Bagian Keuangan</center></h3></div>

<div id="content">
	
	<p id="tombol-tambah-container"><a href="index.php?p=staf-input" class="tombol"><button type="button" class="btn btn-dark">Upload Data</button></a>
	<a target="_blank" href="pages/cetak.php"><img src="print.png" height="50px" height="50px"></a>
	<FORM CLASS="form-inline" METHOD="POST">
	<div align="right"><form method=post><input type="text" name="pencarian"><input type="submit" name="search" value="search" class="tombol"></form>
	</FORM>
	</p>
	<table id="tabel-tampil" class="table table-bordered table-sm">
		<tr>
			<th id="label-tampil-no"><center>No</center></td>
			<th><center>ID Staf</center></th>
			<th><center>Nama</center></th>
			<th><center>Foto</center></th>
			<th><center>Jenis Kelamin</center></th>
			<th><center>Alamat</center></th>
			<th id="label-opsi"><center>Opsi</center></th>
		</tr>
		

		
		<?php
		$batas = 5;
		extract($_GET);
		if(empty($hal)){
			$posisi = 0;
			$hal = 1;
			$nomor = 1;
		}
		else {
			$posisi = ($hal - 1) * $batas;
			$nomor = $posisi+1;
		}	
		if($_SERVER['REQUEST_METHOD'] == "POST"){
			$pencarian = trim(mysqli_real_escape_string($db, $_POST['pencarian']));
			if($pencarian != ""){
				$sql = "SELECT * FROM tbstaf WHERE nama LIKE '%$pencarian%'
						OR idstaf LIKE '%$pencarian%'
						OR jeniskelamin LIKE '%$pencarian%'
						OR alamat LIKE '%$pencarian%'";
				
				$query = $sql;
				$queryJml = $sql;	
						
			}
			else {
				$query = "SELECT * FROM tbstaf LIMIT $posisi, $batas";
				$queryJml = "SELECT * FROM tbstaf";
				$no = $posisi * 1;
			}			
		}
		else {
			$query = "SELECT * FROM tbstaf LIMIT $posisi, $batas";
			$queryJml = "SELECT * FROM tbstaf";
			$no = $posisi * 1;
		}
		
		//$sql="SELECT * FROM tbstaf ORDER BY idstaf DESC";
		$q_tampil_staf = mysqli_query($db, $query);
		if(mysqli_num_rows($q_tampil_staf)>0)
		{
		while($r_tampil_staf=mysqli_fetch_array($q_tampil_staf)){
			if(empty($r_tampil_staf['foto'])or($r_tampil_staf['foto']=='-'))
				$foto = "admin-no-photo.jpg";
			else
				$foto = $r_tampil_staf['foto'];
		?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $r_tampil_staf['idstaf']; ?></td>
			<td><?php echo $r_tampil_staf['nama']; ?></td>
			<td><img src="images/<?php echo $foto; ?>" width=70px height=70px></td>
			<td><?php echo $r_tampil_staf['jeniskelamin']; ?></td>
			<td><?php echo $r_tampil_staf['alamat']; ?></td>
			<td>
				<div class="tombol-opsi-container"><a target="_blank" href="pages/cetak_kartu.php?id=<?php echo $r_tampil_staf['idstaf'];?>" class="tombol"><img src="images/a (1).png" width="40px">Cetak Kartu</a>|
				<a href="index.php?p=staf-edit&id=<?php echo $r_tampil_staf['idstaf'];?>" class="tombol">Edit</a>|
				<a href="proses/staf-hapus.php?id=<?php echo $r_tampil_staf['idstaf']; ?>" onclick = "return confirm ('Apakah Anda Yakin Akan Menghapus Data Ini?')" class="tombol">Hapus</a></div>
			</td>			
		</tr>		
		<?php $nomor++; } 
		}
		else {
			echo "<tr><td colspan=6>Data Tidak Ditemukan</td></tr>";
		}?>		
	</table>
	<?php
	if(isset($_POST['pencarian'])){
	if($_POST['pencarian']!=''){
		echo "<div style=\"float:left;\">";
		$jml = mysqli_num_rows(mysqli_query($db, $queryJml));
		echo "Data Hasil Pencarian: <b>$jml</b>";
		echo "</div>";
	}
	}
	else{ ?>
		<div style="float: left;">		
		<?php
			$jml = mysqli_num_rows(mysqli_query($db, $queryJml));
			echo "Jumlah Data : <b>$jml</b> | page :";
		?>			
		</div>		
		<div class="pagination">		
				<?php
				$jml_hal = ceil($jml/$batas);
				for($i=1; $i<=$jml_hal; $i++){
					if($i != $hal){
						echo "<a href=\"?p=staf&hal=$i\">$i</a>";
					}
					else {
						echo "<a class=\"active\">$i</a>";
					}
				}
				?>
		</div>
	<?php
	}
	?>
</div>