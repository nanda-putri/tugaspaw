<?php  
include 'konek.php';

$id_036=$_GET['id_036'];

$sql="DELETE FROM tbl_036 WHERE id_036='".$id_036."'";
$que=mysqli_query($con,$sql);
if ($que) {
	echo "<script> alert ('data berhasil di hapus');window.location='hasil.php'</script>";
}else{
	echo "data gagal di hapus";
}
?>