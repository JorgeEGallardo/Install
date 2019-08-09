<?php 
session_start();
include "../config/conexion.php";
$con = new mysqli($SERVER, $USER, $PASSWORD, $BD);
$us = $_POST["user"];
$pass=$_POST["password"];

$sql    = "SELECT * FROM `users` WHERE `username` = ? and `password` = ?";
$stmt   = $con->prepare($sql);
$stmt->bind_param('ss',$us,$pass); 
$stmt->execute();
$result = $stmt->get_result();

$val = 0; 
while($row = $result->fetch_array())
{
    $_SESSION["user"]=$row['username'];
    $_SESSION["lvl"]=$row['id_level'];
    $_SESSION["id"]=$row['id_user'];
    $val = 1;
}

if ($val==1){
    echo $val;
}