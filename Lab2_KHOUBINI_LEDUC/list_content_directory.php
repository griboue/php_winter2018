<?php

// Print this project directory's file listing to screen


$path = dirname('.');

if ($handle = opendir($path)) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != ".." && !is_dir($entry)) {
            $myArray = file($path . DIRECTORY_SEPARATOR . $entry);
            echo PHP_EOL;
            echo "File : $entry,";
        }
    }
    closedir($handle);
}
