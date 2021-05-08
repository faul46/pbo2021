<?php 

namespace App;

class EsJeruk implements Minuman
{
	public function minum()
	{
		echo "minumlah";
	}

	public function buat()
	{
		echo "masukkan blender";
	}

	public static function dilihat()
	{
		echo "Cuma boleh dilihat. Tak boleh diminum. <br>";
	}
}

 ?>