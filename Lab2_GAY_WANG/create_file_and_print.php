<?php

// Create a file by putting your name in it
$file = fopen("test.txt", "w+");
$name = "Emmanuel Gay";
fwrite($file, $name);
readfile("test.txt");
fclose($file);
// Read the newly created file's content and print it to screen