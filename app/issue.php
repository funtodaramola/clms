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
            <form action="#" method="post">
                <div class="form-issue">
                    <h1>Issue Book</h1>
                    <hr>
                    <label for="bookNo"><b>Book Number</b></label>
                    <input type="text" placeholder="Book Number..." name="bookNo" class="input-field" required>

                    <label for="libraryNo"><b>Library Number</b></label>
                    <input type="text" placeholder="Library Number..." name="libraryNo" class="input-field" required>

                    <button type="submit" class="submit" name= "issue" value="issue"><span id="issueBtn">Issue</span></button>
                </div>
            </form>
        </section>
        <?php include ('footer.php'); ?>
    </div>
</body>
</html>