<?php
require 'connection.php';
session_start();

//Checks if the RowId and session id is sat
if (isset($_GET["RowId"]) && isset($_SESSION["Id"])) {
    $rowId = $_GET["RowId"];
    $userid = $_SESSION["Id"];
} else {
    header("location: ../MainPageStructure.php");
    die();
}

$sql = "SELECT Password FROM passwordKeys WHERE Id = ". $rowId ." AND UserId = '". $userid ."'";

if ($result = $conn->query($sql)) {
    $row_count = $result->num_rows;

    //Checks if the row exists
    if ($row_count <= 0) {
        echo 'no row with that id';
        header("location: ../MainPageStructure.php");
        die();
    }

    //Echo out the password in a json format
    while ($row = $result->fetch_assoc()) {
        $jsonResult = json_encode($row);
        echo $jsonResult;
    }
} else {
    header("location: ../MainPageStructure.php");
}