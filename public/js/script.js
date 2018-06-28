// jquery functions

$(document).ready(function () {
    // TODO write a better test 
    $(function () {
        if (window.location.href == "http://localhost/clms/public/app/index.php") {
            $("#return").hide();
        } else {
            $("#return").show();
        }
    });
});