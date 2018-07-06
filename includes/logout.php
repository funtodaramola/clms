<?php
    require_once ("functions.php");
    session_destroy();
    redirect_to("../public/index.php");
?>