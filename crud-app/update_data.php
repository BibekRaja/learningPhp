<?php
include('header.php');
include('includes/Database/dbconn.inc.php');
?>

<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $query = "select * from `students` where `id` = '$id'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("query failed " . mysqli_error());

    } else {
        $row = mysqli_fetch_assoc($result);
        // print_r($row);
    }
}

?>

<?php

if (isset($_POST['update_students'])) {
    if (isset($_GET['id_new'])) {
        $idnew = $_GET['id_new'];
    }
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $age = $_POST['age'];

    $query = "update `students` set `first_name` = '$f_name', `last_name` = '$l_name', `age` = '$age' where `id` = '$idnew' ";

    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("query failed " . mysqli_error());

    } else {
        header('location: index.php?update_msg=You have successfully updated the data');
    }
}

?>

<form action="update_data.php?id_new=<?php echo $id; ?>" method="post">
    <div class="form-group">
        <label for="f_name" class="form-label">First Name</label>
        <input type="text" name="f_name" class="form-control" value="<?php echo $row['first_name']; ?>">
    </div>
    <div class="form-group">
        <label for="l_name" class="form-label">Last Name</label>
        <input type="text" name="l_name" class="form-control" value="<?php echo $row['last_name']; ?>">
    </div>
    <div class="form-group">
        <label for="age" class="form-label">Age</label>
        <input type="number" name="age" class="form-control" value="<?php echo $row['age']; ?>">
    </div>
    <input type="submit" class="btn btn-success" name="update_students" value="UPDATE">
</form>


<?php include('footer.php'); ?>