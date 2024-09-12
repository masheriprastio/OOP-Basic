<?php
require_once("TampilSiswa.php");
$siswa = new TampilSiswa();
$tampil= $siswa->showData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($tampilData as $tampil){?>
        <?php echo $tampil['ID'];?>
        <?php echo $tampil['nama'];?>
        <?php echo $tampil['kelas'];?>
    <?php }?>
</body>
</html>