<?php
    function redirect_to($new_location){
        header("Location: ". $new_location);
        exit;
    }
?>

<?php

// function to test for database database failure
  function confirm_query($result_set){
    if (!$result_set) {
      die("Database query failed.");
    }
  }

//   function to find all data from a certain table
  function find_all_from($table_name, $table_id) {
    global $connection;

    $select_query  = "SELECT * FROM {$table_name} ";
    $select_query  .= "ORDER BY {$table_id} DESC";
    $result_set = mysqli_query($connection, $select_query);
    // Test if there was a query error
    confirm_query($result_set);

    return $result_set;
  }
  
  function update_students(){
    global $connection;

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dept = $_POST['dept'];
    $college = $_POST['college'];
    $level = $_POST['level'];
    // adding students to db
    $update_query = "INSERT INTO students (";
    $update_query .= " fname, lname, dept, college, level";
    $update_query .= ") VALUES (";
    $update_query .= " '{$fname}', '{$lname}', '{$dept}', '{$college}', {$level}";
    $update_query .= ")";
    $update_set = mysqli_query($connection, $update_query);
    
    return $update_set;
  }
?>
