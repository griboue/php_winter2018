<?php

/*
 * Please declare/define and use a Fibonacci function that has one optional parameter to determine
 * the number of numbers to be included in the Fibonacci sequence.
 */

function fibonacci($number = 5){
    $number1 = 0;
    $number2 = 1;

    echo $number1 . PHP_EOL . $number2;

    for($i=0; $i<$number; $i++){
        echo PHP_EOL . ($number1 + $number2);

        $temp = $number2;
        $number2 = $number1 + $number2;
        $number1 = $temp;
    }


}

fibonacci(10);

