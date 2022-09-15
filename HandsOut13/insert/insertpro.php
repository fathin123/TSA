<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_pro";

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check Connection
if (!$conn) {
    die("Connection filed: " . mysqli_connect_error());
}

// SQL to Create Table
$sql = "INSERT INTO peserta (nama, email) VALUES 
('Farah', 'farah@gmail.com'),('Andi','andi@gmail.com')";

if ($conn->query($sql) === TRUE) {
    echo "New Record Created Successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
}

mysqli_close($conn);

?>