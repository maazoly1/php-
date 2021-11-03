<?php 
    include 'env.php';
    // $sql = "SELECT * FROM users"; 
    // $result = mysqli_query($conn, $sql);
    // echo "&nbspAnd no.of rows in database is " .mysqli_num_rows($result);

    //Deleting Particular data from database
    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        $sql = "DELETE FROM users WHERE id = $id";
        $result = mysqli_query($conn, $sql) or die('&nbspcan not delete from database'. mysqli_error($conn));
        if($result) echo "&nbspData deleted successfully";
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    
    <hr>
    <br>
<table border="2">
        <thead>
            <tr>
                <th>id</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>    
        <tbody>
        <?php 

        // POST Part
        $sql = "SELECT * FROM users"; 
        $result = mysqli_query($conn, $sql);
        echo "&nbspAnd no.of rows in database is " .mysqli_num_rows($result);

        // EDIT Part

        // DELETE Part
            if(mysqli_num_rows($result) > 0) {           
            while($users = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?php echo $users['id'] ?></td>
                <td><?php echo $users['fullname'] ?></td>
                <td><?php echo $users['username'] ?></td>
                <td><?php echo $users['email'] ?></td>
                <td><?php echo $users['password'] ?></td>
                <td><a href="update.php?edit=<?php echo $users['id']?>">EDIT</a><a href="<?php $_SERVER['PHP_SELF'] ?>?del=<?php echo $users['id'] ?>">DELETE</a>
                </td>
            </tr>
        <?php 
            }}
        ?>
        </tbody>
    </table>
    <br>
    <button type="submit"><a href="add.php">Add Users</a></button>
</body>
</html>