<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions and Control Structures</title>
</head>

<body>


    <?php

    $bool = true;
    $a = 1;
    $b = 2;


    // if , else if , else statement
    echo "If else: <br>";
    if ($a < $b && !$bool) {
        echo "First condition is true";
    } else if ($a > $b && $bool) {
        echo "Second condition is true";
    } else {
        echo "Both conditions are false";
    }
    echo "<br>";


    // switch statement
    echo "Switch: <br>";
    switch ($b) {
        case 1:
            echo "The first switch case is correct";
            break;

        case 2:
            echo "The second swith is correct";
            break;

        default:
            echo "none of the switch condition is correct";
    }
    echo "<br>";

    // match
    echo "match: <br>";
    $result = match ($a) {
        1, 3, 5 => "First conditon is true",
        2 => "Second condition is true",
        default => "None match",
    };

    echo $result;
    ?>



</body>

</html>