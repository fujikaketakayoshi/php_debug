<?php

$arr = ['apple' => 'りんご', 'banana' => 'バナナ', 'num' => 123];


var_dump($arr);
//exit();


error_log("9876543\n", 3, "log/debug.log");
//error_log(var_export($arr, true) . "\n", 3, "log/debug.log");
//exit();

header("Location: dist.php");