<?php

$a = FALSE;

$b =  TRUE;
//$b = FALSE;

if ($a || $b) {
	echo 'Running...';
	echo PHP_EOL;
}

switch (true) {
	case $a:
	case $b:
		echo 'Running program...';
		break;
}