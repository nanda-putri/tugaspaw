<?php  
include 'konek.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
	<?php
	$id_036=$_GET['id_036'];
	$sql="SELECT * FROM tbl_036 WHERE id_036='$id_036'";
	$que=mysqli_query($con,$sql);
	while ($data=mysqli_fetch_array($que)) {
	  ?>
	<form method="POST" action="edit.php">
		<table>
			<tr>
				<!-- <th>Id</th> -->
				<td>
					<input type="hidden" name="id_036" value="<?php echo $data['id_036']; ?>">
				</td>
			</tr>
			<tr>
				<th>Nama</th>
				<td>
					<input type="text" name="nama_036" value="<?php echo $data['nama_036']; ?>"> 
				</td>
			</tr>
			<tr>
				<th>Email</th>
				<td>
					<input type="text" name="email_036" value="<?php echo $data['email_036']; ?>"> 
				</td>
			</tr>
		<?php } ?>
		</table>
		<button type="submit" name="submit">Submit</button>
	</form>
</body>
</html>