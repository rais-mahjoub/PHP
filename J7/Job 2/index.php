<?php
setcookie("nbvisites",1,time()+3600);

if(!isset($_COOKIE["nbvisites"])) {
    $vis=1;
} else {
    $vis = $_COOKIE["nbvisites"]+1;
}
setcookie("nbvisites",$vis,time()+3600);

if(isset($_POST["reset"])) {
    setcookie("nbvisites",0);
}
?>

<form action="index.php" method="post">
    <label><?=$vis?><br></label>
    <input type="submit" value="reset" name="reset">
</form>