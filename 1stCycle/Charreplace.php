<?php

/*
Replace numbers with "*", letters with "-" and other characters with "?"

Example
Input:
pi=3.14
Output:
--?*?**

*/

$input = 'pi=3.14';

for ($i=0; $i < strlen($input); $i++) { 
	if (is_numeric($input[$i])) {
		$input[$i] = '*';
	}else if (ctype_alpha($input[$i])) {
		$input[$i] = '-';
	}else{
		$input[$i] = '?';
	}
	
}

echo $input;