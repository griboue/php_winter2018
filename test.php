<?php
/*
echo 'This is a message from test.php!' . PHP_EOL;

function a($a, $b, $c = null, $d = null) {
    echo "a : " .$a .PHP_EOL;
    echo "b : " .$b . PHP_EOL;
    echo "c : " .$c . PHP_EOL;
    echo "d : " .$d . PHP_EOL;
}

a(1,2,3);*/

$a = "a";
$b = $a;
echo "a : " . $a . PHP_EOL;
echo "b : " . $b . PHP_EOL;
$b = "b";
echo "a : " . $a . PHP_EOL;
echo "b : " . $b . PHP_EOL;
$a = "a2";
echo "a : " . $a . PHP_EOL;
echo "b : " . $b . PHP_EOL;

$apple = "apple";
$$apple = "\$apple";
echo $apple.PHP_EOL;
echo $$apple.PHP_EOL;

echo (0==false) ? "0 == false" : "0 != false";
echo PHP_EOL;

echo (0===false) ? "0 === false" : "0 !== false";
echo PHP_EOL;

$a = "5"; $b = 5;
echo $a <> $b ? "true" : "false";
echo PHP_EOL;

var_dump(~9);
var_dump(DIRECTORY_SEPARATOR);
var_dump(PATH_SEPARATOR);

//file_put_contents("file.txt","content\ncontent");

function swape(&$a, &$b){
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$a = 3; $b = 5;
echo $a . " " . $b . PHP_EOL;
swape($a, $b);
echo $a . " " . $b . PHP_EOL;







