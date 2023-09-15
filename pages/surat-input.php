<div id="label-page"><h3><center>Input Data Surat</h3></div>
<div id="content">
	<form action="proses/surat-input-proses.php" method="post" enctype="multipart/form-data">
	
	<table id="tabel-input">
	
		<tr>
			<td class="label-formulir">ID surat</td>
			<td class="isian-formulir"><input type="text" size="40" name="id_surat" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Nomor Surat</td>
			<td class="isian-formulir"><input type="text" size="40" name="no_surat" class="isian-formulir isian-formulir-border"></td>
		</tr>
		
		<tr>
			<td class="label-formulir">Tanggal Surat</td>
			<td class="isian-formulir"><input type="date" size="40" name="tgl" class="isian-formulir isian-formulir-border"></td>
		</tr>

		<tr>
			<td class="label-formulir">Perihal</td>
			<td class="isian-formulir"><input type="text" size="40" name="perihal" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Jenis Surat</td>
			<td class="isian-formulir"><select name="jenis" class="isian-formulir isian-formulir-border">
			<option>Surat Masuk</option>
			<option>Surat Keluar</option></select>
			</td>
		</tr>

		<tr>
			<td class="label-formulir">dokumen</td>
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