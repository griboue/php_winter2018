<?php

// Create an array
$a1 = ["won" => "un",
        "too" => "deux",
        "tree" => "trois"];

// Print the array to screen using a foreach loop

foreach ($a1 as $key => $value) {
    echo $key . " : " . $value . PHP_EOL;
}