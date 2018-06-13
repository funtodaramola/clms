<?php
//   Create a database connection
  $dbhost = "localhost";
  $dbuser = "library_admin";
  $dbpass = "royal6";
  $dbname = "clms";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // Test if connection succeeded
  if(mysqli_connect_errno()) {
    die("Database connection failed: " .
         mysqli_connect_error() .
         " (" . mysqli_connect_errno() . ")"
    );
  }
?>