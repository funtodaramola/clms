<?php 
    require ('../includes/db.php');
    require_once ("../includes/functions.php");
    if (isset($_POST["login"])) {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $login_query = "SELECT Username, password ";
        $login_query .= "FROM admin ";
        $login_query .= "WHERE Username = '$user' ";
        $login_query .= "AND password = '$pass'";
        $login_set = mysqli_query($connection, $login_query);
        if ($login_set) {
            if (mysqli_num_rows($login_set) == NULL) {
                echo 'INVALID login details.';
            } else {
                redirect_to("app/index.php");
            }
        } else {
            echo mysqli_error();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/script.js"></script>
    <title>Caleb Library Management System</title>
    <style>
    </style>
</head>
<body>
    <!--Login form-->
    <div class="login">
        <form action="index.php" method="post">
            <input id=username type="text" name="username" placeholder="Username" required>
            <input id=password type="password" name="password" placeholder="Password" required>
            <input type="submit" name="login" value="login">
        </form>  
    </div>
    
</body>
</html>
<?php
  //Close database connection
  mysqli_close($connection);
?>