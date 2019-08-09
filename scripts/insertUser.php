<?php
$User = $_POST["user"];
$PASS  = $_POST["password"];
$lvl  = 1;

include "../config/conexion.php";
$con = new mysqli($SERVER, $USER, $PASSWORD, $BD);
$sql    = "INSERT INTO users(username, `PASSWORD`, ID_LEVEL)
            VALUES(?,?,1)";
$stmt = $con->prepare($sql);
$stmt->bind_param('ss', $User, $PASS);
$stmt->execute();
print_r($stmt);
$stmt->close(); 
header("Location: ../usuarios.php");
