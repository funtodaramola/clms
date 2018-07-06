<?php require ('../../includes/db.php')?>
<?php require_once ("../../includes/functions.php")?>
<?php
    //check if form is submitted
    if (isset($_POST['return'])) {
        // change the inputs into the book_id and student_id in db
        $book_no = $_POST['bookNo'];
        $book_id = substr($book_no, 3);
        $library_no = $_POST['libraryNo'];
        $student_id = substr($library_no, 4);
        // $datedue = $_POST['datedue'];

        // adding issued books to db
        $delete_query = "DELETE FROM issued ";
        $delete_query .= "WHERE book_id = {$book_id} ";
        $delete_query .= "LIMIT 1";
        $delete_set = mysqli_query($connection, $delete_query);
    }
?>
<?php include ('../../includes/layouts/header.php')?>
        <section class="return-section">
            <form action="return.php" method="post">
                <div class="form-issue">
                    <h1>Return Book</h1>
                    <hr>
                    <label for="bookNo"><b>Book Number</b></label>
                    <input type="text" placeholder="Book Number..." name="bookNo" class="input-field" required>

                    <label for="libraryNo"><b>Library Number</b></label>
                    <input type="text" placeholder="Library Number..." name="libraryNo" class="input-field" required>

<!--                     <label for="datedue"><b>Date Issued</b></label>
                    <input type="date" name="datedue" min="2018-01-01"> -->

                    <button type="submit" class="submit" name= "return" value="return"><span id="returnBtn">Return</span></button>
                </div>
            </form>
            <?php 
            // update books table
                if (isset($_POST["return"])) {
                    // test for error
                if ($delete_set) {
                    // success
                    $update_query = "UPDATE books SET ";
                    $update_query .= "available = 1 ";
                    $update_query .= "WHERE book_id =  {$book_id}";
                    $update_set = mysqli_query($connection, $update_query);
                    confirm_query($update_set);
                    if (mysqli_affected_rows($connection) == 1) {
                        redirect_to("books.php");
                    } else {
                        die("Book not Returned. " . mysqli_error($connection));
                    }
                } else {
                    die("Books update failed. " . mysqli_error($connection));
                }
                }
            ?>
        </section>
<?php include ('../../includes/layouts/footer.php'); ?>
