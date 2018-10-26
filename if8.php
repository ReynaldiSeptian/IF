<?php
$bulan=$_POST['re'];
$tahun=$_POST['rey'];

switch($bulan){
	case 1:'Januari';
	case 3:'Maret';
	case 5:'Mei';
	case 7:'Juli';
	case 8:'Agustus';
	case 10:'Oktober';
	case 12:'Desember';
		$hari=31;
		break;
	case 4:'april';
	case 6:'Juni';
	case 9:'September';
	case 11:'November';
		$hari=30;
	case 2:'Februari';		
	break;
	if(($tahun%4) == 0)
	{
		$hari=29;
	}
		else{
				$hari=28;
			}
		}
		
		echo("<h2>Jumlah hari pada bulan $bulan tahun $tahun = $hari hari<h2>");
?>
		