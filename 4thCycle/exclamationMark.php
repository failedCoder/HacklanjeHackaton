<?php
/*

You are given two words which consist out of lower case English letters. Write those words to the output such that every letter which appears in both words is substituted with an exclamation mark (punctuation ‘!’)
Input
In the first line you are given the first word, between 1 and 100 characters in length. 
In the second line you are given the second word, between 1 and 100 characters in length.
Output
In the first line write the first word transformed according to the rule 
In the second line write the second word transformed according to the rule 

Input 
tava
krava 

Output 
t!!! 
kr!!! 

Input 
mojposao
avion 

Output m!jp!s!! 
!vi!n
*/

$input = 'mojposao avion';
$input = explode(' ',$input);
$word1 = $input[0];
$word2 = $input[1];

for ($i=0; $i < strlen($input[0]) ; $i++) { 
	for ($j=0; $j < strlen($input[1]); $j++) { 
		if($input[0][$i] === $input[1][$j]){
			$word1[$i] = '!';
			$word2[$j] = '!';
		}
	}
}
echo $word1;
echo "<br>";
echo $word2;



