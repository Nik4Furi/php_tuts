<?php
echo "Reading here about connections <br>";
//Connecting variables
$serverName = 'localhost';
$userName = 'root';
$password = '123456';
$database = 'myclg';

//Connected to the all vars
$conn = mysqli_connect($serverName, $userName, $password,$database);
if (!$conn) {
    die(`Sorry for connection is failed: `.mysqli_connect_error());
}
else {
    # code...
    echo "connect was successfully <br>";
}

//creating the database
$sql = 'select * from submit1';
$result = mysqli_query($conn,$sql);
if ($result) {
    echo 'This query work <br>' ;
}
else {
    echo "This query will not work";
}
// echo var_dump($result);
//Find the no of rows 
$num = mysqli_num_rows($result);
echo "The number os rwos are affected" .$num ."<br>";

/* Printing the rows what i have -- but complicate method
if ($num>0) {
    $row = mysqli_fetch_assoc($result);
    echo "<br>";
    echo var_dump($row);
}
if ($num>0) {
    $row = mysqli_fetch_assoc($result);
    echo "<br>";
    echo var_dump($row);
}
if ($num>0) {
    $row = mysqli_fetch_assoc($result);
    echo "<br>";
    echo var_dump($row);
}
if ($num>0) {
    $row = mysqli_fetch_assoc($result);
    echo "<br>";
    echo var_dump($row);
} */
 //Easy method of print the rows
 while ($row = mysqli_fetch_assoc($result)) {
     echo "Hello - " .$row['name']. ", your phone numbers is - " .$row['phone'] .", and your email is - " .$row['email'] ;
     echo "<br>";
 }
?>