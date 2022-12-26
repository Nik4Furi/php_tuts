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
?>