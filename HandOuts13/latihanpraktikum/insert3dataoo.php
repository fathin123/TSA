<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_oo";

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check Connection
if ($conn->connect_error) {
    die("Connection filed: " . $conn->connect_error);
}

// SQL to Create Table
$sql = "INSERT INTO peserta (nama, email) VALUES 
('Muhammad Dhiyaul Auliya', 'mdhiyaul5@gmail.com'),
('Fathin Naufaliya','fathinnaufaliya@gmail.com'),
('Lodi','lodi@gmail.com')";

if ($conn->query($sql) === TRUE) {
    echo "New Record Created Successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;; 
}

$conn->close();

?>