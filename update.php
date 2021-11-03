<?php
    // including connection page 
    include 'env.php';

    if (isset($_GET['edit'])) {
    
    $id = $_GET['edit'];
    $query = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($conn, $query) or die("We Can not get the data".mysqli_error($conn));
    $users = mysqli_fetch_assoc($result);
    if($result) echo "<br>We got the data";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add-users</title>
</head>
<body>
<br>
<hr>
<?php 
   if (isset($_POST['submit'])) {

    // taking data from table to update
    $fullname = strip_tags($_POST['fullname']);
    $username = strip_tags($_POST['username']);
    $email = strip_tags($_POST['email']);
    $password = strip_tags($_POST['password']);

    // Adding SQl Put Query 
    $sql = "UPDATE users SET fullname = '$fullname', username = '$username', email = '$email', password = '$password' WHERE id = $id";

    // Firing mysqli Query
    $result = mysqli_query($conn, $sql) or die("Can not update data into database. ".mysqli_error($conn));

    // Printing Success message on update php
    if($result) 
    { 
        header("Location:home.php");
    }
}
?>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        Name : <input type="text" name="fullname" id="fullname" value="<?php echo $users['fullname']?>" required><br><br>
        Username : <input type="text" name="username" id="username" value="<?php echo $users['username']?>" required><br><br>
        Email : <input type="email" name="email" id="email" value="<?php echo $users['email']?>" required><br><br>
        Password : <input type="password" name="password" value="<?php echo $users['password']?>" required><br><br>
        <button type="submit" name="submit">UPDATE</button>
    </form>
</body>
</html>