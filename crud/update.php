<?php
include("../config/db_connection.php");

if(isset($_POST['submitBtn'])){
    $nameFieldValue = $_POST['nameField'];
    $messageFieldValue = $_POST['messageField'];

    $update_query = "UPDATE users SET name = '$nameFieldValue', message = '$messageFieldValue' WHERE id = $_GET[ID]";

    $result = mysqli_query($connection, $update_query);

    header("location: read.php");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>

<body>

    <?php
    $select_query = "SELECT * FROM users WHERE id = $_GET[ID]";
    $result = mysqli_query($connection, $select_query);

    $display = mysqli_fetch_array($result);
    ?>
    <form method="POST">
        <label for="">Name</label>
        <input type="text" name="nameField" value="<?php echo $display['name']?>">

        <br>

        <label for="">Message</label>
        <input type="text" name="messageField" value="<?php echo $display['message']?>">
        <br>

        <button name="submitBtn">Submit</button>
    </form>


</body>

</html>