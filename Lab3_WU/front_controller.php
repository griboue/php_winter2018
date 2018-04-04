<?php

/*
 * This file should contain your front controller and basic routing mechanism
 * in order to call the appropriate controller contained in the 'include' folder.
 */
$url = parse_url($_SERVER["REQUEST_URI"],PHP_URL_QUERY);

switch ($url) {
    // controller1
    case 'controller1':
        require 'include/controller1.php';
        break;
    // controller2
    case 'controller2':
        require 'include/controller2.php';
        break;
    // not found page
    default:
        echo "<h1>page not found !!</h1>";
        break;
}

