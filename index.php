<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./app/login/login.css">
</head>

<body>
    <section class="login-section">
        <form action="../records-rex/app/login/login.php" method="post" class="auth-form">
            <div class="error-msg">
                <?php
                session_start();
                if (isset ($_SESSION['error'])) {
                    echo "<p>" . $_SESSION['error'] . "</p>";
                    unset($_SESSION['error']); // Clear the error message after displaying
                }
                ?>
            </div>

            <p class="form-header">Welcome Back</p>
            <p class="form-p">Please enter your login details</p>
            <div class="input-group">
                <label for="email">E-mail</label>
                <input type="text" name="email" id="email" required placeholder="Johndoe@email.com">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required placeholder="@JohnDoe123">
            </div>
            <div class="auth-opts1">
                <p class="forgot-pwd">Forgot Password?</p>
            </div>

            <button type="submit" name="submit" value="Log In" class="submit-btn">Sign in</button>
            <div class="auth-opts2">
                <p class="link-form">Don't have an account? <span>Sign up</span></p>
            </div>


        </form>
    </section>
</body>

</html>


<!-- <form action="../records-rex/app/login/login.php" method="post">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" placeholder="Email" required>
                        
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password" required>
                        
                        <input type="submit" name="submit" value="Log In">
                    </form> -->