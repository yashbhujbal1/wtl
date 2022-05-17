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

// Create a table in the db
$sql = "CREATE TABLE `employee` ( `name` VARCHAR(30) NOT NULL , `age` INT(4) NOT NULL , `gender` VARCHAR(6) NOT NULL , `salary` INT(10) NOT NULL)";
$result = mysqli_query($conn, $sql);

// Check for the table creation success
if($result){
    echo "The table was created successfully!<br>";
}
else{
    echo "The table was not created successfully because of this error ---> ". mysqli_error($conn);
}
  
?>
