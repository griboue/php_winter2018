<?php

// Print this project directory's file listing to screen
$path    = '.';
$files = scandir($path);

$files = array_diff(scandir($path), array('.', '..'));

var_dump($files);