<?php
$tanggal = ["5", "6", "7"];
// penulisan array dengan cara lama
$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat");
// var_dump($hari);
// echo $hari[4];
// penulisan array dengan cara baru
$bulan = ["Juli", "Agustus", "September", "Oktober", "November", "Desember"];
// echo "<br>";
// var_dump($bulan);
// echo "<br>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
    <h3>
        Hari <?= $hari[3];  ?> Tanggal <?= $tanggal[2];  ?> bulan <?= $bulan[5];  ?>
    </h3>
</body>

</html>