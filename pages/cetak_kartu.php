<?php
	include "../koneksi.php";
	$id_staf=$_GET['id'];
	$q_tampil_staf=mysqli_query($db,"SELECT * FROM tbstaf WHERE idstaf='$id_staf'");
	$r_tampil_staf=mysqli_fetch_array($q_tampil_staf);
	if(empty($r_tampil_staf['foto'])or($r_tampil_staf['foto']=='-'))
		$foto = "admin-no-photo.jpg";
	else
		$foto = $r_tampil_staf['foto'];
?>
<p> &nbsp </p>
<div id="label-page"><center><h3>KARTU STAF BAGIAN KEUANGAN</h3></center></div>
<div id="content">
	<table id="tabel-input" border="1">
		<tr>
			<td class="label-formulir" width="200">FOTO</td>
			<td class="isian-formulir" width="300">
			<center><img src="../images/<?php echo $foto; ?>" width=150px height=150px></center>
			</td>
		</tr>
		<tr>
			<td class="label-formulir">ID staf</td>
			<td class="isian-formulir"><?php echo $r_tampil_staf['idstaf']; ?></td>
		</tr>
		<tr>
			<td class="label-formulir">Nama</td>
			<td class="isian-formulir"><?php echo $r_tampil_staf['nama']; ?></td>
		</tr>
		<tr>
			<td class="label-formulir">Jenis Kelamin</td>
			<td class="isian-formulir"><?php echo $r_tampil_staf['jeniskelamin']; ?></td>
		</tr>
		<tr>
			<td class="label-formulir">Alamat</td>
			<td class="isian-formulir"><?php echo $r_tampil_staf['alamat']; ?></td>
		</tr>
	</table>
</div>
<script>
		window.print();
	</script>