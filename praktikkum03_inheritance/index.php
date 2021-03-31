<?php

    require_once("initialize.php");

    $faul = new Mahasiswa("H1101191046", "Faul Oliber Mario Siagian", "2001-06-27", "Pria");
    $putri = new MahasiswaBaru("H1101201099", "Putri Cinderela", "2004-05-26", "Perempuan", 9118334);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
</head>
<body>
    <?php
    
    $faul->tampilkanAngkatan();
    echo "<br>";
    $putri->tampilkanAngkatan();
    echo "<br>";
    echo "<br>";
    $faul->tampilkanUmur();
    echo "<br>";
    $putri->tampilkanUmur();
    echo "<br>";
    $putri->bayarGedung();


    ?>
</body>
</html>