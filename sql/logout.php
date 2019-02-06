<?php
echo "Log out";
session_start();
session_unset();
session_destroy();
header("location: ../home.php");