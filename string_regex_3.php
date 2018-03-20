<?php

$foo = 'There are 3333 persons.';

echo preg_replace('/[0-9]{,3}/', 1, $foo);