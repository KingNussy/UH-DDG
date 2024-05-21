<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="./handle_login.php" method="post">
        <div>
            <label for="email">Email: </label>
            <input type="email" name="email" id="">
        </div>
        <div>
            <label for="password">Password: </label>
            <input type="password" name="password" id="">
        </div>
        <button type="submit">Login</button>
    </form>
    <a href="./register.php">Register</a>
    <a href="./index.php">Back home</a>
</body>
</html>