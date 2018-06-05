<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Caleb Library Management System</title>
</head>
<body>
    <!--Create a modal box for login in future-->
    <!--Login form-->
    <div class="login">
        <form action="app/index.php" method="post">
            <input id=username type="text" name="username" placeholder="Username" required>
            <input id=password type="password" name="password" placeholder="Password" required>
            <input type="submit" name="login" value="Login">
        </form>
        <p class="signup">New user? <a href="#">Sign up</a></p>
    </div>
    
</body>
</html>