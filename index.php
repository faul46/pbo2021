<?php
 
include('Mahasiswa.php');
 
$faul = new Mahasiswa();
$izzul = new Mahasiswa();
$pendi = new Mahasiswa();
 
$faul -> nim = "H1101191046";
$faul -> nama = "Faul Oliber";
$faul -> tanggal_lahir = "27 Juni 2001";
$faul -> jenis_kelamin = "Laki-Laki";

$izzul -> nim = "H1101191050";
$izzul -> nama = "Izzul Haq";
$izzul -> tanggal_lahir = "32 Januari 2004";
$izzul -> jenis_kelamin = "Laki-Laki";

$pendi -> nim = "H1101191074";
$pendi -> nama = "Pendi Rusadi";
$pendi -> tanggal_lahir = "01 Desember 2002";
$pendi -> jenis_kelamin = "Laki-Laki";
 
$faul -> tampilkanAngkatan();
$faul -> tampilkanUmur();

$izzul -> tampilkanAngkatan();
$izzul-> tampilkanUmur();

$pendi -> tampilkanAngkatan();
$pendi -> tampilkanUmur();