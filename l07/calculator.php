<?php

$number1 = readline('Enter the first number: ');
$operation = readline('Enter the required operation: ');
$number2 = readline('Enter the second number: ');

switch ($operation) {
    case '+':
        echo $number1 + $number2, PHP_EOL;
        break;
    case '-':
        echo $number1 - $number2, PHP_EOL;
        break;
    case '*':
        echo $number1 * $number2, PHP_EOL;
        break;
    case '/':
        echo $number1 / $number2, PHP_EOL;
        break;
}
