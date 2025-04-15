<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Defined Function</title>
</head>

<body>

    <?php

    function sayHello($name)
    {
        return "Hello " . " " . $name;
    }

    $test = sayHello("Bibek");
    echo $test;
    ?>

</body>

</html>