<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "merckeypasser";

/* Create connection */
$conn = new mysqli($servername, $username, $password, $database);

/* Check connection */
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
<<<<<<< HEAD
//echo "Connected successfully";
=======
// echo "Connected successfully";
>>>>>>> 8045f9b031b66ff4f81425be8da1dc83d04e32f7
