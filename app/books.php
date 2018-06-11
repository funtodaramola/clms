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
                <button onclick="document.getElementById('').style.display='block'" class="new-icon"><img src="../img/new.png" alt="new"></button>
                <div class="search-container">
                    <form action="#">
                        <input type="text" placeholder="Search..." name="search">
                        <button type="submit"><img src="../img/search.png" alt="search"></button>
                    </form>
                </div>
            </div>

        </section>

        <?php include ('footer.php')?>
    </div>
</body>
</html>