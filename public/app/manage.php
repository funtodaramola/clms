<?php include ('../../includes/layouts/header.php')?>

<section class="manage-section">
    <div class="top"><h1>MANAGE ADMINS</h1></div>
    <div class="manage-action">
        <button onclick="document.getElementById('add-admin').style.display='block'" onclick=repadding() class="manageBtn">
            <li>ADD ADMIN</li>
        </button>
            <!-- code for adding admin -->
            <div class="form-content" id="add-admin">
                <form action="#" method="post" >
                    <hr>			
                    <label for="fullname"><b>Full name</b></label>
                    <input type="text" placeholder="Enter Full name..." name="fullname" class="input-field" required>

                    <label for="username"><b>Username</b></label>
                    <input type="text" placeholder="Username will be generated..." name="username" class="input-field" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Password will be generated..." name="password" class="input-field" required>

                    <div class="btns">
                        <button type="button" onclick="document.getElementById('add-admin').style.display='none'" class="cancelbtn">Cancel</button>
                        <button type="submit" class="submit">Add</button>
                    </div>
                </form>
            </div>
        <button class="manageBtn"><li>REMOVE ADMIN</li></button>
    </div>
    <div class="clear-fix"></div>
                
</section>


<?php include ('../../includes/layouts/footer.php'); ?>