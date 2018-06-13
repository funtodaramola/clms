<?php require ('db.php')?>
<?php
    //check if form is submitted
    if (isset($_POST['add'])) {
        $title = $_POST['title'];
        $author = $_POST['author'];
        $publisher = $_POST['publisher'];
        $category = $_POST['category'];
        $edition = $_POST['edition'];
        $response = "Successfully added book";

        // adding books to db
        $update_query = "INSERT INTO books (";
        $update_query .= " title, author, category, publisher, edition";
        $update_query .= ") VALUES (";
        $update_query .= " '{$title}', '{$author}', {$category}, '{$publisher}', '{$edition}'";
        $update_query .= ")";
        $updated = mysqli_query($connection, $update_query);
    } else {
        $response = null;
    }
?>
<?php
	//Perform database query
	$select_query  = "SELECT * FROM books ";
	$selected = mysqli_query($connection, $select_query);
	// Test if there was a query error
	if (!$selected) {
		die("Database query failed.");
	}
?>

// add php to validate login else redirect
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/dashboard.css">
    <title>Library Books</title>
</head>
<body>
    <div class="container">
        <?php include ('header.php')?>

        <section class="books-section">

        <div class="books-top">
            <button onclick="document.getElementById('modal-form').style.display='block'" class="new-icon"><img src="../img/new.png" alt="new"></button>
            <div class="search-container">
                <form action="#">
                    <p>BOOKS</p>
                    <input type="text" placeholder="Search..." name="search">
                    <button type="submit"><img src="../img/search.png" alt="search"></button>
                </form>
            </div>
        </div>

        <!-- The Modal (contains add new book form) -->
        <div id="modal-form" class="modal-form">
            <!-- span to close the modal -->
            <span onclick="document.getElementById('modal-form').style.display='none'" class="close-modal" title="Close Modal">&times;</span>
            
            <!-- try using js to add content of form -->
            <form class="modal-content" action="books.php" method="post">
                <div class="form-content">
                    <h1>Add Book</h1>
                    <hr>
                    <label for="title"><b>Title</b></label>
                    <input type="text" placeholder="Title..." name="title" class="input-field" required>

                    <label for="author"><b>Author</b></label>
                    <input type="text" placeholder="Author's name..." name="author" class="input-field" required>

                    <label for="publisher"><b>Publisher</b></label>
                    <input type="text" placeholder="Publisher..." name="publisher" class="input-field" required>

                    <label for="category"><b>Category</b></label>
                    <select name="category">
                        <option value="000">Information/General Studies</option>
                        <option value="100">Philosophy/Psychology</option>
                        <option value="200">Religion</option>
                        <option value="300">Social Science</option>
                        <option value="400">Language</option>
                        <option value="500">Science</option>
                        <option value="600">Technology/Applied Science</option>
                        <option value="700">Arts/Humanity</option>
                        <option value="800">Literature</option>
                        <option value="900">History/Geography</option>
                    </select>
                    
                    <label for="edition"><b>Edition</b></label>
                    <input type="text" placeholder="Edition..." name="edition" class="input-field" required>

                    <div class="btns">
                        <button type="button" onclick="document.getElementById('modal-form').style.display='none'" class="cancelbtn">Cancel</button>
                        <button type="submit" class="submit" name= "add" value="add">Add</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="main">
            <?php 
            // update books table
                if (isset($_POST["add"])) {
                    // test for error
                if ($updated) {
                    // success
                    echo "{$response}";
                } else {
                    die("Books update failed. " . mysqli_error($connection));
                }
                }
            ?>
            <?php 
            // displaying book info into main div
                while($book_info = mysqli_fetch_assoc($selected)){
                echo $book_info['book_id'] . "<br>";
                echo $book_info['title'] . "<br>";
                echo $book_info['author'] . "<br>";
                echo $book_info['category'] . "<br>";
                echo $book_info['publisher'] . "<br>";
                echo $book_info['edition'] . "<br>";
                echo "<hr>";
                }
            ?>
            <?php
                //Release returned data
                mysqli_free_result($selected);
            ?>
        </div>
        </section>
        <?php include ('footer.php'); ?>
    </div>
</body>
</html>
<?php
  //Close database connection
  mysqli_close($connection);
?>