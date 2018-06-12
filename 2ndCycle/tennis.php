<?php

/*
Mirko and Slavko are playing their version of tennis. One set in a tennis match consists of several games. You are given results of N sets played between Mirko and Slavko, formatted as X:Y, where X represents the number of games won by Mirko and Y represents the number of games won by Slavko in one set. The player with more games won wins the set. Determine the number of sets won by Mirko and Slavko!
Input
The first line contains a positive integer N (1 ≤ N ≤ 100) - the number of sets played. In the next N input lines you are given the set results, formatted as X:Y. X will always be different than Y. (1 <= X, Y <= 100)
Output
In the first line of output write the solution, formatted as A:B where A represents the number of sets won by Mirko and B represents the number of sets won by Slavko. Note that A + B must be equal to N.
Example

Input: 
2 
6:4 
4:6 

Output: 
1:1 

Input 
3 
12:8 
15:11 
7:1 

Output 
3:0
*/
$input = '3 12:8 15:11 7:1';
$input = explode(" ", $input);

$gameCount = $input[0];
$A = 0;
$B = 0;

for ($i=1; $i <= $gameCount; $i++) { 
	$result = explode(':', $input[$i]);
	if ($result[0] > $result[1]) {
		$A++;
	}else{
		$B++;
	}
}
print $A.':'.$B;