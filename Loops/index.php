<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>

<body>


    <?php

    // for loop--------------
    echo "For Loop: <br>";
    for ($i = 1; $i <= 5; $i++) {

        echo "Hello World!" . "<br>";

    }
    echo "<br>";


    // while loop ------------
    echo "While Loop: <br>";
    while ($a <= 5) {
        echo "Hello World!" . "<br>";
        $a++;
    }
    echo "<br>";

    // do while loop -----------
    echo "Do While Loop: <br>";
    $test = 10;
    do {
        echo "Hello World!" . "<br>";
        $test++;
    } while ($test < 10);
    echo "<br>";

    // foreach loop -----------
    
    // foreach loop for normal arrya
    echo "Foreach Loop for normal array: <br>";
    $fruits = ["apple", "mango", "banana"];

    foreach ($fruits as $fruit) {

        echo $fruit . "<br>";
    }
    echo "<br>";

    // foreach loop for associative array
    echo "Foreach Loop for associative array: <br>";
    $fruitsColor = [
        "Apple" => "Red",
        "Banana" => "Yellow",
        "Orange" => "Orange"
    ];

    foreach ($fruitsColor as $fruit => $color) {
        echo "The color of " . $fruit . " is " . $color . "<br>";
    }



    ?>

</body>

</html>