<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <div class="wrapper">
        <div class="signup-page">
            <!-- <div class="header-main">
                <div class="header-login">
                    <span>Already have an account?</span>
                    <a href="../../index.php">Log in</a>
                </div>
            </div> -->
            <div class="signup-content">
                <div class="signup-body">
                    <h1>Register Employee</h1>
                    <form action="register_employee.php" method="post">
                        <label for="first_name">First Name</label>
                        <input type="text" name="first_name" id="first_name" placeholder="First Name" required>
                        
                        <label for="last_name">Last Name</label>
                        <input type="text" name="last_name" id="last_name" placeholder="Last Name" required>

                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" placeholder="Email" required>
                        
                        <!-- <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password" required>
                        
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required> -->
                        
                        <input type="submit" name="submit" value="CREATE AN ACCOUNT">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>