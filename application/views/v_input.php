<!DOCTYPE html>
<html>
<head>
	<title>Input Data Mahasiswa</title>
</head>
<body>
	<h2> Input Data Mahasiswa</h2>

	<?php echo form_open('c_data_mahasiswa/input') ;?>
	 
<table>
	<tr>
		<td>Nim</td> 
		<td><input type="text" name="nim" placeholder="Masukkan NIM"></td>
	</tr>
	<tr>
		<td>Nama</td> 
		<td><input type="text" name="nama" placeholder="Masukkan Nama"></td>
	</tr>
	<tr>
		<td>Jurusan</td> 
		<td><input type="text" name="jurusan" placeholder="Masukkan Jurusan"></td>
	</tr>
	<tr>
		<td>Unit</td> 
		<td><input type="text" name="unit" placeholder="Masukkan Unit"></td>
	</tr>
	<tr>
		<td>Alamat</td> 
		<td><input type="text" name="alamat" placeholder="Masukkan Alamat"></td>
	</tr>
	<tr>
		<td>No HP</td> 
		<td><input type="text" name="no_hape" placeholder="Masukkan No HP"></td>
	</tr>
	<tr>
		<td>
			<Button type="submit" name="submit">Simpan</Button>
		</td>
	</tr>
	
</table>
</form>
</body>
</html>
