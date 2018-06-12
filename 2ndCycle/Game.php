<?=
/*
Mirko and Slavko are playing a game. There is a sequence of N natural numbers in front of them. Mirko and Slavko are taking turns. Mirko plays first. In each turn a player selects one of the numbers and divides it by one of its prime factors if it is possible. The game is over when all of the numbers are equal to 1. The first player who can't make a move loses. Determine the winner of the game and the total number of turns required to finish it.
Input
The first line contains a positive integer N (1 ≤ N ≤ 100), the length of the array of numbers. The second line contains N positive integers separated by space Ai (1 ≤ Ai ≤ 1000000000), the initial elements of the array.
Output
In the first line print the name of the winner, either Mirko or Slavko. In the second line print the required number of turns to finish the game.
Scoring
Test cases worth 20% of total points: N = 1, Ai ≤ 100.
Test cases worth additional 20% of total points: N = 1, Ai ≤ 1000000000. Test cases worth additional 30% of total points: N ≤ 100, Ai ≤ 100.
Example

Input: 
1 
15 

Output: 
Slavko 
2 

Explanation 
In the first step Mirko can divide the number 15 by either 3 or 5. In both cases the resulting quotient will be a prime number, so Slavko can divide it by itself and win. 

Input 
5 
5 3 8 9 4 

Output 
Mirko 
9
*/

$n = 1;
$numbers = '15';
$numbers = explode(' ', $numbers);

$counter = 0;
$moves = 0;
foreach ($numbers as $number) {
	for ($i=2; $i < $number; $i++) { 
		if($number % $i == 0){
			$counter++;
		}
	}
	if ($counter == 0) {
		$moves++;
	}else{
		for ($j=2; $number > 1; $j++) { 
			if ($number % $j == 0) {
				$x = 0;
				while ($number % $j == 0) {
					$number /= $j;
					$x++;
					$moves++;
				}
			}
		}
	}
	
}
if ($moves % 2 == 0) {
	$player = 'Slavko';
}else{
	$player = 'Mirko';
}
echo $player."\n";
echo $moves;
