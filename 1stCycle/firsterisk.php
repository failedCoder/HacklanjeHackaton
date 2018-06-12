<?php
/*
Replace all characters equal to the first character of the input, except the first character, with an asterisk (*).

Example
Input:
initialization
Output:
in*t*al*zat*on

$input = 'initialization';

*/


for ($i=1; $i < strlen($input); $i++) { 
	if ($input[$i] == $input[0]) {
		$input[$i] = '*';
	}
}

echo $input;








