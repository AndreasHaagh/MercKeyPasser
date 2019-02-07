<?php

if (isset($_POST['recordId'])){

	//db connection
	require 'connection.php';

	$sql = "SELECT * FROM passwordkeys WHERE id = '".$_POST["recordId"]."'";
	//$sql = "SELECT * FROM passwordkeys WHERE id = 3";
	$result = mysqli_query($conn, $sql);

	$row = mysqli_fetch_array($result);
	echo json_encode($row);
}