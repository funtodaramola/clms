<footer>
    <span>&copy; Caleb University || Library</span>
    <div class="logout">
        <span>
            <button class="add-admin">Account Settings</button>
            <!-- Button to open the modal -->
            <button onclick="document.getElementById('add-admin').style.display='block'" class="add-admin">Add Admin</button>
            <!-- TODO add manage admins page-->

            <!-- <?php 
            $username = $_POST["username"];
            echo "Logged in as {$username}";
            ?> -->
            <!-- Need to fix this after connecting to database of registered users -->
        </span>
    </div>
    <!-- The Modal (contains the Add admin form) -->
    <div id="add-admin" class="modal-form">
        <!-- span to close the modal -->
            <span onclick="document.getElementById('add-admin').style.display='none'" class="close-modal" title="Close Modal">&times;</span>
        <form class="modal-content" action="#" method="post">
            <div class="form-content">
                <h1>New Admin</h1>
                <hr>
                <label for="fullname"><b>Full name</b></label>
                <input type="text" placeholder="Enter Full name..." name="fullname" class="input-field" required>

                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Username will be generated..." name="username" class="input-field" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Password will be generated..." name="password" class="input-field" required>

                <div class="btns">
                    <button type="button" onclick="document.getElementById('add-admin').style.display='none'" class="cancelbtn">Cancel</button>
                    <button type="submit" class="submit">Add</button>
                </div>
            </div>
        </form>
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