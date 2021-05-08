<?php 

namespace App;

class Kopi implements Minuman
{
	public function buat()
	{
		echo "masak air panas hingga 100 derajat celcius. Masukkan kopi ke dalam gelas dan tuangkan air panas
		aduk sebanyak 60 kali putaran. Diamkan. ";
		echo "tambahkan gula aren. <br>";
	}

	public function minum()
	{
		echo "di seruput sedikit demi sedikit. <br>";
	}

	public function tambahSusu()
	{
		echo "tambahkan Susu ke dalam kopi <br>";
	}
}

 ?>