<?php
include("../config/db_connection.php");


if(isset($_GET['ID'])){
    $delete_query = "DELETE FROM users WHERE id = $_GET[ID]";

    $result = mysqli_query($connection, $delete_query);

    header("location: read.php");
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch</title>
</head>
<body>
    <br>
    <a href="create.php">Add new User</a>
    <table border="1" cellspacing = "0" cellpadding = "5">
        <tr>
            <th>Name</th>
            <th>Message</th>
            <th>Action</th>
        </tr>

        <?php
        $select_query = "SELECT * FROM users";
        $result = mysqli_query($connection, $select_query);

        while($display = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $display['name']?></td>
            <td><?php echo $display['message']?></td>
            <td>
                <a href="update.php?ID=<?php echo $display['id']?>">Edit</a>
                <a href="?ID=<?php echo $display['id']?>">Delete</a>
            </td>
        </tr>
        <?php
        }
        ?>
        


    </table>



</body>
</html>