<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_pdo";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",
     $username, $password);
    // Set the PDO errorr mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO peserta (nama, email) VALUES 
    ('Farah', 'farah@gmail.com'),('Andi','andi@gmail.com')";
    // Use Exec() Because no result are returned
    $conn->exec($sql);
    echo "New Record Created Successfully";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;

?>