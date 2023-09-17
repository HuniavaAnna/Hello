<?php

$programLanguages = [
    'PHP',
    'JS',
    'C++',
    'Java',
    'Go',
    'KotLin',
];

//$programLanguages[] = 'C#';
array_push($programLanguages, 'C#');

$php = array_shift($programLanguages);
$js = array_shift($programLanguages);
$cPlus = array_shift($programLanguages);

var_dump($php, $js, $cPlus);

array_unshift($programLanguages, $cPlus);
array_unshift($programLanguages, $js);
array_unshift($programLanguages, $php);

$other = [
    'HTML',
    'XHTML',
    'XHTML',
    'CSS',
    'CSS',
];

$allLanguager = array_merge($programLanguages, $other);

print_r($allLanguager);

print_r($programLanguages);
var_dump(count($programLanguages));

$keys = [
    'name',
    'age',
    'gender',
];
$values = [
    'Anna',
    26,
    'woman',
];

$data = array_combine($keys, $values);
print_r($data);

$student = [
    'name' => 'Vasyl',
    'age' => 22,
    'isGodBoy' => true,
    'gender' => 'male',
];

print_r($student);
if (array_key_exists('name', $student)) {
    var_dump($student['name']);
} else {
    echo 'Key "name" is required', PHP_EOL;
}

print_r(array_unique($other));

