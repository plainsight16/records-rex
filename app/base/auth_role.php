<?php
    session_start();
    $role = "";
    $first_name = $_SESSION["user_first_name"];
    $last_name = $_SESSION["user_last_name"];
    if ($_SESSION['user_role'] == 2) {
        $role = "Employee, ";
    } else {
        $role= "Admin, ";
    }

    echo $role;
    echo $first_name . " " . $last_name;
