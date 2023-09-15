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

<div id="label-page"><h3><center>Arsip Perjalanan Dinas PDAM Tirta Musi Palembang</center></h3></div>
<div id="content">
	
	<p id="tombol-tambah-container"><a href="index.php?p=dinas-input" class="tombol"><button type="button" class="btn btn-dark">Upload Data</button></a>
	<a target="_blank" href="pages/cetakdinas.php"><img src="print.png" height="50px" height="50px"></a>
	<FORM CLASS="form-inline" METHOD="POST">
	<div align="right"><form method=post><input type="text" name="pencarian"><input type="submit" name="search" value="search" class="tombol"></form>
	</FORM>
	</p>
	<table id="tabel-tampil" class="table table-bordered table-sm">
		<tr>
			<th id="label-tampil-no"><center>No</center></td>
			<th><center>ID dinas</center></th>
			<th><center>Nama Pejabat</center></th>
			<th><center>Jabatan</center></th>
			<th><center>No SPPD</center></th>
			<th><center>Tujuan</center></th>
			<th><center>Tanggal</center></th>
			<th><center>Biaya</center></th>
			<th><center>Dokumen</center></th>
			<th><center>Nama Admin</center></th>
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
				$sql = "SELECT * FROM tbperjalanandinas WHERE tentang LIKE '%$pencarian%'
						OR id_dinas LIKE '%$pencarian%'
						OR nama_pejabat LIKE '%$pencarian%'
						OR tgl LIKE '%$pencarian%'";
				
				$query = $sql;
				$queryJml = $sql;	
						
			}
			else {
				$query = "SELECT * FROM tbperjalanandinas LIMIT $posisi, $batas";
				$queryJml = "SELECT * FROM tbperjalanandinas";
				$no = $posisi * 1;
			}			
		}
		else {
			$query = "SELECT * FROM tbperjalanandinas LIMIT $posisi, $batas";
			$queryJml = "SELECT * FROM tbperjalanandinas";
			$no = $posisi * 1;
		}
		
		//$sql="SELECT * FROM tbperjalanandinas ORDER BY iddinas DESC";
		$q_tampil_dinas = mysqli_query($db, $query);
		if(mysqli_num_rows($q_tampil_dinas)>0)
		{
		while($r_tampil_dinas=mysqli_fetch_array($q_tampil_dinas)){
			if(empty($r_tampil_dinas['dokumen'])or($r_tampil_dinas['dokumen']=='-'))
				$dokumen = "-";
			else
				$dokumen = $r_tampil_dinas['dokumen'];
		?>
	<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $r_tampil_dinas['id_dinas']; ?></td>
			<td><?php echo $r_tampil_dinas['nama_pejabat']; ?></td>
			<td><?php echo $r_tampil_dinas['jabatan']; ?></td>
			<td><?php echo $r_tampil_dinas['no_sppd']; ?></td>
			<td><?php echo $r_tampil_dinas['tujuan']; ?></td>
			<td><?php echo $r_tampil_dinas['tgl']; ?></td>
			<td><?php echo $r_tampil_dinas['biaya']; ?></td>
			<td><a href="berkasdinas/<?php echo $dokumen; ?>"> Lihat PDF</a></td>
			<td><?php echo $r_tampil_dinas['nama_admin']; ?></td>
			<td>
				<a href="index.php?p=dinas-edit&id=<?php echo $r_tampil_dinas['id_dinas'];?>" class="tombol"><img src="images/a (1).png" width="40px"></a> 
					</td>		
			<td>
				<a href="proses/dinas-hapus.php?id=<?php echo $r_tampil_dinas['id_dinas']; ?>" onclick = "return confirm ('Apakah Anda Yakin Akan Menghapus Data Ini?')" class="tombol"><img src="images/a (2).png" width="40px"></a>
				</td>		
		</tr>			<?php $nomor++; } 
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
						echo "<a href=\"?p=dinas&hal=$i\">$i</a>";
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