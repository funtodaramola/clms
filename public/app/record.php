<?php require ('../../includes/db.php')?>

<?php require_once ("../../includes/functions.php")?>
<?php
	//Perform database query
    $select_query  = "SELECT * FROM issued ";
    $select_query  .= "ORDER BY book_id DESC";
	$selected = mysqli_query($connection, $select_query);
	// Test if there was a query error
	if (!$selected) {
		die("Database query failed.");
	}
?>
<?php include ('../../includes/layouts/header.php')?>

    <section class="record-section">
        <?php
        $record = array();
        while($issued_books = mysqli_fetch_assoc($selected)){
            $record[] = $issued_books;
        }
        ?>
        <pre><?php  print_r($record);?></pre>
        <?php 
            // foreach($record as $record_row){
            //     echo $record_row['book_id'];
            // }
        ?>
        
        <?php
            //Release returned data
            mysqli_free_result($selected);
        ?>
    </section>
<?php include ('../../includes/layouts/footer.php'); ?>
