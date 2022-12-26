<?php 
echo "Reading the associativity in Arrays";
echo "<br>";

$arr = array("This", "That", "what", 34);
echo $arr[3] . "<br>";

//Associativity
$favcol = array("Shubham"=>'red',"Roha"=>'green', "Ram"=>'blue');
echo $favcol["Shubham"];

echo "<br>";
foreach ($favcol as $key => $value) {
    echo "Favourite color of $key is $value <br>";
}
?>