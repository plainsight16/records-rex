<?php
require_once ('../db/dbconnect.php');

if (isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $default_password = $last_name;
    $role = 2;
    // // $confirm_password = $_POST['confirm_password'];

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

    // // // Check if password is at least 8 characters
    // // if (strlen($password) < 8){
    // //     $errors[] = "Password must be at least 8 characters";
    // // }

    // // // Check if password matches
    // // if ($password != $confirm_password){
    // //     $errors[] = "Passwords do not match";
    // // } 

    // Check if there are any errors
    if (count($errors) > 0){
        foreach ($errors as $error){
            echo "<div class='alert alert-danger'>$error</div>";
        }
    } else {
        try{
            // Hash password
            $password_hash = password_hash($default_password, PASSWORD_DEFAULT);
    
            // If there are no errors, insert data into database
            $stmt = $conn->prepare("INSERT INTO user (first_name, last_name, email, role, default_password) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $first_name, $last_name, $email, $role, $password_hash);
    
            if ($stmt->execute()){
                echo "<div class='alert alert-success'>Employee account created successfully. Default password: ".$default_password. "</div>";
            } else {
                echo "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
            }
        } catch (Exception $e){
            echo "<div class='alert alert-danger'>Error: " . $e->getMessage() . "</div>";
        } finally {
            $stmt->close();
            $conn->close();
        }
    }
}
?>