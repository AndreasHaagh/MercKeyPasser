<?php
session_start();

if (isset($_POST['save'])) {

	//db connection
	require 'connection.php';

	//store variables
	$id = $_SESSION['Id'];

	$title = $_POST['title'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$source = $_POST['source'];

	# insert query
	$sql = "INSERT INTO passwordkeys (userID, title, username, password, source) VALUES (?,?,?,?,?)";	
	$stmt = mysqli_stmt_init($conn);

	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location: ../MainPageStructure.php?error = sqlerror");
		exit();
	} else {
		mysqli_stmt_bind_param($stmt, "sssss", $id, $title, $username, $password, $source);
	}

	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	header("Location:../MainPageStructure.php");

} else {

	header("Location:../MainPageStructure.php");
}


