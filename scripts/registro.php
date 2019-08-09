<?php
$user = $_POST["user"];
$lvl = $_POST["lvl"];
$id_user=$_POST["id"];

include "../config/conexion.php";
$con = new mysqli($SERVER, $USER, $PASSWORD, $BD);

if ($lvl == 2) {
    $sql    = "SELECT * FROM `instalations` WHERE `status` = 1 order by `date`";
    $stmt   = $con->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    echo '<ul class="list-group">';
    while ($row = $result->fetch_array()) {
        ?>

<li class="list-group-item  justify-content-between align-items-center">
    <?php echo $row['place'] ?>
    <span class="badge float-right badge-warning badge-pill"><?php echo $row['date']." ".$row['hour']?></span>
    
    <span class="badge float-right badge-danger badge-pill" onClick="Delete('<?php echo $row['id_instalation'];?>');">
       Eliminar
    </span>
</li>
<?php
    }
    echo '</ul>';
}else if($lvl == 1){
    $sql    = "SELECT i.place, i.date, i.hour, i.equipment 
    FROM `user_instalations` u JOIN `instalations` i 
    WHERE u.id_instalation = i.id_instalation
    AND u.id_user = ? AND i.status=1";
    $stmt   = $con->prepare($sql);
    $stmt->bind_param('i', $id_user);
    $stmt->execute();
    $result = $stmt->get_result();
    echo '<ul class="list-group">';
    while ($row = $result->fetch_array()) {
        ?>

<li class="list-group-item  justify-content-between align-items-center">
    <?php echo $row['place'] ?>
    <span class="badge float-right badge-warning badge-pill"><?php echo $row['date']." ".$row['hour']?></span>  
</li>
<?php
}
}