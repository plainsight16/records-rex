<?php
    session_start();
    $admin = 1;

    $role = $_SESSION['user_role'];
    if ($role != $admin) {
        header("Location: ../employee");
    }
