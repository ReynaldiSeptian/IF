<?php
$a=$_POST['re'];
$b=$_POST['rey'];
$c=$_POST['reyn'];

if($a<$b && $b<$c)
	{
		echo "Urutannya Adalah: $a,$b,$c<br>";
		echo "Angka Yang Tebesar adalah:$c";
	}
		elseif($a<$c && $c<$b)
		{
			echo "Urutannya Adalah:$a,$c,$b<br>";
			echo "Angka Yang Terbesar adalah:$b";
		}
			elseif($b<$a && $a<$c)
			{
				echo "Urutannya Adalah:$b,$a,$c<br>";
				echo "Angka Yang Terbesar adalah:$c";
			}
				elseif($b<$c && $c<$a)
				{
					echo "Urutannya Adalah:$b,$c,$a<br>";
					echo "Angka Yang Terbesar adalah:$a";
				}
					elseif($c<$a && $a<$b)
					{
						echo "Urutannya Adalah:$c,$a,$b<br>";
						echo "Angka Yang Terbesar adalah:$b";
					}
						else
						{
							echo "Urutannya Adalah:$c,$b,$a<br>";
							echo "Angka Yang Terbesar adalah:$a";
						}
?>