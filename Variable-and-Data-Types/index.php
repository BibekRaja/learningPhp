<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable and Data Types</title>
</head>
<body>
    
    <?php
    // variable
    $name = 'variable start with $ sign like "$name"';
    echo $name;

    // data type

    // Scalar Type (contains one value)
    $string = "Text";
    $int = 123456;
    $float = 2.6754;
    $bool = true;

    //  Array type
    $names = ["Bibek", "Raja", "Poudyal"];
    
    echo "String: $string";
?>
   <p>String: <?php echo $string;?></p>
   <p>Integer: <?php echo $int;?></p>
   <p>Float: <?php echo $float;?></p>
   <p>Boolean: <?php echo $bool;?></p>
   <p>Array: <?php echo var_dump($names);?></p>
    
    
    
</body>
</html>