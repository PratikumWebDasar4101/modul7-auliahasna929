<?php
require_once("db.php");
?>
<!DOCTYPE html>
<head>
    <body>
<table>
<td>
    <a href="search.php"> Cari Data </a>
</td>
<tr>
    <th>Nama</th>
    <th>Nim</th>
    <th>Aksi</th>
</tr>
<?php
$sql = "SELECT * FROM pendataan";
$result = mysqli_query($conn,$sql);
$row = mysqli_num_rows($result);
if(mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?php echo $row['nama']?></td>
            <td><?php echo $row['nim']?></td>
            <td> <a href="delete.php?nim=<?php echo $row['nim']?>">delete</a>

            </tr>
            <?php
}
}else{
    echo "0 Result";
}
mysqli_close($conn);
?>
</body>
</table>
</html>
<h3><a href="form.php"> isi input data mahasiswa</a></h3>