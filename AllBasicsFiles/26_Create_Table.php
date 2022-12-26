<?php
echo "Reading here about connections <br>";
//Connecting variables
$serverName = 'localhost';
$userName = 'root';
$password = '123456';
$database = 'dbharry';

//Connected to the all vars
$conn = mysqli_connect($serverName, $userName, $password,$database);
if (!$conn) {
    die(`Sorry for connection is failed: `.mysqli_connect_error());
}
else {
    # code...
    echo "connect was successfully";
}

//creating the database
$sql = 'create table test(name varchar(20), age int(2))';
$result = mysqli_query($conn,$sql);
if ($result) {
    echo "Created successfully";
}
else {
    echo "not creating";
}
?>