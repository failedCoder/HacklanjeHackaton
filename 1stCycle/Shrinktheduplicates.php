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

$input = str_split(str_replace(' ', '', $input));


for ($i=0; $i < count($input); $i++) { 
	$match=array_keys($input,$input[$i]);
	for ($j=0; $j < count($match)-1; $j++) { 
		unset($input[$match[$j]]);
	}
}
echo "<br>";
foreach ($input as $value) {
	echo $value.' ';
}
