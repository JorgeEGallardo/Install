<?php
$place = $_POST["place"];
$date  = $_POST["date"];
$hour  = $_POST["hour"];
$equipment = $_POST["equipment"];
$charge = $_POST["charge"];

include "../config/conexion.php";
$con = new mysqli($SERVER, $USER, $PASSWORD, $BD);
$sql    = "INSERT INTO INSTALATIONS(PLACE, DATE, HOUR, EQUIPMENT, CHARGE, STATUS)
               VALUES(?,?,?,?,?,0)";
$stmt = $con->prepare($sql);
$stmt->bind_param('sssss', $place, $date, $hour, $equipment, $charge);
$stmt->execute();
$stmt->close();
header("Location: ../index.php");
