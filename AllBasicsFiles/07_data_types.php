<?php 
echo "Learn the datatypes here<br>";
/* data types 1.String  2.Integer   3.Float     4.Boolean   5.Object    6.Array     7.Null
*/

//Integer
$price = 34000;
echo $price;
echo "<br>";

//Float 
$number = 349.008;
$num = 93834.018;
echo $num + $number;
echo "<br>";

//boolean 
$bol = true;
echo $bol ,"<br>";
echo "The dataType and value is ",var_dump($bol) , "<br>";//When you want to print the value 

//object instance of classes

//Array -use to store multiple values in single variable
$arr = array('45', 43.08, 'God', 34948);
echo $arr[0] , "<br>";
// echo var_dump($arr);

//Null
$nul = NULL;
echo $nul;

?>