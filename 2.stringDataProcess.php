<?php

function Solution(&$str) {
	$str = str_replace(':','：',$str);
	echo 'A1:'.$str.PHP_EOL;

	$str = preg_replace('/(?<!\-)\s(?!\-)/','',$str);
	echo 'A2:'.$str.PHP_EOL;

    $str = mb_substr($str, mb_stripos($str,'：') + 1, mb_stripos($str, ' - ') - mb_stripos($str,'：'));
	echo 'A3:'.$str.PHP_EOL;
}

$str =  '人易科技:上 機 測 驗 - 演算法';

Solution($str);