
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/dashboard.css">
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/script.js"></script>
    <title>CLMS Dashboard</title>
</head>
<body>
    <div class="container">
        <?php include ('header.php')?>

        <section class = "dashboard">
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
                    <a href="record.php">
                        <button class="btn" id="record"><img src="../img/records.png" alt="Records"></button>
                    </a>
                    <h2>Records</h2>
                </div>
            </div>

            <div class="action">
                <div class="content">
                    <a href="students.php">
                        <button class="btn" id="student"><img src="../img/student.png" alt="Students"></button>
                    </a>
                    <h2>Students</h2>
                </div>
            </div>
            
            <div class="action">
                <div class="content">
                    <a href="issue.php">
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

        <?php include ('footer.php')?>
    </div>
</body>
</html>