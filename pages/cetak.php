<?php
include "../koneksi.php";

?>
<link rel="stylesheet" type="text/css" href="../style.css">
<p> &nbsp </p>
<p> &nbsp </p>
<center><h2>DATA STAF BAGIAN KEUANGAN</h2></center>
<center><h2>PDAM TIRTA MUSI PALEMBANG</h2></center></div>
<p> &nbsp </p>
<div id="content">
<table border="1" id="tabel-tampil">
		<tr>
			<th id="label-tampil-no"><center>No</center></th>
			<th><center>ID staf</center></th>
			<th><center>Nama</center></th>
			<th><center>Foto</center></th>
			<th><center>Jenis Kelamin</center></th>
			<th><center>Alamat</center></th>
		</tr>
	
		<?php		
		$nomor=1;
		$query="SELECT * FROM tbstaf ORDER BY idstaf DESC";
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

		</tr>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $r_tampil_staf['idstaf']; ?></td>
			<td><?php echo $r_tampil_staf['nama']; ?></td>
			<td><img src="../images/<?php echo $foto; ?>" width=70px height=70px></td>
			<td><?php echo $r_tampil_staf['jeniskelamin']; ?></td>
			<td><?php echo $r_tampil_staf['alamat']; ?></td>		
		</tr>		
		<?php $nomor++; } 
		}?>		
		
	</table>
	<p> &nbsp </p>
	<div style="width: 25%; text-align: left; float: right;">Palembang,              2022</div><br>
        <div style="width: 25%; text-align: left; float: right;">Yang bertanda tangan,</div><br><br><br><br><br>
        <div style="width: 25%; text-align: left; float: right;">Palatanhar</div>
	<script>
		window.print();
	</script>
</div>
