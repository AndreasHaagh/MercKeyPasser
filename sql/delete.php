<?php
require 'connection.php';

//Checks if passwordKeyId is sat
if (isset($_POST["passwordKeyId"])) {
    $id = $_POST["passwordKeyId"];
} else {
    echo "Error missing row id";
    header("location: ../MainPageStructure.php");
    die();
}

$sql = "DELETE FROM passwordKeys WHERE Id = ". $id ."";

//Deletes the row
if ($conn->query($sql)) {
    echo "row deleted";
    header("location: ../MainPageStructure.php");
}