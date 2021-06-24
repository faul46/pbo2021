<?php 

namespace App\Models;
use\App\Models\Pegawai;

class Dosen extends Pengguna
{
    private $nip;
    private $nama;
    private $no_telp;

    function __construct($nip, $nama, $no_telp)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_telp = $no_telp;
    }

    public function setNip($nip)
    {
        $this->nip = $nip;
    }

    public function getNip()
    {
        return $this->nip;
    }

    public function validasiMahasiswa()
    {
        //
    }

}

 ?>