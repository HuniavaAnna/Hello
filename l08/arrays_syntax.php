<?php

$programLanguagesOld = array(
    'PHP',
    'JS',
    'C++',
    'Java',
    'Go',
    'KotLin',
);
$programLanguagesNew = [
    'PHP',
    'JS',
    'C++',
    'Java',
    'Go',
    'KotLin',
    [
        'HTML',
        'XHTML',
        'CSS'
        ]
];

// Added an element to the end of the array
$programLanguagesNew[] = 'C#';
// indicate the key to [] fot example 9
$programLanguagesNew[9] = 'Scala';
// added new element into existing key, changed Scala on HTML
$programLanguagesNew[9] = 'HTML';
$programLanguagesNew[] = 'Python';

//deleting an key array
unset($programLanguagesNew[4], $programLanguagesNew[10]);

// associative array
$student = [
    'name' => 'Vasyl',
    'age' => 22,
    'isGodBoy' => true,
    'gender' => 'male',
    'programmingLanguages' => [
    'PHP',
    'JS',
    'Go'
     ]
 ];

//$student[] = 'TEST';
print_r($student);

var_dump($student['name']);
echo "{$student['name']} ({$student['age']} years old), {$student['gender']}", PHP_EOL;

var_dump($student['programmingLanguages'][1]);

//var_dump($programLanguagesNew);
//print_r($programLanguagesNew);