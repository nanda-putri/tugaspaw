<?php 
include('koneksi.php');
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 	<title>Form Edit</title>
 </head>
 <body style="background-color: powderblue">
 	<h2 align="center">Form Edit Data Mahasiswa</h2>
 	<?php
	 	$NIM = $_GET['NIM'];
	 	$que = "SELECT * FROM tbl_036 WHERE NIM='$NIM'";
		$sql = mysqli_query($connect,$que);
		while ($data = mysqli_fetch_array($sql)) {		
			?>
	<div class="container mt-3 mb-3">
	 	<form method="POST" action="edit.php">
	 		<table border="0" width="100%">
				<tr>
					<!-- <th>NIM</th> -->
					<td>
						<input type="hidden" class="form-control" name="NIM" value="<?php echo $data['NIM'];?>">
					</td>
				</tr>
				<tr>
					<th>NAMA</th>
					<td>
						<input type="text" class="form-control" name="Nama" placeholder="Masukkan Nama Anda" value="<?php echo $data['Nama'];?>">
					</td>
				</tr>
				<tr>
					<th>ASAL</th>
					<td>
						<input type="text" class="form-control" name="Asal" placeholder="Masukkan Alamat Anda" value="<?php echo $data['Asal'];?>">
					</td>
				</tr>
				<tr>
					<th>No. Telepon</th>
					<td>
						<input type="text" class="form-control" name="Telepon" placeholder="Masukkan Nomor Telepon" value="<?php echo $data['Telepon'];?>">
					</td>
				</tr>
				<tr>
					<td>
						<button class="btn btn-outline-success" type="submit" name="submit" value="submit"> Submit
						</button>
					</td>
					<td>
						<button class="btn btn-outline-warning" type="riset" name="riset" value="riset"> Riset
						</button>
					</td>
				</tr>
			</table>
	 	</form>
 	</div>
 	<?php
 	}
 	?>
 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 </body>
 </html>