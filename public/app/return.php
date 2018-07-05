<?php include ('../../includes/layouts/header.php')?>
        <section class="return-section">
            <form action="return.php" method="post">
                <div class="form-issue">
                    <h1>Return Book</h1>
                    <hr>
                    <label for="bookNo"><b>Book Number</b></label>
                    <input type="text" placeholder="Book Number..." name="bookNo" class="input-field" required>

                    <label for="libraryNo"><b>Library Number</b></label>
                    <input type="text" placeholder="Library Number..." name="libraryNo" class="input-field" required>

<!--                     <label for="datedue"><b>Date Issued</b></label>
                    <input type="date" name="datedue" min="2018-01-01"> -->

                    <button type="submit" class="submit" name= "Return" value="Return"><span id="returnBtn">Return</span></button>
                </div>
            </form>
            
        </section>
<?php include ('../../includes/layouts/footer.php'); ?>
