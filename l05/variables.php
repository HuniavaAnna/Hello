<?php

$fruit = 'Orange';

echo $fruit, PHP_EOL;

$fruit = 'Apple';

echo $fruit, PHP_EOL;
echo $fruit, PHP_EOL;

// FAILS
// test = 123; $ is required
// 1test = 123; no number on start
// te^st = 123; no special characters
// te  st = 123; no spaces

// AVAILABLE
$t1weq = 123;
$_te_st = 123;

$all_students_list = [];

$allStudentsList = [];
$minSum = 12;

$test = 'TEST';
$link = &$test;

$test = 123;
$link = 2222;

var_dump($test, $link);

$var1 = 'qwerty';
$$var1 = 11155;

var_dump($qwerty);