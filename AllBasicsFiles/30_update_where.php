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
    echo "connect was successfully";
}

//select data using where the database
// $sql = 'select * from submit1 where name = "name"';
//updating the data
$sql = 'update submit1 set name="Rohan" where name="name"';
$result = mysqli_query($conn,$sql);
echo var_dump($result);
if ($result) {
    echo "Created successfully<br>";
}
else {
    echo "not creating ";
}
$num = mysqli_num_rows($result);
echo "The no of rows $num <br>";
$aff = mysqli_affected_rows($result);
echo "The no. of affected rows in the result $aff";
$no = 1;

if ($num>0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "SNo. ".$no ." Hello - " .$row['name']. ", your phone numbers is - " .$row['phone'] .", and your email is - " .$row['email'] ;
        echo "<br>";
        $no = $no + 1;
    }
}
?>