<?php
$event= $_POST["event"];

$path_info = pathinfo($_FILES['evidence1']['name']);
$extention= $path_info['extension'];
$nom = "../evi/" . $event."1.".$extention;
copy($_FILES['evidence1']['tmp_name'], $nom);

$path_info = pathinfo($_FILES['evidence2']['name']);
$extention= $path_info['extension'];
$nom = "../evi/" . $event."2.".$extention;
copy($_FILES['evidence2']['tmp_name'], $nom);

$path_info = pathinfo($_FILES['evidence3']['name']);
$extention= $path_info['extension'];
$nom = "../evi/" . $event."3.".$extention;
copy($_FILES['evidence3']['tmp_name'], $nom);

include "../config/conexion.php";
$con = new mysqli($SERVER, $USER, $PASSWORD, $BD);
$sql    = "UPDATE INSTALATIONS SET STATUS = 2
           WHERE id_instalation = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param('i', $event);
$stmt->execute();
$stmt->close();
header("Location: ../evidencia.php");
