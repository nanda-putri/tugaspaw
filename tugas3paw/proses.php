<?php
include('koneksi.php');
if (isset($_POST['submit'])){
	$NIM = $_POST['NIM'];
	$Nama = $_POST['Nama'];
	$Asal = $_POST['Asal'];
	$Telepon = $_POST['Telepon'];

	$query="INSERT INTO tbl_036(NIM,Nama,Asal,Telepon) VALUES ('$NIM','$Nama','$Asal','$Telepon')";
	$result=mysqli_query($connect,$query);
	if ($result) {
		echo "<script> alert('data berhasil ditambahkan');window.location='hasil.php'</script>";
		// header('location:hasil.php');
	} else{
		echo "gagal menambah data";
	}
}




?>