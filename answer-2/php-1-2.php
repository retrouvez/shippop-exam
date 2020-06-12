<?php
function print_pattern($num)
{
	for ($a = 0; $a < $num; $a++)
		{
		for($b = $num; $b > $a+1; $b-- )
			{
			echo "&nbsp;";
			}
		for($c = 0; $c <= $a; $c++ )
		{
			echo "o ";
		}
		echo "<br>";
	}
}
$num = 5;
print_pattern($num);
?>