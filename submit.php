<?php
require_once("db.php");
$nama       = $_POST['nama'];
$nim        = $_POST['nim'];
$jk  = $_POST['jk'];
$prodi  = $_POST['prodi'];
$fakultas = $_POST['fakultas'];
$asal = $_POST['asal'];
$motohidup  = $_POST['motohidup'];
$sql = "INSERT INTO pendataan(nama, nim, jk, prodi, fakultas, asal, motohidup) 
        VALUES ('$nama','$nim','$jk', '$prodi', '$fakultas', '$asal', '$motohidup')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);

    mysql_close($conn);
    echo"Klik untuk melihat data <a href='lihatdata.php'> link ini</a> untuk melanjutkan";
}
?> 