<?php

// Create a file by putting your name in it

// Read the newly created file's content and print it to screen

$myfile = fopen("my_file.txt", "w");
fwrite($myfile, "Antoinet and Davias");
fclose($myfile);

$data = file_get_contents("my_file.txt");
echo $data;





