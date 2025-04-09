<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP Form</title>
</head>

<body>
    <main>
        <form action="includes/formhendler.php" method="post">
            <label for="firstname">Firstname</label>
            <input type="text" name="firstname" id="firstname" placeholder="Firstname">

            <label for="lastname">Lastname</label>
            <input type="text" name="lastname" id="lastname" placeholder="Lastname">

            <label for="favpet">Favourite Pet</label>
            <select name="favpet" id="favpet">
                <option value="none">None</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
            </select>

            <button type="submit">Submit</button>
        </form>
    </main>
</body>

</html>