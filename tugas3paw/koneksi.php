<?php
$host='localhost';
$user='root';
$pass='';
$db='nanda';

$connect=mysqli_connect($host,$user,$pass,$db);
if (!$connect) {
	echo "koneksi gagal";
}
?>