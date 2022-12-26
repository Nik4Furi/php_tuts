<?php 
echo "Starting from the operators";
echo "<br>";
//Arithmetic operations 
$num = 8;
$nam = 3;
 /*echo "The num + nam is ", $nam + $num, "<br>";
echo "The num - nam is ", $nam - $num, "<br>";
echo "The num * nam is ", $nam * $num, "<br>";
echo "The num / nam is ", $nam / $num, "<br>";
echo "The num % nam is ", $nam % $num, "<br>";
echo "The num ** nam is ", $nam ** $num, "<br>"; */

//Assignment Operator
$x = $num;
echo $x,"<br>";
$num *= 4;
echo $x, "<br>"; 

//comparison Operator
$num1 = 8;
$num2 = 9;
echo var_dump($num1 == $num2);

//Logical Operators
$jack = true;
$hill = false;
echo var_dump($jack and $hill) ,"<br>";
echo var_dump( ! $hill) ,"<br>";
echo var_dump($jack or $hill) ,"<br>";


?>