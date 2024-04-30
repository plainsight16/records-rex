<?php
require_once ('../db/dbconnect.php');

if (isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $last_name;
    $role = 1;
    // $confirm_password = $_POST['confirm_password'];

    $errors = array();

    // Check if fields are empty
    if (empty($first_name) || empty($last_name) || empty($email)){
        $errors[] = "All fields are required";
    }
    
    // Check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors[] = "Invalid email address";
    }

    // Check if email already exists
    $stmt = $conn->prepare("SELECT * FROM user WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0){
        $errors[] = "Email already exists";
    }

    //
    // if (strlen($password) < 8){
    //     $errors[] = "Password must be at least 8 characters";
    // }

    

    
    if (count($errors) > 0){
        foreach ($errors as $error){
            echo "<div class='alert alert-danger'>$error</div>";
        }
    } else{
        // // Hash password
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        // If there are no errors, insert data into database
        $stmt = $conn->prepare("INSERT INTO user (first_name, last_name, email, role, password) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $first_name, $last_name, $email, $role, $password_hash);

        if ($stmt->execute()){
            echo "<div class='alert alert-success'>Admin account created successfully. Default password: ".$password. "</div>";
        } else {
            echo "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
        }
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>