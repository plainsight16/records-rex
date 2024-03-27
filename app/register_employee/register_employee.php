<?php
require_once ('../db/dbconnect.php');

session_start();


if (isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $last_name;
    $role = 2;

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

    // Check if there are any errors
    if (count($errors) > 0){
        foreach ($errors as $error){
            echo "<div class='alert alert-danger'>$error</div>";
        }
    } else {
        try{
            // Hash password
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
    
            // If there are no errors, insert data into database
            $stmt = $conn->prepare("INSERT INTO user (first_name, last_name, email, role, password) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $first_name, $last_name, $email, $role, $password_hash);
    
            if ($stmt->execute()){
                $_SESSION['success'] = "Employee account created successfully. Default password: ".$password. "";
                header("Location: index.php"); 
                exit();
            } else {
                $_SESSION['error'] = "Account could not be created";
                header("Location: index.php"); 
                exit();
            }
        } catch (Exception $e){
            // echo "<div class='alert alert-danger'>Error: " . $e->getMessage() . "</div>";
            echo "error";
        } finally {
            $stmt->close();
            $conn->close();
        }
    }
}
?>