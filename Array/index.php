<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>

    <?php
    // Initilizing Array in php
    $fruits = array("Apple", "Orange", "Banana");
    $fruits2 = ["Apple", "Orange", "Banana"];

    // Both can be used as array
    
    echo $fruits2[1] . "<br>";

    // adding data to array
    $fruits2[] = "Cherry";

    echo $fruits2[3] . "<br>";
    print_r($fruits2);

    // Associative Array
    
    $task = [
        "laundry" => "Anish",
        "trash" => "Dipesh",
        "vacuum" => "Kushal",
        "dishes" => "Keshav",
    ];

    echo "<br>" . $task["trash"] . "<br>";
    print_r($task);

    echo count($fruits);
    echo count($task);

    // splice
    // merging an array into an another array using splice
    $test = ["Mango", "Strawberry"];
    array_splice($fruits, 2, 0, $test);
    echo "<br>";
    print_r($fruits);



    // multidimensional array
    
    $food = [
        array("Apple", "Mango"),
        "Banana",
        "Cherry"
    ];
    echo "<br>" . $food[0][0];


    $food2 = [
        "fruits" => ["apple", "mango", "banana"],
        "meat" => ["chicken", "fish", "mutton"],
        "vegetables" => ["test" => "cucumber", "test2" => "carrot"],
    ];
    echo "<br>" . $food2["vegetables"]["test"];

    ?>


</body>

</html>