<?php
    if(session_start() && $_GET["submit"] == "OK" && $_GET["login"] != null && $_GET["passwd"] != null)
    {
        $_SESSION["login"] = $_GET["login"];
        $_SESSION["passwd"] = $_GET["passwd"];
    }
?>
<html><body>
    <form action="index.php" method="GET">
        Login:<input name="login" type="text" value="<?php echo $_SESSION["login"]; ?>" />
        <br />
        Password:<input name="passwd" type="password" value="<?php echo $_SESSION["passwd"]; ?>" />
        <input type="submit" name="submit" value="OK"/>
    </form>
</body></html>
