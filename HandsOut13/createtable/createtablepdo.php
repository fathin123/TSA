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
    $sql = "CREATE TABLE peserta (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(50) NOT NULL,
        email VARCHAR(50),
        tgl_registrasi TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE
        CURRENT_TIMESTAMP
    )";
    // Use Exec() Because no result are returned
    $conn->exec($sql);
    echo "Tabel peserta Created Successfully";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;

?>