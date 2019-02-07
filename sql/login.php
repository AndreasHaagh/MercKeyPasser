<?php
require "connection.php";

//Checks if there is a username and password
if (!empty($_POST["Username"]) && !empty($_POST["Password"])) {
    $username = mysqli_real_escape_string($conn, $_POST["Username"]);
    $password = mysqli_real_escape_string($conn, $_POST["Password"]);
} else {
    header("location: ../index.php?errMsg=Login_error_-_No_username_or_password!");
    die();
}

//Get the user based on the username
if ($result = $conn->query("SELECT * FROM Users WHERE name ='". $username ."'")) {
    $row_count = $result->num_rows;

    //Checks the username exists
    if ($row_count <= 0) {
        header("location: ../index.php?errMsg=Login_error_-_There_is_no_user_named_". $username ."!");
        die();
    }

    while ($row = $result->fetch_assoc()) {

        //Checks if the password is from the test data. if it is the hash the password
        if ($row['Password'] == "Password1") {
            $password_hashed = password_hash($row["Password"], PASSWORD_DEFAULT);
            $sql = "UPDATE Users SET Password = '". $password_hashed ."'";
            if ($conn->query($sql)) {
                echo "hased password";
            }
        }

        //If it is the right password the it starts a session and sets some session variables.
        if (password_verify($password, $row["Password"])) {
            session_start();
            $_SESSION["Id"] = $row["Id"];
            $_SESSION["Username"] = $row["name"];
            header("location: ../MainPageStructure.php");
            die();
        } else {
            header("location: ../index.php?errMsg=Login_error_-_Wrong_password!");
        }
    }
}