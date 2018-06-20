<?php require ('db.php')?>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/dashboard.css">
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/script.js"></script>
    <title>Records</title>
</head>
<body>
    <div class="container">
        <?php include ('header.php')?>
        <section class="record-section">
            <?php
            $record = array();
            while($issued_books = mysqli_fetch_assoc($selected)){
                $record[] = $issued_books;
            }
            ?>
            <pre><?php  print_r($record);?></pre>
            
            <?php
                //Release returned data
                mysqli_free_result($selected);
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
