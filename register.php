<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="./handle_register.php" method="post">
        <div>
            <label for="username">Username: </label>
            <input type="text" name="username" id="">
        </div>
        <div>
            <label for="email">Email: </label>
            <input type="email" name="email" id="">
        </div>
        <div>
            <label for="password">Password: </label>
            <input type="password" name="password" id="">
        </div>
        <button type="submit">Register</button>
    </form>
    <a href="./login.php">Login</a>
    <a href="./index.php">Back home</a>
</body>
</html>
</html>