<?php

require_once 'initialize.php';

	use application\backend\Dosen;
    use application\backend\Mahasiswa;
    use application\backend\MyDate;

$dian = new Dosen('198411132015041001', 'Dian Prawira', '0800000', '50000000', '13118405', 'Tenaga Pengajar');

$dian->mengajar();
$dian->meneliti();

$lita = new Mahasiswa('H1101191044', 'Lita Novitasari', 01-01-1996, 'P');
$lita->tampilkanAngkatan();

$tanggal = new MyDate();