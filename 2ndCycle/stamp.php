<?=
/*
Bob is working as a stamp designer. Recently he drew 2 stamp designs on separate transparent papers. Each stamp can be described as a sequence of colored rectangles. None of the rectangles of the same stamp overlap. Unfortunately, he wasn't satisfied with the two designs, so he decided to merge them into one by placing the transparent paper with the first design on top of the other paper. Determine the total colored area of the merged designs.
Input
The first line contains a positive integer N (1 ≤ N ≤ 50), the number of rectangles of the first stamp. Then N lines follow, each representing one rectangle on the first stamp described with four integers: X1, Y1, X2 and Y2 (0 ≤ X1 < X2 ≤ 10000, 0 ≤ Y1 < Y2 ≤ 10000). (X1, Y1) is the bottom-left and (X2, Y2) is the top-right coordinate. The following line contains a positive integer M (1 ≤ M ≤ 50), the number of rectangles of the second stamp. Then M lines follow, each containing four integers X1, Y1, X2 and Y2 (0 ≤ X1 < X2 ≤ 10000, 0 ≤ Y1 < Y2 ≤ 10000). (X1, Y1) is the bottom-left and (X2, Y2) is the top-right coordinate of the second stamp.
Output
Print the colored area after merging the 2 stamps.
Scoring
Test cases worth 20% of total points: N = M = 1.
Test cases worth additional 40% of total points: X1, Y1, X2, Y2 ≤ 30.
Example

Input: 
1 
2 2 4 4 
1 
3 3 5 5 

Output: 
7 

Input: 
2 
1 1 5 4 
2 4 9 5 
2 
4 4 8 6 
2 1 6 2 

Output 
24 

Explanation The first picture shows the first stamp, the second picture shows the second stamp and the third picture shows the merged stamps. The total area filled with colors on the merged stamps is 24. 
*/

$n = 2;
$nc = array(
	'1 1 5 4',
	'2 4 9 5'
);

$m = 2;
$mc = array(
	'4 4 8 6',
	'2 1 6 2'
);
function area(array $rec){
	$area = ($rec[2]-$rec[0]) * ($rec[3]-$rec[1]);
	return $area;
}
$aN = array();
foreach ($nc as &$c) {
	$c = explode(' ',$c);
	$area = area($c);
	array_push($aN, $area);
}
$areaN = array_sum($aN);
$aM = array();
foreach ($mc as &$c) {
	$c = explode(' ',$c);
	$area = area($c);
	array_push($aM, $area);
}
$areaM = array_sum($aM);

function intesects(array $A,array $B){
	if ($A[0] < $B[2] && $A[2] > $B[0] && $A[3] > $B[1] && $A[1] < $B[3]){
		return true;
	}
	return false;
}

$areaI = 0;
$total = $areaN + $areaM;
foreach ($nc as $rec) {
	for ($i=0; $i < count($mc); $i++) { 
		if(intesects($rec,$mc[$i])){
			$x1 = max(array($rec[0],$mc[$i][0]));
			$x2 = min(array($rec[2],$mc[$i][2]));
			$y1 = max(array($rec[1],$mc[$i][1]));
			$y2 = min(array($rec[3],$mc[$i][3]));
			$areaI = ($x2-$x1) * ($y2-$y1);
			$total -= $areaI;
		}
	}
}
echo $total;



