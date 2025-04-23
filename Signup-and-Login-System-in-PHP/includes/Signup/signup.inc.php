<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try {

        require_once '../Database/dbh.inc.php';
        require_once './mvc/signup_model.inc.php';
        require_once './mvc/signup_contr.inc.php';

        // error handlers

        $errors = [];

        if (is_input_empty($username, $pwd, $email)) {
            $errors["empty_input"] = "Fill in all fields!";
        }
        if (is_email_invalid($email)) {
            $errors["invalid_email"] = "Invaild Email used!";
        }
        if (is_username_taken($pdo, $username)) {
            $errors["username_taken"] = "Username already taken!";
        }
        if (is_email_registered($pdo, $email)) {
            $errors["email_used"] = "Email already used!";
        }

        require_once '../Session/config_session.inc.php';
        if ($errors) {
            $_SESSION["errors_signup"] = $errors;

            //storing data input by the user when error occurs
            $signupData = [
                "username" => $username,
                "email" => $email
            ];

            $_SESSION["signup_data"] = $signupData;

            header("Location: ../../index.php");
            die();
        }



        // signup process

        create_user($pdo, $username, $pwd, $email);

        header("Location: ../../index.php?signup=success");

        $pdo = null;
        $stmt = null;

        die();

    } catch (PDOException $e) {
        die("Query failed:" . $e->getMessage());
    }
} else {
    header("Location: ../../index.php");
    die();
}