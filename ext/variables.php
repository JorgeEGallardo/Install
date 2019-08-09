<?php
include "config/conexion.php";
$con = new mysqli($SERVER, $USER, $PASSWORD, $BD);

$sql    = "SELECT * FROM `users` WHERE `id_level` = 1";
$stmt   = $con->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
$work = array();
$data = array();;
$date = date("Y-m") ."-01";
//$date = '2019-01-01';
while ($row = $result->fetch_array()) {
    array_push($work, $row["username"]);
    $user_id = $row["id_user"];
    $sql    = "SELECT i.id_instalation 
    FROM `user_instalations` UI
    INNER JOIN `instalations` i
    WHERE i.id_instalation =UI.id_instalation
    AND i.date > ?
    AND UI.id_user=?";
    $stmt   = $con->prepare($sql);
    $stmt->bind_param('si', $date, $user_id);
    $stmt->execute();
    $result2 = $stmt->get_result();
    $cont=0;
    while ($row2 = $result2->fetch_array()) { 
        $cont++;
    }
    array_push($data, $cont);
}
