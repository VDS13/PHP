<?php
    include 'auth.php';
    session_start();
    if ($_POST["login"] != null && $_POST["passwd"] != null)
    {
        if (auth($_POST["login"], $_POST["passwd"]))
            $_SESSION["loggued_on_user"] = $_POST["login"];
        else
        {
            echo "ERROR\n";
            exit(0);
        }
    }
    else
    {
        echo "ERROR\n";
        exit(0);
    }
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Chat42</title>
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8d/42_Logo.svg/1200px-42_Logo.svg.png" type="image/png">
</head>
<body>
    <iframe name="chat" src="chat.php" width="100%" height="550"></iframe>
    <iframe name="speak" src="speak.php" width="100%" height="50"></iframe>
</body>
</html>