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
            header('Location: ../homepage/index.php');
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