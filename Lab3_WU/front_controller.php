<?php

/*
 * This file should contain your front controller and basic routing mechanism
 * in order to call the appropriate controller contained in the 'include' folder.
 */

define('BASE_PATH', dirname(dirname(__FILE__)));

if ($_SERVER['REQUEST_URI'] == BASE_PATH . DIRECTORY_SEPARATOR . 'Lab3_WU' . DIRECTORY_SEPARATOR . 'include' . DIRECTORY_SEPARATOR . 'controller1') {
    include_once("include". DIRECTORY_SEPARATOR . "controller1.php");
} elseif ($_SERVER['REQUEST_URI'] == BASE_PATH . DIRECTORY_SEPARATOR . 'Lab3_WU' . DIRECTORY_SEPARATOR . 'include' . DIRECTORY_SEPARATOR . 'controller2') {
    include_once("include". DIRECTORY_SEPARATOR . "controller2.php");
} else {
    echo "<h1>page not found !!</h1>";
}