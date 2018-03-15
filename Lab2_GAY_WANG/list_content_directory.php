<?php

// Print this project directory's file listing to screen
$path = ".";
$files = scandir($path);
foreach ($files as $name) {
    if ($name == "." || $name == "..")
        continue;
    echo $name . PHP_EOL;
}