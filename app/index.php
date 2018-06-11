<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/dashboard.css">
    <title>CLMS Dashboard</title>
</head>
<body>
    <div class="container">
        <header>
            
        </header>
            <div class="feedback">
                <span>
                    <!-- feedback based on action performed -->
                </span>
            </div>
        <section>
            <div class="action">
                <div class="content">
                    <a href="books.php">
                        <button class="btn" id="book"><img src="../img/book.png" alt="Books"></button>
                    </a>
                    <h2>Books</h2>
                </div>
            </div>

            <div class="action">
                <div class="content">
                    <a href="#">
                        <button class="btn" id="record"><img src="../img/records.png" alt="Records"></button>
                    </a>
                    <h2>Records</h2>
                </div>
            </div>

            <div class="action">
                <div class="content">
                    <a href="#">
                        <button class="btn" id="student"><img src="../img/student.png" alt="Students"></button>
                    </a>
                    <h2>Students</h2>
                </div>
            </div>
            
            <div class="action">
                <div class="content">
                    <a href="#">
                        <button class="btn" id="issue"><img src="../img/issue.png" alt="Issue Book"></button>
                    </a>
                    <h2>Book Issue</h2>
                </div>
            </div>

            <div class="action">
                <div class="content">
                    <a href="#">
                        <button class="btn" id="return"><img src="../img/return.png" alt="Book Return"></button>
                    </a>
                    <h2>Book Return</h2>
                </div>
                
            </div>

            <div class="action">
                <div class="content">
                    <a href="#">
                        <button class="btn" id="info"><img src="../img/about.png" alt="About"></button>
                    </a>
                    <h2>About</h2>
                </div>
            </div>
            <div class="clear-fix"></div>
        </section>

        <footer>
            <span>&copy; Caleb University || Library</span>
            <div class="logout">
                <span>
                    <?php 
                        $username = $_POST["username"];
                        echo "Logged in as {$username}";
                    ?>
                </span>
            </div>
        </footer>

    </div>
</body>
</html>