<?=
/*
Mirko has N bottles of water. Every bottle has a certain number of deciliters. Mirko knows that in next month he can drink X deciliters of water maximum. 
Find the largest number of empty bottles after one month, which Mirko can drink.
Input
In the first line you are given natural numbers N and X separated by space (1 <= N <= 100, 1 <= X <= 10000) 
In the second line you are given N natural numbers separated by spaces which represent amount of deciliters in each of N bottles. Deciliters are between 1 and 1000 (inclusive)
Output
In the first and only line of output print largest number of empty bottles. 

Input 
3 8
3 1 4 

Output 
3 

Input 
5 14
6 8 7 10 9 

Output 2 
Explanation: Mirko can empty bottles with indices (starting from 1) (1, 3) or (1, 2) - largest number of bottle is 2. Mirko can't empty more than 2 bottles.
*/

$line1 = '5 14';
$line2 = '6 8 7 10 9';

$line1 = explode(' ', $line1);
$dls = explode(' ', $line2);
sort($dls);

$n = $line1[0];
$x = $line1[1];

$counter = 0;
if ($x == array_sum($dls)) {
	echo $n;
}else{
	foreach ($dls as $dl) {
		if ($x>0 && $x-$dl>0) {
			$x -= $dl;
			$counter++;
		}
	}
	
	echo $counter;
}

