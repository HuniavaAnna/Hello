<?php

$data = [];

$data['name'] = readline('Enter your name ');
$data['age'] = readline('Enter your age ');
$data['gender'] = readline('Enter your gender ');
$data['programLanguages'][] = readline('Enter your programming languages ');
$data['programLanguages'][] = readline('Enter your programming languages ');
$data['programLanguages'][] = readline('Enter your programming languages ');

print_r($data);