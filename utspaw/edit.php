<?php 
include 'konek.php';

if (isset($_POST['submit'])) {
	$id_036=$_POST['id_036'];
	$nama_036=$_POST['nama_036'];
	$email_036=$_POST['email_036'];

	$que="UPDATE tbl_036 set id_036='$id_036',nama_036='$nama_036',email_036='$email_036'WHERE id_036='$id_036'";
	$res=mysqli_query($con,$que);
	if ($res) {
		echo "<script> alert ('data berhasil di ubah');window.location='hasil.php'</script>";
	} else{
		echo "data gagal di ubah";
	}
}
 ?>

