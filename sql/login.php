<?php
require "connection.php";

if (!empty($_POST["Username"]) && !empty($_POST["Password"])) {
    $username = mysqli_real_escape_string($conn, $_POST["Username"]);
    $password = mysqli_real_escape_string($conn, $_POST["Password"]);
} else {
    header("location: ../home.php?errMsg=Login_error_-_No_username_or_password!");
    die();
}

if ($result = $conn->query("SELECT * FROM Users WHERE name ='". $username ."'")) {
    $row_count = $result->num_rows;

    if ($row_count <= 0) {
        header("location: ../home.php?errMsg=Login_error_-_There_is_no_user_named_". $username ."!");
        die();
    }

    while ($row = $result->fetch_assoc()) {
        if ($row['Password'] == "Password1") {
            $password_hashed = password_hash($row["Password"], PASSWORD_DEFAULT);
            $sql = "UPDATE Users SET Password = '". $password_hashed ."'";
            if ($conn->query($sql)) {
                echo "hased password";
            }
        }

        if (password_verify($password, $row["Password"])) {
            session_start();
            $_SESSION["Id"] = $row["Id"];
            $_SESSION["Username"] = $row["name"];
            header("location: ../MainPageStructure.php");
            die();
        } else {
            header("location: ../home.php?errMsg=Login_error_-_Wrong_password!");
        }
    }
}