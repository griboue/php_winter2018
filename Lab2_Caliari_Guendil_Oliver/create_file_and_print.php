<?php

// Create a file by putting your name in it

// Read the newly created file's content and print it to screen

$file = fopen("Lab2_Caliari_Guendil_Oliver/file.txt", "w");
fwrite($file, "Caliari Oliver Guendil");
fclose($file);

$data = file_get_contents("file.txt");
echo $data;
