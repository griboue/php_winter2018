<?php

/*
 * This file should contain your front controller and basic routing mechanism
 * in order to call the appropriate controller contained in the 'include' folder.
 */

include "include/controller1.php";
include "include/controller2.php";

class Controller{

    public function __construct()
    {
        echo "Choose a controller: ";
        $input = readline();
        if($input == "1")
            $controller = new controller1();
        else
            $controller = new controller2();
    }
}

$front_controller = new Controller();