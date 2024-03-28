<?php
    session_start();
    $role = $_SESSION['role'];
    if ($role == 2) {
        echo '<a href="../homepage/employee">Records</a>';
    } else {
        echo '<a href="../homepage/admin">Records</a>';
    }
