<?php

$int = 1;
$float = 1.0003;
$string = 'test';
$bool = true;
//$bool = false;
$array = [1, 2, 3, 'test'];
$object = new stdClass();
$null = null;

$file = fopen(__DIR__ . '/math.php', 'rb');
fclose($file);

$callable = static function () {
};

var_dump((string)1.002);
// var_dump('521');
var_dump((int)'521');
var_dump((float)'521.7');
var_dump((int)'521 eggs');
var_dump((int)'eggs 521');

// false
var_dump((bool)'');
var_dump((bool)'0');
var_dump((bool)0);
var_dump((bool)[]);

// true
var_dump((bool)'1');
var_dump((bool)'test');
var_dump((bool)1);
var_dump((bool)[1]);

var_dump(is_int(1.1));
var_dump(is_int(1));
var_dump(is_string('1'));

$t123 = 12;
var_dump(isset($t123));

var_dump(empty(null));
var_dump(empty(123));

