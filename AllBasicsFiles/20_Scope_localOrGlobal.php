<?php

echo "Reading here local and global variables <br>";
//Global var
$a =45;
$b = 434;
//Functions 
function printVal(){
    global $a,$b;
    $a = 47; 
    $b = ' er';
    echo "<br>The funcion value of the files is ".$a." ".$b;
    
}
printVal();
echo "<br>".$a." ".$b;
echo "<br>".var_dump($GLOBALS);
?>