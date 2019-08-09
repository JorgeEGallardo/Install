<?php
//SELECT COUNT(id_userinstalation) from user_instalations where id_user = 3
include "../config/conexion.php";
$con = new mysqli($SERVER, $USER, $PASSWORD, $BD);
$sql    = "SELECT DISTINCT id_user from user_instalations";
$stmt   = $con->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
$users=array();
$data=array();
while ($row = $result->fetch_array()) {
    array_push($users, $row["id_user"]);
}
for($i=0;$i<count($users);$i++){
$sql    = "SELECT COUNT(u.id_userinstalation) from user_instalations u INNER JOIN 
instalations i where u.id_user = $users[$i] and i.date < '2019-07-01'";
$stmt   = $con->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_array()) {
    array_push($data, $row["COUNT(u.id_userinstalation)"]);
}
}
print_r($users);
print_r($data);
