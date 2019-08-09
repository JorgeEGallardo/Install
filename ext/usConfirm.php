<?php 
session_start();
if(!isset($_SESSION["user"])){
header("Location: login");
}else{
    $user = $_SESSION["user"];
    $lvl = $_SESSION["lvl"];
    $id = $_SESSION["id"]; 
}
?> 
<input type="hidden" id="user" name="user" value="<?php echo $user?>"/>
<input type="hidden" id="lvl" name="lvl" value="<?php echo $lvl?>"/>
<input type="hidden" id="id" name="id" value="<?php echo $id?>"/>