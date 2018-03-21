<?php

// Create an array
$myarray =['A','l','c','i','d','e'];

// Print the array to screen using a foreach loop
foreach ($myarray as &$value) {
    echo $value ;
}