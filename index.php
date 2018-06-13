<?php require ('app/db.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Caleb Library Management System</title>
    <style>
    </style>
</head>
<body>
    <!--Login form-->
    <div class="login">
        <form action="app/index.php" method="post">
            <input id=username type="text" name="username" placeholder="Username" required>
            <input id=password type="password" name="password" placeholder="Password" required>
            <input type="submit" name="login" value="Login">
        </form>
        <!-- Button to open the modal -->
        <p class="signup">New user? <button onclick="document.getElementById('id01').style.display='block'" class="btn">Sign up</button></p>
    </div>

    <!-- The Modal (contains the Sign Up form) -->
    <div id="id01" class="modal">
        <!-- span to close the modal -->
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <form class="modal-content" action="index.php">
            <div class="container">
                <h1>Sign Up</h1>
                <hr>
                <label for="fname"><b>Full name</b></label>
                <input type="text" placeholder="Enter Full name" name="fname" class="signup-input" required>

                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" class="signup-input" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" class="signup-input" required>
                <!-- add password repeat later -->
                <!-- <label for="psw-repeat"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" required> -->

                <div class="btns">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                    <button type="submit" class="signupbtn">Sign Up</button>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>
<?php
  //Close database connection
  mysqli_close($connection);
?>