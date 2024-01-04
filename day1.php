<?php

// $dir ='/var/www/html/adventofcode/inputs/day1-part1-example.txt';
$dir ='/var/www/html/adventofcode/inputs/day1-part1-input.txt';
$input = file_get_contents($dir);
$lines = explode(PHP_EOL, $input);
$total = 0;
foreach ($lines as $line) {
    $characteres = str_split($line);
    $numericCharacteres = array_values(array_filter($characteres, fn (string $character) => is_numeric($character)));

    $firstNumber = $numericCharacteres[0];
    $lastNumber = $numericCharacteres[count($numericCharacteres) - 1];
    $result = "{$firstNumber}{$lastNumber}";
    
    $total += $result;
    
}

echo $total;
return $total;