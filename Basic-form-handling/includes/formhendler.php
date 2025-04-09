<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = htmlspecialchars($_POST["firstname"]); //always use htmlspecialchars in form so that no code is submitted on form... 
    $last_name = htmlspecialchars($_POST["lastname"]);
    $fav_pet = htmlspecialchars($_POST["favpet"]);

    if (empty($first_name) || empty($last_name) || empty($fav_pet)) {
        header("Location: ../index.php");
        exit();
    }


    echo "" . $first_name . " " . $last_name . " loves" . " " . $fav_pet;
    echo "<br>";
    echo " <a href='../index.php'>back</a>";
    // header("Location: ../index.php");
} else {
    header("Location: ../index.php");
}