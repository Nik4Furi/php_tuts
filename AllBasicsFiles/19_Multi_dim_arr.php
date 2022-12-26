<?php
echo "Multidimension arrays in php";
echo "<br>";

$multi = array(array(2,1,2,9),
array(3,2,9,1),array(2,5,8,7));
// echo var_dump($multi);
echo $multi[0][2];
echo "<br>";
echo $multi[1][2];
echo "<br>";

for ($i=0; $i < count($multi); $i++) { 
    // echo var_dump($multi[$i]);
    for ($j=0; $j < count($multi[$i]); $j++) { 
        echo $multi[$i][$j];
        echo " ";
    }
    echo "<br>";
}

//Quik Quiz print the 3d array
echo "Printing the 3-D array";
$threed=array(array (array(1,2,3),
                    array(4,5,6),
                    array(7,8,9)));

for ($k=0; $k < count($threed); $k++) { 
    for ($l=0; $l < count($threed[$k]); $l++) { 
        for ($u=0; $u < count($threed[$k][$l]); $u++) { 
            # code...
            echo $threed[$k][$l][$u];
            echo " ";
        }
        echo "<br>";
    }
    
}
?>