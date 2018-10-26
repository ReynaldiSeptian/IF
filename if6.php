<?php
$a=$_POST['jk1'];
$b=$_POST['jk2'];
$c=$_POST['jk3'];
$d=$_POST['jk4'];
$e=$_POST['text1'];
$f=$_POST['text2'];
$g=$_POST['text3'];
$h=$_POST['text4'];


if($a=='pria')
	{	
		echo "<font color=blue>$e</font><br>";
	}
else
	{
		echo "<font color=red>$e</font><br>";	
	}
	if($b=='pria')
		{	
			echo "<font color=blue>$f</font><br>";
		}
	else
		{
			echo "<font color=red>$f</font><br>";	
		}
		if($c=='pria')
			{	
				echo "<font color=blue>$g</font><br>";
			}
		else
			{
				echo "<font color=red>$g</font><br>";	
			}
			if($d=='pria')
				{	
					echo "<font color=blue>$h</font><br>";
				}
			else
				{
					echo "<font color=red>$h</font><br>";	
				}			
			?>