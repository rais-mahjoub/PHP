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
if(isset($_POST["add"])) {
    $list = $_POST["list"];
    
}
/*foreach (nombre del cookie as $k => $v) {
    echo $v;
}*/
?>
<form action="index.php" method="post">
    <label for="list">Prénom :</label><br>
    <input type="text" name="list"><br>
    <input type="submit" value="Ajouter" name="add"><input type="submit" value="Reset" name="reset">
</form>