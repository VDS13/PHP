<?php
    if($_POST["login"] != null && $_POST["passwd"] != null && $_POST["submit"] != null)
    {
        if (!file_exists("../private"))
            mkdir("../private");
        if (file_exists("../private/passwd"))
            $checkl = unserialize(file_get_contents("../private/passwd"));
        else
            $checkl = array();
        foreach($checkl as &$login)
        {
            if ($login["login"] === $_POST["login"])
            {
                echo "ERROR\n";
                exit(0);
            }
        }
        $checkl[] = array("login" => $_POST["login"], "passwd" => hash("Whirlpool", $_POST["passwd"]));
        file_put_contents("../private/passwd", serialize($checkl));
        echo "OK\n";
    }
    else
        echo "ERROR\n";
?>