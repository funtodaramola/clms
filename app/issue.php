<?php require ('db.php')?>
<?php
    //check if form is submitted
    if (isset($_POST['issue'])) {
        // change the inputs into the book_id and student_id in db
        $book_no = $_POST['bookNo'];
        $book_id = substr($book_no, 3);
        $library_no = $_POST['libraryNo'];
        $student_id = substr($library_no, 4);
        $datedue = $_POST['datedue'];

    //     $title = $_POST['title'];
    //     $author = $_POST['author'];
    //     $publisher = $_POST['publisher'];
    //     $category = $_POST['category'];
    //     $edition = $_POST['edition'];
    //     $response = "Successfully issued book";

    //     // adding books to db
    //     $update_query = "INSERT INTO books (";
    //     $update_query .= " title, author, category, publisher, edition";
    //     $update_query .= ") VALUES (";
    //     $update_query .= " '{$title}', '{$author}', {$category}, '{$publisher}', '{$edition}'";
    //     $update_query .= ")";
    //     $updated = mysqli_query($connection, $update_query);
    // } else {
    //     $response = null;
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
    <title>Issue Book</title>
</head>
<body>
    <div class="container">
        <?php include ('header.php')?>
        <section class="issue-section">
            <form action="issue.php" method="post">
                <div class="form-issue">
                    <h1>Issue Book</h1>
                    <hr>
                    <label for="bookNo"><b>Book Number</b></label>
                    <input type="text" placeholder="Book Number..." name="bookNo" class="input-field" required>

                    <label for="libraryNo"><b>Library Number</b></label>
                    <input type="text" placeholder="Library Number..." name="libraryNo" class="input-field" required>

                    <label for="datedue"><b>Date Due</b></label>
                    <input type="date" name="datedue" min="2018-01-01">

                    <button type="submit" class="submit" name= "issue" value="issue"><span id="issueBtn">Issue</span></button>
                </div>
            </form>
            <?php 
            // echo $book_id;
            // echo $student_id;
            // echo $datedue;
            ?>
        </section>
        <?php include ('footer.php'); ?>
    </div>
</body>
</html>
<?php
  //Close database connection
  mysqli_close($connection);
?>