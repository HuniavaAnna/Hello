<?php

$eol = php_sapi_name() === 'cli' ? PHP_EOL : '<br>';

//for ($i = 0; $i <10; $i++) {
//    echo $i, $eol;
//}
//
//for ( ; ; ) {
//    $rand = random_int(1,5);
//    echo $rand, $eol;
//    if ($rand === 3) {
//        break;
//    }
//    sleep(1);
//}
//
//echo $eol;

$array = ['test', 'qwerty', '1234567'];
$count = count($array);
for ($i = 0; $i < $count; $i++) {
    echo $array[$i], $eol;
}

echo $eol;

$k = 0;
while ($k < 6) {
    echo $k, $eol;
    $k++;
}

$arrayWhile = $array;
while ($arrayWhile) {
    echo array_shift($arrayWhile), $eol;
}
var_dump($arrayWhile);

echo $eol;

$data = [1, 2, 3, 6, 8, 9];
do {
    $number = random_int(1, 10);
    echo $number, $eol;
} while (in_array($number, $data));

foreach ($array as $key => $value) {
    echo "[{$key}] = {$value}{$eol}";
}

// Homework
// $menu = [
//      ...
//      ... => [
//      ...
//      ...
//      ]
//      ...
//      ...
// ]
//
// LOOP { ... }
//
// <ul>
//      <li><a href="/link1">Text 1</a></li>
//      <li><a href="/link2">Text 2</a></li>
//      <li>
//          Text 3
//          <ul>
//              <li><a href="/link3_1">Text 3.1</a></li>
//              <li><a href="/link3_2">Text 3.2</a></li>
//          </ul>
//      </li>
// </ul>
