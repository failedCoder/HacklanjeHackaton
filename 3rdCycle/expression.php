<?php
/*
There’s an expression written on a piece of paper in the following way: 
A op1 B op2 C op3 D 
Each operator (opi) can be either a + or a -. Given the values of A, B, C and D, determine the operators op1, op2 and op3 such that the given expression gives the largest possible result. You may assume that the answer will be unique.
Input
The first line contains four integers A, B, C, D (-100 <= A, B, C, D <= 100, A, B, C, D != 0). 
Output
The three operators (+ or -). 
Examples

Input
4 8 -1 2

Output
+-+

Input
10 10 10 10

Output
+++
*/
$input = '10 10 10 10';

$numbers = explode(' ', $input);

$operators = '';

for ($i=1; $i < 4; $i++) { 
	if ($numbers[$i]<0) {
		$operators .= '-';
	}else{
		$operators .= '+';
	}
}
echo $operators;