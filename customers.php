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


$sql = "CREATE TABLE `Customers` ( `Sr_No` INT(6) NOT NULL AUTO_INCREMENT , `Name` VARCHAR(50) NOT NULL , `G_mail` VARCHAR(30) NOT NULL , `Account_No` BIGINT(10) NOT NULL, `Bank_Balance` FLOAT(10) NOT NULL, PRIMARY KEY(`Sr_No`))";
$result = mysqli_query($conn, $sql);


// Check for the table creation success
if($result){
    echo "The table was created successfully!<br>";
}
else{
    echo "The table was not created successfully because of this error ---> ". mysqli_error($conn);
}


$sql = "INSERT INTO `Customers` ( `Sr_No` , `Name` , `G_Mail` , `Account_No` , `Bank_Balance` ) VALUES ( '1' , 'Rohit sharma', 'rohit@gmail.com', '4545454545', '50000.00')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `Customers` ( `Name` , `G_Mail` , `Account_No` , `Bank_Balance` ) VALUES ( 'Shikhar Dhawan', 'shikhar@gmail.com', '2525252525', '40000.00')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `Customers` ( `Name` , `G_Mail` , `Account_No` , `Bank_Balance` ) VALUES ( 'Virat kohli', 'virat@gmail.com', '1818181818', '90000.00')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `Customers` ( `Name` , `G_Mail` , `Account_No` , `Bank_Balance` ) VALUES ('Shreyas Iyer', 'shreyas@gmail.com', '4141414141', '60000.00')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `Customers` ( `Name` , `G_Mail` , `Account_No` , `Bank_Balance` ) VALUES ('Rishabh Pant', 'rishabh@gmail.com', '1717171717', '70000.00')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `Customers` ( `Name` , `G_Mail` , `Account_No` , `Bank_Balance` ) VALUES ( 'Ravindra Jadeja', 'ravindra@gmail.com', '8888888888', '990000.00')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `Customers` ( `Name` , `G_Mail` , `Account_No` , `Bank_Balance` ) VALUES ( 'Ravi Ashwin', 'ashwin@gmail.com', '9999999999', '80000.00')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `Customers` ( `Name` , `G_Mail` , `Account_No` , `Bank_Balance` ) VALUES ( 'Mahendra Dhoni', 'dhoni@gmail.com', '7777777777', '77000.00')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `Customers` ( `Name` , `G_Mail` , `Account_No` , `Bank_Balance` ) VALUES ( 'Bhuvi Kumar', 'bhuvi@gmail.com', '1515151515', '45000.00')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `Customers` ( `Name` , `G_Mail` , `Account_No` , `Bank_Balance` ) VALUES ( 'Jasprit Bumrah', 'bumrah@gmail.com', '9393939393', '75000.00')";
mysqli_query($conn, $sql);


?>
