<?php include ('../../includes/layouts/header.php')?>
        <section class="issue-section">
            <form action="issue.php" method="post">
                <div class="form-issue">
                    <h1>IReturn Book</h1>
                    <hr>
                    <label for="bookNo"><b>Book Number</b></label>
                    <input type="text" placeholder="Book Number..." name="bookNo" class="input-field" required>

                    <label for="libraryNo"><b>Library Number</b></label>
                    <input type="text" placeholder="Library Number..." name="libraryNo" class="input-field" required>

                    <label for="datedue"><b>Date Due</b></label>
                    <input type="date" name="datedue" min="2018-01-01">

                    <button type="submit" class="submit" name= "issue" value="issue"><span id="issueBtn">Issue</span></button>
                </div>
            </form>
            
            </section>
<?php include ('../../includes/layouts/footer.php'); ?>