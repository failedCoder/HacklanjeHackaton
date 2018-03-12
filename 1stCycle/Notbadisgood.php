<?php

/*
Replace "not ... bad" substring starting with NOT and ending with BAD) with "good" in the input. 

Input
Sentence

Output
Sentence with replaced substring

Example
Input:
This pizza is not too bad.
Output:
This pizza is good.
*/

$input = 'This pizza is not too bad.';

$start = stripos($input,'not');

$end = stripos($input, 'bad')+3;

$length = $end-$start;

echo substr_replace($input, 'good', $start,$length);

