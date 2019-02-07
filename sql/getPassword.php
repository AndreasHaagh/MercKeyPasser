<?php
require 'connection.php';
session_start();

if (isset($_GET["RowId"]) && isset($_SESSION["Username"])) {
    $rowId = $_GET["RowId"];
    $username = $_SESSION["Username"];
} else {
    header("location: ../MainPageStructure.php");
    die();
}

$sql = "SELECT Password FROM passwordKeys WHERE Id = ". $rowId ." AND Username = '". $username ."'";

if ($result = $conn->query($sql)) {
    $row_count = $result->num_rows;

    if ($row_count <= 0) {
        echo 'no row with that id';
        header("location: ../MainPageStructure.php");
        die();
    }

    while ($row = $result->fetch_assoc()) {
        $jsonResult = json_encode($row);
        echo $jsonResult;
    }
} else {
    // header("location: ../MainPageStructure.php");
}