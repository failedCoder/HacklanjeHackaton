<?php
/*
Mirko wrote a natural number which consists of N digits on paper. Slavko came to Mirko’s house and replaced some digits with question marks on the paper. Slavko didn’t change more than 5 digits. Mirko forgot the initial number he wrote. 
Slavko gave him a task to count the number of natural numbers which Mirko could have written in the beginning, such that they are divisible by K.
Input
In the first line you are given the numbers N and K separated by space. (1 <= N <= 100, 1 <= K <= 100) 
In the second line you are given N chars which represent Mirko’s number after Slavko replaced some digits with question marks. Chars can only be digits [0-9] or question marks '?'.
Output
In the first line of output write the solution to Mirko's task.
Scoring
In 20% of tests (1 <= N <= 6 and number of question marks = 1) 
In the next 10% of tests (1 <= N <= 6 and number of question marks <= 3)
In the next 20% of tests (1 <= N <= 9 and number of question marks <= 3) 
In the next 10% of tests (1 <= N <= 9 and number of question marks <= 5) 
In the next 20% of tests (1 <= N <= 18 and number of question marks <= 5)
In the last 20% of tests (1 <= N <= 100 and number of question marks <= 5)


Input 
2 5
2? 

Output 
2 

Input 
2 3
?3 

Output 3 
Explanation: Mirko's initial numbers could be 33, 63, 93
*/
$line1 = '2 3';
$numbers = '?3';

$line1 = explode(' ', $line1);
$n = $line1[0];
$k = $line1[1];

$count = 0;

for ($i=0; $i < $n; $i++) { 
	if ($numbers[$i] == '?') {
		for ($j=0; $j < 9; $j++) { 
			if($j % $k == 0){
				$count++;
			}
		}
	}
}
echo $count;




