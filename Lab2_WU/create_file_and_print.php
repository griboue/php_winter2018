<?php

// Create a file by putting your name in it
$fileName = dirname('.') . DIRECTORY_SEPARATOR . 'MyFile.txt';
$myName = "Jiahong Wu";

if (!$handle = fopen($fileName, 'w+')) {
    echo "Cannot open file ($fileName)" . PHP_EOL;
    exit;
}

if (fwrite($handle, $myName) === FALSE) {
    echo "Cannot write to file ($fileName)" . PHP_EOL;
    exit;
}

echo "Write with success" . PHP_EOL;

fclose($handle);

// Read the newly created file's content and print it to screen
$handle = file_get_contents($fileName);

echo $handle;