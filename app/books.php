<?php require ('db.php')?>
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
            <form class="modal-content" action="#">
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
                        <button type="submit" class="submit">Add</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="main">
            
        </div>
        </section>
        <?php include ('footer.php')?>
    </div>
</body>
</html>