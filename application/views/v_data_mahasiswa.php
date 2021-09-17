<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>
	<h2> Data Mahasiswa</h2>

	<?php echo anchor('c_data_mahasiswa/input','Tambah Data') ;?>
	 
<div>
	<table border="1">
		<tr>
			<th>No</th>
			<th>NIM</th>
			<th>NAMA</th>
			<th>JURUSAN</th>
			<th>UNIT</th>
			<th>ALAMAT</th>
			<th>No HP</th>
			<th colspan="2">Aksi</th>
		</tr>

		
		<?php 
		$no=1;
		foreach($record->result() as $r)
		{
		 echo "<tr>

		 <td>$no</td>
		 <td>$r->nim</td>
		 <td>$r->nama</td>
		 <td>$r->jurusan</td>
		 <td>$r->unit</td>
		 <td>$r->alamat</td>
		 <td>$r->no_hp</td>
		 <td>".anchor('c_data_mahasiswa/edit/'.$r->id_mhs,'Edit')."</td>
		 <td>".anchor('c_data_mahasiswa/hapus/'.$r->id_mhs,'Hapus')."</td>
		 
		 </tr>";
	 	$no++;
		}?>
	
	</table>
	
	<br>
	<button> <?php echo anchor('c_dashboard','Back To Dashboard')?></button>
		
</div>

</body>
</html>
