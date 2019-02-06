<?php
require 'connection.php';

if (isset($_POST["passwordKeyId"])) {
    $id = $_POST["passwordKeyId"];
} else {
    echo "Error missing row id";
    header("location: ../MainPageStructure.php");
    die();
}

$sql = "DELETE FROM passwordKeys WHERE Id = ". $id ."";

if ($conn->query($sql)) {
    echo "row deleted";
    header("location: ../MainPageStructure.php");
}