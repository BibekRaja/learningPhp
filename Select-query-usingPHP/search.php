<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usersearch = $_POST["usersearch"];


    try {

        require_once "includes/dbh.inc.php";


        $query = " SELECT * FROM comments WHERE username = :usersearch;";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":usersearch", $usersearch);


        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;
        $stmt = null;

    } catch (PDOExeption $e) {
        die("Query failed: " . e->getMessage());
    }

} else {
    header("Location: index.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>

<body>

    <h3>Search Results</h3>

    <?php

    if (empty($result)) {
        echo "<div>";
        echo "<p>There were no results!</p>";
        echo "</div>";
    } else {

        foreach ($result as $comment) {
            echo htmlspecialchars($comment["username"]);
            echo htmlspecialchars($comment["comment_text"]);
            echo htmlspecialchars($comment["created_at"]);
        }
    }

    ?>

</body>

</html>