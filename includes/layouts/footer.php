<footer>
    <span>&copy; Caleb University || Library</span>
    <div class="logout">
        <span>
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