<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try {

        require_once "dbh.inc.php";
        // storing data using not name parameter
        /* 
        $query = "INSERT INTO users (username, pwd, email) VALUES 
         (?, ?, ?);";

         $stmt = $pdo->prepare($query);

         $stmt->execute([$username, $pwd, $email]);
         */

        // storing data using name parameters

        $query = "INSERT INTO users (username, pwd, email) VALUES 
        (:username, :pwd, :email);";

        $stmt = $pdo->prepare($query);

        // Password Hashing

        $options = [
            'cost' => 12
        ];

        $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

        // -----------

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $hashedPwd);
        $stmt->bindParam(":email", $email);

        $stmt->execute();


        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");

        die();

    } catch (PDOExeption $e) {
        die("Query failed: " . e->getMessage());
    }

} else {
    header("Location: ../index.php");
}