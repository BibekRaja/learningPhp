<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Using PHP</title>
</head>

<body>

    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <input type="number" name="num1" placeholder="First Number">
        <select name="operator">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mul">*</option>
            <option value="div">/</option>
        </select>
        <input type="number" name="num2" placeholder="Second Number">
        <button>Calculate</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Grab data from form
    
        $num1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_FLOAT);   // sanitizing the input data so that no other data is submitted.
        $num2 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_NUMBER_FLOAT);
        $operator = filter_input(INPUT_POST, "operator", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        // Error Handlers
        $errors = false;

        if (empty($num1) || empty($num2) || empty($operator)) {
            echo "fill all forms";
            $errors = true;
        }

        if (!is_numeric($num1) || !is_numeric($num2)) {
            echo "put numbers only";
            $errors = true;
        }

        // Calculate if no errors
    
        if (!$errors) {
            $value = 0;
            switch ($operator) {
                case "add":
                    $value = $num1 + $num2;
                    break;
                case "sub":
                    $value = $num1 - $num2;
                    break;
                case "mul":
                    $value = $num1 * $num2;
                    break;
                case "div":
                    $value = $num1 / $num2;
                    break;
                default:
                    echo "Something went wrong";

            }

            echo "Result " . $value;
        }
    }

    ?>

</body>

</html>