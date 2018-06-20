<?php require ('db.php')?>
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

        </section>
        <?php include ('footer.php'); ?>
    </div>
</body>
</html>
<?php
  //Close database connection
  mysqli_close($connection);
?>
<!-- <?php 
$book_info[] = $book_data;
                print_r($book_info);
                
?> -->