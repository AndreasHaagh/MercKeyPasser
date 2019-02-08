<?php
session_start();

//Checks if the user is loged in
function isLogged() {
    if (isset($_SESSION["Id"])) {
        return TRUE;
    } else {
        return FALSE;
    }
}

//Checks when the last time the user was active. if it is 30 min then return "logout"
function checkActiveTime() {
    $logLength = 1800;
    $ctime = strtotime("now");

    if (!isset($_SESSION["lastActive"])) {
        $_SESSION["lastActive"] = $ctime;
        return "Stay";
    } else {
        if (((strtotime("now") - $_SESSION["lastActive"]) > $logLength) && isLogged()) {
            return "Logout";
        } else {
            $_SESSION["lastActive"] = $ctime;
            return "Stay";
        }
    }
}

print_r(checkActiveTime());