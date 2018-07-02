<?php require ('../includes/db.php')?>
<?php
    if (isset($_POST['add'])) {
        // add data to students table
        $update_set = update_students();
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
            <?php
                if (isset($_POST["add"])) {
                    // test for error while adding data
                    confirm_query($update_set);
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