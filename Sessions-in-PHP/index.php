<?php

// starting session on the page
session_start();                
$_SESSION["username"] = "Bibek";        // initilizing specific session

// unset($_SESSION["username"]);   unseting/deleting specific session data 
// session_unset();                 deleting all session data

// session_destroy();           only delete session on other page, not on this page     



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>

<body>

    <?php
    echo $_SESSION["username"];
    ?>

</body>

</html>