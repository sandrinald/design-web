<?php
	$id_rapat=$_GET['id'];
	$q_tampil_rapat=mysqli_query($db,"SELECT * FROM tbrapat WHERE id_rapat='$id_rapat'");
	$r_tampil_rapat=mysqli_fetch_array($q_tampil_rapat);

				$dokumen = $r_tampil_rapat['dokumen'];
	
?>
<div id="label-page"><h3><center>Edit Data Rapat</h3></div>
<div id="content">
	<form action="proses/rapat-edit-proses.php" method="post" enctype="multipart/form-data">
	<table id="tabel-input">
		
		<tr>
			<td class="label-formulir">ID rapat</td>
			<td class="isian-formulir"><input type="text" size="40" name="id_rapat" value="<?php echo $r_tampil_rapat['id_rapat']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir">Agenda</td>
			<td class="isian-formulir"><input type="text" size="40" name="agenda" value="<?php echo $r_tampil_rapat['agenda']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>

		<tr>
			<td class="label-formulir">Tanggal</td>
			<td class="isian-formulir"><input type="date" size="40" name="tgl" value="<?php echo $r_tampil_rapat['tgl']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>

		<tr>
			<td class="label-formulir">Tempat</td>
			<td class="isian-formulir"><input type="text" name="tempat" size="40" value="<?php echo $r_tampil_rapat['tempat']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>

		<tr>
			<td class="label-formulir">Jenis Rapat</td>
			<td class="isian-formulir"><select name="jenis" value="<?php echo $r_tampil_rapat['jenis']; ?>" class="isian-formulir isian-formulir-border">
			<option>Internal</option>
			<option>Eksternal</option>
			</select>

			<tr>
			<td class="label-formulir">Dokumen</td>
			<td>
			<input type="file" name="dokumen" class="isian-formulir isian-formulir-border" >
			<input type="hidden" name="dokumen_awal" value="<?php echo $dokumen; ?>">
			</td></tr>	

		<tr>
			<td class="label-formulir">Admin</td>
			<td class="isian-formulir"><input type="text" name="nama_admin" value="<?php echo $r_tampil_rapat['nama_admin']; ?>" class="isian-formulir isian-formulir-border"></td>
	

		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan"></td>
		</tr>
	</table>
	</form>
</div>