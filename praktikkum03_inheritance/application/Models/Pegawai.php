<?php 

namespace App\Models;

interface Pegawai
{
    public function setNip();
    public function presensiMasuk();
    public function getNip();
    public function setNama();
    public function getNama();
}

 ?>