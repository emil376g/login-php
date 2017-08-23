$(document).ready(function () {
    if ($(".NavItem:last a").text() == "login") {
        $(".NavItem:last").click(function () {
            $("footer").load("login.php", function (responseTxt, statusTxt, xhr) {
                if (statusTxt == "success") $(document).scrollTop(700);
                if (statusTxt == "error") alert("Error: " + xhr.status + ": " + xhr.statusText);
            });
        });
    }
    if ($(".NavItem:nth(6) a").text() == "register") {
        $(".NavItem a").click(function () {
            $("footer").load("regester.php", function (responseTxt, statusTxt, xhr) {
                if (statusTxt == "success") $(document).scrollTop(700);
                if (statusTxt == "error") alert("Error: " + xhr.status + ": " + xhr.statusText);
            });
        });
    }
    
})