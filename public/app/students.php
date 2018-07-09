<?php require ('../../includes/db.php')?>

<?php require_once ("../../includes/functions.php")?>
<?php
    if (isset($_POST['add'])) {
        // add data to students table
        $update_set = update_students();
    }
?>
<!-- selects all students from DB -->
<?php $student_set = find_all_from('students', 'student_id'); ?>

<?php include ('../../includes/layouts/header.php')?>
        <section class="students-section">

        <div class="top-menu">
            <button onclick="document.getElementById('modal-form').style.display='block'" class="new-icon"><img src="../img/new.png" alt="new"></button>
        <?php
            $div = search_div('students.php', 'STUDENTS', 'student', 'Library Number...');
            echo $div;
            if (isset($_GET['student'])) {
                if ($_GET['student'] == "") {
                    echo "Enter a Library Number...";
                } else {
                    // add condition to test that book number is greater than 3
                $student = substr($_GET['student'], 4);

                $select_query  = "SELECT * FROM students ";
                $select_query  .= "WHERE student_id = {$student} ";
                $student_set = mysqli_query($connection, $select_query);
                // Test if there was a query error
                confirm_query($student_set);
                }
            }
        ?>

        <!-- The Modal (contains add new student form) -->
        <div id="modal-form" class="modal-form">
            <!-- span to close the modal -->
            <span onclick="document.getElementById('modal-form').style.display='none'" class="close-modal" title="Close Modal">&times;</span>
            
            <!-- try using js to add content of form -->
            <form class="modal-content" action="students.php" method="post">
                <div class="form-content">
                    <h1>Add Student</h1>
                    <?php require ('../../includes/layouts/register-form.php')?> <!-- form for adding new student-->
                    <div class="btns">
                        <button type="button" onclick="document.getElementById('modal-form').style.display='none'" class="cancelbtn">Cancel</button>
                        <button type="add" class="submit" name="add" value="add">Add</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="main">
            <?php
                if (isset($_POST["add"])) {
                    // test for error while adding data
                    confirm_query($update_set);
                }
            ?>
            <?php
            while($student_data = mysqli_fetch_assoc($student_set)){
                // this displayes students from db
                // $student_data['fname'];
                // $student_data['lname'];
                // $student_data['dept'];
                // $student_data['college'];
                // $student_data['level'];
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
            <div class="data">
                <?php echo "{$student_name}"?>
                <p><?php echo "Department: {$student_dept}"?></p>
                <p><?php echo "Library Number: {$library_no} "?></p>
            </div>
            <?php
                }
            ?>
            <?php
                //Release returned data
                mysqli_free_result($student_set);
            ?>
        </div>
        </section>
<?php include ('../../includes/layouts/footer.php'); ?>
