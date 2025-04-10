<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>

<body>

    <?php

    // string operator
    
    $a = "Hello";
    $b = "World!";

    $c = $a . " " . $b; // . is used for concatinating two or more strings
    echo $c;
    echo "<br>";

    // Arithmetic operator
    
    echo 10 % 3; //modulus
    echo "<br>";
    echo 10 ** 3; //power
    echo "<br>";

    // others are
    // + , - , * , / 
    // = is assignment operator
    // +=, -=, *=, /=
    
    // comparison operator
    // ==, => , <= , !=, < , >
    
    // logical operator
    // (&& , and) = AND , ( || , or) = OR,  ( ! ) NOT
    $d = 2;
    $e = 3;
    if ($d <= $e && gettype($d) === gettype($e)) {
        echo "done";
    } else {

        echo "none";
    }

    // increment and decrement operators
    // ++ , --
    $i = 10;
    echo ++$i . "<br>"; //pre increment
    echo $i . "<br>";
    echo $i++ . "<br>"; //post increment
    echo $i . "<br>";
    echo --$i . "<br>"; //pre drecement
    echo $i . "<br>";
    echo $i-- . "<br>"; //post decrement
    echo $i . "<br>";
    ?>

</body>

</html>