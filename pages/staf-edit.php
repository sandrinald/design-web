<?php
	$id_staf=$_GET['id'];
	$q_tampil_staf=mysqli_query($db,"SELECT * FROM tbstaf WHERE idstaf='$id_staf'");
	$r_tampil_staf=mysqli_fetch_array($q_tampil_staf);
	if(empty($r_tampil_staf['foto'])or($r_tampil_staf['foto']=='-'))
				$foto = "admin-no-photo.jpg";
			else
				$foto = $r_tampil_staf['foto'];
?>
<div id="label-page"><h3><center>Edit Data staf</h3></div>
<div id="content">
	<form action="proses/staf-edit-proses.php" method="post" enctype="multipart/form-data">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">FOTO</td>
			<td class="isian-formulir">
			<img src="images/<?php echo $foto; ?>" width=70px height=75px>
			<input type="file" name="foto" class="isian-formulir isian-formulir-border">
			<input type="hidden" name="foto_awal" value="<?php echo $r_tampil_staf['foto']; ?>">
			</td>
		</tr>
		<tr>
			<td class="label-formulir">ID staf</td>
			<td class="isian-formulir"><input type="text" name="id_staf" size="40" value="<?php echo $r_tampil_staf['idstaf']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir">Nama</td>
			<td class="isian-formulir"><input type="text" name="nama" size="40" value="<?php echo $r_tampil_staf['nama']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Jenis Kelamin</td>			
			<?php
			if($r_tampil_staf['jeniskelamin']=="Pria")
			{
				echo "<td class='isian-formulir'><input type='radio' name='jenis_kelamin' value='Pria' checked>Pria</label></td>
					</tr>
		<tr>
			<td class='label-formulir'></td>
			<td class='isian-formulir'><input type='radio' name='jenis_kelamin' value='Wanita'>Wanita</td>";
			}
			elseif($r_tampil_staf['jeniskelamin']=="Wanita")
			{
				echo "<td class='isian-formulir'><input type='radio' name='jenis_kelamin' value='Pria'>Pria</label></td>
					</tr>
		<tr>
			<td class='label-formulir'></td>
			<td class='isian-formulir'><input type='radio' name='jenis_kelamin' value='Wanita' checked>Wanita</td>";
			}
			?>
			
		<tr>
			<td class="label-formulir">Alamat</td>
			<td class="isian-formulir"><textarea rows="5" cols="50" name="alamat" class="isian-formulir isian-formulir-border"><?php echo $r_tampil_staf['alamat']; ?></textarea></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan"></td>
		</tr>
	</table>
	</form>
</div>