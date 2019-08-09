<?php
$id = $_POST["id"];
include "../config/conexion.php";
$con = new mysqli($SERVER, $USER, $PASSWORD, $BD);
    $sql    = "DELETE FROM `instalations` WHERE id_instalation = $id";
    $stmt   = $con->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    print_r($result);