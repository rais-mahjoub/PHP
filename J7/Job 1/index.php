<?php
session_start();

if(!isset($_SESSION["nbvisites"])) {
    $_SESSION["nbvisites"] = 1;
} else {
    $_SESSION["nbvisites"]++;
}

if(isset($_POST["reset"])) {
    session_destroy();
}

?>
<form action="index.php" method="post">
    <label><?=$_SESSION["nbvisites"]?></label><br>
    <input type="submit" value="reset" name="reset">
</form>