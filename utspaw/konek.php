<?php  
$host='localhost';
$user='root';
$pass='';
$db='db_nanda';

$con=mysqli_connect($host,$user,$pass,$db);
if (!$con) {
	echo "koneksi gagal";
}
?>