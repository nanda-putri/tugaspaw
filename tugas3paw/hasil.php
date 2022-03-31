<?php
include('koneksi.php')  
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Table Mahasiswa</title>
</head>
<body style="background-color: aliceblue">
	<div class="container">
		<h2 align="center">DATA MAHASISWA TEKNIK INFORMATIKA</h2>
		<table class="table table-dark table-striped" border="1">
			<tr>
				<th>NIM</th>
				<th>Nama</th>
				<th>Asal</th>
				<th>No. Telepon</th>
				<th colspan="2">Action</th>
			</tr>
					<?php
					$que = "SELECT *FROM tbl_036";
					$sql = mysqli_query($connect, $que);

					while ($data = mysqli_fetch_array($sql)) {
						echo "<tr>";
						echo "<td>".$data['NIM']."</td>";
						echo "<td>".$data['Nama']."</td>";
						echo "<td>".$data['Asal']."</td>";
						echo "<td>".$data['Telepon']."</td>";
						echo "<td>"."<a href='text.php?NIM=".$data['NIM']."'>Edit</a>"."</td>";
						echo "<td>"."<a href='hapus.php?NIM=".$data['NIM']."'>Hapus</a>"."</td>";
						echo "</tr>";
					}
				?>
		</table>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>