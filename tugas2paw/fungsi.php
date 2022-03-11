<?php  
function penjumlahan($a1,$a2) //membuat fungsi penjumlahan dengan parameter a1 dan a2
{
	$hasil=$a1+$a2; //menjumlahkan dua parameter yang disimpan dalam variabel hasi
	return $hasil; //mengembalikan hasil operasi penjumlahan
}
echo "hasil dari 8 + 4 =".penjumlahan(8,4)."<br>"; //menampilkan hasil penjumlahan dengan memanggil fungsi penjumlahan yang diikuti dengan parameter
echo "hasil dari 4 + 10 =".penjumlahan(4,10)."<br>"; //menampilkan hasil penjumlahan dengan memanggil fungsi penjumlahan yang diikuti dengan parameter
echo "hasil dari 9 + 6 =".penjumlahan(9,6)."<br>"; //menampilkan hasil penjumlahan dengan memanggil fungsi penjumlahan yang diikuti dengan parameter

?>