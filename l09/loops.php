<?php

$eol = php_sapi_name() === 'cli' ? PHP_EOL : '<br>';

for ($i = 0; $i <10; $i++) {
    echo $i, $eol;
}

for ( ; ; ) {
    $rand = random_int(1,5);
    echo $rand, $eol;
    if ($rand === 3) {
        break;
    }
    sleep(1);
}

echo $eol;

$array = ['test', 'qwerty', '1234567'];
$count = count($array);
for ($i = 0; $i < $count; $i++) {
    echo $array[$i], $eol;
}

echo $eol;


