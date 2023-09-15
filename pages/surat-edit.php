<?php
	$id_surat=$_GET['id'];
	$q_tampil_surat=mysqli_query($db,"SELECT * FROM tbsurat WHERE id_surat='$id_surat'");
	$r_tampil_surat=mysqli_fetch_array($q_tampil_surat);

				$dokumen = $r_tampil_surat['dokumen'];
	
?>
<div id="label-page"><h3><center>Edit Data Surat</h3></div>
<div id="content">
	<form action="proses/surat-edit-proses.php" method="post" enctype="multipart/form-data">
	<table id="tabel-input">
		
		<tr>
			<td class="label-formulir">ID Surat</td>
			<td class="isian-formulir"><input type="text" size="40" name="id_surat" value="<?php echo $r_tampil_surat['id_surat']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir">Nomor Surat</td>
			<td class="isian-formulir"><input type="text" size="40" name="no_surat" value="<?php echo $r_tampil_surat['no_surat']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>

		<tr>
			<td class="label-formulir">Tanggal</td>
			<td class="isian-formulir"><input type="date" size="40" name="tgl" value="<?php echo $r_tampil_surat['tgl']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>

		<tr>
			<td class="label-formulir">Perihal</td>
			<td class="isian-formulir"><input type="text" name="perihal" size="40" value="<?php echo $r_tampil_surat['perihal']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>

		<tr>
			<td class="label-formulir">Jenis Surat</td>
			<td class="isian-formulir"><select name="jenis" value="<?php echo $r_tampil_surat['jenis']; ?>" class="isian-formulir isian-formulir-border">
			<option>Surat Masuk</option>
			<option>Surat Keluar</option>
			</select>

			<tr>
			<td class="label-formulir">Dokumen</td>
			<td>
			<input type="file" name="dokumen" class="isian-formulir isian-formulir-border" >
			<input type="hidden" name="dokumen_awal" value="<?php echo $dokumen; ?>">
			</td></tr>	

		<tr>
			<td class="label-formulir">Admin</td>
			<td class="isian-formulir"><input type="text" name="nama_admin" value="<?php echo $r_tampil_surat['nama_admin']; ?>" class="isian-formulir isian-formulir-border"></td>
	

		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan"></td>
		</tr>
	</table>
	</form>
</div>