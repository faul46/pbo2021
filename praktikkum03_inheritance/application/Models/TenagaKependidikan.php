<?php 

namespace App\Models;
use\App\Models\Pegawai;


class TenagaKependidikan extends Pengguna
{
    private $nip;
    private $nama;
    private $alamat;

    function __construct($nim, $nama, $ipk, $alamat)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->alamat = $alamat;
    }

    public function hitungTunjanganKinerja()
    {
        //
    }
}


 ?>