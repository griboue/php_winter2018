<?php

// Print this project directory's file listing to screen

//Test
// Get name of current directory
// echo __FILE__;
/*$var = dirname(__FILE__);
echo gettype ($var );*/

//Sort in ascending order - this is default
$a = scandir(dirname(__FILE__));
//scandir return an Array so we should use foreach

// Sort in descending order
$b = scandir(".",1);

//scandir return an Array so we should use foreach
foreach ($a as $value) {
    echo $value . PHP_EOL;
}

echo PHP_EOL;

print_r($b);
