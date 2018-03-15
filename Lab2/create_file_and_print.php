<?php

// Create a file by putting your name in it
$filename = "testfile.txt";
$myfile = fopen($filename, "a+");
fwrite($myfile,"Caron Frerejean Monet");

// Read the newly created file's content and print it to screen
$file = file_get_contents($filename);
echo $file;

