<?php 

echo "Reading about the String functions"; 
echo "<br>";
$name = "Harry";
echo $name , "<br>";
echo strlen($name) , "<br>"; //Gibe the length of string 

$name = "Harry's channel name Harry is CWH <br>";
echo strlen($name) , "<br>";
echo str_word_count($name) , "<br>";
echo strrev($name) , "<br>";
echo strpos($name, "is") , "<br>";
// echo strpos($name, "dsjoij") , "<br>"; //dont print because it's not exist
echo str_replace("Harry", "Rohan",$name ) , "<br>";
// echo str_repeat($name, 34 ) , "<br>";
echo "<pre>";
echo rtrim("<pre>   this is    white spaces are remove from right side     count   </pre>" );
echo "</pre> <br>";
echo "<pre>";
echo ltrim("<pre>   this is    white spaces are remove from left side     count   </pre>" );
echo "</pre>";




?>