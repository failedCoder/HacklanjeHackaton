<?php

/*
Mirko is a teacher in a high school in Zagreb. In his class there are N students. Mirko knows that the sum of their heights is X (in cm). 
Today, Mirko is measuring the students' height again, but one student is missing. You are given a list of N-1 students' heights. Find the height of the missing student, assuming that none of the students' heights has changed.
Input
In the first line you are given natural numbers N and X separated with space (1 <= N <= 40), (100 <= X <= 10 000)
In the second line you are given N - 1 natural numbers separated by space, the heights of N-1 students, all numbers are in range [100, 250]
Output
In the first line of output write the missing student height! (It’s not possible to be negative or zero) 

Input 
5 900
172 186 181 181 

Output 
180
*/

$i = 0;
while($line = fgets(STDIN)){
	$line = explode(' ', $line);
    if ($i === 0) {
    	$count = $line[0];
    	$total = $line[1];
    }else{
    	for ($j=0; $j < $count; $j++) { 
    		$height = $total-=$line[$j];
    	}
    }
    $i++;
}
echo $height;