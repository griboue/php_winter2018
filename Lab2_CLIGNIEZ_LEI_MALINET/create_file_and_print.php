<?php

// Create a file by putting your name in it
$my_file = "file.txt";
$f = fopen($my_file, 'w') or die("Can't open file: ".$my_file);
$data_write = "This is CLIGNIEZ, LEI and MALINET ";
fwrite($f, $data_write);

// Read the newly created file's content and print it to screen
$f = fopen($my_file, 'r');
$data_read = fread($f, filesize($my_file));


//echo gettype($data_read);
echo $data_read;