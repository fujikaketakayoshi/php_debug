<?php

$word = 'うんこにちは';

$ngwords = ['うんこ', 'ちんこ', 'インディアン嘘つかない', 'アイヌ系', '明盲'];

$ng = false;

foreach ( $ngwords as $n ) {
//	var_dump(strpos($word, $n));
//	var_dump(strpos($word, $n) == true);
	if ( strpos($word, $n) == true ) {
		$ng = true;
	}
}

var_dump($ng);
echo $ng;
echo '<br>';


// if ( 0 ) {
// 	echo 'OK';
// } else {
// 	echo 'NG';
// }
// echo '<br>';
