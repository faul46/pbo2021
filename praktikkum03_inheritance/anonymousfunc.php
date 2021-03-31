<?php 

/*CONTOH PENGGUNAAN ANONYMOUS FUNCTION*/
/*CONTOH PENGGUNAAN ANONYMOUS FUNCTION*/
/*CONTOH PENGGUNAAN ANONYMOUS FUNCTION*/
/*CONTOH PENGGUNAAN ANONYMOUS FUNCTION*/





/*function penjumlahan($a, $b)
{
	$c = $a + $b;
	return $c;
}

$hasil = penjumlahan(5, 7);

echo $hasil;
*/

 /*---------ini adalah pembatas---------*/

/*$jml = function($a, $b)
{
	$c = $a + $b;
	return $c;
};

$asal = 78;

echo $jml(5, 7);*/

 /*---------ini adalah pembatas---------*/

$jml = function($a, $b)
{
	$c = $a + $b;
	return $c;
};

function perkalian($x, $y = 12)
{
	$z = $x * $y;
	return $z;
}

echo perkalian(4, function()
{
	return 4 * 5;
});