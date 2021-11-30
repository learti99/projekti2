<!DOCTYPE html>
<html>
<head>
    <title>Regjistrimi</title>
</head>
<body>

    <div class="container">
        
        <div class="header">

            <h2>Log In</h2>

        </div>

        <form action="login.php" method="post">
          
            <div>

            <label for="username">Username: </label>
            <input type="text" name="username" required>

            </div>

            <div>

            <label for="password">Passowrd </label>
            <input type="password" name="password_1" required>

            </div>

            <button type="submit" name="login_user"> Log in </button>

            <p>Not a user?<a href="login.php">Log in</b></a></p>
        </form>

    </div>

</body>
</html>