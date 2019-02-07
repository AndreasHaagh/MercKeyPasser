<?php

// get record from database after choosed record id
if (isset($_POST['recordId'])){

	//db connection
	require 'connection.php';
	//query
	$sql = "SELECT * FROM passwordkeys WHERE id = '".$_POST["recordId"]."'";
	//execute query
	$result = mysqli_query($conn, $sql);
	//store data into array
	$row = mysqli_fetch_array($result);
	//encode array into json and send it back
	echo json_encode($row);
}