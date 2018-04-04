<?php

// Create a file by putting your name in it

$myfile = fopen("AlcideK.txt", "w");
$txt = "Alcide KHOUBINI\n";
fwrite($myfile, $txt);
fclose($myfile);
// Read the newly created file's content and print it to screen
echo file_get_contents( "testfile.txt" );