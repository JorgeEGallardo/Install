<?php
include "config/conexion.php";
$con = new mysqli($SERVER, $USER, $PASSWORD, $BD);

    $sql    = "SELECT i.place, i.date, u.username FROM `instalations` i 
    JOIN `users` u JOIN `user_instalations` a 
    WHERE i.status  = 2 AND a.id_user = u.id_user
    AND i.id_instalation = a.id_instalation;";
    $stmt   = $con->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    $events = array();
    $dates= array();
    while ($row = $result->fetch_array()) {
        array_push($events, $row['place']);
        array_push($dates, $row['date']);
    }
