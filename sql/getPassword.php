<?php
require 'connection.php';
session_start();

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
    header("location: ../MainPageStructure.php");
}