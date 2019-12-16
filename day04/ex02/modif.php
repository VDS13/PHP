<?php
    if($_POST["login"] != null && $_POST["oldpw"] != null && $_POST["submit"] != null)
    {
        if (!file_exists("../private"))
            mkdir("../private");
        if (file_exists("../private/passwd"))
            $checkl = unserialize(file_get_contents("../private/passwd"));
        $ch = 0;
        foreach($checkl as &$login)
        {
            if ($login["login"] === $_POST["login"])
            {
                if (hash("Whirlpool", $_POST["oldpw"]) === $login["passwd"] && $_POST["newpw"] != null && $_POST["oldpw"] !== $_POST["newpw"])
                {
                    $login["passwd"] = hash("Whirlpool", $_POST["newpw"]);
                    $ch = 1;
                    file_put_contents("../private/passwd", serialize($checkl));
                    echo "OK\n";
                }
            }
        }
        if ($ch !== 1)
            echo "ERROR\n";
        else
            $ch = 0;
    }
    else
        echo "ERROR\n";
?>