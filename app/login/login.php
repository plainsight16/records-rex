<?php
require_once ('../db/dbconnect.php');

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
            echo "<div class='alert alert-danger'>Password does not match</div>";
        }

    } else {
        echo "<div class='alert alert-danger'>Email does not exist. Contact Admin</div>";
    }

    $stmt->close();
    $conn->close();
}
?>