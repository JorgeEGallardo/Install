<?php
$ids = $_POST["ids"];
$user  = $_POST["user"];
$lvl  = $_POST["lvl"];
$id  = $_POST["id"];

include "../config/conexion.php";
$con = new mysqli($SERVER, $USER, $PASSWORD, $BD);
$sql    = "INSERT INTO INSTALATIONS(PLACE, DATE, HOUR, EQUIPMENT, CHARGE, STATUS)
               VALUES(?,?,?,?,?,0)";
$stmt = $con->prepare($sql);
$stmt->bind_param('sssss', $place, $date, $hour, $equipment, $charge);
$stmt->execute();
$stmt->close();
header("Location: ../index.php");
