<?php
    function redirect_to($new_location){
        header("Location: ". $new_location);
        exit;
    }
?>
<?php 
    require_once('functions.php');

    if (isset($_POST["Login"])) {
        redirect_to("index.php");
    }
?>