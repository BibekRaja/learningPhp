<?php

require_once 'includes/Session/config_session.inc.php';
require_once 'includes/Signup/mvc/signup_view.inc.php';
require_once 'includes/Login/mvc/login_view.inc.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup in PHP</title>
    <style>
        body {
            display: flex;
            place-content: center;
        }

        .form-container {
            width: 550px;
            border: 1px solid;
            border-radius: 8px;
            padding: 24px;
            margin-top: 50px;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 500px;
            gap: 12px;
        }

        form input,
        form button {
            padding: 10px 24px;
            border: 1px solid;
            border-radius: 16px;
        }

        form button {
            background-color: green;
            color: #fff;
            border-color: green;
            cursor: pointer;
            width: 200px;
        }
    </style>
</head>

<body>
    <?php if (!isset($_SESSION["user_id"])) { ?>
        <div class="form-container">
            <h3>Signup</h3>

            <form action="includes/Signup/signup.inc.php" method="post">
                <?php
                signup_inputs()
                    ?>
                <button>Signup</button>
            </form>
            <?php
            check_signup_error();
            ?>
        </div>

    <?php } ?>
    <?php

    if (!isset($_SESSION["user_id"])) { ?>
        <div class="form-container">

            <h3>Login</h3>

            <form action="includes/Login/login.inc.php" method="post">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <button>Login</button>
            </form>

            <?php
            check_login_errors();
            ?>
        </div>
    <?php } else {
        output_username();
    }

    ?>





    <?php if (isset($_SESSION["user_id"])) { ?>
        <form action="includes/Logout/logout.inc.php" method="post">

            <button>Logout</button>
        </form>

    <?php } ?>

</body>

</html>