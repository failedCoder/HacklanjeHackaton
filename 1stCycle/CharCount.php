<?php

/*

Count the number of occurances of each letter of the input string. Count ONLY LETTERS, converted to LOWERCASE. Skip numbers or any other characters.

Return a string containing the letters converted to lowercase and sorted alphabetically, and their respective counts, separated by newlines, as described. Omit the last newline in the result.

Input
String
Output
String, composed of a row for each letter of the input string, formatted like this:
{letter}:{count}{newline}
Example
Input:
Hello world!
Output:
d:1
e:1
h:1
l:3
o:2
r:1
w:1

*/

$input = 'Hello world!';

$input = strtolower(preg_replace('/[^a-z]+/i', '', $input));

$array = str_split($input);


$countArray = array_count_values($array);

ksort($countArray);

foreach ($countArray as $key => $value) {
	echo $key.':'.$value.'<br>';
}
