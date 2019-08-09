<?php 
print_r($_POST);
$event = $_POST["event"];
$worker  = $_POST["worker"];

include "../config/conexion.php";
$con = new mysqli($SERVER, $USER, $PASSWORD, $BD);
$sql    = "INSERT INTO USER_INSTALATIONS(ID_USER, ID_INSTALATION)
               VALUES(?,?)";
$stmt = $con->prepare($sql);
$stmt->bind_param('ii', $worker, $event);
$stmt->execute();
$stmt->close();
$con = new mysqli($SERVER, $USER, $PASSWORD, $BD);
$sql    = "UPDATE INSTALATIONS SET STATUS = 1
           WHERE id_instalation = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param('i', $event);
$stmt->execute();
$stmt->close();
header("Location: ../registro.php");
