<?php 
include "../config/conexion.php";
$con = new mysqli($SERVER, $USER, $PASSWORD, $BD);

 $sql    = "SELECT * FROM `instalations` WHERE `status` = 0 order by `date`";
 $stmt   = $con->prepare($sql);
 $stmt->execute();
 $result = $stmt->get_result();
 echo '<ul class="list-group">';
 while ($row = $result->fetch_array()) {
    echo "<option value=".$row["id_instalation"].">".$row["place"]."</option>";
 }