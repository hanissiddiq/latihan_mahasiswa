<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Mahasiswa</title>
</head>
<body>
	<h2> Edit Data Mahasiswa</h2>

	<?php echo form_open('c_data_mahasiswa/edit') ;?>
	 <input type="hidden" value="<?php echo $record['id_mhs']?>" name="id">
<table>
	<tr>
		<td>Nim</td> 
		<td><input type="text" name="nim" value="<?php echo $record['nim']?>" placeholder="Masukkan NIM"></td>
	</tr>
	<tr>
		<td>Nama</td> 
		<td><input type="text" name="nama" value="<?php echo $record['nama']?>" placeholder="Masukkan Nama"></td>
	</tr>
	<tr>
		<td>Jurusan</td> 
		<td><input type="text" name="jurusan" value="<?php echo $record['jurusan']?>" placeholder="Masukkan Jurusan"></td>
	</tr>
	<tr>
		<td>Unit</td> 
		<td><input type="text" name="unit" value="<?php echo $record['unit']?>" placeholder="Masukkan Unit"></td>
	</tr>
	<tr>
		<td>Alamat</td> 
		<td><input type="text" name="alamat" value="<?php echo $record['alamat']?>" placeholder="Masukkan Alamat"></td>
	</tr>
	<tr>
		<td>No HP</td> 
		<td><input type="text" name="no_hape" value="<?php echo $record['no_hp']?>" placeholder="Masukkan No HP"></td>
	</tr>
	<tr>
		<td>
			<Button type="submit" name="submit">Simpan</Button>
		</td>
		<td>
			<button> <?php echo anchor('c_data_mahasiswa','Batal')?></button>
		</td>
	</tr>
	
		

</table>
</form>


</body>
</html>
