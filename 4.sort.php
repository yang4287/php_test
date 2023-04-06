<?php


function swap(&$x, &$y)
{   
    $t = $x;
    $x = $y;
    $y = $t;
}

function selectionSort(&$arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        $minIndex = $i;
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$minIndex]  > $arr[$j]) {
                $minIndex = $j;    
            }
        }
        if ($i != $minIndex) swap($arr[$i], $arr[$minIndex]);
    }
    return $arr;
}

$arr = array(77, 5, 5, 22, 13, 55, 97, 4, 796, 1, 0, 9);
var_dump(selectionSort($arr));

