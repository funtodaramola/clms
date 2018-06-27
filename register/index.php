<?php require ('../includes/db.php')?>
<?php
    //check if form is developer123&submitted
    if (isset($_POST['add'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $dept = $_POST['dept'];
        $college = $_POST['college'];
        $level = $_POST['level'];
        $response = "Successfully added Student";

        // adding students to db
        $update_query = "INSERT INTO students (";
        $update_query .= " fname, lname, dept, college, level";
        $update_query .= ") VALUES (";
        $update_query .= " '{$fname}', '{$lname}', '{$dept}', '{$college}', {$level}";
        $update_query .= ")";
        $updated = mysqli_query($connection, $update_query);
    } else {
        $response = null;
    }
?>
<?php
	//Perform database query
	$select_query  = "SELECT * FROM students ";
	$selected = mysqli_query($connection, $select_query);
	// Test if there was a query error
	if (!$selected) {
		die("Database query failed.");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/register.css">
    <title>Registration</title>
</head>
<body>
    <div class="container">
        
        <section class="students-section">
            
            <!-- try using js to add content of form -->
            <form class="modal-content" action="index.php" method="post">
                <div class="form-content">
                    <h1>Student Library Registration</h1>
                    <?php require ('../includes/layouts/register-form.php')?> <!-- form for adding new student-->
                    <div style="text-align:center;" class="btn">
                        <button type="add" class="submit" name="add" value="add">Submit</button>
                    </div>
                </div>
            </form>
            
        </div>
        <div class="main">
            <?php // TODO make this into a function since it will be on two pages
            // update students table
                if (isset($_POST["add"])) {
                    // test for error
                if ($updated) {
                    // success
                    echo "{$response}";
                } else {
                    die("Students update failed. " . mysqli_error($connection));
                }
                }
            ?>
            
        </div>
        </section>
    </div>
</body>
</html>
<?php
  //Close database connection
  mysqli_close($connection);
?>