<?php 
echo "Reading the php for each loop that's using in the arrays";
echo "<br>";
$rrr = array("Fruits",34, 'undefined', true);
// ehco $rrr[0];
for ($i=0; $i < count($rrr); $i++) { 
    echo $rrr[$i];
    echo " ";
}

foreach ( $rrr as $value) {
    echo $value;
    echo " ";
}
?>