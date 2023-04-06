<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $hashMap = array();
        for($index = 0; $index < count($nums); $index++){
            $number = $target - $nums[$index];
            if(array_key_exists($number, $hashMap)) return [$index, $hashMap[$number]];
            $hashMap[$nums[$index]] = $index;
        }
    }
}

#以下為非leetcode環境下測試執行
$solution = new Solution();
$testOne = $solution -> twoSum($nums = [2,7,11,15], $target = 9);
$testTwo = $solution -> twoSum($nums = [3,2,4], $target = 6);
$testThree = $solution -> twoSum($nums = [3,3], $target = 6);
var_dump($testOne,$testTwo,$testThree);