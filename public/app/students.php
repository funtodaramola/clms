<?php require ('../../includes/db.php')?>
<?php // TODO make this into a function since it will be on two pages
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
     $select_query  .= "ORDER BY student_id DESC";
	$selected = mysqli_query($connection, $select_query);
	// Test if there was a query error
	if (!$selected) {
		die("Database query failed.");
	}
?>

<?php include ('../../includes/layouts/header.php')?>
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
                    <?php require ('../../includes/layouts/register-form.php')?> <!-- form for adding new student-->
                    <div class="btns">
                        <button type="button" onclick="document.getElementById('modal-form').style.display='none'" class="cancelbtn">Cancel</button>
                        <button type="add" class="submit" name="add" value="add">Add</button>
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
            <?php
            while($student_data = mysqli_fetch_assoc($selected)){
                // this displayes students from db
                $student_data['fname'];
                $student_data['lname'];
                $student_data['dept'];
                $student_data['college'];
                $student_data['level'];
                $library_no = $student_data['dept'] . "/" . $student_data['student_id'];
                $student_name = ucfirst(strtolower($student_data['fname'])) . " " . ucfirst(strtolower($student_data['lname']));
                // switches back to easy to understand department names
                switch ($student_data['dept']) {
                    case "ACC":
                        $student_dept = "Accounting";
                        break;
                    case "BUS":
                        $student_dept = "Business Administration";
                        break;
                    case "ECO":
                        $student_dept = "Economics";
                        break;
                    case "MAS":
                        $student_dept = "Mass Communication";
                        break;
                    case "POS":
                        $student_dept = "Political Science";
                        break;
                    case "IRS":
                        $student_dept = "International Relations";
                        break;
                    case "CRM":
                        $student_dept = "Criminology, Peace and Conflict Resolution";
                        break;
                    case "MCB":
                        $student_dept = "MicroBiology";
                        break;
                    case "BCH":
                        $student_dept = "BioChemistry";
                        break;
                    case "ICH":
                        $student_dept = "Industrial Chemistry";
                        break;
                    case "CSC":
                        $student_dept = "Computer Science";
                        break;
                    case "PHY":
                        $student_dept = "Physics";
                        break;
                    case "ARC":
                        $student_dept = "Architecture";
                        break;
                    case "BUD":
                        $student_dept = "Building";
                        break;
                    case "SUY":
                        $student_dept = "Quantity Survey";
                        break;
                    default:
                        $student_dept = "Invalid Department";
                }
            ?>
            <div class="student-data">
                <?php echo "{$student_name}"?>
                <p><?php echo "Department: {$student_dept}"?></p>
                <p><?php echo "Library Number: {$library_no} "?></p>
            </div>
            <?php
                // echo "{$library_no}";
                // echo "{$student_name}";
                // echo "{$student_dept}";
                // echo "<hr>";
                }
            ?>
            <?php
                //Release returned data
                mysqli_free_result($selected);
            ?>
        </div>
        </section>
<?php include ('../../includes/layouts/footer.php'); ?>
