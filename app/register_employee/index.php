<?php
    include_once "../base/auth_middleware.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../base/app.css">
</head>

<body>
    <section class="login-section">
        <form action="register_employee.php" method="post" class="auth-form">

            <?php
            session_start();
            if (isset ($_SESSION['success'])) {
                echo "<p>" . $_SESSION['success'] . "</p>";
                unset($_SESSION['success']); // Clear the error message after displaying
            }
            ?>
            <p class="form-header">Create Account For Employee</p>
            <p class="form-p">Enter details to create an account for the employee</p>
            <div class="input-group">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name" required placeholder="Johndoe@email.com">
            </div>
            <div class="input-group">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name" required placeholder="Johndoe@email.com">
            </div>
            <div class="input-group">
                <label for="email">E-mail</label>
                <input type="text" name="email" id="email" required placeholder="Johndoe@email.com">
            </div>
            <!-- <div class="input-group">
                <label for="password">Password</label>
                <input type="text" name="password" placeholder="@JohnDoe123">
            </div>
            <div class="input-group">
                <label for="password">Confirm Password</label>
                <input type="text" name="confirm_password" placeholder="@JohnDoe123">
            </div> -->
            <button type="submit" name="submit" class="submit-btn">Create Account</button>
            <div class="auth-opts2">
                <p class="link-form">Already have an account? <span>Sign In</span></p>
            </div>
        </form>
    </section>
    </div>
</body>

</html>