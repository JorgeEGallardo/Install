<?php
include "config/conexion.php";
$con = new mysqli($SERVER, $USER, $PASSWORD, $BD);
$sql    = "SELECT i.place, i.id_instalation
FROM `user_instalations` u JOIN `instalations` i 
WHERE u.id_instalation = i.id_instalation
AND u.id_user = ? AND i.status=1";
$stmt   = $con->prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_array()) {
    echo "<option value=".$row["id_instalation"].">".$row["place"]."</option>";
}
?>