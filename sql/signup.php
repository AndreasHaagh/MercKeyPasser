<?php 
require "./connection.php";

//Checks if there is a username and password
if (!empty($_POST["Username"]) && !empty($_POST["Password"])) {
    $username = mysqli_real_escape_string($conn, $_POST["Username"]);
    $password = mysqli_real_escape_string($conn, $_POST["Password"]);
} else {
    header("location: ../index.php?errMsg=Sign_up_Error_-_No_username_or_password!");
    die();
}

//hashing the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO Users (name, Password) VALUES ('". $username ."', '". $hashed_password ."')";

//add the user to the Users table in the database
if (mysqli_query($conn, $sql)) {
    echo "New user record has been added to users tabel";
    header("Location: ../index.php");
} else {
    echo mysqli_error($conn);
}
