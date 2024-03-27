<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<div class="wrapper">
        <div class="signin-page">
            <div class="header-main">
                <div class="header-login">
                    <span>Already have an account?</span>
                    <a href="../../index.php">Log in</a>
                </div>
            </div>
            <div class="signin-content">
                <div class="signin-body">
                    <h1>Login</h1>
                    <form action="../records-rex/app/login/login.php" method="post">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" placeholder="Email" required>
                        
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password" required>
                        
                        <input type="submit" name="submit" value="Log In">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>