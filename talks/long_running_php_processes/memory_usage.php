<?php
// This is only an example, the numbers below will
// // differ depending on your system
//
echo memory_get_usage() . "\n"; // 36640

$a = str_repeat("Hello", 42424242*2);

echo memory_get_usage() . "\n"; // 57960
echo memory_get_usage(true) . "\n"; // 57960

while(true){ }

echo memory_get_usage() . "\n"; // 36744
echo memory_get_usage(true) . "\n"; // 36744

