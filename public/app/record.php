<?php require ('../../includes/db.php')?>

<?php require_once ("../../includes/functions.php")?>

<?php include ('../../includes/layouts/header.php')?>

    <section class="record-section">
        
        <?php
        // TODO order by date issued
            //Perform database query
            $select_query  = "SELECT * FROM issued ";
            $select_query  .= "ORDER BY book_id DESC";
            $issued_set = mysqli_query($connection, $select_query);
            // Test if there was a query error
            confirm_query($issued_set);
        ?>
        <?php
        while($issued = mysqli_fetch_assoc($issued_set)) {
            $book_id = $issued['book_id'];
            $student_id = $issued['student_id'];
            $datedue = $issued['datedue'];
        ?>
        <?php
            $select_query  = "SELECT * FROM books ";
            $select_query  .= "WHERE available = 0 ";
            $select_query  .= "AND book_id = {$book_id}";
            $book_set = mysqli_query($connection, $select_query);
            // Test if there was a query error
            confirm_query($book_set);
        ?>
        <?php 
            $select_query  = "SELECT * FROM students ";
            $select_query  .= "WHERE student_id = {$student_id}";
            $student_set = mysqli_query($connection, $select_query);
            // Test if there was a query error
            confirm_query($student_set); 
        ?>
        <?php
        while($book_data = mysqli_fetch_assoc($book_set) and $student_data = mysqli_fetch_assoc($student_set)){
            $book_no = $book_data['category'] . $book_data['book_id'];
            $book_title = strtoupper($book_data['title']);
            $book_author = ucwords(strtolower($book_data['author']));
            $library_no = $student_data['dept'] . "/" . $student_data['student_id'];
            $student_name = ucfirst(strtolower($student_data['fname'])) . " " . ucfirst(strtolower($student_data['lname']));
        ?>
        <div class="data">
            <?php
                echo "{$book_title} by ";
                echo "{$book_author}";
            ?>
            
            <p>
                <?php
                echo "Issued to {$student_name} ";
                echo "({$library_no})";
                ?>
            </p>
            <p><?php echo "Book Number: {$book_no} "?></p>
        </div>
        <?php
        }
        ?>
        <?php
        }
        ?>
        <?php
            //Release returned data
            mysqli_free_result($issued_set);
        ?>
    </section>
<?php include ('../../includes/layouts/footer.php'); ?>
