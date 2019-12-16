<?php
    function auth($login, $passwd)
    {
        if (!$login || !$passwd)
            return false;
        if (file_exists("../private/passwd"))
        {
            $checkl = unserialize(file_get_contents("../private/passwd"));
            foreach($checkl as &$log)
            {
                if ($log["login"] === $login && $log["passwd"] === hash("Whirlpool", $passwd))
                    return true;
            }
            return false;
        }
        return false;
    }
?>