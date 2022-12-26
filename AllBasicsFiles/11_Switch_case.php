<?php 
echo "Reading the switch cases";
echo "<br>";

$age = 49;
switch ($age) {
    case '90':
        echo "your age is 90";
        break;
    case '89':
        echo "your age is 89";
        break;
    case '49':
        echo "your age is 49";
        break;
    
    default:
        echo "unknown age plz fill right age";
        break;
}

?>