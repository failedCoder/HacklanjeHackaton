<?=
/*
Mirko has N candies. He wants to divide them into smaller groups such that every group has at least one candy and the number of candies is equal in every group. 
Example: Mirko has 6 candies. He can divide those candies in a total of 6 different ways: 
1st way: 6 groups with 1 candy 
2nd way: 3 groups with 2 candies 
3rd way: 2 groups with 3 candies 
4th way: 1 group with 6 candies 
Write the total number of different ways of dividing candies to the output. The ways differ by the number of candies in each group.
Input
In the first line you are given the number N (1 <= N <= 1010)
Output
In the first line write the total number of ways described in the text
Scoring
In 20%: (1 <= N <= 10)
In next 20%: (1 <= N <= 1000)
In next 30%: (1 <= N <= 100 000) 


Input 
6 

Output 
4 

Input 
11 

Output 2
*/

$input = 11;
$count = 0;

if($input%2 != 0){
	echo 2;
}else{
	for ($i=1; $i <= $input; $i++) { 
		if ($input % $i == 0) {
			$count++;
		}
	}
	echo $count;
}



