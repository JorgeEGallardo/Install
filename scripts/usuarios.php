<?php
$user = $_POST["user"];
$lvl = $_POST["lvl"];
include "../config/conexion.php";
$con = new mysqli($SERVER, $USER, $PASSWORD, $BD);

    $sql    = "SELECT * FROM `users` WHERE id_level < 2";
    $stmt   = $con->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    echo '<ul class="list-group">';
    while ($row = $result->fetch_array()) {
        ?>

<li class="list-group-item  justify-content-between align-items-center">
    <?php echo $row['username'] ?>
    <span class="badge float-right badge-warning badge-pill"><?php echo $row['password']?></span>
    
    <span class="badge float-right badge-danger badge-pill">
       Eliminar
    </span>
</li>
<?php
    }
    echo '</ul>';
