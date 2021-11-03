<?php 
    define("HOSTNAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DBNAME", "test");
    $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);

    if ($conn) {
        echo "You are connected";
    }
?>