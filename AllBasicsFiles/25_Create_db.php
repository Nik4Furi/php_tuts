<?php
echo "Reading here about connections <br>";
//Connecting variables
$serverName = 'localhost';
$userName = 'root';
$password = '123456';

//Connected to the all vars
$conn = mysqli_connect($serverName, $userName, $password);
if (!$conn) {
    die(`Sorry for connection is failed: `.mysqli_connect_error());
}
else {
    # code...
    echo "connect was successfully";
}

//creating the database
$sql = 'create database dbharry';
$result = mysqli_query($conn,$sql);
if ($result) {
    echo "Created successfully";
}
else {
    echo "not creating";
}
?>