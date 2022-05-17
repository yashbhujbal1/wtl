<?php

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbyash";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

// Variables to be inserted into the table
$name = "Yash";
$age = 24;
$gender = "male";
$salary = 50000;

// Sql query to be executed
$sql = "INSERT INTO `employee` (`name`, `age`, `gender`, `salary`) VALUES ('$name', '$age', '$gender', '$salary')";
$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the database
if($result){
    echo "The record has been inserted successfully successfully!<br>";
}
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}
?>
