<?=
/*
Slavko is writing an important document for his class tomorrow. His document consist of one long sentence, containing only words of lowercase letters of the English alphabet. Now he wants to format his sentence using one of three alignments that are supported by editor: left, right or center. The editor displays each row of text with exactly W characters, which can either be a letter if it's a part of word, or space (denoted with '.' - dot). Given the alignment that Mirko choose, the width of each row W, and the sentence, determine the look of the editor's display.
Input
The first line contains an integer W (15 ≤ W ≤ 100).
The second line contains a string that can either be "left", "right" or "center", denoting the alignment.
The third line contains the sentence consisting of 100 words max. You may assume each word can fit the width of the editor.

Output
Output the editor's display. Each row should consist of exactly W characters with blankspaces denoted with dots. In the case when the text should be centered, and the blankspaces can't be divided evenly to both sides, the right side should contain one dot more than the left side of the row.

Examples
Input
20 center quick brown fox jumps over the lazy dog

Output

..quick.brown.fox...
jumps.over.the.lazy.
........dog.........
Input
15 right ping pong table tennis skiing bowling

Output

ping.pong.table
..tennis.skiing
........bowling
*/


  

$w = 15;
$a = 'right';
$s = 'ping pong table tennis skiing bowling';

$s = explode(' ', $s);

$result = array('');
$line = 0;
for ($i=0; $i < count($s); $i++) { 
	if((strlen($result[$line]) + strlen($s[$i])) <= $w ){
		$result[$line] .= $s[$i].'.';
	}else{
		$line++;
		$result[$line] .= $s[$i].'.';
	}
}

switch ($a) {
	case 'center':
		foreach ($result as &$r) {
			$lim = $w-strlen($r);
			for ($i=0; $i < $lim; $i++) { 
				if(strlen($r)<$w){
				$r = '.'.$r;
				$r .= '.';
			}
			}
		}
		break;
	case 'right':
		foreach ($result as &$r) {
			$r = rtrim($r,'.');
			$lim = $w-strlen($r);
			for ($i=0; $i < $lim; $i++) { 
				$r = '.'.$r;
			}
		}
		break;
	case 'left':
		
		foreach ($result as &$r) {
			$r = rtrim($r,'.');
			$lim = $w-strlen($r);
			for ($i=0; $i < $lim; $i++) { 
				$r = $r.='.';
			}
		}
		break;
	
}

echo '<pre>';
print_r($result);
echo '</pre>';


