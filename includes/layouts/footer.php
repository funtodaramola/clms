<footer>
    <span>&copy; Caleb University || Library</span>
    <div class="logout">
        <span>
            <button id="myBtn" class="add-admin">Account Settings</button>
			<div id="myModal" class="modal">
			<div class="modal-content">
    <span class="close">&times;</span>
	<form class="modal-content" action="#" method="post">
            <div class="form-content">
                <h1>Login</h1>   
                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Username" name="username" class="input-field" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Password" name="password" class="input-field" required>

                <div class="btns">
                    <button type="button" onclick="document.getElementById('add-admin').style.display='none'" class="cancelbtn">Cancel</button>
                    <button type="submit" class="submit">Add</button>
                </div>
            </div>
        </form>
  </div>

</div>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
} 

</script>

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