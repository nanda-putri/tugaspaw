<?php  
include 'konek.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hasil</title>
</head>
<body>
	<form>
		<table border="1" width="100%">
			<tr>
				<th>Id</th>
				<th>Nama</th>
				<th>Email</th>
				<th colspan="2">Action</th>
			</tr>
			<tr>
				<?php  
					$que="SELECT * FROM tbl_036";
					$res=mysqli_query($con,$que);

					while ($data=mysqli_fetch_array($res)) {
						echo "<tr>";
						echo "<td>".$data['id_036']."</td>";
						echo "<td>".$data['nama_036']."</td>";
						echo "<td>".$data['email_036']."</td>";
						echo "<td>"."<a href='formedit.php?id_036=".$data['id_036']."'>Edit</a>"."</td>";
						echo "<td>"."<a href='hapus.php?id_036=".$data['id_036']."'>Hapus</a>"."</td>";
						echo "</tr>";
					}
				?>
			</tr>
		</table>
	</form>
	<button><a href="form.php">Add Data</a></button>
</body>
</html>