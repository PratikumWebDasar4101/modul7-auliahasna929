<?php
echo("<h1> Hasil Pencarian</h3>");
mysql_connec("localhost","","");
mysqli_select_db("TEST_DB");

$perintah ="SELECT data WHERE nim LIKE '%cari%";
$hasil = mysql_query($perintah);
$jumlah = mysql_num_rows($hasil);
if($jumlah>0){
	echo"Data yang ditentukan : $jumlah<br><br>");
	while ($data=mysql_fetch_row($hasil)) {
		echo("Nama : $data[1]<br><br>");
		echo("Alamat :$data[2]<br><br>");
	}
}else{
	echo("data yang anda cari tidak ada";)
}
?>
