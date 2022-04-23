<?php  
include 'konek.php';

if (isset($_POST['submit'])) {
	$id_036=$_POST['id_036'];
	$nama_036=$_POST['nama_036'];
	$email_036=$_POST['email_036'];

	$que="INSERT INTO tbl_036 (id_036,nama_036,email_036) VALUES ('$id_036','$nama_036','$email_036')";
	$result=mysqli_query($con,$que);
	if ($result) {
		echo "<script> alert ('data berhasil ditambahkan');window.location='hasil.php'</script>";
	} else{
		echo "data gagal ditambahkan";
	}
}
?>