<?php

// Print this project directory's file listing to screen
$path = ".";
$file = scandir($path);

foreach($file as $line){
    if($line== '.' || $line == '..')
        continue;
    echo "$line ". PHP_EOL;
}