<div id="label-page"><h3><center>Input Data Dinas</h3></div>
<div id="content">
	<form action="proses/dinas-input-proses.php" method="post" enctype="multipart/form-data">
	
	<table id="tabel-input">
	
		<tr>
			<td class="label-formulir">ID Dinas</td>
			<td class="isian-formulir"><input type="text" size="40" name="id_dinas" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Nama Pejabat</td>
			<td class="isian-formulir"><input type="text" size="40" name="nama_pejabat" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Jabatan</td>
			<td class="isian-formulir"><select name="jabatan" class="isian-formulir isian-formulir-border">
			<option>Direksi</option>
			<option>Manager</option>
			<option>Asman</option>
			<option>Pelaksana</option>
			</select>
			</td>
		</tr>
		<tr>
			<td class="label-formulir">No SPPD</td>
			<td class="isian-formulir"><input type="text" size="40" name="no_sppd" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Tujuan</td>
			<td class="isian-formulir"><input type="text" size="40" name="tujuan" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Tanggal Dinas</td>
			<td class="isian-formulir"><input type="date" size="40" name="tgl" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Biaya</td>
			<td class="isian-formulir"><input type="text" size="40" name="biaya" class="isian-formulir isian-formulir-border"></td>
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