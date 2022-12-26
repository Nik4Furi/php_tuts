<?php 
echo "Reading the functions on php";
echo "<br>";


function processMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as  $value) {
        $sum += $value;
    }
    return $sum;
}
function avgMarks($marksArr){
    $sum = 0;

    foreach ($marksArr as  $value) {
        $sum += $value;
    }
    return $sum/count($marksArr);
}


$rohan = [34, 349, 29383, 2938];
$raj = [334, 32349, 2938233, 293128];

// $sumRohan = processMarks($rohan);
$sumRaj= processMarks($raj);
$avgRaj= avgMarks($raj);
// echo $sumRohan . "<br>" . $sumRaj;
echo  $sumRaj . "<br>" . $avgRaj;
?>