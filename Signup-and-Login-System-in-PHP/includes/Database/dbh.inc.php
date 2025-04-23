<?php

// $dsn = "mysql:host=localhost;dbname=myfirstPHPdatabase";
// $dbusername = "root";
// $dbpassword = "";

$host = 'localhost';
$dbname = 'myfirstPHPdatabase';
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;", $dbusername, $dbpassword); //connecting database
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed" . $e->getMessage());

}