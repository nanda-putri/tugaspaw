<?php  
include ('koneksi.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Form Input Data</title>

</head>
<body style="background-color: powderblue">
	<div class="container mt-3 mb-3">
		<form method="POST" action="proses.php">
			<center><h2>DATA MAHASISWA</h2>
			<table border="0" width="100%">
				<tr>
					<th>NIM</th>
					<td>
						<input type="text" class="form-control" name="NIM" placeholder="Masukkan NIM Anda">
					</td>
				</tr>
				<tr>
					<th>NAMA</th>
					<td>
						<input type="text" class="form-control" name="Nama" placeholder="Masukkan Nama Anda">
					</td>
				</tr>
				<tr>
					<th>ASAL</th>
					<td>
						<input type="text" class="form-control" name="Asal" placeholder="Masukkan Alamat Anda">
					</td>
				</tr>
				<tr>
					<th>No. Telepon</th>
					<td>
						<input type="number" class="form-control" name="Telepon" placeholder="Masukkan Nomor Telepon">
					</td>
				</tr>
					<tr>
						<td>
							<button type="submit" name="submit" value="submit" class="btn btn-outline-success"> Submit
							</button>
						</td>
						<td>
							<button type="riset" class="btn btn-outline-warning" name="riset" value="riset"> Riset
							</button>
						</td>
					</tr>
			</table>
			</center>
		</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

