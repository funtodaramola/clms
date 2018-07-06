<footer>
    <span>&copy; Caleb University || Library</span>
    <div class="logout">
        <span>
            <!-- Buttons to open the modal -->
            <button id="myBtn" onclick="document.getElementById('account').style.display='block'" class="foot_btn">Account Settings</button>
            <button class="foot_btn"><a href="../../public/app/manage.php">Manage Admin</a></button>
            <button class="foot_btn"><a href="../../includes/logout.php">Logout</a></button>
        </span>
    </div>

    

<!-- The Modal (contains the Account settings form) -->
    <div id="account" class="modal-form">
        <!-- span to close the modal -->
        <span onclick="document.getElementById('account').style.display='none'" class="close-modal" title="Close Modal">&times;</span>
        <div class="modal-content">
            <div class="account-head"><h1>Account Settings</h1></div>
            
                <div class="form-content">
                    <button onclick="document.getElementById('change').style.display='block'" class="changeBtn"><h2>Change Username and Password</h2></button>
                    <form action="#" method="post" id="change">
                    <hr>			
                    <label for="username"><b>Username</b></label>
                    <input type="text" placeholder="New Username..." name="username" class="input-field" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="New Password..." name="password" class="input-field" required>

                    <div class="btns">
                        <button type="button" onclick="document.getElementById('change').style.display='none'" class="cancelbtn">Cancel</button>
                        <button type="submit" class="submit">Update</button>
                    </div>
                    </form>
                </div>
            
        </div>
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