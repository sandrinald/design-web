<?php
	$iduser=$_GET['id'];
	$q_tampil_user=mysqli_query($db,"SELECT * FROM tbuser WHERE iduser='$iduser'");
	$r_tampil_user=mysqli_fetch_array($q_tampil_user);

?>
<div id="label-page"><h3><center>Edit Data user</h3></div>
<div id="content">
	<form action="proses/user-edit-proses.php" method="post" enctype="multipart/form-data">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID User</td>
			<td class="isian-formulir"><input type="text" name="iduser" size="40" value="<?php echo $r_tampil_user['iduser']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir">Nama</td>
			<td class="isian-formulir"><input type="text" name="nama" size="40" value="<?php echo $r_tampil_user['nama']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>

		<tr>
			<td class="label-formulir">Jabatan</td>
			<td class="isian-formulir"><input type="text" name="jabatan" size="40" value="<?php echo $r_tampil_user['jabatan']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>

		<tr>
			<td class="label-formulir">Username</td>
			<td class="isian-formulir"><input type="text" name="username" size="40" value="<?php echo $r_tampil_user['username']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>

		<tr>
			<td class="label-formulir">Password</td>
			<td class="isian-formulir"><input type="text" name="password" size="40" value="<?php echo $r_tampil_user['password']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
				<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan"></td>
		</tr>
	</table>
	</form>
</div>