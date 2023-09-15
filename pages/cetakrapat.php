<!DOCTYPE html>
<html lang="en">
<head>
  <title>cetak data</title>
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
<p> &nbsp </p>
<div id="label-page"><center><h3>DATA RAPAT TIRTA MUSI PALEMBANG</h3></center></div>
<div id="content">
	

	</p>
	<table border="1">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID rapat</th>
			<th>Agenda</th>
			<th>Tanggal</th>
			<th>Tempat</th>
			<th>Jenis</th>
			<th>Dokumen</th>
			<th>Nama Admin</th>
			
		</tr>
		

		
		<?php
		include"../koneksi.php";
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
				$sql = "SELECT * FROM tbrapat WHERE perihal LIKE '%$pencarian%'
						OR id_rapat LIKE '%$pencarian%'
						OR jenis LIKE '%$pencarian%'
						OR tgl LIKE '%$pencarian%'";
				
				$query = $sql;
				$queryJml = $sql;	
						
			}
			else {
				$query = "SELECT * FROM tbrapat LIMIT $posisi, $batas";
				$queryJml = "SELECT * FROM tbrapat";
				$no = $posisi * 1;
			}			
		}
		else {
			$query = "SELECT * FROM tbrapat LIMIT $posisi, $batas";
			$queryJml = "SELECT * FROM tbrapat";
			$no = $posisi * 1;
		}
		
		//$sql="SELECT * FROM tbrapat ORDER BY idrapat DESC";
		$q_tampil_rapat = mysqli_query($db, $query);
		if(mysqli_num_rows($q_tampil_rapat)>0)
		{
		while($r_tampil_rapat=mysqli_fetch_array($q_tampil_rapat)){
			if(empty($r_tampil_rapat['dokumen'])or($r_tampil_rapat['dokumen']=='-'))
				$dokumen = "-";
			else
				$dokumen = $r_tampil_rapat['dokumen'];
		?>
	<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $r_tampil_rapat['id_rapat']; ?></td>
			<td><?php echo $r_tampil_rapat['agenda']; ?></td>
			
			<td><?php echo $r_tampil_rapat['tgl']; ?></td>
			<td><?php echo $r_tampil_rapat['tempat']; ?></td>
			<td><?php echo $r_tampil_rapat['jenis']; ?></td>
			<td><a href="berkasrapat/<?php echo $dokumen; ?>"> Lihat PDF</a></td>
			<td><?php echo $r_tampil_rapat['nama_admin']; ?></td>
				
		</tr>			<?php $nomor++; } 
		}
		else {
			echo "<tr><td colspan=6>Data Tidak Ditemukan</td></tr>";
		}?>		
	</table>
		
	<p> &nbsp </p>
	<div style="width: 25%; text-align: left; float: right;">Palembang,              2022</div><br>
        <div style="width: 25%; text-align: left; float: right;">Yang bertanda tangan,</div><br><br><br><br><br>
        <div style="width: 25%; text-align: left; float: right;">Palatanhar</div>

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
						echo "<a href=\"?p=rapat&hal=$i\">$i</a>";
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
<script>
window.print();
</script>