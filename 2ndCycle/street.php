<?php

/*

Mirko and Slavko live in a long street consisting of N houses (N is always an even number). Each house is labeled with a house number ranging from 1 to N. Even numbers are located on one side, and odd numbers are on the other side of the road (as shown on the picture below). Mirko, who lives in the house labeled A, wants to visit his friend Slavko who lives in the house labeled B. It takes one minute for Mirko to cross the road or move to the neighboring house on the same side of the road. Help Mirko and determine the time required to get from his house to Slavko’s house.
Input
The first line contains positive integers A and B (1 <= A, B <= 30), Mirko's and Slavko's house numbers.
Output
Print the time required to get from Mirko's to Slavko’s house in minutes 

Input 
3 4 

Output 
1 

Input 
8 20 

Output 
6

*/

$input ='8 20';
$input = explode(' ', $input);
$time = 0;

if ($input[0]%2 === 0 && $input[1]%2 === 1 || $input[1]%2 === 0 && $input[0]%2 === 1) {
		$time++;
		for ($i=$input[0]+1; $i < $input[1]; $i+=2) { 
			$time++;
		}
	}else{
		for ($i=$input[0]; $i < $input[1]; $i+=2) { 
			$time++;
		}
	}


print $time;


