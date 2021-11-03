<?php
    // including connection page 
    include 'env.php';

    if (isset($_POST['submit'])) {

        // defining methods and variable with STRIP_TAGS
        $fullname = strip_tags($_POST['fullname']);
        $username = strip_tags($_POST['username']);
        $email = strip_tags($_POST['email']);
        $password = strip_tags($_POST['password']);

        $fullname_valid = false; $username_valid = false;  $email_valid = false; $password_valid = false;

    // Check full name
    if(!empty(trim($fullname))) {
        if(!preg_match('/[^a-zA-Z\s]/', $fullname)) {
            if (strlen($fullname) > 0 && strlen($fullname) <= 30 ) {
                $fullname_valid = true;
            } else {
                echo "fullname should contain less than or equal to 30 charachters ";
            }
        } else {
            echo "It should contain only alphabets<br>";
        }
    } else {
        echo "It shouldn't be empty<br>";
    }

    // Check Username
    if(!empty(trim($username))) {
        if(strlen($username) <= 30) {
            if(!preg_match('/[^a-zA-Z\d_.]/', $username)) {
                $username_valid = true;
            } else {
                echo "It can contain alphabets, digits, Underscore, at the rate<br>";
            }
        } else {
            echo "fullname should contain less than or equal to 30 charachters<br>";
        }
    } else {
        echo "It shouldn't be empty<br>";
    }

    // Check email
    if(!empty(trim($email))) {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_valid = true;
        } else {
            echo "Invalid Email";
        }
    } else { 
        echo "It shouldn't be empty<br>" ;
    }

    // Check Password
    if(!empty(trim($password))) {
        if(strlen($password) <= 10) {
            if(!preg_match('/[^a-zA-Z\d_.]/', $password)) {
                $password_valid = true;
                $password = md5($password);
            } else {
                echo "It can contain alphabets, digits, Underscore, at the rate<br>";
            }
        } else {
            echo "Your password should contain less than or equal to 10 charachters<br>";
        }
    } else {
        echo "It shouldn't be empty<br>";
    }
        //Validating using Regex
        //Validating email using filter var and FILTER VALIDATE EMAIL
        //Validating string length 
        
    if ($fullname_valid && $username_valid && $email_valid && $password_valid) {
            // Adding SQl Post Query 
            $sql = "INSERT INTO users(fullname,username,email,password) VALUES 
            ('$fullname', '$username', '$email', '$password')";

            // Firing mysqli Query
            $result = mysqli_query($conn, $sql) or die("Can not insert data into database. ".mysqli_error($conn));

            // Printing Success message on add php
            if($result) echo "Data Submitted to Database.";
        }
        
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
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        Name : <input type="text" name="fullname" id="fullname" ><br><br>
        Username : <input type="text" name="username" id="username" ><br><br>
        Email : <input type="email" name="email" id="email" ><br><br>
        Password : <input type="password" name="password" ><br><br>
        <button type="submit" name="submit">SUBMIT</button>
    </form>
</body>
</html>