<?php
$mahasiswa = ["Eka", "10510016", "Sistem Informasi", "eka@stimata.ac.id"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multidimensi</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li><?= $mhs;  ?></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>