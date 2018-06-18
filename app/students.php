<?php require ('db.php')?>
<?php
    //check if form is submitted
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
    <link rel="stylesheet" href="../css/dashboard.css">
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/queryscript.js"></script>
    <title>Students</title>
</head>
<body>
    <div class="container">
        <?php include ('header.php')?>
        <section class="students-section">

        <div class="top-nav">
            <button onclick="document.getElementById('modal-form').style.display='block'" class="new-icon"><img src="../img/new.png" alt="new"></button>
            <div class="search-container">
                <form action="#">
                    <p>STUDENTS</p>
                    <input type="text" placeholder="Search..." name="search">
                    <button type="submit"><img src="../img/search.png" alt="search"></button>
                </form>
            </div>
        </div>

        <!-- The Modal (contains add new student form) -->
        <div id="modal-form" class="modal-form">
            <!-- span to close the modal -->
            <span onclick="document.getElementById('modal-form').style.display='none'" class="close-modal" title="Close Modal">&times;</span>
            
            <!-- try using js to add content of form -->
            <form class="modal-content" action="students.php" method="post">
                <div class="form-content">
                    <h1>Add Students</h1>
                    <hr>
                    <label for="fname"><b>First Name</b></label>
                    <input type="text" placeholder="First Name..." name="fname" class="input-field" required>

                    <label for="lname"><b>Last Name</b></label>
                    <input type="text" placeholder="Last name..." name="lname" class="input-field" required>

                    <label for="dept"><b>Department</b></label>
                    <input type="text" placeholder="Department..." name="dept" class="input-field" required>

                    <!-- link department to college later -->
                    <label for="college"><b>College</b></label>
                    <select name="college">
                        <option value="copas">College of Pure and Applied Science</option>
                        <option value="cosomas">College of Social and Management Science</option>
                        <option value="colensma">College of Environment Science and Management</option>
                        <option value="copos">College of Postgraduate Studies</option>
                    </select>
                    
                    <label for="level"><b>Level</b></label>
                    <input type="number" name="level" class="input-field" required>

                    <div class="btns">
                        <button type="button" onclick="document.getElementById('modal-form').style.display='none'" class="cancelbtn">Cancel</button>
                        <button type="add" class="submit" name="add" value="add">Add</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="main">
            <?php 
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
            <?php
                //Release returned data
                mysqli_free_result($selected);
            ?>
        </div>
        </section>
        <?php include ('footer.php')?>
    </div>
</body>
</html>
<?php
  //Close database connection
  mysqli_close($connection);
?>