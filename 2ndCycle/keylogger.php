<?php

/*
Mirko has recently started encrypting his devices with passwords. Mirko's brother Slavko found the whole thing really suspicious, so he decided to install a keylogger on his laptop to find out his passwords and discover what Mirko is hiding. A keylogger is a tool which registers each key pressed on keyboard and saves it to a log file. Given the sequence of keys pressed by Mirko while entering his password, help Slavko solve the mystery and find out Mirko's password. You may assume that Mirko uses only English letters, the caps-lock key and the backspace key, and that his password consists of at least one character.
Input
The first line contains a positive integer N (1 ≤ N ≤ 200), the number of keys pressed by Mirko. N lines follow, each of them containing the keys pressed by Mirko, formatted as follows:
* backspace if it's the backspace key,
* caps if it's the caps-lock key or
* a lowercase letter of the English alphabet.
Output
Print Mirko's password.
Example

Input: 
5 
a 
caps 
b 
caps 
c 

Output: 
aBc 

Input: 
9 
a 
b 
caps 
b 
caps 
c 
backspace 
backspace 
k 

Output: 
abk
*/
$input = '9 a b caps b caps c backspace backspace k';
$input = explode(" ", $input);

$password = '';
$caps = false;

for ($i=1; $i <= count($input)-1; $i++) { 
	if (strlen($input[$i]) === 1 ) {
		if ($caps === true) {
			$password.=strtoupper($input[$i]);
		}else{
			$password.=$input[$i];
		}
		
	}elseif ($input[$i] === 'backspace') {
		$password = substr_replace($password, '', -1);
	}elseif ($input[$i] === 'caps') {
		if ($caps === false) {
			$caps = true;
		}else
			$caps = false;
	}
}
print $password;


