<?php

echo 'This is a message from test.php!' . PHP_EOL;

function a($a, $b, $c = null, $d = null) {
    echo "a : " .$a .PHP_EOL;
    echo "b : " .$b . PHP_EOL;
    echo "c : " .$c . PHP_EOL;
    echo "d : " .$d . PHP_EOL;
}

a(1,2,3);