<?php  
include('koneksi.php');
if (isset($_POST['submit'])){
	$NIM = $_POST['NIM'];
	$Nama = $_POST['Nama'];
	$Asal = $_POST['Asal'];
	$Telepon = $_POST['Telepon'];

	$query="UPDATE tbl_036 set Nama='$Nama', Asal='$Asal', Telepon='$Telepon' WHERE NIM='$NIM'";
	$result=mysqli_query($connect,$query);
	if ($result) {
		header('location:hasil.php');
	} else{
		echo "gagal mengedit data";
	}
}

?>