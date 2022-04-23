<?php  
include 'konek.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<form method="POST" action="proses.php">
		<table>
			<tr>
				<th>Id</th>
				<td>
					<input type="text" name="id_036" placeholder="Masukkan Id">
				</td>
			</tr>
			<tr>
				<th>Nama</th>
				<td>
					<input type="text" name="nama_036" placeholder="Masukkan Nama">	
				</td>
			</tr>
			<tr>
				<th>Email</th>
				<td>
					<input type="text" name="email_036" placeholder="Masukkan Email">
				</td>
			</tr>
		</table>
		<button type="submit" name="submit">Submit</button>
	</form>
</body>
</html>