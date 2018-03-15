//http://blog.csdn.net/xuz0917/article/details/50678243

<?php

echo "10" + "0.6", 44 . 1 . PHP_EOL;

/*
 * Return value is: 10.6441, explain:
 * There is two parts, 1. Php convert first the string "10" and "0,6"
 * to floats separately then add them together and convert to string;
 * 2. then convert integers 44 and 1 to strings, then concatenate them altogether.
 *
 *
 * While using "." in echo, Php first concatenate before printing
 * While using "," in echo, each part separated by "," is considered as parameter,
 * so Php calculates and prints each part separately
 */



//tests
echo "1+5=" . 1+5 . PHP_EOL;//output 6
echo "1+5=" . 5+1 . PHP_EOL;//output 2
echo "1+5=" , 5+1 , PHP_EOL;//output 1+5=6
echo '1+5=' , 1+5 , PHP_EOL;//output 1+5=6
echo ('1+5' . 5)+1 . PHP_EOL; //output 2
//Because inside the parentheses, only 1 is kept and 1+1 = 2;
echo (int)'abc1', PHP_EOL;   //output 0
echo (int)'1abc', PHP_EOL; //output 1
echo (int)'2abc', PHP_EOL; //output 2
echo (int)'22abc, PHP_EOL'; //output 22
/*We found that there is only the beginning of the string,
If it's a number than transform, if not, then ignore*/
echo '5+1=' . 1+5, PHP_EOL; //output 10
echo '5+1=' . 5+1, PHP_EOL; //output 6
echo '1+5=' . 1+5, PHP_EOL; //output 6
echo '1+5=' . 5+1, PHP_EOL; //output 2
