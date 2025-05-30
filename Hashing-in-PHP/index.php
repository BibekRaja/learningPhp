<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hashing in PHP</title>
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
    <div class="form-container">
        <h3>Signup</h3>

        <form action="includes/formhandler.inc.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <input type="email" name="email" placeholder="E-mail">
            <button>Signup</button>
        </form>
    </div>
    <?php

    ?>

</body>

</html>