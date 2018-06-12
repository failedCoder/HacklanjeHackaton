<?=
/*
Replace all adjacent equal elements of the given array with one element.

Input
String, an array of numbers separated by space
Output
Array with no adjacent duplicates
Example

Input:
4 4 4 2 8 8 7 
Output:
4 2 8 7

*/

$input = '4 4 4 2 8 8 7';

$array = explode(' ', $input);

$result = array_unique($array);

foreach ($result as $num) {
	echo $num.' ';
}
