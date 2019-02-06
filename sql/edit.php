<?php
session_start();

if (isset($_POST['save'])){

	//db connection
	require 'connection.php';

	//store variables
	$id = $_SESSION['Id'];
	$recordId = $_POST['Id'];

	$title = $_POST['title'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$source = $_POST['source'];

	//prepare query
	$sql = "UPDATE passwordkeys SET title = ?, username = ?, password = ?, source = ? WHERE userID = '$id' AND id = '$recordId'";
	$stmt = mysqli_stmt_init($conn);

	if (!mysqli_stmt_prepare($stmt, $sql)){
		header("Location:../MainPageStructure.php?error = sqlerror");
		exit();
	} else {
		mysqli_stmt_bind_param($stmt, "ssss", $title, $username, $password, $source);
	}

	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	header("Location:../MainPageStructure.php");



}