<?php
/*Allows to insert  new record or update existed record*/
session_start();

//check if form called by save button
if (isset($_POST['save'])) {

	//db connection
	require 'connection.php';

	//store variables
	$id = $_SESSION['Id'];

	$title = $_POST['title'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$source = $_POST['source'];

	/*if record Id has value than update query should be performed*/
	if ($_POST['recordId'] != ""){

		//prepare update query template
 		$sql = "UPDATE passwordkeys SET title = ?, username = ?, password = ?, source = ? WHERE id = '".$_POST['recordId']."'";
 		$stmt = mysqli_stmt_init($conn);
 		if (!mysqli_stmt_prepare($stmt, $sql)){
			header("Location:../MainPageStructure.php?error = sqlerror");
	 		exit();
 		} else {
 			//bind parameters
 			mysqli_stmt_bind_param($stmt, "ssss", $title, $username, $password, $source); 	}

	} else {

		//prepare insert query template
		$sql = "INSERT INTO passwordkeys (userID, title, username, password, source) VALUES (?,?,?,?,?)";	
		$stmt = mysqli_stmt_init($conn);

		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../MainPageStructure.php?error = sqlerror");
			exit();
		} else {
			//bind parameters
			mysqli_stmt_bind_param($stmt, "sssss", $id, $title, $username, $password, $source);
		}		
	}	

	//execute query
	mysqli_stmt_execute($stmt);
	//close
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	//redirect
	header("Location:../MainPageStructure.php");


} else {

	header("Location:../MainPageStructure.php");
}


