<?php

namespace Day1;

$dir = '/home/china/Documentos/input.txt';

$input = file_get_contents($dir);
$line = explode(PHP_EOL, $input);

var_dump($line);



function part1($input) 
{

}