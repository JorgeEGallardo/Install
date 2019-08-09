<?php
            if($lvl==2){
            echo '<a href="dashboard.php" class="list-group-item list-group-item-action bg-light">Dashboard</a>';
            echo '<a href="index.php" class="list-group-item list-group-item-action bg-light">Pendientes</a>';
            }?>
            <a href="registro.php" class="list-group-item list-group-item-action bg-light">Asignados</a>
            <?php
            if($lvl==2){
            echo '<a href="calendario.php" class="list-group-item list-group-item-action bg-light">Completos</a>';
            echo '<a href="usuarios.php" class="list-group-item list-group-item-action bg-light">Usuarios</a>';
            }
            ?>
            <?php
            if($lvl==1)
            echo '<a href="evidencia.php" class="list-group-item list-group-item-action bg-light">Evidencias</a>';
            ?>  