<?php
	$id_dinas=$_GET['id'];
	$q_tampil_dinas=mysqli_query($db,"SELECT * FROM tbperjalanandinas WHERE id_dinas='$id_dinas'");
	$r_tampil_dinas=mysqli_fetch_array($q_tampil_dinas);

				$dokumen = $r_tampil_dinas['dokumen'];
	
?>
<div id="label-page"><h3><center>Edit Data Dinas</h3></div>
<div id="content">
	<form action="proses/dinas-edit-proses.php" method="post" enctype="multipart/form-data">
	<table id="tabel-input">
		
		<tr>
			<td class="label-formulir">ID dinas</td>
			<td class="isian-formulir"><input type="text" size="40" name="id_dinas" value="<?php echo $r_tampil_dinas['id_dinas']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir">Nama Pejabat</td>
			<td class="isian-formulir"><input type="text" size="40" name="nama_pejabat" value="<?php echo $r_tampil_dinas['nama_pejabat']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Jabatan</td>
			<td class="isian-formulir"><select name="jabatan" value="<?php echo $r_tampil_dinas['jabatan']; ?>" class="isian-formulir isian-formulir-border">
			<option>Direksi</option>
			<option>Manager</option>
			<option>Asman</option>
			<option>Pelaksana</option>
			</select>
		<tr>
			<td class="label-formulir">No SPPD</td>
			<td class="isian-formulir"><input type="text" size="40" name="no_sppd" value="<?php echo $r_tampil_dinas['no_sppd']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Tujuan</td>
			<td class="isian-formulir"><input type="text" size="40" name="tujuan" value="<?php echo $r_tampil_dinas['tujuan']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Tanggal</td>
			<td class="isian-formulir"><input type="date" size="40" name="tgl" value="<?php echo $r_tampil_dinas['tgl']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>

		<tr>
			<td class="label-formulir">Biaya</td>
			<td class="isian-formulir"><input type="text" name="biaya" size="40" value="<?php echo $r_tampil_dinas['biaya']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>

			<tr>
			<td class="label-formulir">Dokumen</td>
			<td>
			<input type="file" name="dokumen" class="isian-formulir isian-formulir-border" >
			<input type="hidden" name="dokumen_awal" value="<?php echo $dokumen; ?>">
			</td></tr>	

		<tr>
			<td class="label-formulir">Admin</td>
			<td class="isian-formulir"><input type="text" name="nama_admin" value="<?php echo $r_tampil_dinas['nama_admin']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>

		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan"></td>
		</tr>
	</table>
	</form>
</div>