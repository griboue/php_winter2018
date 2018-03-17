<?php
// Print this project directory's file listing to screen
foreach (glob("*",GLOB_NOSORT) as $filename) {
    echo $filename . PHP_EOL;
}


