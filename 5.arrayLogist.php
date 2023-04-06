<?php
class Solution
{

    /**
     * @param Integer[] $arr
     * @param Integer[] $arrCompared
     * @return Integer[]
     */

    function intersect($arr, $arrCompared) //未排除重複，與php的array_intersect一致
    {

        foreach ($arr as $index => $value) {
            if (!in_array($value, $arrCompared)) {
                unset($arr[$index]);
            }
        }
        return $arr;
    }

    function diff($arr, $arrCompared) //未排除重複，與php的array_diff一致
    {

        foreach ($arr as $index => $value) {
            if (in_array($value, $arrCompared)) {
                unset($arr[$index]);
            }
        }
        return $arr;
    }

    function union($arr, $arrCompared) //未排除重複，與php的array_merge一致
    {
        foreach ($arrCompared as $num) {
            $arr[] = $num;
        }
        return $arr;
    }

    function intersectUnique($arr, $arrCompared) //排除重複
    {
        return array_unique($this->intersect($arr, $arrCompared));
    }

    function diffUnique($arr, $arrCompared) //排除重複
    {
        return array_unique($this->diff($arr, $arrCompared));
    }

    function unionUnique($arr, $arrCompared) //排除重複
    {
        return array_unique($this->union($arr, $arrCompared));
    }
}


$solution = new Solution();

$arr = [77, 5, 5, 22, 13, 55, 97, 4, 796, 1, 0, 9];
$arrCompared = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

//未排除重複
$testOne = $solution->intersect($arr, $arrCompared);
$testTwo = $solution->diff($arr, $arrCompared);
$testThree = $solution->union($arr, $arrCompared);
echo "未排除重複\n";
var_dump($testOne, $testTwo, $testThree);

//排除重複
$testOne = $solution->intersectUnique($arr, $arrCompared);
$testTwo = $solution->diffUnique($arr, $arrCompared);
$testThree = $solution->unionUnique($arr, $arrCompared);
echo "排除重複\n";
var_dump($testOne, $testTwo, $testThree);
