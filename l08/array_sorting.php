<?php

$programingLanguages = [
    'PHP',
    'JS',
    'C++',
    'Java',
    'Go',
    'KotLin'
];

asort($programingLanguages);
arsort($programingLanguages);
shuffle($programingLanguages);

print_r($programingLanguages);

$numbers = [
    33,
    8,
    1,
    10,
    3,
    200,
    66,
];
asort($numbers);

print_r($numbers);

$students = [
    [
        'name' => 'Anna',
        'age' => '26',
    ],
    [
    'name' => 'Dima',
    'age' => '19',
    ],
    [
'name' => 'Alla',
        'age' => '44',
    ],
    [
        'name' => 'Oleg',
        'age' => '23',
    ],
    [
    'name' => 'Vasyl',
        'age' => '58',
    ],
];

uasort($students, static function (array $a, array $b) {
    return $a['age'] <=> $b['age'];
});
//    if ($a['age'] === $b['age']) {
//        return 0;
//    }
//    return $a['age'] < $b['age'] ? -1 : 1;
//});

print_r($students);
