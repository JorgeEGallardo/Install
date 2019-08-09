<?php 
$userV = $_POST["user"];
$dateV = $_POST["date"];
if($dateV=="null"){
    $dateV=date("Y-m")."-01";
}
include "../config/conexion.php";
$con = new mysqli($SERVER, $USER, $PASSWORD, $BD);

$sql    = "SELECT i.id_instalation, i.place, i.equipment,i.charge,u.username,i.date
FROM `user_instalations` ui
INNER JOIN `users` u
INNER JOIN `instalations` i 
WHERE u.id_user = ui.id_user
AND ui.id_instalation = i.id_instalation
AND i.date>?
AND u.id_user=?";
$stmt   = $con->prepare($sql);
$stmt->bind_param('si', $dateV,$userV);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_array()) { 
    ?><div class="card"  style="float:left;width: 22rem;">
    <img class="card-img-top" style="height:12%;width:50%;margin-left:25%; max-height: 200px;" src=<?php echo "evi/".$row["id_instalation"]."1";?> alt="Card image cap">
    <img class="card-img-top" style="height:12%;width:50%;margin-left:25%; max-height: 200px;" src=<?php echo "evi/".$row["id_instalation"]."2";?> alt="Card image cap">
    <img class="card-img-top" style="height:12%;width:50%;margin-left:25%; max-height: 200px;" src=<?php echo "evi/".$row["id_instalation"]."3";?> alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><?php echo $row["place"];?></h5>
      <p class="card-text"><?php echo $row["equipment"];?></p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item"><?php echo $row["username"];?></li>
      <li class="list-group-item"><?php echo "$".$row["charge"];?></li>
      <li class="list-group-item"><?php echo $row["date"];?></li>
    </ul>
  </div>
  <?php
}
?>
