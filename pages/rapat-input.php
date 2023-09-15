<div id="label-page"><h3><center>Input Data Rapat</h3></div>
<div id="content">
	<form action="proses/rapat-input-proses.php" method="post" enctype="multipart/form-data">
	
	<table id="tabel-input">
	
		<tr>
			<td class="label-formulir">ID Rapat</td>
			<td class="isian-formulir"><input type="text" size="40" name="id_rapat" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Agenda</td>
			<td class="isian-formulir"><input type="text" size="40" name="agenda" class="isian-formulir isian-formulir-border"></td>
		</tr>
		
		<tr>
			<td class="label-formulir">Tanggal rapat</td>
			<td class="isian-formulir"><input type="date" size="40" name="tgl" class="isian-formulir isian-formulir-border"></td>
		</tr>

		<tr>
			<td class="label-formulir">Tempat</td>
			<td class="isian-formulir"><input type="text" size="40" name="tempat" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Jenis rapat</td>
			<td class="isian-formulir"><select name="jenis" class="isian-formulir isian-formulir-border">
			<option>Internal</option>
			<option>Eksternal</option></select>
			</td>
		</tr>

		<tr>
			<td class="label-formulir">Dokumen</td>
			<td class="isian-formulir"><input type="file" size="40" name="dokumen" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Nama Admin</td>
			<td class="isian-formulir"><input type="text" size="40" name="nama_admin" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" class="tombol"></td>
		</tr>
	</table>
	</form>
</div>