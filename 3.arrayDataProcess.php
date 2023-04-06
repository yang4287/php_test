<?php

function Solution($arr) {
	$oddArray = [];
	$evenArray = [];
	$sum = 0; 
    foreach($arr as $num){
		if ($num & 1) {
			$oddArray[] = $num;
			$sum += $num;
		}
		else {
			$evenArray[] = $num;
			$sum -= $num;
		}
	}
	return [$sum,$oddArray,$evenArray];
}
$arr = [0,1,2,3,4,5,6,7,8,9];
var_dump(Solution($arr));