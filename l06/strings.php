<?php

echo('TEST');
echo 'Hello world', PHP_EOL;

//Only one string
print 'Smth';
print PHP_EOL;

$s1 = print 'test 123';
var_dump($s1);

$name = 'Anna';
echo 'Hello $name\n', PHP_EOL;
echo "Hello, user name \"{$name}\"\n";

$nowdoc = <<<'TEXT'
<script type="text/javascript">
    alert(1);
TEXT;
echo $nowdoc, PHP_EOL;

$heredoc = <<<TEXT
<script type="text/javascript">
    alert(1);  
TEXT;
echo $heredoc, PHP_EOL;

$concat = 'This string' . 'is conacatenated' . PHP_EOL . 'From two strings' . PHP_EOL;
echo $concat;
