<?php
header('Content-Type:text/csv; charset=latin1');
header('Content-Disposition: attachment; filename="Reporte.csv"');
$salida = fopen('php://output', 'w');
$dateV="2019-01-01";
fputcsv($salida, array("Reporte: "));
fputcsv($salida, array("Trabajador", "Fecha","Lugar", "Precio"));
include "../config/conexion.php";
$con = new mysqli($SERVER, $USER, $PASSWORD, $BD);

$sql    = "SELECT i.id_instalation, i.place, i.equipment,i.charge,u.username,i.date
FROM `user_instalations` ui
INNER JOIN `users` u
INNER JOIN `instalations` i 
WHERE u.id_user = ui.id_user
AND ui.id_instalation = i.id_instalation
AND i.date>?";
$stmt   = $con->prepare($sql);
$stmt->bind_param('s', $dateV);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_array()) {
    $userP=$row["username"];
    $dateP=$row["date"];
    $placeP=$row["place"];
    $priceP=$row["charge"]; 
    fputcsv($salida, array($userP,$dateP,$placeP,$priceP));
}