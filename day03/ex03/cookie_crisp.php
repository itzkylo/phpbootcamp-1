<?php
    if ($_GET['action'] == 'set')
    {
        setcookie($_GET["name"], $_GET["value"], time() + 3600, "/");
        echo "Cookie has been set\n";
    }
    if ($_GET["action"] == "get")
    {
        echo $_COOKIE[$_GET["name"]];
        if  ((strlen($_COOKIE[$_GET["name"]]) > 0))
            echo "\r\n";
        else
            echo "";
    }
    if ($_GET["action"] == "delete")
    {
        setcookie($_GET["name"], $_GET["value"], time() + 3600, "/");
        echo ("Cookie is deleted\n")
;    }
?>