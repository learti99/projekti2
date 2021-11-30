<!DOCTYPE html>
<html>
<head>
    <title>Regjistrimi</title>
</head>
<body>

    <div class="container">
        
        <div class="header">

            <h2>Register</h2>

        </div>

        <form action="regjistrimi.php" method="post">
          
            <div>

            <label for="username">Username: </label>
            <input type="text" name="username" required>

            </div>

            <div>

            <label for="email">Email: </label>
            <input type="email" name="email" required>

            </div>

            <div>
            <label for="password">Passowrd </label>
            <input type="password" name="password_1" required>

            <div>

            <label for="password">Confirm passowrd </label>
            <input type="password" name="password_2" required>

            </div>

            <button type="submit" name="reg_user"> Submit </button>

            <p>Already a user?<a href="login.php">Log in</b></a></p>
        </form>

    </div>

</body>
</html>