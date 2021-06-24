<?php 

namespace App\Models;

class Mahasiswa extends Pengguna
{
    private $nim;
    private $nama;
    private $ipk;
    private $alamat;

    function __construct($nim, $nama, $ipk, $alamat)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->ipk = $ipk;
        $this->alamat = $alamat;
    }

    public function setNim($nim)
    {
        $this->nim = $nim;
    }

    public function getNip()
    {
        return $this->nip;
    }

    public function inputMakul()
    {
        //
    }

    public function updateProfil()
    {
        //
    }




}

 ?>