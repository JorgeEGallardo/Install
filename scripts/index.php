<?php
$user = $_POST["user"];
$lvl = $_POST["lvl"];
$id = $_POST["id"];
include "../config/conexion.php";
$con = new mysqli($SERVER, $USER, $PASSWORD, $BD);

if ($lvl == 2) {
    $sql    = "SELECT * FROM `instalations` WHERE `status` = 0 order by `date`";
    $stmt   = $con->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    echo '<ul class="list-group">';
    while ($row = $result->fetch_array()) {
        ?>

<li class="list-group-item  justify-content-between align-items-center">
    <?php echo $row['place'] ?>
    
    <span class="badge float-right badge-primary badge-pill" onClick="users('<?php echo $row['id_instalation'];?>');">
        <?php echo $row['date'] . " " . $row['hour'] ?>
    </span>
    <span class="badge float-right badge-warning badge-pill" onClick="edit('<?php echo $row['id_instalation'];?>');">
       Editar
    </span>
    <span class="badge float-right badge-danger badge-pill" onClick="Delete('<?php echo $row['id_instalation'];?>');">
       Eliminar
    </span>
    </li>
<?php
    }
    echo '</ul>';
}