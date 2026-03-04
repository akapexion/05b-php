<?php
include("../config/db_connection.php");

if(isset($_POST['submitBtn'])){
    $nameFieldValue = $_POST['nameField'];
    $messageFieldValue = $_POST['messageField'];

    $insert_query = "INSERT INTO users(name, message) VALUES('$nameFieldValue', '$messageFieldValue')";

    $result = mysqli_query($connection, $insert_query);

    header("location: read.php");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>

<body>

    <form method="POST">
        <label for="">Name</label>
        <input type="text" name="nameField">

        <br>

        <label for="">Message</label>
        <textarea name="messageField"></textarea>

        <br>

        <button name="submitBtn">Submit</button>
    </form>


</body>

</html>