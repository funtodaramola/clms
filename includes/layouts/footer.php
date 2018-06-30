<footer>
    <span>&copy; Caleb University || Library</span>
    <div class="logout">
        <span>
            <!-- Button to open the modal -->
            <button onclick="document.getElementById('id01').style.display='block'" class="btn">Add Admin</button>

            <!-- <?php 
            $username = $_POST["username"];
            echo "Logged in as {$username}";
            ?> -->
            <!-- Need to fix this after connecting to database of registered users -->
        </span>
    </div>
    
</footer>
</div>
</body>
</html>
<?php
  //Close database connection
  if (isset($connection)){
    mysqli_close($connection);
  }
?>
<!-- The Modal (contains the Add form) -->
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