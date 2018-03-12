<?php
/*
Return an array of 3 numbers less than 100 whose sum equals 194 and product equals 229824. Sort the numbers ascending.
Output
Print out an array of 3 numbers, like this: 
[a, b, c]
*/

for ($i=0; $i < 100; $i++) { 
	$a = $i;
	for ($j=0; $j < 100; $j++) { 
		$b = $j;
		for ($z=0; $z < 100; $z++) { 
			$c = $z;
			$sum = $a+$b+$c;
			$product= $a*$b*$c;
			if ($sum == 194 && $product == 229824) {
				$solution = array($a,$b,$c);
			}
		}
	}
}
print '['.$solution[0].','.$solution[1].','.$solution[2].']';