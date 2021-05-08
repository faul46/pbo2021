<?php 

namespace App;

class Teh implements Minuman
{
	public function buat()
	{
		echo "siapkan gelas dan sendok. panaskan air dalam ceret.";
		echo "masukkan gula dan teh kedalam gelas, serta seduh dengan air panas.";
		echo "aduk rata. <br>";
	}

	public function minum()
	{
		echo "di minum dengan elegan. <br>";
	}

	public function tambahSusu()
	{
		echo "tambahkan SUSU ke dalam Teh. Jadilah teh berSUSU <br>";
	}
}

 ?>