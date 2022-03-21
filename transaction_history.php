<?php

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "Sparks_Foundation_Bank";


// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}


$sql = "CREATE TABLE `Transaction_History` ( `Sr_No` INT(6) NOT NULL AUTO_INCREMENT ,  `Receiver_Email` VARCHAR(30) NOT NULL , 
`Account_No` BIGINT(10) NOT NULL, `Amount` FLOAT(10) NOT NULL, `Date` VARCHAR(10) NOT NULL, PRIMARY KEY(`Sr_No`))";
$result = mysqli_query($conn, $sql);


// Check for the table creation success
if($result){
    echo "The table was created successfully!<br>";
}
else{
    echo "The table was not created successfully because of this error ---> ". mysqli_error($conn);
}


$sql = "INSERT INTO `Transaction_History` ( `Sr_No` , `Receiver_Email` , `Account_No` , `Amount` , `Date` ) VALUES ( '1' , 'rohit@gmail.com', '4545454545', '5000', '10-03-2022')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `Transaction_History` ( `Receiver_Email` , `Account_No` , `Amount` , `Date` ) VALUES ( 'shikhar@gmail.com', '2525252525', '10000', '10-03-2022')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `Transaction_History` ( `Receiver_Email` , `Account_No` , `Amount` , `Date` ) VALUES ( 'virat@gmail.com', '1818181818', '8000.00', '11-03-2022')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `Transaction_History` ( `Receiver_Email` , `Account_No` , `Amount` , `Date` ) VALUES ( 'shreyas@gmail.com', '4141414141', '7000.00', '12-03-2022' )";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `Transaction_History` ( `Receiver_Email` , `Account_No` , `Amount` , `Date` ) VALUES ( 'rishabh@gmail.com', '1717171717', '4000.00', '13-03-2022')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `Transaction_History` ( `Receiver_Email` , `Account_No` , `Amount` , `Date` ) VALUES ( 'ravindra@gmail.com', '8888888888', '5000.00', '13-03-2022')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `Transaction_History` ( `Receiver_Email` , `Account_No` , `Amount` , `Date` ) VALUES ( 'ashwin@gmail.com', '9999999999', '6000.00', '14-03-2022')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `Transaction_History` ( `Receiver_Email` , `Account_No` , `Amount` , `Date` ) VALUES ( 'dhoni@gmail.com', '7777777777', '9000.00', '15-03-2022')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `Transaction_History` ( `Receiver_Email` , `Account_No` , `Amount` , `Date` ) VALUES ( 'bhuvi@gmail.com', '1515151515', '8000.00', '15-03-2022')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `Transaction_History` ( `Receiver_Email` , `Account_No` , `Amount` , `Date` ) VALUES ( 'bumrah@gmail.com', '9393939393', '1000.00', '16-03-2022')";
mysqli_query($conn, $sql);


?>
