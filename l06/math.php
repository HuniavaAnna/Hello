<?php

echo 1 + 2, PHP_EOL;
echo 1 * 2, PHP_EOL;
echo 1 - 2, PHP_EOL;
echo 1 / 2, PHP_EOL;

echo 3 % 2, PHP_EOL;
echo 3 % 5, PHP_EOL;
echo 8 % 3, PHP_EOL;

echo 3 ** 2, PHP_EOL;
echo 3 ** 5, PHP_EOL;

$resvlt = 0;
// $resvlt = $resvlt + 2;
$resvlt +=2;
$resvlt +=10;
$resvlt /=2;
echo $resvlt, PHP_EOL;

// increment, when ++ do in +1. decrement, when -- do it -1.
$number = 5;
$number++;
$number++;
$number--;
echo $number, PHP_EOL;

$number2 = 5;
++$number2;
--$number2;
echo ++$number2, PHP_EOL;

$number3 = 5;
echo $number3++ + ++$number3, PHP_EOL;

