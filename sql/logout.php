<?php
echo "Log out";

//Clears the sessoin variables and destoryes the session. 
session_start();
session_unset();
session_destroy();

//redirect back to the index.php
header("location: ../index.php");