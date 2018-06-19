<?php require ('db.php')?>
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
     $select_query  .= "ORDER BY student_id DESC";
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
    <script src="../js/script.js"></script>
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
                    
                    <label for="college"><b>College</b></label>
                    <select name="college">
                        <option value="copas">College of Pure and Applied Science</option>
                        <option value="cosomas">College of Social and Management Science</option>
                        <option value="colensma">College of Environment Science and Management</option>
                    </select>

                    <!-- link department to college later -->
                    <label for="dept"><b>Department</b></label>
                    <select name="dept">
                        <!-- cosomas -->
                        <span id="cosomas">
                        <option value="ACC">Accounting</option>
                        <option value="BUS">Business Administration</option>
                        <option value="ECO">Economics</option>
                        <option value="MAS">Mass Communication</option>
                        <option value="POS">Political Science</option>
                        <option value="IRS">International Relations</option>
                        <option value="CRM">Criminology, Peace and Conflict Resolution</option>
                        </span>
                        <!-- copas -->
                        <span id="copas">
                        <option value="MCB">MicroBiology</option>
                        <option value="BCH">BioChemistry</option>
                        <option value="ICH">Industrial Chemistry</option>
                        <option value="CSC">Computer Science</option>
                        <option value="PHY">Physics</option>
                        </span>
                        <!-- colensma -->
                        <span id="copas">
                        <option value="ARC">Architecture</option>
                        <option value="BUD">Building</option>
                        <option value="SUY">Quantity Surveying</option>
                        </span>
                    </select>
                    <!-- <input type="text" placeholder="Department..." name="dept" class="input-field" required> -->
                    <label for="level"><b>Level</b></label>
                    <input type="number" name="level" class="input-field" step="100" min="100" max="400" list="defaultNumbers" required>
                    <datalist id="defaultNumbers">
                    <option value="100">
                    <option value="200">
                    <option value="300">
                    <option value="400">
                    </datalist>

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
        <?php include ('footer.php')?>
    </div>
</body>
</html>
<?php
  //Close database connection
  mysqli_close($connection);
?>