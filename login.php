<?php
session_start();
// Establish a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db1";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }else{
//     echo "connection Successfull";
// }
//  GRANT ALL PRIVILEGES ON your_database_name.* TO 'root'@'localhost';

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query the database to check if the username and password are valid
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if($num == 1){

        $_SESSION['username'] = $username;
        header('location:home.html');   
    }
    else{
        echo "Invalid Username or password";
    }

    ?>

