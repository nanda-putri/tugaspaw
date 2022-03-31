<?php  
include('koneksi.php');

// if (isset($_GET['NIM'])) {
	$NIM=$_GET['NIM'];
	// $que='SELECT * FROM identitas WHERE NIM=$NIM';
	// $query=mysqli_query($connect,$sql);
	// $sql = mysqli_query($connect, $que);
	// $data = mysqli_fetch_array($sql);

	$sql1="DELETE FROM tbl_036 WHERE NIM='".$NIM."'";
	$query1=mysqli_query($connect,$sql1);

	if ($query1) {
		echo "<script> alert('data berhasil dihapus');window.location='hasil.php'</script>";
		// header('location:hasil.php');
	} else{
		echo "hapus data gagal";
	}
// }

?>