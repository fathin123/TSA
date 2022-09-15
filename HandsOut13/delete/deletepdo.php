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
    $sql ="DELETE FROM peserta WHERE id=2";
    $conn->exec($sql);
    echo "Record Deleted Successfully";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>