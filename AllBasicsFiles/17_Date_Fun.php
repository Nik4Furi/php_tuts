<?php 
echo "Reading the Date functions";
echo "<br>";

// $d = date('l');
echo date(DATE_RFC2822);

echo "<br>";
echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));
echo "<br>";

$d = date('l jS \of F Y h:i:s A');
echo $d;




?>