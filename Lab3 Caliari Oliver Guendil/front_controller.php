<?php

/*
 * This file should contain your front controller and basic routing mechanism
 * in order to call the appropriate controller contained in the 'include' folder.
 */
include "include/controller1.php";
include "include/controller2.php";

class Controller{

    public function __construct(){
        //$host = $_SERVER['REQUEST_URI'];

        echo "Enter the controller : ";
        $line = readline();
        if($line == "controller1")
            $controller1 = new controller1();

        else
            $controller2 = new controller2();

    }
}

$test = new Controller();