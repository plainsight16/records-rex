<?php
require_once ('../db/dbconnect.php');

session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();


    if ($user) {
        if (password_verify(($password), $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_first_name'] = $user['first_name'];
            $_SESSION['user_last_name'] = $user['last_name'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_role'] = $user['role'];

            if ($user['role'] == 1) {
                $homepage_url = "../homepage/admin/index.php";
            } elseif ($user['role'] == 2) {
                $homepage_url = "../homepage/employee/index.php";
            } else {
                $_SESSION['error'] = "Invalid username or password";
                header("Location: ../../index.php");
                exit();
            }

            header("Location: $homepage_url");
            exit();
        } else {
            $_SESSION['error'] = "Invalid username or password";
            header("Location: ../../index.php"); // Redirect back to login page
            exit();
        }

    } else {
        $_SESSION['error'] = "Invalid username or password";
        header("Location: ../../index.php"); // Redirect back to login page
        exit();
    }

    $stmt->close();
    $conn->close();
}